<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
           'name' => 'required',
            'description' => 'required',
            'thumbnail' => 'required',
            // 'product_code' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'author' => 'required',
            'size' => 'required',
            'translator' => 'required',
            'cover_type' => 'required',
            'pages' => 'required',
            'sku' => 'required',
            'publishing' => 'required',
            'issuing' => 'required'
        ];
    }
   public function messages()
    {
        return [
            'name.required' => 'A name is required',
            'description.required'  => 'A description is required',
            'thumbnail.required'  => 'A thumbnail is required',
            // 'product_code.required'  => 'A product_code is required',
            'price.required'  => 'A price is required',
            'quantity.required'  => 'A quantity is required',
            'author.required'  => 'A author is required',
            'size.required'  => 'A size is required',
            'translator.required'  => 'A translator is required',
            'cover_type.required'  => 'A cover_type is required',
            'pages.required'  => 'A pages is required',
            'sku.required'  => 'A sku is required',
            'publishing.required'  => 'A publishing is required',
            'issuing.required'  => 'A issuing is required'

        ];
    }

}
