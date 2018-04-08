@extends('layouts.auth.template')

@section('head')
    <!-- base core css -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
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
        <p id="resetLabel">Forget Password</p>
        <form id="marginTop">
          <div class='form-group'>
            <div id='inputLabel'>Email</div>
            <input type="email" class="form-control" />
          </div>
          <div class="loginContainer">
            <a href="{{ route('password.reset', 88888888) }}" class="btn btn-ngin btn-default ngin-no-icon">
              Send Email
            </a>
          </div>
          <div class="alert alert-danger">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Incorrect Email
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
