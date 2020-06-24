<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUser extends FormRequest
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
            'name' => 'bail|required|max:100',
            'email' => 'bail|required|unique:users',
            'password' => 'bail|required|between:8,20',
            'password_confirmation' => 'bail|required|same:password'
        ];
    }

    public function messages() {
        return [
            'password_confirmation.same' => 'The password confirmation does not match.'
        ];
    }
}
