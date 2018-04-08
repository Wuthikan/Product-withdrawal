{{--
    @author: Phitchaporn Pipatpunlop
    @phone: 0909915818
    @email: phitchaporn.pipa@gmail.com
--}}

@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/item-type/create.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/country/create.css')}}"/>
@endsection

@section('module_name', 'COUNTRY')
@section('page_name', 'CREATE')

@section('body')
<div class="x_title page">
    <div class="x_content">
        @include('components/alert', ['errors' => $errors, 'isAlert' => true])
        <form method="post" action="{{empty($id) ? route('backOffice.setting.country.store') : route('backOffice.setting.country.update', $id)}}">
            {{csrf_field()}}
            @if(!empty($id)) {{method_field('put')}} @endif
            <div class="fields">
                <div class="form-group">
                    <label class="control-label" for="">Country Name:</label>
                    <input class="form-control" type="text" name="name" value="{{request()->input('name', old('name'))}}">
                </div>

                <div class="form-group">
                    <label class="control-label" for="">Description:</label>
                    <textarea class="form-control" name="description" rows="8" cols="80">{{request()->input('description', old('description'))}}</textarea>
                </div>

                <div class="form-group">
                    <label class="control-label" for="">Country Code:</label>
                    <input class="form-control" type="text" name="code" value="{{request()->input('code', old('code'))}}">
                </div>
            </div>

            <div class="actions">
                <button type="submit" class="btn btn-ngin btn-default m-r-1">
                    <span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i></span>SAVE
                </button>
                <a type="button" class="btn btn-ngin btn-default" href="{{route('backOffice.setting.country.index')}}">
                    <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/back-office/setting/country/create.js') }}"></script>
@endsection
