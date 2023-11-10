{{-- @extends('frontend.layouts.app') --}}
@extends('frontend.layouts.faculty-app')

@php
$pageTitle='Events - '. @$event->title;
@endphp

@section('title', $pageTitle)


@section('my_style')
<style>
  @media (min-width: 1200px) {
    .for_padding_like_container {
      padding-left: 10px;
    }
  }

  @media (min-width: 992px) {
    .for_padding_like_container {
      padding-left: 10px;
    }
  }

  @media (min-width: 768px) {
    .for_padding_like_container {
      padding-left: 10px;
    }
  }

  @media (min-width: 576px) {
    .for_padding_like_container {
      padding-left: 75px;
    }
  }
</style>

<style>
  .mb-3,
  .my-3 {
    margin-bottom: 0.3rem !important;
  }

  .round-image-right-curve img {
    height: 240px;
  }

  .title-text {
    padding: 15px;
    color: #fff;
  }

  .overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: .5s ease;
    background-color: rgba(0, 178, 255, 0.5);
    z-index: 999;

  }

  .card {
    box-shadow: rgba(129, 126, 126, 0.1) 0px 4px 12px;
    margin-bottom: 20px;
  }

  .card:hover .overlay {
    opacity: 1;
  }

  .text {
    color: white;
    font-size: 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    text-align: center;
  }

  .long_des p {
    font-size: 20px;
    padding-bottom: 10px;
  }
</style>

@endsection


@section('content')

@include('frontend.layouts.faculty_header')

<section class="counter-numbers" style="background: url({{ asset('public/frontend/images/banner/faculty.png')  }})">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3 class="text-center my-font" style="color: white;">Event</h3>
      </div>
    </div>
  </div>
</section>

{{-- <section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-12 col-sm-6" style="background-color: #00B2FF; margin: 40px 0;">
            <div class="row">
              <div class="col-10 offset-0 offset-sm-2">
                <h3 class="title-text my-font">{{ @$event->title }}</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}

@include('frontend.partial.content-blue-header', ['title' => @$event->title ])

<section>
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12">
        <div class="card" style="padding: 15px;">
          <div style="padding-bottom: 10px;">
            Date of Publish : {{ $event->date }}
          </div>
          <div>
            <div class="long_des">
              {!! $event->long_description !!}
            </div>
            <div>
              <img class="card-img-top" src="{{ asset('public/upload/news/'.$event->image) }}"
                onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/dummy.png') }}';"
                alt="Card image cap">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@include('frontend/layouts/footer')

@endsection