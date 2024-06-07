<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bussiness;
use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function index(){
        $districts = District::all();
        return view('company',compact('districts'));
    }

    public function getProfileCompany($company_id){
        $provinces = Province::all();
        $title = 'Thông tin công ty';
        $company = Bussiness::findOrFail($company_id);
        return view('Admin.Company.profile-company',compact('title','provinces','company'));
    }

    public function updateCompanyPost(Request $request, Bussiness $company, $company_id){
        $company = Bussiness::findOrFail($company_id);
        $request->validate([
            'ten_doanh_nghiep' => 'required',
            'email' => 'required',
            'sdt' => 'required',
            'so_duong' => 'required',
            'id_phuong_xa' => 'required',
            'quy_mo' => 'required',
            'gioi_thieu' => 'required'
        ],[
            'required' => ':attribute không được để trống',
        ],[
            'ten_doanh_nghiep' => 'Tên doanh nghiệp',
            'email' => 'Email',
            'sdt' => 'Số điện thoại',
            'so_duong' => 'Số đường',
            'id_phuong_xa' => 'Phường xã',
            'quy_mo' => 'Quy mô',
            'gioi_thieu' => 'Giới thiệu'
        ]);

        // Xử lý hình ảnh nếu có
        if ($request->hasFile('hinh_dai_dien')) {
            $image = $request->file('hinh_dai_dien');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/company/'),$imageName);
            // Xóa hình ảnh cũ nếu tồn tại
            if (!empty($company->hinh_dai_dien && file_exists(public_path('uploads/company/' . $company->hinh_dai_dien)))) {
                unlink(public_path('uploads/company/'.$company->hinh_dai_dien));
            }
            // Cập nhật thông tin sản phẩm với hình ảnh mới
            $company->update([
                'ten_doanh_nghiep' => $request->input('ten_doanh_nghiep'),
                'email' => $request->input('email'),
                'sdt' => $request->input('sdt'),
                'hinh_dai_dien' => $imageName,
                'so_duong' => $request->input('so_duong'),
                'id_phuong_xa' => $request->input('id_phuong_xa'),
                'quy_mo' => $request->input('quy_mo'),
                'gioi_thieu' => $request->input('gioi_thieu')
            ]);
        } else {
            // Nếu không có hình ảnh mới, chỉ cập nhật các trường khác
            $company->update($request->except('hinh_dai_dien'));
        }

        // Chuyển hướng sau khi cập nhật thành công
        return redirect()->back()->with('success', 'Đã cập nhật thông tin cá nhân thành công.');
    }

    public function getAllCompany(){
        $company = Bussiness::all();
        return view('company',compact('company'));
    }
}
