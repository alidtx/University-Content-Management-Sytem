{{-- @extends('frontend.layouts.office-app') --}}
@extends('frontend.layouts.faculty-app')

@php
$pageTitle = 'Proctor Office Contact';
@endphp

@section('title', $pageTitle)

@section('my_style')

@endsection
@section('content')
@include('frontend.layouts.proctor_office_header')
<!-- hero slider -->
{{-- @include('frontend.partial.vc-slider') --}}
<!-- /hero slider -->

<section>
	<iframe
		src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5252.923855264322!2d91.13437151180514!3d23.419821360498315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37547e78b6312e8d%3A0xa9c070c9b3e0d1b9!2sComilla%20University!5e0!3m2!1sen!2sbd!4v1662978485025!5m2!1sen!2sbd"
		width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
		referrerpolicy="no-referrer-when-downgrade"></iframe>
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


{{-- @section('java_script')
@endsection --}}