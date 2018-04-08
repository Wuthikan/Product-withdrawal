{{-- 
    @author: กีรติพร  ลีลาวันทนพันธุ์
    @phone: 089-185-9078
    @email: bookhunter99@gmail.com
--}}

@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/accounting/credit-note-to-customer/index.css')}}"/>
@endsection

@section('module_name', 'ACCOUNTING > CREDIT NOTE TO CUSTOMER')
@section('page_name', 'INDEX')

@section('body')
<div class="x_content">
    <section class="section-header-index">
        <form class="form-inline form-header-index">
            <div class="row">
                <table style="width: 100%">
                <tr>
                <td class="col-1" style="min-width: inherit;width: 206px;">
                    <div class="col-1-content" >
                        <div class="form-group select-all">
                            <input type="checkbox"  checked class="iCheck" id="selectall" name="selectall" > 
                            <label for="selectall" class="iCheck-label" >Select All</label>
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
    
    <section class="panel-body panel-content scroll-2">
        <div class="row">
            <div class="col-xs-12 content scroll-2" style="    padding-right: 0px;padding-left: 0px;">

                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
<table class="bk-table" border="0">
  <tbody><tr>
  	<td class="bk-checkbox"><input type="checkbox" class="iCheck" name="selectall" ></td>
    <td colspan="7" class="bk-font-s1  bk-font-bold">
    	<label class="">PRODUCT : </label>
        <label class="bk-color-blacklight-0">FFXV</label>
    </td>
  </tr>
  
  <tr class="bk-font-s4 bk-font-bold">
  	<td></td>
    <td>#9999</td>
    <td class="bk-font-bold" colspan="6">CREDIT NOTE FROM SUPPLIER #<label class="bk-font-normal " style="color:#3097d1;">&nbsp;8898</label>,<label class="bk-font-normal " style="color:#3097d1;">&nbsp;9999</label></td>
  </tr>
  
  <tr class="bk-font-s4 bk-font-bold">
  	<td></td>
    <td>DATE</td>
    <td>SUPPLIER</td>
    <td>AMOUNT</td>
    
    <td colspan="4" style="   display:  inline-flex;">
  <button type="button" class="btn btn-ngin btn-default">
	<span class="btn-label" style="">
	  <i class="fa fa-undo info" aria-hidden="true"></i>
	</span>Undo
  </button>

  <button type="button" class="btn btn-ngin btn-default">
	<span class="btn-label" style="">
	  <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
	</span>Edit
  </button>

  <button type="button" class="btn btn-ngin btn-default">
	<span class="btn-label" style="">
	  <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
	</span>Delete
  </button>    

  <button type="button" class="btn btn-ngin btn-default">
	<span class="btn-label" style="">
	  <i class="fa fa-files-o" aria-hidden="true"></i>
	</span>Duplicate
  </button>
	
</td>
    
    
  </tr>
  
  <tr class="bk-font-s2 bk-color-blacklight-0">
  	<td></td>
    <td>01/01/2018</td>
    <td>Sony</td>
    <td>100,000.00 THB</td>
    <td colspan="4"></td>
  </tr>
  </tbody></table>
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
<table class="bk-table-hiso" border="0">
  	<tbody><tr>
      <td>CN#</td>
      <td colspan="2">CUSTOMER NAME</td>
      <td>QTY</td>
      <td>UNIT PRICE</td>
      <td>AMOUNT (Incl. Vat)</td>
      <td>STATUS</td>
      <td></td>
    </tr>
    <tr>
    	<td>0001</td>
        <td colspan="2">Lorem Co, Ltd</td>
        <td>80</td>
        <td>100.00</td>
        <td>8,000.00</td>
        <td>
        	<span class="icon">
          		<i class="fa-approve-all" style="margin-right: 10px;font-size: 12px;font-weight: normal;"></i>
          		<span class="span-icon">APPROVED</span></span>
          	
          	
        </td>
        <td>
          <button type="button" class="btn btn-ngin btn-default">
            <span class="btn-label" style="">
              <i class="fa fa-file" aria-hidden="true" style="color: #7fb2f0;"></i>
            </span>View
          </button>
        </td>
    </tr>
    
    <tr>
    	<td>0002</td>
        <td colspan="2">ipsum Co, Ltd</td>
        <td>1</td>
        <td>50.00</td>
        <td>50.00</td>
        <td style="
