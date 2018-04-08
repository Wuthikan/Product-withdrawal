@extends('layouts.backOffice.template')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/purchasing/import-duty-expenditure-requisition/create.css')}}"/>
@endsection

@section('module_name', 'PURCHASING > IMPORT DUTY REQ.')
@section('page_name', 'CREATE')

@section('body')
<div class="x_content scroll-2">
    <div class="x_content">
        <div class="row">
            <div class="col-xs-12 title">
                <div class="col-xs-2 text-center">
                    <span class="spn-first">PO#</span>	
                    <span class="number"><a href="#" class="text-primary">9</a></span>
                </div>
                <div class="col-xs-5">
                    <label>SUPPLIER NAME:</label>
                    <p><span class="name-supplier">SONY INTERACTIVE ENTERTAINMENT INC.</span></p>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
						<label for="datetimepicker">DOCUMENT DATE</label>
						<div class='input-group date' id='datetimepicker' >
							<input type='text' class="form-control" value="03/10/2017" />
							<span class="input-group-addon">
								<i class="fa fa-calendar" ></i>
							</span>
						</div>
					</div>
                </div>
            </div>
            <div class="images-supplier col-xs-12">
                <div class="col-xs-2">
                    
                </div>
                <div class="col-xs-8">
                    <label for="supplier" class="text-black">SUPPLIER QUATATION</label>
                
                    <div class="bk-group-upload">
                        <div id="uploadMoreSection">
                        <div class="uploadPhotoSection">
                            <div class="uploadPreview-1">
                            <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                            </div>
                        </div>

                        <div class="uploadPhotoSection">
                            <div class="uploadPreview-2">
                            <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                            </div>
                        </div>

                        <div class="uploadPhotoSection">
                            <div class="uploadPreview-3">
                            <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                            </div>
                        </div>
                        <div class="uploadPhotoSection">
                            <div class="uploadPreview-4">
                            <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                            </div>
                        </div>
                        <div class="uploadPhotoSection">
                            <div class="uploadPreview-5">
                            <input type="file" name="Photo1" accept="image/gif, image/jpeg, image/png">
                            </div>
                        </div>
                        </div>

                        <div class=" uploadPhotoSection">
                            <div class="uploadAddMore">
                                <i class="fa fa-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="items-supplier row">
                <div class="col-xs-2">
                    
                </div>
                <div class="col-xs-8">
                    <table class="table ngin-table">
                        <tr>                            
                            <th class="text-left">BARCODE | PRODUCT CODE | ITEM NAME</th>
                            <th class="text-center">QTY<br><span class="text-light">(RECEIVED / ORDERED)</span></th>
                            <th class="text-right">IMPORT DUTY (EXCL.VAT)</th>
                        </tr>

                        <tr>
                            <td class="text-left">PS4-G: TEKKEN 7 [STANDARD EDITION] (R3) (EN/TH)</td>
                            <td class="text-left"><input type="text" class="form-control input-qty"> <span>/ 500</span></td>
                            <td class="text-right"><input type="text" align="right" class="form-control input-vat"></td>
                        </tr>
                        <tr>
                            <td class="text-left">PS4-G: FINAL FANTASY [STANDARD EDITION] (R3) (EN/TH)</td>
                            <td class="text-left"><input type="text" class="form-control input-qty"> <span>/ 1000</span></td>
                            <td class="text-right"><input type="text" align="right" class="form-control input-vat"></td>
                        </tr>
                        <tr>
                            <td class="text-left">PS4-G: CRASH BANDICOOT [STANDARD EDITION] (R3) (EN/TH)</td>
                            <td class="text-left"><input type="text" class="form-control input-qty " value="100"> <span>/ 200</span></td>
                            <td class="text-right"><input type="text" align="right" class="form-control input-vat" ></td>
                        </tr>
                    </table>  
                </div>
            </div>
            <div class="remark col-xs-12">
                <div class="col-xs-2">

                </div>
                <div class="col-xs-8">
                    <label for="remark" class="text-black">REMARK</label>
                    <textarea id="remark" class="form-control"></textarea>
                </div>
            </div>
            <div class="summary col-xs-12">
                <div class="col-xs-2">
                </div>
                <div class="col-xs-8 text-right">
                <table id="summary" align="right">
                            <tbody><tr>
                                <td align="right" class="text-black"><strong>Total</strong></td>
                                <td align="right" class="onlyText">111,000.00</td>
                                <td><strong class="text-black">THB</strong></td>
                            </tr>
                            <tr>
                                <td align="right" class="text-black"><strong>Discount</strong></td>
                                <td align="right"><input type="text" class="form-control inputDiscount" id="input" placeholder="" value="1,000.00"></td>
                                <td><strong class="text-black">THB</strong></td>
                            </tr>
                            <tr>
                                <td align="right" class="text-black"><strong>Sub Total</strong></td>
                                <td align="right" class="onlyText">110,000.00</td>
                                <td><strong class="text-black">THB</strong></td>
                            </tr>
                            <tr>
                                <td align="right" class="text-black"><strong>VAT 7%</strong></td>
                                <td align="right" class="onlyText">7,700.00</td>
                                <td><strong class="text-black">THB</strong></td>
                            </tr>
                            <tr>
                                <td align="right" class="text-black"><span class="net-text text-black">NET Total</span> </td>
                                <td align="right" class="onlyText"><span class="text-black total" >118,700.00</span></td>
                                <td><span class="net-text text-black">THB</span></td>
                            </tr>
                        </tbody></table>
                </div>
            </div>
            <div class="row btn-submit">
                <div class="col-xs-12 text-center">
                    <div class="button-actions" align="center">
                        <button type="submit" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-floppy-o success" aria-hidden="true"></i> </span>SAVE</button>
                        <button type="button" class="btn btn-ngin btn-default"><span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i> </span>CANCEL</button>
                    </div>
                </div>
            </div>
            
        </div>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/purchasing/import-duty-expenditure-requisition/create.js') }}"></script>
@endsection
