<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LevelRequest extends FormRequest
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
            'ten_trinh_do' => 'required',

        ];
    }
    public function attributes()
    {
        return [
            //
            'ten_trinh_do' => 'tên trình độ',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Vui lòng nhập :attribute ',
        ];
    }
}
