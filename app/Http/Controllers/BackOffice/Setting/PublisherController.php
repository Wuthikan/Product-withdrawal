<?php

namespace DurianSoftware\Http\Controllers\BackOffice\Setting;

use Illuminate\Database\Eloquent\Collection;
use DurianSoftware\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use DurianSoftware\Publisher;

use Response;
use Validator;
use Session;
use Lang;
use Excel;

class PublisherController extends Controller
{

    private $perpage = 10;
    protected $useBom = true;

    public function __construct()
    {
        $this->company_id = 1;
        if (session()->has('company_id')) {
            $this->company_id = session()->get('company_id');
        }
        $this->Publisher = Publisher::where('client_id', $this->company_id);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $OrderBy = 'desc';
        $Order = 'id';
        if (isset($_GET['rdoOrder1'])) {
            $OrderBy = $_GET['rdoOrder1'];
        }
        if (isset($_GET['rdoBy1'])) {
            $Order = $_GET['rdoBy1'];
        }
        $publishers = $this->Publisher->select();
        if ($request->has('search')) {
            $search = $request->input('search');
            $publishers = $publishers
                            ->where(function ($query) use ($search) {
                                $query->orWhere('name', 'LIKE', '%' . $search . '%');
                                $query->orWhere('description', 'LIKE', '%' . $search . '%');
                            });
        }
        $publishers = $publishers
                        ->withTrashed()
                        ->orderBy($Order, $OrderBy)
                        ->paginate($this->perpage);

        return view('backOffice.setting.publisher.index', compact('publishers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $client_id = $_SESSION['client_id'];
        $client_id = $this->company_id;
        $action = route('backOffice.setting.publisher.store');
        return view('backOffice.setting.publisher.create', compact('action', 'client_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \DurianSoftware\Http\Requests\PublisherFormRequest|\Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $validator = Validator::make($request->all(), $this->rules(), $this->messages());
        if ($validator->fails()) {
            $errors = $validator->errors();
            // return $errors;
            // return $errors->get('discount_type');
            return back()
            ->withInput()
            ->with(['errors'=>$errors]);
        }

        Publisher::create($data);
        Session::flash('success', Lang::get('publisher.Save'));
        return redirect()->route('backOffice.setting.publisher.index');
    }

    private function rules()
    {
        return [
            'name' => 'required|unique:dim_publishers'
        ];
    }

    private function messages()
    {
        return [
            'name.required'  => 'กรุณาใส่ชื่อ publisher',
            'name.unique'  => 'ชื่อ publisher นี้ถูกใช้แล้ว',
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $publisher = $this->Publisher->findById($id);

        return view('backOffice.setting.publisher.show', compact('publisher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $publisher = $this->Publisher->withTrashed()->find($id);

        if (is_null($publisher)) {
            Session::flash('failure', Lang::get('publisher.2user_case4'));
            return redirect()->route('backOffice.setting.publisher.index');
        } elseif ($publisher->trashed()) {
            Session::flash('failure', Lang::get('publisher.2user_case1'));
            return redirect()->route('backOffice.setting.publisher.index');
        }


        // $Warehouse = Warehouse::find($id);
        if (empty($publisher)) {
            if (empty($this->Publisher->withTrashed()->find($id))) {
                session()->flash('failure', Lang::get('publisher.2user_case2'));
            } else {
                session()->flash('failure', Lang::get('publisher.2user_case1'));
            }
            return redirect()->route('backOffice.setting.warehouse.index');
        }
        return view('backOffice.setting.publisher.update', compact('publisher', 'request'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \DurianSoftware\Http\Requests\PublisherFormRequest|\Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $publisher = $this->Publisher->withTrashed()->find($id);
        $data = $request->all();

        if (is_null($publisher)) {
            Session::flash('failure', Lang::get('publisher.2user_case4'));
            return redirect()->route('backOffice.setting.publisher.index');
        } elseif ($publisher->trashed()) {
            Session::flash('failure', Lang::get('publisher.2user_case1'));
            return redirect()->route('backOffice.setting.publisher.index');
        }
        

        if ($request->has('duplicate')) {
            unset($data['_token']);
            if (empty($this->Publisher->withTrashed()->find($id))) {
                session()->flash('failure', "Data not found");
                return redirect()->route('backOffice.setting.publisher.index');
            } elseif (empty($publisher)) {
                // session()->flash('failure', "Can't Edit Data");
                // return redirect()->route('backOffice.setting.warehouse.index');
            }
            
            //valudator
            $validator = Validator::make($request->all(), $this->rules(), $this->message());
            if ($validator->fails()) {
                $errors = $validator->errors();
                // return $errors;
                // return $errors->get('discount_type');
                return back()
                ->withInput()
                ->with(['errors'=>$errors]);
            }

            $publisher = $this->Publisher->find($id);
            $publisher = $publisher->replicate();
            $publisher->save();
            Session::flash('success', Lang::get('publisher.Duplicate'));
            return redirect()->route('backOffice.setting.publisher.index');
        } else {
            unset($data['_token']);
            if (empty($this->Publisher->withTrashed()->find($id))) {
                session()->flash('failure', "Data not found");
                return redirect()->route('backOffice.setting.publisher.index');
            } elseif (empty($publisher)) {
                session()->flash('failure', "Can't Edit Data");
                return redirect()->route('backOffice.setting.publisher.index');
            }
            
            //valudator
            $validator = Validator::make($request->all(), ['name' => 'required'], $this->messages());
            if ($validator->fails()) {
                $errors = $validator->errors();
                // return $errors;
                // return $errors->get('discount_type');
                return back()
                ->withInput()
                ->with(['errors'=>$errors]);
            }

            $publisher->update($data);
            Session::flash('success', Lang::get('publisher.Updated'));
            return redirect()->route('backOffice.setting.publisher.index');
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
        $publisher = $this->Publisher->find($id);

        if ($request->has('UseForce')) {
            if (empty($this->Publisher->withTrashed()->find($id))) {
            } else {
                Session::flash('success', Lang::get('publisher.Force'));
                $this->Publisher->where('id', $id)->forceDelete();
            }
        } else {
            if (empty($this->Publisher->withTrashed()->find($id))) {
            } else {
                Session::flash('success', Lang::get('publisher.Deleted'));
                $this->Publisher->where('id', $id)->delete();
            }
        }
        return redirect()->back();
    }

    public function restore($id)
    {
        if (empty($this->Publisher->find($id))) {
            if (empty($this->Publisher->withTrashed()->find($id))) {
                session()->flash('failure', 'Warning Data not found');
            } else {
                $this->Publisher->where('id', $id)->restore();
                Session::flash('success', Lang::get('publisher.Restore'));
            }
        } else {
            session()->flash('failure', 'Data Change');
        }
        return redirect()->back();
    }


    public function duplicate($id)
    {
        $publisher = $this->Publisher->withTrashed()->find($id);

        if (is_null($publisher)) {
            Session::flash('failure', Lang::get('publisher.2user_case4'));
            return redirect()->route('backOffice.setting.publisher.index');
        } elseif ($publisher->trashed()) {
            Session::flash('failure', Lang::get('publisher.2user_case2'));
            return redirect()->route('backOffice.setting.publisher.index');
        }


        $action = route('backOffice.setting.publisher.store-duplicate');
        // $client_id = $_SESSION['client_id'];
        $client_id = $this->company_id;
        return view('backOffice.setting.publisher.create', compact('action', 'client_id'))
        ->with('publisher', $publisher);
    }


    public function storeDuplicate(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $validator = Validator::make($request->all(), $this->rules(), $this->messages());
        if ($validator->fails()) {
            $errors = $validator->errors();
            // return $errors;
            // return $errors->get('discount_type');
            return back()
            ->withInput()
            ->with(['errors'=>$errors]);
        }

        Publisher::create($data);
        Session::flash('success', Lang::get('publisher.Save'));
        return redirect()->route('backOffice.setting.publisher.index');
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
                    if (empty(Publisher::withTrashed()->find($value))) {
                        $check_all = true;
                        session()->flash('failure', 'Data Change');
                        return redirect()->route('backOffice.setting.publisher.index');
                    }
                } else {
                    if (empty(Publisher::find($value))) {
                        $check_all = true;
                        session()->flash('failure', 'Data Change');
                        return redirect()->route('backOffice.setting.publisher.index');
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
                        Publisher::where('id', $value)->forceDelete();
                    } else {
                        Publisher::where('id', $value)->delete();
                    }
                }
                session()->flash('success', 'Delete success');
            }
        }
        return redirect()->back();
    }


    public function excel(Excel $excel)
    {
        $headers = [
                'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0',
                'Content-type'        => 'text/csv;charset=UTF-8',
                'Content-Encoding'      => 'UTF-8',
                'Content-Disposition' => 'attachment; filename=publisher.csv',
                'Expires'             => '0',
                'Pragma'              => 'public'
        ];

        $list = Platform::all('name', 'description', 'created_at', 'updated_at', 'deleted_at')->toArray();

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
}
