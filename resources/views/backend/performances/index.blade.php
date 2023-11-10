@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Annual Performance</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Performance</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
     <div class="col-lg-12">
      <div class="card"> 
        
        <div class="card-header">
          <a href="{{ route('annual-performance.performance.create') }}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add Performance</a>
          <a href="{{ route('annual-performance.report.list') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Performance Report</a>
        </div>
        
        <div class="card-body">
          <table id="dataTable" class="table table-sm table-bordered table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Performance Icon</th>
                <th>Performance Title</th>
                <th>Sub Title</th>
                <th>Short order</th>
                <th>Status</th>
                <th width="90">Action</th>
              </tr>
            </thead>
            <tbody>
                @if(count($performances)>0)
                  @foreach($performances as $i => $myper)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                      <img src="{{ asset('public/upload/performance/'.$myper->image) }}" alt="" class="img-fluid" style="max-height:80px;">
                    </td>
                    <td>{{ $myper->title }}</td>
                    <td>
                      @foreach($myper->children as $child)
                        <p>{{ $child->title }} <a class="btn btn-sm btn-info mx-1" href="{{ route('annual-performance.performance.edit', $child->id) }}">Edit</a></p>
                      @endforeach
                    </td>
                    <td>{{ $myper->sort_order }}</td>
                    <td>{{ $myper->status == 1 ? 'Active' : 'Inactive' }}</td>
                    <td>
                      <div class="row">
                      <a class="btn btn-sm btn-info mx-1" href="{{ route('annual-performance.performance.edit', $myper->id) }}">Edit</a>
                      <a class="btn btn-sm btn-danger" href="{{ route('annual-performance.performance.destroy', $myper->id) }}">Delete</a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                @else
                @endif          
            </tbody>                
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
<!--/. container-fluid -->
</section>
@endsection