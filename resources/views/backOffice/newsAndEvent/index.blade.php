
@extends('layouts.backOffice.template')

@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/news-and-event/index.css')}}" />
@endsection

@section('module_name', 'NEWS & EVENTS')
@section('page_name', 'INDEX')

@section('body')

<!-- START MAIN PAGE -->
<div id="newsevent" class="x_content">
  <!-- START SEARCH BAR -->
  <section class="section-header-index">
    <form class="form-inline form-header-index"  action="{{ route('backOffice.news-and-event.index') }}" id="search-form" method="get">
      <div class="row">
        <table>
          <tr>
            <td class="col-1" style="min-width: 10% !important; width: 12% !important;">
              <div class="col-1-content" >
                <div class="form-group select-all">
                  <input type="checkbox"  checked class="iCheck" id="selectall" name="selectall" >
                  <label for="selectall" class="iCheck-label" >Select All</label>
                </div>
                <div class="form-group">
                  <button type="button" class="btn btn-default-background" onclick="window.location='{{ url("back-office/news-and-event/create") }}'">
                    <span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
                  </button>
                </div>
               
              </div>
            </td>
            <td class="col-2" style="width: 70% !important;">
              <div class="" >
                <div class="form-group form-fixed-width" >
                  <div class="icon-addon addon-sm">
                    <input type="text" placeholder="SEARCH" class="form-control search" name="search" @if(isset($_GET['search'])) value="{{$_GET['search']}}"@endif />
                    <label  class="glyphicon glyphicon-search"  rel="tooltip" title="email"></label>
                  </div>
                </div>
              </div>
            </td>
            <td class="col-3">

              <div class="text-right col-3-content">
                
                <div class="form-group">
                  <button type="button" class="btn  btn-default-background btn-excel">
                    <span class="btn-label"><i class="fa fa-file-excel-o excel" aria-hidden="true"></i></i></span><span class="btn-label-label">Excel</span>
                  </button>
                </div>
                <div class="form-group">
                  <button type="button" class="btn  btn-default-background" id="deleteAll">
                    <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span><span class="btn-label-label">Delete All</span>
                  </button>
                </div>
                <div class="form-group">
                  <div class="btn-group ngin-dropdown-sort">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-sort-alpha-desc"></i> SORT
                    </a>
                    <ul class="dropdown-menu dropdown-menu-form" >
                      <li class="title">ORDER</li>
                      <li><input type="radio" id="radioAsc" name="rdoOrder"  value="asc" @if(app('request')->input('rdoOrder')=="asc") checked="checked" @endif ><label for="radioAsc">Ascending</label></li>
                      <li><input type="radio" id="radioDes" name="rdoOrder"  value="des" @if(app('request')->input('rdoOrder')=="des") checked="checked" @endif><label for="radioDes">Descending</label></li>
                      <li role="separator" class="divider"></li>
                      <li class="title">BY</li>
                      <li><input type="radio" id="radioTitle" name="rdoBy" value="title" @if(app('request')->input('rdoBy')=="title") checked="checked" @endif ><label for="radioTitle">Title</label></li>
                      <li><input type="radio" id="radioId" name="rdoBy" value="description" @if(app('request')->input('rdoBy')=="description") checked="checked" @endif ><label for="radioId">Description</label></li>
                      <li><input type="radio" id="radioDocDate" name="rdoBy" value="created_at" @if(app('request')->input('rdoBy')=="created_at") checked="checked" @endif ><label for="radioDocDate">Create Date</label></li>
                      
                    </ul>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>
    </form>
	</section>
  <!-- END SEARCH BAR -->
  <input type="hidden" id="itemList" action="{{route('backOffice.news-and-event.destroy-many')}}" data-redirect="{{route('backOffice.news-and-event.index')}}" 
  data-action-approve="{{route('backOffice.news-and-event.approve-many')}}" >

  <div class="news-and-event-table">
    <table class="table ngin-table">
      <thead>
        <tr>
          <th class="blank"></th>
          <th class="image"></th>
          <th class="details">
              <span>Description</span>
          </th>
          <th class="date align-center">
              <span>Date</span>
          </th>
          <th class="actions align-center">
              <span>Action</span>
          </th>
        </tr>
      </thead>
    </table>

    <div class="body-table scroll-2">
      <table class="table ngin-table">
        <tbody>
          @foreach ($data['data'] as $i => $method)

          <tr @if($method->trashed()) style="color: #ccc;text-decoration: line-through;" @endif>
            <td class="blank">
              <div class="form-group">
    
                  <input type="checkbox" class="iCheck item" name="item[]" value="{{$method->id}}" data-deleted="{{$method->trashed() ? 1 : 0}}"/> 
              </div>
    				</td>
    				<td class="image">
              <div class="profile-image">
                  
                <img src="{{ file_exists(storage_path('/images/'.$method->image)) ? Image::make(storage_path('/images/'.$method->image))->encode('data-url') : asset('images/logo.png') }}" class="profilePicture" style="height:128px; @if($method->trashed()) opacity:0.2; @endif" @if($method->trashed()) style="opacity:0.2;" @endif  />
  

                <span class="text-black is-bold" @if($method->trashed()) style="color: #ccc;text-decoration: line-through;" @endif >Create by {{ (isset($method->user->name)) ? $method->user->name : '-' }}</span>
              </div>
    				</td>
    				<td class="details">
              <b>{{$method->title}}</b>
          		<p>{!!$method->description!!}</p>
    				</td>
    				<td class="date">
              <span class="text">{{ date('d-m',strtotime($method->start_date))."-".(date('Y',strtotime($method->start_date))+543)  }} </span>
              <span class="text">{{ date('H:i',strtotime($method->start_date)) }}</span>
          		<p class="static">TO</p>
          		 <span class="text">{{ date('d-m',strtotime($method->end_date))."-".(date('Y',strtotime($method->end_date))+543)  }} </span>
              <span class="text">{{ date('H:i',strtotime($method->end_date)) }}</span>
    				</td>
    				<td class="actions">
              <div class="buttons">
                   @if(!$method->trashed()) 
                <button type="button" class="btn btn-ngin btn-default" @if($method->trashed()) disabled @else onclick="window.location='{{ route('backOffice.news-and-event.edit', ['id'=>$method->id]) }}';" @endif>
                  <span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                  </span>Edit
                </button>
                <button type="button" class="btn btn-ngin btn-default"  @if($method->trashed()) disabled @else onclick="window.location='{{ route('backOffice.news-and-event.duplicate', $method->id) }}';" @endif>
                  <span class="btn-label">
                    <i class="fa fa-files-o" aria-hidden="true"></i>
                  </span>Duplicate
                </button>
                @endif

               @if($method->trashed()) 
                <form action="{{ route('backOffice.news-and-event.restore', $method->id) }}" method="post">
                  <input name="_method" type="hidden" value="put">
                {!! csrf_field() !!}
                  <button type="submit" class="btn btn-ngin btn-default" @if(!$method->trashed()) disabled @endif>
                    <span class="btn-label">
                      <i class="fa fa-undo info" aria-hidden="true"></i>
                    </span>Undo
                  </button>
                </form>
                @endif
  
                <button type="button" data-action="{{ route('backOffice.news-and-event.destroy', $method->id) }}" class="btn btn-ngin btn-default btn-delete"
                 @if($method->trashed()) data-force-delete="1" @endif 
                 >
                      <span class="btn-label">
                        <i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i>
                      </span>Delete
                </button>

               


              </div>
      			</td>
          </tr>
          @endforeach
          
          

        </tbody>
      </table>
    </div>

    <form id="delete-form" method="post" >
        <input name="_method" type="hidden" value="DELETE">
        {!! csrf_field() !!}
                   
    </form>
  
    <div class="row page-showing-pagination">
      <div class="col-xs-6 showing">
        Showing {{($data['data']->currentPage()-1)*$data['data']->perPage()+1}} to 
      
        @if ($data['data']->currentPage() < $data['data']->perPage()+1)
          {{$data['data']->currentPage()+1}}
        @else
         {{$data['data']->currentPage()*$data['data']->perPage()}} 
        @endif

       of {{$data['data']->total()}}
      </div>
      <div class="col-xs-6 page-pagination">
        <nav aria-label="Page navigation">
       
          <ul class="pagination">
            <li class="page-number">
              <a class="{{ ($data['data']->currentPage() == 1) ? ' not-active' : '' }}" href="{{ $data['data']->url(1) }}">Previous</a>
            </li>
            @for ($i = 1; $i <= $data['data']->lastPage(); $i++)
              <li class="page-number {{ ($data['data']->currentPage() == $i) ? ' active' : '' }}">
                  <a href="{{ $data['data']->url($i) }}">{{ $i }}</a>
              </li>
            @endfor
            <li class="page-number">
               <a class="{{ ($data['data']->currentPage() == $data['data']->lastPage()) ? ' not-active' : '' }}" href="{{ $data['data']->url($data['data']->currentPage()+1) }}" >Next</a>
            </li>
          </ul>
       
        </nav>
      </div>
    </div>
  <!-- END PAGINATION -->
