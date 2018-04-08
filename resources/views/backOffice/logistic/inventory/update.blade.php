@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/logistic/inventory/update.css')}}"/>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
<div class="x_content">
    <section style="padding-top: 50px">
    <form action="{{route("backOffice.logistic.inventory.update", 1)}}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="PUT">
        <div class="content scroll-2" style="height: calc(100vh - 180px);">
            <div class="w800">
                <div class="row">
                    <div class="col-xs-12">
                    <h3 class="header">
                        STOCK UPDATE
                    </h3>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <label for="">Update date</label>
                        <div class="input-group date" id="datepicker" >
                            <input type="text" class="form-control" value=""/>
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" ></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-sm-offset-5">
                        <div class="form-group">
                            <label for="">WAREHOUSE</label>
                            <select id="basic" class="form-control">
                                <option></option>
                                <option>text-1</option>
                                <option>text-2</option>
                                <option>text-3</option>
                                <option>text-4</option>
                                <option>text-5</option>
                                <option>text-6</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <p>
                    <table class="table itemList">
                        <thead>
                            <tr>
                                <th>Barcode | Product Code | Item Name</th>
                                <th style="text-align: center;"><label class="new_current">CURRENT</label><br/>Balance</th>
                                <th style="text-align: center;">New Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>88888 Cash Ban</td>
                                <td align="center">0</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>88888 Final Fantasy XV</td>
                                <td align="center">0</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>88888 Grand T</td>
                                <td align="center">0</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </p>
            </div>
            <div class="w800" align="center">
                <hr>
                <button type="submit" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i> </span>SAVE</button>
                <button type="button" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i> </span>CANCEL</button>
            </div>
        </div>
        
    </form>
    </section>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/logistic/inventory/update.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            //Set Label Header Page
            $('#lbHeaderPage').html("<h3>INVENTORY | <span>ADJUSTMENT</span></h3>");
        });
    </script>

@endsection
