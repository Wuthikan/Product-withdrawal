@extends('layouts.backOffice.template-with-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/<module_name>/show.css')}}"/>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
    <div>Visit http://localhost/home for Code sample</div>
    <div>Visit http://localhost/home2 for Code sample</div>
    <div>Visit http://localhost/home3 for Code sample</div>

    <div>member_number: {{ $user->member_number }}</div>
    <div>first_name: {{ $user->first_name }}</div>
    <div>last_name: {{ $user->last_name }}</div>
    <div>nick_name: {{ $user->nick_name }}</div>
    <div>image: {{ $user->image }}</div>
    <div>day month year: {{ $user->getDay->day }} - {{ $user->getMonth->month }} - {{ $user->getYear->year }}</div>
    <div>gender: {{ $user->gender }}</div>
    <div>email: {{ $user->email }}</div>
    <div>telephone: {{ $user->telephone }}</div>
    <div>is_block: {{ $user->is_block }}</div>
    <div>google_id: {{ $user->google_id }}</div>
    <div>facebook_id: {{ $user->facebook_id }}</div>
    <div>twitter_id: {{ $user->twitter_id }}</div>
    <div>created_at: {{ $user->created_at->format('d/m/Y H:i') }}</div>
    <div>updated_at: {{ $user->updated_at->format('d/m/Y H:i') }}</div>

@endsection

@section('right-sidebar')
    <div>Right Sidebar</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/<module_name>/show.js') }}"></script>
@endsection