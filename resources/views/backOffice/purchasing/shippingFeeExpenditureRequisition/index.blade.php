@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/purchasing/shipping-fee-expenditure-requisition/index.css')}}"/>
@endsection

@section('module_name', 'PURCHASING > SHIPPING FEE REQ.')
@section('page_name', 'INDEX')

@section('body')
<div class="x_content">
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
                            <button type="button" class="btn btn-default-background" onclick="window.location='{{ route("backOffice.purchasing.shipping-fee.create") }}'">
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
                <td class="col-3" style="min-width: inherit;width: 292px;">
                <div class="text-right col-3-content">
                    <div class="form-group">
                        <button type="button" class="btn  btn-default-background">
                        <span class="btn-label"><i class="fa fa-file-pdf-o pdf" aria-hidden="true"></i></i></span><span class="btn-label-label">PDF</span>
                        </button>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn  btn-default-background">
                        <span class="btn-label"><i class="fa fa-file-excel-o excel" aria-hidden="true"></i></i></span><span class="btn-label-label">Excel</span>
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
    
    <section class="panel-body panel-content scroll-2" style="height: calc(100vh - 186px)!important;    padding-top: 0px!important;">
        <div class="row">
            <div class="col-xs-12 content scroll-2" style="    padding-right: 0px;padding-left: 0px;">

<!-- item  -->
<div class="bk-border-out">
  <div class="bk-div-table">  	
    <div>
    	<div>
        	<input type="checkbox" class="iCheck" name="selectall" >
        </div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">SUPPLIER INVOICE NUMBER</div>
        <div style="padding-top: 0px;">1111</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">TOTAL SHIPPING FEES (THB)</div>
        <div style="padding-top: 0px;">1000.00</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">LOGISTIC SUPPLIER COMPANY</div>
        <div style="padding-top: 0px;">AdiwIT Co., Ltd</div>
    </div>
    <div>
    	<div class="bk-pd-right">
            <button type="button" class="btn btn-ngin btn-default  bk-btn-edit">
                <span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                </span>Edit
            </button>
    	</div>
    </div>
    <div>
    	<div class="bk-pd-left">
            <button type="button" class="btn btn-ngin btn-default bk-btn-delete">
                <span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                </span>Delete
            </button>
        </div>
    </div>
  </div>
</div>
<!-- End item  -->
<!-- item  -->
<div class="bk-border-out">
  <div class="bk-div-table">  	
    <div>
    	<div>
        	<input type="checkbox" class="iCheck" name="selectall" >
        </div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">SUPPLIER INVOICE NUMBER</div>
        <div style="padding-top: 0px;">1111</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">TOTAL SHIPPING FEES (THB)</div>
        <div style="padding-top: 0px;">1000.00</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">LOGISTIC SUPPLIER COMPANY</div>
        <div style="padding-top: 0px;">AdiwIT Co., Ltd</div>
    </div>
    <div>
    	<div class="bk-pd-right">
            <button type="button" class="btn btn-ngin btn-default  bk-btn-edit">
                <span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                </span>Edit
            </button>
    	</div>
    </div>
    <div>
    	<div class="bk-pd-left">
            <button type="button" class="btn btn-ngin btn-default bk-btn-delete">
                <span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                </span>Delete
            </button>
        </div>
    </div>
  </div>
</div>
<!-- End item  -->
<!-- item  -->
<div class="bk-border-out">
  <div class="bk-div-table">  	
    <div>
    	<div>
        	<input type="checkbox" class="iCheck" name="selectall" >
        </div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">SUPPLIER INVOICE NUMBER</div>
        <div style="padding-top: 0px;">1111</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">TOTAL SHIPPING FEES (THB)</div>
        <div style="padding-top: 0px;">1000.00</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">LOGISTIC SUPPLIER COMPANY</div>
        <div style="padding-top: 0px;">AdiwIT Co., Ltd</div>
    </div>
    <div>
    	<div class="bk-pd-right">
            <button type="button" class="btn btn-ngin btn-default  bk-btn-edit">
                <span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                </span>Edit
            </button>
    	</div>
    </div>
    <div>
    	<div class="bk-pd-left">
            <button type="button" class="btn btn-ngin btn-default bk-btn-delete">
                <span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                </span>Delete
            </button>
        </div>
    </div>
  </div>
