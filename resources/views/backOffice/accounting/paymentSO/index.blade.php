@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/accounting/payment-so/index.css')}}"/>
@endsection

@section('module_name', 'PAYMENT SO')
@section('page_name', 'INDEX')

@section('body')
<section class="payment x_content">

  <section class="section-header-index">
     <form class="form-inline form-header-index">
      <div class="flex-parent form-table">

        <div class="form-group select-all" style="padding-top:6px">
          <input type="checkbox" checked class="iCheck" id="selectall" name="selectall" style="top:-1px">
           <label for="selectall" class="iCheck-label">Select All</label>
        </div>

        <div class="form-group">
            <button type="button" class="btn btn-default-background" onclick="window.location='{{ route("backOffice.accounting.payment-so.create") }}'">
                <span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
            </button>
        </div>
        <div class="form-group button-2" style="margin-right:1em">
            <button type="button" class="btn btn-default-background">
                <span class="btn-label"><span class="fa-approve-all"></span></span><span class="btn-label-label">Approve All</span>
            </button>
        </div>
        
        <div class="form-group form-fixed-width flex-item">
          <div class="icon-addon addon-sm">
            <input  type="text" placeholder="SEARCH" class="form-control search" id="SEARCH" >
            <label for="search"  class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
          </div>
        </div>

        <div class="form-group">
          <button type="button" class="btn  btn-default-background">
            <span class="btn-label">
              <i class="fa fa-file-pdf-o pdf" aria-hidden="true"></i>
              </i>
            </span>
            <span class="btn-label-label">PDF</span>
          </button>
        </div>

        <div class="form-group">
          <button type="button" class="btn  btn-default-background">
            <span class="btn-label">
              <i class="fa fa-file-excel-o excel" aria-hidden="true"></i>
              </i>
            </span>
            <span class="btn-label-label">Excel</span>
          </button>
        </div>

        <div class="form-group">
          <button type="button"  class="btn  btn-default-background">
            <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span><span class="btn-label-label">Delete All</span>
          </button>
        </div>

        <!--
        <div class="form-group" style="margin:0 1em">
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

        <div class="form-group flex-parent column has-top-label">
          <label>FILTER</label>
          <div class="input-group date datetimepicker" >
            <input type="text" class="form-control" style="height: 30px" placeholder="-DELIVERY DATE-" />
            <span class="input-group-addon">
              <i class="fa fa-calendar" ></i>
            </span>
          </div>
        </div>
        -->
      </div>
    </form>
  </section>

  <div class="content">
    <div class="content-tabs" data-id="togglable-tabs">
      <ul class="nav nav-tabs nav-justified" id="payment-tabs">
        <li class="active">
          <a href="#pending-tab" data-toggle="tab">
            <i class="fa fa-circle-o-notch"></i><span>PENDING FOR APPROVAL</span>
          </a>
        </li>
        <li>
          <a href="#rejected-tab" data-toggle="tab">
            <i class="fa fa-times-circle-o"></i><span>REJECTED</span>
          </a>
        </li>
        <li>
          <a href="#verified-tab" data-toggle="tab">
            <i class="fa fa-check"></i><span>VERIFIED</span>
          </a>
        </li>
      </ul>
      <div class="tab-content scroll-2">
        
        <!-- TAB 1: pending-tab -->
        <div class="tab-pane active" id="pending-tab">
          <div class="tab-content">

            @for ($index=1; $index < 13; $index++)
            <div class="backlog-items" data-target="#pending-tab-{{ $index }}" data-toggle="collapse"> 
              <div class="check-column"><input type="checkbox" class="iCheck" name="" value="" /></div>
              <div class="so-column flex-1">
                <div class="so-number"><b class="text-black">SO #</b><b class="text-primary">{{$index}}</b></div>
                @if ($index==1)
                <div class="text-red">(CREDIT)</div>
                @elseif ($index==2)
                <div class="text-red">[CONSIGNMENT]</div>
                @endif
              </div>
              
              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="invoice-column">
                  <div class="small">TEXT INVOICE</div>
                  @if ($index==2)
                  <button type="button" class="btn btn-ngin btn-xs flex-parent" data-toggle="modal" data-target="#modal-1">
                    <span class="btn-label btn-xs"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>GENERATE TAX INV.
                  </button>
                  @else
                  <div class="value text-primary"><b>6102-T-000{{ $index+1 }}</b></div>
                  @endif
                </div>
              </div>

              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="sales-column">
                  <div class="small">SALES</div>
                  <div class="value text-black">POP</div>
                </div>
              </div>

              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="company-column">
                  <div class="small">SAMPLES CO.,LTD.</div>
                  <div class="value">04/09/2017</div>
                </div>
              </div>

              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="amount-column">
                  <div class="small">AMOUNT</div>
                  <div class="value text-red">65,000.00</div>
                </div>
              </div>
            </div> <!-- /END .backlog-items -->
            <div class="collapse payment-detail" id="pending-tab-{{ $index }}">
              <div class="flex-container wrap">
                <div class="table-responsive">
                  <table class="table no-border">
                    <thead>
                      <tr class="heading">
                        <th>
                        <th class="text-center">RECIEPT #</th>
                        <th class="text-center">DOCUMENT DATE</th>
                        <th class="text-center">PAID AMOUNT</th>
                        <th class="button-column"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @for($i=1;$i<=3;$i++)
                      <tr>
                        <td><span class="icon">
                          @if ($i==3)
                          <i class="fa fa-exclamation-triangle" style="color:#d9e021"></i>&nbsp;WAITING FOR APPROVAL
                          @else
                          <i class="fa-approve-all"></i>&nbsp;APPROVED
                          @endif
                        </span></td>
                        <td class="text-primary text-center">{{$i}}</td>
                        <td class="text-black text-center">0{{$i}}/02/2018</td>
                        <td class="text-black text-center">30,000 THB</td>
                        <td>
                          <button type="button" class="btn btn-ngin btn-default ">
                            <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                          </button>  
                          <button type="button" class="btn btn-ngin btn-default ">
                            <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                          </button>
                        </td>
                      </tr>
                      @endfor
                    </tbody>
                  </table>
                </div>
              </div>
            </div> <!-- /END .payment-detail -->
            @endfor
          </div>
        </div>
        <!-- END Tab1: pending-tab -->

        <!-- TAB 2: rejected-tab -->
        <div class="tab-pane" id="rejected-tab">
          <div class="tab-content">

            @for ($index=1; $index < 13; $index++)
            <div class="backlog-items" data-target="#pending-tab-{{ $index }}" data-toggle="collapse"> 
              <div class="check-column"><input type="checkbox" class="iCheck" name="" value="" /></div>
              <div class="so-column flex-1">
                <div class="so-number"><b class="text-black">SO #</b><b class="text-primary">{{$index}}</b></div>
                @if ($index==1)
                <div class="text-red">(CREDIT)</div>
                @elseif ($index==2)
                <div class="text-red">[CONSIGNMENT]</div>
                @endif
              </div>
              
              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="invoice-column">
                  <div class="small">TEXT INVOICE</div>
                  @if ($index==2)
                  <button type="button" class="btn btn-ngin btn-xs flex-parent" data-toggle="modal" data-target="#modal-1">
                    <span class="btn-label btn-xs"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>GENERATE TAX INV.
                  </button>
                  @else
                  <div class="value text-primary"><b>6102-T-000{{ $index+1 }}</b></div>
                  @endif
                </div>
              </div>

              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="sales-column">
                  <div class="small">SALES</div>
                  <div class="value text-black">POP</div>
                </div>
              </div>

              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="company-column">
                  <div class="small">SAMPLES CO.,LTD.</div>
                  <div class="value">04/09/2017</div>
                </div>
              </div>

              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="amount-column">
                  <div class="small">AMOUNT</div>
                  <div class="value text-red">65,000.00</div>
                </div>
              </div>
            </div> <!-- /END .backlog-items -->
            <div class="collapse payment-detail" id="pending-tab-{{ $index }}">
              <div class="flex-container wrap">
                <div class="table-responsive">
                  <table class="table no-border">
                    <thead>
                      <tr class="heading">
                        <th>
                        <th class="text-center">RECIEPT #</th>
                        <th class="text-center">DOCUMENT DATE</th>
                        <th class="text-center">PAID AMOUNT</th>
                        <th class="button-column"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @for($i=1;$i<=3;$i++)
                      <tr>
                        <td><span class="icon">
                          @if ($i==3)
                          <i class="fa fa-exclamation-triangle" style="color:#d9e021"></i>&nbsp;WAITING FOR APPROVAL
                          @else
                          <i class="fa-approve-all"></i>&nbsp;APPROVED
                          @endif
                        </span></td>
                        <td class="text-primary text-center">{{$i}}</td>
                        <td class="text-black text-center">0{{$i}}/02/2018</td>
                        <td class="text-black text-center">30,000 THB</td>
                        <td>
                          <button type="button" class="btn btn-ngin btn-default ">
                            <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                          </button>  
                          <button type="button" class="btn btn-ngin btn-default ">
                            <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                          </button>
                        </td>
                      </tr>
                      @endfor
                    </tbody>
                  </table>
                </div>
              </div>
            </div> <!-- /END .payment-detail -->
            @endfor
          </div>
        </div>
        <!-- END Tab2: rejected-tab -->

        <!-- TAB 3: verified-tab -->
        <div class="tab-pane" id="verified-tab">
          <div class="tab-content">

            @for ($index=1; $index < 13; $index++)
            <div class="backlog-items" data-target="#pending-tab-{{ $index }}" data-toggle="collapse"> 
              <div class="check-column"><input type="checkbox" class="iCheck" name="" value="" /></div>
              <div class="so-column flex-1">
                <div class="so-number"><b class="text-black">SO #</b><b class="text-primary">{{$index}}</b></div>
                @if ($index==1)
                <div class="text-red">(CREDIT)</div>
                @elseif ($index==2)
                <div class="text-red">[CONSIGNMENT]</div>
                @endif
              </div>
              
              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="invoice-column">
                  <div class="small">TEXT INVOICE</div>
                  @if ($index==2)
                  <button type="button" class="btn btn-ngin btn-xs flex-parent" data-toggle="modal" data-target="#modal-1">
                    <span class="btn-label btn-xs"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>GENERATE TAX INV.
                  </button>
                  @else
                  <div class="value text-primary"><b>6102-T-000{{ $index+1 }}</b></div>
                  @endif
                </div>
              </div>

              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="sales-column">
                  <div class="small">SALES</div>
                  <div class="value text-black">POP</div>
                </div>
              </div>

              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="company-column">
                  <div class="small">SAMPLES CO.,LTD.</div>
                  <div class="value">04/09/2017</div>
                </div>
              </div>

              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="amount-column">
                  <div class="small">AMOUNT</div>
                  <div class="value text-red">65,000.00</div>
                </div>
              </div>
            </div> <!-- /END .backlog-items -->
            <div class="collapse payment-detail" id="pending-tab-{{ $index }}">
              <div class="flex-container wrap">
                <div class="table-responsive">
                  <table class="table no-border">
                    <thead>
                      <tr class="heading">
                        <th>
                        <th class="text-center">RECIEPT #</th>
                        <th class="text-center">DOCUMENT DATE</th>
                        <th class="text-center">PAID AMOUNT</th>
                        <th class="button-column"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @for($i=1;$i<=3;$i++)
                      <tr>
                        <td><span class="icon">
                          @if ($i==3)
                          <i class="fa fa-exclamation-triangle" style="color:#d9e021"></i>&nbsp;WAITING FOR APPROVAL
                          @else
                          <i class="fa-approve-all"></i>&nbsp;APPROVED
                          @endif
                        </span></td>
                        <td class="text-primary text-center">{{$i}}</td>
                        <td class="text-black text-center">0{{$i}}/02/2018</td>
                        <td class="text-black text-center">30,000 THB</td>
                        <td>
                          <button type="button" class="btn btn-ngin btn-default ">
                            <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                          </button>  
                          <button type="button" class="btn btn-ngin btn-default ">
                            <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                          </button>
                        </td>
                      </tr>
                      @endfor
                    </tbody>
                  </table>
                </div>
              </div>
            </div> <!-- /END .payment-detail -->
            @endfor
          </div>
        </div>
        <!-- END Tab3: verified-tab -->
      </div>
    </div>
  </div>

  <div class="row page-showing-pagination">
    <div class="col-xs-4 col-md-6 showing">
      Showing 1-10 of 100
    </div>
    <div class="col-xs-8 col-md-6 page-pagination">
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
            <a href="#" aria-label="Next">
              Next
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</section>

