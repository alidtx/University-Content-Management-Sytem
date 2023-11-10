@extends('backend.layouts.app') @section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Add PopUp Notification</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">PopUp Notification</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-header">
                <a href="{{url('backend/setup/notification')}}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i> PopUp Notification</a>
            </div>
            <div class="card-body">
                <form action="{{url('backend/setup/notification_process')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <label>Name</label>
                            <input type="text" value="{{$notification}}" class="form-control filer_input_single @error('notification') is-invalid @enderror"  name="notification">
                            @error('notification')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Use For</label>
                            <select id="category" class="form-control form-control-sm @error('category') is-invalid @enderror " name="category">
                                <option value="" selected>Select Pages</option>
                                <option @if( !empty($category) && $category== 1) selected @endif value="1">Home page</option>
                                <option @if( !empty($category) && $category== 2) selected @endif value="2">Faculty page</option>
                                <option @if( !empty($category) && $category== 3) selected @endif value="3">Hall page</option>
                                <option @if( !empty($category) && $category== 4) selected @endif value="4">Department page</option>
                                <option @if( !empty($category) && $category== 5) selected @endif value="5">Program page</option>
                            </select>
                            @error('notification')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Description</label>
                            <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror textarea " name="description">{{$description}}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>
                    </div>
                     <input type="hidden" name="id" value="{{$id}}">
                    <button class="btn bg-gradient-success btn-flat"><i class="fas fa-save"></i> Save</button>
                </form>
            </div>
        </div>

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
