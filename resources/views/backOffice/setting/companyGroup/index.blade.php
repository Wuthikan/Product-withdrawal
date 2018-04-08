@extends('layouts.backOffice.template-with-top-and-bottom-right-sidebar') @section('head')
<style></style>
<title>Customer groups</title>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" href="{{ asset('css/back-office/setting/company-group/index.css') }}"> @endsection @section('module_name', 'COMPANIES>COMPANYGROUP') @section('page_name', 'INDEX') @section('body')

<div class="x_content">
	<section class="section-header-index">
		<!-- View Table -->

		<div class="section-header-index">
			<form class="form-inline form-header-index" action="{{ route('backOffice.setting.company-group.index') }}" method="get">
				<div class="flex-parent">
					<div class="form-group select-all" style="margin-right:10px;width:115px">
						<input type="checkbox" class="iCheck" id="selectall" name="selectall">
						<label for="selectall" class="iCheck-label">Select All</label>
					</div>
					<div class="form-group" style="margin-right:1em">
						<a type="button" class="btn btn-default-background" href="{{ url('back-office/setting/company-group/create') }}">
							<span class="btn-label" style="padding-left:3px !important;">
								<i class="fa fa-plus-square new" aria-hidden="true"></i>
							</span>
							<span class="btn-label-label">NEW</span>
						</a>
					</div>
					<div class="form-group form-fixed-width">
						<div class="icon-addon addon-sm">
							<input type="text" placeholder="SEARCH" name="search" class="form-control search" id="SEARCH" @if(isset($_GET[ 'search']))
							 value="{{$_GET['search']}}" @endif>
							<label for="search" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
						</div>
					</div>
					<div class="form-group">
						<button type="button" class="btn btn-default-background" form="form-deleteall" id="form-deleteall-btn">
							<span class="btn-label">
								<span class="fa fa-times-circle-o danger"></span>
							</span>
							<span class="btn-label-label">Delete All</span>
						</button>
					</div>
				</div>
			</form>
			<form action="{{ route('backOffice.setting.company-group.destroy',['id'=>'records']) }}" method="post" id="form-deleteall">
				{!! csrf_field() !!} {!! method_field('DELETE') !!}
			</form>
		</div>
	</section>
	<!-- Header -->
	<div class="wrap-data-table section-margin">
		{{--
		<div class="row-table title-table" style="font-size:14px;font-weight: bold; color:#000!important;"> --}}
			<div class="row-table title-table" style="margin-bottom:10px">
				{{--
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div> --}}
				<div class="col-xs-3 text-center">
					GROUP NAME
					<a href="{{ route('backOffice.setting.company-group.index',['search'=>$data['search'],'sort'=>(isset($_GET['sort']) && $_GET['sort'] == 'name'?'-name':'name')]) }}"
					 style="margin-left:1em;">
						<i class="fa fa-sort-alpha-{!! (isset($_GET['sort']) && $_GET['sort'] == '-name'?'desc':'asc') !!}" aria-hidden="true"></i>
					</a>
				</div>
				<div class="col-xs-7 content" style="padding-left:20px !important;">
					DESCRIPTION
					<a href="{{ route('backOffice.setting.company-group.index',['search'=>$data['search'],'sort'=>(isset($_GET['sort']) && $_GET['sort'] == 'description'?'-description':'description')]) }}"
					 style="margin-left:1em;">
						<i class="fa fa-sort-alpha-{!! (isset($_GET['sort']) && $_GET['sort'] == '-description'?'desc':'asc') !!}" aria-hidden="true"></i>
					</a>
				</div>
				<div class="col-xs-2 column-1 text-center" style="text-align:center;">
					STATUS
					<a href="{{ route('backOffice.setting.company-group.index',['search'=>$data['search'],'sort'=>(isset($_GET['sort']) && $_GET['sort'] == 'status' ? '-status':'status')]) }}"
					 style="margin-left:1em;">
						<i class="fa fa-toggle-{!! (isset($_GET['sort']) && $_GET['sort'] == '-status'?'off':'on') !!}" aria-hidden="true"></i>
					</a>
				</div>
			</div>
			<div class="panel-content scroll-2 flex-item">
				@foreach( $data['CompanyGroup'] as $group)
				<div class="panel panel-default {{ $group->deleted_at ? 'softdelete' :'' }}" data-toggle="collapse" data-parent="#accordion"
				 data-target="#collapse{{ $group->id }}" aria-expanded="false" aria-controls="collapse{{ $group->id }}">
					<div class="panel-heading" role="tab" id="heading{{ $group->id }}">
						<div class="detial">
							<div class="row" style="align-items: center; display: flex; color: #636b6f">
								<div class="col-xs-3">
									<table width="100%">
										<tr>
											<td class="checkboxCtl">
												<div class="checkbox customCheckbox double">
													<input type="checkbox" id="select-{{ $group->id }}" name="id[]" class="iCheck selectrow {{ ($group->deleted_at?'forcedel':'') }}"
													form="form-deleteall" value="{{ $group->id }}">
													<ins class="iCheck-helper"></ins>
												</div>
											</td>
											<td class="text-left">
												<label class="group-name">
													{{ $group->name }}
												</label>
											</td>
										</tr>
									</table>
								</div>
								<div class="col-xs-7">
									<div class="resultTable-description">
										{{ $group->description }}
									</div>
								</div>
								<div class="col-xs-2 text-center">
									<input type="checkbox" id="switchCheck-{{ $group->id }}" class="switchCheck" {{ $group->status == 'on'?'checked':'' }} {{ $group->deleted_at ? 'disabled' :'' }} data-url="{{ route('backOffice.setting.company-group.update',['id'=>$group->id])}}">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="collapse{{ $group->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $group->id }}">
					<div class="panel-body">
						<div class="bundleBox">
							<div class="bundleContent">
								<div class="row">
									<div class="col-xs-10">
										<div class='row'>
											@foreach($group->companies as $item)
											<div class="col-xs-6">
												<div class="row" style="margin-bottom:10px">
													<div class="col-xs-12">
														<div class="row" style="align-items: center; display: flex;">
															<div class="col-xs-4">
																<img class="img-img">
															</div>
															<div class="col-xs-8 companies-sub">
																<div class="head">
																	<b>{{ $item->name }}</b>
																</div>
																<div class="detail">
																	Some quick example text to build on the card title and make up the bulk of the card's content.
																</div>

															</div>
														</div>
													</div>
												</div>
											</div>
											@endforeach
										</div>
									</div>
									<div class="col-xs-2">
										<div class="row" style="margin: 10px;">
											<div class="col-xs-12 text-center">
												ACTION
											</div>
										</div>
										<div class="bundleAction">
											@if(!$group->deleted_at)
											<a href="{{ route('backOffice.setting.company-group.edit', $group->id) }}" target="_blank" class="btn btn-ngin btn-default" style="text-align: center; border:none !important;width:100%;margin-bottom: 7px;">
												<span class="btn-label" style="float: left; top:0;left:-15px;">
													<i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
												</span>
												<div style="display: inherit; margin-top: 3px;">
													Edit
												</div>
											</a>
											@endif @if(!$group->deleted_at)
											<a href="{{ route('backOffice.setting.company-group.create', ['id'=>$group->id]) }}" target="_blank" class="btn btn-ngin btn-default" style="text-align: center; border:none !important;width:100%;margin-bottom: 7px;">
											<span class="btn-label" style="float: left; top:0;left:-15px;">
														<i class="fa fa-files-o" aria-hidden="true"></i>
													</span>
													<div style="display: inherit; margin-top: 3px;">
														Duplicate
													</div>
											</a>
											@endif @if(!$group->deleted_at)
											<form action="{{ url('back-office/setting/company-group', $group->id) }}" method="post">
												<input name="_method" type="hidden" value="DELETE"> {!! csrf_field() !!}
												<input name="delete" type="hidden" value="Delete">
												<button type="button" name="delete" class="btn btn-ngin btn-default btn-delete" style="text-align: center; border:none !important;width:100%;margin-bottom: 7px;"
												 value="Delete" data-url="{{ route('backOffice.setting.company-group.show',['id'=>$group->id]) }}">
													<span class="btn-label" style="float: left; top:0;left:-15px;">
														<i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
													</span>
													<div style="display: inherit; margin-top: 3px;">
														Delete
													</div>
												</button>
											</form>
											@else @if(true)
											<form action="{{ url('back-office/setting/company-group/' . $group->id . '/restore') }}" method="post">
												<input name="_method" type="hidden" value="patch"> {!! csrf_field() !!}
												<button type="submit" class="btn btn-ngin btn-default" style="text-align: center; border:none !important;width:100%;margin-bottom: 7px;">
													<span class="btn-label" style="float: left; top:0;left:-15px;">
														<i class="fa fa-undo info" aria-hidden="true"></i>
													</span>
													<div style="display: inherit; margin-top: 3px;">
														Undo
													</div>
												</button>
											</form>
											@endif @if(true)
											<form action="{{ url('back-office/setting/company-group', $group->id) }}" method="post">
												<input name="_method" type="hidden" value="Delete"> {!! csrf_field() !!}
												<input name="delete" type="hidden" value="Force Delete">
												<button type="button" name="delete" class="btn btn-ngin btn-default btn-delete" style="text-align: center; border:none !important;width:100%;margin-bottom: 7px;"
												 value="Force Delete" data-url="{{ route('backOffice.setting.company-group.show',['id'=>$group->id]) }}">
													<span class="btn-label" style="float: left; top:0;left:-15px;">
														<i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
													</span>
													<div style="display: inherit; margin-top: 3px;">
														Delete
													</div>
												</button>
											</form>
											@endif @endif
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>

		<div class="row page-showing-pagination">
			<div class="col-xs-6 showing">
				Showing {{$data['CompanyGroup']->firstItem()}} - {{$data['CompanyGroup']->lastItem()}} of {{$data['CompanyGroup']->total()}}
			</div>
			<div class="col-xs-6 page-pagination">
				<nav aria-label="Page navigation">
					<!-- Pagination -->
					@if(isset($_GET['search']))
					<!-- For search -->
					{{ $data['CompanyGroup']->appends(['search' => $_GET['search']])->links('pagination.default') }} @else
					<!-- For default -->
					{{ $data['CompanyGroup']->links('pagination.default') }} @endif
				</nav>

			</div>
		</div>
	</div>
