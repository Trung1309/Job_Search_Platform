<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
                $query->orWhere('ky_nang','LIKE','%' .$skill.'%');
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
}
