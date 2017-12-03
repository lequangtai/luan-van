<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImgMonanEditRequest extends FormRequest
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
            'sltCate' =>'required',
            'newsImg' =>'required',
         
            ];

    }
        
    public function messages(){
        return[
        'sltCate.required' => 'Vui lòng chọn danh mục món ăn',
        'newsImg.required' => 'Vui lòng chọn hình',
        
       
       
        ];
    }
}
