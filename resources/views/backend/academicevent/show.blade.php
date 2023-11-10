@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Academic Calender Events</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Academic Calender</li>
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
            <a href="{{ route('academic-routine.event.list') }}" class="btn btn-sm btn-info"><i class="fas fa-arrow-left"></i> Back</a>
            
          </div>
          <div class="card-body">
            <table id="dataTable" class="table table-sm table-bordered table-striped">
              <tr>
                <th width="350px">Department Name</th>
                <td>{{ $data->department->name }}</td>
              </tr>
              <tr>
                <th>Acaedmic Program Title</th>
                <td>{{ $data->title }}</td>
              </tr>
              <tr>
                <th>Acaedmic Program Type</th>
                <td>
                    {{ $data->type == 1 ? 'Weekend' : ''}}
                    {{ $data->type == 2 ? 'Holiday' : ''}}
                    {{ $data->type == 3 ? 'Exam' : ''}}
                    {{ $data->type == 4 ? 'University Program' : ''}}
                </td>
              </tr>
              <tr>  
                <th>Field Color</th>
                <td>{{ $data->color }}</td>
              </tr>
              <tr>
                  <th>Start Day</th>
                  <td>{{ mydate($data->start_date) }}</td>
              </tr>
              <tr>
                  <th>End Day</th>
                  <td>{{ mydate($data->end_date) }}</td>
              </tr>
              <tr>
                  <th>Status</th>
                  <td>{{$data->status == 1 ? 'Active' : 'Inactive'}}</td>
              </tr>
              <tr>
                  <th>Description</th>
                  <td>{{ $data->description }}</td>
              </tr>               
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection