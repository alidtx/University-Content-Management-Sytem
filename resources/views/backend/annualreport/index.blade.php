@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Annual Performance Reports</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Performance Reports</li>
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
          <a href="{{ route('annual-performance.performance.list') }}" class="btn btn-sm btn-info">  Performance List</a>
          <a href="{{ route('annual-performance.report.create') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i>Add Performance Report</a>
        </div>
        
        <div class="card-body">
          <table id="dataTable" class="table table-sm table-bordered table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Performance Main Title</th>
                <th>Performance Title</th>
                <th>Report Title</th>
                <th>Publish Date</th>
                <th width="90">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($reports as $i => $myreport)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $myreport->performance->parent->title }}</td>
                  <td>{{ $myreport->performance->title }}</td>
                  <td>{{ $myreport->title }}</td>
                  <td>{{ $myreport->date }}</td>
                  <td>
                    <a href="{{ route('annual-performance.report.edit', $myreport->id) }}" class="btn btn-info btn-sm">Edit</a>
                    <a href="{{ route('annual-performance.report.destroy', $myreport->id) }}" class="btn btn-danger btn-sm">Delete</a>
                  </td>
                </tr>
                @endforeach
            </tbody>                
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

</section>
@endsection