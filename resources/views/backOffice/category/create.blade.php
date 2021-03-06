@extends('layouts.backOffice.template')

@section('head')
	<style></style>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
    <form action="{{ route('category.store') }}" method="POST">
        {!! csrf_field() !!}
        <input type="hidden" name="platform_id" value="{{ $platform_id }}">
        <label for="name">Name</label><input type="text" id="name" name="name" value="{{ old('name') }}" required>
        <label for="description">Description</label><textarea id="description" name="description" required>{{ old('name') }}</textarea>
        <label for="status">Status</label>
        <input type="radio" name="status" value="1" id="status" @if(old('status')) checked @endif> Active
        <input type="radio" name="status" value="0" id="status" @if(! old('status')) checked @endif> Inactive
        <button>Save</button>
    </form>
    @include('backOffice.category.errors')
@endsection

@section('script')
  <script type="text/javascript"></script>
@endsection
