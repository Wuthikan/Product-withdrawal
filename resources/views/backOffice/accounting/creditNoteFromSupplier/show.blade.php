@extends('example::layouts.backOffice.template')

@section('head')
	  <link rel="stylesheet" type="text/css" href="{{ asset('css/back-office/show.css') }}"/>
@endsection

@section('body')
    <div>Field 1: {{-- $model->field_1 --}}</div>
    <div>Field 2: {{-- $model->field_2 --}}</div>
    <div>Field 3: {{-- $model->field_3 --}}</div>
    <div>Field 4: {{-- $model->field_4 --}}</div>
    <div>Field 5: {{-- $model->field_5 --}}</div>
    <div>{{-- $model->created_at->format('d/m/Y H:i') --}}</div>
    <div>{{-- $model->updated_at->format('d/m/Y H:i') --}}</div>
    <div>{{-- $model->deleted_at->format('d/m/Y H:i') --}}</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/show.js') }}"></script>
@endsection
