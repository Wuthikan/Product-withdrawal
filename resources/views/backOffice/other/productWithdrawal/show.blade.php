@extends('layouts.backOffice.template-with-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/other/product-withdrawal/show.css')}}"/>
@endsection

@section('module_name', 'PRODUCT WITHDRAWAL')
@section('page_name', 'SHOW')

@section('body')
<div class="x_content contentBox">
    <div class="content scroll-2">
        <section>
            <h4 class="text-black"><strong>PRODUCT WITHDRAWAL #1</strong></h4>
            <div align="center">
                <img src="{{asset('images/logo.png')}}" alt="" style="max-width: 100px;">
                <p class="text-uppercase">08 August 20018</p>
            </div>
            <p><span class="text-uppercase text-black"><strong>Employee Name :</strong> </span>K. Lorem Ipsum, Sale Manager</p>
            <p style="padding-top: 40px"><span class="text-uppercase text-black"><strong>Event :</strong> </span></p>
            <p>&emsp;"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </section>
        <section style="padding-top: 20px">
            <table class="table itemList">
                <thead>
                    <tr>
                        <th class="itemCode">CODE</th>
                        <th>DESCRIPTION</th>
                        <th class="itemQty">QTY</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i =0; $i<20; $i++)
                    <tr>
                        <td align="center">PCAS-00073</td>
                        <td>
                            <strong class="text-black">PGS4-G : </strong>Lorem ipsum dolor sit amet. consectetuer adipiscing elit.
                        </td>
                        <td align="center">20</td>
                    </tr>
                    @endfor
                </tbody>
            </table>

            <table class="table table-nobordered" style="margin-top: 20px">
                <tr>
                    <td style="width: 50%">
                        
                    </td>
                    <td class="text-uppercase text-black" align="right"><strong>TOTAL 200 PIECES</strong></td>
                </tr>
            </table>

            <table class="table table-nobordered" style="margin-top: 30px">
                <tr>
                    <td style="width: 50%">
                        <table class="signature text-black">
                            <tr>
                                <td style="width: 60px;" rowspan="2" valign="top">
                                    <strong class="text-uppercase text-black">Signed : </strong>
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
    <script src="{{ asset('js/back-office/other/product-withdrawal/show.js') }}"></script>
@endsection