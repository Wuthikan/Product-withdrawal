<!DOCTYPE html>
<?php
$DimGeneral = \DurianSoftware\Models\DimGeneral::select()->first();
$background = $DimGeneral->background;
    if(!empty($background)  &&file_exists( storage_path($background) )){
        $background = \Image::make(storage_path($background))->encode('data-url');
    }else{
        
        $background = asset('images/backOffice/templates/BG.jpg');
    }
?>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <!--  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Global CSS -->
    @yield('global-head')
  </head>

  <body id="body" class="nav-md" style='background:url("{{$background}}")'>
    <!-- Global Body -->
    @yield('global-body')
    
    <!-- Global JavaScript -->
    @yield('global-script')
  </body>
</html>
