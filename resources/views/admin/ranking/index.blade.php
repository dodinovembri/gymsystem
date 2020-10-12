@extends('layouts.app')

@section('content')
<div class="content">
  @include('templates.content_header')
  <div class="content-header">
    <div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>      
          <li class="breadcrumb-item active" aria-current="page">Ranking List</li>
        </ol>
      </nav>
      <h4 class="content-title content-title-xs">Ranking List</h4>
    </div>
  </div><!-- content-header -->
  <div class="content-body">
    <div class="component no-code">
      <div class="card rounded-5">
        <div class="card-body">       
          <div class="component">   
            <div class="table table-responsive">
              <table id="example11" class="table">
                <thead>
                  <tr>
                    <th class="wd-10p">Ranking Value</th>                                                        
                    <th class="wd-10p">Code</th>
                    <th class="wd-20p">Name</th>                                                        
                    <th class="wd-20p">Description</th>                                                        
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0; for ($i=0; $i < $jumlah_alternative; $i++) { ?>
                    <tr>
                      <td>{{ $ranking_sum[$i] }}</td>                                                                              
                      <td>{{ $alt_id[$i] }}</td>                      
                      <td>{{ $gym_alt[$i] }}</td>                                                         
                      <td>{{ $description[$i] }}</td>                                                         
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
