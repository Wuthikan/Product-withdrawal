@extends('layouts.backOffice.template')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/pre-order/update.css')}}"/>
  <link href="https://fonts.googleapis.com/css?family=Kanit:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
@endsection

@section('body')	
<div class="x_title pre-order">
	<h2> </h2>
	<br>
	<br>
	<div class="x_content">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">	
				<div class="col-sm-3 col-md-3 col-lg-3">
					<div class="form-group">
						<label for="exampleInputPassword1"><h4 class="title">PREORDER #1</h4></label>
						
							<p style="font-size: 30px;
    margin-top: -10px;">04/09/2017</p>
							
				
						
					</div>
				</div>
                <div class="col-sm-2 col-md-2 col-lg-2"></div>
				<div class="col-sm-7 col-md-7 col-lg-7">
					<div class="form-group">
					
				<label for="exampleInputPassword1"><h4 class="title">CUSTOMER</h4></label>
                        <div class="a" style="margin-top:-10px">บริษัท ตัวอย่าง จำกัด <span class="b">(สำนักงานใหญ่)</span> <span class="c"> เลขที่ 18 อาคารกิจพานิช ห้อง 405</span></div> 
				
              </div>
				</div>
			</div>
		
			<div class="col-sm-12 col-md-12 col-lg-12">	
			
			<br>
			
				<table class="table ngin-table ">
					<thead>
						<tr>

						
							<th class="text-left col-sm-8">BARCODE / PRODUCT CODE / ITEM NAME</th>
					
							<th class=" col-sm-1">QTY</th>
							<th class=" col-sm-3">QUOTA</th>
					
						</tr>
					</thead>
					<tbody class="">
				
						<tr>
							<td class="col-sm-8">	
								<div class="txt-bc">88888 XRACH BAN</div>
								</td>
							<td class="col-sm-1">
									<input type="text" class="form-control" id="input" placeholder="" value="">

								</td>
								
								<td class="col-sm-3">888</td>
								
								
							</tr>
							<tr>
							<td class="col-sm-8">	
								<div class="txt-bc">88888 FINAL FANTASY XV</div>
								</td>
							<td class="col-sm-1">
									<input type="text" class="form-control" id="input" placeholder="" value="">

								</td>
								
								<td class="col-sm-3">999</td>
								
								
							</tr>
							<tr>
							<td class="col-sm-8">	
								<div class="txt-bc">88888 GRAND T</div>
								</td>
							<td class="col-sm-1">
									<input type="text" class="form-control" id="input" placeholder="" value="">

								</td>
								
								<td class="col-sm-3">111</td>
								
								
							</tr>
							<tr>
							   <td colspan="3">&nbsp;</td>
							  
							</tr>

<thead>
						<tr>

						
							<th class="text-left col-sm-8" style="    border-top: none;">BARCODE / PRODUCT CODE / ITEM NAME</th>
					
							<th class=" col-sm-1" style="    border-top: none;">QTY</th>
							<th class=" col-sm-3" style="    border-top: none;">QUOTA</th>
					
						</tr>
					</thead>
						</tbody>
						
						</table>
						<br>
					
						<table class="table ngin-table scroll">
					
					<tbody class="scroll-2">
					
						@for ($i = 0; $i <= 2; $i++)
						<!--1 row  !-->
						<tr>
							<td class="supplier col-sm-8">	
								<button type="button" class="btn btn-ngin btn-xs table-btn-delete" style="margin-top:7px;">
									<span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span></button>
							<input type="text" class="form-control" id="input" placeholder="input" value="88888 CRASH BAN" style="    width: 95%; float:right;    ">
					
<!--							<div class="txt-bc">88888 FINAL FANTASY XV</div><div class="txt-bc">88888 GRAND T</div>-->
								</td>
							
								
						
								<td class="text-center qty col-sm-1">
									<input type="text" class="form-control" id="input" placeholder="" value="">

								</td>
										<td class="blance col-sm-3">88</td>
								
							</tr>


							<!--end row  !-->
							@endfor
							
							
							<!--1 row  !-->
							<tr>
							<td class="supplier col-sm-8">	
								
							<input type="text" class="form-control" id="input" placeholder="" value="" style="    width: 95%; margin-left:5%;float:right;    ">
					
							
								</td>
							
								<td class="text-center qty col-sm-1">
									

								</td>
								<td class="blance col-sm-3"></td>
								
								
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
						<button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{ url("back-office/inquiry") }}'">
							<span class="btn-label"><i class="fa fa-print primary" aria-hidden="true"></i></span>PRINT</button>
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
					<script src="{{ asset('js/back-office/pre-order/update.js') }}"></script>
					@endsection