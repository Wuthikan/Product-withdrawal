@extends('layouts.backOffice.template')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/accounting/payment/create.css')}}"/>
<style>
    #txtRemark {resize: none;}
    .hrLine {border: 1px solid rgb(221,221,221);}
    label {
        margin-top:5px;
    }
    .currencyInput{
        text-align: right; 
    }
    .label-input{
        color:black;
    }
    .btn-length{
        width:130px;
    }
</style>
@endsection

@section('module_name', 'PAYMENT')
@section('page_name', 'CREATE')

@section('body')

<div class="x_content">
<h3 class="label-input">Payment</h3>
	<div class="x_content">
    

		<div class="row">

			<div class=" form-group col-sm-6 col-md-offset-1 col-md-5 col-lg-offset-3 col-lg-3 col-xs-6">	
                <label class="label-input">PO#</label>
                <select class="form-control"> 
                    <option value="">Default select</option> 
                </select>
            </div>

            <div class="form-group col-sm-6 col-md-5 col-lg-3 col-xs-6">
                <label class="label-input">DATE</label>
                <div class='input-group date' id="dtp" >
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <i class="fa fa-calendar" ></i>
                    </span>
                </div>
            </div>

			<div class=" form-group col-sm-6 col-md-offset-1 col-md-5 col-lg-offset-3 col-lg-3 col-xs-6">
                <label class="label-input">TO BANK ACCOUNT</label>
                <select class="form-control"> 
                    <option value="">[KBANK] xx888-8</option> 
                </select>	
            </div>

			<div class="form-group col-sm-6 col-md-5 col-lg-3 col-xs-6">
                <label class="label-input">AMOUNT</label>
                <input type="text" class="form-control currencyInput">
            </div>

            <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 ">

            </div>
            <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12">
            </div>

            <div class="form-group col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-3 col-lg-6 col-xs-12">
                <label class="label-input">REMARK</label>
                <textarea class="form-control" rows="3" id="txtRemark"> </textarea>
            </div>

            <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12">
            </div>
            <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12">
            </div>
    
            <table class="table ngin-table" >
                <thead>
                    <tr class="header">
                        <th>BARCODE | PRODUCT CODE | ITEM NAME</th>
                        <th>AMOUNT</th>
                        <th>TOTAL DEBT</th>
                        <th>PAYMENT AMOUNT</th>
                    </tr>
                </thead>
                    <tr>
                        <td>PCAS-88888  PS4-G: Lorem ipsum Lorem ipsu... (Unit)</td>
                        <td>88</td>
                        <td>4,444.44</td>
                        <td><input type="text" disabled></td>
                    </tr>
                    <tr>
                        <td>PCAS-88888  PS4-G: Lorem ipsum Lorem ipsu... (Unit)</td>
                        <td>88</td>
                        <td>4,444.44</td>
                        <td><input type="text" disabled></td>
                    </tr>
                    <tr>
                        <td>PCAS-88888  PS4-G: Lorem ipsum Lorem ipsu... (Unit)</td>
                        <td>88</td>
                        <td>4,444.44</td>
                        <td><input type="text" disabled></td>
                    </tr>
                    <tr>
                        <td>PCAS-88888  PS4-G: Lorem ipsum Lorem ipsu... (Unit)</td>
                        <td>88</td>
                        <td>4,444.44</td>
                        <td><input type="text" disabled></td>
                    </tr>
                    <tr>
                        <td>PCAS-88888  PS4-G: Lorem ipsum Lorem ipsu... (Unit)</td>
                        <td>88</td>
                        <td>4,444.44</td>
                        <td><input type="text" disabled></td>
                    </tr>
                </tbody>
            </table>
            <hr class="hrLine">

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xs-6">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" align="right">
                <div class="form-group">
                    <label class="control-label col-md-6 col-sm-6 col-xs-6 label-input" for="pwd">TOTAL</label>
                    <div align="right" class="col-md-4 col-sm-4 col-xs-4">          
                        <label>4,444.44</label>
                    </div>
                    <label align="left" class="control-label col-md-2 col-sm-2 col-xs-2 label-input" for="pwd">USD</label>                    
                </div>
            </div>


            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xs-6">
                <div class="form-group">
                    <label  class="control-label col-md-6 col-sm-6 col-xs-6 label-input" for="pwd">EXCHANGE RATE 1 USD</label>
                    <div class="col-md-4 col-sm-4 col-xs-4">          
                        <input type="text" class="form-control input-sm currencyInput">
                    </div>
                    <label class="control-label col-md-2 col-sm-2 col-xs-2 label-input" for="pwd">BATH</label>                    
                </div>
             
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" align="right">
                <div class="form-group">
                    <label   class="control-label col-md-6 col-sm-6 col-xs-6 label-input" for="pwd">BANK FEE</label>
                    <div class="col-md-4 col-sm-4 col-xs-4">          
                        <input type="text" class="form-control input-sm currencyInput">
                    </div>
                    <label align="left" class="control-label col-md-2 col-sm-2 col-xs-2 label-input" for="pwd">BATH</label>                    
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xs-6">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" align="right">
                <div class="form-group">
                    <label class="control-label col-md-6 col-sm-6 col-xs-6 label-input" for="pwd">TOTAL PRICE</label>
                    <div  class="col-md-4 col-sm-4 col-xs-4">          
                       <label class="control-label label-input">8,888,888.88</label>
                    </div>
                    <label align="left" class="control-label col-md-2 col-sm-2 col-xs-2 label-input" for="pwd">BATH</label>                    
                </div>
            </div>

            <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12">
            </div>

            <hr class="hrLine">

            <div align="center"style="margin-top:40px;">
                <button type="button" class="btn btn-ngin btn-default ">
                    <span class="btn-label">
                        <i class="fa fa-floppy-o fa-1x success" aria-hidden="true"></i>
                    </span>SAVE 
                </button>
                &nbsp;
                <button type="button" class="btn btn-ngin btn-default">
                    <span class="btn-label ">
                        <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                    </span>CANCEL
                </button>
            </div>
            <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12">
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/back-office/accounting/payment/create.js') }}"></script>

<script type="text/javascript">
    $(function () {
        $('#dtp').datetimepicker();
    });
</script>
@endsection