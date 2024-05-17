<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function getAllCategory(){
        $title = 'Danh sách thể loại công việc';
        $category = Category::paginate(10);
        return view('Admin.Option.category-list',compact('title','category'))->with('i',(request()->input('page',1)-1)*10);
    }
    public function addCategory(){
        $title = 'Thêm thể loại công việc';
        return view('Admin.Option.add-category',compact('title'));
    }

    public function addCategoryPost(CategoryRequest $request){
        $category = new Category([
            'ten_the_loai' => $request->input('ten_the_loai'),
        ]);
        $category->save();
        return redirect()->route('getAllCategory')->with('success','Thêm mới thể loại thành công');
    }

    public function updateCategory($category_id){
        $title = 'Cập nhật vị trí công việc';
        $category = Category::findOrFail($category_id);
        return view('Admin.Option.edit-category',compact('title','category'));
    }

    public function updateCategoryPost(CategoryRequest $request, Category $category, $category_id){
        $category = Category::findOrFail($category_id);
        $category->update ([
            'ten_the_loai' => $request->input('ten_the_loai'),
        ]);
        return redirect()->back()->with('success','Cập nhật thể loại công việc thành công');
    }

    public function deleteCategory($category_id){
        $category = Category::findOrFail($category_id);
        $category->delete();
        return redirect()->back()->with('success','Đã xoá thành công thể loại ' . $category->ten_the_loai .'');
    }
}
