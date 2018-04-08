@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/marketing/bundled-product/create.css')}}"/>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
<div class="x_content scroll-2">
  <form action="{{route("backOffice.marketing.bundled-product.store")}}" method="POST" enctype="multipart/form-data">
    <div class="form-container">
        {!! csrf_field() !!}

        <div class="container">
            <div class="row box">
                <div class="leftBox">
                    <div class="form-group">
                        <label for="">BUNDED PRODUCT NAME</label>
                        <input type="text" class="form-control" value="Happy Final Fantasy X Pack">
                    </div>

                </div>
                <div class="rightBox">
                    <div class="form-group"></div>
                    <label for="">PROMOTION SAP</label>
                    <input type="text" class="form-control" value="2500">
                </div>
                <div class="col-md-12">
                    <div class="form-group" style="margin-top: 15px;">
                        <label for="">DESCRIPTION</label>
                        <textarea class="form-control" rows="5" placeholder="textarea">Lorem lpsum Dolor Sit</textarea>
                    </div>
                </div>
                <div class="leftBox">
                    <div class="form-group">
                        <label for="">START</label>
                        <div class="input-group date" id="startDate">
                            <input type="text" class="form-control">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="centerBox">
                    TO
                </div>
                <div class="rightBox">
                    <div class="form-group">
                        <label for="">END</label>
                        <div class="input-group date" id="endDate">
                            <input type="text" class="form-control">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row box" style="background-color:#00000017;">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">DEALER PRICE : </label>
                        <label for="">(PLATINUM CUSTOMER TIER)</label>
                        <input type="text" class="form-control" value="2390">
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">DEALER PRICE : </label>
                        <label for="">(GO CUSTOMER)</label>
                        <input type="text" class="form-control" value="2430">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">DEALER PRICE : </label>
                        <label for="">(SILVER CUSTOMER TIET)</label>
                        <input type="text" class="form-control" value="2400">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">DEALER PRICE : </label>
                        <label for="">(MT CUSTOMER)</label>
                        <input type="text" class="form-control" value="2440">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">DEALER PRICE : </label>
                        <label for="">(GOLD CUSTOMER TIET)</label>
                        <input type="text" class="form-control" value="2410">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">DEALER PRICE : </label>
                        <label for="">(WH CUSTOMER)</label>
                        <input type="text" class="form-control" value="2450">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">DEALER PRICE : </label>
                        <label for="">(PAD CUSTOMER TIET)</label>
                        <input type="text" class="form-control" value="2420">
                    </div>
                </div>
            </div>
            <div style="margin-top:20px;">
                <span style="margin-left:20px;">Barcode / Product Code / Item Name</span>
                <hr style="margin-top:5px;border-top: 2px solid #0000001f" />
            </div>
            <div class="form-group form-fixed-width">
                <div class="icon-addon addon-sm">
                    <input type="text" data-action="typeaheadProduct" placeholder="SEARCH" class="form-control search" id="SEARCH">
                    <label for="search" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
                </div>
            </div>

            @for($i=1; $i<=3; $i++)
            <div class="card">

                <div class="row">
                    <div class="col-sm-1 removeContent">
                        <a href=""><i class="glyphicon glyphicon-trash icon"></i></a>
                    </div>
                    <div class="col-sm-2 cover">
                        <h1>PSAC-0000{{ $i }}</h1>
                        <img class="img-responsive" src="https://images-na.ssl-images-amazon.com/images/I/817REtxSilL._SX342_.jpg">
                    </div>
                    <div class="col-sm-9 contentDetail">
                        <div class="row">
                            <div class="code">PS4-G</div>
                            <h1 class="productName">CALL OF DUTY</h1>
                            <div class="col-sm-6 detail">
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        ITEM TYPE
                                    </div>
                                    <div class="col-sm-8">
                                        : <span class="text-blue">SONY-SW</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        SRP
                                    </div>
                                    <div class="col-sm-8">
                                        : <span class="text-blue">1250</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-4">
                                        REION
                                    </div>
                                    <div class="col-sm-8">
                                        : <span class="text-blue">R3</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        BARCODE
                                    </div>
                                    <div class="col-sm-8">
                                        <div>: <span class="text-blue">8-8888-88888-88-8</span></div>
                                        <div>: <span class="text-blue">9-9999-99999-99-9</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 detail">
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <strong>QTY</strong>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" value="1" style="width: 50px;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        EDITION
                                    </div>
                                    <div class="col-sm-8">
                                        : <strong class="text-blue">STANDARD</strong>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        ZONE
                                    </div>
                                    <div class="col-sm-8">
                                        <div>: 2 <span class="text-blue">(EN)</span></div>
                                        <div>: <span class="text-blue">8-8888-88888-88-8</span></div>
                                        <div>: <span class="text-blue">9-9999-99999-99-9</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tag row">
                    <div class="col-sm-11 col-sm-offset-1">
                        <label class="trigger">
                            Cull of duty
                            <i class="close fa fa-times close-tag"></i>
                        </label>
                        <label class="trigger">
                            Final Fantasy
                            <i class="close fa fa-times close-tag"></i>
                        </label>
                    </div>
                </div>

            </div>
            @endfor

        </div>
        <hr style="margin-bottom:0;border-top: 3px solid #0000001f;" />
        <div class="titelItem">
            <strong class="pull-left">Total Product</strong>
            <div class="pull-right">3 <strong>Pleces</strong></div>
        </div>

    </div> <!-- .form-container -->

    <hr style="margin-bottom:0;border-top: 3px solid #0000001f;" />
    <div align="center" style="margin: 40px 0;">
        <button type="submit" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i> </span>SAVE</button>
        <button type="button" class="btn btn-ngin btn-default" style="margin-left: 3mm;"><span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i> </span>CANCEL</button>
    </div>
  </form>

</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/marketing/bundled-product/create.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        //Set Label Header Page
        $('#lbHeaderPage').html("<h3>BUNDLED PRODUCTS | <span>CREATE</span></h3>");
    });
    </script>
@endsection
