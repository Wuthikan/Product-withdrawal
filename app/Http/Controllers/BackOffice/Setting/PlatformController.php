<?php

namespace DurianSoftware\Http\Controllers\BackOffice\Setting;

use Illuminate\Database\Eloquent\Collection;
use DurianSoftware\Http\Controllers\Controller;
use DurianSoftware\Http\Requests\PlatformFormRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use DurianSoftware\Platform;

use Response;
use Validator;
use Session;
use Lang;
use Excel;

class PlatformController extends Controller
{

    private $perpage = 10;
    protected $useBom = true;

    public function __construct()
    {
        $this->company_id = 1;
        if (session()->has('company_id')) {
            $this->company_id = session()->get('company_id');
        }
        $this->Platform = Platform::where('client_id', $this->company_id);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $OrderBy = 'desc';
        $Order = 'name';
        if (isset($_GET['rdoOrder1'])) {
            $OrderBy = $_GET['rdoOrder1'];
        }
        if (isset($_GET['rdoBy1'])) {
            $Order = $_GET['rdoBy1'];
        }
        $platforms = $this->Platform->select();
        if ($request->has('search')) {
            $search = $request->input('search');
            $platforms = $platforms
                            ->where(function ($query) use ($search) {
                                $query->orWhere('name', 'LIKE', '%' . $search . '%');
                                $query->orWhere('description', 'LIKE', '%' . $search . '%');
                            });
        }
        $platforms = $platforms
                        ->withTrashed()
                        ->orderBy($Order, $OrderBy)
                        ->paginate($this->perpage);

        return view('backOffice.setting.platform.index', compact('platforms'));
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
        $action = route('backOffice.setting.platform.store');
        return view('backOffice.setting.platform.create', compact('action', 'client_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \DurianSoftware\Http\Requests\PlatformFormRequest|\Illuminate\Http\Request $request
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

        Platform::create($data);
        Session::flash('success', Lang::get('Platform.Save'));
        return redirect()->route('backOffice.setting.platform.index');
    }

    private function rules()
    {
        return [
            'name' => 'required|unique:dim_platforms'
        ];
    }

    private function messages()
    {
        return [
            'name.required'  => 'กรุณาใส่ชื่อ platform',
            'name.unique'  => 'ชื่อ platform ถูกใช้แล้ว',
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
        $Platform = $this->PlatformRepository->findById($id);

        return view('backOffice.setting.platform.show', compact('Platform'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $platform = $this->Platform->withTrashed()->find($id);
        // $platform = platform::find($id);

        if (is_null($platform)) {
            Session::flash('failure', Lang::get('platform.2user_case4'));
            return redirect()->route('backOffice.setting.platform.index');
        } elseif ($platform->trashed()) {
            Session::flash('failure', Lang::get('platform.2user_case1'));
            return redirect()->route('backOffice.setting.platform.index');
        }


        if (empty($platform)) {
            if (empty($this->Platform->withTrashed()->find($id))) {
                session()->flash('failure', Lang::get('platform.2user_case2'));
            } else {
                session()->flash('failure', Lang::get('platform.2user_case1'));
            }
            return redirect()->route('backOffice.setting.platform.index');
        }
        return view('backOffice.setting.platform.update', compact('platform', 'request'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \DurianSoftware\Http\Requests\PlatformFormRequest|\Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $Platform = $this->Platform->withTrashed()->find($id);
        $data = $request->all();

        if (is_null($Platform)) {
            Session::flash('failure', Lang::get('platform.2user_case4'));
            return redirect()->route('backOffice.setting.platform.index');
        } elseif ($Platform->trashed()) {
            Session::flash('failure', Lang::get('platform.2user_case1'));
            return redirect()->route('backOffice.setting.platform.index');
        }
        

        if ($request->has('duplicate')) {
            unset($data['_token']);
            if (empty($this->Platform->withTrashed()->find($id))) {
                session()->flash('failure', "Data not found");
                return redirect()->route('backOffice.setting.platform.index');
            } elseif (empty($Platform)) {
                // session()->flash('failure', "Can't Edit Data");
                // return redirect()->route('backOffice.setting.platform.index');
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

            $Platform = $this->Platform->find($id);
            $Platform = $Platform->replicate();
            $Platform->save();
            Session::flash('success', Lang::get('Platform.Duplicate'));
            return redirect()->route('backOffice.setting.platform.index');
        } else {
            unset($data['_token']);
            if (empty($this->Platform->withTrashed()->find($id))) {
                session()->flash('failure', "Data not found");
                return redirect()->route('backOffice.setting.platform.index');
            } elseif (empty($Platform)) {
                session()->flash('failure', "Can't Edit Data");
                return redirect()->route('backOffice.setting.platform.index');
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

            $Platform->update($data);
            Session::flash('success', Lang::get('Platform.Updated'));
            return redirect()->route('backOffice.setting.platform.index');
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
        $Platform = $this->Platform->find($id);

        if ($request->has('UseForce')) {
            if (empty($this->Platform->withTrashed()->find($id))) {
                session()->flash('success', Lang::get('platform.Force'));
            } else {
                Session::flash('success', Lang::get('platform.Force'));
                $this->Platform->where('id', $id)->forceDelete();
            }
        } else {
            if (empty($this->Platform->find($id))) {
                session()->flash('success', Lang::get('platform.Deleted'));
            } else {
                Session::flash('success', Lang::get('platform.Deleted'));
                $this->Platform->where('id', $id)->delete();
            }
        }
        return redirect()->back();
    }

    public function restore($id)
    {
        if (empty($this->Platform->find($id))) {
            if (empty($this->Platform->withTrashed()->find($id))) {
                session()->flash('failure', 'Warning Data not found');
            } else {
                $this->Platform->where('id', $id)->restore();
                Session::flash('success', Lang::get('platform.Restore'));
            }
        } else {
            session()->flash('failure', 'Data Change');
        }
        return redirect()->back();
    }



    public function forceDelete(Request $request, $id)
    {
        dd($id);
    }

    public function duplicate($id)
    {
        $platform = $this->Platform->withTrashed()->find($id);

        if (is_null($platform)) {
            Session::flash('failure', Lang::get('platform.2user_case4'));
            return redirect()->route('backOffice.setting.platform.index');
        } elseif ($platform->trashed()) {
            Session::flash('failure', Lang::get('platform.2user_case2'));
            return redirect()->route('backOffice.setting.platform.index');
        }


        $action = route('backOffice.setting.platform.store-duplicate');
        // $client_id = $_SESSION['client_id'];
        $client_id = $this->company_id;
        return view('backOffice.setting.platform.create', compact('action', 'client_id'))->with('platform', $platform);
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

        Platform::create($data);
        Session::flash('success', Lang::get('platform.Save'));
        return redirect()->route('backOffice.setting.platform.index');
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
                    if (empty(Platform::withTrashed()->find($value))) {
                        $check_all = true;
                        session()->flash('failure', 'Data Change');
                        return redirect()->route('backOffice.setting.platform.index');
                    }
                } else {
                    if (empty(Platform::find($value))) {
                        $check_all = true;
                        session()->flash('failure', 'Data Change');
                        return redirect()->route('backOffice.setting.platform.index');
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
                        Platform::where('id', $value)->forceDelete();
                    } else {
                        Platform::where('id', $value)->delete();
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
                'Content-Disposition' => 'attachment; filename=platform.csv',
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
