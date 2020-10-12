@extends('layouts.app')

@section('content')
<div class="content">
  @include('templates.content_header')
  <div class="content-header">
    <div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>      
          <li class="breadcrumb-item active" aria-current="page">Home List</li>
        </ol>
      </nav>
      <h4 class="content-title content-title-xs">Home List</h4>
    </div>
  </div><!-- content-header -->
  <div class="content-body">
    <div class="component no-code">
      <div class="card rounded-5">
        <div class="card-body">       
          <div class="component">
            <a href="{{ route('admin.web_home.create') }}">
              <button class="btn btn-primary rounded-5"><i data-feather="plus"></i> Add New</button>
            </a><br><br>
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
                    <th >Text</th>
                    <th >Image</th>                                                        
                    <th >Status</th>                                                        
                    <th >Actions</th>                
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0; foreach ($web_home as $key => $value) { $no++; ?>
                    <tr>
                      <td>{{ $no }}</td>
                      <td>{{ $value->text }}</td>                                                         
                      <td><img src="{{asset('assets/img')}}/{{$value->image}}"></td>
                      <td><?php if ($value->status == 0) { ?>
                        <span class="badge badge-danger rounded-5">Inactive</span>
                      <?php }elseif($value->status == 1){ ?>
                        <span class="badge badge-success rounded-5">Active</span>
                        <?php } ?></a></td>                                                       
                      <td>
                        <a href="{{ route('admin.web_home.show', $value->id) }}"><i class="fa fa-eye"></i></a> 
                        <a href="{{ route('admin.web_home.edit', $value->id) }}"><i class="fa fa-edit" style="margin-left: 8px"></i></a> 
                        <a href="#modal1{{$value->id}}" data-toggle="modal"><i class="fa fa-trash" style="margin-left: 8px"></i></a>
                      </td>                  
                    </tr>     
                    <div class="modal fade" id="modal1{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h6 class="modal-title" id="exampleModalLabel">Delete Confirm</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true"><i data-feather="x"></i></span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p class="mg-b-0">Are you sure want to delete this record? </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary rounded-5" data-dismiss="modal">Cancel</button>
                            <a href="{{ route('admin.web_home.destroy', $value->id) }}"><button type="button" class="btn btn-dark rounded-5">Delete</button></a>
                          </div>
                        </div>
                      </div>
                    </div>             
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
