@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/accounting/payment-av/index.css')}}"/>
@endsection

@section('module_name', 'ADVANCE PAYMENT')
@section('page_name', 'INDEX')

@section('body')
<div class="x_content">
<!--Form Search-->															
						<section class="section-header-index">
							<form class="form-inline form-header-index">
								<div class="row">
									<table>
										<tr>
											<td class="col-1">
												<div class="col-1-content" style="white-space: nowrap">
													<div class="form-group select-all">
														<input type="checkbox"  checked class="iCheck" id="selectall" name="selectall" > 
														<label for="selectall" class="iCheck-label" >Select All</label>
													</div>
													<div class="form-group">
														<button type="button" class="btn btn-default-background" data-toggle="modal" data-target="#myModal1">
															<span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW WITH PO</span>
														</button>
													</div>
													<div class="form-group button-2">
														<button type="button"  class="btn btn-default-background" >
															<span class="btn-label"><span class="fa-approve-all"></span></span><span class="btn-label-label">Approve All</span>
														</button>
													</div>
													<div class="form-group">
														<button type="button" class="btn btn-default-background" onclick="window.location='{{ url("back-office/accounting/payment-advance/create") }}'">
															<span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW WITHOUT PO</span>
														</button>
													</div>
												</div>
											</td>
											<td class="col-2">
												<div style="margin-left: 12px;" >
													<div class="form-group form-fixed-width" >
														<div class="icon-addon addon-sm">
															<input  type="text" placeholder="SEARCH" class="form-control search" id="SEARCH" >
															<label for="search"  class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
														</div>
													</div>
												</div>
											</td>
											<td class="col-3 ">

												<div class="text-right col-3-content" style="white-space:nowrap">
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
													<div class="form-group">
														<button type="button" class="btn  btn-default-background">
															<span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span><span class="btn-label-label">Delete All</span>
														</button>
                          </div>
                          
                                                    <!-- <div class="form-group">
														<div class="btn-group ngin-dropdown-sort">
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
													</div> -->
													
												</div>
											</td>
										</tr>
									</table>
								</div>
							</form>
						</section>
<!--End Form Search-->
<?php $margin_top = "margin-top:5px"?>
<!--tap-->

