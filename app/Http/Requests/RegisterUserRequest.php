<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
            'sdt' => 'required|unique:users',
            'email' =>'required|unique:users|email',
            'password' => 'required|min:8',
            'kinh_nghiem' => 'required'
        ];
    }
    public function messages()
    {
        return [
            //
            'required' => ':attribute không được để trống',
            'email' => ':attribute phải là email',
            'unique' => ':attribute đã tồn tại',
            'min' => ':attribute tối thiểu 8 kí tự',
        ];
    }

    public function attributes()
    {
        return [
            //
            'ho_ten' => 'Họ và tên',
            'sdt' => 'Số điện thoại',
            'email' => 'Email',
            'password' => 'Mật khẩu',
            'kinh_nghiem' => 'Kinh nghiệm'
        ];
    }
}
