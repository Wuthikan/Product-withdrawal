@extends('layouts.backOffice.template')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/home/index.css')}}"/>
@endsection

@section('module_name', 'MODULE_NAME')
@section('page_name', 'PAGE_NAME')

@section('body')
<div class="full-content scroll-2">
	<div class="x_title">
	<h2>Documentation</h2>
	<div class="col-sm-12">
		<div class="x_content">
			<div class="col-sm-12 col-md-12 col-lg-12">


				<h3>Headings</h3>
				<h1>h1. Bootstrap heading <small>Secondary text</small></h1>
				<h2>h2. Bootstrap heading <small>Secondary text</small></h2>
				<h3>h3. Bootstrap heading <small>Secondary text</small></h3>
				<h4>h4. Bootstrap heading <small>Secondary text</small></h4>
				<h5>h5. Bootstrap heading <small>Secondary text</small></h5>

				<h3>Table </h3>
				<table class="table ngin-table">
					<thead>
						<tr>
							<th>Date</th>
							<th>User</th>
							<th>Channel</th>
							<th>ACTION</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>02/09/2017</td>
							<td>A</td>
							<td>App</td>
							<td>เสนอ</td>
						</tr>
						<tr>
							<td>02/09/2017</td>
							<td>A</td>
							<td>App</td>
							<td>เสนอ</td>
						</tr>
						<tr>
							<td>02/09/2017</td>
							<td>A</td>
							<td>App</td>
							<td>เสนอ</td>
						</tr>
						<tr>
							<td>02/09/2017</td>
							<td>A</td>
							<td>App</td>
							<td>เสนอ</td>
						</tr>
						<tr>
							<td>02/09/2017</td>
							<td>A</td>
							<td>App</td>
							<td>เสนอ</td>
						</tr>

					</tbody>
				</table>
				<pre><code class="" data-lang=""><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table ngin-table"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/table&gt;</span></code></pre>


				<h3>Helper classes </h3>

				<div class="bs-example" data-example-id="contextual-colors-helpers"> <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p> <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p> <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p> <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p> <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p> <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
				</div>


				<pre>
					<code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
					<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-primary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
					<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
					<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
					<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
					<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span></code>
				</pre>


				<h3>Buttom Custom Class "btn-ngin"</h3>
				<p><button type="button" class="btn btn-ngin btn-lg">
					<span class="btn-label btn-lg"><i class="fa fa-pencil " aria-hidden="true"></i></span>Large button</button></p>

				<p>	<button type="button" class="btn btn-ngin btn-sm">
					<span class="btn-label btn-sm"><i class="fa fa-pencil " aria-hidden="true"></i></span>btn-sm</button></p>
				<p>	<button type="button" class="btn btn-ngin btn-default">
					<span class="btn-label"><i class="fa fa-pencil " aria-hidden="true"></i></span>btn-default</button></p>
				<p>	<button type="button" class="btn btn-ngin btn-xs">
					<span class="btn-label btn-xs"><i class="fa fa-pencil " aria-hidden="true"></i></span>btn-xs</button></p>


				<h3>Buttom </h3>


				<p>	<button type="button" class="btn btn-ngin btn-default">
						<span class="btn-label"><i class="fa fa-pencil " aria-hidden="true"></i></span>btn-default</button></p>

				<p>	<button type="button" class="btn btn-ngin btn-default ">
					<span class="btn-label"><i class="fa fa-pencil primary" aria-hidden="true"></i></span>btn-primary</button></p>

				<p>	<button type="button" class="btn btn-ngin btn-default ">
					<span class="btn-label"><i class="fa fa-pencil success" aria-hidden="true"></i></span>btn-success</button></p>
				<p>	<button type="button" class="btn btn-ngin btn-default">
					<span class="btn-label"><i class="fa fa-pencil info" aria-hidden="true"></i></span>btn-info</button></p>

				<p>	<button type="button" class="btn btn-ngin btn-default">
					<span class="btn-label"><i class="fa fa-pencil warning" aria-hidden="true"></i></span>btn-warning</button></p>
					<p>	<button type="button" class="btn btn-ngin btn-default ">
						<span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span>btn-danger</button></p>
						<p><button type="button" class="btn btn-link">Link</button></p>
					</div>

				</div>



				<h3>Buttom No Icon</h3>
				<p><button type="button" class="btn btn-ngin btn-default danger-no-icon">
					UnApprove
					<i class="fa fa-times-circle-o" aria-hidden="true"></i></button></p>
					<p>
						<button type="button" class="btn btn-ngin btn-default ngin-no-icon">
							Cancel Document
							<i class="fa fa-exclamation-circle" aria-hidden="true"></i></button>
						</p>


						<h3>Badges </h3>
						<a href="#">Inbox <span class="badge">42</span></a>

						<button class="btn btn-primary" type="button">
							Messages <span class="badge">4</span>
						</button>

						<!--/ Modal -->

					</div>
				</div>



				<div class="x_title">
					<h2>Form Search</h2>
					<div class="x_content">
						<br>
						<!--Form Search-->
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
														<button type="button" class="btn btn-default-background" onclick="window.location='{{ url("back-office/inquiry/create") }}'">
															<span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
														</button>
													</div>
													<div class="form-group button-2">
														<button type="button"    class="btn btn-default-background">
															<span class="btn-label"><span class="fa-approve-all"></span></span><span class="btn-label-label">Approve All</span>
														</button>
													</div>
													<div class="form-group">
														<button type="button" class="btn  btn-default-background">
															<span class="btn-label"><i class="fa fa-file-text-o pdf" aria-hidden="true"></i></i></span><span class="btn-label-label">NEW PO FORM All</span>
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
						<!--End Form Search-->
						<br>
						<!--Form Search-->
						<section class="section-header-index">
							<form class="form-inline form-header-index">
								<div class="row">
									<table>
										<tr>
											<td class="col-1">
												<div class="col-1-content" >
													<div class="form-group select-all">
														<input type="checkbox" disabled checked class="iCheck" id="selectall" name="selectall" >
														<label for="selectall" class="iCheck-label disabled" >Select All</label>
													</div>
													<div class="form-group">
														<button type="button" disabled class="btn btn-default-background" onclick="window.location='{{ url("back-office/inquiry/create") }}'">
															<span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
														</button>
													</div>
													<div class="form-group button-2">
														<button type="button" disabled   class="btn btn-default-background">
															<span class="btn-label"><span class="fa-approve-all"></span></span><span class="btn-label-label">Approve All</span>
														</button>
													</div>
													<div class="form-group">
														<button type="button" disabled class="btn  btn-default-background">
															<span class="btn-label"><i class="fa fa-file-text-o pdf" aria-hidden="true"></i></i></span><span class="btn-label-label">NEW PO FORM All</span>
														</button>
													</div>
												</div>
											</td>
											<td class="col-2">
												<div class="" >
													<div class="form-group form-fixed-width" >
														<div class="icon-addon addon-sm">
															<input  type="text" disabled placeholder="SEARCH" class="form-control search" id="SEARCH" >
															<label for="search"  class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
														</div>
													</div>
												</div>
											</td>
											<td class="col-3">

												<div class="text-right col-3-content">
													<div class="form-group">
														<button type="button" disabled class="btn  btn-default-background">
															<span class="btn-label"><i class="fa fa-file-pdf-o pdf" aria-hidden="true"></i></span><span class="btn-label-label">PDF</span>
														</button>
													</div>
													<div class="form-group">
														<button type="button" disabled class="btn  btn-default-background">
															<span class="btn-label"><i class="fa fa-file-excel-o excel" aria-hidden="true"></i></span><span class="btn-label-label">Excel</span>
														</button>
													</div>
													<div class="form-group">
														<div class="form-group">
															<button type="button" disabled class="btn  btn-default-background">
																<span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span><span class="btn-label-label">Delete All</span>
															</button>
														</div>
													</div>
													<div class="form-group">
														<div class="btn-group ngin-dropdown-sort">
															<a class="dropdown-toggle disabled" disabled data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

						<!--End Form Search-->

						</div>
					</div>

					<div class="x_title">
						<h2>Pagination</h2>
						<div class="x_content">
							<br>

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
					</div>


			<div class="x_title">
				<h2>input Size</h2>
				<div class="x_content">
					<br>
					<form> <div class="controls"> <input class="form-control input-lg" placeholder=".input-lg"> <input class="form-control" placeholder="Default input"> <input class="form-control input-sm" placeholder=".input-sm"> <select class="form-control input-lg"> <option value="">.input-lg</option> </select> <select class="form-control"> <option value="">Default select</option> </select> <select class="form-control input-sm"> <option value="">.input-sm</option> </select> </div> </form>

					<h2>form-group</h2>
					<form>
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</div>
						<div class="form-group">
							<input type="checkbox" class="iCheck">
							<input type="checkbox" class="iCheck" checked>
							<input type="radio"  name="iCheck" class="iCheck">
							<input type="radio" name="iCheck" checked class="iCheck">
						</div>
						<div class="form-group">
							<input type="checkbox" class="switchCheck">
							<input type="checkbox" class="switchCheck" checked>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">input</label>
							<input type="text" class="form-control" id="input" placeholder="input">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">textarea</label>
							<textarea class="form-control" rows="2"  placeholder="textarea"> </textarea>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Select</label>

							<select id="basic" class="form-control">
								<option>text-1</option>
								<option>text-2</option>
								<option>text-3</option>
								<option>text-4</option>
								<option>text-5</option>
								<option>text-6</option>
							</select>


						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">date picker</label>


							<div class='input-group date' id='datetimepicker2' >
								<input type='text' class="form-control" />
								<span class="input-group-addon">
									<i class="fa fa-calendar" ></i>
								</span>
							</div>


						</div>
						<div class="form-group">
							<label for="exampleInputPassword1"></label>

							<span class="chart" data-percent="86" id="chart_red">
								<span class="percent" >85%</span>
							</span>

							<span class="chart" data-percent="75"  id="chart_green">
								<span class="percent">75%</span>
							</span>

						</div>

						<div class="form-group">
							<label for="exampleInputFile">File input</label>
							<input type="file" id="exampleInputFile" >
							<p class="help-block">Example block-level help text here.</p>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" class="iCheck" > Check me out
							</label>
						</div>
						<button type="button" class="btn btn-ngin btn-default">
							<span class="btn-label"><i class="fa fa-pencil" aria-hidden="true"></i></span>EDIT</button>
						</form>

						<h2>Tab </h2>
						<div class="bs-example bs-example-tabs" data-example-id="togglable-tabs"> <ul class="nav nav-tabs" id="myTabs" role="tablist"> <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Home</a></li> <li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Profile</a></li> </ul> <div class="tab-content" id="myTabContent"> <div class="tab-pane fade active in" role="tabpanel" id="home" aria-labelledby="home-tab"> <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p> </div> <div class="tab-pane fade" role="tabpanel" id="profile" aria-labelledby="profile-tab"> <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p> </div> <div class="tab-pane fade" role="tabpanel" id="dropdown1" aria-labelledby="dropdown1-tab"> <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p> </div> <div class="tab-pane fade" role="tabpanel" id="dropdown2" aria-labelledby="dropdown2-tab"> <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p> </div> </div> </div>






						<h2>Collapsible </h2>
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Collapsible Group Item #1
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											Collapsible Group Item #2
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											Collapsible Group Item #3
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
						</div>

						<h2>Alerts</h2>
						<div class="alert alert-success">
							<strong>Success!</strong> This alert box could indicate a successful or positive action.
						</div>
						<div class="alert alert-info">
							<strong>Info!</strong> This alert box could indicate a neutral informative change or action.
						</div>
						<div class="alert alert-warning">
							<strong>Warning!</strong> This alert box could indicate a warning that might need attention.
						</div>
						<div class="alert alert-danger">
							<strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
						</div>



						<div id="sweedalert">
							<h3>SweetAlert2</h3>
							<div class="row">
								<div class="col-sm-4">
									<div class="clearfix">
										<p>Run Sweet Alert</p>
										<button class="btn btn-danger" onclick="sweetWarning()">Try Sweetalert</button>
									</div>
									<br>
							    	<div class="clearfix">
							    		<pre>sweetWarning()</pre>
							    	</div>
							    </div>
							</div>
						</div>

						<div id="toastr">
							<h3>toastr</h3>
							<div class="row">
								<div class="col-sm-4">
									<div class="clearfix">
										<p>toastr Update successful!</p>
										<button class="btn btn-success" onclick="toastrUpdateSuccess()">
											Try Update successful
										</button>
									</div>
									<br>
							    	<div class="clearfix">
							    		<pre>toastrUpdateSuccess()</pre>
							    	</div>
							    </div>
							    <div class="col-sm-4">
									<div class="clearfix">
										<p>toastr Success create successful!</p>
										<button class="btn btn-success" onclick="toastrCreateSuccess()">
											Try Success create
										</button>
									</div>
									<br>
							    	<div class="clearfix">
							    		<pre>toastrUpdateSuccess()</pre>
							    	</div>
							    </div>
							    <div class="col-sm-4">
									<div class="clearfix">
										<p>toastr Success delete success!</p>
										<button class="btn btn-success" onclick="toastrDeleteSuccess()">
											Try Success delete
										</button>
									</div>
									<br>
							    	<div class="clearfix">
							    		<pre>toastrDeleteSuccess()</pre>
							    	</div>
							    </div>
							    <div class="col-sm-4">
									<div class="clearfix">
										<p>toastr Success force delete success!</p>
										<button class="btn btn-success" onclick="toastrForceDeleteSuccess()">
											Try Success force delete
										</button>
									</div>
									<br>
							    	<div class="clearfix">
							    		<pre>toastrForceDeleteSuccess()</pre>
							    	</div>
							    </div>
							    <div class="col-sm-4">
									<div class="clearfix">
										<p>toastr Please select at least one item to delete!</p>
										<button class="btn btn-danger" onclick="toastrSelectItem()">
											Try Warnings
										</button>
									</div>
									<br>
							    	<div class="clearfix">
							    		<pre>toastrSelectItem()</pre>
							    	</div>
							    </div>
							    <div class="col-sm-4">
									<div class="clearfix">
										<p>toastr Error Incorrect data!</p>
										<button class="btn btn-danger" onclick="toastrIncorrectData()">
											Try Error
										</button>
									</div>
									<br>
							    	<div class="clearfix">
							    		<pre>toastrIncorrectData()</pre>
							    	</div>
							    </div>
							</div>
						</div>

						<div id="typeahead">
							<h3>Typeahead</h3>
							<div class="row">
								<div class="col-sm-12"><h4>Try Typeahead Product</h4></div>
								<div class="col-sm-6">
									<input class="form-control" type="text" placeholder="typeaheadProduct" data-action="typeaheadProduct">
								</div>
								<div class="col-sm-6">
							    	<div class="clearfix">
							    		<pre><code>&lt;input</code> type="text" <span class="text-primary">data-action="typeaheadProduct"</span><code>&gt;</code></pre>
							    	</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12"><h4>Try Typeahead Customer</h4></div>
								<div class="col-sm-6">

									<input class="form-control" type="text" placeholder="typeaheadCustomer" data-action="typeaheadCustomer">
								</div>
								<div class="col-sm-6">
							    	<div class="clearfix">
							    		<pre><code>&lt;input</code> type="text" <span class="text-primary">data-action="typeaheadCustomer"</span><code>&gt;</code></pre>
							    	</div>
								</div>
							</div>
						</div>

						<!-- Modal -->
						<h2>Modal </h2>

						<!-- Trigger the modal with a button -->
						<button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#myModal-1">
							<span class="btn-label"><i class="fa fa-pencil" aria-hidden="true" ></i></span>Modal</button>

							<button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#myModal-2">
								<span class="btn-label"><i class="fa fa-pencil" aria-hidden="true" ></i></span>Large modal</button>



							</div>
						</div>

						@endsection
						@section('modal')

						<!-- Modal -->
						<div id="myModal-1" class="modal fade" role="dialog">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title"><i class="fa fa-file-text-o" aria-hidden="true"></i>Log</h4>
									</div>
									<div class="modal-body scroll-2">
										<table class="table ngin-table">
											<thead>
												<tr>
													<th>Date</th>
													<th>User</th>
													<th>Channel</th>
													<th>ACTION</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>02/09/2017</td>
													<td>A</td>
													<td>App</td>
													<td>เสนอ</td>
												</tr>
												<tr>
													<td>02/09/2017</td>
													<td>A</td>
													<td>App</td>
													<td>เสนอ</td>
												</tr>
												<tr>
													<td>02/09/2017</td>
													<td>A</td>
													<td>App</td>
													<td>เสนอ</td>
												</tr>
												<tr>
													<td>02/09/2017</td>
													<td>A</td>
													<td>App</td>
													<td>เสนอ</td>
												</tr>
												<tr>
													<td>02/09/2017</td>
													<td>A</td>
													<td>App</td>
													<td>เสนอ</td>
												</tr>

											</tbody>
										</table>



									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#myModal-1">
											<span class="btn-label "><i class="fa fa-thumbs-o-up ngin-green" aria-hidden="true"></i></span>OK</button>
										</div>
									</div>

								</div>
							</div>


							<!-- Modal -->
							<div id="myModal-2" class="modal bs-example-modal-lg fade" role="dialog">
								<div class="modal-dialog modal-lg">

									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title"><i class="fa fa-file-text-o" aria-hidden="true"></i>Log</h4>
										</div>
										<div class="modal-body scroll-2">
											<table class="table ngin-table">
												<thead>
													<tr>
														<th>Date</th>
														<th>User</th>
														<th>Channel</th>
														<th>ACTION</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>02/09/2017</td>
														<td>A</td>
														<td>App</td>
														<td>เสนอ</td>
													</tr>
													<tr>
														<td>02/09/2017</td>
														<td>A</td>
														<td>App</td>
														<td>เสนอ</td>
													</tr>
													<tr>
														<td>02/09/2017</td>
														<td>A</td>
														<td>App</td>
														<td>เสนอ</td>
													</tr>
													<tr>
														<td>02/09/2017</td>
														<td>A</td>
														<td>App</td>
														<td>เสนอ</td>
													</tr>
													<tr>
														<td>02/09/2017</td>
														<td>A</td>
														<td>App</td>
														<td>เสนอ</td>
													</tr>

												</tbody>
											</table>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-ngin btn-default" data-toggle="modal" data-target="#myModal-2">
												<span class="btn-label "><i class="fa fa-thumbs-o-up ngin-green" aria-hidden="true"></i></span>OK</button>
										</div>
								</div>
							</div>
	</div>
</div>
@endsection
@section('script')
<script src="{{ asset('js/back-office/home/index.js') }}"></script>
<script type="text/javascript">
	$(function () {
		$('#datetimepicker2').datetimepicker();
	});

</script>
@endsection
