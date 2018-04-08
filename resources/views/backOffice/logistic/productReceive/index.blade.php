@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/logistic/product-receive/index.css')}}"/>
@endsection

@section('module_name', 'PRODUCT RECEIVE (PR)')
@section('page_name', 'INDEX')

@section('body')
<!-- START MAIN PAGE -->
<div class="x_content">
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
                            <button type="button" class="btn btn-default-background" onclick="window.location='{{ url("back-office/logistic/product-receive/create") }}'">
                            <span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
                            </button>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-default-background">
                            <span class="btn-label"><span class="fa-approve-all"></span></span><span class="btn-label-label">Approve All</span>
                            </button>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn  btn-default-background">
                                <span class="btn-label"><i class="fa fa-file-text-o pdf" aria-hidden="true"></i></span><span class="btn-label-label">NEW PO FORM All</span>
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
			<li class="active">
                <a  href="#1" data-toggle="tab">
					<span>
				    	<i class="fa fa-circle-o-notch" aria-hidden="true"></i>
					</span>
                    TODAY
                </a>
            </li>
            <li>
                <a href="#2" data-toggle="tab">
					<span>
						<i class="fa fa-check-circle-o" aria-hidden="true"></i>
					</span>
					TOMORROW
                </a>
			</li>
            <li>
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
			<div class="tab-pane active" id="1">
				<div class="panel-group" id="today" role="tablist" aria-multiselectable="true">
					@for($i = 1; $i <= 7; $i++)
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading_today{{ $i }}">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#today" href="#collapse_today{{ $i }}" aria-expanded="true" aria-controls="collapse_today{{ $i }}">
									<table class="table inquiry-collape">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td>
													<div class="iq-number">
														<strong class="number">CRO # <span>{{ $i }}</span></strong>
														<div class="doc-date">
                                                            SHOPPING DATE<br/>08/02/2018
                                                        </div>
													</div>
													<label>Sample Company ... (Head Office)</label>
												</td>
												<td>
													<label>PO #</label>
													<div class="text-blue" style="font-size: 14px;">
														11111, 22222, 33333
													</div>
												</td>
												<td>
													<label>ORDERED</label>
													<div>
														0
													</div>
												</td>
												<td>
													<label>RECEIVE</label>
													<div>
														350
													</div>
												</td>
												<td>
													<label>BACKLOG</label>
													<div class="ngin-red">
                                                        (650)
													</div>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="6">
                                                    @if($i == 1 || $i == 3 || $i == 5)
                                                    
                                                    <button type="button" class="btn btn-ngin btn-default pull-right"> <span class="btn-label"><i class="fa fa-cube" aria-hidden="true"></i></span>Receive product</button>

                                                    @else

													<button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{ url(" back-office/inquiry/1/edit
														") }}'">
														<span class="btn-label">
															<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
														</span>Edit
													</button>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-files-o" aria-hidden="true"></i>
														</span>Duplicate
													</button>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-undo info" aria-hidden="true"></i>
														</span>Undo
													</button>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
														</span>Delete
                                                    </button>
                                                    
                                                    @endif


                                                    

												</td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapse_today{{ $i }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_today{{ $i }}">
							<div class="panel-body scroll-2">
                                <table class="table ngin-table ngin-table-noborder">
                                    <thead>
                                        <tr>
                                            <th>PR#</th>
                                            <th>DATE</th>
                                            <th class="col-xs-6 text-left">REMARKS</th>
                                            <th>QTY</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>      
                                                <td>1</td>
                                                <td>01/01/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>50</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>      
                                                <td>2</td>
                                                <td>01/01/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>10</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>      
                                                <td>3</td>
                                                <td>01/01/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>30</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>      
                                                <td>4</td>
                                                <td>01/01/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>40</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>      
                                                <td>5</td>
                                                <td>01/01/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>50</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>      
                                                <td>6</td>
                                                <td>01/02/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>50</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>      
                                                <td>7</td>
                                                <td>07/02/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>50</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
				<div class="panel-group" id="tomorrow" role="tablist" aria-multiselectable="true">
					@for($i = 1; $i <= 4; $i++)
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading_tomorrow{{ $i }}">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#tomorrow" href="#collapse_tomorrow{{ $i }}" aria-expanded="true" aria-controls="collapse_tomorrow{{ $i }}">
									<table class="table inquiry-collape">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td>
													<div class="iq-number">
														<strong class="number">CRO # <span>{{ $i }}</span></strong>
														<div class="doc-date">
                                                            SHOPPING DATE<br/>08/02/2018
                                                        </div>
													</div>
													<label>Sample Company ... (Head Office)</label>
												</td>
												<td>
													<label>PO #</label>
													<div class="text-blue" style="font-size: 14px;">
														11111, 22222, 33333
													</div>
												</td>
												<td>
													<label>ORDERED</label>
													<div>
														100
													</div>
												</td>
												<td>
													<label>RECEIVE</label>
													<div>
														350
													</div>
												</td>
												<td>
													<label>BACKLOG</label>
													<div class="ngin-red">
                                                        (650)
													</div>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="6">
                                                    @if($i == 1)
                                                    
                                                    <button type="button" class="btn btn-ngin btn-default pull-right"> <span class="btn-label"><i class="fa fa-cube" aria-hidden="true"></i></span>Receive product</button>

                                                    @else

													<button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{ url(" back-office/inquiry/1/edit
														") }}'">
														<span class="btn-label">
															<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
														</span>Edit
													</button>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-files-o" aria-hidden="true"></i>
														</span>Duplicate
													</button>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-undo info" aria-hidden="true"></i>
														</span>Undo
													</button>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
														</span>Delete
                                                    </button>
                                                    
                                                    @endif

												</td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
                        
                        
                        <div id="collapse_tomorrow{{ $i }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_tomorrow{{ $i }}">
							<div class="panel-body scroll-2">
                                <table class="table ngin-table ngin-table-noborder">
                                    <thead>
                                        <tr>
                                            <th>PR#</th>
                                            <th>DATE</th>
                                            <th class="col-xs-6 text-left">REMARKS</th>
                                            <th>QTY</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>      
                                                <td>1</td>
                                                <td>01/01/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>50</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>      
                                                <td>2</td>
                                                <td>01/01/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>10</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>      
                                                <td>3</td>
                                                <td>01/01/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>30</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>      
                                                <td>4</td>
                                                <td>01/01/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>40</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>      
                                                <td>5</td>
                                                <td>01/01/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>50</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>      
                                                <td>6</td>
                                                <td>01/02/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>50</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>      
                                                <td>7</td>
                                                <td>07/02/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>50</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </table>
								
							</div>
						</div>
					</div>
					@endfor

				</div>
			</div>
            <!--  tab  !--> 



            <!--  tab  !-->
			<div class="tab-pane" id="3">
				<div class="panel-group" id="patial" role="tablist" aria-multiselectable="true">
					@for($i = 1; $i <= 4; $i++)
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading_patial{{ $i }}">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#patial" href="#collapse_patial{{ $i }}" aria-expanded="true" aria-controls="collapse_patial{{ $i }}">
									<table class="table inquiry-collape">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td>
													<div class="iq-number">
														<strong class="number">CRO # <span>{{ $i }}</span></strong>
														<div class="doc-date">
                                                            SHOPPING DATE<br/>08/02/2018
                                                        </div>
													</div>
													<label>Sample Company ... (Head Office)</label>
												</td>
												<td>
													<label>PO #</label>
													<div class="text-blue" style="font-size: 14px;">
														11111, 22222, 33333
													</div>
												</td>
												<td>
													<label>ORDERED</label>
													<div>
														200
													</div>
												</td>
												<td>
													<label>RECEIVE</label>
													<div>
														350
													</div>
												</td>
												<td>
													<label>BACKLOG</label>
													<div class="ngin-red">
                                                        (650)
													</div>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="6">
                                                    @if($i == 1)
                                                    
                                                    <button type="button" class="btn btn-ngin btn-default pull-right"> <span class="btn-label"><i class="fa fa-cube" aria-hidden="true"></i></span>Receive product</button>

                                                    @else

													<button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{ url(" back-office/inquiry/1/edit
														") }}'">
														<span class="btn-label">
															<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
														</span>Edit
													</button>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-files-o" aria-hidden="true"></i>
														</span>Duplicate
													</button>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-undo info" aria-hidden="true"></i>
														</span>Undo
													</button>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
														</span>Delete
                                                    </button>
                                                    
                                                    @endif

												</td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
                        
                        
                        <div id="collapse_patial{{ $i }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_patial{{ $i }}">
							<div class="panel-body scroll-2">
                                <table class="table ngin-table ngin-table-noborder">
                                    <thead>
                                        <tr>
                                            <th>PR#</th>
                                            <th>DATE</th>
                                            <th class="col-xs-6 text-left">REMARKS</th>
                                            <th>QTY</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>      
                                                <td>1</td>
                                                <td>01/01/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>50</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>      
                                                <td>2</td>
                                                <td>01/01/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>10</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>      
                                                <td>3</td>
                                                <td>01/01/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>30</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>      
                                                <td>4</td>
                                                <td>01/01/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>40</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>      
                                                <td>5</td>
                                                <td>01/01/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>50</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>      
                                                <td>6</td>
                                                <td>01/02/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>50</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>      
                                                <td>7</td>
                                                <td>07/02/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>50</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
				<div class="panel-group" id="completed" role="tablist" aria-multiselectable="true">
					@for($i = 1; $i <= 4; $i++)
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading_completedl{{ $i }}">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#completed" href="#collapse_completed{{ $i }}" aria-expanded="true" aria-controls="collapse_completed{{ $i }}">
									<table class="table inquiry-collape">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td>
													<div class="iq-number">
														<strong class="number">CRO # <span>{{ $i }}</span></strong>
														<div class="doc-date">
                                                            SHOPPING DATE<br/>08/02/2018
                                                        </div>
													</div>
													<label>Sample Company ... (Head Office)</label>
												</td>
												<td>
													<label>PO #</label>
													<div class="text-blue" style="font-size: 14px;">
														11111, 22222, 33333
													</div>
												</td>
												<td>
													<label>ORDERED</label>
													<div>
														300
													</div>
												</td>
												<td>
													<label>RECEIVE</label>
													<div>
														350
													</div>
												</td>
												<td>
													<label>BACKLOG</label>
													<div class="ngin-red">
                                                        (650)
													</div>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="6">
                                                    @if($i == 1)
                                                    
                                                    <button type="button" class="btn btn-ngin btn-default pull-right"> <span class="btn-label"><i class="fa fa-cube" aria-hidden="true"></i></span>Receive product</button>

                                                    @else

													<button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{ url(" back-office/inquiry/1/edit
														") }}'">
														<span class="btn-label">
															<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
														</span>Edit
													</button>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-files-o" aria-hidden="true"></i>
														</span>Duplicate
													</button>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-undo info" aria-hidden="true"></i>
														</span>Undo
													</button>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
														</span>Delete
                                                    </button>
                                                    
                                                    @endif

												</td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
                        
                        
                        <div id="collapse_completed{{ $i }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_completed{{ $i }}">
							<div class="panel-body scroll-2">
                                <table class="table ngin-table ngin-table-noborder">
                                    <thead>
                                        <tr>
                                            <th>PR#</th>
                                            <th>DATE</th>
                                            <th class="col-xs-6 text-left">REMARKS</th>
                                            <th>QTY</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>      
                                                <td>1</td>
                                                <td>01/01/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>50</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>      
                                                <td>2</td>
                                                <td>01/01/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>10</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>      
                                                <td>3</td>
                                                <td>01/01/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>30</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>      
                                                <td>4</td>
                                                <td>01/01/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>40</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>      
                                                <td>5</td>
                                                <td>01/01/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>50</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>      
                                                <td>6</td>
                                                <td>01/02/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>50</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>      
                                                <td>7</td>
                                                <td>07/02/2018</td>
                                                <td class="text-left">Nostrud occaecat esse nostrud incididunt sit aliqua officia elit.</td>
                                                <td>50</td>
                                                <td class="td-action">
                                                    <button type="button" class="btn btn-ngin btn-default" >
                                                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                        <li class="page-number  active"><a href="#">1</a></li>
                        <li class="page-number"><a href="#">2</a></li>
                        <li class="page-number"><a href="#">3</a></li>
                        <li class="page-number"><a href="#">4</a></li>
                        <li class="page-number"><a href="#">5</a></li>
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
    <script src="{{ asset('js/back-office/logistic/product-receive/index.js') }}"></script>
@endsection