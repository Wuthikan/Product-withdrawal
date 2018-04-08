@extends('layouts.backOffice.template-with-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/logistic/shipping/show.css')}}"/>
@endsection

@section('module_name', 'SHIPPING')
@section('page_name', 'SHOW')

@section('body')
<div class="content scroll-2">
  <div class="x_title">
    <section class="shipping show">
      <header>
        <div class="title">
          <h4>PW #1</h4>
        </div>
        <div class="consignee">
          <h4>RECEIVER NAME: <span>K Lorem ipsum</span></h4>
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
            <div class="table-responsive">
              <table class="table ngin-table">
                <thead>
                  <tr>
                    <th class="col-md-2">CODE</th>
                    <th class="col-md-8 align-left description">DESCRIPTION</th>
                    <th class="col-md-2">QTY</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="col-md-2">PCAS-00073</td>
                    <td class="col-md-8 align-left description">LOREM IPSUM DOLOR</td>
                    <td class="col-md-2">10</td>
                  </tr>
                  <tr>
                    <td class="col-md-2">PCAS-00074</td>
                    <td class="col-md-8 align-left description">LOREM IPSUM</td>
                    <td class="col-md-2">15</td>
                  </tr>
                  <tr>
                    <td class="col-md-2">PCAS-00075</td>
                    <td class="col-md-8 align-left description">LOREMP ISDFS DSF SDF</td>
                    <td class="col-md-2">10</td>
                  </tr>
                  <tr>
                    <td class="col-md-2">PCAS-00076</td>
                    <td class="col-md-8 align-left description">LOREM IPSUM DOLOR SIT AMET</td>
                    <td class="col-md-2">20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12 col-md-12">
            <p class="table-heading">SERIAL NUMBER</p>
            <div class="table-responsive">
              <table class="table ngin-table serial-number-table">
                <thead>
                  <tr>
                    <th class="col-md-2">CODE</th>
                    <th class="col-md-8 align-left description">DESCRIPTION</th>
                    <th class="col-md-2">S/N COUNT (12)</th>
                  </tr>
                </thead>
                <tbody>
                  <div class="table-group">
                    <div class="main">
                      <tr>
                        <td class="col-md-2">PCAS-00073</td>
                        <td class="col-md-8 align-left description">
                          <div class="serial-desc">
                            <p><strong>PS4-G</strong> : LOREM IPSUM DOLOR SIT AMET. CONSECTETUER ADIPISCING ELIT</p>
                          </div>
                        </td>
                        <td class="col-md-2"></td>
                      </tr>
                    </div>
                    <div class="code">
                      <tr>
                        <td colspan="3" class="serial-number">
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3" class="serial-number">
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3" class="serial-number">
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3" class="serial-number">
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                        </td>
                      </tr>
                    </div>
                  </div>

                  <div class="table-group">
                    <div class="main">
                      <tr>
                        <td class="col-md-2">PCAS-00073</td>
                        <td class="col-md-8 align-left description">LOREM IPSUM DOLOR SIT AMET. CONSECTETUER ADIPISCING ELIT</td>
                        <td class="col-md-2"></td>
                      </tr>
                    </div>
                    <div class="code">
                      <tr>
                        <td colspan="3" class="serial-number">
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                        </td>
                      </tr>
                    </div>
                  </div>

                  <div class="table-group">
                    <div class="main">
                      <tr>
                        <td class="col-md-2">PCAS-00073</td>
                        <td class="col-md-8 align-left description">LOREM IPSUM DOLOR SIT</td>
                        <td class="col-md-2"></td>
                      </tr>
                    </div>
                    <div class="code">
                      <tr>
                        <td colspan="3" class="serial-number">
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3" class="serial-number">
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3" class="serial-number">
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3" class="serial-number">
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                        </td>
                      </tr>
                    </div>
                  </div>

                  <div class="table-group">
                    <div class="main">
                      <tr>
                        <td class="col-md-2">PCAS-00073</td>
                        <td class="col-md-8 align-left description">LOREM IPSUM DOLOR</td>
                        <td class="col-md-2"></td>
                      </tr>
                    </div>
                    <div class="code">
                      <tr>
                        <td colspan="3" class="serial-number">
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3" class="serial-number">
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3" class="serial-number">
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                        </td>
                      </tr>
                    </div>
                  </div>

                  <div class="table-group">
                    <div class="main">
                      <tr>
                        <td class="col-md-2">PCAS-00073</td>
                        <td class="col-md-8 align-left description">LOREM IPSUM DOLOR SIT AMET. CONSECTETUER ADIPISCING ELIT</td>
                        <td class="col-md-2"></td>
                      </tr>
                    </div>
                    <div class="code">
                      <tr>
                        <td colspan="3" class="serial-number">
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                        </td>
                      </tr>
                    </div>
                  </div>

                  <div class="table-group">
                    <div class="main">
                      <tr>
                        <td class="col-md-2">PCAS-00073</td>
                        <td class="col-md-8 align-left description">LOREM IPSUM DOLOR SIT AMET. CONSECTETUER ADIPISCING ELIT</td>
                        <td class="col-md-2"></td>
                      </tr>
                    </div>
                    <div class="code">
                      <tr>
                        <td colspan="3" class="serial-number">
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3" class="serial-number">
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                          <div class="col-md-1">88888888</div>
                        </td>
                      </tr>
                    </div>
                  </div>

                  <tr class="last-tr">
                    <td class="col-md-2"></td>
                    <td class="col-md-8"></td>
                    <td class="col-md-2 total">Total 200 PIECES</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </section>
  </div>
