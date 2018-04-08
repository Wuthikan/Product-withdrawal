@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/logistic/claim/index.css')}}"/>
@endsection

@section('module_name', 'CLAIM')
@section('page_name', 'INDEX')



@section('body')
<div class="container-fluid x_content">
  <!-- header -->

    <section class="section-header-index">
        <form class="form-inline form-header-index">
            
            <div class="row" style="margin:0">
                <div>
                </div>
                <table style="width:100%">
                <tr style="white-space: nowrap;">
                    <td class="col-1" style="min-width: inherit;width: 250px;">
                        <div class="col-1-content" >
                            <div class="form-group select-all">
                                <input type="checkbox"  checked class="iCheck" id="selectall" name="selectall" > 
                                <label for="selectall" class="iCheck-label" >Select All</label>
                            </div>
                            <div class="form-group" style="display: flex;"> 
                                <button type="button" class="btn btn-default-background" onclick="window.location='{{ route("backOffice.purchasing.claim.create") }}'">
                                    <span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
                                </button>
                            </div>
                            <div class="form-group button-2" style="display: flex;">
                                <button type="button"    class="btn btn-default-background">
                                    <span class="btn-label" style="top: -3px;"><span class="fa-approve-all"></span></span><span class="btn-label-label">Approve All</span>
                                </button>
                            </div>
                        </div>
                    </td>
                    <td class="col-1" style="width: inherit;width: auto;">
                        <div class="" >
                            <div class="form-group form-fixed-width" >
                                <div class="icon-addon addon-sm">
                                    <input  type="text" placeholder="SEARCH" class="form-control search" id="SEARCH" >
                                    <label for="search"  class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="col-3" style="min-width: inherit;width: 270px;">
                        <div class="text-right col-3-content">
                            <div class="form-group">
                                <button type="button" class="btn  btn-default-background">
                                <span class="btn-label"><i class="fa fa-file-pdf-o pdf" aria-hidden="true"></i></i></span><span class="btn-label-label">PDF</span>
                                </button>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn  btn-default-background">
                                <span class="btn-label"><i class="fa fa-file-excel-o excel" aria-hidden="true"></i></i></span><span class="btn-label-label">Excel</span>
                                </button>
                            </div>
                            <div class="form-group" style="margin-right:5px">
                            <button type="button"  class="btn  btn-default-background">
                                <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span><span class="btn-label-label">Delete All</span>
                            </button>
                            </div>
                            <div class="form-group">
                              <div class="btn-group ngin-dropdown-sort" style="padding:0 !important;">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-sort-alpha-desc"></i> SORT
                                </a>
                                <ul class="dropdown-menu dropdown-menu-form">
                                  <li class="title">ORDER</li>
                                  <li><input type="radio" id="radioAsc" name="rdoOrder" checked="checked" value="asc"><label for="radioAsc">Ascending</label></li>
                                  <li><input type="radio" id="radioDes" name="rdoOrder" value="des"><label for="radioDes">Descending</label></li>
                                  <li role="separator" class="divider"></li>
                                  <li class="title">BY</li>
                                  <li><input type="radio" id="radioId" name="rdoBy" checked="checked" value="id"><label for="radioId">ID</label></li>
                                  <li><input type="radio" id="radioDocDate" name="rdoBy" value="doc_date"><label for="radioDocDate">Document Date</label></li>
                                  <li><input type="radio" id="radioCusName" name="rdoBy" value="cus_name"><label for="radioCusName">Customer Name</label></li>
                                  <li><input type="radio" id="radioAmount" name="rdoBy" value="amount"><label for="radioAmount">Amount</label></li>
                                  <li><input type="radio" id="radioStatus" name="rdoBy" value="status"><label for="radioStatus">Status</label></li>
                                </ul>
                              </div>
                            </div>
                        </div>
                    </td>
                    
                </tr>
                </table>
                
            </div>

            

        </form>
    </section>