</div>
<!-- End item  -->
<!-- item  -->
<div class="bk-border-out">
  <div class="bk-div-table">  	
    <div>
    	<div>
        	<input type="checkbox" class="iCheck" name="selectall" >
        </div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">SUPPLIER INVOICE NUMBER</div>
        <div style="padding-top: 0px;">1111</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">TOTAL SHIPPING FEES (THB)</div>
        <div style="padding-top: 0px;">1000.00</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">LOGISTIC SUPPLIER COMPANY</div>
        <div style="padding-top: 0px;">AdiwIT Co., Ltd</div>
    </div>
    <div>
    	<div class="bk-pd-right">
            <button type="button" class="btn btn-ngin btn-default  bk-btn-edit">
                <span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                </span>Edit
            </button>
    	</div>
    </div>
    <div>
    	<div class="bk-pd-left">
            <button type="button" class="btn btn-ngin btn-default bk-btn-delete">
                <span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                </span>Delete
            </button>
        </div>
    </div>
  </div>
</div>
<!-- End item  -->
<!-- item  -->
<div class="bk-border-out">
  <div class="bk-div-table">  	
    <div>
    	<div>
        	<input type="checkbox" class="iCheck" name="selectall" >
        </div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">SUPPLIER INVOICE NUMBER</div>
        <div style="padding-top: 0px;">1111</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">TOTAL SHIPPING FEES (THB)</div>
        <div style="padding-top: 0px;">1000.00</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">LOGISTIC SUPPLIER COMPANY</div>
        <div style="padding-top: 0px;">AdiwIT Co., Ltd</div>
    </div>
    <div>
    	<div class="bk-pd-right">
            <button type="button" class="btn btn-ngin btn-default  bk-btn-edit">
                <span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                </span>Edit
            </button>
    	</div>
    </div>
    <div>
    	<div class="bk-pd-left">
            <button type="button" class="btn btn-ngin btn-default bk-btn-delete">
                <span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                </span>Delete
            </button>
        </div>
    </div>
  </div>
</div>
<!-- End item  -->
<!-- item  -->
<div class="bk-border-out">
  <div class="bk-div-table">  	
    <div>
    	<div>
        	<input type="checkbox" class="iCheck" name="selectall" >
        </div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">SUPPLIER INVOICE NUMBER</div>
        <div style="padding-top: 0px;">1111</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">TOTAL SHIPPING FEES (THB)</div>
        <div style="padding-top: 0px;">1000.00</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">LOGISTIC SUPPLIER COMPANY</div>
        <div style="padding-top: 0px;">AdiwIT Co., Ltd</div>
    </div>
    <div>
    	<div class="bk-pd-right">
            <button type="button" class="btn btn-ngin btn-default  bk-btn-edit">
                <span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                </span>Edit
            </button>
    	</div>
    </div>
    <div>
    	<div class="bk-pd-left">
            <button type="button" class="btn btn-ngin btn-default bk-btn-delete">
                <span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                </span>Delete
            </button>
        </div>
    </div>
  </div>
</div>
<!-- End item  -->
<!-- item  -->
<div class="bk-border-out">
  <div class="bk-div-table">  	
    <div>
    	<div>
        	<input type="checkbox" class="iCheck" name="selectall" >
        </div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">SUPPLIER INVOICE NUMBER</div>
        <div style="padding-top: 0px;">1111</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">TOTAL SHIPPING FEES (THB)</div>
        <div style="padding-top: 0px;">1000.00</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">LOGISTIC SUPPLIER COMPANY</div>
        <div style="padding-top: 0px;">AdiwIT Co., Ltd</div>
    </div>
    <div>
    	<div class="bk-pd-right">
            <button type="button" class="btn btn-ngin btn-default  bk-btn-edit">
                <span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                </span>Edit
            </button>
    	</div>
    </div>
    <div>
    	<div class="bk-pd-left">
            <button type="button" class="btn btn-ngin btn-default bk-btn-delete">
                <span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                </span>Delete
            </button>
        </div>
    </div>
  </div>
</div>
<!-- End item  -->
<!-- item  -->
<div class="bk-border-out">
  <div class="bk-div-table">  	
    <div>
    	<div>
        	<input type="checkbox" class="iCheck" name="selectall" >
        </div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">SUPPLIER INVOICE NUMBER</div>
        <div style="padding-top: 0px;">1111</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">TOTAL SHIPPING FEES (THB)</div>
        <div style="padding-top: 0px;">1000.00</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">LOGISTIC SUPPLIER COMPANY</div>
        <div style="padding-top: 0px;">AdiwIT Co., Ltd</div>
    </div>
    <div>
    	<div class="bk-pd-right">
            <button type="button" class="btn btn-ngin btn-default  bk-btn-edit">
                <span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                </span>Edit
            </button>
    	</div>
    </div>
    <div>
    	<div class="bk-pd-left">
            <button type="button" class="btn btn-ngin btn-default bk-btn-delete">
                <span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                </span>Delete
            </button>
        </div>
    </div>
  </div>
