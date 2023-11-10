@extends('backend.layouts.app') @section('content')
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
                <h1 class="m-0 text-dark">{{ !empty($editData)? 'Update Office to Member' : 'Add Office to Member' }}</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Office to Member</li>
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
                <a href="{{route('office_to_member.list')}}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i> View Office to Member</a>
            </div>
            <div class="card-body">
                <form action="{{ !empty($editData)? route('office_to_member.update',$editData->id) : route('office_to_member.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="form-row">


                        <div class="form-group col-sm-4">
                            <label class="control-label">Select Office</label>
                            <select id="office_id" @if(!empty($editData)) @endif class="form-control form-control-sm select2" name="office_id" required>
                                <option value="" disabled selected>Select Office</option>
                                @foreach($offices as $office)
                                <option @if( !empty($editData) && $editData->office_id == $office->id) selected @endif value="{{ $office->id }}">{{ $office->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-sm-4">
                            <label class="control-label">Select Member</label>
                            <select id="member_id" @if(!empty($editData)) @endif class="form-control form-control-sm select2" name="member_id" required>
                                <option value="" disabled selected>Select Member</option>

                                @foreach($members as $member)
                                <option @if( !empty($editData) && $editData->member_id == $member->id) selected @endif value="{{ $member->id }}">{{ $member->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Designation</label>
                            <input type="text" class="form-control @error('designation_id') is-invalid @enderror" name="designation_id" id="designation_id" autocomplete="off" value="{{!empty($editData->designation_id)? $editData->designation_id : old('designation_id')}} " readonly>
                            @error('designation_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Status</label>
                            <select name="status" class="form-control form-control-sm select2" required>
                                <option value="">Select Type</option>
                                <option {{ !empty($editData) && $editData->status == 1 ? "selected" : ""}} value="1">Active</option>
                                <option {{ !empty($editData) && $editData->status == 0 ? "selected" : ""}} value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Sort Order</label>
                            <input type="number" class="form-control @error('sort_order') is-invalid @enderror" name="sort_order" autocomplete="off" value="{{ !empty($editData->sort_order)? $editData->sort_order : old('sort_order') }}">
                            @error('sort_order')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>



                    </div>
                        <button class="btn bg-gradient-success btn-flat"><i class="fas fa-save"></i> {{ !empty($editData)? 'Update office to member' : 'Save office to member' }}</button>
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

        $(document).on('select change','#member_id',function(){
            var member_id = $('#member_id').val();
            // console.log(member_id);
            $.ajax({
                url: "{{ route('member_wise_designation') }}",
                type: "GET",
                data: { member_id: member_id },
                success: function(data)
                {
                    console.log(data);
                    if(data != 'fail')
                    {
                        $("#designation_id").val(data);
                    }
                    else
                    {
                        // $("#designation_id").val(data);
                        $('#designation_id').append('');
                        //console.log('failed');
                    }
                }
            });
        });





        $(document).on('select change','#faculty_id',function(){
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
                        $.each(data,function(index,dept){
                            $('#department_id').append('<option value ="'+dept.id+'">'+dept.name +'</option>');
                        });
                    }
                    else
                    {
                        $('#department_id').append('');
                        //console.log('failed');
                    }
                }
            });
        });




    </script>
    @endsection
