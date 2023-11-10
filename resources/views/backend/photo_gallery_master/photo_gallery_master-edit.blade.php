
@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ !empty($editData)? 'Update Photo Gallery' : 'Add Photo Gallery Master' }}</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Photo Gallery </li>
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
                        <a href="{{route('top-menu.photo_gallery_master')}}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i> View Photo Gallery</a>
                    </div>
            <div class="card-body">
                <form id=""  action="{{ route('top-menu.photo_gallery_master.update',$editImageGallery->id)}}"   method="post" enctype="multipart/form-data" autocomplete="off">

                    @csrf
                    <div class="form-row">

                        <div class="form-group col-sm-4">
                            <label>Name</label>
                            <input id="name" type="text" value="{{$editImageGallery->name}}"  class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name"> @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>

                        <div class="form-group col-sm-4">

                            <label>Type</label>
                                <select id="type_name" name="type" class="form-control select2">
                                      <option {{ $editImageGallery->type == 1 ? "selected" : ""}} value="1">Faculty</option>
                                      <option {{ $editImageGallery->type == 2 ? "selected" : ""}} value="2">Department</option>
                                      <option {{ $editImageGallery->type == 3 ? "selected" : ""}} value="3">Office</option>
                                      <option {{ $editImageGallery->type == 4 ? "selected" : ""}} value="4">Hall</option>
                                </select>
                            @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>



                        <div class="form-group col-sm-4">
                            <label>Category</label>
                            <select id="category_id" name="category_id" class="form-control select2">

                                {{-- @foreach($categories as $category)

                                <option value="{{$category->id}}" {{ $editImageGallery->category_id== $category->id ? "selected" : "" }} > {{$category->name}}</option>

                                @endforeach --}}

                            </select>
                            @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-4">
                            <label>Status</label>
                            <select name="status" class="form-control select2">
                                <option {{ $editImageGallery->status == 1 ? "selected" : ""}} value="1">Active</option>
                                <option {{ $editImageGallery->status == 0 ? "selected" : ""}} value="0">Inactive</option>

                            </select>
                        </div>
                    </div>
                    <button class="btn bg-gradient-success btn-sm"><i class="fas fa-save"></i> Save Gallery Master</button>
                </form>
            </div>
        </div>
        <!--/. container-fluid -->
    </section>

    <script type="text/javascript">

        $(document).ready(function() {

          $(".btn-success").click(function(){
              var html = $(".clone").html();
              $(".increment").after(html);
          });

          $("body").on("click",".btn-danger",function(){
              $(this).parents(".control-group").remove();
          });

        });

    $(function(){

   $('#type_name').trigger('change');


    });

        $(document).on('select change','#type_name',function(){

          var type_id = $('#type_name').val();

          console.log(type_id);

          $.ajax({

              url: "{{ route('category_wise_photo') }}",
              type: "GET",
              data: { type_id: type_id },
              success: function(data)

              {

                 // console.log(data);


                  if(data != 'fail')
                  {
                      $('#category_id').empty();
                      if(type_id == "")
                      {
                          $('#category_id').append('');
                      }

                      var selected = "{{@$editImageGallery->category_id}}";

                      $.each(data,function(index,category){

                         // $('#category_id').append('<option value ="'+category.id+'">'+category.name +'</option>');
                          $('#category_id').append('<option value ="'+category.id+'"'+((category.id==selected)?('selected'):'')+'>'+category.name +'</option>');
                      });
                  }
                  else
                  {
                      $('#category_id').append('');
                      //console.log('failed');

                  }
                //  $('#type_name').trigger('change');
              }
          });
      });














    </script>

    @endsection
