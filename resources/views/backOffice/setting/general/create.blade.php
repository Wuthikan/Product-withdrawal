@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/general/create.css')}}"/>
    <style>
    .tt-dataset{
        font-size : 15px;
        background : #fff;

    }
    .tt-dataset .tt-suggestion{
        border-bottom : 1px solid #999999;
        padding: 6px 12px;
        cursor:pointer;
    }
    .tt-dataset .tt-suggestion:hover{
        background : #e7e7e7;
    }
    .empty-message {
        font-size : 15px;

        background : #fff;
        padding: 5px 10px;
        text-align: center;
        }
    </style>
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
                <input type="hidden" id="id" name="id" value="{{ $request->old('id',$general->id) }}" >

                <div class="row row-first">
                    <div class="col-md-12">
                        <fieldset class="form-group">
                            <label class="control-label" for="company_name">Company Name: </label>
                            <div class="input">
                                <input type="text" class="form-control" name="company_name" value="{{$request->old('company_name',$general->company_name)}}" placeholder="Sample Co., Ltd." id="company_name">
                            </div>
                            <!-- @if ($errors->has('company_name'))
										<div class="has-error">
											<label for="input" class="col-sm-9 col-sm-offset-3 control-label">
											@foreach ($errors->get('company_name') as $message)
												{{$message}}
											@endforeach
											</label>
										</div>
							@endif -->
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
                            <fieldset class="form-group col-md-4">
                                <label class="control-label" for="postcode">Postcode</label>
                                <div style="position: relative;">
                                    <div class="input" style="position: absolute; width: 100%;"  id="test-c">
                                        <input type="text" class="form-control" name="postcode" value="{{$request->old('postcode',$general->postcode)}}" placeholder=""  readonly>
                                    </div>
                                    <div class="input hidden" style="position: absolute;top: 36px;z-index: 10; width: 100%;" id="test-d">
                                        <input type="text" class="form-control typeahead" id="postcode"  >
                                        <input type="hidden" id="postcode_id" name="postcode_id" value="{{$request->old('postcode_id',$general->postcode_id)}}" >
                                    </div>
                                </div>
                                
                            </fieldset>
                            <fieldset class="form-group col-md-2">
                                <label class="control-label" for="sub-district">
                                    Sub District
                                </label>
                                <div class="input">
                                    <input type="text" name="sub_district_name" 
                                    value="{{$request->old('sub_district_name',$general->sub_district_name)}}"
                                    class="form-control" readonly>
                                </div>
                            </fieldset>
                            <fieldset class="form-group col-md-2">
                                <label class="control-label" for="district">
                                    District
                                </label>
                                <div class="input">
                                    <input type="text" name="district_name"
                                    value="{{$request->old('district_name',$general->district_name)}}"
                                     class="form-control" readonly>
                                </div>
                            </fieldset>
                            <fieldset class="form-group col-md-2">
                                <label class="control-label" for="province">
                                    Province
                                </label>
                                <div class="input">
                                    <input type="text" name="province_name"
                                    value="{{$request->old('province_name',$general->province_name)}}"
                                     class="form-control" readonly>
                                </div>
                            </fieldset>
                        </div>

                            <div class="row">
                                <fieldset class="form-group col-xs-12 col-sm-6 col-md-3 logo">
                                    <label class="control-label" for="file-logo">Logo:</label>
                                    <div class="input">
                                        <div class="input-file">
                                            <a href="#file-logo">
                                                    <?php
                                                        $name_name = 'logo';
                                                        $name_image = $request->old($name_name,$general->$name_name);
                                                        $name_image = explode("/", $name_image);
                                                        if(count($name_image)>1){
                                                            $name_image = $name_image[count($name_image)-1];
                                                        }else{
                                                            $name_image = null;
                                                        }
                                                        if(!empty($request->old($name_name,$general->$name_name))  &&file_exists( storage_path($request->old($name_name,$general->$name_name) ) )){
                                                            $logo = Image::make(storage_path($request->old($name_name,$general->$name_name) ))->encode('data-url');
                                                        }else{
                                                            $logo = Image::make(public_path('images/backOffice/setting/general/default-logo.jpg') )->encode('data-url');
                                                        }
                                                    ?>
                                                <img class="img-responsive"  src="{{$logo}}" alt="" />
                                            </a>
                                            <input type="file" name="logo" id="file-logo" value="{{$name_image}}" />
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
                                                <a class="background">
                                                    <?php
                                                        $name_name = 'background';
                                                        if(!empty($request->old($name_name,$general->$name_name))  &&file_exists( storage_path($request->old($name_name,$general->$name_name) ) )){
                                                            $background = Image::make(storage_path($request->old($name_name,$general->$name_name) ))->encode('data-url');
                                                        }else{
                                                            $background = Image::make(public_path('images/backOffice/setting/general/sample-image.jpg') )->encode('data-url');
                                                        }
                                                    ?>
                                                    <img class="img-responsive" id="img-click" src="{{$background}}" alt="" />
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
                                  <div class="col-xs-12">
                                      <div class="row">
                                          <fieldset class="form-group" style="padding:0;white-space: nowrap;">
                                              <div class="form-inline">
                                                <label class="control-label" style="padding-right:10px;width: auto;" for="days_to_delete_unpaid_sales_order">
                                                      DELETED UNPAID SO AUTOMATICALLY AFTER
                                                </label>
                                                <div class="input">
                                                      <input type="text" class="form-control" name="days_to_delete_unpaid_sales_order"
                                                          value="{{$request->old('days_to_delete_unpaid_sales_order',$general->days_to_delete_unpaid_sales_order)}}"
                                                          placeholder="0">
                                                </div>
                                                <label class="control-label" style="">
                                                      DAYS
                                                </label>
                                                  
                                              </div>
                                          </fieldset>
                                      </div>
                                  </div>
                                  <!-- <div class="col-xs-8">
                                      <div class="row">
                                          <div class="col-xs-6">
                                              <fieldset class="form-group">
                                                  <div class="form-inline">
                                                      <div class="input">
                                                          <input type="text" class="form-control" name="alert_days_to_delete_unpaid_so_automatically"
                                                              value="{{$request->old('alert_days_to_delete_unpaid_so_automatically',$general->alert_days_to_delete_unpaid_so_automatically)}}"
                                                              placeholder="0">
                                                      </div>
                                                      <label class="control-label" for="alert_days_to_delete_unpaid_so_automatically">
                                                          Days to delete unpaid SO automatically
                                                      </label>
                                                  </div>
                                              </fieldset>
                                          </div>
                                          <div class="col-xs-6"></div>
                                      </div>
                                  </div> -->
                                </div>
                            </div>

                            <div class="email-server">
                                <div class="row">
                                    <fieldset class="form-group col-xs-12">
                                        <label class="control-label" for="smtp">Email Server: </label>
                                        <hr class="line-black"/>
                                    </fieldset>
                                    <fieldset class="form-group col-md-6">
                                        <label class="control-label" for="email_username">Username: </label>
                                        <div class="input">
                                            <input type="text" class="form-control" name="email_username"
                                            value="{{$request->old('email_username',$general->email_username)}}"
                                            placeholder="Username" id="email_username">
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group col-md-6">
                                        <label class="control-label" for="password">Password: </label>
                                        <div class="input">
                                            <!-- <input type="password" class="form-control" name="email_password"
                                                value="{{$request->old('email_password',$general->email_password)}}"
                                                placeholder="Password" id="email_password" require> -->
                                                <input type="password" class="form-control" name="email_password"
                                                value=""
                                                placeholder="Password" id="email_password">
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group col-md-8">
                                        <label class="control-label" for="server_url">Server: </label>
                                        <div class="input">
                                            <input type="text" class="form-control" name="server_url"
                                             value="{{$request->old('server_url',$general->server_url)}}"
                                              placeholder="Server" id="server_url">
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group col-md-2">
                                        <label class="control-label" for="server_port">Port: </label>
                                        <div class="input">
                                            <input type="text" class="form-control" name="server_port"
                                             value="{{$request->old('server_port',$general->server_port)}}"
                                              placeholder="Port" id="server_port">
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group col-md-2">
                                        <label class="control-label" for="type">Type: </label>
                                        <div class="input">
                                            <select id="server_encryption_type" name="server_encryption_type" class="form-control">
                                                <option value=""></option>
                                                <option value="TLS/SSL" @if("TLS/SSL"==$request->old('server_encryption_type',$general->server_encryption_type)) selected @endif>TLS/SSL</option>
                                                <option value="STARTTLS" @if("STARTTLS"==$request->old('server_encryption_type',$general->server_encryption_type)) selected @endif>STARTTLS</option>

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
                                        <label class="control-label" for="facebook_url">Facebook: </label>
                                        <div class="input">
                                            <input type="text" class="form-control" name="facebook_url"
                                             value="{{$request->old('facebook_url',$general->facebook_url)}}"
                                             placeholder="Facebook" id="facebook_url">
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group col-xs-12">
                                        <label class="control-label" for="twitter_url">Twitter: </label>
                                        <div class="input">
                                            <input type="text" class="form-control" name="twitter_url"
                                             value="{{$request->old('twitter_url',$general->twitter_url)}}"
                                              placeholder="Twitter" id="twitter_url">
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group col-xs-12">
                                        <label class="control-label" for="line_url">LINE: </label>
                                        <div class="input">
                                            <input type="text" class="form-control" name="line_url"
                                             value="{{$request->old('line_url',$general->line_url)}}" placeholder="LINE" id="line_url">
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group col-xs-12">
                                        <label class="control-label" for="telephone_number">Tel: </label>
                                        <div class="input">
                                            <input type="text" class="form-control" name="telephone_number"
                                             value="{{$request->old('telephone_number',$general->telephone_number)}}"
                                              placeholder="Tel" id="telephone_number">
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group col-xs-12">
                                        <label class="control-label" for="google_analytic">Google Analytics:</label>
                                        <div class="input">
                                            <textarea id="google_analytic" name="google_analytic" class="form-control">{{$request->old('google_analytic',$general->google_analytic)}}</textarea>
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
        var url ="{{ url()->to('/api/address?str=') }}"
        // console.log(url)
        $('#test-c').click(function(){
            // console.log("test")
            $('#test-d').removeClass('hidden')
            // $('#test-d').removeClass('hidden')
            $('#postcode').focus()
            $('#postcode').typeahead('val', '');
        })
        $('#postcode').focusout(function(){
            $('#test-d').addClass('hidden')
            console.log("oute")
        })
        $('#test-c').focusout(function(){
            // console.log('focusout')
            // console.log($('#postcode').focusout())
        })
        $(document).ready(function(){
            //Set Label Header Page
            $('#lbHeaderPage').html("<h3>GENERAL | <span>CREATE</span></h3>");
            // $('#district').val($('#postcode').val());

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
        $("#img-click").click(function(){
            document.getElementById("file-background").click();
        });
        // $("#background").change(function(){
        //     readURL(this,'#preview_background');
        // });
        var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
  'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
  'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
  'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
  'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
  'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
  'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
  'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
  'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
];
var ste = [
]

        var substringMatcher = function(strs) {
            // console.log("test",strs)
            return function findMatches(q, cb) {
                console.log(q,cb)
                var matches, substringRegex;

                // an array that will be populated with substring matches
                matches = [];

                // regex used to determine if a string contains the substring `q`
                substrRegex = new RegExp(q, 'i');

                // iterate through the pool of strings and for any string that
                // contains the substring `q`, add it to the `matches` array
                $.each(strs, function(i, str) {
                if (substrRegex.test(str)) {
                    matches.push(str);
                }
                });

                cb(matches);
            };
        };


        var nflTeams = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('team'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        identify: function(obj) {
            console.log(obj,'obj')
            return obj.team;
            },
        remote:  {
                url: url,
                filter: function(response) {
                    console.log(response)
                    return response.result
                    // return response.countries
                },
                replace: function (url, query) {
                    // console.log(url + query)
                    return url + query
                        // if (_el.val() === "users") {
                        //     return url + '/users?q=' + query;
                        // } else {
                        //     return url + '/repositories?q=' + query;
                        // }
                }
            },
        //   local: states
        });

        $('#postcode').typeahead({
        hint: true,
        highlight: true,
        minLength: 0,
        autoSelect: true
        },
        {
            limit: 16,
            templates: {
                    empty: [
                    '<div class="empty-message">',
                        'No Result',
                    '</div>'
                    ].join('\n'),

                },
            name: 'states',
            source: nflTeams.ttAdapter(),
            display : function(data){
                // console.log(data)
                // return data
                return   data.sub_district_name + ' » ' + data.district_name + ' » '
                        + data.province_name + ' » ' + (data.code || 'ไม่มีรหัสไปรษณีย์');
            },
            updater : function(item){
                consoel.log(item,'updater')
            },
            afterSelect: function (item) {
                console.log(item,'afterSelect')
            },
            select: function( event, ui ) {
                console.log('select')
            ui.item.value = substituteWord(ui.item.value);
            }
        });
        $('#postcode').bind('typeahead:select typeahead:autocomplete', function(e, v) {
            console.log('conge',v,e);
            $('#postcode_id').val(v.id)
            $('input[name="postcode"]').val(v.code)
            $('input[name="province_name"]').val(v.province_name)
            $('input[name="district_name"]').val(v.district_name)
            $('input[name="sub_district_name"]').val(v.sub_district_name)
            $('#postcode').typeahead('val', '');
            $('#test-d').addClass('hidden')
            // return false
            
            
            // console.log(e,v)
        });
        $('#postcode').bind('typeahead:selected',function(e, v){
            console.log('typeahead:selected')
        })
        $('#postcode').bind('typeahead:autocomplete',function(e, v){
            console.log('typeahead:autocomplete')
        })
        $('#postcode').bind('typeahead:done',function(e, v){
            console.log(' typeahead:_done')
        })
       
        


        //tor
        // toastr.options = {
        //     "closeButton": true,
        //     "debug": false,
        //     "newestOnTop": true,
        //     "positionClass": "toast-top-center",
        //     "preventDuplicates": false,
        //     "onclick": null,
        //     "showDuration": "3000",
        //     "hideDuration": "1000",
        //     "timeOut": "5000",
        //     "extendedTimeOut": "1000",
        //     "showEasing": "swing",
        //     "hideEasing": "linear",
        //     "showMethod": "fadeIn",
        //     "hideMethod": "fadeOut"
        // }
        // @if(session()->has('success'))
        //     toastr["success"]("{{ session()->get('success') }}", "Success");
        // @elseif(session()->has('failure'))
        //     toastr["warning"]("{{ session()->get('failure') }}", "Warning");
        // @endif
        //         @if ($errors->any())
        //         @foreach ($errors->all() as $error)
        //     toastr["error"]("{{ $error }}", "Error");
        // @endforeach
        // @endif

    </script>
@endsection
