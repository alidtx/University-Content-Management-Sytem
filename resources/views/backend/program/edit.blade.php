@extends('backend.layouts.app') @section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ !empty($editData)? 'Update Program' : 'Add Program' }}</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Program</li>
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
                <a href="{{route('site-setting.program')}}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i> View Program</a>
            </div>
            <div class="card-body">
                <form action="{{ route('site-setting.program.update',$editData->id) }}" method="post" enctype="multipart/form-data" autocomplete="off">

                    @csrf
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label>Program Category</label>
                            <select name="program_id" class="form-control">
                                <option value="">Select Program Category</option>
                                @foreach($programs as $program)
                                <option {{ $editData->program_id == $program->id ? "selected": "" }} value="{{$program->id}}">{{$program->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Department</label>
                            <select name="department_id" class="form-control">
                                <option value="">Select Department</option>
                                @foreach($departments as $list)
                                    <option {{ $editData->department_id == $list->id ? "selected": "" }} value="{{$list->id}}">{{$list->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Name</label>
                            <input id="name" type="text" value="{{ $editData->name}}" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Name"> @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label>Short Name</label>
                            <input id="short_name" type="text" value="{{ $editData->short_name}}" class="form-control @error('short_name') is-invalid @enderror" name="short_name" placeholder="Enter Short Name"> @error('short_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>

                        <div class="form-group col-sm-4">
                            <label>Sort Order</label>
                            <input id="sort_order" type="number" value="{{ $editData->sort_order}}" class="form-control @error('sort_order') is-invalid @enderror" name="sort_order" placeholder="Write contact number" required> @error('sort_order')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>

                        <div class="form-group col-sm-12">
                            <label>Outline</label>
                            <textarea id="outline" type="text" class="form-control @error('description') is-invalid @enderror textarea " name="outline">{{ !empty($editData->outline)? $editData->outline : old('description') }}</textarea>
                            @error('outline')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>

                        <div class="form-group col-sm-12">
                            <label>Admission criteria</label>
                            <textarea id="admission_criteria" type="text" class="form-control @error('description') is-invalid @enderror textarea " name="admission_criteria">{{ !empty($editData->admission_criteria)? $editData->admission_criteria : old('description') }}</textarea>
                            @error('admission_criteria')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>

                        <div class="form-group col-sm-12">
                            <label>Course List</label>
                            <textarea id="course_list" type="text" class="form-control @error('description') is-invalid @enderror textarea " name="course_list">{{ !empty($editData->course_list)? $editData->course_list : old('description') }}</textarea>
                            @error('course_list')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>

                    </div>
                        <button class="btn bg-gradient-success btn-flat"><i class="fas fa-save"></i> Update</button>
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
