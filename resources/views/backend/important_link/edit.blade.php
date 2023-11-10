@extends('backend.layouts.app') @section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Update Office</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Important Link</li>
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
                <a href="{{route('setup.manage_important_link')}}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i> View Offices</a>
            </div>
            <div class="card-body">
                <form action="{{ route('setup.manage_important_link.update', $editData->id) }} " method="post" enctype="multipart/form-data" autocomplete="off">
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <label>Name</label>
                            <input id="name" value="{{$editData->name}}" type="text" value="" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Write ofice Name" > @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>

                        <div class="form-group col-sm-4">
                            <label>URL</label>
                            <input id="url" value="{{$editData->name}}" type="text" value="" class="form-control @error('url') is-invalid @enderror" name="url" placeholder="Write  Url" > @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>

                    </div>


                    <button class="btn bg-gradient-success btn-sm"><i class="fas fa-save"></i> Update Office</button>
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
    <script type="text/javascript">
        $('#additional_charge').click(function(){
            if($(this).is(':checked')){
                $('#additional_designation_div').show();
            } else {
                $('#additional_designation_div').hide();
            }
        });
    </script>
    @endsection
