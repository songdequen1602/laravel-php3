<?php

namespace App\Http\Requests\product;

use Illuminate\Foundation\Http\FormRequest;

class ProductPost extends FormRequest
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
            'name' => 'required|max:255',
            'price_new' => 'required|numeric', 
            'price_old' => 'required|numeric', 
            'short_desc' => 'required|max:255', 
            'detail' => 'required', 
        ];
    }

     public function messages()
    {
        return [
            'name.required' => 'Please Enter Product Name',
            'name.max' => 'Name max length 255 charater',
            'price_old.required' => 'Please enter Price Old Value',
            'price_new.required' => 'Please enter Price New Value',
            'price_new.numeric' => 'Please enter Price New Value Numeric',
            'price_old.numeric' => 'Please enter Price old Value Numeric',
        ];
    }
}
