<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlidebarAddRequest extends FormRequest
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
            'newsImg' =>'required|image',
            ];

    }
        
    public function messages(){
    	return[
    	'newsImg.required' => 'Vui lòng chọn hình',
        'newsImg.image' => 'Không đúng định dạng hình',
       
       
    	];
    }
}
