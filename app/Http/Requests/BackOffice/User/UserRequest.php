<?php

namespace DurianSoftware\Http\Requests\BackOffice\User;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            case 'GET':
            case 'DELETE':
            case 'POST':
                return [
                                'member_number' => 'required|numeric',
                                'password' => 'required|max:18|min:6',
                                'first_name' => 'required|max:255',
                                'last_name' => 'required|max:255',
                                'nick_name' => 'required|max:255',
                                'gender' => 'required',
                                'email' => 'required|email',
                                'telephone' => 'required',
                                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
                            ];
                        
            case 'PUT':
                return [
                    'member_number' => 'required|numeric',
                    'password' => 'required|max:18|min:6',
                    'first_name' => 'required|max:255',
                    'last_name' => 'required|max:255',
                    'nick_name' => 'required|max:255',
                    'gender' => 'required',
                    'email' => 'required|email',
                    'telephone' => 'required'
                ];
            case 'PATCH':
                return [
                    'member_number' => 'required|numeric',
                    'password' => 'required|max:18|min:6',
                    'first_name' => 'required|max:255',
                    'last_name' => 'required|max:255',
                    'nick_name' => 'required|max:255',
                    'gender' => 'required',
                    'email' => 'required|email',
                    'telephone' => 'required'
                ];
            default:
                break;
        }
    }

    public function messages()
    {
        return [
            'member_number.required' => 'Please enter member id',
            'member_number.numeric' => 'Member id only number',
            'member_number.unique' => 'Member id already exists',
            'password.required' => 'Please enter password',
            'password.max' => 'Password must be 6-18 characters',
            'password.min' => 'Password must be 6-18 characters',
            'first_name.required' => 'Please enter first name',
            'first_name.max' => 'First name limit 255 character',
            'last_name.required' => 'Please enter last name',
            'first_name.max' => 'Last name limit 255 character',
            'nick_name.required' => 'Please enter nickname',
            'first_name.max' => 'Nickname limit 255 character',
            'gender.required' => 'Please select gender',
            'email.required' => 'Please enter your email',
            'telephone.required' => 'Please enter phone number',
            'image.required' => 'Please upload image profile',
            'image.max' => 'File limit upload 2MB'
        ];
    }
}
