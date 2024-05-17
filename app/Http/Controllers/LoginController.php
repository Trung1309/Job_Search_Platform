<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Middleware\ClearCacheMiddleware;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function indexLogin(){
        return view('login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'required' => 'Vui lòng nhập :attribute của bạn',
        ],[
            'email' => 'email',
            'password' => 'mật khẩu'
        ]);
        $credentials = $request->only('email','password');
        if(Auth::attempt(['email' => $request->input('email'), 'password'=>$request->input('password')])){
            $user = Auth::user();
            if ($user->id_quyen == 1) {
                return redirect()->route('home');
            } elseif ($user->id_quyen == 2)  {
                return redirect()->route('admin-home');
            }
        }else{
            return redirect()->back()->with('error','Tài khoản mật khẩu không chính xác');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
