@extends('layouts.backOffice.template-with-right-sidebar')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/inquiry/show.css')}}"/>
@endsection

@section('module_name', 'INQUIRY')
@section('page_name', 'SHOW')

@section('body')
<div class="panel-content inquiry-show-content scroll-2" style="height: 100vh;">
    <div class="x_title show-scroll">
        <div class="padding" style="padding: 15px;">
		<h4 class="title_iq">INQUIRY #1</h4>
<div class="x_content">
		
		<div class="row">
			<div class="col-xs-12 text-center">
				<img src="{{asset('/images/logo.png')}}" width="100" height="100" alt="">
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 text-center mt-2">
				<h4 class="text-uppercase">08 AUGUST 2018</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<span class="letter-to">To:</span>
				<span class="text-to">K Lorem ipsum, sale manager</span>
				<p class="letter-company">Sony Corporation (Head Office)</p>
				<p class="letter-address">18, Kijpanich Building, Room 405, 4th Floor Patpong Road, Suriyawong Bangrak Bangkok 10500</p>
			</div>                  
		</div>

		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<p class="letter-content text-uppercase font-black">
					"lorem ipsum dolor sit amet. consectetur adipiscing elit. sed do eiusmod tempor incididunt ut labore et dolore magna
					aliqua. ut enim ad minim veniam. quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commod consequat
					duis aute irure dolor inreprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<table class="table ngin-table">
					<thead>
						<tr>
							<th class="col-md-2">CODE</th>
							<th class="col-md-8 text-left">DESCRIPTION</th>
							<th class="col-md-2">QTY</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								PCAS-00073
							</td>
							<td class="text-left">
								<label><b>PS4-G</b></label>:
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


		@section('script')
		<script src="{{ asset('js/back-office/inquiry/show.js') }}"></script>
		@endsection