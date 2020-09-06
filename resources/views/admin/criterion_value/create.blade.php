@extends('layouts.app')

@section('content')
<div class="content">
	@include('templates.content_header')
	<div class="content-header">
		<div>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>      
					<li class="breadcrumb-item"><a href="{{ route('admin.criteria.index') }}">Critertia List</a></li>     
					<li class="breadcrumb-item"><a href="{{ route('admin.criterion_value.index', $criteria_id) }}">Detail Criterion List</a></li>     
					<li class="breadcrumb-item active" aria-current="page">Add New</li>
				</ol>
			</nav>
			<h4 class="content-title content-title-xs">Add New</h4>
		</div>
	</div><!-- content-header -->
	<div class="content-body">
		<div class="component no-code">
			<div class="card rounded-5">
				<div class="card-body">       
					<div class="component">
						<form method="POST" action="{{ route('admin.criterion_value.store', $criteria_id) }}">
							@csrf
							<div class="row row-sm">

								<div class="col-sm-2">
									<label class="form-label">Description</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="description" placeholder="Enter description" required="">
								</div><br><br><br>						
								<div class="col-sm-2">
									<label class="form-label">Value</label>
								</div>
								<div class="col-sm-10">
									<input type="number" class="form-control" min="0" name="value" placeholder="Enter value" required="">
								</div><br><br><br>	
								<div class="col-sm-2">
									<label class="form-label"></label>
								</div>
								<div class="col-sm-10" style="margin-top: 20px">
									<button type="submit" class="btn btn-primary rounded-5">Save</button>
									<a href="{{ route('admin.criterion_value.index', $criteria_id) }}"><button type="button" class="btn btn-secondary rounded-5">Cancel</button></a>
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