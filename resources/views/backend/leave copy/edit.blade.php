@extends('backend.layouts.app') @section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Update Leave</h1>
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
            <div class="card-header">
                <a href="{{route('manage_leave')}}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i> View
                    Leave</a>
            </div>
            <div class="card-body">
                <form action="{{ route('manage_leave.update', $editData->id)}} " method="post"
                    enctype="multipart/form-data" autocomplete="off">

                    @csrf
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <label>Purpose</label>
                            <input id="purpose" type="text" value="{{$editData->purpose}}"
                                class="form-control @error('purpose') is-invalid @enderror" name="purpose"
                                placeholder="Write Purposes"> @error('purpose')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Passport Number</label>
                            <input id="passport" type="text" value="{{$editData->passport}}"
                                class="form-control @error('passport') is-invalid @enderror" name="passport"
                                placeholder="Write Passport Number">
                            @error('passport')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Country</label>
                            <input id="country" type="text" value="{{$editData->country}}"
                                class="form-control @error('country') is-invalid @enderror" name="country"
                                placeholder="Write Country Name"> @error('country')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Member</label>
                            <select name="member_id" id="member_id" class="form-control select2">
                                <option value="">Select Member</option>
                                @foreach($members as $member)
                                <option value="{{$member->id}}" {{ $editData->member_id== $member->id ? "selected" : ""}} > {{$member->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-4 dept_office_div">
                            <label>Department/Office</label>
                            <input type="text" class="form-control @error('deptOffice_id') is-invalid @enderror"
                                name="deptOffice_id" id="deptOffice_id" autocomplete="off"
                                value="{{ !empty($editData->deptOffice_id) ? $editData->deptOffice_id : old('deptOffice_id') }} "
                                readonly>
                            @error('deptOffice_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-4 dept_office_div">
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
                        <div class="form-group col-sm-4">
                            <label>Start Date</label>
                            <input id="start_by" type="date" value="{{date('Y-m-d', strtotime($editData->start_by))}}"
                                class="form-control @error('start_by') is-invalid @enderror" name="start_by"
                                placeholder="Write Start Date"> @error('start_by')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>

                        <div class="form-group col-sm-4">
                            <label>End Date</label>
                            <input id="end_by" type="date" value="{{date('Y-m-d', strtotime($editData->start_by))}}"
                                class="form-control @error('end_by') is-invalid @enderror" name="end_by"
                                placeholder="Write End Date"> @error('end_by')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Status</label>
                            <select name="status" class="form-control select2">
                                <option value="">Select Type</option>
                                <option {{ $editData->status == 1 ? "selected" : ""}} value="1">Active</option>
                                <option {{ $editData->status == 0 ? "selected" : ""}} value="0">Inactive</option>
                            </select>

                        </div>
                    </div>
                    <button class="btn bg-gradient-success btn-sm"><i class="fas fa-save"></i> Update Leave</button>
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

<script>
    $(function(){
            $('#member_id').trigger('change');
        });
    $(document).on('change', '#member_id', function() {
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
    $(document).on('change', '#member_id', function() {
            var member_id = $('#member_id').val();
            $.ajax({
                url: "{{ route('member_wise_deptOffice') }}",
                type: "GET",
                data: {
                    member_id: member_id
                },
                success: function(data) {
                    console.log(data);
                    if (data != 'fail') {
                        if(data.department_id){
                            $("#deptOffice_id").val(data.department.name);
                        }
                        else if(data.office_id){
                            $("#deptOffice_id").val(data.office.name);
                        }
                    } else {
                        $('#deptOffice_id').val('');
                    }
                }
            });
        });
</script>
@endsection
