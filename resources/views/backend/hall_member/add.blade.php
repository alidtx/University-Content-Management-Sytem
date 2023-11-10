@extends('backend.layouts.app') @section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Add Hall Member</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Hall Member</li>
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
                <a href="{{route('view_hall_member', $hall_id)}}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i> View Hall Member</a>
            </div>
            <div class="card-body">
                <form action="{{ route('manage_hall_member.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">

                    @csrf
                    <input type="hidden" name="hall_id" value="{{$hall_id}}">
                    <div class="form-row">

                        <div class="form-group col-sm-4">
                            <label>Member Type</label>
                            <select name="type_id" id="type_id" class="form-control select2">
                                <option value=""> Select Member Type</option>

                                <option value="1">House Tutor</option>
                                <option value="2">Administrative Staff</option>
                            </select>
                        </div>

                        <div class="form-group col-sm-4">
                            <label>Member</label>
                            <select name="member_id" id="member_id" class="select2 form-control">
                                <option value=""> Please Select</option>

                            </select>
                        </div>
                        <div class="col-sm-4" style="margin-top: 35px;">
                            <div class="form-check" style="margin-left: 5px;">
                            <input type="checkbox" name="additional_charge" class="form-check-input" id="additional_charge" style="margin-top: 6px;">
                            <label class="form-check-label" for="additional_charge">Is Additional Charge?</label>
                            </div>
                        </div>

                        <div class="form-group col-sm-4">
                            <label>Status</label>
                            <select name="status" class="form-control select2">
                                <option value="">Select Type</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-4" id="additional_designation_div" style="display: none;">
                            <label>Additional Designation</label>
                            <input id="additional_designation" type="text" value="" class="form-control @error('additional_designation') is-invalid @enderror" name="additional_designation" placeholder="Write Designation">
                            @error('additional_designation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <button class="btn bg-gradient-success btn-sm"><i class="fas fa-save"></i> Save Hall Member</button>
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




        $(document).on('select change','#type_id',function(){

            var type_id = $('#type_id').val();

            console.log(type_id);

            $.ajax({

                url: "{{ route('member_wise_hall') }}",
                type: "GET",
                data: { type_id: type_id },

                success: function(data)
                {
                    if(data != 'fail')
                    {
                        $('#member_id').empty();
                        if(type_id == "")
                        {
                            $('#member_id').append('');
                        }
                        $('#member_id').html('<option value ="">Please Select </option>');

                        $.each(data,function(index,dept){
                            $('#member_id').append('<option value ="'+dept.id+'">'+dept.name +'</option>');
                        });
                    }
                    else
                    {
                        $('#member_id').append('');
                    }
                }
            });
        });
    </script>
    <script type="text/javascript">
        $('#additional_charge').click(function(){
            if($(this).is(':checked')){
                $('#additional_designation_div').show();
            } else {
                $('#additional_designation_div').hide();
            }
        });
    </script>

    @endsection
