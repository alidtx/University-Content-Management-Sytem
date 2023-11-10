{{-- @extends('frontend.layouts.app')
@php
$pageTitle = "Faculties of Comilla University";
@endphp
@section('title', $pageTitle )
@section('my_style')
<link rel="stylesheet" href="{{ asset('public/frontend/dist/css/profile.css') }}">
@endsection
@section('content')
@include('frontend.partial.content-header', ['pageTitle' => $vcAbout->name , 'bannerImageLink' => 'faculty.png'])
<div class="rep-icon">
	<ul>
		<li><a href=""><i class="ti-skype"></i></a></li>
		<li><a href=""><i class="ti-twitter-alt"></i></a></li>
		<li><a href=""><i class="ti-instagram"></i></a></li>
		<li><a href=""><i class="ti-facebook"></i></a></li>
	</ul>
</div>
<style>
	.text {
		text-align: justify;
	}
</style>
<section class="bg-light text">
	<div class="container py-5">
		<div class="row">
			<div class="col-12 col-sm-3">
				<div class="border bg-white">
					<div class="position-relative p-4">
						<div class="round-image">
							<img class="img-fluid w-100" src="{{ asset('public/upload/members/'.$vcAbout->image) }}"
								onerror="this.onerror=null;this.src='{{ asset('public/frontend/images/about/user-dummy.jpeg') }}';"
								alt="Faculty Member image">
						</div>
					</div>
					<h4 class="text-center" style="font-size: 18px;">{{ $vcAbout->name }}</h4>
					<p class="text-center text-primary">
						{{ $vcAbout->member_designation }}
					</p>

					<div class="faculty-address-container">
						<div class="row py-3 mx-3 border-bottom border-top mt-4">
							<div class="col-2"><i class="ti-location-pin"></i></div>
							<div class="col-10">
								<p class="text-justify p-0">
									{{ $vcAbout->work_place }}<br>
									Comilla University<br>
									Comilla-3506, Bangladesh
								</p>
							</div>
						</div>

						<div class="row py-3 mx-3 border-bottom">
							<div class="col-2"><i class="ti-email"></i></div>
							<div class="col-10">{{ $vcAbout->email }}</div>
						</div>
						<div class="row py-3 mx-3 border-bottom ">
							<div class="col-2"><i class="ti-mobile"></i></div>
							<div class="col-10">{{ $vcAbout->phone }}</div>
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
			</div>
			<div class="col-12 col-sm-9">
				<div id="tabs">
					<ul class="row list-unstyled border bg-white py-4 px-3" style="margin: 0 1px;">
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
							@if($vcAbout->about != null)
							<p class="paragraph">{!!$vcAbout->about!!}</p>
							@endif
						</div>
						<div id="tabs-2">
							<div class="">
								<ul class="nav nav-tabs public-tab" id="myTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="edu-tab" data-toggle="tab" href="#edu" role="tab"
											aria-controls="edu" aria-selected="true">Education Qualification</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="book-tab" data-toggle="tab" href="#book" role="tab"
											aria-controls="book" aria-selected="false">Job Experience</a>
									</li>

								</ul>
								<div class="tab-content px-2 py-4" id="myTabContent">
									<div class="tab-pane fade show active" id="edu" role="tabpanel"
										aria-labelledby="edu-tab">
										<div class="table-responsive">
											<table class="table table-striped">
												@foreach ($vcEducations as $education)
												@if($education->degree != null)
												<tr>
													<td>{{$education->degree}} </td>
													<td>{{$education->education_institution}} </td>
													<td>{{$education->subject}} </td>
													<td> {{$education->education_year}}-{{$education->education_to_year}}
													</td>
												</tr>
												@endif
												@endforeach
											</table>
										</div>
									</div>
									<div class="tab-pane fade" id="book" role="tabpanel" aria-labelledby="book-tab">
										<div class="table-responsive">
											<table class="table table-striped">
												@foreach ($vcExperiences as $experience)
												@if($experience->experience_institution != null)
												<tr>
													<td>
														<p>{{$experience->experience_institution}} <br>
															{{$experience->designation}} <br>
															{{$experience->experience_from_month}}
															{{$experience->experience_from_year}} -
															{{$experience->experience_to_month}}
															{{$experience->experience_to_year}}
														</p><br>
													</td>
												</tr>
												@endif
												@endforeach
											</table>
										</div>
									</div>
								</div>
							</div>
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
								<div class="tab-conten px-3 py-2" id="myTabContent">
									<div class="tab-pane fade show active" id="home" role="tabpanel"
										aria-labelledby="home-tab">
										<div class="table-responsive">
											<table class="table borderless">
												@foreach ($vcPublishBooks as $journal)
												@if($journal->journal_title != null)

												<tr>
													<td>

														<b>{{$journal->journal_title}} </b>
														<p> {{$journal->journal_month}} {{$journal->journal_year}} <br>
															{{$journal->journal_description}}
														</p><br>
													</td>
												</tr>
												@endif
												@endforeach
											</table>
										</div>
									</div>
									<div class="tab-pane fade" id="profile" role="tabpanel"
										aria-labelledby="profile-tab">
										<div class="table-responsive">
											<table class="table table-striped">
												@foreach ($vcPublishJournals as $PublishBook)
												@if($PublishBook->book_title != null)
												<tr>
													<td>
														<b>{{$PublishBook->book_title}} </b>
														<p> {{$PublishBook->book_month}} {{$PublishBook->book_year}}
															<br>
															{{$PublishBook->book_description}}
														</p><br>
													</td>
												</tr>
												@endif
												@endforeach
											</table>
										</div>
									</div>
									<div class="tab-pane fade" id="contact" role="tabpanel"
										aria-labelledby="contact-tab">
										<table class="table table-striped">
											@foreach ($vcConferences as $conference)
											@if($conference->conference_title != null)
											<tr>
												<td>
													<b>{{$conference->conference_title}} </b>
													<p> {{$conference->conference_month}}
														{{$conference->conference_year}} <br>
														{{$conference->conference_description}}
													</p><br>
												</td>
											</tr>
											@endif
											@endforeach
										</table>
									</div>
								</div>
							</div>
						</div>
						<div id="tabs-4">
							@foreach ($researchs as $research)
							@if($research->interest_area != null)
							{{$research->interest_area}}&nbsp;
							@endif
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection


@section('java_script')
<script>
	$( function() {
			$( "#tabs" ).tabs();
		} );
</script>
@endsection --}}


@extends('frontend.layouts.app')

@php
$pageTitle = "Pro-Vice Chancellor of Comilla University";
@endphp

@section('title', $pageTitle )

@section('my_style')

<link rel="stylesheet" href="{{ asset('public/frontend/dist/css/profile.css') }}">

@endsection


@section('content')


@include('frontend.partial.content-header', ['pageTitle' => $facultyMember->name, 'bannerImageLink' => 'faculty.png'])

@include('frontend.partial.profile')

@endsection


@section('java_script')

<script>
	$( function() {
			$( "#tabs" ).tabs();
		} );
</script>

@endsection