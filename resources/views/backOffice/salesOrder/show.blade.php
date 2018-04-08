@extends('layouts.backOffice.template-with-right-sidebar1')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/sales-order/show.css')}}"/>
@endsection

@section('module_name', 'SALES ORDER(SO)')
@section('page_name', 'SHOW')

@section('body')
<div class="panel-content scroll-2" style="height: 100vh;">
    <div class="x_title show-scroll">
        <div class="padding" style="padding: 15px;">
            

            <div class="x_content">

                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <h4 class="title">SO #1</h4>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                            <img src="{{asset('/images/logo.png')}}" width="100" height="100" alt="" 
                            style="margin-top:40px">
                    </div>  
                    <div class="col-sm-4 col-md-4 col-lg-4 text-right" style="line-height: 1.1; font-size:1.7rem">
                        <div class="title">OVER CREDIT LIMIT:</div>
                        <div class="title">
                            <span class="letter-to" style="color: red;"><b>30,0000.00 </b></span>
                            THB
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 text-center mt-2">
                        <h4 class="text-uppercase">08 AUGUST 2018</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-7">
                        <span class="letter-to"><b>BILLING ADDRESS : </b></span>
                        <span>K Lorem ipsum, sale manager</span>            
                        <p class="letter-company">Sony Corporation (Head Office)</p>
                        <p class="letter-address">18, Kijpanich Building, Room 405, 4th Floor Patpong Road, Suriyawong Bangrak Bangkok 10500</p>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <span class="letter-to"><b>SHIPPING ADDRESS : </b></span>
                        <span>K Lorem ipsum, sale manager</span>
                        <p class="letter-company">Sony Corporation (Head Office)</p>
                        <p class="letter-address">18, Kijpanich Building, Room 405, 4th Floor Patpong Road, Suriyawong Bangrak Bangkok 10500</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-7">

                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <span class="letter-to"><b>CONTACTS INFO : </b></span>
                        <span>K Lorem ipsum, sale manager</span>        
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-7">

                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <span class="letter-to"><b>E-MAIL : </b></span>
                        <span>lorem@sale.com</span>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-7">

                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <span class="letter-to"><b>TEL : </b></span>
                        <span>+662-777-9988</span>          
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-7">
                        <span class="letter-to text-left"><b>SALES</b></span>
                        <p class="text-left font-black">K Lorem ipsum</p> 
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <span class="letter-to text-left"><b>PAYMENT DATE</b></span>
                        <p class="text-left font-black">2017-09-09</p>          
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <span class="letter-to  text-left"><b>SHIPPING DATE</b></span>
                        <p class="text-left font-black">2017-09-09</p>   

                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">

                        <table class="table ngin-table">
                            <thead>
                                <tr>                                
                                    <th class="col-md-2">CODE</th>
                                    <th class="col-md-4 text-left">DESCRIPTION</th>
                                    <th class="col-md-2">QTY</th>
                                    <th class="col-md-2">PRICE/UNIT</th>
                                    <th class="col-md-2">DESCOUNT</th>
                                    <th class="col-md-2">SUBTOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        PCAS-00073
                                    </td>
                                    <td class="text-left">
                                        <label><b>PS4-G</b></label>:
                                        <span class="font-weight">LOREM IPSUM DOLOR SIT AMET.</span>
                                    </td>
                                    <td>20</td>
                                    <td>20</td>
                                    <td>20</td>
                                    <td>20</td>
                                </tr>

                                <tr>
                                    <td>
                                        PCAS-00073
                                    </td>
                                    <td class="text-left">
                                        <label><b>PS4-G</b></label>:
                                        <span class="font-weight">LOREM IPSUM DOLOR SIT AMET.</span>
                                    </td>
                                    <td>20</td>
                                    <td>20</td>
                                    <td>20</td>
                                    <td>20</td>
                                </tr>


                                <tr>
                                    <td>
                                        PCAS-00073
                                    </td>
                                    <td class="text-left">
                                        <label><b>PS4-G</b></label>:
                                        <span class="font-weight">LOREM IPSUM DOLOR SIT AMET. CONSECTETUER ADIPISCING ELIT.</span>
    <!--                                    <div class="row mt-05" >
                                            <div class="col-md-8">
                                                <div class="panel panel-default panel-remark" style="width: 240px;">
                                                    <div class="panel-body text-left" style="padding-right: 10px;">
                                                        <p class="panel-title-remark" ><b>REMARK:</b></p>
                                                        <p class="font-weight" >lorem ipsum dolor sit amet. consectetur adipiscing elit. sed do eiusmod tempor incididunt ut labore et dolore magna
                                                            aliqua. ut enim ad minim veniam. quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commod consequat
                                                            duis aute irure dolor inreprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->

                                    </td>
                                    <td>20</td>
                                    <td>20</td>
                                    <td>20</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>
                                        PCAS-00073
                                    </td>
                                    <td class="text-left">
                                        <label><b>PS4-G</b></label>:
                                        <span class="font-weight">LOREM IPSUM DOLOR SIT AMET.</span>
                                    </td>
                                    <td>20</td>
                                    <td>20</td>
                                    <td>20</td>
                                    <td>20</td>
                                </tr>

                                <tr>
                                    <td>
                                        PCAS-00073
                                    </td>
                                    <td class="text-left">
                                        <label><b>PS4-G</b></label>:
                                        <span class="font-weight">LOREM IPSUM DOLOR SIT AMET.</span>
                                    </td>
                                    <td>20</td>
                                    <td>20</td>
                                    <td>20</td>
                                    <td>20</td>
                                </tr>


                                <tr>
                                    <td>
                                        PCAS-00073
                                    </td>
                                    <td class="text-left">
                                        <label><b>PS4-G</b></label>:
                                        <span class="font-weight">LOREM IPSUM DOLOR SIT AMET. CONSECTETUER ADIPISCING ELIT.</span>
    <!--                                    <div class="row mt-05">
                                            <div class="col-md-8">
                                                <div class="panel panel-default panel-remark" style="width: 240px;">
                                                    <div class="panel-body text-left" style="padding-right: 10px;">
                                                        <p class="panel-title-remark"><b>REMARK:</b></p>
                                                        <p class="font-weight">lorem ipsum dolor sit amet. consectetur adipiscing elit. sed do eiusmod tempor incididunt ut labore et dolore magna
                                                            aliqua. ut enim ad minim veniam. quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commod consequat
                                                            duis aute irure dolor inreprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->

                                    </td>
                                    <td>20</td>
                                    <td>20</td>
                                    <td>20</td>
                                    <td>20</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right font-black">
    <!--                                    <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="panel panel-default panel-remark" style="margin-top:20px;">
                                                    <div class="panel-body text-left">
                                                        <p class="panel-title-remark" style="margin-top:20px;" ><b>REMARK:</b></p>
                                                        <p class="font-weight">lorem ipsum dolor sit amet. consectetur adipiscing elit. sed do eiusmod tempor incididunt ut labore et dolore magna
                                                            aliqua. ut enim ad minim veniam. quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commod consequat
                                                            duis aute irure dolor inreprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                    </td>  
                                    <td colspan="2" class="text-right font-black">
                                        <p><h4><b>Total</b> </h4></p>
                                        <p><h4><b>Discount</b> </h4></p>
                                        <p><h4><b>Total Before VAT</b> </h4></p>
                                        <p><h4><b>VAT 7 %</b> </h4></p>  
                                        <p>&nbsp;</p>
                                        <p><h4><b>Total</b> </h4></p> 
                                    </td>

                                    <td colspan="1" class="text-right font-black">
                                        <p><h4>8,888,999</h4></p>
                                        <p><h4>8,888,999</h4></p>
                                        <p><h4>8,888,999</h4></p>
                                        <p><h4>8,888,999</h4></p>
                                        <p>&nbsp;</p>
                                        <p><b><h4>8,888,999</b></h4></p>
                                    </td>    
                                    <td colspan="1" class="text-right font-black">
                                        <p><h4><b>USD</b></h4></p>
                                        <p><h4><b>USD</b></h4></p>
                                        <p><h4><b>USD</b></h4></p>
                                        <p><h4><b>USD</b></h4></p>
                                        <p>&nbsp;</p>
                                        <p><h4><b>USD</b></h4></p>
                                    </td>
                                </tr>
                                <tr></tr>


                                <tr>
                                    <td colspan="6" class="text-left font-black">
                                        <span class="letter-to"><b>PROMOTION : </b></span>

                                        <p class="letter-company"></p>
                                        <ul style="padding-left:20px">
                                            <li>
                                                tetetet
                                            </li>
                                            <li>
                                                tetetet1
                                            </li>
                                            <li>
                                                tetetet2
                                            </li>
                                        </ul>
                                        <!-- <p>18, Kijpanich Building, Room 405, 4th Floor Patpong Road, Suriyawong Bangrak Bangkok 10500 18, Kijpanich Building, Room 405, 4th Floor Patpong Road, Suriyawong Bangrak Bangkok 1050018, Kijpanich Building,, Suriyawong Bangrak Bangkok 1050018, Kijpanich Building,, Kijpanich Building,, Suriyawong Bangrak Bangkok 1050018, Kijpanich Building,</p>                                    -->
                                    </td>                         
                                </tr>

                                <tr>
                                    <td colspan="6" class="text-right font-black">
                                    </td>                         
                                </tr>
                            </tfoot>

                        </table>

                    </div>
                </div>
    
                <div class="row mt-2 font-black" style="margin-top:30px">
                    <div class="col-xs-4">
                        <div class="row signature">
                            <div class="col-xs-12">
                                <div class="signature1">
                                </div>
                            </div>
                            <div class="col-xs-12 text-center">
                                <b>(LOREM IPSUM)</b>
                            </div>
                            <div class="col-xs-12 text-center">
                                <b>PROVIDER</b>
                            </div>
                            <div class="col-xs-12 ">
                                <b class="signature3">DATE: </b>
                                <div class="signature2">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-4">
                        <div class="row signature">
                            <div class="col-xs-12">
                                <div class="signature1">
                                </div>
                            </div>
                            <div class="col-xs-12 text-center">
                                <b>(LOREM IPSUM)</b>
                            </div>
                            <div class="col-xs-12 text-center">
                                <b>PROVIDER</b>
                            </div>
                            <div class="col-xs-12 ">
                                <b class="signature3">DATE: </b>
                                <div class="signature2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="row signature">
                            <div class="col-xs-12">
                                <div class="signature1">
                                </div>
                            </div>
                            <div class="col-xs-12 text-center">
                                <b>(LOREM IPSUM)</b>
                            </div>
                            <div class="col-xs-12 text-center">
                                <b>PROVIDER</b>
                            </div>
                            <div class="col-xs-12 ">
                                <b class="signature3">DATE: </b>
                                <div class="signature2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="row signature">
                            <div class="col-xs-12">
                                <div class="signature1">
                                </div>
                            </div>
                            <div class="col-xs-12 text-center">
                                <b>(LOREM IPSUM)</b>
                            </div>
                            <div class="col-xs-12 text-center">
                                <b>PROVIDER</b>
                            </div>
                            <div class="col-xs-12 ">
                                <b class="signature3">DATE: </b>
                                <div class="signature2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="row signature">
                            <div class="col-xs-12">
                                <div class="signature1">
                                </div>
                            </div>
                            <div class="col-xs-12 text-center">
                                <b>(LOREM IPSUM)</b>
                            </div>
                            <div class="col-xs-12 text-center">
                                <b>PROVIDER</b>
                            </div>
                            <div class="col-xs-12 ">
                                <b class="signature3">DATE: </b>
                                <div class="signature2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>



        </div>	

    </div>
