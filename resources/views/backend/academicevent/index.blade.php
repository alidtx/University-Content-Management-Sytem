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
            <a href="{{ route('academic-routine.event.create') }}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add Acaedmic Events</a>
            <a href="{{ route('academic-routine.event.showCalendar') }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i> Show Calender</a>
          </div>
          <div class="card-body">
            <table id="dataTable" class="table table-sm table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Department Name</th>
                  <th>Acaedmic Event Title</th>
                  <th>Acaedmic Event Type</th>
                  
                  <th>Field Color</th>
                  <th>Start Day</th>
                  <th>End Day</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($events as $item)	
                <tr>		                  	                 
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->department->name }}</td>
                  <td>{{$item->title}}</td>
                  <td>
                    {{ $item->type == 1 ? 'Weekend' : ''}}
                    {{ $item->type == 2 ? 'Holiday' : ''}}
                    {{ $item->type == 3 ? 'Exam' : ''}}
                    {{ $item->type == 4 ? 'University Program' : ''}}
                  </td>

                  <td>{{ $item->color }}</td>
                  <td>{{$item->start_date}}</td>
                  <td>{{$item->end_date}}</td>
                  <td>{{$item->status == 1 ? 'Active' : 'Inactive'}}</td>
                  <td>
                    <a href="{{ route('academic-routine.event.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{ route('academic-routine.event.show', $item->id) }}" class="btn btn-success btn-sm">show</a>
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