</div>
<!-- END MAIN PAGE -->
@endsection

@section('script')
<script src="{{ asset('js/back-office/templates/ellipsis/jquery.ellipsis.min.js') }}"></script>
<script src="{{ asset('js/back-office/setting/news-and-event/index.js') }}"></script>

<script>


$('[name="rdoOrder"],[name="rdoBy"]').change(function(event) {
  $("#search-form").submit();
});

$('.glyphicon-search').click(function(event) {
  $("#search-form").submit();
});

$('.btn-delete').click(function(event) {
  if($(this).data('force-delete')!=null){
    swal({
    title: 'Are you sure?',
    text: "Do you want to force delete?",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#cc0520',
    confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.value) {
           $("#delete-form").attr('action',$(this).data('action')) .submit();
      }
    })
  }else{
     $("#delete-form").attr('action',$(this).data('action')).submit();
  }
});

$('.btn-excel').click(function(event){

  var arr = window.location.href.split('?');
  var param = '';
  if (arr.length > 0 ){
    param = '?'+arr[1];
  }
  var url = "{{ route('backOffice.news-and-event.excel') }}"+param ;
  window.open(url);

})

@if ($errors->any())
    @foreach ($errors->all() as $error)
        toastr.error("{{$error}}");
    @endforeach

@endif

@if(session()->has('success'))
    toastr.success("{{ session()->get('success') }}");
@endif

@if(session()->has('warning'))
    toastr.warning("{{ session()->get('warning') }}");
@endif
</script>

@endsection
