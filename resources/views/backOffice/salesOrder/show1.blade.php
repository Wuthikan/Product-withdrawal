@extends('layouts.backOffice.template-with-right-sidebar')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/sales-order/show.css')}}"/>
@endsection

@section('module_name', 'SALES ORDER(SO)')
@section('page_name', 'SHOW')

@section('body')
<div class="x_title show-scroll">
    <div class="padding">
        <h4 class="title">SO #1</h4>
        <div class="x_content"  >

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <img src="{{asset('/images/logo.png')}}" width="100" height="100" alt="">
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
                                    <p>18, Kijpanich Building, Room 405, 4th Floor Patpong Road, Suriyawong Bangrak Bangkok 10500 18, Kijpanich Building, Room 405, 4th Floor Patpong Road, Suriyawong Bangrak Bangkok 1050018, Kijpanich Building,, Suriyawong Bangrak Bangkok 1050018, Kijpanich Building,, Kijpanich Building,, Suriyawong Bangrak Bangkok 1050018, Kijpanich Building,</p>                                   
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
   
            <div class="row mt-2 font-black">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                            <p>&nbsp;</p>
                            <p><b>SIGNED : </b><span class="text-underline"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                            <p><b>(LOREM IPSUM)</b></p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                            <p>&nbsp;</p>
                            <p><b>APPROVER : </b><span class="text-underline"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                            <p><b>(LOREM IPSUM)</b></p>
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
    <h2> </h2>
    <div class="x_content">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center log-margin-buttom">	
                <button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#myModal-1">
                    <span class="btn-label"><i class="fa fa-file-text-o info" aria-hidden="true"></i></span>Log</button>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 text-center email-margin-buttom">	
            <button type="button" class="btn btn-ngin btn-default">
                <span class="btn-label"><i class="fa fa-envelope-o info" aria-hidden="true"></i></span>Send email</button>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 text-center print-margin-buttom">	
        <button type="button" class="btn btn-ngin btn-default">
            <span class="btn-label"><i class="fa fa-print info" aria-hidden="true"></i></span>Print</button>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12 text-center">	
        <table >
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
    <div class="col-sm-12 col-md-12 col-lg-12 text-center unapprve">	
        <button type="button" class="btn btn-ngin btn-default danger-no-icon">
            UnApprove
            <i class="fa fa-times-circle-o" aria-hidden="true"></i></button>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 text-center cencel">	
        <button type="button" class="btn btn-ngin btn-default ngin-no-icon">
            Cancel Document
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i></button>
    </div>
</div>
</div>
</div>
</div>
@endsection
@section('modal')
Modal 
<div id="myModal-1" class="modal fade" role="dialog">
    <div class="modal-dialog">

        Modal content
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="fa fa-file-text-o" aria-hidden="true"></i>Log</h4>
            </div>
            <div class="modal-body scroll-2">										
                <table class="table ngin-table">
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
                            <td>Approve</td>
                        </tr>
                        <tr>
                            <td>29/08/2017</td>
                            <td>C</td>
                            <td>App</td>
                            <td>UnApprove</td>
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



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#myModal-1">
                    <span class="btn-label " style="padding: 4px 10px!important;"><i class="fa fa-thumbs-o-up ngin-green" aria-hidden="true"></i></span>OK</button>
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
