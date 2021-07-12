<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

class InvestmentRequest extends FormRequest
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
            'am_required'       => 'required|integer',
            'percentage'        => 'required|integer',
            'description'       => 'required',
            'objectives'        => 'required|min:5'
        ];
    }
    public function messages()
    {
        return   [
            'category.required'          => 'Обязательное поле',
            'company_name.required'      => 'Обязательное поле',
            'company_name.min'           => 'Введите не менее 2 символов',
            'am_required.required'       => 'Обязательное поле',
            'am_required.integer'        => 'Введите только цифры',
            'percentage.required'        => 'Обязательное поле',
            'percentage.integer'         => 'Введите только цифры',
            'description.required'       => 'Обязательное поле',
//            'description.min'            => 'Введите не менее 100 символов',
            'objectives.required'        => 'Обязательное поле',
            'objectives.min'             => 'Введите не менее 100 символов'
        ];
    }
}
