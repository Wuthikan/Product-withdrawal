{{-- 
    @author: วราทัศน์ พานทองถาวร
    @phone: 087-806-5868
    @email: boss119@hotmail.com
--}}

@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/marketing/promotion/condition-group/show.css')}}"/>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
<div class="form-group">
    <button type="button" class="btn btn-default-background" onclick="window.location='{{ route('backOffice.marketing.promotion.condition-group.condition.create', ['promotion_id' => 1, 'conditiongroup_id' => 2]) }}'">
        <span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
    </button>
</div>
<div class="container-fluid">
		<div class="header-content">
            <div class="row bx-padding">
                <div class="col-xs-12 title">
                    <div class="col-xs-4 col-sm-3">
                        <span>Name Promotion:<p>Lorem ipsum</p></span>
                    </div>
                    <div class="col-xs-4 col-sm-push-1">
                        <span>Name ConditionGroup:<p>Lorem ipsum</p></span>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-sm-push-2">
                        <span>Type:<p>OR</p></span>
                    </div>
                </div>
            </div>          
            <div class="panel-body content scroll-2">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="records table-responsive">
                            <div class="records__item">
                                <div class="col-xs-3 col-lg-push-1 records__detail">
                                    <h4>Purchase amount = 1</h4>
                                </div>

                                <div class="col-xs-9 records__action">
                                    <button type="button" class="btn btn-ngin btn-default customWidth">
                                        <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                        <span class="text">Edit</span>
                                    </button>
                                    <button type="button" class="btn btn-ngin btn-default customWidth">
                                        <span class="btn-label left"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                                        <span class="text">Duplicate</span>
                                    </button>
                                    <button type="submit" class="btn btn-ngin btn-default customWidth">
                                        <span class="btn-label left"><i class="fa fa-undo info" aria-hidden="true"></i></span>
                                        <span class="text">Undo</span>
                                    </button>
                                    <button type="submit" class="btn btn-ngin btn-default customWidth">
                                        <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                        <span class="text">Delete</span>
                                    </button>
                                </div>

                            </div>
                            <!-- End Item -->
                            <div class="records__item">
                                <div class="col-xs-3 col-lg-push-1 records__detail">
                                    <h4>Total price before vat > 500 bath</h4>
                                </div>

                                <div class="col-xs-9 records__action">
                                    <button type="button" class="btn btn-ngin btn-default customWidth">
                                        <span class="btn-label left"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                                        <span class="text">Edit</span>
                                    </button>
                                    <button type="button" class="btn btn-ngin btn-default customWidth">
                                        <span class="btn-label left"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                                        <span class="text">Duplicate</span>
                                    </button>
                                    <button type="submit" class="btn btn-ngin btn-default customWidth">
                                        <span class="btn-label left"><i class="fa fa-undo info" aria-hidden="true"></i></span>
                                        <span class="text">Undo</span>
                                    </button>
                                    <button type="submit" class="btn btn-ngin btn-default customWidth">
                                        <span class="btn-label left"><i class="fa fa-times-circle-o ngin-red" aria-hidden="true"></i></span>
                                        <span class="text">Delete</span>
                                    </button>
                                </div>

                            </div>
                            <!-- End Item -->
                        </div>
                    </div>
                </div>
            </div>  
            <div class="row  bx-padding">
				<div class="col-xs-12 m-auto bx-border">
					<fieldset class="text-center">
                        <button type="button" class="btn btn-ngin btn-default ">
                            <span class="btn-label"><i class="fa fa-save success" aria-hidden="true"></i></span>SAVE
                        </button>
                        <button type="button" class="btn btn-ngin btn-default ">
                            <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL
                        </button>
                    </fieldset>
				</div>
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
    <script src="{{ asset('js/back-office/marketing/promotion/condition-group/show.js') }}"></script>
    <script type="text/javascript">
		$(document).ready(function(){
            //Set Label Header Page
			$('#lbHeaderPage').html("<h3>PROMOTION | CONDITIONGROUP | <span>SHOW</span></h3>");
		});
	</script>
@endsection