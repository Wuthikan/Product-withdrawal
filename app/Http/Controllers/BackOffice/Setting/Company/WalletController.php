<?php

namespace DurianSoftware\Http\Controllers\BackOffice\Setting\Company;

use Illuminate\Http\Request;
use DurianSoftware\Http\Controllers\Controller;

class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($companyId)
    {
        // search จาก field ไหนก็ได้ ทำเป็นแบบ OR ให้มี %search_term% ก็เจอ

        return view('backOffice.setting.company.wallet.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($companyId)
    {
        return view('backOffice.setting.company.wallet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $companyId)
    {
        return redirect()->action('backOffice.setting.company.wallet.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($companyId, $bankId)
    {
        return view('backOffice.setting.company.wallet.show');
    }

    /**
     * Display the specified resource for printing.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function print($companyId, $bankId)
    {
        return view('backOffice.setting.company.wallet.print');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($companyId, $bankId)
    {
        return view('backOffice.setting.company.wallet.update');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $companyId, $bankId)
    {
        return redirect()->action('backOffice.setting.company.wallet.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($companyId, $bankId)
    {
        // delete ครั้งที่สองเป็น forceDelete
        // $model = Model::withTrashed()->where('id', $id)->first();
        // if ($model->trashed()) {
        //     return $model->relationship()->forceDelete();
        // }

        // delete ครั้งแรกทำเป็น soft delete
        // return $model->relationship()->delete();

        return redirect()->action('backOffice.setting.company.wallet.index');
    }

    /**
    * Restore the specified resource back to storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function restore($companyId, $bankId)
    {
        return redirect()->action('backOffice.setting.company.wallet.index');
    }
}
