@extends('frontend.layouts.faculty-app')

@php
$pageTitle = @$halls->name;
@endphp

@section('title', $pageTitle)

@section('content')

@include('frontend/layouts/hall_header')



<!-- hero slider -->
<section>
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
      {{-- <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('public/frontend/images/banner/save_1.jpg') }}" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="animated fadeInRightBig">Welcome to <span style="color: #00b2ff"> {{ $halls->name }}</span></h2>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('public/frontend/images/banner/save_2.jpg') }}" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="animated fadeInRightBig">Welcome to <span style="color: #00b2ff"> {{ $halls->name }}</span></h2>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('public/frontend/images/banner/save_3.jpg') }}" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="animated fadeInRightBig">Welcome to <span style="color: #00b2ff"> {{ $halls->name }}</span></h2>
        </div>
      </div> --}}
      @if(count($slider_images)>0)
      @foreach($slider_images as $image)
      <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
        <img src="{{ asset('public/upload/slider/'.$image->image) }}"
          onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/s-dummy.png') }}';"
          class="d-block w-100" alt="Comilla University">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="animated fadeInRightBig">Welcome to <span style="color: #00b2ff"> {{ $halls->name }}</span></h2>
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
            src="{{ @$halls->member->image ?asset('public/upload/members/'.@$halls->member->image): asset('public/frontend/images/about/user-dummy.jpeg') }}"
            onerror="this.onerror=null;this.src='{{ asset('public/frontend/images/about/user-dummy.jpeg') }}';"
            alt="about image" />
        </div>
      </div>
      {{-- <div class="col-md-8">
        <h2>Message from the <span class="text-primary">Provost</span> of {{ $halls->name }} </h2>
        @foreach($hallHomes as $hallHome)
        <p> {!! $hallHome->description !!} </p>
        @endforeach
        <div class="d-inline">
          <h4>{{@$halls->member->name}}</h4>
          <b class="text-primary">Provost</b> <br />
          <a href="#" class="btn btn-primary mt-2 float-right">Read More</a>
        </div>
      </div> --}}
      <div class="col-12 col-sm-8">
        @if(@$message->short_description != null)
        <h3>Message from the <span class="text-primary">Provost</span> of {{ $halls->name }} </h3>
        <p class="text-justify">
          {!!@$message->short_description!!}
          {{-- <br> --}}
          {{-- {!!@$message->long_description!!} --}}
        </p>
        @elseif ($halls->provost)
        <h3><span class="text-primary">Provost</span></h3>
        @endif
        <div class="d-inline">
          <h3>{{ @$halls->member->name }}</h3>

          @if($halls->additional_designation)
          <b class="text-primary">{{@$halls->additional_designation}}</b> <br />
          @else
          <b class="text-primary">{{@$halls->member->designation->name}}</b> <br />
          @endif

          {{-- <a href="#" class="btn btn-primary mt-2 float-right">Read More</a> --}}
        </div>
      </div>
    </div>
  </div>
</section>



@include('frontend.sections.notice')



@include('frontend.partial.photo-gallery')



<section class="contact-us pt-4  pb-4">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3 class="my-font my-5">Feel <span class="text-primary">Free to Contact </span> With Us</h3>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
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
            <p class="my-font">{{ $halls->email }}</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
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
            <p class="my-font">{{ $halls->contact_number }}</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
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
            <p class="my-font">{{ $halls->location }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@include('frontend/layouts/footer')




@endsection