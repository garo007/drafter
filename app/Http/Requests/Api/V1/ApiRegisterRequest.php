<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

class ApiRegisterRequest extends FormRequest
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
            'phone' => 'required|min:10|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required| min:4|confirmed',
            'password_confirmation' => 'required| min:4',
            'policy' => 'required'
        ];
    }
    public function messages()
    {
        return[
            'phone.required' => 'Обязательное поле',
            'phone.unique' => 'Пользователь с таким номером существует на платформе',
            'email.unique' => 'Пользователь с такой почтой существует на платформе',
            'email.required' => 'Обязательное поле',
            'password.required' => 'Обязательное поле',
            'password.confirmed' => 'Пароли не совпадают',
            'policy.required' => 'Подтвердите',
        ];
    }
}
