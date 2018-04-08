@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/company/credit-term/index.css')}}"/>
@endsection

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
                  <button type="button" class="btn btn-default-background" onclick="window.location='{{ url("back-office/setting/company/1/credit-term/create") }}'">
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
    <section id="credit-term-table" style="margin-bottom: 0;">
        <div class="content scroll-2">
            @for($i=0; $i<10; $i++)
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading{{$i}}">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}" aria-expanded="true" aria-controls="collapse{{$i}}">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="tr-checkbox" rowspan="2">
                                                <input type="checkbox" class="iCheck" />
                                            </td>
                                            <td class="tr-itemName">
                                                <b>CREDIT TERM</b>
                                                @if($i==0)
                                                <div>
                                                    <span class="ngin-green"><i class="fa fa-check-circle-o" aria-hidden="true"></i> <span class="approveStatusText">Approved</span></span> by pop
                                                </div>
                                                @endif
                                            </td>
                                            <td style="width: 27%;">
                                                <div class="itemLabel">DATE</div>
                                                <div><b class="itemHighlight">16/09/17</b> TO <b class="itemHighlight">20/10/17</b></div>
                                            </td>
                                            <td>
                                                <div class="itemLabel">Description</div>
                                                <div><b class="itemHighlight">Lorem Ipsum</b></div>
                                            </td>
                                            <td class="tr-data-small" >
                                                <div class="itemLabel">CREDIT TERM</div>
                                                <div><b class="itemHighlight">90</b> <span class="itemLabel">DAY</span></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                @if($i%2==0)
                                                <button type="button" class="btn btn-ngin btn-default approveStatusBtn danger-no-icon">
													                                     UnApprove
                                                    <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                                                </button>
                                                @else
                                                <button type="button" class="btn btn-ngin btn-default approveStatusBtn success-no-icon">
                                                    Approved
                                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                </button>
                                            @endif
                                            </td>
                                            <td colspan="3" style="vertical-align: bottom;" class="controlButton">
                                                <button type="button" class="btn btn-ngin btn-default">
                                                    <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>Edit
                                                </button>
                                                <button type="button" class="btn btn-ngin btn-default">
                                                    <span class="btn-label"><i class="fa fa-files-o" aria-hidden="true"></i></span>Duplicate
                                                </button>
                                                <button type="button" class="btn btn-ngin btn-default">
                                                    <span class="btn-label"><i class="fa fa-undo info" aria-hidden="true"></i></span>Undo
                                                </button>
                                                <button type="button" class="btn btn-ngin btn-default">
                                                    <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </a>
                        </h4>
                    </div>
                </div>
                <div id="collapse{{$i}}" class="panel-collapse collapse @if($i==0) in @endif " role="tabpanel" aria-labelledby="heading{{$i}}">
                    <div class="panel-body" style="padding-left: 0; padding-right: 0; padding-top: 0;">
                        <table class="table ngin-table">
                            <tbody>
                                <tr>
                                    <td style="width: 22.5%; text-align: center;">
                                        <label for=""></label>
                                        <span class="chart chart_green" data-percent="86">
                                            <span class="percent" >85%</span>
                                        </span>
                                    </td>
                                    <td style="vertical-align:middle;" align="center">
                                        <div>USED</div>
                                        <h4 style="margin: 0;"><strong>4,444.44</strong></h4>
                                    </td>
                                    <td style="border-left: 0;  vertical-align:middle;" align="center">
                                        <div>CREDIT LIMIT</div>
                                        <h4 style="margin: 0;"><strong>88,888,888.88</strong></h4>
                                    </td>
                                    <td style="border-left: 0;  vertical-align:middle;" align="center">
                                        <div>BALANCE</div>
                                        <h4 style="margin: 0;"><strong>88,888,444.44</strong></h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </section>
    <section>
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
    </section>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/setting/company/credit-term/index.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            //Set Label Header Page
            $('#lbHeaderPage').html("<h3>COMPANY > CREDIT TERM | <span>INDEX</span></h3>");
        });
    </script>
@endsection
