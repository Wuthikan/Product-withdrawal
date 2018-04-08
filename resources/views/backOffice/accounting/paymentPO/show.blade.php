@extends('layouts.backOffice.template-with-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/accounting/payment/show.css')}}"/>
@endsection

@section('body')
<div class="x_content contentBox">
    <div class="content scroll-2">
        <section>
            
            <div class="clearfix">
                <div class="pull-left">
                    <h4 class="text-black">Payment #1</h4>
                </div>
                <div class="pull-right">
                    <h5 class="text-black no-margin"><strong>PAYMENT DATE</strong></h5>
                    <h3 class="no-margin">04/09/2017</h3>
                </div>
            </div>
            <p>
            <div align="center">
                <img src="{{asset('images/logo.png')}}" alt="" style="min-width: 100px; max-width: 120px;">
            </div>
            </p>
            <br>
            <p>
                <div class="row">
                    <div class="col-xs-12 col-sm-7">
                        <div class="row">
                            <div class="col-xs-12 col-sm-10">
                                <table class="table table-nobordered">
                                    <tr>
                                        <td class="paymentInfo" style="width:50%">
                                            <div><strong class="text-black">PO#</strong></div>
                                            <div>88888888</div>
                                        </td>
                                        <td class="paymentInfo">
                                            <div><strong class="text-black">DOCUMENT DATE#</strong></div>
                                            <div style="font-size: 15px">
                                                08 AUGUST 2018
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="paymentInfo text-black" style="padding-top: 20px;">
                                            <div><strong>FROM BANK ACCOUNT#</strong></div>
                                            <div><strong>[KBANK] xx888-8</strong></div>
                                        </td>
                                        <td class="paymentInfo text-black" style="padding-top: 20px;">
                                            <div><strong>PAYMENT AMOUNT#</strong></div>
                                            <div><strong>4,444.44</strong></div>
                                        </td>
                                    </tr>
                                </table>
                                <div>
                                    <div class="supplier">
                                        Sony Corporation (Head Office)
                                        <br>
                                        <small>
                                            <p>
                                                18, Kijpanich Building, Room 405, 4th Floor<br>
                                                Patpong Road, Suriyawong, Bangkok<br>
                                                Bangkok 10500
                                            </p>
                                            TAX ID : 8-8888-88888-88-88
                                        </small>
                                    </div>
                                </div>
                                <div style="padding-top: 40px;">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5" align="center">
                        <p><strong class="text-black">ATTACH DOCUMENTS</strong></p>
                        <div class="upload-btn-wrapper">
                            <img src="{{asset('images/thumbnail.png')}}" class="documentPreview">
                            <input type="file" name="myfile" id="documentUploadField"/>
                        </div>
                    </div>
                </div>
            </p>
        </section>
        <section>
            <table class="table itemList">
                <thead>
                    <tr>
                        <th class="text-center">CODE</th>
                        <th>DESCRIPTION</th>
                        <th class="text-center">QTY</th>
                        <th class="text-center">PRICE</th>
                        <th class="text-center">PAID AMOUNT</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i =0; $i<10; $i++)
                    <tr>
                        <td align="center">PCAS-00073</td>
                        <td>
                            @if($i==0) <strong class="text-black">PGS4-G : </strong> @endif Lorem ipsum dolor sit amet. consectetuer adipiscing elit.
                        </td>
                        <td align="center">20</td>
                        <td align="center">20</td>
                        <td align="center">-</td>
                    </tr>
                    @endfor
                </tbody>
            </table>
            <div style="margin-top: 40px;">
            <table class="table table-nobordered">
                <tr>
                    <td style="width: 50%; vertical-align:middle;" rowspan="3">
                        <strong class="text-black">Exchange rate 1 USD: </strong> 888.88 <strong class="text-black">Baht</strong>
                    </td>
                    <td class="text-uppercase" align="right"><strong class="text-black">PAID AMOUNT</strong></td>
                    <td align="right" style="width: 150px;">4,444.44</td>
                    <td style="width: 42px;"><strong class="text-black">BAHT</strong></td>
                </tr>
                <tr>
                    <td class="text-uppercase" align="right"><strong class="text-black">BANK FEE</strong></td>
                    <td align="right">8,8888,888.88</td>
                    <td><strong class="text-black">BAHT</strong></td>
                </tr>
                <tr class="text-black">
                    <td class="text-uppercase" align="right" style="font-size: 20px"><strong>TOTAL PAID AMOUNT</strong></td>
                    <td align="right" colspan="2"><span style="font-size: 20px">88,888,888.88</span> <strong>BAHT</strong></td>
                </tr>
            </table>
            </div>

            <div style="margin-top: 50px">
            <table class="table table-nobordered text-black">
                <tr>
                    <td style="width: 50%">
                        <table class="signature">
                            <tr>
                                <td style="width: 60px;" rowspan="2" valign="top">
                                    <strong class="text-uppercase">Signed : </strong>
                                </td>
                                <td>
                                    <div>&nbsp;</div>
                                </td>
                            </tr>
                            <tr>
                                <td align="center"><p style="padding-top: 10px;">(LOREM IPSUM)</p></td>
                            </tr>
                        </table>
                    </td>
                    <td align="center">
                        <table class="signature">
                            <tr>
                                <td style="width: 80px;" rowspan="2" valign="top">
                                    <strong class="text-uppercase">Approver : </strong>
                                </td>
                                <td>
                                    <div>&nbsp;</div>
                                </td>
                            </tr>
                            <tr>
                                <td align="center"><p style="padding-top: 10px;">(LOREM IPSUM)</p></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            </div>
        </section>
    </div>
