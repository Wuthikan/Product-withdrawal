@extends('layouts.backOffice.template-with-right-sidebar')

@section('head')
	<style></style>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
    <div>name: {{ $category->name }}</div>
    <div>description: {{ $category->description }}</div>
    <div>status: @if($category->status) Active @else Inactive @endif</div>
    <div>{{ $category->created_at->format('d/m/Y H:i') }}</div>
    <div>{{ $category->updated_at->format('d/m/Y H:i') }}</div>
    <div>{{ data_get($category, 'deleted_at', false) ? $category->deleted_at->format('d/m/Y H:i') : '-' }}</div>
@endsection

@section('right-sidebar')
    <div>Right Sidebar</div>
@endsection

@section('script')
  <script type="text/javascript"></script>
@endsection
