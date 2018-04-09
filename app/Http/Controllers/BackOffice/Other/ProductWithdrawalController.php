<?php

namespace DurianSoftware\Http\Controllers\BackOffice\Other;

use Auth;
use DB;
use DateTime;
use DurianSoftware\Http\Controllers\Controller;
use DurianSoftware\Http\Requests\BackOffice\Other\ProductWithdrawalRequest;
use DurianSoftware\Models\DimProductWithdrawal;
use Illuminate\Http\Request;
use Excel;

class ProductWithdrawalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // search จาก field ไหนก็ได้ ทำเป็นแบบ OR ให้มี %search_term% ก็เจอ

        return view('backOffice.other.productWithdrawal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = route('backOffice.other.product-withdrawal.store');
        return view('backOffice.other.productWithdrawal.create', compact('action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductWithdrawalRequest $request)
    {
        return redirect()->action('backOffice.other.productWithdrawal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backOffice.other.productWithdrawal.show');
    }

    /**
     * Display the specified resource for printing.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function print($id)
    {
        return view('backOffice.other.productWithdrawal.print');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productwithdrawal = DimProductWithdrawal::find($id);
        $this->checkDeleteWithMsg($productwithdrawal, "Data not found");
        if (empty($productwithdrawal)) {
            return redirect()->route('backOffice.other.productWithdrawal.index')->with('warning', " Data not found ");
        }
        $edit = true;
        $action = route('backOffice.other.product-withdrawal.update', $productwithdrawal->id) ;
        return view('backOffice.other.productWithdrawal.update', compact('action', 'edit'))->with('productwithdrawal', $productwithdrawal);
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
        return redirect()->action('backOffice.other.productWithdrawal.index');
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

        return redirect()->action('backOffice.other.productWithdrawal.index');
    }
    
    /**
    * Restore the specified resource back to storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function restore($id)
    {
        return redirect()->action('backOffice.other.productWithdrawal.index');
    }

    private function checkDeleteWithMsg($data, $msg)
    {
        if (empty($data)) {
             \Session::flash('warning', $msg);
            \App::abort(302, '', ['Location' => route('backOffice.news-and-event.index')]);
        }
    }
}
