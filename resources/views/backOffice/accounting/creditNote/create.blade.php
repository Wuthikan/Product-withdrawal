@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/accounting/credit-note/create.css')}}"/>
@endsection

@section('module_name', 'CREDIT NOTE')
@section('page_name', 'CREATE')

@section('body')

    <div class='x_content scroll-2'>
        <div class='accounting-create-content'>
            <div class='row'>
                <div class="col-sm-4">
                    <div class="form-group create-input">
                        <label for="customer">CUSTORMER</label>
                        <input type="text" class="form-control" id="customer" placeholder="" data-action="typeaheadCustomer">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group create-input">
                        <label for="itemname">ITEM NAME</label>
                        <input type="text" class="form-control" id="customer" placeholder="" data-action="typeaheadProduct">
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="exampleInputPassword1">DATE</label>
                        <div class="input-group date" id="datetimepicker">
                            <input type="text" class="form-control">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class="table-responsive">
	                <table class="table ngin-table table-credit-note">
	                    <thead>
	                      <tr>
	                        <th class="text-center col-sm-2">TAX INVOICE NUMBER</th>
	                        <th class="text-center col-sm-2">ORDERED QTY</th>
	                        <th class="text-center col-sm-2">CREDITED QTY</th>
	                        <th class="text-center col-sm-2">PRICE PER UNIT INCL. VAT WITH DISCOUNT</th>
	                        <th class="text-center col-sm-2">CREDIT NOTE AMOUNT /UNIT</th>
	                        <th class="text-center col-sm-2">TOTAL AMOUNT</th>
	                      </tr>
	                    </thead>
	                    <tbody>
	                    	<tr>
                    			<td>TINV 0001</td>
		                    	<td>10</td>
		                        <td class="text-center col-sm-1">
							        <input type="text" class="form-control" id="input" placeholder="input" value="88">
						        </td>
		                        <td>99.28</td>
		                        <td class="text-center col-sm-1">
							        <input type="text" class="form-control" id="input" placeholder="input" value="99.25">
						        </td>
		                        <td>99.25</td>
	                    	</tr>
	                    	<tr>
                    			<td>TINV 0002</td>
		                    	<td>10</td>
		                        <td class="text-center col-sm-1">
							        <input type="text" class="form-control" id="input" placeholder="input" value="88">
						        </td>
		                        <td>99.28</td>
		                        <td class="text-center col-sm-1">
							        <input type="text" class="form-control" id="input" placeholder="input" value="99.25">
						        </td>
		                        <td>99.25</td>
	                    	</tr><tr>
                    			<td>TINV 0003</td>
		                    	<td>10</td>
		                        <td class="text-center col-sm-1">
							        <input type="text" class="form-control" id="input" placeholder="input" value="88">
						        </td>
		                        <td>99.28</td>
		                        <td class="text-center col-sm-1">
							        <input type="text" class="form-control" id="input" placeholder="input" value="99.25">
						        </td>
		                        <td>99.25</td>
	                    	</tr>
	                    </tbody>
	                </table>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class='create-bottom'>
                    TOTAL <span class="color-gray">88.00</span> THB
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12">
                    <div class='create-bottom-2'>TOTAL BEFORE VAT <span>88.00</span> THB</div>
                    <div class='create-bottom-2'>VAT 7% <span>88.00</span> THB</div>
                    <div class='create-bottom-3'>TOTAL <span>88.00</span> THB</div>
                </div>
            </div>
            <div class='credit-remark row '>
                <div class="form-group">
                    <label for="remark">REMARK</label>
                    <textarea class="form-control" rows="5" placeholder="textarea"> </textarea>
                </div>
            </div>
            <hr>
            <div class="row">
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


@endsection


@section('script')
    <script src="{{ asset('js/back-office/accounting/credit-note/create.js') }}"></script>
@endsection