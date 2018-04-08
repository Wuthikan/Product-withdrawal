@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar')
@section('head')
<link rel="stylesheet" type="text/css" href="{{asset('/css/back-office/logistic/inventory/index.css')}}"/>
@endsection

@section('module_name', 'INVENTORY')
@section('page_name', 'INDEX')

@section('body')
<div id="inventory" class="x_content">
	<section class="section-header-index">
    <form class="form-inline form-header-index">
      <div class="flex-parent">
			
				<!-- <div class="form-group mr-1">
					<a type="button" class="btn btn-ngin btn-default" href="{{ route('backOffice.logistic.inventory.edit', ['id'=> 1]) }}">
						<span class="btn-label"><i class="fa fa-plus" aria-hidden="true"></i></span>UPDATE
					</a>
				</div> -->
				<div class="form-group form-fixed-width flex-item">
          <div class="icon-addon addon-sm">
            <input  type="text" placeholder="SEARCH" class="form-control search" id="SEARCH" >
            <label for="search"  class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
          </div>
        </div>
				<div class="form-group">
          <button type="button" class="btn  btn-default-background">
            <span class="btn-label"><i class="fa fa-file-pdf-o pdf" aria-hidden="true"></i></span>
            <span class="btn-label-label">PDF</span>
          </button>
        </div>
        <div class="form-group">
          <button type="button" class="btn  btn-default-background">
            <span class="btn-label"><i class="fa fa-file-excel-o excel" aria-hidden="true"></i></span>
            <span class="btn-label-label">Excel</span>
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
		</form>
	</section>

	<div id="exTab2" class="section-margin">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#1" data-toggle="tab"><span><img src="{{asset('/images/backOffice/templates/ngin-icon.png')}}" class="ngin-icon" alt=""></span> NGIN</a></li>
			<li><a href="#2" data-toggle="tab"><span><i class="fa fa-ship	" aria-hidden="true"></i></span> CONSIGNMENT</a></li>
			<div class="tab_right">
				<div class="form-group stock-date-btn-form">
					<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label"><i class="fa fa-cubes" aria-hidden="true"></i></span>
						INVENTORY MOVEMENT
					</button>
				</div>
			</div>			
			
		</ul>
		<div class="tab-content scroll-2">
			<div class="tab-pane active" id="1">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading panel-inventory">
							<div class="col-md-6">
								<div class="col-sm-6">
									<select class="form-control input-sm">
										<option value="">COMPANY A</option>
										<option value="">COMPANY B</option>
									</select>
								</div>
								<div class="col-sm-6">
									<select class="form-control input-sm">
										<option value="">ALL BRANCH</option>
										<option value="">1</option>
										<option value="">2</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="pull-right">
									<!-- <div class="form-group stock-date-btn-form">
										<button type="button" class="btn btn-ngin btn-default">
											<span class="btn-label"><i class="fa fa-question" aria-hidden="true"></i></span>
											HISTORY
										</button>
									</div> -->
									<div class="" style="margin-right: 40px">
										<p class="stock-date">08/08/2017</p>
									</div>
								</div>
							</div>
						</div>
						@for ($i=0; $i<11; $i++)
						<div class="panel-heading panel-stock">
							<h4 class="panel-title">
								<table class="table">
									<tbody>
										<tr>
											<td class="tr-data-small" style="width:100px;">
													<img class="img-in-table" src="https://scontent-fbkk5-7.us-fbcdn.net/v1/t.1-48/1426l78O9684I4108ZPH0J4S8_842023153_K1DlXQOI5DHP/dskvvc.qpjhg.xmwo/w/data/920/920934-img.rhxvxk.1185b.png">
											</td>
											<td class="tr-data-small" style="width:70%;">
												<div class="row no-margin d-flex align-items-center">
												<div class="col-xs-6 no-padding">
													<b style="font-size:15px;">ITEM </b> 
													<P style="font-size:13px;">88888888 : PS4-G MIITO Lorem ipsum dolor sit amet...</P>
												</div>
												<div class="col-xs-3 text-center no-padding">
													<b style="font-size:11px;">RESERVED </b> 
													<P class="p-stock">1000</P>
												</div>
												<div class="col-xs-3 text-center no-padding">
													<b style="font-size:11px;">REMAINDER </b>
													<P class="p-stock">350</P>
												</div>
												</div>
											</td>
											<!-- <td class="tr-data-small text-center" style="width:15%;">
												<b style="font-size:15px;">RESERVED </b> 
												<P class="p-stock">1000</P>
											</td>
											<td class="tr-data-small text-center" style="width:15%;">
												<b style="font-size:15px;">REMAINDER </b>
												<P class="p-stock">350</P>
											</td> -->
											<td class="tr-data-small text-center" style="width:15%;">
												<b style="font-size:11px;">AVAILABLE </b>
												<P class="ngin-green p-stock">650</P>
											</td>
											<td class="tr-data-small text-center" >
											<div class="form-group stock-date-btn-form">
												<button type="button" class="btn btn-ngin btn-default">
													<span class="btn-label"><i class="fa fa-history" aria-hidden="true"></i></span>
													HISTORY
												</button>
											</div>
											</td>
										</tr>
									</tbody>
								</table>
							</h4>
						</div>
						@endfor
					</div>
				</div>
			</div>
			<div class="tab-pane" id="2">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading panel-inventory">
							<div class="col-md-6">
								<div class="col-sm-6">
									<select class="form-control input-sm">
										<option value="">COMPANY A</option>
										<option value="">COMPANY B</option>
									</select>
								</div>
								<div class="col-sm-6">
									<select class="form-control input-sm">
										<option value="">ALL BRANCH</option>
										<option value="">1</option>
										<option value="">2</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="pull-right">
									
									<div class="" style="margin-right: 40px">
										<p class="stock-date">08/08/2017</p>
									</div>
								</div>
							</div>
						</div>
						@for ($i=0; $i<10; $i++)
						<div class="panel-heading panel-stock">
							<h4 class="panel-title">
								<table class="table">
									<tbody>
										<tr>
											<td class="tr-data-small" style="width:100px;" >
													<img class="img-in-table" src="https://scontent-fbkk5-7.us-fbcdn.net/v1/t.1-48/1426l78O9684I4108ZPH0J4S8_842023153_K1DlXQOI5DHP/dskvvc.qpjhg.xmwo/w/data/920/920934-img.rhxvxk.1185b.png">
											</td>
											<td class="tr-data-small" style="width:70%;">
												<b style="font-size:15px;">ITEM </b> 
												<P style="font-size:13px;">88888888 : PS4-G MIITO Lorem ipsum dolor sit amet, consectetuer adipiscing...</P>
											</td>
											<!-- <td class="tr-data-small text-center" >
												<b>RESERVED </b> 
												<P class="p-stock">1000</P>
											</td>
											<td class="tr-data-small text-center" >
												<b>REMAINDER </b>
												<P class="p-stock">350</P>
											</td> -->
											<td class="tr-data-small text-center" style="width:15%;">
												<div style="margin-left:3px">
												<b style="font-size:11px;">AVAILABLE </b>
												<P class="ngin-green p-stock">650</P>
												</div>
											</td>
											<td class="tr-data-small text-center" >
											<div class="form-group stock-date-btn-form">
												<button type="button" class="btn btn-ngin btn-default">
													<span class="btn-label"><i class="fa fa-history" aria-hidden="true"></i></span>
													HISTORY
												</button>
											</div>
											</td>
										</tr>
									</tbody>
								</table>
							</h4>
						</div>
						@endfor
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Pagination -->
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
	<!-- End Pagination -->
