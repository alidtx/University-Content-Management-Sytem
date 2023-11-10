@extends('backend.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Academic Information</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Academic Information</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
     <div class="col-lg-12">
      <div class="card">

        <div class="card-header">
          <a href="{{ route('academic.add') }}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add Academic</a>
          {{-- <a href="{{ route('department_to_members') }}" target="_blank" class="btn btn-sm btn-info float-right"><i class="fas fa-stream"></i> View Member to Department</a> --}}
        </div>

        <div class="card-body">
          <table id="dataTable" class="table table-sm table-bordered table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Type</th>
                <th>Faculty</th>
                <th>Department</th>
                <th>Program</th>
                <th>Title</th>
                <th>Session</th>
                <th>File</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($academics as $academic)
              <tr>
                <td>{{ $loop->iteration }}</td>
                @if($academic['type_id']==1)
                <td>Routine</td>
                @elseif($academic['type_id']==2)
                <td>Result</td>
                @elseif($academic['type_id']==3)
                <td>Calender</td>
                @elseif($academic['type_id']==4)
                <td>Curriculum</td>
                @elseif($academic['type_id']==5)
                <td>Prospectus</td>
                @endif

                <td>{{ $academic['faculty']['name'] }}</td>
                <td>{{ $academic['department']['name'] }}</td>
                <td>{{ @$academic['program']['name'] }}</td>
                <td>{{ $academic['title'] }}</td>
                <td>{{ $academic['session'] }}</td>
                {{-- <td>{{ $academic['file'] }}</td> --}}
                <td style="text-align: center;">
                  @php $attachments = \App\Model\Academic::where('id',$academic->id)->get(); @endphp
                  {{-- @dd($attachments) --}}
                  @foreach($attachments as $attachment)
                  @php
                    if($attachment->file != Null)
                    {
                        $ext = explode('.',$attachment->file);
                    }
                  @endphp
                  @if($attachment->file != Null && $ext[1] == 'pdf') <a target="_blank" href="{{ asset('storage/app/public/upload/academic/'.$attachment->file) }}"><img src="{{ asset('public/frontend/images/pdf_icon.png') }}" height="40"></a>@endif
                  @if($attachment->file != Null && ($ext[1] == 'doc' || $ext[1] == 'docm' || $ext[1] == 'docx')) <a target="_blank" href="{{ asset('storage/app/public/upload/academic/'.$attachment->file) }}"><img src="{{ asset('public/frontend/images/doc_icon.png') }}" height="40"></a>@endif
                  @endforeach
              </td>

                <td><a href="{{ route('academic.edit',$academic->id) }}" class="btn btn-primary btn-flat btn-sm edit" data-type="image" data-id="" data-table="Slider"><i class="fas fa-edit"></i></a> | <a  class="delete btn btn-danger btn-flat btn-sm" data-route = "{{ route('academic.delete') }}" data-id="{{ $academic->id }}" ><i class="fas fa-trash"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
<!--/. container-fluid -->
</section>
@endsection

