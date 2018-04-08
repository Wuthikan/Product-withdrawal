@extends('layouts.backOffice.template')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/inquiry/create.css')}}"/>
@endsection

@section('module_name', 'INQUIRY')
@section('page_name', 'CREATE')

@section('body')
<div class="x_title scroll-2">
	<div class="x_content">
		<div class="row">
			<div class="col-xs-12">
				<div class="col-xs-3 doc-date">
					<div class="form-group">
						<label for="datetimepicker">DOCUMENT DATE</label>
						<div class='input-group date' id='datetimepicker' >
							<input type='text' class="form-control" value="03/10/2017" />
							<span class="input-group-addon">
								<i class="fa fa-calendar" ></i>
							</span>
						</div>
					</div>
				</div>
				<div class="col-xs-9 supplier">
					<div class="form-group">
						<label for="supplier_name">SUPPLIER</label>
						<input type="text" id="supplier_name" class="form-control" placeholder="Supplier" data-action="typeaheadCustomer">
					</div>
				</div>
			</div>
			<div class="col-xs-12">
				<table class="table ngin-table scroll">
					<thead>
						<tr>
							<th class="w-250 text-left code-name"><span>BARCODE | PRODUCT CODE | ITEM NAME</span></th>
							<th class="w-100 text-center">WAREHOUSE</th>
							<th class="w-100 text-center">TYPE</th>
							<th class="w-1200">IN STOCK</th>
							<th class="w-100">BACKLOG<br/>FROM PREV. INQ.</th>
							<th class="w-70">QTY</th>
							<th class="w-70">UNIT PRICE <span class="text-light">(USD)</span></th>
							<th class="w-70">AMOUNT <span class="text-light">(USD)</span></th>
							<th class="w-250 col-itemname">REMARKS</th>
						</tr>
					</thead>
					<tbody class="scroll-2">
						@for ($i = 0; $i <= 10; $i++)
							<!--1 row  !-->
							<tr>
								<td class="w-300 col-itemname">
									<div class="col-sm-1">
										<button type="button" class="btn btn-default-background">
											<span class="btn-label">
												<i class="fa fa-trash danger" aria-hidden="true"></i>
											</span>
										</button>
									</div>
									<div class="col-sm-11">
										<input type="text" class="form-control" placeholder="PRODUCT" data-action="typeaheadProduct">
									</div>
								</td>
								<td class="w-100">
									<select id="basic" class="form-control">
										<option>WAREHOUSE</option>
										<option>WAREHOUSE</option>
									</select>
								</td>
								<td class="w-100">
									<select class="form-control">
										<option>USED</option>
										<option>NEW</option>
										<option>REPEAT</option>
									</select>
								</td>
								<td class="w-100 balance">10</td>
								<td class="w-100 balance">10</td>
								<td class="w-70">
									<input type="text" class="form-control text-center" id="input" placeholder="input" value="88">
								</td>
								<td class="w-70">
									<input type="text" class="form-control text-center" id="input" placeholder="input" value="88">
								</td>
								<td class="w-70">
									<input type="text" class="form-control text-center" id="input" placeholder="input" value="88">
								</td>
								<td class="w-250 col-itemname">
									<input type="text" class="form-control">
								</td>
							</tr>


							<!--end row  !-->
							@endfor


							<!--1 row  !-->
							<tr>
								<td class="w-250 col-itemname">
									<div class="col-sm-1">&nbsp;</div>
									<div class="col-sm-11">
										<input type="text" class="form-control" placeholder="PRODUCT" data-action="typeaheadProduct">
									</div>
								</td>
								<td class="w-100">
									<select id="basic" class="form-control">
										<option>WAREHOUSE-1</option>
										<option>WAREHOUSE-2</option>
										<option>WAREHOUSE-3</option>
										<option>WAREHOUSE-4</option>
										<option>WAREHOUSE-5</option>
										<option>WAREHOUSE-6</option>
									</select>
								</td>
								<td class="w-100">
									<select class="form-control">
										<option>USED</option>
										<option>NEW</option>
										<option>REPEAT</option>
									</select>
								</td>
								<td class="col-xs-2">&nbsp;</td>
								<td class="col-xs-2">&nbsp;</td>
								<td class="col-xs-1">
									<input type="text" class="form-control" id="input" placeholder="" value="">
								</td>
								<td class="col-xs-1">
										<input type="text" class="form-control" id="input" placeholder="" value="">
									</td>
								<td class="col-xs-2">
									<input type="text" class="form-control">
								</td>
								<td class="col-xs-3">
									<input type="text" class="form-control" id="input" placeholder="" value="">
								</td>
							</tr>

							<!--end row  !-->
						</tbody>
						<tfoot>
							<tr>
								<td colspan="10">
									<div class="row">
										<div class="col-md-6">
											<p style="font-size: 13px; margin-bottom: 0px;"><strong>REMARK</strong></p>
											<textarea class="form-control" rows="7"></textarea>
										</div>
										<div class="col-md-6 text-right">
											<span>Total</span> 88 <span>Prices</span>
										</div>
									</div>
									
								</td>
							</tr>
						</table>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 text-center" style="margin-top: 20px;">
						<div class="actions">
							<button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{ url("back-office/inquiry") }}'">
								<span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i></span>SAVE</button>
							<button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{ url("back-office/inquiry") }}'">
								<span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL</button>
						</div>
								</div>
							</div>
						</div>
					</div>
					@endsection

					@section('script')
					<script src="{{ asset('js/back-office/inquiry/create.js') }}"></script>
					@endsection
