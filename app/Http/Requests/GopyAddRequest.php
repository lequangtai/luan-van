<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GopyAddRequest extends FormRequest
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
            'txtname' =>'required',
            'txtemail' =>'required|email',
            'txtmessage' =>'required',
            ];

    }
        
    public function messages(){
    	return[
    	'txtname.required' => 'Vui lòng nhập họ tên',
    	'txtemail.required' => 'Vui lòng nhập email',
        'txtemail.email' => 'Vui lòng nhập đúng định dạng email',
    	'txtmessage.required' => 'Vui lòng nhập nội dung',
       
    	];
    }
}
