@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/other/expense-requisition/create.css')}}"/>
@endsection

@section('module_name', 'EXPENSE REQUISITION')
@section('page_name', 'CREATE')

@section('body')
    <div class="container-fluid x-content scroll-2">
        <section id="formExpenseRequisition">
            <form action="{{route("backOffice.other.product-withdrawal.store")}}" method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="row er-create-header">
                    <div class="col-md-12">
                        <div class="col-md-6 pull-left">
                            <span>ER # 00002</span>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-6 pull-right">
                                <label>DATE</label>
                                <div class="form-group">
                                    <div class="input-group" id="datetimepicker">
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <label for="">DEPARTMENT</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                            <label for="">REFUND ( CLAIM WITH ... )</label>
                            <input class="form-control" type="text" data-action="typeaheadCustomer">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                            <label for="">REFERENCING DOCUMENT NUMBER</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="">COMPANY</label>
                            <input class="form-control" type="text" data-action="typeaheadCustomer">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 uploadPhotoHeaderSection">
                                <div class="form-group">
                                    <label>SUPPLIER QUOTATION</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 uploadPhotoSection">
                                <div class="form-group">
                                    <div class="uploadPreview-1">
                                        <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 uploadPhotoSection">
                                <div class="form-group">
                                    <div class="uploadPreview-2">
                                        <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 uploadPhotoSection">
                                <div class="form-group">
                                    <div class="uploadPreview-3">
                                        <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 uploadPhotoSection">
                                <div class="form-group">
                                    <div class="uploadPreview-4">
                                        <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 uploadPhotoSection">
                                <div class="form-group">
                                    <div class="uploadPreview-5">
                                        <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                                    </div>
                                </div>
                            </div>
                            <div id="uploadMoreSection"></div>
                            <div class="col-md-2 uploadPhotoSection">
                                <div class="form-group">
                                    <div class="uploadAddMore"><i class="fa fa-plus"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="">Event</label>
                            <textarea class="form-control" rows="4"  placeholder="textarea"> </textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="">Remark</label>
                            <textarea class="form-control" rows="4"  placeholder="textarea"> </textarea>
                        </div>
                    </div>
                </div>
                <div>
                    <table class="table ngin-table expense-reqisition-table">
                        <thead>
                        <tr>
                            <th class="col-md-5 text-left">ITEM NAME</th>
                            <th class="col-md-1 centerText">QTY</th>
                            <th class="col-md-2 centerText">PRICE / UNIT<br/><span>(EXCL. VAT)</span></th>
                            <th class="col-md-2 centerText">DISCOUNT / UNIT<br/><span>(EXCL. VAT)</span></th>
                            <th class="col-md-2 centerText">TOTAL AMOUNT<br/><span>(EXCL. VAT)</span></th>
                        </tr>
                        </thead>
                        <tbody class="scroll-2">
                        <tr>
                            <td>
                                <button type="button" class="btn btn-ngin btn-xs table-btn-delete pull-left">
                                    <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                                </button>
                                <input type="text" class="form-control pull-right" value="ค่าเช่า">
                            </td>
                            <td>
                                <input type="text" class="form-control" value="1">
                            </td>
                            <td>
                                <input type="text" class="form-control" value="11,000.00">
                            </td>
                            <td>
                                <input type="text" class="form-control" value="1,000.00">
                            </td>
                            <td>
                                <span>10,000.00</span>
                                <span class="pull-right">THB</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-ngin btn-xs table-btn-delete pull-left">
                                    <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                                </button>
                                <input type="text" class="form-control pull-right" value="ค่าบริการ">
                            </td>
                            <td>
                                <input type="text" class="form-control" value="1">
                            </td>
                            <td>
                                <input type="text" class="form-control" value="1,100.00">
                            </td>
                            <td>
                                <input type="text" class="form-control" value="100.00">
                            </td>
                            <td>
                                <span>1,000.00</span>
                                <span class="pull-right">THB</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-ngin btn-xs table-btn-delete pull-left">
                                    <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                                </button>
                                <input type="text" class="form-control pull-right" value="ค่าขนส่ง">
                            </td>
                            <td>
                                <input type="text" class="form-control" value="1">
                            </td>
                            <td>
                                <input type="text" class="form-control" value="110,000.00">
                            </td>
                            <td>
                                <input type="text" class="form-control" value="10,000.00">
                            </td>
                            <td>
                                <span>100,000.00</span>
                                <span class="pull-right">THB</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control pull-right">
                            </td>
                            <td>
                                <input type="text" class="form-control" value="">
                            </td>
                            <td>
                                <input type="text" class="form-control" value="">
                            </td>
                            <td>
                                <input type="text" class="form-control" value="">
                            </td>
                            <td>
                                <span></span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <hr class="hr-bottom">
                <div class="row">
                    <div class="col-md-2">
                        <label>INSTALLMENT</label>
                    </div>
                    <div class="col-md-6 installment">
                        <div class="row">
                            <label class="pull-left">1.</label>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="100,000.00">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select name="" id="" class="form-control warehouse">
                                        <option value="">THB</option>
                                        <option value="">%</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="pull-left">2.</label>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="10,000.00">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select name="" id="" class="form-control warehouse">
                                        <option value="">THB</option>
                                        <option value="">%</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="pull-left">3.</label>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select name="" id="" class="form-control warehouse">
                                        <option value="">THB</option>
                                        <option value="">%</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 summary">
                        <div class="row">
                            <div class="col-md-4"><label>TOTAL</label></div>
                            <div class="col-md-6">111,000.00</div>
                            <div class="col-md-2"><label>THB</label></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><label>DISCOUNT</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control input-xs" value="1,000.00">
                            </div>
                            <div class="col-md-2"><label>THB</label></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><label>SUB TOTAL</label></div>
                            <div class="col-md-6">110,000.00</div>
                            <div class="col-md-2"><label>THB</label></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><label>VAT 7%</label></div>
                            <div class="col-md-6">7,700.00</div>
                            <div class="col-md-2"><label>THB</label></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><label>NET TOTAL</label></div>
                            <div class="col-md-6 net-total">118,700.00</div>
                            <div class="col-md-2"><label>THB</label></div>
                        </div>
                    </div>
                </div>
                <hr class="hr-bottom">
                <div align="center">
                    <button type="submit" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i> </span>SAVE</button>
                    <button type="button" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i> </span>CANCEL</button>
                </div>
            </form>
        </section>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/other/expense-requisition/create.js') }}"></script>
@endsection