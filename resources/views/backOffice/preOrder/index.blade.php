@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/pre-order/index.css')}}"/>
    <link href="https://fonts.googleapis.com/css?family=Kanit:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
@endsection

@section('body')
<div class="x_content pre-order">
  <section class="section-header-index">
    <form class="form-inline form-header-index">
      <div class="row">
        <table>
          <tr>
            <td class="col-1">
              <div class="col-1-content" >
                <div class="form-group select-all">
                  <input type="checkbox"  checked class="iCheck" id="selectall" name="selectall" >
                  <label for="selectall" class="iCheck-label" >Select All</label>
                </div>
                <div class="form-group">
                  <button type="button" class="btn btn-default-background" onclick="window.location='{{ url("back-office/pre-order/create") }}'">
                    <span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
                  </button>
                </div>
                <div class="form-group button-2">
                  <button type="button"    class="btn btn-default-background">
                    <span class="btn-label"><span class="fa-approve-all"></span></span><span class="btn-label-label">Approve All</span>
                  </button>
                </div>
                <div class="form-group">
                  <button type="button"    class="btn btn-default-background">
                    <span class="btn-label"><span class="fa fa-file-text-o pdf"></span></span><span class="btn-label-label">NEW SO</span>
                  </button>
                </div>
                <div class="form-group">
                  <button type="button"    class="btn btn-default-background">
                    <span class="btn-label"><span class="fa fa-file-excel-o danger"></span></span><span class="btn-label-label">CLOSE PREORDER</span>
                  </button>
                </div>
              </div>
            </td>
            <td class="col-2">
              <div class="" >
                <div class="form-group form-fixed-width" >
                  <div class="icon-addon addon-sm">
                    <input  type="text" placeholder="SEARCH" class="form-control search" id="SEARCH" >
                    <label for="search"  class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
                  </div>
                </div>
              </div>
            </td>
            <td class="col-3">

              <div class="text-right col-3-content">
                <div class="form-group">
                  <button type="button" class="btn  btn-default-background">
                    <span class="btn-label"><i class="fa fa-file-pdf-o pdf" aria-hidden="true"></i></i></span><span class="btn-label-label">PDF</span>
                  </button>
                </div>
                <div class="form-group">
                  <button type="button" class="btn  btn-default-background">
                    <span class="btn-label"><i class="fa fa-file-excel-o excel" aria-hidden="true"></i></i></span><span class="btn-label-label">Excel</span>
                  </button>
                </div>
                <div class="form-group">
                  <button type="button" class="btn  btn-default-background">
                    <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span><span class="btn-label-label">Delete All</span>
                  </button>
                </div>
                <div class="form-group">
                  <div class="btn-group ngin-dropdown-sort">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-sort-alpha-desc"></i> SORT
                    </a>
                    <ul class="dropdown-menu dropdown-menu-form">
                      <li class="title">ORDER</li>
                      <li><input type="radio" id="radioAsc" name="rdoOrder" checked="checked" value="asc"><label for="radioAsc">Ascending</label></li>
                      <li><input type="radio" id="radioDes" name="rdoOrder" value="des"><label for="radioDes">Descending</label></li>
                      <li role="separator" class="divider"></li>
                      <li class="title">BY</li>
                      <li><input type="radio" id="radioId" name="rdoBy" checked="checked" value="id"><label for="radioId">ID</label></li>
                      <li><input type="radio" id="radioDocDate" name="rdoBy" value="doc_date"><label for="radioDocDate">Document Date</label></li>
                      <li><input type="radio" id="radioCusName" name="rdoBy" value="cus_name"><label for="radioCusName">Customer Name</label></li>
                      <li><input type="radio" id="radioAmount" name="rdoBy" value="amount"><label for="radioAmount">Amount</label></li>
                      <li><input type="radio" id="radioStatus" name="rdoBy" value="status"><label for="radioStatus">Status</label></li>
                    </ul>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>
    </form>
  </section>

  <div id="exTab2" class="">
    <ul class="nav nav-tabs">
  		<li>
  			<a href="#1" data-toggle="tab">
  				<span>
  					<i class="fa fa-circle-o-notch" aria-hidden="true"></i>
  				</span>
  				BEFORE INITIAL
  			</a>
  		</li>
  		<li>
  			<a href="#2" data-toggle="tab">
  				<span>
  					<i class="fa fa-hourglass-end" aria-hidden="true"></i>
  				</span>
  				AFTER INITIAL
  			</a>
  		</li>
  		<li class="active">
  			<a href="#3" data-toggle="tab">
  				<span>
  					<i class="fa fa-check" aria-hidden="true"></i>
  				</span>
  				COMPLETED
  			</a>
  		</li>
  	</ul>

    <div class="tab-content scroll-2">
      <div class="tab-panel" id="2">
        <div class="panel-group" id="approved" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <table class="table ngin-table">
                    <tbody>
                      <tr>
                        <td class="blank"><input type="checkbox" class="iCheck" /></td>
                        <td class="image"><img src="{{asset('images/backOffice/preOrder/example-image.png')}}"></td>
                        <td class="information">
                          <p class="header">PS4 nioh gqme play</p>
                          <div class="row">
                            <div class="col-xs-3">
                              <div class="game-detail">
                                <span class="title">Subtitle</span>
                                <span class="value">: EN/TH</span>
                              </div>
                              <div class="game-detail">
                                <span class="title">Platform</span>
                                <span class="value">: PS4</span>
                              </div>
                              <div class="game-detail">
                                <span class="title">Edition</span>
                                <span class="value">: Standard</span>
                              </div>
                              <div class="game-detail">
                                <span class="title">Region</span>
                                <span class="value">: 2 EU</span>
                              </div>
                            </div>
                            <div class="col-xs-9">
                              <div class="row additional">
                                <div class="col-xs-3">
                                  <label>Release Date</label>
                                  <p>08/08/2018</p>
                                </div>
                                <div class="col-xs-3">
                                  <label>Preorder End Date</label>
                                  <p>08/09/2018</p>
                                </div>
                                <div class="col-xs-3">
                                  <label>Pre-order Target</label>
                                  <p style="color: #CC0520;">5.000/10.000</p>
                                </div>
                                <div class="col-xs-3">
                                  <label>Close Preorder</label>
                                  <p><input type="checkbox" class="switchCheck" checked></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="blank"></td>
                        <td colspan="2" class="code">
                          <div class="row">
                            <div class="col-xs-2"><p class="title">Product Code</p></div>
                            <div class="col-xs-10"><p class="value">: 88888</p></div>

                            <div class="col-xs-2"><p class="title">Barcode</p></div>
                            <div class="col-xs-10"><p class="value">: 8-8888-88888-88-8 / 8-8888-88888-88-8 / 8-8888-88888-88-8</p></div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </a>
              </h4>
            </div>

            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <table class="collapse-content ngin-table">
                  <thead>
                    <tr>
                      <th class="delivery-date"><span>Delevery Date</span></th>
                      <th class="quota"><span>Quota</span></th>
                      <th class="reserved"><span>Reserved</span></th>
                      <th class="available"><span>Available</span></th>
                      <th class="edit"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="delivery-date">06/08/2018</td>
                      <td class="quota">10,000</td>
                      <td class="reserved">5,000</td>
                      <td class="available">5,000</td>
                      <td class="edit">
                        <button type="button" class="btn btn-ngin btn-default">
                          <span class="btn-label">
                            <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                          </span>Edit
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="delivery-date">09/09/2018</td>
                      <td class="quota">6,000</td>
                      <td class="reserved">100</td>
                      <td class="available">4,900</td>
                      <td class="edit">
                        <button type="button" class="btn btn-ngin btn-default">
                          <span class="btn-label">
                            <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                          </span>Edit
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="delivery-date">10/09/2018</td>
                      <td class="quota">2,000</td>
                      <td class="reserved">0</td>
                      <td class="available">2,000</td>
                      <td class="edit">
                        <button type="button" class="btn btn-ngin btn-default">
                          <span class="btn-label">
                            <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                          </span>Edit
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="delivery-date">10/10/2018</td>
                      <td class="quota">1,000</td>
                      <td class="reserved">0</td>
                      <td class="available">1,000</td>
                      <td class="edit">
                        <button type="button" class="btn btn-ngin btn-default">
                          <span class="btn-label">
                            <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                          </span>Edit
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="delivery-date">11/11/2018</td>
                      <td class="quota">500</td>
                      <td class="reserved">0</td>
                      <td class="available">500</td>
                      <td class="edit">
                        <button type="button" class="btn btn-ngin btn-default">
                          <span class="btn-label">
                            <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                          </span>Edit
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                  <table class="table ngin-table">
                    <tbody>
                      <tr>
                        <td class="blank"><input type="checkbox" class="iCheck" /></td>
                        <td class="image"><img src="{{asset('images/backOffice/preOrder/example-image.png')}}"></td>
                        <td class="information">
                          <p class="header">PS4 nioh gqme play</p>
                          <div class="row">
                            <div class="col-xs-3">
                              <div class="game-detail">
                                <span class="title">Subtitle</span>
                                <span class="value">: EN/TH</span>
                              </div>
                              <div class="game-detail">
                                <span class="title">Platform</span>
                                <span class="value">: PS4</span>
                              </div>
                              <div class="game-detail">
                                <span class="title">Edition</span>
                                <span class="value">: Standard</span>
                              </div>
                              <div class="game-detail">
                                <span class="title">Region</span>
                                <span class="value">: 2 EU</span>
                              </div>
                            </div>
                            <div class="col-xs-9">
                              <div class="row additional">
                                <div class="col-xs-3">
                                  <label>Release Date</label>
                                  <p>08/08/2018</p>
                                </div>
                                <div class="col-xs-3">
                                  <label>Preorder End Date</label>
                                  <p>08/09/2018</p>
                                </div>
                                <div class="col-xs-3">
                                  <label>Pre-order Target</label>
                                  <p style="color: #CC0520;">5.000/10.000</p>
                                </div>
                                <div class="col-xs-3">
                                  <label>Close Preorder</label>
                                  <p><input type="checkbox" class="switchCheck" checked></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="blank"></td>
                        <td colspan="2" class="code">
                          <div class="row">
                            <div class="col-xs-2"><p class="title">Product Code</p></div>
                            <div class="col-xs-10"><p class="value">: 88888</p></div>

                            <div class="col-xs-2"><p class="title">Barcode</p></div>
                            <div class="col-xs-10"><p class="value">: 8-8888-88888-88-8 / 8-8888-88888-88-8 / 8-8888-88888-88-8</p></div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </a>
              </h4>
            </div>

            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                <table class="collapse-content ngin-table">
                  <thead>
                    <tr>
                      <th class="delivery-date"><span>Delevery Date</span></th>
                      <th class="quota"><span>Quota</span></th>
                      <th class="reserved"><span>Reserved</span></th>
                      <th class="available"><span>Available</span></th>
                      <th class="edit"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="delivery-date">06/08/2018</td>
                      <td class="quota">10,000</td>
                      <td class="reserved">5,000</td>
                      <td class="available">5,000</td>
                      <td class="edit">
                        <button type="button" class="btn btn-ngin btn-default">
                          <span class="btn-label">
                            <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                          </span>Edit
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="delivery-date">09/09/2018</td>
                      <td class="quota">6,000</td>
                      <td class="reserved">100</td>
                      <td class="available">4,900</td>
                      <td class="edit">
                        <button type="button" class="btn btn-ngin btn-default">
                          <span class="btn-label">
                            <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                          </span>Edit
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="delivery-date">10/09/2018</td>
                      <td class="quota">2,000</td>
                      <td class="reserved">0</td>
                      <td class="available">2,000</td>
                      <td class="edit">
                        <button type="button" class="btn btn-ngin btn-default">
                          <span class="btn-label">
                            <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                          </span>Edit
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="delivery-date">10/10/2018</td>
                      <td class="quota">1,000</td>
                      <td class="reserved">0</td>
                      <td class="available">1,000</td>
                      <td class="edit">
                        <button type="button" class="btn btn-ngin btn-default">
                          <span class="btn-label">
                            <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                          </span>Edit
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="delivery-date">11/11/2018</td>
                      <td class="quota">500</td>
                      <td class="reserved">0</td>
                      <td class="available">500</td>
                      <td class="edit">
                        <button type="button" class="btn btn-ngin btn-default">
                          <span class="btn-label">
                            <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                          </span>Edit
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                  <table class="table ngin-table">
                    <tbody>
                      <tr>
                        <td class="blank"><input type="checkbox" class="iCheck" /></td>
                        <td class="image"><img src="{{asset('images/backOffice/preOrder/example-image.png')}}"></td>
                        <td class="information">
                          <p class="header">PS4 nioh gqme play</p>
                          <div class="row">
                            <div class="col-xs-3">
                              <div class="game-detail">
                                <span class="title">Subtitle</span>
                                <span class="value">: EN/TH</span>
                              </div>
                              <div class="game-detail">
                                <span class="title">Platform</span>
                                <span class="value">: PS4</span>
                              </div>
                              <div class="game-detail">
                                <span class="title">Edition</span>
                                <span class="value">: Standard</span>
                              </div>
                              <div class="game-detail">
                                <span class="title">Region</span>
                                <span class="value">: 2 EU</span>
                              </div>
                            </div>
                            <div class="col-xs-9">
                              <div class="row additional">
                                <div class="col-xs-3">
                                  <label>Release Date</label>
                                  <p>08/08/2018</p>
                                </div>
                                <div class="col-xs-3">
                                  <label>Preorder End Date</label>
                                  <p>08/09/2018</p>
                                </div>
                                <div class="col-xs-3">
                                  <label>Pre-order Target</label>
                                  <p style="color: #CC0520;">5.000/10.000</p>
                                </div>
                                <div class="col-xs-3">
                                  <label>Close Preorder</label>
                                  <p><input type="checkbox" class="switchCheck" checked></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="blank"></td>
                        <td colspan="2" class="code">
                          <div class="row">
                            <div class="col-xs-2"><p class="title">Product Code</p></div>
                            <div class="col-xs-10"><p class="value">: 88888</p></div>

                            <div class="col-xs-2"><p class="title">Barcode</p></div>
                            <div class="col-xs-10"><p class="value">: 8-8888-88888-88-8 / 8-8888-88888-88-8 / 8-8888-88888-88-8</p></div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </a>
              </h4>
            </div>

            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                <table class="collapse-content ngin-table">
                  <thead>
                    <tr>
                      <th class="delivery-date"><span>Delevery Date</span></th>
                      <th class="quota"><span>Quota</span></th>
                      <th class="reserved"><span>Reserved</span></th>
                      <th class="available"><span>Available</span></th>
                      <th class="edit"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="delivery-date">06/08/2018</td>
                      <td class="quota">10,000</td>
                      <td class="reserved">5,000</td>
                      <td class="available">5,000</td>
                      <td class="edit">
                        <button type="button" class="btn btn-ngin btn-default">
                          <span class="btn-label">
                            <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                          </span>Edit
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="delivery-date">09/09/2018</td>
                      <td class="quota">6,000</td>
                      <td class="reserved">100</td>
                      <td class="available">4,900</td>
                      <td class="edit">
                        <button type="button" class="btn btn-ngin btn-default">
                          <span class="btn-label">
                            <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                          </span>Edit
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="delivery-date">10/09/2018</td>
                      <td class="quota">2,000</td>
                      <td class="reserved">0</td>
                      <td class="available">2,000</td>
                      <td class="edit">
                        <button type="button" class="btn btn-ngin btn-default">
                          <span class="btn-label">
                            <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                          </span>Edit
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="delivery-date">10/10/2018</td>
                      <td class="quota">1,000</td>
                      <td class="reserved">0</td>
                      <td class="available">1,000</td>
                      <td class="edit">
                        <button type="button" class="btn btn-ngin btn-default">
                          <span class="btn-label">
                            <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                          </span>Edit
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="delivery-date">11/11/2018</td>
                      <td class="quota">500</td>
                      <td class="reserved">0</td>
                      <td class="available">500</td>
                      <td class="edit">
                        <button type="button" class="btn btn-ngin btn-default">
                          <span class="btn-label">
                            <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                          </span>Edit
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                  <table class="table ngin-table">
                    <tbody>
                      <tr>
                        <td class="blank"><input type="checkbox" class="iCheck" /></td>
                        <td class="image"><img src="{{asset('images/backOffice/preOrder/example-image.png')}}"></td>
                        <td class="information">
                          <p class="header">PS4 nioh gqme play</p>
                          <div class="row">
                            <div class="col-xs-3">
                              <div class="game-detail">
                                <span class="title">Subtitle</span>
                                <span class="value">: EN/TH</span>
                              </div>
                              <div class="game-detail">
                                <span class="title">Platform</span>
                                <span class="value">: PS4</span>
                              </div>
                              <div class="game-detail">
                                <span class="title">Edition</span>
                                <span class="value">: Standard</span>
                              </div>
                              <div class="game-detail">
                                <span class="title">Region</span>
                                <span class="value">: 2 EU</span>
                              </div>
                            </div>
                            <div class="col-xs-9">
                              <div class="row additional">
                                <div class="col-xs-3">
                                  <label>Release Date</label>
                                  <p>08/08/2018</p>
                                </div>
                                <div class="col-xs-3">
                                  <label>Preorder End Date</label>
                                  <p>08/09/2018</p>
                                </div>
                                <div class="col-xs-3">
                                  <label>Pre-order Target</label>
                                  <p style="color: #CC0520;">5.000/10.000</p>
                                </div>
                                <div class="col-xs-3">
                                  <label>Close Preorder</label>
                                  <p><input type="checkbox" class="switchCheck" checked></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="blank"></td>
                        <td colspan="2" class="code">
                          <div class="row">
                            <div class="col-xs-2"><p class="title">Product Code</p></div>
                            <div class="col-xs-10"><p class="value">: 88888</p></div>

                            <div class="col-xs-2"><p class="title">Barcode</p></div>
                            <div class="col-xs-10"><p class="value">: 8-8888-88888-88-8 / 8-8888-88888-88-8 / 8-8888-88888-88-8</p></div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </a>
              </h4>
            </div>

            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
              <div class="panel-body">
                <table class="collapse-content ngin-table">
                  <thead>
                    <tr>
                      <th class="delivery-date"><span>Delevery Date</span></th>
                      <th class="quota"><span>Quota</span></th>
                      <th class="reserved"><span>Reserved</span></th>
                      <th class="available"><span>Available</span></th>
                      <th class="edit"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="delivery-date">06/08/2018</td>
                      <td class="quota">10,000</td>
                      <td class="reserved">5,000</td>
                      <td class="available">5,000</td>
                      <td class="edit">
                        <button type="button" class="btn btn-ngin btn-default">
                          <span class="btn-label">
                            <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                          </span>Edit
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="delivery-date">09/09/2018</td>
                      <td class="quota">6,000</td>
                      <td class="reserved">100</td>
                      <td class="available">4,900</td>
                      <td class="edit">
                        <button type="button" class="btn btn-ngin btn-default">
                          <span class="btn-label">
                            <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                          </span>Edit
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="delivery-date">10/09/2018</td>
                      <td class="quota">2,000</td>
                      <td class="reserved">0</td>
                      <td class="available">2,000</td>
                      <td class="edit">
                        <button type="button" class="btn btn-ngin btn-default">
                          <span class="btn-label">
                            <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                          </span>Edit
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="delivery-date">10/10/2018</td>
                      <td class="quota">1,000</td>
                      <td class="reserved">0</td>
                      <td class="available">1,000</td>
                      <td class="edit">
                        <button type="button" class="btn btn-ngin btn-default">
                          <span class="btn-label">
                            <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                          </span>Edit
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="delivery-date">11/11/2018</td>
                      <td class="quota">500</td>
                      <td class="reserved">0</td>
                      <td class="available">500</td>
                      <td class="edit">
                        <button type="button" class="btn btn-ngin btn-default">
                          <span class="btn-label">
                            <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                          </span>Edit
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
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
    <nav aria-label="Page navigation">
      <ul class="pagination">
        <li class="page-number">
          <a href="#" aria-label="Previous" class="not-active">
            Previous
          </a>
        </li>
        <li class="page-number  active"><a href="#">1</a></li>
        <li class="page-number"><a href="#">2</a></li>
        <li class="page-number"><a href="#">3</a></li>
        <li class="page-number"><a href="#">4</a></li>
        <li class="page-number"><a href="#">5</a></li>
        <li class="page-number">
          <a href="#" aria-label="Next" >
            Next
          </a>
        </li>
      </ul>
    </nav>
  </div>
