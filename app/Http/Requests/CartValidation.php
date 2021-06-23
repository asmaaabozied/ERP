<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartValidation extends FormRequest
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
            'employe_id' => 'required|string',
            'Currency_id' => 'required|string',
            'vip_id' => 'required|string',
            'Account_Category' => 'required|string',
            'isActive' => 'required|string',


            'limited_money' =>  'nullable|integer',
            'Credit_limit' =>  'nullable|integer',
            'Balance_relay' =>  'nullable|integer',

            'Note' => 'nullable|string',

            // 'name_en' =>  'nullable|string',
            // 'name_ar' => 'nullable|string',
        ];
    }
}
