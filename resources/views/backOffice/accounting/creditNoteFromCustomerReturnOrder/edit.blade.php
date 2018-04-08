{{-- 
    @author: พิมพ์ชื่อของคุณที่นี่
    @phone: พิมพ์หมายเลขโทรศัพท์ของคุณที่นี่
    @email: พิมพ์อีเมลของคุณที่นี่
--}}

@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/accounting/credit-note-from-customer-return-order/edit.css')}}"/>
@endsection

@section('module_name', 'ACCOUNTING > CREDIT NOTE FROM CUSTOMER RETURN ORDER')
@section('page_name', 'EDIT')

@section('body')
    <div>Visit http://localhost/home for Code sample</div>
    <div>Visit http://localhost/home2 for Code sample</div>
    <div>Visit http://localhost/home3 for Code sample</div>
@endsection

@section('script')
    <link rel="stylesheet" type="text/css" href="{{ asset('/js/back-office/accounting/credit-note-from-customer-return-order/edit.js')}}"/>
@endsection