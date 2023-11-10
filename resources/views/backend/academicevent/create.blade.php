@extends('backend.layouts.app')


@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">{{ !empty($editData)? 'Edit':'Create'  }} Academic Activity Calender </h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Academic Calender</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>



<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card"> 
          <div class="card-header">
            <a href="{{ route('academic-routine.event.list') }}" class="btn btn-sm btn-info"><i class="fas fa-arrow-left"></i> Back</a>
            
          </div>
          <div class="card-body">
            <form action="{{ !empty($editData)? route('academic-routine.event.update',$editData->id) : route('academic-routine.event.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror " id="title" name="title" placeholder="Event Title" value="{{ !empty($editData)? @$editData->title : old('title') }}">
                  @error('title')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span> 
                  @enderror
                </div>
                <div class="form-group">
                  <label for="department_id">Select Department</label>
                  <select class="form-control @error('department_id') is-invalid @enderror" id="department_id" name="department_id">
                    <option value="" selected>Select an Option</option>
                    @foreach($departments as $item)
                    <option value="{{ $item->id }}" {{ @$editData->department_id == $item->id ? 'selected': '' }}>{{ $item->name }}</option>
                    @endforeach
                  </select>
                  @error('department_id')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span> 
                  @enderror
                </div>

                <div class="form-group">
                  <label for="type">Academic Program Type</label>
                  <select class="form-control @error('type') is-invalid @enderror" id="type" name="type">
                    <option value="" selected>Select an Option</option>
                    <option value="1" {{ @$editData->type == 1 ? 'selected': '' }}>Weekend</option>
                    <option value="2" {{ @$editData->type == 2 ? 'selected': '' }}>Holiday</option>
                    <option value="3" {{ @$editData->type == 3 ? 'selected': '' }}>Exam</option>
                    <option value="4" {{ @$editData->type == 4 ? 'selected': '' }}>University Program</option>
                  </select>
                  @error('type')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span> 
                  @enderror
                </div>
                <div class="form-group">
                  <label for="description">Activity Details</label>
                  <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="5" name="description"></textarea>
                  @error('description')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span> 
                  @enderror
                </div>
                
              </div>
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label for="status">Status</label>
                  <select class="form-control" id="status" name="status">
                    <option value="" selected>Select an Option</option>
                    <option value="1" {{ @$editData->status == 1 ? 'selected': '' }}>Active</option>
                    <option value="2" {{ @$editData->status == 2 ? 'selected': '' }}>Inactive</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="color">Field Color</label>
                  <input type="color" class="form-control @error('color') is-invalid @enderror" id="color" name="color" placeholder="Event Title" value="{{ !empty($editData)? @$editData->color : old('color') }}">
                  @error('color')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span> 
                  @enderror
                </div>
                <div class="form-group">
                  <label for="start_date">Start Day</label>
                  <input type="date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" name="start_date" placeholder="Event Start Date" value="{{ !empty($editData)? @$editData->start_date : old('start_date') }}">
                  @error('start_date')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span> 
                  @enderror
                </div>
                <div class="form-group">
                  <label for="end_date">End Day</label>
                  <input type="date" class="form-control @error('end_date') is-invalid @enderror" id="end_date" name="end_date" placeholder="Event End Day" value="{{ !empty($editData)? @$editData->end_date : old('end_date') }}">
                  @error('end_date')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span> 
                  @enderror
                </div>
                
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                 <button type="submit" class="btn btn-primary">{{ !empty($editData)? 'Update':'Submit'  }} </button>
              </div>
            </div>
        </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--/. container-fluid -->

@endsection