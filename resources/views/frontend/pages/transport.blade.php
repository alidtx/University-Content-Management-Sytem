@extends('frontend.layouts.app')

@php
$pageTitle = 'Transport Facilities of Comilla University';
@endphp

@section('title', $pageTitle)


@section('my_style')
	<style type="text/css">
		.title-text{
		     padding: 15px;
		     color: #fff;
		   }
	</style>
@endsection

@section('content')


<section class="counter-numbers" style="background: url({{ asset('public/frontend/images/banner.png') }}); background-position: center center; background-size:cover; margin-top: 95px;">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3 class="text-center font_four text-white">University Transport</h3>
    </div>
  </div>
</section>


<section>
	@foreach($transports as $i => $item)
	  <div class="container-fluid">
	    <div class="row">
	      <div class="col-12">
	        <div class="row">
	          <div class="col-12 col-sm-6" style="background-color: #00B2FF; margin: 40px 0;">
	            <div class="row">
	              <div class="col-10 offset-0 offset-sm-2">
	                  <h3 class="title-text my-font">{{ $item->route_title }}</h3>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="container">
	  	<div class="row my-4">
	  		<div class="col-12 col-sm-6">
	  			<div class="table-responsive">
	  				<table class="table table-bordered">
	  					<tr>
	  						<td colspan="2">Up Route</td>
	  					</tr>
	  					<tr>
	  						<td colspan="2">{{ $item->transport_up_root }}</td>
	  					</tr>
	  					<tr>
	  						<th>Start Time</th>
	  						<th>Arrival Time</th>
	  					</tr>
	  					@foreach($item->up as $up)
	  					<tr>
	  						<td>{{ $up->start_time }}</td>
	  						<td>{{ $up->end_time }}</td>
	  					</tr>
	  					@endforeach
	  				</table>
	  			</div>
	  		</div>
	  		<div class="col-12 col-sm-6">
	  			<div class="table-responsive">
	  				<table class="table table-bordered">
	  					<tr>
	  						<td colspan="2">Down Route</td>
	  					</tr>
	  					<tr>
	  						<td colspan="2">{{ $item->transport_down_root }}</td>
	  					</tr>
	  					<tr>
	  						<th>Start Time</th>
	  						<th>Arrival Time</th>
	  					</tr>
	  					@foreach($item->down as $down)
	  					<tr>
	  						<td>{{ $down->start_time }}</td>
	  						<td>{{ $down->end_time }}</td>
	  					</tr>
	  					@endforeach
	  				</table>
	  			</div>
	  		</div>
	  	</div>
	  </div>
	@endforeach
</section>



@endsection
