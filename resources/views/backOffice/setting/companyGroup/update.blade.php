@extends('layouts.backOffice.template') @section('head')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="{{ asset('css/back-office/setting/company-group/create.css') }}">
<style></style>
@endsection @section('module_name', 'COMPANIES>COMPANYGROUP') @section('page_name', 'EDIT') @section('body')
<div class="x_content">
	<div class="context">
		{{-- Error --}} @if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif {{-- Success --}} @if(session()->has('success'))
		<div class="alert alert-success">
			{{ session()->get('success') }}
		</div>
		@endif
		<form action="{{ route('backOffice.setting.company-group.update', $data['CompanyGroup']->id) }}" method="POST" style="width: 80%; margin: 0 auto;"
		 id="form-data">
			{{ csrf_field() }}
			<input type="hidden" name="_method" value="PUT">
			<section>

				<div class="row">
					<div class="col-xs-12 col-sm-12">
						<div class="form-group">
							<label for="txt-name">GROUP NAME:</label>
							<input type="text" id="txt-name" class="form-control" name="name" value="{{ $data['CompanyGroup']->name }}">
						</div>
					</div>
					<div class="col-xs-12 col-sm-12">
						<div class="form-group">
							<select name="customer_tier_id" id="customer_tier_id" class="form-control">
								<option value="">-- select customer tier --</option>
								@foreach($data['customertiers'] as $customertier)
								<option value="{{ $customertier->id }}" @if( $data[ 'CompanyGroup']->customer_tier_id == $customertier->id) selected="selected" @endif>{{ $customertier->name }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12">
						<div class="form-group">
							<label for="txt-desc">DESCRIPTION:</label>
							<textarea class="form-control" rows="5" name="description" id="txt-desc">{{ $data['CompanyGroup']->description }}</textarea>
						</div>
					</div>
					{{--
					<div>
						<label for="status">Status:</label>
						<input type="checkbox" id="status" name="status" @if( $data[ 'CompanyGroup']->status) checked @endif >
					</div> --}}
					<div class="col-xs-12 col-sm-12">
						<div id="scrollable-dropdown-menu">
							<input type="text" class="form-control" id="search-company" placeholder="Search Company" value="">
						</div>
					</div>
				</div>
			</section>
			<section>
				<div class="row" id="select-company">
					<?php foreach($data['company'] as $company): ?>
					<?php if((is_array(old( 'company_id')) && in_array($company->id,old('company_id'))) || $company->company_group_id == $data['CompanyGroup']->id): ?>
					<div class="col-sm-6 col-xs-12 select-company">
						<input type="hidden" name="company_id[]" value="{{ $company->id }}">
						<div class="checklist-group">
							<div class="checklist-group-left">
								<button type="button" class="btn btn-link company_id">
									<span class="btn-label" style="padding-left:3px !important;">
										<i class="fa fa-trash-o"></i>
									</span>
								</button>
							</div>
							<div class="checklist-group-body">
								<label>{{ $company->name }}</label>
								<p>No. 18, kijipanich Building, Room 405, 4th Floor Patpong Road, Suriyawong Bangrak Bangkok 10520</p>
							</div>
						</div>
					</div>
					<?php endif;?>
					<?php endforeach;?>
				</div>
			</section>
		</form>
	</div>
	<hr>
	<section>
		<div class="text-center">
			<button type="submit" class="btn btn-ngin btn-default" form="form-data">
				<span class="btn-label">
					<i class="fa fa-floppy-o success" aria-hidden="true"></i>
				</span>SAVE</button>
			&nbsp;
			<button type="button" class="btn btn-ngin btn-default" onClick="window.location='{{ route('backOffice.setting.company-group.index') }}'">
				<span class="btn-label">
					<i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
				</span>CANCEL</button>
			&nbsp;
		</div>
	</section>
</div>
@endsection @section('script')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
	<?php 
				echo 'var data = [';
				foreach($data['company'] as $company){
					echo '{id:"'.$company->id.'",show:'.((is_array(old( 'company_id')) && in_array($company->id,old('company_id')) || $company->company_group_id == $data['CompanyGroup']->id) ? "false" : "true").',name:"'.$company->name.'",desc:"No. 18, kijipanich Building, Room 405, 4th Floor Patpong Road, Suriyawong Bangrak Bangkok 10520"},';
				}
				echo '];';
				?>

</script>
<script src="{{ asset('js/back-office/setting/company-group/create.js') }}"></script>
@endsection