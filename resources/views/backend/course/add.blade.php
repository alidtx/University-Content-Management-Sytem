@extends('backend.layouts.app') @section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ !empty($editData)? 'Update Course' : 'Add Course' }}</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Course</li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<style>
    .select2-container .select2-selection--single {
        height: 36px;
    }
</style>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-header">
                <a href="{{route('site-setting.course')}}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i> View Course</a>
            </div>
            <div class="card-body">
                <form action="{{ !empty($editData)? route('site-setting.course.update',$editData->id) : route('site-setting.course.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">

                    @csrf
                    <div class="form-row">
                        @php
                            $programs = \App\Model\ProgramInfo::all();
                        @endphp
                        <div class="form-group col-sm-12">
                            <label>Select Program</label>
                            <select id="program_info_id" class="form-control form-control-sm select2" name="program_info_id" required>
                                <option value="" disabled selected>Select Program</option>
                                @foreach($programs as $program)
                                    <option @if( !empty($editData) && $editData->program_info_id == $program->id) selected @endif value="{{ $program->id }}">{{ $program->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Name</label>
                            <input id="name" type="text" value="{{ !empty($editData->name)? $editData->name : old('name') }}" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Name"> @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Short Name</label>
                            <input id="short_name" type="text" value="{{ !empty($editData->short_name)? $editData->short_name : old('short_name') }}" class="form-control @error('short_name') is-invalid @enderror" name="short_name" placeholder="Enter Short Name"> @error('short_name')

                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }} </strong>
                            </span> @enderror
                        </div>

                    </div>
                        <button class="btn bg-gradient-success btn-flat"><i class="fas fa-save"></i> {{ !empty($editData)? 'Update' : 'Save' }}</button>
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
