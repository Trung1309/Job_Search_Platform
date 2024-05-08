<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    //
    public function getAllLevel(){
        $title = 'Danh sách trình độ';
        return view('Admin.Option.level-list',compact('title'));
    }
    public function addLevel(){
        $title = 'Thêm trình độ học vấn';
        return view('Admin.Option.add-level',compact('title'));
    }
}
