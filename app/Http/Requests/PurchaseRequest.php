<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseRequest extends FormRequest
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
        $rules=[
            'date' => 'required',
            'statement' => 'required',
            'subproject' => 'required',
            'breakeevenvalue' => 'required',
            'warehouse_id' => 'required',
            'currency_id' => 'required',
            
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.note' => ['nullable','string','max:500']];
           
        }
        return $rules;
    }
    
}
