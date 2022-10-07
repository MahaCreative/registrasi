<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'nim' => 'required|numeric|min:12',
            'username' => 'required|alpha_num|min:8',
            'password' => 'required|confirmed|min:6',
            'email' => 'email',
            // 'avatar' => 'required|mimes:png,jpg,jfif'
        ];
    }
}