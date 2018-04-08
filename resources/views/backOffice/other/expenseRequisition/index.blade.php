@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/other/expense-requisition/index.css')}}"/>
@endsection

@section('module_name', 'EXPENSE REQUISITION')
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
                                        <button type="button" class="btn btn-default-background" onclick="window.location='{{ url("back-office/other/expense-requisition/create") }}'">
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
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </section>

        <div id="exTab2" class="">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#pending" data-toggle="tab">
					<span>
						<i class="fa fa-circle-o-notch" aria-hidden="true"></i>
					</span>
                        PENDING FOR APPROVAL
                    </a>
                </li>
                <li>
                    <a href="#approved" data-toggle="tab">
					<span>
						<i class="fa fa-check-circle-o" aria-hidden="true"></i>
					</span>
                        APPROVED
                    </a>
                </li>
                <li>
                    <a href="#complete" data-toggle="tab">
					<span>
						<i class="fa fa-check" aria-hidden="true"></i>
					</span>
                        COMPLETED
                    </a>
                </li>
            </ul>

            @php
            use Faker\Factory as Faker;
            $faker = Faker::create();
            @endphp

            <div class="tab-content scroll-2">
                <!--  tab  !-->
                <div class="tab-pane active" id="pending">
                    <div class="panel-group" role="tablist" aria-multiselectable="true">
                        @for($a = 1; $a <= 20; $a++)
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <table class="table er-table">
                                            <tbody>
                                            <tr>
                                                <td class="tr-checkbox">
                                                    <input type="checkbox" class="iCheck" />
                                                </td>
                                                <td>
                                                    <label>DD/MM/YYYY</label>
                                                    <div>
                                                        {{ $faker->date('d/m/Y') }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <label>COMPANY</label>
                                                    <div>
                                                        {{ $faker->firstName() }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <label>EVENT</label>
                                                    <div>
                                                        {{ $faker->sentence(1) }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <label>AMOUNT</label>
                                                    <div>
                                                        {{ number_format($faker->numberBetween(10000000, 99999999), 2) }} THB
                                                    </div>
                                                </td>
                                                <td>
                                                    @switch($faker->randomElement(['pending', 'approved', 'reject']))
                                                        @case('pending')
                                                        <div class="er-status waiting"><i class="er-status-icon fa-exclamation"></i> <span>WAIRING FOR APPROVE</span></div>
                                                        @break

                                                        @case('approved')
                                                        <span class="er-status"><i class="er-status-icon fa-approve-all"></i> APPROVE</span>
                                                        @break

                                                        @case('reject')
                                                        <span class="er-status"><i class="er-status-icon text-danger fa fa-times-circle-o"></i> REJECTED</span>
                                                        @break

                                                        @default
                                                        <span class="er-status"><i class="er-status-icon fa-approve-all"></i> APPROVE</span>
                                                    @endswitch
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
														</span>
                                                        <p>Edit</p>
                                                    </button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
														</span>
                                                        <p>Delete</p>
                                                    </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </h4>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <!--  tab  !-->
                <!--  tab  !-->
                <div class="tab-pane" id="approved">
                    <div class="panel-group" role="tablist" aria-multiselectable="true">
                        @for($a = 1; $a <= 20; $a++)
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <table class="table er-table">
                                            <tbody>
                                            <tr>
                                                <td class="tr-checkbox">
                                                    <input type="checkbox" class="iCheck" />
                                                </td>
                                                <td>
                                                    <label>DD/MM/YYYY</label>
                                                    <div>
                                                        {{ $faker->date('d/m/Y') }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <label>COMPANY</label>
                                                    <div>
                                                        {{ $faker->company }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <label>EVENT</label>
                                                    <div>
                                                        {{ $faker->sentence() }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <label>AMOUNT</label>
                                                    <div>
                                                        {{ number_format($faker->numberBetween(1000, 999999), 2) }} THB
                                                    </div>
                                                </td>
                                                <td>
                                                    @switch($faker->randomElement(['pending', 'approved', 'reject']))
                                                        @case('pending')
                                                        <div class="er-status waiting"><i class="er-status-icon fa-exclamation"></i> <span>WAIRING FOR APPROVE</span></div>
                                                        @break

                                                        @case('approved')
                                                        <span class="er-status"><i class="er-status-icon fa-approve-all"></i> APPROVE</span>
                                                        @break

                                                        @case('reject')
                                                        <span class="er-status"><i class="er-status-icon text-danger fa fa-times-circle-o"></i> REJECTED</span>
                                                        @break

                                                        @default
                                                        <span class="er-status"><i class="er-status-icon fa-approve-all"></i> APPROVE</span>
                                                    @endswitch
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
														</span>
                                                        <p>Edit</p>
                                                    </button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
														</span>
                                                        <p>Delete</p>
                                                    </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </h4>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <!--  tab  !-->
                <!--  tab  !-->
                <div class="tab-pane" id="complete">
                    <div class="panel-group" role="tablist" aria-multiselectable="true">
                        @for($a = 1; $a <= 20; $a++)
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <table class="table er-table">
                                            <tbody>
                                            <tr>
                                                <td class="tr-checkbox">
                                                    <input type="checkbox" class="iCheck" />
                                                </td>
                                                <td>
                                                    <label>DD/MM/YYYY</label>
                                                    <div>
                                                        {{ $faker->date('d/m/Y') }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <label>COMPANY</label>
                                                    <div>
                                                        {{ $faker->company }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <label>EVENT</label>
                                                    <div>
                                                        {{ $faker->sentence() }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <label>AMOUNT</label>
                                                    <div>
                                                        {{ number_format($faker->numberBetween(1000, 999999), 2) }} THB
                                                    </div>
                                                </td>
                                                <td>
                                                    @switch($faker->randomElement(['pending', 'approved', 'reject']))
                                                        @case('pending')
                                                        <div class="er-status waiting"><i class="er-status-icon fa-exclamation"></i> <span>WAIRING FOR APPROVE</span></div>
                                                        @break

                                                        @case('approved')
                                                        <span class="er-status"><i class="er-status-icon fa-approve-all"></i> APPROVE</span>
                                                        @break

                                                        @case('reject')
                                                        <span class="er-status"><i class="er-status-icon text-danger fa fa-times-circle-o"></i> REJECTED</span>
                                                        @break

                                                        @default
                                                        <span class="er-status"><i class="er-status-icon fa-approve-all"></i> APPROVE</span>
                                                    @endswitch
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
														</span>
                                                        <p>Edit</p>
                                                    </button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-ngin btn-default">
														<span class="btn-label">
															<i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
														</span>
                                                        <p>Delete</p>
                                                    </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </h4>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <!--  tab  !-->
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
    <script src="{{ asset('js/back-office/other/expense-requisition/index.js') }}"></script>
@endsection