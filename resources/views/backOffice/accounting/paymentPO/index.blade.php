@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/payment/index.css')}}"/>
@endsection

@section('module_name', 'PAYMENT')
@section('page_name', 'INDEX')

@section('body')
<div class="x_content">
  <div class="row">
    <div class="col-sm-12" style="margin-top:15px">
      <div style="display: flex;">
        <div class="" style="margin-top:5px; margin-right: 1%;">
          <a href="./payment/create">
    	    <button type="button" class="btn btn-ngin btn-default">
          <span class="btn-label"><i class="fa fa-plus" aria-hidden="true"></i></span>NEW</button>
          </a>
          <button type="button" class="btn btn-ngin btn-default ">
          <span class="btn-label"><i class="fa fa-money success" aria-hidden="true"></i></span>Pay All</button>
        </div>
        <div class="" style="margin-top:5px; flex: 1 1 auto;">
          <div class="form-group form-fixed-width" >
            <div class="icon-addon addon-sm">
              <input  type="text" placeholder="SEARCH" class="form-control search" id="SEARCH">
              <label for="search" class="glyphicon glyphicon-search" rel="tooltip" title="email">
              </label>
            </div>
          </div>
        </div>
        <div class="" style="margin-top:5px; margin-left: 1%;">
          <i class="fa fa-file-text fa-1x" style="margin-right:10px" aria-hidden="true"></i>
          <i class="fa fa-file-excel-o fa-1x" aria-hidden="true" style="margin-right:10px"></i>
          <button type="button" class="btn btn-ngin btn-default ">
          <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete All</button>
        </div>
      </div>
    </div>
  </div>

<!--tap-->

<div id="exTab2" class="">
<div class="tap-content scroll-2" style="max-height:550px;">


