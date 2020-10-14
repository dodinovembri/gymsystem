@extends('layouts.app')

@section('content')
<div class="content">
  @include('templates.content_header')
  <div class="content-header">
    <div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
      </nav>
    </div>
  </div><!-- content-header -->
  <div class="content-body">
    <div class="component no-code">
      <div class="row row-sm">
        <div class="col-sm-3 col-md-3 mg-t-3 mg-sm-t-3">
          <div class="card card-hover card-chart-one">
            <div class="card-header bg-transparent pd-b-0 bd-b-0">
              <h6 class="card-title mg-b-0">Total Alternative</h6>
            </div>
            <div class="card-body pd-t-0">
              <div>                  
                <h4>{{ $total_alternative }}</h4>
              </div>
              <div class="flot-chart"></div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-sm-3 col-md-3 mg-t-3 mg-sm-t-3">
          <div class="card card-hover card-chart-one">
            <div class="card-header bg-transparent pd-b-0 bd-b-0">
              <h6 class="card-title mg-b-0">Total Criteria</h6>
            </div>
            <div class="card-body pd-t-0">
              <div>                  
                <h4>{{ $total_criteria }}</h4>
              </div>
              <div class="flot-chart"></div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->      
        <div class="col-sm-3 col-md-3 mg-t-3 mg-sm-t-3">
          <div class="card card-hover card-chart-one">
            <div class="card-header bg-transparent pd-b-0 bd-b-0">
              <h6 class="card-title mg-b-0">Total Users</h6>
            </div>
            <div class="card-body pd-t-0">
              <div>                  
                <h4>{{ $total_users }}</h4>
              </div>
              <div class="flot-chart"></div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->  
        <div class="col-sm-3 col-md-3 mg-t-3 mg-sm-t-3">
          <div class="card card-hover card-chart-one">
            <div class="card-header bg-transparent pd-b-0 bd-b-0">
              <h6 class="card-title mg-b-0">Total News</h6>
            </div>
            <div class="card-body pd-t-0">
              <div>                  
                <h4>{{ $total_news }}</h4>
              </div>
              <div class="flot-chart"></div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->       
      </div>    
    </div>
  </div><!-- content-body -->
</div>
@endsection
