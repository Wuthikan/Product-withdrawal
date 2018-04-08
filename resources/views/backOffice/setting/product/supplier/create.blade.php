@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/product/supplier/create.css')}}"/>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
    <div class="product-supplier-create">
        <div class="row">
            <div class="col-xs-12">
                <table class="table ngin-table product-supplier-create-no-line">
                    <tbody>
                        @for ($i=0; $i<7; $i++)
                        <tr>
                            <td width="50%">
                                <span><input type="checkbox" class="iCheck" /></span>
                                <span>
                                    <h4>Adidas Company Limited (Branch No. 00001)</h4>
                                    <h5>No. 18, Kijpanich Building, Room 405, 4th Floor Patpong Road, Suriyawong, Bangrak Bangkok 10500</h5>
                                </span> 
                            </td>
                            <td width="50%">
                                <span><input type="checkbox" class="iCheck" /></span>
                                <span>
                                    <h4>Adidas Company Limited (Branch No. 00001)</h4>
                                    <h5>No. 18, Kijpanich Building, Room 405, 4th Floor Patpong Road, Suriyawong, Bangrak Bangkok 10500</h5>
                                </span> 
                            </td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
                <hr class="product-supplier-create-hr">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <button type="button" class="btn btn-ngin btn-default ">
                    <span class="btn-label"><i class="fa fa-save success" aria-hidden="true"></i></span>SAVE
                </button>
                <button type="button" class="btn btn-ngin btn-default ">
                    <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL
                </button>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/setting/product/supplier/create.js') }}"></script>
@endsection