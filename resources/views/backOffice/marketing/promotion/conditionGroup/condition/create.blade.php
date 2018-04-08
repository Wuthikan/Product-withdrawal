{{-- 
    @author: วราทัศน์ พานทองถาวร
    @phone: 087-806-5868
    @email: boss119@hotmail.com
--}}

@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/marketing/promotion/condition-group/create.css')}}"/>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
<div class="container">
<div class="row">
	<div class="col-xs-12">
		<form action="" method="" id="" class="">
			<div class="wrapper-inside">
				<div class="row">
					<div class="col-md-4 col-sm-5 m-auto">
						<fieldset>
							<div class="form-group form-group--inline">
								<label>FIELD</label><br>
								<select id="field" class="selectpicker form-control">
									<option>Birthday</option>
									<option>Register Date</option>
									<option>Times Purchased</option>
									<option>Parcel Delivery</option>
									<option>District Shipping</option>
									<option>Delivery Province</option>
									<option>From total price before vat</option>
									<option>Price/Unit</option>
									<option>Supplier</option>
									<option>Itemtype</option>
									<option>Platform</option>
									<option>Publisher</option>
									<option>Product Name</option>
									<option>Tags</option>
									<option>Bundle</option>
									<option>Weight</option>
									<option>Number of Pieces</option>
									<option>Bank Payment</option>
									<option>SKU</option>
									<option>Method Of Payment</option>
									<option>Delivery Date</option>
									<option>Shipping Method</option>
									<option>Time</option>
									<option>Day</option>
									<option>Week</option>
									<option>Customer Tier</option>
									<option>Month</option>
								</select>
							</div>
						</fieldset>
					</div>
					<div class="col-md-2 col-sm-5 m-auto">
						<fieldset>
							<div class="form-group form-group--inline">
								<label>VALUABLE</label><br>
								<select id="" class="selectpicker form-control">
									<option>=</option>
									<option>></option>
									<option><</option>
									<option>>=</option>
									<option><=</option>
									<option>Contain</option>
									<option>Between Inclusive</option>
									<option>Between Exclusive</option>
								</select>
							</div>
						</fieldset>
					</div>
					<div class="col-md-2 col-sm-4 m-auto">
						<fieldset>
							<div class="form-group form-group--inline">
								<label>Value 1</label><br>
								<input type="text" class=" form-control margin-bottom">
								<select id="" class="selectpicker form-control margin-bottom">
									<option>A</option>
									<option>B</option>
								</select>
								<div class="form-group">
									<div class='input-group date' id='datetimepicker' >
										<input type='text' class="form-control" />
										<span class="input-group-addon">
											<i class="fa fa-calendar" ></i>
										</span>
									</div>
								</div>
							</div>
						</fieldset>
					</div>
					<div class="col-md-2 col-sm-2 m-auto">
						<fieldset>
							<div class="form-group form-group--inline">
								<br><label>----- TO -----</label>
							</div>
						</fieldset>
					</div>
					<div class="col-md-2 col-sm-4 m-auto">
						<fieldset>
							<div class="form-group form-group--inline">
								<label>Value 2</label><br>
								<input type="text" class="form-control margin-bottom">
								<select id="" class="selectpicker form-control margin-bottom">
									<option>A</option>
									<option>B</option>
								</select>
								<div class="form-group">
									<div class='input-group date' id='datetimepicker2' >
										<input type='text' class="form-control" />
										<span class="input-group-addon">
											<i class="fa fa-calendar" ></i>
										</span>
									</div>
								</div>
							</div>
						</fieldset>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 m-auto">
						<fieldset class="text-center">
							<button type="button" class="btn btn-ngin btn-default ">
								<span class="btn-label"><i class="fa fa-save success" aria-hidden="true"></i></span>SAVE
							</button>
							<button type="button" class="btn btn-ngin btn-default ">
								<span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL
							</button>
						</fieldset>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/marketing/promotion/condition-group/create.js') }}"></script>
	<script type="text/javascript">
		$(function () {
			$('#datetimepicker').datetimepicker();
			$('#datetimepicker2').datetimepicker();
		});
		$(document).ready(function(){
            //Set Label Header Page
			$('#lbHeaderPage').html("<h3>PROMOTION | CONDITIONGROUP | CONDITION | <span>CREATE</span></h3>");
		});
	</script>
@endsection