{{-- 
    @author: วราทัศน์ พานทองถาวร
    @phone: 087-806-5868
    @email: boss119@hotmail.com
--}}

@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/marketing/promotion/create.css')}}"/>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
<div class="container">
<div class="row">
    <div class="col-xs-12">
        <form action="" method="" id="" class="">
            <div class="wrapper-inside">
                <div class="row">
                    <div class="col-xs-1"></div>
                        <div class="col-xs-10">
                            <div class="row line">
                                <div class="col-xs-12 m-auto header-content">
                                    <fieldset>
                                        <div class="form-group form-group--inline">
                                            <label class="control-label">Can combine</label>
                                            <label class="switch">
                                                <input type="checkbox" class="switchCheck">
                                                <span class="slider round"></span>
                                            </label>
                                            <label class="control-label">ON-OFF</label>
                                            <label class="switch">
                                                <input type="checkbox" class="switchCheck" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-5 m-auto">
                                    <fieldset>
                                        <div class="form-group form-group--inline">
                                            <label>NAME</label><br>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ old('name') }}" required>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-xs-12 col-md-2 m-auto"></div>
                                <div class="col-xs-12 col-md-5 m-auto">
                                    <fieldset>
                                        <div class="form-group form-group--inline">
                                            <label>LIMIT</label><br>
                                            <input type="text" class="form-control space-text" name="limit_number" id="limit_number" placeholder="Limit" value="{{ old('limit_number') }}" required>												
                                            <label>Time</label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-5 m-auto">
                                    <fieldset>
                                        <div class="form-group">
											<label for="exampleInputPassword1">START DATE</label>
											<div class='input-group date' id='datetimepicker' >
												<input type='text' class="form-control" />
												<span class="input-group-addon">
													<i class="fa fa-calendar" ></i>
												</span>
											</div>
										</div>
                                    </fieldset>
                                </div>
                                <div class="col-xs-12 col-md-2 m-auto txt-to">
                                    <div class="form-group">
                                        <label>To</label>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-5 m-auto txt-to-date">
                                    <fieldset>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker2' >
                                                <input type='text' class="form-control" />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" ></i>
                                                </span>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-12 m-auto">
                                    <fieldset>
                                        <div class="form-group form-group--inline">
                                            <label>DESCRIPTION</label><br>
                                            <textarea type="text" class="form-control" name="description" id="description" placeholder="Description"></textarea>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-xs-12 col-md-1 m-auto"></div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 m-auto">
                                    <div class="row line line">
                                        <div class="col-xs-12 col-md-6 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline">
                                                    <h2>CONDITION:</h2>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-md-4 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline">
                                                    <label>GROUP NAME:</label><br>
                                                    <input type="text" class="form-control" name="name_group" id="name_group" value="{{ old('name_group') }}" required>																								
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-md-2 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline mgtop">
                                                    <div class="dropdown">
                                                        <button class="btn btn-grey dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Group
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="{{ route('backOffice.marketing.promotion.condition-group.show', ['promotion_id' => '1', 'type' => 'or'])}}">Add Type OR</a></li>
                                                            <li><a href="{{ route('backOffice.marketing.promotion.condition-group.show', ['promotion_id' => '1', 'type' => 'and'])}}">Add Type AND</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12 col-sm-12 m-auto">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <div class="group-name">
                                                        <input type="checkbox" class="iCheck" />
                                                        <label for="checkbox">GROUP NAME: <span>Bakery</span></label>
                                                    </div>
                                                    <div class="condition pull-center">
                                                        <label>CONDITION: <span>OR</span></label>
                                                    </div>
                                                    <div class="pull-right btn-action">
                                                        <a href="" class="pencil"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <a href="" class="trash"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="group-name">
                                                        <input type="checkbox" class="iCheck" />
                                                        <label for="checkbox">GROUP NAME: <span>Japanese cartoon</span></label>
                                                    </div>
                                                    <div class="condition pull-center">
                                                        <label>CONDITION: <span>OR</span></label>
                                                    </div>
                                                    <div class="pull-right btn-action">
                                                        <a href="" class="pencil"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <a href="" class="trash"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 m-auto">
                                    <div class="row line">
                                        <div class="col-xs-12 col-md-6 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline">
                                                    <h2>BENEFITS:</h2>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="circle"></div>
                                        <div class="col-xs-12 col-md-3 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline">
                                                    <label>FREE PRODUCT</label>
                                                    <select name="" id="" class="selectpicker form-control">
                                                        <option value="1">Book</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-md-3 m-auto">
                                            <fieldset>
                                                    <div class="form-group form-group--inline">
                                                        <label>SIZE</label>
                                                        <select name="" id="" class="selectpicker form-control">
                                                            <option value="1">BOX</option>
                                                            <option value="2">SHEET</option>
                                                        </select>
                                                    </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-md-6 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline">
                                                    <label>AMOUNT</label>
                                                    <input type="text" class="form-control" name="" id="">
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="circle"></div>
                                        <div class="col-xs-12 col-md-3 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline">
                                                    <label>DISCOUNT/SHEET</label>
                                                    <select name="" id="" class="selectpicker form-control">
                                                        <option value="1">5</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-md-3 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline">
                                                    <label>SIZE</label>
                                                    <select name="" id="" class="selectpicker form-control">
                                                        <option value="1">BAHT</option>
                                                        <option value="2">%</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-md-6 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline">
                                                    <label>UP TO</label>
                                                    <input type="text" class="form-control space-text" name="" id="">
                                                    <label>Baht</label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="circle"></div>
                                        <div class="col-xs-12 col-md-4 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline">
                                                    <label>BY PRODUCT FROM ITEM TYPE</label>
                                                    <select name="" id="" class="selectpicker form-control">
                                                        <option value="1">AA</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-md-2 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline mgtop">
                                                    <select name="" id="" class="selectpicker form-control">
                                                        <option value="1">AT PRICE</option>
                                                        <option value="2">BY DISCOUNT</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-md-2 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline mgtop">
                                                    <input type="text" class="form-control" name="" id="">
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-md-2 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline mgtop">
                                                    <select name="" id="" class="selectpicker form-control">
                                                        <option value="1">Baht</option>
                                                        <option value="2">%</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-md-2 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline">
                                                    <label>UP TO</label>
                                                    <input type="text" class="form-control space-text" name="" id="">
                                                    <label>Baht</label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="circle"></div>
                                        <div class="col-xs-12 col-md-4 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline">
                                                    <label>BY PRODUCT WITH TAGS</label>
                                                    <select name="" id="" class="selectpicker form-control">
                                                        <option value="1">AA</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-md-2 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline mgtop">
                                                    <select name="" id="" class="selectpicker form-control">
                                                        <option value="1">AT PRICE</option>
                                                        <option value="2">BY DISCOUNT</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-md-2 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline mgtop">
                                                    <input type="text" class="form-control" name="" id="">
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-md-2 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline mgtop">
                                                    <select name="" id="" class="selectpicker form-control">
                                                        <option value="1">Baht</option>
                                                        <option value="2">%</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-md-2 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline">
                                                    <label>UP TO</label>
                                                    <input type="text" class="form-control space-text" name="" id="">
                                                    <label>Baht</label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="circle"></div>
                                        <div class="col-xs-12 col-md-4 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline">
                                                    <label>BY SINGLE PRODUCT</label>
                                                    <select name="" id="" class="selectpicker form-control">
                                                        <option value="1">AA</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-md-2 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline mgtop">
                                                    <select name="" id="" class="selectpicker form-control">
                                                        <option value="1">AT PRICE</option>
                                                        <option value="2">BY DISCOUNT</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-md-2 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline mgtop">
                                                    <input type="text" class="form-control" name="" id="">
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-md-2 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline mgtop">
                                                    <select name="" id="" class="selectpicker form-control">
                                                        <option value="1">Baht</option>
                                                        <option value="2">%</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-md-2 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline">
                                                    <label>UP TO</label>
                                                    <input type="text" class="form-control space-text" name="" id="">
                                                    <label>Baht</label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="circle"></div>
                                        <div class="col-xs-12 col-md-3 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline">
                                                    <label>SHIPPING</label>
                                                    <select name="" id="" class="selectpicker form-control">
                                                        <option value="1">Air</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-md-3 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline mgtop">
                                                    <select name="" id="" class="selectpicker form-control">
                                                        <option value="1">FREE</option>
                                                        <option value="2">AT PRICE</option>
                                                        <option value="2">BY DISCOUNT</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-md-3 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline mgtop">
                                                    <input type="text" class="form-control" name="" id="">
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-md-3 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline mgtop">
                                                    <select name="" id="" class="selectpicker form-control">
                                                        <option value="1">Baht</option>
                                                        <option value="2">%</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="circle"></div>
                                        <div class="col-xs-12 col-md-3 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline">
                                                    <label>DISCOUNT</label>
                                                    <select name="" id="" class="selectpicker form-control">
                                                        <option value="1">AA</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-md-3 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline mgtop">
                                                    <select name="" id="" class="selectpicker form-control">
                                                        <option value="1">Baht</option>
                                                        <option value="2">%</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-md-6 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline mgtop">
                                                    <label>FROM TOTAL PRICE BEFORE VAT</label>
                                                    <input type="text" class="form-control space-2" name="" id="">
                                                    <label>Baht</label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="circle"></div>
                                        <div class="col-xs-12 col-md-3 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline">
                                                    <label>REWARD POINTS</label>
                                                    <select name="" id="" class="selectpicker form-control">
                                                        <option value="+">+</option>
                                                        <option value="-">-</option>
                                                        <option value="*">x</option>
                                                        <option value="/">/</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-md-3 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline mgtop">
                                                    <input type="text" class="form-control space-text" name="" id="">
                                                    <label>Points</label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="circle"></div>
                                        <div class="col-xs-12 col-md-12 m-auto">
                                            <fieldset>
                                                <div class="form-group form-group--inline">
                                                    <label>OTHER</label>
                                                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 m-auto">
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
                        <div class="col-xs-1"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/marketing/promotion/create.js') }}"></script>
    <script type="text/javascript">
		$(function () {
			$('#datetimepicker').datetimepicker();
			$('#datetimepicker2').datetimepicker();
		});
        $(document).ready(function(){
            //Set Label Header Page
			$('#lbHeaderPage').html("<h3>PROMOTION | <span>CREATE</span></h3>");
		});
	</script>
@endsection