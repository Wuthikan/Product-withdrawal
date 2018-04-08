@extends('layouts.backOffice.template-with-right-sidebar')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/home/index.css')}}"/>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
<div class="x_content">
	<section class="section-header">
		<form class="form-inline form-header">
			<div class="row">
				<table>
					<tr>
						<td class="col-1">
							<div class="col-1-content" >
								<div class="form-group">
									<button type="button"  class="btn btn-ngin btn-default" onclick="window.location='{{ url("back-office/inquiry/create") }}'">
										<span class="btn-label"><i class="fa fa-plus" aria-hidden="true"></i></span>NEW
									</button>
								</div>
								<div class="form-group button-2">
									<button type="button"    class="btn btn-ngin btn-default">
										<span class="btn-label"><i class="fa fa-check-circle-o ngin-green" aria-hidden="true"></i></span>Approve ALL
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
								<div class="form-group export">
									<i class="fa fa-file-text" aria-hidden="true"></i>
									<i class="fa fa-file-excel-o" aria-hidden="true"></i>
								</div>
								<div class="form-group">
									<button type="button" class="btn btn-ngin btn-default">
										<span class="btn-label"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></i></span>Delete ALL
									</button>
								</div>

							</div>
						</td>
					</tr>
				</table>
			</div>
		</form>
	</section>
	<section>

		<div id="exTab2" class="">	
			<ul class="nav nav-tabs">
				<li class="active">
					
					<a  href="#1" data-toggle="tab">
						<span>
							<i class="fa fa-circle-o-notch" aria-hidden="true"></i>
						</span>
					PENDING FOR APPROVAL</a>
				</li>
				<li><a href="#2" data-toggle="tab">
					<span>
						<i class="fa fa-check-circle-o" aria-hidden="true"></i>
					</span>
				APPROVED</a>
			</li>
			<li><a href="#3" data-toggle="tab">
				<span>
					<i class="fa fa-hourglass-end" aria-hidden="true"></i>
				</span>
			BACKLOG</a>
		</li>
		<li><a href="#3" data-toggle="tab">
			<span>
				<i class="fa fa-check" aria-hidden="true"></i>
			</span>
		COMPLETED</a>
	</li>
</ul>

