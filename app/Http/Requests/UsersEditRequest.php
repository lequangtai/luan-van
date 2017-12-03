<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersEditRequest extends FormRequest
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
            'txtTen' => 'required',
            'tendn' => 'required',
            'txtDiachi'=>'required',
            'txtEmail'=>'required',
            'txtSDT'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'txtTen.required' => 'Vui lòng nhập tên họ tên',
            'tendn.required' => 'Vui lòng nhập tên đăng nhập',
            'txtDiachi.required' => 'Vui lòng nhập địa chỉ',
            'txtEmail.required' => 'Vui lòng nhập email',
            'txtSDT.required' => 'Vui lòng nhập SĐT',
           

        ];
    }
}
