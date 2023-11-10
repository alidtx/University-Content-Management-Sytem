@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Syndicate / Academic Council Member</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Syndicate / Academic Council Member</li>
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
          <a href="{{ route('syndicate_member.add') }}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add Syndicate / Academic Council Member</a>
          <a href="{{ route('syndicate_member.list') }}" target="_blank" class="btn btn-sm btn-info float-right"><i class="fas fa-stream"></i> View Syndicate / Academic Council Member</a>
        </div>

        <div class="card-body">
          <table id="dataTable" class="table table-sm table-bordered table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Type</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Post</th>
                {{-- <th>Order</th> --}}
                <th>Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($syndicate_members as $syndicate_member)
              <tr>
                <td>{{ $loop->iteration }}</td>
                @if($syndicate_member->type_id==1)
                  <td>Syndicate Member</td>
                @elseif ($syndicate_member->type_id==2)
                  <td>Academic Council</td>
                @else
                <td></td>
                  @endif
                <td>{{ @$syndicate_member['member']['name'] }}</td>
                <td>{{ $syndicate_member['committee_designation'] ? $syndicate_member['committee_designation'] : @$syndicate_member['member']['member_designation'] }}</td>
                <td>{{ @$syndicate_member['designation']['name'] }}</td>
                {{-- <td>{{ $trustee['sort_order'] }}</td> --}}
                <td><img src="{{ asset('public/upload/members/'.@$syndicate_member['member']['image']) }}" onerror="this.onerror=null;this.src='{{ asset('public/frontend/images/about/user-dummy.jpeg') }}';" width="80" height="80"></td>
                <td><a href="{{ route('syndicate_member.edit',@$syndicate_member->id) }}" class="btn btn-primary btn-flat btn-sm edit" data-type="image" data-id="" data-table="Slider"><i class="fas fa-edit"></i></a> | <a  class="delete btn btn-danger btn-flat btn-sm" data-route = "{{ route('syndicate_member.delete') }}" data-id="{{ $syndicate_member->id }}" ><i class="fas fa-trash"></i></a>
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

