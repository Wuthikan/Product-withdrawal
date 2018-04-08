@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/accounting/payment/index.css')}}"/>
@endsection

@section('module_name', 'PAYMENT')
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
														<button type="button" class="btn btn-default-background" onclick="window.location='{{ url("back-office/accounting/payment/create") }}'">
															<span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW WITH PO</span>
														</button>
													</div>
													<div class="form-group button-2">
														<button type="button"    class="btn btn-default-background">
															<span class="btn-label"><span class="fa-approve-all"></span></span><span class="btn-label-label">Approve All</span>
														</button>
													</div>
													<div class="form-group">
														<button type="button" class="btn btn-default-background" onclick="window.location='{{ url("back-office/inquiry/create") }}'">
															<span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW WITHOUT PO</span>
														</button>
													</div>
												</div>
											</td>
											<td class="col-2">
												<div class="" >
													<div class="form-group form-fixed-width" >
														<div class="icon-addon addon-sm">
															<input  type="text" placeholder="SEARCH" class="form-control search" id="SEARCH" >
															<label for="search"  class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
														</div>
													</div>
												</div>
											</td>
											<td class="col-3">

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
													<div class="form-group">
														<button type="button" class="btn  btn-default-background">
															<span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span><span class="btn-label-label">Delete All</span>
														</button>
													</div>
													
												</div>
											</td>
										</tr>
									</table>
								</div>
							</form>
						</section>
<!--End Form Search-->

<!--tap-->

<div id="exTab2" class="">
<div class="tap-content scroll-2">


  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="">
    @for($i=0; $i<5; $i++)
    <div class="panel panel-default" style="padding:10px">
      <div class="row no-margin">
        <table class="tb-payment">
          <tbody>
            <tr>
                <td style="width: 5%;">
                  <input type="checkbox" class="iCheck">
                </td>
                <td style="width: 15%;">
                <label class="f-s-h color-ba">PA #</label><label class="color-bu">0001</label>
                </td>
                <td class="text-center" style="width: 15%;">
                  <div>
                    <label class="color-ba">PO #</label><label class="color-bu">11</label> 
                  </div>
                  <div>
                    <label class="color-ba">PO #</label><label class="color-bu">12</label>
                  </div>
                  <div>
                    <label class="color-ba">PO #</label><label class="color-bu">13</label>
                  </div>
                </td>
                <td class="text-right">
                  <label class="color-ba">100.000 USD </label>
                </td>
                <td style="vertical-align: middle;">
                  <div class="color-ba">
                    SAMPLES CO,.LTD.
                  </div>
                  <div class="f-s-h">
                    04/09/2017
                  </div>
                </td>
                <td style="vertical-align: middle;width: 15%;">
                  <div class="icon-ap">
                    <div class="icon">
                      <span class="fa-approve-all te"></span>
                    </div>
                    <div class="text">APPROVE</div>
                  </div>
                </td>
                <td style="vertical-align: middle;" class="text-right">
                      <button type="button" class="btn btn-ngin btn-default" style="width: 106px;">
                          <span class="btn-label" style="left: -22px;"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                      </button><br/>
                      <button type="button" class="btn btn-ngin btn-default" style="margin-top:15px">
                          <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                      </button>
                </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    @endfor
    <div class="panel panel-default" style="padding:10px">
      <div class="row no-margin">
        <table class="tb-payment">
          <tbody>
            <tr>
                <td style="width: 5%;">
                  <input type="checkbox" class="iCheck">
                </td>
                <td style="width: 15%;">
                <label class="f-s-h color-ba">PA #</label><label class="color-bu">0002</label>
                </td>
                <td class="text-center" style="width: 15%;">
                  <div>
                    <label class="color-ba">PO #</label><label class="color-bu">11</label> 
                  </div>
                </td>
                <td class="text-right">
                  <label class="color-ba">30.000 USD </label>
                </td>
                <td style="vertical-align: middle;">
                  <div class="color-ba">
                    SAMPLES CO,.LTD.
                  </div>
                  <div class="f-s-h">
                    04/09/2017
                  </div>
                </td>
                <td style="vertical-align: middle;width: 15%;">
                  <div class="icon-ap">
                    <div class="icon">
                      <i class="fa fa-exclamation-triangle color-wait"></i>
                    </div>
                    <div class="text">WAITING FOR APPROVE</div>
                  </div>
                </td>
                <td style="vertical-align: middle;" class="text-right">
                      <button type="button" class="btn btn-ngin btn-default" style="width: 106px;">
                          <span class="btn-label" style="left: -22px;"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                      </button><br/>
                      <button type="button" class="btn btn-ngin btn-default" style="margin-top:15px">
                          <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                      </button>
                </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="panel panel-default" style="padding:10px">
      <div class="row no-margin">
        <table class="tb-payment undo">
          <tbody>
            <tr>
                <td style="width: 5%;">
                  <input type="checkbox" class="iCheck">
                </td>
                <td style="width: 15%;">
                <label class="undo-tab1">PA #0002</label>
                </td>
                <td class="text-center" style="width: 15%;">
                  <div>
                    <label class="color-ba text-decoration">PO #</label><label class="color-bu"> 11</label> 
                  </div>
                </td>
                <td class="text-right">
                  
                </td>
                <td style="vertical-align: middle;">
                  <div class="color-ba text-decoration">
                    SAMPLES CO,.LTD.
                  </div>
                  <div class="f-s-h text-decoration">
                    04/09/2017
                  </div>
                </td>
                <td style="vertical-align: middle;width: 15%;">
                  
                </td>
                <td style="vertical-align: middle;" class="text-right">
                      <button type="button" class="btn btn-ngin btn-default" style="width: 106px;">
                          <span class="btn-label" style="left: -19px;"><i class="fa fa-undo info" aria-hidden="true"></i></span>Undo
                      </button><br/>
                      <button type="button" class="btn btn-ngin btn-default" style="margin-top:15px">
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

    <!-- <div class="row page-showing-pagination">
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
    </div> -->

</div>





@endsection

@section('top-right-sidebar')
    <div>Top Right Sidebar</div>
@endsection

@section('bottom-right-sidebar')
    <div>Bottom Right Sidebar</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/accounting/payment/index.js') }}"></script>
@endsection
