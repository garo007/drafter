<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SurveyRequest extends FormRequest
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
            'field_of_activity' => 'required',
            'business_active' => 'required',
            'reason_for_sale' => 'required',
            'near_objects' => 'required',
            'site' => 'required',
            'organization_legal_form' => 'required',
            'main_directions_of_activity' => 'required',
            'workers_count' => 'required',
            'management_personal_count' => 'required',
            'Rent_or_ownership' => 'required',
            'Residential_or_non-residential' => 'required',
            'floor' => 'required',
            'real_estate_objects_list' => 'required',
            'total_area' => 'required',
            'equipment_list' => 'required',
            'availability_of_licenses' => 'required',
            'monthly_turnover' => 'required',
            'wage_fund' => 'required',
            'rent_price' => 'required',
            'cost_of_utility_bills' => 'required',
            'operating_expenses' => 'required',
            'net_profit_per_month' => 'required',
            'business_payback_period' => 'required',
            'debts_fines' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'field_of_activity.required' => 'Обязательное поле',
            'business_active.required' => 'Обязательное поле',
            'reason_for_sale.required' => 'Обязательное поле',
            'near_objects.required' => 'Обязательное поле',
            'site.required' => 'Обязательное поле',
            'organization_legal_form.required' => 'Обязательное поле',
            'main_directions_of_activity.required' => 'Обязательное поле',
            'workers_count.required' => 'Обязательное поле',
            'management_personal_count.required' => 'Обязательное поле',
            'Rent_or_ownership.required' => 'Обязательное поле',
            'Residential_or_non-residential.required' => 'Обязательное поле',
            'floor.required' => 'Обязательное поле',
            'real_estate_objects_list.required' => 'Обязательное поле',
            'total_area.required' => 'Обязательное поле',
            'equipment_list.required' => 'Обязательное поле',
            'availability_of_licenses.required' => 'Обязательное поле',
            'monthly_turnover.required' => 'Обязательное поле',
            'wage_fund.required' => 'Обязательное поле',
            'rent_price.required' => 'Обязательное поле',
            'cost_of_utility_bills.required' => 'Обязательное поле',
            'operating_expenses.required' => 'Обязательное поле',
            'net_profit_per_month.required' => 'Обязательное поле',
            'business_payback_period.required' => 'Обязательное поле',
            'debts_fines.required' => 'Обязательное поле',
        ];
    }
}
