<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'tieu_de' => 'required',
            'noi_dung' => 'required',
            'hinh_dai_dien' => 'image'

        ];
    }
    public function attributes()
    {
        return [
            //
            'tieu_de' => 'Tiêu đề',
            'noi_dung' => 'Nội dung',
            'hinh_dai_dien' => 'Hình đại diện'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được để trông',
        ];
    }
}
