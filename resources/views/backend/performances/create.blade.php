@extends('backend.layouts.app')


@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ !empty($editData)? 'Update ' : 'Add ' }} Annual Performance </h1>
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
                <a href="{{route('annual-performance.performance.list')}}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i> View Performance</a>
            </div>
            <div class="card-body">
                <form action="{{ !empty($editData)? route('annual-performance.performance.update',$editData->id) : route('annual-performance.performance.store') }}" method="post" enctype="multipart/form-data" autocomplete="off" id="myForm">
                    @csrf

                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="title">Performance Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{@$editData->title}}">
                            </div>
                            <div class="form-group">
                                <label for="self_id">Select Performance Main Title</label>
                                <select class="form-control" id="self_id" name="self_id">
                                  <option value="0" {{ empty($editData)? 'selected' : '' }}>Select an Option</option>
                                  @foreach($performances as $perman)
                                  <option value="{{ $perman->id }}" {{@$editData->self_id == $perman->id ? 'selected' : ''}}>{{ $perman->title }}</option>
                                  @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sort_order">Performance Sort Order</label>
                                <input type="text" class="form-control" id="sort_order" name="sort_order" placeholder="Sort Order" value="{{@$editData->sort_order}}">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status">
                                  <option value="" {{ empty($editData)? 'selected' : '' }}>Select an Option</option>
                                  <option value="1" {{@$editData->status == '1' ? 'selected' : ''}}>Active</option>
                                  <option value="0" {{@$editData->status == '0' ? 'selected' : ''}}>Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Link</label><br>
                                <input type="text" name="link" value="{{@$editData->link}}" placeholder="Place your link" class="form-control">

                            </div>
                            <div class="form-group">

                                <label for="images">Upload File</label>
                                <input class="form-control-file" type="file" id="files" name="image">
                                <p class="help-block">pdf size must be 3mb</p>
                            </div>
                            <div class="form-group">
                                <label>Selected Image</label><br>
                                @if(empty($editData))
                                <img style="max-height: 100px;"  class="img-responsive" id="image" />
                                @else
                                <img style="max-height: 100px;" src="{{ asset('public/upload/performance/'.$editData->image) }}" class="img-responsive" id="image" />
                                @endif
                            </div>

                        </div>
                        <div class="col-12 col-sm-12">
                            <div class="form-group">
                                <label>Write Someting</label><br>
                                <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror textarea " name="description">{{ !empty($editData->description)? $editData->description : old('description') }}</textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
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
