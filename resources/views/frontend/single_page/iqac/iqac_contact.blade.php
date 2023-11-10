{{-- @extends('frontend.layouts.app') --}}

@extends('frontend.layouts.faculty-app')

@php
$pageTitle='Contact - IQAC Cell';
@endphp

@section('title', $pageTitle)

@section('my_style')
	<style>
	    @media (min-width: 1200px) {
	      .for_padding_like_container {
	            padding-left:10px;
	      }
	    }

	    @media (min-width: 992px) {
	      .for_padding_like_container {
	        padding-left:10px;
	      }
	    }
	    @media (min-width: 768px) {
	      .for_padding_like_container {
	        padding-left: 10px;
	      }
	    }
	    @media (min-width: 576px) {
	      .for_padding_like_container {
	        padding-left:75px;
	      }
	    }
	</style>

	<style>.mb-3, .my-3 {
		  margin-bottom: 0.3rem!important;
		}
    .round-image-right-curve img {
      height: 240px;
    }

   .title-text{
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
      .card{
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
	</style>
  <style type="text/css">
    .contact-form{
      /*background-color: #f3f3f3;*/
      padding: 50px 0;
    }
    .query-form{
      border: 1px solid #00B2FF;
        box-shadow: 0px 1px 10px rgb(0 0 0 / 10%);
      padding: 25px ;
    }
    .form-title{
      color: #00B2FF;
      font-size: 22px;
    }
  </style>

@endsection


@section('content')

@include('frontend.layouts.iqac_office_header')


    <section class="counter-numbers" style="background: url({{ asset('public/frontend/images/banner/faculty.png')  }})">
      <div class="container">
        <div class="row">
          <div class="col">
            <h3 class="text-center my-font" style="color: white;">Contact of {{ @$office->name }}</h3>
          </div>
        </div>
      </div>
    </section>


    <section>
      <div class="container">
        <div class="row">
              <div class="col-12 col-sm-6" style="background-color: #00B2FF; margin: 40px 0;">
                <div class="row">
                  <div class="col-10 offset-0 offset-sm-2">
                      <h3 class="title-text my-font" style="margin-left:-102px">Contact</h3>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container my-4">
        <div class="row">
            <div class="col-12 col-sm-5">
            <div class="query-form shadow">
              <div class="p-address mb-4">
                <h3 class="my-font form-title"><i class="ti-location-pin text-primary"></i> Address:</h3>
                <p>
                  {{$office->location}}<br>
                  Comilla University<br>
                  Comilla-3506, Bangladesh
                </p>
              </div>
              <div class="phone mb-4">
                <h3 class="my-font form-title">
                  <i class="ti-mobile text-primary"></i> Phone:
                </h3>
                <p>
                  Phone: {{$office->contact_number}} <br>
                  Fax: (+88) 02334411135
                </p>
              </div>
              <div class="email mb-4">
                <h3 class="my-font form-title">
                  <i class="ti-email text-primary"></i> Email:
                </h3>
                <p>Email: {{$office->email}}</p>
              </div>
              <div class="website mb-4">
                <h3 class="my-font form-title">
                  <i class="ti-world text-primary"></i> Web:
                </h3>
                <p>Web: https://cou.ac.bd</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-7">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5252.923855264322!2d91.13437151180514!3d23.419821360498315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37547e78b6312e8d%3A0xa9c070c9b3e0d1b9!2sComilla%20University!5e0!3m2!1sen!2sbd!4v1662978485025!5m2!1sen!2sbd" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          </div>
        </div>
      </div>

    </section>
    {{-- @section('java_script') --}}

    @include('frontend/layouts/footer')

@endsection
