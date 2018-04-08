@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/back-office/accounting/expenditure-requisition/create.css')}}"/>
@endsection

@section('module_name', 'PATMENT EXPENSE REQUISITION')
@section('page_name', 'CREATE')

@section('body')
<div class="scroll-2">
<div id="payment">
  <section class="one">
    <div class="row no-margin header">
      <div class="col-xs-6 no-padding font-black-bold">
          CUSTOMER
      </div>
      
      <div class="col-xs-6 no-padding text-right font-black-bold">
          CREDIT LIMIT: 530,000 / 600,000
      </div>
    </div>
    <div class="name-company">
      <div class="row">
        <div class="col-xs-12">
          Adiwit.co.th
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
            <div class="images" id="list-images">
              
                @for($i=0; $i<4; $i++)
                <div class="image" id="show-{{$i}}">
                  <span class="glyphicon glyphicon-camera"></span>
                  <input type="file" class="btnUpload" data-target="#show-{{$i}}"/>
                  <!-- <button type="button" class="btn btn-default btn-addimage">
                      <span class="glyphicon glyphicon-camera"></span>
                  </button> -->
                  <!-- <img class="show-image" src="http://www.1000za.com/wp-content/uploads/2016/12/sadasd.png" alt="your image" /> -->
                  <!-- <div class="cancel">
                    <i class="fa fa-times"></i>
                  </div> -->
                </div>
                <?php $max= $i?>
                @endfor
                <div class="image more" data-max="{{$max}}">
                  <span class="glyphicon glyphicon-plus"></span>
                  <!-- <button type="button" id="btnUpload-more" class="btn btn-default btn-addimage" aria-label="Left Align">
                    <span class="glyphicon glyphicon-plus"></span>  
                  </button> -->
                </div>
              </div>
        </div>
    </div>

    <div class="row">
      <div class="col-xs-4">
      </div>
      <div class="col-xs-4">
      </div>
      <div class="col-xs-4">
      </div>
    </div>

    <table class="table bank">
      <thead class="font-black-bold">
        <tr>
          <td colspan="5">
            BANK
          </td>
          <td></td>
        </tr>
        
      </thead>
      <tbody>
        @for($i=0; $i<5; $i++)
        <tr>
          <td>
            K-BANK
          </td>
          <td class="text-center">
            8888-8888-8888-8888
          </td>
          <td class="text-right">
            <div style="margin-right:20px">BRANCH: BANGKRAK</div>
          </td>
          <td>
            <input class="">
          </td>
          <td class="text-right font-black-bold">
            THB
          </td>
        </tr>
        @endfor
        <tr class="font-black-bold">
          <td colspan="2">
          </td>
          <td class="text-right" colspan="">
            <div style="margin-right:20px">TOTAL</div>
          </td>
          <td colspan="">
            600,000 00
          </td>
          <td class="text-right">
            THB
          </td>
        </tr>
      </tbody>
    </table>
      
  </section>

  <div style="margin:30px 0px">
    <table class="table account-ledger">
      <thead class="font-black-bold">
        <tr>
          <td>
              ITEM NAME
          </td>
          
          <td class="text-center">
            QTY
          </td>
          <td class="text-center" style="width:135px">
            PRICE / UNIT<br/>
            <label class="f-w-n">(EXCEL. VAT)</label>
          </td>
          <td class="text-center" style="width:135px">
            DISCOUNT / UNIT<br/>
            <label class="f-w-n">(EXCEL. VAT)</label>
          </td>
          <td class="text-center" style="width:120px">
            ADDITIONAL <br/>
            DISCOUNT <br/>
            <label class="f-w-n">(EXCEL. VAT)</label>
          </td>
          <td class="text-center" style="width:125px">
            TOTAL AMOUNT<br/>
            <label class="f-w-n">(EXCEL. VAT)</label>
          </td>
          <td class="text-center">
            WHT
          </td>

        </tr>
      </thead>
      <tbody>
        @for($i=0; $i<5; $i++)
        <tr>
          <td>
              ค่าเช่า
          </td>
          
          <td class="text-center">
            1
          </td>
          <td class="text-right">
            {{ rand(1,100) }},000.00 THB
          </td>
          <td class="text-right">
            {{ rand(1,100) }},000.00 THB
          </td>
          
          <td>
            <input type="text" class="form-control">
          </td>
          <td class="text-right">
            {{ rand(1,100) }},000.00 THB
          </td>
          
          <td class="text-center">
            5%
          </td>

        </tr>
        @endfor
        <tr>
          <td colspan="8">
            <div class="row">
              <div class="col-xs-12 text-right font-black-bold">
              DISCOUNT 1,000 THB
              </div>
            </div>
          </td>
        </tr>
      </tbody>
        
    </table>
  </div>

  <!-- Total -->
  <div class="row total">
    <div class="col-xs-8 col-xs-offset-4">
      <div class="row d-flex align-items-center">
        <div class="col-xs-9 text-right font-black-bold">
            TOTAL
        </div> 
        <div class="col-xs-2 text-right font-size-xs">
            111,000.00
        </div> 
        <div class="col-xs-1 text-right font-black-bold">
            THB
        </div> 
      </div>
      <div class="row d-flex align-items-center">
        <div class="col-xs-9 text-right font-black-bold">
            VAT 7%
        </div> 
        <div class="col-xs-2 text-right font-size-xs">
            7,700.00
        </div> 
        <div class="col-xs-1 text-right font-black-bold">
            THB
        </div> 
      </div>
      <div class="row d-flex align-items-center">
        <div class="col-xs-9 text-right font-black-bold">
            SUB TOTAL
        </div> 
        <div class="col-xs-2 text-right font-size-xs">
            118,700.00
        </div> 
        <div class="col-xs-1 text-right font-black-bold">
            THB
        </div> 
      </div>
      <div class="row d-flex align-items-center font-black-bold">
        <div class="col-xs-9 text-right">
            WHT 5%
        </div> 
        <div class="col-xs-2 text-right color-danger font-size-xs">
            (50.00)
        </div> 
        <div class="col-xs-1 text-right">
            THB
        </div> 
      </div>
      <div class="row d-flex align-items-center font-black-bold">
        <div class="col-xs-9 text-right">
            WHT 3%
        </div> 
        <div class="col-xs-2 text-right color-danger font-size-xs">
            (30.00)
        </div> 
        <div class="col-xs-1 text-right">
            THB
        </div> 
      </div>
      <div class="row d-flex align-items-center font-black-bold">
        <div class="col-xs-9 text-right">
            WHT 1%
        </div> 
        <div class="col-xs-2 text-right color-danger font-size-xs">
            (995.00)
        </div> 
        <div class="col-xs-1 text-right">
            THB
        </div> 
      </div>
      <div class="row d-flex align-items-center font-black-bold">
        <div class="col-xs-9 text-right font-size-middle">
            NETPAID AMOUNT
        </div> 
        <div class="col-xs-2 text-right font-size-big">
            117,625.00
        </div> 
        <div class="col-xs-1 text-right font-size-middle">
            THB
        </div> 
      </div>
    </div>
  </div>
  <!--End Total -->


  <!-- remark -->
  <div class="row" style="margin : 30px 0px">
    <div class="form-group font-black-bold">
        <label for="exampleInputPassword1" class="text-remark">Remark</label>
          <textarea class="form-control" rows="4"  placeholder="textarea"> </textarea>
    </div>
  </div>
  <!-- end remark -->

  <div class="row" style="margin : 30px 0px">
    <div class="col-xs-12 text-center">	
      <button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{ url("back-office/inquiry") }}'">
          <span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i></span>SAVE</button>
        <button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{ url("back-office/inquiry") }}'">
          <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL</button>
    </div>
  </div>



  <div class="row">
    <div class="col-xs-4">
    </div>
    <div class="col-xs-4">
    </div>
    <div class="col-xs-4">
    </div>
  </div>
  
