{{-- 
    @author: กีรติพรลีลาวันทนพันธุ์ 
    @phone: 089-185-9078
    @email: bookhunter99@gmail.com
--}}

@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/accounting/credit-note-to-customer/create.css')}}"/>
@endsection

@section('module_name', 'ACCOUNTING > CREDIT NOTE TO CUSTOMER')
@section('page_name', 'CREATE')

@section('body')


<div class="container-fluid x_content">
    <section class="panel-body panel-content scroll-2">
       <div class="bk-group">
		<div class="col-sm-12 col-md-12 col-lg-12 bk-header">	
        	<div class="col-sm-3 col-md-3 col-lg-3">
        		<div class="form-group">
        			<label for="exampleInputPassword1" class="bk-text-bold2">CNCT # 9999</label>
        		</div>
        	</div>
        	<div class="col-sm-6 col-md-6 col-lg-6"></div>
        	<div class="col-sm-3 col-md-3 col-lg-3" style="padding-right: 0;">
        	    <div class="form-group bk-text-bold">
        			<label for="exampleInputPassword1" class="bk-text-bold2">DATE</label>
        			<div class='input-group date' id='datetimepicker' >
        				<input type='text' class="form-control" value="03/10/2017" />
        				<span class="input-group-addon">
        					<i class="fa fa-calendar" ></i>
        				</span>
        			</div>
        		</div>
        	</div>

            <div class="col-sm-12 col-md-12 col-lg-12">
        			<label class="bk-text-bold">PRODUCT</label>
        			<div style="font-size: 20px;">PS4-G : Horizon Standard [R3] [EN/TH]</div>
    		</div>
        </div>
        
        
        <table class="bk-table-hiso tb1">
					<thead>
						<tr>
							<th class="text-head-big-2">CREDIT NOTE FROM SUPPLIER</th>
							<th class="text-head-big-2"colspan="2">SUPPLIER NAME</th>
							<th class="text-head-big-2">AMOUNT (INCL. VAT)</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>00001</td>
							<td colspan="2">SONY INTERACTIVE INTERTAINMENT INC.</td>
							<td>85,000.00 THB</td>
						</tr>
						<tr>
							<td>00002</td>
							<td colspan="2">Max Soft Co.,Ltd</td>
							<td>10,000.00 THB</td>
						</tr>
						<tr>
							<td>00003</td>
							<td colspan="2">AdiwiT Co.,Ltd</td>
							<td>15,000.00 THB</td>
						</tr>
					</tbody>
				</table>



    <div class="bk-group2">
      <div class="bk-border-radius">
        <table class="bk-table-board" border="0" >
          <tr>
            <td>100,000.00 THB</td>
            <td>0.00 THB</td>
            <td>10,000.00 THB</td>
          </tr>
          <tr>
            <td>AMOUNT</td>
            <td>USED</td>
            <td>AVAILABLE</td>
          </tr>
        </table>
      </div>
    </div>

	<div style="    padding-bottom: 30px;">
        <table class="bk-table-hiso tb2">
					<thead>
						<tr>
							<th colspan="3" class="text-head-big-2">CUSTOMER</th>
							<th class="text-head-big-2">QTY</th>
                            <th class="text-head-big-2">UNIT PRICE</th>
							<th class="text-head-big-2">AMOUNT (INCL. VAT)</th>
                            <th class="text-head-big-2"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>CN #001</td>
                            <td colspan="2"><input type="text" class="form-control bk-input-text" style="text-align: left;"value="Lorem Co.,Ltd"></td>
                            <td><input type="text" class="form-control bk-input-text-num" value="80" style="" size="1" ></td>
                            <td><input type="text" class="form-control bk-input-text-num" value="100.00"style="" size="1"></td>
							<td>8,000.00</td>
							<td>THB</td>
						</tr>
                        
                        <tr>
							<td>CN #002</td>
                            <td colspan="2"><input type="text" class="form-control bk-input-text" style="text-align: left;"value="Lorem Co.,Ltd"></td>
                            <td><input type="text" class="form-control bk-input-text-num" value="1" style="" size="1" ></td>
                            <td><input type="text" class="form-control bk-input-text-num" value="50.00"style="" size="1"></td>
							<td>50.00</td>
							<td>THB</td>
						</tr>
                        
                        <tr>
							<td>CN #003</td>
                            <td colspan="2"><input type="text" class="form-control bk-input-text" style="text-align: left;"value="Lorem Co.,Ltd"></td>
                            <td><input type="text" class="form-control bk-input-text-num" value="1" style="" size="1" ></td>
                            <td><input type="text" class="form-control bk-input-text-num" value="100.00"style="" size="1"></td>
							<td>100.00</td>
							<td>THB</td>
						</tr>
                        
                        <tr>
							<td>CN #004</td>
                            <td colspan="2"><input type="text" class="form-control bk-input-text" style="text-align: left;"value="Lorem Co.,Ltd"></td>
                            <td><input type="text" class="form-control bk-input-text-num" value="1" style="" size="1" ></td>
                            <td><input type="text" class="form-control bk-input-text-num" value="60.00"style="" size="1"></td>
							<td>60.00</td>
							<td>THB</td>
						</tr>
                        
                        <tr>
							<td>CN #005</td>
                            <td colspan="2"><input type="text" class="form-control bk-input-text" style="text-align: left;"value="Lorem Co.,Ltd"></td>
                            <td><input type="text" class="form-control bk-input-text-num" value="1" style="" size="1" ></td>
                            <td><input type="text" class="form-control bk-input-text-num" value="700.00"style="" size="1"></td>
							<td>700.00</td>
							<td>THB</td>
						</tr>
                        
                        
						
					</tbody>
				</table>
			</div>
            
            <div class="bk-group3">
              <table class="bk-table-hiso tb3">
                <tr>
                    <td colspan="4" style="color: #000;">REMARK
                        <textarea class="form-control" rows="4" id="comment"></textarea>
                    </td>
                    <td class="text-head-big-2" style="font-size: 16px;color: #000;">TOTAL</td>
                    <td class="text-head-big-2" style="font-size: 16px;color: #000;">8,910.00</td>
                    <td class="text-head-big-2" style="font-size: 16px;color: #000;">THB</td>
                </tr>
              </table>
            </div>
            <div class="row" style="text-align: center;">
  <div class="action">
    <button type="submit" class="btn btn-ngin btn-default">
      <span class="btn-label"><i class="fa fa-save success" aria-hidden="true"></i></span>SAVE
    </button>
    <button type="button" class="btn btn-ngin btn-default">
      <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL
    </button>
  </div>
</div>



</div>
        
        
    </section>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/accounting/credit-note-to-customer/create.js') }}"></script>
    <script type="text/javascript">
	$(function () {
		$('#datetimepicker').datetimepicker();
	});
	
</script>
@endsection
