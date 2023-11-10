@extends('backend.layouts.app') @section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ !empty($editData) ? 'Update Ongoing Research' : 'Add Ongoing Research' }}
                    </h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Ongoing Research</li>
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
                    <a href="{{ route('frontend-menu.ongoing_research') }}" class="btn btn-info btn-sm"><i
                            class="fas fa-stream"></i> View Ongoing Research</a>
                </div>
                <div class="card-body">
                    <form
                        action="{{ !empty($editData) ? route('frontend-menu.ongoing_research.update', $editData->id) : route('frontend-menu.ongoing_research.store') }}"
                        method="post" enctype="multipart/form-data" autocomplete="off">

                        @csrf
                        <div class="form-row">

                            <div class="form-group col-sm-12">
                                <label>Research Title</label>
                                <input id="title" type="text"
                                    value="{{ !empty($editData->title) ? $editData->title : old('title') }}"
                                    class="form-control @error('title') is-invalid @enderror" name="title"
                                    placeholder="Enter Research Title"> @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-sm-12">
                                <label>PI/CO-PI</label>
                                <textarea id="author" type="text" class="form-control @error('author') is-invalid @enderror" name="author">{{ !empty($editData->author) ? $editData->author : old('author') }}</textarea>
                                @error('author')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-sm-12">
                                <label>Source of Fund</label>
                                <textarea id="source_of_fund" type="text" class="form-control @error('source_of_fund') is-invalid @enderror"
                                    name="source_of_fund">{{ !empty($editData->source_of_fund) ? $editData->source_of_fund : old('source_of_fund') }}</textarea>
                                @error('source_of_fund')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-sm-12">
                                <label>Area of Interest</label>
                                <textarea id="area_of_research" type="text" class="form-control @error('area_of_research') is-invalid @enderror"
                                    name="area_of_research">{{ !empty($editData->area_of_research) ? $editData->area_of_research : old('area_of_research') }}</textarea>
                                @error('area_of_research')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-sm-6">
                                <label>Status</label>
                                <select id="status" required name="status" class="form-control form-control-sm select2">
                                    <option value="">Select Type</option>
                                    <option {{ !empty($editData) && $editData->status == 1 ? 'selected' : '' }}
                                        value="1">Active</option>
                                    <option {{ !empty($editData) && $editData->status == 0 ? 'selected' : '' }}
                                        value="0">Inactive</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Date</label>
                                <input id="date" type="text" required
                                    value="{{ !empty($editData->date) ? date('d-m-Y', strtotime($editData->date)) : old('date') }}"
                                    class="form-control singledatepicker @error('date') is-invalid @enderror" name="date"
                                    placeholder="Date"> @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <button class="btn bg-gradient-success btn-flat"><i class="fas fa-save"></i>
                            {{ !empty($editData) ? 'Update' : 'Save' }}</button>
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
