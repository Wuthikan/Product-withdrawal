@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/logistic/claim/create.css')}}"/>
@endsection

@section('module_name', 'CLAIM')
@section('page_name', 'CREATE')

@section('body')

<div class="scroll-2">
<div class="claim-create">
      <div class="row form-group">
        <div class="col-xs-2">
          <h4>
            <strong>CLAIM #143</strong>
          </h4>
        </div>
        <div class="col-xs-8">
          <div class="form-group">
              <label>SUPPLIER</label>
              <input class="form-control" type="text" placeholder="AdiWit co., Ltd.(Branch 090909) 18" data-action="typeaheadProduct">
          </div>
        </div>
        <div class="col-xs-2">
          <div class="">
					  <label for="date">
              <strong>DATE<strong>
            </label>
            <div class="input-group date" id="datetimepicker2">
              <input type="text" class="form-control">
              <span class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </span>
            </div>
          </div>
        </div>
        
      </div>
      <!-- <div class="row">
        <div class="col-xs-5 col-sm-5">
          <div class="form-group">
            <label>INVOICE #:</label>
            <input class="form-control">
          </div>
        </div>
        <div class="col-xs-2 col-sm-2 text-center">
          <label style='line-height: 85px;'>
            ----- OR -----
          </label>
        </div>
        <div class="col-xs-5 col-sm-5">
          <div class="form-group">
            <label>PO</label>
            <select class="form-control" >
              <option value="" >PB 8888</option>
            </select>
          </div>
        </div>
      </div> -->

    <div class="row">
    <div class="col-xs-12">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <div class="row row-in">
              <div class="col-xs-6 col-sm-6 text-left">
                <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  <a>CRO #1</a>
                </h4>
              </div>
              <div class="col-xs-6 col-sm-6 text-right">
                <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                </h4>
              </div>
            </div> 
          </div>
          <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body" style="border: 0px !important;">
              <table class="table ngin-table">
                <thead>
                  <tr>
                    <th colspan='2' class="txt-left">BARCODE | PRODUCT CODE | ITEM NAME</th>
                    <th>SERIAL NUMBER</th>
                    <th class="txt-left">REMARK</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="txt-left" style="width: 4%;"><input type="checkbox" class="iCheck"></td>
                    <td class="txt-left" style="border-left: none;">88888 final fantasy xv</td>
                    <td>8888888</td>
                    <td>
                      <input class="form-control">
                    </td>
                  </tr>
                  <tr>
                    <td class="txt-left" style="width: 4%;"><input type="checkbox" class="iCheck"></td>
                    <td class="txt-left" style="border-left: none;">88888 CRASH BAN</td>
                    <td>8888888</td>
                    <td>
                      <input class="form-control">
                    </td>
                  </tr>
                  <tr>
                    <td class="txt-left" style="width: 4%;"><input type="checkbox" class="iCheck"></td>
                    <td class="txt-left" style="border-left: none;">CALENDAR</td>
                    <td>
                      <input class="form-control qty" placeholder="QTY">
                      <label>/20</label>
                    </td>
                    <td>
                      <input class="form-control">
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <div class="row row-in">
              <div class="col-xs-6 col-sm-6 text-left">
                <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                  <a>CRO #2</a>
                </h4>
              </div>
              <div class="col-xs-6 col-sm-6 text-right">
                <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                </h4>
              </div>
            </div>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body" style="border: 0px !important;">
              <table class="table ngin-table">
                <thead>
                  <tr>
                    <th colspan='2' class="txt-left">BARCODE | PRODUCT CODE | ITEM NAME</th>
                    <th>SERIAL NUMBER</th>
                    <th class="txt-left">REMARK</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="txt-left" style="width: 4%;"><input type="checkbox" class="iCheck"></td>
                    <td class="txt-left" style="border-left: none;">88888 final fantasy xv</td>
                    <td>8888888</td>
                    <td>
                      <input class="form-control">
                    </td>
                  </tr>
                  <tr>
                    <td class="txt-left" style="width: 4%;"><input type="checkbox" class="iCheck"></td>
                    <td class="txt-left" style="border-left: none;">88888 CRASH BAN</td>
                    <td>8888888</td>
                    <td>
                      <input class="form-control">
                    </td>
                  </tr>
                  <tr>
                    <td class="txt-left" style="width: 4%;"><input type="checkbox" class="iCheck"></td>
                    <td class="txt-left" style="border-left: none;">CALENDAR</td>
                    <td>
                      <input class="form-control qty" placeholder="QTY">
                      <label>/20</label>
                    </td>
                    <td>
                      <input class="form-control">
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingThree">
            <div class="row row-in">
              <div class="col-xs-6 col-sm-6 text-left">
                <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <a>CRO #3</a>
                </h4>
              </div>
              <div class="col-xs-6 col-sm-6 text-right">
                <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                </h4>
              </div>
            </div> 
          </div>
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body" style="border: 0px !important;">
              <table class="table ngin-table">
                <thead>
                  <tr>
                    <th colspan='2' class="txt-left">BARCODE | PRODUCT CODE | ITEM NAME</th>
                    <th>SERIAL NUMBER</th>
                    <th class="txt-left">REMARK</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="txt-left" style="width: 4%;"><input type="checkbox" class="iCheck"></td>
                    <td class="txt-left" style="border-left: none;">88888 final fantasy xv</td>
                    <td>8888888</td>
                    <td>
                      <input class="form-control">
                    </td>
                  </tr>
                  <tr>
                    <td class="txt-left" style="width: 4%;"><input type="checkbox" class="iCheck"></td>
                    <td class="txt-left" style="border-left: none;">88888 CRASH BAN</td>
                    <td>8888888</td>
                    <td>
                      <input class="form-control">
                    </td>
                  </tr>
                  <tr>
                    <td class="txt-left" style="width: 4%;"><input type="checkbox" class="iCheck"></td>
                    <td class="txt-left" style="border-left: none;">CALENDAR</td>
                    <td>
                      <input class="form-control qty" placeholder="QTY">
                      <label>/20</label>
                    </td>
                    <td>
                      <input class="form-control">
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingFour">
            <div class="row row-in">
              <div class="col-xs-6 col-sm-6 text-left">
                <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapsFour">
                  <a>CRO #4</a>
                </h4>
              </div>
              <div class="col-xs-6 col-sm-6 text-right">
                <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapsFour">
                  <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                </h4>
              </div>
            </div> 
          </div>
          <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="panel-body" style="border: 0px !important;">
              <table class="table ngin-table">
                <thead>
                  <tr>
                    <th colspan='2' class="txt-left">BARCODE | PRODUCT CODE | ITEM NAME</th>
                    <th>SERIAL NUMBER</th>
                    <th class="txt-left">REMARK</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="txt-left" style="width: 4%;"><input type="checkbox" class="iCheck"></td>
                    <td class="txt-left" style="border-left: none;">88888 final fantasy xv</td>
                    <td>8888888</td>
                    <td>
                      <input class="form-control">
                    </td>
                  </tr>
                  <tr>
                    <td class="txt-left" style="width: 4%;"><input type="checkbox" class="iCheck"></td>
                    <td class="txt-left" style="border-left: none;">88888 CRASH BAN</td>
                    <td>8888888</td>
                    <td>
                      <input class="form-control">
                    </td>
                  </tr>
                  <tr>
                    <td class="txt-left" style="width: 4%;"><input type="checkbox" class="iCheck"></td>
                    <td class="txt-left" style="border-left: none;">CALENDAR</td>
                    <td>
                      <input class="form-control qty" placeholder="QTY">
                      <label>/20</label>
                    </td>
                    <td>
                      <input class="form-control">
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
    
    </div>
    <div class="col-xs-12">
              <table class="table ngin-table form-group" style="margin-bottom: 10px !important;">
                <thead>
                  <tr>
                    <th colspan="2" class="txt-left" style="white-space: nowrap;">BARCODE | PRODUCT CODE | ITEM NAME</th>
                    <th class="text-center">EXCHANGE</th>
                    <th class="text-center" style="width:10%">PO #</th>
                    <th class="text-center" style="width:13%">WAREHOUSE</th>
                    <th class="text-center" style="width:7%">QTY</th>
                    <th class="text-center" colspan="3">SONY CODE / SERIAL NUMBER</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="vertical-align:middle"><i class="fa fa-trash delete-n"></i></td>
                    <td class="txt-left" style="border-left: none;">
                      
                      <input class="form-control" data-action="typeaheadProduct">
                    </td>
                    <td>
                      <input type="checkbox" class="iCheck">
                    </td>
                    <td>
                      <select class="form-control">
                        <option value="">PO 1</option>
                        <option value="">PO 2</option>
                      </select>

                    </td>
                    <td>
                      <select class="form-control">
                        <option value="">COMPANY A</option>
                        <option value="">COMPANY B</option>
                      </select>

                    </td>
                    <td >
                      <input class="form-control">
                    </td>
                    
                    <td>
                      <div class="upload-u">      
                        <div class="row no-margin upload-label">
                          <div class="btn-cancel-upload"  data-target="#input-file-2" data-file="#file-2">
                            <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                          </div>
                          <i class="fa fa-file-pdf-o" style="font-size:12px" aria-hidden="true"></i>&nbsp;
                          <span class="overflow" id="file-2">-- No file --</span>
                        </div>
                        <div class="row">
                          <div class="col-xs-12">
                            <hr>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12">
                            <div class="upload-btn-wrapper">
                              <button class="btn1">BROWSE</button>
                              <input type="file" id='input-file-2' name="myfile" data-target="#file-2" />
                            </div>  
                          </div>
                        </div>
                      </div>
                    </td>
                    <td style="border-left: none;">
                      <button type="button" class="btn btn-ngin btn-xs flex-center"  data-toggle="modal" data-target="#serialModal">
                        <span class="btn-label btn-xs"><i class="fa fa-print primary" aria-hidden="true"></i></span>ดู Serial
                      </button>
                      <!-- <button type="button" class="btn btn-ngin btn-default">
                        <span class="btn-label"><i class="fa fa-barcode" aria-hidden="true" ></i></span>
                        ดู Serail
                      </button> -->
                    </td>
                    <td style="border-left: none;">
                      <input class="form-control">
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle"><i class="fa fa-trash delete-n"></i></td>
                    <td class="txt-left" style="border-left: none;">
                      
                      <input class="form-control" data-action="typeaheadProduct">
                    </td>
                    <td>
                      <input type="checkbox" class="iCheck">
                    </td>
                    <td>
                      
                      <select class="form-control">
                        <option value="">PO 1</option>
                        <option value="">PO 2</option>
                      </select>

                    </td>
                    <td>
                    <select class="form-control">
                        <option value="">COMPANY A</option>
                        <option value="">COMPANY B</option>
                      </select>

                    </td>
                    <td>
                      <input class="form-control">
                    </td>
                    
                    <td>
                      <div class="upload-u">      
                        <div class="row no-margin upload-label">
                          <div class="btn-cancel-upload"  data-target="#input-file-1" data-file="#file-1">
                            <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                          </div>
                          <i class="fa fa-file-pdf-o" style="font-size:12px" aria-hidden="true"></i>&nbsp;
                          <span class="overflow" id="file-1">-- No file --</span>
                        </div>
                        <div class="row">
                          <div class="col-xs-12">
                            <hr>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12">
                            <div class="upload-btn-wrapper">
                              <button class="btn1">BROWSE</button>
                              <input type="file" id='input-file-1' name="myfile" data-target="#file-1" />
                            </div>  
                          </div>
                        </div>
                      </div>
                    </td>
                    <td style="border-left: none;">
                      <button type="button" class="btn btn-ngin btn-xs flex-center" data-toggle="modal" data-target="#serialModal">
                        <span class="btn-label btn-xs"><i class="fa fa-print primary" aria-hidden="true"></i></span>ดู Serial
                      </button>
                      <!-- <button type="button" class="btn btn-ngin btn-default">
                        <span class="btn-label"><i class="fa fa-barcode" aria-hidden="true" ></i></span>
                        ดู Serail
                      </button> -->
                    </td>
                    <td style="border-left: none;">
                      <input class="form-control">
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:middle"></td>
                    <td class="txt-left" style="border-left: none;">
                      
                      <input class="form-control" value="">
                    </td>
                    <td>
                      <input type="checkbox" class="iCheck">
                    </td>
                    <td>
                      <select class="form-control">
                        <option value="">PO 1</option>
                        <option value="">PO 2</option>
                      </select>

                    </td>
                    <td>
                    <select class="form-control">
                        <option value="">COMPANY A</option>
                        <option value="">COMPANY B</option>
                      </select>

                    </td>
                    <td >
                      <input class="form-control">
                    </td>
                    
                    <td>
                      
                    </td>
                    <td style="border-left: none;">
                      
                    </td>
                    <td style="border-left: none;">
                      
                    </td>
                  </tr>
                  <tr>
                    <td style="text-align: right;" colspan="9">
                      <label class="total1">
                      Total : 16 Piece
                      </label>
                    </td>
                  </tr>
                 
                </tbody>
              </table>
              <!-- <div style="border-bottom: 2px solid #ddd;margin-bottom: 10px;">
              <label for="exampleInputPassword1"><h4 style="color:#000;font-weight: bold;margin: 0;">Remark</h4></label>
              </div> -->
              <div class="form-group">
                <label for="exampleInputPassword1" class="text-remark">Remark</label>
                <textarea class="form-control" rows="4"  placeholder="textarea"> </textarea>
              </div>
    </div>
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">	
						
							<button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{ url("back-office/inquiry") }}'">
								<span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i></span>SAVE</button>
								<button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{ url("back-office/inquiry") }}'">
									<span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL</button>
								</div>
							</div>
						</div>
					</div>

      <!-- <div class="row">
        <div class="col-xs-6 col-sm-6">
          <label for="REMAEK">
            <strong>REMAEK</strong>
          </label>
          <textarea class="form-control" rows="2"></textarea>
        </div>
        <div class="col-xs-6 col-sm-6 text-right">
        <strong>Total  10 Prices</strong>
        </div>
      </div> -->

      <!-- <div class="row action">
        <div class="col-xs-6 col-sm-6 text-right">
          <button type="button" class="btn btn-ngin btn-default ">
            <span class="btn-label">
              <i class="glyphicon glyphicon-floppy-disk success" aria-hidden="true"></i>
            </span>
            SAVE
          </button>
        </div>
        <div class="col-xs-6 col-sm-6 text-left">
          <button type="button" class="btn btn-ngin btn-default ">
            <span class="btn-label">
              <i class="glyphicon glyphicon-remove-circle danger" aria-hidden="true"></i>
            </span>
            CANCEL
          </button>
        </div>
      </div> -->

