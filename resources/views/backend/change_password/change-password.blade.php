@extends('backend.layouts.app') @section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Manage Role</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Role</li>
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
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        {{-- <a href="{{route('project-management.role.view')}}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i> View Role</a> --}}
                    </div>
                    <div class="card-body">
                        <form action="{{ route('project-management.store.password') }}" method="post" enctype="multipart/form-data" id="myForm">
                            @csrf
                            <div class="form-row">

                                <div class="form-group col-sm-6">
                                    <label>Old Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" autocomplete="off" value="{{ !empty($editData->old_password)? $editData->old_password : old('old_password') }}">
                                    @error('old_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                {!! Session::has('msg') ? Session::get("msg") : '' !!}
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>New Password <span class="text-danger">* (At least 8 characters, including lowercase & digit)</span></label>
                                    <input type="password" class="form-control @error('new_password') is-invalid @enderror" id="new_password" name="new_password" autocomplete="off" value="{{ !empty($editData->new_password)? $editData->new_password : old('new_password') }}">
                                    @error('new_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Confirm Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" autocomplete="off" value="{{ !empty($editData->confirm_password)? $editData->confirm_password : old('confirm_password') }}">
                                    @error('confirm_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>


                            </div>

                            <button class="btn bg-gradient-success btn-flat"><i class="fas fa-save"></i> {{ !empty($editData)? 'Update' : 'Save' }}</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    <!--/. container-fluid -->
</section>

<script type="text/javascript">
	$(document).ready(function () {


        $.validator.addMethod("pwcheck", function(value) {
            return (/[A-Za-z]/.test(value) && /\d/.test(value))
        });

		$('#myForm').validate({
			ignore:[],
			errorPlacement: function(error, element){
				if (element.attr("name") == "" ){
                    error.insertAfter(element.next());
                }
				else{
                    error.insertAfter(element);
                }
			},
			errorClass:'text-danger',
			validClass:'text-success',
			rules: {
                'old_password': {
					required: true,
                },
				<?php if(!@$editData){ ?>
				'new_password': {
					required: true,
					minlength: 8,
                    pwcheck: true,
				},
				'confirm_password': {
					required: true,
					minlength: 8,
					equalTo: "#new_password"
				},
				<?php } ?>
				}
			});
	});
</script>
@endsection

