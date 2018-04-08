@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/accounting/refund-from-wallet/index.css')}}"/>
@endsection

@section('module_name', 'ACCOUNTING > REFUND FROM WALLET')
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
                                        <button type="button" class="btn btn-default-background" data-toggle="modal" data-target="#refund-from-pa-modal">
                                            <span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
                                        </button>
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
                            <td class="col-3" style="min-width: inherit; width: 260px;">
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
            <div class="row">
                <div class="col-xs-12 content scroll-2">
                    <div class="records table-responsive">
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>01/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>02/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>03/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>04/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>05/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>06/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>07/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>08/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>09/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>10/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>11/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>12/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>13/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>14/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>15/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>16/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>17/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>18/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>19/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>20/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>21/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>22/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>23/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>24/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                        <div class="records__item">
                            <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                            </div>

                            <div class="records__detail">
                                <div class="records__description">
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>DD/MM/YYYY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>25/01/2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title align-left">
                                                <span>COMPANY</span>
                                            </div>
                                            <div class="order__description align-left">
                                                <span>Adiwit Co., Ltd.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order">
                                        <div class="order__detail">
                                            <div class="order__title">
                                                <span>AMOUNT</span>
                                            </div>
                                            <div class="order__description">
                                                <span>(100,000.00) THB</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="records__action">
                                <button type="button" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                    <span class="text">Edit</span>
                                </button>
                                <button type="submit" class="btn btn-ngin btn-default btn-refund-index" >
                                    <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                    <span class="text">Delete</span>
                                </button>
                            </div>

                        </div>
                        <!-- End Item -->
                    </div>
                </div>
            </div>
        </section>
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
    <div id="refund-from-pa-modal" class="modal bs-example-modal-lg fade refund-from-wallet--index--modal" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                        <i class="fa fa-file-text-o" aria-hidden="true"></i>REFUND FROM PA
                    </h4>
                </div>
                <div class="modal-body scroll-2">
                    <table class="table ngin-table refund-from-wallet--index--modal--table">
                        <thead>
                        <tr>
                            <th></th>
                            <th class="align-left">PA #</th>
                            <th class="align-left">SUPPILER</th>
                            <th class="align-left">REALISED / PAID</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <input type="checkbox" class="iCheck">
                            </td>
                            <td class="align-left">001</td>
                            <td class="align-left">Sony Interective Co., Ltd.</td>
                            <td class="align-left">60,000.00/100,000.00</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="iCheck">
                            </td>
                            <td class="align-left">002</td>
                            <td class="align-left">Sony Interective Co., Ltd.</td>
                            <td class="align-left">50,000.00/100,000.00</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="iCheck">
                            </td>
                            <td class="align-left">003</td>
                            <td class="align-left">Sony Interective Co., Ltd.</td>
                            <td class="align-left">40,000.00/100,000.00</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="iCheck">
                            </td>
                            <td class="align-left">004</td>
                            <td class="align-left">UBISOFT Co., Ltd.</td>
                            <td class="align-left">5,000.00/100,000.00 JYP</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="iCheck">
                            </td>
                            <td class="align-left">005</td>
                            <td class="align-left">UBISOFT Co., Ltd.</td>
                            <td class="align-left">5,000.00/100,000.00 JYP</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="iCheck">
                            </td>
                            <td class="align-left">006</td>
                            <td class="align-left">Sony Interective Co., Ltd.</td>
                            <td class="align-left">0.00/100,000.00</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-ngin btn-default"  onclick="window.location='{{ route('backOffice.accounting.refund-from-wallet.create') }}'">
                        <span class="btn-label "><i class="fa fa-rotate-left warning" aria-hidden="true"></i></span>REFUND THERE PAs
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('top-right-sidebar')
    <div>Top Right Sidebar</div>
@endsection

@section('bottom-right-sidebar')
    <div>Bottom Right Sidebar</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/accounting/refund-from-wallet/index.js') }}"></script>
@endsection