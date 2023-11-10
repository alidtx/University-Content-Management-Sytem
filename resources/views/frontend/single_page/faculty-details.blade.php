@extends('frontend.layouts.faculty-app')

@php
$pageTitle = 'Faculty of ' . @$faculty->name;
@endphp

@section('title', $pageTitle)

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


  .latest-photo-div {
    overflow: hidden;
  }
</style>
@endsection

@section('content')

@include('frontend.layouts.faculty_header')

{{-- <header class="header fixed-top">
  <div class="container-fluid top-header" style="background-color: #11f2ff;">
    <div class="row">
      <div class="col-12">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <a href="{{ route('home') }}">
                <img class="img-fluid d-block mx-auto" style="max-height: 80px;"
                  src="{{ asset('public/frontend/images/logo.png') }}" alt="logo" /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <a class="navbar-brand" href="#"> Faculty Of {{ $faculty->name }}</a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <i class="ti-menu text-black"></i>
        </button>
        <div class="collapse navbar-collapse" id="navigation">

          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                About
              </a>
              <div class="dropdown-menu p-3" aria-labelledby="navbarDropdown">
                <a class="dropdown-item"
                  href="{{ route('faculties.faculty_history',encrypt($faculty->id)) }}">History</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item"
                  href="{{ route('faculties.faculty_mission_vision',encrypt($faculty->id)) }}">Mission & Vision</a>
              </div>
            </li>
            <li class="nav-item dropdown menu-area">
              <a class="nav-link dropdown-toggle" id="mega-one" role="button" data-toggle="dropdown"
                href="#">Academics</a>
              <div class="dropdown-menu mega-area" aria-labelledby="mega-one">
                <div class="row row-cols-1 row-cols-md-4">
                  <div class="col">
                    <p class="m-3 font-weight-bold">Department</p>
                    <ul class="menu_list ml-3">
                      <li>
                        <a href="{{ route('faculties.faculty_department',encrypt($faculty->id)) }}">Department</a>
                      </li>
                      <li>
                        <a href="#">Calendar</a>
                      </li>
                    </ul>
                  </div>

                  <div class="col d-none d-md-block">
                    <img class="img-fluid mt-3" src="{{ asset('public/frontend/dist/images/activity2.png') }}" alt="">
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Activities
              </a>
              <div class="dropdown-menu p-3" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Event</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Gallery</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header> --}}
<!-- /header -->


<!-- hero slider -->
<section style="margin-top: 80px;">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      {{-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> --}}
      @if(count($slider_images)>0)
      @foreach($slider_images as $image)
      <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->iteration - 1 }}"
        class="{{ $loop->iteration == 1 ? 'active' : '' }}"></li>
      @endforeach
      @else
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      @endif
    </ol>
    <div class="carousel-inner">
      @if(count($slider_images)>0)
      @foreach($slider_images as $image)
      <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
        <img src="{{ asset('public/upload/slider/'.$image->image) }}"
          onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/s-dummy.png') }}';"
          class="d-block w-100" alt="Comilla University">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="animated fadeInRightBig">Welcome to Faculty of <span style="color: #00b2ff"> {{ $faculty->name
              }}</span></h2>
        </div>
      </div>
      @endforeach
      @endif
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>
<!-- /hero slider -->


