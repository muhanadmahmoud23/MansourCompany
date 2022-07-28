<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SalesRequest extends FormRequest
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

            'SalesCall_id'     => 'required|integer',
            'REGION'           => 'required|integer',
            'BRANCH_CODE'      => 'required|integer',
            'COMPANY_ID'       => 'required|integer',
            'CATEGORY_ID'      => 'required|integer',
            'TER_ID'           => 'required|integer',
            'POS_ID'           => 'required|integer',
            'SALESREP_ID'      => 'required|integer',
            'SALES_TER_ID'     => 'required|integer',
            'ROUTE_TYPE_ID'    => 'required|integer',
            'DAY'              => 'required|date_format:Y-m-d',
            'VISIT_START_TIME' => 'required|date_format:H:i',
            'VISIT_END_TIME'   => 'required|date_format:H:i',
            'FAMILY_ID'        => 'required|integer',
            'PROD_ID'          => 'required|integer',
            'SALES_CAR'        => 'required|integer',
            'STOCK'            => 'required|between:0,99.99',
        ];
    }
}
