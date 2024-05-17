<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\JobRequest;
use App\Models\Bussiness;
use App\Models\Category;
use App\Models\Job;
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
    public function getAllMyJob(){
        $bussinessID = Auth()->user()->bussinesses->id_doanh_nghiep;
        $bussiness = Job::where('id_doanh_nghiep',$bussinessID)->orderByDesc('created_at')->get();
        $title = 'Tất cả bài đăng tuyển dụng của công ty';
        return view('Admin.Job.myJob-post',compact('title','bussiness'));
    }

    public function addJob(){
        $level = Level::all();
        $position = Position::all();
        $category = Category::all();
        $provinces = Province::all();
        $skill = Skill::all();
        $title = 'Đăng bài tuyển dụng';
        return view('Admin.Job.add-job',compact('title','provinces','level','position','category','skill'));
    }

    public function addJobPost(JobRequest $request){
        $bussinessID = Auth()->user()->bussinesses->id_doanh_nghiep;
        $job = new Job([
            'ten_cong_viec' => $request->input('ten_cong_viec'),
            'mo_ta' => $request->input('mo_ta'),
            'ngay_het_han' => $request->input('ngay_het_han'),
            'id_the_loai' => $request->input('id_the_loai'),
            'muc_luong' => $request->input('muc_luong'),
            'id_phuong_xa' => $request->input('id_phuong_xa'),
            'id_trinh_do' => $request->input('id_trinh_do'),
            'id_doanh_nghiep' => $bussinessID,
            'id_vi_tri' => $request->input('id_vi_tri'),
            'ky_nang' => $request->input('ky_nang')
        ]);

        $job->save();
        return redirect()->route('getAllMyJob')->with('success','Đăng bài tuyển dụng thành công');
    }
    public function updateJob($job_id){
        $level = Level::all();
        $position = Position::all();
        $category = Category::all();
        $provinces = Province::all();
        $skill = Skill::all();
        $title = 'Cập nhật bài đăng';
        $job = Job::findOrFail($job_id);
        return view('Admin.Job.edit-job',compact('title','provinces','level','position','category','skill','job'));
    }

    public function updateJobPost(JobRequest $request, Job $job ,$job_id){
        $level = Level::all();
        $position = Position::all();
        $category = Category::all();
        $provinces = Province::all();
        $skill = Skill::all();

        $title = 'Cập nhật bài đăng';
        $bussinessID = Auth()->user()->bussinesses->id_doanh_nghiep;
        $job = Job::findOrFail($job_id);
        $job->update([
            'ten_cong_viec' => $request->input('ten_cong_viec'),
            'mo_ta' => $request->input('mo_ta'),
            'ngay_het_han' => $request->input('ngay_het_han'),
            'id_the_loai' => $request->input('id_the_loai'),
            'muc_luong' => $request->input('muc_luong'),
            'id_phuong_xa' => $request->input('id_phuong_xa'),
            'id_trinh_do' => $request->input('id_trinh_do'),
            'id_doanh_nghiep' => $bussinessID,
            'id_vi_tri' => $request->input('id_vi_tri'),
            'ky_nang' => $request->input('ky_nang')
        ]);
        $request->session()->flash('success','Bạn đã cập nhật thành công');
        return view('Admin.Job.edit-job',compact('title','provinces','level',
        'position','category','skill','job'));
    }

    public function deleteJob($job_id){
        $job = Job::findOrFail($job_id);
        $job->delete();
        return redirect()->back()->with('success','Bạn đã xoá thành công bài đăng có tiêu đề '. $job->ten_cong_viec .'');
    }
}
