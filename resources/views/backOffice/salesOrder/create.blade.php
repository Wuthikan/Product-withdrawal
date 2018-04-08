@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/sales-order/create.css')}}"/>
@endsection

@section('module_name', 'SALES ORDER (SO)')
@section('page_name', 'CREATE')

@section('body')
<div class="x_content">
  <div class="sales-order__create scroll-2">
    <form action="{{route("backOffice.sales-order.store")}}" method="POST" enctype="multipart/form-data">

      <div class="section-normal-info">
        <div class="row">
          <div class="col-xs-6">
            <div class="row">
              <div class="col-xs-6">
                <div class="from-group">
                  <label>Document Date</label>
                  <div class="input-group date" id="datepicker" >
                    <input type="text" class="form-control" value=""/>
                    <span class="input-group-addon">
                      <i class="fa fa-calendar" ></i>
                    </span>
                  </div>
                </div>
              </div>

              <div class="col-xs-6">
                <div class="from-group">
                  <label>Delivery Date</label>
                  <div class="input-group date" id="datepicker" >
                    <input type="text" class="form-control" value=""/>
                    <span class="input-group-addon">
                      <i class="fa fa-calendar" ></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-offset-6">
            <div class="order">
              <div class="order-number">
                <label>SO #</label>
                <p>1719499999</p>
              </div>

              <div class="customer-tier">
                <label>Customer Tier</label>
                <h3>PAD</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-4">
            <div class="form-group">
              <label>Customer Name</label>
              <input class="form-control" type="text" data-action="typeaheadCustomer">
            </div>
          </div>

          <div class="col-xs-4">
            <div class="form-group">
              <label>Billing Address</label>
              <select id="basic" class="form-control">
                <option>Samitivej Public Company Limited (Head Office) JB Krung Panich</option>
                <option>Samitivej Public Company Limited (Head Office) JB Krung Panich</option>
                <option>Samitivej Public Company Limited (Head Office) JB Krung Panich</option>
              </select>
            </div>
          </div>

          <div class="col-xs-4">
            <div class="form-group">
              <label>Shipping Address</label>
              <select id="basic" class="form-control">
                <option>Samitivej Public Company Limited (Head Office) JB Krung Panich</option>
                <option>Samitivej Public Company Limited (Head Office) JB Krung Panich</option>
                <option>Samitivej Public Company Limited (Head Office) JB Krung Panich</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-4">
            <div class="form-group">
              <label>Condition for payment</label>
              <select id="basic" class="form-control">
                <option>ตัวอย่างวงเงินเครดิต CRB</option>
                <option>ตัวอย่างวงเงินเครดิต CRB</option>
                <option>ตัวอย่างวงเงินเครดิต CRB</option>
              </select>
            </div>
          </div>

          <div class="col-xs-4">
            <div class="form-group">
              <label>Price structure</label>
              <select id="basic" class="form-control">
                <option>ราคาขายก่อนภาษี</option>
                <option>ราคาขายก่อนภาษี</option>
                <option>ราคาขายก่อนภาษี</option>
              </select>
            </div>
          </div>

          <div class="col-xs-4">
            <div class="form-group">
              <div class="credit-limit">
                <label>Credit limit</label>
                <span>88,888,888.88 THB</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section-pre-order">
        <div class="title">
          <span>Pre-order</span>(Only items releasing in 7 days)
        </div>

        <table class="table ngin-table">
          <thead>
            <tr>
              <th class="col-xs-3 name">Barcode/Product code/Item name</th>
              <th class="col-xs-1 warehouse">Warehouse</th>
              <th class="col-xs-1 delivery-date">PR Delivery date</th>
              <th class="col-xs-1">Preorder</th>
              <th class="col-xs-1">Allocation</th>
              <th class="col-xs-1">Pre-so (QTY)</th>
              <th class="col-xs-1">Price/Unit incl Vat</th>
              <th class="col-xs-1">Discount/Unit</th>
              <th class="col-xs-1 price-after">Price/Unit after account</th>
              <th class="col-xs-1" style="padding: 0;">
                <div style="width: 70%; display: inline-block;">Amount</div>
              </th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td class="col-xs-3 name">(NEW) PS4-G: FAR CRY [STANDARD EDITION] (R3)(EN)</td>
              <td class="col-xs-1 warehouse">
                <div class="form-group">
                  <select id="basic" class="form-control">
                    <option>Nothing Select</option>
                    <option>Nothing Select</option>
                    <option>Nothing Select</option>
                  </select>
                </div>
              </td>
              <td class="col-xs-1 delivery-date">01/01/2018</td>
              <td class="col-xs-1">90</td>
              <td class="col-xs-1">99</td>
              <td class="col-xs-1">
                <div class="form-group">
                  <input type="text" class="form-control">
                </div>
              </td>
              <td class="col-xs-1" style="text-align: right;">50.00 THB</td>
              <td class="col-xs-1" style="text-align: right;">(1.00 THB)</td>
              <td class="col-xs-1 price-after" style="text-align: right;">49.00 THB</td>
              <td class="col-xs-1" style="text-align: right; padding: 0;">
                <div style="width: 70%; display: inline-block;">4,312.00</div>
                <div style="width: 24%; display: inline-block;">THB</div>
              </td>
            </tr>

            <tr>
              <td class="col-xs-3 name">PS4-G: FINAL FANTACY XV [STD] (R3)(EN)</td>
              <td class="col-xs-1 warehouse">
                <div class="form-group">
                  <select id="basic" class="form-control">
                    <option>Nothing Select</option>
                    <option>Nothing Select</option>
                    <option>Nothing Select</option>
                  </select>
                </div>
              </td>
              <td class="col-xs-1 delivery-date">01/01/2018</td>
              <td class="col-xs-1">90</td>
              <td class="col-xs-1">99</td>
              <td class="col-xs-1">
                <div class="form-group">
                  <input type="text" class="form-control">
                </div>
              </td>
              <td class="col-xs-1" style="text-align: right;">100.00 THB</td>
              <td class="col-xs-1" style="text-align: right;">(10.00 THB)</td>
              <td class="col-xs-1 price-after" style="text-align: right;">90.00 THB</td>
              <td class="col-xs-1" style="text-align: right; padding: 0;">
                <div style="width: 70%; display: inline-block;">0.00</div>
                <div style="width: 24%; display: inline-block;">THB</div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="section-repeat-order">
        <div class="title">
          <span>Repeat Order</span>
        </div>

        <table class="table ngin-table">
          <thead>
            <tr>
              <th class="col-xs-4">Barcode/Product code/Item name</th>
              <th class="col-xs-2">Warehouse</th>
              <th class="col-xs-1">Balance (Available/Total)</th>
              <th class="col-xs-1">QTY</th>
              <th class="col-xs-1">Price/Unit incl Vat</th>
              <th class="col-xs-1">Discount/Unit</th>
              <th class="col-xs-1">Price/Unit after account</th>
              <th class="col-xs-1">
                <div style="width: 70%; display: inline-block;">Amount</div>
              </th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td class="col-xs-4">
                <div class="form-group">
                  <input type="text" class="form-control">
                </div>
              </td>
              <td class="col-xs-2">
                <div class="form-group">
                  <select id="basic" class="form-control">
                    <option>Nothing Select</option>
                    <option>Nothing Select</option>
                    <option>Nothing Select</option>
                  </select>
                </div>
              </td>
              <td class="col-xs-1">10/20</td>
              <td class="col-xs-1">
                <div class="form-group">
                  <input type="text" class="form-control">
                </div>
              </td>
              <td class="col-xs-1" style="text-align: right;">50.00 THB</td>
              <td class="col-xs-1" style="text-align: right;">(1.00 THB)</td>
              <td class="col-xs-1" style="text-align: right;">49.00 THB</td>
              <td class="col-xs-1" style="text-align: right; padding: 0;">
                <div style="width: 70%; display: inline-block;">4,312.00</div>
                <div style="width: 25%; display: inline-block;">THB</div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="section-summary">
        <div class="row">
          <div class="col-xs-5">
            <div class="form-group">
              <label>Remark</label>
              <textarea class="form-control" rows="4"> </textarea>
            </div>

            <div class="form-group">
              <label>Internal note</label>
              <textarea class="form-control" rows="4"> </textarea>
            </div>
          </div>

          <div class="col-xs-4">
            <div class="form-group">
              <label>Credit Note:</label><br/>
              <div>
                <input type="checkbox" name="iCheck" class="iCheck" checked>
                <span>CN#1 ส่วนลดเกม A @ 5 บาท x 50 แผ่น = 50 บาท</span><br/>
                <span style="color: #999; padding-left: 33px;">(ใช้ไปแล้ว 30 บาท คงเหลือ 20 บาท)</span>
              </div>
              <div>
                <input type="checkbox" name="iCheck" class="iCheck">
                <span>CN#2 ส่วนลดเกม B @ 5 บาท x 50 แผ่น = 50 บาท</span>
              </div>
              <div>
                <input type="checkbox" name="iCheck" class="iCheck">
                <span>CN#3 ส่วนลดเกม C @ 2 บาท x 2 แผ่น = 4 บาท</span>
              </div>
            </div>

            <div class="form-group">
              <label>Shipping Method:</label>
              <div class="row">
                <div class="col-xs-6">
                  <div><input type="radio" name="iChoose" class="iCheck" checked><span>จัดส่งโดย NGIN</span></div>
                  <div><input type="radio" name="iChoose" class="iCheck"><span>Kerry</span></div>
                  <div><input type="radio" name="iChoose" class="iCheck"><span>Registerd Email</span></div>
                </div>
                <div class="col-xs-6">
                  <div><input type="radio" name="iChoose" class="iCheck" checked><span>Pick up the item (รับเอง)</span></div>
                  <div><input type="radio" name="iChoose" class="iCheck"><span>EMS</span></div>
                  <div><input type="radio" name="iChoose" class="iCheck"><span>Other</span><span><input type="text" style="width: 100px;"></span>
                  </div>
                </div>
              </div>
            </div>

            <div class="balance">
              <table style="width: 100%;">
                <tr>
                  <th style="color: black;">Balance Deposit (Wallet):</th>
                  <td style="text-align: right;">4,444.44 <span style="color: #000; font-weight:bold;">THB</span></td>
                </tr>
                <tr>
                  <th style="color: black;">Deposit Use:</th>
                  <td style="text-align: right; color: red;">(4,444.44 THB)</td>
                </tr>
                <tr>
                  <th style="color: black;">Remaining Balance:</th>
                  <td style="text-align: right;">0.00 <span style="color: #000; font-weight:bold;">THB</span></td>
                </tr>
              </table>
            </div>
          </div>

          <div class="col-xs-3">
            <table id="summary" align="right" style="width: 100%; color: black;">
              <tr>
                  <td align="right"><strong>Total</strong></td>
                  <td align="right">88,888,88.88</td>
                  <td align="right"><strong>THB</strong></td>
              </tr>
              <tr>
                  <td align="right"><strong>Discount (On Top)</strong></td>
                  <td align="right" colspan="2" style="color: red;">(592.88 THB)</td>
              </tr>
              <tr>
                  <td align="right"><strong>Sub Total</strong></td>
                  <td align="right">88,888,88.88</td>
                  <td align="right"><strong>THB</strong></td>
              </tr>

              <tr>
                <td colspan="3"><hr style="border-color: #ddd; border-width: 2px;"></td>
              </tr>

              <tr>
                  <td align="right"><strong>Total Before Vat</strong></td>
                  <td align="right">88,888,88.88</td>
                  <td align="right"><strong>THB</strong></td>
              </tr>
              <tr>
                  <td align="right"><strong>Vat 7 %</strong></td>
                  <td align="right">88,888,88.88</td>
                  <td align="right"><strong>THB</strong></td>
              </tr>
              <tr>
                  <td align="right"><strong>Shipping Fee</strong></td>
                  <td align="right">
                    <select class="form-control">
                      <option>Test</option>
                      <option>Test</option>
                      <option>Test</option>
                    </select>
                  </td>
                  <td align="right"><strong>THB</strong></td>
              </tr>
              <tr>
                  <td align="right"><strong>Total Price</strong></td>
                  <td align="right">88,888,888.88</td>
                  <td align="right"><strong>THB</strong></td>
              </tr>
              <tr>
                  <td align="right"><strong>Credit Note</strong></td>
                  <td align="right" colspan="2" style="color: red;">(592.88 THB)</td>
              </tr>
              <tr>
                  <td align="right">
                    <input type="checkbox" class="iCheck"><strong style="padding-left: 5px;">Deposit Use</strong></td>
                  <td align="right" colspan="2" style="color: red;">(592.88 THB)</td>
              </tr>
              <tr style="font-size: 16px;">
                  <td align="right"><strong>Net Total</strong></td>
                  <td align="right">88,888,888.88</td>
                  <td align="right"><strong>THB</strong></td>
              </tr>
            </table>
          </div>
        </div>
      </div>

      <div class="section-promotions">
        <label>Promotions:</label>
        <ul>
          <li><span>"LOREM IPSUM":</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
          <li><span>"LOREM IPSUM":</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
          <li><span>"LOREM IPSUM":</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
        </ul>
      </div>
    </form>

    <div class="section-actions">
      <button type="button" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-save save" aria-hidden="true"></i> </span>SAVE SO</button>
      <button type="button" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-print primary" aria-hidden="true"></i> </span>PRINT</button>
      <button type="button" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i> </span>CANCEL</button>
      <button type="button" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-save save" aria-hidden="true"></i> </span>SAVE DRAFTED SO</button>
    </div>
  </div>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/sales-order/create.js') }}"></script>
@endsection
