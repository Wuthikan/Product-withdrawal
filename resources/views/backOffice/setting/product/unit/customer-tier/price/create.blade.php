@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/product/unit/customer-tier/price/create.css')}}"/>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
<div class="product-unit-price">
    <form>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <p class="product-unit-price-font-weight">ItemType :</p>
                        <p class="product-unit-price-font-default">ITEMTYPE</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <p class="product-unit-price-font-weight">Platform :</p>
                        <p class="product-unit-price-font-default">PLATFORM</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <p class="product-unit-price-font-weight">SRP :</p>
                        <p class="product-unit-price-font-default">Lorem ipsum</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <p class="product-unit-price-font-weight">NUAT :</p>
                        <p class="product-unit-price-font-default">Lorem ipsum</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <hr>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                        <figure>
                            <img src="{{asset('/images/backOffice/setting/product/unit/customer-tier/price/product-image.png')}}" alt="product" class="img-responsive" />
                            <figcaption>Lorem ipsum dolor sit amet, cibh ... (แผ่น)</figcaption>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                        <div class="row">
                            <div class="col-xs-12 col-md-offset-1 col-md-11">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8 col-md-offset-1 col-md-11">
                                        <h4><strong>NVAT PRICE</strong></h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-10">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-4">
                                        <div class="form-group">
                                            <label for="product-price-order">PURCHASE AMOUNT</label>
                                            <div class="product-price-relative">
                                                <span class="hidden-xs">2 -</span>
                                                <input type="number" class="form-control" id="product-price-order1" name="product-price-order1" placeholder="300">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-4">
                                        <div class="form-group">
                                            <label for="product-price-sale_price">SELLING PRICE</label>
                                            <input type="number" class="form-control" id="product-price-sale_price1" name="product-price-sale_price1" placeholder="{{number_format(4000,2)}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-4">
                                        <div class="form-group">
                                            <label for="product-price-order" class="visible-xs">PURCHASE AMOUNT</label>
                                            <div class="product-price-relative">
                                                <span class="hidden-xs span2">301 -</span>
                                                <input type="number" class="form-control" id="product-price-order2" name="product-price-order2" placeholder="500">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-4">
                                        <label for="product-price-sale_price" class="visible-xs">SELLING PRICE</label>
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="product-price-sale_price2" name="product-price-sale_price2" placeholder="{{number_format(4000,2)}}">
                                        </div>
                                    </div>
                                    <div class="hidden-xs hidden-sm col-md-1">
                                        <button type="button" class="btn btn-ngin btn-default ">
                                            <span class="btn-label">
                                                <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                                            </span>
                                            Delete
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-4">
                                        <h3 class="product-price-plus"><i class="fa fa-plus-circle" aria-hidden="true"></i>ADD</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-4">
                                        <div class="form-group">
                                            <span class="product-price-price_up">501 UP TO</span>
                                        </div>                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-4">
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="product-price-sale_price3" name="product-price-sale_price2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-md-offset-1 col-md-11">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8 col-md-offset-1 col-md-11">
                                        <h4><strong>PRICE BEFORE TAX</strong></h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-10">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-4">
                                        <div class="form-group">
                                            <label for="product-price-order">PURCHASE AMOUNT</label>
                                            <div class="product-price-relative">
                                                <span class="hidden-xs">2 -</span>
                                                <input type="number" class="form-control" id="product-price-order1" name="product-price-order1" placeholder="300">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-4">
                                        <div class="form-group">
                                            <label for="product-price-sale_price">SELLING PRICE</label>
                                            <input type="number" class="form-control" id="product-price-sale_price1" name="product-price-sale_price1" placeholder="{{number_format(4000,2)}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-4">
                                        <div class="form-group">
                                            <label for="product-price-order" class="visible-xs">PURCHASE AMOUNT</label>
                                            <div class="product-price-relative">
                                                <span class="hidden-xs span2">301 -</span>
                                                <input type="number" class="form-control" id="product-price-order2" name="product-price-order2" placeholder="500">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-4">
                                        <label for="product-price-sale_price" class="visible-xs">SELLING PRICE</label>
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="product-price-sale_price2" name="product-price-sale_price2" placeholder="{{number_format(4000,2)}}">
                                        </div>
                                    </div>
                                    <div class="hidden-xs hidden-sm col-md-1">
                                        <button type="button" class="btn btn-ngin btn-default ">
                                            <span class="btn-label">
                                                <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                                            </span>
                                            Delete
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-4">
                                        <h3 class="product-price-plus"><i class="fa fa-plus-circle" aria-hidden="true"></i>ADD</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-4">
                                        <div class="form-group">
                                            <span class="product-price-price_up">501 UP TO</span>
                                        </div>                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-4">
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="product-price-sale_price3" name="product-price-sale_price2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <hr>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center padding15">
                    <button type="button" class="btn btn-ngin btn-default">
                        <span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i></span>
                        SAVE
                    </button>
                    <button type="button" class="btn btn-ngin btn-default">
                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                        CANCEL
                    </button>
                </div>
            </div>
        </div>
        
        
    </form>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/setting/product/unit/customer-tier/price/create.js') }}"></script>
@endsection