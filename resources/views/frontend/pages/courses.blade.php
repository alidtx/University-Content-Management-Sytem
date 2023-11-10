@extends('frontend.layouts.app')


@php
$pageTitle='List of Programs'
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
    border: 1px solid #9de1ff;
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

  .card-text {
    font-size: 16px !important;
  }

  .card-body {
    min-height: 75px !important;
  }

  .program {

    text-align: left;
    padding: 10px 15px;

  }
</style>

@endsection


@section('content')


@include('frontend.partial.content-header', ['pageTitle' => $pageTitle, 'bannerImageLink' => 'faculty.png'])
@include('frontend.partial.content-blue-header', ['title' => 'Courses'])




<section id="faculty" style="margin-top: 40px;margin-bottom: 50px;">

  <div class="container" style="margin-top: 40px;">
    <div class="row">

      @foreach ($courses as $item )
      <div class="col-md-6" data-aos="fade-up" data-aos-duration="400" data-aos-easing="ease-in-out">

        <div class="card program" style="min-height: 150px">
          <h3 style="text-transform: capitalize">{{$item->name}}</h3>
          <p> Department: <span style="text-transform:uppercase "
              class="text-primary">{{@$item['department_name']['name']}}</span></p>
          <p> Program Lavel: <span style="text-transform:uppercase "
              class="text-primary">{{@$item['program_category']['name']}}</span></p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>


@endsection