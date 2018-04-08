@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/pre-order/createBeforeInitial.css')}}"/>
@endsection

@section('module_name', 'PREORDER/CREATE')
@section('page_name', 'BEFORE INITIAL')

@section('body')
<div class="pre-order__create-before-initial scroll-2">
	<div class="x_content">
		<div class="section-details">
			<div class="row">
				<div class="col-xs-2">
					<img class="media-object" src="{{ asset('images/backOffice/preOrder/example-image.png') }}">
					<table>
						<tr>
							<th>PLATFORM</th>
							<td>PS4</td>
						</tr>
						<tr>
							<th>EDITION</th>
							<td>DELUX</td>
						</tr>
						<tr>
							<th>ZONE</th>
							<td>2 (EU)</td>
						</tr>
					</table>
				</div>
				<div class="col-xs-10">
					<h2>PS4 nioh game play</h2>
					<div class="row details">
						<div class="col-xs-5">
							<table>
								<tr>
									<th>PRODUCT CODE</th>
									<td>8888</td>
								</tr>
								<tr>
									<th>BARCODE</th>
									<td>8-8888-8888-88-8</td>
								</tr>
								<tr>
									<th>RELEASE DATE</th>
									<th>PREORDER END DATE</th>
								</tr>
								<tr>
									<td>88/88/8888</td>
									<td>88/88/8888</td>
								</tr>
							</table>
						</div>

						<div class="col-xs-7" style="padding-left: 0;">
							<div class="row">
								<div class="col-xs-6">
									<table>
										<tr>
											<th>PRE-ORDER Target :</th>
											<td>10,0000</td>
										</tr>
									</table>
								</div>
								<div class="col-xs-6">
									<table>
										<tr>
											<th>PR Date :</th>
											<td>88/88/8888</td>
										</tr>
									</table>
								</div>
							</div>

							<div class="pre-order-target">
								<div class="row">
									<div class="col-xs-4">
										<div class="title">PRE-ORDER Target :</div>
									</div>
									<div class="col-xs-8">
										<div class="row status">
											<div class="col-xs-6" align="left">0%</div>
											<div class="col-xs-6" align="right">100%</div>
											<div class="progress-now">36%</div>
										</div>
										<div class="progress">
										  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100" style="width: 36%">
										    <span class="sr-only">36% Complete (danger)</span>
										  </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="panel-state">
						<div class="row">
							<div class="col-xs-3">
								<div class="title">Total Preorder</div>
								<div class="value" style="color: #88b2eb;">1,000</div>
							</div>
							<div class="col-xs-3">
								<div class="title">Sales Buffer</div>
								<div class="value" style="color: #88b2eb;">300</div>
							</div>
							<div class="col-xs-3">
								<div class="title">Company Buffer</div>
								<div class="value"><input type="text"></div>
							</div>
							<div class="col-xs-3">
								<div class="title">Grand Total</div>
								<div class="value" style="color: #374887;">1550</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section-table">
			<table class="table ngin-table pre-order-create-table">
				<thead>
					<tr>
						<th colspan="3"></th>
						<th colspan="6" class="qty group">QTY</th>
					</tr>
					<tr>
						<th class="col-xs-4">Customer</th>
						<th class="col-xs-1"></th>
						<th class="col-xs-1">Sale</th>
						<th class="col-xs-2 group">Pre-order</th>
						<th class="col-xs-2 group">Buffer</th>
						<th class="col-xs-2 group">Total</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="col-xs-4">
							<div class="row">
								<div class="col-xs-2">
									<button type="button" class="btn  btn-default-background">
										<span class="btn-label"><i class="fa fa-trash-o trash danger" aria-hidden="true"></i></i></span>
									</button>
								</div>
								<div class="col-xs-10"><input type="text" value="NGIN 1"></div>
							</div>
						</td>
						<td class="col-xs-1">
							<div class="state" style="background-color: #88B2EB;">GD</div>
						</td>
						<td class="col-xs-1">
							<div class="img" style="width: 30px; heigt: 30px; border-radius: 100%; background-color: white" />
							<!-- <img src="#"> -->
							</div>
						</td>
						<td class="col-xs-2"><input type="text"></td>
						<td class="col-xs-2"><input type="text"></td>
						<td class="col-xs-2">300</td>
					</tr>

					<tr>
						<td class="col-xs-4">
							<div class="col-xs-2"></div>
							<div class="col-xs-10">NADZ</div>
						</td>
						<td class="col-xs-1">
							<div class="state" style="background-color: #374887;">PAD</div>
						</td>
						<td class="col-xs-1">
							<div class="img" style="width: 30px; heigt: 30px; border-radius: 100%; background-color: white" />
							<!-- <img src="#"> -->
							</div>
						</td>
						<td class="col-xs-2"><input type="text"></td>
						<td class="col-xs-2"><input type="text"></td>
						<td class="col-xs-2">300</td>
					</tr>
				</tbody>
			</table>

			<div class="section-actions">
	      <button type="button" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-save save success" aria-hidden="true"></i> </span>SAVE</button>
	      <button type="button" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i> </span>CANCEL</button>
	    </div>
		</div>
	</div>
</div>
@endsection

@section('script')
	<script src="{{ asset('js/back-office/pre-order/createBeforeInitial.js') }}"></script>
@endsection