</div>
@endsection @section('script')
<script src="{{ asset('js/back-office/setting/company-group/index.js') }}"></script>
<script>
	$(document).on('ifChecked', '#selectall', function () {
        $('.selectrow').iCheck('check');
    });

    $(document).on('ifUnchecked','#selectall', function () {
        $('.selectrow').iCheck('uncheck');
    });

    $(document).on('ifChecked','.selectrow', function () {
        $(this).prop('checked', true);
    });

    $(document).on('ifUnchecked','.selectrow', function () {
        $(this).prop('checked', false);
	});

	$(".switchCheck").iosCheckbox();

	$(document).ready(function () {

		$(document).on('change','.switchCheck', function () {
			console.log('OK');
			var url = $(this).data('url');
			var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
			$.ajax({
				url: url,
				method: 'PATCH',
				dataType: 'JSON',
				data: {
					_method:'PATCH',
					_token: CSRF_TOKEN
				},
			}).done(function ($data) {
				console.log($data);
			}).error(function ($data) {
				console.log($data);
			});
		});
		toastr.options = {
			"closeButton": false,
			"debug": false,
			"newestOnTop": false,
			"progressBar": false,
			"positionClass": "toast-top-center",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		};
		<!-- MESSAGES -->
		@if(session()->has('success'))
		toastr["success"]("{{session()->get('success')}}");
		@elseif(session()->has('error'))
		toastr["error"]("{{session()->get('error')}}");
		@endif

	});

	$(document).on('click', '#form-deleteall-btn', function (e) {
        if ($('input.forcedel:checked').length > 0) {
            swal({
                title: 'Are you sure?',
                text: "ต้องการลบข้อมูลแบบถาวรใช้หรือไม่",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    swal(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
					);
					$('#form-deleteall').trigger('submit');
                }
            });
        } else {
			if ($('input.selectrow:checked').length > 0) {

				$('#form-deleteall').trigger('submit');
			}else{
				swal(
                'Warning!',
                'Please select at least one item to delete!',
                'warning'
                );
			}
        }
    });

    $(document).on('click', '.btn-delete', function () {
		var formdelete = $(this);

		$.ajax({
			url:formdelete.attr('data-url'),
			method:'GET',
			dataType:'JSON'
		}).done(function($data){

			if($data.CompanyGroup == null){
				swal('Warning','Data not found','warning');
				location.reload();
			}else{
				if($data.CompanyGroup.deleted_at == null){
					formdelete.closest('form').trigger('submit');
				}else{
					formdelete.closest('form').find('[name="delete"]').val('Force Delete');
					swal({
						title: 'Are you sure?',
						text: "Do you want to force delete?",
						type: 'warning',
						showCancelButton: true,
						confirmButtonColor: '#3085d6',
						cancelButtonColor: '#d33',
						confirmButtonText: 'Yes, delete it!'
					}).then((result) => {
						if (result.value) {
							swal(
								'Success',
								'Force Delete success',
								'success'
							);
							formdelete.closest('form').trigger('submit');
						}
					});
				}
			}
		});
    });

</script>

@endsection
