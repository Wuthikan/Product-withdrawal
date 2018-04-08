@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/product/barcode/create.css')}}"/>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
    <div class="product-barcode-create">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="product-barcode-create-productcode">
                    <h3>PRODUCT CODE :</h3>
                    <input id="product-barcode-productcode" class="form-control" placeholder="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <table class="table ngin-table">
                    <thead>
                        <tr>
                            <th width="20%">DATE</th>
                            <th width="20%">USER</th>
                            <th width="60%">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>02/09/2017</td>
                            <td>A</td>
                            <td>New</td>
                        </tr>
                        <tr>
                            <td>01/09/2017</td>
                            <td>B</td>
                            <td>Approve</td>
                        </tr>
                        <tr>
                            <td>29/08/2017</td>
                            <td>C</td>
                            <td>Unapprove</td>
                        </tr>
                        <tr>
                            <td>28/08/2017</td>
                            <td>D</td>
                            <td>Edit from 4-4444-44444-44-4 Become 9-9999-99999-99-9</td>
                        </tr>
                        <tr>
                            <td>27/08/2017</td>
                            <td>E</td>
                            <td>Approve</td>
                        </tr>
                        <tr>
                            <td>26/08/2017</td>
                            <td>F</td>
                            <td>Delete</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h3>SERIAL NUMBER :</h3>
                <table class="table ngin-table product-barcode-create-no-line">
                    <tbody>
                        @for ($i=0; $i<12; $i++)
                        <tr>
                            <td width="25%">88888888</td>
                            <td width="25%">88888888</td>
                            <td width="25%">88888888</td>
                            <td width="25%">88888888</td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
                <hr class="product-barcode-create-hr">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <button type="button" class="btn btn-ngin btn-default ">
                    <span class="btn-label"><i class="fa fa-print primary" aria-hidden="true"></i></span>PRINT
                </button>
                <button type="button" class="btn btn-ngin btn-default ">
                    <span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i></span>SAVE
                </button>
                <button type="button" class="btn btn-ngin btn-default ">
                    <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL
                </button>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/setting/product/barcode/create.js') }}"></script>
@endsection