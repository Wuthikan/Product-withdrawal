@extends('layouts.backOffice.template')

@section('head')
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/<module_name>/create.css')}}"/> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/news-and-event/create.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/customer-tier/create.css')}}"/>
@endsection

@section('module_name', 'CUSTOMER TIER')
@section('page_name', 'CREATE')

@section('body')
	<section id="newevent" class="x_title">
  	<div class="x_content">
      <form action="{{ $action }}" enctype="multipart/form-data" method="POST">
        {!! csrf_field() !!}

        @if(count($errors) > 0)
          {{-- <div class="alert alert-danger">
              <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
            </div> --}}

          {{-- <div style="color:red;font-weight:bold"> --}}
          @foreach($errors->all() as $error)
           <div class="alert alert-danger">
              <strong>Danger!</strong> {{ $error }}
            </div>
          {{-- <p>{{ $error }}</p> --}}
          @endforeach
          {{-- </div> --}}
        @endif


        @if(isset($edit))
          <input type="hidden" name="_method" value="PUT">
        @endif
        <div class="content fix-width scroll-2">
          <div class="flex-parent">
            <div class="col1">
              <input type="file" id="image" name="imageProfile" accept="image/x-png,image/gif,image/jpeg" class="file hidden" style="display:none;" />


              <a href="#" class="thumbnail">
                @if (isset($customerTier)&&file_exists(storage_path('/images/back-office/setting/customer-tier/'.$customerTier->image)))
                 <input type="hidden" name="_imageProfile" value="{{ (isset($customerTier)) ? $customerTier->image : old('_imageProfile') }}">
                 <img src="{{ Image::make(storage_path('/images/back-office/setting/customer-tier/'.$customerTier->image))->encode('data-url') }}" class="profilePicture" style="height:128px;" >
                @else
                  <i class="fa fa-camera fa-3x" aria-hidden="true"></i>
                @endif
              </a>
            </div>
            <div class="col2">
              
                <div class="form-group">
                  <label for="name">Name: </label>
                  <input type="text" class="form-control" id="name" name="name" value="{{(isset($customerTier)) ? $customerTier->name : old('name') }}" required="required">
                </div>
                <div class="form-group">
                  <label for="description">Description: </label>
                  <textarea class="form-control" rows="5" id="description"  placeholder="description" name="description" required="required" style="height:80px;">{{(isset($customerTier)) ? $customerTier->description : old('description') }}</textarea>
                </div>

              
            </div>
          </div>

        </div>
        

        <div class="buttons fix-width">
          <button type="submit" class="btn btn-ngin btn-default m-r-1">
            <span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i></span>SAVE
          </button>
          <button onclick="location.href='{{ route('backOffice.setting.customer-tier.index') }}'" type="button" class="btn btn-ngin btn-default ">
            <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL
          </button>
        </div>
      </form>
    </div>
  </section>

@endsection

@section('script')
	<!-- <script src="{{ asset('js/back-office/home/index.js') }}"></script> -->
    <script src="{{ asset('js/back-office/setting/customer-tier/create.js') }}"></script>
    <script type="text/javascript">

    	$('[data-action="square"]').filter(function(){
    		var item_width = $(this).width();
    		$(this).height(item_width);
    		$(this).width(item_width);
    	});

      $( document ).ready(function() {
          $(".thumbnail").click((e) => {
              e.preventDefault();
          $("input.file").trigger("click");
          });
      });

      $('#image').on('change',function() {  
        readURL(this);

     }); 

      function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
              var html = "<img src=\""+e.target.result+"\" class=\"img-responsive\"  >";
              $('.thumbnail').html(html);
          }
          reader.readAsDataURL(input.files[0]);
        }
      }
    </script>
@endsection
