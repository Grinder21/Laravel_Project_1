<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccessRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min:6|max:30'
        ];
    }

    public function attributes() {
        return [
            'name' => 'имя'
        ];
    }

    public function messages() {
        return [
            'email.required' => 'Поле почты обязательное',
            'password.required' => 'Поле пароля обязательное'
        ];
    }
}
