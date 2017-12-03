<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MonanAddRequest extends FormRequest
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
            'txtTitle' =>'required|unique:lv2_monan,tenmonan',
            'txtdongia' =>'required',
            'txtgioithieu' =>'required',
            'newsImg' =>'required|image',
            ];

    }
        
    public function messages(){
    	return[
    	'sltCate.required' => 'Vui lòng chọn danh mục',
    	'txtTitle.required' => 'Vui lòng nhập tên món ăn',
    	'txtTitle.unique' => 'Tên món ăn này đã tồn tại',
    	'txtdongia.required' => 'Vui lòng nhập đơn giá',
    	'txtgioithieu.required' => 'Vui lòng nhập giới thiệu món ăn',
    	'newsImg.required' => 'Vui lòng chọn hình',
        'newsImg.image' => 'Không đúng định dạng hình',
       
       
    	];
    }
}