<div id="exTab2" class="">
<div class="tap-content scroll-2">


  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="">
    @for($i=0; $i<5; $i++)
    <div class="panel panel-default" style="padding:10px 15px">
      <div class="row no-margin">
        <table class="tb-payment">
          <tbody>
            <tr>
                <td >
                  <input type="checkbox" class="iCheck">
                </td>
                <td class="f-s-h" style="width: 13%;">
                <label class="color-ba">PA #</label><label class="color-bu">0001</label>
                </td>
                <td class="text-left" style="width: 15%;">
                  <div class="tab-margin" style="{{ $margin_top }}">
                    <label class="color-ba">PO #</label><label class="color-bu" data-toggle="modal" data-target="#myModal">11</label> 
                  </div>
                  <div class="tab-margin">
                    <label class="color-ba">PO #</label><label class="color-bu" data-toggle="modal" data-target="#myModal">12</label>
                  </div>
                  <div class="tab-margin">
                    <label class="color-ba">PO #</label><label class="color-bu" data-toggle="modal" data-target="#myModal">13</label>
                  </div>
                </td>
                <td class="text-right" style="width: 15%;">
                  <div class="tab-margin1" style="{{ $margin_top }}">
                    <label class="color-ba">100,000.00 USD </label>
                  </div>
                </td>
                <td class="text-center">
                  <div class="color-ba" style="{{ $margin_top }}">
                    SAMPLES CO,.LTD.
                  </div>
                  <div class="date_new">
                    04/09/2017
                  </div>
                </td>
                <td style="vertical-align: middle;width: 14%;">
                  <div class="icon-ap">
                    <div class="icon">
                      <span class="fa-approve-all te"></span>
                    </div>
                    <div class="text">APPROVE</div>
                  </div>
                </td>
                <td style="vertical-align: middle;" class="text-right">
                      <button type="button" class="btn btn-ngin btn-default">
                          <span class="btn-label" style="left: -34px;"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                      </button><br/>
                      <button type="button" class="btn btn-ngin btn-default" style="margin-top:5px">
                          <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                      </button>
                </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    @endfor
    <div class="panel panel-default" style="padding:10px 15px">
      <div class="row no-margin">
        <table class="tb-payment">
          <tbody>
            <tr>
                <td >
                  <input type="checkbox" class="iCheck">
                </td>
                <td class="f-s-h" style="width: 13%;">
                <label class="color-ba">PA #</label><label class="color-bu">0002</label>
                </td>
                <td class="text-left" style="width: 15%;">
                  <div class="tab-margin" style="{{ $margin_top }}">
                    <label class="color-ba">PO #</label><label class="color-bu" data-toggle="modal" data-target="#myModal">11</label> 
                  </div>
                  <div class="tab-margin">
                    <label class="color-ba">PO #</label><label class="color-bu" data-toggle="modal" data-target="#myModal">11</label> 
                  </div>
                </td>
                <td class="text-right" style="width: 15%;">
                  <div class="tab-margin1" style="{{ $margin_top }}">
                    <label class="color-ba">30,000.00 USD </label>
                  </div>
                </td>
                <td class="text-center">
                  <div class="color-ba" style="{{ $margin_top }}">
                    SAMPLES CO,.LTD.
                  </div>
                  <div class="date_new">
                    04/09/2017
                  </div>
                </td>
                <td style="vertical-align: middle;width: 14%;">
                  <div class="icon-ap">
                    <div class="icon1 wait">
                      <!-- <i class="fa fa-exclamation-triangle color-wait"></i> -->
                    </div>
                    <div class="wait text">WAITING FOR APPROVE</div>
                  </div>
                </td>
                <td style="vertical-align: middle;" class="text-right">
                      <button type="button" class="btn btn-ngin btn-default" >
                          <span class="btn-label" style="left: -34px;"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                      </button><br/>
                      <button type="button" class="btn btn-ngin btn-default" style="margin-top:5px">
                          <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                      </button>
                </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="panel panel-default" style="padding:10px 15px">
      <div class="row no-margin">
        <table class="tb-payment undo">
          <tbody>
            <tr>
                <td >
                  <input type="checkbox" class="iCheck">
                </td>
                <td style="width: 13%;">
                <label class="undo-tab1">PA #0002</label>
                </td>
                <td class="text-left" style="width: 15%;">
                  <div class="tab-margin">
                    <label class="color-ba text-decoration">PO #</label><label class="color-bu"> 11</label> 
                  </div>
                </td>
                <td class="text-right" style="width: 15%;">
                  
                </td>
                <td class="text-center">
                  <div class="color-ba text-decoration">
                    SAMPLES CO,.LTD.
                  </div>
                  <div class="date_new text-decoration">
                    04/09/2017
                  </div>
                </td>
                <td style="vertical-align: middle;width: 14%;">
                  
                </td>
                <td style="vertical-align: middle;" class="text-right">
                      <button type="button" class="btn btn-ngin btn-default">
                          <span class="btn-label" style="left: -31px;"><i class="fa fa-undo info" aria-hidden="true"></i></span>Undo
                      </button><br/>
                      <button type="button" class="btn btn-ngin btn-default" style="margin-top:5px">
                          <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                      </button>
                </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>

</div>
</div>

    <div class="row page-showing-pagination">
      <div class="col-xs-6 showing">
        Showing 1-10 of 100
      </div>
      <div class="col-xs-6 page-pagination">
        <nav aria-label="Page Navigation">
          <ul class="pagination">
            <li class="page-number">
              <a href="#" aria-label="Previous" class="not-active">Previous
              </a>
            </li>
            <li class="page-number  active"><a href="#">1</a></li>
            <li class="page-number"><a href="#">2</a></li>
            <li class="page-number"><a href="#">3</a></li>
            <li class="page-number"><a href="#">4</a></li>
            <li class="page-number"><a href="#">5</a></li>
            <li class="page-number">
              <a href="#" aria-label="next">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

