@extends('layouts.backOffice.template')

@section('head')
<link rel="stylesheet" type="text/css" href="{{asset('/css/back-office/customer-return-order/createFromTaxInvoice.css')}}"/>
@endsection

@section('module_name', 'CUSTOMER RETURN ORDER')
@section('page_name', 'CREATE FROM TAX INVOICE')

@section('body')
<div class="x_content">
	<div class="section-top">
		<div class="row">
			<div class="col-xs-2">
				<div class="form-group">
					<label>DOCUMENT DATE</label>
					<div class='input-group date' id='datetimepicker2' >
						<input type='text' class="form-control" />
						<span class="input-group-addon">
							<i class="fa fa-calendar" ></i>
						</span>
					</div>
				</div>
			</div>

			<div class="col-xs-2">
				<div class="form-group">
					<label>Tax Invoice Number</label>
					<input type="text" class="form-control" id="input">
				</div>
			</div>

			<div class="col-xs-8">
				<div class="form-group">
					<label>CUSTOMER</label>
					<p>Adiwit Co.,Ltd. (Branch 00001) 18 Kijpanit Bld., Patpong Rd., Suriyawong, Bangrak, Bangkok THA 10500</p>
				</div>
			</div>
		</div>
	</div>

	<div class="section-table">
		<table class="table ngin-table">
			<thead>
				<tr>
					<th class="id" align="left">Barcode / Product Code / Item Name</th>
					<th class="warehouse" >Warehouse</th>
					<th class="qty" >Return QTY</th>
					<th class="remark" >Remark</th>
				</tr>
			</thead>
		</table>
		<div class="section-table-body scroll-2">
			<table class="table ngin-table">
				<tbody>
					@for($i=0;$i<8;$i++)
					<tr>
						<td class="id">PS4-G: Lorem Ipsum [R3] [EN/TH]</td>
						<td class="warehouse">
							<div class="form-group">
								<select id="basic" class="form-control">
									<option>Warhouse</option>
									<option>Warhouse</option>
									<option>Warhouse</option>
								</select>
							</div>
						</td>
						<td class="qty">
							<div class="form-group">
								<input type="text" class="form-control" id="input">
							</div>
						</td>
						<td class="remark">
							<div class="form-group">
								<input type="text" class="form-control" id="input">
							</div>
						</td>
					</tr>
					@endfor
				</tbody>
			</table>
		</div>
	</div>

	<div class="section-summary">
		<div class="row">
			<div class="col-xs-6">
				<div class="">
					<div class="form-group">
						<label>External Remark</label>
						<textarea class="form-control" rows="4"  placeholder="textarea"> </textarea>
					</div>
				</div>
			</div>

			<div class="col-xs-4"></div>
			<div class="col-xs-2">
				<div class="total">
					<div class="row">
						<div class="col-xs-4" style="font-weight: bold;">Total</div>
						<div class="col-xs-4" align="right" style="font-size: 18px; line-height: 15px;">8</div>
						<div class="col-xs-4" align="right" style="font-weight: bold;">Pieces</div>
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
	<script src="{{asset('js/back-office/customer-return-order/createFromTaxInvoice.js')}}"></script>
@endsection
