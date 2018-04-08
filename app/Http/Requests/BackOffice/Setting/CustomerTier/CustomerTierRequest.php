<?php

namespace DurianSoftware\Http\Requests\BackOffice;

use Illuminate\Foundation\Http\FormRequest;

class CustomerTierRequest extends FormRequest
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

        switch ($this->method()) {
            case 'POST':
                $validate = [
                    'name'       => 'bail:required|min:3|max:255|unique:dim_customer_tiers,name',
                    'description' => 'bail:required',
                ];
                if (!$this->has('_imageProfile')) {
                    $validate['imageProfile'] ='required|image|mimes:jpeg,png,jpg|max:2048';
                }
                return $validate;
        }


        return [
           'name'       => 'bail:required|min:3|max:255|unique:dim_customer_tiers,name',
           'description' => 'bail:required',
           'imageProfile' => 'required_without:image|image',
        ];
    }

    /**
    * Get the error messages for the defined validation rules.
        *
    * @return array
    */
    public function messages()
    {
        return [
            'name.required'     => 'A name is required',
            'name.min'          => 'name Length Should Be More Than 3 Characters.',
            'name.max'          => 'name Length Should Be Less Than 255 Characters.',
            'name.unique'       => 'name must be unique.',
            'imageProfile.required' => 'Image profile is require',
            'description.required' => 'A description is required',
            'status.required'   => 'A status is required',
            'status.numeric'    => 'The status must be a number.',
        ];
    }
}
