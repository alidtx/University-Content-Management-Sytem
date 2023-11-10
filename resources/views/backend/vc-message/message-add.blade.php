@extends('backend.layouts.app') @section('content')
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
            width: 100px;
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
                    <a href="{{ route('site-setting.vc_message') }}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i>
                        View Message</a>
                </div>
                <div class="card-body">
                    <form
                        action="{{ !empty($editData) ? route('site-setting.vc_message.update', $editData->id) : route('site-setting.vc_message.store') }}"
                        method="post" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="form-row">
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
                                <textarea type="text" class="form-control @error('short_description') is-invalid @enderror textarea "
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
                    } else if (data != 'fail' && (category_type == 2 || category_type == 3)) {

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
