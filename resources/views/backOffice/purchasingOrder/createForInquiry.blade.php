@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/purchasing-order/createForInquiry.css')}}"/>
@endsection

@section('module_name', 'PURCHASING ORDER (PO)')
@section('page_name', 'CREATE FOR INQUIRY')

@section('body')
<div class="x_content scroll-2">
<section>
    <form action="{{route("backOffice.purchasing-order.store")}}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="spaceContent content">

            <div class="top-content">
                <div class="w1120">
                    <div class="row">
                        <div class="col-xs-3">
                            <h4 class="text-black">PO #1</h4>
                            <div class="input-group date" id="datepicker" >
                                <input type="text" class="form-control" value=""/>
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar" ></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-xs-3 col-xs-offset-6 right-col text-right">
                            <div class="iq">IQ#</div>
                            <div class="iq-no">8888, 9999, 4444</div>
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
                                <option value="">CASH</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <label for="">CURRENCY</label>
                            <select id="basic" class="form-control">
                                <option value="">THB</option>
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

            <div class="w1120">
                <div id="itemList">
                    <table class="table table-headfix">
                        <thead>
                            <tr>
                                <th class="w-200">BARCODE | PRODUCT CODE | ITEM NAME</th>
                                <th class="w-100 text-center">WAREHOUSE</th>
                                <th class="w-70 text-center">TYPE</th>
                                <th class="w-120 text-center">
                                    <div>
                                        <strong>BALANCE</strong><br/>  
                                        <span class="text-light">(AVIL/REMAINDER)</span>
                                    </div>
                                </th>
                                <th class="w-70 text-center">QTY</th>
                                <th class="w-100 text-center">
                                    <div>
                                        <strong>PRICE/UNIT</strong><br/>  
                                        <span class="text-light">(BEFORE VAT)</span>
                                    </div>
                                </th>
                                <th class="w-100 text-center">
                                    <div>
                                        <strong>DISCOUNT</strong><br/>  
                                        (PER UNIT)
                                    </div>
                                </th>
                                <th class="w-100 text-center">
                                    <div>
                                        <strong>ESTIMATED SHIPPING FEE</strong><br/>  
                                        <span class="text-light">(PER UNIT)</span>
                                    </div>
                                </th>
                                <th class="w-100 text-center">
                                    <div>
                                        <strong>IMPORT DUTY</strong><br/>  
                                        <span class="text-light">(PER UNIT)</span>
                                    </div>
                                </th>
                                <th class="w-80 text-center">SUB TOAL</th>
                                <th class="w-50"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @for($i=1;$i<=5;$i++)
                            <tr>
                                <td class="w-200">PS4-G: CRASH BANDICOOT [R3][EN/th]</td>
                                <td class="w-100 text-center">1</td>
                                <td class="w-70 text-center">USED</td>
                                <td class="w-120 text-center"><span class="f-18">10</span>/20</td>
                                <td class="w-70"><input type="text" class="form-control"></td>
                                <td class="w-100"><input type="text" class="form-control"></td>
                                <td class="w-100"><input type="text" class="form-control"></td>
                                <td class="w-100"><input type="text" class="form-control"></td>
                                <td class="w-100"><input type="text" class="form-control"></td>
                                <td class="w-80 text-center">592.12</td>
                                <td class="w-50 text-right">USD</td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
                <br>
                <div id="itemList">
                    <table class="table table-headfix">
                        <thead>
                            <tr>
                                <th class="w-200">BARCODE / PRODUCT CODE / ITEM NAME</th>
                                <th class="w-100 text-center">WAREHOUSE</th>
                                <th class="w-70 text-center">TYPE</th>
                                <th class="w-120 text-center">
                                    <div>
                                        <strong>BALANCE</strong><br/>  
                                        <span class="text-light">(AVIL/REMAINDER)</span>
                                    </div>
                                </th>
                                <th class="w-70 text-center">QTY</th>
                                <th class="w-100 text-center">
                                    <div>
                                        <strong>PRICE/UNIT</strong><br/>  
                                        <span class="text-light">(BEFORE VAT)</span>
                                    </div>
                                </th>
                                <th class="w-100 text-center">
                                    <div>
                                        <strong>DISCOUNT</strong><br/>  
                                        <span class="text-light">(PER UNIT)</span>
                                    </div>
                                </th>
                                <th class="w-100 text-center">
                                    <div>
                                        <strong>ESTIMATED SHIPPING FEE</strong><br/>  
                                        <span class="text-light">(PER UNIT)</span>
                                    </div>
                                </th>
                                <th class="w-100 text-center">
                                    <div>
                                        <strong>IMPORT DUTY</strong><br/>  
                                        <span class="text-light">(PER UNIT)</span>
                                    </div>
                                </th>
                                <th class="w-80 text-center">SUB TOAL</th>
                                <th class="w-50"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @for($i=1;$i<=3;$i++)
                            <tr>
                                <td class="w-200 td-productname">
                                    <div class="col-sm-1">
                                        <a href="" class="text-danger"><i class="fa fa-trash"></i></a>
                                    </div>
                                    <div class="col-sm-11">
                                        <input type="text" name="" id="" class="form-control" data-action="typeaheadProduct">
                                    </div>
                                </td>
                                <td class="w-100 text-center"><select name="" id="" class="form-control"></select></td>
                                <td class="w-70 text-center">
                                        <select name="" id="" class="form-control">
                                            <option value="">USED</option>
                                            <option value="">NEW</option>
                                            <option value="">REPEAT</option>
                                        </select>
                                </td>
                                <td class="w-120 text-center"><span class="f-18">10</span>/20</td>
                                <td class="w-70"><input type="text" class="form-control"></td>
                                <td class="w-100"><input type="text" class="form-control"></td>
                                <td class="w-100"><input type="text" class="form-control"></td>
                                <td class="w-100"><input type="text" class="form-control"></td>
                                <td class="w-100"><input type="text" class="form-control"></td>
                                <td class="w-80 text-center">592.12</td>
                                <td class="w-50 text-right">USD</td>
                            </tr>
                            @endfor
                            <tr>
                                <td class="w-200 td-productname">
                                    <div class="col-sm-1">
                                    </div>
                                    <div class="col-sm-11">
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                </td>
                                <td class="w-100 text-center"><select name="" id="" class="form-control"></select></td>
                                <td class="w-70 text-center">
                                        <select name="" id="" class="form-control">
                                            <option value="">USED</option>
                                            <option value="">NEW</option>
                                            <option value="">REPEAT</option>
                                        </select>
                                </td>
                                <td class="w-120 text-center"></td>
                                <td class="w-70"><input type="text" class="form-control"></td>
                                <td class="w-100"><input type="text" class="form-control"></td>
                                <td class="w-100"><input type="text" class="form-control"></td>
                                <td class="w-100"><input type="text" class="form-control"></td>
                                <td class="w-100"><input type="text" class="form-control"></td>
                                <td class="w-80 text-cener"></td>
                                <td class="w-50 text-right"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="w1120">
                <table class="table">
                    <tr>
                        <td style="width: 50%">
                            <div class="form-group">
                                <label for="">REMARK</label>
                                <textarea name="" id="" rows="5" class="form-control"></textarea>
                            </div>
                        </td>
                        <td align="right">
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
                                    <td colspan="2" align="right"><strong class="text-black">Sub Total</strong></td>
                                    <td align="right" class="onlyText">88,888,888.88</td>
                                    <td><strong class="text-black">USD</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="4"><hr style="border-color: #ddd;"></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="right"><strong class="text-black">Total Before Vat</strong></td>
                                    <td align="right" class="onlyText">88,888,888.88</td>
                                    <td><strong class="text-black">USD</strong></td>
                                </tr>
                                <tr>
                                    <td align="right"><strong class="text-black">Vat</strong></td>
                                    <td style="width: 50px; padding-left: 10px;" class="text-black">
                                        <select name="" id="" class="form-control">
                                            <option value="" selected>7%</option>
                                        </select>
                                    </td>
                                    <td align="right" class="onlyText">88,888,888.88</td>
                                    <td><strong class="text-black">USD</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="font-size: 20px;" align="right"><strong class="text-black">Net Total</strong></td>
                                    <td align="right" style="font-size: 20px;" class="onlyText">88,888,888.88</td>
                                    <td style="font-size: 20px;"><strong class="text-black">USD</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>


            <div class="w1120" align="center">
                <hr style="border-color: #ddd;">
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
    <script src="{{ asset('js/back-office/purchasing-order/createForInquiry.js') }}"></script>
@endsection