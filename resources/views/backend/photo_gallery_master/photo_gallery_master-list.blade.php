@extends('backend.layouts.app')
@section('content')
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Photo Gallery Master</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Photo Gallery </li>
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
	        			<a href="{{ route('top-menu.photo_gallery_master.add') }}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add Photo Gallery</a>
	        		</div>


		            <div class="card-body">
		              <table id="dataTable" class="table table-sm table-bordered table-striped ">
		                <thead>
		                <tr>
		                    <th width="5">#</th>
                            <th width="40">Name</th>
                            <th width="40">Type</th>
                            <th width="40">Category</th>
                            <th width="40">Image</th>
                            <th width="15">Action</th>
		                </tr>
		                </thead>
		                <tbody>
         @foreach ($photoGalleriesList as $list )
                    <tr>
                     <td>{{ $loop->iteration }}</td>
                     <td>{{$list->name}}</td>
                     {{-- @dd($list) --}}
                     @if($list->type == 1)
                     <td>Faculty</td>
                     <td>{{$list->category1->name}}</td>
                     @elseif($list->type == 2)
                     <td>Department</td>
                     <td>{{$list->category2->name}}</td>
                     @elseif($list->type == 3)
                     <td>Office</td>
                     <td>{{$list->category3->name}}</td>
                     @elseif($list->type == 4)
                     <td>Hall</td>
                     <td>{{$list->category4->name}}</td>
                     @endif

                     <td><a href="{{ route('top-menu.photo_gallery',$list->id) }}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add Photo</a></td>
                     <td>
                        <a href="{{ route('top-menu.photo_gallery_master.edit',$list->id) }}" class="btn btn-primary btn-flat btn-sm" data-type="image"><i class="fas fa-edit"></i></a> | <a class="delete btn btn-danger btn-flat btn-sm" data-route="{{ route('top-menu.photo_gallery_master.delete') }}" data-id="{{ $list->id }}" ><i class="fas fa-trash"></i></a>
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

