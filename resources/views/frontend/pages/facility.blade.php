@extends('frontend.layouts.app')

@php
$pageTitle='All Facilities';
@endphp

@section('title', $pageTitle)


@section('my_style')

<style>
	.facility-img-container{
		position: relative;
  		/*width: 50%;*/
	}

	.facility-img-container > img {
	  opacity: 1;
	  display: block;
	  width: 100%;
	  height: auto;
	  transition: .5s ease;
	  backface-visibility: hidden;
	}

	.middle {
	  transition: .5s ease;
	  opacity: 0;
	  position: absolute;
	  top: 50%;
	  left: 50%;
	  transform: translate(-50%, -50%);
	  -ms-transform: translate(-50%, -50%);
	  text-align: center;
	}

	.facility-img-container:hover >img {
	  opacity: 0.4;
	}

	.facility-img-container:hover .middle {
	  opacity: 1;
	}

	.facility-text {
	  background-color: #00b2ff;
	  color: white;
	  font-size: 16px;
	  padding: 16px 25px;
	}

</style>

@endsection


@section('content')

<section class="counter-numbers mb-3" style="padding-top: 200px; background: url({{ asset('public/frontend/images/banner/faculty.png')  }}); background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <h3 class="text-center text-white">All Facilities</h3>
    </div>
</section>

<section>
	<div class="container my-5">
		<div class="row">
			@foreach($facility as $item)
			<div class="col-12 col-sm-4">
				<div class="facility-img-container my-4">
				  	<img src="{{ asset('/public/upload/facility/'.$item->image) }}" alt="Avatar" class="img-fluid">
				  	<div class="middle">
				    	<div class="facility-text">
				    		<a class="text-white text-decoration-none" href="{{ route('facility.details', $item->short_url) }}">{{ $item->title }}</a>
				    	</div>
				  	</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>	




@endsection



@section('java_script')
@endsection