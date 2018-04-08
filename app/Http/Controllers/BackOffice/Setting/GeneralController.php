<?php

namespace DurianSoftware\Http\Controllers\BackOffice\Setting;

use Illuminate\Http\Request;
use DurianSoftware\Http\Controllers\Controller;
use DurianSoftware\Models\General;
use DurianSoftware\Http\Requests\BackOffice\Setting\General\GeneralRequest;
use DurianSoftware\Models\DimGeneral;

use Response;
use Validator;
use Session;
use DurianSoftware\Models\PostalCode;

class GeneralController extends Controller
{
    public function __construct()
    {
        $this->client_id = 1;
        if (session()->has('client_id')) {
            $this->client_id = session()->get('client_id');
        }
    }
    public $uploadPath = 'images/back-office/general';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $general = general::withTrashed()->first();
        return view('backOffice.setting.general.create', compact('general'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // return PostalCode::get();
        // php artisan db:seed --class=General\\ThaiAddressTablesSeeder
        $general = DimGeneral::where('client_id', $this->client_id)->first();
        // return 'te';
        if (!empty($general)) {
            $postcodeDb = PostalCode::select(
                'postal_codes.*',
                'sub_districts.name as sub_district_name',
                'districts.name as district_name',
                'provinces.name as province_name'
            )
                        ->join('sub_districts', 'sub_districts.id', '=', 'postal_codes.sub_district_id')
                        ->join('districts', 'districts.id', '=', 'postal_codes.district_id')
                        ->join('provinces', 'provinces.id', '=', 'postal_codes.province_id')
                        ->find($general->postcode_id);
            // $general['postcode'] = '';
            // return $general;
            if (!empty($postcodeDb)) {
                $general['postcode'] = $postcodeDb->code;
                $general['province_name'] = $postcodeDb->province_name;
                $general['district_name'] = $postcodeDb->district_name;
                $general['sub_district_name'] = $postcodeDb->sub_district_name;
            }
        } else {
            $general = new DimGeneral;
        }
        // return $general;
        // return[$postcodeDb,$general,$postcodeDb->code];

        return view('backOffice.setting.general.create', compact('general', 'request', 'PostalCode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->input('id');
        // return $request->all();
        $Model = DimGeneral::where('client_id', $this->client_id)->find($id);
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        unset($data['postcode']);
        unset($data['sub_district_name']);
        unset($data['district_name']);
        unset($data['province_name']);
        // return $data;
        // หาที่อยุ่
        $post = PostalCode::find($data['postcode_id']);
        if (!empty($post)) {
            $data['sub_district_id'] = $post['sub_district_id'];
            $data['district_id'] = $post['district_id'];
            $data['province_id'] = $post['province_id'];
        }
        // validate
        $validator = Validator::make($request->all(), $this->rule(), $this->message());
        if ($validator->fails()) {
            $errors = $validator->errors();
            // return $errors;
            // return $errors->get('discount_type');
            return back()
            ->withInput()
            ->with(['errors'=>$errors]);
        }

        //email server password เข้ามาให้ใช้ password เก่าที่อยู่ใน database ไม่ต้องเอาค่าว่างๆไปทับ
        if ($request->input('email_password')) {
            $data['email_password'] =\Hash::make($request->email_password)  ;
        } else {
            unset($data['email_password']);
        }

        // return $data;
        $data['logo'] = $this->uploadImage('logo', $request, $Model);
        $data['background'] = $this->uploadImage('background', $request, $Model);
        // return $data;
        DimGeneral::where('id', $id)->update($data);
        Session::flash('success', 'Update Success');
        return redirect()->route('backOffice.setting.general.create');
    }
    private function uploadImage($name_input, $request, $Model)
    {
        // return 't';
        $path_name = '';
        if ($request->hasFile($name_input)) {
            if (!empty($Model->$name_input)&&file_exists(storage_path($Model->$name_input))) {
                unlink(storage_path($Model->$name_input));
            }
            $data = $request->input($name_input);
            $photo = $request->file($name_input)->getClientOriginalName();
            $destination = storage_path($this->uploadPath);
            $request->file($name_input)->move($destination, $photo);
            $path_name = $this->uploadPath."/".$photo;
        } else {
            if ($Model->$name_input) {
                $path_name = $Model->$name_input;
            } else {
                $path_name = '';
            }
        }
        return $path_name;
    }

    public function rule()
    {
        return [
            'company_name' => 'required',
            'tax_no' => 'required|numeric',
            'address' => 'required',
            'postcode' => 'required',
            'alert_days_before_pre_po_end' => 'required|numeric',
            'alert_days_before_initial_po_end' => 'required|numeric',
            'alert_days_before_post_po_end' => 'required|numeric',
            'alert_hours_after_no_approval_attempt_1' => 'required|numeric',
            'alert_hours_after_no_approval_attempt_2' => 'required|numeric',
            'alert_hours_after_no_approval_attempt_3' => 'required|numeric',
            'alert_hours_after_no_approval_attempt_4' => 'required|numeric',
            'alert_days_before_billing_due' => 'required|numeric',
            'days_to_delete_unpaid_sales_order' => 'required|numeric',
            // 'email_password' => 'required|min:8',
            'server_port' => 'numeric',
            'telephone_number' => 'required|numeric',
           
        ];
    }

    public function message()
    {
        return \Lang::get('general');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('general::backOffice.general.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('general::backOffice.general.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return redirect()->route('backOffice.general.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect()->route('backOffice.general.index');
    }
    
    /**
        * Restore the specified resource back to storage.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
    public function restore($id)
    {
        return redirect()->route('backOffice.general.index');
    }

    public function address()
    {
        $str = '';
        if (isset($_GET['str'])) {
            $str = $_GET['str']  ;
        }
        $PostalCode = PostalCode::select(
            'postal_codes.*',
            'sub_districts.name as sub_district_name',
            'districts.name as district_name',
            'provinces.name as province_name'
        )
                        ->join('sub_districts', 'sub_districts.id', '=', 'postal_codes.sub_district_id')
                        ->join('districts', 'districts.id', '=', 'postal_codes.district_id')
                        ->join('provinces', 'provinces.id', '=', 'postal_codes.province_id')
                        ->limit('10')
                        ->orWhere('sub_districts.name', 'like', '%'.$str.'%')
                        ->orWhere('districts.name', 'like', '%'.$str.'%')
                        ->orWhere('postal_codes.code', 'like', '%'.$str.'%')
                        ->orWhere('provinces.name', 'like', '%'.$str.'%')
                        ->get();
        // return($PostalCode);
        // return ['test1','test2','test3'];
        return ['result' => $PostalCode ,'str' => $str];
    }
}