</div>
</div>

<!-- modal -->
<div id="serialModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-file-text-o" aria-hidden="true"></i>CRASH BANDICOOT</h4>
      </div>
      <div class="modal-body scroll-2" style="height:70vh">                   
        <table class="table ngin-table">
          <thead>
            <tr>
              <th colspan="4">SERIAL NUMBER</th>
            </tr>
          </thead>
          <tbody>
            @for ($i=0; $i<130; $i++)
            @if ($i%4 == 0)
            <tr>
            @endif
              <td class="serial-cell">
                <button type="button" class="btn btn-default-background">
                  <span class="btn-label"><i class="fa fa-trash danger" aria-hidden="true"></i></span>
                </button>
                <label>{{ $i }}{{substr(str_shuffle(MD5(microtime())), 0, 20)}}</label>
              </td>
            @if ($i%4 == 3)
            </tr>
            @endif
            @endfor
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#serialModal">
          <span class="btn-label"><i class="fa fa-thumbs-o-up ngin-green" aria-hidden="true"></i></span>OK</button>
        </div>
      </div>      
    </div>
  </div>
@endsection

@section('script')
    <script src="{{ asset('/js/back-office/logistic/claim/create.js') }}"></script>
    <script>
      $('.date').datetimepicker({
        viewMode: 'days',
        format: 'DD/MM/YYYY'
      });
      $('#datetimepicker2').datetimepicker({
                viewMode: 'days',
                format: 'DD/MM/YYYY'
            });
      $('[type=file]').change((e) => {
        const filelist = e.target.files;
        const targetId = $(e.target).data('target');
        console.log(targetId, e);
        if (filelist) {
            if (filelist[0])
                $(targetId).text(filelist[0].name);
        }
      });

      $('.btn-cancel-upload').click(function(){
        let tartget = $(this).data("target")
        console.log($(this).data("file"))
        $(tartget).wrap('<form>').closest('form').get(0).reset();
        $(tartget).unwrap(); 
        $($(this).data("file")).text('-- No file --');       
      })
    </script>
@endsection