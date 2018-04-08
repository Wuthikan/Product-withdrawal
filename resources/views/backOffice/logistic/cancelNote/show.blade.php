@extends('layouts.backOffice.template-with-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/logistic/cancel-note/show.css')}}"/>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
<div class="x_title">
  <section class="cancel-note show">
    <header>
      <div class="title">
        <h4>CANCEL NOTE #1</h4>
      </div>
    </header>

    <div class="x_content">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
          <img src="{{asset('/images/logo.png')}}" class="brand-logo" alt="">
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 text-center mt-2">
          <h4 class="text-uppercase">08 AUGUST 2018</h4>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 col-md-12">
          <p class="table-heading">RECEIVE BY<span> : K Lorem Ipsum</span></p>
          <div class="table-responsive">
            <table class="table ngin-table">
              <thead>
                <tr>
                  <th width="200px">CODE</th>
                  <th class="text-left">DESCRIPTION</th>
                  <th width="200px">QTY</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>PCAS-00073</td>
                  <td class="text-left">LOREM IPSUM DOLOR</td>
                  <td>10</td>
                </tr>
                <tr>
                  <td>PCAS-00074</td>
                  <td class="text-left">LOREM IPSUM</td>
                  <td>15</td>
                </tr>
                <tr>
                  <td>PCAS-00075</td>
                  <td class="text-left">LOREMP ISDFS DSF SDF</td>
                  <td>10</td>
                </tr>
                <tr>
                  <td>PCAS-00076</td>
                  <td class="text-left">LOREM IPSUM DOLOR SIT AMET</td>
                  <td>20</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 col-md-12">
          <p class="table-subheading">SERIAL NUMBER</p>
          <div class="table-responsive">
            <table class="table ngin-table">
              <thead>
                <tr>
                  <th width="200px">CODE</th>
                  <th class="text-left">DESCRIPTION</th>
                  <th width="200px">SIN</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>PCAS-00073</td>
                  <td class="text-left"><strong>PS4-G</strong> : LOREM IPSUM DOLOR SIT AMET.
                  </td>
                  <td>888888888</td>
                </tr>
                <tr>
                  <td>PCAS-00073</td>
                  <td class="text-left">LOREM IPSUM DOLOR SIT AMET</td>
                  <td>888888888</td>
                </tr>
                <tr>
                  <td>PCAS-00074</td>
                  <td class="text-left">LOREM IPSUM</td>
                  <td>88888888888</td>
                </tr>
                <tr>
                  <td>PCAS-00075</td>
                  <td class="text-left">LOREMP ISDFS DSF SDF</td>
                  <td>8888888888</td>
                </tr>
                <tr>
                  <td>PCAS-00073</td>
                  <td class="text-left"><strong>PS4-G</strong> : LOREM IPSUM DOLOR SIT AMET.</td>
                  <td>888888888</td>
                </tr>
                <tr>
                  <td>PCAS-00076</td>
                  <td class="text-left">LOREM IPSUM DOLOR SIT AMET</td>
                  <td>888888888</td>
                </tr>
                <tr>
                  <td>PCAS-00076</td>
                  <td class="text-left">LOREM IPSUM DOLOR SIT AMET</td>
                  <td>888888888</td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="3" class="text-right font-black">
                    <h5>TOTAL 200 PIECES</h5>
                  </td>    
                  </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>

      <div class="row mt-2 font-black">
          <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <p><b>SIGNED : </b><span class="text-underline"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <p><b>(LOREM IPSUM)</b></p>
              </div>
            </div>

          </div>
          <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <p><b>APPROVER : </b><span class="text-underline"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <p><b>(LOREM IPSUM)</b></p>
              </div>
            </div>
          </div>
    </div>
  </section>
</div>
@endsection

@section('right-sidebar')
<div class="x_title">
  <div class="x_content">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 text-center log-margin-buttom">
        <button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#myModal-1">
          <span class="btn-label"><i class="fa fa-file-text-o info" aria-hidden="true"></i></span>Log
        </button>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 text-center email-margin-buttom">
        <button type="button" class="btn btn-ngin btn-default">
          <span class="btn-label"><i class="fa fa-envelope-o info" aria-hidden="true"></i></span>Send email</button>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-12 text-center print-margin-buttom">
        <button type="button" class="btn btn-ngin btn-default">
          <span class="btn-label"><i class="fa fa-print info" aria-hidden="true"></i></span>Print</button>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-12 text-center">
        <table >
          <tr>
            <td class="text-rigth">APPROVED BY<span>:</span></td>
            <td class="td-padding-left text-left">LOREM IPSUM</td>
          </tr>
          <tr>
            <td class="text-rigth">APPROVED DATE<span>:</span></td>
            <td class="td-padding-left text-left">18/20/57</td>
          </tr>
          <tr>
            <td class="text-rigth">APPROVED TIME<span>:</span></td>
            <td class="td-padding-left text-left">18:00</td>
          </tr>
        </table>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-12 text-center unapprve">
        <button type="button" class="btn btn-ngin btn-default danger-no-icon">
          UnApprove
          <i class="fa fa-times-circle-o" aria-hidden="true"></i></button>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-12 text-center cencel">
        <button type="button" class="btn btn-ngin btn-default ngin-no-icon">
          Cancel Document
          <i class="fa fa-exclamation-circle" aria-hidden="true"></i></button>
      </div>
    </div>
  </div>
</div>
@endsection


@section('modal')
<!-- Modal -->
<div id="myModal-1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-file-text-o" aria-hidden="true"></i>Log</h4>
      </div>
      <div class="modal-body scroll-2">
        <table class="table ngin-table">
          <thead>
            <tr>
              <th>DATE</th>
              <th>USER</th>
              <th>CHANNEL</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>02/09/2017</td>
              <td>A</td>
              <td>App</td>
              <td>เสนอ</td>
            </tr>
            <tr>
              <td>01/09/2017</td>
              <td>B</td>
              <td>App</td>
              <td>อนุมัติเพิ่ม</td>
            </tr>
            <tr>
              <td>29/08/2017</td>
              <td>C</td>
              <td>App</td>
              <td>ยกเลิกการอนุมัติ</td>
            </tr>
            <tr>
              <td>28/08/2017</td>
              <td>D</td>
              <td>App</td>
              <td>อนุมัติ</td>
            </tr>
            <tr>
              <td>27/08/2017</td>
              <td>E</td>
              <td>App</td>
              <td>50</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#myModal-1">
          <span class="btn-label"><i class="fa fa-thumbs-o-up ngin-green" aria-hidden="true"></i></span>OK
        </button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/logistic/cancel-note/show.js') }}"></script>
@endsection
