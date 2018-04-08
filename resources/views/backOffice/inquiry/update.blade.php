@extends('layouts.backOffice.template')

@section('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/inquiry/update.css') }}"/>
@endsection

@section('module_name', 'INQUIRY')
@section('page_name', 'UPDATE')

@section('body')
<div class="x_title">
	<h2> </h2>
	<div class="x_content">
		<div class="row">
			<div class="col-xs-12">	
				<div class="col-xs-3">
					<div class="form-group">
						<label for=""><h4 class="title">IQ #1</h4></label>
						<div class='input-group date' id='datetimepicker' >
							<input type='text' class="form-control" value="03/10/2017" />
							<span class="input-group-addon">
								<i class="fa fa-calendar" ></i>
							</span>
						</div>
					</div>
				</div>
				<div class="col-xs-9">

					<div class="form-group title">
						<label for=""><h3 class="margin-bottom"></h3></label>
						<select id="basic" class="form-control">
							<option>SUPPLIER-1</option>
							<option>SUPPLIER-2</option>
							<option>SUPPLIER-3</option>
							<option>SUPPLIER-4</option>
							<option>SUPPLIER-5</option>
							<option>SUPPLIER-6</option>
						</select>
					</div>

				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-12">	
				<table class="table ngin-table scroll">
					<thead>
						<tr >
							<th class="col-xs-6 text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BARCODE | PRODUCT CODE | ITEM NAME</th>
							<th class="col-xs-2">WAREHOUSE</th>
							<th class="blance col-xs-2 blance">BARCODE <br><span>(AVAIL | REMAINDER)</span></th>
							<th class="qty col-xs-1">QTY</th>
							<th class="total col-xs-1">TOTAL</th>
						</tr>
					</thead>
					<tbody class="scroll-2">
						@for ($i = 0; $i <= 2; $i++)
						<!--1 row  !-->
						<tr>
							<td class="barcode col-xs-6">	
								<button type="button" class="btn btn-ngin btn-xs table-btn-delete">
									<span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span></button>
									<input type="text" class="form-control" id="input" placeholder="input" value="88888 CRASH BAN">
								</td>

								<td class="col-xs-2">
									<select id="basic" class="form-control">
										<option>WAREHOUSE-1</option>
										<option>WAREHOUSE-2</option>
										<option>WAREHOUSE-3</option>
										<option>WAREHOUSE-4</option>
										<option>WAREHOUSE-5</option>
										<option>WAREHOUSE-6</option>
									</select>
								</td>
								<td class="vertical-align blance col-xs-2">10/<span>20</span></td>
								<td class="text-center qty col-xs-1">
									<input type="text" class="form-control" id="input" placeholder="input" value="88">

								</td>
								<td class="vertical-align total col-xs-1">
									10
								</td>
							</tr>
							<!--end row  !-->
							@endfor

							<!--1 row  !-->
							<tr>
								<td class="barcode col-xs-6 no-icon-delete">	

							
									<input type="text" class="form-control" id="input" placeholder="" value="">
								</td>

								<td class="col-xs-2">
									<select id="basic" class="form-control">
										<option>WAREHOUSE-1</option>
										<option>WAREHOUSE-2</option>
										<option>WAREHOUSE-3</option>
										<option>WAREHOUSE-4</option>
										<option>WAREHOUSE-5</option>
										<option>WAREHOUSE-6</option>
									</select>
								</td>
								<td class="vertical-align blance col-xs-2"><span></span></td>
								<td class="text-center qty col-xs-1">
									<input type="text" class="form-control" id="input" placeholder="" value="">

								</td>
								<td class="vertical-align total col-xs-1">

								</td>
							</tr>

							<!--end row  !-->




						</tbody>
						<tfoot>
							<tr>
								<td colspan="6" class="col-xs-12 text-right">
									<span>Total</span> 88 <span>Prices</span>
								</td>
							</tr>
							<tfoot>

							</tfoot>
						</table>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 text-center">	
						<button type="button" class="btn btn-ngin btn-default">
							<span class="btn-label"><i class="fa fa-print primary" aria-hidden="true"></i></span>PRINT</button onclick="window.location='{{ url("back-office/inquiry") }}'">
							<button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{ url("back-office/inquiry") }}'">
								<span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i></span>SAVE</button>
								<button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{ url("back-office/inquiry") }}'">
									<span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL</button>
								</div>
							</div>
						</div>
					</div>
					@endsection

					@section('script')
					<script src="{{ asset('js/back-office/inquiry/update.js') }}"></script>
					@endsection