@extends('layouts.backOffice.template-pdf')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/<module_name>/show.css')}}"/>
@endsection

@section('body')
   <h1>pdf</h1>
    <div>Visit http://localhost/home for Code sample</div>
    <div>Visit http://localhost/home2 for Code sample</div>
    <div>Visit http://localhost/home3 for Code sample</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/<module_name>/show.js') }}"></script>
@endsection