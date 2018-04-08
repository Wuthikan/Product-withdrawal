@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/product/index.css')}}" />
@endsection 

@section('module_name', 'PRODUCTS')
@section('page_name', 'INDEX')

@section('body')
<section class="x_content">
  <!-- top menu -->
  <section class="section-header-index">    
    <form class="form-inline form-header-index">
      <div class="flex-parent form-table center">

        <div class="form-group select-all" style="padding-top:6px">
          <input type="checkbox" checked class="iCheck" id="selectall" name="selectall" style="top:-1px">
           <label for="selectall" class="iCheck-label">Select All</label>
        </div>

        <div class="form-group">
            <button type="button" class="btn btn-default-background" onclick="window.location='{{ route("backOffice.setting.product.create") }}'">
                <span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
            </button>
        </div>
        <div class="form-group button-2" style="margin-right:1em">
            <button type="button" class="btn btn-default-background">
                <span class="btn-label"><span class="fa-approve-all"></span></span><span class="btn-label-label">Approve All</span>
            </button>
        </div>
        
        <div class="form-group w-8 mr-1">
          <div class="icon-addon addon-sm">
            <input  type="text" placeholder="SEARCH" class="form-control search" id="SEARCH" >
            <label for="search"  class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
          </div>
        </div>

        <div class="form-group form-fixed-width flex-item">
          <div class="icon-addon addon-sm flex-parent">
            <input  type="text" placeholder="BARCODE | PRODUCT CODE | SERIAL" class="form-control search" id="SEARCH2" data-action="typeaheadProduct">
            <label for="search"  class="glyphicon glyphicon-search" rel="tooltip"></label>
          </div>
        </div>

        <div class="form-group">
          <button type="button" class="btn  btn-default-background">
            <span class="btn-label">
              <i class="fa fa-file-pdf-o pdf" aria-hidden="true"></i>
              </i>
            </span>
            <span class="btn-label-label">PDF</span>
          </button>
        </div>

        <div class="form-group">
          <button type="button" class="btn  btn-default-background">
            <span class="btn-label">
              <i class="fa fa-file-excel-o excel" aria-hidden="true"></i>
              </i>
            </span>
            <span class="btn-label-label">Excel</span>
          </button>
        </div>

        <div class="form-group">
          <button type="button"  class="btn  btn-default-background">
            <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span><span class="btn-label-label">Delete All</span>
          </button>
        </div>

        <div class="form-group" style="margin:0 1em">
          <div class="btn-group ngin-dropdown-sort" style="padding:0 !important;">
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

        <!--
        <div class="form-group flex-parent column has-top-label">
          <label>FILTER</label>
          <div class="input-group date datetimepicker" >
            <input type="text" class="form-control" style="height: 30px" placeholder="-DELIVERY DATE-" />
            <span class="input-group-addon">
              <i class="fa fa-calendar" ></i>
            </span>
          </div>
        </div>
        -->
      </div>
    </form>
  </section>
  <!-- end top menu -->

  <!-- Content -->
  <section class="tab-content scroll-2">
    <div class="tab-pane active">
      <div class="tab-content">
        <!-- Panel -->
        <div id="backlog" class="panel-group" role="tablist" aria-multiselectable="true">
          @foreach ([
            [
              'name' => 'CARD PS PLUS MEMBERSHIP 12 MONTH',
              'platform' => [
                [
                  'name'=> 'PS4',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [1,0,0,1,0,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,1,0,0,0]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ] 
                ],
                [
                  'name'=> 'PS3',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [0,1,0,0,0,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,1,0,1,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ]
                ],
                [
                  'name'=> 'SWICH',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [0,1,1,0,1,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,1,0,1,1,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,1,1,0,0,0]],
                  ]
                ],
                [
                  'name'=> 'PSVITA',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [1,1,0,0,1,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,0,1,0,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ]
                ]
              ]
            ],
            [
              'name' => 'NOBUNAGA\'S AMBITION: SPHERE OF INFLUENCE ASCENSION',
              'platform' => [
                [
                  'name'=> 'PS4',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [1,0,0,1,0,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,1,0,0,0]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ] 
                ],
                [
                  'name'=> 'PS3',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [0,1,0,0,0,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,1,0,1,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ]
                ],
                [
                  'name'=> 'SWICH',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [0,1,1,0,1,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,1,0,1,1,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,1,1,0,0,0]],
                  ]
                ],
                [
                  'name'=> 'PSVITA',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [1,1,0,0,1,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,0,1,0,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ]
                ]
              ]
            ],
            [
              'name' => 'NOBUNAGA\'S AMBITION: SPHERE OF INFLUENCE ASCENSION',
              'platform' => [
                [
                  'name'=> 'PS4',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [1,0,0,1,0,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,1,0,0,0]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ] 
                ],
                [
                  'name'=> 'PS3',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [0,1,0,0,0,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,1,0,1,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ]
                ],
                [
                  'name'=> 'SWICH',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [0,1,1,0,1,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,1,0,1,1,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,1,1,0,0,0]],
                  ]
                ],
                [
                  'name'=> 'PSVITA',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [1,1,0,0,1,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,0,1,0,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ]
                ]
              ]
            ],
            [
              'name' => 'NOBUNAGA\'S AMBITION: SPHERE OF INFLUENCE ASCENSION',
              'platform' => [
                [
                  'name'=> 'PS4',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [1,0,0,1,0,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,1,0,0,0]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ] 
                ],
                [
                  'name'=> 'PS3',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [0,1,0,0,0,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,1,0,1,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ]
                ],
                [
                  'name'=> 'SWICH',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [0,1,1,0,1,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,1,0,1,1,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,1,1,0,0,0]],
                  ]
                ],
                [
                  'name'=> 'PSVITA',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [1,1,0,0,1,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,0,1,0,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ]
                ]
              ]
            ],
            [
              'name' => 'NOBUNAGA\'S AMBITION: SPHERE OF INFLUENCE ASCENSION',
              'platform' => [
                [
                  'name'=> 'PS4',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [1,0,0,1,0,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,1,0,0,0]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ] 
                ],
                [
                  'name'=> 'PS3',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [0,1,0,0,0,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,1,0,1,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ]
                ],
                [
                  'name'=> 'SWICH',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [0,1,1,0,1,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,1,0,1,1,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,1,1,0,0,0]],
                  ]
                ],
                [
                  'name'=> 'PSVITA',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [1,1,0,0,1,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,0,1,0,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ]
                ]
              ]
            ],
            [
              'name' => 'NOBUNAGA\'S AMBITION: SPHERE OF INFLUENCE ASCENSION',
              'platform' => [
                [
                  'name'=> 'PS4',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [1,0,0,1,0,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,1,0,0,0]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ] 
                ],
                [
                  'name'=> 'PS3',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [0,1,0,0,0,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,1,0,1,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ]
                ],
                [
                  'name'=> 'SWICH',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [0,1,1,0,1,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,1,0,1,1,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,1,1,0,0,0]],
                  ]
                ],
                [
                  'name'=> 'PSVITA',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [1,1,0,0,1,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,0,1,0,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ]
                ]
              ]
            ],
            [
              'name' => 'NOBUNAGA\'S AMBITION: SPHERE OF INFLUENCE ASCENSION',
              'platform' => [
                [
                  'name'=> 'PS4',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [1,0,0,1,0,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,1,0,0,0]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ] 
                ],
                [
                  'name'=> 'PS3',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [0,1,0,0,0,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,1,0,1,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ]
                ],
                [
                  'name'=> 'SWICH',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [0,1,1,0,1,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,1,0,1,1,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,1,1,0,0,0]],
                  ]
                ],
                [
                  'name'=> 'PSVITA',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [1,1,0,0,1,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,0,1,0,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ]
                ]
              ]
            ],
            [
              'name' => 'NOBUNAGA\'S AMBITION: SPHERE OF INFLUENCE ASCENSION',
              'platform' => [
                [
                  'name'=> 'PS4',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [1,0,0,1,0,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,1,0,0,0]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ] 
                ],
                [
                  'name'=> 'PS3',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [0,1,0,0,0,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,1,0,1,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ]
                ],
                [
                  'name'=> 'SWICH',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [0,1,1,0,1,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,1,0,1,1,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,1,1,0,0,0]],
                  ]
                ],
                [
                  'name'=> 'PSVITA',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [1,1,0,0,1,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,0,1,0,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ]
                ]
              ]
            ],
            [
              'name' => 'NOBUNAGA\'S AMBITION: SPHERE OF INFLUENCE ASCENSION',
              'platform' => [
                [
                  'name'=> 'PS4',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [1,0,0,1,0,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,1,0,0,0]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ] 
                ],
                [
                  'name'=> 'PS3',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [0,1,0,0,0,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,1,0,1,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ]
                ],
                [
                  'name'=> 'SWICH',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [0,1,1,0,1,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,1,0,1,1,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,1,1,0,0,0]],
                  ]
                ],
                [
                  'name'=> 'PSVITA',
                  'edition'=> [
                    ['name'=> 'STANDARD', 'regions'=> [1,1,0,0,1,1]],
                    ['name'=> 'DELUXE', 'regions'=> [0,0,0,1,0,1]],
                    ['name'=> 'COLLECTOR', 'regions'=> [0,0,0,0,0,0]],
                  ]
                ]
              ]
            ]
          ] as $index => $item)
          <div class="panel panel-default">
            <!-- Panel Heading -->
            <div class="panel-heading" role="tab" id="heading-{{$index}}">
              <h4 class="panel-title">
                <a class="flex-parent center" role="button" data-toggle="collapse" data-parent="#backlog" href="#collapse-{{$index}}" aria-expanded="true">
                  <div class="name-column">
                    <div class="checkbox-column "><input type="checkbox" class="iCheck" /></div>
                    <div class="">{{$item['name']}}</div>
                  </div>
                  <div class="status-column">WAITING FOR CODE SCAN <span class="text-red"><i class="fa fa-warning"></i></span></div>
                  <div class="on-off-group">
                    <div class="spacer">ON-OFF</div>
                    <input type="checkbox" class="switchCheck" checked>
                  </div>
                </a>
              </h4>
            </div>
            <!-- end Panel heading -->
            <!-- Panel hidden content -->
            <div id="collapse-{{$index}}" class="panel-collapse collapse">
              <div class="panel-body row">
                <div class="col-md-3 text-black product-image-column">
                  <img class="spacer-1" src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" style="width:95%" />
                  <div class="flex-parent column spacer-1"><b>PRODUCT CODE:</b><b>000000000000082</b></div>
                  <div><b>TAX 7%</b></div>
                </div>
                <div class="col-md-9">
                  <div class="no-padding mb-1">
                    <div class="text-black category-row flex-parent">
                      <div class="flex-item flex-parent center"><span class="icon"><i class="fa fa-book"></i></span> <b>PUBLISHER: SONY</b></div>
                      <div class="flex-item flex-parent center"><span class="icon"><i class="fa fa-user"></i></span> <b>No.PLAYER: 2</b></div>
                      <div class="flex-item flex-parent center"><span class="icon"><i class="fa fa-crosshairs"></i></span> <b>RATING: 18</b></div>
                      <div class="flex-item flex-parent center"><span class="icon"><i class="fa fa-pencil-square-o"></i></span> <b>GENRE: ACTION</b></div>
                      <div class="flex-parent center" style="flex:1 0 8px"><span class="icon"><i class="fa fa-shield"></i></span> <b>WARRANTY: 24 MONTHS</b></div>
                    </div>  
                  </div>
                  <div class="flex-parent">
                    <div class="flex-item product-table">
                      <table class="table ngin-table">
                        <thead>
                          <tr>
                            <th class="text-left pl-0">PLATFORM</th>
                            <th>EDITION</th>
                            <th class="w-60">REGIONS</th>
                          </tr>
                        </thead>
                        @foreach($item['platform'] as $platform)
                        <tbody>
                          @foreach($platform['edition'] as $j => $edition)
                          <tr>
                            @if($j==0)<td rowspan="3" class="border-bottom text-left">{{$platform['name']}}</td>@endif
                            <td>{{$edition['name']}}</td>
                            <td class="region-row">
                              <a class="region @if ($edition['regions'][0]) link r1 @endif">1</a>
                              <a class="region @if ($edition['regions'][1]) link r2jp @endif">2 (JP)</a>
                              <a class="region @if ($edition['regions'][2]) link r2eu @endif">2 (EU)</a>
                              <a class="region @if ($edition['regions'][3]) link r3 @endif">3</a>
                              <a class="region @if ($edition['regions'][4]) link r4 @endif">4</a>
                              <a class="region @if ($edition['regions'][5]) link na @endif">N/A</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                        @endforeach
                      </table>
                    </div>
                    <div class="vertical-buttons pt-1">
                      <button type="button" class="btn btn-ngin btn-default" onclick="window.location='{{ url("back-office/inquiry/1/edit") }}'">
                        <span class="btn-label"><i class="fa fa-pencil-square-o success" aria-hidden="true"></i></span>
                        <span class="btn-text">Edit</span>
                      </button>
                      <button type="button" class="btn btn-ngin btn-default">
                        <span class="btn-label"><i class="fa fa-files-o" aria-hidden="true"></i></span>
                        <span class="btn-text">Duplicate</span>
                      </button>
                      <button type="button" class="btn btn-ngin btn-default">
                        <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>
                        <span class="btn-text">Delete</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end Panel hidden content -->
          </div>         
          @endforeach
        </div>
        <!-- end Panel -->

         
      </div>
    </div>
  </section>
  <!-- end Content -->

  <!-- start pagination -->
  <section class="row page-showing-pagination">
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
          <li class="page-number  active">
            <a href="#">1</a>
          </li>
          <li class="page-number">
            <a href="#">2</a>
          </li>
          <li class="page-number">
            <a href="#">3</a>
          </li>
          <li class="page-number">
            <a href="#">4</a>
          </li>
          <li class="page-number">
            <a href="#">5</a>
          </li>
          <li class="page-number">
            <a href="#" aria-label="Next">
              Next
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </section>
  <!-- end pagination -->
</section>
@endsection


@section('top-right-sidebar')
<div class="x_title">
  <span class="left">Top Product เดือนที่แล้ว</span>
  <span class="right"></span>
</div>
<div class="x_content faq-wrapper">
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
  </ul>
</div>
@endsection

@section('script')
<script src="{{ asset('js/back-office/setting/product/index.js') }}"></script>
@endsection
