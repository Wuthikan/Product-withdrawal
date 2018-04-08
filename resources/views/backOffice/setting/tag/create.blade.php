@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/<module_name>/create.css')}}"/>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
    <div>Visit http://localhost/home for Code sample</div>
    <div>Visit http://localhost/home2 for Code sample</div>
    <div>Visit http://localhost/home3 for Code sample</div>

    <form action="{{ route('backOffice.setting.tag.store') }}" method="POST">
        {!! csrf_field() !!}
        <div><input type="text" name="name" id="name" placeholder="Tag name" value="{{ old('name') }}" required></div>
        <button type="submit">Submit</button>
    </form>

    <!-- ERROR MESSAGES -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    
@endsection

@section('script')
    <script src="{{ asset('js/back-office/<module_name>/create.js') }}"></script>
@endsection