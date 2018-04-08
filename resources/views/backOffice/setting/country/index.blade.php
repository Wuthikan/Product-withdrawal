{{--
@author: กีรติพร ลีลาวันทนพันธุ์
@phone: 089-185-9078
@email: bookhunter99@gmail.com่นี่
--}}
@extends('layouts.backOffice.template')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/country/index.css')}}"/>
@endsection

@section('module_name', 'COUNTRY')
@section('page_name', 'INDEX')

@section('body')
<div id="bk-country" class="x_content">
  <!-- START SEARCH BAR -->
  <section class="section-header-index">
    <form class="form-inline form-header-index">
      <div class="form-inline-row">
        <div class="col-1">
          <div class="form-group select-all">
            <input type="checkbox" class="iCheck" id="selectall" name="selectall" >
            <label for="selectall" class="iCheck-label" >Select All</label>
          </div>
          <div class="form-group">
            <button type="button" class="btn btn-default-background" onclick="window.location='{{ url("back-office/setting/country/create") }}'">
              <span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
            </button>
          </div>
        </div>
        <div class="col-2">
          <div class="form-group form-fixed-width" >
            <div class="icon-addon addon-sm">
              <input  type="text" placeholder="SEARCH" class="form-control search" id="search" name="search" value="{{Request::input('search')}}">
              <label for="search"  class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="form-group">
            <a class="btn  btn-default-background" href="{{route('backOffice.setting.country.index', ['excel'=>1])}}">
              <span class="btn-label"><i class="fa fa-file-excel-o excel" aria-hidden="true"></i></span><span class="btn-label-label">Excel</span>
            </a>
          </div>
          <div class="form-group">
            <button type="button" class="btn  btn-default-background" id="deleteAll" data-url="{{route('backOffice.setting.country.destroy', 0)}}">
              <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span><span class="btn-label-label">Delete All</span>
            </button>
          </div>
          <div class="form-group">
            <div class="btn-group ngin-dropdown-sort">
              <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-sort-alpha-desc"></i> SORT
              </a>
              <ul class="dropdown-menu dropdown-menu-form">
                <li class="title">ORDER</li>
                <li><input type="radio" id="radioAsc" name="rdoOrder" @if(session()->get('order') == 'asc') checked="checked" @endif value="asc"><label for="radioAsc">Ascending</label></li>
                <li><input type="radio" id="radioDesc" name="rdoOrder" @if(session()->get('order') == 'desc') checked="checked" @endif value="desc"><label for="radioDesc">Descending</label></li>
                <li role="separator" class="divider"></li>
                <li class="title">BY</li>
                <li><input type="radio" id="radio1" name="rdoBy" @if(session()->get('sort') == 'name') checked="checked" @endif value="name"><label for="radio1">Name</label></li>
                <li><input type="radio" id="radio2" name="rdoBy" @if(session()->get('sort') == 'description') checked="checked" @endif value="description"><label for="radio2">Description</label></li>
                <li><input type="radio" id="radio3" name="rdoBy" @if(session()->get('sort') == 'code') checked="checked" @endif value="code"><label for="radio3">Code</label></li>
                <li><input type="radio" id="radio4" name="rdoBy" @if(session()->get('sort') == 'created_date') checked="checked" @endif value="created_date"><label for="radio4">Created Date</label></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
  <!-- END SEARCH BAR -->

<!-- START USER LIST -->
<div class="country-table">
<table class="table ngin-table">
  <thead>
    <tr>
      <th class="blank"></th>
      <th class="name">
        <span>Name</span>
      </th>
      <th class="description">
        <span>Description</span>
      </th>
      <th class="code align-center">
        <span>Code</span>
      </th>
      <th class="actions align-center">
        <span>Action</span>
      </th>
    </tr>
  </thead>
</table>

<div class="body-table scroll-2">
  @if($countries->total() == 0)
  <div align="center">data not found.</div>
  @else
  <table class="table ngin-table">
    @foreach($countries as $i => $data)
    <tbody>
      <tr @if($data->trashed()) class="is-trashed" @endif>
        <td class="blank">
          <div class="form-group">
            <input type="checkbox" name="item[]" class="iCheck item" value="{{$data->id}}">
          </div>
        </td>
        <td class="name">
          <p>{{$data->name}}</p>
        </td>
        <td class="description">
          <p>{{$data->description}}</p>
        </td>
        <td class="code">
          <p>{{$data->code}}</p>
        </td>
        <td class="actions align-center">
          <div class="buttons">
            @if(!$data->trashed())
            <button class="btn btn-ngin btn-default" onclick="window.location='{{route('backOffice.setting.country.edit', $data->id)}}'">
              <span class="btn-label">
                <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
              </span>Edit
            </button>
            @endif
            @if(!$data->trashed())
            <button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{route('backOffice.setting.country.create', ['id'=>$data->id])}}'">
              <span class="btn-label">
                <i class="fa fa-files-o" aria-hidden="true"></i>
              </span>Duplicate
            </button>
            @endif
            @if($data->trashed())
            <form action="{{ route('backOffice.setting.country.restore', $data->id) }}" method="post">
              {{csrf_field()}}
              {{method_field('put')}}
              <button type="submit" class="btn btn-ngin btn-default">
                <span class="btn-label">
                  <i class="fa fa-undo info" aria-hidden="true"></i>
                </span>Undo
              </button>
            </form>
            @endif
            <form action="{{ route('backOffice.setting.country.destroy', $data->id) }}" method="post" class="submitDelete">
              {{csrf_field()}}
              {{method_field('delete')}}
              @if($data->trashed())
              <input type="hidden" name="_force" value="true">
              @endif
              <button type="submit" class="btn btn-ngin btn-default">
                <span class="btn-label">
                  <i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i>
                </span>Delete
              </button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endif
</div>

{{$countries->links()}}
</div>
@endsection

@section('script')
<script src="{{ asset('js/back-office/setting/country/index.js') }}"></script>
@include('components/alert');
@endsection
