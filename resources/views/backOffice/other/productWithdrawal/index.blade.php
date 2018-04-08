@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/other/product-withdrawal/index.css')}}"/>
@endsection

@section('module_name', 'PRODUCT WITHDRAWAL')
@section('page_name', 'INDEX')

@section('body')
<div class="container-fluid x_content">
    <section class="section-header-index">
        <form class="form-inline form-header-index">
            <div class="row">
                <table style="width: 100%">
                    <tr>
                        <td class="col-1" style="min-width: inherit;width: 250px;">
                            <div class="col-1-content" >
                                <div class="form-group select-all">
                                    <input type="checkbox"  checked class="iCheck" id="selectall" name="selectall" >
                                    <label for="selectall" class="iCheck-label" >Select All</label>
                                </div>
                                <div class="form-group">
                                    <a href="{{ route('backOffice.other.product-withdrawal.create') }}" class="btn btn-default-background">
                                        <span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
                                    </a>
                                </div>
                                <div class="form-group button-2">
                                    <button type="button"    class="btn btn-default-background">
                                        <span class="btn-label"><span class="fa-approve-all"></span></span><span class="btn-label-label">Approve All</span>
                                    </button>
                                </div>
                            </div>
                        </td>
                        <td class="col-2" style="width: inherit;">
                            <div class="" >
                                <div class="form-group form-fixed-width" >
                                    <div class="icon-addon addon-sm">
                                        <input  type="text" placeholder="SEARCH" class="form-control search" id="SEARCH" >
                                        <label for="search"  class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="col-3" style="min-width: inherit; width: 285px;">
                            <div class="text-right col-3-content">
                                <div class="form-group">
                                    <button type="button" class="btn  btn-default-background">
                                        <span class="btn-label"><i class="fa fa-file-pdf-o pdf" aria-hidden="true"></i></span><span class="btn-label-label">PDF</span>
                                    </button>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn  btn-default-background">
                                        <span class="btn-label"><i class="fa fa-file-excel-o excel" aria-hidden="true"></i></span><span class="btn-label-label">Excel</span>
                                    </button>
                                </div>
                                <div class="form-group">
                                    <button type="button"  class="btn  btn-default-background">
                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span><span class="btn-label-label">Delete All</span>
                                    </button>
                                </div>
                                <div class="form-group">
                                    <div class="btn-group ngin-dropdown-sort">
                                        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-sort-alpha-desc"></i> SORT
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-form">
                                            <li class="title">ORDER</li>
                                            <li><input type="radio" id="radioAsc" name="rdoOrder" checked="checked" value="asc"><label for="radioAsc">Ascending</label></li>
                                            <li><input type="radio" id="radioDes" name="rdoOrder" value="des"><label for="radioDes">Descending</label></li>
                                            <li role="separator" class="divider"></li>
                                            <li class="title">BY</li>
                                            <li><input type="radio" id="radioId" name="rdoBy" checked="checked" value="id"><label for="radioId">ID</label></li>
                                            <li><input type="radio" id="radioDocDate" name="rdoBy" value="doc_date"><label for="radioDocDate">Document Date</label></li>
                                            <li><input type="radio" id="radioCusName" name="rdoBy" value="cus_name"><label for="radioCusName">Customer Name</label></li>
                                            <li><input type="radio" id="radioAmount" name="rdoBy" value="amount"><label for="radioAmount">Amount</label></li>
                                            <li><input type="radio" id="radioStatus" name="rdoBy" value="status"><label for="radioStatus">Status</label></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </section>
    <section class="panel-body panel-content scroll-2">
        <div class="panel-group group-product-withdrawal" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" style="padding-bottom: 0;">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                            <table class="table product-withdrawal-table">
                                <tbody>
                                <tr>
                                    <td class="tr-checkbox col-md-1">
                                        <input type="checkbox" class="iCheck" />
                                    </td>
                                    <td class="col-md-4">
                                            <span class="doc-id">
                                                NO#<span>999999</span>
                                            </span>
                                        <span class="ngin-green"><span class="fa-approve-all"></span></span><span class="statusText">Approved</span>
                                        <p>04/09/2017</p>
                                    </td>
                                    <td class="col-md-6">
                                        <span>EVENT NAME</span>
                                        <p>Lolem ipsum  dolor sit amlet ...</p>
                                    </td>
                                    <td class="col-md-1">
                                        <span>List By </span>
                                        <p>Nof</p>
                                    </td>
                                    <td class="col-md-1">
                                        <span>RECEIVED </span>
                                        <p><span>8</span>/12</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </a>
                    </h4>
                </div>
                <div id="collapse-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-1">
                    <div class="panel-body scroll-2">
                        <table class="table ngin-table itemList">
                            <thead>
                            <tr>
                                <td class="tr-checkbox"></td>
                                <th class="itemName" style="padding-left: 0 !important;">BARCODE | PRODUCT CODE | ITEM NAME</th>
                                <th>AMOUNT</th>
                                <th>RECEIVED</th>
                                <th></th>
                                <th style="border: 0"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $totalItem = 6; ?>
                            @for($iItem = 0; $iItem < $totalItem; $iItem++)
                                <tr>
                                    <td class="tr-checkbox"></td>
                                    <td class="itemName" style="padding-left: 0 !important;">8888 Lorem Ipsum (Unit)</td>
                                    <td>2</td>
                                    <td>{{rand(1, 2)}}</td>
                                    @if($iItem == 0)
                                        <td rowspan="{{$totalItem}}" class="itemCtrl" align="right">
                                            <p>
                                                <button type="button" class="btn btn-ngin btn-default">
                                                    <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                </button>
                                            </p>
                                            <p>
                                                <button type="button" class="btn btn-ngin btn-default">
                                                    <span class="btn-label"><i class="fa fa-undo info" aria-hidden="true"></i></span>Undo
                                                </button>
                                            </p>
                                            <p>
                                                <button type="button" class="btn btn-ngin btn-default">
                                                    <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                </button>
                                            </p>
                                        </td>
                                    @endif
                                    <td style="border-left: 0"></td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-group group-product-withdrawal" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" style="padding-bottom: 0;">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-2" aria-expanded="true" aria-controls="collapse-2">
                            <table class="table product-withdrawal-table">
                                <tbody>
                                <tr>
                                    <td class="tr-checkbox col-md-1">
                                        <input type="checkbox" class="iCheck" />
                                    </td>
                                    <td class="col-md-4">
                                            <span class="doc-id">
                                                NO#<span>999999</span>
                                            </span>
                                        <span class="ngin-green"><span class="fa-exclamation"></span></span> <span class="statusText">Waiting for approve</span>
                                        <p>04/09/2017</p>
                                    </td>
                                    <td class="col-md-6">
                                        <span>EVENT NAME</span>
                                        <p>Lolem ipsum  dolor sit amlet ...</p>
                                    </td>
                                    <td class="col-md-1">
                                        <span>List By </span>
                                        <p>Nof</p>
                                    </td>
                                    <td class="col-md-1">
                                        <span>RECEIVED </span>
                                        <p><span>8</span>/12</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </a>
                    </h4>
                </div>
                <div id="collapse-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-2">
                    <div class="panel-body scroll-2">
                        <table class="table ngin-table itemList">
                            <thead>
                            <tr>
                                <td class="tr-checkbox"></td>
                                <th class="itemName" style="padding-left: 0 !important;">BARCODE | PRODUCT CODE | ITEM NAME</th>
                                <th>AMOUNT</th>
                                <th>RECEIVED</th>
                                <th></th>
                                <th style="border: 0"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $totalItem = 6; ?>
                            @for($iItem = 0; $iItem < $totalItem; $iItem++)
                                <tr>
                                    <td class="tr-checkbox"></td>
                                    <td class="itemName" style="padding-left: 0 !important;">8888 Lorem Ipsum (Unit)</td>
                                    <td>2</td>
                                    <td>{{rand(1, 2)}}</td>
                                    @if($iItem == 0)
                                        <td rowspan="{{$totalItem}}" class="itemCtrl" align="right">
                                            <p>
                                                <button type="button" class="btn btn-ngin btn-default">
                                                    <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                </button>
                                            </p>
                                            <p>
                                                <button type="button" class="btn btn-ngin btn-default">
                                                    <span class="btn-label"><i class="fa fa-undo info" aria-hidden="true"></i></span>Undo
                                                </button>
                                            </p>
                                            <p>
                                                <button type="button" class="btn btn-ngin btn-default">
                                                    <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                </button>
                                            </p>
                                        </td>
                                    @endif
                                    <td style="border-left: 0"></td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-group group-product-withdrawal" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" style="padding-bottom: 0;">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-3" aria-expanded="true" aria-controls="collapse-3">
                            <table class="table product-withdrawal-table">
                                <tbody>
                                <tr>
                                    <td class="tr-checkbox col-md-1">
                                        <input type="checkbox" class="iCheck" />
                                    </td>
                                    <td class="col-md-4">
                                            <span class="doc-id">
                                                NO#<span>999999</span>
                                            </span>
                                        <span class="ngin-red"><i class="fa fa fa-times-circle-o" aria-hidden="true"></i></span> <span class="statusText">Rejected</span>
                                        <p>04/09/2017</p>
                                    </td>
                                    <td class="col-md-6">
                                        <span>EVENT NAME</span>
                                        <p>Lolem ipsum  dolor sit amlet ...</p>
                                    </td>
                                    <td class="col-md-1">
                                        <span>List By </span>
                                        <p>Nof</p>
                                    </td>
                                    <td class="col-md-1">
                                        <span>RECEIVED </span>
                                        <p><span>8</span>/12</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </a>
                    </h4>
                </div>
                <div id="collapse-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-3">
                    <div class="panel-body scroll-2">
                        <table class="table ngin-table itemList">
                            <thead>
                            <tr>
                                <td class="tr-checkbox"></td>
                                <th class="itemName" style="padding-left: 0 !important;">BARCODE | PRODUCT CODE | ITEM NAME</th>
                                <th>AMOUNT</th>
                                <th>RECEIVED</th>
                                <th></th>
                                <th style="border: 0"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $totalItem = 6; ?>
                            @for($iItem = 0; $iItem < $totalItem; $iItem++)
                                <tr>
                                    <td class="tr-checkbox"></td>
                                    <td class="itemName" style="padding-left: 0 !important;">8888 Lorem Ipsum (Unit)</td>
                                    <td>2</td>
                                    <td>{{rand(1, 2)}}</td>
                                    @if($iItem == 0)
                                        <td rowspan="{{$totalItem}}" class="itemCtrl" align="right">
                                            <p>
                                                <button type="button" class="btn btn-ngin btn-default">
                                                    <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                </button>
                                            </p>
                                            <p>
                                                <button type="button" class="btn btn-ngin btn-default">
                                                    <span class="btn-label"><i class="fa fa-undo info" aria-hidden="true"></i></span>Undo
                                                </button>
                                            </p>
                                            <p>
                                                <button type="button" class="btn btn-ngin btn-default">
                                                    <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                </button>
                                            </p>
                                        </td>
                                    @endif
                                    <td style="border-left: 0"></td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="row page-showing-pagination pwd-pagiantion">
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
                    <li class="page-number  active">
                        <a href="#">1</a>
                    </li>
                    <li class="page-number">
                        <a href="#">2</a>
                    </li>
                    <li class="page-number">
                        <a href="#">3</a>
                    </li>
                    <li class="page-number">
                        <a href="#">4</a>
                    </li>
                    <li class="page-number">
                        <a href="#">5</a>
                    </li>
                    <li class="page-number">
                        <a href="#" aria-label="Next">
                            Next
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>



@endsection
@section('right-sidebar')
                                                              
@endsection

@section('top-right-sidebar')
    <div>Top Right Sidebar</div>
@endsection

@section('bottom-right-sidebar')
    <div>Bottom Right Sidebar</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/other/product-withdrawal/index.js') }}"></script>
@endsection