</div>
<div class="x_content modalBox">
    <div class="content scroll-2">
        <div>
            <h4><span class="btn-label"><i class="fa fa-file-text info" aria-hidden="true"></i></span> Log</h4>
            <p>
                <table class="table logList">
                    <thead>
                        <tr>
                            <th>DATE</th>
                            <th>USER</th>
                            <th>CHANNEL</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>02/09/2017</td>
                            <td>A</td>
                            <td>App</td>
                            <td>New</td>
                        </tr>
                        <tr>
                            <td>01/09/2017</td>
                            <td>B</td>
                            <td>App</td>
                            <td>Approved</td>
                        </tr>
                        <tr>
                            <td>29/08/2017</td>
                            <td>C</td>
                            <td>App</td>
                            <td>UnApproved</td>
                        </tr>
                        <tr>
                            <td>28/08/2017</td>
                            <td>D</td>
                            <td>App</td>
                            <td>Approve</td>
                        </tr>
                        <tr>
                            <td>27/08/2017</td>
                            <td>E</td>
                            <td>App</td>
                            <td>Delete</td>
                        </tr>
                    </tbody>
                </table>
            </p>
            <p align="center">
                <button type="button" class="btn btn-ngin btn-default" id="closeLogBtn">
                    <span class="btn-label"><i class="fa fa-thumbs-o-up success" aria-hidden="true"></i></span> OK
                </button>
            </p>
        </div>
    </div>
</div>
@endsection

@section('right-sidebar')
<div class="showCtrl" align="center">
    <p>
        <button type="button" class="btn btn-ngin btn-default" id="showLogBtn">
            <span class="btn-label"><i class="fa fa-file-text-o info" aria-hidden="true"></i></span>Log
        </button>
    </p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <p>
        <button type="button" class="btn btn-ngin btn-default">
            <span class="btn-label"><i class="fa fa-envelope info" aria-hidden="true"></i></span>Send Email
        </button>
    </p>
    <p>
        <button type="button" class="btn btn-ngin btn-default">
            <span class="btn-label"><i class="fa fa-print info" aria-hidden="true"></i></span>Print
        </button>
    </p>
    <br>
    <p>
        <table>
            <tr>
                <td align="right"><strong class="text-uppercase">Approved : </strong></td>
                <td>&nbsp;LOREM IPSUM</td>
            </tr>
            <tr>
                <td align="right"><strong class="text-uppercase">Approved Date : </strong></td>
                <td>&nbsp;18/20/57</td>
            </tr>
            <tr>
                <td align="right"><strong class="text-uppercase">Approved Time : </strong></td>
                <td>&nbsp;18:00</td>
            </tr>
        </table>
    </p>
    <p>
        <button type="button" class="btn btn-ngin btn-danger actionBtn" style="background: #fd0000 !important">
            UnApprove <i class="fa fa-dot-circle-o info-circle" aria-hidden="true"></i></span>
        </button>
    </p>
    <p>
        <button type="button" class="btn btn-ngin btn-default actionBtn">
            Cancel Document <i class="fa fa-exclamation info-circle" aria-hidden="true" style="color: #38393a; background: #fff; border-radius: 50px; padding: 2px 4px 0px; font-size: 11px;"></i></span>
        </button>
    </p>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/accounting/payment/show.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            //Set Label Header Page
            $('#lbHeaderPage').html("<h3>PAYMENT | <span>SHOW</span></h3>");
        });
    </script>
@endsection