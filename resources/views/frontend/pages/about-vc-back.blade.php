{{-- @extends('frontend.layouts.faculty-app') --}}
@extends('frontend.layouts.app')

@section('title', 'Faculties of Comilla University')


@section('my_style')
{{-- <style>
	.notice-title {
		background-color: #00B2FF;
		padding: 5px;
		text-transform: uppercase;
		color: #fff;
		font-family: "Raleway", sans-serif;
		font-size: 26px;
		font-weight: 700;
	}

	.advisor-info {
		margin: 50px 0;
	}

	.advisor-img-container {
		margin-bottom: 25px;
	}

	.advisor-img-container h4 {
		margin: 15px 0;
		font-family: work-sans, sans-serif;
		text-align: center;
		font-weight: 600;
	}

	.advisor-img-container p {
		font-family: work-sans, sans-serif;
		text-align: center;
	}

	.faculty-tab {
		border: none !important;
	}

	.faculty-tab .nav-item {
		background-color: #f1f1f1;
		border: none;
		margin: 5px;
	}

	.faculty-tab .nav-item .nav-link {
		border: none;
		text-decoration: none;
		color: #002147;
		border-radius: 0px;
		padding: 15px;
		text-transform: capitalize;
	}

	.faculty-tab .nav-tabs .nav-item.show .nav-link,
	.nav-tabs .nav-link.active {
		font-size: 16px;
		border: none !important;
		background-color: #00b2ff80;
	}

	.faculty-icon-list {
		/* margin: 15px 15%; */
		/* display:flex; */
		text-align: center;
		/* align-items:center; */
	}

	.faculty-icon-list ul {
		padding: 0;
		list-style: none;
		display: inline-block;
	}

	.faculty-icon-list ul li {
		display: inline-block;
		margin: 10px 5px;
		vertical-align: middle;
	}

	.faculty-icon-list ul li a {
		/* background-color: #2E3192; */
		padding: 5px;
		color: #fff;
		text-decoration: none;
	}

	.faculty-address-container {
		margin-top: 45px;
		padding: 25px 0;
	}

	.faculty-address-container i {
		color: #2257bf;
		font-size: 20px;
		background-color: #fff;
		padding: 5px;
		box-shadow: 0px 2.20399px 3.22122px rgba(0, 0, 0, 0.07);
		margin-right: 10px;
	}

	.faculty-address-container p {
		text-align: center;
		font-family: work-sans, sans-serif;
		/*padding: 15px 0;*/
	}
</style> --}}
<link rel="stylesheet" href="{{ asset('public/frontend/dist/css/profile.css') }}">
@endsection

@section('content')

<section class="counter-numbers" style="background: url({{ asset('public/frontend/images/banner/faculty.png')  }})">
	<div class="container">
		<div class="row">
			<div class="col">
				<h3 class="text-center font_one text-white">{{ $facultyMember->name }}</h3>
			</div>
		</div>
	</div>
</section>

<section>
	@include('frontend.partial.profile')
</section>



{{-- @include('frontend/layouts/footer') --}}

@endsection

@section('java_script')
<script>
	$(function(){

      $('.demo').easyTicker();

    });
</script>
@endsection