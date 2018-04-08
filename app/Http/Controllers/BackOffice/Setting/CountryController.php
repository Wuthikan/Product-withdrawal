<?php

namespace DurianSoftware\Http\Controllers\BackOffice\Setting;

use DurianSoftware\Http\Controllers\Controller;
use DurianSoftware\Http\Requests\BackOffice\Setting\CountryCreateRequest;
use DurianSoftware\Http\Requests\BackOffice\Setting\CountryRequest;
use DurianSoftware\Models\Country;
use DurianSoftware\Services\LogThrownError;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\MessageBag;

class CountryController extends Controller
{
    public $perPage = 15;

    public function __construct()
    {
        $this->client_id = Session::get('client_id') ?: 1;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort = Session::get('sort');
        $order = Session::get('order');

        if ($request->filled('rdoBy')) {
            $sort = $request->input('rdoBy');
        }

        if ($request->filled('rdoOrder')) {
            $order = $request->input('rdoOrder');
        } elseif (empty($order)) {
            $order = 'asc';
        }

        if ($request->filled('search')) {
            $search = $request->input('search');
            Session::put('search', $search);
            $model = Country::withTrashed()->like(['name', 'code', 'description'], $search);
        } elseif ($request->filled('excel')) {
            $search = Session::get('search');
            $model = Country::withTrashed()->like(['name', 'code', 'description'], $search);
        } else {
            $model = Country::withTrashed();
        }
        $model = $model->where('client_id', $this->client_id);


        if (in_array($sort, array('name', 'description', 'code', 'created_at'))) {
            Session::put('sort', $sort);
            Session::put('order', $order);
            $model = $model->orderBy($sort, $order);
        } else {
            $model = $model->orderByDesc('created_at');
        }

        if ($request->filled('excel')) {
            $excel = collect([['Name', 'Description', 'code', 'created_at', 'updated_at', 'deleted_at']]);
            $data = $model->select(['name', 'description', 'code', 'created_at', 'updated_at', 'deleted_at'])->get();
            $excel = $excel->concat($data->toArray());
            // manual convert from UTF-8 to ISO-8859-1
            /*
            $excel = $excel->map(function ($item) {
                foreach ($item as $key => $value) {
                    $item[$key] = mb_convert_encoding($value, 'ASCII', 'UTF-8');
                }
                return $item;
            });*/
            return $excel->downloadExcel('country.csv');
        }
        $model = $model->paginate($this->perPage);

        return view('backOffice.setting.country.index', ['countries' => $model]);
    }

    public function utf2tis($string)
    {
        $str = $string;
        $res = "";
        for ($i = 0; $i < strlen($str); $i++) {
            if (ord($str[$i]) == 224) {
                $unicode = ord($str[$i+2]) & 0x3F;
                $unicode |= ( ord($str[$i+1]) & 0x3F) << 6;
                $unicode |= ( ord($str[$i]) & 0x0F ) << 12;
                $res .= chr($unicode - 0x0E00 + 0xA0);
                $i += 2;
            } else {
                $res .= $str[$i];
            };
        };
        return $res;
    }

    /**
     * Show the form for creating a new resource.
     * Or duplicate the resource if given the resource id
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $country = null;

        if ($request->has('id')) {
            $country = Country::withTrashed()->company($this->client_id)->find($request->id);
            if (empty($country)) {
                return redirect()->route('backOffice.setting.country.index')
                    ->with('warning', 'alert.force_delete_before_duplicate');
            }
            if ($country->trashed()) {
                return redirect()->route('backOffice.setting.country.index')
                    ->with('warning', 'alert.delete_before_duplicate');
            }
            if (!empty($country)) {
                $request->session()->flashInput($country->toArray());
            }
        }

        return view('backOffice.setting.country.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryRequest $request)
    {
        \DB::beginTransaction();
        try {
            //Duplicate
            if ($request->has('id')) {
                $country = Country::find($request->id)->replicate();

                $country->save();

                \DB::commit();
                
                return redirect()->route('backOffice.setting.country.edit', ['country' => $country]);
            }

            //Store
            $country = $request->only('name', 'description', 'code');
            $country['client_id'] = $this->client_id;
            Country::create($country);

            \DB::commit();

            return redirect()->route('backOffice.setting.country.index')->with('success', 'alert.save_success');
        } catch (Exception $e) {
            \DB::rollback();
            //Log Error Message
            new LogThrownError($e);
            //Add custom error message
            $errors = MessageBag::add('country', 'We cannot create a country.');
            return view('backOffice.setting.country.index')->withErrors($errors);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $country = Country::find($id);

        return view('backOffice.setting.country.show', compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $country = Country::withTrashed()->company($this->client_id)->find($id);
        if (empty($country)) {
            return redirect()->route('backOffice.setting.country.index')
                ->with('warning', 'alert.force_delete_before_edit');
        }
        if ($country->trashed()) {
            return redirect()->route('backOffice.setting.country.index')->with('warning', 'alert.delete_before_edit');
        }
        $request->session()->flashInput($country->toArray());

        return view('backOffice.setting.country.create', ['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Country $country
     * @return \Illuminate\Http\Response
     */
    public function update(CountryRequest $request, $id)
    {
        $country = Country::withTrashed()->company($this->client_id)->find($id);
        if (empty($country)) {
            return redirect()->route('backOffice.setting.country.index')
                ->with('warning', 'alert.force_delete_before_edit');
        }
        if ($country->trashed()) {
            return redirect()->route('backOffice.setting.country.index')->with('warning', 'alert.delete_before_edit');
        }
        $country->update($request->all());
        return redirect()->route('backOffice.setting.country.index')->with("success", "alert.update_success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {
            return $this->destroyMany($request);
        }
        $model = Country::withTrashed()->company($this->client_id)->find($id);
        if ($request->has('_force')) {
            if ($model == null) {
                return redirect()->route('backOffice.setting.country.index')
                    ->with('success', 'alert.force_delete_success');
            } elseif ($model->trashed()) {
                $model->forceDelete();
                return redirect()->route('backOffice.setting.country.index')
                    ->with('success', 'alert.force_delete_success');
            } else {
                return redirect()->route('backOffice.setting.country.index')
                    ->with('success', 'alert.delete_success');
            }
        } else {
            if ($model == null) {
                return redirect()->route('backOffice.setting.country.index')
                    ->with('warning', 'alert.force_delete_before_edit');
            } elseif (!$model->trashed()) {
                $model->delete();
            }
            return redirect()->route('backOffice.setting.country.index')->with('success', 'alert.delete_success');
        }
    }

    public function destroyMany(Request $request)
    {
        if ($request->has('item')) {
            $item =  $request->input('item');
            foreach ($item as $id) {
                $model = Country::withTrashed()->company($this->client_id)->find($id);
                if (!empty($model)) {
                    if ($model->trashed()) {
                        $model->forceDelete();
                    } else {
                        $model->delete();
                    }
                }
            }
            Session::flash('success', 'alert.delete_success');
        }
        return response()->json(['success'=>true]);
    }
    
    /**
        * Restore the specified resource back to storage.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
    public function restore($id)
    {
        $country = Country::withTrashed()->company($this->client_id)->find($id);
        if ($country != null) {
            if ($country->trashed()) {
                $country->restore();
            }
            return redirect()->route('backOffice.setting.country.index')->with('success', 'alert.restore_success');
        }
        return redirect()->route('backOffice.setting.country.index')->with('warning', 'alert.force_delete_before_edit');
    }
}
