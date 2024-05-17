<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'ten_the_loai' => 'required',

        ];
    }
    public function attributes()
    {
        return [
            //
            'ten_the_loai' => 'tên thế loại',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Vui lòng nhập :attribute ',
        ];
    }
}
