<?php

namespace DurianSoftware\Http\Requests\BackOffice\Platform;

use Illuminate\Foundation\Http\FormRequest;

class PlatformRequest extends FormRequest
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
            'status' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter platform name',
            'description.required' => 'Please enter platform description',
            'status.required' => 'Please enter platform status',
        ];
    }
}
