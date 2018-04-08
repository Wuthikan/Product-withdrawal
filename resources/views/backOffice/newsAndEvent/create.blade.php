
@extends('layouts.backOffice.template')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/news-and-event/create.css')}}"/>
@endsection

@section('module_name', 'NEWS & EVENTS')
@section('page_name', 'CREATE')

@section('body')
<section id="newevent" class="x_title">
    <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
    

        @if(isset($edit))
        <input type="hidden" name="_method" value="PUT">
        @endif
        <input type="hidden" name="user_id" value="1">
        <div class="x_content">

            <div class="content fix-width scroll-2">

                <div class="flex-parent">
                    <div class="col1">
                        <input type="file" id="image" name="image" accept="image/x-png,image/gif,image/jpeg" class="file hidden" style="display:none;" />
                       
                        <a href="#" class="thumbnail">
                            @if (isset($newsevent)&&file_exists(storage_path('/images/'.$newsevent->image)))
                             <input type="hidden" name="_image" value="{{ (isset($newsevent)) ? $newsevent->image : old('_image') }}">
                        
                             <img src="{{ Image::make(storage_path('/images/'.$newsevent->image))->encode('data-url') }}" class="profilePicture" style="height:128px;" >
                            @else
                          <i class="fa fa-camera fa-3x" aria-hidden="true"></i>
                            @endif
                        </a>
                    </div>
                    <div class="col2">
                        <div class="form-group">
                            <label for="name">Name: </label>
                            <input type="text" class="form-control" id="name" name="title" value="{{(isset($newsevent)) ? $newsevent->title : old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description: </label>
                            <textarea class="form-control" rows="5" id="description" name="description" style="height:80px;">{{(isset($newsevent)) ? $newsevent->description : old('description') }}</textarea>
                        </div>
                        <div class="flex-parent">
                            <div class="flex-item">
                                <div class="form-group">
                                    <label for="name">Event Date: </label>
                                    <div class="input-group date" id="eventDate">
                                        <input type="text" class="form-control" id="eventDate" name="news_events_date"  value="{{(isset($newsevent)) ? $newsevent->news_events_date : old('news_events_date') }}"/>
                                        <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-item">
                                <div class="form-group">
                                    <label for="startEvent" style="margin-left: 15px">Start news/event: </label>
                                    <div class="input-group date" id="startEvent">
                                        <input type="text" class="form-control" id="startEvent" name="start_date"  value="{{ (isset($newsevent)) ? $newsevent->start_date : old('start_date') }}"/>
                                        <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="margin:0 1.5em;">
                                <label>&nbsp;</label>
                                <p class="form-control-static" style="color:#000"><b>TO</b></p>
                            </div>
                            <div class="flex-item">
                                <div class="form-group">
                                    <label for="name">End news/event: </label>
                                    <div class="input-group date" id="endEvent">
                                        <input type="text" class="form-control" id="endEvent" name="end_date"  value="{{(isset($newsevent)) ? $newsevent->end_date : old('end_date') }}"/>
                                        <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <!--  @if(isset($newsevent))
                         <input type="radio" name="status" value="on" id="status" @if(isset($newsevent) && $newsevent->status === 'on' ) checked @endif> Active
        <input type="radio" name="status" value="off" id="status" @if( isset($newsevent) && $newsevent->status !== 'on') checked @endif> Inactive
                        @endif -->
                    </div>
                </div>

            </div>

            <div class="buttons fix-width">
                <button type="submit" class="btn btn-ngin btn-default m-r-1">
                    <span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i></span>SAVE
                </button>
                <a href="{{route('backOffice.news-and-event.index')}}" type="button" class="btn btn-ngin btn-default ">
                    <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL
                </a>
            </div>

        </div>
    </form>
</section>
@endsection

@section('script')

<script type="text/javascript">

    function initDatetimePicker(element)
    {
        $(element).datetimepicker({
            format: 'DD/MM/YYYY hh:mm'
        });
    }

    $( document ).ready(function() {
        $("#eventDate").datetimepicker({
            viewMode: 'days',
            format: 'DD/MM/YYYY'
        })
        initDatetimePicker($("#startEvent"));
        initDatetimePicker($("#endEvent"));
        $(".thumbnail").click((e) => {
            e.preventDefault();
        $("input.file").trigger("click");
        });


     

        @if(isset($newsevent))
        $('#eventDate').data("DateTimePicker").date("{{ date('d/m/Y H:i',strtotime($newsevent->news_events_date)) }}");
        $('#startEvent').data("DateTimePicker").date("{{ date('d/m/Y H:i',strtotime($newsevent->start_date)) }}");
        $('#endEvent').data("DateTimePicker").date("{{ date('d/m/Y H:i',strtotime($newsevent->end_date)) }}");
        @endif

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
@if ($errors->any())
    toastr.error("{{$errors->all()[0]}}");
@endif

@if(session()->has('success'))
    toastr.success("{{ session()->get('success') }}");
@endif
</script>

@endsection
