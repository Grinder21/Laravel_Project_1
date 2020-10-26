<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unuqie:users|email',
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
            'first_name.required' => 'Поле имя является обязательным!',
            'last_name.required' => 'Поле фамилия является обязательным!',
            'email.required' => 'Поле почты обязательное',
            'password.required' => 'Поле пароля обязательное'
        ];
    }
}
