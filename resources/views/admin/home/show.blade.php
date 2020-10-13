@extends('layouts.app')

@section('content')
<div class="content">
	@include('templates.content_header')
	<div class="content-header">
		<div>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
					<li class="breadcrumb-item"><a href="{{ route('admin.criteria.index') }}">Home List</a></li>
					<li class="breadcrumb-item active" aria-current="page">criteria Detail</li>
				</ol>
			</nav>
			<h4 class="content-title content-title-xs">Home Detail</h4>
		</div>
	</div><!-- content-header -->
	<div class="content-body">
		<div class="component no-code">
			<div class="card rounded-5">
				<div class="card-body">       
					<div class="component">
						<div class="row row-sm">
							<div class="col-sm-2">
								<label class="form-label">Text</label>
							</div>
							<div class="col-sm-10">
								<textarea class="form-control" rows="3" readonly="">{{$web_home->text}}</textarea>
							</div><br><br><br><br><br>					
							<div class="col-sm-2">
								<label class="form-label">Image</label>
							</div>
							<div class="col-sm-10">
								<img src="{{asset('assets/img')}}/{{$web_home->image}}" width="20pt">
							</div><br><br><br>
							<div class="col-sm-2">
								<label class="form-label">Status</label>
							</div>
							<div class="col-sm-10">
								<input type="text" class="form-control" readonly="" value="{{ $web_home->status == 1 ? 'Active' : 'Inactive'}}">
							</div><br><br><br>	
							<div class="col-sm-2">
								<label class="form-label"></label>
							</div>
							<div class="col-sm-10" style="margin-top: 20px">
								<a href="{{ route('admin.web_home.index') }}"><button type="button" class="btn btn-secondary rounded-5">Back to List</button></a>
							</div><br><br><br>							
						</div><!-- row -->
					</div><!-- component-section -->
				</div>
			</div>
		</div>
	</div><!-- content-body -->
</div>
@endsection
