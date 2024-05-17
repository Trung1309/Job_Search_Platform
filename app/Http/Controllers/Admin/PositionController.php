<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Position;
use App\Http\Requests\PositionRequest;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    //
    public function __construct() {

    }
    public function getAllPositon(){
        $title = 'Danh sách vị trí công việc';
        $position = Position::paginate(10);
        return view('Admin.Option.job-position',compact('title','position'))->with('i',(request()->input('page',1)-1)*10);
    }
    public function addPosition(){
        $title = 'Thêm mới vị trí công việc';
        return view('Admin.Option.add-position',compact('title'));
    }

    public function addPositionPost(PositionRequest $request){

        $postion = new Position([
            'ten_vi_tri' => $request->input('ten_vi_tri'),
            'mo_ta' => $request->input('mo_ta'),
        ]);

        $postion->save();
        return redirect()->route('getAllPositon')->with('success','Thêm mới vị trí thành công');
    }

    public function updatePosition($position_id){
        $title = 'Cập nhật vị trí công việc';
        $position = Position::findOrFail($position_id);
        return view('Admin.Option.edit-position',compact('title','position'));
    }

    public function updatePositionPost(PositionRequest $request, Position $position, $position_id){
        $position = Position::findOrFail($position_id);
        $position->update ([
            'ten_vi_tri' => $request->input('ten_vi_tri'),
            'mo_ta' => $request->input('mo_ta'),
        ]);
        return redirect()->back()->with('success','Cập nhật vị trí công việc thành công');
    }

    public function deletePosition($position_id){
        $position = Position::findOrFail($position_id);
        $position->delete();
        return redirect()->back()->with('success','Đã xoá thành công vị trí ' . $position->ten_vi_tri .'');
    }

}