</div>
<!-- End item  -->
<!-- item  -->
<div class="bk-border-out">
  <div class="bk-div-table">  	
    <div>
    	<div>
        	<input type="checkbox" class="iCheck" name="selectall" >
        </div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">SUPPLIER INVOICE NUMBER</div>
        <div style="padding-top: 0px;">1111</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">TOTAL SHIPPING FEES (THB)</div>
        <div style="padding-top: 0px;">1000.00</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">LOGISTIC SUPPLIER COMPANY</div>
        <div style="padding-top: 0px;">AdiwIT Co., Ltd</div>
    </div>
    <div>
    	<div class="bk-pd-right">
            <button type="button" class="btn btn-ngin btn-default  bk-btn-edit">
                <span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                </span>Edit
            </button>
    	</div>
    </div>
    <div>
    	<div class="bk-pd-left">
            <button type="button" class="btn btn-ngin btn-default bk-btn-delete">
                <span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                </span>Delete
            </button>
        </div>
    </div>
  </div>
</div>
<!-- End item  -->
<!-- item  -->
<div class="bk-border-out">
  <div class="bk-div-table">  	
    <div>
    	<div>
        	<input type="checkbox" class="iCheck" name="selectall" >
        </div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">SUPPLIER INVOICE NUMBER</div>
        <div style="padding-top: 0px;">1111</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">TOTAL SHIPPING FEES (THB)</div>
        <div style="padding-top: 0px;">1000.00</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">LOGISTIC SUPPLIER COMPANY</div>
        <div style="padding-top: 0px;">AdiwIT Co., Ltd</div>
    </div>
    <div>
    	<div class="bk-pd-right">
            <button type="button" class="btn btn-ngin btn-default  bk-btn-edit">
                <span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                </span>Edit
            </button>
    	</div>
    </div>
    <div>
    	<div class="bk-pd-left">
            <button type="button" class="btn btn-ngin btn-default bk-btn-delete">
                <span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                </span>Delete
            </button>
        </div>
    </div>
  </div>
</div>
<!-- End item  -->
<!-- item  -->
<div class="bk-border-out">
  <div class="bk-div-table">  	
    <div>
    	<div>
        	<input type="checkbox" class="iCheck" name="selectall" >
        </div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">SUPPLIER INVOICE NUMBER</div>
        <div style="padding-top: 0px;">1111</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">TOTAL SHIPPING FEES (THB)</div>
        <div style="padding-top: 0px;">1000.00</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">LOGISTIC SUPPLIER COMPANY</div>
        <div style="padding-top: 0px;">AdiwIT Co., Ltd</div>
    </div>
    <div>
    	<div class="bk-pd-right">
            <button type="button" class="btn btn-ngin btn-default  bk-btn-edit">
                <span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                </span>Edit
            </button>
    	</div>
    </div>
    <div>
    	<div class="bk-pd-left">
            <button type="button" class="btn btn-ngin btn-default bk-btn-delete">
                <span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                </span>Delete
            </button>
        </div>
    </div>
  </div>
</div>
<!-- End item  -->
<!-- item  -->
<div class="bk-border-out">
  <div class="bk-div-table">  	
    <div>
    	<div>
        	<input type="checkbox" class="iCheck" name="selectall" >
        </div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">SUPPLIER INVOICE NUMBER</div>
        <div style="padding-top: 0px;">1111</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">TOTAL SHIPPING FEES (THB)</div>
        <div style="padding-top: 0px;">1000.00</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">LOGISTIC SUPPLIER COMPANY</div>
        <div style="padding-top: 0px;">AdiwIT Co., Ltd</div>
    </div>
    <div>
    	<div class="bk-pd-right">
            <button type="button" class="btn btn-ngin btn-default  bk-btn-edit">
                <span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                </span>Edit
            </button>
    	</div>
    </div>
    <div>
    	<div class="bk-pd-left">
            <button type="button" class="btn btn-ngin btn-default bk-btn-delete">
                <span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                </span>Delete
            </button>
        </div>
    </div>
  </div>
