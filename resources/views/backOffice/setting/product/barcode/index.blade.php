@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/product/barcode/index.css')}}"/>
    <style>
        .product-barcode-list-2-checked-status .checked{
            position: relative;
        }
        .product-barcode-list-1-button button:last-child{
            margin-right: 0;
        }
    </style>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
<div class="product-barcode">
    <section class="section-header-index">
        <form class="form-inline form-header-index">
            <div class="row">
                <table>
                    <tr>
                        <td class="col-1" style="min-width:0;width:3%;">
                            <div class="col-1-content">
                                <div class="form-group">
                                    <button type="button" class="btn btn-default-background" onclick="window.location='{{route('backOffice.setting.product.barcode.create', [1]) }}'">
                                        <span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
                                    </button>
                                </div>
                            </div>
                        </td>
                        <td class="col-2">
                            <div class="" >
                                <div class="form-group form-fixed-width" >
                                    <div class="icon-addon addon-sm">
                                        <input  type="text" placeholder="SEARCH" class="form-control search" id="SEARCH" >
                                        <label for="search"  class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="col-3" style="min-width:0;width:1%;">
                            <div class="text-right col-3-content">
                                <div class="form-group">
                                    <button type="button"  class="btn  btn-default-background">
                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span><span class="btn-label-label">Delete All</span>
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </section>
    <!-- list -->
    <div class="scroll-2">
        <div class="product-barcode-list">
            <div class="row product-barcode-list-1">
                <div class="col-md-8 col-xs-12 product-barcode-list-1-data">
                    <p class="text-muted"><h4 style="font-weight : bold;">BARCODE</h4></p>
                    <p class="text-muted "><h3>8-8888-88888-88-8</h3></p>
                    <p class="text-muted" style="text-transform: uppercase; margin-right: 30px;"><span style="font-weight : bold">presented by </span> : LaksiKa</p>
                </div>
                <div class="col-md-4 col-xs-12 product-barcode-list-1-button text-right">

                    <div class="product-barcode-button-2">
                        <a href="#" class="ngin-group">
                            <span class="ngin-group-label"><i class="fa fa-check-circle success" aria-hidden="true"></i></span>
                            <span class="ngin-group-text">Approve</span>
                        </a>
                        <a href="#" class="ngin-group">
                            <span class="ngin-group-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                            <span class="ngin-group-text">Reject</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row product-barcode-list-1">
                <div class="col-md-8 col-xs-12 product-barcode-list-1-data">
                    <p class="text-muted"><h4 style="font-weight : bold;">BARCODE</h4></p>
                    <p class="text-muted "><h3>8-8888-88888-88-8</h3></p>
                    <p class="text-muted" style="text-transform: uppercase; margin-right: 30px;"><span style="font-weight : bold">presented by </span> : LaksiKa</p>
                </div>
                <div class="col-md-4 col-xs-12 product-barcode-list-1-button text-right">
                    <div class="product-barcode-button-2">
                        <a href="#" class="ngin-group">
                            <span class="ngin-group-label"><i class="fa fa-check-circle success" aria-hidden="true"></i></span>
                            <span class="ngin-group-text">Approve</span>
                        </a>
                        <a href="#" class="ngin-group">
                            <span class="ngin-group-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                            <span class="ngin-group-text">Reject</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row product-barcode-list-1">
                <div class="col-md-8 col-xs-12 product-barcode-list-1-data">
                    <p class="text-muted"><h4 style="font-weight : bold;">BARCODE</h4></p>
                    <p class="text-muted "><h3>8-8888-88888-88-8</h3></p>
                    <p class="text-muted" style="text-transform: uppercase; margin-right: 30px;"><span style="font-weight : bold">presented by </span> : LaksiKa</p>
                </div>
                <div class="col-md-4 col-xs-12 product-barcode-list-1-button text-right">
                    <div class="product-barcode-button-2">
                        <a href="#" class="ngin-group">
                            <span class="ngin-group-label"><i class="fa fa-check-circle success" aria-hidden="true"></i></span>
                            <span class="ngin-group-text">Approve</span>
                        </a>
                        <a href="#" class="ngin-group">
                            <span class="ngin-group-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                            <span class="ngin-group-text">Reject</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row product-barcode-list-2">
                <div class="col-md-6 col-xs-12 product-barcode-list-2-data">
                    <p class="text-muted"><h4 style="font-weight : bold;">BARCODE</h4></p>
                    <p class="text-muted"><h3>8-8888-88888-88-8</h3></p>
                    <p class="text-muted" style="text-transform: uppercase; margin-right: 30px;"><span style="font-weight : bold">presented by </span> : LaksiKa</p>
                </div>
                <div class="col-md-3 col-xs-12  product-barcode-list-2-checked">
                    <div class="product-barcode-list-2-checked-status">
                        <span style="display: inline-block;position: relative;top: -5px;">STATUS</span>
                        <span class="product-barcode-list-2-checked-status-input">
                            <input type="checkbox" class="switchCheck" checked>
                        </span>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 text-right">
                    <div class="product-barcode-button-1">
                        <a href="#" class="ngin-group">
                            <span class="ngin-group-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                            <span class="ngin-group-text">Edit</span>
                        </a>
                        <a href="#" class="ngin-group">
                            <span class="ngin-group-label"><i class="fa fa-undo info" aria-hidden="true"></i></span>
                            <span class="ngin-group-text">Undo</span>
                        </a>
                        <a href="#" class="ngin-group">
                            <span class="ngin-group-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                            <span class="ngin-group-text">Delete</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row product-barcode-list-3">
                <div class="col-md-6 col-xs-12 product-barcode-list-3-data">
                    <p class="text-muted"><h4 style="font-weight : bold;">BARCODE</h4></p>
                    <p class="text-muted"><h3>8-8888-88888-88-8</h3></p>
                    <p class="text-muted" style="text-transform: uppercase; margin-right: 30px;"><span style="font-weight : bold;">presented by </span> : LaksiKa<span style="margin-left: 30px; font-weight : bold;">APPROVED DATE</span> : 18/20/57</p>
                </div>
                <div class="col-md-3 col-xs-12  product-barcode-list-3-checked">
                    <div class="product-barcode-list-2-checked-status">
                        <span style="display: inline-block;position: relative;top: -5px;">STATUS</span>
                        <span class="product-barcode-list-2-checked-status-input">
                            <input type="checkbox" class="switchCheck" checked>
                        </span>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 product-barcode-list-3-button text-right">
                    <h5><b>APPROVED BY</b></h5>
                    <button type="button" class="btn btn-danger">
                        UnApprove <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                    </button>
                </div>
            </div>
            <div class="row product-barcode-list-2">
                <div class="col-md-6 col-xs-12 product-barcode-list-2-data">
                    <p class="text-muted"><h4 style="font-weight : bold;">BARCODE</h4></p>
                    <p class="text-muted"><h3>8-8888-88888-88-8</h3></p>
                    <p class="text-muted" style="text-transform: uppercase; margin-right: 30px;"><span style="font-weight : bold;">presented by </span> : LaksiKa</p>
                </div>
                <div class="col-md-3 col-xs-12  product-barcode-list-2-checked">
                    <div class="product-barcode-list-2-checked-status">
                        <span style="display: inline-block;position: relative;top: -5px;">STATUS</span>
                        <span class="product-barcode-list-2-checked-status-input">
                            <input type="checkbox" class="switchCheck" checked>
                        </span>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 text-right">
                    <div class="product-barcode-button-1">
                        <a href="#" class="ngin-group">
                            <span class="ngin-group-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                            <span class="ngin-group-text">Edit</span>
                        </a>
                        <a href="#" class="ngin-group">
                            <span class="ngin-group-label"><i class="fa fa-undo info" aria-hidden="true"></i></span>
                            <span class="ngin-group-text">Undo</span>
                        </a>
                        <a href="#" class="ngin-group">
                            <span class="ngin-group-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                            <span class="ngin-group-text">Delete</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- list -->
    <div class="row page-showing-pagination">
            <div class="col-xs-6 showing">
                Showing 1-10 of 100
            </div>
            <div class="col-xs-6 page-pagination">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-number">
                        <a href="#" aria-label="Previous" class="not-active">
                            Previous
                        </a>
                        </li>
                        <li class="page-number  active"><a href="#">1</a></li>
                        <li class="page-number"><a href="#">2</a></li>
                        <li class="page-number"><a href="#">3</a></li>
                        <li class="page-number"><a href="#">4</a></li>
                        <li class="page-number"><a href="#">5</a></li>
                        <li class="page-number">
                        <a href="#" aria-label="Next" >
                            Next
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/setting/product/barcode/index.js') }}"></script>
@endsection
