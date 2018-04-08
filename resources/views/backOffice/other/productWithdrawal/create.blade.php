@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/other/product-withdrawal/create.css')}}"/>
@endsection

@section('module_name', 'PRODUCT WITHDRAWAL')
@section('page_name', 'CREATE')

@section('body')
    <div class="container-fluid x-content scroll-2">
        <section id="formProductWithdrawal">
        <form action="{{route("backOffice.other.product-withdrawal.store")}}" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <label for="">Date</label>
                    <div class='input-group date' id='datetimepicker2' >
                        <input type='text' class="form-control" />
                        <span class="input-group-addon">
                            <i class="fa fa-calendar" ></i>
                        </span>
                    </div>
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
                <div class="col-xs-12 col-md-6">
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="form-group">
                                <label for="">CONTACT NAME</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="form-group">
                                <label for="">Event</label>
                                <textarea class="form-control" rows="4"  placeholder="textarea"> </textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                        <label for="">Remark</label>
                        <textarea class="form-control" rows="4"  placeholder="textarea" style="height: 177px;"> </textarea>
                    </div>
                </div>
            </div>
            <div>
                <table class="table ngin-table product-withdrawal-table">
                    <thead>
                    <tr>
                        <th class="text-left">BARCODE | PRODUCT CODE | ITEM NAME</th>
                        <th class="centerText">WARE HOUSE</th>
                        <th class="centerText">QTY</th>
                    </tr>
                    </thead>
                    <tbody class="scroll-2">
                    <tr>
                        <td class="col-md-6">
                            <button type="button" class="btn btn-ngin btn-xs table-btn-delete pull-left">
                                <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                            </button>
                            <input type="text" class="form-control name pull-right" data-action="typeaheadProduct">
                        </td>
                        <td class="col-md-3">
                            <select name="" id="" class="form-control warehouse">
                                <option value="">W1</option>
                                <option value="">W2</option>
                                <option value="">W3</option>
                                <option value="">W4</option>
                                <option value="">W5</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" class="form-control qty" value="88">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" class="btn btn-ngin btn-xs table-btn-delete pull-left">
                                <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                            </button>
                            <input type="text" class="form-control name pull-right" data-action="typeaheadProduct">
                        </td>
                        <td>
                            <select name="" id="" class="warehouse">
                                <option value="">W1</option>
                                <option value="">W2</option>
                                <option value="">W3</option>
                                <option value="">W4</option>
                                <option value="">W5</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" class="form-control qty" value="88">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <button type="button" class="btn btn-ngin btn-xs table-btn-delete pull-left">
                                <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                            </button>
                            <input type="text" class="form-control name pull-right" data-action="typeaheadProduct">
                        </td>
                        <td>
                            <select name="" id="" class="warehouse">
                                <option value="">W1</option>
                                <option value="">W2</option>
                                <option value="">W3</option>
                                <option value="">W4</option>
                                <option value="">W5</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" class="form-control qty" value="88">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <button type="button" class="btn btn-ngin btn-xs table-btn-delete pull-left">
                                <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                            </button>
                            <input type="text" class="form-control name pull-right" data-action="typeaheadProduct">
                        </td>
                        <td>
                            <select name="" id="" class="warehouse">
                                <option value="">W1</option>
                                <option value="">W2</option>
                                <option value="">W3</option>
                                <option value="">W4</option>
                                <option value="">W5</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" class="form-control qty" value="88">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="text" class="form-control name pull-right" data-action="typeaheadProduct">
                        </td>
                        <td>
                            <select name="" id="" class="warehouse">
                                <option value="">W1</option>
                                <option value="">W2</option>
                                <option value="">W3</option>
                                <option value="">W4</option>
                                <option value="">W5</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" class="form-control qty" value="">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <hr style="border-color: #ccc; margin-top: 10px;">
            <div align="center">
                <button type="submit" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i> </span>SAVE</button>
                <button type="button" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i> </span>CANCEL</button>
            </div>
        </form>
       </section>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/other/product-withdrawal/create.js') }}"></script>
@endsection