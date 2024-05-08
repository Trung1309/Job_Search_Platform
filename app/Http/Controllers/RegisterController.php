<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bussiness;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function indexClient(){
        return view('register_client');
    }


    public function indexCompany(){
        return view('register_company');
    }

    public function registerCompany(Request $request){
        $request->validate([
            'ten_doanh_nghiep' => 'required',
            'ho_ten' => 'required',
            'sdt' => 'required',
            'email' =>'required|unique:users|email',
            'mat_khau' => 'required|min:8',
            'ma_so_thue' => 'required'
        ], [
            'required' => ':attribute không được để trống',
            'email' => ':attribute phải là email',
            'unique' => ':attribute đã tồn tại',
            'min' => ':attribute tối thiểu 8 kí tự',

        ],[
            'ten_doanh_nghiep' => 'Tên công ty',
            'ho_ten' => 'Tên liên lac',
            'sdt' => 'Số điện thoại',
            'email' => 'Email',
            'mat_khau' => 'Mật khẩu',
            'ma_so_thue' => 'Mã số thuế'
        ]);

        $user = User::create([

            'ho_ten' => $request->input('ho_ten'),
            'sdt' => $request->input('sdt'),
            'email' => $request->input('email'),
            'mat_khau' => Hash::make($request->input('mat_khau')),
            'id_quyen'=> 2
        ]);

        $business = new Bussiness([
            'ten_doanh_nghiep' => $request->input('ten_doanh_nghiep'),
            'ma_so_thue' => $request->input('ma_so_thue'),
        ]);

        $user->bussinesses()->save($business);

        return redirect()->route('dang-nhap')->with('success','Đăng kí thành công tài khoản doanh nghiệp');

    }
}