">
            
            <span class="icon">
          		<i class="fa fa-exclamation-triangle" style="color:#f7931c;"></i>
          		<span class="span-icon">WAITING FOR APPROVE</span>
          	</span>
          	
        </td>
        <td>
          <button type="button" class="btn btn-ngin btn-default">
            <span class="btn-label" style="">
              <i class="fa fa-file" aria-hidden="true" style="color: #7fb2f0;"></i>
            </span>View
          </button>
        </td>
    </tr>
    
    <tr>
    	<td>0003</td>
        <td colspan="2">BananaIT</td>
        <td>1</td>
        <td>100.00</td>
        <td>100.00</td>
        <td>
        	<span class="icon">
          		<i class="fa-approve-all" style="margin-right: 10px;"></i>
          		<span class="span-icon">APPROVED</span>
          	</span>
        </td>  	
        <td>
          <button type="button" class="btn btn-ngin btn-default">
            <span class="btn-label" style="">
              <i class="fa fa-file" aria-hidden="true" style="color: #7fb2f0;"></i>
            </span>View
          </button>
        </td>
    </tr>

	<tr>
    	<td>0004</td>
        <td colspan="2">Opensource Co,. Ltd</td>
        <td>1</td>
        <td>60.00</td>
        <td>60.00</td>
        <td>
        	<span class="icon">
          		<i class="fa-approve-all" style="margin-right: 10px;"></i>
          		<span class="span-icon">APPROVED</span>
          	</span>
        </td>
        <td>
            <button type="button" class="btn btn-ngin btn-default">
              <span class="btn-label" style="">
                <i class="fa fa-file" aria-hidden="true" style="color: #7fb2f0;"></i>
              </span>View
            </button>
        </td>
    </tr>
    <tr>
    	<td>0005</td>
        <td colspan="2">NADZ Project Co,. Ltd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d</td>
        <td>1</td>
        <td>60.00</td>
        <td>60.00</td>
        <td>
            <span class="icon">
          		<i class="text-danger fa fa-times-circle-o"></i>
          		<span class="span-icon">REJECTED</span>
          	</span>
        </td>
        <td>
            <button type="button" class="btn btn-ngin btn-default">
              <span class="btn-label" style="">
                <i class="fa fa-file" aria-hidden="true" style="color: #7fb2f0;"></i>
              </span>View
            </button>
        </td>
    </tr>
  </tbody></table>
  
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								
<table class="bk-table" border="0">
  <tbody><tr>
  	<td class="bk-checkbox"><input type="checkbox" class="iCheck" name="selectall" ></td>
    <td colspan="7" class="bk-font-s1  bk-font-bold">
    	<label class="">PRODUCT : </label>
        <label class="bk-color-blacklight-0">FFXV</label>
    </td>
  </tr>
  
  <tr class="bk-font-s4 bk-font-bold">
  	<td></td>
    <td>#9999</td>
    <td class="bk-font-bold" colspan="6">CREDIT NOTE FROM SUPPLIER #<label class="bk-font-normal " style="color:#3097d1;">&nbsp;8898</label>,<label class="bk-font-normal " style="color:#3097d1;">&nbsp;9999</label></td>
  </tr>
  
  <tr class="bk-font-s4 bk-font-bold">
  	<td></td>
    <td>DATE</td>
    <td>SUPPLIER</td>
    <td>AMOUNT</td>
    
    <td colspan="4" style="   display:  inline-flex;">
  <button type="button" class="btn btn-ngin btn-default">
	<span class="btn-label" style="">
	  <i class="fa fa-undo info" aria-hidden="true"></i>
	</span>Undo
  </button>

  <button type="button" class="btn btn-ngin btn-default">
	<span class="btn-label" style="">
	  <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
	</span>Edit
  </button>

  <button type="button" class="btn btn-ngin btn-default">
	<span class="btn-label" style="">
	  <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
	</span>Delete
  </button>    

  <button type="button" class="btn btn-ngin btn-default">
	<span class="btn-label" style="">
	  <i class="fa fa-files-o" aria-hidden="true"></i>
	</span>Duplicate
  </button>
	
