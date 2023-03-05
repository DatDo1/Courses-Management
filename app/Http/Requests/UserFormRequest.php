<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
            'email' => 'required|unique:accounts',
            'password' => 'required|min:8|max:16',
            'confirm-password' => 'required|min:8|max:16'
        ];
    }
    public function attributes(){
        return ['confirm-password' => 'confirm password'];
    }
    public function messages(){
        return [
            'required' => 'The :attribute field is required.',
            'unique' => 'The :attribute has been used.',
            'min' => 'The :attribute field is smaller than 8 characters.',
            'max' => 'The :attribute field is larger than 16 characters.',
        ];
    }
}
