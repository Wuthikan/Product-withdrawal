@extends('layouts.backOffice.template')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/accounting/payment/create.css')}}"/>
@endsection

@section('module_name', 'PAYMENT')
@section('page_name', 'CREATE')

@section('body')


<div class="x_content">

    <div class="row form-group">
        <div class="col-xs-5">
            <div class="form-group">
                <label class="hd1">SUPPLIER</label>
                <input class="form-control" type="text" placeholder="AdiWit co., Ltd.(Branch 090909) 18" data-action="typeaheadProduct">
            </div>
        </div>
        <div class="col-xs-5">
          <div class="form-group">
              <label class="hd1">SUPPLIER REFERRENCING DOCUMENT</label>
              <input class="form-control" type="text">
          </div>
        </div>
        <div class="col-xs-2">
          <div class="">
			<label for="date">
              <label class="hd1">DATE<label>
            </label>
            <div class="input-group date" id="datetimepicker2">
              <input type="text" class="form-control">
              <span class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </span>
            </div>
          </div>
        </div>
        
    </div>
    <!-- body -->
    @for($y=0;$y<=1;$y++)
    <section>
        <div class="row py">
            <div class="col-xs-12">
                <label class="hd">PO #1</label>
            </div>
            <table class="table payment">
                <thead>
                    <tr>
                        <td colspan='2'>
                            BARCODE | PRODUCT CODE | ITEM NAME
                        </td>
                        <td class="text-center">
                            QTY
                        </td>
                        <td class="text-center">
                            TOTAL DEBT
                        </td>
                        <td>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @for($i=0;$i<5;$i++)
                    <tr>
                        <td style="width:12%">
                            PCAS-8888888
                        </td>
                        <td>
                            PS4-G: Lorem ipsum ldlsadlsa (Unit)
                        </td>
                        <td class="text-center">
                            88
                        </td>
                        <td class="text-center">
                            2,222.22
                        </td>
                        <td>
                            USD
                        </td>
                    </tr>
                    @endfor
                    <tr>
                        <td style="width:12%">
                        </td>
                        <td>
                        </td>
                        <td class="text-right">
                            <label class="total">TOTAL</label>
                        </td>
                        <td class="text-center">
                            <label class="total">8,888.88</label>
                        </td>
                        <td>
                            <label class="total">USD</label>
                        </td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
        
            
    </section>
    @endfor
    <!--end body -->  
    <!-- credit -->
    <section>
         <div class="row py">
            <div class="col-xs-12">
                <label class="hd1">CREDIT NOTE  FROM SUPPLIERt:</label>
            </div>
            <table class="table sup">
                <tbody>
                    @for($i=0;$i<=1;$i++)
                    <tr>
                        <td style="width:5%">
                            <input type="checkbox" class="iCheck" > 
                        </td>
                        <td>
                            CN # 000001
                        </td>
                        <td class="">
                            FFXV
                        </td>
                        <td class="text-center">
                            0.1 USD x 11.11 unit =(1,111.10 USD)
                        </td>
                        <td>
                            USED 0.00 USD of 1,111.1 USD REMAINING 1,111.00 USD
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
        
    </section>
    <!-- end credit -->
    <!-- PAYMENT -->
    <section>
        <table class="table payment1">
                <thead>
                    <tr>
                        <td colspan='4'>
                            <label class="hd1">PAYMENT</label>
                        </td>
                        <td class="text-center">
                            <label class="hd1">EXCHANGE</label>
                        </td>
                        <td class="text-center">
                            <label class="hd1">BANK FEE</label>
                        </td>
                        
                    </tr>
                </thead>
                <tbody>
                    @for($i=0;$i<5;$i++)
                    <tr>
                        <td>
                            KBANK
                        </td>
                        <td>
                            888-88
                        </td>
                        <td>
                            <input class="form-control" placeholder="">
                        </td>
                        <td class="text-center">
                            THB
                        </td>
                        <td>
                            <div class="form-inline">
                                <label class="mr-right-ma">1 USD</label>
                                <input class="form-control" placeholder="">
                                <label class="mr-left-ma">THB</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-inline">
                                <input class="form-control" placeholder="">
                                <label class="mr-left-ma">BATH</label>
                            </div>
                        </td>
                    </tr>
                    @endfor
                    
                </tbody>
        </table>
    </section>
    <!--end PAYMENT -->
    <!-- PHOTO -->
    <section>
        <table class="table photo">
                <thead>
                    <tr>
                        <td>
                            <label class="hd1">REMARK</label>
                        </td>
                        <td>
                            <label colspan="3" class="hd1">PHOTO</label>
                        </td>
                        <td>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="2">
                            <textarea class="form-control" style="height: 23vh;"></textarea>
                        </td>
                        <td style="width: 110px;">
                            <div class="box-box">
                                <i class="fa fa-camera"></i>
                            </div>
                        </td>
                        <td style="width: 110px;">
                            <div class="box-box">
                                <i class="fa fa-camera"></i>
                            </div>
                        </td>
                        <td style="width: 110px;">
                            <div class="box-box">
                                <i class="fa fa-camera"></i>
                            </div>
                        </td>
                        <td rowspan="2" style="width:25%">
                            <div class="row">
                                <div class="col-xs-8 text-right hd2">
                                    TOTAL PO AMOUNT
                                </div>
                                <div class="col-xs-4">
                                    11,111.10 USD
                                </div>
                                <div class="col-xs-8 text-right hd2">
                                    PAID BY CREDIT NOTE
                                </div>
                                <div class="col-xs-4">
                                    (11,111.10 USD)
                                </div>
                                <div class="col-xs-8 text-right hd2">
                                    NET PAID
                                </div>
                                <div class="col-xs-4">
                                    9,000.00 USD
                                </div>
                                <div class="col-xs-8 text-right hd2">
                                    TOTAL PAYMENT <br/>
                                    (ADVANCED TO WALLET)
                                </div>
                                <div class="col-xs-4">
                                    11,111.10 USD
                                </div>
                                <div class="col-xs-8 text-right hd2">
                                    PA BALANCE
                                </div>
                                <div class="col-xs-4">
                                    (1,000.0 USD)
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="box-box">
                                <i class="fa fa-camera"></i>
                            </div>
                        </td>
                        <td>
                            <div class="box-box">
                                <i class="fa fa-plus"></i>
                            </div>
                        </td>
                        <td>
                            <div class="box-box">
                                <i class="fa fa-plus"></i>
                            </div>
                        </td>
                        <td>
                        </td>
                    </tr>
                    
                </tbody>
        </table>
    </section>
    <!--end PHOTO -->
    
        
