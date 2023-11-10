@extends('backend.layouts.app') @section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Update Hall home</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Hall Home</li>
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
                <a href="{{route('manage_hall_home', $hall)}}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i> View
                    Hall</a>
            </div>
            <div class="card-body">
                <form action="{{ route('manage_hall_home.update', $editData->id) }} " method="post"
                    enctype="multipart/form-data" autocomplete="off">

                    @csrf
                    <div class="form-row">
                        <input type="hidden" name="hall" value="{{ $hall }}">

                        {{-- <div class="form-group col-sm-6">
                            <label>Hall Name</label>
                            <select name="hall_id" class="form-control">
                                <option value="">Select Hall Name</option>

                                @foreach($halls as $hall)
                                <option value="{{$hall->id}}" {{ $editData->hall_id== $hall->id ? "selected" : ""
                                    }}>{{$hall->name}}</option>
                                @endforeach
                            </select>
                        </div> --}}

                        <div class="form-group col-sm-6">
                            <label>Type </label>
                            <select name="type_id" class="form-control select2">
                                <option value="">Select Type</option>
                                <option {{ $editData->type_id== 1 ? "selected" : "" }} value="1">About</option>
                                <option {{ $editData->type_id== 2 ? "selected" : "" }} value="2">Contact</option>
                                <option {{ $editData->type_id== 3 ? "selected" : "" }} value="3">History</option>

                            </select>
                        </div>

                        <div class="form-group col-sm-12">
                            <label>About </label>
                            <textarea id="description"
                                class="form-control @error('description') is-invalid @enderror textarea"
                                name="description">{{$editData->description}}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <button class="btn bg-gradient-success btn-flat"><i class="fas fa-save"></i> Update Hall
                        Home</button>
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
