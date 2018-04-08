@extends('layouts.backOffice.template-with-right-sidebar')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/logistic/claim/show.css')}}"/> 
@endsection

@section('module_name', 'CLAIM')
@section('page_name', 'SHOW')

@section('body')
    <div class="padding scroll-2">
      <div class="row"> 
        <div class="col-xs-12 col-sm-12 text-left">
          <strong>CLAIM #1</strong>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 text-center">
          <image class="logo" src="{{ asset('/images/logo.png')}}" />
        </div>
        <div class="col-xs-12 col-sm-12 text-center date">
          <strong>08 AUGUST 2018</strong>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 text-left company">
          <strong>Company</strong>: Company Limited Head Office
        </div>
        <div class="col-xs-12 col-sm-12 text-left">
          <p>&nbsp;&nbsp;&nbsp;Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12">
          <table class="table ngin-table">
            <thead>
              <tr>
                <th>CODE</th>
                <th class="txt-left">DESCRIPTION</th>
                <th>QTY</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>PCAS-00073</td>
                <td class="txt-left">LOREM IPSUM DOLOR</td>
                <td>10</td>
              </tr>
              <tr>
                <td>PCAS-00073</td>
                <td class="txt-left">LOREM IPSUM DOLOR</td>
                <td>10</td>
              </tr>
              <tr>
                <td>PCAS-00073</td>
                <td class="txt-left">LOREM IPSUM DOLOR</td>
                <td>10</td>
              </tr>
              <tr>
                <td>PCAS-00073</td>
                <td class="txt-left">LOREM IPSUM DOLOR</td>
                <td>10</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12">
          <table class="table ngin-table">
            <thead>
              <tr>
                <th>CODE</th>
                <th class="txt-left">DESCRIPTION</th>
                <th>SIN</th>
                <th>PRICE</th>
                <th>DISCOUNT</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>PCAS-00073</td>
                <td class="txt-left">LOREM IPSUM DOLOR</td>
                <td>8888</td>
                <td>20</td>
                <td>20</td>
              </tr>
              <tr>
                <td>PCAS-00073</td>
                <td class="txt-left">LOREM IPSUM DOLOR</td>
                <td>8888</td>
                <td>20</td>
                <td>20</td>
              </tr>
              <tr>
                <td>PCAS-00073</td>
                <td class="txt-left">LOREM IPSUM DOLOR</td>
                <td>8888</td>
                <td>20</td>
                <td>20</td>
              </tr>
              <tr>
                <td>PCAS-00073</td>
                <td class="txt-left">LOREM IPSUM DOLOR</td>
                <td>8888</td>
                <td>20</td>
                <td>20</td>
              </tr>
              <tr>
                <td>PCAS-00073</td>
                <td class="txt-left">LOREM IPSUM DOLOR</td>
                <td>8888</td>
                <td>20</td>
                <td>20</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <hr />

      <div class="row">
        <div class="col-xs-6 col-sm-6">
          
        </div>
        <div class="col-xs-6 col-sm-6 text-right">
          <table class="txt-right">
            <tr>
              <td>
                <strong>Total</strong>
              </td>
              <td>88,888,888.88</td>
              <td>
                <strong>USD</strong>
              </td>
            </tr>
            <tr>
              <td>
                <strong>Discount</strong>
              </td>
              <td>88,888,888.88</td>
              <td>
                <strong>USD</strong>
              </td>
            </tr>
            <tr>
              <td>
                <strong>Total Before VAT</strong>
              </td>
              <td>888,888.88</td>
              <td>
                <strong>USD</strong>
              </td>
            </tr>
            <tr>
              <td>
                <strong>VAT 7 %</strong>
              </td>
              <td>888,888.88</td>
              <td>
                <strong>USD</strong>
              </td>
            </tr>
            <tr>
              <td>
                <h4><strong>Total</strong></h4>
              </td>
              <td>
                <h4></strong>88,888,888.88</strong></h4>
              </td>
              <td>
                <h4><strong>USD</strong></h4>
              </td>
            </tr>
          </table>
        </div>
      </div>


      <div class="row signature">
        <div class="col-xs-6 col-sm-6 text-left">
          <div class="text-center">
            <p>
              <strong>SIGNED:</strong>
              <label class="line"></label>
            </p>
            <p>
              <strong>(LOERM IPSUM)</strong>
            </p>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 text-right">
            <div class="text-center">
            <p>
              <strong>APPROVER:</strong>
              <label class="line"></label>
            </p>
            <p>
              <strong>(LOERM IPSUM)</strong>
            </p>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('right-sidebar')
    <div>Right Sidebar</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/<module_name>/show.js') }}"></script>
@endsection