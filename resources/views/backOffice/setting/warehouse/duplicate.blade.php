@extends('layouts.backOffice.template')

@section('head')
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/<module_name>/create.css')}}"/> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/news-and-event/create.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/warehouse/create.css')}}"/>
@endsection

@section('module_name', 'WAREHOUSE')
@section('page_name', 'CREATE')

@section('body')
<!-- @if ($errors->count())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
@endif -->
	<section id="newevent" class="x_title">
  	<div class="x_content">

    <div class="content fix-width scroll-2">
      <form action="{{ route('backOffice.setting.warehouse.update',$Warehouse->id) }}" method="POST" enctype="multipart/form-data">
          {!! csrf_field() !!}
          {!! method_field('put') !!}
          <input name="duplicate" type="hidden" value="true" />
        <div class="flex-parent">
          <div class="col1">
            <input name="image" id="image" type="file" class="file" style="opacity: 0;" />
            <?php
                $name_name = 'image';
                if(!empty($request->old($name_name,$Warehouse->$name_name))  &&file_exists( storage_path($request->old($name_name,$Warehouse->$name_name) ) )){
                  $image = Image::make(storage_path($request->old($name_name,$Warehouse->$name_name) ))->encode('data-url');
                }else{
                  $image = Image::make(public_path('images/backOffice/setting/general/default-logo.jpg') )->encode('data-url');
                }
            ?>
            <img for="profile-img" id="img_img" style="width:250px" src="{{$image}}" class="thumbnail">
          </div>
          <div class="col2">
              <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $request->old('name',$Warehouse->name) }}" >
              </div>
              <div class="form-group">
                <label for="description">Description: </label>
                <textarea class="form-control" rows="5" id="description" name="description" style="height:80px;">{{ $request->old('description',$Warehouse->description) }}</textarea>
              </div>
              <div class="form-group type">
                <div class="col-xs-1">
                  <label>TYPE:</label>
                </div>
                <div class="col-xs-11">
                  <label>
                    <input type="radio" name="warehourse_type" value="Public" @if("Public"==$request->old('warehourse_type',$Warehouse->warehourse_type)) checked @endif>
                    <span>Public</span>
                  </label><br />
                  <label>
                    <input type="radio" name="warehourse_type" value="Private" @if("Private"==$request->old('warehourse_type',$Warehouse->warehourse_type)) checked @endif>
                    <span>Private</span>
                  </label>
                </div>
              </div>
          </div>
        </div>
        <div class="buttons fix-width">
          <button type="submit" class="btn btn-ngin btn-default m-r-1">
            <span class="btn-label"><i class="fa fa-files-o" aria-hidden="true"></i></span>DUPLICATE
          </button>
          
          <button type="button" class="btn btn-ngin btn-default " onclick="window.location.href='{{route('backOffice.setting.warehouse.index')}}';">
            <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL
          </button>
        </div>
      </form>
    </div>

    

  </div>
</section>

@endsection

@section('script')
	<!-- <script src="{{ asset('js/back-office/home/index.js') }}"></script> -->
    <script src="{{ asset('js/back-office/setting/warehouse/create.js') }}"></script>
    <script type="text/javascript">
    	function readURL(input,imgId) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(imgId).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#image").change(function(){
            readURL(this,'#img_img');
        });
        $("#img_img").click(function(){
            document.getElementById("image").click();
        });

        
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "3000",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        @if(session()->has('success'))
            toastr["success"]("{{ session()->get('success') }}", "Success");
        @elseif(session()->has('failure'))
            toastr["warning"]("{{ session()->get('failure') }}", "Warning");
        @endif
                @if ($errors->any())
                @foreach ($errors->all() as $error)
            toastr["error"]("{{ $error }}", "Error");
        @endforeach
        @endif
    </script>
@endsection
