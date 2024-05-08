<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ADNewsController extends Controller
{
    //
    public function getAllMyPost(){
        $title = 'Tất cả tin tức của tôi';
        return view('Admin.Option.news-list',compact('title'));
    }

    public function addPost(){
        $title = 'Đăng tin tức';
        return view('Admin.Option.add-news',compact('title'));
    }
}
