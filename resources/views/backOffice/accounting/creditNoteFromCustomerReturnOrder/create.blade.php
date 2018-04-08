{{-- 
    @author: กีรติพรลีลาวันทนพันธุ์ 
    @phone: 089-185-9078
    @email: bookhunter99@gmail.com
--}}


@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/accounting/credit-note-from-customer-return-order/create.css')}}"/>
@endsection

@section('module_name', 'ACCOUNTING > CREDIT NOTE FROM CRO')
@section('page_name', 'CREATE')

@section('body')
<div class="container-fluid x_content">
    <section class="panel-body panel-content scroll-2">
       
        <div class="bk-group-1">  
          <div class="col-sm-12 col-md-12 col-lg-12 bk-head-document" style="padding: 10px 0px 10px 0px;">	
            <div class="col-sm-2 col-md-2 col-lg-2" style="padding-right: 0px;
            padding-left: 0px;">
              <div class="form-group">
                <div>CRO # </div>
                <div>8888</div>
              </div>
            </div>
            <div class="col-sm-7 col-md-7 col-lg-7" style="padding-right: 0px;
            padding-left: 0px;">
              <div class="form-group">
                <div>CUSTOMER</div>
                <div>LOREM IPSUM CO., LTD.</div>
              </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3" style="padding-right:0;">
              <div class="form-group">
                <div>DATE</div>
                <div class="input-group date" id="datetimepicker">
                  <input type="text" class="form-control" value="03/10/2017">
                  <span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <table class="bk-table" border="0">
            <thead>
              <tr>
                <th colspan="3">ITEM NAME</th>
                <th colspan="2">TAX INV #</th>
                <th>ORDERED QTY</th>
                <th>CREDITED QTY</th>
                <th>PRICE PER UNIT INCL. VAT WITH DISCOUNT</th>
                <th>CREDIT NOTE AMOUNT / UNIT</th>
                <th>TOTAL AMOUNT</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td colspan="3">PS4-G: Lorem ipsum ipsu., (Unit)</td>
                <td colspan="2">0001</td>
                <td>10</td>
                <td>1</td>
                <td>99.28</td>
                <td><input type="text"class="form-control" value="99.25"></td>
                <td>99.25</td>
              </tr>
              <tr>
                <td colspan="3">PS4-G: Lorem ipsum ipsu., (Unit)</td>
                <td colspan="2">0002</td>
                <td>10</td>
                <td>1</td>
                <td>100.00</td>
                <td><input type="text"class="form-control" value="100.00"></td>
                <td>0.00</td>
              </tr>
              <tr>
                <td colspan="3">PS4-G: Lorem ipsum ipsu., (Unit)</td>
                <td colspan="2">0003</td>
                <td>10</td>
                <td>1</td>
                <td>100.00</td>
                <td><input type="text"class="form-control" value="100.00"></td>
                <td>0.00</td>
              </tr>
              <tr>
                <td colspan="3">PS4-G: Lorem ipsum ipsu., (Unit)</td>
                <td colspan="2">0004</td>
                <td>10</td>
                <td>1</td>
                <td>100.00</td>
                <td><input type="text"class="form-control" value="100.00"></td>
                <td>0.00</td>
              </tr>
              <tr>
                <td colspan="3">PS4-G: Lorem ipsum ipsu., (Unit)</td>
                <td colspan="2">0005</td>
                <td>10</td>
                <td>1</td>
                <td>100.00</td>
                <td><input type="text"class="form-control" value="100.00"></td>
                <td>0.00</td>
              </tr>     
            </tbody>
          </table>
        </div>
        
        <div class="bk-group-2">
          <div class="bk-table-total-head">
            <div>
              <table class="bk-table" border="0">
                <thead>
                  <tr>
                    <th>TOTAL</th>
                    <th>99.25</th>
                    <th>THB</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
          <div class="bk-table-total-body">
            <table class="bk-table" border="0">
              <tbody>
                <tr>
                  <td>TOTAL BEFORE VAT</td>
                  <td>92.76</td>
                  <td>THB</td>
                </tr>
                <tr>
                  <td>VAT 7%</td>
                  <td>6.49</td>
                  <td>THB</td>
                </tr>
                <tr>
                  <td>TOTAL</td>
                  <td>99.25</td>
                  <td>THB</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="bk-textarea">
          	REMARK
          	<textarea class="form-control" rows="4" id="comment"></textarea>
          </div>
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

    </section>
</div>



    
    
@endsection


@section('script')
    <script src="{{ asset('js/back-office/accounting/credit-note-from-customer-return-order/create.js') }}"></script>
    <script type="text/javascript">
    	$(function () {
    		$('#datetimepicker').datetimepicker();
    	});
    </script>

@endsection
