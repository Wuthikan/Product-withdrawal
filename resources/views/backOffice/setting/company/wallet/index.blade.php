{{-- 
    @author: กีรติพร ลีลาวันทนพันธุ์
    @phone: 089-185-9078
    @email: bookhunter99@gmail.com
--}}

@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/company/wallet/index.css')}}"/>
@endsection

@section('module_name', 'COMPANY > WALLET')
@section('page_name', 'INDEX')

@section('body')
<div class="x_content">
    <section class="section-header-index">
        <form class="form-inline form-header-index">
            <div class="row">
                <table style="width: 100%">
                <tr>
                <td class="col-1" style="min-width: inherit;width: 252px;">
                    <div class="col-1-content" >
                        <div class="form-group select-all">
                            <input type="checkbox"  checked class="iCheck" id="selectall" name="selectall" > 
                            <label for="selectall" class="iCheck-label" >Select All</label>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-default-background" onclick="window.location='{{ route("backOffice.marketing.bundled-product.create") }}'">
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
                <td class="col-3" style="min-width: inherit;width: 218px;">
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
                </div>
            </td>
            </tr>
            </table>
            </div>
        </form>
    </section>
    
    <section class="panel-body panel-content scroll-2"">
        <div class="row">
            <div class="col-xs-12 content scroll-2" style="padding-right: 0px;padding-left: 0px;">

