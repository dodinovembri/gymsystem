@extends('layouts.app')

@section('content')
<div class="content">
	@include('templates.content_header')
	<div class="content-header">
		<div>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
					<li class="breadcrumb-item"><a href="{{ route('admin.news.index') }}">News List</a></li>
					<li class="breadcrumb-item active" aria-current="page">Create News</li>
				</ol>
			</nav>
			<h4 class="content-title content-title-xs">Create News</h4>
		</div>
	</div><!-- content-header -->
	<div class="content-body">
		<div class="component no-code">
			<div class="card rounded-5">
				<div class="card-body">       
					<div class="component">
						<form method="POST" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
							@csrf
							<div class="row row-sm">
								<div class="col-sm-2">
									<label class="form-label">Date</label>
								</div>
								<div class="col-sm-10">
									<input type="date" class="form-control" name="date" value="{{ date('Y-m-d') }}" placeholder="Kode Perusahaan" required="">
								</div><br><br><br>

								<div class="col-sm-2">
									<label class="form-label">Title</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="title" placeholder="Enter title news" required="">
								</div><br><br><br>						
								<div class="col-sm-2">
									<label class="form-label">Description</label>
								</div>
								<div class="col-sm-10">
									<textarea name="description" class="form-control" rows="3" placeholder="Enter news"></textarea>
								</div><br><br><br><br><br>
								<div class="col-sm-2">
									<label class="form-label">Image</label>
								</div>
								<div class="col-sm-10">
									<input type="file" name="image_news" class="form-control" required="">
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
									<a href="{{ route('admin.news.index') }}"><button type="button" class="btn btn-secondary rounded-5">Cancel</button></a>
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