<?php

namespace DurianSoftware\Http\Requests\BackOffice;

use Illuminate\Foundation\Http\FormRequest;

class QuotaRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('example::validation.name.required'),
            'description.required' => trans('example::validation.description.required'),
        ];
    }
}