<div class="bk-group-1">
	<table class="bk-table" border="0">
    	<tbody>
        	<tr>
            	<td>CURRENCY</td>
                <td>BALANCE</td>
                <td rowspan="2" colspan="3">
                	<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label">
                            <i class="fa fa-list-alt" aria-hidden="true" style="color: #60be21;"></i>
                        </span>
						<span class="text">VIEW STATEMENT</span>
					</button>
                </td>
            </tr>
            <tr>
            	<td>THB</td>
                <td>100,000.00</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="bk-group-1">
	<table class="bk-table" border="0">
    	<tbody>
        	<tr>
            	<td>CURRENCY</td>
                <td>BALANCE</td>
                <td rowspan="2" colspan="3">
                	<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label">
                            <i class="fa fa-list-alt" aria-hidden="true" style="color: #60be21;"></i>
                        </span>
						<span class="text">VIEW STATEMENT</span>
					</button>
                </td>
            </tr>
            <tr>
            	<td>THB</td>
                <td>100,000.00</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="bk-group-1">
	<table class="bk-table" border="0">
    	<tbody>
        	<tr>
            	<td>CURRENCY</td>
                <td>BALANCE</td>
                <td rowspan="2" colspan="3">
                	<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label">
                            <i class="fa fa-list-alt" aria-hidden="true" style="color: #60be21;"></i>
                        </span>
						<span class="text">VIEW STATEMENT</span>
					</button>
                </td>
            </tr>
            <tr>
            	<td>THB</td>
                <td>100,000.00</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="bk-group-1">
	<table class="bk-table" border="0">
    	<tbody>
        	<tr>
            	<td>CURRENCY</td>
                <td>BALANCE</td>
                <td rowspan="2" colspan="3">
                	<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label">
                            <i class="fa fa-list-alt" aria-hidden="true" style="color: #60be21;"></i>
                        </span>
						<span class="text">VIEW STATEMENT</span>
					</button>
                </td>
            </tr>
            <tr>
            	<td>THB</td>
                <td>100,000.00</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="bk-group-1">
	<table class="bk-table" border="0">
    	<tbody>
        	<tr>
            	<td>CURRENCY</td>
                <td>BALANCE</td>
                <td rowspan="2" colspan="3">
                	<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label">
                            <i class="fa fa-list-alt" aria-hidden="true" style="color: #60be21;"></i>
                        </span>
						<span class="text">VIEW STATEMENT</span>
					</button>
                </td>
            </tr>
            <tr>
            	<td>THB</td>
                <td>100,000.00</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="bk-group-1">
	<table class="bk-table" border="0">
    	<tbody>
        	<tr>
            	<td>CURRENCY</td>
                <td>BALANCE</td>
                <td rowspan="2" colspan="3">
                	<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label">
                            <i class="fa fa-list-alt" aria-hidden="true" style="color: #60be21;"></i>
                        </span>
						<span class="text">VIEW STATEMENT</span>
					</button>
                </td>
            </tr>
            <tr>
            	<td>THB</td>
                <td>100,000.00</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="bk-group-1">
	<table class="bk-table" border="0">
    	<tbody>
        	<tr>
            	<td>CURRENCY</td>
                <td>BALANCE</td>
                <td rowspan="2" colspan="3">
                	<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label">
                            <i class="fa fa-list-alt" aria-hidden="true" style="color: #60be21;"></i>
                        </span>
						<span class="text">VIEW STATEMENT</span>
					</button>
                </td>
            </tr>
            <tr>
            	<td>THB</td>
                <td>100,000.00</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="bk-group-1">
	<table class="bk-table" border="0">
    	<tbody>
        	<tr>
            	<td>CURRENCY</td>
                <td>BALANCE</td>
                <td rowspan="2" colspan="3">
                	<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label">
                            <i class="fa fa-list-alt" aria-hidden="true" style="color: #60be21;"></i>
                        </span>
						<span class="text">VIEW STATEMENT</span>
					</button>
                </td>
            </tr>
            <tr>
            	<td>THB</td>
                <td>100,000.00</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="bk-group-1">
	<table class="bk-table" border="0">
    	<tbody>
        	<tr>
            	<td>CURRENCY</td>
                <td>BALANCE</td>
                <td rowspan="2" colspan="3">
                	<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label">
                            <i class="fa fa-list-alt" aria-hidden="true" style="color: #60be21;"></i>
                        </span>
						<span class="text">VIEW STATEMENT</span>
					</button>
                </td>
            </tr>
            <tr>
            	<td>THB</td>
                <td>100,000.00</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="bk-group-1">
	<table class="bk-table" border="0">
    	<tbody>
        	<tr>
            	<td>CURRENCY</td>
                <td>BALANCE</td>
                <td rowspan="2" colspan="3">
                	<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label">
                            <i class="fa fa-list-alt" aria-hidden="true" style="color: #60be21;"></i>
                        </span>
						<span class="text">VIEW STATEMENT</span>
					</button>
                </td>
            </tr>
            <tr>
            	<td>THB</td>
                <td>100,000.00</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="bk-group-1">
	<table class="bk-table" border="0">
    	<tbody>
        	<tr>
            	<td>CURRENCY</td>
                <td>BALANCE</td>
                <td rowspan="2" colspan="3">
                	<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label">
                            <i class="fa fa-list-alt" aria-hidden="true" style="color: #60be21;"></i>
                        </span>
						<span class="text">VIEW STATEMENT</span>
					</button>
                </td>
            </tr>
            <tr>
            	<td>THB</td>
                <td>100,000.00</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="bk-group-1">
	<table class="bk-table" border="0">
    	<tbody>
        	<tr>
            	<td>CURRENCY</td>
                <td>BALANCE</td>
                <td rowspan="2" colspan="3">
                	<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label">
                            <i class="fa fa-list-alt" aria-hidden="true" style="color: #60be21;"></i>
                        </span>
						<span class="text">VIEW STATEMENT</span>
					</button>
                </td>
            </tr>
            <tr>
            	<td>THB</td>
                <td>100,000.00</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="bk-group-1">
	<table class="bk-table" border="0">
    	<tbody>
        	<tr>
            	<td>CURRENCY</td>
                <td>BALANCE</td>
                <td rowspan="2" colspan="3">
                	<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label">
                            <i class="fa fa-list-alt" aria-hidden="true" style="color: #60be21;"></i>
                        </span>
						<span class="text">VIEW STATEMENT</span>
					</button>
                </td>
            </tr>
            <tr>
            	<td>THB</td>
                <td>100,000.00</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="bk-group-1">
	<table class="bk-table" border="0">
    	<tbody>
        	<tr>
            	<td>CURRENCY</td>
                <td>BALANCE</td>
                <td rowspan="2" colspan="3">
                	<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label">
                            <i class="fa fa-list-alt" aria-hidden="true" style="color: #60be21;"></i>
                        </span>
						<span class="text">VIEW STATEMENT</span>
					</button>
                </td>
            </tr>
            <tr>
            	<td>THB</td>
                <td>100,000.00</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="bk-group-1">
	<table class="bk-table" border="0">
    	<tbody>
        	<tr>
            	<td>CURRENCY</td>
                <td>BALANCE</td>
                <td rowspan="2" colspan="3">
                	<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label">
                            <i class="fa fa-list-alt" aria-hidden="true" style="color: #60be21;"></i>
                        </span>
						<span class="text">VIEW STATEMENT</span>
					</button>
                </td>
            </tr>
            <tr>
            	<td>THB</td>
                <td>100,000.00</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="bk-group-1">
	<table class="bk-table" border="0">
    	<tbody>
        	<tr>
            	<td>CURRENCY</td>
                <td>BALANCE</td>
                <td rowspan="2" colspan="3">
                	<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label">
                            <i class="fa fa-list-alt" aria-hidden="true" style="color: #60be21;"></i>
                        </span>
						<span class="text">VIEW STATEMENT</span>
					</button>
                </td>
            </tr>
            <tr>
            	<td>THB</td>
                <td>100,000.00</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="bk-group-1">
	<table class="bk-table" border="0">
    	<tbody>
        	<tr>
            	<td>CURRENCY</td>
                <td>BALANCE</td>
                <td rowspan="2" colspan="3">
                	<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label">
                            <i class="fa fa-list-alt" aria-hidden="true" style="color: #60be21;"></i>
                        </span>
						<span class="text">VIEW STATEMENT</span>
					</button>
                </td>
            </tr>
            <tr>
            	<td>THB</td>
                <td>100,000.00</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="bk-group-1">
	<table class="bk-table" border="0">
    	<tbody>
        	<tr>
            	<td>CURRENCY</td>
                <td>BALANCE</td>
                <td rowspan="2" colspan="3">
                	<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label">
                            <i class="fa fa-list-alt" aria-hidden="true" style="color: #60be21;"></i>
                        </span>
						<span class="text">VIEW STATEMENT</span>
					</button>
                </td>
            </tr>
            <tr>
            	<td>THB</td>
                <td>100,000.00</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="bk-group-1">
	<table class="bk-table" border="0">
    	<tbody>
        	<tr>
            	<td>CURRENCY</td>
                <td>BALANCE</td>
                <td rowspan="2" colspan="3">
                	<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label">
                            <i class="fa fa-list-alt" aria-hidden="true" style="color: #60be21;"></i>
                        </span>
						<span class="text">VIEW STATEMENT</span>
					</button>
                </td>
            </tr>
            <tr>
            	<td>THB</td>
                <td>100,000.00</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="bk-group-1">
	<table class="bk-table" border="0">
    	<tbody>
        	<tr>
            	<td>CURRENCY</td>
                <td>BALANCE</td>
                <td rowspan="2" colspan="3">
                	<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label">
                            <i class="fa fa-list-alt" aria-hidden="true" style="color: #60be21;"></i>
                        </span>
						<span class="text">VIEW STATEMENT</span>
					</button>
                </td>
            </tr>
            <tr>
            	<td>THB</td>
                <td>100,000.00</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="bk-group-1">
	<table class="bk-table" border="0">
    	<tbody>
        	<tr>
            	<td>CURRENCY</td>
                <td>BALANCE</td>
                <td rowspan="2" colspan="3">
                	<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label">
                            <i class="fa fa-list-alt" aria-hidden="true" style="color: #60be21;"></i>
                        </span>
						<span class="text">VIEW STATEMENT</span>
					</button>
                </td>
            </tr>
            <tr>
            	<td>THB</td>
                <td>100,000.00</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="bk-group-1">
	<table class="bk-table" border="0">
    	<tbody>
        	<tr>
            	<td>CURRENCY</td>
                <td>BALANCE</td>
                <td rowspan="2" colspan="3">
                	<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label">
                            <i class="fa fa-list-alt" aria-hidden="true" style="color: #60be21;"></i>
                        </span>
						<span class="text">VIEW STATEMENT</span>
					</button>
                </td>
            </tr>
            <tr>
            	<td>THB</td>
                <td>100,000.00</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="bk-group-1">
	<table class="bk-table" border="0">
    	<tbody>
        	<tr>
            	<td>CURRENCY</td>
                <td>BALANCE</td>
                <td rowspan="2" colspan="3">
                	<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label">
                            <i class="fa fa-list-alt" aria-hidden="true" style="color: #60be21;"></i>
                        </span>
						<span class="text">VIEW STATEMENT</span>
					</button>
                </td>
            </tr>
            <tr>
            	<td>THB</td>
                <td>100,000.00</td>
            </tr>
        </tbody>
    </table>
</div>


            </div>
        </div>
    </section>
    
    <div class="row page-showing-pagination" style="margin-top:-1px;">
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
    <script src="{{ asset('js/back-office/setting/company/wallet/index.js') }}"></script>
@endsection