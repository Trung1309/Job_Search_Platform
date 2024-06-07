<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MemberRequest;
use App\Http\Requests\UserRequest;
use App\Models\Experience;
use App\Models\Language;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\District;
use App\Models\Ward;

class ProfileController extends Controller
{
    //
    public function getProfile(){
        $provinces = Province::all();
        $experiences = Experience::all();
        $languages = Language::all();
        $skill = Skill::all();
        return view('Client.profile',compact('provinces','experiences','skill','languages'));
    }

    public function updateProfileUserPost(UserRequest $request, $user_id){
        $users = User::findOrFail($user_id);
        $skills = $request->input('ky_nang');
        $skillString = implode(' / ',$skills);
        $dataToUpdate = [
            'ho_ten' => $request->input('ho_ten'),
            'ngay_sinh' => $request->input('ngay_sinh'),
            'cccd' => $request->input('cccd'),
            'id_phuong_xa' => $request->input('id_phuong_xa'),
            'id_kinh_nghiem' => $request->input('id_kinh_nghiem'),
            'ky_nang' => $skillString,
            'id_chung_chi' => $request->input('id_chung_chi')
        ];

        if ($request->hasFile('hinh_dai_dien')) {
            $image = $request->file('hinh_dai_dien');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/users/'),$imageName);

            // Xóa hình ảnh cũ nếu tồn tại
            if (!empty($users->hinh_dai_dien && file_exists(public_path('uploads/company/' . $users->hinh_dai_dien)))) {
                unlink(public_path('uploads/users/'.$users->hinh_dai_dien));
            }
            $dataToUpdate['hinh_dai_dien'] = $imageName;
        }

        if ($request->hasFile('cv')) {
            $cv = $request->file('cv');
            $cvName = time().'.'.$cv->getClientOriginalExtension();
            $cv->move(public_path('uploads/member/CV/'),$cvName);

            // Xóa hình ảnh cũ nếu tồn tại
            if (!empty($users->cv && file_exists(public_path('uploads/member/CV/' . $users->cv)))) {
                unlink(public_path('uploads/member/CV/'.$users->cv));
            }
            $dataToUpdate['cv'] = $cvName;
        }
        $users->update($dataToUpdate);
        // Chuyển hướng sau khi cập nhật thành công
        return redirect()->back()->with('success', 'Đã cập nhật thông tin cá nhân thành công');
    }

}
