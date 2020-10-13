@extends('layouts.app')

@section('content')
<div class="content">
	@include('templates.content_header')
	<div class="content-header">
		<div>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
					<li class="breadcrumb-item"><a href="{{ route('admin.web_home.index') }}">Home List</a></li>
					<li class="breadcrumb-item active" aria-current="page">Add Home</li>
				</ol>
			</nav>
			<h4 class="content-title content-title-xs">Add Home</h4>
		</div>
	</div><!-- content-header -->
	<div class="content-body">
		<div class="component no-code">
			<div class="card rounded-5">
				<div class="card-body">
					@if ($errors->any())
					<div class="alert alert-danger alert-dismissible mg-b-0 fade show">
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif				       
					<div class="component">
						<form method="POST" action="{{ route('admin.web_home.store') }}" enctype="multipart/form-data">
							@csrf
							<div class="row row-sm">

								<div class="col-sm-2">
									<label class="form-label">Text</label>
								</div>
								<div class="col-sm-10">
									<textarea class="form-control" rows="3" name="text" placeholder="Enter text" required=""></textarea>
								</div><br><br><br><br><br>					
								<div class="col-sm-2">
									<label class="form-label">Image</label>
								</div>
								<div class="col-sm-10">
									<input type="file" name="image_home" class="form-control" required="">
								</div><br><br><br>
								<div class="col-sm-2">
									<label class="form-label">Status</label>
								</div>
								<div class="col-sm-10">
									<select class="form-control" name="status" required="">
										<option value="">Please Choose</option>
										<option value="1">Active</option>
										<option value="0">Inactive</option>
									</select>
								</div><br><br><br>	
								<div class="col-sm-2">
									<label class="form-label"></label>
								</div>
								<div class="col-sm-10" style="margin-top: 20px">
									<button type="submit" class="btn btn-primary rounded-5">Save</button>
									<a href="{{ route('admin.web_home.index') }}"><button type="button" class="btn btn-secondary rounded-5">Cancel</button></a>
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