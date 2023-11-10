{{-- @extends('frontend.layouts.office-app') --}}
@extends('frontend.layouts.faculty-app')

@php
$pageTitle = 'Proctor Office';
@endphp

@section('title', $pageTitle)

@section('my_style')

@endsection
@section('content')

@include('frontend.layouts.proctor_office_header')

<!-- hero slider -->
@include('frontend.partial.vc-slider')
<!-- /hero slider -->

<section>
	<div class="container">
		<div class="row my-5">
			<div class="col-12 col-sm-4">
				<div class="mb-md-0">
					<div class="round-image">
						<img class="img-fluid w-100"
							src="{{ asset('public/upload/members/' . $office->member->image) }}"
							onerror="this.onerror=null;this.src='{{ asset('public/frontend/images/about/user-dummy.jpeg') }}';"
							alt="about image">
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-8">
				{{-- <h2>Message of the <span class="text-primary">Proctor</span></h1>
					<p class="text-justify">
						Comilla University (Bengali: কুমিল্লা বিশ্ববিদ্যালয়) is a public university located at Kotbari,
						Comilla, Bangladesh. The university was constructed on 50 acres (200,000 m2) of land at Lalmai
						Bihar, Moynamoti. Comilla University is affiliated by University Grants Commission, Bangladesh.
						<br> <br>

						Comilla University (Bengali: কুমিল্লা বিশ্ববিদ্যালয়) is a public university located at Kotbari,
						Comilla, Bangladesh. The university was constructed on 50 acres (200,000 m2) of land at Lalmai
						Bihar, Moynamoti. Comilla University is affiliated by University Grants Commission,
						Bangladesh.<br> <br>

					</p> --}}

					{{-- @dd($directorMessage->short_description) --}}
					@if($directorMessage->short_description != null)

					<h2>Message of the <span class="text-primary">Proctor</span></h1>
						<p class="text-justify">

							{!!@$directorMessage->short_description!!}
							{{-- <br> --}}
							{{-- {!!@$directorMessage->long_description!!} --}}

						</p>
						@endif
						<div class="d-inline">
							<h3>{{$office->member->name}}</h3>
							<b class="text-primary">Proctor</b> <br />
							{{-- <b class="text-primary">7th Vice Chancellor</b> <br /> --}}
							{{-- <h6>1 January 2022 to present</h6> --}}

						</div>
			</div>

		</div>
	</div>
</section>

<section class="contact-us">
	<div class="container">
		<div class="row">
			<div class="col">
				<h3 class="my-font my-5">Feel <span class="text-primary">Free to Contact </span> With Us</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="card contact-card my-4">
					<div class="card-body">
						<div class="inner-items-contactas">
							<div class="row">
								<div class="col-4 p-0"><img class="img-fluid d-block"
										src="{{ asset('public/frontend/images/icons/envelop.png') }}" alt=""></div>
								<div class="col-8" style="margin-top: 35px; margin-left: -25px;">
									<h5 class="my-font text-primary">Email</h5>
								</div>
							</div>
						</div>
						<p class="my-font">{{ $office->email }}</p>
						{{-- <p class="my-font">ijkuiu874@gmail.com</p> --}}
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card contact-card my-4">
					<div class="card-body">
						<div class="inner-items-contactas">
							<div class="row">
								<div class="col-4 p-0"><img class="img-fluid d-block"
										src="{{ asset('public/frontend/images/icons/call.png') }}" alt=""></div>
								<div class="col-8" style="margin-top: 35px; margin-left: -25px;">
									<h5 class="my-font">Call Us</h5>
								</div>
							</div>
						</div>
						<p class="my-font">(+88) {{ $office->contact_number }}</p>
						{{-- <p class="my-font">(+88) 02334411145</p> --}}
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card contact-card my-4">
					<div class="card-body">
						<div class="inner-items-contactas">
							<div class="row">
								<div class="col-4 p-0"><img class="img-fluid d-block"
										src="{{ asset('public/frontend/images/icons/location.png') }}" alt=""></div>
								<div class="col-8" style="margin-top: 35px; margin-left: -25px;">
									<h5 class="my-font text-primary">Location</h5>
								</div>
							</div>
						</div>
						<p class="my-font">{{ $office->location }}</p>
						{{-- <p class="my-font">Comilla University</p> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@include('frontend/layouts/footer')
@endsection


{{-- @section('java_script') --}}
{{-- @endsection --}}