</div>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/logistic/inventory/create.js') }}"></script>
    <script>
      input_file()
      function input_file(){
        $('[type=file]').change((e) => {
          const file = e.target.files[0];
          const reader = new FileReader();
          const targetId = $(e.target).data('target');
          const img = $('<img class="show-image">');
          // console.log(targetId, e);
              
          if (file) {
            reader.onload = function(e) {
              // console.log(e.target.result)
              img.attr('src', e.target.result);
              img.appendTo($(targetId));
            }
          }
          reader.readAsDataURL(file);
        });
      }
      $('.more').click(function(){
        console.log("test")
        let targetId = $(this).data('max');
        targetId = Number(targetId)+1
        console.log(targetId)
        // $('.image .more').before(function(){
        //   console.log(this)
        //   $(this).append('<div class="image" id="show-'+targetId+'">'+
        //                   '<span class="glyphicon glyphicon-camera"></span>'+
        //                   '<input type="file" class="btnUpload" data-target="#show-'+targetId+'"/>'+
        //                   '</div>')
        // })
        $('.images').append('<div class="image" id="show-'+targetId+'">'+
                          '<span class="glyphicon glyphicon-camera"></span>'+
                          '<input type="file" class="btnUpload" data-target="#show-'+targetId+'"/>'+
                          '</div>'
        )

        console.log($('#list-images'))
        input_file()
      })

    </script>
@endsection