<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //
    public function index(){
        $provinces = Province::all();
        return view('job',compact('provinces'));
    }
}
