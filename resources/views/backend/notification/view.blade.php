@extends('backend.layouts.app')
@section('content')
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

            <h1 class="m-0 text-dark">View Notification</h1>
            @if(session()->has('message'))
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                {{session('message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            @endif
          </div>
          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Notification</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
        	<div class="col-lg-12">
	        	<div class="card">
	        		<div class="card-header">
	        			<a href="{{url('backend/setup/notification/add')}}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add Popup Notification</a>
	        		</div>
		            <div class="card-body">
		              <table id="dataTable" class="table table-sm table-bordered table-striped ">
		                <thead>
		                <tr>
		                  <th width="5%">#</th>
		                  <th><center>Notification</center> </th>
		                  <th><center>Use For</center> </th>
                         <th width="8.5%" >Action</th>
                         <th width="8%"><center>Notification Status</center> </th>
		                </tr>
		                </thead>
		                <tbody>
		                 @foreach($notification as $item)
		                <tr>
		                  <td> {{$loop->iteration}}</td>
		                  <td> {{$item->notifaction}}</td>
                          <td>
                          @if ($item->category==1)
                                  Home
                                  @elseif ($item->category==2)
                                  Faculty
                                  @elseif ($item->category==3)
                                  Hall
                                  @elseif ($item->category==4)
                                  Department
                                  @elseif ($item->category==4)
                                  Program
                               @endif
                            </td>
		                  <td><a href="{{url('backend/setup/notification/add')}}/{{$item->id}}" class="btn btn-primary btn-flat btn-sm" data-type="image"><i class="fas fa-edit"></i></a> |
                          <a href="{{url('backend/setup/notification/delete')}}/{{$item->id}}" class="delete btn btn-danger btn-flat btn-sm" data-route="" data-id="" ><i class="fas fa-trash"></i></a>
		                  </td>
                           <td>
                            @if ($item->status==0)
                            <a href="{{url('backend/setup/notification/1')}}/{{$item->id}}" class="active btn btn-danger btn-flat btn-sm" data-route="" data-id="" >Deactive</a>
                            @elseif($item->status==1)
                            <a href="{{url('backend/setup/notification/0')}}/{{$item->id}}" class="Deactive btn btn-primary btn-flat btn-sm" data-route="" data-id="" >Active</a>
                            @endif
                           </td>
		                </tr>
		                @endforeach
		                </tbody>
		              </table>
		            </div>
          		</div>
        	</div>
        </div>
      </div>
    </section>
@endsection