<!-- Modal -->
<div id="modal-1" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-file-text-o" aria-hidden="true"></i>PAYMENT PO</h4>
      </div>
      <div class="modal-body scroll-2" style="height:70vh">                   
        <table class="table ngin-table">
          <thead>
            <tr>
              <th class="check-column"></th>
              <th class="text-left">PO #</th>
              <th>SUPPLIER</th>
              <th>PAID AMOUNT</th>
              <th>DUE DATE</th>
              <th>STATUS</th>
            </tr>
          </thead>
          <tbody>
            @for($index=0; $index < 7; $index++)
            <tr @if(in_array($index, [4,5])) class="disable-row" @endif>
              <td><input type="checkbox" class="iCheck" /></td>
              <td class="text-left">0001</td>
              <td>Sony Interactive Co., Ltd</td>
              <td>60,000.00 / 100,000.00</td>
              <td>01/01/2018</td>
              @if (!in_array($index, [4,5]))
              @if ($index < 2)
              <td><span class="text-red">OVERDUE</span></td>
              @else
              <td><span class="text-primary">NEW</span></td>
              @endif
              @endif
            </tr>
            @endfor
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#modal-1">
          <span class="btn-label"><i class="fa fa-file-text-o ngin-green" aria-hidden="true"></i></span>PAY THIS POs</button>
      </div>
    </div>      
  </div>
</div>
<!-- End Modal -->
@endsection

@section('top-right-sidebar')
<div class="x_title">
    <span class="left">Top Product เดือนที่แล้ว</span>
    <span class="right"></span>
</div>
<div class="x_content faq-wrapper">
  <ul class="list-unstyled  scroll-view">
    <li class="media event">
      <a class="pull-left border-aero">
        <img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
      </a>
      <div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
        <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>

      </div>
    </li>
  </ul>
</div>
@endsection

@section('bottom-right-sidebar')
<div class="x_title">
    <span class="left">NEW RELEASES</span>
</div>
<div class="x_content">
  <ul class="list-unstyled  scroll-view">
    <li class="media event">
      <a class="pull-left border-aero">
        <img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
      </a>
      <div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
        <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
      </div>
    </li>
  </ul>
</div>
@endsection

@section('script')
  <script src="{{ asset('js/back-office/accounting/payment-so/index.js') }}"></script>
@endsection
