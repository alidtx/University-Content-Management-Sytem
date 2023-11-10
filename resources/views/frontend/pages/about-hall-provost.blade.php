{{-- @extends('frontend.layouts.faculty-app') --}}
@extends('frontend.layouts.app')

@section('title', 'Faculties of Comilla University')


@section('my_style')
<style>
  .notice-title {
    background-color: #00B2FF;
    padding: 5px;
    text-transform: uppercase;
    color: #fff;
    font-family: "Raleway", sans-serif;
    font-size: 26px;
    font-weight: 700;
}
.advisor-info{
	margin: 50px 0;
}
.advisor-img-container{
	margin-bottom: 25px;
}
.advisor-img-container h4{
	margin: 15px 0;
	font-family: work-sans, sans-serif;
	text-align: center;
	font-weight: 600;
}
.advisor-img-container p{
	font-family: work-sans, sans-serif;
	text-align: center;
}
.faculty-tab {
	border: none !important;
}
.faculty-tab .nav-item{
	background-color: #f1f1f1;
	border: none;
	margin: 5px;
}
.faculty-tab .nav-item .nav-link{
	border: none;
	text-decoration: none;
	color: #002147;
	border-radius: 0px;
	padding: 15px;
	text-transform: capitalize;
}
.faculty-tab .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{
	font-size: 16px;
	border: none !important;
	background-color: #00b2ff80;
}

.faculty-icon-list{
    /* margin: 15px 15%; */
    /* display:flex; */
    text-align: center;
    /* align-items:center; */
}
.faculty-icon-list ul{
    padding: 0;
	list-style: none;
    display: inline-block;
}

.faculty-icon-list ul li{
	display: inline-block;
    margin: 10px 5px;
    vertical-align: middle;
}

.faculty-icon-list ul li a{
	/* background-color: #2E3192; */
    padding: 5px;
    color: #fff;
    text-decoration: none;
}
.faculty-address-container{
    margin-top: 45px;
    padding: 25px 0;
}
.faculty-address-container i{
	color: #2257bf;
	font-size: 20px;
	background-color: #fff;
	padding: 5px;
	box-shadow: 0px 2.20399px 3.22122px rgba(0, 0, 0, 0.07);
	margin-right: 10px;
}

.faculty-address-container p{
	text-align: center;
    font-family: work-sans, sans-serif;
    /*padding: 15px 0;*/
}


</style>
@endsection

@section('content')

{{-- <header class="header fixed-top">
    <div class="container-fluid top-header" style="background-color: #11f2ff;">
        <div class="row">
        <div class="col-12">
            <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                <a href="{{ route('home') }}">
                <img class="img-fluid d-block mx-auto" style="max-height: 80px;" src="{{ asset('public/frontend/images/logo.png') }}" alt="logo"/></a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="navigation w-100">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark p-0">
            <a class="navbar-brand" href="#"> Faculty Of  {{  }}</a>
            <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse"
            data-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="ti-menu text-black"></i>
            </button>
            <div class="collapse navbar-collapse" id="navigation">

                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                        </a>
                        <div class="dropdown-menu p-3" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">History</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Mission & Vision</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Academics
                        </a>
                        <div class="dropdown-menu p-3" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Department</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Calender</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Activities
                        </a>
                        <div class="dropdown-menu p-3" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Event</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Gallery</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="# }}">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        </div>
    </div>
</header> --}}
<!-- /header -->

