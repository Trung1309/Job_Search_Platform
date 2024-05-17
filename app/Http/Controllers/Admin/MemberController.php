<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
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
        return redirect()->back()->with('success','Bạn đã xoá thành công ứng viên '.$user->ho_ten.'');
    }
}
