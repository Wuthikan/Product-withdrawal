<?php

namespace DurianSoftware\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use DurianSoftware\Models\CompanyGroup;
use Illuminate\Validation\Rule;

class CompanyGroupRequest extends FormRequest
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
        if ($this->method() != 'PATCH') {
            $company_group = CompanyGroup::find($this->company_group);
            $unique_company_name = $company_group != null ? ',' . $company_group->id : '';
            return [
                'name' => 'required|max:255|unique:dim_company_groups,name'.$unique_company_name,
                'description' => 'required|max:255',
            ];
        }
        return [];
    }

    public function messages()
    {
        return [
            'name.required' => 'กรุณาระบุชื่อกลุ่มบริษัท',
            'name.unique' => 'ชื่อกลุ่มบริษัทนี้มีอยู่แล้ว ไม่สามารถใช้งานได้',
            'description.required' => 'กรุณาระบุรายละเอียดกลุ่มบริษัท',
            'customer_tier_id.required' => 'กรุณาเลือกระดับลูกค้า',
            // 'status.required' => 'กรุณาระบุสถานะ'
        ];
    }
}
