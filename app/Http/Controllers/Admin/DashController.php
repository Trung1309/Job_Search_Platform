<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bussiness;
use App\Models\Job;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashController extends Controller
{
    //
    public function index(){
        $userCount = User::where('id_quyen',1)->count();
        $bussinessCount = Bussiness::count();
        $jobCount = Job::count();
        $newCount = News::count();
        return view('Admin.index',compact('userCount','bussinessCount','jobCount','newCount'));
    }
}
