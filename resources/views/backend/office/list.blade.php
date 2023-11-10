@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">List of Office</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Office</li>
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
          <a href="{{ route('setup.manage_office.add') }}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add Office</a>
        </div>

        <div class="card-body">
          <table id="dataTable" class="table table-sm table-bordered table-striped">
            <thead>
              <tr>
                <th width="5%">#</th>
                <th width="15%">Office Name</th>
                <th width="15%">Email</th>
                <th width="15%">Contact Number</th>
                <th width="20%">Office Head</th>
                <th width="5%">Order</th>
                <th width="10%">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $d)
              <tr>
                <td> {{$loop->iteration}} </td>
                <td>{{ $d['name'] }}</td>
                <td>{{ $d['email'] }}</td>
                <td>{{ $d['contact_number'] }}</td>
                <td>{{ @$d['member']['name'] }} </td>
                <td>{{ $d['short_order'] }}</td>
                <td><a href="{{ route('setup.manage_office.edit',$d->id) }}" class="btn btn-primary btn-flat btn-sm edit" data-type="image" data-id="" data-table="Slider"><i class="fas fa-edit"></i></a> | <a  class="delete btn btn-danger btn-flat btn-sm" data-route = "{{ route('setup.manage_faculty.delete') }}" data-id="{{ $d->id }}" ><i class="fas fa-trash"></i></a>
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

