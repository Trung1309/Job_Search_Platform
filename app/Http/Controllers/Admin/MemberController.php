<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    public function getAllMember(){
        $title = 'Tất cả ứng viên';
        return view('Admin.Member.member',compact('title'));
    }

    public function getAllMyMember(){
        $title = 'Tất cả ứng viên apply vào công ty';
        return view('Admin.Member.my-meber',compact('title'));
    }
}
