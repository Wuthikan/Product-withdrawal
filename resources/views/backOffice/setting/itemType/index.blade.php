@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/item-type/index.css')}}"/>
@endsection

@section('module_name', 'ITEM TYPE')
@section('page_name', 'INDEX')

@section('body')
<!-- START MAIN PAGE -->
<div class="x_content page">

  <!-- START SEARCH BAR -->
  <section class="section-header-index">
    <div class="form-inline form-header-index">
      <div class="row">
        <table>
          <tr>
            <td class="col-1">
              <div class="col-1-content" >
                <div class="form-group select-all">
                  <input type="checkbox" class="iCheck" id="selectall" onclick="javascript checkAllItem( this )" name="selectall" >
                  <label for="selectall" class="iCheck-label" >Select All</label>
                </div>
                <div class="form-group">
                  <button type="button" class="btn btn-default-background" onclick="window.location='{{ url("back-office/setting/item-type/create") }}'">
                    <span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
                  </button>
                </div>
              </div>
            </td>
            <td class="col-2">

              <form id="SEARCH">
                <input id="rdoOrder1" name="rdoOrder1" type="hidden" value="<?php echo ( isset($_GET['rdoOrder1']) ) ? $_GET['rdoOrder1'] : 'asc'; ?>">
                <input id="rdoBy1" name="rdoBy1" type="hidden" value="<?php echo ( isset($_GET['rdoBy1']) ) ? $_GET['rdoBy1'] : 'name'; ?>">
                
                <div class="form-group form-fixed-width" >
                  <div class="icon-addon addon-sm">
                    <input  type="text" placeholder="SEARCH" name="search" class="form-control search" >
                    <label for="search"  class="glyphicon glyphicon-search" rel="tooltip" id="SEARCH1" title="email"></label>
                  </div>
                </div>
              </form>

            </td>
            <td class="col-3">

              <div class="text-right col-3-content">
                
                <form action="{{route('backOffice.setting.item-type.excel')}}" target="_blank" method="POST">
                      {!! csrf_field() !!}
                  <div class="form-group">
                    <button type="submit" class="btn  btn-default-background">
                      <span class="btn-label"><i class="fa fa-file-excel-o excel" aria-hidden="true"></i></i></span><span class="btn-label-label">Excel</span>
                    </button>
                  </div>
                </form>
                
                <form action="{{route('backOffice.setting.item-type.delete-all')}}" method="POST">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <input id="ar_delete_all" name="ar_delete_all" type="hidden" value="">
                        <input id="check_force" name="check_force" type="hidden" value="">
                      <button type="button" class="btn  btn-default-background btn-delete-all">
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
                      <li><input type="radio" id="radioAsc" name="rdoOrder"  <?php echo ( !isset($_GET['rdoOrder1']) ) ? 'checked="checked' : ""; ?> <?php echo ( isset($_GET['rdoOrder1']) && $_GET['rdoOrder1'] == 'asc' ) ? 'checked="checked"' : ""; ?> value="asc"><label for="radioAsc">Ascending</label></li>
                      <li><input type="radio" id="radioDes" name="rdoOrder" <?php echo ( isset($_GET['rdoOrder1']) && $_GET['rdoOrder1'] == 'des' ) ? 'checked="checked"' : ""; ?> value="des"><label for="radioDes">Descending</label></li>
                      <li role="separator" class="divider"></li>
                      <li class="title">BY</li>
                      <li><input type="radio" id="radioName" name="rdoBy" <?php echo ( !isset($_GET['rdoBy1']) ) ? 'checked="checked' : ""; ?> <?php echo ( isset($_GET['rdoBy1']) && $_GET['rdoBy1'] == 'name' ) ? 'checked="checked"' : ""; ?> value="<?php echo 'name'; ?>"><label for="radioName">Name</label></li>
                      <li><input type="radio" id="radioDesc" name="rdoBy" <?php echo ( isset($_GET['rdoBy1']) && $_GET['rdoBy1'] == 'description' ) ? 'checked="checked"' : ""; ?> value="<?php echo 'description' ?>"><label for="radioDesc">Description</label></li>
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
  <div class="item-type-table">
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
        <tbody>
          @foreach( $categories as $c )
          <tr class="@if ( $c->trashed() ) tr-trash @endif">
            <td class="blank">
              <div class="form-group">
                  <input type="checkbox" name="chkItem[]" class="iCheck item" UseForce="@if($c->deleted_at) true @endif" value="{{$c->id}}">
              </div>
      			</td>
      			<td class="name">
              <p>{{ $c->name }}</p>
      			</td>
      			<td class="description">
          		<p>{{ $c->description }}</p>
      			</td>
      			<td class="actions align-center">
              <div class="buttons">
                @if( $c->trashed() )
                  <form action="{{route('backOffice.setting.item-type.restore',$c->id)}}" method="POST">
                    {!! csrf_field() !!}    
                      {!! method_field('patch') !!}
                    <button type="submit" class="btn btn-ngin btn-default">
                      <span class="btn-label">
                        <i class="fa fa-undo info" aria-hidden="true"></i>
                      </span>Undo
                    </button>
                  </form>

                  <form method="POST" action="{{ route('backOffice.setting.item-type.destroy', $c->id) }}">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <input type="hidden" name='UseForce' value="true">
                    <button type="submit" class="btn btn-ngin btn-default btn-delete">
                      <span class="btn-label">
                        <i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i>
                      </span>Delete
                    </button>
                  </form>

                  @else 

                  <button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{ url("back-office/setting/item-type/". $c->id ."/edit") }}'">
                    <span class="btn-label">
                      <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                    </span>Edit
                  </button>
                  <button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{ route('backOffice.setting.item-type.duplicate', $c->id) }}'">
                    <span class="btn-label">
                      <i class="fa fa-files-o" aria-hidden="true"></i>
                    </span>Duplicate
                  </button>
                  <form method="POST" action="{{ route('backOffice.setting.item-type.destroy', $c->id) }}">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-ngin btn-default">
                      <span class="btn-label">
                        <i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i>
                      </span>Delete
                    </button>
                  </form>
                  
                @endif

              </div>
    			   </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>

    <div class="row page-showing-pagination">

      <div class="col-xs-6 showing">
        Showing {{ $categories->firstItem() }}-{{ $categories->lastItem() }} of {{ $categories->total() }}
      </div>
      <div class="col-xs-6 page-pagination">
        <nav aria-label="Page navigation">
          {{ $categories->links() }}
        </nav>
      </div>
    </div>
  <!-- END PAGINATION -->
