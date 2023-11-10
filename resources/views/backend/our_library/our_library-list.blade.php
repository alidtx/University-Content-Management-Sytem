@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Our Library</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Our Library</li>
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
              <a href="{{ route('site-setting.our_library.add') }}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add Our Library</a>
            </div>
          </div>
        </div>

        <div class="card-body">
          <table id="dataTable" class="table table-sm table-bordered table-striped">
            <thead>
              <tr>
                <th width="">#</th>
                <th width="">name</th>

                <th width="">Sort Order</th>
                <th width="">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($ourLibraries as $ourLibrary)
              <tr>
                <td> {{$loop->iteration}}</td>
                <td>{{ $ourLibrary['name'] }}</td>
                <td>{{ $ourLibrary['sort_order'] }}</td>
                <td><a href="{{ route('site-setting.our_library.edit',$ourLibrary->id) }}" class="btn btn-primary btn-flat btn-sm edit" data-type="image" data-id="" data-table="Slider"><i class="fas fa-edit"></i></a> | <a  class="delete btn btn-danger btn-flat btn-sm" data-route = "{{ route('site-setting.our_library.delete') }}" data-id="{{ $ourLibrary->id }}" ><i class="fas fa-trash"></i></a>
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

