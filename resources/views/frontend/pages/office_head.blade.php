@extends('frontend.layouts.app')

@php
$pageTitle='List of Office head'
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


  .position-relative {
    margin-left: auto;
  }

  .heading-content {
    text-align: center;
    font-size: 14px;
    line-height: 1.5;
    height: 200px;
    overflow: hidden;

  }

  .heading-content .desgination {

    font-size: 14px;
    display: inline-block;
    /* padding-top: 10px; */
  }

  .heading-content .pro_name {

    font-size: 16px;
    font-weight: 500;
  }

  .my-font {
    font-size: 14px;
    margin-top: 6px;
    margin-bottom: 14px;
    color: #00B2FF;
  }
</style>

@endsection


@section('content')


{{-- <section class="counter-numbers"
  style="background: url({{ asset('public/frontend/images/banner/faculty.png')  }})">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3 class="text-center" style="color: white;">Office Head</h3>
      </div>
    </div>
  </div>
</section> --}}

@include('frontend.partial.content-header', ['pageTitle' => $pageTitle, 'bannerImageLink' => 'faculty.png'])
<section>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-10 offset-0 offset-sm-2">
            <h3 class="title-text ">All Office Heads</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="row">

              @foreach ($officeHead as $item)




              <div class="col-md-3">
                <div class="card">
                  <div class="card-body d-flex flex-column">

                    <div class="col-md-12 position-relative">
                      <div class="round-image">

                        <img
                          src="{{ @$item->member->image ? asset('public/upload/members/'.@$item->member->image) : asset('public/upload/members/member.jpeg') }}"
                          onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/user-dummy.jpeg') }}';"
                          alt="Image" />
                      </div>
                    </div>

                    <div class="heading-content">
                      <h3 class="my-font" style="margin-bottom: 14px;"> Head of {{$item->name}}</span></h3>
                      <p class="pro_name">{{$item->member->name}}</p>
                      <p class="desgination">{{$item->member->member_designation}}</p><br>
                      <small style="">Cell Phone: {{$item->member->phone}}</small><br>
                      <small style="">Email: {{$item->member->email}}</small><br><br>

                    </div>
                    <a href="{{route('offices.office_head_details',@$item->id)}}"
                      class="btn btn-primary btn-sm justify-self-end" style="color: white; margin-top: auto;">
                      Details</a>
                  </div>
                </div>
              </div>

              @endforeach


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>






@endsection