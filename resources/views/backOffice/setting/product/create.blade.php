@extends('layouts.backOffice.template')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/product/create.css')}}"/>
@endsection

@section('module_name', 'PRODUCTS')
@section('page_name', 'CREATE')

@section('body')
<section class="x_content scroll-2">
  <section class="product--create">
    <form>
      <div class="product--create--header">
        <div class="row">
          <div class="col-md-2" style="overflow: hidden">
            <div class="form-group">
              <div class="upload-preview">
                <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
              </div>
            </div>
          </div>
          <div class="col-md-10">
            <div class="form-group">
              <label for="product-name" class="text-black">PRODUCT NAME</label>
              <input type="text" class="form-control" />
            </div>
            <div class="form-group">
              <label for="product-description" class="text-black">PRODUCT DESCRIPTION</label>
              <textarea class="form-control"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="spacer"></div>
      <div class="product--create--detail">
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="genre" class="text-black">GENRE</label>
              <select id="genre" class="form-control">
                <option>text-1</option>
                <option>text-2</option>
                <option>text-3</option>
                <option>text-4</option>
                <option>text-5</option>
                <option>text-6</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <label for="genre" class="text-black">RATING</label>
              <select id="genre" class="form-control">
                <option>text-1</option>
                <option>text-2</option>
                <option>text-3</option>
                <option>text-4</option>
                <option>text-5</option>
                <option>text-6</option>
              </select>
          </div>
          <div class="col-md-4">
            <label for="genre" class="text-black">NUMBER OF PLAYER</label>
              <select id="genre" class="form-control">
                <option>text-1</option>
                <option>text-2</option>
                <option>text-3</option>
                <option>text-4</option>
                <option>text-5</option>
                <option>text-6</option>
              </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <label for="genre" class="text-black">PUBLISHER</label>
              <select id="genre" class="form-control">
                <option>text-1</option>
                <option>text-2</option>
                <option>text-3</option>
                <option>text-4</option>
                <option>text-5</option>
                <option>text-6</option>
              </select>
          </div>
        </div>
      </div>
      <table class="table ngin-table mt-2">
        <thead>
          <tr><th class="text-left" colspan="3">PLATFORM</th></tr>
        </thead>
        <tbody>
          @for($i=1;$i<=30;$i++)
          {{-- Becareful this is 1-indexed loop --}}
          @if(($i%3) == 1) <tr> @endif
            <td class="text-left"><input id="item-{{$i}}" name="item-{{$i}}" type="checkbox" class="iCheck" /> <label for="item-{{$i}}" class="iCheck-label">Lorem ipsum</label></td>
          @if(($i%3) == 0) </tr> @endif
          @endfor
        </tbody>
      </table>
      <table class="table ngin-table mt-2">
        <thead>
          <tr><th class="text-left" colspan="3">EDITION</th></tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-left">STANDARD</td>
            <td><input type="text" class="form-control" value="RONALDO" /></td>
            <td><input type="text" class="form-control" /></td>
          </tr>
          <tr>
            <td><input type="text" class="form-control" value="DELUXC" /></td>
            <td><input type="text" class="form-control" value="ICON" /></td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <div class="button-actions">
        <button type="button" class="btn btn-ngin btn-default">
          <span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i></span>SAVE
        </button>
        <button type="button" class="btn btn-ngin btn-default">
          <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL
        </button>    
      </div>
    </form>
  </section>
</section>
@endsection

@section('script')
<script src="{{ asset('js/back-office/templates/upload-preview/upload-preview.js') }}"></script>
<script src="{{ asset('js/back-office/setting/product/create.js') }}"></script>
@endsection