</div>
@endsection

@section('top-right-sidebar')
<div class="x_title"><span class="left">Top Product เดือนที่แล้ว</span><span class="right"></span></div>
<div class="x_content">
	<ul class="list-unstyled scroll-view">
	@for ($i=0 ; $i<5; $i++)
		<li class="media event">
			<a class="pull-left border-aero"><img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded"></a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>
				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero"><img src="http://www.ngin.co.th/data/product/150727114252_prod_50.jpg" alt="" class="img-rounded"></a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>
				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
			</div>
		</li>
	@endfor
	</ul>
</div>
@endsection

@section('bottom-right-sidebar')
<div class="x_title"><span class="left">NEW RELEASES</span></div>
<div class="x_content">
	<ul class="list-unstyled scroll-view">
	@for ($i=0 ; $i<5; $i++)
		<li class="media event">
			<a class="pull-left border-aero"><img src="http://www.ngin.co.th/data/product/161221081830_prod_125.jpg" alt="" class="img-rounded"></a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>
				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
			</div>
		</li>
		<li class="media event">
			<a class="pull-left border-aero"><img src="http://www.ngin.co.th/data/product/150727114252_prod_50.jpg" alt="" class="img-rounded"></a>
			<div class="media-body">
				<a class="title" href="#">Horizon: Zero Dawn</a><small class="right">20/50</small>
				<p> <small>Lorem ipsum dolor Lorem ipsum dolor adipiscing elit,...</small>
			</div>
		</li>
	@endfor
	</ul>
</div>
@endsection

@section('script')
	<script src="{{asset('js/back-office/home/index.js')}}"></script>
@endsection