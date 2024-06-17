<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\JobRequest;
use App\Models\Bussiness;
use App\Models\Category;
use App\Models\Experience;
use App\Models\Job;
use App\Models\Language;
use App\Models\Level;
use App\Models\Position;
use App\Models\User;
use App\Models\Province;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminJobController extends Controller
{
    //
    public function getAllJob(){
        $jobs = Job::all();
        $title = 'Tất cả bài đăng tuyển dụng';
        return view('Admin.Job.job-list',compact('title','jobs'));
    }
    public function getAllMyJob(){
        $bussinessID = Auth()->user()->bussinesses->id_doanh_nghiep;
        $jobs = Job::where('id_doanh_nghiep',$bussinessID)->orderByDesc('created_at')->get();
        $title = 'Tất cả bài đăng tuyển dụng của công ty';
        return view('Admin.Job.job-list',compact('title','jobs'));
    }

    public function addJob(){
        $level = Level::all();
        $position = Position::all();
        $category = Category::all();
        $provinces = Province::all();
        $languages = Language::all();
        $skill = Skill::all();
        $experience = Experience::all();
        $id_phuong = Auth::user()->bussinesses->id_phuong_xa;
        $title = 'Đăng bài tuyển dụng';
        return view('Admin.Job.add-job',compact('id_phuong','title','provinces','level','position','category','skill','experience','languages'));
    }

    public function addJobPost(JobRequest $request){
        $bussinessID = Auth()->user()->bussinesses->id_doanh_nghiep;
        $skills = $request->input('ky_nang');
        $skillString = implode('/',$skills);
        $job = new Job([
            'ten_cong_viec' => $request->input('ten_cong_viec'),
            'mo_ta' => $request->input('mo_ta'),
            'ngay_het_han' => $request->input('ngay_het_han'),
            'id_the_loai' => $request->input('id_the_loai'),
            'muc_luong' => $request->input('muc_luong'),
            'id_trinh_do' => $request->input('id_trinh_do'),
            'id_doanh_nghiep' => $bussinessID,
            'id_vi_tri' => $request->input('id_vi_tri'),
            'id_kinh_nghiem' => $request->input('id_kinh_nghiem'),
            'id_phuong_xa' => $request->input('id_phuong_xa'),
            'ky_nang' => $skillString,
            'so_luong' => $request->input('so_luong'),
            'id_chung_chi' => $request->input('id_chung_chi')
        ]);
        $job->save();
        return redirect()->route('getAllMyJob')->with('success','Đăng bài tuyển dụng thành công');
    }
    public function updateJob($job_id){
        $level = Level::all();
        $position = Position::all();
        $category = Category::all();
        $provinces = Province::all();
        $languages = Language::all();
        $skill = Skill::all();
        $experience = Experience::all();
        $title = 'Cập nhật bài đăng';
        $job = Job::findOrFail($job_id);
        $skillString = explode('/',$job->ky_nang);
        return view('Admin.Job.edit-job',compact('title','provinces','level','position','category','experience','skill','job','skillString','languages'));
    }

    public function updateJobPost(JobRequest $request, $job_id){
        $level = Level::all();
        $position = Position::all();
        $category = Category::all();
        $provinces = Province::all();
        $languages = Language::all();
        $skill = Skill::all();
        $experience = Experience::all();
        $title = 'Cập nhật bài đăng';
        $job = Job::findOrFail($job_id);
        $skills = $request->input('ky_nang',[]);
        $skillString = implode('/',$skills);
        $job->update([
            'ten_cong_viec' => $request->input('ten_cong_viec'),
            'mo_ta' => $request->input('mo_ta'),
            'ngay_het_han' => $request->input('ngay_het_han'),
            'id_the_loai' => $request->input('id_the_loai'),
            'muc_luong' => $request->input('muc_luong'),
            'id_trinh_do' => $request->input('id_trinh_do'),
            'id_vi_tri' => $request->input('id_vi_tri'),
            'id_kinh_nghiem' => $request->input('id_kinh_nghiem'),
            'id_phuong_xa' => $request->input('id_phuong_xa'),
            'ky_nang' => $skillString,
            'so_luong' => $request->input('so_luong'),
            'id_chung_chi' => $request->input('id_chung_chi')
        ]);
        $request->session()->flash('success','Bạn đã cập nhật thành công');
        return view('Admin.Job.edit-job',compact('title','provinces','level','position','category','skill','job','experience','languages'));

    }

    public function deleteJob($job_id){
        $job = Job::findOrFail($job_id);
        $job->delete();
        return redirect()->back()->with('success','Bạn đã xoá thành công bài đăng có tiêu đề '. $job->ten_cong_viec .'');
    }
}
