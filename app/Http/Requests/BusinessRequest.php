<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusinessRequest extends FormRequest
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
            'category'          => 'required',
            'company_name'      => 'required|min:2',
            'cost'              => 'required|integer',
            'monthly_income'    => 'required|integer',
            'description'       => 'required',
            'city'              => 'required|min:5'
        ];
    }
    public function messages()
    {
        return [
            'category.required'          => 'Обязательное поле',
            'company_name.required'      => 'Обязательное поле',
            'company_name.min'           => 'Введите не менее 2 символов',
            'cost.required'              => 'Обязательное поле',
            'cost.integer'               => 'Введите только цифры',
            'monthly_income.required'    => 'Обязательное поле',
            'monthly_income.integer'     => 'Введите только цифры',
            'description.required'       => 'Обязательное поле',
            'city.required'              => 'Обязательное поле',
            'city.min'                   => 'Введите не менее 100 символов'
        ];
    }

}
