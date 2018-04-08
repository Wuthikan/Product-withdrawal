@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/accounting/credit-note/index.css')}}"/>
@endsection

@section('module_name', 'CREDIT NOTE')
@section('page_name', 'INDEX')

@section('body')
	<div id='divCreditNote' class='credit-note'>

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
                      <button type="button" class="btn btn-default-background" onclick="window.location='{{ url("back-office/accounting/credit-note/create") }}'">
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

		    @for($i =1; $i<5; $i++)
		    <div class="panel panel-default">
		        <div class="panel-heading" role="tab" id="panel-{!! $i !!}">
		          <div role="button" data-toggle="collapse" data-parent="#accordion" href="#panel-body-{!! $i !!}" aria-expanded="false" aria-controls="collapse-{!! $i !!}" class="collapsed">

		          	<div class='row'>
		          		<div class="col-md-12 col-checkbox">
		          			<input type="checkbox" class="iCheck" />
		                  	<span class="spn-first"><b>CN# </b></span>	
		                  	<span><a href='#' class='text-primary'>0000{!! $i !!}</a></span>
		          		</div>
		          	</div>

		          	<div class='row'>
		          		<div class="col-md-2 first-col" style="margin-left: 25px;">
		          			<button type="button" class="btn btn-default-background">
									<span class="btn-label"><span class="fa-approve-all"></span></span><span class="btn-label-label" style="margin-left: 6px;">Approve</span>
							</button>
		          		</div>
						<div class='col-md-3 vertical-center-col'>
								<p>
									<span class='credit-note-bold credit-note-detail'>DOCUMENT DATE:</span><span class='font-gray credit-note-bold'> 01/01/2018</span>	
								</p>
								<p>
									<span class='credit-note-bold credit-note-detail'>CUSTOMER:</span>
									<span class='credit-note-detail font-gray'> NADZ Project Co.,Ltd</span>
								</p>
								
						</div>
						<div class="col-md-2 vertical-center-col">
							<p style="font-weight: bold;">Amount</p>
							<label class="font-gray credit-note-detail">100,000.00 THB</label>
						</div>
						<div class="col-md-4 last-col vertical-center-col-btn">
							<button type="button" class="btn btn-ngin btn-default" onclick="">
								<span class="btn-label">
									<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
								</span>Edit
							</button>
							<button type="button" class="btn btn-ngin btn-default">
								<span class="btn-label">
									<i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
								</span>Delete
							</button>
							<button type="button" class="btn btn-ngin btn-default">
								<span class="btn-label">
									<i class="fa fa-files-o" aria-hidden="true"></i>
								</span>Duplicate
							</button>
						</div>
		          	</div>

		          </div>
		        </div>
		        <div id="panel-body-{!! $i !!}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false">
		         <div class="panel-body text-black">
		             
					<div class="table-responsive col-md-8 col-md-offset-2">
	                  <table class="table ngin-table table-credit-note">
	                    <thead>
	                      <tr>
	                        <th>TAX INV #</th>
	                        <th>ORDERED QTY</th>
	                        <th>CREDITED QTY</th>
	                        <th>CREDIT NOTE AMOUNT/UNIT</th>
	                        <th>AMOUNT</th>
	                      </tr>
	                    </thead>
	                    <tbody>
	                    	@for($a =1; $a<6; $a++)
	                    	<tr>
                    			<td>0001</td>
		                    	<td>10</td>
		                        <td>1</td>
		                        <td>9.00</td>
		                        <td>9.00</td>
	                    	</tr>
	                    	@endfor
	                    </tbody>
	                  </table>
	                </div>

		        </div>
		      </div>
		    </div>
		    @endfor

		    <!-- WATING FOR APPROVE -->
		    <div class="panel panel-default">
		        <div class="panel-heading" role="tab" id="panel-5">
		          <div role="button" data-toggle="collapse" data-parent="#accordion" href="#panel-body-5" aria-expanded="false" aria-controls="collapse-5" class="collapsed">

		          	<div class='row'>
		          		<div class="col-md-12 col-checkbox">
		          			<input type="checkbox" class="iCheck" />
		                  	<span class="spn-first"><b>CN# </b></span>	
		                  	<span><a href='#' class='text-primary'>00005</a></span>
		          		</div>
		          	</div>

		          	<div class='row'>
		          		<div class="col-md-2 first-col" style="margin-left: 25px;">
		          			<!-- <button type="button" class="btn btn-default-background">
											<span class="btn-label"><span class="iq-status-icon fa fa-exclamation"></span></span>
											<span>WAITING FOR</span>
											<br />
											<span style='margin-left:18px;'>APPROVAL</span>
										</button> -->
										<div class="iq-status waiting"><i class="iq-status-icon fa-exclamation"></i> 
											<span class="span-waiting">WAIRING FOR </span>
											<br />
											<span class="span-waiting" style="margin-left:13px !important;">APPROVE</span>
										</div>
		          		</div>
						<div class='col-md-3 vertical-center-col'>
								<p>
									<span class='credit-note-bold credit-note-detail'>DOCUMENT DATE:</span><span class='font-gray credit-note-bold'> 01/01/2018</span>	
								</p>
								<p>
									<span class='credit-note-bold credit-note-detail'>CUSTOMER:</span>
									<span class='credit-note-detail font-gray'> NADZ Project Co.,Ltd</span>
								</p>
								
						</div>
						<div class="col-md-2 vertical-center-col">
							<p style="font-weight: bold;">Amount</p>
							<label class="font-gray credit-note-detail">100,000.00 THB</label>
						</div>
						<div class="col-md-4 last-col vertical-center-col-btn">
							<button type="button" class="btn btn-ngin btn-default" onclick="">
								<span class="btn-label">
									<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
								</span>Edit
							</button>
							<button type="button" class="btn btn-ngin btn-default">
								<span class="btn-label">
									<i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
								</span>Delete
							</button>
							<button type="button" class="btn btn-ngin btn-default">
								<span class="btn-label">
									<i class="fa fa-files-o" aria-hidden="true"></i>
								</span>Duplicate
							</button>
						</div>
		          	</div>

		          </div>
		        </div>
		        <div id="panel-body-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false">
		         <div class="panel-body text-black">
		             
					<div class="table-responsive col-md-8 col-md-offset-2">
	                  <table class="table ngin-table table-credit-note">
	                    <thead>
	                      <tr>
	                        <th>TAX INV #</th>
	                        <th>ORDERED QTY</th>
	                        <th>CREDITED QTY</th>
	                        <th>CREDIT NOTE AMOUNT/UNIT</th>
	                        <th>AMOUNT</th>
	                      </tr>
	                    </thead>
	                    <tbody>
	                    	@for($a =1; $a<6; $a++)
	                    	<tr>
                    			<td>0001</td>
		                    	<td>10</td>
		                        <td>1</td>
		                        <td>9.00</td>
		                        <td>9.00</td>
	                    	</tr>
	                    	@endfor
	                    </tbody>
	                  </table>
	                </div>

		        </div>
		      </div>
		    </div>

		    <!-- REJECT -->
		    <div class="panel panel-default">
		        <div class="panel-heading" role="tab" id="panel-6">
		          <div role="button" data-toggle="collapse" data-parent="#accordion" href="#panel-body-6" aria-expanded="false" aria-controls="collapse-6" class="collapsed">

		          	<div class='row'>
		          		<div class="col-md-12 col-checkbox">
		          			<input type="checkbox" class="iCheck" />
		                  	<span class="spn-first"><b>CN# </b></span>	
		                  	<span><a href='#' class='text-primary'>00006</a></span>
		          		</div>
		          	</div>

		          	<div class='row'>
		          		<div class="col-md-2 first-col" style="margin-left: 25px;">
		          			<button type="button" class="btn btn-default-background">
									<span class="btn-label"><span class="fa fa-times-circle-o text-danger"></span></span>
									<span class="btn-label-label">REJECTED</span>
							</button>
		          		</div>
						<div class='col-md-3 vertical-center-col'>
								<p>
									<span class='credit-note-bold credit-note-detail'>DOCUMENT DATE:</span><span class='font-gray credit-note-bold'> 01/01/2018</span>	
								</p>
								<p>
									<span class='credit-note-bold credit-note-detail'>CUSTOMER:</span>
									<span class='credit-note-detail font-gray'> NADZ Project Co.,Ltd</span>
								</p>
								
						</div>
						<div class="col-md-2 vertical-center-col">
							<p style="font-weight: bold;">Amount</p>
							<label class="font-gray credit-note-detail">100,000.00 THB</label>
						</div>
						<div class="col-md-4 last-col vertical-center-col-btn">
							<button type="button" class="btn btn-ngin btn-default" onclick="">
								<span class="btn-label">
									<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
								</span>Edit
							</button>
							<button type="button" class="btn btn-ngin btn-default">
								<span class="btn-label">
									<i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
								</span>Delete
							</button>
							<button type="button" class="btn btn-ngin btn-default">
								<span class="btn-label">
									<i class="fa fa-files-o" aria-hidden="true"></i>
								</span>Duplicate
							</button>
						</div>
		          	</div>

		          </div>
		        </div>
		        <div id="panel-body-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false">
		         <div class="panel-body text-black">
		             
					<div class="table-responsive col-md-8 col-md-offset-2">
	                  <table class="table ngin-table table-credit-note">
	                    <thead>
	                      <tr>
	                        <th>TAX INV #</th>
	                        <th>ORDERED QTY</th>
	                        <th>CREDITED QTY</th>
	                        <th>CREDIT NOTE AMOUNT/UNIT</th>
	                        <th>AMOUNT</th>
	                      </tr>
	                    </thead>
	                    <tbody>
	                    	@for($a =1; $a<6; $a++)
	                    	<tr>
                    			<td>0001</td>
		                    	<td>10</td>
		                        <td>1</td>
		                        <td>9.00</td>
		                        <td>9.00</td>
	                    	</tr>
	                    	@endfor
	                    </tbody>
	                  </table>
	                </div>

		        </div>
		      </div>
		    </div>


		 </section>
	
	    <div class="row page-showing-pagination" style="margin-top:4px;">
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
    </div>{{-- END x_content --}}



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