@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/product/show.css')}}"/>
@endsection

@section('module_name', 'PRODUCTS')
@section('page_name', 'SHOW')

@section('body')
    

    <div class="x_content scroll-2">
        <h1>CARD PS PLUS MEMBERSHIP 12 MONTHS - UNCHARTED 4</h1>

        <div class="show--container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 left-content">

                        <div class="thumbnail-image">
                            <img src="{{ asset('images\backOffice\setting\product\unit\customer-tier\price\product-image.png' )}}" alt="">
                        </div>
                        <div class="info">
                            <ul class="label-list list-inline list-unstyled text-center">
                                <li><span class="label label-success">STANDARD</span></li>
                                <li><span class="label label-danger">PS4</span></li>
                                <li><span class="label label-primary">R1</span></li>
                            </ul>
                            <div class="row">
                                <div class="col-sm-6 text-center mb-15">
                                    <span class="btn-label"><span class="fa-approve-all"></span></span>
                                </div>
                                <div class="col-sm-6 text-center mb-15">
                                    <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                                </div>
                                <div class="col-sm-6 mb-10">
                                    SERIAL CONTROL
                                </div>
                                <div class="col-sm-6 mb-10">
                                    STOCK KEEPING
                                </div>
                                <div class="col-sm-6">
                                    MINIMUN STOCK <span class="pull-right">:</span>
                                </div>
                                <div class="col-sm-6">
                                    50 PIECE
                                </div>
                                <div class="col-sm-6">
                                    HEIGHT <span class="pull-right">:</span>
                                </div>
                                <div class="col-sm-6">
                                    200 CM.
                                </div>
                                <div class="col-sm-6">
                                    PREMIUM <span class="pull-right">:</span>
                                </div>
                                <div class="col-sm-6">
                                    T-SHIRT, DLC. PANTS
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-9 right-content">

                        <div class="detail">

                            <div class="detail-group">
                                <div class="row">
                                    <div class="col-sm-3">PRODUCT CODE <span class="pull-right">:</span></div>
                                    <div class="col-sm-9">8888</div>
                                </div>
                            </div>
                            <div class="detail-group">
                                <div class="row">
                                    <div class="col-sm-3">RELEASE DATE <span class="pull-right">:</span></div>
                                    <div class="col-sm-3">08/08/2018</div>
                                    <div class="col-sm-3">INITIAL PO DATE <span class="pull-right">:</span></div>
                                    <div class="col-sm-3">09/09/2018</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">DIMENSION <span class="pull-right">:</span></div>
                                    <div class="col-sm-3"><span class="text-gray">150x80x22mm</span></div>
                                    <div class="col-sm-3">WEIGHT <span class="pull-right">:</span></div>
                                    <div class="col-sm-3"><span class="text-gray">50 grams</span></div>
                                </div>
                            </div>
                            <div class="detail-group">
                                <div class="row">
                                    <div class="col-sm-3">NO PLAYER <span class="pull-right">:</span></div>
                                    <div class="col-sm-3">2</div>
                                    <div class="col-sm-3">NARRATION <span class="pull-right">:</span></div>
                                    <div class="col-sm-3"><span class="label label-primary">EN</span></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">GENRE <span class="pull-right">:</span></div>
                                    <div class="col-sm-3">ACTION</div>
                                    <div class="col-sm-3">SUBTITLE <span class="pull-right">:</span></div>
                                    <div class="col-sm-3"><span class="label label-primary">EN</span></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">RATING <span class="pull-right">:</span></div>
                                    <div class="col-sm-3">18</div>
                                    <div class="col-sm-3">PUBLISHER <span class="pull-right">:</span></div>
                                    <div class="col-sm-3">LOREM IPSUN</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">WARRANTY <span class="pull-right">:</span></div>
                                    <div class="col-sm-3">24 MONTHS</div>
                                    <div class="col-sm-3">ITEMTYPE <span class="pull-right">:</span></div>
                                    <div class="col-sm-3">SONY</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">SALE TAX <span class="pull-right">:</span></div>
                                    <div class="col-sm-3">VAT 7%</div>
                                    <div class="col-sm-3">AGING <span class="pull-right">:</span></div>
                                    <div class="col-sm-3">30 DAYS</div>
                                </div>
                            </div>
                            <div class="detail-group">
                                <div class="row">
                                    <div class="col-sm-3">DESCRIPTION <span class="pull-right">:</span></div>
                                    <div class="col-sm-9 desc text-gray">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa nihil in numquam odio nam rerum saepe similique possimus, eos exercitationem sed qui, itaque dignissimos illum, quia eaque reprehenderit minus! A.</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">TAG <span class="pull-right">:</span></div>
                                    <div class="col-sm-9">
                                        <ul class="list-inline list-unstyled list-tags f-14">
                                            <li><span class="label label-default">LOREM</span></li>
                                            <li><span class="label label-default">LOREM</span></li>
                                            <li><span class="label label-default">LOREM IPSUM</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">BARCODE <span class="pull-right">:</span></div>
                                    <div class="col-sm-9">
                                        <ul class="list-inline list-unstyled list-code f-14">
                                            @for($i = 1; $i<=7; $i++)
                                                <li>8-8888-88888-88-8</li>
                                            @endfor
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">SERIAL NUMBER <span class="pull-right">:</span></div>
                                    <div class="col-sm-9">
                                        <ul class="list-inline list-unstyled list-code f-14">
                                            @for($i = 1; $i<=15; $i++)
                                                <li>8888888</li>
                                            @endfor
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-container">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">CUSTOMER TIER</th>
                                        <th class="text-center">SRP (VAT)</th>
                                        <th class="text-center">SRP (NVAT)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">STANDARD</td>
                                        <td class="text-center">2,000</td>
                                        <td class="text-center">1,900</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">GD</td>
                                        <td class="text-center">1,900</td>
                                        <td class="text-center">1,800</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">PAD</td>
                                        <td class="text-center">1,800</td>
                                        <td class="text-center">1,700</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">MT</td>
                                        <td class="text-center">1,700</td>
                                        <td class="text-center">1,600</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div> <!- show-\-container ->

        <hr>
        <div class="text-center action">
            <button type="button" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-print primary" aria-hidden="true"></i> </span>PRINT</button>
        </div>

    </div> <!- x_content scroll-2 ->


@endsection

@section('script')
    <script src="{{ asset('js/back-office/setting/product/show.js') }}"></script>
@endsection