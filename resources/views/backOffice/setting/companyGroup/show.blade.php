@extends('layouts.backOffice.template')

@section('head')
	<style></style>
    <title>@if( $data['CompanyGroup'] ){{ $data['CompanyGroup']->name }}@endif</title>
@endsection

@section('body')
    <div style="width: 80%; margin: 0 auto;">
    <a href="{{ route('backOffice.setting.company-group.index') }}"><< Back</a>
    @if( $data['CompanyGroup'] )
        <div>ID :{{ $data['CompanyGroup']->id }}</div>
        <div>NAME : {{ $data['CompanyGroup']->name }}</div>
        <div>DESCRIPTION : {{ $data['CompanyGroup']->description }}</div>
        <div>STATUS : {{ $data['CompanyGroup']->status }}</div>
        <div>customertier : {{ ($data['CompanyGroup']->customertier != null ? $data['CompanyGroup']->customertier->name :'') }}</div>
        <div>TIME : {{ $data['CompanyGroup']->timestamp }}</div>
    @else
        <div> NO DATA </div>
    @endif
    </div>
@endsection

@section('script')
  <script type="text/javascript"></script>
@endsection
