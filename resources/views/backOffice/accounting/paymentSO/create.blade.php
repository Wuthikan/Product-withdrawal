@extends('layouts.backOffice.template')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/accounting/payment-so/create.css')}}"/>
@endsection

@section('module_name', 'PAYMENT SO')
@section('page_name', 'CREATE')

@section('body')
<section class="x_content scroll-2">
<section class="container-wrapper">
  <!-- 1. upload table --> 
  <table class="table new-form">
    <thead>
      <tr>
        <th>CUSTOMER</th>
        <th class="text-right">CREDIT LIMIT: 530,000.00 / 600,000.00</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="2">
          <section class="customer-table">
            <div class="company-name">Aditwit.co.th</div>
            <div class="upload-lists">
              <div class="upload-item" v-for="(file,index) in files">
                <input v-bind:id="'upload-'+index" v-bind:name="'upload-'+index" type="file" class="file hidden" style="display:none;" v-on:change="selectedFile(index, $event)">
                <label v-bind:for="'upload-'+index" class="thumbnail"><i class="fa fa-camera fa-3x" aria-hidden="true"></i> </label> 
              </div>
              <div class="upload-item" v-on:click="addFile">
                <label class="thumbnail"><i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i> </label> 
              </div>
            </div>
          </section>
        </td>
      </tr>
    </tbody>
  </table>
  <!-- end 1. upload table -->
  
  <div class="spacer"></div>

  <!-- 2. bank table -->
  <table class="table new-form">
    <thead>
      <tr><th colspan="3">BANK</th><th style="width:1em"></th><th colspan="2"></th></tr>
    </thead>
    <tbody>
      @foreach(array('K-BANK', 'SCB', 'BBL') as $key => $value )
      <tr>
        <td>{{$value}}</td>
        <td class="text-center">8888-8888-8888-8888</td>
        <td class="text-center">BRANCH BANGRAK</td>
        <td></td>
        <td class="currency-column">
          <input type="number" class="form-control" placeholder="0.00" v-on:input="updateAmount({{$key}}, $event)" />
        </td>
        <td class="unit-column"><b class="text-black">THB</b></td>
      </tr>
      @endforeach
      <tr class="total-row">
        <td colspan="2"></td>
        <td id="total-text--1" class="text-center" style="padding-left:70px"><b class="text-black">TOTAL</b></td>
        <td></td>
        <td class="text-right number">@{{ totalAmount() }}</td>
        <td class="unit-column"><b class="text-black">THB</b></td>
      </tr>
    </tbody>

    <thead class="spacer">
      <tr>
        <th colspan="2">SALE ORDER</th>
        <th class="text-center">PAYMENT METHOD</th>
        <th></th>
        <th colspan="2" class="text-right">PAID / AMOUNT</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="2">SO # 4</td>
        <td class="text-center">CASH</td>
        <td></td>
        <td class="text-right">50,000.00 / 50,000.00</td>
        <td class="unit-column"><b>THB</b></td>
      </tr>
    </tbody>

    <thead class="spacer">
      <tr>
        <th colspan="2">SALE ORDER</th>
        <th class="text-center">DUE</th>
        <th></th>
        <th colspan="2" class="text-right">PAID / AMOUNT</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td colspan="2">SO # 1</td>
        <td class="text-center">25/11/2017</td>
        <td></td>
        <td class="text-right">20,000.00 / 20,000.00</td>
        <td class="unit-column"><b>THB</b></td>
      </tr>

      <tr class="heading">
        <td colspan="5"><b class="text-black">WALLET:</b></td>
        <td><b class="text-green">20,000.00</b></td>
      </tr>
      
      <tr class="spacer">
        <td colspan="6">
          <section>
            <div><b class="text-black">REMARK:</b></div>
            <div>
              <textarea class="form-control" row="4"></textarea>
            </div>
          </section>
        </td>
      </tr>
    </tbody>
  </table>
  <!-- end 2. bank table -->
  
  <div class="divider"></div>

  <!-- 3. Button group -->
  <div class="row">
    <div class="action">

      <button type="submit" class="btn btn-ngin btn-default" style="margin-right:1em">
        <span class="btn-label"><i class="fa fa-save success" aria-hidden="true"></i></span>SAVE
      </button>

      <button type="button" class="btn btn-ngin btn-default">
        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL
      </button>
    </div>
  </div>
  <!-- end 3. button group -->
</section>
</section>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/accounting/payment-so/create.js') }}"></script>
@endsection
