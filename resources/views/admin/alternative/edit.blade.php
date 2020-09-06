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
					<li class="breadcrumb-item active" aria-current="page">Edit alternative</li>
				</ol>
			</nav>
			<h4 class="content-title content-title-xs">Edit alternative</h4>
		</div>
	</div><!-- content-header -->
	<div class="content-body">
		<div class="component no-code">
			<div class="card rounded-5">
				<div class="card-body">        
					<div class="component">
						<form method="POST" action="{{ route('admin.alternative.update', $alternative->id) }}" enctype="multipart/form-data">
							@csrf
							<div class="row row-sm">

								<div class="col-sm-2">
									<label class="form-label">Code</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="code" placeholder="Enter alternative code" value="{{ $alternative->code }}" disabled="">
								</div><br><br><br>						
								<div class="col-sm-2">
									<label class="form-label">Name</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name" placeholder="Enter alternative name" required="" value="{{ $alternative->name }}">
								</div><br><br><br>
								<div class="col-sm-2">
									<label class="form-label">Image</label>
								</div>
								<div class="col-sm-10">
									<input type="file" class="form-control" name="image">
									<small class="text-danger">File yang diterima hanya berekstensi .jpeg, .jpg, .png, .pdf dan ukuran maks. 5 MB</small>
								</div><br><br><br>	
								<div class="col-sm-2">
									<label class="form-label">Ket</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="ket" placeholder="Enter Ket" required="" value="{{ $alternative->ket }}">
								</div><br><br><br>
								<div class="col-sm-2">
									<label class="form-label">Location</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="location" placeholder="Enter Url Maps Location" required="" value="{{ $alternative->location }}">
								</div><br><br><br>
								<div class="col-sm-2">
									<label class="form-label">Description</label>
								</div>
								<div class="col-sm-10">
									<textarea class="form-control" rows="5" name="description" placeholder="Enter description" required="">{{ $alternative->description }}</textarea>
								</div><br><br><br>							
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
