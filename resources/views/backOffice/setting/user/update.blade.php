@extends('layouts.backOffice.template')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/user/update.css')}}"/>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
<!-- ERROR MESSAGES -->
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif
<div class="userForm">
    <form action="{{ route('backOffice.setting.user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="PUT">
        <div id="profileBox">
            <div class="clearfix" id="statusBox">
                <div class="pull-right">
                    <label class="slideCheckbox">
                        <input type="checkbox" />
                        <span>&nbsp;&nbsp;</span>
                    </label>
                </div>
                <div class="pull-right" id="statusText">ON-OFF </div>
            </div>
            <hr>
            <div class="media" id="accountInfo">
                <div class="media-left">
                    <div class="upload-btn-wrapper">
                        <img src="{{asset('images/avatar.png')}}" class="profilePicture">
                        <input type="file" name="myfile" id="profilePictureField" />
                    </div>
                </div>
                <div class="media-body">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label>MEMBER NUMBER</label>
                                <div style="line-height: 1;">{{ $user->member_number }}</div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label>REGISTER DAY</label>
                                <div style="line-height: 1;">{{date('d/m/Y', strtotime($user->created_at))}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="">Firstname:</label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="firstname" value="{{ $user->first_name }}" required>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="">Lastname:</label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="lastname" value="{{ $user->last_name }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="">Nickname:</label>
                                <input type="text" class="form-control" name="nick_name" id="nick_name" placeholder="nickname" value="{{ $user->nick_name }}" required>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="">Gender:</label>
                                <select id="basic" class="form-control">
                                    <option value="">-- select --</option>
                                    <option value="1" @if($user->gender == 1) selected @endif>Male</option>
                                    <option value="2" @if($user->gender == 2) selected @endif>Female</option>
                                    </select>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="">Birthdate:</label>
                                <div class="input-group date" id="datepicker" >
                                    <input type="text" class="form-control" value="{{$user->day_id}}/{{$user->month_id}}/{{$user->year_id}}"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar" ></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="">E-Mail:</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="email" value="{{ $user->email }}" required>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="">Phone:</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="phone" value="{{ $user->phone }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="">Password:</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="password" value="" required>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="">Confirm Password:</label>
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="confirm password" value="" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="permission">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="text-uppercase"><small style="color: #000;">Right:</small></h1>
                        <hr>
                        <ul>
                            <li>
                                <label class="radioBox">
                                    <input type="radio" name="permission" value="administrator">
                                    <span>Administrator (ADMIN)</span>
                                </label>
                            </li>
                            <li>
                                <label class="radioBox">
                                    <input type="radio" name="permission" value="staff" checked>
                                    <span>Staff </span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="staffPermission" class="table-responsive">
                    <table class="table table-nonbordered table-permission">
                        <thead>
                            <tr>
                                <th style="width: 12%;">Department</th>
                                <th style="width: 22%;">Manager</th>
                                <th style="width: 22%;">Supervisor</th>
                                <th style="width: 22%;">User</th>
                                <th style="width: 22%;">Don't use</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $permissionList = [
                                'purchase'  => 'Purchase',
                                'sell'      => 'Sell',
                                'warehouse' => 'Warehouse',
                                'marketing' => 'Marketing',
                                'account'   => 'Account',
                                'transport' => 'Transport',
                                'hr'        => 'HR',
                                'it'        => 'IT',
                            ];
                            ?>
                            @foreach($permissionList as $key=>$label)
                            <tr>
                                <td>{{$label}}</td>
                                <td>
                                    <label class="radioBox">
                                        <input type="radio" name="permission[{{$key}}]" value="1" checked>
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="radioBox">
                                        <input type="radio" name="permission[{{$key}}]" value="2">
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="radioBox">
                                        <input type="radio" name="permission[{{$key}}]" value="3">
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="radioBox">
                                        <input type="radio" name="permission[{{$key}}]" value="4">
                                        <span></span>
                                    </label>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <hr>
                <div align="center">
                    <button type="submit" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i> </span>SAVE</button>
                    <button type="button" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i> </span>CANCEL</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('script')
<script src="{{ asset('js/back-office/setting/user/update.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        //Set Label Header Page
        $('#lbHeaderPage').html("<h3>USER | <span>EDIT</span></h3>");
    });
</script>
@endsection
