<?php

namespace DurianSoftware\Http\Requests\BackOffice\Other;

use Illuminate\Foundation\Http\FormRequest;

class ProductWithdrawalRequest extends FormRequest
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
                return [];
            case 'POST':
                return [
                    'withdrawal_date' => 'required',
                    'refund' => 'required',
                    'referece_document_no' => 'required',
                    'contact_name' => 'required'
                ];
            case 'PUT':
            case 'PATCH':
            default:
                break;
        }
    }

    public function messages()
    {
        return [
            'withdrawal_date.required' => 'Please enter date',
            'refund.required' => 'Please enter refund', 
            'referece_document_no.required' => 'Please enter referece document number',
            'contact_name.required' => 'Please enter contact name'    
        ];
    }
}
