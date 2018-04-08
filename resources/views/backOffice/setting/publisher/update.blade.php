@extends('layouts.backOffice.template')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/publisher/update.css')}}"/>
@endsection

@section('module_name', 'PUBLISHER')
@section('page_name', 'UPDATE')

@section('body')
<div class="wraper">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

  <form action="{{ route('backOffice.setting.publisher.update',$publisher->id) }}" method="POST">
    {!! csrf_field() !!}
    {!! method_field('put') !!}
    <div class="wrapForm">
        <div class="form-group">
            <label for="exampleInputPassword1">NAME:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $request->old('name', $publisher->name) }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">DESCRIPTION:</label>
            <textarea class="form-control" rows="3" name="description" id="description">{{ $request->old('description',$publisher->description) }}</textarea>
        </div>
    </div>
    <div class="line"></div>
    <div class="wrapFooter">
        <div class="row action">
            <div class="col-xs-6 col-sm-6 text-right">
                <button type="submit" class="btn btn-ngin btn-default btnMargin">
                    <span class="btn-label btn-sm">
                        <i class="fa fa-save success" aria-hidden="true"></i>
                    </span>
                    SAVE
                </button>
            </div>
            <div class="col-xs-6 col-sm-6 text-left">
                <button type="button" class="btn btn-ngin btn-default" onclick="window.location.href='{{route('backOffice.setting.publisher.index')}}';">
                    <span class="btn-label btn-sm">
                        <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                    </span>
                    CANCEL
                </button>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection

@section('script')
<script src="{{ asset('js/back-office/setting/publisher/update.js') }}"></script>
@endsection
