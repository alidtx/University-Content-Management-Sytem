@extends('frontend.layouts.app')
@php
$pageTitle = "Dr. Md. Saifur Rahman";
@endphp
@section('title', $pageTitle )

@section('my_style')

<style>
	.faculty-icon-list {
		text-align: center;
		margin: 15px 0;
	}

	.faculty-icon-list ul {
		padding: 0;
		list-style: none;
		display: inline-block;
		margin: 10px 0;
	}

	.faculty-icon-list ul li {
		display: inline-block;
		margin: 0 5px;
		vertical-align: middle;
	}

	.faculty-icon-list ul li a {
		/*padding: 5px;*/
		color: #fff;
		text-decoration: none;
	}

	.faculty-icon-list ul li a img {
		max-height: 32px;
	}

	.faculty-address-container i {
		color: #2257bf;
		font-size: 20px;
		background-color: #fff;
		padding: 5px;
		box-shadow: 0px 2.20399px 3.22122px rgb(0 0 0 / 7%);
		margin-right: 10px;
	}

	/*.faculty-tab .nav-item{
		margin: 0 5px;
	}
	.faculty-tab .nav-item::before{
		background-color: #00b2ff;
		content: none;
	}
	.faculty-tab .nav-item .nav-link{
		background-color: #00b2ff;
		border-radius: 5px;
		height: 76px;
		min-width: 170px
	}
	.faculty-tab .nav-item .active{
		background-color: #18AD4D;
	}
	.faculty-tab .nav-item img{
		max-height: 36px;
		margin-top: 10px;
		margin-right: 5px;
		margin-left: 5px;
	}*/

	.nav-tabs .nav-item.show .nav-link,
	.nav-tabs .nav-link.active {
		border: none;
		background-color: #18AD4D;
	}

	.public-tab .nav-item .nav-link {
		color: #000;
		border-bottom: 2px solid #000;
		word-break: break-all;
	}

	.public-tab .nav-tabs .nav-item.show .nav-link,
	.nav-tabs .nav-link.active {
		background-color: #fff;
		color: #00b2ff;
		border-color: #00b2ff;
	}

	.public-tab .nav-item::before {
		background-color: #00b2ff;
		content: none;
	}

	@media only screen and (max-width: 600px) {
		.faculty-tab .nav-item {
			margin: 0px;
		}
	}

	.rep-icon {
		position: fixed;
		top: 250px;
		right: 0px;
		z-index: 999;
	}

	.rep-icon ul {
		list-style: none;
	}

	.rep-icon ul li {
		padding: 12px 15px;
		background-color: #00b2ff;
		margin: 10px 0;
		transition: 1s;
	}

	.rep-icon ul li a {
		color: #fff;
		text-decoration: none;
		font-size: 18px;
	}

	.rep-icon ul li:hover {
		background-color: #18AD4D;
		transition: 1s;
	}

	.ui-tab>a>.bg-new-info {
		background: #00b2ff;
	}

	.ui-tab.ui-tabs-active>a>.bg-new-info {
		background: #18AD4D;
	}
</style>
@endsection


@section('content')

<div class="rep-icon">
	<ul>
		<li><a href=""><i class="ti-skype"></i></a></li>
		<li><a href=""><i class="ti-twitter-alt"></i></a></li>
		<li><a href=""><i class="ti-instagram"></i></a></li>
		<li><a href=""><i class="ti-facebook"></i></a></li>
	</ul>
</div>


@include('frontend.partial.content-header', ['pageTitle' => $pageTitle, 'bannerImageLink' => 'faculty.png'])


