@extends('backend.layouts.app') @section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Add Team Member</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add Team</li>
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
                <a href="{{route('manage_team')}}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i> View Team</a>
            </div>
            <div class="card-body">

                <form action="{{ route('manage_team.store') }} " method="post" enctype="multipart/form-data" autocomplete="off">

                    @csrf
                    <div class="form-row">

                    <div class="form-group col-sm-6">
                            <label>Team Member</label>
                            <select name="team_member" class="form-control select2" required>
                                <option value="">Select facilator Name</option>
                                  @foreach ($teaMember as $list )
                                  <option value="{{$list->id}}">{{$list->name}}</option>
                                  @endforeach
                            </select>
                        </div>


                        <div class="form-group col-sm-6">
                            <label>Designation</label>
                            <select name="post" class="form-control select2" required>
                                <option value="">Select facilator Name</option>
                                @foreach ($teaMember as $list )
                                <option value="{{$list->id}}">{{$list->member_designation}}</option>
                                @endforeach
                            </select>
                        </div>


                         </div>

                    <button class="btn bg-gradient-success btn-flat"><i class="fas fa-save"></i> Add Team</button>
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
