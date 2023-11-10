@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Completed Research</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Completed Research</li>
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
          <div class="row">
            <div class="col-md-3 col-lg-3 col-xl-3">
              <a href="{{ route('frontend-menu.completed_research.add') }}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add Completed Research</a>
            </div>
            <div class="col-md-9 col-lg-9 col-xl-9">
            </div>
          </div>
        </div>

        <div class="card-body">
          <table id="dataTable" class="table table-sm table-bordered table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Author</th>
                <th>Journal Name</th>
                <th>Publish Status</th>
                <th>Date</th>
                <th>Year</th>
                <th>Journal Index</th>
                <th>Journal Category</th>
                <th>URL</th>
                <th>Image</th>
                <th>File</th>
                <th width="10%">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($completedResearches as $completedResearch)
              <tr>
                <td> {{$loop->iteration}}</td>
                <td>{{ @$completedResearch['title'] }}</td>
                <td>{{ @$completedResearch['author'] }}</td>
                <td>{{ @$completedResearch['journal_name'] }}</td>
                <td>{{ @$completedResearch['publish_status'] }}</td>
                <td>{{ date('d-m-Y',strtotime(@$completedResearch['date'])) }}</td>
                <td>{{ @$completedResearch['year'] }}</td>
                <td>{{ @$completedResearch['journal_index'] }}</td>
                <td>{{ @$completedResearch['journal_category'] }}</td>
                <td>{{ @$completedResearch['url'] }}</td>
                {{-- <td>{{ @$completedResearch['image'] }}</td> --}}
                {{-- <td>{{ @$completedResearch['file'] }}</td> --}}
                <td>
                    <img src="{{asset('public/upload/journal/'.$completedResearch['image']) }}" width="80" height="80" onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/dummy.png') }}';" >
                </td>
                <td>
                    <a class="btn btn-sm btn-primary" href="{{ asset('public/upload/journal/' . @$completedResearch->pdf) }}"
                        download="">Download</a>
                </td>
                <td><a href="{{ route('frontend-menu.completed_research.edit',@$completedResearch->id) }}" class="btn btn-primary btn-flat btn-sm edit" data-type="image" data-id="" data-table="Slider"><i class="fas fa-edit"></i></a> | <a  class="delete btn btn-danger btn-flat btn-sm" data-route = "{{ route('frontend-menu.completed_research.delete') }}" data-id="{{ @$completedResearch->id }}" ><i class="fas fa-trash"></i></a>
                </td>
              </tr>
              @endforeach
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

