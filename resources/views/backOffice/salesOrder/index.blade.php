@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/sales-order/index.css')}}"/>
@endsection

@section('module_name', 'SALES ORDER (SO)')
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
                  <button type="button" class="btn btn-default-background" onclick="window.location='{{ url("back-office/sales-order/create") }}'">
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

  <div id="exTab2" class="">
		<ul class="nav nav-tabs">
			<li>
				<a href="#1" data-toggle="tab">
					<span>
						<i class="fa fa-circle-o-notch" aria-hidden="true"></i>
					</span>
					DRAFT
				</a>
			</li>
			<li>
				<a href="#2" data-toggle="tab">
					<span>
						<i class="fa fa-check-circle-o" aria-hidden="true"></i>
					</span>
					CREDIT
				</a>
			</li>
			<li class="active">
				<a href="#3" data-toggle="tab">
					<span>
						<i class="fa fa-money" aria-hidden="true"></i>
					</span>
					CASH
				</a>
			</li>
			<li>
				<a href="#4" data-toggle="tab">
					<span>
						<i class="fa fa-hourglass-end" aria-hidden="true"></i>
					</span>
					WAIT FOR SHIPPING
				</a>
			</li>
			<li>
				<a href="#5" data-toggle="tab">
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
				<div class="panel-group" id="draft" role="tablist" aria-multiselectable="true">
					@for($a = 1; $a <= 4; $a++)
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading{{ 'A'.$a }}">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#draft" href="#collapse{{ 'A'.$a }}" aria-expanded="true" aria-controls="collapse{{ 'A'.$a }}">
                  <table class="table">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td class="status">
                          <div class="approve">
                            @if($a==1)
                            <span class="iq-status"><i class="iq-status-icon fa-approve-all" style="color: #f7931c;"></i> APPROVE</span>
                            @elseif($a==2)
                            <span class="iq-status waiting"><i class="iq-status-icon fa-exclamation" style="color: #f7931c;"></i> WAIT FOR APPROVE</span>
                            @else
                            <span class="iq-status"><i class="fa fa-times-circle-o" style="color: #CC0520; margin-right: 0;"></i> REJECTED</span>
                            @endif
                          </div>
                          <div class="tax-invoice">
                            <button type="button" class="btn btn-ngin btn-default">
  														<span class="btn-label">
  															<i class="fa fa-print new" aria-hidden="true"></i>
  														</span>Tax Invoice
  													</button>
                          </div>
												</td>
                        <td class="details">
													<label style="font-size: 16px;">SO #</label>
													<span class="text-blue">88888</span><br/>

													<label>SALE DATE:</label>
													<span class="text-grey">05/09/2017</span><br/>

                          <label class="text-grey">Sample Company (Headquarters)</label>
												</td>
												<td class="sales">
													<label>SALES</label>
													<div>POP</div>
												</td>
												<td class="amount">
													<label>AMOUNT PAID</label>
													<div>5,000/10,000</div>
												</td>
												<td class="backlog">
													<label>BACKLOG</label>
													<div class="ngin-red">(650)</div>
												</td>
                        <td class="badge">
                          <span class="btn-label"><i class="fa fa-trophy pdf" aria-hidden="true"></i></span>
                          <div>Preorder</div>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="3" class="actions">
													<button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{ url(" back-office/sales-order/1/edit
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
                        <td class="additional">
                          <label>CREDIT TERM (DAYS)</label>
                          <div class="ngin-table-subtitle">N/A</div>
                          <div class="text-grey">(DUE DATE 08/08/2017)</div>
                        </td>
                        <td class="additional" colspan="2">
                          <label>INTERNAL NOTE</label>
                          <div class="small">
                              เกม Product <br>
                              ออกในวันที่ 12/01/2018
                          </div>
                        </td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapse{{ 'A'.$a }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ 'A'.$a }}">
							<div class="panel-body scroll-2">

                <table class="table ngin-table">
                  <thead>
                    <tr>
                      <th class="shipment"></th>
                      <th class="amount">AMOUNT</th>
                      <th class="warehouse">WAREHOUSE</th>
                      <th class="shipping-date">SHIPPING DATE</th>
                      <th class="by">BY</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td rowspan="6" class="shipment">
                        <div class="row">
                          <div class="col-xs-12">
                            <span class="char-total chart" data-percent="35" data-current="350" data-total="1000">
                              <span class="chart-total-display"></span>
                            </span>
                          </div>
                          <div class="col-xs-12">
                            <label class="chart-label">SHIPMENT</label>
                          </div>
                        </div>
                      </td>
                      <td class="amount">50</td>
                      <td class="warehouse">1</td>
                      <td class="shipping-date">02/09/2017</td>
                      <td class="by">Pop</td>
                    </tr>
                    <tr>
                      <td class="amount">50</td>
                      <td class="warehouse">2</td>
                      <td class="shipping-date">01/09/2017</td>
                      <td class="by">Nook</td>
                    </tr>
                    <tr>
                      <td class="amount">10</td>
                      <td class="warehouse">3</td>
                      <td class="shipping-date">29/08/2017</td>
                      <td class="by">cheek</td>
                    </tr>
                    <tr>
                      <td class="amount">10</td>
                      <td class="warehouse">4</td>
                      <td class="shipping-date">28/08/2017</td>
                      <td class="by">M</td>
                    </tr>
                    <tr>
                      <td class="amount">100</td>
                      <td class="warehouse">1</td>
                      <td class="shipping-date">28/08/2017</td>
                      <td class="by">Peart</td>
                    </tr>
                    <tr>
                      <td class="amount">8</td>
                      <td class="warehouse">2</td>
                      <td class="shipping-date">27/08/2017</td>
                      <td class="by">Shining</td>
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
				<div class="panel-group" id="credit" role="tablist" aria-multiselectable="true">
					@for($b = 1; $b <= 4; $b++)
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading{{ 'B'.$b }}">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#credit" href="#collapse{{ 'B'.$b }}" aria-expanded="true" aria-controls="collapse{{ 'B'.$b }}">
                  <table class="table">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td class="status">
                          <div class="approve">
                            @if($b==1)
                            <span class="iq-status"><i class="iq-status-icon fa-approve-all" style="color: #f7931c;"></i> APPROVE</span>
                            @elseif($b==2)
                            <span class="iq-status waiting"><i class="iq-status-icon fa-exclamation" style="color: #f7931c;"></i> WAIT FOR APPROVE</span>
                            @else
                            <span class="iq-status"><i class="fa fa-times-circle-o" style="color: #CC0520; margin-right: 0;"></i> REJECTED</span>
                            @endif
                          </div>
                          <div class="tax-invoice">
                            <button type="button" class="btn btn-ngin btn-default">
  														<span class="btn-label">
  															<i class="fa fa-print new" aria-hidden="true"></i>
  														</span>Tax Invoice
  													</button>
                          </div>
												</td>
                        <td class="details">
													<label style="font-size: 16px;">SO #</label>
													<span class="text-blue">88888</span><br/>

													<label>SALE DATE:</label>
													<span class="text-grey">05/09/2017</span><br/>

                          <label class="text-grey">Sample Company (Headquarters)</label>
												</td>
												<td class="sales">
													<label>SALES</label>
													<div>POP</div>
												</td>
												<td class="amount">
													<label>AMOUNT PAID</label>
													<div>5,000/10,000</div>
												</td>
												<td class="backlog">
													<label>BACKLOG</label>
													<div class="ngin-red">(650)</div>
												</td>
                        <td class="badge">
                          <span class="btn-label"><i class="fa fa-trophy pdf" aria-hidden="true"></i></span>
                          <div>Preorder</div>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="3" class="actions">
													<button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{ url(" back-office/sales-order/1/edit
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
                        <td class="additional">
                          <label>CREDIT TERM (DAYS)</label>
                          <div class="ngin-table-subtitle">N/A</div>
                          <div class="text-grey">(DUE DATE 08/08/2017)</div>
                        </td>
                        <td class="additional" colspan="2">
                          <label>INTERNAL NOTE</label>
                          <div class="small">
                              เกม Product <br>
                              ออกในวันที่ 12/01/2018
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

                <table class="table ngin-table">
                  <thead>
                    <tr>
                      <th class="shipment"></th>
                      <th class="amount">AMOUNT</th>
                      <th class="warehouse">WAREHOUSE</th>
                      <th class="shipping-date">SHIPPING DATE</th>
                      <th class="by">BY</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td rowspan="6" class="shipment">
                        <div class="row">
                          <div class="col-xs-12">
                            <span class="char-total chart" data-percent="35" data-current="350" data-total="1000">
                              <span class="chart-total-display"></span>
                            </span>
                          </div>
                          <div class="col-xs-12">
                            <label class="chart-label">SHIPMENT</label>
                          </div>
                        </div>
                      </td>
                      <td class="amount">50</td>
                      <td class="warehouse">1</td>
                      <td class="shipping-date">02/09/2017</td>
                      <td class="by">Pop</td>
                    </tr>
                    <tr>
                      <td class="amount">50</td>
                      <td class="warehouse">2</td>
                      <td class="shipping-date">01/09/2017</td>
                      <td class="by">Nook</td>
                    </tr>
                    <tr>
                      <td class="amount">10</td>
                      <td class="warehouse">3</td>
                      <td class="shipping-date">29/08/2017</td>
                      <td class="by">cheek</td>
                    </tr>
                    <tr>
                      <td class="amount">10</td>
                      <td class="warehouse">4</td>
                      <td class="shipping-date">28/08/2017</td>
                      <td class="by">M</td>
                    </tr>
                    <tr>
                      <td class="amount">100</td>
                      <td class="warehouse">1</td>
                      <td class="shipping-date">28/08/2017</td>
                      <td class="by">Peart</td>
                    </tr>
                    <tr>
                      <td class="amount">8</td>
                      <td class="warehouse">2</td>
                      <td class="shipping-date">27/08/2017</td>
                      <td class="by">Shining</td>
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
				<div class="panel-group" id="cash" role="tablist" aria-multiselectable="true">
					@for($c = 1; $c <= 4; $c++)
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading{{ 'C'.$c }}">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#cash" href="#collapse{{ 'C'.$c }}" aria-expanded="true" aria-controls="collapse{{ 'C'.$c }}">
                  <table class="table">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td class="status">
                          <div class="approve">
                            @if($c==1)
                            <span class="iq-status"><i class="iq-status-icon fa-approve-all" style="color: #f7931c;"></i> APPROVE</span>
                            @elseif($c==2)
                            <span class="iq-status waiting"><i class="iq-status-icon fa-exclamation" style="color: #f7931c;"></i> WAIT FOR APPROVE</span>
                            @else
                            <span class="iq-status"><i class="fa fa-times-circle-o" style="color: #CC0520; margin-right: 0;"></i> REJECTED</span>
                            @endif
                          </div>
                          <div class="tax-invoice">
                            <button type="button" class="btn btn-ngin btn-default">
  														<span class="btn-label">
  															<i class="fa fa-print new" aria-hidden="true"></i>
  														</span>Tax Invoice
  													</button>
                          </div>
												</td>
                        <td class="details">
													<label style="font-size: 16px;">SO #</label>
													<span class="text-blue">88888</span><br/>

													<label>SALE DATE:</label>
													<span class="text-grey">05/09/2017</span><br/>

                          <label class="text-grey">Sample Company (Headquarters)</label>
												</td>
												<td class="sales">
													<label>SALES</label>
													<div>POP</div>
												</td>
												<td class="amount">
													<label>AMOUNT PAID</label>
													<div>5,000/10,000</div>
												</td>
												<td class="backlog">
													<label>BACKLOG</label>
													<div class="ngin-red">(650)</div>
												</td>
                        <td class="badge">
                          <span class="btn-label"><i class="fa fa-trophy pdf" aria-hidden="true"></i></span>
                          <div>Preorder</div>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="3" class="actions">
													<button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{ url(" back-office/sales-order/1/edit
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
                        <td class="additional">
                          <label>CREDIT TERM (DAYS)</label>
                          <div class="ngin-table-subtitle">N/A</div>
                          <div class="text-grey">(DUE DATE 08/08/2017)</div>
                        </td>
                        <td class="additional" colspan="2">
                          <label>INTERNAL NOTE</label>
                          <div class="small">
                              เกม Product <br>
                              ออกในวันที่ 12/01/2018
                          </div>
                        </td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapse{{ 'C'.$c }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ 'C'.$c }}">
							<div class="panel-body scroll-2">

                <table class="table ngin-table">
                  <thead>
                    <tr>
                      <th class="shipment"></th>
                      <th class="amount">AMOUNT</th>
                      <th class="warehouse">WAREHOUSE</th>
                      <th class="shipping-date">SHIPPING DATE</th>
                      <th class="by">BY</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td rowspan="6" class="shipment">
                        <div class="row">
                          <div class="col-xs-12">
                            <span class="char-total chart" data-percent="35" data-current="350" data-total="1000">
                              <span class="chart-total-display"></span>
                            </span>
                          </div>
                          <div class="col-xs-12">
                            <label class="chart-label">SHIPMENT</label>
                          </div>
                        </div>
                      </td>
                      <td class="amount">50</td>
                      <td class="warehouse">1</td>
                      <td class="shipping-date">02/09/2017</td>
                      <td class="by">Pop</td>
                    </tr>
                    <tr>
                      <td class="amount">50</td>
                      <td class="warehouse">2</td>
                      <td class="shipping-date">01/09/2017</td>
                      <td class="by">Nook</td>
                    </tr>
                    <tr>
                      <td class="amount">10</td>
                      <td class="warehouse">3</td>
                      <td class="shipping-date">29/08/2017</td>
                      <td class="by">cheek</td>
                    </tr>
                    <tr>
                      <td class="amount">10</td>
                      <td class="warehouse">4</td>
                      <td class="shipping-date">28/08/2017</td>
                      <td class="by">M</td>
                    </tr>
                    <tr>
                      <td class="amount">100</td>
                      <td class="warehouse">1</td>
                      <td class="shipping-date">28/08/2017</td>
                      <td class="by">Peart</td>
                    </tr>
                    <tr>
                      <td class="amount">8</td>
                      <td class="warehouse">2</td>
                      <td class="shipping-date">27/08/2017</td>
                      <td class="by">Shining</td>
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
				<div class="panel-group" id="wait-for-shipping" role="tablist" aria-multiselectable="true">
					@for($d = 1; $d <= 4; $d++)
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading{{ 'D'.$d }}">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#wait-for-shipping" href="#collapse{{ 'D'.$d }}" aria-expanded="true" aria-controls="collapse{{ 'D'.$d }}">
                  <table class="table">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td class="status">
                          <div class="approve">
                            @if($d==1)
                            <span class="iq-status"><i class="iq-status-icon fa-approve-all" style="color: #f7931c;"></i> APPROVE</span>
                            @elseif($d==2)
                            <span class="iq-status waiting"><i class="iq-status-icon fa-exclamation" style="color: #f7931c;"></i> WAIT FOR APPROVE</span>
                            @else
                            <span class="iq-status"><i class="fa fa-times-circle-o" style="color: #CC0520; margin-right: 0;"></i> REJECTED</span>
                            @endif
                          </div>
                          <div class="tax-invoice">
                            <button type="button" class="btn btn-ngin btn-default">
  														<span class="btn-label">
  															<i class="fa fa-print new" aria-hidden="true"></i>
  														</span>Tax Invoice
  													</button>
                          </div>
												</td>
                        <td class="details">
													<label style="font-size: 16px;">SO #</label>
													<span class="text-blue">88888</span><br/>

													<label>SALE DATE:</label>
													<span class="text-grey">05/09/2017</span><br/>

                          <label class="text-grey">Sample Company (Headquarters)</label>
												</td>
												<td class="sales">
													<label>SALES</label>
													<div>POP</div>
												</td>
												<td class="amount">
													<label>AMOUNT PAID</label>
													<div>5,000/10,000</div>
												</td>
												<td class="backlog">
													<label>BACKLOG</label>
													<div class="ngin-red">(650)</div>
												</td>
                        <td class="badge">
                          <span class="btn-label"><i class="fa fa-trophy pdf" aria-hidden="true"></i></span>
                          <div>Preorder</div>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="3" class="actions">
													<button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{ url(" back-office/sales-order/1/edit
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
                        <td class="additional">
                          <label>CREDIT TERM (DAYS)</label>
                          <div class="ngin-table-subtitle">N/A</div>
                          <div class="text-grey">(DUE DATE 08/08/2017)</div>
                        </td>
                        <td class="additional" colspan="2">
                          <label>INTERNAL NOTE</label>
                          <div class="small">
                              เกม Product <br>
                              ออกในวันที่ 12/01/2018
                          </div>
                        </td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapse{{ 'D'.$d }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ 'D'.$d }}">
							<div class="panel-body scroll-2">

                <table class="table ngin-table">
                  <thead>
                    <tr>
                      <th class="shipment"></th>
                      <th class="amount">AMOUNT</th>
                      <th class="warehouse">WAREHOUSE</th>
                      <th class="shipping-date">SHIPPING DATE</th>
                      <th class="by">BY</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td rowspan="6" class="shipment">
                        <div class="row">
                          <div class="col-xs-12">
                            <span class="char-total chart" data-percent="35" data-current="350" data-total="1000">
                              <span class="chart-total-display"></span>
                            </span>
                          </div>
                          <div class="col-xs-12">
                            <label class="chart-label">SHIPMENT</label>
                          </div>
                        </div>
                      </td>
                      <td class="amount">50</td>
                      <td class="warehouse">1</td>
                      <td class="shipping-date">02/09/2017</td>
                      <td class="by">Pop</td>
                    </tr>
                    <tr>
                      <td class="amount">50</td>
                      <td class="warehouse">2</td>
                      <td class="shipping-date">01/09/2017</td>
                      <td class="by">Nook</td>
                    </tr>
                    <tr>
                      <td class="amount">10</td>
                      <td class="warehouse">3</td>
                      <td class="shipping-date">29/08/2017</td>
                      <td class="by">cheek</td>
                    </tr>
                    <tr>
                      <td class="amount">10</td>
                      <td class="warehouse">4</td>
                      <td class="shipping-date">28/08/2017</td>
                      <td class="by">M</td>
                    </tr>
                    <tr>
                      <td class="amount">100</td>
                      <td class="warehouse">1</td>
                      <td class="shipping-date">28/08/2017</td>
                      <td class="by">Peart</td>
                    </tr>
                    <tr>
                      <td class="amount">8</td>
                      <td class="warehouse">2</td>
                      <td class="shipping-date">27/08/2017</td>
                      <td class="by">Shining</td>
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
			<div class="tab-pane" id="5">
				<div class="panel-group" id="completed" role="tablist" aria-multiselectable="true">
					@for($e = 1; $e <= 4; $e++)
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading{{ 'E'.$e }}">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#completed" href="#collapse{{ 'E'.$e }}" aria-expanded="true" aria-controls="collapse{{ 'E'.$e }}">
                  <table class="table">
										<tbody>
											<tr>
												<td class="tr-checkbox">
													<input type="checkbox" class="iCheck" />
												</td>
												<td class="status">
                          <div class="approve">
                            @if($e==1)
                            <span class="iq-status"><i class="iq-status-icon fa-approve-all" style="color: #f7931c;"></i> APPROVE</span>
                            @elseif($e==2)
                            <span class="iq-status waiting"><i class="iq-status-icon fa-exclamation" style="color: #f7931c;"></i> WAIT FOR APPROVE</span>
                            @else
                            <span class="iq-status"><i class="fa fa-times-circle-o" style="color: #CC0520; margin-right: 0;"></i> REJECTED</span>
                            @endif
                          </div>
                          <div class="tax-invoice">
                            <button type="button" class="btn btn-ngin btn-default">
  														<span class="btn-label">
  															<i class="fa fa-print new" aria-hidden="true"></i>
  														</span>Tax Invoice
  													</button>
                          </div>
												</td>
                        <td class="details">
													<label style="font-size: 16px;">SO #</label>
													<span class="text-blue">88888</span><br/>

													<label>SALE DATE:</label>
													<span class="text-grey">05/09/2017</span><br/>

                          <label class="text-grey">Sample Company (Headquarters)</label>
												</td>
												<td class="sales">
													<label>SALES</label>
													<div>POP</div>
												</td>
												<td class="amount">
													<label>AMOUNT PAID</label>
													<div>5,000/10,000</div>
												</td>
												<td class="backlog">
													<label>BACKLOG</label>
													<div class="ngin-red">(650)</div>
												</td>
                        <td class="badge">
                          <span class="btn-label"><i class="fa fa-trophy pdf" aria-hidden="true"></i></span>
                          <div>Preorder</div>
												</td>
											</tr>

											<tr>
												<td></td>
												<td colspan="3" class="actions">
													<button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{ url(" back-office/sales-order/1/edit
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
                        <td class="additional">
                          <label>CREDIT TERM (DAYS)</label>
                          <div class="ngin-table-subtitle">N/A</div>
                          <div class="text-grey">(DUE DATE 08/08/2017)</div>
                        </td>
                        <td class="additional" colspan="2">
                          <label>INTERNAL NOTE</label>
                          <div class="small">
                              เกม Product <br>
                              ออกในวันที่ 12/01/2018
                          </div>
                        </td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapse{{ 'E'.$e }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ 'E'.$e }}">
							<div class="panel-body scroll-2">

                <table class="table ngin-table">
                  <thead>
                    <tr>
                      <th class="shipment"></th>
                      <th class="amount">AMOUNT</th>
                      <th class="warehouse">WAREHOUSE</th>
                      <th class="shipping-date">SHIPPING DATE</th>
                      <th class="by">BY</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td rowspan="6" class="shipment">
                        <div class="row">
                          <div class="col-xs-12">
                            <span class="char-total chart" data-percent="35" data-current="350" data-total="1000">
                              <span class="chart-total-display"></span>
                            </span>
                          </div>
                          <div class="col-xs-12">
                            <label class="chart-label">SHIPMENT</label>
                          </div>
                        </div>
                      </td>
                      <td class="amount">50</td>
                      <td class="warehouse">1</td>
                      <td class="shipping-date">02/09/2017</td>
                      <td class="by">Pop</td>
                    </tr>
                    <tr>
                      <td class="amount">50</td>
                      <td class="warehouse">2</td>
                      <td class="shipping-date">01/09/2017</td>
                      <td class="by">Nook</td>
                    </tr>
                    <tr>
                      <td class="amount">10</td>
                      <td class="warehouse">3</td>
                      <td class="shipping-date">29/08/2017</td>
                      <td class="by">cheek</td>
                    </tr>
                    <tr>
                      <td class="amount">10</td>
                      <td class="warehouse">4</td>
                      <td class="shipping-date">28/08/2017</td>
                      <td class="by">M</td>
                    </tr>
                    <tr>
                      <td class="amount">100</td>
                      <td class="warehouse">1</td>
                      <td class="shipping-date">28/08/2017</td>
                      <td class="by">Peart</td>
                    </tr>
                    <tr>
                      <td class="amount">8</td>
                      <td class="warehouse">2</td>
                      <td class="shipping-date">27/08/2017</td>
                      <td class="by">Shining</td>
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
    <script src="{{ asset('js/back-office/sales-order/index.js') }}"></script>
@endsection
