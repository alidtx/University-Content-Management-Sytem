@extends('backend.layouts.app') @section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Add Program Category</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Program Category</li>

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
                <a href="{{route('setup.manage_program')}}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i> View Program Category</a>
            </div>
            <div class="card-body">
                <form action="{{ route('setup.manage_program.store') }} " method="post" enctype="multipart/form-data" autocomplete="off">

                    @csrf
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <label>Program Name</label>
                            <input id="name" type="text" value="" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Write Program Name" required> @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>

                        <div class="form-group col-sm-3">
                            <label>Status</label>
                            <select name="status" class="form-control" required>
                                <option value="">Select Type</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Select grid row</label>
                            <select name="grid" id="" class="form-control">
                                <option value="">Select Grid</option>
                                  <option value="1">Grid Row 1</option>
                                  {{-- <option value="2">Grid Row 2</option> --}}
                                  <option value="3">Grid Row 3</option>
                            </select>
                            @error('general_guideline')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>

                        <div class="form-group col-sm-12">
                            <label>Description</label>
                            <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror textarea " name="description">{{ !empty($editData->description)? $editData->description : old('description') }}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>

                        <div class="form-group col-sm-12">
                            <label>General Guideline</label>
                            <textarea id="general_guideline" type="text" class="form-control @error('description') is-invalid @enderror textarea " name="general_guideline">{{ !empty($editData->description)? $editData->description : old('description') }}</textarea>
                            @error('general_guideline')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>
                    </div>
                    <button class="btn bg-gradient-success btn-flat"><i class="fas fa-save"></i> Save</button>
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
