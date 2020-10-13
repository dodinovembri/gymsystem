@extends('layouts.app')

@section('content')
<div class="content">
	@include('templates.content_header')
	<div class="content-header">
		<div>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
					<li class="breadcrumb-item"><a href="{{ route('admin.web_about_us.index') }}">About Us</a></li>
					<li class="breadcrumb-item active" aria-current="page">Edit About Us</li>
				</ol>
			</nav>
			<h4 class="content-title content-title-xs">Edit About Us</h4>
		</div>
	</div><!-- content-header -->
	<div class="content-body">
		<div class="component no-code">
			<div class="card rounded-5">
				<div class="card-body">       
					<div class="component">
						<form method="POST" action="{{ route('admin.web_about_us.update', $web_about_us->id) }}">
							@csrf
							<div class="row row-sm">

								<div class="col-sm-2">
									<label class="form-label">About Us</label>
								</div>
								<div class="col-sm-10">
									<textarea class="form-control" name="about_us" rows="3">{{$web_about_us->about}}</textarea>
								</div><br><br><br><br><br>
								<div class="col-sm-2">
									<label class="form-label">Status</label>
								</div>
								<div class="col-sm-10">
									<select class="form-control" name="status" required="">
										<option value="{{$web_about_us->status}}">{{ $web_about_us->status == 1 ? 'Active' : 'Inactive' }}</option>
										<?php if ($web_about_us->status == 1) { ?>
											<option value="0">Inactive</option>
										<?php }else{ ?>
											<option value="1">Active</option>
										<?php } ?>
									</select>
								</div><br><br><br>						
								<div class="col-sm-2">
									<label class="form-label"></label>
								</div>
								<div class="col-sm-10" style="margin-top: 20px">
									<button type="submit" class="btn btn-primary rounded-5">Save</button>
									<a href="{{ route('admin.web_about_us.index') }}"><button type="button" class="btn btn-secondary rounded-5">Cancel</button></a>
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
