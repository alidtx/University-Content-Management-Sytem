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
                <h1 class="m-0 text-dark">{{ !empty($editData)? 'Update Syndicate / Academic Council Member' : 'Add Syndicate / Academic Council Member' }}</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Syndicate / Academic Council Member</li>
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
                <a href="{{route('syndicate_member.list')}}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i> View Syndicate / Academic Council Member</a>
            </div>
            <div class="card-body">
                <form action="{{ !empty($editData)? route('syndicate_member.update',$editData->id) : route('syndicate_member.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            @if($editData)
                                <img class="" src="{{ asset('public/upload/members/'.$editData['member']['image']) }}" onerror="this.onerror=null;this.src='{{ asset('public/frontend/images/about/user-dummy.jpeg') }}';" width="180" height="200">
                                <h6 style="color: #2e848eeb;padding: 0; margin-top: 5px;" class="col-sm-12">{{ $editData['member']['name'] }}</h6>
                            @endif
                        </div>



                        <div class="form-group col-sm-4">
                            <label>Type</label>
                            <select name="type_id" class="form-control form-control-sm select2" required>
                                <option value="">Select Type</option>
                                <option {{ !empty($editData) && $editData->type_id == 1 ? "selected" : ""}} value="1">Syndicate Member</option>
                                <option {{ !empty($editData) && $editData->type_id == 2 ? "selected" : ""}} value="2">Academic Council</option>
                            </select>
                        </div>

                        <div class="form-group col-sm-4">
                            <label class="control-label">Select Member</label>
                            <select id="member_id" @if(!empty($editData)) disabled @endif class="form-control form-control-sm select2" name="member_id" required>
                                <option value="" disabled selected>Select Member</option>

                                @foreach($members as $member)
                                <option @if( !empty($editData) && $editData->member_id == $member->id) selected @endif value="{{ $member->id }}">{{ $member->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-sm-4">
                            <label class="control-label">Select Post</label>
                            <select id="designation_id" class="form-control form-control-sm select2" name="designation_id" required>
                                <option value="" disabled selected>Select Post</option>

                                @foreach($designations as $designation)
                                <option @if( !empty($editData) && $editData->designation_id == $designation->id) selected @endif value="{{ $designation->id }}">{{ $designation->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-sm-4">
                            <label>Committee Designation</label>
                            <input id="committee_designation" type="text" value="{{ !empty($editData->committee_designation)? $editData->committee_designation : old('committee_designation') }}" class="form-control @error('committee_designation') is-invalid @enderror" name="committee_designation" placeholder="Write Designation">
                            @error('committee_designation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-4">
                            <label>Sort Order</label>
                            <input id="sort_order" type="text" value="{{ !empty($editData->sort_order)? $editData->sort_order : old('sort_order') }}" class="form-control @error('sort_order') is-invalid @enderror" name="sort_order" placeholder="Enter Sort Order">
                            @error('sort_order')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-4">
                            <label>Status</label>
                            <select name="status" class="form-control form-control-sm select2" required>
                                <option value="">Select Status</option>
                                <option {{ !empty($editData) && $editData->status == 1 ? "selected" : ""}} value="1">Active</option>
                                <option {{ !empty($editData) && $editData->status == 0 ? "selected" : ""}} value="0">Inactive</option>
                            </select>
                        </div>




                        {{-- <div class="form-group col-sm-6">
                            <label>Designation</label>
                            <input id="designation" type="text" value="{{ !empty($editData->designation)? $editData->designation : old('designation') }}" class="form-control @error('designation') is-invalid @enderror" name="designation" placeholder="Enter Designation">
                            @error('designation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}

                        {{-- <div class="form-group col-sm-4">
                            <label>Sort Order</label>
                            <input id="sort_order" type="number" value="{{ !empty($editData->sort_order)? $editData->sort_order : old('sort_order') }}" class="form-control @error('sort_order') is-invalid @enderror" name="sort_order" placeholder="Enter Sort Order">
                            @error('sort_order')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}

                    </div>
                        <button class="btn bg-gradient-success btn-md"><i class="fas fa-save"></i> {{ !empty($editData)? 'Update' : 'Save' }}</button>
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
