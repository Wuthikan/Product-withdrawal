@extends('layouts.backOffice.template')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/accounting/payment-pr/create.css')}}"/>
@endsection

@section('module_name', 'PAYMENT PR')
@section('page_name', 'CREATE')

@section('body')
<div class="x_content scroll-2">
  <div class="payment--create">
    <form>

      <div class="payment--create--header">
        <div class="row heading">
          <div class="col-md-3">
            PR #1
          </div>
          <div class="col-md-9">
            PA #<span class="text-primary">11</span>,<span class="text-primary">12</span>
          </div>
        </div>
      </div>

      <div class="payment--create--detail">
        <div class="row">
          <div class="col-md-12">
            <table class="table ngin-table">
              <thead>
                <tr>
                  <th class="col-xs-6 align-left">ITEM NAME</th>
                  <th class="col-xs-3">QTY</th>
                  <th class="col-xs-3">TOTAL DEPT</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="align-left">IFFXV</td>
                  <td>30</td>
                  <td class="col-xs-3">
                    <div class="row">
                      <div class="col-xs-8 text-right">30,000.00</div>
                      <div class="col-xs-4 text-left">USD</div>
                    </div>
                  </td> 
                </tr>

                <tr class="total-row spacer-top"><td colspan="3"></td></tr>
                <tr class="total-row">
                  <td colspan="2" class="text-right"><b class="text-black">TOTAL</b></td>
                  <td class="col-xs-3">
                    <div class="row">
                      <div class="col-xs-8 text-right">30,000.00</div>    
                      <div class="col-xs-4 text-left">USD</div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
  
      @for($i=1; $i<=2; $i++)
      <div class="payment--pa-group">
        <div class="row heading">
          <div class="col-md-2 col-md-offset-2">
            <div>
              <div>PA</div>
              <div>#<span class="text-primary">1{{$i}}</span></div>
            </div>
          </div>
          <div class="col-md-3 col-md-offset-1">
            <div>
              <div>PAID</div>
              <div>500,000.00 USD</div>
            </div>
          </div>
          <div class="col-md-3 col-md-offset-1">
            <div>
              <div>USED</div>
              <div>10,000.00 USD</div>
            </div>
          </div>
        </div>
        <div class="spacer"></div>
        <table class="table ngin-table">
          <thead>
            <tr>
              <th class="col-xs-1"></th>
              <th class="col-xs-2">ITEM NAME</th>
              <th class="col-xs-1">QTY</th>
              <th class="col-xs-2">AMOUNT ON PO</th>
              <th class="Col-xs-2">PAID</th>
              <th class="col-xs-2">BALANCE</th>
              <th class="col-xs-2">PAYMENT AMOUNT</th>
            </tr>
          </thead>
          <tbody>
            @foreach([['FFXV', '100', '100,000.00', '10,000.00', '90,000.00'], ['TEKKEN7', '50', '50,000.00', '0.00', '50,000.00'], ['God of War', '50', '50,000.00', '0.00', '50,000.00']] as $key => $value)
            <tr>
              <td>PO #{{$key+1}}</td>
              <td>{{$value[0]}}</td>
              <td>{{$value[1]}}</td>
              <td>{{$value[2]}}</td>
              <td>{{$value[3]}}</td>
              <td>{{$value[4]}}</td>
              <td><input class="form-control" /></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      @endfor

      <div class="payment--create--detail">
        <div class="row">
          <div class="col-md-12">
            <table class="table ngin-table">
              <thead>
                <tr>
                  <th class="col-md-6 align-left">REFUND</th>
                  <th class="col-md-3">EXCHANGE</th>
                  <th class="col-md-3">BANK FEE</th>
                </tr>
              </thead>
              <tbody>
                @foreach ([
                  ['name' => 'KBANK', 'a' => '888-8', '$' => '9,000.00', 'x' => '33.30', 'f' => '8.88'],
                  ['name' => 'SCB', 'a' => '777-7', '$' => '500.00', 'x' => '33.35', 'f' => '8.88'],
                  ['name' => 'BBL', 'a' => '333-3', '$' => '70.00', 'x' => '32.99', 'f' => '8.88'],
                  ['name' => 'TMB', 'a' => '222-2', '$' => '20.00', 'x' => '35.00', 'f' => '8.88'],
                  ['name' => 'HSBC', 'a' => '99-999', '$' => '10,823.39', 'x' => '', 'f' => '0.00']
                ] as $key => $value)
                <tr>
                  <td class="col-md-6">
                    <div class="col-md-2 align-left v-center">{{$value['name']}}</div>
                    <div class="col-md-2 align-left v-center">{{$value['a']}}</div>
                    <div class="col-md-8">
                      <div class="input-group">
                        <input type="text" class="form-control text-right" value="{{$value['$']}}">
                        <span class="input-group-addon">THB</span>
                      </div>
                    </div>
                  </td>
                  <td class="col-md-3">
                    @if (!empty($value['x']))
                    <div class="input-group">
                      <span class="input-group-addon">1 USD</span>
                      <input type="text" class="form-control text-right" value="{{$value['x']}}">
                      <span class="input-group-addon">THB</span>
                    </div>
                    @endif
                  </td>
                  <td class="col-md-3">
                    <div class="input-group">
                      <input type="text" class="form-control text-right" value="{{$value['f']}}">
                      <span class="input-group-addon">THB</span>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>

            <div class="row summary-row">
              <div class="col-md-4 remarkSection">
                <div class="form-group">
                  <label>REMARK</label>
                  <textarea class="form-control"></textarea>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row">
                  <div class="col-md-4 uploadPhotoHeaderSection">
                    <div class="form-group">
                      <label>PHOTO</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 uploadPhotoSection">
                    <div class="form-group">
                      <div class="upload-preview">
                        <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 uploadPhotoSection">
                    <div class="form-group">
                      <div class="upload-preview">
                        <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 uploadPhotoSection">
                    <div class="form-group">
                      <div class="upload-preview">
                        <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 uploadPhotoSection">
                    <div class="form-group">
                      <div class="upload-preview">
                        <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 uploadPhotoSection">
                    <div class="form-group">
                      <div class="upload-preview">
                        <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                      </div>
                    </div>
                  </div>
                  <div id="uploadMoreSection"></div>
                  <div class="col-md-4 uploadPhotoSection">
                    <div class="form-group">
                      <div class="uploadAddMore"><i class="fa fa-plus"></i></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 summary-column" >

                  <table class="table">
                    <tr class="text-row">
                      <td class="text-right"><b class="text-black">TOTAL PO AMOUNT</b></td>
                      <td class="text-right">11,111.10</td>
                      <td class="unit-column">USD</td>
                    </tr>
                    <tr class="text-row">
                      <td class="text-right"><b class="text-black">PAID BY CREDIT NOTE</b></td>
                      <td class="text-right">(11,111.10</td>
                      <td class="unit-column">USD)</td>
                    </tr>
                    <tr class="text-row">
                      <td class="text-right"><b class="text-black">NET PAID</b></td>
                      <td class="text-right">9,000.00</td>
                      <td class="unit-column">USD</td>
                    </tr>
                    <tr class="text-row">
                      <td class="text-right"><b class="text-black">TOTAL PAYMENT<br>(ADVANCE TO WALLET)</b></td>
                      <td class="text-right valign-top">10,111.10</td>
                      <td class="unit-column valign-top">USD</td>
                    </tr>
                    <tr class="text-row">
                      <td class="text-right"><b class="text-black">PA BALANCE</b></td>
                      <td class="text-right">(1,000.00</td>
                      <td class="unit-column">USD)</td>
                    </tr>
                  </table>
                
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="button-actions">
        <div class="save inline">
          <button type="button" class="btn btn-ngin btn-default">
            <span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i></span>SAVE
          </button>
        </div>
      </div>

    </form>
  </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/back-office/templates/upload-preview/upload-preview.js') }}"></script>
<script src="{{ asset('js/back-office/accounting/payment-pr/create.js') }}"></script>
@endsection