</td>
    
    
  </tr>
  
  <tr class="bk-font-s2 bk-color-blacklight-0">
  	<td></td>
    <td>01/01/2018</td>
    <td>Sony</td>
    <td>100,000.00 THB</td>
    <td colspan="4"></td>
  </tr>
  </tbody></table>							
								
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
<table class="bk-table-hiso" border="0">
  	<tbody><tr>
      <td>CN#</td>
      <td colspan="2">CUSTOMER NAME</td>
      <td>QTY</td>
      <td>UNIT PRICE</td>
      <td>AMOUNT (Incl. Vat)</td>
      <td>STATUS</td>
      <td></td>
    </tr>
    <tr>
    	<td>0001</td>
        <td colspan="2">Lorem Co, Ltd</td>
        <td>80</td>
        <td>100.00</td>
        <td>8,000.00</td>
        <td>
        	<span class="icon">
          		<i class="fa-approve-all" style="margin-right: 10px;font-size: 12px;font-weight: normal;"></i>
          		<span class="span-icon">APPROVED</span></span>
          	
          	
        </td>
        <td>
          <button type="button" class="btn btn-ngin btn-default">
            <span class="btn-label" style="">
              <i class="fa fa-file" aria-hidden="true" style="color: #7fb2f0;"></i>
            </span>View
          </button>
        </td>
    </tr>
    
    <tr>
    	<td>0002</td>
        <td colspan="2">ipsum Co, Ltd</td>
        <td>1</td>
        <td>50.00</td>
        <td>50.00</td>
        <td style="
