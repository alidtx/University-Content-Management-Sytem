@extends('frontend.layouts.office-app')
@section('title', 'Demo Page')
@section('my_style')
@endsection
@section('content')

<!-- hero slider -->
<section style="margin-top: -25px;">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="{{ asset('public/frontend/images/banner/save_1.jpg') }}" alt="First slide">
				<div class="carousel-caption d-none d-md-block">
					<h1 class="animated fadeInRightBig">Welcome to <span style="color: #00b2ff">Arts and Humanities Faculty</span></h1>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="{{ asset('public/frontend/images/banner/save_2.jpg') }}" alt="Second slide">
				<div class="carousel-caption d-none d-md-block">
					<h1 class="animated fadeInUpBig">Welcome to <span style="color: #00b2ff">Arts and Humanities Faculty</span></h1>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="{{ asset('public/frontend/images/banner/save_3.jpg') }}" alt="Third slide">
				<div class="carousel-caption d-none d-md-block">
					<h1 class="animated fadeInDownBig">Welcome to <span style="color: #00b2ff">Arts and Humanities Faculty</span></h1>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control -next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</section>
<!-- /hero slider -->
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="row">
					<div class="col-12 col-sm-6" style="background-color: #00B2FF; margin: 40px 0;">
						<div class="row">
							<div class="col-10 offset-0 offset-sm-2">
								<h3 class="title-text my-font">All Offices</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<div class="round-image-right-curve">
						<img class="card-img-top" src="{{ asset('public/frontend/images/department/pharmacy.jpg') }}" alt="Card image cap">
					</div>
					
					<div class="card-body" style="padding-bottom: 10px;">
						<p class="card-text" style="font-weight: 700;font-size: 19px;">Department of <span style="color: #00B2FF;">Pharmacy</span></p>
					</div>
					<div class="overlay">
						<div class="text">
							<a href="" class="btn btn-primary">Pharmacy</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="round-image-right-curve">
						<img class="card-img-top" src="{{ asset('public/frontend/images/department/pharmacy.jpg') }}" alt="Card image cap">
					</div>
					
					<div class="card-body" style="padding-bottom: 10px;">
						<p class="card-text" style="font-weight: 700;font-size: 19px;">Department of <span style="color: #00B2FF;">Pharmacy</span></p>
					</div>
					<div class="overlay">
						<div class="text">
							<a href="" class="btn btn-primary">Pharmacy</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="round-image-right-curve">
						<img class="card-img-top" src="{{ asset('public/frontend/images/department/pharmacy.jpg') }}" alt="Card image cap">
					</div>
					
					<div class="card-body" style="padding-bottom: 10px;">
						<p class="card-text" style="font-weight: 700;font-size: 19px;">Department of <span style="color: #00B2FF;">Pharmacy</span></p>
					</div>
					<div class="overlay">
						<div class="text">
							<a href="" class="btn btn-primary">Pharmacy</a>
						</div>
					</div>
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
				<div class="card contact-card">
					<div class="card-body">
						<div class="inner-items-contactas">
							<div class="row">
								<div class="col-4 p-0"><img class="img-fluid d-block" src="{{ asset('public/frontend/images/icons/envelop.png') }}" alt=""></div>
								<div class="col-8" style="margin-top: 35px; margin-left: -25px;"><h5 class="my-font text-primary">Email</h5></div>
							</div>
						</div>
						<p class="my-font">Support87@gmail.com</p>
						<p class="my-font">ijkuiu874@gmail.com</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card contact-card">
					<div class="card-body">
						<div class="inner-items-contactas">
							<div class="row">
								<div class="col-4 p-0"><img class="img-fluid d-block" src="{{ asset('public/frontend/images/icons/call.png') }}" alt=""></div>
								<div class="col-8" style="margin-top: 35px; margin-left: -25px;"><h5 class="my-font">Call Us</h5></div>
							</div>
						</div>
						<p class="my-font">Support87@gmail.com</p>
						<p class="my-font">ijkuiu874@gmail.com</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card contact-card">
					<div class="card-body">
						<div class="inner-items-contactas">
							<div class="row">
								<div class="col-4 p-0"><img class="img-fluid d-block" src="{{ asset('public/frontend/images/icons/location.png') }}" alt=""></div>
								<div class="col-8" style="margin-top: 35px; margin-left: -25px;"><h5 class="my-font text-primary">Location</h5></div>
							</div>
						</div>
						<p class="my-font">Support87@gmail.com</p>
						<p class="my-font">ijkuiu874@gmail.com</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('java_script')
@endsection