<section class="counter-numbers" style="background: url({{ asset('public/frontend/images/banner/faculty.png')  }})">
	<div class="container">
		<div class="row">
			<div class="col">
				<h3 class="text-center font_one text-white" >{{ $provostDetails->member->name }}</h3>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="advisor-info">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-4 ">
					<div class="advisor-img-container border mt-1 rounded overflow-hidden">
						<div class="p-4">
							<div class="round-image">
							    <img class="img-fluid w-100" src="{{ asset('public/upload/members/'.$provostDetails->member->image) }}" onerror="this.onerror=null;this.src='{{ asset('public/frontend/images/about/user-dummy.jpeg') }}';" alt="about image">
							</div>
						</div>
						<h4>{{ $provostDetails->member->name }}</h4>
						<p>
							{{ $provostDetails->member->member_designation }} <br>
							{{-- Department of Accounting & Information Systems --}}
						</p>

						<div class="faculty-icon-list">
                            <ul>
                                <li><a href="">
                                    {{-- <i class="ti-facebook"></i> --}}
                                    <img src="{{ asset('public/frontend/cuimages/google-scholar.png') }}" >
                                </a></li>
                                <li><a href="">
                                    {{-- <i class="ti-linkedin"></i> --}}
                                    <img  src="{{ asset('public/frontend/cuimages/linkedin-fill.png') }}" >

                                </a></li>
                                <li><a href="">
                                    {{-- <i class="ti-google"></i> --}}
                                    <img  src="{{ asset('public/frontend/cuimages/reachergate-fill.png') }}" >

                                </a></li>
                                <li><a href="">
                                    {{-- <i class="ti-world"></i> --}}
                                    <img  src="{{ asset('public/frontend/cuimages/web-fill.png') }}" >

                                </a></li>
                            </ul>
                        </div>
                        <div class="faculty-address-container">
                            <div class="row p-3 border-bottom">
                                <div class="col-2"><i class="ti-mobile"></i></div>
                                <div class="col-10">{{ $provostDetails->member->phone }}</div>
                            </div>
                            <div class="row p-3 border-bottom">
                                <div class="col-2"><i class="ti-email"></i></div>
                                <div class="col-10">{{ $provostDetails->member->email }}</div>
                            </div>
                            <div class="row p-3">
                                <div class="col-2"><i class="ti-location-pin"></i></div>
                                <div class="col-10">
                                    <p class="text-justify p-0">
                                        {{ $provostDetails->member->work_place }}<br>
										Comilla University<br>
										Comilla-3506, Bangladesh
                                    </p>
                                </div>
                            </div>
                        </div>
					</div>

				</div>
				<div class="col-12 col-sm-8">
					<ul class="nav nav-tabs nav-justified faculty-tab row px-3 row-cols-2 row-cols-md-auto" id="myTab" role="tablist">
					  	<li class="nav-item col-3 p-0">
					    	<a class="nav-link active" id="biography-tab" data-toggle="tab" href="#biography" role="tab" aria-controls="biography" aria-selected="true">Biography</a>
					  	</li>
					  	<li class="nav-item col-3 p-0">
					    	<a class="nav-link" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="false">Education</a>
					  	</li>
					  	<li class="nav-item col-3 p-0">
					    	<a class="nav-link" id="experience-tab" data-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-selected="false">Experience</a>
					  	</li>
					  	<li class="nav-item col-3 p-0">
					    	<a class="nav-link" id="membership-tab" data-toggle="tab" href="#membership" role="tab" aria-controls="membership" aria-selected="false">Membership </a>
					  	</li>
					  	<li class="nav-item col-3 p-0">
					    	<a class="nav-link" id="publication-tab" data-toggle="tab" href="#publication" role="tab" aria-controls="publication" aria-selected="false">Publication</a>
					  	</li>
					  	<li class="nav-item col-3 p-0">
					    	<a class="nav-link" id="award-tab" data-toggle="tab" href="#award" role="tab" aria-controls="award" aria-selected="false">Award</a>
					  	</li>
					  	<li class="nav-item col-3 p-0">
                              <a class="nav-link" id="certification-tab" data-toggle="tab" href="#certification" role="tab" aria-controls="certification" aria-selected="false">Certification Accomplishments</a>
                        </li>
					  	<li class="nav-item col-3 p-0">
                              <a class="nav-link" id="scholarship-tab" data-toggle="tab" href="#scholarship" role="tab" aria-controls="scholarship" aria-selected="false">Scholarships & Fellowships</a>
                        </li>
                        <li class="nav-item col-3 p-0">
                            <a class="nav-link" id="research-tab" data-toggle="tab" href="#research" role="tab" aria-controls="research" aria-selected="false">Research Interest</a>
                        </li>
                        </ul>
					<div class="tab-content border mt-3 my-2 mx-2 p-4" id="myTabContent">

					  	<div class="tab-pane fade show active" id="biography" role="tabpanel" aria-labelledby="biography-tab">
                            <div class="card" style="border:none;">
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-md-12">
                                        {{-- <div class="box"> --}}
                                            @if($provostDetails->member->about != null)
                                          <p class="paragraph">{!!$provostDetails->member->about!!}</p>
                                        {{-- </div> --}}
                                        @endif
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
					  	</div>
					  	<div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
                            <div class="container">
                                <div class="row">
                                  <div class="col-md-12">
                                    <table class="table table-striped">
                                        @foreach ($memberEduaction as $education)
                                        @if($education->degree != null)

                                        <tr>
                                            {{-- <td width="10%" >{{$loop->iteration}} </td> --}}
                                            <td>{{$education->degree}} </td>
                                            <td>{{$education->education_institution}} </td>
                                            <td>{{$education->subject}} </td>
                                            <td> {{$education->education_year}}-{{$education->education_to_year}} </td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </table>
                                  </div>
                                </div>
                              </div>
					  	</div>
					  	<div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
					  		<div class="container">
                                <div class="row">
                                    <div class="col-sm-12 ">
                                    <nav>
                                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-professional_experience-tab" data-toggle="tab" href="#nav-professional_experience" role="tab" aria-controls="nav-professional_experience" aria-selected="true">Professional Experience</a>
                                        <a class="nav-item nav-link" id="nav-administrative_experience-tab" data-toggle="tab" href="#nav-administrative_experience" role="tab" aria-controls="nav-administrative_experience" aria-selected="false">Administrative Experience</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content p-4" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-professional_experience" role="tabpanel" aria-labelledby="nav-professional_experience-tab">

                                    <table class="table table-striped">
                                        @foreach ($MemberExperiences as $experience)
                                        @if($experience->experience_institution != null)

                                        <tr>
                                            <td>
                                        <p>{{$experience->experience_institution}} <br>
                                            {{$experience->designation}} <br>
                                            {{$experience->experience_from_month}} {{$experience->experience_from_year}} - {{$experience->experience_to_month}} {{$experience->experience_to_year}}
                                        </p><br>
                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </table>
                                        </div>
                                        <div class="tab-pane fade" id="nav-administrative_experience" role="tabpanel" aria-labelledby="nav-administrative_experience-tab">
                                    <table class="table table-striped">
                                        @foreach ($administrativeExperiences as $memberExperience)
                                        @if($memberExperience->administrative_designation != null)

                                        <tr>
                                            <td>

                                        <p>{{$memberExperience->administrative_designation}} <br>
                                            {{$memberExperience->administrative_details}} <br>
                                            {{$memberExperience->administrative_from_month}} {{$memberExperience->administrative_from_year}} - {{$memberExperience->administrative_to_month}} {{$memberExperience->administrative_to_year}}
                                        </p><br>
                                        @endif

                                    </td>
                                </tr>
                                @endforeach
                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
					  	</div>
					  	<div class="tab-pane fade" id="membership" role="tabpanel" aria-labelledby="membership-tab">
                            <div>
                                <table class="table table-striped">
                                    @foreach ($memberships as $membership)

                                    @if($membership->membership_title != null)

                                    <tr>
                                        <td>
                                  <b>{{$membership->membership_title}} </b>
                                  <p> {{$membership->membership_from_month}} {{$membership->membership_from_year}} - {{$membership->membership_to_month}} {{$membership->membership_to_year}}
                                  </p><br>
                                        </td>
                                    </tr>
                                    @endif
                                  @endforeach
                                </table>
                              </div>
					  	</div>
					  	<div class="tab-pane fade" id="publication" role="tabpanel" aria-labelledby="publication-tab">
                            <div class="container">
                                <div class="row">
                                  <div class="col-sm-12 ">
                                    <nav>
                                      <div class="nav nav-tabs nav-fill row" id="nav-tab-publication" role="tablist">
                                          <a class="nav-item nav-link active col-3" id="nav-publish_journal-tab" data-toggle="tab" href="#nav-publish_journal" role="tab" aria-controls="nav-publish_journal" aria-selected="false">Publish Journal</a>
                                          <a class="nav-item nav-link col-3" id="nav-publish_book-tab" data-toggle="tab" href="#nav-publish_book" role="tab" aria-controls="nav-publish_book" aria-selected="true">Publish Book</a>
                                        <a class="nav-item nav-link col-4" id="nav-conference-tab" data-toggle="tab" href="#nav-conference" role="tab" aria-controls="nav-conference" aria-selected="false">Conference & Research Seminar</a>
                                      </div>
                                    </nav>
                                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent-publication">

                                        <div class="tab-pane fade show active" id="nav-publish_journal" role="tabpanel" aria-labelledby="nav-publish_journal-tab">
                                            <table class="table table-striped">
                                                @foreach ($memberPublicationJournal as $journal)
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

                                        <div class="tab-pane fade  " id="nav-publish_book" role="tabpanel" aria-labelledby="nav-publish_book-tab">
                                            <table class="table table-striped">
                                            @foreach ($memberPublishBooks as $PublishBook)
                                            @if($PublishBook->book_title != null)

                                            <tr>
                                                <td>

                                        <b>{{$PublishBook->book_title}} </b>
                                        <p> {{$PublishBook->book_month}} {{$PublishBook->book_year}} <br>
                                          {{$PublishBook->book_description}}
                                        </p><br>
                                                </td></tr>
                                                @endif
                                        @endforeach

                                            </table>
                                      </div>

                                      <div class="tab-pane fade" id="nav-conference" role="tabpanel" aria-labelledby="nav-conference-tab">
                                          <table class="table table-striped">
                                            @foreach ($memberConference as $conference)
                                            @if($conference->conference_title != null)

                                            <tr>
                                                <td>

                                        <b>{{$conference->conference_title}} </b>
                                        <p> {{$conference->conference_month}} {{$conference->conference_year}} <br>
                                          {{$conference->conference_description}}
                                        </p><br>

                                    </td></tr>
                                    @endif
                                      @endforeach
                                          </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
					  	</div>
					  	<div class="tab-pane fade" id="award" role="tabpanel" aria-labelledby="award-tab">
                            <div>
                                <table class="table table-striped">
                                    @foreach ($awards as $award)
                                    @if($award->award_title != null)

                                    <tr>
                                        <td>
                                  <b>{{$award->award_title}} </b>
                                  <p> {{$award->awarded_month}} {{$award->awarded_year}}<br>
                                    {{$award->award_description}}
                                  </p><br>
                                        </td>
                                    </tr>
                                    @endif
                                  @endforeach
                                </table>
                              </div>
					  	</div>
					  	<div class="tab-pane fade" id="certification" role="tabpanel" aria-labelledby="certification-tab">
                            <div>
                                <table class="table table-striped">
                                    @foreach ($certifications as $certification)
                                    @if($certification->certification_title != null)

                                    <tr>
                                        <td>
                                  <b>{{$certification->certification_title}} </b>
                                  <p> {{$certification->certification_month}} {{$certification->certification_year}}<br>
                                    {{$certification->certification_description}}<br>
                                    {{$certification->certification_url}}
                                  </p><br>
                                        </td>
                                    </tr>
                                    @endif
                                  @endforeach
                                </table>
                              </div>
					  	</div>
                        <div class="tab-pane fade" id="scholarship" role="tabpanel" aria-labelledby="scholarship-tab">
                            <div>
                                <table class="table table-striped">
                                    @foreach ($scholarships as $scholarship)
                                    @if($scholarship->scholarship_title != null)

                                    <tr>
                                        <td>
                                  <b>{{$scholarship->scholarship_title}} </b>
                                  <p> {{$scholarship->scholarship_month}} {{$scholarship->scholarship_year}}<br>
                                    {{$scholarship->certification_description}}
                                  </p><br>
                                        </td>
                                    </tr>
                                    @endif
                                  @endforeach
                                </table>
                              </div>
                        </div>
					  	<div class="tab-pane fade" id="research" role="tabpanel" aria-labelledby="research-tab">
                            <div>
                                <table class="table table-striped">
                                    @foreach ($researchs as $research)
                                    @if($research->interest_area != null)

                                    <tr>
                                        <td>
                                  <p> {{$research->interest_area}}
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
		</div>
	</div>
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
