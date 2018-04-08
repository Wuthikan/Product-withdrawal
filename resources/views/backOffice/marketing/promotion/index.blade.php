{{-- 
    @author: วราทัศน์ พานทองถาวร
    @phone: 087-806-5868
    @email: boss119@hotmail.com
--}}

@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/marketing/promotion/index.css')}}"/>
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
    <section class="panel-body panel-content scroll-2">
        <div class="row">
            <div class="col-xs-12 content scroll-2">
                <div class="records table-responsive" style='border:0px;overflow:hidden;'>
                    <div class="records__item">
                        <div class="records__check">
                            <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1"><span>BBBBBBBB</span>
                            <div class="status">
                                <span class="icon">
                                    <i class="fa-approve-all"></i>
                                </span>
                                Approve
                            </div>
                        </div>

                        <div class="records__detail">
                            <div class="records__description">
                                <div class="order">
                                    <div class="order__detail">
                                        <!-- <div class="order__title">
                                            <span>Limit / user</span>
                                        </div>
                                        <div class="order__description">
                                            <span>5</span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="order">
                                    <div class="order__detail">
                                        <div class="order__title">
                                            <span>Start / End</span>
                                        </div>
                                        <div class="order__description">
                                            <span>1/1/60 - 1/1/61</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="order">
                                    <div class="order__detail">
                                        <div class="order__title">
                                            <span>Active</span>
                                        </div>
                                        <div class="order__description">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round">
                                                    <label class="status__open">open</label>
                                                    <label class="status__close">close</label>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="records__action">
                            <button type="button" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                <span class="text">Edit</span>
                            </button>
                            <button type="button" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                                <span class="text">Duplicate</span>
                            </button>
                            <!-- <button type="submit" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-undo info" aria-hidden="true"></i></span>
                                <span class="text">Undo</span>
                            </button> -->
                            <button type="submit" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                <span class="text">Delete</span>
                            </button>
                        </div>

                    </div>
                    <!-- End Item -->
                    <div class="records__item">
                        <div class="records__check">
                            <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1"><span>BBBBBBBB</span>
                            <div class="status">
                                <span class="icon">
                                    <i class="fa-approve-all"></i>
                                </span>
                                Approve
                            </div>
                        </div>

                        <div class="records__detail">
                            <div class="records__description">
                                <div class="order">
                                    <div class="order__detail">
                                        <!-- <div class="order__title">
                                            <span>Limit / user</span>
                                        </div>
                                        <div class="order__description">
                                            <span>5</span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="order">
                                    <div class="order__detail">
                                        <div class="order__title">
                                            <span>Start / End</span>
                                        </div>
                                        <div class="order__description">
                                            <span>1/1/60 - 1/1/61</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="order">
                                    <div class="order__detail">
                                        <div class="order__title">
                                            <span>Active</span>
                                        </div>
                                        <div class="order__description">
                                            <!-- <span>1/1/60 - 1/1/61</span> -->
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round">
                                                    <label class="status__open">open</label>
                                                    <label class="status__close">close</label>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="records__action">
                            <button type="button" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                <span class="text">Edit</span>
                            </button>
                            <button type="button" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                                <span class="text">Duplicate</span>
                            </button>
                            <!-- <button type="submit" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-undo info" aria-hidden="true"></i></span>
                                <span class="text">Undo</span>
                            </button> -->
                            <button type="submit" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                <span class="text">Delete</span>
                            </button>
                        </div>

                    </div>
                    <!-- End Item -->
                    <div class="records__item">
                        <div class="records__check">
                            <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1"><span>BBBBBBBB</span>
                            <div class="status">
                                <span class="icon">
                                    <i class="fa fa-exclamation-triangle" style="color:#f7931c"></i>
                                </span>
                                WAITING FOR APPROVE
                            </div>
                        </div>

                        <div class="records__detail">
                            <div class="records__description">
                                <div class="order">
                                    <div class="order__detail">
                                        <!-- <div class="order__title">
                                            <span>Limit / user</span>
                                        </div>
                                        <div class="order__description">
                                            <span>5</span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="order">
                                    <div class="order__detail">
                                        <div class="order__title">
                                            <span>Start / End</span>
                                        </div>
                                        <div class="order__description">
                                            <span>1/1/60 - 1/1/61</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="order">
                                    <div class="order__detail">
                                        <div class="order__title">
                                            <span>Active</span>
                                        </div>
                                        <div class="order__description">
                                            <!-- <span>1/1/60 - 1/1/61</span> -->
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round">
                                                    <label class="status__open">open</label>
                                                    <label class="status__close">close</label>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="records__action">
                            <button type="button" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                <span class="text">Edit</span>
                            </button>
                            <button type="button" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                                <span class="text">Duplicate</span>
                            </button>
                            <!-- <button type="submit" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-undo info" aria-hidden="true"></i></span>
                                <span class="text">Undo</span>
                            </button> -->
                            <button type="submit" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                <span class="text">Delete</span>
                            </button>
                        </div>

                    </div>
                    <!-- End Item -->
                    <div class="records__item">
                        <div class="records__check">
                            <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1"><span>BBBBBBBB</span>
                            <div class="status">
                                <span class="icon">
                                    <i class="fa-approve-all"></i>
                                </span>
                                Approve
                            </div>
                        </div>

                        <div class="records__detail">
                            <div class="records__description">
                                <div class="order">
                                    <div class="order__detail">
                                        <!-- <div class="order__title">
                                            <span>Limit / user</span>
                                        </div>
                                        <div class="order__description">
                                            <span>5</span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="order">
                                    <div class="order__detail">
                                        <div class="order__title">
                                            <span>Start / End</span>
                                        </div>
                                        <div class="order__description">
                                            <span>1/1/60 - 1/1/61</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="order">
                                    <div class="order__detail">
                                        <div class="order__title">
                                            <span>Active</span>
                                        </div>
                                        <div class="order__description">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round">
                                                    <label class="status__open">open</label>
                                                    <label class="status__close">close</label>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="records__action">
                            <button type="button" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                <span class="text">Edit</span>
                            </button>
                            <button type="button" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                                <span class="text">Duplicate</span>
                            </button>
                            <!-- <button type="submit" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-undo info" aria-hidden="true"></i></span>
                                <span class="text">Undo</span>
                            </button> -->
                            <button type="submit" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                <span class="text">Delete</span>
                            </button>
                        </div>

                    </div>
                    <!-- End Item -->
                    <div class="records__item">
                        <div class="records__check">
                            <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1"><span>BBBBBBBB</span>
                            <div class="status">
                                <span class="icon">
                                    <i class="fa-approve-all"></i>
                                </span>
                                Approve
                            </div>
                        </div>

                        <div class="records__detail">
                            <div class="records__description">
                                <div class="order">
                                    <div class="order__detail">
                                        <!-- <div class="order__title">
                                            <span>Limit / user</span>
                                        </div>
                                        <div class="order__description">
                                            <span>5</span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="order">
                                    <div class="order__detail">
                                        <div class="order__title">
                                            <span>Start / End</span>
                                        </div>
                                        <div class="order__description">
                                            <span>1/1/60 - 1/1/61</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="order">
                                    <div class="order__detail">
                                        <div class="order__title">
                                            <span>Active</span>
                                        </div>
                                        <div class="order__description">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round">
                                                    <label class="status__open">open</label>
                                                    <label class="status__close">close</label>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="records__action">
                            <button type="button" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                <span class="text">Edit</span>
                            </button>
                            <button type="button" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                                <span class="text">Duplicate</span>
                            </button>
                            <!-- <button type="submit" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-undo info" aria-hidden="true"></i></span>
                                <span class="text">Undo</span>
                            </button> -->
                            <button type="submit" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                <span class="text">Delete</span>
                            </button>
                        </div>

                    </div>
                    <!-- End Item -->
                    <div class="records__item">
                        <div class="records__check">
                            <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1"><span>BBBBBBBB</span>
                            <div class="status">
                                <span class="icon">
                                    <i class="fa-delete-all"></i>
                                </span>
                                REDJECTED
                            </div>
                        </div>

                        <div class="records__detail">
                            <div class="records__description">
                                <div class="order">
                                    <div class="order__detail">
                                        <!-- <div class="order__title">
                                            <span>Limit / user</span>
                                        </div>
                                        <div class="order__description">
                                            <span>5</span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="order">
                                    <div class="order__detail">
                                        <div class="order__title">
                                            <span>Start / End</span>
                                        </div>
                                        <div class="order__description">
                                            <span>1/1/60 - 1/1/61</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="order">
                                    <div class="order__detail">
                                        <div class="order__title">
                                            <span>Active</span>
                                        </div>
                                        <div class="order__description">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round">
                                                    <label class="status__open">open</label>
                                                    <label class="status__close">close</label>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="records__action">
                            <button type="button" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                <span class="text">Edit</span>
                            </button>
                            <button type="button" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                                <span class="text">Duplicate</span>
                            </button>
                            <!-- <button type="submit" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-undo info" aria-hidden="true"></i></span>
                                <span class="text">Undo</span>
                            </button> -->
                            <button type="submit" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                <span class="text">Delete</span>
                            </button>
                        </div>

                    </div>
                    <!-- End Item -->
                    <div class="records__item">
                        <div class="records__check">
                            <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1"><span>BBBBBBBB</span>
                            <div class="status">
                                <span class="icon">
                                    <i class="fa-approve-all"></i>
                                </span>
                                Approve
                            </div>
                        </div>

                        <div class="records__detail">
                            <div class="records__description">
                                <div class="order">
                                    <div class="order__detail">
                                        <!-- <div class="order__title">
                                            <span>Limit / user</span>
                                        </div>
                                        <div class="order__description">
                                            <span>5</span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="order">
                                    <div class="order__detail">
                                        <div class="order__title">
                                            <span>Start / End</span>
                                        </div>
                                        <div class="order__description">
                                            <span>1/1/60 - 1/1/61</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="order">
                                    <div class="order__detail">
                                        <div class="order__title">
                                            <span>Active</span>
                                        </div>
                                        <div class="order__description">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round">
                                                    <label class="status__open">open</label>
                                                    <label class="status__close">close</label>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="records__action">
                            <button type="button" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                <span class="text">Edit</span>
                            </button>
                            <button type="button" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                                <span class="text">Duplicate</span>
                            </button>
                            <!-- <button type="submit" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-undo info" aria-hidden="true"></i></span>
                                <span class="text">Undo</span>
                            </button> -->
                            <button type="submit" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                <span class="text">Delete</span>
                            </button>
                        </div>

                    </div>
                    <!-- End Item -->
                    <div class="records__item">
                        <div class="records__check">
                            <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1"><span>BBBBBBBB</span>
                            <div class="status">
                                <span class="icon">
                                    <i class="fa-approve-all"></i>
                                </span>
                                Approve
                            </div>
                        </div>

                        <div class="records__detail">
                            <div class="records__description">
                                <div class="order">
                                    <div class="order__detail">
                                        <!-- <div class="order__title">
                                            <span>Limit / user</span>
                                        </div>
                                        <div class="order__description">
                                            <span>5</span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="order">
                                    <div class="order__detail">
                                        <div class="order__title">
                                            <span>Start / End</span>
                                        </div>
                                        <div class="order__description">
                                            <span>1/1/60 - 1/1/61</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="order">
                                    <div class="order__detail">
                                        <div class="order__title">
                                            <span>Active</span>
                                        </div>
                                        <div class="order__description">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round">
                                                    <label class="status__open">open</label>
                                                    <label class="status__close">close</label>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="records__action">
                            <button type="button" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                <span class="text">Edit</span>
                            </button>
                            <button type="button" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                                <span class="text">Duplicate</span>
                            </button>
                            <!-- <button type="submit" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-undo info" aria-hidden="true"></i></span>
                                <span class="text">Undo</span>
                            </button> -->
                            <button type="submit" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                <span class="text">Delete</span>
                            </button>
                        </div>

                    </div>
                    <!-- End Item -->
                    <div class="records__item">
                        <div class="records__check">
                                <input type="checkbox" class="iCheck" name="row[]" value="1" id="row_1"><span>BBBBBBBB</span>
                                <div class="status">
                                <span class="icon">
                                    <i class="fa-approve-all"></i>
                                </span>
                                Approve
                            </div>
                        </div>

                        <div class="records__detail">
                            <div class="records__description">
                                <div class="order">
                                    <div class="order__detail">
                                        <!-- <div class="order__title">
                                            <span>Limit / user</span>
                                        </div>
                                        <div class="order__description">
                                            <span>5</span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="order">
                                    <div class="order__detail">
                                        <div class="order__title">
                                            <span>Start / End</span>
                                        </div>
                                        <div class="order__description">
                                            <span>1/1/60 - 1/1/61</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="order">
                                    <div class="order__detail">
                                        <div class="order__title">
                                            <span>Active</span>
                                        </div>
                                        <div class="order__description">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round">
                                                    <label class="status__open">open</label>
                                                    <label class="status__close">close</label>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="records__action">
                            <button type="button" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                <span class="text">Edit</span>
                            </button>
                            <button type="button" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                                <span class="text">Duplicate</span>
                            </button>
                            <!-- <button type="submit" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-undo info" aria-hidden="true"></i></span>
                                <span class="text">Undo</span>
                            </button> -->
                            <button type="submit" class="btn btn-ngin btn-default" style="height: 29px;line-height: 22px;">
                                <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                <span class="text">Delete</span>
                            </button>
                        </div>

                    </div>
                    <!-- End Item -->
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

@section('top-right-sidebar')
    <div>Top Right Sidebar</div>
@endsection

@section('bottom-right-sidebar')
    <div>Bottom Right Sidebar</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/marketing/promotion/index.js') }}"></script>
    <script type="text/javascript">
		$(document).ready(function(){
            //Set Label Header Page
			$('#lbHeaderPage').html("<h3>PROMOTION | <span>INDEX</span></h3>");
		});
	</script>
@endsection