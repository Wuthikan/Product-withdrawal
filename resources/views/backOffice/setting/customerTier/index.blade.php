@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/news-and-event/index.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/customer-tier/index.css')}}"/>
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/<module_name>/index.css')}}"/> -->

    <style>
      .text-undo{
        color: #ccc;
        text-decoration: line-through;
      }
    </style>
@endsection

@section('module_name', 'CUSTOMER TIER')
@section('page_name', 'INDEX')

@section('body')
  <div class="x_content">
    <!-- START SEARCH BAR -->
    <section class="section-header-index">
      <div class="form-inline form-header-index">
        <div class="row">
          <table>
            <tr>
              <td class="col-1" style="min-width:145px;width: 1%;white-space: nowrap;">
                <div class="col-1-content" >
                  <div class="form-group select-all">
                    <input type="checkbox" class="iCheck" id="selectall" name="selectall" >
                    <label for="selectall" class="iCheck-label" >Select All</label>
                  </div>
                  <div class="form-group">
                    <button type="button" class="btn btn-default-background" onclick="window.location='{{ url("back-office/setting/customer-tier/create") }}'">
                      <span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
                    </button>
                  </div>
                </div>
              </td>
              <td class="col-2" style="width: 100%;">
                <div class="" >
                  <div class="form-group form-fixed-width" >
                    <div class="icon-addon addon-sm">
                      <form action="{{ route('backOffice.setting.customer-tier.index') }}" method="GET"  id='SEARCH'>
                        <input id="rdoOrder1" name="rdoOrder1" 
                          value="{{$request->old('rdoOrder1','asc')}}" 
                          type="hidden">
                        <input id="rdoBy1" name="rdoBy1" 
                          value="{{$request->old('rdoBy1','name')}}"
                          type="hidden">

                        <input type="text" placeholder="SEARCH" class="form-control search" id="search" name="search" value="{{ old('search') }}" />
                        <label for="search"  class="glyphicon glyphicon-search" rel="tooltip" title="email" id="SEARCH1"></label>
                        <input id='test' type="submit" value="search" style="display: none;" />
                      </form>
                      
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
                  <form action="{{route('backOffice.setting.customer-tier.delete-all')}}" method="POST" id="form_delete_all">
                      {!! csrf_field() !!}
                      <div class="form-group">
                          <input id="ar_delete_all" name="ar_delete_all" type="hidden" value="">
                          <input id="check_force" name="check_force" type="hidden" value="">
                        <button type="button" class="btn  btn-default-background" id="btn_delete_all">
                          <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span><span class="btn-label-label">Delete All</span>
                        </button>
                      </div>
                  </form>
                  <div class="form-group">
                    <div class="btn-group ngin-dropdown-sort">
                      <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-sort-alpha-desc"></i> SORT
                      </a>
                      <ul class="dropdown-menu dropdown-menu-form">
                        <li class="title">ORDER</li>
                        <li>
                            <input type="radio" id="radioAsc" name="rdoOrder" value="asc"
                            @if($request->input("rdoOrder1")==='asc' || $request->input("rdoOrder1")=="") 
                            checked="checked"
                            @endif
                            >
                            <label for="radioAsc">Ascending</label>
                        </li>
                        <li>
                            <input type="radio" id="radioDes" name="rdoOrder" value="desc"
                            @if($request->input("rdoOrder1")==='desc') 
                            checked="checked"
                            @endif
                            >
                            <label for="radioDes">Descending</label>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li class="title">BY</li>
                        {{-- <li><input type="radio" id="radioId" name="rdoBy" 
                          @if($request->input("rdoBy1")==='id' || $request->input("rdoBy1")=="" )
                            checked="checked"
                          @endif 
                            value="id"><label for="radioId">ID</label></li> --}}
                        <li><input type="radio" id="radioCusName" name="rdoBy" 
                          @if($request->input("rdoBy1")==='name' || $request->input("rdoBy1")=="")
                            checked="checked"
                          @endif 
                          value="name"><label for="radioCusName">Customer Name</label></li>
                        <li><input type="radio" id="radioDescription" name="rdoBy"
                          @if($request->input("rdoBy1")==='description' )
                            checked="checked"
                          @endif 
                         value="description"><label for="radioDescription">Description</label></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
  	</section>
    <!-- END SEARCH BAR -->
    <div class="customer-tier-table">
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
            <th class="actions align-center">
                <span>Action</span>
            </th>
          </tr>
        </thead>
      </table>

      <div class="body-table scroll-2">
        <table class="table ngin-table">
          @foreach($customerTiers as $index => $customerTier)
          <tbody>
            <tr>
              <td class="blank">
                <div class="form-group">

                    {{-- @if (!$customerTier->trashed()) --}}
                      <input type="checkbox" name="bank[]" UseForce="@if($customerTier->deleted_at) true @endif" value="{{$customerTier->id}}" class="iCheck item"/>
                    {{-- @endif --}}
                </div>
      				</td>
      				<td class="name">
                <div class="logo">
                  @if ($customerTier->deleted_at)
                    <img cl src="{{ file_exists(storage_path('/images/back-office/setting/customer-tier/'.$customerTier->image)) ? 
                      Image::make(storage_path('/images/back-office/setting/customer-tier/'.$customerTier->image))->greyscale()->encode('data-url') : Image::make(public_path('images/logo.png') )->greyscale()->encode('data-url')}}" class="profilePicture" />
                  @else
                    <img src="{{ file_exists(storage_path('/images/back-office/setting/customer-tier/'.$customerTier->image)) ? 
                      Image::make(storage_path('/images/back-office/setting/customer-tier/'.$customerTier->image))->encode('data-url') : asset('images/backOffice/setting/customer-tier/logo-ngin.jpg') }}" class="profilePicture" />
                  @endif
                </div>
                <p class="@if($customerTier->deleted_at) text-undo @endif">{{ $customerTier->name  }}</p>
                
      				</td>
      				<td class="description">
            		<p class="@if($customerTier->deleted_at) text-undo @endif">{{ $customerTier->description  }}</p>
      				</td>
      				<td class="actions align-center">
                <div class="buttons">
                  @if (!$customerTier->trashed())
                    <button onclick="location.href='{{ route('backOffice.setting.customer-tier.edit',  $customerTier->id) }}'" type="button" class="btn btn-ngin btn-default">
                      <span class="btn-label">
                        <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                      </span>Edit
                    </button>
                    <button onclick="location.href='{{ route('backOffice.setting.customer-tier.create','id='.$customerTier->id) }}'" type="button" class="btn btn-ngin btn-default">
                      <span class="btn-label">
                        <i class="fa fa-files-o" aria-hidden="true"></i>
                      </span>Duplicate
                    </button>
                  @endif
                  @if ($customerTier->trashed())
                  <form action="{{ route('backOffice.setting.customer-tier.restore',  $customerTier->id) }}" method="post">
                    {!! csrf_field() !!}
                    {!! method_field('patch') !!}

                    <button type="submit" class="btn btn-ngin btn-default">
                    <span class="btn-label">
                      <i class="fa fa-undo info" aria-hidden="true"></i>
                    </span>Undo
                  </button>
                  </form>
                  @endif
                  <form id="delete{{ $customerTier->id }}" action="{{ route('backOffice.setting.customer-tier.destroy',  $customerTier->id) }}" method="post">
                    {!! csrf_field() !!}
                    {!! method_field('delete') !!}
                    @if (!$customerTier->trashed())
                    <button class="btn btn-ngin btn-default" type="submit">
                      <span class="btn-label">
                        <i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i>
                      </span>Delete
                    </button>
                    @else
                    <input type="hidden" name="force" value="true" />
                    <button class="btn btn-ngin btn-default"  type="button" onclick="ForceDelete({{ $customerTier->id }})">
                      <span class="btn-label">
                        <i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i>
                      </span>Delete
                    </button>
                    @endif
                  </form>
                </div>
        			</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    {{$customerTiers->links()}}
