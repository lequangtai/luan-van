<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SinginRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'txttendn' =>'required',
            'pass' =>'required|min:4|max:20',
           
        ];
    }
    public function messages()
    {
        return [
            'txttendn.required' => 'Vui Lòng Nhập Tên',
            'pass.required'  => 'Vui Lòng Nhập MK',
            'pass.min'  => 'Mật khẩu phải có ít nhất 4 kí tự',
            'pass.max'  => 'Mật khẩu không quá 20 kí tự',
           
        ];
    }
}
