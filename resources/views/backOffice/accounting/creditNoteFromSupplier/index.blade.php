{{-- 
    @author: กีรติพร  ลีลาวันทนพันธุ์
    @phone: 089-185-9078
    @email: bookhunter99@gmail.com
--}}

@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/accounting/credit-note-from-supplier/index.css')}}"/>
@endsection

@section('module_name', 'ACCOUNTING > C/N FROM SUPPLIER')
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
                            <button type="button" class="btn btn-default-background" onclick="window.location='{{ route("backOffice.accounting.credit-note-from-supplier.create") }}'">
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
    
<section class="panel-body panel-content scroll-2">
        <div class="row">
            <div class="col-xs-12 content scroll-2" style="padding-right: 0px;padding-left: 0px;">
			
			
				<!--   item 1    -->
				<div class="bk-group1">
					<table class="bk-table" border="0">
					  <tbody><tr>
						<td class="bk-checkbox">
						    <input type="checkbox" class="iCheck">
						</td><td class="bk-font-s4 bk-font-normal">
							<span class="icon" style="margin-right: 10px;">
								<i class="fa-approve-all"></i>
							</span><span style="position: relative;top: 3px;">APPROVE</span>
						</td>
						<td colspan="2" class="bk-font-s2 bk-font-bold">
							PS4-G FFXV Std (R3) [EN/TH]
						</td>
						<td colspan="2" class="bk-font-s4 bk-font-bold">
							AMOUNT&nbsp;&nbsp;USED/TOTAL
						</td>
					  </tr>
					  <tr>
						<td></td>
						<td></td>
						<td colspan="2" class="bk-font-s4 bk-font-bold">
						  <label>DOCUMENT DATE :</label>
						  <label class="bk-color-blacklight-1">&nbsp;01/01/2018</label></td>
						<td colspan="2">
						  <label class="bk-font-s2 bk-font-normal bk-color-blacklight-0 bk-edit-1">11,000.00/20,000.00 USD</label>
						</td>
					  </tr>
					  <tr>
						<td></td>
						<td></td>
						<td colspan="2" class="bk-font-s3">
						  <label class="bk-font-bold">SUPPLIER NAME</label>
						  <label class="bk-color-blacklight-2 bk-font-normal">&nbsp;&nbsp;SONY Co. Ltd</label>		</td>
						<td colspan="2"></td>
					  </tr>
					  <tr>
						<td></td>
						<td rowspan="2">
						  <button type="button" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
							<span class="btn-label left">
								<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
							</span>
							<span class="text">Edit</span>
						  </button>
						</td>
						<td colspan="2" rowspan="2">
						  <button type="submit" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
							  <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
							  <span class="text">Delete</span>
						  </button>
						</td>
						<td colspan="2" rowspan="2">
							<div class="bk-div-table">
							  <div style="padding-right:20px;">
								<label class="bk-font-s4 bk-font-bold">SUPPLIER REF. NUMBER</label>
								<br>
								<label class="bk-font-s1 bk-font-normal bk-edit-2">769</label>
							  </div>
							  <div>
								<label class="bk-font-s4 bk-font-bold">PO # (OPTIONAL)</label>
								<br>
								<label class="bk-font-s3 bk-font-normal ">5822</label>
							  </div>
							</div>
						</td>
					  </tr>
					  <tr>
						<td></td>
					  </tr>
					</tbody></table>
				</div>
				<!--   item 2    -->
				<div class="bk-group1">
					<table class="bk-table" border="0">
					  <tbody><tr>
						<td class="bk-checkbox">
						    <input type="checkbox" class="iCheck">
						</td><td class="bk-font-s4 bk-font-normal">
							<span class="icon" style="margin-right: 10px;">
								<i class="fa-approve-all"></i>
							</span><span style="position: relative;top: 3px;">APPROVE</span>
						</td>
						<td colspan="2" class="bk-font-s2 bk-font-bold">
							FIFA 18
						</td>
						<td colspan="2" class="bk-font-s4 bk-font-bold">
							AMOUNT&nbsp;&nbsp;USED/TOTAL
						</td>
					  </tr>
					  <tr>
						<td></td>
						<td></td>
						<td colspan="2" class="bk-font-s4 bk-font-bold">
						  <label>DOCUMENT DATE :</label>
						  <label class="bk-color-blacklight-1">&nbsp;01/01/2018</label></td>
						<td colspan="2">
						  <label class="bk-font-s2 bk-font-normal bk-color-blacklight-0 bk-edit-1">11,000.00/20,000.00 USD</label>
						</td>
					  </tr>
					  <tr>
						<td></td>
						<td></td>
						<td colspan="2" class="bk-font-s3">
						  <label class="bk-font-bold">SUPPLIER NAME</label>
						  <label class="bk-color-blacklight-2 bk-font-normal">&nbsp;&nbsp;SONY Co. Ltd</label>		</td>
						<td colspan="2"></td>
					  </tr>
					  <tr>
						<td></td>
						<td rowspan="2">
						  <button type="button" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
							<span class="btn-label left">
								<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
							</span>
							<span class="text">Edit</span>
						  </button>
						</td>
						<td colspan="2" rowspan="2">
						  <button type="submit" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
							  <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
							  <span class="text">Delete</span>
						  </button>
						</td>
						<td colspan="2" rowspan="2">
							<div class="bk-div-table">
							  <div style="padding-right:20px;">
								<label class="bk-font-s4 bk-font-bold">SUPPLIER REF. NUMBER</label>
								<br>
								<label class="bk-font-s1 bk-font-normal bk-edit-2">769</label>
							  </div>
							  <div>
								<label class="bk-font-s4 bk-font-bold">PO # (OPTIONAL)</label>
								<br>
								<label class="bk-font-s3 bk-font-normal ">5822</label>
							  </div>
							</div>
						</td>
					  </tr>
					  <tr>
						<td></td>
					  </tr>
					</tbody></table>
				</div>
				
				
				
				
				
				
				<!--   item 3    -->
				
				
				
				
				<div class="bk-group1">
					<table class="bk-table" border="0">
					  <tbody><tr>
						<td class="bk-checkbox">
							<input type="checkbox" class="iCheck">
						</td>
						<td class="bk-font-s4 bk-font-normal">					
							<span class="icon" style="margin-right: 5px;">
								<i class="fa fa-exclamation" style="color:#f7931c;position:  relative;top: 3px;"></i>
							</span><span style="position: relative;top: 3px;padding-right: 3px;">WAITING FOR APPROVE</span>
						</td>


						<td colspan="2" class="bk-font-s2 bk-font-bold">
							CRASH BANDICOOT
						</td>
						<td colspan="2" class="bk-font-s4 bk-font-bold" style="vertical-align: bottom;">
							AMOUNT&nbsp;&nbsp;USED/TOTAL
						</td>
					  </tr>
					  <tr>
						<td></td>
						<td></td>
						<td colspan="2" class="bk-font-s4 bk-font-bold">
						  <label>DOCUMENT DATE :</label>
						  <label class="bk-color-blacklight-1">&nbsp;03/01/2018</label></td>
						<td colspan="2">
						  <label class="bk-font-s2 bk-font-normal bk-color-blacklight-0 bk-edit-1">20.00/10,000.00 USD</label>
						</td>
					  </tr>
					  <tr>
						<td></td>
						<td></td>
						<td colspan="2" class="bk-font-s3">
						  <label class="bk-font-bold">SUPPLIER NAME</label>
						  <label class="bk-color-blacklight-2 bk-font-normal">&nbsp;&nbsp;SONY Co. Ltd</label>		</td>
						<td colspan="2"></td>
					  </tr>
					  <tr>
						<td></td>
						<td rowspan="2">
						  <button type="button" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
							<span class="btn-label left">
								<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
							</span>
							<span class="text">Edit</span>
						  </button>
						</td>
						<td colspan="2" rowspan="2">
						  <button type="submit" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
							  <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
							  <span class="text">Delete</span>
						  </button>
						</td>
						<td colspan="2" rowspan="2">
							<div class="bk-div-table">
							  <div style="padding-right:20px;">
								<label class="bk-font-s4 bk-font-bold">SUPPLIER REF. NUMBER</label>
								<br>
								<label class="bk-font-s1 bk-font-normal bk-edit-2">6069</label>
							  </div>
							  <div>
								<label class="bk-font-s4 bk-font-bold">PO # (OPTIONAL)</label>
								<br>
								<label class="bk-font-s4 bk-font-normal">-</label>
							  </div>
							</div>
						</td>
					  </tr>
					  <tr>
						<td></td>
					  </tr>
					</tbody></table>
				</div>
				<!--   item 4    -->
				<div class="bk-group1">
					<table class="bk-table" border="0">
					  <tbody><tr>
						<td class="bk-checkbox">
							<input type="checkbox" class="iCheck">
						</td>
						<td class="bk-font-s4 bk-font-normal">							
							<span class="icon" style="margin-right: 10px;">
								<i class="fa-delete-all"></i>
							</span>
							<span style="position: relative;top: 3px;">REDJECTED</span>
						</td>

						<td colspan="2" class="bk-font-s2 bk-font-bold">
							RESIDENT EVIL 7
						</td>
						<td colspan="2" class="bk-font-s4 bk-font-bold" style="vertical-align: bottom;">
							AMOUNT&nbsp;&nbsp;USED/TOTAL
						</td>
					  </tr>
					  <tr>
						<td></td>
						<td></td>
						<td colspan="2" class="bk-font-s4 bk-font-bold">
						  <label>DOCUMENT DATE :</label>
						  <label class="bk-color-blacklight-1">&nbsp;04/01/2018</label></td>
						<td colspan="2">
						  <label class="bk-font-s2 bk-font-normal bk-color-blacklight-0 bk-edit-1">20.00/10,000.00 USD</label>
						</td>
					  </tr>
					  <tr>
						<td></td>
						<td></td>
						<td colspan="2" class="bk-font-s.">
						  <label class="bk-font-bold">SUPPLIER NAME</label>
						  <label class="bk-color-blacklight-2 bk-font-normal">&nbsp;&nbsp;SONY Co. Ltd</label>		</td>
						<td colspan="2"></td>
					  </tr>
					  <tr>
						<td></td>
						<td rowspan="2">
						  <button type="button" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
							<span class="btn-label left">
								<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
							</span>
							<span class="text">Edit</span>
						  </button>
						</td>
						<td colspan="2" rowspan="2">
						  <button type="submit" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
							  <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
							  <span class="text">Delete</span>
						  </button>
						</td>
						<td colspan="2" rowspan="2">
							<div class="bk-div-table">
							  <div style="padding-right:20px;">
								<label class="bk-font-s4 bk-font-bold">SUPPLIER REF. NUMBER</label>
								<br>
								<label class="bk-font-s1 bk-font-normal bk-edit-2">-</label>
							  </div>
							  <div>
								<label class="bk-font-s4 bk-font-bold">PO # (OPTIONAL)</label>
								<br>
								<label class="bk-font-s4 bk-font-normal">-</label>
							  </div>
							</div>
						</td>
					  </tr>
					  <tr>
						<td></td>
					  </tr>
					</tbody></table>
				</div>
				<!--   item 5    -->
				<div class="bk-group1">
					<table class="bk-table" border="0">
					  <tbody><tr>
						<td class="bk-checkbox">
						    <input type="checkbox" class="iCheck">
						</td>
						<td class="bk-font-s4 bk-font-normal">
							<span class="icon" style="margin-right: 10px;">
								<i class="fa-approve-all"></i>
							</span>
    						<span style="position: relative;top: 3px;">APPROVE</span>
						</td>
						<td colspan="2" class="bk-font-s2 bk-font-bold">
							FIFA 18
						</td>
						<td colspan="2" class="bk-font-s4 bk-font-bold" style="vertical-align: bottom;">
							AMOUNT&nbsp;&nbsp;USED/TOTAL
						</td>
					  </tr>
					  <tr>
						<td></td>
						<td></td>
						<td colspan="2" class="bk-font-s4 bk-font-bold">
						  <label>DOCUMENT DATE :</label>
						  <label class="bk-color-blacklight-1">&nbsp;05/01/2018</label></td>
						<td colspan="2">
						  <label class="bk-font-s2 bk-font-normal bk-color-blacklight-0 bk-edit-1">20.00/10,000.00 USD</label>
						</td>
					  </tr>
					  <tr>
						<td></td>
						<td></td>
						<td colspan="2" class="bk-font-s3">
						  <label class="bk-font-bold">SUPPLIER NAME</label>
						  <label class="bk-color-blacklight-2 bk-font-normal">&nbsp;&nbsp;SONY Co. Ltd</label>		</td>
						<td colspan="2"></td>
					  </tr>
					  <tr>
						<td></td>
						<td rowspan="2">
						  <button type="button" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
							<span class="btn-label left">
								<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
							</span>
							<span class="text">Edit</span>
						  </button>
						</td>
						<td colspan="2" rowspan="2">
						  <button type="submit" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
							  <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
							  <span class="text">Delete</span>
						  </button>
						</td>
						<td colspan="2" rowspan="2">
							<div class="bk-div-table">
							  <div style="padding-right:20px;">
								<label class="bk-font-s4 bk-font-bold">SUPPLIER REF. NUMBER</label>
								<br>
								<label class="bk-font-s1 bk-font-normal bk-edit-2">5434</label>
							  </div>
							  <div>
								<label class="bk-font-s4 bk-font-bold">PO # (OPTIONAL)</label>
								<br>
								<label class="bk-font-s4 bk-font-normal">7794</label>
							  </div>
							</div>
						</td>
					  </tr>
					  <tr>
						<td></td>
					  </tr>
					</tbody></table>
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
    <script src="{{ asset('js/back-office/accounting/credit-note-from-supplier/index.js') }}"></script>

@endsection