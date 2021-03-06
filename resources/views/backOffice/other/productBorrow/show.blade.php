@extends('layouts.backOffice.template-with-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/other/product-borrow/show.css')}}"/>
@endsection

@section('module_name', 'PRODUCT BORROW')
@section('page_name', 'SHOW')


@section('body')
<div class="product-borrow-show scroll-2" style="height: 100vh;">
	<div style="margin:0 20px;">
		<div class="row">
			<div class="col-xs-12">
				<h4 class="font-black text-uppercase">Product Borrow #1</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<img class="img-center" src="{{asset('/images/logo.png')}}" width="100" height="100" alt="">
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<h4 class="show-date font-black">08 AUGUST 2018</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-xs-12">
						<strong class="font-black">BORROWER:</strong> K. Lorem ipsum, sale manager
					</div>

				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<strong class="font-black">BORROW DATE:</strong>
						04/09/2017
					</div>
					<div class="col-xs-12 col-sm-6">
						<strong class="font-black">RETURN DATE:</strong>
						10/12/2017
					</div>
				</div>

			</div>               
		</div>
		<div class="row activity">
			<div class="col-xs-12 header  font-black">
				<strong>Borrowed activity</strong>
			</div>
			<div class="col-xs-12">
				<p class="text-uppercase font-black indent">
					"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor inreprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
				</p>
			</div>
		</div>

		<div class="row description">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<table class="table ngin-table">
					<thead>
						<tr>
							<th class="col-md-2">CODE</th>
							<th class="col-md-7 text-left">DESCRIPTION</th>
							<th class="col-md-3">QTY</th>
						</tr>
					</thead>
					<tbody class="font-black">
						<tr>
							<td>
								PCAS-00073
							</td>
							<td class="text-left">
								<label><strong>PS4-G</strong></label>:
								<span class="font-weight">LOREM IPSUM DOLOR SIT AMET. CONSECTETUER ADIPISCING ELIT.</span>
							</td>
							<td>20</td>
						</tr>

						<tr>
							<td>
								PCAS-00073
							</td>
							<td class="text-left">
								<span>LOREM IPSUM DOLOR SIT AMET. CONSECTETUER ADIPISCING ELIT.</span>
							</td>
							<td>20</td>
						</tr>

						<tr>
							<td>
								PCAS-00073
							</td>
							<td class="text-left">
								<span>LOREM IPSUM DOLOR SIT</span>
							</td>
							<td>20</td>
						</tr>

						<tr>
							<td>
								PCAS-00073
							</td>
							<td class="text-left">
								<span>LOREM IPSUM DOLOR SIT AMET.</span>
							</td>
							<td>20</td>
						</tr>

						<tr>
							<td>
								PCAS-00073
							</td>
							<td class="text-left">
								<span>LOREM IPSUM DOLOR</span>
							</td>
							<td>20</td>
						</tr>

						<tr>
							<td>
								PCAS-00073
							</td>
							<td class="text-left">
								<span>LOREM IPSUM DOLOR SIT AMET. CONSECTETUER ADIPISCING ELIT.</span>
							</td>
							<td>20</td>
						</tr>

						<tr>
							<td>
								PCAS-00073
							</td>
							<td class="text-left">
								<span>LOREM IPSUM DOLOR SIT AMET. CONSECTETUER ADIPISCING ELIT.</span>
							</td>
							<td>20</td>
						</tr>

						<tr>
							<td>
								PCAS-00073
							</td>
							<td class="text-left">
								<span>LOREM IPSUM DOLOR SIT AMET. CONSECTETUER ADIPISCING ELIT.</span>
							</td>
							<td>20</td>
						</tr>
					</tbody>
					</table>
						<div class="table-footer">
							<div class="row">
								<div class="col-xs-6">
									<div class="remark">
										<h6>REMARK:</h6>
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae odio earum tenetur possimus quaerat animi illo officiis? Delectus exercitationem illum dignissimos error aperiam nesciunt, sapiente quod ut esse autem sed.
									</div>
								</div>
								<div class="col-xs-6">
									<div class="row">
										<div class="col-xs-6 text-right">
											<p><strong>Total</strong></p>
											<p><strong>Discount</strong></p>
											<p><strong>Total Before VAT</strong></p>
											<p><strong>Vat 7%</strong></p>
											<br><br>
											<p class="total-label">Total</p>
										</div>
										<div class="col-xs-6 text-right">
											<p>88,888 THB</p>
											<p>88,888 THB</p>
											<p>888 THB</p>
											<p>888 THB</p>
											<br><br>
											<p class="total-price">8,888,888 THB</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row show-sign font-black">
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-12 text-center" style="margin-bottom: 10px">
								<div class="col-sm-3 sign-word"><b>SIGNED : </b></div>
								<div class="col-sm-6 sign-underline"> </div>
								<div class="col-sm-3"></div>
							</div>
							<div class="col-sm-12 text-center">
								<p><b>(LOREM IPSUM)</b></p>
							</div>
						</div>

					</div>
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-12 text-center" style="margin-bottom: 10px">
								<div class="col-sm-4 sign-word"><b>APPROVER : </b></div>
								<div class="col-sm-6 sign-underline"> </div>
								<div class="col-sm-2"></div>
							</div>
							<div class="col-sm-4">
								
							</div>
							<div class="col-sm-6 text-center">
								<p><b>(LOREM IPSUM)</b></p>
							</div>
						</div>
					</div>
				</div>

			</div>
	</div>
	
