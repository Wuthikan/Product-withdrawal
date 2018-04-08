@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
<link rel="stylesheet" type="text/css" href="{{asset('/css/backOffice/logistic/stock/index.css')}}"/>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
<div class="x_content">
	<section>
		<form class="form-inline form-header">
			<div class="row">
				<div class="col-md-2" >
					<div class="form-group"><button type="button" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-plus" aria-hidden="true"></i></span>Update</button></div>
				</div>
				<div class="col-md-9" >
					<div class="form-group form-fixed-width" >
						<div class="icon-addon addon-sm"><input type="text" placeholder="SEARCH" class="form-control search" id="SEARCH" ><label for="search" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label></div>
					</div>
				</div>
				<div class="col-md-1 text-right" >
					<div class="form-group export"><i class="fa fa-file-text" aria-hidden="true"></i><i class="fa fa-file-excel-o" aria-hidden="true"></i></div>
				</div>
			</div>
		</form>
	</section>
	<div id="exTab2" class="">
		<ul class="nav nav-tabs">
			<li><a href="#1" data-toggle="tab"><span><i class="fa fa-circle-o-notch" aria-hidden="true"></i></span> NGIN</a></li>
			<li class="active"><a href="#2" data-toggle="tab"><span><i class="fa fa-ship	" aria-hidden="true"></i></span> CONSIGNMENT</a></li>
		</ul>
		<div class="tab-content scroll-2">
			<div class="tab-pane" id="1">
				<h3>Notice the gap between the content and tab after applying a background color</h3>
			</div>
			<div class="tab-pane active" id="2">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="col-md-6" style="margin-bottom:10px;">
								<div class="col-sm-6">
									<select class="form-control input-sm">
										<option value="">COMPANY A</option>
										<option value="">COMPANY B</option>
									</select>
								</div>
								<div class="col-sm-6">
									<select class="form-control input-sm">
										<option value="">BRANCH ALL</option>
										<option value="">1</option>
										<option value="">2</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="pull-right">
									<div class="form-group">
										<button type="button" class="btn btn-ngin btn-default">
											<span class="btn-label"><i class="fa fa-question" aria-hidden="true"></i></span>
											INFORMATION STOCK
										</button>
									</div>
									<div class="form-group">
										<p class="stock-date">08/08/2017</p>
									</div>
								</div>
							</div>
						</div>
						<div class="panel-heading panel-stock">
							<h4 class="panel-title">
								<table class="table">
									<tbody>
										<tr>
											<td class="tr-data-small" >
												<b>ITEM </b> 
												<P style="font-size:12px;">88888888 : PS4-G MIITO Lorem ipsum dolor sit amet, consectetuer adipiscing...</P>
											</td>
											<td class="tr-data-small text-center" >
												<b>RESERVATION </b> 
												<P class="p-stock">1000</P>
											</td>
											<td class="tr-data-small text-center" >
												<b>REMAINDER </b>
												<P class="p-stock">350</P>
											</td>
											<td class="tr-data-small text-center" >
												<b>AVAILABLE </b>
												<P class="ngin-green p-stock">650</P>
											</td>
										</tr>
									</tbody>
								</table>
							</h4>
						</div>
						<div class="panel-heading panel-stock">
							<h4 class="panel-title">
								<table class="table">
									<tbody>
										<tr>
											<td class="tr-data-small" >
												<b>ITEM </b> 
												<P style="font-size:12px;">88888888 : PS4-G MIITO Lorem ipsum dolor sit amet, consectetuer adipiscing...</P>
											</td>
											<td class="tr-data-small text-center" >
												<b>RESERVATION </b> 
												<P class="p-stock">1000</P>
											</td>
											<td class="tr-data-small text-center" >
												<b>REMAINDER </b>
												<P class="p-stock">350</P>
											</td>
											<td class="tr-data-small text-center" >
												<b>AVAILABLE </b>
												<P class="ngin-green p-stock">650</P>
											</td>
										</tr>
									</tbody>
								</table>
							</h4>
						</div>
						<div class="panel-heading panel-stock">
							<h4 class="panel-title">
								<table class="table">
									<tbody>
										<tr>
											<td class="tr-data-small" >
												<b>ITEM </b> 
												<P style="font-size:12px;">88888888 : PS4-G MIITO Lorem ipsum dolor sit amet, consectetuer adipiscing...</P>
											</td>
											<td class="tr-data-small text-center" >
												<b>RESERVATION </b> 
												<P class="p-stock">1000</P>
											</td>
											<td class="tr-data-small text-center" >
												<b>REMAINDER </b>
												<P class="p-stock">350</P>
											</td>
											<td class="tr-data-small text-center" >
												<b>AVAILABLE </b>
												<P class="ngin-green p-stock">650</P>
											</td>
										</tr>
									</tbody>
								</table>
							</h4>
						</div>
						<div class="panel-heading panel-stock">
							<h4 class="panel-title">
								<table class="table">
									<tbody>
										<tr>
											<td class="tr-data-small" >
												<b>ITEM </b> 
												<P style="font-size:12px;">88888888 : PS4-G MIITO Lorem ipsum dolor sit amet, consectetuer adipiscing...</P>
											</td>
											<td class="tr-data-small text-center" >
												<b>RESERVATION </b> 
												<P class="p-stock">1000</P>
											</td>
											<td class="tr-data-small text-center" >
												<b>REMAINDER </b>
												<P class="p-stock">350</P>
											</td>
											<td class="tr-data-small text-center" >
												<b>AVAILABLE </b>
												<P class="ngin-green p-stock">650</P>
											</td>
										</tr>
									</tbody>
								</table>
							</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</div>
