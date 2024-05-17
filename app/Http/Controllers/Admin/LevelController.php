<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LevelRequest;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    //
    public function getAllLevel(){
        $title = 'Danh sách trình độ';
        $level = Level::paginate(10);
        return view('Admin.Option.level-list',compact('title','level'))->with('i',(request()->input('page',1)-1)*10);
    }
    public function addLevel(){
        $title = 'Thêm trình độ học vấn';
        return view('Admin.Option.add-level',compact('title'));
    }

    public function addLevelPost(LevelRequest $request){
        $level = new Level([
            'ten_trinh_do' => $request->input('ten_trinh_do'),
        ]);
        $level->save();
        return redirect()->route('getAllLevel')->with('success','Thêm mới trình độ thành công');
    }

    public function updateLevel($level_id){
        $title = 'Cập nhật vị trí công việc';
        $level = Level::findOrFail($level_id);
        return view('Admin.Option.edit-level',compact('title','level'));
    }

    public function updateLevelPost(LevelRequest $request, Level $level, $level_id){
        $level = Level::findOrFail($level_id);
        $level->update ([
            'ten_trinh_do' => $request->input('ten_trinh_do'),
        ]);
        return redirect()->back()->with('success','Cập nhật trình độ học vấn thành công');
    }
    public function deleteLevel($level_id){
        $level = Level::findOrFail($level_id);
        $level->delete();
        return redirect()->back()->with('success','Đã xoá thành công trình độ ' . $level->ten_trinh_do .'');
    }
}
