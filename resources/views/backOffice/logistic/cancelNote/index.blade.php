@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/logistic/cancel-note/index.css')}}"/>
@endsection
@section('module_name', 'CANCEL NOTE')
@section('page_name', 'INDEX')
@section('body')
<div class="x_content"> 
    <section class="section-header-index">
        <form class="form-inline form-header-index">
            <div class="row">
                <table>
                    <tr>
                        <td class="col-1" style="min-width: 160px;width: 10%">
                            <div class="col-1-content" >
                                <div class="form-group select-all">
                                    <input type="checkbox"  checked class="iCheck" id="selectall" name="selectall" > 
                                    <label for="selectall" class="iCheck-label" >Select All</label>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-default-background" onclick="window.location = '{{ url("back-office/logistic/cancel-note/create") }}'">
                                            <span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
                                    </button>
                                </div>
                            </div>
                        </td>
                        <td class="col-2" style="width: 80%">
                            <div class="" >
                                <div class="form-group form-fixed-width" >
                                    <div class="icon-addon addon-sm">
                                        <input  type="text" placeholder="SEARCH" class="form-control search" id="SEARCH" >
                                        <label for="search"  class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="col-3" style="min-width: 130px;width: 8%">

                            <div class="text-right col-3-content">
                                <div class="form-group">
                                    <button type="button" class="btn  btn-default-background">
                                        <span class="btn-label"><i class="fa fa-file-pdf-o pdf" aria-hidden="true"></i></i></span><span class="btn-label-label">PDF</span>
                                    </button>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn  btn-default-background">
                                        <span class="btn-label"><i class="fa fa-file-excel-o excel" aria-hidden="true"></i></i></span><span class="btn-label-label">Excel</span>
                                    </button>
                                </div>

                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </section>

    <div id="exTab2" class="">
        <ul class="nav nav-tabs">
            <li >
                <a  href="#1" data-toggle="tab">
                    <span>
                        <i class="fa fa-money" aria-hidden="true"></i>
                    </span>
                    SO
                </a>
            </li>
            <li>
                <a href="#2" data-toggle="tab">
                    <span>
                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                    </span>
                    BORROW ITEM
                </a>
            </li>
            <li class="active">
                <a href="#3" data-toggle="tab">
                    <span>
                        <i class="fa fa-hourglass-end" aria-hidden="true"></i>
                    </span>
                    BACKLOG
                </a>
            </li>
            <li>
                <a href="#4" data-toggle="tab">
                    <span>
                        <i class="fa fa-check" aria-hidden="true"></i>
                    </span>
                    COMPLETED
                </a>
            </li>
        </ul>

        <div class="tab-content scroll-2">



            <!--  tab  !-->
            <div class="tab-pane" id="1">
                <div class="panel-group " id="backlog" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                                    <table class="table ">
                                        <tbody>
                                            <tr>
                                                <td class="tr-checkbox" style="width:2%"  >
                                                    <input type="checkbox" class="iCheck" />
                                                </td>
                                                <td  style="font-size: 14px;width:38%" ><b>SO #9999</b> 04/09/2017
                                                    <p></p>Simple Company  <span class="tr-data-small"> Headquarters</span>
                                                </td>

                                                <td class="tr-data-small" style="width:10%"><b>LIST BY </b><P>Nof</P></td>
                                                <td class="pending" style="width:10%">                                                                     
                                                    <table>
                                                        <tr>
                                                            <td> <i class="fa fa-circle-o-notch fa-lg" aria-hidden="true"></i>  </td>
                                                            <td><small>                                          
                                                                    <div>PENDING FOR APPROVE</div>                              
                                                                </small></td>
                                                        </tr>
                                                    </table> 
                                                </td>

                                                <td style="width:10%">
                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <table>
                                                            <tr>
                                                                <td>  <span class="btn-label"><i class="fa fa-truck" aria-hidden="true"></i></span> </td>
                                                                <td><small class="ngin-orange" >                                          
                                                                        <div class="button-return"> 
                                                                            RETURNS PRODUCT </div>                              
                                                                    </small></td>
                                                            </tr>
                                                        </table> 
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body scroll-2">
                                <table class="table ngin-table">
                                    <thead>
                                        <tr>
                                            <th class="text-left">BARCODE / PRODUCT CODE / ITEM NAME</th>
                                            <th>SERIAL NUMBER </th>
                                            <th>AMOUNT </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left" >88888888 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">888888</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">99999999 : 3DS-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">99999</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">333333333 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">2222</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">44444444 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">500</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">555555555 : 3DS-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">300</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">66666666 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">500</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapseTwo1" aria-expanded="true" aria-controls="collapseTwo">
                                    <table class="table ">
                                        <tbody>
                                            <tr>
                                                <td class="tr-checkbox" style="width:2%"  >
                                                    <input type="checkbox" class="iCheck" />
                                                </td>
                                                <td  style="font-size: 14px;width:38%" ><b>SO #9999</b> 04/09/2017
                                                    <p></p>Simple Company  <span class="tr-data-small"> Headquarters</span>
                                                </td>

                                                <td class="tr-data-small" style="width:10%"><b>LIST BY </b><P>Nof</P></td>
                                                <td class="pending" style="width:10%">                                                                     
                                                    <table>
                                                        <tr>
                                                            <td> <i class="fa fa-circle-o-notch fa-lg" aria-hidden="true"></i>  </td>
                                                            <td><small>                                          
                                                                    <div>PENDING FOR APPROVE</div>                              
                                                                </small></td>
                                                        </tr>
                                                    </table> 
                                                </td>

                                                <td style="width:10%">
                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <table>
                                                            <tr>
                                                                <td>  <span class="btn-label"><i class="fa fa-truck" aria-hidden="true"></i></span> </td>
                                                                <td><small class="ngin-orange" >                                          
                                                                        <div class="button-return"> 
                                                                            RETURNS PRODUCT </div>                              
                                                                    </small></td>
                                                            </tr>
                                                        </table> 
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body scroll-2">
                                <table class="table ngin-table">
                                    <thead>
                                        <tr>
                                            <th class="text-left">BARCODE / PRODUCT CODE / ITEM NAME</th>
                                            <th>SERIAL NUMBER </th>
                                            <th>AMOUNT </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left" >88888888 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">888888</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">99999999 : 3DS-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">99999</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">333333333 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">2222</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">44444444 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">500</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">555555555 : 3DS-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">300</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">66666666 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">500</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingthree">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapsethree1" aria-expanded="true" aria-controls="collapsethree">
                                    <table class="table ">
                                        <tbody>
                                            <tr>
                                                <td class="tr-checkbox" style="width:2%"  >
                                                    <input type="checkbox" class="iCheck" />
                                                </td>
                                                <td  style="font-size: 14px;width:38%" ><b>SO #9999</b> 04/09/2017
                                                    <p></p>Simple Company  <span class="tr-data-small"> Headquarters</span>
                                                </td>

                                                <td class="tr-data-small" style="width:10%"><b>LIST BY </b><P>Nof</P></td>
                                                <td class="pending" style="width:10%">                                                                     
                                                    <table>
                                                        <tr>
                                                            <td> <i class="fa fa-circle-o-notch fa-lg" aria-hidden="true"></i>  </td>
                                                            <td><small>                                          
                                                                    <div>PENDING FOR APPROVE</div>                              
                                                                </small></td>
                                                        </tr>
                                                    </table> 
                                                </td>

                                                <td style="width:10%">
                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <table>
                                                            <tr>
                                                                <td>  <span class="btn-label"><i class="fa fa-truck" aria-hidden="true"></i></span> </td>
                                                                <td><small class="ngin-orange" >                                          
                                                                        <div class="button-return"> 
                                                                            RETURNS PRODUCT </div>                              
                                                                    </small></td>
                                                            </tr>
                                                        </table> 
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                            </h4>
                        </div>
                        <div id="collapsethree1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthree">
                            <div class="panel-body scroll-2">
                                <table class="table ngin-table">
                                    <thead>
                                        <tr>
                                            <th class="text-left">BARCODE / PRODUCT CODE / ITEM NAME</th>
                                            <th>SERIAL NUMBER </th>
                                            <th>AMOUNT </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left" >88888888 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">888888</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">99999999 : 3DS-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">99999</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">333333333 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">2222</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">44444444 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">500</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">555555555 : 3DS-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">300</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">66666666 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">500</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                </div>    
            </div>
            <!--  tab  !-->



            <!--  tab  !-->
            <div class="tab-pane" id="2">
                <div class="panel-group " id="backlog" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne">
                                    <table class="table ">
                                        <tbody>
                                            <tr>
                                                <td class="tr-checkbox" style="width:2%"  >
                                                    <input type="checkbox" class="iCheck" />
                                                </td>
                                                <td  style="font-size: 14px;width:38%" ><b>SO #9999</b> 04/09/2017
                                                    <p></p>Simple Company  <span class="tr-data-small"> Headquarters</span>
                                                </td>

                                                <td class="tr-data-small" style="width:10%"><b>LIST BY </b><P>Nof</P></td>
                                                <td class="pending" style="width:10%">                                                                     
                                                    <table>
                                                        <tr>
                                                            <td> <i class="fa fa-circle-o-notch fa-lg" aria-hidden="true"></i>  </td>
                                                            <td><small>                                          
                                                                    <div>PENDING FOR APPROVE</div>                              
                                                                </small></td>
                                                        </tr>
                                                    </table> 
                                                </td>

                                                <td style="width:10%">
                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <table>
                                                            <tr>
                                                                <td>  <span class="btn-label"><i class="fa fa-truck" aria-hidden="true"></i></span> </td>
                                                                <td><small class="ngin-orange" >                                          
                                                                        <div class="button-return"> 
                                                                            RETURNS PRODUCT </div>                              
                                                                    </small></td>
                                                            </tr>
                                                        </table> 
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body scroll-2">
                                <table class="table ngin-table">
                                    <thead>
                                        <tr>
                                            <th class="text-left">BARCODE / PRODUCT CODE / ITEM NAME</th>
                                            <th>SERIAL NUMBER </th>
                                            <th>AMOUNT </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left" >88888888 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">888888</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">99999999 : 3DS-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">99999</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">333333333 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">2222</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">44444444 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">500</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">555555555 : 3DS-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">300</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">66666666 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">500</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapseTwo2" aria-expanded="true" aria-controls="collapseTwo">
                                    <table class="table ">
                                        <tbody>
                                            <tr>
                                                <td class="tr-checkbox" style="width:2%"  >
                                                    <input type="checkbox" class="iCheck" />
                                                </td>
                                                <td  style="font-size: 14px;width:38%" ><b>SO #9999</b> 04/09/2017
                                                    <p></p>Simple Company  <span class="tr-data-small"> Headquarters</span>
                                                </td>

                                                <td class="tr-data-small" style="width:10%"><b>LIST BY </b><P>Nof</P></td>
                                                <td class="pending" style="width:10%">                                                                     
                                                    <table>
                                                        <tr>
                                                            <td> <i class="fa fa-circle-o-notch fa-lg" aria-hidden="true"></i>  </td>
                                                            <td><small>                                          
                                                                    <div>PENDING FOR APPROVE</div>                              
                                                                </small></td>
                                                        </tr>
                                                    </table> 
                                                </td>

                                                <td style="width:10%">
                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <table>
                                                            <tr>
                                                                <td>  <span class="btn-label"><i class="fa fa-truck" aria-hidden="true"></i></span> </td>
                                                                <td><small class="ngin-orange" >                                          
                                                                        <div class="button-return"> 
                                                                            RETURNS PRODUCT </div>                              
                                                                    </small></td>
                                                            </tr>
                                                        </table> 
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body scroll-2">
                                <table class="table ngin-table">
                                    <thead>
                                        <tr>
                                            <th class="text-left">BARCODE / PRODUCT CODE / ITEM NAME</th>
                                            <th>SERIAL NUMBER </th>
                                            <th>AMOUNT </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left" >88888888 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">888888</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">99999999 : 3DS-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">99999</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">333333333 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">2222</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">44444444 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">500</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">555555555 : 3DS-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">300</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">66666666 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">500</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingthree">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapsethree2" aria-expanded="true" aria-controls="collapsethree">
                                    <table class="table ">
                                        <tbody>
                                            <tr>
                                                <td class="tr-checkbox" style="width:2%"  >
                                                    <input type="checkbox" class="iCheck" />
                                                </td>
                                                <td  style="font-size: 14px;width:38%" ><b>SO #9999</b> 04/09/2017
                                                    <p></p>Simple Company  <span class="tr-data-small"> Headquarters</span>
                                                </td>

                                                <td class="tr-data-small" style="width:10%"><b>LIST BY </b><P>Nof</P></td>
                                                <td class="pending" style="width:10%">                                                                     
                                                    <table>
                                                        <tr>
                                                            <td> <i class="fa fa-circle-o-notch fa-lg" aria-hidden="true"></i>  </td>
                                                            <td><small>                                          
                                                                    <div>PENDING FOR APPROVE</div>                              
                                                                </small></td>
                                                        </tr>
                                                    </table> 
                                                </td>

                                                <td style="width:10%">
                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <table>
                                                            <tr>
                                                                <td>  <span class="btn-label"><i class="fa fa-truck" aria-hidden="true"></i></span> </td>
                                                                <td><small class="ngin-orange" >                                          
                                                                        <div class="button-return"> 
                                                                            RETURNS PRODUCT </div>                              
                                                                    </small></td>
                                                            </tr>
                                                        </table> 
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                            </h4>
                        </div>
                        <div id="collapsethree2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthree">
                            <div class="panel-body scroll-2">
                                <table class="table ngin-table">
                                    <thead>
                                        <tr>
                                            <th class="text-left">BARCODE / PRODUCT CODE / ITEM NAME</th>
                                            <th>SERIAL NUMBER </th>
                                            <th>AMOUNT </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left" >88888888 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">888888</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">99999999 : 3DS-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">99999</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">333333333 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">2222</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">44444444 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">500</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">555555555 : 3DS-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">300</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">66666666 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">500</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                </div>    
            </div>
            <!--  tab  !-->




            <!--  tab  !-->
            <div class="tab-pane active" id="3">
                <div class="panel-group " id="backlog" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <table class="table ">
                                        <tbody>
                                            <tr>
                                                <td class="tr-checkbox" style="width:2%"  >
                                                    <input type="checkbox" class="iCheck" />
                                                </td>
                                                <td  style="font-size: 14px;width:38%" ><b>SO #9999</b> 04/09/2017
                                                    <p></p>Simple Company  <span class="tr-data-small"> Headquarters</span>
                                                </td>

                                                <td class="tr-data-small" style="width:10%"><b>LIST BY </b><P>Nof</P></td>
                                                <td class="pending" style="width:10%">                                                                     
                                                    <table>
                                                        <tr>
                                                            <td> <i class="fa fa-circle-o-notch fa-lg" aria-hidden="true"></i>  </td>
                                                            <td><small>                                          
                                                                    <div>PENDING FOR APPROVE</div>                              
                                                                </small></td>
                                                        </tr>
                                                    </table> 
                                                </td>

                                                <td style="width:10%">
                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <table>
                                                            <tr>
                                                                <td>  <span class="btn-label"><i class="fa fa-truck" aria-hidden="true"></i></span> </td>
                                                                <td><small class="ngin-orange" >                                          
                                                                        <div class="button-return"> 
                                                                            RETURNS PRODUCT </div>                              
                                                                    </small></td>
                                                            </tr>
                                                        </table> 
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body scroll-2">
                                <table class="table ngin-table">
                                    <thead>
                                        <tr>
                                            <th class="text-left">BARCODE / PRODUCT CODE / ITEM NAME</th>
                                            <th>SERIAL NUMBER </th>
                                            <th>AMOUNT </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left" >88888888 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">888888</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">99999999 : 3DS-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">99999</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">333333333 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">2222</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">44444444 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">500</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">555555555 : 3DS-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">300</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">66666666 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">500</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <table class="table ">
                                        <tbody>
                                            <tr>
                                                <td class="tr-checkbox" style="width:2%"  >
                                                    <input type="checkbox" class="iCheck" />
                                                </td>
                                                <td  style="font-size: 14px;width:38%" ><b>SO #9999</b> 04/09/2017
                                                    <p></p>Simple Company  <span class="tr-data-small"> Headquarters</span>
                                                </td>

                                                <td class="tr-data-small" style="width:10%"><b>LIST BY </b><P>Nof</P></td>
                                                <td class="pending" style="width:10%">                                                                     
                                                    <table>
                                                        <tr>
                                                            <td> <i class="fa fa-circle-o-notch fa-lg" aria-hidden="true"></i>  </td>
                                                            <td><small>                                          
                                                                    <div>PENDING FOR APPROVE</div>                              
                                                                </small></td>
                                                        </tr>
                                                    </table> 
                                                </td>

                                                <td style="width:10%">
                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <table>
                                                            <tr>
                                                                <td>  <span class="btn-label"><i class="fa fa-truck" aria-hidden="true"></i></span> </td>
                                                                <td><small class="ngin-orange" >                                          
                                                                        <div class="button-return"> 
                                                                            RETURNS PRODUCT </div>                              
                                                                    </small></td>
                                                            </tr>
                                                        </table> 
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body scroll-2">
                                <table class="table ngin-table">
                                    <thead>
                                        <tr>
                                            <th class="text-left">BARCODE / PRODUCT CODE / ITEM NAME</th>
                                            <th>SERIAL NUMBER </th>
                                            <th>AMOUNT </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left" >88888888 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">888888</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">99999999 : 3DS-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">99999</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">333333333 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">2222</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">44444444 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">500</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">555555555 : 3DS-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">300</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">66666666 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">500</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingthree">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapsethree" aria-expanded="true" aria-controls="collapsethree">
                                    <table class="table ">
                                        <tbody>
                                            <tr>
                                                <td class="tr-checkbox" style="width:2%"  >
                                                    <input type="checkbox" class="iCheck" />
                                                </td>
                                                <td  style="font-size: 14px;width:38%" ><b>SO #9999</b> 04/09/2017
                                                    <p></p>Simple Company  <span class="tr-data-small"> Headquarters</span>
                                                </td>

                                                <td class="tr-data-small" style="width:10%"><b>LIST BY </b><P>Nof</P></td>
                                                <td class="pending" style="width:10%">                                                                     
                                                    <table>
                                                        <tr>
                                                            <td> <i class="fa fa-circle-o-notch fa-lg" aria-hidden="true"></i>  </td>
                                                            <td><small>                                          
                                                                    <div>PENDING FOR APPROVE</div>                              
                                                                </small></td>
                                                        </tr>
                                                    </table> 
                                                </td>

                                                <td style="width:10%">
                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <table>
                                                            <tr>
                                                                <td>  <span class="btn-label"><i class="fa fa-truck" aria-hidden="true"></i></span> </td>
                                                                <td><small class="ngin-orange" >                                          
                                                                        <div class="button-return"> 
                                                                            RETURNS PRODUCT </div>                              
                                                                    </small></td>
                                                            </tr>
                                                        </table> 
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                            </h4>
                        </div>
                        <div id="collapsethree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthree">
                            <div class="panel-body scroll-2">
                                <table class="table ngin-table">
                                    <thead>
                                        <tr>
                                            <th class="text-left">BARCODE / PRODUCT CODE / ITEM NAME</th>
                                            <th>SERIAL NUMBER </th>
                                            <th>AMOUNT </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left" >88888888 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">888888</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">99999999 : 3DS-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">99999</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">333333333 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">2222</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">44444444 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">500</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">555555555 : 3DS-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">300</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">66666666 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">500</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                </div>    
            </div>
            <!--  tab  !-->


            <!--  tab  !-->
            <div class="tab-pane" id="4">
                <div class="panel-group " id="backlog" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapseOne4" aria-expanded="true" aria-controls="collapseOne">
                                    <table class="table ">
                                        <tbody>
                                            <tr>
                                                <td class="tr-checkbox" style="width:2%"  >
                                                    <input type="checkbox" class="iCheck" />
                                                </td>
                                                <td  style="font-size: 14px;width:38%" ><b>SO #9999</b> 04/09/2017
                                                    <p></p>Simple Company  <span class="tr-data-small"> Headquarters</span>
                                                </td>

                                                <td class="tr-data-small" style="width:10%"><b>LIST BY </b><P>Nof</P></td>
                                                <td class="pending" style="width:10%">                                                                     
                                                    <table>
                                                        <tr>
                                                            <td> <i class="fa fa-circle-o-notch fa-lg" aria-hidden="true"></i>  </td>
                                                            <td><small>                                          
                                                                    <div>PENDING FOR APPROVE</div>                              
                                                                </small></td>
                                                        </tr>
                                                    </table> 
                                                </td>

                                                <td style="width:10%">
                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <table>
                                                            <tr>
                                                                <td>  <span class="btn-label"><i class="fa fa-truck" aria-hidden="true"></i></span> </td>
                                                                <td><small class="ngin-orange" >                                          
                                                                        <div class="button-return"> 
                                                                            RETURNS PRODUCT </div>                              
                                                                    </small></td>
                                                            </tr>
                                                        </table> 
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body scroll-2">
                                <table class="table ngin-table">
                                    <thead>
                                        <tr>
                                            <th class="text-left">BARCODE / PRODUCT CODE / ITEM NAME</th>
                                            <th>SERIAL NUMBER </th>
                                            <th>AMOUNT </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left" >88888888 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">888888</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">99999999 : 3DS-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">99999</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">333333333 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">2222</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">44444444 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">500</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">555555555 : 3DS-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">300</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">66666666 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">500</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapseTwo4" aria-expanded="true" aria-controls="collapseTwo">
                                    <table class="table ">
                                        <tbody>
                                            <tr>
                                                <td class="tr-checkbox" style="width:2%"  >
                                                    <input type="checkbox" class="iCheck" />
                                                </td>
                                                <td  style="font-size: 14px;width:38%" ><b>SO #9999</b> 04/09/2017
                                                    <p></p>Simple Company  <span class="tr-data-small"> Headquarters</span>
                                                </td>

                                                <td class="tr-data-small" style="width:10%"><b>LIST BY </b><P>Nof</P></td>
                                                <td class="pending" style="width:10%">                                                                     
                                                    <table>
                                                        <tr>
                                                            <td> <i class="fa fa-circle-o-notch fa-lg" aria-hidden="true"></i>  </td>
                                                            <td><small>                                          
                                                                    <div>PENDING FOR APPROVE</div>                              
                                                                </small></td>
                                                        </tr>
                                                    </table> 
                                                </td>

                                                <td style="width:10%">
                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <table>
                                                            <tr>
                                                                <td>  <span class="btn-label"><i class="fa fa-truck" aria-hidden="true"></i></span> </td>
                                                                <td><small class="ngin-orange" >                                          
                                                                        <div class="button-return"> 
                                                                            RETURNS PRODUCT </div>                              
                                                                    </small></td>
                                                            </tr>
                                                        </table> 
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body scroll-2">
                                <table class="table ngin-table">
                                    <thead>
                                        <tr>
                                            <th class="text-left">BARCODE / PRODUCT CODE / ITEM NAME</th>
                                            <th>SERIAL NUMBER </th>
                                            <th>AMOUNT </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left" >88888888 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">888888</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">99999999 : 3DS-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">99999</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">333333333 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">2222</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">44444444 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">500</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">555555555 : 3DS-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">300</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">66666666 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">500</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingthree">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#backlog" href="#collapsethree4" aria-expanded="true" aria-controls="collapsethree">
                                    <table class="table ">
                                        <tbody>
                                            <tr>
                                                <td class="tr-checkbox" style="width:2%"  >
                                                    <input type="checkbox" class="iCheck" />
                                                </td>
                                                <td  style="font-size: 14px;width:38%" ><b>SO #9999</b> 04/09/2017
                                                    <p></p>Simple Company  <span class="tr-data-small"> Headquarters</span>
                                                </td>

                                                <td class="tr-data-small" style="width:10%"><b>LIST BY </b><P>Nof</P></td>
                                                <td class="pending" style="width:10%">                                                                     
                                                    <table>
                                                        <tr>
                                                            <td> <i class="fa fa-circle-o-notch fa-lg" aria-hidden="true"></i>  </td>
                                                            <td><small>                                          
                                                                    <div>PENDING FOR APPROVE</div>                              
                                                                </small></td>
                                                        </tr>
                                                    </table> 
                                                </td>

                                                <td style="width:10%">
                                                    <button type="button" class="btn btn-ngin btn-default">
                                                        <table>
                                                            <tr>
                                                                <td>  <span class="btn-label"><i class="fa fa-truck" aria-hidden="true"></i></span> </td>
                                                                <td><small class="ngin-orange" >                                          
                                                                        <div class="button-return"> 
                                                                            RETURNS PRODUCT </div>                              
                                                                    </small></td>
                                                            </tr>
                                                        </table> 
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </a>
                            </h4>
                        </div>
                        <div id="collapsethree4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthree">
                            <div class="panel-body scroll-2">
                                <table class="table ngin-table">
                                    <thead>
                                        <tr>
                                            <th class="text-left">BARCODE / PRODUCT CODE / ITEM NAME</th>
                                            <th>SERIAL NUMBER </th>
                                            <th>AMOUNT </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left" >88888888 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">888888</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">99999999 : 3DS-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">99999</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">333333333 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">2222</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">44444444 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">500</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">555555555 : 3DS-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">300</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">66666666 : PS4-G MIITO Lorem ipsum dolor sit amet, comsectetuer adipiscing elit m sed diam</td>
                                            <td class="text-right" style="text-align: right; padding-right: 40px !important;">-</td>
                                            <td class="text-right" style="text-align: right; padding-right: 25px !important;">500</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                </div>    
            </div>
            <!--  tab  !-->








        </div>

    </div>


    <div class="row page-showing-pagination">
        <div class="col-xs-6 showing">
            Showing 1-10 of 100
        </div>
        <div class="col-xs-6 page-pagination">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-number">
                        <a href="#" aria-label="Previous" class="not-active">
                            Previous
                        </a>
                    </li>
                    <li class="page-number  active"><a href="#">1</a></li>
                    <li class="page-number"><a href="#">2</a></li>
                    <li class="page-number"><a href="#">3</a></li>
                    <li class="page-number"><a href="#">4</a></li>
                    <li class="page-number"><a href="#">5</a></li>
                    <li class="page-number">
                        <a href="#" aria-label="Next" >
                            Next
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