<section class="bg-light">
	<div class="container py-5">
		<div class="row">
			<div class="col-12 col-sm-3 border bg-white">
				<div class="position-relative p-4">
					<div class="round-image">
						<img class="img-fluid" src="{{ asset('public/frontend/dist/images/about/humayun.png') }}"
							alt="Pro Vice Chancellor" />
					</div>
				</div>
				<h4 class="text-center" style="font-size: 18px;">Dr. Md. Saifur Rahman</h4>
				<p class="text-center text-primary">
					Associate Professor
				</p>

				<div class="faculty-address-container">
					<div class="row p-3 border-bottom border-top mt-4">
						<div class="col-2"><i class="ti-location-pin"></i></div>
						<div class="col-10">
							<p class="text-justify p-0">
								Comilla University<br>
								Comilla-3506, Bangladesh
							</p>
						</div>
					</div>

					<div class="row p-3 border-bottom">
						<div class="col-2"><i class="ti-email"></i></div>
						<div class="col-10">saifurice@cou.ac.bd</div>
					</div>
					<div class="row p-3 border-bottom ">
						<div class="col-2"><i class="ti-mobile"></i></div>
						<div class="col-10">+880 1312 571 157</div>
					</div>
				</div>
				<div class="faculty-icon-list">
					<ul>
						<li><a href="">
								<img src="{{ asset('public/frontend/cuimages/google-scholar.png') }}">
							</a></li>
						<li><a href="">
								<img src="{{ asset('public/frontend/cuimages/linkedin-fill.png') }}">
							</a></li>
						<li><a href="">
								<img src="{{ asset('public/frontend/cuimages/reachergate-fill.png') }}">
							</a></li>
						<li><a href="">
								<img src="{{ asset('public/frontend/cuimages/web-fill.png') }}">
							</a></li>
						<li><a href="">
								<img src="{{ asset('public/frontend/cuimages/id-icon.png') }}">
							</a></li>
					</ul>
				</div>
			</div>


			<div class="col-12 col-sm-9">
				<div id="tabs">
					<ul class="row list-unstyled border bg-white py-2" style="margin: 0 1px;">
						<li class="col-12 col-sm-3">
							<a class="text-decoration-none" href="#tabs-1">
								<div class="bg-new-info p-2 my-1" style="border-radius: 5px">
									<div class="row">
										<div class="col-4">
											<img src="{{ asset('public/frontend/dist/images/icons/icons8-biography.png') }}"
												alt="" class="img-fluid" style="min-width: 50px;">
										</div>
										<div class="col-8">
											<p class="text-white mt-3">Biography</p>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="col-12 col-sm-3">
							<a class="text-decoration-none" href="#tabs-2">
								<div class="bg-new-info p-2 my-1" style="border-radius: 5px">
									<div class="row">
										<div class="col-4">
											<img src="{{ asset('public/frontend/dist/images/icons/icons8-graduation-cap.png') }}"
												alt="" class="img-fluid" style="min-width: 50px;">
										</div>
										<div class="col-8">
											<p class="text-white mt-3">Qualification</p>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="col-12 col-sm-3">
							<a class="text-decoration-none" href="#tabs-3">
								<div class="bg-new-info p-2 my-1" style="border-radius: 5px">
									<div class="row">
										<div class="col-4">
											<img src="{{ asset('public/frontend/dist/images/icons/icons8-magazine.png') }}"
												alt="" class="img-fluid" style="min-width: 50px;">
										</div>
										<div class="col-8">
											<p class="text-white mt-3">Publication</p>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="col-12 col-sm-3">
							<a class="text-decoration-none" href="#tabs-4">
								<div class="bg-new-info p-2 my-1" style="border-radius: 5px">
									<div class="row">
										<div class="col-4">
											<img src="{{ asset('public/frontend/dist/images/icons/icons8-research.png') }}"
												alt="" class="img-fluid" style="min-width: 50px;">
										</div>
										<div class="col-8">
											<p class="text-white mt-3 mt-sm-1">Research Interest</p>
										</div>
									</div>
								</div>
							</a>
						</li>
					</ul>
					<div class="border bg-white p-4 mt-4">
						<div id="tabs-1">
							<h3>Biography</h3>
						</div>
						<div id="tabs-2">
							<h3>Qualification</h3>
						</div>
						<div id="tabs-3">
							<div class="">
								<ul class="nav nav-tabs public-tab" id="myTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
											role="tab" aria-controls="home" aria-selected="true">Publish Journals</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
											role="tab" aria-controls="profile" aria-selected="false">Publish Books</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact"
											role="tab" aria-controls="contact" aria-selected="false">Conference
											Papers</a>
									</li>
								</ul>
								<div class="tab-content p-4" id="myTabContent">
									<div class="tab-pane fade show active" id="home" role="tabpanel"
										aria-labelledby="home-tab">
										<p class="text-justify" style="line-height: 24px; font-size: 12px;">
											1. <strong> Fundamental Frequency Extraction of Noisy Speech Using Exponent
												Enhancement in Weighted Autocorrelation</strong> <br>
											October 2021 <br>
											Md. Saifur Rahman, Miss. Nargis Parvin, “Fundamental Frequency Extraction of
											Noisy Speech Using Exponent Enhancement in Weighted Autocorrelation”,
											Advances in Intelligent Systems and Computing, Springer, Vol. 1408, October
											2021. <br> <br>
											2. <strong> Fundamental Frequency Extraction of Noisy Speech Using Exponent
												Enhancement in Weighted Autocorrelation </strong><br>
											October 2021<br>
											Md. Saifur Rahman, Miss. Nargis Parvin, “Fundamental Frequency Extraction of
											Noisy Speech Using Exponent Enhancement in Weighted Autocorrelation”,
											Advances in Intelligent Systems and Computing, Springer, Vol. 1408, October
											2021.<br> <br>
											3. <strong> Fundamental Frequency Extraction of Noisy Speech Using Exponent
												Enhancement in Weighted Autocorrelation </strong> <br>
											October 2021<br>
											Md. Saifur Rahman, Miss. Nargis Parvin, “Fundamental Frequency Extraction of
											Noisy Speech Using Exponent Enhancement in Weighted Autocorrelation”,
											Advances in Intelligent Systems and Computing, Springer, Vol. 1408, October
											2021.<br> <br>
											4. <strong> Fundamental Frequency Extraction of Noisy Speech Using Exponent
												Enhancement in Weighted Autocorrelation </strong> <br>
											October 2021<br>
											Md. Saifur Rahman, Miss. Nargis Parvin, “Fundamental Frequency Extraction of
											Noisy Speech Using Exponent Enhancement in Weighted Autocorrelation”,
											Advances in Intelligent Systems and Computing, Springer, Vol. 1408, October
											2021.<br> <br>
											5. <strong> Fundamental Frequency Extraction of Noisy Speech Using Exponent
												Enhancement in Weighted Autocorrelation </strong> <br>
											October 2021 <br>
											Md. Saifur Rahman, Miss. Nargis Parvin, “Fundamental Frequency Extraction of
											Noisy Speech Using Exponent Enhancement in Weighted Autocorrelation”,
											Advances in Intelligent Systems and Computing, Springer, Vol. 1408, October
											2021. <br> <br>
											6. <strong> Fundamental Frequency Extraction of Noisy Speech Using Exponent
												Enhancement in Weighted Autocorrelation </strong> <br>
											October 2021 <br>
											Md. Saifur Rahman, Miss. Nargis Parvin, “Fundamental Frequency Extraction of
											Noisy Speech Using Exponent Enhancement in Weighted Autocorrelation”,
											Advances in Intelligent Systems and Computing, Springer, Vol. 1408, October
											2021.<br> <br>
											7. <strong> Fundamental Frequency Extraction of Noisy Speech Using Exponent
												Enhancement in Weighted Autocorrelation </strong> <br>
											October 2021 <br>
											Md. Saifur Rahman, Miss. Nargis Parvin, “Fundamental Frequency Extraction of
											Noisy Speech Using Exponent Enhancement in Weighted Autocorrelation”,
											Advances in Intelligent Systems and Computing, Springer, Vol. 1408, October
											2021.
										</p>
									</div>
									<div class="tab-pane fade" id="profile" role="tabpanel"
										aria-labelledby="profile-tab">
										<p>
											Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti
											necessitatibus totam ipsa accusantium aspernatur, dicta maxime fuga,
											mollitia, voluptatum non reprehenderit ab delectus. Magnam id praesentium
											nihil neque aspernatur sit.
										</p>
									</div>
									<div class="tab-pane fade" id="contact" role="tabpanel"
										aria-labelledby="contact-tab">
										<p>
											Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti
											necessitatibus totam ipsa accusantium aspernatur, dicta maxime fuga,
											mollitia, voluptatum non reprehenderit ab delectus. Magnam id praesentium
											nihil neque aspernatur sit.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div id="tabs-4">
							<h3>Research Interest</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection


@section('java_script')

<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
	$( function() {
		$( "#tabs" ).tabs();
		} );
</script>
@endsection