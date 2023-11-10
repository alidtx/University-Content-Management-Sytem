@extends('backend.layouts.app')
@section('content')
<style>
    .radio_container {
        display: flex;
        justify-content: space-around;
        align-items: center;
        background-color: #cecece;
        width: 360px;
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
        width: 110px;
        text-align: center;
        border-radius: 9999px;
        overflow: hidden;
        transition: linear 0.3s;
        margin-top: 8px;
    }

    input[type="radio"]:checked+label {
        background-color: #1e90ff;
        color: #f1f3f5;
        font-weight: 900;
        transition: 0.3s;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 27px;
    }
</style>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ !empty($editData) ? 'Update Leave' : 'Add Leave' }}
                </h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Leave</li>
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
            <form id=""
                action="{{ !empty($editData) ? route('manage_leave.update', $editData->id) : route('manage_leave.store') }}"
                method="post" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="card-header row">
                    <div class="col-md-6">
                        <div class="container">
                            <div class="radio_container">
                                <input type="radio" onclick="radio_handle(1)" class="category_type" name="category_type"
                                    id="radio_dept" value="1" {{ @$editData->category_type == '1' ? 'checked' : '' }} checked>
                                <label for="radio_dept">Department</label>
                                <input type="radio" onclick="radio_handle(2)" class="category_type" name="category_type"
                                    id="radio_office" value="2" {{ @$editData->category_type == '2' ? 'checked' : '' }}>
                                <label for="radio_office">Office</label>
                                <input type="radio" onclick="radio_handle(3)" class="category_type" name="category_type"
                                    id="radio_others" value="3" {{ @$editData->category_type == '3' ? 'checked' : '' }}>
                                <label for="radio_others">Others</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('manage_leave') }}" class="btn btn-info btn-sm"><i
                                class="fas fa-stream"></i> View Leave</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-sm-4 dept_office_div" style="display: {{ (@$editData->category_type == 3)?('none'):'' }}">
                            <label class="control-label">Department/Office</label>
                            <select id="category_id" @if (!empty($editData)) @endif
                                class="form-control form-control-sm select2" name="category_id" style="width: 100%">
                                <option value="" selected>Select Department/office</option>

                                {{-- @foreach ($departments as $department)
                                <option @if (!empty($editData) && $editData->department_id == $department->id) selected
                                    @endif value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach --}}
                            </select>
                        </div>
                        <div class="form-group col-sm-4 dept_office_div" style="display: {{ (@$editData->category_type == 3)?('none'):'' }}">
                            <label class="control-label">Member</label>
                            <select id="member_id" @if (!empty($editData)) @endif
                                class="form-control form-control-sm select2" name="member_id" style="width: 100%">
                                <option value="" selected>Select Member</option>

                                {{-- @foreach ($members as $member)
                                <option @if (!empty($editData) && $editData->member_id == $member->id) selected @endif
                                    value="{{ $member->id }}">{{ $member->name }}</option>
                                @endforeach --}}
                            </select>
                        </div>
                        <div class="form-group col-sm-4 dept_office_div" style="display: {{ (@$editData->category_type == 3)?('none'):'' }}">
                            <label>Designation</label>
                            <input type="text" class="form-control @error('designation_id') is-invalid @enderror"
                                name="designation_id" id="designation_id" autocomplete="off"
                                value="{{ !empty($editData->designation_id) ? $editData->designation_id : old('designation_id') }} "
                                readonly>
                            @error('designation_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        {{-- Start - Others --}}
                        <div class="form-group col-sm-4 others_div" style="display: {{ (@$editData->category_type == 3)?('block'):'none' }}">
                            <label>Office</label>
                            <input type="text" class="form-control @error('office_name_others') is-invalid @enderror"
                                name="office_name_others" id="office_name_others" autocomplete="off"
                                value="{{ !empty($editData->office_name_others) ? $editData->office_name_others : old('office_name_others') }} ">
                            @error('office_name_others')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-4 others_div" style="display: {{ (@$editData->category_type == 3)?('block'):'none' }}">
                            <label>Member Name</label>
                            <input type="text" class="form-control @error('member_name_others') is-invalid @enderror"
                                name="member_name_others" id="member_name_others" autocomplete="off"
                                value="{{ !empty($editData->member_name_others) ? $editData->member_name_others : old('member_name_others') }} ">
                            @error('member_name_others')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-4 others_div" style="display: {{ (@$editData->category_type == 3)?('block'):'none' }}">
                            <label>Member Designation</label>
                            <input type="text" class="form-control @error('member_designation_others') is-invalid @enderror"
                                name="member_designation_others" id="member_designation_others" autocomplete="off"
                                value="{{ !empty($editData->member_designation_others) ? $editData->member_designation_others : old('member_designation_others') }} ">
                            @error('member_designation_others')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        {{-- End - Others --}}

                        <div class="form-group col-sm-4">
                            <label>Purpose</label>
                            <input id="purpose" type="text" value="{{ !empty($editData->purpose) ? $editData->purpose : old('purpose') }}"
                                class="form-control @error('purpose') is-invalid @enderror" name="purpose"
                                placeholder="Write Purpose"> @error('purpose')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Passport Number</label>
                            <input id="passport" type="text" value="{{ !empty($editData->passport) ? $editData->passport : old('passport') }}"
                                class="form-control @error('passport') is-invalid @enderror" name="passport"
                                placeholder="Write Passport Number">
                            @error('passport')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Country</label>
                            <input id="country" type="text" value="{{ !empty($editData->country) ? $editData->country : old('country') }}"
                                class="form-control @error('country') is-invalid @enderror" name="country"
                                placeholder="Write Country Name"> @error('country')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Start Date</label>
                            <input id="start_by" type="date" value="{{ !empty($editData->start_by) ? date('Y-m-d', strtotime($editData->start_by)) : old('start_by') }}"
                                class="form-control @error('start_by') is-invalid @enderror" name="start_by"
                                placeholder="Write Start Date"> @error('start_by')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>

                        <div class="form-group col-sm-4">
                            <label>End Date</label>
                            <input id="end_by" type="date" value="{{ !empty($editData->end_by) ? date('Y-m-d', strtotime($editData->end_by)) : old('end_by') }}"
                                class="form-control @error('end_by') is-invalid @enderror" name="end_by"
                                placeholder="Write End Date"> @error('end_by')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>

                        <div class="form-group col-sm-4">
                            <label class="control-label">Status</label>
                            <select id="status" name="status" class="form-control select2">
                                <option value="" selected>Select Status</option>
                                <option {{ @$editData->status == "1" ? "selected" : ""}} value="1">Active</option>
                                <option {{ @$editData->status == "0" ? "selected" : ""}} value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn bg-gradient-success btn-sm"><i class="fas fa-save"></i>
                        {{ !empty($editData) ? 'Update ' : 'Save' }}</button>
                </div>
            </form>
        </div>
        <!--/. container-fluid -->
</section>

<script>
    $(document).on('select change', '#member_id', function() {
            var member_id = $('#member_id').val();
            $.ajax({
                url: "{{ route('member_wise_designation') }}",
                type: "GET",
                data: {
                    member_id: member_id
                },
                success: function(data) {
                    if (data != 'fail') {
                        $("#designation_id").val(data);
                    } else {
                        $('#designation_id').val('');
                    }
                }
            });
        });
</script>

<script>
    $(function() {
            @if (@$editData->category_type == 2)
                radio_handle(2);
            @else
                radio_handle(1);
            @endif
        });

        function radio_handle(val) {
            var category_type_value = val;

            $.ajax({
                url: "{{ route('category_wise_deptOrOffice') }}",
                type: "GET",
                data: {
                    category_type_value: category_type_value
                },
                success: function(data) {
                    if (data != 'fail') {
                        $('#category_id').html('<option value ="">Please Select</option>');
                        if(category_type_value==editData_category_type){
                            var selected = "{{ @$editData->category_id }}";
                        }else{
                            var selected = "";
                        }
                        $.each(data, function(index, category) {
                            $('#category_id').append('<option value ="' + category.id + '"' + ((category
                                    .id == selected) ? ('selected') : '') + '>' + category.name +
                                '</option>');
                        });
                    } else {
                        $('#category_id').append('');
                    }
                }
            });
        };
</script>
<script>
    $(document).ready(function(){
        $('input[type=radio][name=category_type]').change(function() {
            $('#category_id').val('').trigger('change');
            if (this.value == 3) {
                $('.others_div').show();
                $('.dept_office_div').hide();
            }else {
                $('.others_div').hide();
                $('.dept_office_div').show();
            }
        });
    });
</script>
<script>
    var editData_category_type = "{{ @$editData->category_type }}";
    if(editData_category_type){
        $(function(){
            $('#category_id').trigger('change');
        })
    }
    $(document).on('select change', '#category_id', function() {
        var category_id = $('#category_id').val();
            var category_type = $('input[name="category_type"]:checked').val();
            $('#member_id').append('');
            $.ajax({
                url: "{{ route('department_wise_member') }}",
                type: "GET",
                data: {
                    category_id: category_id,
                    category_type: category_type,
                },
                success: function(data) {
                    $('#member_id').html('<option value ="">Select Member</option>');
                    if (data != 'fail') {
                        if(editData_category_type==category_type){
                            var selected = "{{ @$editData->member_id }}";
                        }else{
                            var selected = "";
                        }
                        $.each(data, function(index, member) {
                            $('#member_id').append('<option value ="' + member.id + '"' + ((
                                    member.id == selected) ? ('selected') : '') + '>' +
                                member.name + '</option>');
                        });
                    } else {
                        $('#member_id').append('');
                    }
                        $('#member_id').trigger('change');
                }
            });
        });
</script>
@endsection