</div>

@endsection

@section('top-right-sidebar')
<div class="x_title">
    <span class="left">Top Product เดือนที่แล้ว</span>
    <span class="right"></span>
</div>
<div class="x_content">
    <ul class="list-unstyled  scroll-view">
        <li class="media event">
            <a class="pull-left border-aero">
                <img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
            </a>
            <div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
                <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>

            </div>
        </li>
        <li class="media event">
            <a class="pull-left border-aero">
                <img src="http://www.ngin.co.th/data/product/150727114252_prod_50.jpg" alt="" class="img-rounded">
            </a>
            <div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
                <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
            </div>
        </li>
        <li class="media event">
            <a class="pull-left border-aero">
                <img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
            </a>
            <div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
                <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
            </div>
        </li>
        <li class="media event">
            <a class="pull-left border-aero">
                <img src="http://www.ngin.co.th/data/product/150727114252_prod_50.jpg" alt="" class="img-rounded">
            </a>
            <div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
                <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
            </div>
        </li>
        <li class="media event">
            <a class="pull-left border-aero">
                <img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
            </a>
            <div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
                <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
            </div>
        </li>
        <li class="media event">
            <a class="pull-left border-aero">
                <img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
            </a>
            <div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>
                <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
            </div>
        </li>
        <li class="media event">
            <a class="pull-left border-aero">
                <img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
            </a>
            <div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
                <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
            </div>
        </li>
        <li class="media event">
            <a class="pull-left border-aero">
                <img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
            </a>
            <div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
                <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
            </div>
        </li>
        <li class="media event">
            <a class="pull-left border-aero">
                <img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
            </a>
            <div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
                <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
            </div>
        </li>
    </ul>
