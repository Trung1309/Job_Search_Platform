<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\AcceptedJob;
use App\Mail\AcceptedJobPV;
use App\Mail\RejectedJob;
use App\Models\Bussiness;
use App\Models\Job;
use App\Models\Member;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MemberController extends Controller
{
    //
    public function getAllCompanyByAdmin(){
        $user = User::where('id_quyen',2)->get();
        $title = 'Quản lí tài khoản';
        return view('Admin.Member.company-member',compact('title','user'));
    }
    public function getAllMember(){
        $user = User::where('id_quyen',1)->get();
        $title = 'Tất cả ứng viên';
        return view('Admin.Member.member',compact('title','user'));
    }

    public function getAllMyMember(){
        $title = 'Tất cả ứng viên apply vào công ty';
        $company_id = Auth::user()->bussinesses->id_doanh_nghiep;
        $member = Member::where('id_doanh_nghiep',$company_id)->get();
        return view('Admin.Member.my-meber',compact('title','member','company_id'));
    }

        public function deleteMember($member_id){
        $user = User::findOrFail($member_id);
        $user->delete();
        return redirect()->back()->with('success','Bạn đã xoá thành công');
    }


    public function getMemberSuitableMyJob($job_id){

        $title = 'Ứng viên phù hợp';
        $job = Job::findOrFail(($job_id));
        $jobSkills = explode('/',$job->ky_nang);

        $candidates = User::where(function($query) use ($jobSkills){
            foreach($jobSkills as $skill){
                $query->where('ky_nang','LIKE','%'.$skill.'%');
            }

        })
        // ->where('id_kinh_nghiem',$job->id_kinh_nghiem)
        ->get();

        return view('Admin.Member.member-suitable',compact('title','candidates'));
    }

    public function getDetailMemberSuitable($member_id){
        $users = User::findOrFail($member_id);
        return view('Admin.Member.detail-member-suitable',compact('users'));

    }


    public function getMemberApplyJob($job_id){
        $title = 'Hồ sơ ứng tuyển';
        $job = Job::findOrFail($job_id);
        $member = Member::where('id_cong_viec',$job_id)->get();
        return view('Admin.Member.member-apply',compact('title','job','member'));
    }

    public function acceptMember(Request $request,$id)
    {
        $member = Member::findOrFail($id);
        $job = Job::findOrFail($member->id_cong_viec);
        $user = User::findOrFail($member->id_nguoi_dung);
        $company= Bussiness::findOrFail($member->id_doanh_nghiep);

        $request->validate([
            'ngay_phong_van' => 'required',
            'sdt' => 'required'
        ],
        [
            'required' => ':attribute không được để trống'
        ],[
            'ngay_phong_van' => 'ngày phỏng vấn',
            'sdt' => 'Số điện thoại liên hệ'
        ]
        );
        $ngay_phong_van = Carbon::parse($request->input('ngay_phong_van'));
        $ngay = $ngay_phong_van->format('d-m-Y');
        $gio = $ngay_phong_van->format('h:i A');
        $sdt = $request->input('sdt');
        $so_duong = $member->jobs->so_duong;
        $ward = $member->jobs->wards->ten_phuong_xa;
        $district = $member->jobs->wards->districts->ten_quan_huyen;
        $province = $member->jobs->wards->districts->provinces->ten_tinh_thanh;

        // Gửi email thông báo trúng tuyển
        Mail::to($user->email)->send(new AcceptedJob($user, $job, $ngay, $gio, $sdt,$company,$so_duong,$ward,$district,$province));

        // Giảm số lượng công việc đi 1
        // $job->so_luong -= 1;
        // $job->save();

        // Cập nhật trạng thái của ứng viên
        $member->trang_thai = 'Chờ phỏng vấn';
        $member->save();

        return redirect()->back()->with('success', 'Đã xác nhận ứng viên trúng tuyển và gửi email thành công.');
    }

    public function rejectedMember(Request $request,$id)
    {
        $member = Member::findOrFail($id);
        $job = Job::findOrFail($member->id_cong_viec);
        $user = User::findOrFail($member->id_nguoi_dung);
        $company= Bussiness::findOrFail($member->id_doanh_nghiep);


        // Gửi email thông báo trúng tuyển
        Mail::to($user->email)->send(new RejectedJob($user, $job, $company));

        // Giảm số lượng công việc đi 1
        // $job->so_luong -= 1;
        // $job->save();

        // Cập nhật trạng thái của ứng viên
        $member->trang_thai = 'Bị loại';
        $member->save();

        return redirect()->back()->with('success', 'Đã gửi email thông báo ứng viên không trúng tuyển phỏng vấn.');
    }

    public function acceptMemberWorking(Request $request,$id)
    {
        $member = Member::findOrFail($id);
        $job = Job::findOrFail($member->id_cong_viec);
        $user = User::findOrFail($member->id_nguoi_dung);
        $company= Bussiness::findOrFail($member->id_doanh_nghiep);

        $request->validate([
            'ngay_lam_viec' => 'required',
            'sdt' => 'required'
        ],
        [
            'required' => ':attribute không được để trống'
        ],[
            'ngay_lam_viec' => 'Ngày làm việc',
            'sdt' => 'Số điện thoại liên hệ'
        ]
        );
        $ngay_lam_viec = Carbon::parse($request->input('ngay_lam_viec'));
        $ngay = $ngay_lam_viec->format('d-m-Y');
        $gio = $ngay_lam_viec->format('h:i A');
        $sdt = $request->input('sdt');
        $so_duong = $member->jobs->so_duong;
        $ward = $member->jobs->wards->ten_phuong_xa;
        $district = $member->jobs->wards->districts->ten_quan_huyen;
        $province = $member->jobs->wards->districts->provinces->ten_tinh_thanh;

        // Gửi email thông báo trúng tuyển
        Mail::to($user->email)->send(new AcceptedJobPV($user, $job, $ngay, $gio, $sdt,$company,$so_duong,$ward,$district,$province));

        // Giảm số lượng công việc đi 1
        $job->so_luong -= 1;
        $job->save();

        // Cập nhật trạng thái của ứng viên
        $member->trang_thai = 'Trúng tuyển';
        $member->save();
        if ($job->so_luong == 0) {
            // Lấy tất cả các thành viên không trúng tuyển
            $notAcceptedMembers = Member::where('id_cong_viec', $job->id_cong_viec)
                                        ->where('trang_thai', '!=', 'Trúng tuyển')
                                        ->get();
            // Gửi email thông báo không trúng tuyển cho các thành viên không trúng tuyển
            foreach ($notAcceptedMembers as $notAcceptedMember) {
                $notAcceptedUser = User::findOrFail($notAcceptedMember->id_nguoi_dung);
                Mail::to($notAcceptedUser->email)->send(new RejectedJob($notAcceptedUser, $job,$company));
                $notAcceptedMember->trang_thai = 'Bị loại';
                $notAcceptedMember->save();
            }
        }


        return redirect()->back()->with('success', 'Đã xác nhận ứng viên trúng tuyển và gửi email thành công.');
    }


    public function memberSchedule($id_ung_vien){
        $member = Member::findOrFail($id_ung_vien);
        return view('Admin.Member.schedule-member',compact('member'));
    }

    public function memberScheduleWorking($id_ung_vien){
        $member = Member::findOrFail($id_ung_vien);
        return view('Admin.Member.schedule-member-working',compact('member'));
    }
}
