@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')
@section('head')
<link rel="stylesheet" type="text/css" href="{{asset('/css/back-office/accounting/expenditure-requisition/index.css')}}"/>
@endsection

@section('module_name', 'EXPENSE REQUISITION ADJUSTMENT')
@section('page_name', 'INDEX')

@section('body')
<div id="inventory" class="x_content">
<!-- header -->

    <section class="section-header-index">
        <form class="form-inline form-header-index">
            
            <div class="row" style="margin:0">
                <div>
                </div>
                <table style="width:100%">
                <tr style="white-space: nowrap;">
                    <td class="col-1" style="min-width: inherit;width: 145px;">
                        <div class="col-1-content" >
                            <div class="form-group select-all">
                                <input type="checkbox"  checked class="iCheck" id="selectall" name="selectall" > 
                                <label for="selectall" class="iCheck-label" >Select All</label>
                            </div>
                            <div class="form-group" style="display: flex;"> 
                                <button type="button" class="btn btn-default-background" onclick="window.location='{{ route("backOffice.accounting.expenditure-requisition.create") }}'">
                                    <span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
                                </button>
                            </div>
                            
                        </div>
                    </td>
                    <td class="col-1" style="width: inherit;width: auto;">
                        <div class="" >
                            <div class="form-group form-fixed-width" >
                                <div class="icon-addon addon-sm">
                                    <input  type="text" placeholder="SEARCH" class="form-control search" id="SEARCH" >
                                    <label for="search"  class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="col-3" style="min-width: inherit;width: 277px;">
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
                            <div class="form-group" style="margin-right:5px">
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
<!-- end header -->

	<div id="exTab2" class="section-margin">
		<ul class="nav nav-tabs" style="display:block">
			<li ><a href="#1" data-toggle="tab"><span><i class="fa fa-circle-o-notch" aria-hidden="true"></i></span> PENDING FOR PAYMENT</a></li>
			<li><a href="#2" data-toggle="tab"><span><i class="fa fa-check-circle-o" aria-hidden="true" ></i></span> APPROVED</a></li>
			<li class="active"><a href="#3" data-toggle="tab"><span><i class="fa fa-check" aria-hidden="true" ></i></span> COMPLETED</a></li>
		</ul>
		<div class="tab-content scroll-2">
			<div class="tab-pane" id="1">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						@for ($i=0; $i<7; $i++)
						<div class="panel-heading">
								<table class="table expense">
									<tbody>
										<tr>
											<td class="text-center" style="width:40px;">
												<input type="checkbox"  checked class="iCheck" id="selectall" name="selectall" > 
											</td>
											<td style="width:95px;">
												<div class="row no-margin d-flex align-items-center">
													<div class="col-xs-12 no-padding">
														<b class="expense">DD/MM/YYYY </b> 
														<P class="p-stock">02/01/2018</P>
													</div>
													
												</div>
											</td>
											
											<td style="width:16%;">
												<div class="row no-margin d-flex align-items-center">
													<div class="col-xs-12 no-padding">
														<b class="expense">COMPANY </b> 
														<P class="p-stock">Nmoz Co, Ltd</P>
													</div>
													
												</div>
											</td>
											<td style="width:110px;">
												<div class="row no-margin d-flex align-items-center">
													<div class="col-xs-12 no-padding">
														<b class="expense">EVENT </b> 
														<P class="p-stock">Lorem lpsum</P>
													</div>
													
												</div>
											</td>
											<td style="width:100px;">
												<div class="row no-margin d-flex align-items-center">
													<div class="col-xs-12 no-padding">
														<b class="expense">AMOUNT </b> 
														<P class="p-stock">100,000 THB</P>
													</div>
													
												</div>
											</td>
											<td style="width:115px;">
												@if($i==5)
												<div class="icon-ap">
													<div class="icon1 wait">
													<!-- <i class="fa fa-exclamation-triangle color-wait"></i> -->
													</div>
													<div class="wait text">WAITING FOR APPROVE</div>
												</div>
												@elseif($i==6)
													<div class="icon-ap">
														<div class="icon">
															<i class="fa fa-times-circle-o danger"></i>
														</div>
														<div class="text">REJECTED</div>
													</div>
												@else
												<div class="icon-ap">
													<div class="icon">
													<span class="fa-approve-all te"></span>
													</div>
													<div class="text">APPROVE</div>
												</div>
												@endif
											</td>
											<td style="width:155px;">
												<div class="row">
													<div class="col-xs-12 no-wrap text-center">
														<button type="button" class="btn btn-ngin btn-default">
															<span class="btn-label" style="left:-13px"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
															Adjust
														</button>
														<button type="button" class="btn btn-ngin btn-default">
															<span class="btn-label" style="left : -8px;"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
															Payment
														</button>
													</div>
												</div>
												<div class="row" style="margin-top:10px">
													<div class="col-xs-12 text-center">
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label" style="left:-15px"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
														Delete
													</button>
												</div>
											</div>
											</td>
										</tr>
									</tbody>
								</table>
						</div>
						@endfor
						
					</div>
				</div>
			</div>
			<div class="tab-pane" id="2">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						@for ($i=0; $i<7; $i++)
						<div class="panel-heading">
								<table class="table expense">
									<tbody>
										<tr>
											<td class="text-center" style="width:40px;">
												<input type="checkbox"  checked class="iCheck" id="selectall" name="selectall" > 
											</td>
											<td style="width:95px;">
												<div class="row no-margin d-flex align-items-center">
													<div class="col-xs-12 no-padding">
														<b class="expense">DD/MM/YYYY </b> 
														<P class="p-stock">02/01/2018</P>
													</div>
													
												</div>
											</td>
											
											<td style="width:16%;">
												<div class="row no-margin d-flex align-items-center">
													<div class="col-xs-12 no-padding">
														<b class="expense">COMPANY </b> 
														<P class="p-stock">Nmoz Co, Ltd</P>
													</div>
													
												</div>
											</td>
											<td style="width:110px;">
												<div class="row no-margin d-flex align-items-center">
													<div class="col-xs-12 no-padding">
														<b class="expense">EVENT </b> 
														<P class="p-stock">Lorem lpsum</P>
													</div>
													
												</div>
											</td>
											<td style="width:100px;">
												<div class="row no-margin d-flex align-items-center">
													<div class="col-xs-12 no-padding">
														<b class="expense">AMOUNT </b> 
														<P class="p-stock">100,000 THB</P>
													</div>
													
												</div>
											</td>
											<td style="width:115px;">
												@if($i==5)
												<div class="icon-ap">
													<div class="icon1 wait">
													<!-- <i class="fa fa-exclamation-triangle color-wait"></i> -->
													</div>
													<div class="wait text">WAITING FOR APPROVE</div>
												</div>
												@elseif($i==6)
													<div class="icon-ap">
														<div class="icon">
															<i class="fa fa-times-circle-o danger"></i>
														</div>
														<div class="text">REJECTED</div>
													</div>
												@else
												<div class="icon-ap">
													<div class="icon">
													<span class="fa-approve-all te"></span>
													</div>
													<div class="text">APPROVE</div>
												</div>
												@endif
											</td>
											<td style="width:155px;">
												<div class="row">
													<div class="col-xs-12 no-wrap text-center">
														<button type="button" class="btn btn-ngin btn-default">
															<span class="btn-label" style="left:-13px"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
															Adjust
														</button>
														<button type="button" class="btn btn-ngin btn-default">
															<span class="btn-label" style="left : -8px;"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
															Payment
														</button>
													</div>
												</div>
												<div class="row" style="margin-top:10px">
													<div class="col-xs-12 text-center">
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label" style="left:-15px"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
														Delete
													</button>
												</div>
											</div>
											</td>
										</tr>
									</tbody>
								</table>
						</div>
						@endfor
						
					</div>
				</div>
			</div>
			<div class="tab-pane active" id="3">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						@for ($i=0; $i<7; $i++)
						<div class="panel-heading">
								<table class="table expense">
									<tbody>
										<tr>
											<td class="text-center" style="width:40px;">
												<input type="checkbox"  checked class="iCheck" id="selectall" name="selectall" > 
											</td>
											<td style="width:95px;">
												<div class="row no-margin d-flex align-items-center">
													<div class="col-xs-12 no-padding">
														<b class="expense">DD/MM/YYYY </b> 
														<P class="p-stock">02/01/2018</P>
													</div>
													
												</div>
											</td>
											
											<td style="width:16%;">
												<div class="row no-margin d-flex align-items-center">
													<div class="col-xs-12 no-padding">
														<b class="expense">COMPANY </b> 
														<P class="p-stock">Nmoz Co, Ltd</P>
													</div>
													
												</div>
											</td>
											<td style="width:110px;">
												<div class="row no-margin d-flex align-items-center">
													<div class="col-xs-12 no-padding">
														<b class="expense">EVENT </b> 
														<P class="p-stock">Lorem lpsum</P>
													</div>
													
												</div>
											</td>
											<td style="width:100px;">
												<div class="row no-margin d-flex align-items-center">
													<div class="col-xs-12 no-padding">
														<b class="expense">AMOUNT </b> 
														<P class="p-stock">100,000 THB</P>
													</div>
													
												</div>
											</td>
											<td style="width:115px;">
												@if($i==5)
												<div class="icon-ap">
													<div class="icon1 wait">
													<!-- <i class="fa fa-exclamation-triangle color-wait"></i> -->
													</div>
													<div class="wait text">WAITING FOR APPROVE</div>
												</div>
												@elseif($i==6)
													<div class="icon-ap">
														<div class="icon">
															<i class="fa fa-times-circle-o danger"></i>
														</div>
														<div class="text">REJECTED</div>
													</div>
												@else
												<div class="icon-ap">
													<div class="icon">
													<span class="fa-approve-all te"></span>
													</div>
													<div class="text">APPROVE</div>
												</div>
												@endif
											</td>
											<td style="width:155px;">
												<div class="row">
													<div class="col-xs-12 no-wrap text-center">
														<button type="button" class="btn btn-ngin btn-default">
															<span class="btn-label" style="left:-13px"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
															Adjust
														</button>
														<button type="button" class="btn btn-ngin btn-default">
															<span class="btn-label" style="left : -8px;"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
															Payment
														</button>
													</div>
												</div>
												<div class="row" style="margin-top:10px">
													<div class="col-xs-12 text-center">
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label" style="left:-15px"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
														Delete
													</button>
												</div>
											</div>
											</td>
										</tr>
									</tbody>
								</table>
						</div>
						@endfor
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Pagination -->
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
	<!-- End Pagination -->
</div>
@endsection

@section('top-right-sidebar')
<div class="x_title"><span class="left">Top Product เดือนที่แล้ว</span><span class="right"></span></div>
<div class="x_content">
	<ul class="list-unstyled scroll-view">
	@for ($i=0 ; $i<5; $i++)
		<li class="media event">
			<a class="pull-left border-aero"><img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded"></a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>
				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero"><img src="http://www.ngin.co.th/data/product/150727114252_prod_50.jpg" alt="" class="img-rounded"></a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>
				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
			</div>
		</li>
	@endfor
	</ul>
</div>
@endsection

@section('bottom-right-sidebar')
<div class="x_title"><span class="left">NEW RELEASES</span></div>
<div class="x_content">
	<ul class="list-unstyled scroll-view">
	@for ($i=0 ; $i<5; $i++)
		<li class="media event">
			<a class="pull-left border-aero"><img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded"></a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>
				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero"><img src="http://www.ngin.co.th/data/product/150727114252_prod_50.jpg" alt="" class="img-rounded"></a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>
				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
			</div>
		</li>
	@endfor
	</ul>
</div>
@endsection

@section('script')
	<script src="{{asset('js/back-office/home/index.js')}}"></script>
@endsection