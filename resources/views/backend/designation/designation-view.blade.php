@extends('backend.layouts.app')
@section('content')
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Designation</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Designation</li>
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
	        			<a href="{{route('site-setting.designation.add')}}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add Designation</a>
	        		</div>
		            <div class="card-body">
		              <table id="dataTable" class="table table-sm table-bordered table-striped">
		                <thead>
		                <tr>
		                  <th width="120">#</th>
		                  <th>Designation</th>
		                  <th>Purpose</th>
		                  <th>Layer</th>
		                  <th>Sort</th>
                      <th width="80">Action</th>
		                </tr>
		                </thead>
		                <tbody>
		                @foreach($designations as $key => $designation)	
                  
		                <tr>		                  	                 
		                  <td> {{$loop->iteration}}</td>
                      <td>{{ $designation['name'] }}</td>
                      
                      @if ($designation['purpose']==1)
                      <td>Faculty</td>
                      @elseif ($designation['purpose']==2)
                      <td>Office Staff</td>
                      @elseif ($designation['purpose']==3)
                      <td>Syndicate</td>
                      @elseif ($designation['purpose']==4)
                      <td>Senate</td>
                      @else
                      <td></td>
                      @endif

                      @if ($designation['layer']==1)
                      <td>Top</td>
                      @elseif ($designation['layer']==2)
                      <td>Middle</td>
                      @elseif ($designation['layer']==3)
                      <td>Low</td>
                      @else
                      <td></td>
                      @endif

                      <td>{{ $designation['sort_order'] }}</td>

		                  <td>
                        <a href="{{ route('site-setting.designation.edit',$designation->id) }}" class="btn btn-primary btn-flat btn-sm edit" data-type="image" data-id="" data-table="Slider"><i class="fas fa-edit"></i></a> | 
                        <a class="delete btn btn-danger btn-flat btn-sm" data-route = "{{ route('site-setting.designation.delete') }}"  data-id="{{$designation->id}}" data-table="roles" ><i class="fas fa-trash"></i></a>
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
<script>
    function ConfirmDelete()
    {
      var x = confirm("Are you sure you want to delete?");
      if (x)
          return true;
      else
        return false;
    }
</script> @endsection

