<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DistrictRequest extends FormRequest
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
            'city_id'=>'required',
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.name' => ['required','string','max:500']];
           
        }
        return $rules;
      
    }
}
