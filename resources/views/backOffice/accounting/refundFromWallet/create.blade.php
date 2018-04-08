@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/css/back-office/accounting/refund-from-wallet/create.css')}}"/>
@endsection

@section('module_name', 'ACCOUNTING > REFUND FROM WALLET')
@section('page_name', 'CREATE')

@section('body')

    <div class="x_content scroll-2">
        <div class="refund-from-wallet--create">
            <form>

                <div class="refund-from-wallet--create--header">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group align-left">
                                <label>SUPPLIER</label>
                                <input class="form-control" type="text" data-action="typeaheadCustomer">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group align-left">
                                <label>SUPPLIER REFERENCING DOCUMENT</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group align-left">
                                <label>DATE</label>
                                <div class="input-group" id="datetimepicker">
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="refund-from-wallet--create--detail">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table ngin-table">
                                <thead>
                                <tr>
                                    <th class="col-md-6 align-left">REFUND</th>
                                    <th class="col-md-3">EXCHANGE</th>
                                    <th class="col-md-3">BANK FEE</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="col-md-6">
                                        <div class="col-md-2 align-left">KBANK</div>
                                        <div class="col-md-2 align-left">888-8</div>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control">
                                                <span class="input-group-addon">THB</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">1 USD</span>
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">THB</span>
                                        </div>
                                    </td>
                                    <td class="col-md-3">
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">THB</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-6">
                                        <div class="col-md-2 align-left">SCB</div>
                                        <div class="col-md-2 align-left">777-7</div>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control">
                                                <span class="input-group-addon">THB</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">1 USD</span>
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">THB</span>
                                        </div>
                                    </td>
                                    <td class="col-md-3">
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">THB</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-6">
                                        <div class="col-md-2 align-left">BBL</div>
                                        <div class="col-md-2 align-left">333-3</div>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control">
                                                <span class="input-group-addon">THB</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">1 USD</span>
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">THB</span>
                                        </div>
                                    </td>
                                    <td class="col-md-3">
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">THB</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-6">
                                        <div class="col-md-2 align-left">TMB</div>
                                        <div class="col-md-2 align-left">222-2</div>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control">
                                                <span class="input-group-addon">THB</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">1 USD</span>
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">THB</span>
                                        </div>
                                    </td>
                                    <td class="col-md-3">
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">THB</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-6">
                                        <div class="col-md-2 align-left">HSBC</div>
                                        <div class="col-md-2 align-left">99-999</div>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control">
                                                <span class="input-group-addon">USD</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="col-md-3">
                                    </td>
                                    <td class="col-md-3 col-md-offset-3">
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">USD</span>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <div class="row">
                                <div class="col-md-4 remarkSection">
                                    <div class="form-group">
                                        <label>REMARK</label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-4 uploadPhotoHeaderSection">
                                            <div class="form-group">
                                                <label>PHOTO</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 uploadPhotoSection">
                                            <div class="form-group">
                                                <div class="uploadPreview-1">
                                                    <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 uploadPhotoSection">
                                            <div class="form-group">
                                                <div class="uploadPreview-2">
                                                    <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 uploadPhotoSection">
                                            <div class="form-group">
                                                <div class="uploadPreview-3">
                                                    <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 uploadPhotoSection">
                                            <div class="form-group">
                                                <div class="uploadPreview-4">
                                                    <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 uploadPhotoSection">
                                            <div class="form-group">
                                                <div class="uploadPreview-5">
                                                    <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="uploadMoreSection"></div>
                                        <div class="col-md-4 uploadPhotoSection">
                                            <div class="form-group">
                                                <div class="uploadAddMore"><i class="fa fa-plus"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 totalRefundSection vertical-bottom">
                                        <div class="col-md-6">TOTAL REFUND</div>
                                        <div class="col-md-4">11,111.10</div>
                                        <div class="col-md-2">USD</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="button-actions">
                    <div class="save inline">
                        <button type="button" class="btn btn-ngin btn-default">
                            <span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i></span>SAVE
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('js/back-office/accounting/refund-from-wallet/create.js') }}"></script>
@endsection
