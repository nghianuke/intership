<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
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
            'name' => 'required|max:20',
            'email' => 'required',
            'content' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => "Tên không được để trống!",
            'name.max' => "Không được quá 20 ký tự!",            
            'email.required' => "Email không được để trống!",
            'content.required' => "Chưa nhập!",            
        ];
    }
}
