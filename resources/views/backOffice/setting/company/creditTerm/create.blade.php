@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/company/credit-term/create.css')}}"/>
@endsection

@section('body')
<div class="x_content">
<section>
    <div class="companyName">
        SAMPLES CO., LTD.
    </div>
    <div class="content scroll-2">
        <form action="{{route("backOffice.setting.company.credit-term.store", 1)}}" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="row">
                <div class="col-xs-6">
                    <div class="form-group">
                        <label for="">Credit Term Name</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <label for="">Approved Limit</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="creditDateBox">
                <div class="creditTerm">
                    <div class="form-group">
                        <label for="">Credit Term</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="spaceText">DAY</div>
                <div class="creditDate">
                    <label for="">Start Date:</label>
                    <div class="input-group date" id="start" >
                        <input type='text' class="form-control" />
                        <span class="input-group-addon">
                            <i class="fa fa-calendar" ></i>
                        </span>
                    </div>
                </div>
                <div class="spaceText">TO</div>
                <div class="creditDate">
                    <label for="">End Date:</label>
                    <div class="input-group date" id="end" >
                        <input type='text' class="form-control" />
                        <span class="input-group-addon">
                            <i class="fa fa-calendar" ></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="description">
                <label for="exampleInputPassword1">Description</label>
                <textarea class="form-control" rows="5"  placeholder="Lorem Ipsum"></textarea>
            </div>
        </form>
    </div>
</section>
<div class="action" align="center">
    <button type="submit" class="btn btn-ngin btn-default" style="width: 125px; text-align: left;"><span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i> </span>SAVE</button>
    &ensp;
    <button type="button" class="btn btn-ngin btn-default" style="width: 125px; text-align: left;"><span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i> </span>CANCEL</button>
</div>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/setting/company/credit-term/create.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            //Set Label Header Page
            $('#lbHeaderPage').html("<h3>COMPANY > CREDIT TERM | <span>CREATE</span></h3>");
        });
    </script>

@endsection
