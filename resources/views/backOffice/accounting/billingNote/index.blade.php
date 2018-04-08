@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/accounting/billing-note/index.css')}}" />
@endsection 

@section('module_name', 'BILLING NOTE')
@section('page_name', 'INDEX')

@section('body')
<section class="x_content">
  <!-- top menu -->
  <section class="section-header-index">
    <form class="form-inline form-header-index">
      <div class="flex-parent form-table">
        <div class="form-group select-all" style="padding-top:5px">
          <input type="checkbox" checked class="iCheck" id="selectall" name="selectall" style="top:-1px">
           <label for="selectall" class="iCheck-label">Select All</label>
        </div>
        <!--
        <div class="form-group">
          <button type="button" class="btn btn-default-background" onclick="window.location='{{ route("backOffice.accounting.billing-note.create") }}'">
            <span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
          </button>
        </div>
        -->
        <div class="form-group button-2 mr-2">
          <button type="button"    class="btn btn-default-background">
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
            <span class="btn-label"><i class="fa fa-file-pdf-o pdf" aria-hidden="true"></i></span><span class="btn-label-label">PDF</span>
          </button>
        </div>
        <div class="form-group">
          <button type="button" class="btn  btn-default-background">
            <span class="btn-label"><i class="fa fa-file-excel-o excel" aria-hidden="true"></i></span><span class="btn-label-label">Excel</span>
          </button>
        </div>
        <div class="form-group">
          <button type="button" class="btn  btn-default-background">
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
    </form>
  </section>
  <!-- end top menu -->

  <!-- Content -->
  <section id="exTab2" class="">
    <ul class="nav nav-tabs">
      <li class="active">
        <a href="#new-tab" data-toggle="tab">
          <span>
            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
          </span>
          NEW
        </a>
      </li>
      <li>
        <a href="#approve-tab" data-toggle="tab">
          <span>
            <i class="fa fa-money" aria-hidden="true"></i>
          </span>
          SALE ORDER APPROVE
        </a>
      </li>
      <li>
        <a href="#complete-tab" data-toggle="tab">
          <span>
            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
          </span>
          COMPLETED
        </a>
      </li>
    </ul>
    <section class="tab-content scroll-2">
      <!-- TAB -->
      @foreach(['new-tab', 'approve-tab', 'complete-tab'] as $a => $tab)
      <div class="tab-pane @if($a == 0) active @endif" id="{{$tab}}">
        <div class="panel-group" id="{{$tab}}-panel" role="tablist">
          <div class="panel panel-default">
            <!-- Panel Heading -->
            @for($i=0;$i<10;$i++)
            <div class="panel-heading" role="tab">
              <table class="table inquiry-collape text-black">
                <tr>
                  <td class="col-md-5">
                    <div class="flex-parent">
                      <div class="mr-1">
                        <input type="checkbox" class="iCheck" />
                      </div>
                      <div class="info-column">
                        <div class="customer fs-medium">CUSTOMERS: LOREM IPSUM 1</div>
                        <div>DATE (INV): <span class="text-grey">28/08/2560</span></div>
                        <div>TAX INVOICE: <span class="fs-medium">#<span class="text-primary">6101-T-888</span></span></div>
                        <div>CREDIT NOT: <span class="fs-medium">#@if($i>5)-@else{{''}}<span class="text-primary">{{($i%2) ? '44' :'33,22'}}</span> @endif</span></div>
                      </div>
                    </div>
                  </td>
                  <td class="col-md-2" rowspan="2">
                    @if(in_array($i, [1,3,4,5,6,9]))
                    <div class="text-center">
                      <img src="{{asset('images/backOffice/accounting/invoice.png')}}" height="100" />
                    </div>
                    @endif
                  </td>
                  <td class="col-md-2" rowspan="2" style="position:relative">
                    <div class="flex-parent column fix-height">
                      <div class="flex-parent center column">
                        <div class="mb-1">AMOUNT</div>
                        <div class="fs-medium">99,000.00</div>
                      </div>
                      <div class="status-column">
                        <div class="mb-1">STATUS</div>
                        <div>
                          
                          @if(in_array($i, [1,3,4,5,6,9]))
                          <div><i class="fa fa-check-circle-o fs-medium text-green"></i> BILLED #<span class="text-primary">99999</span></div>
                            @if((($i%2)==0))
                            <div class="text-red"><i class="fa fs-medium fa-times-circle-o"></i> OVERDUE</div>
                            @else
                            <div class="status-icon"><i class="fa fa-exclamation text-yellow"></i> PAYMENT IN {{rand(1,20)}} DAYS</div>
                            @endif
                          @else
                          <div class="status-icon"><i class="fa fa-exclamation text-yellow"></i> BILL IN {{sprintf('%2s', rand(1,20))}} DAYS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                          @endif
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="col-md-3"><div class="flex-parent center column"><div class="mb-1">BALANCE</div><div class="fs-medium">99,000.00</div></div></td>
                </tr>
                <tr>
                  <td class="valign-bottom">
                    <button type="button" class="btn btn-ngin btn-default ml-1" data-toggle="modal" data-target="#modal-1"><span class="btn-label"><i class="fa fa-print primary" aria-hidden="true"></i></span><span>Print</span></button>
                    <button type="button" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-files-o success" aria-hidden="true"></i></span><span>UPLOAD BILLING NOTE</span></button>
                  </td>
                  <td class="text-center valign-bottom">
                    @if(in_array($i, [4,6]))
                    <button type="button" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-print primary" aria-hidden="true"></i></span><span>PRINT RECEIPT</span></button>
                    @endif  
                  </td>
                </tr>
              </table>
            </div>
            @endfor
            <!-- end Panel Heading -->
          </div>
        </div>
      </div>
      @endforeach
      <!-- end TAB -->
    </section>
  </section>
  <!-- end Content -->

  <!-- start pagination -->
  <section class="row page-showing-pagination">
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
          <li class="page-number  active">
            <a href="#">1</a>
          </li>
          <li class="page-number">
            <a href="#">2</a>
          </li>
          <li class="page-number">
            <a href="#">3</a>
          </li>
          <li class="page-number">
            <a href="#">4</a>
          </li>
          <li class="page-number">
            <a href="#">5</a>
          </li>
          <li class="page-number">
            <a href="#" aria-label="Next">
              Next
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </section>
  <!-- end pagination -->

  <!-- modal -->
  <section id="modal-1" class="modal fade">
    <div class="modal-dialog corner">
      <div class="modal-content">
        <div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button></div>
        <div class="modal-body">
          <div class="form-group">
            <label for="document-date">DOCUMENT DATE</label>
            <div class="input-group date datetimepicker">
              <input type="text" class="form-control" name="document-date" id="document-date" />
              <span class="input-group-addon">
                <i class="fa fa-calendar" ></i>
              </span>
            </div>
          </div>
          <div class="form-group">
            <label for="due-date">DUE DATE</label>
            <div class="input-group date datetimepicker">
              <input type="text" class="form-control" name="due-date" id="due-date" />
              <span class="input-group-addon">
                <i class="fa fa-calendar" ></i>
              </span>
            </div>
          </div>
          <div class="form-group">
            <label for="remarks">REMARKS</label>
            <textarea name="remarks" id="remarks" class="form-control"></textarea>
          </div>
          <div class="form-group text-center">
            <button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#modal-1">
            <span class="btn-label "><i class="fa fa-print primary" aria-hidden="true"></i></span>Print</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end modal -->
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
<script src="{{ asset('js/back-office/accounting/billing-note/index.js') }}"></script>
<script>
$(document).ready(function() {
  $('.datetimepicker').datetimepicker({format: 'DD/MM/YYYY'});
});
</script>
@endsection
