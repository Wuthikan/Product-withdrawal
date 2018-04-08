<?php

namespace DurianSoftware\Http\Controllers\BackOffice\Setting;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use DurianSoftware\Http\Controllers\Controller;
use DurianSoftware\Models\Warehouse;
use DurianSoftware\Http\Requests\BackOffice\Warehouse\WarehouseRequest;
use Response;
use Validator;
use Session;
use Lang;
use Excel;
use Delatbabel\Elocrypt\Elocrypt;

use Illuminate\Contracts\View\View;

class WarehouseController extends Controller
{
    public function __construct()
    {
        $this->client_id = 1;
        if (session()->has('client_id')) {
            $this->client_id = session()->get('client_id');
        }
        $this->uploadPath = 'images/back-office/warehouse';
        $this->Warehouse = Warehouse::where('client_id', $this->client_id);
        $this->WarehouseW = Warehouse::where('client_id', $this->client_id)->withTrashed();
    }
    public $perPage = 10;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // search จาก field ไหนก็ได้ ทำเป็นแบบ OR ให้มี %search_term% ก็เจอ
        $OrderBy = 'desc';
        $Order = 'id';
        if (isset($_GET['rdoOrder1'])) {
            $OrderBy = $_GET['rdoOrder1'];
        }
        if (isset($_GET['rdoBy1'])) {
            $Order = $_GET['rdoBy1'];
        }
        $Warehouses = $this->Warehouse->select();
        if ($request->has('search') && $request->input('search')!='') {
            $search = $request->input('search');
            $Warehouses = $Warehouses
                            ->where(function ($query) use ($search) {
                                $query->orWhere('name', 'LIKE', "%{$search}%");
                                $query->orWhere('description', 'LIKE', "%{$search}%");
                            });
        }
        $filter = collect([
                    ['rdoBy1' =>'name' , 'rdoOrder1' =>'asc'],
                    ['rdoBy1' =>'description' , 'rdoOrder1' =>'desc']
                    ]);
        $filterBy = $filter->where('rdoBy1', $Order);
        $filterOrder = $filter->where('rdoOrder1', $OrderBy);
        // return $filterOrder;
        if (count($filterBy) > 0 && count($filterOrder)  > 0) {
            $Warehouses = $Warehouses
            ->orderBy($Order, $OrderBy);
        }
        $Warehouses = $Warehouses
                        ->withTrashed()
                        ->paginate(10);
        
