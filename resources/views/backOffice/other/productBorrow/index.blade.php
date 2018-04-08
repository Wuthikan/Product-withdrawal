@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/other/product-borrow/index.css')}}"/>
    <link href="https://fonts.googleapis.com/css?family=Kanit:300,400" rel="stylesheet">
    <style type="text/css">
	    .top_nav .nav_menu .nav.toggle{
	    	width: 100% !important;
		}

		.btn-control ul{
			margin-top: -5px !important;
			margin-bottom: 0px !important;
		}
		
		.tab-content.scroll-2 {
				height: calc(100vh - 220px)!important;
		}

		.fa-exclamation:before{
			display: unset !important;
		}


	    @media(min-width: 992px){
	    	#product-panel{
	    		max-height: calc(100vh - 182px);
			}
			
		}
		
    </style>
@endsection

@section('module_name', 'PRODUCT BORROW')
@section('page_name', 'INDEX')

@section('body')
<div class="product-borrow" >
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
						<button type="button" class="btn btn-default-background" onclick="window.location='{{ url("back-office/other/product-borrow/create") }}'">
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
	
	    <div id="exTab2">    	
			<ul class="nav nav-tabs" id="ProductBorrowTabs" role="tablist">
				<li role="presentation" class="active">
					<a href="#1" id="1-tab" role="tab" data-toggle="tab" aria-controls="1" aria-expanded="true">
						<span>
							<i class="fa fa-circle-o-notch" aria-hidden="true"></i>
						</span>
						PENDING FOR APPROVAL
					</a>
				</li>
				<li role="presentation">
					<a href="#2" id="2-tab" role="tab" data-toggle="tab" aria-controls="2" aria-expanded="true">
						<span>
							<i class="fa fa-check-circle-o" aria-hidden="true"></i>
						</span>
						APPROVED
					</a>
				</li>
				<li role="presentation">
					<a href="#3" id="3-tab" role="tab" data-toggle="tab" aria-controls="3" aria-expanded="true">
						<span>
							<i class="fa fa-hourglass-end" aria-hidden="true"></i>
						</span>
						TO BE RETURNED
					</a>
				</li>
				<li role="presentation">
					<a href="#4" id="4-tab" role="tab" data-toggle="tab" aria-controls="4" aria-expanded="true">
						<span>
							<i class="fa fa-check" aria-hidden="true"></i>
						</span>
						COMPLETED
						</a>
				</li>
			</ul>
			<div class="tab-content scroll-2">
				<div class="tab-pane fade active in" role="tabpanel" id="1" aria-labelledby="1-tab">
					<div class="panel-group item" id="backlog" role="tablist" aria-multiselectable="true">
						@for($i=0; $i<5; $i++)
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading-{{ $i }}">
								<div class="panel-title">
									<div>
										<div class="table ">
											<div>
												<div class="row" role="button" data-toggle="collapse" data-parent="#backlog" href="#collapse-{{ $i }}" aria-expanded="true" aria-controls="collapse-{{ $i }}">
													<div class="col-sm-1 checkbox checkbox-wrapper" >
														<input type="checkbox" class="iCheck" />
													</div>
													<div class="col-sm-3">
														<p class="inline blueColor"><strong>PB#<span>99999</span></strong></p>
														<div class="inline">
															<span class="iq-status"><i class="iq-status-icon fa-exclamation"></i><span style="width: 100px; font-size: 13px; display: table-cell;">WAITING FOR APPROVE</span></span>	
														</div>
														<div  class="text-xbig">
															04/09/2017
														</div>
													</div>
													<div class="col-sm-4">
														<div class="text-xs"><strong>EVENT NAME</strong></div>
														<div class="text-xbig">Lorem ipsum dolor sit,...</div>
													</div>
													<div class="col-sm-1">
														<div class="text-xs">
															<strong>LIST BY</strong>
														</div>
														<div  class="text-xbig">Nof</div>
													</div>
													<div class="col-sm-2 text-center">
														<div class="text-xs two-line">
															<div><b>BORROW</b></div>
															<div style="margin-top:-4px">RECEIVE/TOTAL</div>
														</div>
														<div class="text-xsmall"><span class="text-xbig2">8</span>/12</div>
													</div>
													<div class="col-sm-1 text-center">
														<div class="text-xs"><strong>RETURN</strong></div>
														<div class="text-xbig2 text-green">6</div>
													</div>
												</div>

												<div class="row btn-control">
													<div class="col-xs-5 col-xs-offset-7">
														<ul class="list list-inline">
															<li>
																<a type="button" class="btn btn-ngin btn-default" href="{{ url("back-office/other/product-borrow").'/'.$i.'/edit' }}">
																	<span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
																</a>
															</li>
															<li>
																<button type="button" class="btn btn-ngin btn-default" role="button" data-toggle="collapse" data-parent="#backlog" href="#collapse-{{ $i }}" aria-expanded="true" aria-controls="collapse-{{ $i }}">
																	<span class="btn-label"><i class="fa fa-undo info" aria-hidden="true"></i></span>Undo
															</button>
															</li>
															<li>
																<button type="button" class="btn btn-ngin btn-default" role="button" data-toggle="collapse" data-parent="#backlog" href="#collapse-{{ $i }}" aria-expanded="true" aria-controls="collapse-{{ $i }}">
																	<span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
																</button>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="collapse-{{ $i }}" class="panel-collapse collapse {{ $i == 0? 'in' : '' }}" role="tabpanel" aria-labelledby="heading-{{ $i }}">
								<div class="panel-body scroll-2">
									<div class="table-wrapper table-half ">
										<div class="table-header">
											<strong>..BORROW..</strong>
										</div>
										<table class="table ngin-table">
											<thead>
												<tr>
													<th>PRODUCT NAME</th>
													<th>AMOUNT</th>
													<th>DATE</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-wrapper table-half ">
										<div class="table-header">
											<strong>..RETURN..</strong>
										</div>
										<table class="table ngin-table">
										<thead>
											<tr>
												<th>PRODUCT NAME</th>
												<th>AMOUNT</th>
												<th>DATE</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
										</tbody>
										</table>
									</div>                	
								</div>
							</div>
						</div>
						@endfor
					</div>
				</div>
				<div class="tab-pane fade" role="tabpanel" id="2" aria-labelledby="2-tab">
					<div class="panel-group item" id="backlog2" role="tablist" aria-multiselectable="true">
						@for($i=0; $i<2; $i++)
						<div class="panel panel-default">
							<div class="panel-heading" role="tab2" id="heading2-{{ $i }}">
								<div class="panel-title">
									<div>
										<div class="table ">
											<div>
												<div class="row" role="button" data-toggle="collapse" data-parent="#backlog2" href="#collapse2-{{ $i }}" aria-expanded="true" aria-controls="collapse2-{{ $i }}">
													<div class="col-sm-1 checkbox checkbox-wrapper" >
														<input type="checkbox" class="iCheck" />
													</div>
													<div class="col-sm-3">
														<p class="inline blueColor"><strong>PB#<span>99999</span></strong></p>
														<div class="inline">
															<span class="iq-status"><i class="iq-status-icon fa-approve-all"></i>APPROVE</span>
														</div>
														<div  class="text-xbig">
															04/09/2017
														</div>
													</div>
													<div class="col-sm-4">
														<div class="text-xs"><strong>EVENT NAME</strong></div>
														<div class="text-xbig">Lorem ipsum dolor sit,...</div>
													</div>
													<div class="col-sm-1">
														<div class="text-xs">
															<strong>LIST BY</strong>
														</div>
														<div  class="text-xbig">Nof</div>
													</div>
													<div class="col-sm-2 text-center">
														<div class="text-xs two-line">
															<div><b>BORROW</b></div>
															<div style="margin-top:-4px">RECEIVE/TOTAL</div>
														</div>
														<div class="text-xsmall"><span class="text-xbig2">8</span>/12</div>
													</div>
													<div class="col-sm-1 text-center">
														<div class="text-xs"><strong>RETURN</strong></div>
														<div class="text-xbig2 text-green">6</div>
													</div>
												</div>

												<div class="row btn-control">
													<div class="col-xs-5 col-xs-offset-7">
														<ul class="list list-inline">
															<li>
																<a type="button" class="btn btn-ngin btn-default" href="{{ url("back-office/other/product-borrow").'/'.$i.'/edit' }}">
																	<span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
																</a>
															</li>
															<li>
																<button type="button" class="btn btn-ngin btn-default" role="button" data-toggle="collapse2" data-parent="#backlog2" href="#collapse2-{{ $i }}" aria-expanded="true" aria-controls="collapse2-{{ $i }}">
																	<span class="btn-label"><i class="fa fa-undo info" aria-hidden="true"></i></span>Undo
															</button>
															</li>
															<li>
																<button type="button" class="btn btn-ngin btn-default" role="button" data-toggle="collapse2" data-parent="#backlog2" href="#collapse2-{{ $i }}" aria-expanded="true" aria-controls="collapse2-{{ $i }}">
																	<span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
																</button>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="collapse2-{{ $i }}" class="panel-collapse collapse {{ $i == 0? 'in' : '' }}" role="tabpanel2" aria-labelledby="heading2-{{ $i }}">
								<div class="panel-body scroll-2">
									<div class="table-wrapper table-half ">
										<div class="table-header">
											<strong>..BORROW..</strong>
										</div>
										<table class="table ngin-table">
											<thead>
												<tr>
													<th>PRODUCT NAME</th>
													<th>AMOUNT</th>
													<th>DATE</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-wrapper table-half ">
										<div class="table-header">
											<strong>..RETURN..</strong>
										</div>
										<table class="table ngin-table">
										<thead>
											<tr>
												<th>PRODUCT NAME</th>
												<th>AMOUNT</th>
												<th>DATE</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
										</tbody>
										</table>
									</div>                	
								</div>
							</div>
						</div>
						@endfor
					</div>
				</div>
				<div class="tab-pane fade" role="tabpanel" id="3" aria-labelledby="3-tab">
					<div class="panel-group item" id="backlog3" role="tablist" aria-multiselectable="true">
						@for($i=0; $i<3; $i++)
						<div class="panel panel-default">
							<div class="panel-heading" role="tab3" id="heading3-{{ $i }}">
								<div class="panel-title">
									<div>
										<div class="table ">
											<div>
												<div class="row" role="button" data-toggle="collapse" data-parent="#backlog3" href="#collapse3-{{ $i }}" aria-expanded="true" aria-controls="collapse3-{{ $i }}">
													<div class="col-sm-1 checkbox checkbox-wrapper" >
														<input type="checkbox" class="iCheck" />
													</div>
													<div class="col-sm-3">
														<p class="inline blueColor"><strong>PB#<span>99999</span></strong></p>
														<div class="inline">
															<span class="iq-status"><i class="iq-status-icon text-danger fa fa-times-circle-o"></i>REJECTED</span>
														</div>
														<div  class="text-xbig">
															04/09/2017
														</div>
													</div>
													<div class="col-sm-4">
														<div class="text-xs"><strong>EVENT NAME</strong></div>
														<div class="text-xbig">Lorem ipsum dolor sit,...</div>
													</div>
													<div class="col-sm-1">
														<div class="text-xs">
															<strong>LIST BY</strong>
														</div>
														<div  class="text-xbig">Nof</div>
													</div>
													<div class="col-sm-2 text-center">
														<div class="text-xs two-line">
															<div><b>BORROW</b></div>
															<div style="margin-top:-4px">RECEIVE/TOTAL</div>
														</div>
														<div class="text-xsmall"><span class="text-xbig2">8</span>/12</div>
													</div>
													<div class="col-sm-1 text-center">
														<div class="text-xs"><strong>RETURN</strong></div>
														<div class="text-xbig2 text-green">6</div>
													</div>
												</div>

												<div class="row btn-control">
													<div class="col-xs-5 col-xs-offset-7">
														<ul class="list list-inline">
															<li>
																<a type="button" class="btn btn-ngin btn-default" href="{{ url("back-office/other/product-borrow").'/'.$i.'/edit' }}">
																	<span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
																</a>
															</li>
															<li>
																<button type="button" class="btn btn-ngin btn-default" role="button" data-toggle="collapse3" data-parent="#backlog3" href="#collapse3-{{ $i }}" aria-expanded="true" aria-controls="collapse3-{{ $i }}">
																	<span class="btn-label"><i class="fa fa-undo info" aria-hidden="true"></i></span>Undo
															</button>
															</li>
															<li>
																<button type="button" class="btn btn-ngin btn-default" role="button" data-toggle="collapse3" data-parent="#backlog3" href="#collapse3-{{ $i }}" aria-expanded="true" aria-controls="collapse3-{{ $i }}">
																	<span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
																</button>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="collapse3-{{ $i }}" class="panel-collapse collapse {{ $i == 0? 'in' : '' }}" role="tabpanel3" aria-labelledby="heading3-{{ $i }}">
								<div class="panel-body scroll-2">
									<div class="table-wrapper table-half ">
										<div class="table-header">
											<strong>..BORROW..</strong>
										</div>
										<table class="table ngin-table">
											<thead>
												<tr>
													<th>PRODUCT NAME</th>
													<th>AMOUNT</th>
													<th>DATE</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-wrapper table-half ">
										<div class="table-header">
											<strong>..RETURN..</strong>
										</div>
										<table class="table ngin-table">
										<thead>
											<tr>
												<th>PRODUCT NAME</th>
												<th>AMOUNT</th>
												<th>DATE</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
										</tbody>
										</table>
									</div>                	
								</div>
							</div>
						</div>
						@endfor
					</div>
				</div>
				<div class="tab-pane fade" role="tabpanel" id="4" aria-labelledby="4-tab">
					<div class="panel-group item" id="backlog4" role="tablist" aria-multiselectable="true">
						@for($i=0; $i<4; $i++)
						<div class="panel panel-default">
							<div class="panel-heading" role="tab4" id="heading4-{{ $i }}">
								<div class="panel-title">
									<div>
										<div class="table ">
											<div>
												<div class="row" role="button" data-toggle="collapse" data-parent="#backlog4" href="#collapse4-{{ $i }}" aria-expanded="true" aria-controls="collapse4-{{ $i }}">
													<div class="col-sm-1 checkbox checkbox-wrapper" >
														<input type="checkbox" class="iCheck" />
													</div>
													<div class="col-sm-3">
														<p class="inline blueColor"><strong>PB#<span>99999</span></strong></p>
														<div class="inline">
														<span class="iq-status"><i class="iq-status-icon fa-approve-all"></i>APPROVE</span>
														</div>
														<div  class="text-xbig">
															04/09/2017
														</div>
													</div>
													<div class="col-sm-4">
														<div class="text-xs"><strong>EVENT NAME</strong></div>
														<div class="text-xbig">Lorem ipsum dolor sit,...</div>
													</div>
													<div class="col-sm-1">
														<div class="text-xs">
															<strong>LIST BY</strong>
														</div>
														<div  class="text-xbig">Nof</div>
													</div>
													<div class="col-sm-2 text-center">
														<div class="text-xs two-line">
															<div><b>BORROW</b></div>
															<div style="margin-top:-4px">RECEIVE/TOTAL</div>
														</div>
														<div class="text-xsmall"><span class="text-xbig2">8</span>/12</div>
													</div>
													<div class="col-sm-1 text-center">
														<div class="text-xs"><strong>RETURN</strong></div>
														<div class="text-xbig2 text-green">6</div>
													</div>
												</div>

												<div class="row btn-control">
													<div class="col-xs-5 col-xs-offset-7">
														<ul class="list list-inline">
															<li>
																<a type="button" class="btn btn-ngin btn-default" href="{{ url("back-office/other/product-borrow").'/'.$i.'/edit' }}">
																	<span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
																</a>
															</li>
															<li>
																<button type="button" class="btn btn-ngin btn-default" role="button" data-toggle="collapse4" data-parent="#backlog4" href="#collapse4-{{ $i }}" aria-expanded="true" aria-controls="collapse4-{{ $i }}">
																	<span class="btn-label"><i class="fa fa-undo info" aria-hidden="true"></i></span>Undo
															</button>
															</li>
															<li>
																<button type="button" class="btn btn-ngin btn-default" role="button" data-toggle="collapse4" data-parent="#backlog4" href="#collapse4-{{ $i }}" aria-expanded="true" aria-controls="collapse4-{{ $i }}">
																	<span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
																</button>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="collapse4-{{ $i }}" class="panel-collapse collapse {{ $i == 0? 'in' : '' }}" role="tabpanel4" aria-labelledby="heading4-{{ $i }}">
								<div class="panel-body scroll-2">
									<div class="table-wrapper table-half ">
										<div class="table-header">
											<strong>..BORROW..</strong>
										</div>
										<table class="table ngin-table">
											<thead>
												<tr>
													<th>PRODUCT NAME</th>
													<th>AMOUNT</th>
													<th>DATE</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
												<tr>
													<td>Lorem ipsum (Unit)</td>
													<td>2</td>
													<td>02/09/2017</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="table-wrapper table-half ">
										<div class="table-header">
											<strong>..RETURN..</strong>
										</div>
										<table class="table ngin-table">
										<thead>
											<tr>
												<th>PRODUCT NAME</th>
												<th>AMOUNT</th>
												<th>DATE</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
											<tr>
												<td>Lorem ipsum (Unit)</td>
												<td>2</td>
												<td>02/09/2017</td>
											</tr>
										</tbody>
										</table>
									</div>                	
								</div>
							</div>
						</div>
						@endfor
					</div>
				</div>
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