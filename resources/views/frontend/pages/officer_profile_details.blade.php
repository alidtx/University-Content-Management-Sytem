@extends('frontend.layouts.app')

@php
$pageTitle=@$officerProfile->name;
@endphp

@section('title', $pageTitle)

@section('my_style')
<style>
  .mb-3, .my-3 {
    margin-bottom: 0.3rem!important;
  }
</style>
@endsection

@section('content')

<section class="counter-numbers" style="background: url({{ asset('public/frontend/images/banner.png') }}); background-position: center center; background-size:cover;">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3 class="text-center font_four text-white">{{$officerProfile->name}}</h3>
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
          src="{{ asset('public/upload/members/'. $officerProfile->image) }}" onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/user-dummy.jpeg') }}';"
          alt="about image"
          />
        </div>
      </div>
      <div class="col-md-8">
        <h2>{{$officerProfile->name}}</h2>
        <h4><span class="text-primary">{{$officerProfile->member_designation}}</span></h4>

      </div>
    </div>
  </div>
</section>


<div id="accordion">
  {{-- <div class="container-fluid">
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
              <p class="paragraph">{!!$officerProfile->about!!}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  
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

    <div id="collapseNewTen" class="collapse show" aria-labelledby="headingNewTen" data-parent="#accordion">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <section id="tabs">
                <div class="container">
                  <div class="row">
                    <div class="col-xs-12 ">
                      @foreach ($memberEduaction as $education)
                      <p>{{$education->education_institution}} <br>
                        {{$education->degree}}, {{$education->subject}} <br>
                        {{$education->education_year}} - {{$education->education_to_year}}
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
                          @foreach ($memberPublishBooks as $PublishBook)
                          <b>{{$PublishBook->book_title}} </b>
                          <p> {{$PublishBook->book_month}} {{$PublishBook->book_year}} <br>
                            {{$PublishBook->book_description}}
                          </p>
                          @endforeach
                        </div>
                        <div class="tab-pane fade" id="nav-publish_journal" role="tabpanel" aria-labelledby="nav-publish_journal-tab">
                          @foreach ($memberPublicationJournal as $journal)
                          <b>{{$journal->journal_title}} </b>
                          <p> {{$journal->journal_month}} {{$journal->journal_year}} <br>
                            {{$journal->journal_description}}
                          </p>
                          @endforeach
                        </div>
                        <div class="tab-pane fade" id="nav-conference" role="tabpanel" aria-labelledby="nav-conference-tab">
                          @foreach ($memberConference as $conference)
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
