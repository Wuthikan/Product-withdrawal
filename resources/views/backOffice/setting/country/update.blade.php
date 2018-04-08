{{--
    @author: ระบุชื่อ-นามสกุลของคุณที่นี่
    @phone: ระบุหมายเลขโทรศัพท์ของคุณที่นี่
    @email: ระบุอีเมลของคุณที่นี่
--}}

@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/country/update.css')}}"/>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
    <div>Visit http://localhost/home for Code sample</div>
    <div>Visit http://localhost/home2 for Code sample</div>
    <div>Visit http://localhost/home3 for Code sample</div>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('script')
    <script src="{{ asset('js/back-office/<module_name>/show.js') }}"></script>
@endsection