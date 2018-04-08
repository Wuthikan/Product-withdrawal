@extends('layouts.html5')

@section('global-head')
    <!-- Layout CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>

    @yield('head')
@endsection

@section('global-body')
<div id="container" class="container body">
    @yield('body')
</div>
@endsection

@section('global-script')
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Custom Theme Scripts -->
    @yield('script')
@endsection