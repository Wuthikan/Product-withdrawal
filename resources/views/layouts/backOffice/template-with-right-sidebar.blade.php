@extends('layouts.html5')

@section('global-head')
<!-- Layout CSS -->
<!-- Layout CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>

<!-- datetimepicker -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/back-office/templates/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css') }}"/>
{{-- sweetalert2 --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/back-office/templates/sweetalert2/sweetalert2.css') }}"/>
{{-- toastr --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/back-office/templates/toastr/toastr.css') }}"/>
<!-- iCheck -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/back-office/templates/icheck/skins/all.css') }}"/>

<!-- Select -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/back-office/templates/bootstrap-select/bootstrap-select.min.css') }}"/>
<!-- Page CSS -->
@yield('head')
@stop

@section('global-body')
<div id="container" class="container body">
  <div class="main_container">
   <!-- menu navigation -->
    <div class="sidemenu_container">
      @include('layouts.backOffice.sidebar')
    </div>
    <!-- /menu navigation -->

    <div class="body_container">
      <!-- top navigation -->
      @include('layouts.backOffice.header')
      <!-- /top navigation -->

      <!-- page content -->
      <div class="row_container">
        <div id="main-content">
          @yield('body')
        </div>
        <div class="right-sidebar">
          <div class="right-column">
            @yield('right-sidebar')
          </div>
        </div>
      </div>

      <!-- footer content -->
      @include('layouts.backOffice.footer')
      <!-- /footer content -->
    </div>
    <!-- /page content -->

    {{-- <!-- top navigation -->
    @include('layouts.backOffice.header')
    <!-- /top navigation -->
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="" style="width: 100%">
        <div class="col-md-9 col-custom-center content-left" >
          <div class="col-md-12 col-sm-12 col-xs-12 padding-right">
            <div class="x_panel content-center-right "  >
             @yield('body')
           </div>
         </div>
       </div>
       <div class="col-md-3 col-custom-right content-right">
         <div class="col-md-12 col-sm-12 col-xs-12 padding-left">
          <div class="x_panel content-center-right scroll-2" >
           @yield('right-sidebar')
         </div>
       </div>
     </div> --}}
   </div>
 </div>
 <!-- /page content -->
 <!-- footer content -->
 @include('layouts.backOffice.footer')
 <!-- /footer content -->
</div>
<!-- page modal -->
@yield('modal')
<!-- /page modal -->
</div>
@endsection

@section('global-script')


<!-- FastClick -->
<!-- Custom Theme Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- Page JavaScript -->


<script src="{{ asset('js/back-office/templates/jquery.min.js') }}"></script>
<!-- datetimepicker -->
<script src="{{ asset('js/back-office/templates/bootstrap-datetimepicker/moment.min.js') }}"></script>
<script src="{{ asset('js/back-office/templates/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
{{-- sweetalert2 --}}
<script src="{{ asset('js/back-office/templates/sweetalert2/sweetalert2.js') }}"></script>
{{-- toastr --}}
<script src="{{ asset('js/back-office/templates/toastr/toastr.min.js') }}"></script>
{{-- typeahead --}}
<script src="{{ asset('js/back-office/templates/typeahead/typeahead.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('js/back-office/templates/icheck/icheck.min.js') }}"></script>
<!-- Select -->
<script src="{{ asset('js/back-office/templates/bootstrap-select/bootstrap-select.min.js') }}"></script>

<!-- easy-pie-chart -->
<script src="{{ asset('js/back-office/templates/easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
<!-- Layout JavaScript -->

<!-- Custom Theme Scripts -->
<script src="{{ asset('js/back-office/templates/script.js') }}"></script>

<script type="text/javascript">
  $( document ).ready(function() {
   var SingAppNGIN ='© ' + new Date().getFullYear() + ' - NGIN All RIGHTS RESERVED.';
   var SingAppAdiwIT ='© ' + new Date().getFullYear() + ' - AdiwIT Co., Ltd. All rights reserved.';
   $('#sidebar-footer-sign').html(SingAppNGIN);
   console.log(SingAppAdiwIT);
 });
</script>
<!-- Custom Theme Scripts -->
@yield('script')
@endsection
