<?php

namespace DurianSoftware\Http\Controllers\BackOffice\Marketing;

use Illuminate\Http\Request;
use DurianSoftware\Http\Controllers\Controller;

class BundledProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // search จาก field ไหนก็ได้ ทำเป็นแบบ OR ให้มี %search_term% ก็เจอ

        return view('backOffice.marketing.bundledProduct.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backOffice.marketing.bundledProduct.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->action('backOffice.marketing.bundledProduct.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backOffice.marketing.bundledProduct.show');
    }

    /**
     * Display the specified resource for printing.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function print($id)
    {
        return view('backOffice.marketing.bundledProduct.print');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backOffice.marketing.bundledProduct.update');
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
        return redirect()->action('backOffice.marketing.bundledProduct.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete ครั้งที่สองเป็น forceDelete
        // $model = Model::withTrashed()->where('id', $id)->first();
        // if ($model->trashed()) {
        //     return $model->relationship()->forceDelete();
        // }

        // delete ครั้งแรกทำเป็น soft delete
        // return $model->relationship()->delete();

        return redirect()->action('backOffice.marketing.bundledProduct.index');
    }
    
    /**
    * Restore the specified resource back to storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function restore($id)
    {
        return redirect()->action('backOffice.marketing.bundledProduct.index');
    }
}
