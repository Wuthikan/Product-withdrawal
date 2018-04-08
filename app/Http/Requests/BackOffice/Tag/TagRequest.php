<?php

namespace DurianSoftware\Http\Requests\BackOffice\Tag;

use Illuminate\Foundation\Http\FormRequest;
use Request;

class TagRequest extends FormRequest
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
    public function rules(Request $request)
    {
        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            return [
                'name' => 'required|unique:dim_tags,name,' . $this->request->get("id"),
            ];
        } else {
            return [
                'name' => 'required|unique:dim_tags,name',
            ];
        }
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter tag name',
            'name.unique' => 'Tag name already exists',
        ];
    }
}
