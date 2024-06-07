<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'ten_cong_viec' => 'required',
            'mo_ta' => 'required',
            'ngay_het_han' => 'required',
            'id_the_loai' => 'required',
            'muc_luong' => 'required',
            'id_trinh_do' => 'required',
            'id_vi_tri' => 'required',
            'ky_nang' => 'required',
            'id_kinh_nghiem' => 'required',
            'id_phuong_xa' => 'required',
            'so_luong' => 'required',
            'id_chung_chi' => 'required'

        ];
    }

    public function messages(){
        return [
            'required' => ':attribute không được để trông'
        ];
    }

    public function attributes(){
        return [
            'ten_cong_viec' => 'Tiêu đề công việc',
            'mo_ta' => 'Mô tả',
            'ngay_het_han' => 'Ngày hết hạn',
            'id_the_loai' => 'Thể loại',
            'muc_luong' => 'Mức lương',
            'id_trinh_do' => 'Trình độ',
            'id_vi_tri' => 'Vị trí ',
            'ky_nang' => 'Kỹ năng',
            'id_kinh_nghiem' => 'Số năm kinh nghiệm',
            'id_phuong_xa' => 'Phường xã',
            'so_luong' => 'Số lượng',
            'id_chung_chi' => 'Chứng chỉ'
        ];
    }
}
