<?php

namespace DurianSoftware\Http\Controllers\BackOffice\Setting;

use DurianSoftware\Models\CustomerTier;
use DurianSoftware\Helper\FileExtensionHelper;
use DurianSoftware\Http\Controllers\Controller;
use DurianSoftware\Http\Requests\BackOffice\CustomerTierRequest;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Image;
use Lang;
use Excel;
use Response;

class CustomerTierController extends Controller
{

    public function __construct()
    {
        $this->client_id = 1;
        if (session()->has('client_id')) {
            $this->client_id = session()->get('client_id');
        }
        $this->uploadPath = 'images/back-office/customer-tier';
        $this->customerTier = CustomerTier::where('client_id', $this->client_id);
        $this->customerTierW = CustomerTier::where('client_id', $this->client_id)->withTrashed();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     // search จาก field ไหนก็ได้ ทำเป็นแบบ OR ให้มี %search_term% ก็เจอ

    //     return view('backOffice.setting.customerTier.index');
    // }

    public function index(Request $request)
    {
        $customerTiers = $this->customerTier->select();

        $OrderBy = 'asc';
        $Order = 'id';
        if (isset($_GET['rdoOrder1'])) {
            $OrderBy = $_GET['rdoOrder1'];
        }
        if (isset($_GET['rdoBy1'])) {
            $Order = $_GET['rdoBy1'];
        }

        if ($request->filled('search')) {
            $search = $request->input('search');
            $customerTiers = $customerTiers->where('name', 'LIKE', '%' . $search . '%')
                ->orWhere('description', 'LIKE', '%' . $search . '%');
            $request->flash();
        } else {
            $customerTiers = $this->customerTier->select();
        }

        $customerTiers = $customerTiers
                        ->withTrashed()
                        ->orderBy($Order, $OrderBy)
                        ->paginate(10);
        return view('backOffice.setting.customerTier.index', compact('customerTiers', 'request'));
    }

    public function excel(Excel $excel)
    {
        $headers = [
                'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0',
                'Content-type'        => 'text/csv;charset=UTF-8',
                'Content-Encoding'      => 'UTF-8',
                'Content-Disposition' => 'attachment; filename=customerTier.csv',
                'Expires'             => '0',
                'Pragma'              => 'public'
        ];

        $list = $this->customerTier
                ->select('name', 'description', 'created_at', 'updated_at', 'deleted_at')
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


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $action = route('backOffice.setting.customer-tier.store');
        if ($request->has('id')) {
            $customerTier = $this->customerTier->find($request->id);
            if (!empty($customerTier)) {
                $request->merge($customerTier->toArray());
                $request->flash();
                return view('backOffice.setting.customerTier.create', compact('action', 'customerTier'));
            } else {
                session()->flash('failure', Lang::get('customerTier.2user_case1'));
                return redirect()->route('backOffice.setting.customer-tier.index');
            }
        }
        return view('backOffice.setting.customerTier.create', compact('action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     return redirect()->action('backOffice.setting.customerTier.index');
    // }

    public function store(CustomerTierRequest $request)
    {
        if ($request->hasFile('imageProfile')) {
            $image = Input::file('imageProfile');
            $filename  = rand(11111, 99999).time() . '.' .
                FileExtensionHelper::encode($image->getClientOriginalExtension());
            $path = storage_path('images/back-office/setting/customer-tier/' . $filename);
            $data = \Image::make($image->getRealPath())->resize(200, 200)->encode($image->getClientOriginalExtension());
            File::put($path, $data);
            $request->request->set('image', $filename);
        } elseif ($request->has('_imageProfile')) {
            $filename = rand(11111, 99999).time() . '.' . File::extension($request->_imageProfile);
            $path = storage_path('images/back-office/setting/customer-tier/' . $request->_imageProfile);
            $newPath = storage_path('images/back-office/setting/customer-tier/' . $filename);
            File::copy($path, $newPath);
            $request->request->set('image', $filename);
        }
        CustomerTier::create($request->all());
        Session::flash('success', Lang::get('customerTier.Save'));
        return redirect()->route('backOffice.setting.customer-tier.index');
    }

    /**
     * duplicate resource
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function duplicate(Request $request, $id)
    // {
    //     if (!empty($id)) {
    //         $customerTier = CustomerTier::find($id);
    //         if (!empty($customerTier)) {
    //             $request->merge($customerTier->toArray());
    //             $request->flash();
    //             return view('backOffice.setting.customerTier.create');
    //         }
    //     } else {
    //         Session::flash('failure', 'Duplicate fail');
    //     }
    //     return redirect()->route('backOffice.setting.customer-tier.index');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customerTier = $this->customerTier->withTrashed()->find($id);
        if (!empty($customerTier)) {
            return view('backOffice.setting.customerTier.show', compact('customerTier'));
        } else {
            Session::flash('failure', Lang::get('customerTier.Show_fail'));
        }
        return redirect()->route('backOffice.setting.customer-tier.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customerTier = $this->customerTier->find($id);
        if (!empty($customerTier)) {
            $edit = true;
            $action = route('backOffice.setting.customer-tier.update', $customerTier->id) ;
            return view('backOffice.setting.customerTier.create', compact('action', 'edit', 'customerTier'));
        } else {
            $customerTier = $this->customerTierW->find($id);
            if (empty($customerTier)) {
                session()->flash('failure', Lang::get('customerTier.2user_case2'));
                return redirect()->route('backOffice.setting.customer-tier.index');
            }

            $customerTier = $this->customerTier->find($id);
            if (empty($customerTier)) {
                session()->flash('failure', Lang::get('customerTier.2user_case1'));
                return redirect()->route('backOffice.setting.customer-tier.index');
            }
        }
        return redirect()->route('backOffice.setting.customer-tier.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerTier $customerTier)
    {
        $request->validate([
            'name' => ['required','min:3','max:255',Rule::unique('dim_customer_tiers')->ignore($customerTier->id)],
            'description' => 'required'
        ]);

        $customerTier = $this->customerTierW->find($customerTier->id);
        if (empty($customerTier)) {
            session()->flash('failure', Lang::get('customerTier.2user_case4'));
            return redirect()->route('backOffice.setting.customerTier.index');
        }
        $customerTier = $this->customerTier->find($customerTier->id);
        if (empty($customerTier)) {
            session()->flash('failure', Lang::get('customerTier.2user_case3'));
            return redirect()->route('backOffice.setting.customerTier.index');
        }

        if ($request->hasFile('imageProfile')) {
            if ($customerTier->image) {
                $pathDelete = storage_path('images/back-office/setting/customer-tier/' . $customerTier->image);
                File::delete($pathDelete);
            }
            $image = Input::file('imageProfile');
            $filename  = rand(11111, 99999).time() . '.' .
                FileExtensionHelper::encode($image->getClientOriginalExtension());
            $path = storage_path('images/back-office/setting/customer-tier/' . $filename);
            $data = \Image::make($image->getRealPath())->resize(200, 200)->encode($image->getClientOriginalExtension());
            File::put($path, $data);
            $request->request->set('image', $filename);
        }
        $customerTier->update($request->all());
        Session::flash('success', Lang::get('customerTier.Updated'));
        return redirect()->route('backOffice.setting.customer-tier.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $customerTier = $this->customerTier->withTrashed()->find($id);
        if (!empty($customerTier)) {
            // Force delete if record is already soft-delete
            
            // Only force=true in order to force delete
            if ($request->has('force')) {
                if ($customerTier->image) {
                    $pathDelete = storage_path('images/back-office/setting/customer-tier/' . $customerTier->image);
                    File::delete($pathDelete);
                }

                if (empty($customerTier)) {
                    session()->flash('success', Lang::get('customerTier.Force'));
                } else {
                    Session::flash('success', Lang::get('customerTier.Force'));
                    $customerTier->forceDelete();
                }
            } elseif (!$request->has("force")) {
                // soft delete
                if (empty($this->customerTier->find($id))) {
                    Session::flash('success', Lang::get('customerTier.Deleted'));
                } else {
                    Session::flash('success', Lang::get('customerTier.Deleted'));
                    $this->customerTier->where('id', $id)->delete();
                }
            } else {
                Session::flash('failure', Lang::get('customerTier.Force_Cannot'));
            }
        }
        return redirect()->route('backOffice.setting.customer-tier.index');
    }

    /**
     * @param  Delete all
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function destroyAll(Request $request)
    {

        $data = $request->all();
        $check_all = false;//ข้อมูล มีการเปลี่ยนแปลไหม
        if ($data['ar_delete_all']) {
            $ar_delete_all = explode(",", $data['ar_delete_all']);
            $check_force = explode(",", $data['check_force']);
            foreach ($ar_delete_all as $key => $value) {
                //ค่าที่ส่งมาเปี่ยน soft หรือ force;
                if ($check_force[$key]=="true") {
                    if (empty(CustomerTier::withTrashed()->find($value))) {
                        $check_all = true;
                        session()->flash('failure', 'Data Change');
                        return redirect()->route('backOffice.setting.customer-tier.index');
                    }
                } else {
                    if (empty(CustomerTier::find($value))) {
                        $check_all = true;
                        session()->flash('failure', 'Data Change');
                        return redirect()->route('backOffice.setting.customer-tier.index');
                    }
                }
            }
            if ($check_all) {
                // session()->flash('failure', 'ข้อมูลมีการเปลี่ยนแปลง');
            } else {
                foreach ($ar_delete_all as $key => $value) {
                    //ค่าที่ส่งมาเปี่ยน soft หรือ force

                    if ($check_force[$key]=="true") {
                        CustomerTier::where('id', $value)->forceDelete();
                    } else {
                        CustomerTier::where('id', $value)->delete();
                    }
                }
                session()->flash('success', Lang::get('customerTier.Deleted'));
            }
        }
        return redirect()->route('backOffice.setting.customer-tier.index');
    }
    
    /**
    * Restore the specified resource back to storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function restore($id)
    {
        $customerTier = CustomerTier::onlyTrashed()->whereId($id)->first();
        if (!empty($customerTier)) {
            $customerTier->restore();
            session()->flash('success', Lang::get('customerTier.Restore'));
        } else {
            Session::flash('failure', Lang::get('customerTier.Restore_fail'));
        }
        return redirect()->route('backOffice.setting.customer-tier.index')->with('success', 'Restore success');
    }

    public function getImage($filename)
    {
        $ext = File::extension($filename);
        $ext = FileExtensionHelper::decode($ext);
        $path = storage_path('images/back-office/setting/customer-tier/'. $filename);
        return Image::make($path)->response($ext);
    }
}