@endsection
@section('top-right-sidebar')
<div class="x_title"><span class="left">Top Product เดือนที่แล้ว</span><span class="right"></span></div>
<div class="x_content">
	<ul class="list-unstyled scroll-view">
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
						<li class="media event">
							<a class="pull-left border-aero"><img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded"></a>
							<div class="media-body">
								<a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>
								<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
								</div>
							</li>
							<li class="media event">
								<a class="pull-left border-aero"><img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded"></a>
								<div class="media-body">
									<a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>
									<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
									</div>
								</li>
								<li class="media event">
									<a class="pull-left border-aero"><img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded"></a>
									<div class="media-body">
										<a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>
										<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
										</div>
									</li>
									<li class="media event">
										<a class="pull-left border-aero"><img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded"></a>
										<div class="media-body">
											<a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>
											<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
											</div>
										</li>
										<li class="media event">
											<a class="pull-left border-aero"><img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded"></a>
											<div class="media-body">
												<a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>
												<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
												</div>
											</li>
										</ul>
									</div>
									@endsection
									@section('bottom-right-sidebar')
									<div class="x_title"><span class="left">NEW RELEASES</span></div>
									<div class="x_content">
										<ul class="list-unstyled scroll-view">
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
															<li class="media event">
																<a class="pull-left border-aero"><img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded"></a>
																<div class="media-body">
																	<a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>
																	<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
																	</div>
																</li>
																<li class="media event">
																	<a class="pull-left border-aero"><img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded"></a>
																	<div class="media-body">
																		<a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>
																		<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
																		</div>
																	</li>
																	<li class="media event">
																		<a class="pull-left border-aero"><img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded"></a>
																		<div class="media-body">
																			<a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>
																			<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
																			</div>
																		</li>
																		<li class="media event">
																			<a class="pull-left border-aero"><img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded"></a>
																			<div class="media-body">
																				<a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>
																				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
																				</div>
																			</li>
																			<li class="media event">
																				<a class="pull-left border-aero"><img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded"></a>
																				<div class="media-body">
																					<a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>
																					<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
																					</div>
																				</li>
																			</ul>
																		</div>
																		@endsection
																		@section('script')
																		<script src="{{asset('js/back-office/home/index.js')}}"></script><script type="text/javascript">$(document).ready(function(){
	//Set Label Header Page
	$('#lbHeaderPage').html("<h3>STOCK | <span>INDEX</span></h3>");}); 
</script>
@endsection