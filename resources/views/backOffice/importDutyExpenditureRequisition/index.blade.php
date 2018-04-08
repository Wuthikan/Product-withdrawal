@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/purchasing/import-duty-expenditure-requisition/index.css')}}"/>
@endsection

@section('module_name', 'PURCHASING > IMPORT DUTY REQ.')
@section('page_name', 'INDEX')

@section('body')

		<div class="x_content">
		<section class="section-header-index">
          <form class="form-inline form-header-index">
              <div class="row">
                <table>
                  <tr>
                    <td class="col-1">
                      <div class="col-1-content" >
                        <div class="form-group select-all">
                          <input type="checkbox"  checked class="iCheck" id="selectall" name="selectall" > 
                          <label for="selectall" class="iCheck-label" >Select All</label>
                        </div>
                        <div class="form-group">
                          <button type="button" class="btn btn-default-background" onclick="window.location='{{ route("backOffice.purchasing.import-duty.create") }}'">
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
                    <td class="col-3">
    
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
                          <button type="button" class="btn  btn-default-background">
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

		<section class="section-margin panel-content scroll-2">
			
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

            

		    @for($i=9; $i>3; $i--)
		    <div class="panel panel-default">
		        <div class="panel-heading" role="tab" id="panel-{!! $i !!}">
		          <div role="button" data-toggle="collapse" data-parent="#accordion" href="#panel-body-{!! $i !!}" aria-expanded="false" aria-controls="collapse-{!! $i !!}" class="collapsed">

		          	<div class="row table-head">
		          		<div class="col-xs-2 col-md-2 col-checkbox">		          			
										<input type="checkbox" class="iCheck" />	
										<span class="spn-first">PO#<span class="number text-primary">{!! $i !!}</span></span>	
		          		</div>
   						 <div class="col-xs-3 col-md-3 text-center table-text-head">
								<p><span class="text-head">TOTAL IMPORT DUTY (THB)</span></p>
								<p><span class="text-desc">8,000.00</span></p>
								
						</div>
						<div class="col-xs-3 col-md-3 text-center table-text-head ">
							<p><span class="text-head">LOGISTIC SUPPLIER COMPANY</span></p>
							<p><span class="text-desc">AdiwaT Co.,Ltd</span></p>
						</div>
						<div class="col-xs-4 col-md-4 last-col text-center btn-group-manger">
							<div>
                                <button type="button" class="btn btn-ngin btn-default" onclick="">
                                    <span class="btn-label">
                                        <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                                    </span>Edit
                                </button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-ngin btn-default" style="margin-left: 20px;">
                                    <span class="btn-label">
                                        <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                                    </span>Delete
                                </button>
                            </div>
							
							
						</div>
		          	</div>

		          </div>
		        </div>
		        <div id="panel-body-{!! $i !!}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false">
		            <div class="panel-body text-black">
		             
	                  <table class="table table-import-duty">
	                    <thead>
	                      <tr>
	                        <th class="w-230 text-center">EXPENDITURE REQUESTION ID</th>	                        
	                        <th class="w-160 text-center">AMOUNT</th>
                            <th class="text-center">STATUS</th>
                            <th colspan="2"></th>
	                      </tr>
	                    </thead>
	                    <tbody>
	                    	@for($a =1; $a<4; $a++)
	                    	<tr>
                    			<td class="text-center">{!! $a !!}{!! $a !!}{!! $a !!}{!! $a !!}{!! $a !!}</td>
		                    	<td class="text-center">1,000.00 THB</td>
		                        <td class="text-center"><span class="iq-status"><i class="iq-status-icon fa-approve-all"></i>APPROVED</span> </td>
		                        <td colspan="2" class="td-manager col-xs-4 col-md-4">
                                    <div class="btn-group-manger">
                                    <button type="button" class="btn btn-ngin btn-default" onclick="">
										<span class="btn-label">
											<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
										</span>Edit
									</button>
									<button type="button" class="btn btn-ngin btn-default" style="margin-left: 20px;">
										<span class="btn-label">
											<i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
										</span>Delete
									</button>
                                    </div>
									 
								</td>
	                    	</tr>
	                    	@endfor

							<tr>
                    			<td class="text-center">4444</td>
		                    	<td class="text-center">1,000.00 THB</td>
		                        <td class="text-center"><div class="iq-status waiting"><i class="iq-status-icon fa-exclamation"></i> <p style="padding-left:10px;">WAITING FOR APPROVE</p></div></td>
		                        <td colspan="2" class="td-manager">
									<div class="btn-group-manger">
                                    <button type="button" class="btn btn-ngin btn-default" onclick="">
										<span class="btn-label">
											<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
										</span>Edit
									</button>
									<button type="button" class="btn btn-ngin btn-default" style="margin-left: 20px;">
										<span class="btn-label">
											<i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
										</span>Delete
									</button>
                                    </div>
								</td>
	                    	</tr>
							<tr>
                    			<td class="text-center">5555</td>
		                    	<td class="text-center">1,000.00 THB</td>
		                        <td class="text-center"><i class="fa fa-times-circle-o text-danger" aria-hidden="true"></i> REJECTED</td>
		                        <td colspan="2" class="td-manager">
									<div class="btn-group-manger">
                                    <button type="button" class="btn btn-ngin btn-default" onclick="">
										<span class="btn-label">
											<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
										</span>Edit
									</button>
									<button type="button" class="btn btn-ngin btn-default" style="margin-left: 20px;">
										<span class="btn-label">
											<i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
										</span>Delete
									</button>
                                    </div>
								</td>
	                    	</tr>
	                    </tbody>
	                  </table>
                    </div>

                </div>
                
		    </div>
            @endfor
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

@section('top-right-sidebar')
    <div>Top Right Sidebar</div>
@endsection

@section('bottom-right-sidebar')
    <div>Bottom Right Sidebar</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/other/product-borrow/index.js') }}"></script>
@endsection