@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/product/update.css')}}"/>
@endsection

@section('module_name', 'UNCHARTED 4 > PS4 > STANDARD > 2 (EU)')
@section('page_name', 'CREATE')

@section('body')
<div class="full-content scroll-2">

    <form id="form-product-update" action="" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label for="">BARCODE</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6 content-left">
                    @for($i=1;$i<=3;$i++)
                        <ul class="list-unstyled list-inline">
                            <li>8888888888888888888</li>
                            <li class="text-center">
                                <div class="power-button">
                                    <div>ON-OFF</div>
                                    <input type="checkbox" class="switchCheck" checked>
                                </div>
                            </li>
                            <li>
                                <button type="button" class="btn btn-ngin btn-default">
                                    <span class="btn-label">
                                        <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                                    </span>Edit
                                </button>
                            </li>
                            <li>
                                <button type="button" class="btn btn-ngin btn-default ">
                                    <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                </button>
                            </li>
                        </ul>
                    @endfor
                </div>
                <div class="col-sm-6">
                        <ul class="list-unstyled list-inline">
                            <li>8888888888888888888</li>
                            <li class="text-center">
                                <div class="power-button">
                                    <div>ON-OFF</div>
                                    <input type="checkbox" class="switchCheck" checked>
                                </div>
                            </li>
                            <li>
                                <button type="button" class="btn btn-ngin btn-default">
                                    <span class="btn-label">
                                        <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                                    </span>Edit
                                </button>
                            </li>
                            <li>
                                <button type="button" class="btn btn-ngin btn-default ">
                                    <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>Delete
                                </button>
                            </li>
                        </ul>

                        <ul class="list-unstyled list-inline">
                            <li>8888888888888888888</li>
                            <li class="text-center">
                                <div class="power-button">
                                    <div>ON-OFF</div>
                                    <input type="checkbox" class="switchCheck" checked>
                                </div>
                            </li>
                            <li>
                                <button type="button" class="btn btn-ngin btn-default success-no-icon">
                                Approved
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                </button>  
                            </li>
                            <li>
                                <button type="button" class="btn btn-ngin btn-default danger-no-icon">
                                UnApprove
                                <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                                </button>
                            </li>
                        </ul>

                        <ul class="list-unstyled list-inline">
                            <li>8888888888888888888</li>
                            <li class="text-center">
                                <div class="power-button">
                                    <div>ON-OFF</div>
                                    <input type="checkbox" class="switchCheck" checked>
                                </div>
                            </li>
                            <li style="width: 245px; text-align: center;">
                                <button type="button" class="btn btn-ngin btn-default danger-no-icon">
                                UnApprove
                                <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                                </button>                            
                            </li>
                        </ul>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label for="">SERIAL</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <div class="serial-box">
                        @for($i=1;$i<=30;$i++)
                            <div class="col-sm-2 serial">
                                <a href="" class="text-red"><i class="fa fa-trash"></i></a>
                                88888888
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6 border-bottom">
                    <label for="">NARRATION</label>
                </div>
                <div class="col-sm-6 border-bottom">
                    <label for="">SUBTITLE</label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 content-left">
                    <div class="row">
                        <div class="col-sm-4 mb-10"><input type="text" class="form-control" value="Thai"></div>
                        <div class="col-sm-4 mb-10"><input type="text" class="form-control" value="Japanese"></div>
                        <div class="col-sm-4 mb-10"><input type="text" class="form-control" value="English"></div>
                        <div class="col-sm-4"><input type="text" class="form-control" value="Lorem"></div>
                        <div class="col-sm-4"><input type="text" class="form-control" value="Lorem"></div>
                        <div class="col-sm-4"><input type="text" class="form-control"></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-4 mb-10"><input type="text" class="form-control" value="EN"></div>
                        <div class="col-sm-4 mb-10"><input type="text" class="form-control" value="TH"></div>
                        <div class="col-sm-4 mb-10"><input type="text" class="form-control" value="JP"></div>
                        <div class="col-sm-4"><input type="text" class="form-control" value="CN"></div>
                        <div class="col-sm-4"><input type="text" class="form-control" value="VN"></div>
                        <div class="col-sm-4"><input type="text" class="form-control"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-1 pt-10">
                    <label for="">ITEMTYPE</label>
                </div>
                <div class="col-sm-3">
                    <select name="" class="form-control" id="">
                        <option value="">SONY</option>
                        <option value="">NON-SONY</option>
                        <option value="">SOFTWARE</option>
                        <option value="">xxxxxxx</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-1 pt-10">
                    <label for="">IMAGE</label>
                </div>
                <div class="upload-container">
                    <div class="col-sm-2">
                        <div class="image-box">
                            <input type="file">
                            <i class="fa fa-camera fa-2x"></i>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="image-box">
                            <input type="file">
                            <i class="fa fa-camera fa-2x"></i>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="image-box">
                            <input type="file">
                            <i class="fa fa-camera fa-2x"></i>
                        </div>
                    </div>  
                </div>
                <div class="col-sm-2">
                    <div class="image-box add-upload">
                        <i class="fa fa-plus fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-3">
                    <label for="">MINIMUM STOCK</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-3">
                    <label for="">RELEASE DATE</label>
                    <div class='input-group date datepicker' id='datetimepicker1' >
                        <input type='text' class="form-control" />
                        <span class="input-group-addon">
                            <i class="fa fa-calendar" ></i>
                        </span>
					</div>
                </div>
                <div class="col-sm-3">
                    <label for="">INITIAL PO DATE</label>
                    <div class='input-group date datepicker' id='datetimepicker2' >
                        <input type='text' class="form-control" />
                        <span class="input-group-addon">
                            <i class="fa fa-calendar" ></i>
                        </span>
					</div>
                </div>
                <div class="col-sm-3">
                    <label for="">IMPORT DUTY (%)</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <hr>

        <div class="form-group">
            <div class="row mb-10">
                <div class="col-sm-3">
                    <label for="" class="checkblox-2line">
                        <input type="checkbox" class="iCheck scale-x2" checked>
                        <span>Stock Keeping</span>
                        <small>(สินค้าชนิดนี้มีการคุมสต๊อค)</small>
                    </label>
                </div>
                <div class="col-sm-3">
                    <label for="">WIDTH <small>(millimaters)</small></label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-3">
                    <label for="">HEIGHT <small>(millimaters)</small></label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-3">
                    <label for="">WARRANTY</label>
                    <select name="" id="" class="form-control">
                        <option value="" selected>NON</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 pt-10">
                    <label for="" class="checkblox-2line">
                        <input type="checkbox" class="iCheck scale-x2">
                        <span>Serial Control</span>
                        <small>(สินค้าชนิดนี้คุม Serial ทุกครั้ง)</small>
                    </label>
                </div>
                <div class="col-sm-3">
                    <label for="">DEPTH <small>(millimaters)</small></label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-sm-3">
                    <label for="">WEIGHT <small>(grams)</small></label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row mb-10">
                <div class="col-sm-12 border-bottom">
                    <label for="" class="pull-left">PREMIUM</label>
                    <label for="" class="pull-right font-normal">
                        <input type="checkbox" class="iCheck">
                        NONE
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 mb-10"><input type="text" class="form-control" value="DLC"></div>
                <div class="col-sm-4 mb-10"><input type="text" class="form-control" value="Shirt"></div>
                <div class="col-sm-4 mb-10"><input type="text" class="form-control" value="Pants"></div>
                <div class="col-sm-4"><input type="text" class="form-control" value="Notebook"></div>
                <div class="col-sm-4"><input type="text" class="form-control" value="Still book"></div>
                <div class="col-sm-4"><input type="text" class="form-control"></div>
            </div>
        </div>

        <div class="form-group">
            <div class="row mb-10">
                <div class="col-sm-12 border-bottom">
                    <label for="">NICKNAME</label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4"><input type="text" class="form-control" value="UNCHART"></div>
                <div class="col-sm-4"><input type="text" class="form-control" value="อันช๊าด"></div>
                <div class="col-sm-4"><input type="text" class="form-control"></div>
            </div>
        </div>


        <div class="form-group">
            <div class="row mb-10">
                <div class="col-sm-12 border-bottom">
                    <label for="">SALES TAX</label>
                </div>
            </div>
            <div class="row mb-10">
                <div class="col-sm-2">
                    <label for="">
                        <input type="radio" name="rdoVat" class="iCheck" checked> VAT
                    </label>
                </div>
                <div class="col-sm-10">
                    <div>
                        <label for="">
                                <input type="checkbox" class="iCheck" checked> AGING
                        </label>
                        <div class="ml-10 inline">
                            <strong>ALERT</strong>
                            <input type="text" classs="form-control" style="width: 50px;">
                            <strong>DAY</strong>
                        </div>
                    </div>
                    <div><small>- สินค้า Product A เข้าวันที่ 01/01/2560 (อายุ 30 วัน) คงค้าง 44 ชิ้น</small></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <label for="">
                        <input type="radio" name="rdoVat" class="iCheck"> NON-VAT
                    </label>
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="row mb-10">
                <div class="col-sm-12 border-bottom">
                    <label for="">TAGS (OPTIONAL)</label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <input type="text" class="form-control" value="Famous Games,A Sample Tag" data-role="tagsinput" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-tier">
                        <thead>
                            <tr>
                                <th class="col-sm-5">CUSTOMER TIER</th>
                                <th class="text-center">Suggested Retail Price (Incl. Vat)</th>
                                <th class="text-center">Suggested Retail NVAT Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>STANDARD</td>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>GD</td>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>PAD</td>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>MT</td>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="text" class="form-control"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="form-group action">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <button type="button" class="btn btn-ngin btn-default">
                                <span class="btn-label"><i class="fa fa-print primary" aria-hidden="true"></i></span>PRINT</button>
                    <button type="button" class="btn btn-ngin btn-default">
                                <span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i></span>SAVE</button>
                    <button type="button" class="btn btn-ngin btn-default">
								<span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>CANCEL</button>
                </div>
            </div>
        </div>

    </form>

</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/setting/product/update.js') }}"></script>

    <script type="text/javascript">
        $(function () {
            $('.datepicker').datetimepicker();
            
            $(document).on('change', ".image-box input[type=file]", function () {
                var files = this.files;
                var elPreview = $(this).parent();

                if (files.length > 0) {
                    var file = files[0];
                    var reader = new FileReader();

                    reader.onload = function (event) {
                        var loadedFile = event.target;
                        if (file.type.match('image')) {
                            elPreview.css("background-image", "url(" + loadedFile.result + ")");
                            elPreview.css("background-size", "cover");
                            elPreview.css("background-position", "center center");
                            elPreview.css("width", "100%");

                        } else {
                            alert('รองรับไฟล์ประเภท รูปภาพ เท่านั้น');
                        }
                    }

                    reader.readAsDataURL(file);

                } else {
                    elPreview.css("background-image", "");
                }
            });

            $('.add-upload').on('click', function(){
                var html = "<div class='col-sm-2'><div class='image-box'><input type='file'><i class='fa fa-camera fa-2x'></i></div></div>";

                $('.upload-container').append(html);
                
            });

        });
    </script>
@endsection