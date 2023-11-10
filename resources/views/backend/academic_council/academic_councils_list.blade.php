@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Academic Councils Information</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Academic Councils Information</li>
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
          <a href="{{ route('academic-councils.add') }}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add Academic Councils</a>
          <a href="{{ route('academic-councils.list') }}" target="_blank" class="btn btn-sm btn-info float-right"><i class="fas fa-stream"></i> View Academic Councils</a>
        </div>
        
        <div class="card-body">
          <table id="dataTable" class="table table-sm table-bordered table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Post</th>
                {{-- <th>Order</th> --}}
                <th>Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($academic_councils as $academic_council)	
              <tr>		                  	                 
                <td>{{ $loop->iteration }}</td>
                <td>{{ @$academic_council['member']['name'] }}</td>
                <td>{{ @$academic_council['member']['member_designation'] }}</td>
                <td>{{ @$academic_council['designation']['name'] }}</td>
                {{-- <td>{{ $trustee['sort_order'] }}</td> --}}
                <td><img src="{{ asset('public/upload/members/'.@$academic_council['member']['image']) }}" width="80" height="80"></td>
                <td><a href="{{ route('academic-councils.edit',$academic_council->id) }}" class="btn btn-primary btn-flat btn-sm edit" data-type="image" data-id="" data-table="Slider"><i class="fas fa-edit"></i></a> | <a  class="delete btn btn-danger btn-flat btn-sm" data-route = "{{ route('academic-councils.delete') }}" data-id="{{ $academic_council->id }}" ><i class="fas fa-trash"></i></a> 
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

