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
					<li class="breadcrumb-item"><a href="{{ route('admin.criterion_value.index', $criteria_id) }}">Detail Criterion Value List</a></li>     
					<li class="breadcrumb-item active" aria-current="page">Detail Criterion Value</li>
				</ol>
			</nav>
			<h4 class="content-title content-title-xs">Detail Criterion Value</h4>
		</div>
	</div><!-- content-header -->
	<div class="content-body">
		<div class="component no-code">
			<div class="card rounded-5">
				<div class="card-body">       
					<div class="component">
						<form method="POST" action="">
							@csrf
							<div class="row row-sm">

								<div class="col-sm-2">
									<label class="form-label">Description</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name" value="{{ $criterion_value->description }}" placeholder="Enter criterion_value name" disabled="">
								</div><br><br><br>						
								<div class="col-sm-2">
									<label class="form-label">Value</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="attribute" value="{{ $criterion_value->value }}" placeholder="Enter attribute name" disabled="">
								</div><br><br><br>						
								<div class="col-sm-2">
									<label class="form-label"></label>
								</div>
								<div class="col-sm-10" style="margin-top: 20px">								
									<a href="{{ route('admin.criterion_value.index', $criteria_id) }}"><button type="button" class="btn btn-secondary rounded-5">Back to List</button></a>
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
