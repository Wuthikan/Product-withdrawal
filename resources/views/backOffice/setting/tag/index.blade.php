@extends('layouts.backOffice.template')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/back-office/setting/tag/index.css')}}"/>
@endsection

@section('module_name', 'TAGS')
@section('page_name', 'INDEX')

@section('body')
<section class="section-header-index">
  <form class="form-inline form-header-index">
    <div class="form-inline-row">

      <div class="col-1">
        <div class="form-group select-all">
          <input type="checkbox" class="iCheck" id="selectall" name="selectall">
          <label for="selectall" class="iCheck-label" >Select All</label>
        </div>
        <div class="form-group">
          <button
            type="button"
            class="btn btn-default-background newName"
            data-toggle="modal" data-target="#modalBox2" data-backdrop="false">
            <span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span><span class="btn-label-label">NEW</span>
          </button>
        </div>
      </div>

      <div class="col-2">
        <div class="form-group form-fixed-width">
          <div class="icon-addon addon-sm">
            <input  type="text" placeholder="SEARCH" class="form-control search" id="SEARCH" name="search" value="{{ Request::input('search') }}">
            <label for="search"  class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
          </div>
        </div>
      </div>
    

      <div class="col-3">
        <div class="form-group">
          <a class="btn  btn-default-background" href="{{ route('backOffice.setting.tag.index', ['excel' => 1]) }}">
            <span class="btn-label"><i class="fa fa-file-excel-o excel" aria-hidden="true"></i></span><span class="btn-label-label">Excel</span>
          </a>
        </div>
        <div class="form-group">
          <button type="button" class="btn btn-default-background" id="deleteAll">
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
              <li><input type="radio" id="radioDes" name="rdoOrder" @if(session()->get('order') == 'desc') checked="checked" @endif value="desc"><label for="radioDes">Descending</label></li>
              <li role="separator" class="divider"></li>
              <li class="title">BY</li>
              <li><input type="radio" id="radioId" name="rdoBy" @if(session()->get('sort') == 'name') checked="checked" @endif value="name"><label for="radioId">Name</label></li>
              <li><input type="radio" id="radio2" name="rdoBy" @if(session()->get('sort') == 'created_at') checked="checked" @endif value="created_at"><label for="radio2">Created date</label></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </form>
</section>

<div class="tag-table" id="tagList" action="{{route('backOffice.setting.tag.destroy-many')}}" data-redirect="{{route('backOffice.setting.tag.index')}}">
  <div class="body-table scroll-2">
    @if($data->total() == 0)
      <div align="center">data not found.</div>
    @else
    <table class="table">
      <tbody>
        @foreach($data as $tag)
        <tr>
          <td class="blank align-center">
            <div class="form-group">
              <input type="checkbox" class="iCheck item" name="item[]" value="{{$tag->id}}">
            </div>
          </td>
          <td class="name">
            <p class="titleText tagname_{{$tag->id}}" id="tagname" href="#" @if($tag->trashed()) style="color: #ccc; text-decoration: line-through;" @endif>{{$tag->name}}</p>
          </td>
          <td class="actions">
            <div class="buttons">
              @if(!$tag->trashed())
              <button type="button" id='btn-edit'
                class="btn btn-ngin btn-default editName" style="margin-right:10px;"
                data-toggle="modal" data-target="#newNameModal"
                data-id="{{$tag->id}}"
                data-action="{{route('backOffice.setting.tag.patch-name', $tag->id)}}" @if($tag->trashed()) disabled @endif data-checklink="{{ route('backOffice.setting.tag.check-status', $tag->id) }}?checkEdit=1">
                <span class="btn-label">
                  <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                </span>Edit
              </button>
              @endif
              @if($tag->trashed())
              <form action="{{ route('backOffice.setting.tag.restore', $tag->id) }}" method="post" style="margin-right:10px">
                  <input name="_method" type="hidden" value="put">
                  {!! csrf_field() !!}
                  <button type="submit" class="btn btn-ngin btn-default btn-default customWidth" @if(!$tag->trashed()) disabled @endif>
                      <span class="btn-label left">
                          <i class="fa fa-undo info" aria-hidden="true"></i>
                      </span>Undo
                  </button>
              </form>
              @endif
              <form class="submitDelete" action="{{ route('backOffice.setting.tag.destroy', $tag->id) }}" method="post">
                <input name="_method" type="hidden" value="DELETE">
                {!! csrf_field() !!}
                @if ($tag->trashed())
                <input name="_force" type="hidden" value="true">
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
  </div>

<div id="modalBox" class="modal fade modalBox" role="dialog">
    <div class="modalContainer">
        <form id="editNameForm">
            <input name="_method" type="hidden" value="patch">
            {!! csrf_field() !!}
            <p><span>Edit</span> <span id="oldTagName">Stock-1</span></p>
            <input type="hidden" name="id" id="idNewName">
            <div class="form-group">
                <label for="name" class="strongLabel">NAME</label>
                <input type="text" class="form-control" id="newName" name="name" placeholder="" required>
                <input type="hidden" id="dataId">
            </div>
            <div align="center">
              <button type="submit" id="saveName" class="btn btn-ngin btn-default">
                <span class="btn-label">
                  <i class="fa fa-save success" aria-hidden="true"></i>
                </span>Save
              </button>
            </div>
        </form>
    </div>
</div>

<div id="modalBox2" class="modalBox modal fade" role="dialog">
    <div class="modalContainer">
        <form action="{{route('backOffice.setting.tag.store')}}" method="post">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="name" class="strongLabel">NAME</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="" required>
            </div>
            <div align="center">
              <button type="submit" id="saveName" class="btn btn-ngin btn-default">
                <span class="btn-label">
                  <i class="fa fa-save success" aria-hidden="true"></i>
                </span>Create
              </button>
              <button type="button" class="btn btn-ngin btn-default" data-dismiss="modal">
                <span class="btn-label">
                  <i class="fa fa-close" aria-hidden="true"></i>
                </span>Cancel
              </button>
            </div>
        </form>
    </div>
</div>

{{ $data->links() }}
@endsection

@section('script')
<script src="{{ asset('js/back-office/templates/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/back-office/setting/tag/index.js') }}"></script>
<script>
$(function() {  
  @if(session()->has('success'))
    toastr["success"]("{{ __(session()->get('success')) }}", "Success");
  @endif
  @if ($errors->any())
          @foreach($errors->all() as $error)
              toastr["error"]("{{ $error }}", "Error");
          @endforeach
  @endif
  @if(session()->has('error'))
      {{session()->has('error')}}
      toastr["error"]("{{ __(session()->get('error')) }}", "Error");
  @endif
  @if(session()->has('warning'))
      {{session()->has('warning')}}
      toastr["warning"]("{{ __(session()->get('warning')) }}", "Warning");
  @endif
});  
$('.dropdown-toggle').dropdown();

window.lang = {
  'alert': {
    none_selected: "{{ __('alert.none_selected') }}",
  }
};
</script>
@endsection
