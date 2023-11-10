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
            <h1 class="m-0 text-dark">Manage Message</h1>
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
              @if (in_array(1, $roles) || in_array(2, $roles))

	        		<div class="card-header">
	        			<a href="{{ route('site-setting.message.add') }}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add Message</a>
	        		</div>
              @endif
		            <div class="card-body">
		              <table id="dataTable" class="table table-sm table-bordered table-striped">
		                <thead>
		                <tr>
		                  <th>#</th>
		                  <th>Type</th>
		                  <th>Category</th>
		                  <th>Head</th>
		                  <th>Title First Part</th>
		                  <th>Title Second Part</th>
                      <th>Short Description</th>
                      <th>Long Description</th>
                      <th width="80">Action</th>
		                </tr>
		                </thead>
		                <tbody>
		                @foreach($messages as $message)
                      <tr>
                        <td> {{$loop->iteration}}</td>
                        @if($message['type_id'] == 1)
                        <td>Faculty</td>
                        <td>{{ $message['category1']['name'] }}</td>
                        @elseif($message['type_id'] == 2)
                        <td>Department</td>
                        <td>{{ $message['category2']['name'] }}</td>
                        @elseif($message['type_id'] == 3)
                        <td>Office</td>
                        <td>{{ $message['category3']['name'] }}</td>
                        @elseif($message['type_id'] == 4)
                        <td>Hall</td>
                        <td>{{ $message['category4']['name'] }}</td>
                        @else
                        <td>-</td>
                        @endif

                        {{-- <td>{{ $message['category']['name'] }}</td> --}}
                        <td>{{ $message['member']['name'] }}</td>
                        <td>{{ $message['title_first_part'] }}</td>
                        <td>{{ $message['title_second_part'] }}</td>

                          <td class="des">{!!  $message['short_description']   !!}</td>
                          <td class="des" >{!!  $message['long_description']   !!}</td>

                          <td><a href="{{ route('site-setting.message.edit',$message->id) }}" class="btn btn-primary btn-flat btn-sm edit" data-type="image" data-id="" data-table="Slider"><i class="fas fa-edit"></i></a> | <a  class="delete btn btn-danger btn-flat btn-sm" data-route = "{{ route('site-setting.message.delete') }}" data-id="{{ $message->id }}" ><i class="fas fa-trash"></i></a>
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

