@extends('layouts.backOffice.template')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/logistic/product-receive/create.css')}}"/>
@endsection

@section('module_name', 'PRODUCT RECEIVE')
@section('page_name', 'CREATE')

@section('body')
<div class="scroll-2">
	<section class="product-receive">
    <form class="form-header">
        <div class="row">
            <div class="col-xs-12 text-right">
                <h4>CRO # 1,2,3</h4>
            </div>
        </div>
        <div class="row row-eq-height">
            
            <div class="col-md-6">
                <h4>PR#143</h4>
            </div>
            <div class="col-md-6 text-right">
                <h4>PO # 88888, 99999, 11111</h4>
            </div>
            <!-- <div class="col-md-6 product-receive-date">
                <h4>DOCUMENT DATE</h4>
                <div class='input-group date' id='documentDate' >
        			    <input type='text' class="form-control input-date" value="04/09/2017"/>
          				<span class="input-group-addon">
          					<i class="fa fa-calendar" ></i>
          				</span>
                </div>
            </div> -->
        </div>

        <div class="row po">
          <!-- <div class="col-md-5">
            <div class="form-group">
              <label>PO #:</label>
              <select class="form-control" name="po">
                <option>PO8888</option>
                <option>PO8889</option>
                <option>PO8890</option>
                <option>PO88880</option>
                <option>PO88881</option>
                <option>PO88882</option>
              </select>
            </div>
          </div> -->
          <div class="col-md-3">
            <div class="form-group">
                <label>DOCUMENT DATE</label>
                <div class='input-group date' id='documentDate' >
        			    <input type='text' class="form-control input-date" value="04/09/2017"/>
          				<span class="input-group-addon">
          					<i class="fa fa-calendar" ></i>
          				</span>
                </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>delivery number from supplier:</label>
              <input type="text" class="form-control" id="deliveryNumber" name="deliveryNumber" placeholder="8888888888">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>delivery date:</label>
              <div class="input-group date date-delivery" id="deliveryDate">
                <input type='text' class="form-control" value="04/09/2017" />
        				<span class="input-group-addon">
        					<i class="fa fa-calendar" ></i>
        				</span>
              </div>
            </div>
          </div>
        </div>

        <div class="row supplier">
          <div class="col-md-12">
            <div class="form-group">
              <label>supplier</label>
              <!-- <select class="form-control" name="supplier">
                <option>SUPPLIER</option>
                <option>SUPPLIER1</option>
                <option>SUPPLIER2</option>
              </select> -->
              <input class="form-control" type="text" placeholder="typeaheadCustomer" data-action="typeaheadCustomer">
            </div>
          </div>
        </div>

        <div class="row product-images">
          <div class="col-md-12">
            <div class="form-group">
              <label for="supplier" class="text-uppercase">product image</label>
              <div class="images">
                <div class="image">
                  <input type="file" id="imgUploadOne" style="display:none"/>
                  <button type="button" id="btnUploadOne" class="btn btn-default btn-addimage" aria-label="Left Align">
                      <span class="glyphicon glyphicon-camera"></span>
                  </button>
                </div>
                <div class="image">
                  <input type="file" id="imgUploadTwo" style="display:none"/>
                  <button type="button" id="btnUploadTwo" class="btn btn-default btn-addimage" aria-label="Left Align">
                      <span class="glyphicon glyphicon-camera"></span>
                  </button>
                </div>
                <div class="image">
                  <input type="file" id="imgUploadThree" style="display:none"/>
                  <button type="button" id="btnUploadThree" class="btn btn-default btn-addimage" aria-label="Left Align">
                      <span class="glyphicon glyphicon-camera"></span>
                  </button>
                </div>
                <div class="image">
                  <input type="file" id="imgUploadFour" style="display:none"/>
                  <button type="button" id="btnUploadFour" class="btn btn-default btn-addimage" aria-label="Left Align">
                      <span class="glyphicon glyphicon-camera"></span>
                  </button>
                </div>
                <div class="image">
                  <input type="file" id="imgUploadFive" style="display:none"/>
                  <button type="button" id="btnUploadFive" class="btn btn-default btn-addimage" aria-label="Left Align">
                      <span class="glyphicon glyphicon-camera"></span>
                  </button>
                </div>
                <div class="image add-more">
                  <input type="file" id="imgUploadSix" style="display:none"/>
                  <button type="button" id="btnUploadSix" class="btn btn-default btn-addimage" aria-label="Left Align">
                      <span class="glyphicon glyphicon-plus"></span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="details">
          <div class="row row-eq-height">
            <div class="col-md-4 col-md-offset-2 detail">
              <div class="form-group no-margin">
                <label>barcode</label>
              </div>
            </div>
            <div class="col-md-4 detail">
              <div class="form-group no-margin">
                <label>qty</label>
              </div>
            </div>
            
          </div>

          <div class="row row-eq-height">
            <div class="col-md-4 col-md-offset-2 detail">
              <div class="form-group">
                <input type='text' class="form-control"/>
              </div>
            </div>
            <div class="col-md-4 detail">
              <div class="form-group">
                <input type='text' class="form-control"/>
              </div>
            </div>
            <div class="col-md-2">
              <div class="button-actions">
                <div class="save inline">
                  <button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#barCodeModal-1">
                    <span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true" ></i></span>SAVE</button>
                </div>
              </div>      
            </div>
          </div>
          
        </div>

        <div class="row account-receive-table-1">
          <table class="table ngin-table">
            <thead>
              <tr>
                <th class="col-md-3 align-left product">barcode | product code | item name</th>
                <th class="col-md-3 dimension">
                  dimension
                  <div class="row">
                    <div class="col-md-4">WIDTH <span>(mm)</span></div>
                    <div class="col-md-4">HEIGHT <span>(mm)</span></div>
                    <div class="col-md-4">DEPTH <span>(mm)</span></div>
                  </div>
                </th>
                <th class="order-amount">order <br/>qty</th>
                <th class="col-md-1 receiving-amount">receiving <br/> qty</th>
                <th class="sony text-center" >SONY CODE / SERIAL NUMBER</th>
                <th class="col-md-3 actual-weight">weight w/o packaging <br/> <span>(grams)</span></th>
              </tr>
            </thead>
            <tbody>
              @for ($i=0; $i<4; $i++)
              <tr>
                <td class="col-md-3 align-left product">
                  <div class="no-warp">
                    <span>PCAS-88888</span>
                    <span class="text-ellipsis pd-left-2">PS4-G: Lorem ipsum Lorem ipsu lorem ipsum Lorem ipsu</span>
                  </div>
                  <div>
                    <span>BARCODE :</span>
                    <span class="text-ellipsis pd-left-2">8-8888-88888-88</span>
                  </div>
                </td>
                <td class="col-md-3 dimension">
                  <div class="row">
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="888"/></div>
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="888"/></div>
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="888"/></div>
                  </div>
                </td>
                <td class="col-md-1 order-amount">88</td>
                <td class="col-md-1 receiving-amount">
                  <input type="text" class="form-control" placeholder="8"/>
                  <!-- <span>
                    <button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#barCodeModal-2">
                      [ดู SN]
                    </button>
                  </span> -->
                </td>
                <td>
                  <div class="row d-flex align-items-center">
                    <div class="col-xs-4">
                      <div class="upload-u">      
                        <div class="row no-margin upload-label">
                          <div class="btn-cancel-upload" data-target="#input-file-{{$i}}" data-file="#file-{{ $i }}">
                            <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                          </div>
                          <i class="fa fa-file-pdf-o" style="font-size:12px" aria-hidden="true"></i>&nbsp;
                          <span class="overflow" id="file-{{ $i }}">-- No file --</span>
                        </div>
                        <div class="row">
                          <div class="col-xs-12">
                            <hr>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12">
                            <div class="upload-btn-wrapper">
                              <button class="btn1">BROWSE</button>
                              <input type="file" id='input-file-{{$i}}' name="myfile" data-target="#file-{{ $i }}" />
                            </div>  
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-3 no-padding">
                      <button type="button" class="btn btn-ngin btn-xs flex-center" data-toggle="modal" data-target="#barCodeModal-1">
                        <span class="btn-label btn-xs"><i class="fa fa-print primary" aria-hidden="true"></i></span>ดู Serial
                      </button>
                    </div>
                    <div class="col-xs-5">
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </td>
                <td class="col-md-3 actual-weight"><input type="text" class="form-control" placeholder="888"/></td>
              </tr>
              @endfor
              <!-- <tr>
                <td class="col-md-3 align-left product">
                  <span>PCAS-88888</span>
                  <span class="text-ellipsis pd-left-2">PS4-G: Lorem ipsum Lorem ipsu lorem ipsum Lorem ipsu</span>
                  <span>(UNIT)</span>
                </td>
                <td class="col-md-3 dimension">
                  <div class="row">
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="888"/></div>
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="888"/></div>
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="888"/></div>
                  </div>
                </td>
                <td class="col-md-1 order-amount">88</td>
                <td class="col-md-1 receiving-amount">
                  <input type="text" class="form-control" placeholder="8"/>
                  <span>
                    <button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#barCodeModal-2">
                      [ดู SN]
                    </button>
                  </span>
                </td>
                <td class="col-md-3 actual-weight"><input type="text" class="form-control" placeholder="888"/></td>
              </tr>
              <tr>
                <td class="col-md-3 align-left product">
                  <span>PCAS-88888</span>
                  <span class="text-ellipsis pd-left-2">PS4-G: Lorem ipsum Lorem ipsu lorem ipsum Lorem ipsu</span>
                  <span>(UNIT)</span>
                </td>
                <td class="col-md-3 dimension">
                  <div class="row">
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="888"/></div>
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="888"/></div>
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="888"/></div>
                  </div>
                </td>
                <td class="col-md-1 order-amount">88</td>
                <td class="col-md-1 receiving-amount">
                  <input type="text" class="form-control" placeholder="8"/>
                  <span>
                    <button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#barCodeModal-2">
                      [ดู SN]
                    </button>
                  </span>
                </td>
                <td class="col-md-3 actual-weight"><input type="text" class="form-control" placeholder="888"/></td>
              </tr>
              <tr>
                <td class="col-md-3 align-left product">
                  <span>PCAS-88888</span>
                  <span class="text-ellipsis pd-left-2">PS4-G: Lorem ipsum Lorem ipsu lorem ipsum Lorem ipsu</span>
                  <span>(UNIT)</span>
                </td>
                <td class="col-md-3 dimension">
                  <div class="row">
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="888"/></div>
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="888"/></div>
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="888"/></div>
                  </div>
                </td>
                <td class="col-md-1 order-amount">88</td>
                <td class="col-md-1 receiving-amount">
                  <input type="text" class="form-control" placeholder="8"/>
                  <span>
                    <button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#barCodeModal-2">
                      [ดู SN]
                    </button>
                  </span>
                </td>
                <td class="col-md-3 actual-weight"><input type="text" class="form-control" placeholder="888"/></td>
              </tr> -->
            </tbody>
          </table>
        </div>

        <div class="row account-receive-table-2">
          <table class="table ngin-table">
            <thead>
              <tr>
                <th class="col-md-3 align-left product">barcode / product code / item name</th>
                <th class="col-md-3 dimension">
                  dimension
                  <div class="row">
                    <div class="col-md-4">WIDTH <span>(mm)</span></div>
                    <div class="col-md-4">HEIGHT <span>(mm)</span></div>
                    <div class="col-md-4">DEPTH <span>(mm)</span></div>
                  </div>
                </th>
                <th class="col-md-1 stock"></th>
                <th class="sony text-center" >SONY CODE / SERIAL NUMBER</th>
                <th class="col-md-3 actual-weight">weight w/o packaging <br/> <span>(grams)</span></th>
              </tr>
            </thead>
            <tbody>
              @for ($i=10; $i<14; $i++)
              <tr>
                <td class="col-md-3 align-left product">
                  <input type="text" class="form-control" data-action="typeaheadProduct"/>
                </td>
                <td class="col-md-3 dimension">
                  <div class="row">
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="888"/></div>
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="888"/></div>
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="888"/></div>
                  </div>
                </td>
                <td class="col-md-1" style="text-align: left;">
                  <div style="margin-bottom:5px">
                    <input type="checkbox" checked class="iCheck">
                    <span>Stock Keeping</span>
                  </div>
                  <div class="serial-control">
                    <input type="checkbox" checked class="iCheck">
                    <span>Serial Control</span>
                  </div>
                    
                </td>
                
                <td>
                  <div class="row d-flex align-items-center">
                    <div class="col-xs-4">
                      <div class="upload-u">      
                        <div class="row no-margin upload-label">
                          <div class="btn-cancel-upload" data-target="#input-file-{{$i}}" data-file="#file-{{ $i }}">
                            <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                          </div>
                          <i class="fa fa-file-pdf-o" style="font-size:12px" aria-hidden="true"></i>&nbsp;
                          <span class="overflow" id="file-{{ $i }}">-- No file --</span>
                        </div>
                        <div class="row">
                          <div class="col-xs-12">
                            <hr>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12">
                            <div class="upload-btn-wrapper">
                              <button class="btn1">BROWSE</button>
                              <input type="file" id='input-file-{{$i}}' name="myfile" data-target="#file-{{ $i }}" />
                            </div>  
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-3 no-padding">
                      <button type="button" class="btn btn-ngin btn-xs flex-center" data-toggle="modal" data-target="#barCodeModal-1">
                        <span class="btn-label btn-xs"><i class="fa fa-print primary" aria-hidden="true"></i></span>ดู Serial
                      </button>
                    </div>
                    <div class="col-xs-5 ">
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </td>
                <td class="col-md-3 actual-weight"><input type="text" class="form-control" placeholder="888"/></td>
              </tr>
              @endfor
              <!-- <tr>
                <td class="col-md-3 align-left product">
                  <input type="text" class="form-control" />
                </td>
                <td class="col-md-3 dimension">
                  <div class="row">
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="888"/></div>
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="888"/></div>
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="888"/></div>
                  </div>
                </td>
                <td class="col-md-1 order-amount">
                  <input type="checkbox" checked class="iCheck">
                  <span>Stock Keeping</span>
                </td>
                <td class="col-md-1 receiving-amount">
                  <input type="text" class="form-control" placeholder="8"/>
                </td>
                <td class="col-md-3 actual-weight"><input type="text" class="form-control" placeholder="888"/></td>
              </tr>
              <tr>
                <td class="col-md-3 align-left product">
                  <input type="text" class="form-control" />
                </td>
                <td class="col-md-3 dimension">
                  <div class="row">
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="888"/></div>
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="888"/></div>
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="888"/></div>
                  </div>
                </td>
                <td class="col-md-1 order-amount">
                  <input type="checkbox" checked class="iCheck">
                  <span>Stock Keeping</span>
                </td>
                <td class="col-md-1 receiving-amount">
                  <input type="text" class="form-control" placeholder="8"/>
                </td>
                <td class="col-md-3 actual-weight"><input type="text" class="form-control" placeholder="888"/></td>
              </tr>
              <tr>
                <td class="col-md-3 align-left product">
                  <input type="text" class="form-control" />
                </td>
                <td class="col-md-3 dimension">
                  <div class="row">
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="888"/></div>
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="888"/></div>
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="888"/></div>
                  </div>
                </td>
                <td class="col-md-1 order-amount">
                  <input type="checkbox" checked class="iCheck">
                  <span>Stock Keeping</span>
                </td>
                <td class="col-md-1 receiving-amount">
                  <input type="text" class="form-control" placeholder="8"/>
                </td>
                <td class="col-md-3 actual-weight"><input type="text" class="form-control" placeholder="888"/></td>
              </tr> -->
            </tbody>
          </table>
        </div>

        <div class="row total">
          <div class="col-md-12">
            <h4>Total
              <span class="quantity">88,888,888</span>
              <span class="unit">pieces</span>
            </h4>
          </div>
        </div>

        <div class="button-actions">
          <div class="save inline">
            <button type="button" class="btn btn-ngin btn-default">
               <span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i></span>SAVE
            </button>
          </div>
          <div class="cancel inline">
            <button type="button" class="btn btn-ngin btn-default">
               <span class="btn-label cancel"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL
            </button>
          </div>
        </div>

    </form>
  </section>