</div>

<!-- END MAIN PAGE -->
@endsection

@section('script')
<script src="{{ asset('js/back-office/setting/item-type/index.js') }}"></script>

<script>

  // Search
  $('#SEARCH1').click(function(){
    $('#SEARCH').submit()
  });

  jQuery(document).ready(function($){
    var rdoOrder = $("input[name='rdoOrder']:checked").val();
    var rdoBy = $("input[name='rdoBy']:checked").val();
    

    $("input[name='rdoOrder']").click(function(){
      rdoOrder = $("input[name='rdoOrder']:checked").val();
      
      if( rdoOrder === 'on' ){
        rdoOrder = 'asc';
      }
      if( rdoBy == 'on' ){
        rdoBy = 'name';
      }

      $("input[name='rdoOrder1']").val(rdoOrder);
      $('#SEARCH').submit();
    })

    $("input[name='rdoBy']").click(function(){
      rdoBy = $("input[name='rdoBy']:checked").val();
      
      if( rdoOrder === 'on' ){
        rdoOrder = 'asc';
      }
      if( rdoBy == 'on' ){
        rdoBy = 'name';
      }

      $("input[name='rdoBy1']").val(rdoBy);
      $('#SEARCH').submit();
    })

  });

  
  


  // delete
  $('.btn-delete').on('click', function(e){
    e.preventDefault() // Don't post the form, unless confirmed
    swal({
      title: 'Are you sure?',
      text: "Do you want to force delete?",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#cc0520',
      confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
          $(e.target).closest('form').submit() // Post the surrounding form
        }
      });
  });


  // delete all
  $('.btn-delete-all').on('click', function(e){
    e.preventDefault() // Don't post the form, unless confirmed

    let ar_delete_all = []
    let check_force =[]


    $("input[name='chkItem[]']:checked").each( function () {
        ar_delete_all.push($(this).val())
        if($(this).attr('UseForce')) {
            check_force.push(true)
        }else{
            check_force.push(false)
        }
        
    });
    // console.log(check_force,ar_delete_all)

    $('#ar_delete_all').val(ar_delete_all);
    $('#check_force').val(check_force);

    if(ar_delete_all.length >0){
        if(check_force.indexOf(true)>=0){
            swal({
            title: 'Are You Sure ?',
            text: "Do you want to delete?",
            type: 'warning',
            confirmButtonColor: '#d60500',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                  $(e.target).closest('form').submit() // Post the surrounding form
                }
            });
            
            
        }else{
          $(e.target).closest('form').submit() // Post the surrounding form
        }
        
    }else{
      toastr["warning"]("Please select some record", "Warning");
    }

    // swal({
    //   title: 'Are you sure?',
    //   text: "Do you want to force delete?",
    //   type: 'warning',
    //   showCancelButton: true,
    //   confirmButtonColor: '#cc0520',
    //   confirmButtonText: 'Yes, delete it!'
    //   }).then((result) => {
    //     if (result.value) {
    //       $(e.target).closest('form').submit() // Post the surrounding form
    //     }
    //   });
  });
  

  //selectall
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
      if (checkboxes.filter(':checked').length == checkboxes.length) {
          checkAll.prop('checked', 'checked');
      } else {
          checkAll.removeProp('checked');
      }
      checkAll.iCheck('update');
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
