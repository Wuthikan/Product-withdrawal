<?php
namespace DurianSoftware\Http\Controllers\BackOffice\Setting;

use DurianSoftware\Http\Controllers\Controller;
use DurianSoftware\Http\Requests\CompanyGroupRequest;
use DurianSoftware\Models\Company;
use DurianSoftware\Models\CompanyGroup;
use DurianSoftware\Models\CustomerTier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyGroupController extends Controller
{
    public $perPage = 15;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search') && $request->search != '') {
            $data_search = $request->search;

            $CompanyGroup = CompanyGroup::where('name', 'LIKE', "%{$data_search}%")
                ->orWhere('description', 'LIKE', '%' . $data_search . '%');

            $data['search'] = $data_search;
        } else {
            $CompanyGroup = CompanyGroup::withTrashed();
            $data['search'] = '';
        }

        if ($request->has('sort')) {
            if ($request->sort['0'] == '-') {
                $CompanyGroup = $CompanyGroup->orderBy(substr($request->sort, 1), '');
            } else {
                $CompanyGroup = $CompanyGroup->orderBy($request->sort);
            }
        } else {
            $CompanyGroup = $CompanyGroup->orderBy('id', 'desc');
        }

        $data['CompanyGroup'] = $CompanyGroup->paginate($this->perPage);
        return view('backOffice.companyGroup.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (isset($_GET['id'])) {
            $duplicate = CompanyGroup::withTrashed()->find($_GET['id']);
            if ($duplicate->trashed()) {
                return redirect()
                ->route('backOffice.setting.company-group.index')
                ->with('error', 'Warning Data not found');
            }

            if (!empty($duplicate)) {
                $duplicate->name .= '_copy';
                $data['duplicate'] = $duplicate;
            } else {
                return back();
            }
        }

        $data['customertiers'] = CustomerTier::get();
        $data['company'] = Company::where('company_group_id', null)->orWhere('company_group_id', 0)->get();

        return view('backOffice.companyGroup.create', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyGroupRequest $request)
    {
        // return $request->except('_token');
        $CompanyGroup = CompanyGroup::create($request->except('_token'));

        $this->ChooseCompany($request, $CompanyGroup);

        return redirect()->route('backOffice.setting.company-group.index')->with('success', 'Create success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['CompanyGroup'] = CompanyGroup::withTrashed()->find($id);

        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['CompanyGroup'] = CompanyGroup::withTrashed()->find($id);
        if ($data['CompanyGroup']->trashed()) {
            return redirect()
            ->route('backOffice.setting.company-group.index')
            ->with('error', 'Warning Can\'t Edit Data');
        }

        $data['customertiers'] = CustomerTier::get();
        $data['company'] = Company::where('company_group_id', 0)->orWhere('company_group_id', $id)->get();

        if ($data['CompanyGroup'] == null) {
            return redirect()->route('backOffice.setting.company-group.index');
        }

        return view('backOffice.companyGroup.update')
            ->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyGroupRequest $request, $id)
    {
        $CompanyGroup = CompanyGroup::withTrashed()->find($id);

        if ($CompanyGroup->trashed()) {
            return redirect()
            ->route('backOffice.setting.company-group.index')
            ->with('error', 'Warning Can\'t Edit Data');
        }

        if ($request->method() == 'PATCH') {
            if (!$CompanyGroup->trashed()) {
                $CompanyGroup->status = ($CompanyGroup->status == 'off' ? 'on' : 'off');
                $CompanyGroup->save();
                return ['state' => true, 'id' => $id, 'status' => $CompanyGroup->status];
            }
            return ['state' => false];
        }

        foreach ($CompanyGroup->toArray() as $key => $value) {
            if ($key != $CompanyGroup->getKeyName()) {
                $CompanyGroup->$key = (isset($request[$key]) ? $request[$key] : $CompanyGroup->$key);
            }
        }

        $CompanyGroup->update();

        $this->ChooseCompany($request, $CompanyGroup);

        return redirect()->route('backOffice.setting.company-group.index')->with('success', 'Update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($id == 'records') {
            $request = Request()->post();
            try {
                DB::beginTransaction();
                $CompanyGroup = CompanyGroup::withTrashed()->whereIn('id', $request['id'])->get();
                foreach ($CompanyGroup as $company) {
                    if ($company->trashed()) {
                        $company->forceDelete();
                    } else {
                        $company->delete();
                    }
                }
                DB::commit();
                return redirect()
                ->route('backOffice.setting.company-group.index')
                ->with('success', 'Delete success');
            } catch (\Exception $e) {
                DB::rollBack();
                return back();
            }
        } else {
            $CompanyGroup = CompanyGroup::withTrashed()->find($id);
            if (!empty($CompanyGroup)) {
                if ($CompanyGroup->trashed()) {
                    if ($_POST['delete'] == 'Force Delete') {
                        Company::where(['company_group_id' => $CompanyGroup->id])->update(['company_group_id' => 0]);
                        $CompanyGroup->forceDelete();
                        return redirect()
                        ->route('backOffice.setting.company-group.index')
                        ->with('success', 'Force delete success');
                    } else {
                        return back();
                    }
                }
                $CompanyGroup->delete();
            }
            return redirect()->route('backOffice.setting.company-group.index')->with('success', 'Delete success');
        }
    }

    public function restore($id)
    {
        $conpanygroup = CompanyGroup::withTrashed()->find($id);
        if (!empty($conpanygroup)) {
            CompanyGroup::withTrashed()->find($id)->restore();
            return redirect()->route('backOffice.setting.company-group.index')->with('success', 'Restore success');
        } else {
            return redirect()->route('backOffice.setting.company-group.index')->with('error', 'Data Not Found');
        }
    }

    private function chooseCompany($request, $CompanyGroup)
    {
        Company::where(['company_group_id' => $CompanyGroup->id])->update(['company_group_id' => 0]);

        if (isset($request['company_id']) && !empty($request['company_id'])) {
            foreach ($request['company_id'] as $company_id) {
                $company = Company::find($company_id);
                $company->company_group_id = $CompanyGroup->id;
                $company->update();
            }
        }
    }
}
