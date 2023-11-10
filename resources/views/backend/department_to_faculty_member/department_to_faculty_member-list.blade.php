@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Member to Department Information</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Member to Department Information</li>
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
          <a href="{{ route('department_to_members.add') }}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add Member to Department</a>
          {{-- <a href="{{ route('department_to_members') }}" target="_blank" class="btn btn-sm btn-info float-right"><i class="fas fa-stream"></i> View Member to Department</a> --}}
        </div>
        
        <div class="card-body">
          <table id="dataTable" class="table table-sm table-bordered table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Member Name</th>
                <th>Designation</th>
                <th>Faculty</th>
                <th>Department</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($dept_to_members as $dept_to_member)	
              <tr>		                  	                 
                <td>{{ $loop->iteration }}</td>
                <td>{{ @$dept_to_member['member']['name'] }}</td>
                <td>{{ @$dept_to_member['member']['member_designation'] }}</td>
                <td>{{ @$dept_to_member['faculty']['name'] }}</td>
                <td>{{ @$dept_to_member['department']['name'] }}</td>
                <td><a href="{{ route('department_to_members.edit',$dept_to_member->id) }}" class="btn btn-primary btn-flat btn-sm edit" data-type="image" data-id="" data-table="Slider"><i class="fas fa-edit"></i></a> | <a  class="delete btn btn-danger btn-flat btn-sm" data-route = "{{ route('department_to_members.delete') }}" data-id="{{ $dept_to_member->id }}" ><i class="fas fa-trash"></i></a> 
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

