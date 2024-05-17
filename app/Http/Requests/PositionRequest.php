<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PositionRequest extends FormRequest
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
            'ten_vi_tri' => 'required',
            'mo_ta' => 'required',
        ];
    }
    public function attributes()
    {
        return [
            //
            'ten_vi_tri' => 'tên vị trí công việc',
            'mo_ta' => 'mô tả công việc'

        ];
    }

    public function messages()
    {
        return [
            'required' => 'Vui lòng nhập :attribute ',
        ];
    }
}
