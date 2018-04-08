@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/company/bank/create.css')}}"/>
@endsection

@section('module_name', 'COMPANIES > BANK')
@section('page_name', 'CREATE')

@section('body')
<div class="x_content">
  <section id="company-bank-create">
    <div class="no-gutters">
      <div class="row">
        <div class="col-xs-6">
          <div class="company-name">
            <h3 class="branch-title">SAMPLE CO.,LTD., BRANCH</h3>
          </div>
        </div>
        <div class="col-xs-6">
          <div class="branch-id">
            <select class="form-control" name="">
              <option value="00000">00000 Headquarters</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <div class="scroll-2">
      <form class="bank-create">
        <h4 class="bank-title">BANK INFORMATION</h4>
        <div class="row">
          <div class="col-xs-12 col-sm-5">
            <div class="form-group">
              <label for="bank-name">BANK NAME</label><br/>
              <!-- <img class="bank-logo" src="{{ asset('images/backOffice/setting/company/logo-kbank.png') }}"> -->
              <select class="form-control" id='bank-name' name="">
                <option value="kasikorn" data-content="<span style='padding-left: 25px;
                  font-size: 13px !important;
                  background-image: url({{ asset("images/backOffice/setting/company/logo-kbank.png") }});
                  background-size: 20px 20px;
                  background-position: left center;
                  background-repeat: no-repeat;'>KASIKORNBANK</span>">
                </option>
              </select>
            </div>
          </div>
          <div class="col-xs-12 col-sm-2">
            <div class="flex-container">
              <span>---- OR ----</span>
            </div>
          </div>
          <div class="col-xs-12 col-sm-5">
            <div class="form-group bank-name">
              <label for="bank-name-plus"></label>
              <input type="text" class="form-control" id="bank-name-plus" name="bank-name-plus">
              <i class="fa fa-plus"></i>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <div class="form-group">
              <label for="bank-account-type">ACCOUNT TYPE</label>
              <select class="form-control" name="">
                <option value="saving">Saving</option>
              </select>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <div class="form-group">
              <label for="bank-account-name">ACCOUNT NAME</label>
              <input type="text" class="form-control" id="bank-account-name" name="bank-account-name">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <label for="bank-branch">BRANCH</label>
              <input type="text" class="form-control" id="bank-branch" name="bank-branch">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-10">
            <div class="form-group">
              <label for="bank-account">BANK ACCOUNT</label>
              <input type="text" class="form-control" id="bank-account" name="bank-account">
            </div>
          </div>
          <div class="col-xs-12 col-sm-2">
            <div class="form-group">
              <label for="bank-currency">ACCOUNT TYPE</label>
              <select class="form-control" name="bank-currency">
                <option value="usd">USD</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <label for="bank-remark">REMARK</label>
              <textarea class="form-control" id="bank-remark" name="bank-remark" rows="4"></textarea>
            </div>
          </div>
        </div>
      </form>
    </div>

    <div class="action text-center">
      <button type="submit" class="btn btn-ngin btn-default">
        <span class="btn-label"><i class="fa fa-save success" aria-hidden="true"></i></span>SAVE
      </button>
      <button type="button" class="btn btn-ngin btn-default">
        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL
      </button>
    </div>
  </section>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/setting/company/bank/create.js') }}"></script>
@endsection
