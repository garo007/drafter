<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Session;

class CompanyRequest extends FormRequest
{
    public function __construct()
    {
        Session::flash('session_for_company_store',true);
    }

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
            'company_name'         => 'required|min:2',
            'reg_date'             => 'required|min:6',
            'low_address'          => 'required',
            'dir_fullname'         => 'required',
            'inn'                  => 'required|int',
            'ogrn'                 => 'required|int'
        ];
    }

    public function messages()
    {

        return [
          'company_name.required'  => 'Обязательное поле',
          'company_name.min'       => 'Мин 2 символа'   ,
          'reg_date.required'      => 'Обязательное поле',
          'reg_date.min'           => 'Вводите дату',
          'low_address.required'   => 'Обязательное поле',
          'dir_fullname.required'  => 'Обязательное поле',
          'inn.required'           => 'Обязательное поле',
          'inn.int'                => 'Вводите только цифры',
          'ogrn.required'          => 'Обязательное поле',
          'ogrn.int'               => 'Вводите только цифры'
        ];
    }
}
