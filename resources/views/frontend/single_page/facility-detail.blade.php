@extends('frontend.layouts.app')

@section('title', 'Demo Page')


@section('my_style')

<style>

</style>

@endsection


@section('content')

<section class="counter-numbers mb-3"
	style="padding-top: 200px; background: url({{ asset('public/frontend/images/banner/faculty.png')  }}); background-repeat: no-repeat; background-size: cover;">
	<div class="container">
		<h3 class="text-center text-white">{{ $data->title }}</h3>
	</div>
</section>



@include('frontend.partial.content-blue-header', ['title' => $data->title ])

<section>
	<div class="container my-5">
		<div class="row">
			<div class="col-12">

				{{ $data->short_description }}
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<img src="{{ asset('/public/upload/facility/'.$data->image) }}" alt=""
					class="img-fluid d-block my-4 mx-auto">
			</div>
		</div>
		<div class="row">
			<div class="col-12 my-5">
				{!! $data->long_description !!}
			</div>
		</div>
	</div>
</section>




@endsection



@section('java_script')
@endsection