</div>


<!-- modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <div class="header">
                  <div class="row">
                    <div class="col-xs-6">
                        <label class="overdue-h">OVERDUE</label>
                    </div>
                    <div class="col-xs-6 text-right">
                        DUE 01/08/2018
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-xs-6">
                          <label class="hd">
                              <i class="fa fa-file"></i> PO # 15
                          </label>
                      </div>
                      <div class="col-xs-6 text-right">
                          <label class="hd">200,000.00 USD</label>
                      </div>
                  </div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
            </div>
            <div class="modal-body">
                <table class="table overdue">
                    <thead>
                        <tr>
                            <td>
                                <label class="hd1">PA #</label>
                            </td>
                            <td>
                                <label class="hd1">DATE</label>
                            </td>
                            <td class="text-right">
                                <label class="hd1">PIAD AMOUNT</label>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=0;$i<=2;$i++)
                        <tr>
                            <td>
                                888
                            </td>
                            <td>
                                18/08/2018
                            </td>
                            
                            <td class="text-right">
                                88,888.00 USD
                            </td>
                        </tr>
                        @endfor
                        <tr>
                            <td colspan="3" class="text-right">
                            <label class="hd1">100,000.00 USD</label>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                            <label class="hd1">UNDER PAYMENT</label>
                            </td>
                            <td colspan="2" class="text-right">
                                (100,000.00) USD
                            </td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-ngin btn-default" style="width: 100px;">
                <span class="btn-label" style="left:-20px"><i class="fa fa-file col-green"></i></span>PAY
            </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- end modal -->

<!-- modal -->
<div class="modal fade" id="myModal1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="header">
                  <div class="row">
                      <div class="col-xs-12">
                          <label class="hd">PAYMENT PO</label>
                      </div>
                  </div>
                  <button type="button" class="close t1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
            </div>
            <div class="modal-body">
                <table class="table payment-po">
                    <thead>
                        <tr>
                            <td style="width:15%">
                                <label class="hd1" style="margin-left:25px">PO #</label>
                            </td>
                            <td style="width:25%">
                                <label class="hd1">SUPPLIER</label>
                            </td>
                            <td>
                                <label class="hd1">PAID AMOUNT</label>
                            </td>
                            <td>
                                <label class="hd1">DUE DATE</label>
                            </td>
                            <td class="text-center">
                                <label class="hd1">STATUS</label>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=0;$i<=20;$i++)
                        <tr>
                            <td style="width:15%">
                              <input type="checkbox" class="iCheck" checked>
                              000{{$i+1}}
                            </td>
                            <td style="width:25%">
                                Sony Interactive Co., Ltd
                            </td>
                            <td>
                                60,000.00/100,000.00
                            </td>
                            <td>
                                18/08/2018
                            </td>
                            <td class="text-center">
                                <label class="st-overdue">OVERDUE</label>
                            </td>
                        </tr>
                        @endfor
                        <tr class="none">
                            <td style="width:15%">
                              <input type="checkbox" class="iCheck" disabled>
                              000100
                            </td>
                            <td style="width:25%">
                              Sony Interactive Co., Ltd
                            </td>
                            <td>
                                60,000.00/100,000.00
                            </td>
                            <td>
                                18/08/2018
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr >
                            <td>
                              <input type="checkbox" class="iCheck">
                              000101
                              
                            </td>
                            <td>
                              Sony Interactive Co., Ltd
                            </td>
                            <td>
                                60,000.00/100,000.00
                            </td>
                            <td>
                                18/08/2018
                            </td>
                            <td class="text-center">
                              <label class="st-new">NEW</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-ngin btn-default" style="width:160px">
                <span class="btn-label" style="left:-15px"><i class="fa fa-file col-green"></i></span>PAY THESE POs
            </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- end modal -->


@endsection

@section('top-right-sidebar')
    <div>Top Right Sidebar</div>
@endsection

@section('bottom-right-sidebar')
    <div>Bottom Right Sidebar</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/accounting/payment-av/index.js') }}"></script>
@endsection
