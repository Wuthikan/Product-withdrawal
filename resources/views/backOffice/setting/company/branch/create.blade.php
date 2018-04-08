@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/company/branch/create.css')}}"/>
@endsection

@section('module_name', 'COMPANIES > BRANCH')
@section('page_name', 'CREATE')

@section('body')
<div class="x_content">
  <section id="company-branch-create">
    <div class="no-gutters">
      <div class="company-name">
        <h3 class="branch-title">SAMPLES CO.,LTD.</h3>
      </div>
    </div>

    <div class="scroll-2">
      <form class="bank-create">
        <h4>ADDRESS</h4>
        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <div class="form-group">
              <label for="branch-no">BRANCES NO</label>
              <input type="text" class="form-control" id="branch-no" placeholder="Headquarters">
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <div class="form-group">
              <label for="branch-name">NAME</label>
              <input type="text" class="form-control" id="branch-name" name="branch-name">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <label for="bank-address">ADDRESS</label>
              <textarea class="form-control" id="bank-address" name="bank-address" rows="4" placeholder="Floor number of the building Soi Moo"></textarea>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-3">
            <div class="form-group">
              <label for="branch-postcode">POSTCODE</label>
              <input type="text" class="form-control" id="branch-postcode" name="branch-postcode">
            </div>
          </div>
          <div class="col-xs-12 col-sm-3">
            <div class="form-group">
              <label for="branch-district">DISTRCIT</label>
              <select class="form-control" name="branch-district">
                <option value="bangkok" selected></option>
              </select>
            </div>
          </div>
          <div class="col-xs-12 col-sm-3">
            <div class="form-group vertical-center">
                <label class="control-label" for="sub-district">
                    District<span>Lorem Ipsum</span>
                </label>
            </div>
          </div>
          <div class="col-xs-12 col-sm-3">
            <div class="form-group vertical-center">
                <label class="control-label" for="province">
                    Province<span>Lorem Ipsum</span>
                </label>
            </div>
          </div>
        </div>

        <h4 class="line">CONTACT INFORMATION</h4>

        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <div class="form-group">
              <label for="branch-no">NAME - SURNAME</label>
              <input type="text" class="form-control" id="branch-no" placeholder="">
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <div class="form-group">
              <label for="branch-name">NICKNAME</label>
              <input type="text" class="form-control" id="branch-name" name="branch-name">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <div class="form-group">
              <label for="branch-email">E-MAIL</label>
              <input type="text" class="form-control" id="branch-email">
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <div class="form-group">
              <label for="branch-tel">TELEPHONE NUMBER</label>
              <input type="text" class="form-control" id="branch-tel" name="branch-tel">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <label for="branch-department">DEPARTMENT</label>
              <input type="text" class="form-control" id="branch-department" name="branch-department">
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
    <script src="{{ asset('js/back-office/setting/company/branch/create.js') }}"></script>
@endsection
