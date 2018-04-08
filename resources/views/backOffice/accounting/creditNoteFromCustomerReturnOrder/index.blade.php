{{-- 
    @author: กีรติพร ลีลาวันทนพันธุ์
    @phone: 089-185-9078
    @email: bookhunter99@gmail.com
--}}

@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('module_name', 'ACCOUNTING > CREDIT NOTE FROM CRO')
@section('page_name', 'INDEX')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/accounting/credit-note-from-customer-return-order/index.css')}}"/>
@endsection
@section('body')
<div class="x_content">
    <section class="section-header-index">
        <form class="form-inline form-header-index">
            <div class="row">
                <table style="width: 100%">
                <tr>
                <td class="col-1" style="min-width: inherit;width: 194px;">
                    <div class="col-1-content" >
                        <div class="form-group select-all">
                            <input type="checkbox"  checked class="iCheck" id="selectall" name="selectall" > 
                            <label for="selectall" class="iCheck-label" >Select All</label>
                        </div>

                        <div class="form-group button-2">
                            <button type="button"    class="btn btn-default-background">
                                <span class="btn-label"><span class="fa-approve-all"></span></span><span class="btn-label-label">Approve All</span>
                            </button>
                        </div>
                    </div>
                </td>
                <td class="col-2" style="width: inherit;">
                    <div class="" >
                        <div class="form-group form-fixed-width" >
                            <div class="icon-addon addon-sm">
                                <input  type="text" placeholder="SEARCH" class="form-control search" id="SEARCH" >
                                <label for="search"  class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="col-3" style="min-width: inherit;width: 260px;">
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
                    <button type="button"  class="btn  btn-default-background">
                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span><span class="btn-label-label">Delete All</span>
                        </button>
                    </div>
                    <div class="form-group">
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
                    </div>
                </div>
            </td>
            </tr>
            </table>
            </div>
        </form>
    </section>
    
    <section class="panel-body panel-content scroll-2" style="padding: 0px 10px 0px 10px!important;height: calc(100vh - 185px);">
        <div class="row">
            <div class="col-xs-12 content scroll-2" style="    padding-right: 0px;padding-left: 0px;">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<!--Start Item-->
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading1">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
									<div class="bk-group-1" >
										<table class="bk-table" border="0">
											<tbody>
												<tr>
													<td colspan="2">
														<div class="bk-row">
														  <div class="bk-padding-right-5">
															<input type="checkbox" class="iCheck" name="selectall" >
														  </div>
														  <div class="bk-font-s0 bk-font-bold bk-padding-right-5">CRO #</div>
														  <div class="bk-blue-light bk-font-s4">00001</div>
														</div>
													</td>
													<td colspan="2">
													  <div class="bk-row">
														<div class="bk-font-s8  bk-font-bold bk-padding-right-5">DOCUMENT DATE:</div>
														<div class="bk-black-light0 bk-font-s8">01/01/2018</div>
													  </div>
													</td>
													<td colspan="2">
													  <div class="bk-row">
													   <div class="bk-font-s8 bk-font-bold bk-padding-right-25">AMOUNT</div>
													</td>
												</tr>
												<tr>
													<td colspan="2" style="padding-left: 30px;">
													  <div>
														  <span class="icon bk-span-icon">
															<i class="fa-approve-all"></i>
															<span>APPROVED</span>
														  </span>
													  </div>
													</td>
													<td colspan="2">
													  <div class="bk-row">
														<div class="bk-font-s3 bk-font-bold bk-padding-right-5">CUSTOMER:</div>
														<div class="bk-font-s3 bk-black-light1">NASZ Project Co,. Ltd</div>
													  </div>
													</td>
													<td colspan="2">
													  <div>
														  <div class="bk-font-s3 bk-black-light1">100,000.00 THB</div>
													  </div>
													</td>
												</tr>
												<tr>
													<td colspan="6">
														<div class="bk-row">
															<div>
															  <button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#bk-modal">
																<span class="btn-label">
																  <i class="fa fa-file" aria-hidden="true" style="color: #7fb2f0;"></i>
																</span>View
															  </button>
															  <button type="button" class="btn btn-ngin btn-default">
																<span class="btn-label">
																  <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
																</span>Edit
															  </button>
															  <button type="button" class="btn btn-ngin btn-default">
																<span class="btn-label">
																  <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
																</span>Delete
															  </button>    
															  <button type="button" class="btn btn-ngin btn-default">
																<span class="btn-label">
																  <i class="fa fa-files-o" aria-hidden="true"></i>
																</span>Duplicate
															  </button>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>                                           
								</a>
							</h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
							<div class="panel-body">
								<div class="bk-group-2" >
								  <table class="bk-table-hiso" border="0">
									<tbody>
										<tr>
											<td>ITEM NAME</td>
											<td>TAX UNV #</td>
											<td>ORDERED QTY</td>
											<td>CREDITED QTY</td>
											<td>CREDIT NOTE AMOUNT | UNIT</td>
											<td>AMOUNT</td>
										</tr>
										<tr>
											<td>PS4-G Lorem ipsum lorem ipsu. (Unit)</td>
											<td>0001</td>
											<td>10</td>
											<td>1</td>
											<td>9.00</td>
											<td>9.00</td>
										</tr>
										<tr>
											<td>PS4-G Lorem ipsum lorem ipsu. (Unit)</td>
											<td>0002</td>
											<td>1</td>
											<td>2</td>
											<td>10,000.00</td>
											<td>20,000.00</td>
										</tr>
										<tr>
											<td>PS4-G Lorem ipsum lorem ipsu. (Unit)</td>
											<td>0003</td>
											<td>1</td>
											<td>1</td>
											<td>20,000.00</td>
											<td>20,000.00</td>
										</tr>
										<tr>
											<td>PS4-G Lorem ipsum lorem ipsu. (Unit)</td>
											<td>0004</td>
											<td>1</td>
											<td>4</td>
											<td>5,000.00</td>
											<td>20,000.00</td>
										</tr>
										<tr>
											<td>PS4-G Lorem ipsum lorem ipsu. (Unit)</td>
											<td>0005</td>
											<td>1</td>
											<td>1</td>
											<td>39,991.00</td>
											<td>39,991.00</td>
										</tr>
									</tbody>
								  </table>
								</div>
							</div>
						</div>
					</div>
					<!--End item-->
					<!--Start Item-->
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading2">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
									<div class="bk-group-1" >
										<table class="bk-table" border="0">
											<tbody>
												<tr>
													<td colspan="2">
														<div class="bk-row">
														  <div class="bk-padding-right-5">
															<input type="checkbox" class="iCheck" name="selectall" >
														  </div>
														  <div class="bk-font-s0 bk-font-bold bk-padding-right-5">CRO #</div>
														  <div class="bk-blue-light bk-font-s4">00001</div>
														</div>
													</td>
													<td colspan="2">
													  <div class="bk-row">
														<div class="bk-font-s8  bk-font-bold bk-padding-right-5">DOCUMENT DATE:</div>
														<div class="bk-black-light0 bk-font-s8">01/01/2018</div>
													  </div>
													</td>
													<td colspan="2">
													  <div class="bk-row">
													   <div class="bk-font-s8 bk-font-bold bk-padding-right-25">AMOUNT</div>
													</td>
												</tr>
												<tr>
													<td colspan="2" style="padding-left: 30px;">
													  <div>
														  <span class="icon bk-span-icon">
															<i class="fa fa-exclamation-triangle" style="color:#f7931c;"></i>
															<span>WAITING FOR APPROVE</span>
														  </span>
													  </div>
													</td>
													<td colspan="2">
													  <div class="bk-row">
														<div class="bk-font-s3 bk-font-bold bk-padding-right-5">CUSTOMER:</div>
														<div class="bk-font-s3 bk-black-light1">NASZ Project Co,. Ltd</div>
													  </div>
													</td>
													<td colspan="2">
													  <div>
														  <div class="bk-font-s3 bk-black-light1">100,000.00 THB</div>
													  </div>
													</td>
												</tr>
												<tr>
													<td colspan="6">
														<div class="bk-row">
															<div>
															  <button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#bk-modal">
																<span class="btn-label">
																  <i class="fa fa-file" aria-hidden="true" style="color: #7fb2f0;"></i>
																</span>View
															  </button>
															  <button type="button" class="btn btn-ngin btn-default">
																<span class="btn-label">
																  <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
																</span>Edit
															  </button>
															  <button type="button" class="btn btn-ngin btn-default">
																<span class="btn-label">
																  <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
																</span>Delete
															  </button>    
															  <button type="button" class="btn btn-ngin btn-default">
																<span class="btn-label">
																  <i class="fa fa-files-o" aria-hidden="true"></i>
																</span>Duplicate
															  </button>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>                                           
								</a>
							</h4>
						</div>
						<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
							<div class="panel-body">
								<div class="bk-group-2" >
								  <table class="bk-table-hiso" border="0">
									<tbody>
										<tr>
											<td>ITEM NAME</td>
											<td>TAX UNV #</td>
											<td>ORDERED QTY</td>
											<td>CREDITED QTY</td>
											<td>CREDIT NOTE AMOUNT | UNIT</td>
											<td>AMOUNT</td>
										</tr>
										<tr>
											<td>PS4-G Lorem ipsum lorem ipsu. (Unit)</td>
											<td>0001</td>
											<td>10</td>
											<td>1</td>
											<td>9.00</td>
											<td>9.00</td>
										</tr>
										<tr>
											<td>PS4-G Lorem ipsum lorem ipsu. (Unit)</td>
											<td>0002</td>
											<td>1</td>
											<td>2</td>
											<td>10,000.00</td>
											<td>20,000.00</td>
										</tr>
										<tr>
											<td>PS4-G Lorem ipsum lorem ipsu. (Unit)</td>
											<td>0003</td>
											<td>1</td>
											<td>1</td>
											<td>20,000.00</td>
											<td>20,000.00</td>
										</tr>
										<tr>
											<td>PS4-G Lorem ipsum lorem ipsu. (Unit)</td>
											<td>0004</td>
											<td>1</td>
											<td>4</td>
											<td>5,000.00</td>
											<td>20,000.00</td>
										</tr>
										<tr>
											<td>PS4-G Lorem ipsum lorem ipsu. (Unit)</td>
											<td>0005</td>
											<td>1</td>
											<td>1</td>
											<td>39,991.00</td>
											<td>39,991.00</td>
										</tr>
									</tbody>
								  </table>
								</div>
							</div>
						</div>
					</div>
					<!--End item-->
					<!--Start Item-->
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading3">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
									<div class="bk-group-1" >
										<table class="bk-table" border="0">
											<tbody>
												<tr>
													<td colspan="2">
														<div class="bk-row">
														  <div class="bk-padding-right-5">
															<input type="checkbox" class="iCheck" name="selectall" >
														  </div>
														  <div class="bk-font-s0 bk-font-bold bk-padding-right-5">CRO #</div>
														  <div class="bk-blue-light bk-font-s4">00001</div>
														</div>
													</td>
													<td colspan="2">
													  <div class="bk-row">
														<div class="bk-font-s8  bk-font-bold bk-padding-right-5">DOCUMENT DATE:</div>
														<div class="bk-black-light0 bk-font-s8">01/01/2018</div>
													  </div>
													</td>
													<td colspan="2">
													  <div class="bk-row">
													   <div class="bk-font-s8 bk-font-bold bk-padding-right-25">AMOUNT</div>
													</td>
												</tr>
												<tr>
													<td colspan="2" style="padding-left: 30px;">
													  <div>
														  <span class="icon bk-span-icon">
															<i class="fa-approve-all"></i>
															<span>APPROVED</span>
														  </span>
													  </div>
													</td>
													<td colspan="2">
													  <div class="bk-row">
														<div class="bk-font-s3 bk-font-bold bk-padding-right-5">CUSTOMER:</div>
														<div class="bk-font-s3 bk-black-light1">NASZ Project Co,. Ltd</div>
													  </div>
													</td>
													<td colspan="2">
													  <div>
														  <div class="bk-font-s3 bk-black-light1">100,000.00 THB</div>
													  </div>
													</td>
												</tr>
												<tr>
													<td colspan="6">
														<div class="bk-row">
															<div>
															  <button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#bk-modal">
																<span class="btn-label">
																  <i class="fa fa-file" aria-hidden="true" style="color: #7fb2f0;"></i>
																</span>View
															  </button>
															  <button type="button" class="btn btn-ngin btn-default">
																<span class="btn-label">
																  <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
																</span>Edit
															  </button>
															  <button type="button" class="btn btn-ngin btn-default">
																<span class="btn-label">
																  <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
																</span>Delete
															  </button>    
															  <button type="button" class="btn btn-ngin btn-default">
																<span class="btn-label">
																  <i class="fa fa-files-o" aria-hidden="true"></i>
																</span>Duplicate
															  </button>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>                                           
								</a>
							</h4>
						</div>
						<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
							<div class="panel-body">
								<div class="bk-group-2" >
								  <table class="bk-table-hiso" border="0">
									<tbody>
										<tr>
											<td>ITEM NAME</td>
											<td>TAX UNV #</td>
											<td>ORDERED QTY</td>
											<td>CREDITED QTY</td>
											<td>CREDIT NOTE AMOUNT | UNIT</td>
											<td>AMOUNT</td>
										</tr>
										<tr>
											<td>PS4-G Lorem ipsum lorem ipsu. (Unit)</td>
											<td>0001</td>
											<td>10</td>
											<td>1</td>
											<td>9.00</td>
											<td>9.00</td>
										</tr>
										<tr>
											<td>PS4-G Lorem ipsum lorem ipsu. (Unit)</td>
											<td>0002</td>
											<td>1</td>
											<td>2</td>
											<td>10,000.00</td>
											<td>20,000.00</td>
										</tr>
										<tr>
											<td>PS4-G Lorem ipsum lorem ipsu. (Unit)</td>
											<td>0003</td>
											<td>1</td>
											<td>1</td>
											<td>20,000.00</td>
											<td>20,000.00</td>
										</tr>
										<tr>
											<td>PS4-G Lorem ipsum lorem ipsu. (Unit)</td>
											<td>0004</td>
											<td>1</td>
											<td>4</td>
											<td>5,000.00</td>
											<td>20,000.00</td>
										</tr>
										<tr>
											<td>PS4-G Lorem ipsum lorem ipsu. (Unit)</td>
											<td>0005</td>
											<td>1</td>
											<td>1</td>
											<td>39,991.00</td>
											<td>39,991.00</td>
										</tr>
									</tbody>
								  </table>
								</div>
							</div>
						</div>
					</div>
					<!--End item-->
					<!--Start Item-->
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading4">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
									<div class="bk-group-1" >
										<table class="bk-table" border="0">
											<tbody>
												<tr>
													<td colspan="2">
														<div class="bk-row">
														  <div class="bk-padding-right-5">
															<input type="checkbox" class="iCheck" name="selectall" >
														  </div>
														  <div class="bk-font-s0 bk-font-bold bk-padding-right-5">CRO #</div>
														  <div class="bk-blue-light bk-font-s4">00001</div>
														</div>
													</td>
													<td colspan="2">
													  <div class="bk-row">
														<div class="bk-font-s8  bk-font-bold bk-padding-right-5">DOCUMENT DATE:</div>
														<div class="bk-black-light0 bk-font-s8">01/01/2018</div>
													  </div>
													</td>
													<td colspan="2">
													  <div class="bk-row">
													   <div class="bk-font-s8 bk-font-bold bk-padding-right-25">AMOUNT</div>
													</td>
												</tr>
												<tr>
													<td colspan="2" style="padding-left: 30px;">
													  <div>
														  <span class="icon bk-span-icon">
															<i class="text-danger fa fa-times-circle-o"></i>
															<span>REJECTED</span>
														  </span>
													  </div>
													</td>
													<td colspan="2">
													  <div class="bk-row">
														<div class="bk-font-s3 bk-font-bold bk-padding-right-5">CUSTOMER:</div>
														<div class="bk-font-s3 bk-black-light1">NASZ Project Co,. Ltd</div>
													  </div>
													</td>
													<td colspan="2">
													  <div>
														  <div class="bk-font-s3 bk-black-light1">100,000.00 THB</div>
													  </div>
													</td>
												</tr>
												<tr>
													<td colspan="6">
														<div class="bk-row">
															<div>
															  <button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#bk-modal">
																<span class="btn-label">
																  <i class="fa fa-file" aria-hidden="true" style="color: #7fb2f0;"></i>
																</span>View
															  </button>
															  <button type="button" class="btn btn-ngin btn-default">
																<span class="btn-label">
																  <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
																</span>Edit
															  </button>
															  <button type="button" class="btn btn-ngin btn-default">
																<span class="btn-label">
																  <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
																</span>Delete
															  </button>    
															  <button type="button" class="btn btn-ngin btn-default">
																<span class="btn-label">
																  <i class="fa fa-files-o" aria-hidden="true"></i>
																</span>Duplicate
															  </button>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>                                           
								</a>
							</h4>
						</div>
						<div id="collapse4" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading4">
							<div class="panel-body">
								<div class="bk-group-2" >
								  <table class="bk-table-hiso" border="0">
									<tbody>
										<tr>
											<td>ITEM NAME</td>
											<td>TAX UNV #</td>
											<td>ORDERED QTY</td>
											<td>CREDITED QTY</td>
											<td>CREDIT NOTE AMOUNT | UNIT</td>
											<td>AMOUNT</td>
										</tr>
										<tr>
											<td>PS4-G Lorem ipsum lorem ipsu. (Unit)</td>
											<td>0001</td>
											<td>10</td>
											<td>1</td>
											<td>9.00</td>
											<td>9.00</td>
										</tr>
										<tr>
											<td>PS4-G Lorem ipsum lorem ipsu. (Unit)</td>
											<td>0002</td>
											<td>1</td>
											<td>2</td>
											<td>10,000.00</td>
											<td>20,000.00</td>
										</tr>
										<tr>
											<td>PS4-G Lorem ipsum lorem ipsu. (Unit)</td>
											<td>0003</td>
											<td>1</td>
											<td>1</td>
											<td>20,000.00</td>
											<td>20,000.00</td>
										</tr>
										<tr>
											<td>PS4-G Lorem ipsum lorem ipsu. (Unit)</td>
											<td>0004</td>
											<td>1</td>
											<td>4</td>
											<td>5,000.00</td>
											<td>20,000.00</td>
										</tr>
										<tr>
											<td>PS4-G Lorem ipsum lorem ipsu. (Unit)</td>
											<td>0005</td>
											<td>1</td>
											<td>1</td>
											<td>39,991.00</td>
											<td>39,991.00</td>
										</tr>
									</tbody>
								  </table>
								</div>
							</div>
						</div>
					</div>
					<!--End item-->
				</div>
            </div>
        </div>					
    </section>
    
    <div class="row page-showing-pagination">
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
    
    
    <div id="bk-modal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="fa fa-file-text-o" aria-hidden="true"></i>SELECT CRO</h4>
            </div>
            <div class="bk-group-3-2">
                <div class=" bk-group-3">
                    <table class="bk-table" border="0">
                      <thead>
                        <tr>
                          <th colspan="1">CRO #</th>
                          <th colspan="2">CUSTOMER</th>
                          <th colspan="3">TAX UNV. NUMBER</th>
                          <th colspan="2">CREDIT AMOUNT (UNCL. VAT)</th>
                        </tr>
                      </thead>
                    </table>
                    <div style="height:55vh; margin-right: -20px;" class="modal-body  scroll-2">  
                        <table class="bk-table" border="0">
                          <tbody>              
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" checked class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" " class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck" class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck"  class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span>
                                    	<input type="radio" name="iCheck"  class="iCheck">
                                    </span>
                                    <span>0001</span>
                                  </div>
                                </td>
                                <td colspan="2">AdiwIT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>,<span>610-T-002</span>,<span>610-T-003</span>
                                </td>
                                <td>444.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                            <tr>
                                <td>
                                  <div>
                                    <span><input type="radio" name="iCheck" class="iCheck"></span>
                                    <span>0002</span>
                                  </div>
                                </td>
                                <td colspan="2">Banana IT Co., Ltd</td>
                                <td colspan="3">
                                    <span>610-T-001</span>
                                </td>
                                <td>44.44</td>  
                                <td>THB</td> 
                            </tr>
                          </tbody>
                        </table>
                    </div>
                    <table class="bk-table">
                        <tfoot>
                            <tr>
                                <td colspan="8"></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            <!--end group-3-->
            </div>
            <!--end group 3-2-->
            <div class="modal-footer">
                <button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#serialModal">
                <span class="btn-label"><i class="fa fa-thumbs-o-up ngin-green" aria-hidden="true"></i></span>GENERATE CREDIT NOTE</button>
            </div>
        </div>      
      </div>
    </div>

</div>
@endsection

@section('top-right-sidebar')
    <div>Top Right Sidebar</div>
@endsection

@section('bottom-right-sidebar')
    <div>Bottom Right Sidebar</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/accounting/credit-note-from-customer-return-order/index.js') }}"></script>
@endsection