</div>
@endsection

@section('right-sidebar')
<div class="showCtrl" align="center">
    <p>
        <button type="button" class="btn btn-ngin btn-default log" id="showLogBtn">
            <span class="btn-label"><i class="fa fa-file-text-o info" aria-hidden="true"></i></span>Log
        </button>
    </p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <p>
        <button type="button" class="btn btn-ngin btn-default send">
            <span class="btn-label"><i class="fa fa-envelope info" aria-hidden="true"></i></span>Send Email
        </button>
    </p>
    <p>
        <button type="button" class="btn btn-ngin btn-default print">
            <span class="btn-label"><i class="fa fa-print info" aria-hidden="true"></i></span>Print
        </button>
    </p>
    <br>
    <p>
        <table>
            <tr>
                <td align="right"><strong class="text-uppercase">Approved : </strong></td>
                <td>&nbsp;LOREM IPSUM</td>
            </tr>
            <tr>
                <td align="right"><strong class="text-uppercase">Approved Date : </strong></td>
                <td>&nbsp;18/20/57</td>
            </tr>
            <tr>
                <td align="right"><strong class="text-uppercase">Approved Time : </strong></td>
                <td>&nbsp;18:00</td>
            </tr>
        </table>
    </p>
    <p>
        <button type="button" class="btn btn-ngin btn-danger actionBtn" style="background: #fd0000 !important">
            UnApprove <i class="fa fa-times-circle-o" aria-hidden="true"></i></span>
        </button>
    </p>
    <p>
        <button type="button" class="btn btn-ngin btn-default actionBtn">
            Cancel Document <i class="fa fa-exclamation info-circle" aria-hidden="true" style="color: #38393a; background: #fff; border-radius: 50px; padding: 2px 4px 0px; font-size: 11px;"></i></span>
        </button>
    </p>
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
              <td>New</td>
            </tr>
            <tr>
              <td>01/09/2017</td>
              <td>B</td>
              <td>App</td>
              <td>Approve</td>
            </tr>
            <tr>
              <td>29/08/2017</td>
              <td>C</td>
              <td>App</td>
              <td>UnApprove</td>
            </tr>
            <tr>
              <td>28/08/2017</td>
              <td>D</td>
              <td>App</td>
              <td>Approve</td>
            </tr>
            <tr>
              <td>27/08/2017</td>
              <td>E</td>
              <td>App</td>
              <td>Delete</td>
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
    <script src="{{ asset('js/back-office/logistic/shipping/show.js') }}"></script>
@endsection
