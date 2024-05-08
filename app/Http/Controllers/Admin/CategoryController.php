<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function getAllCategory(){
        $title = 'Danh sách thể loại công việc';
        return view('Admin.Option.level-list',compact('title'));
    }
    public function addCategory(){
        $title = 'Thêm thể loại công việc';
        return view('Admin.Option.add-level',compact('title'));
    }
}
