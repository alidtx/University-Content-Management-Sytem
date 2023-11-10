@extends('frontend.layouts.faculty-app')

{{-- @section('title', 'Faculty of Science') --}}
@php
$pageTitle = 'Department of ' . @$department->name;
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
</style>
@endsection

@section('content')

@include('frontend.layouts.department_header')

<!-- hero slider -->
<section class="mt-5 mt-sm-4">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
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
      {{-- <div class="carousel-item active">
        <img src="{{ asset('public/frontend/images/slider/slide_one.jpg') }}" class="d-block w-100"
          alt="Comilla University">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="animated fadeInRightBig">Welcome to Department of <span style="color: #00b2ff"> {{
              $department->name }}</span></h2>
        </div>
      </div> --}}
      @if(count($slider_images)>0)
      @foreach($slider_images as $image)
      <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
        <img src="{{ asset('public/upload/slider/'.$image->image) }}"
          onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/s-dummy.png') }}';"
          class="d-block w-100" alt="Comilla University">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="animated fadeInRightBig">Welcome to Department of <span style="color: #00b2ff"> {{
              $department->name }}</span></h2>
        </div>
      </div>
      @endforeach
      <div class="carousel-item active">
        <img src="{{ asset('public/frontend/images/slider/slide_one.jpg') }}" class="d-block w-100"
          alt="Comilla University">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="animated fadeInRightBig">Welcome to Department of <span style="color: #00b2ff"> {{
              $department->name }}</span></h2>
        </div>
      </div>
      @else
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

          <img class="img-fluid w-100" src="{{ asset('public/upload/members/'.@$department->member->image) }}"
            onerror="this.onerror=null;this.src='{{ asset('public/frontend/images/about/user-dummy.jpeg') }}';"
            alt="about image" />
        </div>
      </div>
      {{-- <div class="col-md-8">
        <h2>Message from the <span class="text-primary">Chairman</span> {{ $department->name }} </h2>
        <p> {!! @$message->short_description !!} </p>
        <div class="d-inline">
          <h4>{{@$department->member->name}}</h4>
          <b class="text-primary">Chairman</b> <br />
          <a href="{{ route('departments.department_message', $department->short_url) }}"
            class="btn btn-primary mt-2 float-right">Read More</a>
        </div>
      </div> --}}
      <div class="col-12 col-sm-8">
        @if(@$message->short_description != null)
        <h3>Message from the <span class="text-primary">Chairman</span> of {{ $department->name }} </h3>
        <p class="text-justify">
          {!!@$message->short_description!!}
          {{-- <br> --}}
          {{-- {!!@$message->long_description!!} --}}
        </p>
        @elseif ($department->department_head)

        <h3><span class="text-primary">Chairman</span></h3>
        @endif
        <div class="d-inline">
          <h3>{{ $department->member->name }}</h3>
          <b class="text-primary">{{@$department->member->designation->name}}</b> <br />
          {{-- <a href="#" class="btn btn-primary mt-2 float-right">Read More</a> --}}
        </div>
      </div>
    </div>
  </div>
</section>

<section class="departments">
  <div class="container">
    <h3 class="text-left text-white mb-4">Academic Program</h3>
    <div class="row">
      @foreach ($programs as $item)
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="inside d-flex">
          <img class="mr-2" src="{{ asset('public/frontend/images/faculty/science/icon1.png') }}" alt="">
          <div class="content">
            <h4 class="mb-0 text-white text-capitalize">{{ $item->name }}</h4>
            {{-- <p class="mb-0">78 Courses</p> --}}
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>


@include('frontend.sections.notice')

@include('frontend.partial.photo-gallery')

<section class="contact-us pt-4 pb-4">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3 class="my-font my-5">Feel <span class="text-primary">Free to Contact </span> With Us</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 mb-md-0 my-3">
        <div class="card contact-card">
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
            <p class="my-font">{{ $department->email }}</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 my-3">
        <div class="card contact-card">
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
            <p class="my-font">{{ $department->contact_number }}</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 my-3">
        <div class="card contact-card">
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
            <p class="my-font">{{ $department->location }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('frontend/layouts/footer')

@endsection