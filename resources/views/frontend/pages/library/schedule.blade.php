@extends('frontend.layouts.library_app')


@php
$pageTitle= "University Library" ;
@endphp

@section('title', $pageTitle)


@section('my_style')
<style>
	.book-container {
		margin: 15px 0;
		transition: .5s;
	}

	.book-container:hover {
		background-color: #f8f9fa;
		transition: .5s;
	}

	.book-container h5 {
		height: 45px;
		overflow: hidden;
	}

	.book-container img {
		max-height: 220px;
		display: block;
		margin: 5px auto;
	}

	.text-black {
		color: #000 !important;
	}

	.card-title {
		margin-bottom: 0px;
	}
</style>
@endsection

@section('content')

<div class="my-5"></div>

@include('frontend.partial.content-header', ['pageTitle' => $pageTitle, 'bannerImageLink' => 'faculty.png'])

{{-- @include('frontend.partial.content-blue-header', ['title' => 'Time Schedule']) --}}


<section>

	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="row">
					<div class="col-12 col-sm-6" style="background-color: #00B2FF; margin: 40px 0;">
						<div class="row">
							<div class="col-10 offset-0 offset-sm-2">
								<h3 class="title-text my-font">Library Time Schedule</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row my-4">
			<div class="col-12 col-sm-8">
				<div class="table-responsive">
					<table class="table table-bordered">
						<tr>
							<td colspan="2">University Time and Date</td>
						</tr>
						<tr>
							{{-- <td colspan="2">{{ $item->transport_up_root }}</td> --}}
						</tr>
						<tr>
							<th>Weak Day</th>
							<th>Time Schedule</th>
						</tr>

						<tr>
							<td>Staturday</td>
							<td>{{ $scheduale->saturday_time }}</td>
						</tr>
						<tr>
							<td>Sunday</td>
							<td>{{ $scheduale->sunday_time }}</td>
						</tr>
						<tr>
							<td>Monday</td>
							<td>{{ $scheduale->monday_time }}</td>
						</tr>
						<tr>
							<td>Tuesday</td>
							<td>{{ $scheduale->tuesday_time }}</td>
						</tr>
						<tr>
							<td>Wednesday</td>
							<td>{{ $scheduale->wednesday_time }}</td>
						</tr>
						<tr>
							<td>Thursday</td>
							<td>{{ $scheduale->thursday_time }}</td>
						</tr>
						<tr>
							<td>Friday</td>
							<td>{{ $scheduale->friday_time }}</td>
						</tr>

					</table>
				</div>
			</div>
		</div>
	</div>

</section>






{{-- <section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="table-responsive">
					<table class="table table-borderless">
						<tr>
							<th width="300px">
								<h4>Weak Day</h4>
							</th>
							<th>
								<h4>Time Schedule</h4>
							</th>
						</tr>
						<tr>
							<td>
								<div class="col-md-6 bg-primary">
									<div class="card" style="width: 18rem;">
										<div class="card-body">
											<h5 class="card-title">Saturday</h5>
										</div>
									</div>
								</div>
							</td>
							<td>
								<div class="col-md-6 border border-primary">
									<div class="card border-0" style="width: 18rem;">
										<div class="card-body">
											<h5 class="card-title">{{ $scheduale->saturday_time }}</h5>
										</div>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="col-md-6 bg-primary">
									<div class="card" style="width: 18rem;">
										<div class="card-body">
											<h5 class="card-title">Sunday</h5>
										</div>
									</div>
								</div>
							</td>
							<td>
								<div class="col-md-6 border border-primary">
									<div class="card border-0" style="width: 18rem;">
										<div class="card-body">
											<h5 class="card-title">{{ $scheduale->sunday_time }}</h5>
										</div>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="col-md-6 bg-primary">
									<div class="card" style="width: 18rem;">
										<div class="card-body">
											<h5 class="card-title">Monday</h5>
										</div>
									</div>
								</div>
							</td>
							<td>
								<div class="col-md-6 border border-primary">
									<div class="card border-0" style="width: 18rem;">
										<div class="card-body">
											<h5 class="card-title">{{ $scheduale->monday_time }}</h5>
										</div>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="col-md-6 bg-primary">
									<div class="card" style="width: 18rem;">
										<div class="card-body">
											<h5 class="card-title">Tuesday</h5>
										</div>
									</div>
								</div>
							</td>
							<td>
								<div class="col-md-6 border border-primary">
									<div class="card border-0" style="width: 18rem;">
										<div class="card-body">
											<h5 class="card-title">{{ $scheduale->tuesday_time }}</h5>
										</div>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="col-md-6 bg-primary">
									<div class="card" style="width: 18rem;">
										<div class="card-body">
											<h5 class="card-title">Wednesday</h5>
										</div>
									</div>
								</div>
							</td>
							<td>
								<div class="col-md-6 border border-primary">
									<div class="card border-0" style="width: 18rem;">
										<div class="card-body">
											<h5 class="card-title">{{ $scheduale->wednesday_time }}</h5>
										</div>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="col-md-6 bg-primary">
									<div class="card" style="width: 18rem;">
										<div class="card-body">
											<h5 class="card-title">Thursday</h5>
										</div>
									</div>
								</div>
							</td>
							<td>
								<div class="col-md-6 border border-primary">
									<div class="card border-0" style="width: 18rem;">
										<div class="card-body">
											<h5 class="card-title">{{ $scheduale->thursday_time }}</h5>
										</div>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="col-md-6 bg-danger">
									<div class="card" style="width: 18rem;">
										<div class="card-body">
											<h5 class="card-title">Friday</h5>
										</div>
									</div>
								</div>
							</td>
							<td>
								<div class="col-md-6 border border-danger">
									<div class="card border-0" style="width: 18rem;">
										<div class="card-body">
											<h5 class="card-title">{{ $scheduale->friday_time }}</h5>
										</div>
									</div>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</section> --}}


<section>
	<div class="container my-5">
		<div class="row">

		</div>
	</div>
</section>


@endsection