@extends('backend.layouts.app')
@section('content')
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage At a Galance</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">At a Galance</li>
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
              {{-- @if(count($about) == 0)  --}}
	        		<div class="card-header">
                <div class="row">
                  <div class="col-md-2 col-lg-2 col-xl-2">
                    <a href="{{ route('site-setting.at_a_galance.add') }}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add At a Galance</a>
                  </div>
                </div>
	        		</div>
              {{-- @endif --}}
		            <div class="card-body">
		              <table id="dataTable" class="table table-sm table-bordered table-striped">
		                <thead>
		                <tr>
		                  <th>#</th>
                      <th>Title</th>
                      <th>Column One (Text,Number)</th>
                      <th>Column Two (Text,Number)</th>
                      <th>Column Three (Text,Number)</th>
                      <th>Column Four (Text,Number)</th>
                      <th>Image</th>
                      <th width="80">Action</th>
		                </tr>
		                </thead>
		                <tbody>
		                @foreach($at_glances as $p)	
		                <tr>		                  	                 
		                    <td> {{$loop->iteration}}</td>
                        <td>{!!  $p['title']   !!}</td>
                        <td>{{  $p['column_1_text']   }},{{  $p['column_1_number']   }}</td>
                        <td>{{  $p['column_2_text']   }},{{  $p['column_2_number']   }}</td>
                        <td>{{  $p['column_3_text']   }},{{  $p['column_3_number']   }}</td>
                        <td>{{  $p['column_4_text']   }},{{  $p['column_4_number']   }}</td>
                        <td><img src="{{asset('public/upload/at_a_galance/'.$p['image']) }}" height="80"></td>
		                  	<td><a href="{{ route('site-setting.at_a_galance.edit',$p->id) }}" class="btn btn-primary btn-flat btn-sm edit" data-type="image" data-id="" data-table="Slider"><i class="fas fa-edit"></i></a> | <a  class="delete btn btn-danger btn-flat btn-sm" data-route = "{{ route('site-setting.at_a_galance.delete') }}" data-id="{{ $p->id }}" ><i class="fas fa-trash"></i></a>
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

