@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/general/create.css')}}"/>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
   <!-- MESSAGES -->
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <!-- ERROR MESSAGES -->
    @if ($errors->count())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
    @endif

    <div class="x_content scroll-2">
        <div class="general-create">
            <form action="{{ route('backOffice.setting.general.store') }}" method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="row row-first">
                    <div class="col-md-12">
                        <fieldset class="form-group">
                            <label class="control-label" for="company_name">Company Name: </label>
                            <div class="input">
                                <input type="text" class="form-control" name="company_name" value="{{$request->old('company_name',$general->company_name)}}" placeholder="Sample Co., Ltd." id="company_name">
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <label class="control-label" for="tax_no">Tax Identification Number: </label>
                            <div class="input">
                                <input type="text" class="form-control" name="tax_no" value="{{$request->old('tax_no',$general->tax_no)}}" placeholder="8888888888888" id="tax_no">
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <label class="control-label" for="address">Billing Address</label>
                            <div class="input">
                                <textarea id="address" name="address" class="form-control">{{$request->old('address',$general->address)}}</textarea>
                            </div>
                        </fieldset>

                        <div class="row">
                            <fieldset class="form-group col-md-3">
                                <label class="control-label" for="postcode">Postcode</label>
                                <div class="input">
                                    <input type="text" class="form-control" id="postcode" name="postcode" value="{{old('postcode')}}" placeholder="" >
                                </div>
                            </fieldset>
                            <fieldset class="form-group col-md-3">
                                <label class="control-label" for="district">District</label>
                                <select id="basic" class="form-control">
      								<option>Lorem Ipsum</option>
      								<option>Lorem Ipsum</option>
      								<option>Lorem Ipsum</option>
      							</select>
                            </fieldset>
                            <fieldset class="form-group col-md-3 vertical-center">
                                <label class="control-label" for="sub-district">
                                    District<span>Lorem Ipsum</span>
                                </label>
                            </fieldset>
                            <fieldset class="form-group col-md-3 vertical-center">
                                <label class="control-label" for="province">
                                    Province<span>Lorem Ipsum</span>
                                </label>
                            </fieldset>
                        </div>

                            <div class="row">
                                <fieldset class="form-group col-xs-12 col-sm-6 col-md-3 logo">
                                    <label class="control-label" for="file-logo">Logo:</label>
                                    <div class="input">
                                        <div class="input-file">
                                            <a href="#file-logo">
                                                <img class="img-responsive"  src="{{asset('images/backOffice/setting/general/default-logo.jpg')}}" alt="" />
                                            </a>
                                            <input type="file" name="logo" id="file-logo" />
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group col-xs-12 col-sm-6 col-md-9">
                                    <label class="control-label" for="alias">Initial: </label>
                                    <div class="input">
                                        <input type="text" class="form-control" name="alias" 
                                        value="{{$request->old('alias',$general->alias)}}" placeholder="Ngin" id="alias">
                                    </div>
                                </fieldset>
                            </div>

                            <div class="row">
                                <div class="background">
                                    <fieldset class="form-group col-xs-12">
                                        <label class="control-label" for="file-background">Background</label>
                                        <div class="input">
                                            <div class="input-file">
                                                <a class="background" href="#file-background">
                                                    <img class="img-responsive" src="{{asset('images/backOffice/setting/general/sample-image.jpg')}}" alt="" />
                                                    <input type="file" name="background" value="{{old('background')}}" id="file-background" />
                                                </a>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="alert">
                              <fieldset class="form-group" style="padding-left: 0 !important;">
                                  <label class="control-label" for="smtp">Alert: </label>
                                  <hr class="line-black"/>
                              </fieldset>
                                <div class="row">
                                    <div class="col-xs-4 first-col">
                                        <fieldset class="form-group">
                                            <div class="form-inline">
                                                <div class="input">
                                                    <input type="text" class="form-control" name="alert_days_before_pre_po_end" value="{{$request->old('alert_days_before_pre_po_end',$general->alert_days_before_pre_po_end)}}" placeholder="0" id="day1">
                                                </div>
                                                <label class="control-label" for="alert_days_before_pre_po_end">
                                                    Day before pre-PO ends
                                                </label>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <div class="form-inline">
                                                <div class="input">
                                                    <input type="text" class="form-control" name="alert_days_before_initial_po_end" 
                                                    value="{{$request->old('alert_days_before_initial_po_end',$general->alert_days_before_initial_po_end)}}" placeholder="0" id="day4">
                                                </div>
                                                <label class="control-label" for="alert_days_before_initial_po_end">
                                                    Day before initial-PO ends
                                                </label>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <div class="form-inline">
                                                <div class="input">
                                                    <input type="text" class="form-control" name="alert_days_before_post_po_end" 
                                                    value="{{$request->old('alert_days_before_post_po_end',$general->alert_days_before_post_po_end)}}" placeholder="0" id="day7">
                                                </div>
                                                <label class="control-label" for="day7">
                                                    Day before post-PO ends
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>

                                    <div class="col-xs-8">
                                        <div class="row">
                                            <div class="col-xs-6 first">
                                                <fieldset class="form-group">
                                                    <div class="form-inline">
                                                        <div class="input">
                                                            <input type="text" class="form-control" name="alert_hours_after_no_approval_attempt_1" 
                                                            value="{{$request->old('alert_hours_after_no_approval_attempt_1',$general->alert_hours_after_no_approval_attempt_1)}}"
                                                            placeholder="0" id="alert_hours_after_no_approval_attempt_1">
                                                        </div>
                                                        <label class="control-label" for="alert_hours_after_no_approval_attempt_1">
                                                            Hours After No Approval Attemp (1st)
                                                        </label>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <div class="form-inline">
                                                        <div class="input">
                                                            <input type="text" class="form-control" name="alert_hours_after_no_approval_attempt_2"
                                                             value="{{$request->old('alert_hours_after_no_approval_attempt_2',$general->alert_hours_after_no_approval_attempt_2)}}"
                                                              placeholder="0" id="alert_hours_after_no_approval_attempt_2">
                                                        </div>
                                                        <label class="control-label" for="alert_hours_after_no_approval_attempt_2">
                                                            Hours After No Approval Attemp (2nd)
                                                        </label>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <div class="form-inline">
                                                        <div class="input">
                                                            <input type="text" class="form-control" name="alert_days_before_billing_due"
                                                             value="{{$request->old('alert_days_before_billing_due',$general->alert_days_before_billing_due)}}"
                                                              placeholder="0" id="alert_days_before_billing_due">
                                                        </div>
                                                        <label class="control-label" for="alert_days_before_billing_due">
                                                            Days Before Billing Due Date
                                                        </label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-xs-6">
                                                <fieldset class="form-group">
                                                    <div class="form-inline">
                                                        <div class="input">
                                                            <input type="text" class="form-control" name="alert_hours_after_no_approval_attempt_3"
                                                             value="{{$request->old('alert_hours_after_no_approval_attempt_3',$general->alert_hours_after_no_approval_attempt_3)}}"
                                                              placeholder="0" id="alert_hours_after_no_approval_attempt_3">
                                                        </div>
                                                        <label class="control-label" for="alert_hours_after_no_approval_attempt_3">
                                                            Hours After No Approval Attemp (3rd)
                                                        </label>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <div class="form-inline">
                                                        <div class="input">
                                                            <input type="text" class="form-control" name="alert_hours_after_no_approval_attempt_4"
                                                                value="{{$request->old('alert_hours_after_no_approval_attempt_4',$general->alert_hours_after_no_approval_attempt_4)}}"
                                                                 placeholder="0" id="alert_hours_after_no_approval_attempt_4">
                                                        </div>
                                                        <label class="control-label" for="day6">
                                                            Hours After No Approval Attemp (4th)
                                                        </label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 deleted-unpaid">
                                        <span style="padding-right: 10px;">Deleted unpaid so automatically after</span>
                                        <span><input type="text" class="form-control" placeholder="0"></span>
                                        <span style="padding-left: 10px;">Days</span>
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="row">
                                            <div class="col-xs-6 first">
                                                <fieldset class="form-group">
                                                    <div class="form-inline">
                                                        <div class="input">
                                                            <input type="text" class="form-control" placeholder="0">
                                                        </div>
                                                        <label class="control-label" for="day2">
                                                            Days to delete unpaid SO automatically
                                                        </label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-xs-6"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="email-server">
                                <div class="row">
                                    <fieldset class="form-group col-xs-12">
                                        <label class="control-label" for="smtp">Email Server: </label>
                                        <hr class="line-black"/>
                                    </fieldset>
                                    <fieldset class="form-group col-md-6">
                                        <label class="control-label" for="username">Username: </label>
                                        <div class="input">
                                            <input type="text" class="form-control" name="username" value="{{old('username')}}" placeholder="Username" id="username">
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group col-md-6">
                                        <label class="control-label" for="password">Password: </label>
                                        <div class="input">
                                            <input type="password" class="form-control" name="password" placeholder="Password" id="password" require>
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group col-md-8">
                                        <label class="control-label" for="server">Server: </label>
                                        <div class="input">
                                            <input type="text" class="form-control" name="server" value="{{old('server')}}" placeholder="Server" id="server">
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group col-md-2">
                                        <label class="control-label" for="port">Port: </label>
                                        <div class="input">
                                            <input type="text" class="form-control" name="port" value="{{old('port')}}" placeholder="Port" id="port">
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group col-md-2">
                                        <label class="control-label" for="type">Type: </label>
                                        <div class="input">
                                            <select id="type" name="type" class="form-control">
                                                @for($i=0; $i<6; $i++)
                                                <option value="{{$i}}" @if($i==old('type')) selected @endif>type-{{$i}}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="contact-detail">
                                <div class="row">
                                    <fieldset class="form-group col-xs-12">
                                        <label class="control-label" for="smtp">Contact Detail: </label>
                                        <hr class="line-black"/>
                                    </fieldset>
                                </div>
                                <div class="row">
                                    <fieldset class="form-group col-xs-12">
                                        <label class="control-label" for="facebook">Facebook: </label>
                                        <div class="input">
                                            <input type="text" class="form-control" name="facebook" value="{{old('facebook')}}" placeholder="Facebook" id="facebook">
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group col-xs-12">
                                        <label class="control-label" for="twitter">Twitter: </label>
                                        <div class="input">
                                            <input type="text" class="form-control" name="twitter" value="{{old('twitter')}}" placeholder="Twitter" id="twitter">
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group col-xs-12">
                                        <label class="control-label" for="line">LINE: </label>
                                        <div class="input">
                                            <input type="text" class="form-control" name="line" value="{{old('line')}}" placeholder="LINE" id="line">
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group col-xs-12">
                                        <label class="control-label" for="tel">Tel: </label>
                                        <div class="input">
                                            <input type="text" class="form-control" name="tel" value="{{old('tel')}}" placeholder="Tel" id="tel">
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group col-xs-12">
                                        <label class="control-label" for="billing_address">Google Analytics:</label>
                                        <div class="input">
                                            <textarea id="google_analytics" name="google_analytics" class="form-control">{{old('google_analytics')}}</textarea>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="button-actions">
                    <div class="row row-last">
                        <div class="col-xs-12">
                            <fieldset class="text-center">
                                <button type="submit" class="btn btn-ngin btn-default save"><span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i></span>SAVE</button>
                                <button type="button" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL</button>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/setting/general/create.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            //Set Label Header Page
            $('#lbHeaderPage').html("<h3>GENERAL | <span>CREATE</span></h3>");
            $('#district').val($('#postcode').val());

        });

        function readURL(input,imgId) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(imgId).attr('src', e.target.result);
                }@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/general/create.css')}}"/>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
   <!-- MESSAGES -->
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <!-- ERROR MESSAGES -->
    @if ($errors->count())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
    @endif

    <div class="x_content scroll-2">
        <div class="general-create">
            <form action="{{ route('backOffice.setting.general.store') }}" method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="row row-first">
                    <div class="col-md-12">
                        <fieldset class="form-group">
                            <label class="control-label" for="company_name">Company Name: </label>
                            <div class="input">
                                <input type="text" class="form-control" name="company_name" value="{{old('company_name')}}" placeholder="Sample Co., Ltd." id="company_name">
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <label class="control-label" for="tax_no">Tax Identification Number: </label>
                            <div class="input">
                                <input type="text" class="form-control" name="tax_no" value="{{old('tax_no')}}" placeholder="8888888888888" id="tax_no">
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <label class="control-label" for="address">Billing Address</label>
                            <div class="input">
                                <textarea id="address" name="address" class="form-control">{{old('address')}}</textarea>
                            </div>
                        </fieldset>

                        <div class="row">
                            <fieldset class="form-group col-md-3">
                                <label class="control-label" for="postcode">Postcode</label>
                                <div class="input">
                                    <input type="text" class="form-control" id="postcode" name="postcode" value="{{old('postcode')}}" placeholder="" >
                                </div>
                            </fieldset>
                            <fieldset class="form-group col-md-3">
                                <label class="control-label" for="district">District</label>
                                <select id="basic" class="form-control">
      								<option>Lorem Ipsum</option>
      								<option>Lorem Ipsum</option>
      								<option>Lorem Ipsum</option>
      							</select>
                            </fieldset>
                            <fieldset class="form-group col-md-3 vertical-center">
                                <label class="control-label" for="sub-district">
                                    District<span>Lorem Ipsum</span>
                                </label>
                            </fieldset>
                            <fieldset class="form-group col-md-3 vertical-center">
                                <label class="control-label" for="province">
                                    Province<span>Lorem Ipsum</span>
                                </label>
                            </fieldset>
                        </div>

                            <div class="row">
                                <fieldset class="form-group col-xs-12 col-sm-6 col-md-3 logo">
                                    <label class="control-label" for="file-logo">Logo:</label>
                                    <div class="input">
                                        <div class="input-file">
                                            <a href="#file-logo">
                                                <img class="img-responsive"  src="{{asset('images/backOffice/setting/general/default-logo.jpg')}}" alt="" />
                                            </a>
                                            <input type="file" name="logo" id="file-logo" />
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group col-xs-12 col-sm-6 col-md-9">
                                    <label class="control-label" for="initial">Initial: </label>
                                    <div class="input">
                                        <input type="text" class="form-control" name="initial" value="{{old('initial')}}" placeholder="Ngin" id="initial">
                                    </div>
                                </fieldset>
                            </div>

                            <div class="row">
                                <div class="background">
                                    <fieldset class="form-group col-xs-12">
                                        <label class="control-label" for="file-background">Background</label>
                                        <div class="input">
                                            <div class="input-file">
                                                <a class="background" href="#file-background">
                                                    <img class="img-responsive" src="{{asset('images/backOffice/setting/general/sample-image.jpg')}}" alt="" />
                                                    <input type="file" name="background" value="{{old('background')}}" id="file-background" />
                                                </a>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="alert">
                              <fieldset class="form-group" style="padding-left: 0 !important;">
                                  <label class="control-label" for="smtp">Alert: </label>
                                  <hr class="line-black"/>
                              </fieldset>
                                <div class="row">
                                    <div class="col-xs-4 first-col">
                                        <fieldset class="form-group">
                                            <div class="form-inline">
                                                <div class="input">
                                                    <input type="text" class="form-control" name="day1" value="{{old('day1')}}" placeholder="0" id="day1">
                                                </div>
                                                <label class="control-label" for="day1">
                                                    Day before pre-PO ends
                                                </label>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <div class="form-inline">
                                                <div class="input">
                                                    <input type="text" class="form-control" name="day4" value="{{old('day4')}}" placeholder="0" id="day4">
                                                </div>
                                                <label class="control-label" for="day4">
                                                    Day before initial-PO ends
                                                </label>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <div class="form-inline">
                                                <div class="input">
                                                    <input type="text" class="form-control" name="day7" value="{{old('day7')}}" placeholder="0" id="day7">
                                                </div>
                                                <label class="control-label" for="day7">
                                                    Day before post-PO ends
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>

                                    <div class="col-xs-8">
                                        <div class="row">
                                            <div class="col-xs-6 first">
                                                <fieldset class="form-group">
                                                    <div class="form-inline">
                                                        <div class="input">
                                                            <input type="text" class="form-control" name="day2" value="{{old('day2')}}" placeholder="0" id="day2">
                                                        </div>
                                                        <label class="control-label" for="day2">
                                                            Hours After No Approval Attemp (1st)
                                                        </label>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <div class="form-inline">
                                                        <div class="input">
                                                            <input type="text" class="form-control" name="day5" value="{{old('day5')}}" placeholder="0" id="day5">
                                                        </div>
                                                        <label class="control-label" for="day5">
                                                            Hours After No Approval Attemp (2nd)
                                                        </label>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <div class="form-inline">
                                                        <div class="input">
                                                            <input type="text" class="form-control" name="day8" value="{{old('day8')}}" placeholder="0" id="day8">
                                                        </div>
                                                        <label class="control-label" for="day8">
                                                            Days Before Billing Due Date
                                                        </label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-xs-6">
                                                <fieldset class="form-group">
                                                    <div class="form-inline">
                                                        <div class="input">
                                                            <input type="text" class="form-control" name="day3" value="{{old('day3')}}" placeholder="0" id="day3">
                                                        </div>
                                                        <label class="control-label" for="day3">
                                                            Hours After No Approval Attemp (3rd)
                                                        </label>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <div class="form-inline">
                                                        <div class="input">
                                                            <input type="text" class="form-control" name="day6" value="{{old('day6')}}" placeholder="0" id="day6">
                                                        </div>
                                                        <label class="control-label" for="day6">
                                                            Hours After No Approval Attemp (4th)
                                                        </label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 deleted-unpaid">
                                        <span style="padding-right: 10px;">Deleted unpaid so automatically after</span>
                                        <span><input type="text" class="form-control" placeholder="0"></span>
                                        <span style="padding-left: 10px;">Days</span>
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="row">
                                            <div class="col-xs-6 first">
                                                <fieldset class="form-group">
                                                    <div class="form-inline">
                                                        <div class="input">
                                                            <input type="text" class="form-control" placeholder="0">
                                                        </div>
                                                        <label class="control-label" for="day2">
                                                            Days to delete unpaid SO automatically
                                                        </label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-xs-6"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="email-server">
                                <div class="row">
                                    <fieldset class="form-group col-xs-12">
                                        <label class="control-label" for="smtp">Email Server: </label>
                                        <hr class="line-black"/>
                                    </fieldset>
                                    <fieldset class="form-group col-md-6">
                                        <label class="control-label" for="username">Username: </label>
                                        <div class="input">
                                            <input type="text" class="form-control" name="username" value="{{old('username')}}" placeholder="Username" id="username">
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group col-md-6">
                                        <label class="control-label" for="password">Password: </label>
                                        <div class="input">
                                            <input type="password" class="form-control" name="password" placeholder="Password" id="password" require>
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group col-md-8">
                                        <label class="control-label" for="server">Server: </label>
                                        <div class="input">
                                            <input type="text" class="form-control" name="server" value="{{old('server')}}" placeholder="Server" id="server">
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group col-md-2">
                                        <label class="control-label" for="port">Port: </label>
                                        <div class="input">
                                            <input type="text" class="form-control" name="port" value="{{old('port')}}" placeholder="Port" id="port">
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group col-md-2">
                                        <label class="control-label" for="type">Type: </label>
                                        <div class="input">
                                            <select id="type" name="type" class="form-control">
                                                @for($i=0; $i<6; $i++)
                                                <option value="{{$i}}" @if($i==old('type')) selected @endif>type-{{$i}}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="contact-detail">
                                <div class="row">
                                    <fieldset class="form-group col-xs-12">
                                        <label class="control-label" for="smtp">Contact Detail: </label>
                                        <hr class="line-black"/>
                                    </fieldset>
                                </div>
                                <div class="row">
                                    <fieldset class="form-group col-xs-12">
                                        <label class="control-label" for="facebook">Facebook: </label>
                                        <div class="input">
                                            <input type="text" class="form-control" name="facebook" value="{{old('facebook')}}" placeholder="Facebook" id="facebook">
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group col-xs-12">
                                        <label class="control-label" for="twitter">Twitter: </label>
                                        <div class="input">
                                            <input type="text" class="form-control" name="twitter" value="{{old('twitter')}}" placeholder="Twitter" id="twitter">
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group col-xs-12">
                                        <label class="control-label" for="line">LINE: </label>
                                        <div class="input">
                                            <input type="text" class="form-control" name="line" value="{{old('line')}}" placeholder="LINE" id="line">
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group col-xs-12">
                                        <label class="control-label" for="tel">Tel: </label>
                                        <div class="input">
                                            <input type="text" class="form-control" name="tel" value="{{old('tel')}}" placeholder="Tel" id="tel">
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group col-xs-12">
                                        <label class="control-label" for="billing_address">Google Analytics:</label>
                                        <div class="input">
                                            <textarea id="google_analytics" name="google_analytics" class="form-control">{{old('google_analytics')}}</textarea>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="button-actions">
                    <div class="row row-last">
                        <div class="col-xs-12">
                            <fieldset class="text-center">
                                <button type="submit" class="btn btn-ngin btn-default save"><span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i></span>SAVE</button>
                                <button type="button" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL</button>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/setting/general/create.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            //Set Label Header Page
            $('#lbHeaderPage').html("<h3>GENERAL | <span>CREATE</span></h3>");
            $('#district').val($('#postcode').val());

        });

        function readURL(input,imgId) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(imgId).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#logo").change(function(){
            readURL(this,'#preview_logo');
        });

        $("#background").change(function(){
            readURL(this,'#preview_background');
        });
    

    </script>
@endsection

              