@extends('backend.layouts.app') @section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Update Hall Member</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Hall Member</a></li>
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

                    <a href="{{ route('view_hall_member', $hall_id) }}" class="btn btn-info btn-sm"><i
                            class="fas fa-stream"></i> View Hall Member</a>

                </div>
                <div class="card-body">
                    <form action="{{ route('member_update', $hallEdit->id) }} " method="post" enctype="multipart/form-data"
                        autocomplete="off">
                        @csrf
                        <input type="hidden" name="hall_id" value="{{ $hall_id }}">
                        <div class="form-row">

                            <div class="form-group col-sm-4">
                                <label>Member Type</label>
                                <select name="type_id" id="type_id" class="form-control select2">
                                    <option value=""> Select Member Type</option>

                                    <option {{ $hallEdit->status == 1 ? 'selected' : '' }} value="1">House Tutor
                                    </option>
                                    <option {{ $hallEdit->status == 0 ? 'selected' : '' }} value="0">Administrative
                                        Staff</option>
                                </select>
                            </div>

                            <div class="form-group col-sm-4">
                                <label>Member</label>
                                <select name="member_id" id="member_id" class="form-control select2">
                                    <option value=""> Please Select</option>
                                    @foreach ($members as $member)
                                        <option value="{{ $member->id }}"
                                            {{ $hallEdit->member_id == $member->id ? 'selected' : '' }}> {{ $member->name }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-sm-4" style="margin-top: 35px;">
                                <div class="form-check" style="margin-left: 5px;">
                                <input type="checkbox" name="additional_charge" class="form-check-input" id="additional_charge" style="margin-top: 6px;" {{ @$hallEdit->additional_charge == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="additional_charge">Is Additional Charge?</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Status</label>
                                <select name="status" class="form-control select2">
                                    <option value="">Select Type</option>

                                    <option {{ $hallEdit->status == 1 ? 'selected' : '' }} value="1">Active</option>
                                    <option {{ $hallEdit->status == 0 ? 'selected' : '' }} value="0">Inactive</option>

                                </select>
                            </div>
                            <div class="form-group col-sm-4" id="additional_designation_div" style = "display: {{ @$hallEdit->additional_charge == 0 ? 'none': 'block' }}">
                                <label>Additional Designation</label>
                                <input id="additional_designation" type="text" value="{{ @$hallEdit->additional_designation }}" class="form-control @error('additional_designation') is-invalid @enderror" name="additional_designation" placeholder="Write Designation">
                                @error('additional_designation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <button class="btn bg-gradient-success btn-sm"><i class="fas fa-save"></i> Update Hall
                            Member</button>
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
