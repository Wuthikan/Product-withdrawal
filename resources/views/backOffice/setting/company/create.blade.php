@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/company/create.css')}}"/>
@endsection

@section('module_name', 'COMPANIES')
@section('page_name', 'CREATE')

@section('body')
<div class="x_content">
  <div class="scroll-2">
    <form action="{{route("backOffice.setting.company.store")}}" method="POST" enctype="multipart/form-data">
      {!! csrf_field() !!}
      <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 uploadPhotoHeaderSection">
                        <div class="form-group">
                            <label>Photo</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 uploadPhotoSection">
                        <div class="form-group">
                            <div class="uploadPreview-1">
                                <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 uploadPhotoSection">
                        <div class="form-group">
                            <div class="uploadPreview-2">
                                <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 uploadPhotoSection">
                        <div class="form-group">
                            <div class="uploadPreview-3">
                                <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 uploadPhotoSection">
                        <div class="form-group">
                            <div class="uploadPreview-4">
                                <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 uploadPhotoSection">
                        <div class="form-group">
                            <div class="uploadPreview-5">
                                <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                            </div>
                        </div>
                    </div>
                    <div id="uploadMoreSection"></div>
                    <div class="col-md-2 uploadPhotoSection">
                        <div class="form-group">
                            <div class="uploadAddMore"><i class="fa fa-plus"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <div class="row">
              <div class="col-xs-6">
                  <div class="form-group">
                      <label for="">Prefix</label>
                      <input type="text" class="form-control">
                  </div>
              </div>
              <div class="col-xs-6">
                  <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" class="form-control">
                  </div>
              </div>
              <div class="col-xs-6">
                  <div class="form-group">
                      <label for="">Company Group</label>
                      <select id="basic" class="form-control">
                          <option></option>
                          <option>text-1</option>
                          <option>text-2</option>
                          <option>text-3</option>
                          <option>text-4</option>
                          <option>text-5</option>
                          <option>text-6</option>
                      </select>
                  </div>
              </div>
              <div class="col-xs-6">
                  <div class="form-group">
                      <label for="">TAX IDENTIFICATION NUMBER</label>
                      <input type="text" class="form-control">
                  </div>
              </div>
              <div class="col-xs-12">
                  <div class="checkbox" style="margin-top: -8px; margin-bottom: 20px;">
                      <label>
                          <input type="checkbox" class="iCheck" > <span style="color: #000; font-weight: normal;">Consignment</span>
                      </label>
                  </div>
              </div>
              <div class="col-xs-12">
                  <div class="form-group">
                      <label for="">Description</label>
                      <textarea class="form-control" rows="4"  placeholder="textarea"> </textarea>
                  </div>
              </div>
          </div>

          <div class="row settings">
              <div class="col-xs-12">
                  <h4>Settings:</h4>
              </div>
              <div class="col-xs-6">
                  <div class="form-group">
                      <label>
                          <input type="checkbox" class="iCheck">
                          <span>Consignment</span>
                      </label>
                  </div>
              </div>
              <div class="col-xs-6">
                  <div class="form-group">
                      <label>
                          <input type="checkbox" class="iCheck">
                          <span>Print Receipt with Billing Note</span>
                      </label>
                  </div>
              </div>
              <div class="col-xs-2">
                  <div class="form-group" style="margin-top: 7px;">
                      <label>
                          <input type="checkbox" class="iCheck">
                          <span>Need Billing</span>
                      </label>
                  </div>
              </div>
              <div class="col-xs-10">
                  <div class="form-group">
                      <label>
                          <span>( Frequency</span>
                          <span class="input-field">
                              <select id="basic" class="form-control">
                								<option>Lorem Ipsum</option>
                								<option>Lorem Ipsum</option>
                								<option>Lorem Ipsum</option>
                							</select>
                          </span>
                      </label>

                      <label>
                          <span>Every</span>
                          <span class="input-field"><input type='text' class="form-control" /></span>
                      </label>

                      <label>
                          <span>Days On</span>
                          <span class="input-field">
                              <select id="basic" class="form-control">
                								<option>Lorem Ipsum</option>
                								<option>Lorem Ipsum</option>
                								<option>Lorem Ipsum</option>
                							</select>
                          </span>
                          <span class="input-field">
                              <select id="basic" class="form-control">
                								<option>Lorem Ipsum</option>
                								<option>Lorem Ipsum</option>
                								<option>Lorem Ipsum</option>
                							</select>
                          </span>
                      </label>
                  </div>
                  <div class="form-group">
                      <label>
                          <span>( Frequency</span>
                          <span class="input-field">
                              <select id="basic" class="form-control">
                								<option>Lorem Ipsum</option>
                								<option>Lorem Ipsum</option>
                								<option>Lorem Ipsum</option>
                							</select>
                          </span>
                      </label>

                      <label>
                          <span>Every</span>
                          <span class="input-field"><input type='text' class="form-control" /></span>
                      </label>

                      <label>
                          <span>Days On</span>
                          <span class="input-field">
                              <select id="basic" class="form-control">
                								<option>Lorem Ipsum</option>
                								<option>Lorem Ipsum</option>
                								<option>Lorem Ipsum</option>
                							</select>
                          </span>
                          <span class="input-field">
                              <select id="basic" class="form-control">
                								<option>Lorem Ipsum</option>
                								<option>Lorem Ipsum</option>
                								<option>Lorem Ipsum</option>
                							</select>
                          </span>
                      </label>
                  </div>
              </div>
          </div>
      </div>
    </form>
  </div>

    <div class="action" align="center">
        <button type="submit" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i> </span>SAVE</button>
        &nbsp;
        <button type="button" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i> </span>CANCEL</button>
    </div>
  </div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/setting/company/create.js') }}"></script>

@endsection
