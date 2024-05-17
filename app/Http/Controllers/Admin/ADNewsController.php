<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdNewsController extends Controller
{
    //
    public function getAllMyNews(){
        $title = 'Tất cả tin tức của tôi';
        $userID = Auth::user()->id_nguoi_dung;
        $news = News::where('id_nguoi_dung',$userID)->get();
        return view('Admin.News.news-list',compact('title','news'));
    }
    public function addNews(){
        $title = 'Đăng bài tin tức';
        return view('Admin.News.add-news',compact('title'));
    }
    public function addNewsPost(NewsRequest $request){
        if ($request->hasFile('hinh_dai_dien')) {
            $image = $request->file('hinh_dai_dien');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/news'), $imageName);
        }

        $news = new News([
            'tieu_de' => $request->input('tieu_de'),
            'noi_dung' => $request->input('noi_dung'),
            'hinh_dai_dien' => isset($imageName) ? $imageName:null,
            'id_nguoi_dung' => Auth::user()->id_nguoi_dung
        ]);
        $news->save();
        return redirect()->route('getAllMyNews')->with('success','Đăng tin tức thành công');
    }
    public function updateNews($news_id){
        $title = 'Cập nhật tin tức của bạn';
        $news = News::findOrFail($news_id);
        return view('Admin.News.edit-news',compact('title','news'));
    }

    public function updateNewsPost(News $news, NewsRequest $request, $news_id){
        $news = News::findOrFail($news_id);

    // Xử lý hình ảnh nếu có
    if ($request->hasFile('hinh_dai_dien')) {
        $image = $request->file('hinh_dai_dien');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads/news/'), $imageName);

        // Xóa hình ảnh cũ nếu tồn tại
        if (file_exists(public_path('uploads/news/' . $news->hinh_dai_dien))) {
            unlink(public_path('uploads/news/' . $news->hinh_dai_dien));
        }

        // Cập nhật thông tin sản phẩm với hình ảnh mới
        $news->update([
            'tieu_de' => $request->input('tieu_de'),
            'noi_dung' => $request->input('noi_dung'),
            'hinh_dai_dien' => $imageName
        ]);
    } else {
        // Nếu không có hình ảnh mới, chỉ cập nhật các trường khác
        $news->update($request->except('hinh_dai_dien'));
    }

    // Chuyển hướng sau khi cập nhật thành công
    return redirect()->back()->with('success', 'Đã cập nhật tin tức thành công.');
    }

    public function deleteNews($news_id){
        $news = News::findOrFail($news_id);

        // Xóa hình ảnh liên kết với sản phẩm (nếu có)
        if (file_exists(public_path('uploads/news/' . $news->hinh_dai_dien))) {
            unlink(public_path('uploads/news/' . $news->hinh_dai_dien));
        }

        // Xóa sản phẩm từ cơ sở dữ liệu
        $news->delete();

        // Chuyển hướng sau khi xóa thành công
        return redirect()->route('getAllMyNews')->with('success', 'Đã xóa tin tức thành công.');
        }
    }

