@extends('backend.layouts.app') @section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Update Faculty home</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Faculty Home</li>
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
                <a href="{{route('manage_faculty_home')}}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i> View Faculty Homes</a>
            </div>
            <div class="card-body">
                <form action="{{ route('manage_faculty_home.update', $editData->id) }} " method="post" enctype="multipart/form-data" autocomplete="off">

                    @csrf
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label>Faculty Name</label>
                            <select name="faculty_id" class="form-control">
                                <option value="">Select Faculty Name</option>
                                @foreach ($faculties as $faculty )
                                    <option value="{{@$faculty->id}}" {{ $editData->faculty_id== $faculty->id ? "selected" : "" }}>{{@$faculty->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-sm-6">
                            <label>Type</label>
                            <select id="type_id" class="form-control" name="type_id">
                                <option value="" selected>Select Type</option>
                                <option @if( !empty($editData) && $editData->type_id == 1) selected @endif value="1">History</option>
                                <option @if( !empty($editData) && $editData->type_id == 2) selected @endif value="2">Mission & Vision</option>
                                <option @if( !empty($editData) && $editData->type_id == 3) selected @endif value="3">Contact</option>
                            </select>
                        </div>

                        <div class="form-group col-sm-12">
                            <label>Description </label>
                            <textarea id="description" class="form-control @error('description') is-invalid @enderror textarea" name="description">{{ $editData->description}}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <button class="btn bg-gradient-success btn-flat"><i class="fas fa-save"></i> Update Faculty Home</button>
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
