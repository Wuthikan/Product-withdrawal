@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/inquiry/index.css')}}" />
@endsection

@section('module_name', 'INQUIRY')
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
                  <button type="button" class="btn btn-default-background" onclick="window.location='{{ url("back-office/inquiry/create") }}'">
                    <span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
                  </button>
                </div>
                <div class="form-group button-2">
                  <button type="button"    class="btn btn-default-background">
                    <span class="btn-label"><span class="fa-approve-all"></span></span><span class="btn-label-label">Approve All</span>
                  </button>
				</div>
				<div class="form-group">
					<button type="button" class="btn  btn-default-background">
						<span class="btn-label"><i class="fa fa-file-pdf-o pdf" aria-hidden="true"></i></i></span><span class="btn-label-label">NEW PO FROM ALL</span>
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
				<div class="panel-group " id="backlog" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
									<table class="table ">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td class="iq-colhead">
													<b><strong>IQ#<span class="iq-number">1</span></strong> <span class="iq-status"><i class="iq-status-icon fa-approve-all"></i> APPROVE</span></b>
													<p style="font-size: 18px">04/09/2017</p>
												</td>
												<td>
													<b>SUPPLIER :</b> Samples Co,Ltd
													<p class="value"
														<b>BRANCH :</b>Headquarters</p>
												</td>
												<td class="tr-data-small">
													<b>ORDERED</b>
													<P>1000</P>
												</td>
												<td class="tr-data-small">
													<b>RECEIVED </b>
													<P>350</P>
												</td>
												<td class="tr-data-small">
													<b>BACKLOG </b>
													<P class="ngin-red">(650)</P>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="4">
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
												</td>

												<td>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-plus" aria-hidden="true"></i>
														</span>New PO
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapseOne1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body scroll-2">
								<table class="table ngin-table">
									<thead>
										<tr>
											<th>ORDERED</th>
											<th>RECEIVED</th>
											<th>RECEIVED DATE</th>
											<th>PR</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>200</td>
											<td>50</td>
											<td>02/09/2017</td>
											<td class="td-pr">1111</td>
										</tr>
										<tr>
											<td></td>
											<td>50</td>
											<td>01/09/2017</td>
											<td class="td-pr">2222</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>29/08/2017</td>
											<td class="td-pr">3333</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>28/08/2017</td>
											<td class="td-pr">4444</td>
										</tr>
										<tr>
											<td>100</td>
											<td>100</td>
											<td>27/08/2017</td>
											<td class="td-pr">5555</td>
										</tr>
										<tr class="border-bottom">
											<td>50</td>
											<td>0</td>
											<td>26/08/2017</td>
											<td class="td-pr">6666</td>
										</tr>
										<tr>
											<td class="text-center td-chart">
												<div class="char-total chart" data-percent="30" data-current="300" data-total="1000">
													<span class="chart-total-display"></span>
												</div>
												<div class="chart-label"><strong>TOTAL</strong></div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="70" data-current="120" data-total="200">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">1212</span></div>
														<strong>01/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="100" data-current="100" data-total="100">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">2323</span></div>
														<strong>11/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="0" data-current="0" data-total="50">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">3434</span></div>
														<strong>22/08/2018</strong>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapseTwo1" aria-expanded="true" aria-controls="collapseTwo">
									<table class="table">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td class="iq-colhead">
													<b><strong>IQ#<span class="iq-number">2</span></strong> <span class="iq-status"><i class="iq-status-icon fa fa-exclamation-triangle"></i> WAIRING FOR APPROVE</span></b>
													<p style="font-size: 18px;">88/88/8888</p>
												</td>
												<td>
													<b>SUPPLIER :</b> Samples Co,Ltd
													<p class="value">
														<b>BRANCH :</b>Headquarters</p>
												</td>
												<td class="tr-data-small">
													<b>ORDERED</b>
													<P>1000</P>
												</td>
												<td class="tr-data-small">
													<b>RECEIVED </b>
													<P>350</P>
												</td>
												<td class="tr-data-small">
													<b>BACKLOG </b>
													<P class="ngin-red">(650)</P>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="4">
													<button type="button" class="btn btn-ngin btn-default">
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
												</td>

												<td>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-plus" aria-hidden="true"></i>
														</span>New PO
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body scroll-2">
								<table class="table ngin-table">
									<thead>
										<tr>
											<th>ORDERED</th>
											<th>RECEIVED</th>
											<th>RECEIVED DATE</th>
											<th>PR</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>200</td>
											<td>50</td>
											<td>02/09/2017</td>
											<td class="td-pr">1111</td>
										</tr>
										<tr>
											<td></td>
											<td>50</td>
											<td>01/09/2017</td>
											<td class="td-pr">2222</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>29/08/2017</td>
											<td class="td-pr">3333</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>28/08/2017</td>
											<td class="td-pr">4444</td>
										</tr>
										<tr>
											<td>100</td>
											<td>100</td>
											<td>27/08/2017</td>
											<td class="td-pr">5555</td>
										</tr>
										<tr class="border-bottom">
											<td>50</td>
											<td>0</td>
											<td>26/08/2017</td>
											<td class="td-pr">6666</td>
										</tr>
										<tr>
											<td class="text-center td-chart">
												<div class="char-total chart" data-percent="30" data-current="300" data-total="1000">
													<span class="chart-total-display"></span>
												</div>
												<div class="chart-label"><strong>TOTAL</strong></div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="70" data-current="120" data-total="200">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">1212</span></div>
														<strong>01/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="100" data-current="100" data-total="100">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">2323</span></div>
														<strong>11/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="0" data-current="0" data-total="50">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">3434</span></div>
														<strong>22/08/2018</strong>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingthree">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapsethree1" aria-expanded="true" aria-controls="collapsethree">
									<table class="table">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td class="iq-colhead">
													<b><strong>IQ#<span class="iq-number">3</span></strong> <span class="iq-status"><i class="iq-status-icon fa fa-times-circle-o text-danger"></i> REJECTED</span></b>
													<p style="font-size: 18px;">88/88/8888</p>
												</td>
												<td>
													<b>SUPPLIER :</b> Samples Co,Ltd
													<p class="value">
														<b>BRANCH :</b>Headquarters</p>
												</td>
												<td class="tr-data-small">
													<b>ORDERED</b>
													<P>1000</P>
												</td>
												<td class="tr-data-small">
													<b>RECEIVED </b>
													<P>350</P>
												</td>
												<td class="tr-data-small">
													<b>BACKLOG </b>
													<P class="ngin-red">(650)</P>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="4">
													<button type="button" class="btn btn-ngin btn-default">
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
												</td>

												<td>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-plus" aria-hidden="true"></i>
														</span>New PO
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapsethree1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthree">
							<div class="panel-body scroll-2">
								<table class="table ngin-table">
									<thead>
										<tr>
											<th>ORDERED</th>
											<th>RECEIVED</th>
											<th>RECEIVED DATE</th>
											<th>PR</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>200</td>
											<td>50</td>
											<td>02/09/2017</td>
											<td class="td-pr">1111</td>
										</tr>
										<tr>
											<td></td>
											<td>50</td>
											<td>01/09/2017</td>
											<td class="td-pr">2222</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>29/08/2017</td>
											<td class="td-pr">3333</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>28/08/2017</td>
											<td class="td-pr">4444</td>
										</tr>
										<tr>
											<td>100</td>
											<td>100</td>
											<td>27/08/2017</td>
											<td class="td-pr">5555</td>
										</tr>
										<tr class="border-bottom">
											<td>50</td>
											<td>0</td>
											<td>26/08/2017</td>
											<td class="td-pr">6666</td>
										</tr>
										<tr>
											<td class="text-center td-chart">
												<div class="char-total chart" data-percent="30" data-current="300" data-total="1000">
													<span class="chart-total-display"></span>
												</div>
												<div class="chart-label"><strong>TOTAL</strong></div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="70" data-current="120" data-total="200">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">1212</span></div>
														<strong>01/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="100" data-current="100" data-total="100">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">2323</span></div>
														<strong>11/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="0" data-current="0" data-total="50">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">3434</span></div>
														<strong>22/08/2018</strong>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>


					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingfour">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapsefour1" aria-expanded="true" aria-controls="collapsefour">
									<table class="table">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td class="iq-colhead">
													<b><strong>IQ#<span class="iq-number">4</span></strong> <span class="iq-status"><i class="iq-status-icon fa fa-times-circle-o text-danger"></i> REJECTED</span></b>
													<p style="font-size: 18px;">88/88/8888</p>
												</td>
												<td>
													<b>SUPPLIER :</b> Samples Co,Ltd
													<p class="value">
														<b>BRANCH :</b>Headquarters</p>
												</td>
												<td class="tr-data-small">
													<b>ORDERED</b>
													<P>1000</P>
												</td>
												<td class="tr-data-small">
													<b>RECEIVED </b>
													<P>350</P>
												</td>
												<td class="tr-data-small">
													<b>BACKLOG </b>
													<P class="ngin-red">(650)</P>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="4">
													<button type="button" class="btn btn-ngin btn-default">
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
												</td>

												<td>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-plus" aria-hidden="true"></i>
														</span>New PO
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapsefour1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
							<div class="panel-body scroll-2">
								<table class="table ngin-table">
									<thead>
										<tr>
											<th>ORDERED</th>
											<th>RECEIVED</th>
											<th>RECEIVED DATE</th>
											<th>PR</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>200</td>
											<td>50</td>
											<td>02/09/2017</td>
											<td class="td-pr">1111</td>
										</tr>
										<tr>
											<td></td>
											<td>50</td>
											<td>01/09/2017</td>
											<td class="td-pr">2222</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>29/08/2017</td>
											<td class="td-pr">3333</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>28/08/2017</td>
											<td class="td-pr">4444</td>
										</tr>
										<tr>
											<td>100</td>
											<td>100</td>
											<td>27/08/2017</td>
											<td class="td-pr">5555</td>
										</tr>
										<tr class="border-bottom">
											<td>50</td>
											<td>0</td>
											<td>26/08/2017</td>
											<td class="td-pr">6666</td>
										</tr>
										<tr>
											<td class="text-center td-chart">
												<div class="char-total chart" data-percent="30" data-current="300" data-total="1000">
													<span class="chart-total-display"></span>
												</div>
												<div class="chart-label"><strong>TOTAL</strong></div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="70" data-current="120" data-total="200">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">1212</span></div>
														<strong>01/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="100" data-current="100" data-total="100">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">2323</span></div>
														<strong>11/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="0" data-current="0" data-total="50">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">3434</span></div>
														<strong>22/08/2018</strong>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>



				</div>
			</div>
			<!--  tab  !-->



			<!--  tab  !-->
			<div class="tab-pane" id="2">
				<div class="panel-group " id="backlog" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne">
									<table class="table ">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td class="iq-colhead">
													<b><strong>IQ#<span class="iq-number">1</span></strong> <span class="iq-status"><i class="iq-status-icon fa-approve-all"></i> APPROVE</span></b>
													<p style="font-size: 18px;">04/09/2017</p>
												</td>
												<td>
													<b>SUPPLIER :</b> Samples Co,Ltd
													<p class="value">
														<b>BRANCH :</b>Headquarters</p>
												</td>
												<td class="tr-data-small">
													<b>ORDERED</b>
													<P>1000</P>
												</td>
												<td class="tr-data-small">
													<b>RECEIVED </b>
													<P>350</P>
												</td>
												<td class="tr-data-small">
													<b>BACKLOG </b>
													<P class="ngin-red">(650)</P>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="4">
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
												</td>

												<td>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-plus" aria-hidden="true"></i>
														</span>New PO
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapseOne2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body scroll-2">
								<table class="table ngin-table">
									<thead>
										<tr>
											<th>ORDERED</th>
											<th>RECEIVED</th>
											<th>RECEIVED DATE</th>
											<th>PR</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>200</td>
											<td>50</td>
											<td>02/09/2017</td>
											<td class="td-pr">1111</td>
										</tr>
										<tr>
											<td></td>
											<td>50</td>
											<td>01/09/2017</td>
											<td class="td-pr">2222</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>29/08/2017</td>
											<td class="td-pr">3333</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>28/08/2017</td>
											<td class="td-pr">4444</td>
										</tr>
										<tr>
											<td>100</td>
											<td>100</td>
											<td>27/08/2017</td>
											<td class="td-pr">5555</td>
										</tr>
										<tr class="border-bottom">
											<td>50</td>
											<td>0</td>
											<td>26/08/2017</td>
											<td class="td-pr">6666</td>
										</tr>
										<tr>
											<td class="text-center td-chart">
												<div class="char-total chart" data-percent="30" data-current="300" data-total="1000">
													<span class="chart-total-display"></span>
												</div>
												<div class="chart-label"><strong>TOTAL</strong></div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="70" data-current="120" data-total="200">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">1212</span></div>
														<strong>01/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="100" data-current="100" data-total="100">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">2323</span></div>
														<strong>11/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="0" data-current="0" data-total="50">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">3434</span></div>
														<strong>22/08/2018</strong>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapseTwo2" aria-expanded="true" aria-controls="collapseTwo">
									<table class="table">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td class="iq-colhead">
													<b><strong>IQ#<span class="iq-number">2</span></strong> <span class="iq-status"><i class="iq-status-icon fa fa-exclamation-triangle"></i> WAIRING FOR APPROVE</span></b>
													<p style="font-size: 18px;">88/88/8888</p>
												</td>
												<td>
													<b>SUPPLIER :</b> Samples Co,Ltd
													<p class="value">
														<b>BRANCH :</b>Headquarters</p>
												</td>
												<td class="tr-data-small">
													<b>ORDERED</b>
													<P>1000</P>
												</td>
												<td class="tr-data-small">
													<b>RECEIVED </b>
													<P>350</P>
												</td>
												<td class="tr-data-small">
													<b>BACKLOG </b>
													<P class="ngin-red">(650)</P>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="4">
													<button type="button" class="btn btn-ngin btn-default">
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
												</td>

												<td>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-plus" aria-hidden="true"></i>
														</span>New PO
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body scroll-2">
								<table class="table ngin-table">
									<thead>
										<tr>
											<th>ORDERED</th>
											<th>RECEIVED</th>
											<th>RECEIVED DATE</th>
											<th>PR</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>200</td>
											<td>50</td>
											<td>02/09/2017</td>
											<td class="td-pr">1111</td>
										</tr>
										<tr>
											<td></td>
											<td>50</td>
											<td>01/09/2017</td>
											<td class="td-pr">2222</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>29/08/2017</td>
											<td class="td-pr">3333</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>28/08/2017</td>
											<td class="td-pr">4444</td>
										</tr>
										<tr>
											<td>100</td>
											<td>100</td>
											<td>27/08/2017</td>
											<td class="td-pr">5555</td>
										</tr>
										<tr class="border-bottom">
											<td>50</td>
											<td>0</td>
											<td>26/08/2017</td>
											<td class="td-pr">6666</td>
										</tr>
										<tr>
											<td class="text-center td-chart">
												<div class="char-total chart" data-percent="30" data-current="300" data-total="1000">
													<span class="chart-total-display"></span>
												</div>
												<div class="chart-label"><strong>TOTAL</strong></div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="70" data-current="120" data-total="200">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">1212</span></div>
														<strong>01/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="100" data-current="100" data-total="100">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">2323</span></div>
														<strong>11/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="0" data-current="0" data-total="50">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">3434</span></div>
														<strong>22/08/2018</strong>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingthree">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapsethree2" aria-expanded="true" aria-controls="collapsethree">
									<table class="table">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td class="iq-colhead">
													<b><strong>IQ#<span class="iq-number">3</span></strong> <span class="iq-status"><i class="iq-status-icon fa fa-times-circle-o text-danger"></i> REJECTED</span></b>
													<p style="font-size: 18px;">88/88/8888</p>
												</td>
												<td>
													<b>SUPPLIER :</b> Samples Co,Ltd
													<p class="value">
														<b>BRANCH :</b>Headquarters</p>
												</td>
												<td class="tr-data-small">
													<b>ORDERED</b>
													<P>1000</P>
												</td>
												<td class="tr-data-small">
													<b>RECEIVED </b>
													<P>350</P>
												</td>
												<td class="tr-data-small">
													<b>BACKLOG </b>
													<P class="ngin-red">(650)</P>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="4">
													<button type="button" class="btn btn-ngin btn-default">
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
												</td>

												<td>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-plus" aria-hidden="true"></i>
														</span>New PO
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapsethree2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthree">
							<div class="panel-body scroll-2">
								<table class="table ngin-table">
									<thead>
										<tr>
											<th>ORDERED</th>
											<th>RECEIVED</th>
											<th>RECEIVED DATE</th>
											<th>PR</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>200</td>
											<td>50</td>
											<td>02/09/2017</td>
											<td class="td-pr">1111</td>
										</tr>
										<tr>
											<td></td>
											<td>50</td>
											<td>01/09/2017</td>
											<td class="td-pr">2222</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>29/08/2017</td>
											<td class="td-pr">3333</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>28/08/2017</td>
											<td class="td-pr">4444</td>
										</tr>
										<tr>
											<td>100</td>
											<td>100</td>
											<td>27/08/2017</td>
											<td class="td-pr">5555</td>
										</tr>
										<tr class="border-bottom">
											<td>50</td>
											<td>0</td>
											<td>26/08/2017</td>
											<td class="td-pr">6666</td>
										</tr>
										<tr>
											<td class="text-center td-chart">
												<div class="char-total chart" data-percent="30" data-current="300" data-total="1000">
													<span class="chart-total-display"></span>
												</div>
												<div class="chart-label"><strong>TOTAL</strong></div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="70" data-current="120" data-total="200">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">1212</span></div>
														<strong>01/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="100" data-current="100" data-total="100">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">2323</span></div>
														<strong>11/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="0" data-current="0" data-total="50">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">3434</span></div>
														<strong>22/08/2018</strong>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>


					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingfour">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapsefour2" aria-expanded="true" aria-controls="collapsefour">
									<table class="table">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td class="iq-colhead">
													<b><strong>IQ#<span class="iq-number">4</span></strong> <span class="iq-status"><i class="iq-status-icon fa fa-times-circle-o text-danger"></i> REJECTED</span></b>
													<p style="font-size: 18px;">88/88/8888</p>
												</td>
												<td>
													<b>SUPPLIER :</b> Samples Co,Ltd
													<p class="value">
														<b>BRANCH :</b>Headquarters</p>
												</td>
												<td class="tr-data-small">
													<b>ORDERED</b>
													<P>1000</P>
												</td>
												<td class="tr-data-small">
													<b>RECEIVED </b>
													<P>350</P>
												</td>
												<td class="tr-data-small">
													<b>BACKLOG </b>
													<P class="ngin-red">(650)</P>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="4">
													<button type="button" class="btn btn-ngin btn-default">
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
												</td>

												<td>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-plus" aria-hidden="true"></i>
														</span>New PO
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapsefour2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
							<div class="panel-body scroll-2">
								<table class="table ngin-table">
									<thead>
										<tr>
											<th>ORDERED</th>
											<th>RECEIVED</th>
											<th>RECEIVED DATE</th>
											<th>PR</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>200</td>
											<td>50</td>
											<td>02/09/2017</td>
											<td class="td-pr">1111</td>
										</tr>
										<tr>
											<td></td>
											<td>50</td>
											<td>01/09/2017</td>
											<td class="td-pr">2222</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>29/08/2017</td>
											<td class="td-pr">3333</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>28/08/2017</td>
											<td class="td-pr">4444</td>
										</tr>
										<tr>
											<td>100</td>
											<td>100</td>
											<td>27/08/2017</td>
											<td class="td-pr">5555</td>
										</tr>
										<tr class="border-bottom">
											<td>50</td>
											<td>0</td>
											<td>26/08/2017</td>
											<td class="td-pr">6666</td>
										</tr>
										<tr>
											<td class="text-center">
												<span class="char-total chart" data-percent="30" data-current="300" data-total="1000">
													<span class="chart-total-display"></span>
												</span>
												<div class="chart-label">TOTAL</div>
											</td>
											<td class="text-center">
												<span class="char-total chart" data-percent="30" data-current="300" data-total="1000">
													<span class="chart-total-display"></span>
												</span>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">1212</span></div>
														01/08/2018
												</div>
											</td>
											<td class="text-center">
												<span class="char-total chart" data-percent="30" data-current="300" data-total="1000">
													<span class="chart-total-display"></span>
												</span>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">1212</span></div>
														01/08/2018
												</div>
											</td>
											<td class="text-center">
												<span class="char-total chart" data-percent="30" data-current="300" data-total="1000">
													<span class="chart-total-display"></span>
												</span>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">1212</span></div>
														01/08/2018
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>



				</div>
			</div>
			<!--  tab  !-->




			<!--  tab  !-->
			<div class="tab-pane active" id="3">
				<div class="panel-group " id="backlog" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<table class="table ">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td class="iq-colhead">
													<b><strong>IQ#<span class="iq-number">1</span></strong> <span class="iq-status"><i class="iq-status-icon fa-approve-all"></i> APPROVE</span></b>
													<p style="font-size: 18px;">04/09/2017</p>
												</td>
												<td>
													<b>SUPPLIER :</b> Samples Co,Ltd
													<p class="value">
														<b>BRANCH :</b>Headquarters</p>
												</td>
												<td class="tr-data-small">
													<b>ORDERED</b>
													<P>1000</P>
												</td>
												<td class="tr-data-small">
													<b>RECEIVED </b>
													<P>350</P>
												</td>
												<td class="tr-data-small">
													<b>BACKLOG </b>
													<P class="ngin-red">(650)</P>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="4">
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
												</td>

												<td>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-plus" aria-hidden="true"></i>
														</span>New PO
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body scroll-2">
								<table class="table ngin-table">
									<thead>
										<tr>
											<th>ORDERED</th>
											<th>RECEIVED</th>
											<th>RECEIVED DATE</th>
											<th>PR</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>200</td>
											<td>50</td>
											<td>02/09/2017</td>
											<td class="td-pr">1111</td>
										</tr>
										<tr>
											<td></td>
											<td>50</td>
											<td>01/09/2017</td>
											<td class="td-pr">2222</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>29/08/2017</td>
											<td class="td-pr">3333</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>28/08/2017</td>
											<td class="td-pr">4444</td>
										</tr>
										<tr>
											<td>100</td>
											<td>100</td>
											<td>27/08/2017</td>
											<td class="td-pr">5555</td>
										</tr>
										<tr class="border-bottom">
											<td>50</td>
											<td>0</td>
											<td>26/08/2017</td>
											<td class="td-pr">6666</td>
										</tr>
										<tr>
											<td class="text-center td-chart">
												<div class="char-total chart" data-percent="30" data-current="300" data-total="1000">
													<span class="chart-total-display"></span>
												</div>
												<div class="chart-label"><strong>TOTAL</strong></div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="70" data-current="120" data-total="200">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">1212</span></div>
														<strong>01/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="100" data-current="100" data-total="100">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">2323</span></div>
														<strong>11/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="0" data-current="0" data-total="50">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">3434</span></div>
														<strong>22/08/2018</strong>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
									<table class="table">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td class="iq-colhead">
													<b>
														<div>IQ#<span class="iq-number">2</span></div>
														<div class="iq-status waiting"><i class="iq-status-icon fa-exclamation"></i> <span>WAIRING FOR APPROVE</span></div>
													</b>
													<p style="font-size: 18px;">88/88/8888</p>
												</td>
												<td>
													<b>SUPPLIER :</b> Samples Co,Ltd
													<p class="value">
														<b>BRANCH :</b>Headquarters</p>
												</td>
												<td class="tr-data-small">
													<b>ORDERED</b>
													<P>1000</P>
												</td>
												<td class="tr-data-small">
													<b>RECEIVED </b>
													<P>350</P>
												</td>
												<td class="tr-data-small">
													<b>BACKLOG </b>
													<P class="ngin-red">(650)</P>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="4">
													<button type="button" class="btn btn-ngin btn-default">
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
												</td>

												<td>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-plus" aria-hidden="true"></i>
														</span>New PO
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body scroll-2">
								<table class="table ngin-table">
									<thead>
										<tr>
											<th>ORDERED</th>
											<th>RECEIVED</th>
											<th>RECEIVED DATE</th>
											<th>PR</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>200</td>
											<td>50</td>
											<td>02/09/2017</td>
											<td class="td-pr">1111</td>
										</tr>
										<tr>
											<td></td>
											<td>50</td>
											<td>01/09/2017</td>
											<td class="td-pr">2222</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>29/08/2017</td>
											<td class="td-pr">3333</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>28/08/2017</td>
											<td class="td-pr">4444</td>
										</tr>
										<tr>
											<td>100</td>
											<td>100</td>
											<td>27/08/2017</td>
											<td class="td-pr">5555</td>
										</tr>
										<tr class="border-bottom">
											<td>50</td>
											<td>0</td>
											<td>26/08/2017</td>
											<td class="td-pr">6666</td>
										</tr>
										<tr>
											<td class="text-center td-chart">
												<div class="char-total chart" data-percent="30" data-current="300" data-total="1000">
													<span class="chart-total-display"></span>
												</div>
												<div class="chart-label"><strong>TOTAL</strong></div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="70" data-current="120" data-total="200">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">1212</span></div>
														<strong>01/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="100" data-current="100" data-total="100">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">2323</span></div>
														<strong>11/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="0" data-current="0" data-total="50">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">3434</span></div>
														<strong>22/08/2018</strong>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingthree">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapsethree" aria-expanded="true" aria-controls="collapsethree">
									<table class="table">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td class="iq-colhead">
													<b><strong>IQ#<span class="iq-number">3</span></strong> <span class="iq-status"><i class="iq-status-icon fa fa-times-circle-o text-danger"></i> REJECTED</span></b>
													<p style="font-size: 18px;">88/88/8888</p>
												</td>
												<td>
													<b>SUPPLIER :</b> Samples Co,Ltd
													<p class="value">
														<b>BRANCH :</b>Headquarters</p>
												</td>
												<td class="tr-data-small">
													<b>ORDERED</b>
													<P>1000</P>
												</td>
												<td class="tr-data-small">
													<b>RECEIVED </b>
													<P>350</P>
												</td>
												<td class="tr-data-small">
													<b>BACKLOG </b>
													<P class="ngin-red">(650)</P>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="4">
													<button type="button" class="btn btn-ngin btn-default">
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
												</td>

												<td>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-plus" aria-hidden="true"></i>
														</span>New PO
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapsethree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthree">
							<div class="panel-body scroll-2">
								<table class="table ngin-table">
									<thead>
										<tr>
											<th>ORDERED</th>
											<th>RECEIVED</th>
											<th>RECEIVED DATE</th>
											<th>PR</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>200</td>
											<td>50</td>
											<td>02/09/2017</td>
											<td class="td-pr">1111</td>
										</tr>
										<tr>
											<td></td>
											<td>50</td>
											<td>01/09/2017</td>
											<td class="td-pr">2222</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>29/08/2017</td>
											<td class="td-pr">3333</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>28/08/2017</td>
											<td class="td-pr">4444</td>
										</tr>
										<tr>
											<td>100</td>
											<td>100</td>
											<td>27/08/2017</td>
											<td class="td-pr">5555</td>
										</tr>
										<tr class="border-bottom">
											<td>50</td>
											<td>0</td>
											<td>26/08/2017</td>
											<td class="td-pr">6666</td>
										</tr>
										<tr>
											<td class="text-center td-chart">
												<div class="char-total chart" data-percent="30" data-current="300" data-total="1000">
													<span class="chart-total-display"></span>
												</div>
												<div class="chart-label"><strong>TOTAL</strong></div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="70" data-current="120" data-total="200">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">1212</span></div>
														<strong>01/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="100" data-current="100" data-total="100">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">2323</span></div>
														<strong>11/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="0" data-current="0" data-total="50">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">3434</span></div>
														<strong>22/08/2018</strong>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>


					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingfour">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
									<table class="table">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td class="iq-colhead">
													<b><strong>IQ#<span class="iq-number">4</span></strong> <span class="iq-status"><i class="iq-status-icon fa fa-times-circle-o text-danger"></i> REJECTED</span></b>
													<p style="font-size: 18px;">88/88/8888</p>
												</td>
												<td>
													<b>SUPPLIER :</b> Samples Co,Ltd
													<p class="value">
														<b>BRANCH :</b>Headquarters</p>
												</td>
												<td class="tr-data-small">
													<b>ORDERED</b>
													<P>1000</P>
												</td>
												<td class="tr-data-small">
													<b>RECEIVED </b>
													<P>350</P>
												</td>
												<td class="tr-data-small">
													<b>BACKLOG </b>
													<P class="ngin-red">(650)</P>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="4">
													<button type="button" class="btn btn-ngin btn-default">
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
												</td>

												<td>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-plus" aria-hidden="true"></i>
														</span>New PO
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
							<div class="panel-body scroll-2">
								<table class="table ngin-table">
									<thead>
										<tr>
											<th>ORDERED</th>
											<th>RECEIVED</th>
											<th>RECEIVED DATE</th>
											<th>PR</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>200</td>
											<td>50</td>
											<td>02/09/2017</td>
											<td class="td-pr">1111</td>
										</tr>
										<tr>
											<td></td>
											<td>50</td>
											<td>01/09/2017</td>
											<td class="td-pr">2222</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>29/08/2017</td>
											<td class="td-pr">3333</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>28/08/2017</td>
											<td class="td-pr">4444</td>
										</tr>
										<tr>
											<td>100</td>
											<td>100</td>
											<td>27/08/2017</td>
											<td class="td-pr">5555</td>
										</tr>
										<tr class="border-bottom">
											<td>50</td>
											<td>0</td>
											<td>26/08/2017</td>
											<td class="td-pr">6666</td>
										</tr>
										<tr>
											<td class="text-center td-chart">
												<div class="char-total chart" data-percent="30" data-current="300" data-total="1000">
													<span class="chart-total-display"></span>
												</div>
												<div class="chart-label"><strong>TOTAL</strong></div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="70" data-current="120" data-total="200">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">1212</span></div>
														<strong>01/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="100" data-current="100" data-total="100">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">2323</span></div>
														<strong>11/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="0" data-current="0" data-total="50">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">3434</span></div>
														<strong>22/08/2018</strong>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingfive">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
									<table class="table">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td class="iq-colhead">
													<b><strong>IQ#<span class="iq-number">5</span></strong> <span class="iq-status"><i class="iq-status-icon fa fa-times-circle-o text-danger"></i> REJECTED</span></b>
													<p style="font-size: 18px;">88/88/8888</p>
												</td>
												<td>
													<b>SUPPLIER :</b> Samples Co,Ltd
													<p class="value">
														<b>BRANCH :</b>Headquarters</p>
												</td>
												<td class="tr-data-small">
													<b>ORDERED</b>
													<P>1000</P>
												</td>
												<td class="tr-data-small">
													<b>RECEIVED </b>
													<P>350</P>
												</td>
												<td class="tr-data-small">
													<b>BACKLOG </b>
													<P class="ngin-red">(650)</P>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="4">
													<button type="button" class="btn btn-ngin btn-default">
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
												</td>

												<td>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-plus" aria-hidden="true"></i>
														</span>New PO
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
							<div class="panel-body scroll-2">
								<table class="table ngin-table">
									<thead>
										<tr>
											<th>ORDERED</th>
											<th>RECEIVED</th>
											<th>RECEIVED DATE</th>
											<th>PR</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>200</td>
											<td>50</td>
											<td>02/09/2017</td>
											<td class="td-pr">1111</td>
										</tr>
										<tr>
											<td></td>
											<td>50</td>
											<td>01/09/2017</td>
											<td class="td-pr">2222</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>29/08/2017</td>
											<td class="td-pr">3333</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>28/08/2017</td>
											<td class="td-pr">4444</td>
										</tr>
										<tr>
											<td>100</td>
											<td>100</td>
											<td>27/08/2017</td>
											<td class="td-pr">5555</td>
										</tr>
										<tr class="border-bottom">
											<td>50</td>
											<td>0</td>
											<td>26/08/2017</td>
											<td class="td-pr">6666</td>
										</tr>
										<tr>
											<td class="text-center td-chart">
												<div class="char-total chart" data-percent="30" data-current="300" data-total="1000">
													<span class="chart-total-display"></span>
												</div>
												<div class="chart-label"><strong>TOTAL</strong></div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="70" data-current="120" data-total="200">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">1212</span></div>
														<strong>01/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="100" data-current="100" data-total="100">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">2323</span></div>
														<strong>11/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="0" data-current="0" data-total="50">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">3434</span></div>
														<strong>22/08/2018</strong>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>



				</div>
			</div>
			<!--  tab  !-->


			<!--  tab  !-->
			<div class="tab-pane" id="4">
				<div class="panel-group " id="backlog" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapseOne4" aria-expanded="true" aria-controls="collapseOne">
									<table class="table ">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td class="iq-colhead">
													<b><strong>IQ#<span class="iq-number">1</span></strong> <span class="iq-status"><i class="iq-status-icon fa-approve-all"></i> APPROVE</span></b>
													<p style="font-size: 18px;">04/09/2017</p>
												</td>
												<td>
													<b>SUPPLIER :</b> Samples Co,Ltd
													<p class="value">
														<b>BRANCH :</b>Headquarters</p>
												</td>
												<td class="tr-data-small">
													<b>ORDERED</b>
													<P>1000</P>
												</td>
												<td class="tr-data-small">
													<b>RECEIVED </b>
													<P>350</P>
												</td>
												<td class="tr-data-small">
													<b>BACKLOG </b>
													<P class="ngin-red">(650)</P>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="4">
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
												</td>

												<td>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-plus" aria-hidden="true"></i>
														</span>New PO
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapseOne4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body scroll-2">
								<table class="table ngin-table">
									<thead>
										<tr>
											<th>ORDERED</th>
											<th>RECEIVED</th>
											<th>RECEIVED DATE</th>
											<th>PR</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>200</td>
											<td>50</td>
											<td>02/09/2017</td>
											<td class="td-pr">1111</td>
										</tr>
										<tr>
											<td></td>
											<td>50</td>
											<td>01/09/2017</td>
											<td class="td-pr">2222</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>29/08/2017</td>
											<td class="td-pr">3333</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>28/08/2017</td>
											<td class="td-pr">4444</td>
										</tr>
										<tr>
											<td>100</td>
											<td>100</td>
											<td>27/08/2017</td>
											<td class="td-pr">5555</td>
										</tr>
										<tr class="border-bottom">
											<td>50</td>
											<td>0</td>
											<td>26/08/2017</td>
											<td class="td-pr">6666</td>
										</tr>
										<tr>
											<td class="text-center td-chart">
												<div class="char-total chart" data-percent="30" data-current="300" data-total="1000">
													<span class="chart-total-display"></span>
												</div>
												<div class="chart-label"><strong>TOTAL</strong></div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="70" data-current="120" data-total="200">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">1212</span></div>
														<strong>01/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="100" data-current="100" data-total="100">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">2323</span></div>
														<strong>11/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="0" data-current="0" data-total="50">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">3434</span></div>
														<strong>22/08/2018</strong>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapseTwo4" aria-expanded="true" aria-controls="collapseTwo">
									<table class="table">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td>
													<b><strong>IQ#<span class="iq-number">2</span></strong> <span class="iq-status"><i class="iq-status-icon fa fa-exclamation-triangle"></i> WAIRING FOR APPROVE</span></b>
													<p style="font-size: 18px;">88/88/8888</p>
												</td>
												<td>
													<b>SUPPLIER :</b> Samples Co,Ltd
													<p class="value">
														<b>BRANCH :</b>Headquarters</p>
												</td>
												<td class="tr-data-small">
													<b>ORDERED</b>
													<P>1000</P>
												</td>
												<td class="tr-data-small">
													<b>RECEIVED </b>
													<P>350</P>
												</td>
												<td class="tr-data-small">
													<b>BACKLOG </b>
													<P class="ngin-red">(650)</P>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="4">
													<button type="button" class="btn btn-ngin btn-default">
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
												</td>

												<td>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-plus" aria-hidden="true"></i>
														</span>New PO
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapseTwo4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body scroll-2">
								<table class="table ngin-table">
									<thead>
										<tr>
											<th>ORDERED</th>
											<th>RECEIVED</th>
											<th>RECEIVED DATE</th>
											<th>PR</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>200</td>
											<td>50</td>
											<td>02/09/2017</td>
											<td class="td-pr">1111</td>
										</tr>
										<tr>
											<td></td>
											<td>50</td>
											<td>01/09/2017</td>
											<td class="td-pr">2222</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>29/08/2017</td>
											<td class="td-pr">3333</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>28/08/2017</td>
											<td class="td-pr">4444</td>
										</tr>
										<tr>
											<td>100</td>
											<td>100</td>
											<td>27/08/2017</td>
											<td class="td-pr">5555</td>
										</tr>
										<tr class="border-bottom">
											<td>50</td>
											<td>0</td>
											<td>26/08/2017</td>
											<td class="td-pr">6666</td>
										</tr>
										<tr>
											<td class="text-center td-chart">
												<div class="char-total chart" data-percent="30" data-current="300" data-total="1000">
													<span class="chart-total-display"></span>
												</div>
												<div class="chart-label"><strong>TOTAL</strong></div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="70" data-current="120" data-total="200">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">1212</span></div>
														<strong>01/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="100" data-current="100" data-total="100">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">2323</span></div>
														<strong>11/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="0" data-current="0" data-total="50">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">3434</span></div>
														<strong>22/08/2018</strong>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingthree">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapsethree4" aria-expanded="true" aria-controls="collapsethree">
									<table class="table">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td class="iq-colhead">
													<b><strong>IQ#<span class="iq-number">3</span></strong> <span class="iq-status"><i class="iq-status-icon fa fa-times-circle-o danger"></i> REJECTED</span></b>
													<p style="font-size: 18px;">88/88/8888</p>
												</td>
												<td>
													<b>SUPPLIER :</b> Samples Co,Ltd
													<p class="value">
														<b>BRANCH :</b>Headquarters</p>
												</td>
												<td class="tr-data-small">
													<b>ORDERED</b>
													<P>1000</P>
												</td>
												<td class="tr-data-small">
													<b>RECEIVED </b>
													<P>350</P>
												</td>
												<td class="tr-data-small">
													<b>BACKLOG </b>
													<P class="ngin-red">(650)</P>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="4">
													<button type="button" class="btn btn-ngin btn-default">
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
												</td>

												<td>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-plus" aria-hidden="true"></i>
														</span>New PO
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapsethree4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthree">
							<div class="panel-body scroll-2">
								<table class="table ngin-table">
									<thead>
										<tr>
											<th>ORDERED</th>
											<th>RECEIVED</th>
											<th>RECEIVED DATE</th>
											<th>PR</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>200</td>
											<td>50</td>
											<td>02/09/2017</td>
											<td class="td-pr">1111</td>
										</tr>
										<tr>
											<td></td>
											<td>50</td>
											<td>01/09/2017</td>
											<td class="td-pr">2222</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>29/08/2017</td>
											<td class="td-pr">3333</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>28/08/2017</td>
											<td class="td-pr">4444</td>
										</tr>
										<tr>
											<td>100</td>
											<td>100</td>
											<td>27/08/2017</td>
											<td class="td-pr">5555</td>
										</tr>
										<tr class="border-bottom">
											<td>50</td>
											<td>0</td>
											<td>26/08/2017</td>
											<td class="td-pr">6666</td>
										</tr>
										<tr>
											<td class="text-center td-chart">
												<div class="char-total chart" data-percent="30" data-current="300" data-total="1000">
													<span class="chart-total-display"></span>
												</div>
												<div class="chart-label"><strong>TOTAL</strong></div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="70" data-current="120" data-total="200">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">1212</span></div>
														<strong>01/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="100" data-current="100" data-total="100">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">2323</span></div>
														<strong>11/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="0" data-current="0" data-total="50">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">3434</span></div>
														<strong>22/08/2018</strong>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>



					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingfour">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapsefour4" aria-expanded="true" aria-controls="collapsefour">
									<table class="table">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td class="iq-colhead">
													<b><strong>IQ#<span class="iq-number">4</span></strong> <span class="iq-status"><i class="iq-status-icon fa fa-times-circle-o text-danger"></i> REJECTED</span></b>
													<p style="font-size: 18px;">88/88/8888</p>
												</td>
												<td>
													<b>SUPPLIER :</b> Samples Co,Ltd
													<p class="value">
														<b>BRANCH :</b>Headquarters</p>
												</td>
												<td class="tr-data-small">
													<b>ORDERED</b>
													<P>1000</P>
												</td>
												<td class="tr-data-small">
													<b>RECEIVED </b>
													<P>350</P>
												</td>
												<td class="tr-data-small">
													<b>BACKLOG </b>
													<P class="ngin-red">(650)</P>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="4">
													<button type="button" class="btn btn-ngin btn-default">
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
												</td>

												<td>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-plus" aria-hidden="true"></i>
														</span>New PO
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapsefour4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
							<div class="panel-body scroll-2">
								<table class="table ngin-table">
									<thead>
										<tr>
											<th>ORDERED</th>
											<th>RECEIVED</th>
											<th>RECEIVED DATE</th>
											<th>PR</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>200</td>
											<td>50</td>
											<td>02/09/2017</td>
											<td class="td-pr">1111</td>
										</tr>
										<tr>
											<td></td>
											<td>50</td>
											<td>01/09/2017</td>
											<td class="td-pr">2222</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>29/08/2017</td>
											<td class="td-pr">3333</td>
										</tr>
										<tr>
											<td></td>
											<td>10</td>
											<td>28/08/2017</td>
											<td class="td-pr">4444</td>
										</tr>
										<tr>
											<td>100</td>
											<td>100</td>
											<td>27/08/2017</td>
											<td class="td-pr">5555</td>
										</tr>
										<tr class="border-bottom">
											<td>50</td>
											<td>0</td>
											<td>26/08/2017</td>
											<td class="td-pr">6666</td>
										</tr>
										<tr>
											<td class="text-center td-chart">
												<div class="char-total chart" data-percent="30" data-current="300" data-total="1000">
													<span class="chart-total-display"></span>
												</div>
												<div class="chart-label"><strong>TOTAL</strong></div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="70" data-current="120" data-total="200">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">1212</span></div>
														<strong>01/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="100" data-current="100" data-total="100">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">2323</span></div>
														<strong>11/08/2018</strong>
												</div>
											</td>
											<td class="text-center td-chart">
												<div class="char-first-time chart chart-time" data-percent="0" data-current="0" data-total="50">
													<span class="chart-time-display"></span>
												</div>
												<div class="chart-label">
													<div class="po-number">PO # <span class="text-blue">3434</span></div>
														<strong>22/08/2018</strong>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>



				</div>
			</div>
			<!--  tab  !-->








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
				<p>
					<small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
				</p>

			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/150727114252_prod_50.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a>
				<small class="right">20/50</small>
				<p>
					<small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
				</p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a>
				<small class="right">20/50</small>
				<p>
					<small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
				</p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/150727114252_prod_50.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a>
				<small class="right">20/50</small>
				<p>
					<small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
				</p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a>
				<small class="right">20/50</small>
				<p>
					<small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
				</p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a>
				<small class="right">20/50</small>
				<p>
					<small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a>
				<small class="right">20/50</small>
				<p>
					<small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a>
				<small class="right">20/50</small>
				<p>
					<small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
				</p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a>
				<small class="right">20/50</small>
				<p>
					<small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
				</p>
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
				<p>
					<small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
				</p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/150727114252_prod_50.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a>
				<small class="right">20/50</small>
				<p>
					<small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
				</p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a>
				<small class="right">20/50</small>
				<p>
					<small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
				</p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/150727114252_prod_50.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a>
				<small class="right">20/50</small>
				<p>
					<small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
				</p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a>
				<small class="right">20/50</small>
				<p>
					<small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
				</p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a>
				<small class="right">20/50</small>
				<p>
					<small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a>
				<small class="right">20/50</small>
				<p>
					<small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
				</p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a>
				<small class="right">20/50</small>
				<p>
					<small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
				</p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a>
				<small class="right">20/50</small>
				<p>
					<small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
			</div>
		</li>
	</ul>
</div>
@endsection

@section('script')
<script src="{{ asset('js/back-office/inquiry/index.js') }}"></script>
@endsection
