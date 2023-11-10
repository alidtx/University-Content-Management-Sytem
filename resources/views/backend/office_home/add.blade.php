@extends('backend.layouts.app') @section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Add Office Home</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Office Home</li>
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
                <a href="{{route('manage_office_home')}}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i> View Office Home</a>
            </div>
            <div class="card-body">
                <form action="{{ route('manage_office_home.store') }} " method="post" enctype="multipart/form-data" autocomplete="off">

                    @csrf
                    <div class="form-row">

                    <div class="form-group col-sm-6">
                            <label>Office Name</label>
                            <select name="office" class="form-control" required>
                                <option value="">Select Office Name</option>

                                @foreach($offices as $office)
                                <option value="{{$office->id}}">{{$office->name}}</option>
                                @endforeach

                            </select>
                        </div>


                        <div class="form-group col-sm-3">
                            <label>Type Id</label>
                            <select name="type_id" class="form-control" required>
                                <option value="">Select Type</option>
                                <option value="1">About</option>
                                <option value="2">Contact</option>
                                <option value="3">History</option>

                            </select>
                        </div>


                        <div class="form-group col-sm-12">
                                <label>About </label>
                                <textarea id="description" class="form-control @error('description') is-invalid @enderror textarea" name="description"></textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                         </div>


                    <button class="btn bg-gradient-success btn-flat"><i class="fas fa-save"></i>Save Office</button>
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
