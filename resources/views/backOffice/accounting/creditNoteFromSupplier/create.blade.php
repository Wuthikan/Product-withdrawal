{{-- 
    @author: กีรติพรลีลาวันทนพันธุ์ 
    @phone: 089-185-9078
    @email: bookhunter99@gmail.com
--}}

@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/accounting/credit-note-from-supplier/create.css')}}"/>
@endsection

@section('module_name', 'ACCOUNTING > CREDIT NOTE FROM SUPPLIER')
@section('page_name', 'CREATE')

@section('body')
<div class="container-fluid x_content">

    
<section class="panel-body panel-content scroll-2">

<div class="bk-group">
  <table class="bk-table" border="0">
      <tr>
        <td colspan="6" style="padding-right: 0;">
            <div class="form-group">
    			<label for="exampleInputPassword1"><h5 class="title bk-text-bold">DATE</h5></label>
    			<div class='input-group date' id='datetimepicker' style="    width: 100%;">
    				<input type='text' class="form-control" value="03/10/2017" />
    				<span class="input-group-addon">
    					<i class="fa fa-calendar" ></i>
    				</span>
    			</div>
    		</div>
    	</td>
        <td colspan="2"></td>
        <td colspan="6" style="padding-left: 0;">	
            <label for="exampleInputPassword1"><h5 class="title bk-text-bold">PO :</h5></label>
            <select id="basic" class="form-control">
				<option SELECTED></option>
				<option>TEST 1</option>
				<option>TEST 1</option>
				<option>TEST 1</option>
				<option>TEST 1</option>										
			</select></td>
      </tr>
      
      
      
      
      <tr>
        <td colspan="14">SUPPLIER :</td>
      </tr>
      <tr>
        <td colspan="14">
            <input class="form-control" type="text" placeholder="typeaheadCustomer" data-action="typeaheadCustomer">
        </td>
      </tr>
  	  <tr>
        <td colspan="14">PRODUCT :</td>
      </tr>
	  <tr>
        <td colspan="14">
            <input class="form-control" type="text" placeholder="typeaheadProduct" data-action="typeaheadProduct">
        </td>
      </tr>
      <tr>
        <td colspan="6">EXCHANGE RATE :</td>
        <td colspan="2"></td>
        <td colspan="6" style="padding-left: 0px!important;">SUPPLIER DOCUMENT NUMBER :</td>
      </tr>
      
      <tr>
        <td colspan="6"   style="padding-right: 0;">
        <div style="display: flex;">
           <span class="bk-span-middle" style="min-width: 62px;">1  USD : </span>
            <input type="text" class="form-control" >
            <span class="bk-span-middle" style="text-align: right;min-width: 42px;">&nbsp; &nbsp;THD </span>
            </div>
        </td>
        <td colspan="2"></td>
        <td colspan="6" style="padding-left: 0;"><input type="text" class="form-control" ></td>
      </tr>
      <tr>
        <td colspan="6">QTY :</td>
        <td colspan="2"></td>
        <td colspan="6"style="padding-left: 0px!important;">UNIT PRICE :</td>
      </tr>
      <tr>
        <td  colspan="6"style="padding-right: 0;"><input type="text" class="form-control" ></td>
        <td colspan="2"></td>
        <td  colspan="6"style="padding-left: 0;"><input type="text" class="form-control" ></td>
      </tr>


    <tr>
      <td colspan="8" rowspan="5" style="padding-right: 0;">
        REMARK
      <textarea class="form-control" rows="4" id="comment"></textarea>
    </td>
    </tr>
    <tr>
      <td colspan="1"></td>
      <td class="bk-text-right bk-padding-bottom-border" colspan="2">Total</td>
      <td class="bk-text-right bk-text-normal bk-black-light bk-padding-bottom-border"colspan="2">90000.00</td>
      <td class="bk-text-center bk-padding-bottom-border">bath</td>
    </tr>
    <tr>
      <td colspan="1"></td>
      <td class="bk-text-right bk-padding-top"colspan="2">Total Before VAT</td>
      <td class="bk-text-right bk-text-normal bk-black-light bk-padding-top"colspan="2">84112.00</td>
      <td class="bk-text-center bk-padding-top">bath</td>
    </tr>
    <tr class="edit-pad-1">
      <td colspan="1"></td>
      <td class="bk-text-right"colspan="2">VAT 7 %</td>
      <td class="bk-text-right bk-text-normal bk-black-light"colspan="2">5888.00</td>
      <td class="bk-text-center">bath</td>
    </tr>
    <tr class="edit-pad-1">
      <td colspan="1"></td>
      <td class="bk-text-right"colspan="2">total</td>
      <td class="bk-text-right bk-text-normal bk-black-light"colspan="2">90000.00</td>
      <td class="bk-text-center">bath</td>
    </tr>
  </table>
</div>
<div class="row" style="padding-top: 30px;text-align: center;">
  <div class="action">
    <button type="button" class="btn btn-ngin btn-default">
      <span class="btn-label"><i class="fa fa-print primary" aria-hidden="true"></i></span>PRINT
    </button>
    <button type="submit" class="btn btn-ngin btn-default">
      <span class="btn-label"><i class="fa fa-save success" aria-hidden="true"></i></span>SAVE
    </button>
    <button type="button" class="btn btn-ngin btn-default">
      <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL
    </button>
  </div>
</div>

    </section>
    
</div>
@endsection


@section('script')
    <script src="{{ asset('js/back-office/accounting/credit-note-from-supplier/create.js') }}"></script>
    <script type="text/javascript">
	$(function () {
		$('#datetimepicker').datetimepicker();
	});
	
</script>
@endsection
