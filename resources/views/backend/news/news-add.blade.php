
@extends('backend.layouts.app')

<style>

    .radio_container {
        display: flex;
        justify-content: space-around;
        align-items: center;
        background-color: #cecece;
        width: 420px;
        border-radius: 9999px;
        box-shadow: inset 0.5px 0.5px 2px 0 rgba(0, 0, 0, 0.15);
    }

    input[type="radio"] {
        appearance: none;
        display: none;
    }

    .radio_container label {
        font-size: .875rem;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: inherit;
        width: 100px;
        text-align: center;
        border-radius: 9999px;
        overflow: hidden;
        transition: linear 0.3s;
        margin-top: 8px;
    }

    input[type="radio"]:checked + label {
        background-color: #1e90ff;
        color: #f1f3f5;
        font-weight: 900;
        transition: 0.3s;
    }
    </style>

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ !empty($editData)? 'Update News | Event | Notice | Press Release' : 'Add News | Event | Notice | Press Release' }}</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">News | Event | Notice | Press Release</li>
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

        <form id="newsForm" action="{{ !empty($editData)? route('site-setting.news.update',$editData->id) : route('site-setting.news.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="card">
                <div class="card-header row">
                    <div class="col-md-6">
                        <div class="container">
                            <div class="radio_container" id="type" name="type" >
                                <input type="radio" name="type" id="radio_news" value="1" {{(@$editData->type == '1')?('checked'):''}} checked>
                                <label for="radio_news">News</label>
                                <input type="radio" name="type" id="radio_event" value="2" {{(@$editData->type == '2')?('checked'):''}}>
                                <label for="radio_event">Event</label>
                                <input type="radio" name="type" id="radio_notice" value="3" {{(@$editData->type == '3')?('checked'):''}}>
                                <label for="radio_notice">Notice</label>
                                <input type="radio" name="type" id="radio_press" value="7" {{(@$editData->type == '7')?('checked'):''}}>
                                <label for="radio_press">Press Release</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('site-setting.news') }}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i> View News | Event | Notice | Press Release</a>
                    </div>
                </div>
                <div class="card-body">
                        <div class="form-row">

                            <div class="form-group col-sm-9">
                                <label>Title <span class="text-danger">*</span></label>
                                <input id="title" type="text" value="{{ !empty($editData->title)? $editData->title : old('title') }}" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Title"> @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                            </div>
                            <div class="form-group col-sm-3">
                                <label>File<small style="color: brown"> (Max 2 mb)</small></label>
                                <input type="file" id="file" class="form-control filer_input_single @error('file') is-invalid @enderror" name="file"> @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                            </div>
                            <div class="form-group col-sm-3">
                                <label>Publish Date <span class="text-danger">*</span></label>
                                <input id="date" type="text" value="{{ !empty($editData->date)? date('d-m-Y',strtotime($editData->date)) : old('date') }}" class="form-control singledatepicker @error('date') is-invalid @enderror" name="date" placeholder="Date"> @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                            </div>
                            <div class="form-group col-sm-3">
                                <label>Image<small style="color: brown"> (Max 2 mb)</small></label>
                                <input type="file" id="image" class="form-control filer_input_single @error('image') is-invalid @enderror" name="image"> @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                            </div>
                            {{-- <div class="form-group col-sm-3">
                                <label>Type</label>
                                <select name="type" id="type" class="form-control">
                                    <option value="">Select Type</option>
                                    <option value="1" {{(@$editData->type == '1')?('selected'):''}}>News</option>
                                    <option value="2" {{(@$editData->type == '2')?('selected'):''}}>Event</option>
                                    <option value="3" {{(@$editData->type == '3')?('selected'):''}}>Notice</option>
                                    <option value="4" {{(@$editData->type == '4')?('selected'):''}}>General Notice</option>
                                    <option value="5" {{(@$editData->type == '5')?('selected'):''}}>Special Notice</option>
                                    <option value="6" {{(@$editData->type == '6')?('selected'):''}}>Tender Notice</option>
                                </select>
                            </div> --}}
                            {{-- <div class="form-group  col-md-3" style="margin-top: 32px;">

                                <input id="display_on_scrollbar" type="checkbox" value="1" class="form-check-input @error('display_on_scrollbar') is-invalid @enderror" name="display_on_scrollbar" checked>
                                <label for="display_on_scrollbar" class="form-check-label">Display on Scrollbar</label>
                                @error('display_on_scrollbar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            <div class="col-sm-3" style="margin-top: 35px;">
                                <div class="form-check" style="margin-left: 5px;">
                                <input type="checkbox" name="display_on_scrollbar" class="form-check-input" id="display_on_scrollbar" value="1" {{ @$editData->display_on_scrollbar == 1 ? 'checked':'' }}>
                                <label class="form-check-label" for="display_on_scrollbar">Display on Scrollbar</label>
                                </div>
                            </div>

                            <div class="col-sm-3" style="margin-top: 35px;">
                                <div class="form-check" style="margin-left: 5px;">
                                <input type="checkbox" name="is_featured" class="form-check-input" id="is_featured" value="1" {{ @$editData->is_featured == 1 ? 'checked':'' }}>
                                <label class="form-check-label" for="is_featured">Is Featured?</label>
                                </div>
                            </div>


                            <div class="form-group col-sm-6">
                                <label>Short Description <span class="text-danger">*</span></label>
                                <textarea id="short_description" type="text" class="form-control @error('short_description') is-invalid @enderror" name="short_description">{{ !empty($editData->short_description)? $editData->short_description : old('short_description') }}</textarea>
                                @error('short_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                            </div>
                            <div class="form-group col-sm-3">
                                <label>Start Date <span class="text-danger">*</span></label>
                                <input id="start_date" type="text" value="{{ !empty($editData->start_date)? date('d-m-Y',strtotime($editData->start_date)) : old('start_date') }}" class="form-control singledatepicker @error('start_date') is-invalid @enderror" name="start_date" placeholder="Start Date"> @error('start_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                            </div>
                            <div class="form-group col-sm-3">
                                <label>End Date</label>
                                <input id="end_date" type="text" value="{{ !empty($editData->end_date)? date('d-m-Y',strtotime($editData->end_date)) : old('end_date') }}" class="form-control singledatepicker @error('end_date') is-invalid @enderror" name="end_date" placeholder="End Date"> @error('end_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                            </div>
                            <div class="form-group col-sm-6">
                                @php
                                    $facultys = \App\Model\Faculty::all();
                                @endphp
                                <label class="control-label">Faculty</label>
                                <select id="faculty_id" class="form-control form-control-sm select2" name="faculty_id">
                                    <option value="-1">All</option>
                                    @foreach($facultys as $faculty)
                                        <option @if( !empty($editData) && $editData->faculty_id == $faculty->id) selected @endif value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                                    @endforeach

                                </select>
                                @error('faculty_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-sm-6">
                                @php
                                if(!empty($editData) && !empty($editData->faculty_id))
                                {
                                    $departments = \App\Model\Department::where('faculty_id',$editData->faculty_id)->get();
                                }
                                @endphp

                                <label class="control-label">Department</label>
                                <select id="department_id" class="form-control form-control-sm select2" name="department_id">
                                    <option value="-1" readonly>All</option>
                                    {{-- @if(!empty($editData) && !empty($departments))
                                        @foreach($departments as $department)
                                            <option @if( !empty($editData) && $editData->department_id == $department->id) selected @endif value="{{ $department->id }}">{{ $department->name }}</option>
                                        @endforeach
                                    @endif --}}
                                </select>
                                @error('department_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group col-sm-6">
                                @php
                                    $Halls = \App\Model\Hall::all();
                                @endphp
                                <label class="control-label">Hall</label>
                                <select id="hall_id" class="form-control form-control-sm select2" name="hall_id">
                                    <option value="">Please Select</option>
                                    <option value="-1">All</option>
                                    @foreach($Halls as $Hall)
                                        <option @if( !empty($editData) && $editData-> hall_id == $Hall->id) selected @endif value="{{ $Hall->id }}">{{ $Hall->name }}</option>
                                    @endforeach

                                </select>

                                @error('hall_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group col-sm-6">
                                @php
                                    $Offices = \App\Model\Office::all();
                                @endphp
                                <label class="control-label">Office</label>
                                <select id="office_id" class="form-control form-control-sm select2" name="office_id">
                                    <option value="">Please Select</option>
                                    <option value="-1">All</option>
                                    @foreach($Offices as $Office)
                                        <option @if( !empty($editData) && $editData->office_id == $Office->id) selected @endif value="{{ $Office->id }}">{{ $Office->name }}</option>
                                    @endforeach

                                </select>
                                @error('office_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <style>
                                .select2-container .select2-selection--single {
                                    height: 38px;
                                }
                            </style>

                            <div class="form-group col-sm-12">
                                <label>Long Description</label>
                                <textarea id="long_description" type="text" class="form-control @error('long_description') is-invalid @enderror textarea" name="long_description">{{ !empty($editData->long_description)? $editData->long_description : old('long_description') }}</textarea>
                                @error('long_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror

                            </div>

                        </div>
                        <button class="btn bg-gradient-success btn-flat"><i class="fas fa-save"></i> {{ !empty($editData)? 'Update ' : 'Save' }}</button>
                </div>

            </div>
        </form>
        <!--/. container-fluid -->
    </section>

    <script type="text/javascript">
        $(function() {
            $("#newsForm").validate({
                rules: {
                    'title':{
                        required:true
                    },
                    'date':{
                        required:true
                    },
                    'type':{
                        required:true,
                    },
                    'short_description':{
                        required:true,
                    },
                    'start_date':{
                        required:true,
                    },
                    'end_date':{
                        required:true,
                    },

                    // @if (!@$editData)
                    //     'file':{
                    //         required:true,
                    //     },
                    //     'image':{
                    //         required:true,
                    //     },
                    // @endif

                    'long_description':{
                        required:true,
                    },

                }
            });
        });
// $(function(){
//     $('#faculty_id').trigger('change');
// });

        $(document).on('change','#faculty_id',function(){
            var faculty_id = $('#faculty_id').val();
            console.log(faculty_id);
            $.ajax({
                url: "{{ route('faculty_wise_department') }}",
                type: "GET",
                data: { faculty_id: faculty_id },
                success: function(data)
                {
                    //console.log(data);
                    if(data != 'fail')
                    {
                        $('#department_id').empty();
                        if(faculty_id == "")
                        {
                            $('#department_id').append('');
                        }
                        else{
                            $('#department_id').append('<option value="-1">All</option>');
                        }
                        $.each(data,function(index,dept){
                            $('#department_id').append('<option value ="'+dept.id+'">'+dept.name +'</option>');
                        });
                    }
                    else
                    {
                        $('#department_id').append('');
                    }
                }
            });
        });
    </script>
    @endsection