@endsection

@section('right-sidebar')
<div class="x_title">
	<div class="x_content" style="padding:15px">
		<div class="row form-group">
			<div class="col-sm-12 col-md-12 col-lg-12 text-center log-margin-buttom" >	
				<button type="button" class="btn btn-ngin btn-default" style="width: 70%;" data-toggle="modal" data-target="#myModal-1">
					<span class="btn-label" style="float: left;"><i class="fa fa-file-text-o info" aria-hidden="true"></i></span>
					<div style="display: inherit; margin-top: 3px;">Log</div>
				</button>
			</div>
		</div>
		
		<div class="row form-group">
			<div class="col-sm-12 col-md-12 col-lg-12 text-center email-margin-buttom">	
				<button type="button" class="btn btn-ngin btn-default" style="width: 70%;">
					<span class="btn-label"  style="float: left;"><i class="fa fa-envelope-o info" aria-hidden="true"></i></span>
					<div style="display: inherit; margin-top: 3px;">Send email</div>
				</button>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-sm-12 col-md-12 col-lg-12 text-center print-margin-buttom">	
				<button type="button" class="btn btn-ngin btn-default" style="width: 70%;">
					<span class="btn-label"  style="float: left;"><i class="fa fa-print info" aria-hidden="true"></i></span>
					<div style="display: inherit; margin-top: 3px;">Print</div>
				</button>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-sm-12 col-md-12 col-lg-12 text-center">	
				<table  style="margin-left: 25px;">
					<tr>
						<td class="text-rigth">APPROVED BY<span>:</span></td>
						<td class="td-padding-left text-left">LOREM IPSUM</td>
					</tr>
					<tr>
						<td class="text-rigth">APPROVED DATE<span>:</span></td>
						<td class="td-padding-left text-left">18/20/57</td>
					</tr>
					<tr>
						<td class="text-rigth">APPROVED TIME<span>:</span></td>
						<td class="td-padding-left text-left">18:00</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-sm-12 col-md-12 col-lg-12 text-center unapprve">	
				<button type="button" class="btn btn-ngin btn-default danger-no-icon" style="width: 100%;">
					UnApprove
					<i class="fa fa-times-circle-o" aria-hidden="true"></i>
				</button>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-sm-12 col-md-12 col-lg-12 text-center cencel">	
				<button type="button" class="btn btn-ngin btn-default ngin-no-icon" style="width: 100%;">
					Cancel Document
					<i class="fa fa-exclamation-circle" aria-hidden="true"></i>
				</button>
			</div>
		</div>
	</div>
</div>
@endsection

@section('modal')
<!-- Modal -->
<div id="myModal-1" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><i class="fa fa-file-text-o" aria-hidden="true"></i>Log</h4>
			</div>
			<div class="modal-body scroll-2">										
				<table class="table ngin-table">
					<thead>
						<tr>
							<th>DATE</th>
							<th>USER</th>
							<th>CHANNEL</th>
							<th>ACTION</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>02/09/2017</td>
							<td>A</td>
							<td>App</td>
							<td>New</td>
						</tr>
						<tr>
							<td>01/09/2017</td>
							<td>B</td>
							<td>App</td>
							<td>Approve</td>
						</tr>
						<tr>
							<td>29/08/2017</td>
							<td>C</td>
							<td>App</td>
							<td>UnApprove</td>
						</tr>
						<tr>
							<td>28/08/2017</td>
							<td>D</td>
							<td>App</td>
							<td>Approve</td>
						</tr>
						<tr>
							<td>27/08/2017</td>
							<td>E</td>
							<td>App</td>
							<td>Delete</td>
						</tr>

					</tbody>
				</table>



			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#myModal-1">
					<span class="btn-label " style="padding: 3px 10px!important;"><i class="fa fa-thumbs-o-up ngin-green" aria-hidden="true"></i></span>OK</button>
				</div>
			</div>

		</div>
	</div>

@endsection


@section('script')
    <script src="{{ asset('js/back-office/other/product-borrow/show.js') }}"></script>
@endsection