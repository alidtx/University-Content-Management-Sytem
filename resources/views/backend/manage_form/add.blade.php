@extends('backend.layouts.app') @section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add Form</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Form</li>
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
                    <a href="{{ route('manage_form') }}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i>
                        View Form</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('manage_form.store') }} " method="post" enctype="multipart/form-data"
                        autocomplete="off">

                        @csrf


                        <div class="form-row">
                            <div class="form-group col-md-4">

                                <label for="Title">@lang('Title') {{-- <span class="text-red">*</span> --}}</label>
                                <input type="text" name="title" placeholder="Title" class="form-control">

                                @error('title')
                                    {{-- {{ $message }} --}}
                                    <span class="invalid-feedback" role="alert">
                                        {{-- <strong>{{ $message }} </strong> --}}
                                    </span>
                                @enderror

                            </div>

                            <div class="form-group col-md-4">
                                <label for="pdf_file">@lang('PDF File') {{-- <span class="text-red">*</span> --}}</label>
                                <input type="file" name="pdf_file" placeholder="PDF File" class="form-control">
                                @error('pdf_file')
                                    <br>
                                    <span class="alert alert-danger" role="alert">
                                        <strong>{{ $message }} </strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="publish Date">@lang('Publish Date') {{-- <span class="text-red">*</span> --}}</label>
                                <input type="date" name="publish_date" placeholder="publish Date" class="form-control">
                                @error('publish_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label class="control-label">Status</label>
                                <select id="status" class="form-control form-control-sm select2" name="status">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <button class="btn bg-gradient-success btn-flat"><i class="fas fa-save"></i> Save Form</button>
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