</div>
</div>
@endsection

@section('top-right-sidebar')
<div class="x_title">
    <span class="left">Top Product เดือนที่แล้ว</span>
		<span class="right"></span>
</div>
<div class="x_content">
	<ul class="list-unstyled  scroll-view">
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>

			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/150727114252_prod_50.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
                <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
            </div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
		    <div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                    <small class="right">20/50</small>
                <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
            </div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/150727114252_prod_50.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
			    <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
		    	<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
	            <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
	        </div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>
		        <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
		    </div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
		    	<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
        		<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
		    </div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
			    <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
			</div>
		</li>
	</ul>
</div>
@endsection

@section('bottom-right-sidebar')
<div class="x_title">
    <span class="left">NEW RELEASES</span>
</div>
<div class="x_content">
	<ul class="list-unstyled  scroll-view">
    	<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
			</div>
		</li>
		<li class="media event">
		    <a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/150727114252_prod_50.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/150727114252_prod_50.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
			    <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
		    	<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
			    <p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
		    	<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small></p>
			</div>
		</li>
        <li class="media event">
			<a class="pull-left border-aero">
				<img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded">
			</a>
			<div class="media-body">
                <a class="title" href="#">Horizon: Zero Dawn</a>
                <small class="right">20/50</small>
				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
			</div>
		</li>
	</ul>



</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/pre-order/index.js') }}"></script>
@endsection
