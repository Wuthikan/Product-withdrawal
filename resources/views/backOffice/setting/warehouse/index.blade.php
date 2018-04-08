{{--
    @author: วราทัศน์ พานทองถาวร
    @phone: 087-806-5868
    @email: boss119@hotmail.com
--}}

@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/warehouse/index.css')}}"/>
    <style>
    .text-undo{
      color: #ccc;
      text-decoration: line-through;
    }
    </style>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
    <!-- ROUTE TO CREATE -->
    <!-- <a href="{{ route('backOffice.setting.warehouse.create') }}">CREATE</a> -->

    <!-- SEARCH ALL FIELDS USING %search_term% OR %search_term% -->
    <!-- SEARCH ALL FIELDS USING -->
    <div class="x_content">
      <section class="section-header-index">
        <div class="form-inline form-header-index">
          <div class="row">
            <table>
              <tr>
                <td class="col-1" style="min-width:145px;width: 1%;white-space: nowrap;">
                  <div class="col-1-content">
                    <div>
                    <div class="form-group select-all">
                      <input type="checkbox" class="iCheck" id="selectall" name="selectall">
                      <label for="selectall" class="iCheck-label" >Select All</label>
                    </div>
                    </div>
                    <div class="form-group">
                      <button type="button" class="btn btn-default-background" onclick="window.location='{{ url("back-office/setting/warehouse/create") }}'">
                        <span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
                      </button>
                    </div>
                    <!-- <div class="form-group button-2">
                      <button type="button"    class="btn btn-default-background">
                        <span class="btn-label"><span class="fa-approve-all"></span></span><span class="btn-label-label">Approve All</span>
                      </button>
                    </div> -->
                  </div>
                </td>
                <td class="col-2" style="width: 100%;">
                  <form id="SEARCH">
                    <input id="rdoOrder1" name="rdoOrder1" value="{{$request->old('rdoOrder1','asc')}}" type="hidden">
                    <input id="rdoBy1" name="rdoBy1" value="{{$request->old('rdoBy1','name')}}" type="hidden">
                    
                    <div class="form-group form-fixed-width" >
                      <div class="icon-addon addon-sm">
                        <input  type="text" placeholder="SEARCH" name="search" class="form-control search" value="{{$request->input('search')}}">
                        <label for="search"  class="glyphicon glyphicon-search" rel="tooltip" id="SEARCH1" title="email"></label>
                      </div>
                    </div>
                  </form>
                </td>
                <td class="col-3">
                  <div class="text-right col-3-content">
                    <!-- <div class="form-group">
                      <button type="button" class="btn  btn-default-background">
                        <span class="btn-label"><i class="fa fa-file-pdf-o pdf" aria-hidden="true"></i></i></span><span class="btn-label-label">PDF</span>
                      </button>
                    </div> -->
                    <form action="{{route('backOffice.setting.warehouse.excel')}}" target="_blank" method="POST">
                      {!! csrf_field() !!}
                    <div class="form-group">
                      <button type="submit" class="btn  btn-default-background">
                        <span class="btn-label"><i class="fa fa-file-excel-o excel" aria-hidden="true"></i></i></span><span class="btn-label-label">Excel</span>
                      </button>
                    </div>
                    </form>
                    <form action="{{route('backOffice.setting.warehouse.delete-all')}}" method="POST" id="form_delete_all">
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
                          <!-- <li><input type="radio" id="radioId" name="rdoBy" checked="checked" value="id"><label for="radioId">ID</label></li> -->
                          <li>
                            <input type="radio" id="name" name="rdoBy" value="name"
                            @if($request->input("rdoBy1")==='name' || $request->input("rdoBy1")=="" )
                            checked="checked"
                            @endif
                            >
                            <label for="name">Name</label>
                          </li>
                          <li>
                            <input type="radio" id="description" name="rdoBy" value="description"
                            @if($request->input("rdoBy1")==='description') 
                            checked="checked"
                            @endif
                            >
                            <label for="description">Description</label>
                          </li>
                          <!-- <li>
                            <input type="radio" id="warehouse_type" name="rdoBy" value="warehouse_type"
                            @if($request->input("rdoBy1")==='warehouse_type') 
                            checked="checked"
                            @endif
                            >
                            <label for="warehouse_type">TYPE</label>
                          </li> -->
                          <!-- <li><input type="radio" id="radioDocDate" name="rdoBy" value="doc_date"><label for="radioDocDate">Document Date</label></li>
                          <li><input type="radio" id="radioCusName" name="rdoBy" value="cus_name"><label for="radioCusName">Customer Name</label></li>
                          <li><input type="radio" id="radioAmount" name="rdoBy" value="amount"><label for="radioAmount">Amount</label></li>
                          <li><input type="radio" id="radioStatus" name="rdoBy" value="status"><label for="radioStatus">Status</label></li> -->
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

        <div class="warehouse-table">
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
                  <th class="type">
                      <span>Type</span>
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
                  @foreach($Warehouses as $index => $Warehouse)
                  
                    <tr>
                      <td class="blank">
                        <div class="form-group">
                            <input type="checkbox" name="bank[]" UseForce="@if($Warehouse->deleted_at) true @endif" value="{{$Warehouse->id}}" class="iCheck item">
                        </div>
                      </td>
                      <?php
                          $image = 'image';
                          if($Warehouse->$image!='' && !empty(file_exists( storage_path($Warehouse->$image)  )) ){
                              if($Warehouse->deleted_at) {
                              $image = Image::make( storage_path($Warehouse->$image) )->greyscale()->encode('data-url');
                              }else{
                              $image = Image::make( storage_path($Warehouse->$image) )->encode('data-url');
                              }
                          }else{
                              if($Warehouse->deleted_at) {
                              $image = Image::make(public_path('images/logo.png') )->greyscale()->encode('data-url');
                              }else{
                              $image = Image::make(public_path('images/logo.png') )->encode('data-url');
                              }
                          }
                      ?>
                      <td class="name">
                            <div class="logo"><img src="{{$image}}" alt=""></div>
                            <p class="@if($Warehouse->deleted_at) text-undo @endif">{{$Warehouse->name}}</p>
                      </td>
                      <td class="description">
                            <p class="@if($Warehouse->deleted_at) text-undo @endif">{{$Warehouse->description}}</p>
                      </td>
                      <td class="type">
                        @if($Warehouse->warehourse_type==="Public")
                          <p class="@if($Warehouse->deleted_at) text-undo @else public @endif">Public</p>
                        @else
                          <p class="@if($Warehouse->deleted_at) text-undo @else private @endif">Private</p>
                        @endif
                      </td>
                      <td class="actions align-center">
                          <div class="buttons">
                            @if(!$Warehouse->deleted_at) 
                            <button type="button" class="btn btn-ngin btn-default" id="btn-url" data-url ="{{route('backOffice.setting.warehouse.edit',$Warehouse->id)}}">
                              <span class="btn-label">
                                <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                              </span>Edit
                            </button>
                            <form action="{{route('backOffice.setting.warehouse.duplicate',$Warehouse->id)}}" method="get"
                            UseForce="@if($Warehouse->deleted_at) true @endif">
                              <button type="submit" class="btn btn-ngin btn-default">
                                <span class="btn-label">
                                  <i class="fa fa-files-o" aria-hidden="true"></i>
                                </span>Duplicate
                              </button>
                            </form>
                            @endif
                            @if($Warehouse->deleted_at)
                            <form action="{{route('backOffice.setting.warehouse.restore',$Warehouse->id)}}" method="POST">
                              {!! csrf_field() !!}    
                              {!! method_field('patch') !!}
                              <button type="submit" class="btn btn-ngin btn-default">
                                <span class="btn-label">
                                  <i class="fa fa-undo info" aria-hidden="true"></i>
                                </span>Undo
                              </button>
                            </form>
                            @endif
                            <form id="delete{{ $Warehouse->id }}" action="{{route('backOffice.setting.warehouse.destroy',$Warehouse->id)}}" method="POST"
                            UseForce="@if($Warehouse->deleted_at) true @endif">
                              {!! csrf_field() !!}
                              {!! method_field('delete') !!}
                              @if($Warehouse->deleted_at) 
                                <input type="hidden" name='UseForce' value="true">
                              @endif
                              <button type="button" class="btn btn-ngin btn-default" onclick="FnDelete({{ $Warehouse->id }})">
                                <span class="btn-label">
                                  <i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i>
                                </span>Delete
                              </button>
                            </form>
                          </div>
                      </td>
                    </tr>
                    <!-- <tr>
                        <td class="blank">
                          <div class="form-group">
                              <input type="checkbox" class="iCheck item">
                          </div>
                        </td>
                        <td class="name">
                              <div class="logo"><img src="{{asset('images/logo.png')}}" alt=""></div>
                              <p>LOREM IPSUM</p>
                        </td>
                        <td class="description">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse ci</p>
                        </td>
                        <td class="type">
                              <p class="private">Private</p>
                        </td>
                        <td class="actions align-center">
                          <div class="buttons">
                            <button type="button" class="btn btn-ngin btn-default">
                              <span class="btn-label">
                                <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                              </span>Edit
                            </button>
                            <button type="button" class="btn btn-ngin btn-default">
                              <span class="btn-label">
                                <i class="fa fa-files-o" aria-hidden="true"></i>
                              </span>Duplicate
                            </button>
                            <button type="button" class="btn btn-ngin btn-default">
                              <span class="btn-label">
                                <i class="fa fa-undo info" aria-hidden="true"></i>
                              </span>Undo
                            </button>
                            <button type="button" class="btn btn-ngin btn-default">
                              <span class="btn-label">
                                <i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i>
                              </span>Delete
                            </button>
                          </div>
                        </td>
                    </tr> -->
                    
                  @endforeach
                </tbody>
              </table>
          </div>
        </div>
    </div> 
    {{ $Warehouses->links() }}
    
    

