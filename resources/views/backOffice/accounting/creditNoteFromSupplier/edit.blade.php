@extends('example::layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/back-office/edit.css') }}"/>
@endsection

@section('body')
    <form action="{{ route('backOffice.example.update', 1) }}" method="POST">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="PUT">

        <!-- EXAMPLE SELECT -->
        <select name="field_1[]" id="field_1">
            <option value="" disabled="disabled">-- Field 1 --</option>
            <option value="{{ old('field_1')}}" @if( old('field_1')) selected="selected" @endif >Value 1</option>
            <option value="{{ old('field_1')}}" @if( old('field_1')) selected="selected" @endif >Value 2</option>
        </select>
        
        <!-- EXAMPLE INPUT -->
        <input type="text" name="field_2" id="field_2" placeholder="field_2" value="{{ old('field_2') }}" required>
        
        <!-- EXAMPLE TEXTAREA -->
        <textarea name="field_3" id="field_3" placeholder="field_3">{{ old('field_3') }}</textarea>

        <!-- EXAMPLE RADIO -->
        <input type="radio" name="field_4" value="1" id="field_4" @if( old('field_4')) checked @endif> Active
        <input type="radio" name="field_4" value="0" id="field_4" @if(! old('field_4')) checked @endif> Inactive

        <!-- EXAMPLE CHECKBOX -->
        <input type="checkbox" name="field_5[]" value="1" id="field_5" @if( old('field_5')) checked @endif> Active
        <input type="checkbox" name="field_5[]" value="0" id="field_5" @if(! old('field_5')) checked @endif> Inactive

        <button type="submit">Submit</button>
    </form>

    <!-- ERROR MESSAGES -->
    <div>Error Message</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/edit.js') }}"></script>
@endsection