<section class="about">
  <div class="container">
    <div class="row my-5">
      <div class="col-md-4 mb-md-0">
        <div class="round-image">
          <img class="img-fluid w-100"
            src="{{ @$faculty->member->image ?asset('public/upload/members/'.@$faculty->member->image): asset('public/frontend/images/about/user-dummy.jpeg') }}"
            onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/user-dummy.jpeg') }}';"
            alt="about image" />
        </div>
      </div>
      {{-- <div class="col-md-8">
        <h2>Message from the <span class="text-primary">Dean</span> Faculty Of {{ $faculty->name }} </h2>
        <p> {!! @$message->short_description !!} </p>

        <div class="d-inline">
          <h4>{{@$faculty->member->name}}</h4>
          <b class="text-primary">Dean</b> <br />
          <a href="{{ route('faculties.faculty_message', $faculty->short_url) }}"
            class="btn btn-primary mt-2 float-right">Read More</a>
        </div>
      </div> --}}
      <div class="col-12 col-sm-8">
        @if(@$message->short_description != null)
        <h3>Message from the <span class="text-primary">Dean</span> of {{ $faculty->name }} </h3>
        <p class="text-justify">
          {!!@$message->short_description!!}
          {{-- <br> --}}
          {{-- {!!@$message->long_description!!} --}}
        </p>
        @elseif ($faculty->faculty_head)
        <h3><span class="text-primary">Dean</span></h3>
        @endif
        <div class="d-inline">
          <h3>{{ @$faculty->member->name }}</h3>
          <b class="text-primary">{{@$faculty->member->designation->name}}</b> <br />
          {{-- <a href="#" class="btn btn-primary mt-2 float-right">Read More</a> --}}
        </div>
      </div>
    </div>
  </div>
</section>
<section class="departments">
  <div class="container">
    <h3 class="text-left text-white mb-4">Departments</h3>
    <div class="row">


      @foreach($department as $list)
      @php
      $program_count = \App\Model\ProgramInfo::where('department_id',$list->id)->count();
      @endphp
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="inside d-flex">
          <img class="mr-2" src="{{ asset('public/frontend/images/faculty/science/department1.png') }}" alt="">
          <div class="content">
            <a href="{{route('departments.department-details', $list->short_url)}}">
              <h4 class="mb-0 text-white">{{@$list->name}}</h4>
              @if($program_count==1)
              <p class="mb-0">{{ $program_count }} Program</p>
              @else
              <p class="mb-0">{{ $program_count }} Programs</p>
              @endif
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>


@include('frontend.sections.notice')

@include('frontend.partial.photo-gallery')

<section class="contact-us my-4">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3 class="my-font my-3">Feel <span class="text-primary">Free to Contact </span> With Us</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card contact-card my-3">
          <div class="card-body">
            <div class="inner-items-contactas">
              <div class="row">
                <div class="col-4 p-0"><img class="img-fluid d-block"
                    src="{{ asset('public/frontend/images/icons/envelop.png') }}" alt=""></div>
                <div class="col-8" style="margin-top: 35px; margin-left: -25px;">
                  <h5 class="my-font text-primary">Email</h5>
                </div>
              </div>
            </div>
            <p class="my-font">{{ $faculty->email }}</p>
            {{-- <p class="my-font">ijkuiu874@gmail.com</p> --}}
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card contact-card my-3">
          <div class="card-body">
            <div class="inner-items-contactas">
              <div class="row">
                <div class="col-4 p-0"><img class="img-fluid d-block"
                    src="{{ asset('public/frontend/images/icons/call.png') }}" alt=""></div>
                <div class="col-8" style="margin-top: 35px; margin-left: -25px;">
                  <h5 class="my-font">Call Us</h5>
                </div>
              </div>
            </div>
            <p class="my-font">{{ $faculty->location }}</p>
            {{-- <p class="my-font">ijkuiu874@gmail.com</p> --}}
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card contact-card my-3">
          <div class="card-body">
            <div class="inner-items-contactas">
              <div class="row">
                <div class="col-4 p-0"><img class="img-fluid d-block"
                    src="{{ asset('public/frontend/images/icons/location.png') }}" alt=""></div>
                <div class="col-8" style="margin-top: 35px; margin-left: -25px;">
                  <h5 class="my-font text-primary">Location</h5>
                </div>
              </div>
            </div>
            <p class="my-font">{{ $faculty->location }}</p>
            {{-- <p class="my-font">ijkuiu874@gmail.com</p> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


{{-- @include('frontend/layouts/footer') --}}
@include('frontend.layouts.footer')

@endsection