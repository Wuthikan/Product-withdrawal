@extends('layouts.backOffice.template')

@section('head')
   <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/purchasing/shipping-fee-expenditure-requisition/create.css')}}"/>



@endsection

@section('module_name', 'PURCHASING > SHIPPING FEE REQ.')
@section('page_name', 'CREATE')

@section('body')

<div class="x_content">

    
    <section class="panel-body panel-content scroll-2" style="height: calc(100vh - 93px)!important;padding-top: 40px;">
        <div class="row">
            <div class="col-xs-12 content scroll-2" style="    padding-right: 0px;padding-left: 0px;">

<div class="bk-group1">
  <div class="bk-div-table">
    <div class="bk-ele-left">
      <div class="bk-title" style="font-weight: bold;font-size: 13px;">FREIGHT FEE (EXCL. VAT)</div>
      <div style="display: flex;"><input type="text" style="text-align: right;" class="form-control" value="111,000.00"><span style="position: relative;top: 7px;" class="bk-title-padding">THB</span></div>
    </div>
    <div style="width: 150px;">
    </div>
    <div class="bk-ele-left">
      <div style="   "class="bk-title" style="font-weight: bold;font-size: 13px;">SHIPPING FEE (EXCL. VAT)</div>
      <div style="display: flex;"><input type="text" style="text-align: right;" class="form-control" value="111,000.00"><span style="position: relative;top: 7px;" class="bk-title-padding">THB</span></div>
    </div>
  </div>
  <div class="bk-div-table" style="padding-bottom: 30px;">
  	<div>   
      <div class="bk-title bk-fs-2" style="font-weight: bold;">LOGISTIC SUPPLIER NAME</div>
      <div><input class="form-control" type="text"  data-action="typeaheadCustomer"></div>
    </div>
  </div>
  
  <div class="bk-div-table" style="padding-bottom: 30px;">
  	<div>   
    <div class="bk-title"  style="font-weight: bold;font-size: 13px;">SUPPLIER QUOTATION </div>
      <div class="bk-group-upload">
        <div id="uploadMoreSection">
          <div class="uploadPhotoSection">
            <div class="uploadPreview-1">
              <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
            </div>
          </div>

          <div class="uploadPhotoSection">
            <div class="uploadPreview-2">
              <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
            </div>
          </div>

          <div class="uploadPhotoSection">
            <div class="uploadPreview-3">
              <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
            </div>
          </div>
          <div class="uploadPhotoSection">
            <div class="uploadPreview-4">
              <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
            </div>
          </div>
          <div class="uploadPhotoSection">
            <div class="uploadPreview-5">
              <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
            </div>
          </div>
        </div>

        <div class=" uploadPhotoSection">
          <div class="uploadAddMore">
            <i class="fa fa-plus"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="bk-div-table" style="padding-bottom: 10px;">
  	<div>   
      <table class="bk-table">
      	<thead>
          <tr>
            <th></th>
            <th>PR NUMBER</th>
            <th>DOCUMENT DATE</th>
            <th>RECCORD AMOUNT</th>
            <th >SUPPLIER</th>
          </tr>
        </thead>
      </table>
      <table class="bk-table" style="margin-top: 20px;">
        <tbody>
          <tr>
            <td><input type="checkbox" checked class="iCheck"  name="selectall"></td>
            <td>111111</td>
            <td>08/08/8880</td>
            <td>100,00.00 THB</td>
            <td >Lorem iqsum docter sit down.</td>
          </tr>
          <tr>
            <td><input type="checkbox" class="iCheck"  name="selectall"></td>
            <td>111111</td>
            <td>08/08/8880</td>
            <td>100,00.00 THB</td>
            <td >Lorem iqsum docter sit down.</td>
          </tr>
          <tr>
            <td><input type="checkbox" class="iCheck"  name="selectall"></td>
            <td>111111</td>
            <td>08/08/8880</td>
            <td>100,00.00 THB</td>
            <td >Lorem iqsum docter sit down.</td>
          </tr>
          <tr>
            <td><input type="checkbox" checked class="iCheck"  name="selectall"></td>
            <td>111111</td>
            <td>08/08/8880</td>
            <td>100,00.00 THB</td>
            <td >Lorem iqsum docter sit down.</td>
          </tr>
          <tr>
            <td><input type="checkbox" class="iCheck"  name="selectall"></td>
            <td>111111</td>
            <td>08/08/8880</td>
            <td>100,00.00 THB</td>
            <td >Lorem iqsum docter sit down.</td>
          </tr>
          <tr>
            <td><input type="checkbox" class="iCheck"  name="selectall"></td>
            <td>111111</td>
            <td>08/08/8880</td>
            <td>100,00.00 THB</td>
            <td >Lorem iqsum docter sit down.</td>
          </tr>
          <tr>
            <td><input type="checkbox" class="iCheck"  name="selectall"></td>
            <td>111111</td>
            <td>08/08/8880</td>
            <td>100,00.00 THB</td>
            <td >Lorem iqsum docter sit down.</td>
          </tr>
          <tr>
            <td><input type="checkbox" class="iCheck"  name="selectall"></td>
            <td>111111</td>
            <td>08/08/8880</td>
            <td>100,00.00 THB</td>
            <td >Lorem iqsum docter sit down.</td>
          </tr>
          <tr>
            <td><input type="checkbox" class="iCheck"  name="selectall"></td>
            <td>111111</td>
            <td>08/08/8880</td>
            <td>100,00.00 THB</td>
            <td >Lorem iqsum docter sit down.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  
  <div class="bk-div-table"  style="padding-bottom: 20px;">
  	<div>   
      <div class="bk-title" style="font-weight: bold;font-size: 13px;position: relative;top: 5px;">REMARK</div>
      <div><textarea class="form-control" rows="3" id="comment"></textarea></div>
    </div>
  </div>
 </div> 

<div class="bk-group2">
  <div class="bk-div-table bk-group-total" >
  	<div>   
      <table class="bk-total">
        <tr>
          <td>Total</td>
          <td>111,000.00</td>
          <td>THB</td>
        </tr>
        <tr>
          <td>Discount</td>
          <td><input type="text" class="form-control" value="1,000.00" style="width: 110px;height: 25px;"></td>
          <td>THB</td>
        </tr>
        <tr>
          <td>Sub Total</td>
          <td>110,000.00</td>
          <td>THB</td>
        </tr>
        <tr>
          <td>VAT 7%</td>
          <td>7,700.00</td>
          <td>THB</td>
        </tr>
        <tr>
          <td>Net Total</td>
          <td>118,700.00</td>
          <td>THB</td>
        </tr>
      </table>
    </div>
  </div>
</div>


<div class="row" style="padding-top: 30px;text-align: center;">
  <div class="action">

    <button type="submit" class="btn btn-ngin btn-default">
      <span class="btn-label"><i class="fa fa-save success" aria-hidden="true"></i></span>SAVE
    </button>
    <button type="button" class="btn btn-ngin btn-default">
      <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL
    </button>
  </div>
</div>
 
            </div>
        </div>					
    </section>

</div>


@endsection

@section('script')
 
    <script src="{{ asset('js/back-office/purchasing/shipping-fee-expenditure-requisition/create.js') }}"></script>
    
  
    </script>
@endsection