</div>
<!-- End item  -->
<!-- item  -->
<div class="bk-border-out">
  <div class="bk-div-table">  	
    <div>
    	<div>
        	<input type="checkbox" class="iCheck" name="selectall" >
        </div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">SUPPLIER INVOICE NUMBER</div>
        <div style="padding-top: 0px;">1111</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">TOTAL SHIPPING FEES (THB)</div>
        <div style="padding-top: 0px;">1000.00</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">LOGISTIC SUPPLIER COMPANY</div>
        <div style="padding-top: 0px;">AdiwIT Co., Ltd</div>
    </div>
    <div>
    	<div class="bk-pd-right">
            <button type="button" class="btn btn-ngin btn-default  bk-btn-edit">
                <span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                </span>Edit
            </button>
    	</div>
    </div>
    <div>
    	<div class="bk-pd-left">
            <button type="button" class="btn btn-ngin btn-default bk-btn-delete">
                <span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                </span>Delete
            </button>
        </div>
    </div>
  </div>
</div>
<!-- End item  -->
<!-- item  -->
<div class="bk-border-out">
  <div class="bk-div-table">  	
    <div>
    	<div>
        	<input type="checkbox" class="iCheck" name="selectall" >
        </div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">SUPPLIER INVOICE NUMBER</div>
        <div style="padding-top: 0px;">1111</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">TOTAL SHIPPING FEES (THB)</div>
        <div style="padding-top: 0px;">1000.00</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">LOGISTIC SUPPLIER COMPANY</div>
        <div style="padding-top: 0px;">AdiwIT Co., Ltd</div>
    </div>
    <div>
    	<div class="bk-pd-right">
            <button type="button" class="btn btn-ngin btn-default  bk-btn-edit">
                <span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                </span>Edit
            </button>
    	</div>
    </div>
    <div>
    	<div class="bk-pd-left">
            <button type="button" class="btn btn-ngin btn-default bk-btn-delete">
                <span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                </span>Delete
            </button>
        </div>
    </div>
  </div>
</div>
<!-- End item  -->
<!-- item  -->
<div class="bk-border-out">
  <div class="bk-div-table">  	
    <div>
    	<div>
        	<input type="checkbox" class="iCheck" name="selectall" >
        </div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">SUPPLIER INVOICE NUMBER</div>
        <div style="padding-top: 0px;">1111</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">TOTAL SHIPPING FEES (THB)</div>
        <div style="padding-top: 0px;">1000.00</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">LOGISTIC SUPPLIER COMPANY</div>
        <div style="padding-top: 0px;">AdiwIT Co., Ltd</div>
    </div>
    <div>
    	<div class="bk-pd-right">
            <button type="button" class="btn btn-ngin btn-default  bk-btn-edit">
                <span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                </span>Edit
            </button>
    	</div>
    </div>
    <div>
    	<div class="bk-pd-left">
            <button type="button" class="btn btn-ngin btn-default bk-btn-delete">
                <span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                </span>Delete
            </button>
        </div>
    </div>
  </div>
</div>
<!-- End item  -->
<!-- item  -->
<div class="bk-border-out">
  <div class="bk-div-table">  	
    <div>
    	<div>
        	<input type="checkbox" class="iCheck" name="selectall" >
        </div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">SUPPLIER INVOICE NUMBER</div>
        <div style="padding-top: 0px;">1111</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">TOTAL SHIPPING FEES (THB)</div>
        <div style="padding-top: 0px;">1000.00</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">LOGISTIC SUPPLIER COMPANY</div>
        <div style="padding-top: 0px;">AdiwIT Co., Ltd</div>
    </div>
    <div>
    	<div class="bk-pd-right">
            <button type="button" class="btn btn-ngin btn-default  bk-btn-edit">
                <span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                </span>Edit
            </button>
    	</div>
    </div>
    <div>
    	<div class="bk-pd-left">
            <button type="button" class="btn btn-ngin btn-default bk-btn-delete">
                <span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                </span>Delete
            </button>
        </div>
    </div>
  </div>
</div>
<!-- End item  -->
<!-- item  -->
<div class="bk-border-out">
  <div class="bk-div-table">  	
    <div>
    	<div>
        	<input type="checkbox" class="iCheck" name="selectall" >
        </div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">SUPPLIER INVOICE NUMBER</div>
        <div style="padding-top: 0px;">1111</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">TOTAL SHIPPING FEES (THB)</div>
        <div style="padding-top: 0px;">1000.00</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">LOGISTIC SUPPLIER COMPANY</div>
        <div style="padding-top: 0px;">AdiwIT Co., Ltd</div>
    </div>
    <div>
    	<div class="bk-pd-right">
            <button type="button" class="btn btn-ngin btn-default  bk-btn-edit">
                <span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                </span>Edit
            </button>
    	</div>
    </div>
    <div>
    	<div class="bk-pd-left">
            <button type="button" class="btn btn-ngin btn-default bk-btn-delete">
                <span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                </span>Delete
            </button>
        </div>
    </div>
  </div>
