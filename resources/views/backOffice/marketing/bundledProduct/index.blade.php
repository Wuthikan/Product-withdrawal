@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/marketing/bundled-product/index.css')}}"/>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
<div class="container-fluid x_content">
    <section class="section-header-index">
        <form class="form-inline form-header-index">
            <div class="row">
                <table style="width: 100%">
                <tr>
                    <td class="col-1" style="min-width: inherit;width: 260px;">
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
                    <td class="col-3" style="min-width: inherit;width: 268px;">
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
    <section>
        <div class="panel-content scroll-2">
            <div style="padding-right: 20px">
                @for($i = 0; $i<10; $i++)
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading{{$i}}">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}" aria-expanded="{{$i==0?'true':'false'}}" aria-controls="collapse{{$i}}">
                            <div class="detial">
                                    <div class="row" style="align-items: center; display: flex;">
                                        <div class="col-xs-4">
                                            <table width="100%">
                                                <tr>
                                                    <td class="checkboxCtl">
                                                        <div class="records__check">
                                                            <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="bundleName">
                                                            EXAMPLE BUNDLE
                                                        </div>
                                                        <div class="bundlePrice">
                                                            125 THB
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-xs-3">
                                            <div class="dateText">START - END</div>
                                            <div class="dateBox">17/09/60 - 18/09/60</div>
                                        </div>
                                        <div class="col-xs-3 text-center">
                                            <?php
                                                $rand_test = rand(1,3);
                                            ?>
                                            
                                            <div class=
                                                {{ $rand_test == 1 ? 'dateColor1' : '' }}
                                                {{ $rand_test == 2 ? 'dateColor2' : '' }}
                                                {{ $rand_test == 3 ? 'dateColor3' : '' }}
                                            >
                                            
                                            {{ $rand_test == 1 ? 'REJECTED' : '' }}
                                            {{ $rand_test == 2 ? 'WAITTING FOR APPROVAL' : '' }}
                                            {{ $rand_test == 3 ? 'APPROVED' : '' }}
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="clearfix" id="statusBox">
                                                <div class="pull-left" id="statusText">STATUS </div>
                                                <div class="pull-left">
                                                    <input type="checkbox" class="switchCheck" checked>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div id="collapse{{$i}}" class="panel-collapse collapse {{$i==0?'in':''}}" role="tabpanel" aria-labelledby="heading{{$i}}">
                        <div class="panel-body">
                            <div class="bundleBox">
                                <div class="bundleContent">
                                    <div class="bundleDetail">
                                        <div class="bundleDescription">
                                        <div class="marginBottom-space">
                                          <span class="bold">
                                            REMARK : 
                                          </span>
                                          <span class="detail" style="margin-left: 20px;">
                                            Lorem ipsum dolor sit armet, consecteruer adipisscing elit, sed diam nonummy nibh euismod tinciduntut laoreet dolore mangna atiquam volutpat. Ut wisi enim
                                          </span>
                                        </div>
                                        <div class="marginBottom-space">
                                          <span class="bold">
                                            ราคา TIER : 
                                          </span>
                                          <span class="detail">
                                            <span id="tier" class="colorGreen">GD 1,590 บาท</span>
                                            <span id="tier" class="colorBlue">PAD 1,590 บาท</span>
                                            <span id="tier" class="colorOrange">MT 1,590 บาท</span>
                                          </span>
                                        </div>
                                        </div>
                                        <div class="bundleItems">
                                            <div class="itemScroll">
                                                <ul>
                                                @for($iItem = 0; $iItem < 10; $iItem++)
                                                <li>
                                                    <img src="https://static-cdn.jtvnw.net/ttv-boxart/Dota%202-138x190.jpg" alt="dota 2">
                                                    <div class="bundleItemName">Dota 2</div>
                                                    <div class="bundleItemPrice">10 BAHT</div>
                                                </li>
                                                <!-- end bundle item -->
                                                @endfor
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bundleAction">
                                        <button type="button" class="btn btn-ngin btn-default" style="text-align: center;height: 28px;line-height: 21px;">
                                            <span class="btn-label" style="float: left;"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                            <div style="display: inherit; margin-top: 3px;">
                                            Edit
                                            </div>
                                        </button>
                                        <button type="button" class="btn btn-ngin btn-default" style="text-align: center;height: 28px;line-height: 21px;">
                                            
                                            <span class="btn-label" style="float: left;"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                                            <div style="display: inherit; margin-top: 3px;">
                                            Duplicate
                                            </div>
                                        </button>
                                        <button type="button" class="btn btn-ngin btn-default" style="text-align: center;height: 28px;line-height: 21px;">
                                            <span class="btn-label" style="float: left;"><i class="fa fa-undo info" aria-hidden="true"></i></span>
                                            <div style="display: inherit; margin-top: 3px;">
                                            Undo
                                            </div>
                                        </button>
                                        <button type="button" class="btn btn-ngin btn-default" style="text-align: center;height: 28px;line-height: 21px;">
                                            <span class="btn-label" style="float: left;"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                                            <div style="display: inherit; margin-top: 3px;">
                                            Delete
                                            </div>
                                        </button>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    <section>
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
    </section>
</div>
@endsection

@section('top-right-sidebar')
@endsection

@section('script')
    <script src="{{ asset('js/back-office/marketing/bundled-product/index.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        //Set Label Header Page
        $('#lbHeaderPage').html("<h3>BUNDLED PRODUCTS | <span>INDEX</span></h3>");
    });
    </script>
@endsection
