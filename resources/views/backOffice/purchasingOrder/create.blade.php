@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/purchasing-order/create.css')}}"/>
@endsection

@section('module_name', 'PURCHASING ORDER (PO)')
@section('page_name', 'CREATE')

@section('body')
<div class="x_content scroll-2">
<section>
    <form action="{{route("backOffice.purchasing-order.store")}}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="spaceContent">
          <div class="first-row">
              <div class="row">
                  <div class="col-md-6">
                    <div class="date-time">
                        <h4 class="text-black">PO #1</h4>
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
        </div>

        <div class="w800">
            <div class="row">
                <div class="col-xs-9">
                    <div class="label">SUPPLIER:</div>
                    <div class="sup-content">
                        <div class="sup-image">
                            <img src="{{ asset('images/backOffice/purchasingOrder/adiwit_logo.jpg') }}" class="img-responsive">
                        </div>
                        <div class="sup-detail">
                            <input type="text" class="form-control">
                            <div><strong>18 Kijpanit Bld. Patpong Rd., Suriyawong, Bangrak, Bangkok THA 10500</strong></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <label for="">DUE DATE</label>
                    <div class="input-group date" id="datepicker" >
                        <input type="text" class="form-control" value=""/>
                        <span class="input-group-addon">
                            <i class="fa fa-calendar" ></i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-3">
                    <div class="col-form-group">
                        <label for="">PAYMENT CONDITION</label>
                        <select id="basic" class="form-control">
                            <option value="">30 DAY CREDIT</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <label for="">CURRENCY</label>
                        <select id="basic" class="form-control">
                            <option value="">USD</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-4">
                    <label for="">SHIPPING DATE</label>
                    <div class="input-group date shipping_date" id="datepicker" >
                        <input type="text" class="form-control" value=""/>
                        <span class="input-group-addon">
                            <i class="fa fa-calendar" ></i>
                        </span>
                    </div>
                </div>
                <div class="col-xs-3">
                    <label for="">ORDER LIMIT</label>
                    <div class="limit_amount">88,888,888 USD</div>
                </div>
            </div>
        </div>

        <div class="spaceContent">
            <div id="itemList">
                <table class="table table-headfix">
                    <thead>
                        <tr class="header">
                            <th class="align-left w-300">BARCODE | PRODUCT CODE | ITEM NAME</th>
                            <th class="text-center w-90">WAREHOUSE</th>
                            <th class="text-center w-80">TYPE</th>
                            <th class="text-center w-130">BALANCE <span class="text-light">(AVAIL/REMAINDER)</span></th>
                            <th class="text-center w-70">QTY</th>
                            <th class="text-center w-100">PRICE / UNIT<br/><span class="text-light">(BEFORE VAT)</span></th>
                            <th class="text-center w-90">DISCOUNT<br/><span class="text-light">(PER UNIT)</span></th>
                            <th class="text-center w-90">ESTIMATED FREIGHT AND SHIPPING FEE<br/><span class="text-light">(PER UNIT)</span></th>
                            <th class="text-center w-90">ESTIMATED IMPORT DUTY<br/><span class="text-light">(PER UNIT)</span></th>
                            <th class="text-center w-80">SUB TOTAL</th>
                            <th class="text-center w-50"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=0;$i<10;$i++)
                        <tr>
                            <td class="w-300 td-productname">
                                <div class="col-sm-1">
                                    <a href="" class="text-danger"><i class="fa fa-trash"></i></a>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="PRODUCT" data-action="typeaheadProduct">
                                </div>
                            </td>
                            <td class="w-90">
                                <select class="form-control">
                                    <option value="">a</option>
                                    <option value="">b</option>
                                    <option value="">c</option>
                                </select>
                            </td>
                            <td class="w-80">
                                <select class="form-control">
                                    <option value="">USED</option>
                                    <option value="">NEW</option>
                                    <option value="">REPEAT</option>
                                </select>
                            </td>
                            <td class="w-130 text-center"><span style="font-size: 22px">10</span>/20</td>
                            <td class="w-70"><input type="text" class="form-control"></td>
                            <td class="w-100"><input type="text" class="form-control"></td>
                            <td class="w-90"><input type="text" class="form-control"></td>
                            <td class="w-90"><input type="text" class="form-control"></td>
                            <td class="w-90"><input type="text" class="form-control"></td>
                            <td class="w-80 text-center">90.00</td>
                            <td class="text-right w-50">USD</td>
                        </tr>
                        @endfor

                        <tr>
                                <td class="w-300 td-productname">
                                    <div class="col-sm-1">
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="PRODUCT" data-action="typeaheadProduct">
                                    </div>
                                </td>
                                <td class="w-90">
                                    <select class="form-control">
                                        <option value="">a</option>
                                        <option value="">b</option>
                                        <option value="">c</option>
                                    </select>
                                </td>
                                <td class="w-80">
                                    <select class="form-control">
                                        <option value="">USED</option>
                                        <option value="">NEW</option>
                                        <option value="">REPEAT</option>
                                    </select>
                                </td>
                                <td class="w-130 text-center"><span style="font-size: 22px"></td>
                                <td class="w-70"><input type="text" class="form-control"></td>
                                <td class="w-100"><input type="text" class="form-control"></td>
                                <td class="w-90"><input type="text" class="form-control"></td>
                                <td class="w-90"><input type="text" class="form-control"></td>
                                <td class="w-90"><input type="text" class="form-control"></td>
                                <td class="w-80 text-center"></td>
                                <td class="text-right w-50"></td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="summary">
            <table class="table">
                <tr>
                    <td class="col-md-6">
                        <div class="form-group">
                            <label for="">REMARK</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </td>
                    <td align="right" class="col-md-6">
                        <table id="summary" align="right">
                            <tr>
                                <td colspan="2" align="right"><strong class="text-black">Total</strong></td>
                                <td align="right" class="onlyText">88,888,888.88</td>
                                <td><strong class="text-black">USD</strong></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="right"><strong class="text-black">Discount</strong></td>
                                <td align="right"><input type="text" class="form-control" value="88,888,888.88" style="text-align: right"></td>
                                <td><strong class="text-black">USD</strong></td>
                            </tr>
                            <tr>
                                <td colspan="4"><hr style="border-color: #ddd;" /></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="right"><strong class="text-black">Total Before VAT</strong></td>
                                <td align="right" class="onlyText">88,888,888.88</td>
                                <td><strong class="text-black">USD</strong></td>
                            </tr>
                            <tr>
                                <td align="right"><strong class="text-black vat">VAT</strong></td>
                                <td class="text-black" style="width: 70px; padding-left: 0;">
                                    <select name="" id="" class="form-control">
                                        <option value="" selected>7%</option>
                                    </select>
                                </td>
                                <td align="right" class="onlyText">88,888,888.88</td>
                                <td><strong class="text-black">USD</strong></td>
                            </tr>
                            <tr class="text-black">
                                <td colspan="2" align="right"><strong id='total'>NET Total</strong></td>
                                <td align="right" class="onlyText"><span id="total">88,888,888.88</span></td>
                                <td><strong>USD</strong></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>

        <div class="spaceContent">
            <div class="button-actions" align="center">
                <button type="button" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-print primary" aria-hidden="true"></i> </span>PRINT</button>
                <button type="submit" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i> </span>SAVE</button>
                <button type="button" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i> </span>CANCEL</button>
            </div>
        </div>
    </form>
</section>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/purchasing-order/create.js') }}"></script>
@endsection
