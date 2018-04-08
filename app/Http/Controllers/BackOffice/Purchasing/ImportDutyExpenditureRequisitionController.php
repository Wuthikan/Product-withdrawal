<?php


namespace DurianSoftware\Http\Controllers\BackOffice\Purchasing;

use Illuminate\Http\Request;
use DurianSoftware\Http\Controllers\Controller;

class ImportDutyExpenditureRequisitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // search จาก field ไหนก็ได้ ทำเป็นแบบ OR ให้มี %search_term% ก็เจอ

        return view('backOffice.importDutyExpenditureRequisition.index');
    }
    
    public function create()
    {

        return view('backOffice.importDutyExpenditureRequisition.create');
    }
}
