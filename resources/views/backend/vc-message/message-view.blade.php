@extends('backend.layouts.app')

@section('content')

<style>
  .des{
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 20ch;
  }
</style>
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Vc Manage Message</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Message</li>
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
              {{-- @if(count($director) == 0) --}}
	        		<div class="card-header">
	        			<a href="{{ route('site-setting.vc_message.add') }}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add Vc Message</a>
	        		</div>
              {{-- @endif --}}
		            <div class="card-body">
		              <table id="dataTable" class="table table-sm table-bordered table-striped">
		                <thead>
		                <tr>
		                  <th>#</th>
		                  <th>Title First Part</th>
		                  <th>Title Second Part</th>
                      {{-- <th>Short Description</th>
                      <th>Long Description</th> --}}
                      <th width="80">Action</th>
		                </tr>
		                </thead>
                        <tbody>
                            @foreach($director as $item)
                            <tr>
                              <td> {{$loop->iteration}}</td>
                              <td>{{$item->title_first_part }} </td>
                              <td>{{$item->title_second_part }} </td>
                              {{-- <td><a href="{{ route('site-setting.vc_message.edit',$item->id) }}" class="btn btn-primary btn-flat btn-sm edit" data-type="image" data-id="" data-table="Slider"><i class="fas fa-edit"></i></a> | <a  class="delete btn btn-danger btn-flat btn-sm" data-route = "{{ route('site-setting.vc_message.delete') }}" data-id="{{ $item->id }}" ><i class="fas fa-trash"></i></a>
                              </td> --}}
                              <td><a href="{{ route('site-setting.vc_message.edit',$item->id) }}" class="btn btn-primary btn-flat btn-sm edit" data-type="image" data-id="" data-table="Slider"><i class="fas fa-edit"></i></a> | <a  class="delete btn btn-danger btn-flat btn-sm" data-route = "{{ route('site-setting.vc_message.delete') }}" data-id="{{ $item->id }}" ><i class="fas fa-trash"></i></a>
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