<!-- end header -->
<div class="bs-example bs-example-tabs" data-example-id="togglable-tabs"> 
  <ul class="nav nav-tabs" id="myTabs" role="tablist"> 
    <li role="presentation" class="active">
      <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
        <span>
					<i class="fa fa-hourglass-end" aria-hidden="true"></i>
				</span>
				WAIT
      </a>
    </li> 
    <li role="presentation" class="">
      <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">
        <span>
				  <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
				</span>  
        COMPLETED
      </a>
    </li> 
  </ul> 
  <div class="tab-content" id="myTabContent"> 
    <!-- tab wait -->
    <div class="tab-pane fade active in" role="tabpanel" id="home" aria-labelledby="home-tab"> 
    <section>
        <div class="panel-content scroll-2">
            <div style="">
                @for($i = 0; $i<10; $i++)
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading{{$i}}">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}" aria-expanded="{{$i==0?'true':'false'}}" aria-controls="collapse{{$i}}">
                            <div class="detial">
                                    <div class="row" style="align-items: center; display: flex;margin-bottom: 0px;">
                                        <div class="col-xs-12">
                                            <table class="table">
                                                <tr>
                                                    <td class="checkboxCtl" rowspan="2">
                                                        <div class="records__check">
                                                            <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="bundleName">
                                                            <div class="claim">
                                                            CLAIM # 
                                                            </div>
                                                            <p class="number"> 9999</p>
                                                        </div>
                                                        
                                                    </td>
                                                    <td>
                                                      <div class="dateText">SUPPLIER</div>
                                                    </td>
                                                    <td>
                                                          <div class="dateText">
                                                          CRO: #
                                                          </div>
                                                    </td>
                                                    <td>
                                                      <div class="dateText">CLAIM BY</div>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    <div class="bundlePrice">
                                                        18/08/2017
                                                    </div>
                                                  </td>
                                                  <td>
                                                    <div class="dateBox">Lorem ipsum dolor sit sadasdsadsa</div>
                                                  </td>
                                                  <td>
                                                    <div class="cro_detail">
                                                        <p class="color">8</p>
                                                        <p class="no-color">,</p> 
                                                        <p class="color"> 7</p>
                                                        <p class="no-color">,</p> 
                                                        <p class="color"> 6</p>
                                                    </div>
                                                    
                                                  </td>
                                                  <td>
                                                    <div class="claim_by_detail">Nof</div>
                                                  </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <!-- <div class="col-xs-4">
                                            <div class="dateText">SUPPLIER</div>
                                            <div class="dateBox">Lorem ipsum dolor sit sadasdsadsa</div>
                                        </div>
                                        <div class="col-xs-2">
                                          <div class="bundleName">
                                              <div class="claim">
                                              CRO: #
                                              </div>
                                          </div>
                                          <div class="cro_detail">
                                              8, 7, 6
                                          </div>
                                        </div>
                                        
                                        <div class="col-xs-2">
                                          <div class="dateText">CLAIM BY</div>
                                          <div class="claim_by_detail">Nof</div>
                                        </div> -->
                                    </div>
                                    <div class="row" style="align-items: center; display: flex;margin-top:5px">
                                        <div class="col-xs-12">
                                          <button type="button" class="btn btn-ngin btn-default" style="text-align: center;">
                                              <span class="btn-label" style="float: left;"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                              <div style="display: inherit; margin-top: 3px;">
                                              Edit
                                              </div>
                                          </button>
                                          <button type="button" class="btn btn-ngin btn-default" style="text-align: center;">
                                              <span class="btn-label" style="float: left;"><i class="fa fa-undo info" aria-hidden="true"></i></span>
                                              <div style="display: inherit; margin-top: 3px;">
                                              Undo
                                              </div>
                                          </button>
                                          <button type="button" class="btn btn-ngin btn-default" style="text-align: center;">
                                              <span class="btn-label" style="float: left;"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                                              <div style="display: inherit; margin-top: 3px;">
                                              Delete
                                              </div>
                                          </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div id="collapse{{$i}}" class="panel-collapse collapse {{$i==0?'in':''}}" role="tabpanel" aria-labelledby="heading{{$i}}">
                        <div class="panel-body">
                            <div class="claim_body">
                                    <div class="row form-group panel-img">
                                        <div class="col-xs-3">
                                            <img class="img" src="https://thumb1.shutterstock.com/display_pic_with_logo/1699708/407603929/stock-photo-packing-product-boxes-icon-design-style-box-delivery-on-wood-pallet-package-service-407603929.jpg">
                                        </div>
                                        <div class="col-xs-3">
                                            <img class="img" src="https://thumb1.shutterstock.com/display_pic_with_logo/1699708/407603929/stock-photo-packing-product-boxes-icon-design-style-box-delivery-on-wood-pallet-package-service-407603929.jpg">
                                        </div>
                                        <div class="col-xs-3">
                                            <img class="img" src="https://thumb1.shutterstock.com/display_pic_with_logo/1699708/407603929/stock-photo-packing-product-boxes-icon-design-style-box-delivery-on-wood-pallet-package-service-407603929.jpg">
                                        </div>
                                        <div class="col-xs-3">
                                            <img class="img" src="https://thumb1.shutterstock.com/display_pic_with_logo/1699708/407603929/stock-photo-packing-product-boxes-icon-design-style-box-delivery-on-wood-pallet-package-service-407603929.jpg">
                                        </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-xs-12">
                                        <table class="table barcode">
                                          <thead>
                                            <tr style="color: black; font-weight:bold">
                                              <td style="width:70%">
                                                BARCODE | PRODUCT | ITEM NAME
                                              </td>
                                              <td class="no-white-space text-center" style="width:15%">
                                                SERIAL NUMBER
                                              </td>
                                              <td class="no-white-space text-center" style="width:15%">
                                                AMOUNT
                                              </td>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @for($y = 0; $y<5; $y++)
                                            <tr>
                                              <td>
                                                <div style="width:15%;float: left;">
                                                  88888888
                                                </div>
                                                <div class='no-warp' style="width:85% float: left;">
                                                  : PS4-G MITO L PS4-G MITO 
                                                  <label style="color: black; font-weight:bold">LPS4-G MITO LPS4-G MITO LPS4-G MITO LPS4-G MITO L<label>
                                                </div>
                                              </td>
                                              <td class="text-center">
                                                888888
                                              </td>
                                              <td class="text-center">
                                                500.00
                                              </td>
                                            </tr>
                                            @endfor
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                            </div>  
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    <section>
        <div class="row page-showing-pagination" style="margin-right: 0">
            <div class="col-xs-6 showing">
                Showing 1-10 of 100
            </div>
            <div class="col-xs-6 page-pagination">
                <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-number">
                    <a href="#" aria-label="Previous" class="not-active">
                        Previous
                    </a>
                    </li>
                    <li class="page-number  active"><a href="#">1</a></li>
                    <li class="page-number"><a href="#">2</a></li>
                    <li class="page-number"><a href="#">3</a></li>
                    <li class="page-number"><a href="#">4</a></li>
                    <li class="page-number"><a href="#">5</a></li>
                    <li class="page-number">
                    <a href="#" aria-label="Next" >
                        Next
                    </a>
                    </li>
                </ul>
                </nav>
            </div>
        </div>
    </section>
    </div> 
    <!--end tab wait -->
    <div class="tab-pane fade" role="tabpanel" id="profile" aria-labelledby="profile-tab"> 
      <section>
        <div class="panel-content scroll-2">
            <div style="">
                @for($i = 20; $i<30; $i++)
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading{{$i}}">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}" aria-expanded="{{$i==0?'true':'false'}}" aria-controls="collapse{{$i}}">
                            <div class="detial">
                                    <div class="row" style="align-items: center; display: flex;margin-bottom: 0px;">
                                        <div class="col-xs-12">
                                            <table class="table">
                                                <tr>
                                                    <td class="checkboxCtl" rowspan="2">
                                                        <div class="records__check">
                                                            <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="bundleName">
                                                            <div class="claim">
                                                            CLAIM # 
                                                            </div>
                                                            <p class="number"> 9999</p>
                                                        </div>
                                                        
                                                    </td>
                                                    <td>
                                                      <div class="dateText">SUPPLIER</div>
                                                    </td>
                                                    <td>
                                                          <div class="dateText">
                                                          CRO: #
                                                          </div>
                                                    </td>
                                                    <td>
                                                      <div class="dateText">CLAIM BY</div>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    <div class="bundlePrice">
                                                        18/08/2017
                                                    </div>
                                                  </td>
                                                  <td>
                                                    <div class="dateBox">Lorem ipsum dolor sit sadasdsadsa</div>
                                                  </td>
                                                  <td>
                                                    <div class="cro_detail">
                                                        <p class="color">8</p>
                                                        <p class="no-color">,</p> 
                                                        <p class="color"> 7</p>
                                                        <p class="no-color">,</p> 
                                                        <p class="color"> 6</p>
                                                    </div>
                                                    
                                                  </td>
                                                  <td>
                                                    <div class="claim_by_detail">Nof</div>
                                                  </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <!-- <div class="col-xs-4">
                                            <div class="dateText">SUPPLIER</div>
                                            <div class="dateBox">Lorem ipsum dolor sit sadasdsadsa</div>
                                        </div>
                                        <div class="col-xs-2">
                                          <div class="bundleName">
                                              <div class="claim">
                                              CRO: #
                                              </div>
                                          </div>
                                          <div class="cro_detail">
                                              8, 7, 6
                                          </div>
                                        </div>
                                        
                                        <div class="col-xs-2">
                                          <div class="dateText">CLAIM BY</div>
                                          <div class="claim_by_detail">Nof</div>
                                        </div> -->
                                    </div>
                                    <div class="row" style="align-items: center; display: flex;">
                                        <div class="col-xs-12">
                                          <button type="button" class="btn btn-ngin btn-default" style="text-align: center;">
                                              <span class="btn-label" style="float: left;"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                              <div style="display: inherit; margin-top: 3px;">
                                              Edit
                                              </div>
                                          </button>
                                          <button type="button" class="btn btn-ngin btn-default" style="text-align: center;">
                                              <span class="btn-label" style="float: left;"><i class="fa fa-undo info" aria-hidden="true"></i></span>
                                              <div style="display: inherit; margin-top: 3px;">
                                              Undo
                                              </div>
                                          </button>
                                          <button type="button" class="btn btn-ngin btn-default" style="text-align: center;">
                                              <span class="btn-label" style="float: left;"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                                              <div style="display: inherit; margin-top: 3px;">
                                              Delete
                                              </div>
                                          </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div id="collapse{{$i}}" class="panel-collapse collapse {{$i==0?'in':''}}" role="tabpanel" aria-labelledby="heading{{$i}}">
                        <div class="panel-body">
                            <div class="claim_body">
                                    <div class="row form-group panel-img">
                                        <div class="col-xs-3">
                                            <img class="img" src="https://thumb1.shutterstock.com/display_pic_with_logo/1699708/407603929/stock-photo-packing-product-boxes-icon-design-style-box-delivery-on-wood-pallet-package-service-407603929.jpg">
                                        </div>
                                        <div class="col-xs-3">
                                            <img class="img" src="https://thumb1.shutterstock.com/display_pic_with_logo/1699708/407603929/stock-photo-packing-product-boxes-icon-design-style-box-delivery-on-wood-pallet-package-service-407603929.jpg">
                                        </div>
                                        <div class="col-xs-3">
                                            <img class="img" src="https://thumb1.shutterstock.com/display_pic_with_logo/1699708/407603929/stock-photo-packing-product-boxes-icon-design-style-box-delivery-on-wood-pallet-package-service-407603929.jpg">
                                        </div>
                                        <div class="col-xs-3">
                                            <img class="img" src="https://thumb1.shutterstock.com/display_pic_with_logo/1699708/407603929/stock-photo-packing-product-boxes-icon-design-style-box-delivery-on-wood-pallet-package-service-407603929.jpg">
                                        </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-xs-12">
                                        <table class="table barcode">
                                          <thead>
                                            <tr style="color: black; font-weight:bold">
                                              <td style="width:70%">
                                                BARCODE | PRODUCT | ITEM NAME
                                              </td>
                                              <td class="no-white-space text-center" style="width:15%">
                                                SERIAL NUMBER
                                              </td>
                                              <td class="no-white-space text-center" style="width:15%">
                                                AMOUNT
                                              </td>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @for($y = 0; $y<5; $y++)
                                            <tr>
                                              <td>
                                                <div style="width:15%;float: left;">
                                                  88888888
                                                </div>
                                                <div class='no-warp' style="width:85% float: left;">
                                                  : PS4-G MITO L PS4-G MITO 
                                                  <label style="color: black; font-weight:bold">LPS4-G MITO LPS4-G MITO LPS4-G MITO LPS4-G MITO L<label>
                                                </div>
                                              </td>
                                              <td class="text-center">
                                                888888
                                              </td>
                                              <td class="text-center">
                                                500.00
                                              </td>
                                            </tr>
                                            @endfor
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                            </div>  
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    <section>
        <div class="row page-showing-pagination" style="margin-right: 0">
            <div class="col-xs-6 showing">
                Showing 1-10 of 100
            </div>
            <div class="col-xs-6 page-pagination">
                <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-number">
                    <a href="#" aria-label="Previous" class="not-active">
                        Previous
                    </a>
                    </li>
                    <li class="page-number  active"><a href="#">1</a></li>
                    <li class="page-number"><a href="#">2</a></li>
                    <li class="page-number"><a href="#">3</a></li>
                    <li class="page-number"><a href="#">4</a></li>
                    <li class="page-number"><a href="#">5</a></li>
                    <li class="page-number">
                    <a href="#" aria-label="Next" >
                        Next
                    </a>
                    </li>
                </ul>
                </nav>
            </div>
        </div>
    </section>
    </div> 
  </div> 