</div>

@endsection

@section('right-sidebar')
<div class="x_title">
    <div class="x_content" style="padding:15px">
        <div class="row form-group">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center log-margin-buttom" >	
                <button type="button" class="btn btn-ngin btn-default" style="width: 70%;" data-toggle="modal" data-target="#myModal-1">
                    <span class="btn-label" style="float: left;"><i class="fa fa-file-text-o info" aria-hidden="true"></i></span>
                    <div style="display: inherit; margin-top: 3px;">Log</div>
                </button>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center log-margin-buttom" >
                <div class="upload-u">	
                    <div class="panel-content scroll-2" style="height:15vh;padding:5px">
                        @for($i = 0; $i<10; $i++)
                        <div class="row no-margin">
                            <div class="col-xs-2 no-padding text-left upload-pdf">
                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                            
                            </div>
                            <div class="col-xs-9 no-padding text-left ">
                                <div style="padding:00px 10px">
                                <b>Lorem i{{$i}}.pdf</b><br>
                                <div style="font-size:11px;">
                                20kb
                                    @if($i==2)
                                    <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                                    @else
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    @endif
                                </div>
                                </div>
                            </div>
                            <div class="col-xs-1 no-padding upload-cancel">
                                <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        @endfor
                    </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <hr style="margin:1rem">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="upload-btn-wrapper">
                                    <button class="btn1">Upload file</button>
                                    <input type="file" name="myfile" />
                                </div>  
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center email-margin-buttom">	
                <button type="button" class="btn btn-ngin btn-default" style="width: 70%;">
                    <span class="btn-label"  style="float: left;"><i class="fa fa-envelope-o info" aria-hidden="true"></i></span>
                    <div style="display: inherit; margin-top: 3px;">Send email</div>
                </button>
            </div>
        </div>
    
        <div class="row form-group">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center print-margin-buttom">	
                <button type="button" class="btn btn-ngin btn-default" style="width: 70%;">
                    <span class="btn-label"  style="float: left;"><i class="fa fa-print info" aria-hidden="true"></i></span>
                    <div style="display: inherit; margin-top: 3px;">Print</div>
                </button>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">	
                <table  style="margin-left: 25px;">
                    <tr>
                        <td class="text-rigth">APPROVED BY<span>:</span></td>
                        <td class="td-padding-left text-left">LOREM IPSUM</td>
                    </tr>
                    <tr>
                        <td class="text-rigth">APPROVED DATE<span>:</span></td>
                        <td class="td-padding-left text-left">18/20/57</td>
                    </tr>
                    <tr>
                        <td class="text-rigth">APPROVED TIME<span>:</span></td>
                        <td class="td-padding-left text-left">18:00</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center unapprve">	
                <button type="button" class="btn btn-ngin btn-default danger-no-icon btn-news-suc" 
                style="width: 100%; line-height: 1;">
                    Approve Draft SO
                   <br/>
                   <span style="font-size:1rem"> (lgnore Credit Limit) </span>
                    
                    <i class="fa fa-check" aria-hidden="true" style="padding-left: 15px;top:0;margin-top: 11px;position: absolute"></i>
                </button>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">	
                <table  style="margin-left: 25px;">
                    <tr>
                        <td class="text-rigth">APPROVED BY<span>:</span></td>
                        <td class="td-padding-left text-left">LOREM IPSUM</td>
                    </tr>
                    <tr>
                        <td class="text-rigth">APPROVED DATE<span>:</span></td>
                        <td class="td-padding-left text-left">18/20/57</td>
                    </tr>
                    <tr>
                        <td class="text-rigth">APPROVED TIME<span>:</span></td>
                        <td class="td-padding-left text-left">18:00</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center unapprve">	
                <button type="button" class="btn btn-ngin btn-default danger-no-icon" style="width: 100%;">
                    UnApprove
                    <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                </button>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center cencel">	
                <button type="button" class="btn btn-ngin btn-default ngin-no-icon" style="width: 100%;">
                    Cancel Document
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </div>
</div>


@endsection

@section('right-sidebar')
<div>Right Sidebar</div>
@endsection

@section('script')
<script src="{{ asset('js/back-office/sales-order/show.js') }}"></script>
@endsection
