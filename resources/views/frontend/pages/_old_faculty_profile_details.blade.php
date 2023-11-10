@extends('frontend.layouts.app')

@section('title', 'Faculty Profile')

@section('my_style')
	<style>
		.mb-3, .my-3 {
			margin-bottom: 0.3rem!important;
		}
	</style>
@endsection

@section('content')

{{-- <section
  class="hero-section overlay bg-cover"
  data-background="{{ asset('public/frontend/images/banner.png') }}" >
  <div class="container">
    <div class="hero-slider">
      <!-- slider item -->
      <div class="hero-slider-item">
        <h2 class="text-white text-center">{{$facultyMember->name}}{{$facultyMember->member_designation}} </h2>
      </div>
    </div>
  </div>
</section> --}}
<section class="counter-numbers" style="background: url({{ asset('public/frontend/images/banner.png') }}); background-position: center center; background-size:cover;">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="text-white text-center">{{$facultyMember->name}} </h2>
        <h3 class="text-white text-center">{{$facultyMember->member_designation}} </h3>
      </div>
    </div>
  </div>
</section>


<section class="about-vc" style="margin-top: 15px">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 mb-md-0">
        <div class="round-image">
          <img
          class="img-fluid w-100"
          src="{{ asset('public/upload/members/'.$facultyMember->image) }}"
          alt="about image"
          />
        </div>
      </div>
      <div class="col-md-8">
        <h2>{{$facultyMember->name}}</h2>
        <h4><span class="text-color-one">{{$facultyMember->member_designation}}</span></h4>
        {{-- <p>{!!$facultyMember->about!!}</p> --}}

      </div>
    </div>
  </div>
</section>


