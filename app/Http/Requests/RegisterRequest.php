<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'ten_doanh_nghiep' => 'required',
            'ho_ten' => 'required',
            'sdt' => 'required|unique:users',
            'email' =>'required|unique:users|email',
            'password' => 'required|min:8',
            'ma_so_thue' => 'required|unique:bussinesses',
        ];
    }

    public function messages(){
        return [
            'required' => ':attribute không được để trống',
            'email' => ':attribute phải là email',
            'unique' => ':attribute đã tồn tại',
            'min' => ':attribute tối thiểu 8 kí tự',
        ];
    }

    public function attributes(){
        return[
            'ten_doanh_nghiep' => 'Tên công ty',
            'ho_ten' => 'Họ và tên',
            'sdt' => 'Số điện thoại',
            'email' => 'Email',
            'password' => 'Mật khẩu',
            'ma_so_thue' => 'Mã số thuế',
        ];
    }
}
