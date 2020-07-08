<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'title' => 'required|max:255',            
            'content' => 'required',
            'status' => 'required'
        ];
    }
    public function messages()
    {
        return [
                      
            'title.required' => " Title không được để trống!",
            'content.required' => "Chưa nhập!",
            'status.required' => "Status không được để trống!"             
        ];
    }
}