<div id="accordion" style="margin-bottom: 15px">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-12 col-sm-6" style="background-color: #00B2FF; margin-top: 30px; z-index: 99;">
            <div class="row">
              <div class="col-10 offset-0 offset-sm-2">
                <button class="btn btn-link text-white font_two py-3" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size:22px;">
                Biography
                </button>
                <i class="ti-angle-down text-white float-right mt-4 mr-2"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card" style="border:none;">
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <p class="paragraph">{!!$facultyMember->about!!}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card" style="border:none;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-12 col-sm-6" style="background-color: #00B2FF; margin-top: 30px; z-index: 99;">
              <div class="row">
                <div class="col-10 offset-0 offset-sm-2">
                  <button class="btn btn-link text-white font_two py-3" data-toggle="collapse" data-target="#collapseNewTen" aria-expanded="false" aria-controls="collapseNewTen" style="font-size:22px;">
                  Education
                  </button>
                  <i class="ti-angle-down text-white float-right mt-4 mr-2"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="collapseNewTen" class="collapse" aria-labelledby="headingNewTen" data-parent="#accordion">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <section id="tabs">
                <div class="container">
                  <div class="row">
                    <div class="col-xs-12 ">
                      {{-- @foreach ($vcEducations as $vcEducation)
                      <p>{{$vcEducation->education_institution}} <br>
                        {{$vcEducation->degree}}, {{$vcEducation->subject}} <br>
                        {{$vcEducation->education_year}} - {{$vcEducation->education_to_year}}
                      </p>
                      @endforeach --}}
                      @foreach ($memberEduaction as $education)
                      <p>{{$education->degree}} <br>
                        {{$education->education_institution}}, {{$education->subject}} <br>
                        {{$education->education_year}} {{$education->education_to_year}} - {{$education->education_year}} {{$education->education_to_year}}
                      </p>
                    @endforeach
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card" style="border:none;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-12 col-sm-6" style="background-color: #00B2FF; margin-top: 30px; z-index: 99;">
              <div class="row">
                <div class="col-10 offset-0 offset-sm-2">
                  <button class="btn btn-link text-white font_two py-3" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size:22px;">
                  Experience
                  </button>
                  <i class="ti-angle-down text-white float-right mt-4 mr-2"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <section id="tabs">
                <div class="container">
                  <div class="row">
                    <div class="col-xs-12 ">
                      <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="nav-professional_experience-tab" data-toggle="tab" href="#nav-professional_experience" role="tab" aria-controls="nav-professional_experience" aria-selected="true">Professional Experience</a>
                          <a class="nav-item nav-link" id="nav-administrative_experience-tab" data-toggle="tab" href="#nav-administrative_experience" role="tab" aria-controls="nav-administrative_experience" aria-selected="false">Administrative Experience</a>
                        </div>
                      </nav>
                      <div class="tab-content p-4" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-professional_experience" role="tabpanel" aria-labelledby="nav-professional_experience-tab">
                          {{-- @foreach ($vcExperiences as $vcExperience)
                          <p>{{$vcExperience->experience_institution}} <br>
                            {{$vcExperience->designation}}, {{$vcExperience->subject}} <br>
                            {{$vcExperience->experience_from_month}} {{$vcExperience->experience_from_year}} - {{$vcExperience->experience_to_month}} {{$vcExperience->experience_to_year}}
                          </p>
                          @endforeach --}}
                          @foreach ($MemberExperiences as $experience)
                          <p>{{$experience->experience_institution}} <br>
                            {{$experience->designation}}, {{$experience->subject}} <br>
                            {{$experience->experience_from_month}} {{$experience->experience_from_year}} - {{$experience->experience_to_month}} {{$experience->experience_to_year}}
                          </p>
                        @endforeach
                        </div>
                        <div class="tab-pane fade" id="nav-administrative_experience" role="tabpanel" aria-labelledby="nav-administrative_experience-tab">
                          {{-- @foreach ($vcAdministrativeExperiences as $vcAdministrativeExperience)
                          <p>{{$vcAdministrativeExperience->administrative_designation}} <br>
                            {{$vcAdministrativeExperience->administrative_details}} <br>
                            {{$vcAdministrativeExperience->administrative_from_month}} {{$vcAdministrativeExperience->administrative_from_year}} - {{$vcAdministrativeExperience->administrative_to_month}} {{$vcAdministrativeExperience->administrative_to_year}}
                          </p>
                          @endforeach --}}
                          @foreach ($administrativeExperiences as $memberExperience)
                          <p>{{$memberExperience->administrative_designation}} <br>
                            {{$memberExperience->administrative_details}} <br>
                            {{$memberExperience->administrative_from_month}} {{$memberExperience->administrative_from_year}} - {{$memberExperience->administrative_to_month}} {{$memberExperience->administrative_to_year}}
                          </p>
                        @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card" style="border:none;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-12 col-sm-6" style="background-color: #00B2FF; margin-top: 30px; z-index: 99;">
              <div class="row">
                <div class="col-10 offset-0 offset-sm-2">
                  <button class="btn btn-link text-white font_two py-3" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"style="font-size:22px;">
                  Publications
                  </button>
                  <i class="ti-angle-down text-white float-right mt-4 mr-2"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <!-- Tabs -->
              <section id="tabs-publication">
                <div class="container">
                  <div class="row">
                    <div class="col-xs-12 ">
                      <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab-publication" role="tablist">
                          <a class="nav-item nav-link active" id="nav-publish_book-tab" data-toggle="tab" href="#nav-publish_book" role="tab" aria-controls="nav-publish_book" aria-selected="true">Publish Book</a>
                          <a class="nav-item nav-link" id="nav-publish_journal-tab" data-toggle="tab" href="#nav-publish_journal" role="tab" aria-controls="nav-publish_journal" aria-selected="false">Publish Journal</a>
                          <a class="nav-item nav-link" id="nav-conference-tab" data-toggle="tab" href="#nav-conference" role="tab" aria-controls="nav-conference" aria-selected="false">Conference & Research Seminar</a>
                        </div>
                      </nav>
                      <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent-publication">
                        <div class="tab-pane fade show active" id="nav-publish_book" role="tabpanel" aria-labelledby="nav-publish_book-tab">
                          {{-- @foreach ($vcPublishBooks as $vcPublishBook)
                          <b>{{$vcPublishBook->book_title}} </b>
                          <p> {{$vcPublishBook->book_month}} {{$vcPublishBook->book_year}} <br>
                            {{$vcPublishBook->book_description}}
                          </p>
                          @endforeach --}}

                          {{-- @if (count($memberPublishBooks) > 0) --}}
                          @foreach ($memberPublishBooks as $PublishBook)
                          <b>{{$PublishBook->book_title}} </b>
                          <p> {{$PublishBook->book_month}} {{$PublishBook->book_year}} <br>
                            {{$PublishBook->book_description}}
                          </p>
                          @endforeach
                          {{-- @else
                          <p> Data is not found</p>
                          @endif --}}
                        </div>
                        <div class="tab-pane fade" id="nav-publish_journal" role="tabpanel" aria-labelledby="nav-publish_journal-tab">
                          {{-- @foreach ($vcPublishJournals as $vcPublishJournal)
                          <b>{{$vcPublishJournal->journal_title}} </b>
                          <p> {{$vcPublishJournal->journal_month}} {{$vcPublishJournal->journal_year}} <br>
                            {{$vcPublishJournal->journal_description}}
                          </p>
                          @endforeach --}}
                          @foreach ($memberPublicationJournal as $journel)
                            <b>{{$journel->journal_title}} </b>
                            <p> {{$journel->journal_month}} {{$journel->journal_year}} <br>
                              {{$journel->journal_description}}
                            </p>
                            @endforeach
                        </div>
                        <div class="tab-pane fade" id="nav-conference" role="tabpanel" aria-labelledby="nav-conference-tab">
                          {{-- @foreach ($vcConferences as $vcConference)
                          <b>{{$vcConference->conference_title}} </b>
                          <p> {{$vcConference->conference_month}} {{$vcConference->conference_year}} <br>
                            {{$vcConference->conference_description}}
                          </p>
                          @endforeach --}}
                          @foreach ($memberConferance as $conference)
                          <b>{{$conference->conference_title}} </b>
                          <p> {{$conference->conference_month}} {{$conference->conference_year}} <br>
                            {{$conference->conference_description}}
                          </p>
                        @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
