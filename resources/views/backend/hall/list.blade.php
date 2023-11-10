@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">List of Hall</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Hall</li>
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
          <a href="{{ route('manage_hall.add') }}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add Hall</a>
        </div>

        <div class="card-body">
          <table id="dataTable" class="table table-sm table-bordered table-striped">
            <thead>
              <tr>
                <th width="5%">#</th>
                <th width="20%">Hall Name</th>
                <th width="20%">Hall Provost</th>
                <th width="5%">Order</th>
                <th width="10%">Add Details</th>
                <th width="10%">Add Member</th>
                <th width="5%">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $d)
              <tr>
                <td> {{$loop->iteration}}</td>
                <td>{{ $d['name'] }}</td>
                <td>{{ $d['member']['name'] }}</td>
                <td>{{ $d['sort_oder'] }}</td>
                <td> <a href="{{ route('manage_hall_home',$d->id) }}" class="btn btn-info btn-sm"><i class="fas fa-plus"> View Details</a></td>
                <td> <a href="{{ route('view_hall_member',$d->id) }}" class="btn btn-info btn-sm"><i class="fas fa-plus"> View</a></td>
                <td>
                   <a href="{{ route('manage_hall.edit',$d->id) }} " class="btn btn-primary btn-flat btn-sm edit" data-type="image" data-id="" data-table="Slider"><i class="fas fa-edit"></i></a> |
                   <a  class="delete btn btn-danger btn-flat btn-sm" data-route = "{{ route('manage_hall.delete') }}" data-id="{{ $d->id }}" ><i class="fas fa-trash"></i></a> |
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

