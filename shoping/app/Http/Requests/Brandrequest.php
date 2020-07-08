<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Brandrequest extends FormRequest
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
            'name' => 'required|unique:brands',
             'description'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'name.unique'=>'Name is exist',
             'description.required' => 'description is required',
        ];
    }
}
