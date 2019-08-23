<?php

namespace App\Http\Requests\comment;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'user_name' => 'required|max:255',
            'title' => 'required|max:255', 
            'message' => 'required|max:255',
            'star_rate' =>  'required',
        ];
    }

    public function messages()
    {
        return [
            'user_name.required' => 'Please Enter Your Name',
            'user_name.max' => 'Name max length 255 charater',
            'title.required' => 'Please enter Price Old Value',
            'message.required' => 'Please enter Price New Value',
            'star_rate.required' => 'Please check your star rate',
            'title.max' => 'Title max length 255 charater',
            'message.max' => 'Message max length 255 charater',
        ];
    }
}
