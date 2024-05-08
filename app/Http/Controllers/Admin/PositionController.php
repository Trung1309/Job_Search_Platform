<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    //
    public function getAllPositon(){
        $title = 'Danh sách vị trí công việc';
        return view('Admin.Option.job-position',compact('title'));
    }
    public function addPosition(){
        $title = 'Thêm mới vị trí công việc';
        return view('Admin.Option.add-position',compact('title'));
    }

}
