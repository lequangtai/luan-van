<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BinhluanEditRequest extends FormRequest
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
            'txtTitle' =>'required',
            'txtnoidung' =>'required',
            'newsImg' =>'required|image',
            ];

    }
        
    public function messages(){
        return[
        'txtTitle.required' => 'Vui lòng nhập tiêu đề',
        'txtnoidung.required' => 'Vui lòng nhập nội dung'
        'newsImg.required' => 'Vui lòng chọn hình ảnh',
        'newsImg.image' => 'Không đúng định dạng hình',
       
        ];
    }
}
