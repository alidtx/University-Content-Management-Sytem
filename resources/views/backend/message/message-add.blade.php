@extends('backend.layouts.app') @section('content')
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
            width: 90px;
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
            line-height: 20px;
        }
    </style>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ !empty($editData) ? 'Update Message' : 'Add Message' }}</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Message</li>
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
                    <a href="{{ route('site-setting.message') }}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i>
                        View Message</a>
                </div>
                <div class="card-body">
                    <form
                        action="{{ !empty($editData) ? route('site-setting.message.update', $editData->id) : route('site-setting.message.store') }}"
                        method="post" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-sm-12" style="{{ (in_array(1, $roles) || in_array(2, $roles)) ? 'display:block;' : 'display:none;' }}" >
                                <div class="container">
                                    <div class="radio_container" id="type" name="type">
                                        <input type="radio" onclick="radio_handle(1)" class="category_type"
                                            name="category_type" id="radio_faculty" value="1"
                                            {{ @$editData->type_id == '1' || @$editData->type_id == '' ? 'checked' : '' }}>
                                        <label for="radio_faculty">Faculty</label>

                                        <input type="radio" onclick="radio_handle(2)" class="category_type"
                                            name="category_type" id="radio_dept" value="2"
                                            {{ @$editData->type_id == '2' ? 'checked' : '' }}>

                                        <label for="radio_dept">Department</label>
                                        <input type="radio" onclick="radio_handle(3)" class="category_type"
                                            name="category_type" id="radio_office" value="3"
                                            {{ @$editData->type_id == '3' ? 'checked' : '' }}>
                                        <label for="radio_office">Office</label>
                                        <input type="radio" onclick="radio_handle(4)" class="category_type"
                                            name="category_type" id="radio_hall" value="4"
                                            {{ @$editData->type_id == '4' ? 'checked' : '' }}>
                                        <label for="radio_hall">Hall</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-sm-6" style="{{ (in_array(1, $roles) || in_array(2, $roles)) ? 'display:block;' : 'display:none;' }}">
                                <label>Category</label>
                                <select id="category_id" @if (!empty($editData))  @endif
                                    class="form-control form-control-sm select2" name="category_id">
                                    <option value="" selected>Please Select</option>

                                    {{-- @foreach ($members as $member)
                                <option @if (!empty($editData) && $editData->pernonnel_id == $member->id) selected @endif value="{{ $member->id }}">{{ $member->name }}</option>
                                @endforeach --}}
                                </select>
                            </div>

                            <div class="form-group col-sm-6" style="{{ (in_array(1, $roles) || in_array(2, $roles)) ? 'display:block;' : 'display:none;' }}">
                                <label>Member</label>
                                <input type="text" class="form-control @error('member') is-invalid @enderror"
                                    name="member" id="member" autocomplete="off"
                                    value="{{ !empty($editData->member->name) ? $editData->member->name : old('member') }} "
                                    readonly>
                                @error('member')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input type="hidden" class="form-control @error('member_id') is-invalid @enderror"
                                    name="member_id" id="member_id" autocomplete="off"
                                    value="{{ !empty($editData->member->id) ? $editData->member->id : old('member_id') }} "
                                    readonly>
                            </div>

                            <div class="form-group col-sm-6">
                                <label>Title First Part</label>
                                <input id="title_first_part" type="text"
                                    value="{{ !empty($editData->title_first_part) ? $editData->title_first_part : old('title_first_part') }}"
                                    class="form-control @error('title_first_part') is-invalid @enderror"
                                    name="title_first_part" placeholder="Message Title First Part">
                                @error('title_first_part')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Title Second Part</label>
                                <input id="title_second_part" type="text"
                                    value="{{ !empty($editData->title_second_part) ? $editData->title_second_part : old('title_second_part') }}"
                                    class="form-control @error('title_second_part') is-invalid @enderror"
                                    name="title_second_part" placeholder="Message Title Second Part">
                                @error('title_second_part')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-sm-6">
                                <label>Short Description</label>
                                <textarea type="text" class="form-control @error('short_description') is-invalid @enderror textarea"
                                    name="short_description">{{ !empty($editData->short_description) ? $editData->short_description : old('short_description') }}</textarea>
                                @error('short_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-sm-6">
                                <label>Long Description</label>
                                <textarea type="text" class="form-control @error('long_description') is-invalid @enderror textarea"
                                    name="long_description">{{ !empty($editData->long_description) ? $editData->long_description : old('long_description') }}</textarea>
                                @error('long_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <button class="btn bg-gradient-success btn-flat"><i class="fas fa-save"></i>
                                {{ !empty($editData) ? 'Update' : 'Save' }}</button>
                        </div>
                    </form>

                </div>

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
        $(function() {
            @if (@$editData->type_id == 3)
                radio_handle(3);
            @elseif (@$editData->type_id == 4)
                radio_handle(4);
            @elseif (@$editData->type_id == 2)
                radio_handle(2);
            @else
                radio_handle(1);
            @endif
        });


        function radio_handle(val) {
            var category_type_value = val;
            $.ajax({
                url: "{{ route('type_wise_category') }}",
                type: "GET",
                data: {
                    type_id: category_type_value
                },
                success: function(data) {
                    if (data != 'fail') {
                        $('#category_id').html('<option value ="">Please Select</option>');
                        if ("{{ @$editData->type_id }}" == category_type_value) {
                            var selected = "{{ @$editData->category_id }}";
                        } else {
                            var selected = "";
                        }
                        $.each(data, function(index, category) {

                            $('#category_id').append('<option value ="' + category.id + '"' + ((category
                                    .id == selected) ? ('selected') : '') + '>' + category.name +
                                '</option>');
                        });
                    } else {
                        $('#category_id').html('');
                    }
                    $('#category_id').trigger('change');
                }
            });
        };
    </script>

    <script>
        $(document).on('select change', '#category_id', function() {
            var category_id = $('#category_id').val();
            var category_type = $('input[name="category_type"]:checked').val();
            $.ajax({
                url: "{{ route('category_wise_head') }}",
                type: "GET",
                data: {
                    category_id: category_id,
                    category_type_id: category_type
                },
                success: function(data) {

                    if (data != 'fail' && category_type == 1) {

                        $("#member").val(data?.member?.name);
                        $("#member_id").val(data?.member?.id);
                    } else if (data != 'fail' && (category_type == 2 || category_type == 3 || category_type == 4)) {
                        $("#member").val(data?.name);
                        $("#member_id").val(data?.id);
                    } else {
                        $('#member').val('');
                        $("#member_id").val('');
                    }
                }
            });
        });
    </script>
@endsection
