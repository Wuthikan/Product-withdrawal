@extends('layouts.html5')
@section('global-head')
<!-- Layout CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>

<!-- datetimepicker -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/back-office/templates/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css') }}"/>
<!-- Taginput -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/back-office/templates/bootstrap-tagsinput/bootstrap-tagsinput.css') }}"/>
{{-- sweetalert2 --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/back-office/templates/sweetalert2/sweetalert2.css') }}"/>
{{-- toastr --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/back-office/templates/toastr/toastr.css') }}"/>
<!-- iCheck -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/back-office/templates/icheck/skins/all.css') }}"/>

<!-- Select -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/back-office/templates/bootstrap-select/bootstrap-select.min.css') }}"/>

<!-- Select -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/back-office/templates/iosCheckbox/iosCheckbox.css') }}"/>

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
      <div id="main-content">
        @yield('body')
      </div>

      <!-- footer content -->
      @include('layouts.backOffice.footer')
      <!-- /footer content -->
    </div>
    <!-- /page content -->

    <!-- page modal -->
    @yield('modal')
    <!-- /page modal -->
  </div>
</div>
@endsection

@section('global-script')

<!-- FastClick -->
<!-- Page JavaScript -->
<script src="{{ asset('js/app.js') }}"></script>


<script src="{{ asset('js/back-office/templates/jquery.min.js') }}"></script>

<!-- datetimepicker -->
<script src="{{ asset('js/back-office/templates/bootstrap-datetimepicker/moment.min.js') }}"></script>
<script src="{{ asset('js/back-office/templates/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
{{-- Taginput --}}
<script src="{{ asset('js/back-office/templates/bootstrap-taginput/bootstrap-tagsinput.js') }}"></script>
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

<!-- easy-pie-chart -->
<script src="{{ asset('js/back-office/templates/iosCheckbox/iosCheckbox.min.js') }}"></script>
<!-- Custom Theme Scripts -->
<script src="{{ asset('js/back-office/templates/script.js') }}"></script>

<!-- Layout JavaScript -->
<script type="text/javascript">

  $( document ).ready(function() {
    var SingAppNGIN ='© ' + new Date().getFullYear() + ' - NGIN All RIGHTS RESERVED.';
    var SingAppAdiwIT ='© ' + new Date().getFullYear() + ' - AdiwIT Co., Ltd. All rights reserved.';
    $('#sidebar-footer-sign').html(SingAppNGIN);
    // console.log(SingAppAdiwIT);
  });


</script>
<!-- Custom Theme Scripts -->
@yield('script')
@endsection
