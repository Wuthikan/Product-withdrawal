@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/back-office/logistic/inventory/create.css') }}">
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
<div class="container">
 <div class="group-box">
   <div class="row head-group">
     <div class="col-md-12 head-group left"><h2>NEW STOCK</h2></div>
     <br><br><br><br>
      <div class="col-md-6 head-group left">UPDATED DATE<br>
        <input type="date">
	  </div>
     <div class="col-md-6 head-group right">WAREHOUSE<br>
        <select><option></option></select>
     </div>
   </div>
  <table class="table-hiso table-header">
    <thead>
      <tr>
        <th>BARCODE | PRODUCT CODE | NEW STOCK</th>
        <th>BALANCE</th>
        <th>NEW STACK</th>
      </tr>
    </thead>
  </table>
<div class="box">
  <div class="box-in">
  <table class="table-hiso table-body">
    <tbody>
      <tr>
        <td>88888 CRASH BAN</td>
        <td>0</td>
        <td><input   type="text" value="88"></td>
      </tr>
      <tr>
        <td>77777 FINAL FANTASY XV</td>
        <td>0</td>
        <td><input   type="text" value="88"></td>
      </tr>
      <tr>
        <td>66666 GRAND T</td>
        <td >0</td>
        <td ><input  type="text" value="88"></td>
      </tr>
    </tbody>
  </table>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </div>
  </div>
  <table class="table-hiso table-footer">
    <tfoot>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tfoot>
  </table>
  <div class="row text-center">
    	<button type="button" class="btn-ngin btn-default ">
			<span class="btn-label"><i class="glyphicon glyphicon-floppy-disk success" aria-hidden="true"></i></span>
		    SAVE
		</button>
    	<button type="button" class="btn-ngin btn-default ">
			<span class="btn-label"><i class="glyphicon glyphicon-remove-circle danger" aria-hidden="true"></i></span>
	        CANCEL
	    </button>
  </div>
  </div>
<br>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/logistic/inventory/create.js') }}"></script>
@endsection