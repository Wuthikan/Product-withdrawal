@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/quota/index.css')}}" />
@endsection

@section('module_name', 'QUOTA')
@section('page_name', 'INDEX')

@section('body')
<div class="x_content">
	<section class="section-header-index">
    <form class="form-inline form-header-index">
      <div class="row">
          <table>
          <tr>
              <td class="col-1">
              <div class="">
                  <div class="form-group form-fixed-width" >
                  <div class="icon-addon addon-sm">
                      <input  type="text" placeholder="SEARCH" class="form-control search" id="SEARCH" >
                      <label for="search"  class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
                  </div>
                  </div>
              </div>
              </td>
              <td class="col-3 text-right">

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

					@for($a=1;$a<=4;$a++)
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading{{ 'A'.$a }}">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapse{{ 'A'.$a }}" aria-expanded="true" aria-controls="collapse{{ 'A'.$a }}">
										<table class="table quota-collape">
											<tbody>
												<tr>
													<td class="product-name col-sm-7">
														<label>PRODUCT NAME</label>
														<div>PS4 - G: FINAL FANTASY XV [R1] (EN/TH)</div>
													</td>
													<td class="status col-sm-3">
														<span class="iq-status"><i class="iq-status-icon fa-approve-all"></i> APPROVE</span>
													</td>
													<td class="quota-point col-sm-2">
														<label>QUOTA</label>
														<div>
															<span class="current">5,000</span> / 15,000
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

									<div class="quota-content">
										<div class="content left">
											<div class="text-normal mb-10">PR DATE:</div>
											<div>Remarks:</div>
										</div>
										<div class="content right">
											<div class="scroll-content">
												@for( $i = 0; $i < 6; $i++)
													<div class="graph-item">
														<div class="chart-box">
															<canvas class="content_pie"></canvas>
														</div>
														<p class="text-normal">PRE ORDER</p>
														<p class="text-center">Lorem Ipsum Dolor Sit</p>
														<button type="button" class="btn btn-ngin btn-default">
															<span class="btn-label">
																<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
															</span>Edit
														</button>
													</div>
												@endfor
											</div>
											<div class="graph-info">
												<ul class="list-inline list-unstyled">
													<li><span class="chart-col tha"></span> THA</li>
													<li><span class="chart-col hk"></span> HK</li>
													<li><span class="chart-col sin"></span> SIN</li>
													<li><span class="chart-col cn"></span> CN</li>
													<li><span class="chart-col my"></span> MY</li>
												</ul>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					@endfor

				</div>
			</div>
			<!--  tab  !-->



			<!--  tab  !-->
			<div class="tab-pane" id="2">
				<div class="panel-group " id="backlog" role="tablist" aria-multiselectable="true">

						@for($b=1;$b<=4;$b++)
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading{{ 'B'.$b }}">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapse{{ 'B'.$b }}" aria-expanded="true" aria-controls="collapse{{ 'B'.$b }}">
										<table class="table quota-collape">
											<tbody>
												<tr>
													<td class="product-name col-sm-7">
														<label>PRODUCT NAME</label>
														<div>PS4 - G: FINAL FANTASY XV [R1] (EN/TH)</div>
													</td>
													<td class="status col-sm-3">
														<span class="iq-status"><i class="iq-status-icon fa-approve-all"></i> APPROVE</span>
													</td>
													<td class="quota-point col-sm-2">
														<label>QUOTA</label>
														<div>
															<span class="current">5,000</span> / 15,000
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

									<div class="quota-content">
										<div class="content left">
											<div class="text-normal mb-10">PR DATE:</div>
											<div>Remarks:</div>
										</div>
										<div class="content right">
											<div class="scroll-content">
												@for( $i = 0; $i < 6; $i++)
													<div class="graph-item">
														<div class="chart-box">
															<canvas class="content_pie"></canvas>
														</div>
														<p class="text-normal">PRE ORDER</p>
														<p class="text-center">Lorem Ipsum Dolor Sit</p>
														<button type="button" class="btn btn-ngin btn-default">
															<span class="btn-label">
																<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
															</span>Edit
														</button>
													</div>
												@endfor
											</div>
											<div class="graph-info">
												<ul class="list-inline list-unstyled">
													<li><span class="chart-col tha"></span> THA</li>
													<li><span class="chart-col hk"></span> HK</li>
													<li><span class="chart-col sin"></span> SIN</li>
													<li><span class="chart-col cn"></span> CN</li>
													<li><span class="chart-col my"></span> MY</li>
												</ul>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					@endfor

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
									<table class="table quota-collape">
										<tbody>
											<tr>
												<td class="product-name col-sm-7">
													<label>PRODUCT NAME</label>
													<div>PS4 - G: FINAL FANTASY XV [R1] (EN/TH)</div>
												</td>
												<td class="status col-sm-3">
													<span class="iq-status"><i class="iq-status-icon fa-approve-all"></i> APPROVE</span>
												</td>
												<td class="quota-point col-sm-2">
													<label>QUOTA</label>
													<div>
														<span class="current">5,000</span> / 15,000
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body scroll-2">

								<div class="quota-content">
									<div class="content left">
										<div class="text-normal mb-10">PR DATE:</div>
										<div>Remarks:</div>
									</div>
									<div class="content right">
										<div class="scroll-content">
											@for( $i = 0; $i < 6; $i++)
												<div class="graph-item">
													<div class="chart-box">
														<canvas class="content_pie"></canvas>
													</div>
													@if( $i === 0 )
														<p class="text-normal">PRE ORDER</p>
														@else
														<p class="text-normal">{{ '0'.$i }}/{{ '0'.$i }}/2018</p>
													@endif
													<p class="text-center">Lorem Ipsum Dolor Sit</p>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
														</span>Edit
													</button>
												</div>
											@endfor
										</div>
										<div class="graph-info">
											<ul class="list-inline list-unstyled">
												<li><span class="chart-col tha"></span> THA</li>
												<li><span class="chart-col hk"></span> HK</li>
												<li><span class="chart-col sin"></span> SIN</li>
												<li><span class="chart-col cn"></span> CN</li>
												<li><span class="chart-col my"></span> MY</li>
											</ul>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
									<table class="table quota-collape">
										<tbody>
											<tr>
												<td class="product-name col-sm-7">
													<label>PRODUCT NAME</label>
													<div>PS4 - G: CRASH BANDICOOT Standart Edition (R2_JP)</div>
												</td>
												<td class="status col-sm-3">
													<span class="iq-status"><i class="iq-status-icon fa fa-exclamation"></i> WAIRING FOR APPROVE</span>
												</td>
												<td class="quota-point col-sm-2">
													<label>QUOTA</label>
													<div>
														<span class="current">888</span> / 10,000
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body scroll-2">

								<div class="quota-content">
									<div class="content left">
										<div class="text-normal mb-10">PR DATE:</div>
										<div>Remarks:</div>
									</div>
									<div class="content right">
										<div class="scroll-content">
											@for( $i = 0; $i < 6; $i++)
												<div class="graph-item">
													<div class="chart-box">
														<canvas class="content_pie"></canvas>
													</div>
													<p class="text-normal">PRE ORDER</p>
													<p class="text-center">Lorem Ipsum Dolor Sit</p>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
														</span>Edit
													</button>
												</div>
											@endfor
										</div>
										<div class="graph-info">
											<ul class="list-inline list-unstyled">
												<li><span class="chart-col tha"></span> THA</li>
												<li><span class="chart-col hk"></span> HK</li>
												<li><span class="chart-col sin"></span> SIN</li>
												<li><span class="chart-col cn"></span> CN</li>
												<li><span class="chart-col my"></span> MY</li>
											</ul>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingthree">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapsethree" aria-expanded="true" aria-controls="collapsethree">

									<table class="table quota-collape">
										<tbody>
											<tr>
												<td class="product-name col-sm-7">
													<label>PRODUCT NAME</label>
													<div>PS4 - G: RESIDENT EVIL VII Standart Edition (R3) [EN/TH]</div>
												</td>
												<td class="status col-sm-3">
														<span class="iq-status"><i class="iq-status-icon fa-approve-all"></i> APPROVE</span>
												</td>
												<td class="quota-point col-sm-2">
													<label>QUOTA</label>
													<div>
														<span class="current">0</span> / 5,000
													</div>
												</td>
											</tr>
										</tbody>
									</table>

								</a>
							</h4>
						</div>
						<div id="collapsethree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthree">
							<div class="panel-body scroll-2">

								<div class="quota-content">
									<div class="content left">
										<div class="text-normal mb-10">PR DATE:</div>
										<div>Remarks:</div>
									</div>
									<div class="content right">
										<div class="scroll-content">
											@for( $i = 0; $i < 6; $i++)
												<div class="graph-item">
													<div class="chart-box">
														<canvas class="content_pie"></canvas>
													</div>
													<p class="text-normal">PRE ORDER</p>
													<p class="text-center">Lorem Ipsum Dolor Sit</p>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
														</span>Edit
													</button>
												</div>
											@endfor
										</div>
										<div class="graph-info">
											<ul class="list-inline list-unstyled">
												<li><span class="chart-col tha"></span> THA</li>
												<li><span class="chart-col hk"></span> HK</li>
												<li><span class="chart-col sin"></span> SIN</li>
												<li><span class="chart-col cn"></span> CN</li>
												<li><span class="chart-col my"></span> MY</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingfour">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapsefour" aria-expanded="true" aria-controls="collapsefour">

									<table class="table quota-collape">
										<tbody>
											<tr>
												<td class="product-name col-sm-7">
													<label>PRODUCT NAME</label>
													<div>PS4 - G: RESIDENT EVIL VII Standart Edition (R3) [EN/TH]</div>
												</td>
												<td class="status col-sm-3">
														<span class="iq-status"><i class="iq-status-icon fa-approve-all"></i> APPROVE</span>
												</td>
												<td class="quota-point col-sm-2">
													<label>QUOTA</label>
													<div>
														<span class="current">0</span> / 5,000
													</div>
												</td>
											</tr>
										</tbody>
									</table>

								</a>
							</h4>
						</div>
						<div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
							<div class="panel-body scroll-2">

								<div class="quota-content">
									<div class="content left">
										<div class="text-normal mb-10">PR DATE:</div>
										<div>Remarks:</div>
									</div>
									<div class="content right">
										<div class="scroll-content">
											@for( $i = 0; $i < 6; $i++)
												<div class="graph-item">
													<div class="chart-box">
														<canvas class="content_pie"></canvas>
													</div>
													<p class="text-normal">PRE ORDER</p>
													<p class="text-center">Lorem Ipsum Dolor Sit</p>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
														</span>Edit
													</button>
												</div>
											@endfor
										</div>
										<div class="graph-info">
											<ul class="list-inline list-unstyled">
												<li><span class="chart-col tha"></span> THA</li>
												<li><span class="chart-col hk"></span> HK</li>
												<li><span class="chart-col sin"></span> SIN</li>
												<li><span class="chart-col cn"></span> CN</li>
												<li><span class="chart-col my"></span> MY</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingfive">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapsefive" aria-expanded="true" aria-controls="collapsefive">

									<table class="table quota-collape">
										<tbody>
											<tr>
												<td class="product-name col-sm-7">
													<label>PRODUCT NAME</label>
													<div>PS4 - G: RESIDENT EVIL VII Standart Edition (R3) [EN/TH]</div>
												</td>
												<td class="status col-sm-3">
														<span class="iq-status"><i class="iq-status-icon fa-approve-all"></i> APPROVE</span>
												</td>
												<td class="quota-point col-sm-2">
													<label>QUOTA</label>
													<div>
														<span class="current">0</span> / 5,000
													</div>
												</td>
											</tr>
										</tbody>
									</table>

								</a>
							</h4>
						</div>
						<div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
							<div class="panel-body scroll-2">

								<div class="quota-content">
									<div class="content left">
										<div class="text-normal mb-10">PR DATE:</div>
										<div>Remarks:</div>
									</div>
									<div class="content right">
										<div class="scroll-content">
											@for( $i = 0; $i < 6; $i++)
												<div class="graph-item">
													<div class="chart-box">
														<canvas class="content_pie"></canvas>
													</div>
													@if( $i === 0 )
														<p class="text-normal">PRE ORDER</p>
														@else
														<p class="text-normal">01/01/2018</p>
													@endif
													<p class="text-center">Lorem Ipsum Dolor Sit</p>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
														</span>Edit
													</button>
												</div>
											@endfor
										</div>
										<div class="graph-info">
											<ul class="list-inline list-unstyled">
												<li><span class="chart-col tha"></span> THA</li>
												<li><span class="chart-col hk"></span> HK</li>
												<li><span class="chart-col sin"></span> SIN</li>
												<li><span class="chart-col cn"></span> CN</li>
												<li><span class="chart-col my"></span> MY</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
			<!--  tab  !-->


			<!--  tab  !-->
			<div class="tab-pane" id="4">
				<div class="panel-group " id="backlog" role="tablist" aria-multiselectable="true">

						@for($c=1;$c<=4;$c++)
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading{{ 'C'.$c }}">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapse{{ 'C'.$c }}" aria-expanded="true" aria-controls="collapse{{ 'C'.$c }}">
										<table class="table quota-collape">
											<tbody>
												<tr>
													<td class="product-name col-sm-7">
														<label>PRODUCT NAME</label>
														<div>PS4 - G: FINAL FANTASY XV [R1] (EN/TH)</div>
													</td>
													<td class="status col-sm-3">
														<span class="iq-status"><i class="iq-status-icon fa-approve-all"></i> APPROVE</span>
													</td>
													<td class="quota-point col-sm-2">
														<label>QUOTA</label>
														<div>
															<span class="current">5,000</span> / 15,000
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

									<div class="quota-content">
										<div class="content left">
											<div class="text-normal mb-10">PR DATE:</div>
											<div>Remarks:</div>
										</div>
										<div class="content right">
											<div class="scroll-content">
												@for( $i = 0; $i < 6; $i++)
													<div class="graph-item">
														<div class="chart-box">
															<canvas class="content_pie"></canvas>
														</div>
														<p class="text-normal">PRE ORDER</p>
														<p class="text-center">Lorem Ipsum Dolor Sit</p>
														<button type="button" class="btn btn-ngin btn-default">
															<span class="btn-label">
																<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
															</span>Edit
														</button>
													</div>
												@endfor
											</div>
											<div class="graph-info">
												<ul class="list-inline list-unstyled">
													<li><span class="chart-col tha"></span> THA</li>
													<li><span class="chart-col hk"></span> HK</li>
													<li><span class="chart-col sin"></span> SIN</li>
													<li><span class="chart-col cn"></span> CN</li>
													<li><span class="chart-col my"></span> MY</li>
												</ul>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					@endfor

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script src="{{ asset('js/back-office/quota/index.js') }}"></script>
@endsection