@endsection

@section('script')
    <script src="{{ asset('js/back-office/setting/warehouse/index.js') }}"></script>
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

    var rdoBy = $("input[name='rdoBy1']").val();
    console.log(rdoBy)
    $("input[name='rdoBy1']").val(rdoBy)
    $("input[name='rdoBy']").click(function(){
      rdoBy= $(this).val()
      $("input[name='rdoBy1']").val(rdoBy)
      $('#SEARCH').submit()
    })

    var rdoOrder = $("input[name='rdoOrder1']").val();
    console.log(rdoOrder)
    
    $("input[name='rdoOrder1']").val(rdoOrder)
    $("input[name='rdoOrder']").click(function(){
      rdoOrder= $(this).val()
      $("input[name='rdoOrder1']").val(rdoOrder)
      $('#SEARCH').submit()
    })

    $('#SEARCH1').click(function(){
      $('#SEARCH').submit()
    })

    //selectall
    var checkAll = $('#selectall');
    var checkboxes = $('input.item');

    checkAll.on('ifChecked ifUnchecked', function (event) {
        console.log("test")
        if (event.type == 'ifChecked') {
            checkboxes.iCheck('check');
        } else {
            checkboxes.iCheck('uncheck');
        }
    });

    checkboxes.on('ifChanged', function (event) {
        if (checkboxes.filter(':checked').length == checkboxes.length) {
            checkAll.prop('checked', 'checked');
        } else {
            checkAll.removeProp('checked');
        }
        checkAll.iCheck('update');
    });


		$(document).ready(function(){
            //Set Label Header Page
			$('#lbHeaderPage').html("<h3>WAREHOUSE | <span>INDEX</span></h3>");
    });
    function herf(val) {
      console.log(val)
      window.location.assign(val)
    }
    $('#btn-url').click(function(){
      console.log($(this).data())
      var uuu = $(this).data()
      herf(uuu.url)
    });
    function FnDelete(id){
      if($('#delete'+id).attr('UseForce')){
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
      }else{
          $('#delete'+id).submit()
      }
      // console.log($('#delete'+id).attr('UseForce'))
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
            console.log(check_force,ar_delete_all)
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
