<?php

namespace DurianSoftware\Http\Controllers\BackOffice\Marketing\Promotion;

use Illuminate\Http\Request;
use DurianSoftware\Http\Controllers\Controller;

class ConditionGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($promotion_id)
    {
        // search จาก field ไหนก็ได้ ทำเป็นแบบ OR ให้มี %search_term% ก็เจอ

        return view('backOffice.marketing.promotion.conditionGroup.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($promotion_id)
    {
        return view('backOffice.marketing.promotion.conditionGroup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $promotion_id)
    {
        return redirect()->action('backOffice.marketing.promotion.condition-group.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($promotion_id, $id)
    {
        return view('backOffice.marketing.promotion.conditionGroup.show');
    }

    /**
     * Display the specified resource for printing.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function print($promotion_id, $id)
    {
        return view('backOffice.marketing.promotion.conditionGroup.print');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($promotion_id, $id)
    {
        return view('backOffice.marketing.promotion.conditionGroup.update');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $promotion_id, $id)
    {
        return redirect()->action('backOffice.marketing.promotion.condition-group.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($promotion_id, $id)
    {
        // delete ครั้งที่สองเป็น forceDelete
        // $model = Model::withTrashed()->where('id', $id)->first();
        // if ($model->trashed()) {
        //     return $model->relationship()->forceDelete();
        // }

        // delete ครั้งแรกทำเป็น soft delete
        // return $model->relationship()->delete();

        return redirect()->action('backOffice.marketing.promotion.condition-group.index');
    }
    
    /**
    * Restore the specified resource back to storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function restore($promotion_id, $id)
    {
        return redirect()->action('backOffice.marketing.promotion.condition-group.index');
    }
}
