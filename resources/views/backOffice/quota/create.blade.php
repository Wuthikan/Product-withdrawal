@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/back-office/quota/create.css') }}"/>
@endsection
@section('module_name', 'QUOTA') 
@section('page_name', 'CREATE')

@section('body')
    <div class="scroll-2">
        <!-- ERROR MESSAGES -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

<form id="form-create-quota" action="{{ route('backOffice.setting.user.store') }}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div id="profileBox">
        <div class="media" id="accountInfo">
        <div class="media-left">
            <div class="upload-btn-wrapper">
                <img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" class="profilePicture">
                <input type="file" name="myfile2" id="profilePictureField" />
            </div>
            <div class="form-group item-info">
                <div class="row">
                    <div class="col-sm-6 title">
                        PRODUCT CODE:
                    </div>
                    <div class="col-sm-6 detail">
                        88-888-88
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 title">
                        ITEM TYPE:
                    </div>
                    <div class="col-sm-6 detail">
                        SW-SONY
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 title">
                        PUBLISHER
                    </div>
                    <div class="col-sm-6 detail">
                        SONY
                    </div>
                </div>
            </div>
        </div>
        <div class="media-body">
            <div class="row quota-header">
                <div class="col-sm-9">
                    <div class="item-tag"><span class="label label-primary">PS4-G</span></div>
                    <div class="item-info">
                        <ul class="list-inline list-unstyle">
                            <li class="name">Final Fantasy XV</li>
                            <li><span class="label label-success">STANDARD</li>
                            <li><span class="label label-primary" style="padding: 3px 20px;">R1</li>
                            <li class="lang text-gray">(EN/TH)</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="item-tag text-gray deli-date">DELIVERY DATE:</div>
                    <div class="black">01/01/2018</div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <table class="table form-table">
                        <thead>
                            <tr>
                                <th>INITIAL PO ALLOCATION BY COUNTRY</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-6 mb-10">
                                            <span class="label label-country">Thailand</span>
                                            <input type="text" value="500">
                                            <strong>Pieces</strong>
                                        </div>
                                        <div class="col-sm-6 mb-10">
                                            <span class="label label-country">Vietnam</span>
                                            <input type="text" value="500">
                                            <strong>Pieces</strong>
                                        </div>
                                        <div class="col-sm-6 mb-10">
                                            <span class="label label-country">Cambodia</span>
                                            <input type="text" value="500">
                                            <strong>Pieces</strong>
                                        </div>
                                        <div class="col-sm-6 mb-10">
                                            <span class="label label-country">Myanmar</span>
                                            <input type="text" value="500">
                                            <strong>Pieces</strong>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="text-right"><div class="total-pieces">Total: <strong>1500</strong> PIECES</div></td>
                            </tr>
                        </tfoot>
                    </table>

                    <table class="table form-table mb-20">
                        <thead>
                            <tr>
                                <th>QUOTA BY COUNTRY</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-6 mb-10">
                                            <span class="label label-country">Thailand</span>
                                            <input type="text" value="500">
                                            <strong>Pieces</strong>
                                        </div>
                                        <div class="col-sm-6 mb-10">
                                            <span class="label label-country">Vietnam</span>
                                            <input type="text" value="500">
                                            <strong>Pieces</strong>
                                        </div>
                                        <div class="col-sm-6 mb-10">
                                            <span class="label label-country">Cambodia</span>
                                            <input type="text" value="500">
                                            <strong>Pieces</strong>
                                        </div>
                                        <div class="col-sm-6 mb-10">
                                            <span class="label label-country">Myanmar</span>
                                            <input type="text" value="500">
                                            <strong>Pieces</strong>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="text-right"><div class="total-pieces">Total: <strong>1500</strong> PIECES</div></td>
                            </tr>
                        </tfoot>
                    </table>

                    <div class="form-group">
                        <label style="font-weight: bold;">REMARK:</label>
                        <textarea class="form-control" rows="6"></textarea>
                    </div>

                </div>
            </div>
        </div>
        
        <div class="mt-20" align="center">
            <button type="submit" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i> </span>SAVE</button>
            <button type="button" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i> </span>CANCEL</button>
        </div>
</form>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/quota/create.js') }}"></script>
@endsection
