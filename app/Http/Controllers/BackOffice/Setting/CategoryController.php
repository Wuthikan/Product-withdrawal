<?php

namespace DurianSoftware\Http\Controllers\BackOffice\Setting;

use Illuminate\Database\Eloquent\Collection;
use DurianSoftware\Http\Controllers\Controller;
use DurianSoftware\Http\Requests\CategoryFormRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use DurianSoftware\Category;

use Response;
use Validator;
use Session;
use Lang;
use Excel;

class CategoryController extends Controller
{

    private $perpage = 10;
    protected $useBom = true;

    public function __construct()
    {
        $this->company_id = 1;
        if (session()->has('company_id')) {
            $this->company_id = session()->get('company_id');
        }
        $this->Category = Category::where('client_id', $this->company_id);
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
        $categories = $this->Category->select();
        if ($request->has('search')) {
            $search = $request->input('search');
            $categories = $categories
                            ->where(function ($query) use ($search) {
                                $query->orWhere('name', 'LIKE', '%' . $search . '%');
                                $query->orWhere('description', 'LIKE', '%' . $search . '%');
                            });
        }
        $categories = $categories
                        ->withTrashed()
                        ->orderBy($Order, $OrderBy)
                        ->paginate($this->perpage);

        return view('backOffice.setting.itemType.index', compact('categories'));
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
        $action = route('backOffice.setting.item-type.store');
        return view('backOffice.setting.itemType.create', compact('action', 'client_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \DurianSoftware\Http\Requests\CategoryFormRequest|\Illuminate\Http\Request $request
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

        Category::create($data);
        Session::flash('success', Lang::get('category.Save'));
        return redirect()->route('backOffice.setting.item-type.index');
    }

    private function rules()
    {
        return [
            'name' => 'required|unique:dim_categories'
        ];
    }

    private function messages()
    {
        return [
            'name.required'  => 'กรุณาใส่ชื่อประเภทสินค้า',
            'name.unique'  => 'ชื่อประเภทสินค้านี้ถูกใช้แล้ว',
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
        $category = $this->categoryRepository->findById($id);

        return view('backOffice.setting.itemType.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $category = $this->Category->withTrashed()->find($id);

        if (is_null($category)) {
            Session::flash('failure', Lang::get('category.2user_case4'));
            return redirect()->route('backOffice.setting.item-type.index');
        } elseif ($category->trashed()) {
            Session::flash('failure', Lang::get('category.2user_case1'));
            return redirect()->route('backOffice.setting.item-type.index');
        }

        
        // $Warehouse = Warehouse::find($id);
        if (empty($category)) {
            if (empty($this->Category->withTrashed()->find($id))) {
                session()->flash('failure', Lang::get('category.2user_case2'));
            } else {
                session()->flash('failure', Lang::get('category.2user_case1'));
            }
            return redirect()->route('backOffice.setting.warehouse.index');
        }
        return view('backOffice.setting.itemType.update', compact('category', 'request'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \DurianSoftware\Http\Requests\CategoryFormRequest|\Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $category = $this->Category->withTrashed()->find($id);
        $data = $request->all();

        if (is_null($category)) {
            Session::flash('failure', Lang::get('category.2user_case4'));
            return redirect()->route('backOffice.setting.item-type.index');
        } elseif ($category->trashed()) {
            Session::flash('failure', Lang::get('category.2user_case1'));
            return redirect()->route('backOffice.setting.item-type.index');
        }
        

        if ($request->has('duplicate')) {
            unset($data['_token']);
            if (empty($this->Category->withTrashed()->find($id))) {
                session()->flash('failure', "Data not found");
                return redirect()->route('backOffice.setting.item-type.index');
            } elseif (empty($category)) {
                // session()->flash('failure', "Can't Edit Data");
                // return redirect()->route('backOffice.setting.warehouse.index');
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

            $category = $this->Category->find($id);
            $category = $category->replicate();
            $category->save();
            Session::flash('success', Lang::get('category.Duplicate'));
            return redirect()->route('backOffice.setting.item-type.index');
        } else {
            unset($data['_token']);
            if (empty($this->Category->withTrashed()->find($id))) {
                session()->flash('failure', "Data not found");
                return redirect()->route('backOffice.setting.item-type.index');
            } elseif (empty($category)) {
                session()->flash('failure', "Can't Edit Data");
                return redirect()->route('backOffice.setting.item-type.index');
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

            $category->update($data);
            Session::flash('success', Lang::get('category.Updated'));
            return redirect()->route('backOffice.setting.item-type.index');
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
        $category = $this->Category->find($id);

        if ($request->has('UseForce')) {
            if (empty($this->Category->withTrashed()->find($id))) {
            } else {
                Session::flash('success', Lang::get('category.Force'));
                $this->Category->where('id', $id)->forceDelete();
            }
        } else {
            if (empty($this->Category->withTrashed()->find($id))) {
            } else {
                Session::flash('success', Lang::get('category.Deleted'));
                $this->Category->where('id', $id)->delete();
            }
        }
        return redirect()->back();
    }

    public function restore($id)
    {
        if (empty($this->Category->find($id))) {
            if (empty($this->Category->withTrashed()->find($id))) {
                session()->flash('failure', 'Warning Data not found');
            } else {
                $this->Category->where('id', $id)->restore();
                Session::flash('success', Lang::get('category.Restore'));
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
        $category = $this->Category->withTrashed()->find($id);

        if (is_null($category)) {
            Session::flash('failure', Lang::get('category.2user_case4'));
            return redirect()->route('backOffice.setting.item-type.index');
        } elseif ($category->trashed()) {
            Session::flash('failure', Lang::get('category.2user_case2'));
            return redirect()->route('backOffice.setting.item-type.index');
        }


        $action = route('backOffice.setting.item-type.store-duplicate');
        // $client_id = $_SESSION['client_id'];
        $client_id = $this->company_id;
        return view('backOffice.setting.itemType.create', compact('action', 'client_id'))->with('category', $category);
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

        Category::create($data);
        Session::flash('success', Lang::get('category.Save'));
        return redirect()->route('backOffice.setting.item-type.index');
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
                    if (empty(Category::withTrashed()->find($value))) {
                        $check_all = true;
                        session()->flash('failure', 'Data Change');
                        return redirect()->route('backOffice.setting.item-type.index');
                    }
                } else {
                    if (empty(Category::find($value))) {
                        $check_all = true;
                        session()->flash('failure', 'Data Change');
                        return redirect()->route('backOffice.setting.item-type.index');
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
                        Category::where('id', $value)->forceDelete();
                    } else {
                        Category::where('id', $value)->delete();
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
                'Content-Disposition' => 'attachment; filename=itemType.csv',
                'Expires'             => '0',
                'Pragma'              => 'public'
        ];

        $list = Category::all('name', 'description', 'created_at', 'updated_at', 'deleted_at')->toArray();

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