<div class="tab-content scroll-2">
	<div class="tab-pane active" id="1">
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
					<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							<table class="table">
								<tbody>
									<tr>
										<td class="tr-checkbox"  >
											<input type="checkbox" class="iCheck" />
										</td>
										<td style="font-size: 14px" ><b>IQ #1</b>
											<p style="font-size: 18px;margin-top: 10px;">04/09/2017</p>
										</td>
										<td style="font-size: 14px" ><b>SUPPLIER :</b> บริษัท ตัวอย่าง จำกัด
											<p style="font-size: 12px;margin-top: 10px;"><b>สาขา :</b>สำนักงานใหญ่</p>
										</td>
										<td class="tr-data-small" ><b>ORDERED</b> <P>1000</P></td>
										<td class="tr-data-small" ><b>RECEIVED </b><P>350</P></td>
										<td class="tr-data-small"  ><b>BACKLOG </b><P class="ngin-red">(650)</P></td>
									</tr>
									<tr>
										<td></td>
										<td colspan="4">
											<button type="button" class="btn btn-ngin btn-default">
												<span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit</button>
												<button type="button" class="btn btn-ngin btn-default">
													<span class="btn-label"><i class="fa fa-files-o" aria-hidden="true"></i></span>Duplicate</button>
													<button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label"><i class="fa fa-undo info" aria-hidden="true"></i></span>Undo</button>
														<button type="button" class="btn btn-ngin btn-default">
															<span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete</button>
														</td>

														<td >
															<button type="button" class="btn btn-ngin btn-default">
																<span class="btn-label"><i class="fa fa-plus" aria-hidden="true"></i></span>New PO</button>

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
														<th>Firstname</th>
														<th>Lastname</th>
														<th>Email</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>John</td>
														<td>Doe</td>
														<td>john@example.com</td>
													</tr>
													<tr>
														<td>Mary</td>
														<td>Moe</td>
														<td>mary@example.com</td>
													</tr>

													<tr>
														<td colspan="3" style="text-align: center;">

															<label for="exampleInputPassword1"></label>

															<span class="chart" data-percent="86" id="chart_red">
																<span class="percent" >85%</span>
															</span>

															<span class="chart" data-percent="75"  id="chart_green">
																<span class="percent">75%</span>
															</span>

															

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
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												<table class="table">
													<tbody>
														<tr>
															<td class="tr-checkbox"  >
																<input type="checkbox" class="iCheck"></td>
																<td style="font-size: 14px" ><b>IQ #2</b>
																	<p style="font-size: 18px;margin-top: 10px;">04/09/2017</p>
																</td>
																<td style="font-size: 14px" ><b>SUPPLIER :</b> บริษัท ตัวอย่าง จำกัด
																	<p style="font-size: 12px;margin-top: 10px;"><b>สาขา :</b>สำนักงานใหญ่</p>
																</td>
																<td class="tr-data-small" ><b>ORDERED</b> <P>1000</P></td>
																<td class="tr-data-small" ><b>RECEIVED </b><P>350</P></td>
																<td class="tr-data-small"  ><b>BACKLOG </b><P class="ngin-red">(650)</P></td>
															</tr>
															<tr>
																<td></td>
																<td colspan="4">
																	<button type="button" class="btn btn-ngin btn-default">
																		<span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit</button>
																		<button type="button" class="btn btn-ngin btn-default">
																			<span class="btn-label"><i class="fa fa-files-o" aria-hidden="true"></i></span>Duplicate</button>
																			<button type="button" class="btn btn-ngin btn-default">
																				<span class="btn-label"><i class="fa fa-undo info" aria-hidden="true"></i></span>Undo</button>
																				<button type="button" class="btn btn-ngin btn-default">
																					<span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete</button>
																				</td>

																				<td >
																					<button type="button" class="btn btn-ngin btn-default">
																						<span class="btn-label"><i class="fa fa-plus" aria-hidden="true"></i></span>New PO</button>

																					</td>
																				</tr>
																			</tbody>
																		</table>
																	</a>
																</h4>
															</div>
															<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
																<div class="panel-body scroll-2">
																	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
																</div>
															</div>
														</div>
														<div class="panel panel-default">
															<div class="panel-heading" role="tab" id="headingThree">
																<h4 class="panel-title">
																	<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
																		<table class="table">
																			<tbody>
																				<tr>
																					<td class="tr-checkbox"  >
																						<input type="checkbox" class="iCheck" ></td>
																						<td style="font-size: 14px" ><b>IQ #3</b>
																							<p style="font-size: 18px;margin-top: 10px;">04/09/2017</p>
																						</td>
																						<td style="font-size: 14px" ><b>SUPPLIER :</b> บริษัท ตัวอย่าง จำกัด
																							<p style="font-size: 12px;margin-top: 10px;"><b>สาขา :</b>สำนักงานใหญ่</p>
																						</td>
																						<td class="tr-data-small" ><b>ORDERED</b> <P>1000</P></td>
																						<td class="tr-data-small" ><b>RECEIVED </b><P>350</P></td>
																						<td class="tr-data-small"  ><b>BACKLOG </b><P class="ngin-red">(650)</P></td>
																					</tr>
																					<tr>
																						<td></td>
																						<td colspan="4">
																							<button type="button" class="btn btn-ngin btn-default">
																								<span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit</button>
																								<button type="button" class="btn btn-ngin btn-default">
																									<span class="btn-label"><i class="fa fa-files-o" aria-hidden="true"></i></span>Duplicate</button>
																									<button type="button" class="btn btn-ngin btn-default">
																										<span class="btn-label"><i class="fa fa-undo info" aria-hidden="true"></i></span>Undo</button>
																										<button type="button" class="btn btn-ngin btn-default">
																											<span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete</button>
																										</td>

																										<td >
																											<button type="button" class="btn btn-ngin btn-default">
																												<span class="btn-label"><i class="fa fa-plus" aria-hidden="true"></i></span>New PO</button>

																											</td>
																										</tr>
																									</tbody>
																								</table>
																							</a>
																						</h4>
																					</div>
																					<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
																						<div class="panel-body scroll-2" st>
																							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="tab-pane" id="2">
																			<h3>Notice the gap between the content and tab after applying a background color</h3>
																		</div>
																		<div class="tab-pane" id="3">
																			<h3>add clearfix to tab-content (see the css)</h3>
																		</div>
																	</div>
																</div>	
															</section>
														</div>



														@endsection
														@section('right-sidebar')
														<div class="x_title">
															<span class="left">STOCK ใกล้หมด</span>
															<span class="right">ของคงเหลือ/Minimun</span>
														</div>
														<div class="x_content">
															<ul class="list-unstyled  scroll-view">
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
																			<img src="http://www.ngin.co.th/data/product/150727114252_prod_50.jpg" alt="" class="img-rounded">
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
																				<a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>

																				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>

																				</div>
																			</li>
																			<li class="media event">
																				<a class="pull-left border-aero">
																					<img src="http://www.ngin.co.th/data/product/150727114252_prod_50.jpg" alt="" class="img-rounded">
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
																						<a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>

																						<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>

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
																								<a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>

																								<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>

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
																										<a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>

																										<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>

																										</div>
																									</li>
																								</ul>
																							</div>

																							@endsection

																							@section('script')
																							<script src="{{ asset('js/back-office/home/index.js') }}"></script>
																							<script type="text/javascript">
																								$(document).ready(function(){
                       //Set Label Header Page
                       $('#lbHeaderPage').html("<h3>INQUIRY | <span>INDEX</span></h3>");
                   });
               </script>
               @endsection