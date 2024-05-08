<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminJobController extends Controller
{
    //
    public function getAllMyJob(){
        $title = 'Tất cả bài đăng tuyển dụng của công ty';
        return view('Admin.Job.myJob-post',compact('title'));
    }

    public function addJob(){
        $title = 'Đăng bài tuyển dụng';
        return view('Admin.Job.add-job',compact('title'));
    }


}