@endsection

@section('script')
    <script src="{{ asset('js/back-office/setting/customer-tier/index.js') }}"></script>
    <script>
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
    </script>

    <script type="text/javascript">

      var rdoBy = $("input[name='rdoBy']").val();
      $("input[name='rdoBy1']").val(rdoBy);
      $("input[name='rdoBy']").click(function(){
        console.log('rdoBy')
        rdoBy= $(this).val()
        $("input[name='rdoBy1']").val(rdoBy)
        $('#SEARCH').submit()
      })

      var rdoOrder = $("input[name='rdoOrder']").val();
      $("input[name='rdoOrder1']").val(rdoOrder);
      $("input[name='rdoOrder']").click(function(){
        console.log('rdoOrder1')
        rdoOrder= $(this).val()
        $("input[name='rdoOrder1']").val(rdoOrder)
        $('#SEARCH').submit()
      })

      $('#SEARCH1').click(function(){
        $('#SEARCH').submit();
      })

      var checkAll = $('#selectall');
      var checkboxes = $('input.item');

      checkAll.on('ifChecked ifUnchecked', function (event) {
          if (event.type == 'ifChecked') {
              checkboxes.iCheck('check');
          } else {
              checkboxes.iCheck('uncheck');
          }
      });

      checkboxes.on('ifChanged', function (event) {
          console.log('test');
          if (checkboxes.filter(':checked').length == checkboxes.length) {
              checkAll.prop('checked', 'checked');
          } else {
              checkAll.removeProp('checked');
          }
          checkAll.iCheck('update');
      });

      function ForceDelete(id){
          swal({
          title: 'Are You Sure ?',
          text: "มีข้อมูลที่จะถูกลบถาวร!!",
          type: 'warning',
          confirmButtonColor: '#d60500',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
              if (result.value) {
                  $('#delete'+id).submit()
              }
          });
        
      }

      $('#btn_delete_all').click(function(){
        let ar_delete_all = []
        let check_force =[]
        $("input[name='bank[]']:checked").each( function () {
            ar_delete_all.push($(this).val())
            if($(this).attr('UseForce')) {
                check_force.push(true)
            }else{
                check_force.push(false)
            }
            // $('#ar_delete_all').val()
            // $('#check_force').val()
            
        });
        // console.log(ar_delete_all)
        $('#ar_delete_all').val(ar_delete_all)
            $('#check_force').val(check_force)
        if(ar_delete_all.length >0){
            if(check_force.indexOf(true)>=0){
                swal({
                title: 'Are You Sure ?',
                text: "Do you want to force delete?",
                type: 'warning',
                confirmButtonColor: '#d60500',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        $('#form_delete_all').submit()
                    }
                });
                // console.log("มี")
                
                
            }else{
              console.log("false")
                $('#form_delete_all').submit()
            }
            
        }else{
          toastr["warning"]("Please select some record", "Warning");
        }
            
      })

      $('.btn-excel').click(function(event){
        var url = "{{ route('backOffice.setting.customer-tier.excel') }}" ;
        window.open(url);

      })


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
