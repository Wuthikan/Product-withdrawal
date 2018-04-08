@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/company/bank/index.css')}}"/>
@endsection

@section('module_name', 'COMPANIES > BANK')
@section('page_name', 'INDEX')

@section('body')
<section class="x_content" id="company-bank">

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
                  <button type="button" class="btn btn-default-background" onclick="window.location='{{ url("back-office/setting/company/1/bank/create") }}'">
                    <span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
                  </button>
                </div>
                <div class="form-group button-2">
                  <button type="button"    class="btn btn-default-background">
                    <span class="btn-label"><span class="fa-approve-all"></span></span><span class="btn-label-label">Approve All</span>
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

  <div class="company-bank-table">
    <table class="table ngin-table">
      <thead>
        <tr>
          <th class="blank"></th>
          <th class="bank-name">Bank Name</th>
          <th class="account-number">Account Number</th>
          <th class="remark">Remark</th>
          <th class="actions align-center">Action</th>
        </tr>
      </thead>
    </table>

    <div class="body-table scroll-2">
      <table class="table ngin-table">
        @for($i=1;$i<11;$i++)
        <tbody>
          <tr>
            <td class="blank">
              <div class="form-group">
                  <input type="checkbox" class="iCheck item">
              </div>
      			</td>
      			<td class="bank-name">
              <p class="name title">
                <img src="{{ asset('images/backOffice/setting/company/logo-kbank.png') }}"> KASIKORNBANK
              </p>

              <p class="title">BRANCH</p>
              <p class="value">Sala Daeng</p>

              <p class="title">CURRENCY</p>
              <p class="value">USD</p>
      			</td>
      			<td class="account-number">
              <p>888-8-88888-8</p>
      			</td>
      			<td class="remark">
          		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
      			</td>
      			<td class="actions align-center">
              <div class="buttons">
                <button type="button" class="btn btn-ngin btn-default">
                  <span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                  </span>Edit
                </button>
                <button type="button" class="btn btn-ngin btn-default">
                  <span class="btn-label">
                    <i class="fa fa-files-o" aria-hidden="true"></i>
                  </span>Duplicate
                </button>
                <button type="button" class="btn btn-ngin btn-default">
                  <span class="btn-label">
                    <i class="fa fa-undo info" aria-hidden="true"></i>
                  </span>Undo
                </button>
                <button type="button" class="btn btn-ngin btn-default">
                  <span class="btn-label">
                    <i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i>
                  </span>Delete
                </button>
              </div>
    			   </td>
            </tr>
          @endfor
          </tbody>
        </table>
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

@section('script')
    <script src="{{ asset('js/back-office/setting/company/bank/index.js') }}"></script>
@endsection