        return view('backOffice.setting.warehouse.index', compact('Warehouses', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('backOffice.setting.warehouse.create', compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        unset($data['_token']);
        $Warehouse = new Warehouse;
        $validator = Validator::make($request->all(), $this->rule(), $this->message());
        if ($validator->fails()) {
            $errors = $validator->errors();
            // return $errors;
            // return $errors->get('discount_type');
            return back()
            ->withInput()
            ->with(['errors'=>$errors]);
        }
        $data['image'] = $this->uploadImage('image', $request, $Warehouse);
        $data['client_id'] = $this->client_id;
        // $data['name'] = $Warehouse->encryptedAttribute($data['name']);
        // $data['description'] = $Warehouse->encryptedAttribute($data['name']);
        // return $data;
        // return new Warehouse($data);
        Warehouse::create($data);
        Session::flash('success', Lang::get('warehouse.Save'));
        return redirect()->route('backOffice.setting.warehouse.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function rule()
    {
        return [
            'name' => 'required',
        ];
    }

    public function message()
    {
        return [
            'name.required'    => 'กรุณาใส่ชื่อคลังสินค้า',
        ];
    }

    public function show($id)
    {
        $Warehouses = $this->Warehouse->withTrashed()->find($id);
        return view('backOffice.setting.warehouse.show')
            ->with('warehouse', $warehouse);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $Warehouse = $this->WarehouseW->find($id);
        if (empty($Warehouse)) {
            session()->flash('failure', Lang::get('warehouse.2user_case2'));
            return redirect()->route('backOffice.setting.warehouse.index');
        }
        $Warehouse = $this->Warehouse->find($id);
        if (empty($Warehouse)) {
            session()->flash('failure', Lang::get('warehouse.2user_case1'));
            return redirect()->route('backOffice.setting.warehouse.index');
        }
        
        return view('backOffice.setting.warehouse.update', compact('Warehouse', 'request'));
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
        $Warehouse = $this->Warehouse->find($id);
        $data = $request->all();
        

        if ($request->has('duplicate')) {
            unset($data['_token']);
            $Warehouse = $this->WarehouseW->find($id);
            if (empty($Warehouse)) {
                session()->flash('failure', Lang::get('warehouse.2user_case4'));
                return redirect()->route('backOffice.setting.warehouse.index');
            }
            $Warehouse = $this->Warehouse->find($id);
            if (empty($Warehouse)) {
                session()->flash('failure', Lang::get('warehouse.2user_case3'));
                return redirect()->route('backOffice.setting.warehouse.index');
            }
            
            //valudator
            $validator = Validator::make($request->all(), $this->rule(), $this->message());
            if ($validator->fails()) {
                $errors = $validator->errors();
                // return $errors;
                // return $errors->get('discount_type');
                return back()
                ->withInput()
                ->with(['errors'=>$errors]);
            }

            $Warehouse = $this->Warehouse->find($id);
            $Warehouse = $Warehouse->replicate();
            $Warehouse->save();
            Session::flash('success', Lang::get('warehouse.Duplicate'));
            return redirect()->route('backOffice.setting.warehouse.index');
        } else {
            unset($data['_token']);
            $Warehouse = $this->WarehouseW->find($id);
            if (empty($Warehouse)) {
                session()->flash('failure', Lang::get('warehouse.2user_case2'));
                return redirect()->route('backOffice.setting.warehouse.index');
            }
            $Warehouse = $this->Warehouse->find($id);
            if (empty($Warehouse)) {
                session()->flash('failure', Lang::get('warehouse.2user_case1'));
                return redirect()->route('backOffice.setting.warehouse.index');
            }
            
            //valudator
            $validator = Validator::make($request->all(), $this->rule(), $this->message());
            if ($validator->fails()) {
                $errors = $validator->errors();
                // return $errors;
                // return $errors->get('discount_type');
                return back()
                ->withInput()
                ->with(['errors'=>$errors]);
            }

            $data['image'] = $this->uploadImage('image', $request, $Warehouse);
            $Warehouse->update($data);
            Session::flash('success', Lang::get('warehouse.Updated'));
            return redirect()->route('backOffice.setting.warehouse.index');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $data = $request->all();
        $Warehouse = $this->Warehouse->find($id);
        // return Warehouse::find($id)->first();
        if ($request->has('UseForce')) {
            if (empty($this->Warehouse->withTrashed()->find($id))) {
                session()->flash('success', Lang::get('warehouse.Force'));
            } else {
                Session::flash('success', Lang::get('warehouse.Force'));
                $this->Warehouse->where('id', $id)->forceDelete();
            }
        } else {
            if (empty($this->Warehouse->find($id))) {
                session()->flash('success', Lang::get('warehouse.Deleted'));
            } else {
                Session::flash('success', Lang::get('warehouse.Deleted'));
                $this->Warehouse->where('id', $id)->delete();
            }
        }
        return redirect()->back();
    }
    /**
        * Restore the specified resource back to storage.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
    public function restore($id)
    {
        if (empty($this->Warehouse->find($id))) {
            if (empty($this->Warehouse->withTrashed()->find($id))) {
                session()->flash('failure', 'Warning Data not found');
            } else {
                $this->Warehouse->where('id', $id)->restore();
                Session::flash('success', Lang::get('warehouse.Restore'));
            }
        } else {
            session()->flash('failure', 'Data Change');
        }
        return redirect()->back();
    }

    public function duplicate(Request $request, $id)
    {
        $Warehouse = $this->Warehouse->withTrashed()->find($id);
        // $Warehouse = Warehouse::find($id);
        if (empty($Warehouse)) {
            if (empty($this->Warehouse->withTrashed()->find($id))) {
                session()->flash('failure', Lang::get('warehouse.2user_case2'));
            } else {
                session()->flash('failure', Lang::get('warehouse.2user_case1'));
            }
            return redirect()->route('backOffice.setting.warehouse.index');
        }
        return view('backOffice.setting.warehouse.duplicate', compact('Warehouse', 'request'));
        if (empty($this->Warehouse->withTrashed()->find($id))) {
            session()->flash('failure', Lang::get('warehouse.2user_case4'));
            return redirect()->route('backOffice.setting.warehouse.index');
        }
        if (empty($this->Warehouse->find($id))) {
            session()->flash('failure', Lang::get('warehouse.2user_case3'));
            return redirect()->route('backOffice.setting.warehouse.index');
        }
        $Warehouse = $this->Warehouse->find($id);
        $Warehouse = $Warehouse->replicate();
        $Warehouse->save();
        Session::flash('success', Lang::get('warehouse.Duplicate'));
        return redirect()->back();
    }

    public function excel(Excel $excel)
    {
        $headers = [
                'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0',
                'Content-type'        => 'text/csv;charset=UTF-8',
                'Content-Encoding'      => 'UTF-8',
                'Content-Disposition' => 'attachment; filename=warehouse.csv',
                'Expires'             => '0',
                'Pragma'              => 'public'
        ];

        $list = $this->Warehouse
                ->select('id', 'name', 'description', 'created_at', 'updated_at', 'deleted_at')
                ->get()
                ->toArray();

        # add headers for each column in the CSV download
        array_unshift($list, array_keys($list[0]));

        $callback = function () use ($list) {
            $FH = fopen('php://output', 'w');

            foreach ($list as $row) {
                fputcsv($FH, $row);
            }
            fclose($FH);
        };

        echo "\xEF\xBB\xBF"; // UTF-8 BOM
        return Response::stream($callback, 200, $headers); //use Illuminate\Support\Facades\Response;
    }

    private function uploadImage($name_input, $request, $Model)
    {
        // return 't';
        $path_name = '';
        if ($request->hasFile($name_input)) {
            if ($Model == null) {
                if (!empty($Model->$name_input)&&file_exists(storage_path($Model->$name_input))) {
                    unlink(storage_path($Model->$name_input));
                }
            }
            $data = $request->input($name_input);
            $photo = $request->file($name_input)->getClientOriginalName();
            $destination = storage_path($this->uploadPath);
            $request->file($name_input)->move($destination, $photo);
            $path_name = $this->uploadPath."/".$photo;
        } else {
            if ($Model == null) {
                if ($Model->$name_input) {
                    $path_name = $Model->$name_input;
                } else {
                    $path_name = '';
                }
            } else {
                if ($Model->$name_input) {
                    $path_name = $Model->$name_input;
                } else {
                    $path_name = '';
                }
            }
        }
        return $path_name;
    }

    public function deleteAll(Request $request)
    {
        $data = $request->all();
        // return $data;
        $check_all = false;//ข้อมูล มีการเปลี่ยนแปลไหม
        if ($data['ar_delete_all']) {
            $ar_delete_all = explode(",", $data['ar_delete_all']);
            $check_force = explode(",", $data['check_force']);
            foreach ($ar_delete_all as $key => $value) {
                //ค่าที่ส่งมาเปี่ยน soft หรือ force
                if ($check_force[$key]=="true") {
                    if (empty(Warehouse::withTrashed()->find($value))) {
                        $check_all = true;
                        session()->flash('failure', 'Data Change');
                        return redirect()->route('backOffice.setting.warehouse.index');
                    }
                } else {
                    if (empty(Warehouse::find($value))) {
                        $check_all = true;
                        session()->flash('failure', 'Data Change');
                        return redirect()->route('backOffice.setting.warehouse.index');
                    }
                    // UserClass::find($value)->delete();
                }
            }
            if ($check_all) {
                // session()->flash('failure', 'ข้อมูลมีการเปลี่ยนแปลง');
            } else {
                foreach ($ar_delete_all as $key => $value) {
                    //ค่าที่ส่งมาเปี่ยน soft หรือ force

                    if ($check_force[$key]=="true") {
                        Warehouse::where('id', $value)->forceDelete();
                    } else {
                        Warehouse::where('id', $value)->delete();
                    }
                }
                session()->flash('success', 'Delete success');
            }
        }
        return redirect()->back();
    }
}
