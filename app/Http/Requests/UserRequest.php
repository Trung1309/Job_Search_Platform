<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'ho_ten' => 'required',
            'ngay_sinh' => 'required',
            'cccd' => 'required',
            'id_phuong_xa' => 'required',
            'id_kinh_nghiem' => 'required',
            'ky_nang' => 'required',
            'hinh_dai_dien' => 'image|mimes:png,jpg,gif,jpeg',
            'cv' => 'mimes:pdf'
        ];
    }

    public function attributes(){
        return [
            'ho_ten' => 'Họ và tên',
            'ngay_sinh' => 'Ngày sinh',
            'cccd' => 'CCCD',
            'id_phuong_xa' => 'Phường xã',
            'id_kinh_nghiem' => 'Kinh nghiệm',
            'ky_nang' => 'Kỹ năng',
            'cv' => "CV",
            'hinh_dai_dien' => "Hình đại diện"
        ];
}

    public function messages(){
        return [
            'required' => ':attribute không được để trống.',
            'mimes' => ':attribute phải là file :values',
            'image' => 'File này phải là file hình ảnh'
        ];
    }
}
