<?php

namespace DurianSoftware\Http\Requests\BackOffice\Setting;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CountryRequest extends FormRequest
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
        $country_id = $this->route('country');

        return [
            'name'  => [
                'required',
                Rule::unique('dim_countries')->ignore($country_id)
            ],
            'code'  => [
                'required',
                Rule::unique('dim_countries')->ignore($country_id)
            ],
            'description' => 'sometimes|nullable|string',
            'id'    => 'sometimes|number'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('validation.country_name_required'),
            'code.required' => trans('validation.country_code_required'),
        ];
    }
}
