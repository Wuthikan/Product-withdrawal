@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
<link rel="stylesheet" type="text/css" href="{{asset('/css/back-office/customer-return-order/index.css')}}"/>
@endsection

@section('module_name', 'CUSTOMER RETURN ORDER')
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
									<button type="button" class="btn btn-default-background" onclick="window.location='{{ url("back-office/customer-return-order/create-from-tax-invoice") }}'">
										<span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW From Tax Inv.</span>
									</button>
								</div>
								<div class="form-group">
									<button type="button" class="btn btn-default-background" onclick="window.location='{{ url("back-office/customer-return-order/create-from-customer") }}'">
										<span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW From Cust.</span>
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

	<div class="scroll-2">
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			@for($i=1;$i<4;$i++)
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
					<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							<table>
								<tbody>
									<td class="blank">
										<div class="form-group">
											<input type="checkbox" class="iCheck">
										</div>
									</td>
									<td class="date">
										<p class="title">DD/MM/YYYY</p>
										<p class="value">01/01/2018</p>
									</td>
									<td class="tax-invoice">
										<p class="title">Tax Inv.#</p>
										<p class="value">0001<span>,</span>0002</p>
									</td>
									<td class="company">
										<p class="title">Company</p>
										<p class="value">Adiwit Co.,Ltd</p>
									</td>
									<td class="amount">
										<p class="title">Amount</p>
										<p class="value">(100,000)</p>
									</td>
									<td class="approve">
										@if($i==1)
										<p>
											<i class="fa fa-approve-all success" aria-hidden="true"></i>
										</p>
										<span>Approve</span>
										@elseif($i==3)
										<div class="iq-status waiting">
											<i class="iq-status-icon fa-exclamation"></i>
											<span>Wait for approve</span>
										</div>
										@else
										<p>
											<i class="fa fa-times-circle-o" aria-hidden="true" style="color: #CC0520;"></i>
										</p>
										<span>Rejected</span>
										@endif
									</td>
									<td class="actions">
										<button type="button" class="btn btn-ngin btn-default">
											<span class="btn-label">
												<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
											</span>Edit
										</button>
										<button type="button" class="btn btn-ngin btn-default">
											<span class="btn-label">
												<i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
											</span>Delete
										</button>
									</td>
								</tbody>
							</table>
						</a>
					</h4>
				</div>
			</div>
			@endfor
		</div>
	</div>

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
<script src="{{asset('js/back-office/customer-return-order.js')}}"></script>
@endsection
