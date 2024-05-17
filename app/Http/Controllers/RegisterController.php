<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bussiness;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;


class RegisterController extends Controller
{


    public function indexCompany(){
        return view('register_company');
    }

    public function indexClient(){
        return view('register_client');
    }

    public function registerCompany(RegisterRequest $request){
        $user = User::create([
            'ho_ten' => $request->input('ho_ten'),
            'sdt' => $request->input('sdt'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'id_quyen'=> 2
        ]);

        $business = new Bussiness([
            'ten_doanh_nghiep' => $request->input('ten_doanh_nghiep'),
            'ma_so_thue' => $request->input('ma_so_thue'),
        ]);

        $user->bussinesses()->save($business);

        return redirect()->route('indexLogin')->with('success','Đăng kí thành công tài khoản doanh nghiệp');

    }

    public function registerClient(Request $request){
        $request -> validate([
            'ho_ten' => 'required',
            'sdt' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ],[
            'required' => 'Vui lòng nhập :attribute',
            'unique' => ':attribute đã tồn tại trong hệ thống',
        ],[
            'ho_ten' => 'họ và tên',
            'sdt' => 'số điện thoại',
            'email' => 'email',
            'password' => 'mật khẩu'
        ]);
        $user = User::create([
            'ho_ten' => $request->input('ho_ten'),
            'sdt' => $request->input('sdt'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'id_quyen'=> 1
        ]);
        $user->save();
        return redirect()->route('indexLogin')->with('success','Đăng kí thành công tài khoản ứng viên');
    }


}
