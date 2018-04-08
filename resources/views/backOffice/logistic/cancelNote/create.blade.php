@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/logistic/cancel-note/create.css')}}"/>
@endsection

@section('module_name', 'CANCEL NOTE')
@section('page_name', 'CREATE')

@section('body')
    <div class="container-fluid create-cancel-note">
        <div class="row">
            <div class="col-xs-6 create-header">
                <div class="header" style="display: inline-block;">Create Note #</div>
                <span class="header">143</span>
            </div>

            <div class="col-xs-6 create-date">
                <div class="form-group">
                    <label for="datetimepicker1">Date</label>
                    <div class="input-group date" id="datetimepicker1">
                        <input type="text" class="form-control">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 create-details">
                <div class="form-group">
                    <label>Sales Order #:</label>
                    <select id="basic" class="form-control">
                        <option>SO8888</option>
                    </select>
                    <div class="or">-----</div> OR <div class="or">-----</div>
                </div>
                <div class="form-group">
                    <label>Product Borrow #:</label>
                    <select id="basic" class="form-control">
                        <option>PB 8888</option>
                    </select>
                    <div class="or">-----</div> OR <div class="or">-----</div>
                </div>
                <div class="form-group">
                    <label>Serial Number #:</label>
                    <input class="form-control" type="text" name="" value="88888">
                </div>
            </div>

            <div class="col-xs-6 create-images">
                <div class="form-group">
                    <label>Product Image</label>
                    <label class="select-image" for="image">
                        <i class="fa fa-camera"></i>
                    </label>
                    <input type="file" id="image">
                </div>
            </div>

            <div class="col-xs-12 create-barcode">
                <div class="form-group">
                    <table class="table ngin-table">
                        <thead>
                            <tr>
                                <th>Barcode / Product Code / Item Name</th>
                                <th>Warehouse</th>
                                <th>Serial Number</th>
                                <th>Remark</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-left">
                                    <input type="checkbox" class="iCheck">
                                    <span>88888 CRASH BAN</span>
                                </td>
                                <td>
                                    <select class="form-control">
                                        <option value="">Default select</option>
                                    </select>
                                </td>
                                <td>88888888</td>
                                <td>
                                    <input type="text" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="align-left">
                                    <input type="checkbox" class="iCheck">
                                    <span>88888 FINAL FANTASY XV</span>
                                </td>
                                <td>
                                    <select class="form-control">
                                        <option value="">Default select</option>
                                    </select>
                                </td>
                                <td>88888888</td>
                                <td>
                                    <input type="text" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="align-left">
                                    <input type="checkbox" class="iCheck">
                                    <span>CALENDAR</span>
                                </td>
                                <td>
                                    <select class="form-control">
                                        <option value="">Default select</option>
                                    </select>
                                </td>
                                <td class="quantity">
                                    <input type="text" class="form-control" placeholder="QTY">
                                    <span>/20</span>
                                </td>
                                <td>
                                    <input type="text" class="form-control">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="create-barcode-total">
                        <div class="header">Total </div>
                        <span>10 Pieces</span>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 create-actions">
                <div class="save inline">
                    <button type="button" class="btn btn-ngin btn-default ">
						<span class="btn-label">
                            <i class="fa fa-floppy-o success" aria-hidden="true"></i>
                        </span>
                        SAVE
                    </button>
                </div>
                <div class="cancel inline">
                    <button type="button" class="btn btn-ngin btn-default ">
						<span class="btn-label">
                            <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                        </span>
                        CANCEL
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/logistic/cancel-note/create.js') }}"></script>
@endsection
