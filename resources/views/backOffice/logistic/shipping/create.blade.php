@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/logistic/shipping/create.css')}}"/>
@endsection

@section('module_name', 'DELIVERY')
@section('page_name', 'CREATE')

@section('body')
<section class="shipping new scroll-2">
  <div class="container-wrapper">
    <form action="" class="form-new-shipping">
      <div class="row">
        <div class="col-md-4">
          <div class="col-md-8 no-padding">
            <div class="form-group text-black">
              <label for="payout-date">DATE</label>
              <div class="input-group date" id="payout-date">
                <input type="text" class="form-control" value="04/09/2017">
                <span class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="col-md-5 no-padding">
            <!--
            <div class="form-group text-black">
              <label for="warehouse">WAREHOUSE</label>
              <select name="warehose" id="warehouse" class="form-control">
                <option value="1">W #1</option>
                <option value="2">W #2</option>
              </select>
            </div>
            -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group text-black col-md-8">
            <label for="receiver-name">RECEIVER NAME</label>
            <input type="text" id="receiver-name" class="form-control">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="form-section">
          <div class="heading">
            <div class="col-md-9">
              <p><strong>SO #1 Sample Company - <b class="text-small">(Head Office)</b></strong><span> Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></p>
            </div>
            <div class="col-md-3">
              <p><b>Total</b> 10 <b>Pieces</b></p>
            </div>
            <br>
          </div>

          <div class="col-md-12 pl-25">
            <div class="shipping-row title">
              <div class="col-md-4">
                <label for="">BARCODE | PRODUCT CODE | ITEM NAME</label>
              </div>
              <div class="col-md-2 has-text-center" style="line-height: 1em">
                <label>QTY</label><br><span style="font-size:9px">(ORDERED / SERIAL RECORDED)</span>
              </div>
              <div class="col-md-1 has-text-center">
                <label>WREEHOUSE</label>
              </div>
              <div class="col-md-5 has-text-center">
                <label for="">SERIAL NUMBER / SONY CODE</label>
              </div>
              <br>
            </div>

            @foreach ([''] as $i => $value)  
            <div class="shipping-row">
              <div class="col-md-4">
                <label for="">8888 CRASH BAN</label>
              </div>
              <div class="col-md-2 has-text-center">
                1000 / <b>208</b>
              </div>
              <div class="col-md-1 has-text-center">
                1
              </div>
              <div class="col-md-5 flex-center">
                <!-- SERIAL INMPUT -->
                <button type="button" class="btn btn-ngin btn-xs flex-center" style="margin-right:1em" data-toggle="modal" data-target="#serialModal">
                  <span class="btn-label btn-xs"><i class="fa fa-print primary" aria-hidden="true"></i></span>ดู Serial
                </button>
                <input id="serial-text-1" type="text" style="margin-right:1em">

                <div class="upload-u">      
                  <div class="row no-margin upload-label">
                    <div class="btn-cancel-upload" data-target="#input-file-{{$i}}" data-file="#file-{{ $i }}">
                      <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                    </div>
                    <i class="fa fa-file-pdf-o" style="font-size:12px" aria-hidden="true"></i>&nbsp;
                    <span class="overflow" id="file-{{$i}}">-- No file --</span>
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
                        <input type="file" id="input-file-{{$i}}" name="myfile" data-target="#file-{{$i}}"/>
                      </div>  
                    </div>
                  </div>
                </div>
                <!-- END SERIAL INPUT -->
              </div>
            </div>
            @endforeach

            <div class="shipping-row">
              <div class="col-md-4">
                <label for="">88888 GRAND T</label>
              </div>
              <div class="col-md-2 has-text-center">
                10 / <b>8</b>
              </div>
              <div class="col-md-1 has-text-center">
                1
              </div>
              <div class="col-md-5 flex-center">
                <!-- SERIAL INMPUT -->
                <button type="button" class="btn btn-ngin btn-xs flex-center" style="margin-right:1em" data-toggle="modal" data-target="#serialModal">
                  <span class="btn-label btn-xs"><i class="fa fa-print primary" aria-hidden="true"></i></span>ดู Serial
                </button>
                <input id="serial-text-1" type="text" style="margin-right:1em">
                <div class="upload-u">      
                  <div class="row no-margin upload-label">
                    <div class="btn-cancel-upload" data-target="#input-file-{{$i}}" data-file="#file-{{ $i }}">
                      <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                    </div>
                    <i class="fa fa-file-pdf-o" style="font-size:12px" aria-hidden="true"></i>&nbsp;
                    <span class="overflow" id="file-{{$i}}">-- No file --</span>
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
                        <input type="file" id="input-file-{{$i}}" name="myfile" data-target="#file-{{$i}}"/>
                      </div>  
                    </div>
                  </div>
                </div>
                <!-- END SERIAL INPUT -->
              </div>
            </div>

            <div class="shipping-row">
              <div class="col-md-4">
                <label for="">88888 FINAL FANTASY XV</label>
              </div>
              <div class="col-md-2 has-text-center">
                80 / <b>0</b>
              </div>
              <div class="col-md-1 has-text-center">
                1
              </div>
              <div class="col-md-5 flex-center">
                <!-- SERIAL INMPUT -->
                <button type="button" class="btn btn-ngin btn-xs flex-center" style="margin-right:1em" data-toggle="modal" data-target="#serialModal">
                  <span class="btn-label btn-xs"><i class="fa fa-print primary" aria-hidden="true"></i></span>ดู Serial
                </button>
                <input id="serial-text-1" type="text" style="margin-right:1em">
                <div class="upload-u">      
                  <div class="row no-margin upload-label">
                    <div class="btn-cancel-upload" data-target="#input-file-{{$i}}" data-file="#file-{{ $i }}">
                      <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                    </div>
                    <i class="fa fa-file-pdf-o" style="font-size:12px" aria-hidden="true"></i>&nbsp;
                    <span class="overflow" id="file-{{$i}}">-- No file --</span>
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
                        <input type="file" id="input-file-{{$i}}" name="myfile" data-target="#file-{{$i}}"/>
                      </div>  
                    </div>
                  </div>
                </div>
                <!-- END SERIAL INPUT -->
              </div>
            </div>

            <div class="shipping-row">
              <div class="col-md-4">
                <label for="">CALENDAR</label>
              </div>
              <div class="col-md-2 has-text-center flex-center">
                10 / <input type="text" class="form-control qty-input stretchy" value="10">
              </div>
              <div class="col-md-1 has-text-center">
                1
              </div>
              <div class="col-md-5">
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="row">
        <div class="form-section">
          <div class="heading">
            <div class="col-md-9">
              <p><strong>PB #1 EXAMPLECOMPANY</strong><span></span></p>
            </div>
            <div class="col-md-3">
              <p><b>Total</b> 10 <b>Pieces</b></p>
            </div>
            <br>
          </div>

           <div class="col-md-12 pl-25">
            <div class="shipping-row title">
              <div class="col-md-4">
                <label for="">BARCODE | PRODUCT CODE | ITEM NAME</label>
              </div>
              <div class="col-md-2 has-text-center" style="line-height: 1em">
                <label>QTY</label><br><span style="font-size:9px">(ORDERED / SERIAL RECORDED)</span>
              </div>
              <div class="col-md-1 has-text-center">
                <label>WREEHOUSE</label>
              </div>
              <div class="col-md-5 has-text-center">
                <label for="">SERIAL NUMBER / SONY CODE</label>
              </div>
              <br>
            </div>

            <div class="shipping-row">
              <div class="col-md-4">
                <label for="">8888 CRASH BAN</label>
              </div>
              <div class="col-md-2 has-text-center">
                1000 / <b>208</b>
              </div>
              <div class="col-md-1 has-text-center">
                1
              </div>
              <div class="col-md-5 flex-center">
                <!-- SERIAL INMPUT -->
                <button type="button" class="btn btn-ngin btn-xs flex-center" style="margin-right:1em" data-toggle="modal" data-target="#serialModal">
                  <span class="btn-label btn-xs"><i class="fa fa-print primary" aria-hidden="true"></i></span>ดู Serial
                </button>
                <input id="serial-text-1" type="text" style="margin-right:1em">
                <div class="upload-u">      
                  <div class="row no-margin upload-label">
                    <div class="btn-cancel-upload" data-target="#input-file-{{$i}}" data-file="#file-{{ $i }}">
                      <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                    </div>
                    <i class="fa fa-file-pdf-o" style="font-size:12px" aria-hidden="true"></i>&nbsp;
                    <span class="overflow" id="file-{{$i}}">-- No file --</span>
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
                        <input type="file" id="input-file-{{$i}}" name="myfile" data-target="#file-{{$i}}"/>
                      </div>  
                    </div>
                  </div>
                </div>
                <!-- END SERIAL INPUT -->
              </div>
            </div>

            <div class="shipping-row">
              <div class="col-md-4">
                <label for="">88888 GRAND T</label>
              </div>
              <div class="col-md-2 has-text-center">
                10 / <b>8</b>
              </div>
              <div class="col-md-1 has-text-center">
                1
              </div>
              <div class="col-md-5 flex-center">
                <!-- SERIAL INMPUT -->
                <button type="button" class="btn btn-ngin btn-xs flex-center" style="margin-right:1em" data-toggle="modal" data-target="#serialModal">
                  <span class="btn-label btn-xs"><i class="fa fa-print primary" aria-hidden="true"></i></span>ดู Serial
                </button>
                <input id="serial-text-1" type="text" style="margin-right:1em">
                <div class="upload-u">      
                  <div class="row no-margin upload-label">
                    <div class="btn-cancel-upload" data-target="#input-file-{{$i}}" data-file="#file-{{ $i }}">
                      <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                    </div>
                    <i class="fa fa-file-pdf-o" style="font-size:12px" aria-hidden="true"></i>&nbsp;
                    <span class="overflow" id="file-{{$i}}">-- No file --</span>
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
                        <input type="file" id="input-file-{{$i}}" name="myfile" data-target="#file-{{$i}}"/>
                      </div>  
                    </div>
                  </div>
                </div>
                <!-- END SERIAL INPUT -->
              </div>
            </div>

            <div class="shipping-row">
              <div class="col-md-4">
                <label for="">88888 FINAL FANTASY XV</label>
              </div>
              <div class="col-md-2 has-text-center">
                80 / <b>0</b>
              </div>
              <div class="col-md-1 has-text-center">
                1
              </div>
              <div class="col-md-5 flex-center">
                <!-- SERIAL INMPUT -->
                <button type="button" class="btn btn-ngin btn-xs flex-center" style="margin-right:1em" data-toggle="modal" data-target="#serialModal">
                  <span class="btn-label btn-xs"><i class="fa fa-print primary" aria-hidden="true"></i></span>ดู Serial
                </button>
                <input id="serial-text-1" type="text" style="margin-right:1em">
                <div class="upload-u">      
                  <div class="row no-margin upload-label">
                    <div class="btn-cancel-upload" data-target="#input-file-{{$i}}" data-file="#file-{{ $i }}">
                      <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                    </div>
                    <i class="fa fa-file-pdf-o" style="font-size:12px" aria-hidden="true"></i>&nbsp;
                    <span class="overflow" id="file-{{$i}}">-- No file --</span>
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
                        <input type="file" id="input-file-{{$i}}" name="myfile" data-target="#file-{{$i}}"/>
                      </div>  
                    </div>
                  </div>
                </div>
                <!-- END SERIAL INPUT -->
              </div>
            </div>

            <div class="shipping-row">
              <div class="col-md-4">
                <label for="">CALENDAR</label>
              </div>
              <div class="col-md-2 has-text-center flex-center">
                10 / <input type="text" class="form-control qty-input stretchy" value="10">
              </div>
              <div class="col-md-1 has-text-center">
                1
              </div>
              <div class="col-md-5">
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="divider"></div>
      
      <div class="row has-text-center">
        * Serial ที่โหลดผ่าน CSV จะยังไม่แสดงในรายการ [ดู serial] กรูณากด SAVE เพื่อบันทึก 
      </div>
      
      <div class="row">
        <div class="action">
          <button type="button" class="btn btn-ngin btn-default">
            <span class="btn-label"><i class="fa fa-print primary" aria-hidden="true"></i></span>PRINT
          </button>

          <button type="submit" class="btn btn-ngin btn-default">
            <span class="btn-label"><i class="fa fa-save success" aria-hidden="true"></i></span>SAVE
          </button>
          <button type="button" class="btn btn-ngin btn-default">
            <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL
          </button>
        </div>
      </div>
    </form>
  </div>
</section>

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
                {{ $i }}{{substr(str_shuffle(MD5(microtime())), 0, 20)}}
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
  <script src="{{ asset('js/back-office/templates/stretchy/stretchy.min.js')}}" data-filter=".stretchy"></script>
  <script src="{{ asset('js/back-office/logistic/shipping/create.js') }}"></script>
  <script>
    toastr.error('DUPLICATE SERIAL NUMBER');
  </script>
@endsection
