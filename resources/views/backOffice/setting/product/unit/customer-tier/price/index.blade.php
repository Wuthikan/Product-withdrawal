@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/product/unit/customer-tier/price/index.css')}}"/>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
<div class="product-price-index">
    <section class="section-header-index">
        <form class="form-inline form-header-index">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="ngin-nav">
                        <li>
                            <div class="ngin-nav-selectall">
                                <input type="checkbox"  checked class="iCheck" id="selectall" name="selectall" > 
                                <label for="selectall" class="iCheck-label" >Select All</label>
                            </div>
                        </li>
                        <li>
                            <div class="ngin-nav-new">
                                <button type="button" class="btn btn-default-background" onclick="window.location='{{route('backOffice.setting.product.unit.customer-tier.price.create', [1,2,3]) }}'">
                                    <span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="ngin-nav-search">
                                <div class="icon-addon addon-sm">
                                    <input  type="text" placeholder="SEARCH" class="form-control search" id="SEARCH" >
                                    <label for="search"  class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="ngin-nav-pdf">
                                <button type="button" class="btn  btn-default-background">
                                    <span class="btn-label"><i class="fa fa-file-pdf-o pdf" aria-hidden="true"></i></i></span><span class="btn-label-label">PDF</span>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="ngin-nav-excel">
                                <button type="button" class="btn  btn-default-background">
                                    <span class="btn-label"><i class="fa fa-file-excel-o excel" aria-hidden="true"></i></i></span><span class="btn-label-label">Excel</span>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="ngin-nav-delall">
                                <button type="button"  class="btn  btn-default-background">
                                    <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span><span class="btn-label-label">Delete All</span>
                                </button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </form>
    </section>
    
        <form class="product-price-index-form">
            <div class="row">
                <div class="col-xs-12">
                    <div>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs product-price-index-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#pad" aria-controls="pad" role="tab" data-toggle="tab">PAD</a></li>
                            <li role="presentation"><a href="#gd" aria-controls="gd" role="tab" data-toggle="tab">GD</a></li>
                            <li role="presentation"><a href="#mt" aria-controls="mt" role="tab" data-toggle="tab">MT</a></li>
                            <li role="presentation"><a href="#tier_a" aria-controls="tier_a" role="tab" data-toggle="tab">TIER A</a></li>
                            <li role="presentation"><a href="#tier_b" aria-controls="tier_b" role="tab" data-toggle="tab">TIER B</a></li>
                            <li role="presentation"><a href="#tier_c" aria-controls="tier_c" role="tab" data-toggle="tab">TIER C</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content product-price-index-tabs_content scroll-2">
                            <div role="tabpanel" class="tab-pane active" id="pad">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <div class="table-responsive">
                                                    <table class="table product-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="product-price-index-collapse-check">
                                                                        <input type="checkbox" class="iCheck">     
                                                                    </div>                                                       
                                                                    <div class="product-price-index-collapse-head">
                                                                        <label>DATE</label>
                                                                        <span class="index-date">04/09/2017 - 04/10/2017</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>NVAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>VAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>STATUS</label>
                                                                        <input type="checkbox" class="switchCheck" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="product-price-index-opt">
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Edit</span>
                                                                        </a>
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </a>                                    
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-offset-1 col-md-10 text-center">
                                                        <div class="table-responsive text-center">
                                                            <table class="table text-center">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="product-align">AMOUNT PURCHASED</th>
                                                                        <th class="product-align">NVAT PRICE</th>
                                                                        <th class="product-align">PRICE BEFORE TAX</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>2-10</td>
                                                                        <td>100</td>
                                                                        <td>110</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11-20</td>
                                                                        <td>99</td>
                                                                        <td>109</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2++</td>
                                                                        <td>80</td>
                                                                        <td>90</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <div class="table-responsive">
                                                    <table class="table product-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="product-price-index-collapse-check">
                                                                        <input type="checkbox" class="iCheck">     
                                                                    </div>                                                       
                                                                    <div class="product-price-index-collapse-head">
                                                                        <label>DATE</label>
                                                                        <span class="index-date">05/09/2017 - 05/10/2017</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>NVAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>VAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>STATUS</label>
                                                                        <input type="checkbox" class="switchCheck" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="product-price-index-opt">
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Edit</span>
                                                                        </a>
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-xs-12 col-md-offset-1 col-md-10 text-center">
                                                    <div class="table-responsive text-center">
                                                        <table class="table text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th class="product-align">AMOUNT PURCHASED</th>
                                                                    <th class="product-align">NVAT PRICE</th>
                                                                    <th class="product-align">PRICE BEFORE TAX</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>2-10</td>
                                                                    <td>100</td>
                                                                    <td>110</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11-20</td>
                                                                    <td>99</td>
                                                                    <td>109</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2++</td>
                                                                    <td>80</td>
                                                                    <td>90</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <div class="table-responsive">
                                                    <table class="table product-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="product-price-index-collapse-check">
                                                                        <input type="checkbox" class="iCheck">     
                                                                    </div>                                                       
                                                                    <div class="product-price-index-collapse-head">
                                                                        <label>DATE</label>
                                                                        <span class="index-date">06/09/2017 - 06/10/2017</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>NVAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>VAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>STATUS</label>
                                                                        <input type="checkbox" class="switchCheck" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="product-price-index-opt">
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Edit</span>
                                                                        </a>
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-offset-1 col-md-10 text-center">
                                                        <div class="table-responsive text-center">
                                                            <table class="table text-center">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="product-align">AMOUNT PURCHASED</th>
                                                                        <th class="product-align">NVAT PRICE</th>
                                                                        <th class="product-align">PRICE BEFORE TAX</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>2-10</td>
                                                                        <td>100</td>
                                                                        <td>110</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11-20</td>
                                                                        <td>99</td>
                                                                        <td>109</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2++</td>
                                                                        <td>80</td>
                                                                        <td>90</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFour">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                <div class="table-responsive">
                                                    <table class="table product-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="product-price-index-collapse-check">
                                                                        <input type="checkbox" class="iCheck">     
                                                                    </div>                                                       
                                                                    <div class="product-price-index-collapse-head">
                                                                        <label>DATE</label>
                                                                        <span class="index-date">06/09/2017 - 06/10/2017</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>NVAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>VAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>STATUS</label>
                                                                        <input type="checkbox" class="switchCheck" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="product-price-index-opt">
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Edit</span>
                                                                        </a>
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-offset-1 col-md-10 text-center">
                                                        <div class="table-responsive text-center">
                                                            <table class="table text-center">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="product-align">AMOUNT PURCHASED</th>
                                                                        <th class="product-align">NVAT PRICE</th>
                                                                        <th class="product-align">PRICE BEFORE TAX</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>2-10</td>
                                                                        <td>100</td>
                                                                        <td>110</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11-20</td>
                                                                        <td>99</td>
                                                                        <td>109</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2++</td>
                                                                        <td>80</td>
                                                                        <td>90</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="gd">
                                <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne2">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                                <div class="table-responsive">
                                                    <table class="table product-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="product-price-index-collapse-check">
                                                                        <input type="checkbox" class="iCheck">     
                                                                    </div>                                                       
                                                                    <div class="product-price-index-collapse-head">
                                                                        <label>DATE</label>
                                                                        <span class="index-date">07/09/2017 - 07/10/2017</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>NVAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>VAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>STATUS</label>
                                                                        <input type="checkbox" class="switchCheck" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="product-price-index-opt">
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Edit</span>
                                                                        </a>
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </a>                                    
                                        </div>
                                        <div id="collapseOne2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne2">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-offset-1 col-md-10 text-center">
                                                        <div class="table-responsive text-center">
                                                            <table class="table text-center">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="product-align">AMOUNT PURCHASED</th>
                                                                        <th class="product-align">NVAT PRICE</th>
                                                                        <th class="product-align">PRICE BEFORE TAX</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>2-10</td>
                                                                        <td>100</td>
                                                                        <td>110</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11-20</td>
                                                                        <td>99</td>
                                                                        <td>109</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2++</td>
                                                                        <td>80</td>
                                                                        <td>90</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo2">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                                <div class="table-responsive">
                                                    <table class="table product-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="product-price-index-collapse-check">
                                                                        <input type="checkbox" class="iCheck">     
                                                                    </div>                                                       
                                                                    <div class="product-price-index-collapse-head">
                                                                        <label>DATE</label>
                                                                        <span class="index-date">04/09/2017 - 04/10/2017</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>NVAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>VAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>STATUS</label>
                                                                        <input type="checkbox" class="switchCheck" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="product-price-index-opt">
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Edit</span>
                                                                        </a>
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-xs-12 col-md-offset-1 col-md-10 text-center">
                                                    <div class="table-responsive text-center">
                                                        <table class="table text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th class="product-align">AMOUNT PURCHASED</th>
                                                                    <th class="product-align">NVAT PRICE</th>
                                                                    <th class="product-align">PRICE BEFORE TAX</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>2-10</td>
                                                                    <td>100</td>
                                                                    <td>110</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11-20</td>
                                                                    <td>99</td>
                                                                    <td>109</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2++</td>
                                                                    <td>80</td>
                                                                    <td>90</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree2">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                                                <div class="table-responsive">
                                                    <table class="table product-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="product-price-index-collapse-check">
                                                                        <input type="checkbox" class="iCheck">     
                                                                    </div>                                                       
                                                                    <div class="product-price-index-collapse-head">
                                                                        <label>DATE</label>
                                                                        <span class="index-date">04/09/2017 - 04/10/2017</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>NVAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>VAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>STATUS</label>
                                                                        <input type="checkbox" class="switchCheck" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="product-price-index-opt">
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Edit</span>
                                                                        </a>
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseThree2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree2">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-xs-12 col-md-offset-1 col-md-10 text-center">
                                                    <div class="table-responsive text-center">
                                                        <table class="table text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th class="product-align">AMOUNT PURCHASED</th>
                                                                    <th class="product-align">NVAT PRICE</th>
                                                                    <th class="product-align">PRICE BEFORE TAX</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>2-10</td>
                                                                    <td>100</td>
                                                                    <td>110</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11-20</td>
                                                                    <td>99</td>
                                                                    <td>109</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2++</td>
                                                                    <td>80</td>
                                                                    <td>90</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="mt">
                                <div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne3">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                                                <div class="table-responsive">
                                                    <table class="table product-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="product-price-index-collapse-check">
                                                                        <input type="checkbox" class="iCheck">     
                                                                    </div>                                                       
                                                                    <div class="product-price-index-collapse-head">
                                                                        <label>DATE</label>
                                                                        <span class="index-date">08/09/2017 - 08/10/2017</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>NVAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>VAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>STATUS</label>
                                                                        <input type="checkbox" class="switchCheck" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="product-price-index-opt">
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Edit</span>
                                                                        </a>
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </a>                                    
                                        </div>
                                        <div id="collapseOne3" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne3">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-offset-1 col-md-10 text-center">
                                                        <div class="table-responsive text-center">
                                                            <table class="table text-center">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="product-align">AMOUNT PURCHASED</th>
                                                                        <th class="product-align">NVAT PRICE</th>
                                                                        <th class="product-align">PRICE BEFORE TAX</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>2-10</td>
                                                                        <td>100</td>
                                                                        <td>110</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11-20</td>
                                                                        <td>99</td>
                                                                        <td>109</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2++</td>
                                                                        <td>80</td>
                                                                        <td>90</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo3">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
                                                <div class="table-responsive">
                                                    <table class="table product-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="product-price-index-collapse-check">
                                                                        <input type="checkbox" class="iCheck">     
                                                                    </div>                                                       
                                                                    <div class="product-price-index-collapse-head">
                                                                        <label>DATE</label>
                                                                        <span class="index-date">04/09/2017 - 04/10/2017</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>NVAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>VAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>STATUS</label>
                                                                        <input type="checkbox" class="switchCheck" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="product-price-index-opt">
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Edit</span>
                                                                        </a>
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseTwo3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo3">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-xs-12 col-md-offset-1 col-md-10 text-center">
                                                    <div class="table-responsive text-center">
                                                        <table class="table text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th class="product-align">AMOUNT PURCHASED</th>
                                                                    <th class="product-align">NVAT PRICE</th>
                                                                    <th class="product-align">PRICE BEFORE TAX</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>2-10</td>
                                                                    <td>100</td>
                                                                    <td>110</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11-20</td>
                                                                    <td>99</td>
                                                                    <td>109</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2++</td>
                                                                    <td>80</td>
                                                                    <td>90</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree3">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                                                <div class="table-responsive">
                                                    <table class="table product-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="product-price-index-collapse-check">
                                                                        <input type="checkbox" class="iCheck">     
                                                                    </div>                                                       
                                                                    <div class="product-price-index-collapse-head">
                                                                        <label>DATE</label>
                                                                        <span class="index-date">04/09/2017 - 04/10/2017</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>NVAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>VAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>STATUS</label>
                                                                        <input type="checkbox" class="switchCheck" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="product-price-index-opt">
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Edit</span>
                                                                        </a>
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseThree3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree3">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-xs-12 col-md-offset-1 col-md-10 text-center">
                                                    <div class="table-responsive text-center">
                                                        <table class="table text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th class="product-align">AMOUNT PURCHASED</th>
                                                                    <th class="product-align">NVAT PRICE</th>
                                                                    <th class="product-align">PRICE BEFORE TAX</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>2-10</td>
                                                                    <td>100</td>
                                                                    <td>110</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11-20</td>
                                                                    <td>99</td>
                                                                    <td>109</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2++</td>
                                                                    <td>80</td>
                                                                    <td>90</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tier_a">
                                <div class="panel-group" id="accordion4" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne4">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapseOne4" aria-expanded="true" aria-controls="collapseOne4">
                                                <div class="table-responsive">
                                                    <table class="table product-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="product-price-index-collapse-check">
                                                                        <input type="checkbox" class="iCheck">     
                                                                    </div>                                                       
                                                                    <div class="product-price-index-collapse-head">
                                                                        <label>DATE</label>
                                                                        <span class="index-date">09/09/2017 - 09/10/2017</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>NVAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>VAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>STATUS</label>
                                                                        <input type="checkbox" class="switchCheck" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="product-price-index-opt">
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Edit</span>
                                                                        </a>
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </a>                                    
                                        </div>
                                        <div id="collapseOne4" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne4">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-offset-1 col-md-10 text-center">
                                                        <div class="table-responsive text-center">
                                                            <table class="table text-center">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="product-align">AMOUNT PURCHASED</th>
                                                                        <th class="product-align">NVAT PRICE</th>
                                                                        <th class="product-align">PRICE BEFORE TAX</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>2-10</td>
                                                                        <td>100</td>
                                                                        <td>110</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11-20</td>
                                                                        <td>99</td>
                                                                        <td>109</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2++</td>
                                                                        <td>80</td>
                                                                        <td>90</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo4">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
                                                <div class="table-responsive">
                                                    <table class="table product-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="product-price-index-collapse-check">
                                                                        <input type="checkbox" class="iCheck">     
                                                                    </div>                                                       
                                                                    <div class="product-price-index-collapse-head">
                                                                        <label>DATE</label>
                                                                        <span class="index-date">04/09/2017 - 04/10/2017</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>NVAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>VAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>STATUS</label>
                                                                        <input type="checkbox" class="switchCheck" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="product-price-index-opt">
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Edit</span>
                                                                        </a>
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseTwo4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo4">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-xs-12 col-md-offset-1 col-md-10 text-center">
                                                    <div class="table-responsive text-center">
                                                        <table class="table text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th class="product-align">AMOUNT PURCHASED</th>
                                                                    <th class="product-align">NVAT PRICE</th>
                                                                    <th class="product-align">PRICE BEFORE TAX</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>2-10</td>
                                                                    <td>100</td>
                                                                    <td>110</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11-20</td>
                                                                    <td>99</td>
                                                                    <td>109</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2++</td>
                                                                    <td>80</td>
                                                                    <td>90</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree4">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                                                <div class="table-responsive">
                                                    <table class="table product-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="product-price-index-collapse-check">
                                                                        <input type="checkbox" class="iCheck">     
                                                                    </div>                                                       
                                                                    <div class="product-price-index-collapse-head">
                                                                        <label>DATE</label>
                                                                        <span class="index-date">04/09/2017 - 04/10/2017</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>NVAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>VAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>STATUS</label>
                                                                        <input type="checkbox" class="switchCheck" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="product-price-index-opt">
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Edit</span>
                                                                        </a>
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseThree4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree4">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-xs-12 col-md-offset-1 col-md-10 text-center">
                                                    <div class="table-responsive text-center">
                                                        <table class="table text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th class="product-align">AMOUNT PURCHASED</th>
                                                                    <th class="product-align">NVAT PRICE</th>
                                                                    <th class="product-align">PRICE BEFORE TAX</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>2-10</td>
                                                                    <td>100</td>
                                                                    <td>110</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11-20</td>
                                                                    <td>99</td>
                                                                    <td>109</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2++</td>
                                                                    <td>80</td>
                                                                    <td>90</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tier_b">
                                <div class="panel-group" id="accordion5" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne5">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapseOne5" aria-expanded="true" aria-controls="collapseOne5">
                                                <div class="table-responsive">
                                                    <table class="table product-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="product-price-index-collapse-check">
                                                                        <input type="checkbox" class="iCheck">     
                                                                    </div>                                                       
                                                                    <div class="product-price-index-collapse-head">
                                                                        <label>DATE</label>
                                                                        <span class="index-date">10/09/2017 - 10/10/2017</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>NVAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>VAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>STATUS</label>
                                                                        <input type="checkbox" class="switchCheck" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="product-price-index-opt">
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Edit</span>
                                                                        </a>
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </a>                                    
                                        </div>
                                        <div id="collapseOne5" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne5">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-offset-1 col-md-10 text-center">
                                                        <div class="table-responsive text-center">
                                                            <table class="table text-center">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="product-align">AMOUNT PURCHASED</th>
                                                                        <th class="product-align">NVAT PRICE</th>
                                                                        <th class="product-align">PRICE BEFORE TAX</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>2-10</td>
                                                                        <td>100</td>
                                                                        <td>110</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11-20</td>
                                                                        <td>99</td>
                                                                        <td>109</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2++</td>
                                                                        <td>80</td>
                                                                        <td>90</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo5">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5">
                                                <div class="table-responsive">
                                                    <table class="table product-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="product-price-index-collapse-check">
                                                                        <input type="checkbox" class="iCheck">     
                                                                    </div>                                                       
                                                                    <div class="product-price-index-collapse-head">
                                                                        <label>DATE</label>
                                                                        <span class="index-date">04/09/2017 - 04/10/2017</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>NVAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>VAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>STATUS</label>
                                                                        <input type="checkbox" class="switchCheck" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="product-price-index-opt">
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Edit</span>
                                                                        </a>
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseTwo5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo5">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-offset-1 col-md-10 text-center">
                                                        <div class="table-responsive text-center">
                                                            <table class="table text-center">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="product-align">AMOUNT PURCHASED</th>
                                                                        <th class="product-align">NVAT PRICE</th>
                                                                        <th class="product-align">PRICE BEFORE TAX</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>2-10</td>
                                                                        <td>100</td>
                                                                        <td>110</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11-20</td>
                                                                        <td>99</td>
                                                                        <td>109</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2++</td>
                                                                        <td>80</td>
                                                                        <td>90</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree5">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
                                                <div class="table-responsive">
                                                    <table class="table product-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="product-price-index-collapse-check">
                                                                        <input type="checkbox" class="iCheck">     
                                                                    </div>                                                       
                                                                    <div class="product-price-index-collapse-head">
                                                                        <label>DATE</label>
                                                                        <span class="index-date">04/09/2017 - 04/10/2017</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>NVAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>VAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>STATUS</label>
                                                                        <input type="checkbox" class="switchCheck" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="product-price-index-opt">
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Edit</span>
                                                                        </a>
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseThree5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree5">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-offset-1 col-md-10 text-center">
                                                        <div class="table-responsive text-center">
                                                            <table class="table text-center">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="product-align">AMOUNT PURCHASED</th>
                                                                        <th class="product-align">NVAT PRICE</th>
                                                                        <th class="product-align">PRICE BEFORE TAX</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>2-10</td>
                                                                        <td>100</td>
                                                                        <td>110</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11-20</td>
                                                                        <td>99</td>
                                                                        <td>109</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2++</td>
                                                                        <td>80</td>
                                                                        <td>90</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tier_c">
                                <div class="panel-group" id="accordion6" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne6">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapseOne6" aria-expanded="true" aria-controls="collapseOne6">
                                                <div class="table-responsive">
                                                    <table class="table product-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="product-price-index-collapse-check">
                                                                        <input type="checkbox" class="iCheck">     
                                                                    </div>                                                       
                                                                    <div class="product-price-index-collapse-head">
                                                                        <label>DATE</label>
                                                                        <span class="index-date">11/09/2017 - 11/10/2017</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>NVAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>VAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>STATUS</label>
                                                                        <input type="checkbox" class="switchCheck" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="product-price-index-opt">
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Edit</span>
                                                                        </a>
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </a>                                    
                                        </div>
                                        <div id="collapseOne6" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne6">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-offset-1 col-md-10 text-center">
                                                        <div class="table-responsive text-center">
                                                            <table class="table text-center">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="product-align">AMOUNT PURCHASED</th>
                                                                        <th class="product-align">NVAT PRICE</th>
                                                                        <th class="product-align">PRICE BEFORE TAX</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>2-10</td>
                                                                        <td>100</td>
                                                                        <td>110</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11-20</td>
                                                                        <td>99</td>
                                                                        <td>109</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2++</td>
                                                                        <td>80</td>
                                                                        <td>90</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo6">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapseTwo6" aria-expanded="false" aria-controls="collapseTwo6">
                                                <div class="table-responsive">
                                                    <table class="table product-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="product-price-index-collapse-check">
                                                                        <input type="checkbox" class="iCheck">     
                                                                    </div>                                                       
                                                                    <div class="product-price-index-collapse-head">
                                                                        <label>DATE</label>
                                                                        <span class="index-date">04/09/2017 - 04/10/2017</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>NVAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>VAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>STATUS</label>
                                                                        <input type="checkbox" class="switchCheck" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="product-price-index-opt">
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Edit</span>
                                                                        </a>
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseTwo6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo6">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-offset-1 col-md-10 text-center">
                                                        <div class="table-responsive text-center">
                                                            <table class="table text-center">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="product-align">AMOUNT PURCHASED</th>
                                                                        <th class="product-align">NVAT PRICE</th>
                                                                        <th class="product-align">PRICE BEFORE TAX</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>2-10</td>
                                                                        <td>100</td>
                                                                        <td>110</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11-20</td>
                                                                        <td>99</td>
                                                                        <td>109</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2++</td>
                                                                        <td>80</td>
                                                                        <td>90</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree6">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
                                                <div class="table-responsive">
                                                    <table class="table product-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="product-price-index-collapse-check">
                                                                        <input type="checkbox" class="iCheck">     
                                                                    </div>                                                       
                                                                    <div class="product-price-index-collapse-head">
                                                                        <label>DATE</label>
                                                                        <span class="index-date">04/09/2017 - 04/10/2017</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>NVAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>VAT</label>
                                                                        <span class="index-date">80-100</span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label>STATUS</label>
                                                                        <input type="checkbox" class="switchCheck" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="product-price-index-opt">
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Edit</span>
                                                                        </a>
                                                                        <a href="#" class="ngin-group">
                                                                            <span class="ngin-group-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                                                                            <span class="ngin-group-text">Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseThree6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree6">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-offset-1 col-md-10 text-center">
                                                        <div class="table-responsive text-center">
                                                            <table class="table text-center">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="product-align">AMOUNT PURCHASED</th>
                                                                        <th class="product-align">NVAT PRICE</th>
                                                                        <th class="product-align">PRICE BEFORE TAX</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>2-10</td>
                                                                        <td>100</td>
                                                                        <td>110</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11-20</td>
                                                                        <td>99</td>
                                                                        <td>109</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2++</td>
                                                                        <td>80</td>
                                                                        <td>90</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
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

@section('top-right-sidebar')
    <div>Top Right Sidebar</div>
@endsection

@section('bottom-right-sidebar')
    <div>Bottom Right Sidebar</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/setting/product/unit/customer-tier/price/index.js') }}"></script>
@endsection