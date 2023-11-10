@extends('frontend.layouts.app')

@section('title', 'About VC')

@section('my_style')
	<style>
		.mb-3, .my-3 {
			margin-bottom: 0.3rem!important;
		}
	</style>
@endsection

@section('content')

<section
  class="hero-section overlay bg-cover"
  data-background="{{ asset('public/frontend/images/banner.png') }}" >
  <div class="container">
    <div class="hero-slider">
      <!-- slider item -->
      <div class="hero-slider-item">
        <h2 class="text-white text-center">{{$provostDetails->member->name}}{{$provostDetails->member->member_designation}} </h2>
      </div>
    </div>
  </div>
</section>


<section class="about-vc">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 mb-md-0">
        <div class="round-image">
          <img
          class="img-fluid w-100"
          src="{{ asset('public/upload/members/'.$provostDetails->member->image) }}"
          alt="about image"
          />
        </div>
      </div>
      <div class="col-md-8">
        <h2>{{$provostDetails->member->name}}</h2>
        <h2><span class="text-primary">{{$provostDetails->member->member_designation}}</span></h2>
        <p>{!!$provostDetails->member->about!!}</p>

      </div>
    </div>
  </div>
</section>



<section class="biography">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <h2 class="title">Education</h2>
            <!-- Tabs -->
            <section id="tabs">
              <div class="container">
                <div class="row">
                  <div class="col-xs-12 ">
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="nav-professional_experience" role="tabpanel" aria-labelledby="nav-professional_experience-tab">
                        @foreach ($memberEduaction as $education)
                          <p>{{$education->degree}} <br>
                            {{$education->education_institution}}, {{$education->subject}} <br>
                            {{$education->education_year}} {{$education->education_to_year}} - {{$education->education_year}} {{$education->education_to_year}}
                          </p>
                        @endforeach
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- ./Tabs -->
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="biography">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <h2 class="title">Experience</h2>
            <!-- Tabs -->
            <section id="tabs">
              <div class="container">
                <div class="row">
                  <div class="col-xs-12 ">
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-professional_experience-tab" data-toggle="tab" href="#nav-professional_experience" role="tab" aria-controls="nav-professional_experience" aria-selected="true">Professional Experience</a>
                        <a class="nav-item nav-link" id="nav-administrative_experience-tab" data-toggle="tab" href="#nav-administrative_experience" role="tab" aria-controls="nav-administrative_experience" aria-selected="false">Administrative Experience</a>
                      </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="nav-professional_experience" role="tabpanel" aria-labelledby="nav-professional_experience-tab">
                        @foreach ($MemberExperiences as $experience)
                          <p>{{$experience->experience_institution}} <br>
                            {{$experience->designation}}, {{$experience->subject}} <br>
                            {{$experience->experience_from_month}} {{$experience->experience_from_year}} - {{$experience->experience_to_month}} {{$experience->experience_to_year}}
                          </p>
                        @endforeach
                      </div>

                      <div class="tab-pane fade" id="nav-administrative_experience" role="tabpanel" aria-labelledby="nav-administrative_experience-tab">
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
            <!-- ./Tabs -->
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="biography">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <h2 class="title">Publications</h2>
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

                        @if (count($memberPublishBooks) > 0)
                        @foreach ($memberPublishBooks as $PublishBook)
                        <b>{{$PublishBook->book_title}} </b>
                        <p> {{$PublishBook->book_month}} {{$PublishBook->book_year}} <br>
                          {{$PublishBook->book_description}}
                        </p>
                        @endforeach
                        @else
                        <p> Data is not found</p>
                        @endif


                      </div>
                      <div class="tab-pane fade" id="nav-publish_journal" role="tabpanel" aria-labelledby="nav-publish_journal-tab">
                         @if (count($memberPublicationJournal) > 0)
                        @foreach ($memberPublicationJournal as $journel)
                            <b>{{$journel->journal_title}} </b>
                            <p> {{$journel->journal_month}} {{$journel->journal_year}} <br>
                              {{$journel->journal_description}}
                            </p>
                            @endforeach
                            @else
                        <p> Data is not found</p>
                            @endif
                      </div>

                      <div class="tab-pane fade" id="nav-conference" role="tabpanel" aria-labelledby="nav-conference-tab">
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
            <!-- ./Tabs -->
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
