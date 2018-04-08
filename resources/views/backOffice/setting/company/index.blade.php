@extends('layouts.backOffice.template')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/company/index.css')}}"/>
@endsection

@section('module_name', 'COMPANIES')
@section('page_name', 'INDEX')

@section('body')
<div id="company" class="x_content">
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
                  <button type="button" class="btn btn-default-background" onclick="window.location='{{ url("back-office/setting/company/create") }}'">
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

  <section class="section-margin panel-content scroll-2">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

      @for($i =1; $i<11; $i++)
      <div class="panel">
        <div class="panel-heading" role="tab" id="panel-{!! $i !!}">
          <div role="button" data-toggle="collapse" data-parent="#accordion" href="#panel-body-{!! $i !!}" aria-expanded="false" aria-controls="collapse-{!! $i !!}" class="collapsed">
            <div class="row flex-parent" style="padding:0 1em">
              <div class="flex-parent company-name" style="flex:1">
                <div style="margin-right:1em">
                  <input type="checkbox" class="iCheck" />
                </div>
                <div class="flex-item">
                  <div>
                    <span class="text-black is-bold">COMPANIES :</span> <span class="text-dark is-bold">ADIWIT</span>
                  </div>
                  <div>
                    <span class="text-black is-bold">TAX ID :</span> <span class="text-dark is-bold">8-8888-88888-88-8</span>
                  </div>
                </div>
              </div>
              <div class="flex-parent group-name" style="align-items:center;">
                <div class="flex-item">
                  <div>
                    <span class="text-black is-bold">GROUP NAME :</span> <span class="text-dark is-bold">LOREM IPSUM</span>
                  </div>
                </div>
              </div>
              <div class="flex-parent credit" style="align-items:center;">
                <div class="flex-item text-black is-bold">Credit 3 Days / Credit Limit 100,000 Baht</div>
              </div>
            </div>
          </div>
        </div>
        <div id="panel-body-{!! $i !!}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
         <div class="panel-body text-black">
            <div class="logo-img">
              <img src="{{ asset('images/backOffice/setting/logo.png') }}">
            </div>
            <div class="flex-parent" style="margin-top:2em">
              <div class="flex-item" style="flex:3">
                <b class="heading-2">
                  COMPANY ADDRESS (Headquarters)
                </b>
                <p class="is-bold is-justify text-address">
                  Adidas Company Limited (Branch No. 00001)<br>
                  No. 18, kijpanich Building, Room 405, 4th Floor<br>
                  Patpong Road, Suriyawong, Bangrak<br>
                  Bangkok 10500
                </p>
              </div>
              <div class="flex-item" style="flex:2">
                <b class="heading-2">
                  CONTACT PERSON
                </b>
                <p class="is-bold is-justify text-address">
                  Adisavis Siriok<br>
                  Adiwit@gmail.com<br>
                  (+66) 0-93231112
                </p>
              </div>
              <div class="buttons menu">

                <button type="button" class="btn btn-ngin btn-default">
                  <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                  <span class="btn-text">Edit</span>
                </button>

                <button type="button" class="btn btn-ngin btn-default">
                  <span class="btn-label"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                  <span class="btn-text">Duplicate</span>
                </button>

                <button type="button" class="btn btn-ngin btn-default">
                  <span class="btn-label"><i class="fa fa-undo info" aria-hidden="true"></i></span>
                  <span class="btn-text">Undo</span>
                </button>

                <button type="button" class="btn btn-ngin btn-default">
                  <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                  <span class="btn-text">Delete</span>
                </button>

              </div>
            </div>
            <div class="flex-parent">
              <div class="flex-item flex-parent column">
                <div>
                  <b class="heading-2">
                    DESCRIPTION
                  </b>
                  <p class="text-dark is-justify text-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur condimentum interdum diam,
                    non consectetur est dignissim eu. Suspendisse potenti. Fusce lorem turpis,
                    tincidunt nec facilisis auctor, gravida non magna. Vivamus laoreet,
                    nulla vehicula accumsan vestibulum, felis odio luctus massa, ut imperdiet dolor magna luctus nunc.
                    Aenean id est facilisis, porta est a, malesuada orci. In eu diam sed ipsum facilisis vestibulum.
                  </p>
                </div>
                <div class="flex-parent" style="padding:0 1em">
                  <div class="flex-item number-label">
                    <a class="level-group" href="{!! url('back-office/setting/company/1/branch') !!}">
                      <b class="heading-1">
                        8
                      </b>
                      <b class="heading-2 link">
                        BRANCH
                      </b>
                    </a>
                  </div>
                  <div class="flex-item number-label">
                    <a class="level-group" href="{!! url('back-office/setting/company/1/bank') !!}">
                      <b class="heading-1">
                        8
                      </b>
                      <b class="heading-2 link">
                        BANK
                      </b>
                    </a>
                  </div>
                  <div class="flex-item number-label">
                    <a class="level-group" href="{!! url('back-office/setting/company/1/credit-term') !!}">
                      <b class="heading-1">
                        8
                      </b>
                      <b class="heading-2 link">
                        CREDIT TERM
                      </b>
                    </a>
                  </div>
                  <div class="flex-item number-label">
                    <a class="level-group" href="{!! url('back-office/setting/company/1/wallet') !!}">
                      <b class="heading-1">
                        8
                      </b>
                      <b class="heading-2 link">
                        WALLET
                      </b>
                    </a>
                  </div>
                </div>
            </div>
            <div class="buttons menu"></div>
          </div>
        </div>
      </div>
    </div>
    @endfor
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

</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/setting/company/index.js') }}"></script>
@endsection
