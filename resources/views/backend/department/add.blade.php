@extends('backend.layouts.app') @section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ !empty($editData)? 'Update Department' : 'Add Department' }}</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Department</li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-header">
                <a href="{{route('setup.department')}}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i> View Department</a>
            </div>
            <div class="card-body">
                <form action="{{ route('setup.department.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="form-row">

                    <div class="form-group col-sm-4">
                            <label>Faculty</label>
                            <select name="faculty_id" class="form-control ">
                                <option value="">Select Faculty</option>
                                @foreach($faculties as $list)
                                    <option value="{{$list->id}}">{{$list->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-sm-4">
                            <label>Department Name</label>
                            <input id="name" type="text" value="" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Write ofice Name">
                             @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-4">
                            <label>Image</label>
                            <input id="image" type="file" value="" class="form-control @error('image') is-invalid @enderror" name="image" placeholder="Write Faculty Name" > @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>

                        <div class="form-group col-sm-4">
                            <label>Email</label>
                            <input id="email" type="text" value="" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Write a valid email" > @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>

                        <div class="form-group col-sm-4">
                            <label>Location</label>
                            <input id="location" type="text" value="" class="form-control @error('location') is-invalid @enderror" name="location" placeholder="Write a location" > @error('location')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>

                        <div class="form-group col-sm-4">
                            <label>Contact Number</label>
                            <input id="contact_number" type="mobile" value="" class="form-control @error('contact_number') is-invalid @enderror" name="contact_number" placeholder="Write contact number" > @error('contact_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>

                        <div class="form-group col-sm-4">
                            <label>Sort Order</label>
                            <input id="sort_order" type="number" value="" class="form-control @error('sort_order') is-invalid @enderror" name="sort_order" placeholder="Sort Order" >
                             @error('sort_order')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Department Head</label>
                            <select name="department_head" class="form-control select2">
                                <option value="">Select Faculty Members</option>
                                @foreach($members as $list)
                                    <option value="{{$list->id}}">{{$list->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Slider</label>
                            <select name="slider" class="form-control select2">
                                <option value="">Select Slider</option>
                                @foreach($sliders as $list)
                                <option value="{{$list->id}}">{{$list->name}}</option>
                                @endforeach
                            </select>
                            @error('slider')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-4">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="">Select Type</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Short URL</label>
                            <input id="short_url" type="text" value="" class="form-control @error('short_url') is-invalid @enderror" name="short_url" placeholder="Write Short Url" > @error('short_url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>
                    </div>

                    <button class="btn bg-gradient-success btn-flat"><i class="fas fa-save"></i> Save Department</button>
                </form>

            </div>

        </div>
        <!--/. container-fluid -->
    </section>
    <script type="text/javascript">
        $(function() {
            $('#tour_name').on('keyup', function() {
                var Text = $(this).val();
                Text = Text.toLowerCase();
                Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
                $("#tour_slug").val(Text);
            });
        });
    </script>
    @endsection
