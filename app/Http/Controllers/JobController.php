<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\District;
use App\Models\Experience;
use App\Models\Job;
use App\Models\Level;
use App\Models\Member;
use App\Models\Position;
use App\Models\User;
use App\Models\Ward;
use Carbon\Carbon;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    //
    public function getAllJobPage()
    {
        $job = Job::orderByDesc('created_at')->paginate(10);

        return view('job', compact('job'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function showDetailJob($job_id)
    {
        $job = Job::findOrFail($job_id);
        $otherJobs = Job::where('id_doanh_nghiep', $job->id_doanh_nghiep)
            ->where('id_cong_viec', '!=', $job->id_cong_viec)
            ->orderByDesc('created_at')
            ->get();

        return view('detail_job', compact('job', 'otherJobs'));
    }

    public function applyJob($job_id)
    {
        $job = Job::findOrFail($job_id);
        return view('Admin.Member.apply', compact('job'));
    }

    public function applyJobPost(Request $request, $job_id)
    {
        $job = Job::findOrFail($job_id);
        $job_id = $job->id_cong_viec;
        $user_id = Auth::user()->id_nguoi_dung;
        $company_id = $job->id_doanh_nghiep;


        $request->validate([
            'cv' => 'required|mimes:pdf'
        ], [
            'required' => ':attribute không được để trống',
            'mimes' => 'File phải là :values'
        ], [
            'cv' => 'Hồ sơ'
        ]);
        if ($request->hasFile('cv')) {
            $cv = $request->file('cv');
            $cvName = time() . '.' . $cv->getClientOriginalExtension();
            $cv->move(public_path('uploads/member/CV/'), $cvName);

            // Xóa hình ảnh cũ nếu tồn tại
            if (!empty($job->cv && file_exists(public_path('uploads/member/CV/' . $job->cv)))) {
                unlink(public_path('uploads/member/CV/' . $job->cv));
            }
        }

        $member = Member::create([
            'id_cong_viec' => $job_id,
            'id_nguoi_dung' => $user_id,
            'id_doanh_nghiep' => $company_id,
            'trang_thai' => 'Đang chờ',
            'cv' => $cvName
        ]);
        $member->save();
        return redirect()->back()->with('success', 'Bạn đã gửi hồ sơ thành công chúng tôi sẽ phản hồi sớm nhất về email của bạn ');
    }

    public function filterJob(Request $request)
    {
        $jobs = Job::query();
        if ($request->input('id_the_loai')) {
            $jobs = $jobs->where('id_the_loai', $request->id_the_loai);

        }
        if ($request->input('id_vi_tri')) {
            $jobs = $jobs->where('id_vi_tri', $request->id_vi_tri);

        }
        if ($request->input('id_trinh_do')) {
            $jobs = $jobs->where('id_trinh_do', $request->id_trinh_do);

        }
        if ($request->input('id_kinh_nghiem')) {
            $jobs = $jobs->where('id_kinh_nghiem', $request->id_kinh_nghiem);

        }
        if ($request->input('id_tinh_thanh')) {
            $jobs = $jobs->whereHas('wards.districts.provinces', function ($q) use ($request) {
                $q->where('id_tinh_thanh', $request->input('id_tinh_thanh'));
            });

        }
        $ky_nang = $request->input('ky_nang', []);
        if ($request->input('ky_nang',[])){
            $jobs = $jobs->where(function($query) use ($ky_nang){
                foreach ($ky_nang as $skill) {
                    $query->orWhere('ky_nang', 'LIKE', '%' . $skill . '%');
                }
            });
            // $skill = $request->input('ky_nang', []);
            // foreach ($skill as $value) {
            //     $jobs = $jobs->orWhere('ky_nang', 'LIKE', "%$value%");
            // }
        }
        $jobs = $jobs->get();
        $selectedCategoryID = $request->input('id_the_loai');
        $selectedPositionID = $request->input('id_vi_tri');
        $selectedLevelID = $request->input('id_trinh_do');
        $selectedExperienceID = $request->input('id_kinh_nghiem');
        $selectedProvinceID = $request->input('id_tinh_thanh');
        return view('job-filter', compact('jobs', 'selectedCategoryID', 'selectedPositionID', 'selectedLevelID', 'selectedExperienceID', 'selectedProvinceID'));
    }


    public function getJobSuitable(){
        $user = Auth::user();
        $userSkills = explode('/',$user->ky_nang);
        $userProvinceId = $user->wards->districts->provinces->id_tinh_thanh;
        $job = Job::where(function($query) use ($userSkills){
            foreach($userSkills as $skill){
                $query->where('ky_nang','LIKE','%'.$skill.'%');
            }
        })
        // ->whereHas('wards.districts.provinces', function($query) use ($userProvinceId) {
        //     $query->where('id_tinh_thanh', $userProvinceId);
        // })
        //->where('id_kinh_nghiem',$job->id_kinh_nghiem)
        ->paginate();


        return view('job-suitable',compact('job'))->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
