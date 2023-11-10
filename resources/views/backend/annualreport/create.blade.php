@extends('backend.layouts.app') 


@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ !empty($editData)? 'Update ' : 'Add ' }} Annual Performance Report</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Annual Performance</li>
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
                <a href="{{route('annual-performance.report.list')}}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i> View Report List</a>
            </div>
            <div class="card-body">
                <form action="{{ !empty($editData)? route('annual-performance.report.update',$editData->id) : route('annual-performance.report.store') }}" method="post" enctype="multipart/form-data" autocomplete="off" id="myForm">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="performance_id">Performance Report Title</label>
                                <select class="form-control" id="performance_id" name="performance_id">
                                  <option value="" {{ empty($editData)? 'selected' : '' }}>Select an Option</option>
                                  @foreach($performances as $perfor)
                                  <option value="{{ $perfor->id }}" {{@$editData->performance_id == $perfor->id ? 'selected' : ''}}>{{ $perfor->title }}</option>
                                  @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="title">Performance Report Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{@$editData->title}}">
                            </div>
                            
                            <div class="form-group">
                                <label for="date">Report Publish Date</label>
                                <input type="date" class="form-control" id="date" name="date" placeholder="Publish Date" value="{{@$editData->date}}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label class="ml-3" for="files">Upload File</label>
                                <input class="form-control-file" type="file" id="files" name="files">
                                <p class="help-block ml-3">File size must be less than 2MB</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group col-sm-3">
                        <button class="btn btn-sm btn-primary"> {{ !empty($editData)? 'Update ' : 'Save ' }}</button>
                    </div>
                </div>
            </form>

        </div>

    </div>
    <!--/. container-fluid -->
</section>

@endsection

@section('script')
<script type="text/javascript">
    document.getElementById("files").onchange = function () {
    var reader = new FileReader();
    reader.onload = function (e) {
    // get loaded data and render thumbnail.
    document.getElementById("image").src = e.target.result;
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
    };
</script>
@endsection