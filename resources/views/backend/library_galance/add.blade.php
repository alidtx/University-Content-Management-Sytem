@extends('backend.layouts.app') @section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ !empty($editData)? 'Update Library Galance' : 'Add Library Galance' }}</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Library Galance</li>
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
                        <a href="{{route('site-setting.library_galance')}}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i> View Library Galance</a>
                    </div>
            <div class="card-body">
                <form action="{{ route('site-setting.library_galance.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">

                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <label>Title</label>
                            <textarea type="text" class="form-control @error('title') is-invalid @enderror textarea " name="title">{{ !empty($editData->title)? $editData->title : old('title') }}</textarea>
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>


                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label>Backgroud Image<small style="color: brown"> (Max 2 mb)</small></label>
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-3 text-right" style="margin-top: 36px;">
                            <label>Column One : </label>
                        </div>

                        <div class="form-group col-sm-3">
                            <label>Text</label>
                            <input type="text" class="form-control" name="column_1_text">
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Number</label>
                            <input type="number" class="form-control" name="column_1_number">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-3 text-right" style="margin-top: 36px;">
                            <label>Column Two : </label>
                        </div>

                        <div class="form-group col-sm-3">
                            <label>Text</label>
                            <input type="text" class="form-control" name="column_2_text">
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Number</label>
                            <input type="number" class="form-control" name="column_2_number">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-3 text-right" style="margin-top: 36px;">
                            <label>Column Three : </label>
                        </div>

                        <div class="form-group col-sm-3">
                            <label>Text</label>
                            <input type="text" class="form-control" name="column_3_text">
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Number</label>
                            <input type="number" class="form-control" name="column_3_number">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-3 text-right" style="margin-top: 36px;">
                            <label>Column Four : </label>
                        </div>

                        <div class="form-group col-sm-3">
                            <label>Text</label>
                            <input type="text" class="form-control" name="column_4_text">
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Number</label>
                            <input type="number" class="form-control" name="column_4_number">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-3">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="">Select Type</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn bg-gradient-success btn-flat"><i class="fas fa-save"></i> {{ !empty($editData)? 'Update Library Galance' : 'Save Library Galance' }}</button>
                </form>

            </div>

        </div>
        <!--/. container-fluid -->
    </section>
    @endsection
