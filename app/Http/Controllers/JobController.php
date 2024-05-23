<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Province;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //
    public function index(){
        $job = Job::orderByDesc('created_at')->paginate(10);
        return view('job',compact('job'))->with('i',(request()->input('page',1)-1)*10);
    }
}