</div>
@endsection

@section('bottom-right-sidebar')
<div class="x_title">
    <span class="left">NEW RELEASES</span>
</div>
<div class="x_content">
    <ul class="list-unstyled  scroll-view">
        <li class="media event">
            <a class="pull-left border-aero">
                <img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
            </a>
            <div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
                <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
            </div>
        </li>
        <li class="media event">
            <a class="pull-left border-aero">
                <img src="http://www.ngin.co.th/data/product/150727114252_prod_50.jpg" alt="" class="img-rounded">
            </a>
            <div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
                <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
            </div>
        </li>
        <li class="media event">
            <a class="pull-left border-aero">
                <img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
            </a>
            <div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
                <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
            </div>
        </li>
        <li class="media event">
            <a class="pull-left border-aero">
                <img src="http://www.ngin.co.th/data/product/150727114252_prod_50.jpg" alt="" class="img-rounded">
            </a>
            <div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
                <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
            </div>
        </li>
        <li class="media event">
            <a class="pull-left border-aero">
                <img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
            </a>
            <div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
                <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
            </div>
        </li>
        <li class="media event">
            <a class="pull-left border-aero">
                <img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
            </a>
            <div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
                <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
            </div>
        </li>
        <li class="media event">
            <a class="pull-left border-aero">
                <img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
            </a>
            <div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
                <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
            </div>
        </li>
        <li class="media event">
            <a class="pull-left border-aero">
                <img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
            </a>
            <div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
                <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
            </div>
        </li>
        <li class="media event">
            <a class="pull-left border-aero">
                <img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
            </a>
            <div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
                <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
            </div>
        </li>
    </ul>
</div>


@endsection

@section('script')
<script src="{{ asset('js/back-office/logistic/cancel-note/index.js') }}"></script>
@endsection