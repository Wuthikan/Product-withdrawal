<?php

namespace DurianSoftware\Http\Requests\BackOffice\Setting\General;

use Illuminate\Foundation\Http\FormRequest;

class GeneralRequest extends FormRequest
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
            'company_name' => 'required|string',
            'address' => 'required|string',
            'postcode' => 'required|string|digits_between::0,10',
            'district' => 'required|string|digits_between::0,100',
            'tax_no' => 'required|integer|digits_between::0,50',
            'logo' => 'nullable',
            'background' => 'nullable',
            'initial' => 'nullable',
            'alert_prepo' => 'integer|digits_between::0,3',
            'alert_initialpo' => 'integer|digits_between::0,3',
            'alert_postpo' => 'integer|digits_between::0,3',
            'first_alert' => 'nullable|integer|digits_between::0,3',
            'second_alert' => 'nullable|integer|digits_between::0,3',
            'third_alert' => 'nullable|integer|digits_between::0,3',
            'forth_alert' => 'nullable|integer|digits_between::0,3',
            'username' => 'required|string',
            'password' => 'required|string|digits_between::0,20',
            'server' => 'required|string',
            'port' => 'required|string|digits_between::0,10',
            'type' => 'required|string',
            'facebook' => 'nullable',
            'twitter' => 'nullable',
            'line' => 'nullable',
            'tel' => 'required|string',
            'google_analytic' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'company_name.required' => 'กรุณาระบุชื่อบริษัท',
            'address.required' => 'กรุณาระบุที่อยู่บริษัท',
            'postcode.required' => 'กรุณาระบุรหัสไปรษณีย์',
            'district.required' => 'กรุณาระบุจังหวัด',
            'tax_no.required' => 'กรุณาระบุรหัสประจำตัวผู้เสียภำษี ',
            'tax_no.integer' => 'รหัสประจำตัวผู้เสียภำษีเป็นตัวเลขเท่านั้น',
            'alert_prepo.integer' => 'pre po เป็นตัวเลขเท่านั้น',
            'alert_initialpo.integer' => 'initial po เป็นตัวเลขเท่านั้น',
            'alert_postpo.integer' => 'post po เป็นตัวเลขเท่านั้น',
            'username.required' => 'กรุณาระบุรหัสผู้ใช้งาน',
            'password.required' => 'กรุณาระบุรหัสผ่าน',
            'server.required' => 'กรุณาระบุเลข IP Address ของ Mail Server',
            'port.required' => 'กรุณาระบุหมายเลข Port ของ Mail Server',
            'type.required' => 'กรุณาเลือกมาตรฐานการเข้ำรหัส TLS/SSL',
            'tel.required' => 'กรุณาระบุหมายเลขโทรศัพท์',
        ];
    }
}
