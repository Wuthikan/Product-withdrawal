@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/other/product-borrow/create.css')}}"/>
    <style type="text/css">
    .top_nav .nav_menu .nav.toggle{
    	width: 100% !important;
    }
    </style>
@endsection

@section('module_name', 'PRODUCT BORROW')
@section('page_name', 'CREATE')

@section('body')
<div class='x_content scroll-2'>
<div class='product-borrow-content'>
	<div class="product-borrow-create ">
		<div class="input-date row">
			<div class="col-sm-3">
				<div class="form-group">
					<div class="black" for="">BORROW DATE</div>
					<div class='input-group date' id='datetimepicker' >
						<input type='text' class="form-control" value="04/09/2017" />
						<span class="input-group-addon">
							<i class="fa fa-calendar" ></i>
						</span>
					</div>
				</div>
			</div>
			<div class="col-sm-6"></div>
			<div class="col-sm-3">
				<div class="form-group">
					<div class="black"  for="">RETURN DATE</div>
					<div class='input-group date' id='datetimepicker' >
						<input type='text' class="form-control" value="10/12/2017" />
						<span class="input-group-addon">
							<i class="fa fa-calendar" ></i>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="input-detail row">
			<div class="col-sm-6">
				<div class="form-group">
					<label class="black" for="">EVENT</label>
					<textarea class="form-control" rows="2" placeholder="textarea"> </textarea>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label class="black" for="">REMARK</label>
					<textarea class="form-control" rows="2" placeholder="textarea"> </textarea>
				</div>
			</div>
		</div>
		<div class="input-table row">
			<table class="table ngin-table">
				<thead>
					<tr>
						<th style='text-align: left;'>Barcode | Product Code | Item Name</th>
						<th>Warehouse</th>
						<th>QTY</th>
						<th style='text-align: left;'>Remark</th>
					</tr>
				</thead>
				<tbody class="scroll-2" style="max-height: 357px;">
				<tr>	
				<td class="col-sm-5" >
						<div class="del-btn-wrapper" style="float: left; width:100%">
							<div class="del-btn" style="width:60px;">
							<button type="button" class="btn btn-default-background">
									<span class="btn-label"><i class="fa  fa-trash danger" aria-hidden="true"></i></span>
								</button>
							</div>
							<span style="display: block; width:100%">
								<input type="text" class="form-control" id="input" data-action="typeaheadProduct" style="width:100%">
							</span>
						</div>
					</td>
					<td class="col-sm-2">
						<select id="basic" class="form-control">
							<option>WAREHOUSE-1</option>
							<option>WAREHOUSE-2</option>
							<option>WAREHOUSE-3</option>
							<option>WAREHOUSE-4</option>
							<option>WAREHOUSE-5</option>
							<option>WAREHOUSE-6</option>
						</select>
					</td>
					<td class="text-center col-sm-1">
						<input type="text" class="form-control" id="input" placeholder="input" value="88">
					</td>
					<td class="col-sm-4">
						<input type="text" class="form-control" id="input" placeholder="" value="">
					</td>
				</tr>
					<!-- end tr -->
				<tr>	
				<td class="col-sm-5" >
						<div class="del-btn-wrapper" style="float: left; width:100%">
							<div class="del-btn" style="width:60px;">
							<button type="button" class="btn btn-default-background">
									<span class="btn-label"><i class="fa  fa-trash danger" aria-hidden="true"></i></span>
								</button>
							</div>
							<span style="display: block; width:100%">
								<input type="text" class="form-control" id="input" data-action="typeaheadProduct" style="width:100%">
							</span>
						</div>
					</td>
					<td class="col-sm-2">
						<select id="basic" class="form-control">
							<option>WAREHOUSE-1</option>
							<option>WAREHOUSE-2</option>
							<option>WAREHOUSE-3</option>
							<option>WAREHOUSE-4</option>
							<option>WAREHOUSE-5</option>
							<option>WAREHOUSE-6</option>
						</select>
					</td>
					<td class="text-center col-sm-1">
						<input type="text" class="form-control" id="input" placeholder="input" value="88">
					</td>
					<td class="col-sm-4">
						<input type="text" class="form-control" id="input" placeholder="" value="">
					</td>
				</tr>
				<!-- end tr -->
				<tr>	
					<td class="col-sm-5" >
						<div class="del-btn-wrapper" style="float: left; width:100%">
							<div class="del-btn" style="width:60px;">
							<button type="button" class="btn btn-default-background">
									<span class="btn-label"><i class="fa  fa-trash danger" aria-hidden="true"></i></span>
								</button>
							</div>
							<span style="display: block; width:100%">
								<input type="text" class="form-control" id="input" data-action="typeaheadProduct" style="width:100%">
							</span>
						</div>
					</td>
					<td class="col-sm-2">
						<select id="basic" class="form-control">
							<option>WAREHOUSE-1</option>
							<option>WAREHOUSE-2</option>
							<option>WAREHOUSE-3</option>
							<option>WAREHOUSE-4</option>
							<option>WAREHOUSE-5</option>
							<option>WAREHOUSE-6</option>
						</select>
					</td>
					<td class="text-center col-sm-1">
						<input type="text" class="form-control" id="input" placeholder="input" value="88">
					</td>
					<td class="col-sm-4">
						<input type="text" class="form-control" id="input" placeholder="" value="">
					</td>
				</tr>
				<!-- end tr -->
				<tr>	
				<td class="col-sm-5" >
						<div class="del-btn-wrapper" style="float: left; width:100%">
							<div class="del-btn" style="width:60px;">

							</div>
							<span style="display: block; width:100%">
								<input type="text" class="form-control" id="input" data-action="typeaheadProduct" style="width:100%">
							</span>
						</div>
					</td>
					<td class="col-sm-2">
						<select id="basic" class="form-control">
							<option>WAREHOUSE-1</option>
							<option>WAREHOUSE-2</option>
							<option>WAREHOUSE-3</option>
							<option>WAREHOUSE-4</option>
							<option>WAREHOUSE-5</option>
							<option>WAREHOUSE-6</option>
						</select>
					</td>
					<td class="text-center col-sm-1">
						<input type="text" class="form-control" id="input" placeholder="input" value="88">
					</td>
					<td class="col-sm-4">
						<input type="text" class="form-control" id="input" placeholder="" value="">
					</td>
				</tr>
				<!-- end tr -->
				</tbody>
			</table>
		</div>
		<div class="create-bottom row">
			<div class="col-xs-12">
				Total <span>88</span> Pieces
			</div>
		</div>
		<div class="create-btn-group row">
			<div class="col-xs-12 btn-item">
				<button type="button" class="btn btn-ngin btn-default">
					<span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i></span>SAVE
				</button>
				<button type="button" class="btn btn-ngin btn-default">
					<span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL
				</button>
			</div>
			
		</div>
	</div>
</div>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/other/product-borrow/create.js') }}"></script>
@endsection