<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <table class="table">
            <tbody>
              <tr>
                <td class="tr-checkbox">
                  <input type="checkbox"class="iCheck">
                </td>
                <td style="font-size:20px;width: 30%;"><b>SAMPLES CO.,LTD.</b></td>
                <td style="font-size:20px;width: 25%;" rowspan="2"><b></b></td>
                <td style="font-size:11px;width: 25%;"><b>AMOUNT</b></td>
                <td style="font-size:20px;width: 15%;"><b>PO #8</b></td>
              </tr>
              <tr>
                <td></td>
                <td style="font-size: 20px; font-family:moonlight; vertical-align:bottom;">04/09/2017</td>
                <td style="font-size: 20px; font-family:moonlight" class="ngin-red">(650)</td>
                <td>
                  <span class="approve">
                    <i class="fa fa-check-circle-o ngin-green fa-1x" aria-hidden="true"></i>
                    <small class="ngin-green"><b>Approved</b></small>
                    <small>By Pop</small>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body scroll-2" style="position:relative">
        <div class="col-sm-9">
          <div class="row" style="display:flex;">
            <div class="col-sm-3" style="align-self:center;">
              <img class="center-block" src="http://via.placeholder.com/100x150">
              <p class="text-center"><b>PI#</b>Name</p>
            </div>
            <div class="col-sm-9">
              <b style="font-size:21px">CREATE DATE</b>
              <p style="font-size:21px">16/08/2017</p>
              <b style="margin-top:10px">REMARK</b>
              <p style="margin-top:5px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam purus ornare, tincidunt sem id, venenatis sem. Maecenas orci lacus, laoreet ac euismod sit amet, dignissim eget dolor. Aliquam vitae efficitur risus. Aenean ultricies dolor quis enim dapibus egestas. Suspendisse id elementum lorem. Vivamus iaculis tellus vel nunc venenatis, vel rutrum ligula eleifend. Proin a odio vitae mauris malesuada ultrices. Nunc ultricies lorem nec elit lobortis, rutrum mattis magna rutrum. Curabitur vitae blandit metus. Proin enim quam, viverra eget sem eget, sagittis hendrerit eros. Nullam pharetra neque vitae leo aliquam bibendum. Etiam quis est justo.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3" style="position: absolute;right: 0;bottom: 0;">
          <div class="row">
            <div class="col-sm-12">
              <button type="button" style="margin-bottom:15px" class="btn btn-ngin btn-default center-block">
                 <span class="btn-label"><i class="fa fa-undo info" aria-hidden="true"></i></span>Undo
             </button>
            </div>
            <div class="col-sm-12">
              <button type="button" style="margin-bottom:15px" class="btn btn-ngin btn-default center-block">
                  <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <table class="table">
            <tbody>
              <tr>
                <td class="tr-checkbox">
                  <input type="checkbox"class="iCheck">
                </td>
                <td style="font-size:20px;width: 30%;"><b>SAMPLES CO.,LTD.</b></td>
                <td style="font-size:20px;width: 25%; vertical-align: middle;" rowspan="2" class="ngin-red">OVER DUE</td>
                <td style="font-size:11px;width: 25%;"><b>AMOUNT</b></td>
                <td style="font-size:20px;width: 15%;"><b>PO #8. 9</b></td>
              </tr>
              <tr>
                <td></td>
                <td style="font-size: 20px; font-family:moonlight; vertical-align:middle;">04/09/2017</td>
                <td style="font-size: 20px; font-family:moonlight" class="ngin-red">(650)</td>
                <td>
                  <span class="approve">
                    <div class="col-sm-1" style="padding-left: inherit;">
                      <i class="fa fa-circle-o-notch fa-1x" aria-hidden="true" style="color:#F7931E;"></i>
                    </div>
                    <div class="col-sm-8" style="padding-left: 7px;">
                      <small style="color:#F7931E"><b>PENDDING</b></small>
                    <div class="">
                      <small style="color:#F7931E"><b> FOR APPROVAL</b></small>
                    </div>
                    </div>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body scroll-2" style="position:relative">
        <div class="col-sm-9">
          <div class="row" style="display:flex;">
            <div class="col-sm-3" style="align-self:center;">
              <img class="center-block" src="http://via.placeholder.com/100x150">
              <p class="text-center"><b>PI#</b>Name</p>
            </div>
            <div class="col-sm-9">
              <b style="font-size:21px">CREATE DATE</b>
              <p style="font-size:21px">16/08/2017</p>
              <b style="margin-top:10px">REMARK</b>
              <p style="margin-top:5px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam purus ornare, tincidunt sem id, venenatis sem. Maecenas orci lacus, laoreet ac euismod sit amet, dignissim eget dolor. Aliquam vitae efficitur risus. Aenean ultricies dolor quis enim dapibus egestas. Suspendisse id elementum lorem. Vivamus iaculis tellus vel nunc venenatis, vel rutrum ligula eleifend. Proin a odio vitae mauris malesuada ultrices. Nunc ultricies lorem nec elit lobortis, rutrum mattis magna rutrum. Curabitur vitae blandit metus. Proin enim quam, viverra eget sem eget, sagittis hendrerit eros. Nullam pharetra neque vitae leo aliquam bibendum. Etiam quis est justo.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3" style="position: absolute;right: 0;bottom: 0;">
          <div class="row">
            <div class="col-sm-12">
              <button type="button" style="margin-bottom:15px" class="btn btn-ngin btn-default center-block">
                 <span class="btn-label"><i class="fa fa-undo info" aria-hidden="true"></i></span>Undo
             </button>
            </div>
            <div class="col-sm-12">
              <button type="button" style="margin-bottom:15px" class="btn btn-ngin btn-default center-block">
                  <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <table class="table">
            <tbody>
              <tr>
                <td class="tr-checkbox">
                  <input type="checkbox"class="iCheck">
                </td>
                <td style="font-size:20px;width: 30%;"><b>SAMPLES CO.,LTD.</b></td>
                <td style="font-size:20px;width: 25%; vertical-align: middle;" rowspan="2" class="ngin-green">PAID</td>
                <td style="font-size:11px;width: 25%;"><b>AMOUNT</b></td>
                <td style="font-size:20px;width: 15%;"><b>PO #9</b></td>
              </tr>
              <tr>
                <td></td>
                <td style="font-size: 20px; font-family:moonlight; vertical-align:bottom;">04/09/2017</td>
                <td style="font-size: 20px; font-family:moonlight" class="ngin-red">(650)</td>
                <td>
                  <span class="approve">
                    <i class="fa fa-check-circle-o ngin-green fa-1x" aria-hidden="true"></i>
                    <small class="ngin-green"><b>Approved</b></small>
                    <small>By Pop</small>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body scroll-2" style="position:relative">
        <div class="col-sm-9">
          <div class="row" style="display:flex;">
            <div class="col-sm-3" style="align-self:center;">
              <img class="center-block" src="http://via.placeholder.com/100x150">
              <p class="text-center"><b>PI#</b>Name</p>
            </div>
            <div class="col-sm-9">
              <b style="font-size:21px">CREATE DATE</b>
              <p style="font-size:21px">16/08/2017</p>
              <b style="margin-top:10px">REMARK</b>
              <p style="margin-top:5px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam purus ornare, tincidunt sem id, venenatis sem. Maecenas orci lacus, laoreet ac euismod sit amet, dignissim eget dolor. Aliquam vitae efficitur risus. Aenean ultricies dolor quis enim dapibus egestas. Suspendisse id elementum lorem. Vivamus iaculis tellus vel nunc venenatis, vel rutrum ligula eleifend. Proin a odio vitae mauris malesuada ultrices. Nunc ultricies lorem nec elit lobortis, rutrum mattis magna rutrum. Curabitur vitae blandit metus. Proin enim quam, viverra eget sem eget, sagittis hendrerit eros. Nullam pharetra neque vitae leo aliquam bibendum. Etiam quis est justo.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3" style="position: absolute;right: 0;bottom: 0;">
          <div class="row">
            <div class="col-sm-12">
              <button type="button" style="margin-bottom:15px" class="btn btn-ngin btn-default center-block">
                 <span class="btn-label"><i class="fa fa-undo info" aria-hidden="true"></i></span>Undo
             </button>
            </div>
            <div class="col-sm-12">
              <button type="button" style="margin-bottom:15px" class="btn btn-ngin btn-default center-block">
                  <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour" style="color:#CCCCCC !important; text-decoration:line-through !important;">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
          <table class="table">
            <tbody>
              <tr>
                <td class="tr-checkbox">
                  <input type="checkbox"class="iCheck">
                </td>
                <td style="font-size:20px;width: 30%;"><b>SAMPLES CO.,LTD.</b></td>
                <td style="font-size:20px;width: 25%; vertical-align: middle;" rowspan="2">CANCLE</td>
                <td style="font-size:11px;width: 25%;"><b>AMOUNT</b></td>
                <td style="font-size:20px;width: 15%;"><b>PO #8</b></td>
              </tr>
              <tr>
                <td></td>
                <td style="font-size: 20px; font-family:moonlight; vertical-align:bottom;">04/09/2017</td>
                <td style="font-size: 20px; font-family:moonlight" class="">(650)</td>
                <td>
                  <span class="approve">
                    <small class="ngin-green"><b></b></small>
                    <small></small>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body scroll-2" style="position:relative">
        <div class="col-sm-9">
          <div class="row" style="display:flex;">
            <div class="col-sm-3" style="align-self:center;">
              <img class="center-block" src="http://via.placeholder.com/100x150">
              <p class="text-center"><b>PI#</b>Name</p>
            </div>
            <div class="col-sm-9">
              <b style="font-size:21px">CREATE DATE</b>
              <p style="font-size:21px">16/08/2017</p>
              <b style="margin-top:10px">REMARK</b>
              <p style="margin-top:5px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam purus ornare, tincidunt sem id, venenatis sem. Maecenas orci lacus, laoreet ac euismod sit amet, dignissim eget dolor. Aliquam vitae efficitur risus. Aenean ultricies dolor quis enim dapibus egestas. Suspendisse id elementum lorem. Vivamus iaculis tellus vel nunc venenatis, vel rutrum ligula eleifend. Proin a odio vitae mauris malesuada ultrices. Nunc ultricies lorem nec elit lobortis, rutrum mattis magna rutrum. Curabitur vitae blandit metus. Proin enim quam, viverra eget sem eget, sagittis hendrerit eros. Nullam pharetra neque vitae leo aliquam bibendum. Etiam quis est justo.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3" style="position: absolute;right: 0;bottom: 0;">
          <div class="row">
            <div class="col-sm-12">
              <button type="button" style="margin-bottom:15px" class="btn btn-ngin btn-default center-block">
                 <span class="btn-label"><i class="fa fa-undo info" aria-hidden="true"></i></span>Undo
             </button>
            </div>
            <div class="col-sm-12">
              <button type="button" style="margin-bottom:15px" class="btn btn-ngin btn-default center-block">
                  <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
          <table class="table">
            <tbody>
              <tr>
                <td class="tr-checkbox">
                  <input type="checkbox"class="iCheck">
                </td>
                <td style="font-size:20px;width: 30%;"><b>SAMPLES CO.,LTD.</b></td>
                <td style="font-size:20px;width: 25%;" rowspan="2"></td>
                <td style="font-size:11px;width: 25%;"><b>AMOUNT</b></td>
                <td style="font-size:20px;width: 15%;"><b>PO #9</b></td>
              </tr>
              <tr>
                <td></td>
                <td style="font-size: 20px; font-family:moonlight; vertical-align:bottom;">04/09/2017</td>
                <td style="font-size: 20px; font-family:moonlight" class="ngin-red">(650)</td>
                <td>
                  <span class="approve">
                    <i class="fa fa-times-circle-o fa-1x ngin-red" aria-hidden="true"></i>
                    <small class="ngin-red"><b>Rejected</b></small>
                    <small></small>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body scroll-2" style="position:relative">
        <div class="col-sm-9">
          <div class="row" style="display:flex;">
            <div class="col-sm-3" style="align-self:center;">
              <img class="center-block" src="http://via.placeholder.com/100x150">
              <p class="text-center"><b>PI#</b>Name</p>
            </div>
            <div class="col-sm-9">
              <b style="font-size:21px">CREATE DATE</b>
              <p style="font-size:21px">16/08/2017</p>
              <b style="margin-top:10px">REMARK</b>
              <p style="margin-top:5px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam purus ornare, tincidunt sem id, venenatis sem. Maecenas orci lacus, laoreet ac euismod sit amet, dignissim eget dolor. Aliquam vitae efficitur risus. Aenean ultricies dolor quis enim dapibus egestas. Suspendisse id elementum lorem. Vivamus iaculis tellus vel nunc venenatis, vel rutrum ligula eleifend. Proin a odio vitae mauris malesuada ultrices. Nunc ultricies lorem nec elit lobortis, rutrum mattis magna rutrum. Curabitur vitae blandit metus. Proin enim quam, viverra eget sem eget, sagittis hendrerit eros. Nullam pharetra neque vitae leo aliquam bibendum. Etiam quis est justo.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3" style="position: absolute;right: 0;bottom: 0;">
          <div class="row">
            <div class="col-sm-12">
              <button type="button" style="margin-bottom:15px" class="btn btn-ngin btn-default center-block">
                 <span class="btn-label"><i class="fa fa-undo info" aria-hidden="true"></i></span>Undo
             </button>
            </div>
            <div class="col-sm-12">
              <button type="button" style="margin-bottom:15px" class="btn btn-ngin btn-default center-block">
                  <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
              </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
</div>

    <div class="row page-showing-pagination">
      <div class="col-xs-6 showing">
        Showing 1-10 of 100
      </div>
      <div class="col-xs-6 page-pagination">
        <nav aria-label="Page Navigation">
          <ul class="pagination">
            <li class="page-number">
              <a href="#" aria-label="Previous" class="not-active">Previous
              </a>
            </li>
            <li class="page-number  active"><a href="#">1</a></li>
            <li class="page-number"><a href="#">2</a></li>
            <li class="page-number"><a href="#">3</a></li>
            <li class="page-number"><a href="#">4</a></li>
            <li class="page-number"><a href="#">5</a></li>
            <li class="page-number">
              <a href="#" aria-label="next">Next</a>
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
    <script src="{{ asset('js/back-office/<module_name>/index.js') }}"></script>
@endsection
