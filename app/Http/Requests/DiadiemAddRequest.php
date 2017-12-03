<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiadiemAddRequest extends FormRequest
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
            'sltCate1' =>'required',
            'txttendiadiem' =>'required',
            'txtdiachi' =>'required|unique:lv2_diadiem,diachi',
            'txtdienthoai' =>'required|min:9|unique:lv2_diadiem,dienthoai',
            'email' =>'required|email|unique:lv2_diadiem,email',
            'sltCate2' =>'required',
            'txtgiomc' =>'required',
            'txtgiodc' =>'required',
            // 'txtgiatn' =>'required|before:giacaonhat',
            'txtgiatn' =>'required',
            'txtgiacn' =>'required',
            'txtmota' =>'required',
            'newsImg' =>'required|image',
            ];

    }
        
    public function messages(){
    	return[
    	'sltCate1.required' => 'Vui lòng chọn tỉnh thành',
    	'txttendiadiem.required' => 'Vui lòng nhập tên địa điểm',
        'txtdiachi.required' => 'Vui lòng nhập địa chỉ',
        'txtdiachi.unique' => 'địa chỉ này đã tồn tại',
        'txtdienthoai.required' => 'Vui lòng nhập số điện thoại',
        'txtdienthoai.unique' => 'số điện thoại này đã tồn tại',
        'txtdienthoai.min' => 'số điện thoại phải có ít nhất 9 chữ số',
        'sltCate2.required' => 'Vui lòng chọn quận huyện',
    	'txtgiomc.required' => 'Vui lòng nhập giờ mở cửa',
    	'txtgiodc.required' => 'Vui lòng nhập giờ đóng cửa',
        'txtgiatn.required' => 'Vui lòng nhập giá thấp nhất',
        // 'txtgiatn.before' => 'Giá thấp nhất phải nhỏ hơn giá cao nhất',
        'txtgiacn.required' => 'Vui lòng nhập giá cao nhất',
        'txtmota.required' => 'Vui lòng nhập mô tả',
    	'newsImg.required' => 'Vui lòng chọn hình',
        'newsImg.image' => 'Không đúng định dạng hình',
       
       
    	];
    }
}
