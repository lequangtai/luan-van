<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersAddRequest extends FormRequest
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
            'tendn' => 'required|unique:users,tendangnhap',
            'txtPass'=> 'required|min:4',
            'txtDiachi'=>'required',
            'txtEmail'=>'required|email|unique:users,email',
            'txtSDT'=>'required|min:9',
            'newsImg'=>'required'
        ];
    }
    public function messages()
    {
        return[
            'txtTen.required' => 'Vui lòng nhập tên họ tên',
            'tendn.required' => 'Vui lòng nhập tên đăng nhập',
            'tendn.unique' => 'Tên đăng nhập này đã tồn tại',
            'txtPass.required' => 'Vui lòng nhập password',
            'txtPass.min' => 'Password phải có ít nhất 4 kí tự',
            'txtDiachi.required' => 'Vui lòng nhập địa chỉ',
            'txtEmail.required' => 'Vui lòng nhập email',
            'txtEmail.email' => 'Vui lòng nhập đúng định dạng email',
            'txtEmail.unique' => 'Email này đã tồn tại rồi',
            'txtSDT.required' => 'Vui lòng nhập SĐT',
            'txtSDT.min' => 'SĐT phải có ít nhất 9 kí tự',
            'newsImg.required' => 'Vui lòng chọn hình ảnh',

        ];
    }
}