">
            
            <span class="icon">
          		<i class="fa fa-exclamation-triangle" style="color:#f7931c;"></i>
          		<span class="span-icon">WAITING FOR APPROVE</span>
          	</span>
          	
        </td>
        <td>
          <button type="button" class="btn btn-ngin btn-default">
            <span class="btn-label" style="">
              <i class="fa fa-file" aria-hidden="true" style="color: #7fb2f0;"></i>
            </span>View
          </button>
        </td>
    </tr>
    
    <tr>
    	<td>0003</td>
        <td colspan="2">BananaIT</td>
        <td>1</td>
        <td>100.00</td>
        <td>100.00</td>
        <td>
        	<span class="icon">
          		<i class="fa-approve-all" style="margin-right: 10px;"></i>
          		<span class="span-icon">APPROVED</span>
          	</span>
        </td>  	
        <td>
          <button type="button" class="btn btn-ngin btn-default">
            <span class="btn-label" style="">
              <i class="fa fa-file" aria-hidden="true" style="color: #7fb2f0;"></i>
            </span>View
          </button>
        </td>
    </tr>

	<tr>
    	<td>0004</td>
        <td colspan="2">Opensource Co,. Ltd</td>
        <td>1</td>
        <td>60.00</td>
        <td>60.00</td>
        <td>
        	<span class="icon">
          		<i class="fa-approve-all" style="margin-right: 10px;"></i>
          		<span class="span-icon">APPROVED</span>
          	</span>
        </td>
        <td>
            <button type="button" class="btn btn-ngin btn-default">
              <span class="btn-label" style="">
                <i class="fa fa-file" aria-hidden="true" style="color: #7fb2f0;"></i>
              </span>View
            </button>
        </td>
    </tr>
    <tr>
    	<td>0005</td>
        <td colspan="2">NADZ Project Co,. Ltd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d</td>
        <td>1</td>
        <td>60.00</td>
        <td>60.00</td>
        <td>
            <span class="icon">
          		<i class="text-danger fa fa-times-circle-o"></i>
          		<span class="span-icon">REJECTED</span>
          	</span>
        </td>
        <td>
            <button type="button" class="btn btn-ngin btn-default">
              <span class="btn-label" style="">
                <i class="fa fa-file" aria-hidden="true" style="color: #7fb2f0;"></i>
              </span>View
            </button>
        </td>
    </tr>
  </tbody></table>
									</div>
								</div>
							</div>
							
							
							
							
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <table class="bk-table" border="0">
                                          <tbody><tr>
                                          	<td class="bk-checkbox"><input type="checkbox" class="iCheck" name="selectall" ></td>
                                            <td colspan="7" class="bk-font-s1  bk-font-bold">
                                            	<label class="">PRODUCT : </label>
                                                <label class="bk-color-blacklight-0">FFXV</label>
                                            </td>
                                          </tr>
                                          
                                          <tr class="bk-font-s4 bk-font-bold">
                                          	<td></td>
                                            <td>#9999</td>
                                            <td class="bk-font-bold" colspan="6">CREDIT NOTE FROM SUPPLIER #<label class="bk-font-normal " style="color:#3097d1;">&nbsp;8898</label>,<label class="bk-font-normal " style="color:#3097d1;">&nbsp;9999</label></td>
                                          </tr>
                                          
                                          <tr class="bk-font-s4 bk-font-bold">
                                          	<td></td>
                                            <td>DATE</td>
                                            <td>SUPPLIER</td>
                                            <td>AMOUNT</td>
                                            
                                            <td colspan="4" style="   display:  inline-flex;">
                                          <button type="button" class="btn btn-ngin btn-default">
                                        	<span class="btn-label" style="">
                                        	  <i class="fa fa-undo info" aria-hidden="true"></i>
                                        	</span>Undo
                                          </button>
                                        
                                          <button type="button" class="btn btn-ngin btn-default">
                                        	<span class="btn-label" style="">
                                        	  <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                                        	</span>Edit
                                          </button>
                                        
                                          <button type="button" class="btn btn-ngin btn-default">
                                        	<span class="btn-label" style="">
                                        	  <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                                        	</span>Delete
                                          </button>    
                                        
                                          <button type="button" class="btn btn-ngin btn-default">
                                        	<span class="btn-label" style="">
                                        	  <i class="fa fa-files-o" aria-hidden="true"></i>
                                        	</span>Duplicate
                                          </button>
                                        	
                                        </td>
                                            
                                            
                                          </tr>
                                          
                                          <tr class="bk-font-s2 bk-color-blacklight-0">
                                          	<td></td>
                                            <td>01/01/2018</td>
                                            <td>Sony</td>
                                            <td>100,000.00 THB</td>
                                            <td colspan="4"></td>
                                          </tr>
                                          </tbody></table>
  
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
                                    	<table class="bk-table-hiso" border="0">
                                      	<tbody><tr>
                                          <td>CN#</td>
                                          <td colspan="2">CUSTOMER NAME</td>
                                          <td>QTY</td>
                                          <td>UNIT PRICE</td>
                                          <td>AMOUNT (Incl. Vat)</td>
                                          <td>STATUS</td>
                                          <td></td>
                                        </tr>
                                        <tr>
                                        	<td>0001</td>
                                            <td colspan="2">Lorem Co, Ltd</td>
                                            <td>80</td>
                                            <td>100.00</td>
                                            <td>8,000.00</td>
                                            <td>
                                            	<span class="icon">
                                              		<i class="fa-approve-all" style="margin-right: 10px;font-size: 12px;font-weight: normal;"></i>
                                              		<span class="span-icon">APPROVED</span></span>
                                              	
                                              	
                                            </td>
                                            <td>
                                              <button type="button" class="btn btn-ngin btn-default">
                                                <span class="btn-label" style="">
                                                  <i class="fa fa-file" aria-hidden="true" style="color: #7fb2f0;"></i>
                                                </span>View
                                              </button>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                        	<td>0002</td>
                                            <td colspan="2">ipsum Co, Ltd</td>
                                            <td>1</td>
                                            <td>50.00</td>
                                            <td>50.00</td>
                                            <td style="">
                                                
                                                <span class="icon">
                                              		<i class="fa fa-exclamation-triangle" style="color:#f7931c;"></i>
                                              		<span class="span-icon">WAITING FOR APPROVE</span>
                                              	</span>
                                              	
                                            </td>
                                            <td>
                                              <button type="button" class="btn btn-ngin btn-default">
                                                <span class="btn-label" style="">
                                                  <i class="fa fa-file" aria-hidden="true" style="color: #7fb2f0;"></i>
                                                </span>View
                                              </button>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                        	<td>0003</td>
                                            <td colspan="2">BananaIT</td>
                                            <td>1</td>
                                            <td>100.00</td>
                                            <td>100.00</td>
                                            <td>
                                            	<span class="icon">
                                              		<i class="fa-approve-all" style="margin-right: 10px;"></i>
                                              		<span class="span-icon">APPROVED</span>
                                              	</span>
                                            </td>  	
                                            <td>
                                              <button type="button" class="btn btn-ngin btn-default">
                                                <span class="btn-label" style="">
                                                  <i class="fa fa-file" aria-hidden="true" style="color: #7fb2f0;"></i>
                                                </span>View
                                              </button>
                                            </td>
                                        </tr>
                                    
                                    	<tr>
                                        	<td>0004</td>
                                            <td colspan="2">Opensource Co,. Ltd</td>
                                            <td>1</td>
                                            <td>60.00</td>
                                            <td>60.00</td>
                                            <td>
                                            	<span class="icon">
                                              		<i class="fa-approve-all" style="margin-right: 10px;"></i>
                                              		<span class="span-icon">APPROVED</span>
                                              	</span>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-ngin btn-default">
                                                  <span class="btn-label" style="">
                                                    <i class="fa fa-file" aria-hidden="true" style="color: #7fb2f0;"></i>
                                                  </span>View
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td>0005</td>
                                            <td colspan="2">NADZ Project Co,. Ltd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d</td>
                                            <td>1</td>
                                            <td>60.00</td>
                                            <td>60.00</td>
                                            <td>
                                                <span class="icon">
                                              		<i class="text-danger fa fa-times-circle-o"></i>
                                              		<span class="span-icon">REJECTED</span>
                                              	</span>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-ngin btn-default">
                                                  <span class="btn-label" style="">
                                                    <i class="fa fa-file" aria-hidden="true" style="color: #7fb2f0;"></i>
                                                  </span>View
                                                </button>
                                            </td>
                                        </tr>
                                      </tbody></table>					  
									</div>
								</div>
							</div>
							
							
							
							
							
							<!--  next  -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingfour">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <table class="bk-table" border="0">
                                          <tbody><tr>
                                          	<td class="bk-checkbox"><input type="checkbox" class="iCheck" name="selectall" ></td>
                                            <td colspan="7" class="bk-font-s1  bk-font-bold">
                                            	<label class="">PRODUCT : </label>
                                                <label class="bk-color-blacklight-0">FFXV</label>
                                            </td>
                                          </tr>
                                          
                                          <tr class="bk-font-s4 bk-font-bold">
                                          	<td></td>
                                            <td>#9999</td>
                                            <td class="bk-font-bold" colspan="6">CREDIT NOTE FROM SUPPLIER #<label class="bk-font-normal " style="color:#3097d1;">&nbsp;8898</label>,<label class="bk-font-normal " style="color:#3097d1;">&nbsp;9999</label></td>
                                          </tr>
                                          
                                          <tr class="bk-font-s4 bk-font-bold">
                                          	<td></td>
                                            <td>DATE</td>
                                            <td>SUPPLIER</td>
                                            <td>AMOUNT</td>
                                            
                                            <td colspan="4" style="   display:  inline-flex;">
                                          <button type="button" class="btn btn-ngin btn-default">
                                        	<span class="btn-label" style="">
                                        	  <i class="fa fa-undo info" aria-hidden="true"></i>
                                        	</span>Undo
                                          </button>
                                        
                                          <button type="button" class="btn btn-ngin btn-default">
                                        	<span class="btn-label" style="">
                                        	  <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                                        	</span>Edit
                                          </button>
                                        
                                          <button type="button" class="btn btn-ngin btn-default">
                                        	<span class="btn-label" style="">
                                        	  <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                                        	</span>Delete
                                          </button>    
                                        
                                          <button type="button" class="btn btn-ngin btn-default">
                                        	<span class="btn-label" style="">
                                        	  <i class="fa fa-files-o" aria-hidden="true"></i>
                                        	</span>Duplicate
                                          </button>
                                        	
                                        </td>
                                            
                                            
                                          </tr>
                                          
                                          <tr class="bk-font-s2 bk-color-blacklight-0">
                                          	<td></td>
                                            <td>01/01/2018</td>
                                            <td>Sony</td>
                                            <td>100,000.00 THB</td>
                                            <td colspan="4"></td>
                                          </tr>
                                          </tbody></table>
  
										</a>
									</h4>
								</div>
								<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseFour">
									<div class="panel-body">
                                    	<table class="bk-table-hiso" border="0">
                                      	<tbody><tr>
                                          <td>CN#</td>
                                          <td colspan="2">CUSTOMER NAME</td>
                                          <td>QTY</td>
                                          <td>UNIT PRICE</td>
                                          <td>AMOUNT (Incl. Vat)</td>
                                          <td>STATUS</td>
                                          <td></td>
                                        </tr>
                                        <tr>
                                        	<td>0001</td>
                                            <td colspan="2">Lorem Co, Ltd</td>
                                            <td>80</td>
                                            <td>100.00</td>
                                            <td>8,000.00</td>
                                            <td>
                                            	<span class="icon">
                                              		<i class="fa-approve-all" style="margin-right: 10px;font-size: 12px;font-weight: normal;"></i>
                                              		<span class="span-icon">APPROVED</span></span>
                                              	
                                              	
                                            </td>
                                            <td>
                                              <button type="button" class="btn btn-ngin btn-default">
                                                <span class="btn-label" style="">
                                                  <i class="fa fa-file" aria-hidden="true" style="color: #7fb2f0;"></i>
                                                </span>View
                                              </button>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                        	<td>0002</td>
                                            <td colspan="2">ipsum Co, Ltd</td>
                                            <td>1</td>
                                            <td>50.00</td>
                                            <td>50.00</td>
                                            <td style="">
                                                
                                                <span class="icon">
                                              		<i class="fa fa-exclamation-triangle" style="color:#f7931c;"></i>
                                              		<span class="span-icon">WAITING FOR APPROVE</span>
                                              	</span>
                                              	
                                            </td>
                                            <td>
                                              <button type="button" class="btn btn-ngin btn-default">
                                                <span class="btn-label" style="">
                                                  <i class="fa fa-file" aria-hidden="true" style="color: #7fb2f0;"></i>
                                                </span>View
                                              </button>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                        	<td>0003</td>
                                            <td colspan="2">BananaIT</td>
                                            <td>1</td>
                                            <td>100.00</td>
                                            <td>100.00</td>
                                            <td>
                                            	<span class="icon">
                                              		<i class="fa-approve-all" style="margin-right: 10px;"></i>
                                              		<span class="span-icon">APPROVED</span>
                                              	</span>
                                            </td>  	
                                            <td>
                                              <button type="button" class="btn btn-ngin btn-default">
                                                <span class="btn-label" style="">
                                                  <i class="fa fa-file" aria-hidden="true" style="color: #7fb2f0;"></i>
                                                </span>View
                                              </button>
                                            </td>
                                        </tr>
                                    
                                    	<tr>
                                        	<td>0004</td>
                                            <td colspan="2">Opensource Co,. Ltd</td>
                                            <td>1</td>
                                            <td>60.00</td>
                                            <td>60.00</td>
                                            <td>
                                            	<span class="icon">
                                              		<i class="fa-approve-all" style="margin-right: 10px;"></i>
                                              		<span class="span-icon">APPROVED</span>
                                              	</span>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-ngin btn-default">
                                                  <span class="btn-label" style="">
                                                    <i class="fa fa-file" aria-hidden="true" style="color: #7fb2f0;"></i>
                                                  </span>View
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td>0005</td>
                                            <td colspan="2">NADZ Project Co,. Ltd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d</td>
                                            <td>1</td>
                                            <td>60.00</td>
                                            <td>60.00</td>
                                            <td>
                                                <span class="icon">
                                              		<i class="text-danger fa fa-times-circle-o"></i>
                                              		<span class="span-icon">REJECTED</span>
                                              	</span>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-ngin btn-default">
                                                  <span class="btn-label" style="">
                                                    <i class="fa fa-file" aria-hidden="true" style="color: #7fb2f0;"></i>
                                                  </span>View
                                                </button>
                                            </td>
                                        </tr>
                                      </tbody></table>					  
									</div>
								</div>
							</div>
							
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
@endsection

@section('top-right-sidebar')
    <div>Top Right Sidebar</div>
@endsection

@section('bottom-right-sidebar')
    <div>Bottom Right Sidebar</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/accounting/credit-note-to-customer/index.js') }}"></script>

@endsection
