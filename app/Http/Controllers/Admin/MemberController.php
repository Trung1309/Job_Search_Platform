<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

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
        return view('Admin.Member.my-meber',compact('title'));
    }

        public function deleteMember($member_id){
        $user = User::findOrFail($member_id);
        $user->delete();
        return redirect()->back()->with('success','Bạn đã xoá thành công');
    }
}
