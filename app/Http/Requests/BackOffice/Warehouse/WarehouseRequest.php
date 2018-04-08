<?php

namespace DurianSoftware\Http\Requests\BackOffice\Warehouse;

use Illuminate\Foundation\Http\FormRequest;

class WarehouseRequest extends FormRequest
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
            'name.required' => 'Please enter warehouse name',
            'description.required' => 'Please enter warehouse description',
            'status.required' => 'Please enter status',
        ];
    }
}
