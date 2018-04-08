@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/logistic/shipping/index.css')}}"/>
@endsection

@section('module_name', 'DELIVERY')
@section('page_name', 'INDEX')

@section('body')
<section class="shipping x_content">

  <section class="section-header-index">
     <form class="form-inline form-header-index">
      <div class="form-table flex-parent">

        <div class="form-group select-all" style="padding-top:6px">
          <input type="checkbox" checked class="iCheck" id="selectall" name="selectall" style="top:-1px">
           <label for="selectall" class="iCheck-label">Select All</label>
        </div>

        <div class="form-group" style="margin-right:1em">
          <button type="button" class="btn btn-default-background">
            <span class="btn-label" style="color:#d9e021"><i class="fa fa-truck" aria-hidden="true"></i></span ><span class="btn-label-label">SHIP SELECTED</span>
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
          <!--<label>FILTER</label>-->
          <div class="input-group date datetimepicker" >
            <input type="text" class="form-control" style="height: 30px" placeholder="-DELIVERY DATE-" />
            <span class="input-group-addon">
              <i class="fa fa-calendar" ></i>
            </span>
          </div>
        </div>
      </div>
    </form>
  </section>

  <div class="content">
    <div class="content-tabs" data-id="togglable-tabs">
      <ul class="nav nav-tabs" id="shipping-tabs">
        <li class="active">
          <a href="#ready-tab" data-toggle="tab">
            <i class="fa fa-money"></i><span>SO READY<br>TO SEND</span>
          </a>
        </li>
        <li>
          <a href="#withdraw-tab" data-toggle="tab">
            <i class="fa fa-caret-square-o-up"></i><span>PRODUCT<br>WITHDRAWAL</span>
          </a>
        </li>
        <li>
          <a href="#borrow-tab" data-toggle="tab">
            <i class="fa fa-american-sign-language-interpreting"></i><span>PRODUCT<br>BORROW</span>
          </a>
        </li>
        <li>
          <a href="#return-tab" data-toggle="tab">
            <i class="fa fa-level-down"></i><span>CUSTOMER<br>RETURN ORDER</span>
          </a>
        </li>
        <li>
          <a href="#claim-tab" data-toggle="tab">
            <i class="fa fa-undo"></i><span>CLAIM</span>
          </a>
        </li>
        <li>
          <a href="#partial-tab" data-toggle="tab">
            <i class="fa fa-hourglass-end"></i><span>PARTIAL</span>
          </a>
        </li>
        <li>
          <a href="#completed-tab" data-toggle="tab">
            <i class="fa fa-check"></i><span>COMPLETED</span>
          </a>
        </li>
      </ul>
      <div class="tab-content scroll-2">
        
        <!-- TAB 1: ready-tab -->
        <div class="tab-pane active" id="ready-tab" role="tablist" aria-multiselectable="true">
          <div class="tab-content">

            @for ($index=1; $index < 15; $index++)
            <div class="backlog-items" role="tab" data-target="#ready-tab-{{ $index }}" data-toggle="collapse" data-parent="#ready-tab">
              <div class="check-column"><input type="checkbox" class="iCheck" name="" value=""></div>
              <div class="item-name">
                <div class="info">
                  <div class="flex-parent">
                    <span class="code">SO #<b class="text-primary">9999</b></span>
                    <span class="mr-2">04/09/2017</span>
                    @if (rand(1,2) == 1)
                    <div class="approve-status"><i class="fa-approve-all"></i> APPROVE</div>
                    @elseif (rand(1,2) == 1)
                    <div class="approve-status"><i class="fa-exclamation"></i> WAITING FOR APPROVE</div>
                    @else
                    <div class="approve-status"><i class="text-danger fa fa-times-circle-o"></i> REJECTED</div>
                    @endif
                  </div>
                  <p>Sample Company</p>
                </div>
              </div>
              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="ordered">
                  <p>ORDERED</p>
                  <span class="value">1000</span>
                </div>
              </div>

              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="received">
                  <p>RECEIVED</p>
                  <span class="value">350</span>
                </div>
              </div>

              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="backlog">
                  <p>BACKLOG</p>
                  <span class="value text-red">(650)</span>
                </div>
              </div>
              <div class="completed">
                <a href="#" class="btn btn-ngin btn-default">
                  <span class="btn-label"><i class="fa fa-truck" aria-hidden="true"></i></span>
                  SHIPPING THIS SO
                </a>
              </div>
            </div> <!-- /END .backlog-items -->
            <div class="collapse shipping-detail" id="ready-tab-{{ $index }}" >
              <div class="flex-container wrap">
                <div class="flex-container flex-column">
                  <span class="chart" data-percent="35" data-bar-color="#61c21d">
                    <span>350/1000</span>
                  </span>
                  <p class="chart-total">Total</p>
                </div>
                <div class="table-responsive">
                  <table class="table ngin-table">
                    <thead>
                      <tr>
                        <th>SHIPPING #</th>
                        <th>AMOUNT</th>
                        <th>SHIPPING DATE</th>
                        <th>RECEIVED NAME</th>
                      </tr>
                    </thead>
                    <tbody>
                      @for ($i=0; $i<8; $i++)
                      <tr>
                        <td class="text-primary">8888</td>
                        <td>50</td>
                        <td>02/09/2017</td>
                        <td>POP</td>
                      </tr>
                      @endfor
                    </tbody>
                  </table>
                </div>
              </div>
            </div> <!-- /END .shipping-detail -->
            @endfor
          </div>
        </div>
        <!-- END Tab1: ready tab -->

        <!-- TAB 2: withdraw-tab -->
        <div class="tab-pane" id="withdraw-tab">
          <div class="tab-content">

            @for ($index=1; $index < 15; $index++)
            <div class="backlog-items" data-target="#withdraw-tab-{{ $index }}" data-toggle="collapse">
              <div class="check-column"><input type="checkbox" class="iCheck" name="" value=""></div>
              <div class="item-name">
                <div class="info">
                  <p><span class="code">SO #<b class="text-primary">9999</b></span><span>04/09/2017</span></p>
                  <p>Sample Company</p>
                </div>
              </div>
              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="ordered">
                  <p>ORDERED</p>
                  <span class="value">1000</span>
                </div>
              </div>

              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="received">
                  <p>RECEIVED</p>
                  <span class="value">350</span>
                </div>
              </div>

              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="backlog">
                  <p>BACKLOG</p>
                  <span class="value text-red">(650)</span>
                </div>
              </div>
              <div class="completed">
                <a href="#" class="btn btn-ngin btn-default">
                  <span class="btn-label"><i class="fa fa-truck" aria-hidden="true"></i></span>
                  SHIPPING THIS SO
                </a>
              </div>
            </div> <!-- /END .backlog-items -->
            <div class="collapse shipping-detail" id="withdraw-tab-{{ $index }}">
              <div class="flex-container wrap">
                <div class="flex-container flex-column">
                  <span class="chart" data-percent="35" data-bar-color="#61c21d">
                    <span>350/1000</span>
                  </span>
                  <p class="chart-total">Total</p>
                </div>
                <div class="table-responsive">
                  <table class="table ngin-table">
                    <thead>
                      <tr>
                        <th>SHIPPING #</th>
                        <th>AMOUNT</th>
                        <th>SHIPPING DATE</th>
                        <th>RECEIVED NAME</th>
                      </tr>
                    </thead>
                    <tbody>
                      @for ($i=0; $i<8; $i++)
                      <tr>
                        <td class="text-primary">8888</td>
                        <td>50</td>
                        <td>02/09/2017</td>
                        <td>POP</td>
                      </tr>
                      @endfor
                    </tbody>
                  </table>
                </div>
              </div>
            </div> <!-- /END .shipping-detail -->
            @endfor
          </div>
        </div>
        <!-- END Tab2: withdraw tab -->

        <!-- TAB 3: borrow-tab -->
        <div class="tab-pane" id="borrow-tab">
          <div class="tab-content">

            @for ($index=1; $index < 15; $index++)
            <div class="backlog-items" data-target="#borrow-tab-{{ $index }}" data-toggle="collapse">
              <div class="check-column"><input type="checkbox" class="iCheck" name="" value=""></div>
              <div class="item-name">
                <div class="info">
                  <p><span class="code">SO #<b class="text-primary">9999</b></span><span>04/09/2017</span></p>
                  <p>Sample Company</p>
                </div>
              </div>
              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="ordered">
                  <p>ORDERED</p>
                  <span class="value">1000</span>
                </div>
              </div>

              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="received">
                  <p>RECEIVED</p>
                  <span class="value">350</span>
                </div>
              </div>

              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="backlog">
                  <p>BACKLOG</p>
                  <span class="value text-red">(650)</span>
                </div>
              </div>
              <div class="completed">
                <a href="#" class="btn btn-ngin btn-default">
                  <span class="btn-label"><i class="fa fa-truck" aria-hidden="true"></i></span>
                  SHIPPING THIS SO
                </a>
              </div>
            </div> <!-- /END .backlog-items -->
            <div class="collapse shipping-detail" id="borrow-tab-{{ $index }}">
              <div class="flex-container wrap">
                <div class="flex-container flex-column">
                  <span class="chart" data-percent="35" data-bar-color="#61c21d">
                    <span>350/1000</span>
                  </span>
                  <p class="chart-total">Total</p>
                </div>
                <div class="table-responsive">
                  <table class="table ngin-table">
                    <thead>
                      <tr>
                        <th>SHIPPING #</th>
                        <th>AMOUNT</th>
                        <th>SHIPPING DATE</th>
                        <th>RECEIVED NAME</th>
                      </tr>
                    </thead>
                    <tbody>
                      @for ($i=0; $i<8; $i++)
                      <tr>
                        <td class="text-primary">8888</td>
                        <td>50</td>
                        <td>02/09/2017</td>
                        <td>POP</td>
                      </tr>
                      @endfor
                    </tbody>
                  </table>
                </div>
              </div>
            </div> <!-- /END .shipping-detail -->
            @endfor
          </div>
        </div>
        <!-- END Tab3: borrow-tab -->

        <!-- TAB 4: return-tab -->
        <div class="tab-pane" id="return-tab">
          <div class="tab-content">

            @for ($index=1; $index < 15; $index++)
            <div class="backlog-items" data-target="#return-tab-{{ $index }}" data-toggle="collapse">
              <div class="check-column"><input type="checkbox" class="iCheck" name="" value=""></div>
              <div class="item-name">
                <div class="info">
                  <p><span class="code">SO #<b class="text-primary">9999</b></span><span>04/09/2017</span></p>
                  <p>Sample Company</p>
                </div>
              </div>
              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="ordered">
                  <p>ORDERED</p>
                  <span class="value">1000</span>
                </div>
              </div>

              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="received">
                  <p>RECEIVED</p>
                  <span class="value">350</span>
                </div>
              </div>

              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="backlog">
                  <p>BACKLOG</p>
                  <span class="value text-red">(650)</span>
                </div>
              </div>
              <div class="completed">
                <a href="#" class="btn btn-ngin btn-default">
                  <span class="btn-label"><i class="fa fa-truck" aria-hidden="true"></i></span>
                  SHIPPING THIS SO
                </a>
              </div>
            </div> <!-- /END .backlog-items -->
            <div class="collapse shipping-detail" id="return-tab-{{ $index }}">
              <div class="flex-container wrap">
                <div class="flex-container flex-column">
                  <span class="chart" data-percent="35" data-bar-color="#61c21d">
                    <span>350/1000</span>
                  </span>
                  <p class="chart-total">Total</p>
                </div>
                <div class="table-responsive">
                  <table class="table ngin-table">
                    <thead>
                      <tr>
                        <th>SHIPPING #</th>
                        <th>AMOUNT</th>
                        <th>SHIPPING DATE</th>
                        <th>RECEIVED NAME</th>
                      </tr>
                    </thead>
                    <tbody>
                      @for ($i=0; $i<8; $i++)
                      <tr>
                        <td class="text-primary">8888</td>
                        <td>50</td>
                        <td>02/09/2017</td>
                        <td>POP</td>
                      </tr>
                      @endfor
                    </tbody>
                  </table>
                </div>
              </div>
            </div> <!-- /END .shipping-detail -->
            @endfor
          </div>
        </div>
        <!-- END Tab4: return-tab -->

        <!-- TAB 5: claim-tab -->
        <div class="tab-pane" id="claim-tab">
          <div class="tab-content">

            @for ($index=1; $index < 15; $index++)
            <div class="backlog-items" data-target="#claim-tab-{{ $index }}" data-toggle="collapse">
              <div class="check-column"><input type="checkbox" class="iCheck" name="" value=""></div>
              <div class="item-name">
                <div class="info">
                  <p><span class="code">SO #<b class="text-primary">9999</b></span><span>04/09/2017</span></p>
                  <p>Sample Company</p>
                </div>
              </div>
              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="ordered">
                  <p>ORDERED</p>
                  <span class="value">1000</span>
                </div>
              </div>

              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="received">
                  <p>RECEIVED</p>
                  <span class="value">350</span>
                </div>
              </div>

              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="backlog">
                  <p>BACKLOG</p>
                  <span class="value text-red">(650)</span>
                </div>
              </div>
              <div class="completed">
                <a href="#" class="btn btn-ngin btn-default">
                  <span class="btn-label"><i class="fa fa-truck" aria-hidden="true"></i></span>
                  SHIPPING THIS SO
                </a>
              </div>
            </div> <!-- /END .backlog-items -->
            <div class="collapse shipping-detail" id="claim-tab-{{ $index }}">
              <div class="flex-container wrap">
                <div class="flex-container flex-column">
                  <span class="chart" data-percent="35" data-bar-color="#61c21d">
                    <span>350/1000</span>
                  </span>
                  <p class="chart-total">Total</p>
                </div>
                <div class="table-responsive">
                  <table class="table ngin-table">
                    <thead>
                      <tr>
                        <th>SHIPPING #</th>
                        <th>AMOUNT</th>
                        <th>SHIPPING DATE</th>
                        <th>RECEIVED NAME</th>
                      </tr>
                    </thead>
                    <tbody>
                      @for ($i=0; $i<8; $i++)
                      <tr>
                        <td class="text-primary">8888</td>
                        <td>50</td>
                        <td>02/09/2017</td>
                        <td>POP</td>
                      </tr>
                      @endfor
                    </tbody>
                  </table>
                </div>
              </div>
            </div> <!-- /END .shipping-detail -->
            @endfor
          </div>
        </div>
        <!-- END Tab5: claim-tab -->

        <!-- TAB 6: partial-tab -->
        <div class="tab-pane" id="partial-tab">
          <div class="tab-content">

            @for ($index=1; $index < 15; $index++)
            <div class="backlog-items" data-target="#partial-tab-{{ $index }}" data-toggle="collapse">
              <div class="check-column"><input type="checkbox" class="iCheck" name="" value=""></div>
              <div class="item-name">
                <div class="info">
                  <p><span class="code">SO #<b class="text-primary">9999</b></span><span>04/09/2017</span></p>
                  <p>Sample Company</p>
                </div>
              </div>
              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="ordered">
                  <p>ORDERED</p>
                  <span class="value">1000</span>
                </div>
              </div>

              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="received">
                  <p>RECEIVED</p>
                  <span class="value">350</span>
                </div>
              </div>

              <div class="flex-align-center flex-column flex-2 text-center">
                <div class="backlog">
                  <p>BACKLOG</p>
                  <span class="value text-red">(650)</span>
                </div>
              </div>
              <div class="completed">
                <a href="#" class="btn btn-ngin btn-default">
                  <span class="btn-label"><i class="fa fa-truck" aria-hidden="true"></i></span>
                  SHIPPING THIS SO
                </a>
              </div>
            </div> <!-- /END .backlog-items -->
            <div class="collapse shipping-detail" id="partial-tab-{{ $index }}">
              <div class="flex-container wrap">
                <div class="flex-container flex-column">
                  <span class="chart" data-percent="35" data-bar-color="#61c21d">
                    <span>350/1000</span>
                  </span>
                  <p class="chart-total">Total</p>
                </div>
                <div class="table-responsive">
                  <table class="table ngin-table">
                    <thead>
                      <tr>
                        <th>SHIPPING #</th>
                        <th>AMOUNT</th>
                        <th>SHIPPING DATE</th>
                        <th>RECEIVED NAME</th>
                      </tr>
                    </thead>
                    <tbody>
                      @for ($i=0; $i<8; $i++)
                      <tr>
                        <td class="text-primary">8888</td>
                        <td>50</td>
                        <td>02/09/2017</td>
                        <td>POP</td>
                      </tr>
                      @endfor
                    </tbody>
                  </table>
                </div>
              </div>
            </div> <!-- /END .shipping-detail -->
            @endfor
          </div>
        </div>
        <!-- END Tab6: partial-tab -->

        <!-- TAB 7: completed-tab -->
        <div class="tab-pane" id="completed-tab">
          <div class="tab-content">
            <div class="backlog-items empty">
              -- no data --
            </div>
          </div>
        </div>
        <!-- END Tab7: completed-tab -->
      </div>
    </div>
  </div>

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
            <a href="#" aria-label="Next">
              Next
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</section>
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
    <script src="{{ asset('js/back-office/logistic/shipping/index.js') }}"></script>
@endsection
