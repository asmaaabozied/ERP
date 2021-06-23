<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormValidation extends FormRequest
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
            'image' => 'nullable|image|mimes:png,jpg',
            'category_id' => 'required|string',
            'products_type_id' => 'required|string',
            'discount_id' => 'required|string',
            'guarantee_id' =>  'nullable|string',
            'code_product_type' => 'nullable|integer',
            'parcode_product_type' => 'nullable|integer',
            'model_product' => 'nullable|string',
            'price' => 'nullable|integer',
            'greet_numper' => 'nullable|integer',
            'small_numper' => 'nullable|integer',
            'order_limit' => 'nullable|integer',
            'Consumer_price' => 'nullable|integer',
            'min_price_sell' => 'nullable|integer',
            'price_buy' => 'nullable|integer',
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.name_product' => ['required','string','max:500']];

        }
        return $rules;

    }
}
