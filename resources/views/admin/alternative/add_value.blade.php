@extends('layouts.app')

@section('content')
<div class="content">
	@include('templates.content_header')
	<div class="content-header">
		<div>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
					<li class="breadcrumb-item"><a href="{{ route('admin.alternative.index') }}">Alternative List</a></li>
					<li class="breadcrumb-item active" aria-current="page">Add Value</li>
				</ol>
			</nav>
			<h4 class="content-title content-title-xs">Add Value for <u><b>{{ $alternative->code }} - {{ $alternative->name }}</b></u></h4>
		</div>
	</div><!-- content-header -->
	<div class="content-body">
		<div class="component no-code">
			<div class="card rounded-5">
				<div class="card-body">       
					<div class="component">
						<form method="POST" action="{{ route('admin.alternative.store_alternative_value', $alternative_id ) }}">
							@csrf
							<div class="row row-sm">
								<?php foreach ($criteria as $key => $value) { ?>
									<div class="col-sm-2">
										<b><label class="form-label">{{ $value->name }}</label></b>
									</div>
									<div class="col-sm-10">
										<select class="form-control select2" name="value[]" required="">
											<option value="">Pilih</option>
												<?php 
												$criterion_value = App\Models\CriterionValueModel::where('criteria_id', $value->id)->get();
												foreach ($criterion_value as $key => $value_criterion) { ?>
													<option value="{{ $value_criterion->criteria_id }}&{{ $value_criterion->id }}">{{ $value_criterion->description }}</option>
												 <?php } ?>
										</select>
									</div><br><br><br>
								<?php } ?>								

								<div class="col-sm-2">
									<label class="form-label"></label>
								</div>
								<div class="col-sm-10" style="margin-top: 20px">
									<button type="submit" class="btn btn-primary rounded-5">Save</button>
									<a href="{{ route('admin.alternative.index') }}"><button type="button" class="btn btn-secondary rounded-5">Cancel</button></a>
								</div><br><br><br>							
							</div><!-- row -->
						</form>
					</div><!-- component-section -->
				</div>
			</div>
		</div>
	</div><!-- content-body -->
</div>
@endsection