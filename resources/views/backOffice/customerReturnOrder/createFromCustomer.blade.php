@extends('layouts.backOffice.template')

@section('head')
	<link rel="stylesheet" type="text/css" href="{{asset('/css/back-office/customer-return-order/createFromCustomer.css')}}"/>
@endsection

@section('module_name', 'CUSTOMER RETURN ORDER')
@section('page_name', 'CREATE FROM CUSTOMER')

@section('body')
<div class="x_content">
	<div class="section-top">
		<div class="row">
			<div class="col-xs-5">
				<div class="form-group">
					<label>CUSTOMER</label>
					<input class="form-control" type="text" data-action="typeaheadCustomer">
				</div>
			</div>

			<div class="col-xs-5">
				<div class="form-group">
					<label>ITEM NAME</label>
					<select id="basic" class="form-control">
						<option>PS4-G: Crash bandicot [standard]</option>
						<option>PS4-G: Crash bandicot [standard]</option>
						<option>PS4-G: Crash bandicot [standard]</option>
					</select>
				</div>
			</div>

			<div class="col-xs-2">
				<div class="form-group">
					<label>DATE</label>
					<div class='input-group date' id='datetimepicker2' >
						<input type='text' class="form-control" />
						<span class="input-group-addon">
							<i class="fa fa-calendar" ></i>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section-table">
		<table class="table ngin-table">
			<thead>
				<tr>
					<th class="inv-no">Tax invoice number</th>
					<th class="order-qty">Ordered QTY</th>
					<th class="warehouse">Warehouse</th>
					<th class="return-qty">Return QTY</th>
					<th class="price-per-unit">Price per unit Incl. vat with discount</th>
					<th class="total-amount">Total amount</th>
					<th class="remark">Remark</th>
				</tr>
			</thead>
		</table>

		<div class="section-table-body scroll-2">
			<table class="table ngin-table">
				<tbody>
					@for($i=0;$i<8;$i++)
					<tr>
						<td class="inv-no">00001</td>
						<td class="order-qty">10</td>
						<td class="warehouse">
							<div class="form-group">
								<select id="basic" class="form-control">
									<option>Warhouse</option>
									<option>Warhouse</option>
									<option>Warhouse</option>
								</select>
							</div>
						</td>
						<td class="return-qty">
							<div class="form-group">
								<input type="text" class="form-control" id="input">
							</div>
						</td>
						<td class="price-per-unit">99.20</td>
						<td class="total-amount">199.90</td>
						<td class="remark"><div class="form-group">
							<input type="text" class="form-control" id="input">
						</div></td>
					</tr>
					@endfor
				</tbody>
			</table>
		</div>

		<div class="total">
			<div class="row">
				<div class="col-xs-10"></div>
				<div class="col-xs-2">
					<div class="row">
						<div class="col-xs-4" style="font-weight: bold;">Total</div>
						<div class="col-xs-4" align="right" style="line-height: 15px; font-size: 18px;">2</div>
						<div class="col-xs-4" align="right"  style="font-weight: bold;">units</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section-summary">
		<div class="row">
			<div class="col-xs-6">
				<div class="">
					<div class="form-group">
						<label>Remark</label>
						<textarea class="form-control" rows="4"  placeholder="textarea"> </textarea>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section-actions">
		<button type="button" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-save save success" aria-hidden="true"></i> </span>SAVE</button>
		<button type="button" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i> </span>CANCEL</button>
	</div>
</div>
@endsection

@section('script')
	<script src="{{asset('js/back-office/customer-return-order/createFromCustomer.js')}}"></script>
@endsection