</div>
<!-- End item  -->
<!-- item  -->
<div class="bk-border-out">
  <div class="bk-div-table">  	
    <div>
    	<div>
        	<input type="checkbox" class="iCheck" name="selectall" >
        </div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">SUPPLIER INVOICE NUMBER</div>
        <div style="padding-top: 0px;">1111</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">TOTAL SHIPPING FEES (THB)</div>
        <div style="padding-top: 0px;">1000.00</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">LOGISTIC SUPPLIER COMPANY</div>
        <div style="padding-top: 0px;">AdiwIT Co., Ltd</div>
    </div>
    <div>
    	<div class="bk-pd-right">
            <button type="button" class="btn btn-ngin btn-default  bk-btn-edit">
                <span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                </span>Edit
            </button>
    	</div>
    </div>
    <div>
    	<div class="bk-pd-left">
            <button type="button" class="btn btn-ngin btn-default bk-btn-delete">
                <span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                </span>Delete
            </button>
        </div>
    </div>
  </div>
</div>
<!-- End item  -->
<!-- item  -->
<div class="bk-border-out">
  <div class="bk-div-table">  	
    <div>
    	<div>
        	<input type="checkbox" class="iCheck" name="selectall" >
        </div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">SUPPLIER INVOICE NUMBER</div>
        <div style="padding-top: 0px;">1111</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">TOTAL SHIPPING FEES (THB)</div>
        <div style="padding-top: 0px;">1000.00</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">LOGISTIC SUPPLIER COMPANY</div>
        <div style="padding-top: 0px;">AdiwIT Co., Ltd</div>
    </div>
    <div>
    	<div class="bk-pd-right">
            <button type="button" class="btn btn-ngin btn-default  bk-btn-edit">
                <span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                </span>Edit
            </button>
    	</div>
    </div>
    <div>
    	<div class="bk-pd-left">
            <button type="button" class="btn btn-ngin btn-default bk-btn-delete">
                <span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                </span>Delete
            </button>
        </div>
    </div>
  </div>
</div>
<!-- End item  -->
<!-- item  -->
<div class="bk-border-out">
  <div class="bk-div-table">  	
    <div>
    	<div>
        	<input type="checkbox" class="iCheck" name="selectall" >
        </div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">SUPPLIER INVOICE NUMBER</div>
        <div style="padding-top: 0px;">1111</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">TOTAL SHIPPING FEES (THB)</div>
        <div style="padding-top: 0px;">1000.00</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">LOGISTIC SUPPLIER COMPANY</div>
        <div style="padding-top: 0px;">AdiwIT Co., Ltd</div>
    </div>
    <div>
    	<div class="bk-pd-right">
            <button type="button" class="btn btn-ngin btn-default  bk-btn-edit">
                <span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                </span>Edit
            </button>
    	</div>
    </div>
    <div>
    	<div class="bk-pd-left">
            <button type="button" class="btn btn-ngin btn-default bk-btn-delete">
                <span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                </span>Delete
            </button>
        </div>
    </div>
  </div>
</div>
<!-- End item  -->
<!-- item  -->
<div class="bk-border-out">
  <div class="bk-div-table">  	
    <div>
    	<div>
        	<input type="checkbox" class="iCheck" name="selectall" >
        </div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">SUPPLIER INVOICE NUMBER</div>
        <div style="padding-top: 0px;">1111</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">TOTAL SHIPPING FEES (THB)</div>
        <div style="padding-top: 0px;">1000.00</div>
    </div>
    <div>
    	<div style="padding-bottom: 0px;">LOGISTIC SUPPLIER COMPANY</div>
        <div style="padding-top: 0px;">AdiwIT Co., Ltd</div>
    </div>
    <div>
    	<div class="bk-pd-right">
            <button type="button" class="btn btn-ngin btn-default  bk-btn-edit">
                <span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                </span>Edit
            </button>
    	</div>
    </div>
    <div>
    	<div class="bk-pd-left">
            <button type="button" class="btn btn-ngin btn-default bk-btn-delete">
                <span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                </span>Delete
            </button>
        </div>
    </div>
  </div>
</div>
<!-- End item  -->


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
@endsection

@section('top-right-sidebar')
    <div>Top Right Sidebar</div>
@endsection

@section('bottom-right-sidebar')
    <div>Bottom Right Sidebar</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/purchasing/shipping-fee-expenditure-requisition/index.js') }}"></script>
@endsection