@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/accounting/shipping-fee/index.css')}}"/>
@endsection

@section('module_name', 'ACCOUNTING > SHIPPING FEE')
@section('page_name', 'INDEX')

@section('body')
<div class="x_content">
  <section class="section-header-index">
      <form class="form-inline form-header-index">
          <div class="row">
            <table>
              <tr>
                <td class="col-1">
                  <div class="col-1-content" >
                    <div class="form-group select-all">
                      <input type="checkbox"  checked class="iCheck" id="selectall" name="selectall" >
                      <label for="selectall" class="iCheck-label" >Select All</label>
                    </div>
                    <div class="form-group">
                      <button type="button" class="btn btn-default-background" onclick="window.location='{{ url("back-office/purchasing-order/create") }}'">
                        <span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
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

  <div class="shipping-fee-table">
    <table class="table ngin-table">
      <thead>
        <tr>
          <th class="col-xs-1"></th>
          <th class="col-xs-3" style="text-align: left;">DOCUMENT NUMBER</th>
          <th class="col-xs-6">PO#</th>
          <th class="col-xs-2">ACTION</th>
        </tr>
      </thead>
      <tbody class="tab-content scroll-2">
        <tr>
          <td><input type="checkbox" class="iCheck"></td>
          <td style="text-align: left;">1234</td>
          <td>1234</td>
          <td>
            <button type="button" class="btn btn-ngin btn-block btn-default">
              <span class="btn-label"><i class="fa fa-pencil success" aria-hidden="true"></i></span>EDIT
            </button>
            <button type="button" class="btn btn-ngin btn-default btn-block">
              <span class="btn-label"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>DELETE
            </button>
          </td>
        </tr>
      </tbody>
    </table>
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
            <a href="#" aria-label="Next" >
              Next
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

    <!-- <div class="row">
        <div class="col-md-12" >


<table class="table ngin-table shippingFeeTable pok-table-fixed" style="height:500px;">
    <thead>
        <tr>
            <th class="col-xs-1"></th>
            <th class="col-xs-3">DOCUMENT NUMBER</th>
            <th class="col-xs-6">PO#</th>
            <th class="col-xs-2">ACTION</th>
        </tr>
    </thead>
    <tbody class="scroll-2">
        <tr>
            <td>
            <input type="checkbox" class="iCheck">
            </td>
             <td>
             1234
            </td>
             <td>
             1234
            </td>
             <td>
                <button type="button" class="btn btn-ngin btn-block btn-default">
												<span class="btn-label"><i class="fa fa-pencil success" aria-hidden="true"></i></span>EDIT</button>
                         <button type="button" class="btn btn-ngin btn-default btn-block">
						    <span class="btn-label"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>DELETE
                        </button>
            </td>
        </tr>
    </tbody>
</table>


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
    <script src="{{ asset('js/back-office/accounting/shipping-fee/index.js') }}"></script>
@endsection