</div>

<!-- modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                 <div class="row">
                    <div class="col-xs-6">
                        <label class="overdue-h">OVERDUE</label>
                    </div>
                    <div class="col-xs-6 text-right">
                        DUE 01/08/2018
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <label class="hd">
                            <i class="fa fa-file-alt"></i> PO # 15
                        </label>
                    </div>
                    <div class="col-xs-6 text-right">
                        <label class="hd">200,000 USD</label>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <table class="table overdue">
                    <thead>
                        <tr>
                            <td>
                                <label class="hd1">PA #</label>
                            </td>
                            <td>
                                <label class="hd1">DATE</label>
                            </td>
                            <td class="text-right">
                                <label class="hd1">PIAD AMOUNT</label>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=0;$i<=2;$i++)
                        <tr>
                            <td>
                                888
                            </td>
                            <td>
                                18/08/2018
                            </td>
                            
                            <td class="text-right">
                                88,888.88 USD
                            </td>
                        </tr>
                        @endfor
                        <tr>
                            <td colspan="3" class="text-right">
                            <label class="hd1">100,000 USD</label>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                            <label class="hd1">UNDER PAYMENT</label>
                            </td>
                            <td colspan="2" class="text-right">
                                (100,000) USD
                            </td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-ngin btn-default">
                <span class="btn-label"><i class="fa fa-pencil" aria-hidden="true"></i></span>PAY
            </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- end modal -->
@endsection

@section('script')
<script src="{{ asset('js/back-office/accounting/payment/create.js') }}"></script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker2').datetimepicker({
                viewMode: 'days',
                format: 'DD/MM/YYYY'
            });
            $('#myModal').modal('show')   
    });
</script>

@endsection