</div>
@endsection

@section('modal')
<!-- Modal -->
<div id="barCodeModal-1" class="modal bs-example-modal-lg fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                    <span>BARCODE NOT FOUND 8-8888-88888-88-8 IN PURCHASAE ORDER PO# 88888</span>
                    <p class="title-text-indent"><small>PLEASE SELECT A PRODUCT FOR THIS BARCODE</small></p>
                </h4>
            </div>
            <div class="modal-body scroll-2">
                <div class="table-responsive">
                <table class="table ngin-table">
                    <thead>
          						<tr>
          							  <th style="width:20%"></th>
          							  <th style="width:5%"></th>
                          <th style="width:55%" class="align-left">
                            <div class="row">
                              <div class="col-md-4">
                                CODE
                              </div>
                              <div class="col-md-8">
                                PRODUCT NAME (UNIT)
                              </div>
                            </div>
                          </th>
                          <!-- <th class="col-md-3 align-left">PRODUCT NAME (UNIT)</th> -->
                          <th style="width:20%"></th>
                        </tr>
                    </thead>
                    <tbody class="modal-body">
                        @for ($i=0; $i<4; $i++)
                        <tr>
                            <td></td>
                            <td >
                                <input type="radio" name="barcode" checked class="iCheck">
                            </td>
                            <td class="align-left">
                              <div class="row no-margin">
                                <div class="col-md-4 no-padding">
                                  PCAS-88888 PS4-G:
                                </div>
                                <div class="col-md-8 no-padding">
                                  Lorem ipsum Lorem ipsum (unit)
                                </div>
                                <div class="col-md-2 no-padding">
                                  BARCODE : 
                                </div>
                                <div class="col-md-10 no-padding">
                                  8-88888-88888-8888
                                </div>
                              </div>
                                
                            </td>
                            <!-- <td class="col-md-3 align-left">Lorem ipsum Lorem ipsum (unit)</td> -->
                            <td></td>
                        </tr>
                        @endfor
                        <tr>
                            <td></td>
                            <td >
                                <input type="radio" name="barcode" checked class="iCheck">
                            </td>
                            <td class="align-left">
                              <div class="row no-margin d-flex align-items-center">
                                <div class="col-md-2 no-padding">
                                  OTHER
                                </div>
                                <div class="col-md-10 no-padding">
                                  <input type="text" class="form-control" />
                                </div>
                              </div>
                            </td>
                            <td></td>
                        </tr>
                        <!-- <tr>
                            <td class="col-md-2"></td>
                            <td class="col-md-1">
                                <input type="radio" name="barcode" class="iCheck">
                            </td>
                            <td class="col-md-2">PCAS-88888 PS4-G:</td>
                            <td class="col-md-3 align-left">Lorem ipsum Lorem ipsum (unit)</td>
                            <td class="col-md-2"></td>
                        </tr>
                        <tr>
                            <td class="col-md-2"></td>
                            <td class="col-md-1">
                                <input type="radio" name="barcode" class="iCheck">
                            </td>
                            <td class="col-md-2">PCAS-88888 PS4-G:</td>
                            <td class="col-md-3 align-left">Lorem ipsum Lorem ipsum (unit)</td>
                            <td class="col-md-2"></td>
                        </tr>
                        <tr>
                            <td class="col-md-2"></td>
                            <td class="col-md-1">
                                <input type="radio" name="barcode" class="iCheck">
                            </td>
                            <td class="col-md-2">PCAS-88888 PS4-G:</td>
                            <td class="col-md-3 align-left">Lorem ipsum Lorem ipsum (unit)</td>
                            <td class="col-md-2"></td>
                        </tr> -->
                    </tbody>
                </table>
                </div>

                <div class="button-actions">
                    <div class="add inline">
                      <button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#barCodeModal-1">
                         <span class="btn-label"><i class="fa fa-thumbs-o-up success" aria-hidden="true"></i></span>ADD
                      </button>
                    </div>
                    <div class="cancel inline">
                      <button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#barCodeModal-1">
                         <span class="btn-label cancel"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL
                      </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="barCodeModal-2" class="modal bs-example-modal-lg fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-file-text-o" aria-hidden="true"></i>Crash Bandicoot</h4>
            </div>
            <label>Serial Number</label>
            <div class="modal-body scroll-2">
                <table class="table ngin-table">
                    <tbody>
                        <tr>
                          <td class="col-md-2 empty"></td>
                          <td class="col-md-2">
                            <button type="button" class="btn btn-default-background">
                              <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                            </button>
                            <span class="btn-label-label">88888888</span>
                          </td>
                          <td class="col-md-2">
                            <button type="button" class="btn btn-default-background">
                              <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                            </button>
                            <span class="btn-label-label">88888888</span>
                          </td>
                          <td class="col-md-2">
                            <button type="button" class="btn btn-default-background">
                              <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                            </button>
                            <span class="btn-label-label">88888888</span>
                          </td>
                          <td class="col-md-2">
                            <button type="button" class="btn btn-default-background">
                              <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                            </button>
                            <span class="btn-label-label">88888888</span>
                          </td>
                          <td class="col-md-2 empty"></td>
                        </tr>
                        <tr>
                          <td class="col-md-2 empty"></td>
                          <td class="col-md-2">
                            <button type="button" class="btn btn-default-background">
                              <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                            </button>
                            <span class="btn-label-label">88888888</span>
                          </td>
                          <td class="col-md-2">
                            <button type="button" class="btn btn-default-background">
                              <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                            </button>
                            <span class="btn-label-label">88888888</span>
                          </td>
                          <td class="col-md-2">
                            <button type="button" class="btn btn-default-background">
                              <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                            </button>
                            <span class="btn-label-label">88888888</span>
                          </td>
                          <td class="col-md-2">
                            <button type="button" class="btn btn-default-background">
                              <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                            </button>
                            <span class="btn-label-label">88888888</span>
                          </td>
                          <td class="col-md-2 empty"></td>
                        </tr>
                        <tr>
                          <td class="col-md-2 empty"></td>
                          <td class="col-md-2">
                            <button type="button" class="btn btn-default-background">
                              <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                            </button>
                            <span class="btn-label-label">88888888</span>
                          </td>
                          <td class="col-md-2">
                            <button type="button" class="btn btn-default-background">
                              <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                            </button>
                            <span class="btn-label-label">88888888</span>
                          </td>
                          <td class="col-md-2">
                            <button type="button" class="btn btn-default-background">
                              <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                            </button>
                            <span class="btn-label-label">88888888</span>
                          </td>
                          <td class="col-md-2">
                            <button type="button" class="btn btn-default-background">
                              <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                            </button>
                            <span class="btn-label-label">88888888</span>
                          </td>
                          <td class="col-md-2 empty"></td>
                        </tr>
                        <tr>
                          <td class="col-md-2 empty"></td>
                          <td class="col-md-2">
                            <button type="button" class="btn btn-default-background">
                              <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                            </button>
                            <span class="btn-label-label">88888888</span>
                          </td>
                          <td class="col-md-2">
                            <button type="button" class="btn btn-default-background">
                              <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                            </button>
                            <span class="btn-label-label">88888888</span>
                          </td>
                          <td class="col-md-2">
                            <button type="button" class="btn btn-default-background">
                              <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                            </button>
                            <span class="btn-label-label">88888888</span>
                          </td>
                          <td class="col-md-2">
                            <button type="button" class="btn btn-default-background">
                              <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                            </button>
                            <span class="btn-label-label">88888888</span>
                          </td>
                          <td class="col-md-2 empty"></td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="button-actions">
                <div class="add inline">
                  <button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#barCodeModal-2">
                     <span class="btn-label"><i class="fa fa-thumbs-o-up success" aria-hidden="true"></i></span>ADD
                  </button>
                </div>
                <div class="cancel inline">
                  <button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#barCodeModal-2">
                     <span class="btn-label cancel"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL
                  </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/logistic/product-receive/create.js') }}"></script>
    <script>
    $(document).ready(function() {
      $('.date').datetimepicker({
        viewMode: 'days',
        format: 'DD/MM/YYYY'
      });
      $('[type=file]').change((e) => {
        const filelist = e.target.files;
        const targetId = $(e.target).data('target');
        console.log(targetId, e);
        if (filelist) {
            if (filelist[0])
                $(targetId).text(filelist[0].name);
        }
      });

      $('.btn-cancel-upload').click(function(){
        let tartget = $(this).data("target")
        console.log($(this).data("file"))
        $(tartget).wrap('<form>').closest('form').get(0).reset();
        $(tartget).unwrap(); 
        $($(this).data("file")).text('-- No file --');       
      })

    });
    </script>
@endsection