</div>


    <!-- <section>
        <div class="panel-content scroll-2">
            <div style="padding-right: 20px">
                @for($i = 0; $i<10; $i++)
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading{{$i}}">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}" aria-expanded="{{$i==0?'true':'false'}}" aria-controls="collapse{{$i}}">
                            <div class="detial">
                                    <div class="row form-group" style="align-items: center; display: flex;">
                                        <div class="col-xs-4">
                                            <table width="100%">
                                                <tr>
                                                    <td class="checkboxCtl">
                                                        <div class="records__check">
                                                            <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="bundleName">
                                                            <div class="claim">
                                                            CLAIM # 
                                                            </div>
                                                            <p class="number"> 9999</p>
                                                        </div>
                                                        <div class="bundlePrice">
                                                            18/08/2017
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="dateText">SUPPLIER</div>
                                            <div class="dateBox">Lorem ipsum dolor sit sadasdsadsa</div>
                                        </div>
                                        <div class="col-xs-2">
                                          <div class="bundleName">
                                              <div class="claim">
                                              CRO: #
                                              </div>
                                          </div>
                                          <div class="cro_detail">
                                              8, 7, 6
                                          </div>
                                        </div>
                                        
                                        <div class="col-xs-2">
                                          <div class="dateText">CLAIM BY</div>
                                          <div class="claim_by_detail">Nof</div>
                                        </div>
                                    </div>
                                    <div class="row" style="align-items: center; display: flex;">
                                        <div class="col-xs-12">
                                          <button type="button" class="btn btn-ngin btn-default" style="text-align: center;">
                                              <span class="btn-label" style="float: left;"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                              <div style="display: inherit; margin-top: 3px;">
                                              Edit
                                              </div>
                                          </button>
                                          <button type="button" class="btn btn-ngin btn-default" style="text-align: center;">
                                              <span class="btn-label" style="float: left;"><i class="fa fa-undo info" aria-hidden="true"></i></span>
                                              <div style="display: inherit; margin-top: 3px;">
                                              Undo
                                              </div>
                                          </button>
                                          <button type="button" class="btn btn-ngin btn-default" style="text-align: center;">
                                              <span class="btn-label" style="float: left;"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                                              <div style="display: inherit; margin-top: 3px;">
                                              Delete
                                              </div>
                                          </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div id="collapse{{$i}}" class="panel-collapse collapse {{$i==0?'in':''}}" role="tabpanel" aria-labelledby="heading{{$i}}">
                        <div class="panel-body">
                            <div class="claim_body">
                                    <div class="row form-group panel-img">
                                        <div class="col-xs-3">
                                            <img class="img" src="https://thumb1.shutterstock.com/display_pic_with_logo/1699708/407603929/stock-photo-packing-product-boxes-icon-design-style-box-delivery-on-wood-pallet-package-service-407603929.jpg">
                                        </div>
                                        <div class="col-xs-3">
                                            <img class="img" src="https://thumb1.shutterstock.com/display_pic_with_logo/1699708/407603929/stock-photo-packing-product-boxes-icon-design-style-box-delivery-on-wood-pallet-package-service-407603929.jpg">
                                        </div>
                                        <div class="col-xs-3">
                                            <img class="img" src="https://thumb1.shutterstock.com/display_pic_with_logo/1699708/407603929/stock-photo-packing-product-boxes-icon-design-style-box-delivery-on-wood-pallet-package-service-407603929.jpg">
                                        </div>
                                        <div class="col-xs-3">
                                            <img class="img" src="https://thumb1.shutterstock.com/display_pic_with_logo/1699708/407603929/stock-photo-packing-product-boxes-icon-design-style-box-delivery-on-wood-pallet-package-service-407603929.jpg">
                                        </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-xs-12">
                                        <table class="table">
                                          <thead>
                                            <tr>
                                              <td style="width:70%">
                                                BARCODE | PRODUCT | ITEM NAME
                                              </td>
                                              <td class="no-white-space" style="width:15%">
                                                SERIAL NUMBER
                                              </td>
                                              <td class="no-white-space" style="width:15%">
                                                AMOUNT
                                              </td>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @for($y = 0; $y<5; $y++)
                                            <tr>
                                              <td>
                                                <div style="width:15%;float: left;">
                                                  88888888
                                                </div>
                                                <div class='no-warp' style="width:85% float: left;">
                                                  : PS4-G MITO L PS4-G MITO LPS4-G MITO LPS4-G MITO LPS4-G MITO LPS4-G MITO L
                                                </div>
                                              </td>
                                              <td class="text-center">
                                                888888
                                              </td>
                                              <td class="text-center">
                                                500
                                              </td>
                                            </tr>
                                            @endfor
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                            </div>  
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    <section>
        <div class="row page-showing-pagination" style="margin-right: 0">
            <div class="col-xs-6 showing">
                Showing 1-10 of 100
            </div>
            <div class="col-xs-6 page-pagination">
                <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-number">
                    <a href="#" aria-label="Previous" class="not-active">
                        Previous
                    </a>
                    </li>
                    <li class="page-number  active"><a href="#">1</a></li>
                    <li class="page-number"><a href="#">2</a></li>
                    <li class="page-number"><a href="#">3</a></li>
                    <li class="page-number"><a href="#">4</a></li>
                    <li class="page-number"><a href="#">5</a></li>
                    <li class="page-number">
                    <a href="#" aria-label="Next" >
                        Next
                    </a>
                    </li>
                </ul>
                </nav>
            </div>
        </div>
    </section> -->
</div>
@endsection

@section('top-right-sidebar')
@endsection

@section('script')
    <script src="{{ asset('js/back-office/logistic/claim/index.js') }}"></script>
@endsection
