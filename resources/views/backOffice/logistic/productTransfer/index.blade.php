@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/logistic/product-transfer/index.css')}}"/>
@endsection

@section('module_name', 'PRODUCT TRANSFER')
@section('page_name', 'INDEX')

@section('body')
<!-- START MAIN PAGE -->
<div class="x_content">
    <!-- START SEARCH BAR -->
	<section class="section-header-index">
	<form class="form-inline form-header-index">
		<div class="row">
			<div class="col-xs-12">
					<div class="form-top-bar">
						<div class="form-group select-all">
							<input type="checkbox"  checked class="iCheck" id="selectall" name="selectall"> 
							<label for="selectall" class="iCheck-label">Select All</label>
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-default-background" onclick="window.location='{{ url("back-office/logistic/product-transfer/create") }}'">
							<span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
							</button>
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-default-background">
							<span class="btn-label"><span class="fa-approve-all"></span></span><span class="btn-label-label">Approve All</span>
							</button>
						</div>
						<div class="form-group search">
							<div class="icon-addon addon-sm">
								<input  type="text" placeholder="SEARCH" class="form-control search" id="SEARCH">
								<label for="search"  class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
							</div>
						</div>
						<div class="form-group">
							<button type="button" class="btn  btn-default-background">
								<span class="btn-label"><i class="fa fa-file-pdf-o pdf" aria-hidden="true"></i></span><span class="btn-label-label">PDF</span>
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
							<div class="btn btn-group ngin-dropdown-sort">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-sort-alpha-desc"></i> SORT
								</a>
								<ul class="dropdown-menu dropdown-menu-form">
									<li class="title">ORDER</li>
									<li><input id="radioAsc" name="rdoOrder" checked="checked" value="asc" type="radio"><label for="radioAsc">Ascending</label></li>
									<li><input id="radioDes" name="rdoOrder" value="des" type="radio"><label for="radioDes">Descending</label></li>
									<li role="separator" class="divider"></li>
									<li class="title">BY</li>
									<li><input id="radioId" name="rdoBy" checked="checked" value="id" type="radio"><label for="radioId">ID</label></li>
									<li><input id="radioDocDate" name="rdoBy" value="doc_date" type="radio"><label for="radioDocDate">Document Date</label></li>
									<li><input id="radioCusName" name="rdoBy" value="cus_name" type="radio"><label for="radioCusName">Customer Name</label></li>
									<li><input id="radioAmount" name="rdoBy" value="amount" type="radio"><label for="radioAmount">Amount</label></li>
									<li><input id="radioStatus" name="rdoBy" value="status" type="radio"><label for="radioStatus">Status</label></li>
								</ul>
							</div>
						</div>
					</div>
				</div>               
			</div>
		</form>
    </section>
    

    <div id="exTab2" class="">
        <ul class="nav nav-tabs">
			<li>
				<a href="#1" data-toggle="tab">
					<span>
						<i class="fa fa-circle-o-notch" aria-hidden="true"></i>
					</span>
					PENDING FOR APPROVAL
				</a>
			</li>
			<li>
				<a href="#2" data-toggle="tab">
					<span>
						<i class="fa fa-check-circle-o" aria-hidden="true"></i>
					</span>
					APPROVED
				</a>
			</li>
			<li class="active">
				<a href="#3" data-toggle="tab">
					<span>
						<i class="fa fa-hourglass-end" aria-hidden="true"></i>
					</span>
					PARTIAL
				</a>
			</li>
			<li>
				<a href="#4" data-toggle="tab">
					<span>
						<i class="fa fa-check" aria-hidden="true"></i>
					</span>
					COMPLETED
				</a>
			</li>
		</ul>

        <div class="tab-content scroll-2">


            <!--  tab  !-->
			<div class="tab-pane" id="1">
				<div class="panel-group " id="pending" role="tablist" aria-multiselectable="true">
					@for($b = 1; $b <= 7; $b++)
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading{{ 'B'.$b }}">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#pending" href="#collapse{{ 'B'.$b }}" aria-expanded="true" aria-controls="collapse{{ 'B'.$b }}">
									<table class="table inquiry-collape">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td colspan="4">
													<div class="iq-number">

                                                        <strong class="number">
                                                            Product Transfer#<span>{{ $b }}</span>
                                                        </strong>

                                                        <br/>
														<p>04/09/2017</p>
													</div>
													<div class="iq-status"><i class="iq-status-icon fa-approve-all"></i> APPROVE</div>
												</td>
												<td class="text-center">
													<label>WHAREHOUSE</label>
													<div>A &gt; B</div>
												</td>
												<td class="text-center">
													<label>TRANSFERED AMOUNT</label>
													<div>
														350
													</div>
												</td>
												<td class="text-center">
													<label>BACKLOG</label>
													<div class="ngin-red">
															(650)
													</div>
												</td>
											</tr>

											
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapse{{ 'B'.$b }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ 'B'.$b }}">
							<div class="panel-body scroll-2">
								
								<table class="table iq-detail-table ngin-table">
									<thead>
                                        <tr>
                                            <th class="text-left">BARCODE / PRODUCT CODE / ITEM NAME</th>
                                            <th>WAREHOSE A<br/>(TRANSFER AMOUNT)</th>
                                            <th>WAREHOUSE<br/>(ACCEPTED)</th>
                                            <th>RECEIVABLE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left">88888888 : PS4-G MIITO</td>
                                            <td class="text-center"><span>100</span></td>
                                            <td class="text-center"><span>90</span></td>
                                            <td class="text-center"><span class="ngin-red">(10)</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">99999999 : 3DS-G MJITOPIA</td>
                                            <td class="text-center"><span>500</span></td>
                                            <td class="text-center"><span>200</span></td>
                                            <td class="text-center"><span class="ngin-red">(300)</span></td>
                                        </tr> 
                                        <tr>
                                            <td class="text-left">333333333 : PS4-G MITO</td>
                                            <td class="text-center"><span>800</span></td>
                                            <td class="text-center"><span >600</span></td>
                                            <td class="text-center"><span class="ngin-red">(200)</span></td>
                                        </tr> 
                                        <tr>
                                            <td class="text-left">44444444 : 3DS-G MJITOPIA</td>
                                            <td class="text-center"><span>1000</span></td>
                                            <td class="text-center"><span>500</span></td>
                                            <td class="text-center"><span class="ngin-red">(500)</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">555555555 : PS4-G MITO</td>
                                            <td class="text-center"><span>900</span></td>
                                            <td class="text-center"><span>300</span></td>
                                            <td class="text-center"><span class="ngin-red">(600)</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">66666666 : 3DS-G MJITOPIA</td>
                                            <td class="text-center"><span>800</span></td>
                                            <td class="text-center"><span>500</span></td>
                                            <td class="text-center"><span class="ngin-red">(300)</span></td>
                                        </tr>
                                    </tbody>
								</table>

							</div>
						</div>
					</div>
					@endfor

				</div>
			</div>
            <!--  tab  !-->
            
            <!--  tab  !-->
			<div class="tab-pane" id="2">
				<div class="panel-group " id="approved" role="tablist" aria-multiselectable="true">
					@for($b = 1; $b <= 7; $b++)
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading{{ 'C'.$b }}">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#approved" href="#collapse{{ 'C'.$b }}" aria-expanded="true" aria-controls="collapse{{ 'C'.$b }}">
									<table class="table inquiry-collape">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td colspan="4">
													<div class="iq-number">
                                                        <strong class="number">
                                                            Product Transfer#<span>{{ $b }}</span>
                                                        </strong>
                                                        <br/>
														<p>04/09/2017</p>
													</div>
													<div class="iq-status waiting"><i class="iq-status-icon fa-exclamation"></i> WAITING FOR APPROVE</div>
												</td>
												<td class="text-center">
													<label>WHAREHOUSE</label>
													<div>A &gt; B</div>
												</td>
												<td class="text-center">
													<label>TRANSFERED AMOUNT</label>
													<div>
														350
													</div>
												</td>
												<td class="text-center">
													<label>BACKLOG</label>
													<div class="ngin-red">
															(650)
													</div>
												</td>
											</tr>

											
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapse{{ 'C'.$b }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ 'C'.$b }}">
							<div class="panel-body scroll-2">
								
								<table class="table iq-detail-table ngin-table">
									<thead>
                                        <tr>
                                            <th class="text-left">BARCODE / PRODUCT CODE / ITEM NAME</th>
                                            <th>WAREHOSE A<br/>(TRANSFER AMOUNT)</th>
                                            <th>WAREHOUSE<br/>(ACCEPTED)</th>
                                            <th>RECEIVABLE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left">88888888 : PS4-G MIITO</td>
                                            <td class="text-center"><span>100</span></td>
                                            <td class="text-center"><span>90</span></td>
                                            <td class="text-center"><span class="ngin-red">(10)</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">99999999 : 3DS-G MJITOPIA</td>
                                            <td class="text-center"><span>500</span></td>
                                            <td class="text-center"><span>200</span></td>
                                            <td class="text-center"><span class="ngin-red">(300)</span></td>
                                        </tr> 
                                        <tr>
                                            <td class="text-left">333333333 : PS4-G MITO</td>
                                            <td class="text-center"><span>800</span></td>
                                            <td class="text-center"><span >600</span></td>
                                            <td class="text-center"><span class="ngin-red">(200)</span></td>
                                        </tr> 
                                        <tr>
                                            <td class="text-left">44444444 : 3DS-G MJITOPIA</td>
                                            <td class="text-center"><span>1000</span></td>
                                            <td class="text-center"><span>500</span></td>
                                            <td class="text-center"><span class="ngin-red">(500)</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">555555555 : PS4-G MITO</td>
                                            <td class="text-center"><span>900</span></td>
                                            <td class="text-center"><span>300</span></td>
                                            <td class="text-center"><span class="ngin-red">(600)</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">66666666 : 3DS-G MJITOPIA</td>
                                            <td class="text-center"><span>800</span></td>
                                            <td class="text-center"><span>500</span></td>
                                            <td class="text-center"><span class="ngin-red">(300)</span></td>
                                        </tr>
                                    </tbody>
								</table>

							</div>
						</div>
					</div>
					@endfor

				</div>
			</div>
            <!--  tab  !-->
            
            <!--  tab  !-->
			<div class="tab-pane active" id="3">
				<div class="panel-group " id="partial" role="tablist" aria-multiselectable="true">
					@for($b = 1; $b <= 7; $b++)
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading{{ 'D'.$b }}">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#partial" href="#collapse{{ 'D'.$b }}" aria-expanded="true" aria-controls="collapse{{ 'D'.$b }}">
									<table class="table inquiry-collape">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td colspan="4">
													<div class="iq-number">
                                                        <strong class="number">
                                                            Product Transfer#<span>{{ $b }}</span>
														</strong>

                                                        <br/>
														<p>04/09/2017</p>
													</div>
													@if($b == 1)
													<div class="iq-status"><i class="iq-status-icon fa-approve-all"></i> APPROVE</div>
													@elseif($b == 2)
													<div class="iq-status waiting"><i class="iq-status-icon fa-exclamation"></i> WAITING FOR APPROVE</div>
													@elseif($b == 3)
													<div class="iq-status"><i class="iq-status-icon text-danger fa fa-times-circle-o"></i> REJECTED</div>
													@elseif($b == 4)
													<div class="iq-status"><i class="iq-status-icon fa-approve-all"></i> APPROVE</div>
													@else
													<div class="iq-status"><i class="iq-status-icon text-danger fa fa-times-circle-o"></i> REJECTED</div>
													@endif
												</td>
												<td class="text-center">
													<label>WHAREHOUSE</label>
													<div>A &gt; B</div>
												</td>
												<td class="text-center">
													<label>TRANSFERED AMOUNT</label>
													<div>
														350
													</div>
												</td>
												<td class="text-center">
													<label>BACKLOG</label>
													<div class="ngin-red">
															(650)
													</div>
												</td>
											</tr>

											
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapse{{ 'D'.$b }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ 'D'.$b }}">
							<div class="panel-body scroll-2">
								
								<table class="table iq-detail-table ngin-table">
									<thead>
                                        <tr>
                                            <th class="text-left">BARCODE / PRODUCT CODE / ITEM NAME</th>
                                            <th>WAREHOSE A<br/>(TRANSFER AMOUNT)</th>
                                            <th>WAREHOUSE<br/>(ACCEPTED)</th>
                                            <th>RECEIVABLE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left">88888888 : PS4-G MIITO</td>
                                            <td class="text-center"><span>100</span></td>
                                            <td class="text-center"><span>90</span></td>
                                            <td class="text-center"><span class="ngin-red">(10)</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">99999999 : 3DS-G MJITOPIA</td>
                                            <td class="text-center"><span>500</span></td>
                                            <td class="text-center"><span>200</span></td>
                                            <td class="text-center"><span class="ngin-red">(300)</span></td>
                                        </tr> 
                                        <tr>
                                            <td class="text-left">333333333 : PS4-G MITO</td>
                                            <td class="text-center"><span>800</span></td>
                                            <td class="text-center"><span >600</span></td>
                                            <td class="text-center"><span class="ngin-red">(200)</span></td>
                                        </tr> 
                                        <tr>
                                            <td class="text-left">44444444 : 3DS-G MJITOPIA</td>
                                            <td class="text-center"><span>1000</span></td>
                                            <td class="text-center"><span>500</span></td>
                                            <td class="text-center"><span class="ngin-red">(500)</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">555555555 : PS4-G MITO</td>
                                            <td class="text-center"><span>900</span></td>
                                            <td class="text-center"><span>300</span></td>
                                            <td class="text-center"><span class="ngin-red">(600)</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">66666666 : 3DS-G MJITOPIA</td>
                                            <td class="text-center"><span>800</span></td>
                                            <td class="text-center"><span>500</span></td>
                                            <td class="text-center"><span class="ngin-red">(300)</span></td>
                                        </tr>
                                    </tbody>
								</table>

							</div>
						</div>
					</div>
					@endfor

				</div>
			</div>
            <!--  tab  !-->

            <!--  tab  !-->
			<div class="tab-pane" id="4">
				<div class="panel-group " id="completed" role="tablist" aria-multiselectable="true">
					@for($b = 1; $b <= 7; $b++)
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading{{ 'E'.$b }}">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#completed" href="#collapse{{ 'E'.$b }}" aria-expanded="true" aria-controls="collapse{{ 'E'.$b }}">
									<table class="table inquiry-collape">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td colspan="4">
													<div class="iq-number">
                                                        <strong class="number">
                                                            Product Transfer#<span>{{ $b }}</span>
                                                        </strong>
                                                        
                                                        <br/>
														<p>04/09/2017</p>
													</div>
													<div class="iq-status"><i class="iq-status-icon text-danger fa fa-times-circle-o"></i> REJECTED</div>
												</td>
												<td class="text-center">
													<label>WHAREHOUSE</label>
													<div>A &gt; B</div>
												</td>
												<td class="text-center">
													<label>TRANSFERED AMOUNT</label>
													<div>
														350
													</div>
												</td>
												<td class="text-center">
													<label>BACKLOG</label>
													<div class="ngin-red">
															(650)
													</div>
												</td>
											</tr>

											
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapse{{ 'E'.$b }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ 'E'.$b }}">
							<div class="panel-body scroll-2">
								
								<table class="table iq-detail-table ngin-table">
									<thead>
                                        <tr>
                                            <th class="text-left">BARCODE / PRODUCT CODE / ITEM NAME</th>
                                            <th>WAREHOSE A<br/>(TRANSFER AMOUNT)</th>
                                            <th>WAREHOUSE<br/>(ACCEPTED)</th>
                                            <th>RECEIVABLE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left">88888888 : PS4-G MIITO</td>
                                            <td class="text-center"><span>100</span></td>
                                            <td class="text-center"><span>90</span></td>
                                            <td class="text-center"><span class="ngin-red">(10)</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">99999999 : 3DS-G MJITOPIA</td>
                                            <td class="text-center"><span>500</span></td>
                                            <td class="text-center"><span>200</span></td>
                                            <td class="text-center"><span class="ngin-red">(300)</span></td>
                                        </tr> 
                                        <tr>
                                            <td class="text-left">333333333 : PS4-G MITO</td>
                                            <td class="text-center"><span>800</span></td>
                                            <td class="text-center"><span >600</span></td>
                                            <td class="text-center"><span class="ngin-red">(200)</span></td>
                                        </tr> 
                                        <tr>
                                            <td class="text-left">44444444 : 3DS-G MJITOPIA</td>
                                            <td class="text-center"><span>1000</span></td>
                                            <td class="text-center"><span>500</span></td>
                                            <td class="text-center"><span class="ngin-red">(500)</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">555555555 : PS4-G MITO</td>
                                            <td class="text-center"><span>900</span></td>
                                            <td class="text-center"><span>300</span></td>
                                            <td class="text-center"><span class="ngin-red">(600)</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">66666666 : 3DS-G MJITOPIA</td>
                                            <td class="text-center"><span>800</span></td>
                                            <td class="text-center"><span>500</span></td>
                                            <td class="text-center"><span class="ngin-red">(300)</span></td>
                                        </tr>
                                    </tbody>
								</table>

							</div>
						</div>
					</div>
					@endfor

				</div>
			</div>
            <!--  tab  !-->

            

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

    </div>
</div>
@endsection

@section('top-right-sidebar')
<div class="x_title">
    <span class="left">Top Product เดือนที่แล้ว</span>
		<span class="right"></span>
</div>
<div class="x_content">
	<ul class="list-unstyled  scroll-view">
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>

			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/150727114252_prod_50.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
                <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
            </div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
		    <div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                    <small class="right">20/50</small>
                <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
            </div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/150727114252_prod_50.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
			    <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
		    	<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
	            <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
	        </div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>
		        <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
		    </div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
		    	<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
        		<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
		    </div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
			    <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
			</div>
		</li>
	</ul>
</div>
@endsection

@section('bottom-right-sidebar')
<div class="x_title">
    <span class="left">NEW RELEASES</span>
</div>
<div class="x_content">
	<ul class="list-unstyled  scroll-view">
    	<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
			</div>
		</li>
		<li class="media event">
		    <a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/150727114252_prod_50.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/150727114252_prod_50.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
			    <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
		    	<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
			    <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
		    	<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
			</div>
		</li>
        <li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
			</div>
		</li>
	</ul>
</div>
@endsection

@section('script')
<script src="{{ asset('js/back-office/logistic/product-transfer/index.js') }}"></script>
@endsection