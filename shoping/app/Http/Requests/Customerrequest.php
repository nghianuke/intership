<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Customerrequest extends FormRequest
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
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'paddress' => 'required',
            'physicaladdress' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'firstname.required' => 'First name is required',
            'lastname.required'  => 'Last name is required',
            'email.required'  => 'Email is required',
            'email.email'  => 'Invalid email format',
            'paddress.required'  => 'Postal address is required',
            'physicaladdress.required'  => 'Physical address is required',
        ];
    }
}
