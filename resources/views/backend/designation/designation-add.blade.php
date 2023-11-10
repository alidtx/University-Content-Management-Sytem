@extends('backend.layouts.app') @section('content')
<!-- Content Header (Page header) -->
<style>
    .select2-container .select2-selection--single {
        height: 38px;
    }
</style>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Manage Designation</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Designation</li>
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
        <form action="{{!empty($editData)? route('site-setting.designation.update',$editData->id) : route('site-setting.designation.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header row">
                    <a href="{{route('site-setting.designation')}}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i> View Designation</a>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <label>Designation</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" autocomplete="off" value="{{ !empty($editData->name)? $editData->name : old('name') }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-4">
                            <label class="control-label">Purpose</label>
                            <select id="purpose_id" class="form-control form-control-sm @error('name') is-invalid @enderror select2" name="purpose">
                                <option value="" selected>Select Purpose</option>
                                <option @if( !empty($editData) && $editData->purpose == 1) selected @endif value="1">Faculty</option>
                                <option @if( !empty($editData) && $editData->purpose == 2) selected @endif value="2">Office Staff</option>
                                <option @if( !empty($editData) && $editData->purpose == 3) selected @endif value="3">Syndicate</option>
                                <option @if( !empty($editData) && $editData->purpose == 4) selected @endif value="4">Senate</option>
                            </select>
                            @error('purpose')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-4">
                            <label class="control-label">Layer</label>
                            <select id="layer_id" class="form-control form-control-sm @error('name') is-invalid @enderror" name="name select2" name="layer" required>
                                <option value="" selected>Select Layer</option>
                                <option @if( !empty($editData) && $editData->layer == 1) selected @endif value="1">Top</option>
                                <option @if( !empty($editData) && $editData->layer == 2) selected @endif value="2">Middle</option>
                                <option @if( !empty($editData) && $editData->layer == 3) selected @endif value="3">Low</option>
                            </select>

                        </div>

                        <div class="form-group col-sm-4">
                            <label>Sort Order</label>
                            <input type="text" class="form-control " required name="sort_order" autocomplete="off" value="{{ !empty($editData->sort_order)? $editData->sort_order : old('sort_order') }}">

                        </div>
                    </div>

                    <button class="btn bg-gradient-success btn-flat btn-sm rounded"><i class="fas fa-save"></i> {{ !empty($editData)? 'Update' : 'Save' }}</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
