@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/product/nick-name/create.css')}}"/>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')

<div class="product-nickname">
    <form>
        <div class="row">
            <div class="col-xs-12 col-md-offset-1 col-md-10">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label class="product-nickname-label" for="product-nickname1">NICKNAME <span><strong>STATUS</strong> <input type="checkbox" class="switchCheck"></span></label>
                            <input type="type" class="form-control" id="product-nickname1" name="product-nickname1" />
                        </div>
                        <div class="form-group">
                            <label class="product-nickname-label" for="product-nickname2">NICKNAME <span><strong>STATUS</strong> <input type="checkbox" class="switchCheck"></span></label>
                            <input type="type" class="form-control" id="product-nickname2" name="product-nickname2" />
                        </div>
                        <div class="form-group">
                            <label class="product-nickname-label" for="product-nickname3">NICKNAME <span><strong>STATUS</strong> <input type="checkbox" class="switchCheck"></span></label>
                            <input type="type" class="form-control" id="product-nickname3" name="product-nickname3" />
                        </div>
                        <div class="form-group">
                            <label class="product-nickname-label" for="product-nickname4">NICKNAME <span><strong>STATUS</strong> <input type="checkbox" class="switchCheck"></span></label>
                            <input type="type" class="form-control" id="product-nickname4" name="product-nickname4" />
                        </div>
                        <div class="form-group">
                            <label class="product-nickname-label" for="product-nickname5">NICKNAME <span><strong>STATUS</strong> <input type="checkbox" class="switchCheck"></span></label>
                            <input type="type" class="form-control" id="product-nickname5" name="product-nickname5" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label class="product-nickname-label" for="product-nickname1">NICKNAME <span><strong>STATUS</strong> <input type="checkbox" class="switchCheck"></span></label>
                            <input type="type" class="form-control" id="product-nickname1" name="product-nickname1" />
                        </div>
                        <div class="form-group">
                            <label class="product-nickname-label" for="product-nickname2">NICKNAME <span><strong>STATUS</strong> <input type="checkbox" class="switchCheck"></span></label>
                            <input type="type" class="form-control" id="product-nickname2" name="product-nickname2" />
                        </div>
                        <div class="form-group">
                            <label class="product-nickname-label" for="product-nickname3">NICKNAME <span><strong>STATUS</strong> <input type="checkbox" class="switchCheck"></span></label>
                            <input type="type" class="form-control" id="product-nickname3" name="product-nickname3" />
                        </div>
                        <div class="form-group">
                            <label class="product-nickname-label" for="product-nickname4">NICKNAME <span><strong>STATUS</strong> <input type="checkbox" class="switchCheck"></span></label>
                            <input type="type" class="form-control" id="product-nickname4" name="product-nickname4" />
                        </div>
                        <div class="form-group">
                            <label class="product-nickname-label" for="product-nickname5">NICKNAME <span><strong>STATUS</strong> <input type="checkbox" class="switchCheck"></span></label>
                            <input type="type" class="form-control" id="product-nickname5" name="product-nickname5" />
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-xs-12">
                <hr>
                <div class="row">
                    <div class="col-xs-12 text-center padding30">
                        <button type="button" class="btn btn-ngin btn-default">
                            <span class="btn-label"><i class="fa fa-print primary" aria-hidden="true"></i></span>
                            PRINT
                        </button>
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
        </div>
    </form>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/setting/product/nick-name/create.js') }}"></script>
@endsection