<?php

namespace DurianSoftware\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
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
            'name.required' => 'กรุณากรอกชื่อ',
            'description.required' => 'กรุณากรอกรายละเอียด',
            'status.required' => 'กรุณาเลือกสถานะ',
        ];
    }
}
