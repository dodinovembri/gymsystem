@extends('layouts.app')

@section('content')
<div class="content">
  @include('templates.content_header')
  <div class="content-header">
    <div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>      
          <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
      </nav>
      <h4 class="content-title content-title-xs">About Us</h4>
    </div>
  </div><!-- content-header -->
  <div class="content-body">
    <div class="component no-code">
      <div class="card rounded-5">
        <div class="card-body">       
          <div class="component">
            @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible mg-b-0 fade show" role="alert">
              <i class="icon fa fa-close"></i> {{ session()->get('message') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div><br>
            @endif 
            @if(session()->has('error'))
            <div class="alert alert-warning alert-dismissible mg-b-0 fade show" role="alert">
              <i class="icon fa fa-close"></i> {{ session()->get('error') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div><br>
            @endif    
            <div class="table table-responsive">
              <table id="example1" class="table">
                <thead>
                  <tr>
                    <th >No</th>
                    <th >About Us</th>
                    <th class="wd-10p">Status</th>                                                        
                    <th class="wd-10p">Actions</th>                
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0; foreach ($about_us as $key => $value) { $no++; ?>
                    <tr>
                      <td>{{ $no }}</td>
                      <td>{{ $value->about }}</td>                                                         
                      <td><?php if ($value->status == 0) { ?>
                        <span class="badge badge-danger rounded-5">Inactive</span>
                      <?php }elseif($value->status == 1){ ?>
                        <span class="badge badge-success rounded-5">Active</span>
                        <?php } ?></a></td>                                                       
                      <td>
                        <a href="{{ route('admin.web_about_us.show', $value->id) }}"><i class="fa fa-eye"></i></a> 
                        <a href="{{ route('admin.web_about_us.edit', $value->id) }}"><i class="fa fa-edit" style="margin-left: 8px"></i></a> 
                      </td>                  
                    </tr>           
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div><!-- component-section -->
        </div>
      </div>
    </div>
  </div><!-- content-body -->
</div>
@endsection
