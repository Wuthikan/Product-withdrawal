@extends('layouts.auth.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/auth/login.css')}}"/>
@endsection

@section('header')
    <header></header>
@endsection

@section('body')
  <nav class="navbar"></nav>
  <div class="container-fluid">
    <div id="container">
        <img id="logo" src="{{ asset('/images/logo.png') }}">
        <p id="resetLabel">Reset Password</p>
        <form id="marginTop">
          <div class='form-group'>
            <div id='inputLabel'>Password</div>
            <input type="password" class="form-control" />
          </div>
          <div class='form-group'>
            <div id='inputLabel'>Confirm Password</div>
            <input type="password" class="form-control" />
          </div>
          <div class="loginContainer">
            <a href="{{ route('login') }}" class="btn btn-ngin btn-default ngin-no-icon">
              Save
            </a>
          </div>
          <div class="alert alert-danger">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Invalid Username or Password.
          </div>
          <div class="alert alert-success">
            Success!
          </div>
        </form>
      </div>
    </div>
@endsection

@section('footer')
  <footer></footer>
@endsection

@section('script')
@endsection
