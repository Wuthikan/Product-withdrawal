@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/logistic/product-transfer/create.css')}}"/>
@endsection

@section('module_name', 'PRODUCT TRANSFER')
@section('page_name', 'CREATE')

@section('body')
<div class="x_content">
    <section class="product-transfer">
        <form class="form-header">
            <div class="form-detail">

                <div class="row text-color-black">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <h5 class="text-bold">PRODUCT TRANSFER #001</h5>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-3 col-lg-3 col-lg-offset-3">
                        <h5 class="text-bold">TRANSFER DATE</h5>
                    </div>
                </div>
                <div class="row">                
                    <div class="col-sm-4 col-sm-offset-8 col-md-3 col-md-offset-9 col-lg-3 col-lg-offset-9">
                        <div class='input-group date' id='transferDate' >
                            <input type='text' class="form-control input-date" value="04/09/2017"/>
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" ></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>FROM</label>
                            <select class="form-control">
                                <option>WAREHOUSE A</option>
                                <option>WAREHOUSE A1</option>
                                <option>WAREHOUSE A2</option>							
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>TO</label>
                            <select class="form-control">
                                <option>WAREHOUSE B</option>
                                <option>WAREHOUSE B1</option>
                                <option>WAREHOUSE B2</option>							
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>REMARK</label>
                            <textarea class="form-control" rows="6"  placeholder="textarea"> </textarea>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <!-- <div class="table-responsive"> -->
                        <table class="table ngin-table scroll-2">
                            <thead>
                                <tr>                            
                                    <th class="col-xs-6 text-left">BARCODE / PRODUCT CODE / ITEM NAME</th>                        
                                    <th class="col-xs-2">CURRENT STCOK</th>
                                    <th class="col-xs-2">TRANSFER</th>
                                    <th class="col-xs-2">STOCK AFTER</br><span>TRANSFER</span></th>
                                </tr>
                            </thead>
                            <tbody class="scroll-2">
                            @for ($i = 0; $i <= 2; $i++)
                                <tr>
                                    <td class="col-xs-6 text-left">
                                        <button type="button" class="btn btn-ngin btn-xs table-btn-delete">
                                            <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                                        </button>

                                        <input class="form-control barcode-txt" type="text" placeholder="typeaheadProduct" data-action="typeaheadProduct">

                                    </td>
                                    <td>22</td>
                                    <td>
                                        <input type="text" class="form-control text-center" value="88">                                
                                    </td>
                                    <td>
                                        0
                                    </td>
                                </tr>
                            @endfor
                                <tr>
                                    <td class="col-xs-6 text-left">                                   
                                        <input class="form-control barcode-txt" type="text" placeholder="typeaheadProduct" data-action="typeaheadProduct">                            
                                    </td>
                                    <td></td>
                                    <td>
                                        <input type="text" class="form-control text-center">                                
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>                        
                            <tfoot>
                                <tr>
                                    <td colspan="3"></td>
                                    <td  class="text-center">
                                        Total <span>88</span> Prices
                                    </td>
                                </tr>

                            </tfoot>
                        </table>
                        <!-- </div> -->
                    </div>
                </div>

            </div>

            <div class="form-footer">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 text-center">	
                        <button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{ url("back-office/logistic/product-transfer/show") }}'">
                            <span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i></span>SAVE
                        </button>
                        <button type="button" class="btn btn-ngin btn-default">
                            <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL
                        </button>
                    </div>
                </div>
            </div>
        
        </form>
    </section>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/logistic/product-transfer/create.js') }}"></script>
@endsection