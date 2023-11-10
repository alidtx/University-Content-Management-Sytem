@extends('backend.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <style>
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 20px;
        }
    </style>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ !empty($editData) ? 'Update Academic' : 'Add Academic' }}</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Academic</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('academic.list') }}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i> View
                        Academic</a>
                </div>
                <div class="card-body">
                    <form action="{{ !empty($editData) ? route('academic.update', $editData->id) : route('academic.store') }}"
                        method="post" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="form-row">
                            {{-- <div class="form-group col-sm-12">
                            @if ($editData)
                                <img class="" src="{{ asset('public/upload/members/'.$editData['member']['image']) }}" width="150" height="200">
                                <h6 style="color: #2e848eeb;padding: 0; margin-top: 5px;" class="col-sm-12">{{ $editData['member']['name'] }}</h6>
                            @endif
                        </div> --}}
                            <div class="form-group col-sm-4">
                                <label>Academic Type</label>
                                <select name="type_id" class="form-control form-control-sm select2">
                                    <option value="">Select Type</option>
                                    <option {{ !empty($editData) && $editData->type_id == 1 ? 'selected' : '' }}
                                        value="1">Routine</option>
                                    <option {{ !empty($editData) && $editData->type_id == 2 ? 'selected' : '' }}
                                        value="2">Result</option>
                                    <option {{ !empty($editData) && $editData->type_id == 3 ? 'selected' : '' }}
                                        value="3">Calender</option>
                                    <option {{ !empty($editData) && $editData->type_id == 4 ? 'selected' : '' }}
                                        value="4">Curriculum</option>
                                    <option {{ !empty($editData) && $editData->type_id == 5 ? 'selected' : '' }}
                                            value="5">Prospectus</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="control-label">Select Faculty</label>
                                <select id="faculty_id" @if (!empty($editData))  @endif
                                    class="form-control form-control-sm select2" name="faculty_id">
                                    <option value="" selected>Select Faculty</option>

                                    @foreach ($faculties as $faculty)
                                        <option @if (!empty($editData) && $editData->faculty_id == $faculty->id) selected @endif
                                            value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-sm-4">
                                <label class="control-label">Select Department</label>
                                <select id="department_id" @if (!empty($editData))  @endif
                                    class="form-control form-control-sm select2" name="department_id">
                                    <option value="" selected>Select Department</option>

                                    {{-- @foreach ($departments as $department)
                                <option @if (!empty($editData) && $editData->department_id == $department->id) selected @endif value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach --}}
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="control-label">Select Program</label>
                                <select id="program_id" @if (!empty($editData))  @endif
                                    class="form-control form-control-sm select2" name="program_id">
                                    <option value="" selected>Select Program</option>

                                    {{-- @foreach ($programs as $program)
                                <option @if (!empty($editData) && $editData->program_id == $program->id) selected @endif value="{{ $program->id }}">{{ $program->name }}</option>
                                @endforeach --}}
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Session</label>
                                <input type="text" class="form-control @error('session') is-invalid @enderror"
                                    name="session" autocomplete="off"
                                    value="{{ !empty($editData->session) ? $editData->session : old('session') }}">
                                @error('session')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-sm-4">
                                <label>Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" id="title" autocomplete="off"
                                    value="{{ !empty($editData->title) ? $editData->title : old('title') }}">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-sm-4">
                                <label>Status</label>
                                <select name="status" class="form-control form-control-sm select2">
                                    <option value="">Select Type</option>
                                    <option {{ !empty($editData) && $editData->status == 1 ? 'selected' : '' }}
                                        value="1">Active</option>
                                    <option {{ !empty($editData) && $editData->status == 0 ? 'selected' : '' }}
                                        value="0">Inactive</option>
                                </select>
                            </div>

                            {{-- <div class="form-group col-sm-6">
                            <label class="control-label">Select Post</label>
                            <select id="designation_id" class="form-control form-control-sm select2" name="designation_id">
                                <option value="" disabled selected>Select Post</option>

                                @foreach ($designations as $designation)
                                <option @if (!empty($editData) && $editData->designation_id == $designation->id) selected @endif value="{{ $designation->id }}">{{ $designation->name }}</option>
                                @endforeach
                            </select>
                        </div>  --}}
                            <div class="form-group col-sm-12 increment">

                                @php $attachments = \App\Model\Academic::where('id', !empty($editData->id)? $editData->id : '')->get(); @endphp
                                @if ($attachments->count() != 0)
                                    <label>Existing Files</label>
                                @endif
                                <div class="form-group">
                                    @foreach ($attachments as $attachment)
                                        @php
                                            if ($attachment->file != null) {
                                                $ext = explode('.', $attachment->file);
                                            }
                                        @endphp
                                        @if ($attachment->file != null && $ext[1] == 'pdf')
                                            <a target="_blank"
                                                href="{{ asset('public/upload/academic/' . $attachment['file']) }}"><img
                                                    src="{{ asset('public/frontend/images/pdf_icon.png') }}"
                                                    height="80"></a>
                                        @endif
                                        @if ($attachment->file != null && ($ext[1] == 'doc' || $ext[1] == 'docm' || $ext[1] == 'docx'))
                                            <a target="_blank"
                                                href="{{ asset('public/upload/office_order/' . $attachment['file']) }}"><img
                                                    src="{{ asset('public/frontend/images/doc_icon.png') }}"
                                                    height="80"></a>
                                        @endif

                                        {{-- <a href="{{ route('remove_office_order_attachment',$attachment->id) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a> --}}
                                        {{-- <a class="btn btn-sm btn-danger" type="button"><i class="fas fa-trash-alt"></i></a> --}}
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group col-sm-12">
                                <label>Upload New Attachment<small style="color: brown"> (Max 2 mb)</small></label>
                                <input id="file" type="file" value="" multiple="multiple"
                                    class="form-control @error('file') is-invalid @enderror" name="file"> @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <button class="btn bg-gradient-success btn-flat"><i class="fas fa-save"></i>
                            {{ !empty($editData) ? 'Update Academic' : 'Save Academic' }}</button>
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

        $(function() {
            $('#faculty_id').trigger('change');
        });

        $(document).on('select change', '#faculty_id', function() {
            var faculty_id = $('#faculty_id').val();
            // console.log(faculty_id);
            $.ajax({
                url: "{{ route('faculty_wise_department') }}",
                type: "GET",
                data: {
                    faculty_id: faculty_id
                },
                success: function(data) {
                    console.log(data);
                    if (data != 'fail') {
                        $('#department_id').html('<option value ="">Select Department</option>');
                        // $('#department_id').html('');
                        var selected = "{{ @$editData->department_id }}";
                        $.each(data, function(index, department) {
                            $('#department_id').append('<option value ="' + department.id +
                                '"' + ((department.id == selected) ? ('selected') : '') +
                                '>' + department.name + '</option>');
                        });
                    } else {
                        $('#department_id').append('');
                    }

                    $('#department_id').trigger('change');
                }
            });
        });

        $(document).on('select change', '#department_id', function() {
            var department_id = $('#department_id').val();
            console.log(department_id);
            $.ajax({
                url: "{{ route('department_wise_program') }}",
                type: "GET",
                data: {
                    department_id: department_id
                },
                success: function(data) {
                    // console.log(data);
                    if (data != 'fail') {
                        $('#program_id').html('<option value ="">Select Program</option>');
                        // $('#program_id').html('');
                        var selected = "{{ @$editData->program_id }}";

                        $.each(data, function(index, program) {
                            $('#program_id').append('<option value ="' + program.id + '"' + ((
                                    program.id == selected) ? ('selected') : '') + '>' +
                                program.name + '</option>');
                        });
                    } else {
                        $('#program_id').append('');
                    }
                }
            });
        });






    </script>
@endsection
