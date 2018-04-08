@extends('layouts.html5')

@section('global-head')
  <!-- Layout CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
  <!-- iCheck -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/back-office/templates/icheck/skins/all.css') }}"/>
  <!-- Page CSS -->
  @yield('head')
@stop

@section('global-body')
  @include('layouts.auth.header')

  <!-- Page Body -->
  @yield('body')
  <!-- End Page Body -->
  
  {{--  @include('layouts.auth.footer')  --}}
@endsection

@section('global-script')
  <!-- FastClick -->
  <!-- Custom Theme Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <!-- Page JavaScript -->

  <script src="{{ asset('js/back-office/templates/jquery.min.js') }}"></script>
  <!-- datetimepicker -->
  <script src="{{ asset('js/back-office/templates/bootstrap-datetimepicker/moment.min.js') }}"></script>
  <script src="{{ asset('js/back-office/templates/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
  <!-- iCheck -->
  <script src="{{ asset('js/back-office/templates/icheck/icheck.min.js') }}"></script>

  <!-- Layout JavaScript -->
  <script type="text/javascript">console.log('© ' + new Date().getFullYear() + ' - AdiwIT Co., Ltd. All rights reserved.');</script>

  <!-- Page JavaScript -->
  @yield('script')
@endsection