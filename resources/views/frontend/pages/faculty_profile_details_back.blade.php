{{-- @extends('frontend.layouts.faculty-app') --}}
@extends('frontend.layouts.app')

@section('title', 'Faculties of Comilla University')


@section('my_style')
<link rel="stylesheet" href="{{ asset('public/frontend/dist/css/profile.css') }}">
@endsection

@section('content')



<section class="counter-numbers"
  style="background: url({{ asset('public/frontend/images/banner/faculty.png')  }}); margin-top: 95px;">
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
<section class="d-none">
  <div class="advisor-info">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-4 ">
          <div class="advisor-img-container border mt-1 rounded overflow-hidden">
            <div class="p-4">
              <div class="round-image">
                <img class="img-fluid w-100" src="{{ asset('public/upload/members/'.$facultyMember->image) }}"
                  onerror="this.onerror=null;this.src='{{ asset('public/frontend/images/about/user-dummy.jpeg') }}';"
                  alt="about image">
              </div>
            </div>
            <h4>{{ $facultyMember->name }}</h4>
            <p>
              {{ $facultyMember->member_designation }} <br>
              {{-- Department of Accounting & Information Systems --}}
            </p>

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
              </ul>
            </div>
            <div class="faculty-address-container">
              <div class="row p-3 border-bottom">
                <div class="col-2"><i class="ti-mobile"></i></div>
                <div class="col-10">{{ $facultyMember->phone }}</div>
              </div>
              <div class="row p-3 border-bottom">
                <div class="col-2"><i class="ti-email"></i></div>
                <div class="col-10">{{ $facultyMember->email }}</div>
              </div>
              <div class="row p-3">
                <div class="col-2"><i class="ti-location-pin"></i></div>
                <div class="col-10">
                  <p class="text-justify p-0">
                    {{ $facultyMember->work_place }}<br>
                    Comilla University<br>
                    Comilla-3506, Bangladesh
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-12 col-sm-8">
          <ul class="nav nav-tabs faculty-tab row px-3 row-cols-2 row-cols-md-auto" id="myTab" role="tablist">
            <li class="nav-item col-12 col-sm-3 p-0">
              <a class="nav-link active" id="biography-tab" data-toggle="tab" href="#biography" role="tab"
                aria-controls="biography" aria-selected="true">Biography</a>
            </li>
            <li class="nav-item col-12 col-sm-3 p-0">
              <a class="nav-link" id="education-tab" data-toggle="tab" href="#education" role="tab"
                aria-controls="education" aria-selected="false">Education</a>
            </li>
            <li class="nav-item col-12 col-sm-3 p-0">
              <a class="nav-link" id="experience-tab" data-toggle="tab" href="#experience" role="tab"
                aria-controls="experience" aria-selected="false">Experience</a>
            </li>
            <li class="nav-item col-12 col-sm-3 p-0">
              <a class="nav-link" id="membership-tab" data-toggle="tab" href="#membership" role="tab"
                aria-controls="membership" aria-selected="false">Membership </a>
            </li>
            <li class="nav-item col-12 col-sm-3 p-0">
              <a class="nav-link" id="publication-tab" data-toggle="tab" href="#publication" role="tab"
                aria-controls="publication" aria-selected="false">Publication</a>
            </li>
            <li class="nav-item col-12 col-sm-3 p-0">
              <a class="nav-link" id="award-tab" data-toggle="tab" href="#award" role="tab" aria-controls="award"
                aria-selected="false">Award</a>
            </li>
            <li class="nav-item col-12 col-sm-3 p-0">
              <a class="nav-link" id="certification-tab" data-toggle="tab" href="#certification" role="tab"
                aria-controls="certification" aria-selected="false">Certification Accomplishments</a>
            </li>
            <li class="nav-item col-12 col-sm-3 p-0">
              <a class="nav-link" id="scholarship-tab" data-toggle="tab" href="#scholarship" role="tab"
                aria-controls="scholarship" aria-selected="false">Scholarships & Fellowships</a>
            </li>
            <li class="nav-item col-12 col-sm-3 p-0">
              <a class="nav-link" id="research-tab" data-toggle="tab" href="#research" role="tab"
                aria-controls="research" aria-selected="false">Research Interest</a>
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
                          @if($facultyMember->about != null)
                          <p class="paragraph">{!!$facultyMember->about!!}</p>
                          {{--
                        </div> --}}
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
                    <div class="table-responsive">
                      <table class="table table-striped">
                        @foreach ($memberEduaction as $education)
                        @if($education->degree != null)

                        <tr>
                          {{-- <td width="10%">{{$loop->iteration}} </td> --}}
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
            </div>
            <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12 ">
                    <nav>
                      <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-professional_experience-tab" data-toggle="tab"
                          href="#nav-professional_experience" role="tab" aria-controls="nav-professional_experience"
                          aria-selected="true">Professional Experience</a>
                        <a class="nav-item nav-link" id="nav-administrative_experience-tab" data-toggle="tab"
                          href="#nav-administrative_experience" role="tab" aria-controls="nav-administrative_experience"
                          aria-selected="false">Administrative Experience</a>
                      </div>
                    </nav>
                    <div class="tab-content p-4" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="nav-professional_experience" role="tabpanel"
                        aria-labelledby="nav-professional_experience-tab">

                        <table class="table table-striped">
                          @foreach ($MemberExperiences as $experience)
                          @if($experience->experience_institution != null)

                          <tr>
                            <td>
                              <p>{{$experience->experience_institution}} <br>
                                {{$experience->designation}} <br>
                                {{$experience->experience_from_month}} {{$experience->experience_from_year}} -
                                {{$experience->experience_to_month}} {{$experience->experience_to_year}}
                              </p><br>
                            </td>
                          </tr>
                          @endif
                          @endforeach
                        </table>
                      </div>
                      <div class="tab-pane fade" id="nav-administrative_experience" role="tabpanel"
                        aria-labelledby="nav-administrative_experience-tab">
                        <table class="table table-striped">
                          @foreach ($administrativeExperiences as $memberExperience)
                          @if($memberExperience->administrative_designation != null)

                          <tr>
                            <td>

                              <p>{{$memberExperience->administrative_designation}} <br>
                                {{$memberExperience->administrative_details}} <br>
                                {{$memberExperience->administrative_from_month}}
                                {{$memberExperience->administrative_from_year}} -
                                {{$memberExperience->administrative_to_month}}
                                {{$memberExperience->administrative_to_year}}
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
              <div class="table-responsive">
                <table class="table table-striped">
                  @foreach ($memberships as $membership)

                  @if($membership->membership_title != null)

                  <tr>
                    <td>
                      <b>{{$membership->membership_title}} </b>
                      <p> {{$membership->membership_from_month}} {{$membership->membership_from_year}} -
                        {{$membership->membership_to_month}} {{$membership->membership_to_year}}
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
                        <a class="nav-item nav-link active col-3" id="nav-publish_journal-tab" data-toggle="tab"
                          href="#nav-publish_journal" role="tab" aria-controls="nav-publish_journal"
                          aria-selected="false">Publish Journal</a>
                        <a class="nav-item nav-link col-3" id="nav-publish_book-tab" data-toggle="tab"
                          href="#nav-publish_book" role="tab" aria-controls="nav-publish_book"
                          aria-selected="true">Publish Book</a>
                        <a class="nav-item nav-link col-4" id="nav-conference-tab" data-toggle="tab"
                          href="#nav-conference" role="tab" aria-controls="nav-conference"
                          aria-selected="false">Conference & Research Seminar</a>
                      </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent-publication">

                      <div class="tab-pane fade show active" id="nav-publish_journal" role="tabpanel"
                        aria-labelledby="nav-publish_journal-tab">
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

                      <div class="tab-pane fade  " id="nav-publish_book" role="tabpanel"
                        aria-labelledby="nav-publish_book-tab">
                        <table class="table table-striped">
                          @foreach ($memberPublishBooks as $PublishBook)
                          @if($PublishBook->book_title != null)

                          <tr>
                            <td>

                              <b>{{$PublishBook->book_title}} </b>
                              <p> {{$PublishBook->book_month}} {{$PublishBook->book_year}} <br>
                                {{$PublishBook->book_description}}
                              </p><br>
                            </td>
                          </tr>
                          @endif
                          @endforeach

                        </table>
                      </div>

                      <div class="tab-pane fade" id="nav-conference" role="tabpanel"
                        aria-labelledby="nav-conference-tab">
                        <table class="table table-striped">
                          @foreach ($memberConference as $conference)
                          @if($conference->conference_title != null)

                          <tr>
                            <td>

                              <b>{{$conference->conference_title}} </b>
                              <p> {{$conference->conference_month}} {{$conference->conference_year}} <br>
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
                @foreach ($researchs as $research)
                @if($research->interest_area != null)
                {{$research->interest_area}} &nbsp;
                @endif
                @endforeach
                {{-- <table class="table table-striped">
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
                </table> --}}
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