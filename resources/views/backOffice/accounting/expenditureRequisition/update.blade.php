@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/back-office/accounting/expenditure-requisition/update.css')}}"/>
@endsection

@section('module_name', 'EXPENSE REQUISITION ADJUSTMENT')
@section('page_name', 'CREATE')

@section('body')
<div class="scroll-2">
<div id="expense-create">
  <div class="row font-black-bold font-weight-bold">
    <div class="col-xs-4 text-center">
      DEPARTMENT
    </div> 
    <div class="col-xs-4 text-center">
      REFUND (CLAIM)
    </div> 
    <div class="col-xs-4 text-center">
      REFERENCING DOCUMENT NUMBER
    </div> 
  </div>

  <div class="row font-size-big" style="margin-top:20px">
    <div class="col-xs-4 text-center">
      Sales
    </div> 
    <div class="col-xs-4 text-center">
      SONY INTERACTIVE</br>
      ENTERTAINMENT INC.
    </div> 
    <div class="col-xs-4 text-center">
      88888888
    </div> 
  </div>

  <div class="row font-black-bold font-weight-bold" style="margin-top:30px">
    <div class="col-xs-4 text-center">
      COMPANY
    </div> 
    <div class="col-xs-4 text-center">
      EVENTS
    </div> 
    <div class="col-xs-4 text-center">
      REMARKS
    </div> 
  </div>

  <div class="row font-size-middle" style="margin-top:20px">
    <div class="col-xs-4 text-center  font-size-big">
      AdiwIT Co., Ltd.
    </div> 
    <div class="col-xs-4 text-center">
      Lorem lpsum Dolor Sit
    </div> 
    <div class="col-xs-4 text-center">
      Lorem lpsum Dolor Sit
    </div> 
  </div>


  <div style="margin:30px 0px">
    <table class="table account-ledger">
      <thead class="font-black-bold">
        <tr>
          <td>
              ITEM NAME
          </td>
          <td>
            ACCOUNT LEDGER
          </td>
          <td class="text-center">
            QTY
          </td>
          <td class="text-center" style="width:135px">
            PRICE / UNIT<br/>
            <label class="f-w-n">(EXCEL. VAT)</label>
          </td>
          <td class="text-center" style="width:135px">
            DISCOUNT / UNIT<br/>
            <label class="f-w-n">(EXCEL. VAT)</label>
          </td>
          <td class="text-center" style="width:120px">
            ADDITIONAL <br/>
            DISCOUNT <br/>
            <label class="f-w-n">(EXCEL. VAT)</label>
          </td>
          <td class="text-center" style="width:125px">
            TOTAL AMOUNT<br/>
            <label class="f-w-n">(EXCEL. VAT)</label>
          </td>
          <td class="text-center">
            WHT
          </td>

        </tr>
      </thead>
      <tbody>
        @for($i=0; $i<5; $i++)
        <tr>
          <td>
              ค่าเช่า
          </td>
          <td>
            <div>
                <select id="basic" class="form-control">
                  <option>50001 ค่าเช่า</option>
                  <option>text-2</option>
                  <option>text-3</option>
                  <option>text-4</option>
                  <option>text-5</option>
                  <option>text-6</option>
                </select>
              </div>
          </td>
          <td class="text-center">
            1
          </td>
          <td class="text-right">
            {{ rand(1,100) }},000.00 THB
          </td>
          <td class="text-right">
            {{ rand(1,100) }},000.00 THB
          </td>
          
          <td>
            <input type="text" class="form-control">
          </td>
          <td class="text-right">
            {{ rand(1,100) }},000.00 THB
          </td>
          
          <td>
            <div>
                <select id="basic" class="form-control">
                  <option>5%</option>
                  <option>text-2</option>
                  <option>text-3</option>
                  <option>text-4</option>
                  <option>text-5</option>
                  <option>text-6</option>
                </select>
            </div>
          </td>

        </tr>
        @endfor
        <tr>
          <td colspan="8">
            <div class="row">
              <div class="col-xs-10 text-right font-black-bold">
              DISCOUNT 1,000 THB
              </div>
            </div>
          </td>
        </tr>
      </tbody>
        
    </table>
  </div>
  <!-- Total -->
  <div class="row total">
    <div class="col-xs-8 col-xs-offset-4">
      <div class="row d-flex align-items-center">
        <div class="col-xs-9 text-right font-black-bold">
            TOTAL
        </div> 
        <div class="col-xs-2 text-right font-size-xs">
            111,000.00
        </div> 
        <div class="col-xs-1 text-right font-black-bold">
            THB
        </div> 
      </div>
      <div class="row d-flex align-items-center">
        <div class="col-xs-9 text-right font-black-bold">
            VAT 7%
        </div> 
        <div class="col-xs-2 text-right font-size-xs">
            7,700.00
        </div> 
        <div class="col-xs-1 text-right font-black-bold">
            THB
        </div> 
      </div>
      <div class="row d-flex align-items-center">
        <div class="col-xs-9 text-right font-black-bold">
            SUB TOTAL
        </div> 
        <div class="col-xs-2 text-right font-size-xs">
            118,700.00
        </div> 
        <div class="col-xs-1 text-right font-black-bold">
            THB
        </div> 
      </div>
      <div class="row d-flex align-items-center">
        <div class="col-xs-9 text-right font-black-bold">
            WHT 5%
        </div> 
        <div class="col-xs-2 text-right color-danger font-size-xs">
            (50.00)
        </div> 
        <div class="col-xs-1 text-right font-black-bold">
            THB
        </div> 
      </div>
      <div class="row d-flex align-items-center">
        <div class="col-xs-9 text-right font-black-bold">
            WHT 3%
        </div> 
        <div class="col-xs-2 text-right color-danger font-size-xs">
            (30.00)
        </div> 
        <div class="col-xs-1 text-right font-black-bold">
            THB
        </div> 
      </div>
      <div class="row d-flex align-items-center">
        <div class="col-xs-9 text-right font-black-bold">
            WHT 1%
        </div> 
        <div class="col-xs-2 text-right color-danger font-size-xs">
            (995.00)
        </div> 
        <div class="col-xs-1 text-right font-black-bold">
            THB
        </div> 
      </div>
      <div class="row d-flex align-items-center font-black-bold">
        <div class="col-xs-9 text-right font-size-middle">
            NETPAID AMOUNT
        </div> 
        <div class="col-xs-2 text-right font-size-big">
            117,625.00
        </div> 
        <div class="col-xs-1 text-right font-size-middle">
            THB
        </div> 
      </div>
    </div>
  </div>
  <!--End Total -->

  <!-- remark -->
  <div class="row" style="margin : 30px 0px">
    <div class="form-group font-black-bold">
        <label for="exampleInputPassword1" class="text-remark">Remark</label>
          <textarea class="form-control" rows="4"  placeholder="textarea"> </textarea>
    </div>
  </div>
  <!-- end remark -->
  <div class="row" style="margin : 30px 0px">
    <div class="col-xs-12 text-center">	
      <button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{ url("back-office/inquiry") }}'">
          <span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i></span>SAVE</button>
        <button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{ url("back-office/inquiry") }}'">
          <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL</button>
    </div>
  </div>

  
  <div class="row">
    <div class="col-xs-4">
    
    </div> 
    <div class="col-xs-4">
    
    </div> 
    <div class="col-xs-4">
    
    </div> 
  </div>
</div>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/logistic/inventory/create.js') }}"></script>
@endsection