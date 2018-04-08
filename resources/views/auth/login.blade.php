@extends('layouts.auth.template')

@section('head')
    {{--  <meta http-equiv="refresh" content="1; url={{ route('backOffice.home.index') }}" />  --}}
    {{--  <meta http-equiv="refresh" content="1; url={{ Socialite::with('google')->redirect()->getTargetUrl() }}" />  --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/auth/login.css')}}"/>
@endsection

@section('body')
    <nav class="navbar"></nav>
    <div class="container-fluid">
      <div id="container">
        <img id="logo" src="{{ asset('/images/logo.png') }}">
        <form id="marginTop">
          <div class='form-group'>
            <div id='inputLabel'>Email</div>
            <input type="email" class="form-control" />
          </div>
          <div class='form-group'>
            <div id='inputLabel'>Password</div>
            <input type="password" class="form-control" />
          </div>
          <div class="checkbox">
            <label id='checkBoxLabel'>
              <input type="checkbox" class="iCheck" > Remember Me
            </label>
            <a id="forgetLabel" href="{{ route('password.request')}}">
                Forget Password?
            </a>
          </div>
          <div class="loginContainer">
            <a href="{{ route('backOffice.home.index') }}" class="btn btn-ngin btn-default ngin-no-icon">
              Login
            </a>
          </div>
          <div class="alert alert-danger">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Invalid Username or Password.
          </div>
        </form>
      </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/auth/login.js') }}"></script>
@endsection