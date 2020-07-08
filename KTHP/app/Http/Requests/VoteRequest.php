<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VoteRequest extends FormRequest
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
            'star' => 'required',
            'title' => 'required',
            'comment' => 'required|max:255',   

        ];
    }
    public function messages()
    {
        return [
            'star.required' => 'Vui lòng chọn số sao',
            'title.required' => 'Vui lòng nhập tiêu đề',
            'comment.required'  => 'Vui lòng nhập comment',
            'comment.max' => 'Không được nhập quá 255 ký tự'
            

        ];
    }
}
