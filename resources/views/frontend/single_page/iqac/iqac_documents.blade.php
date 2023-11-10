{{-- @extends('frontend.layouts.app') --}}

@extends('frontend.layouts.faculty-app')

@php
$pageTitle='Documents - IQAC Cell';
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

	<style>
    .mb-3, .my-3 {
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
    .heading-content1{
    text-align: center;
    font-size: 15px;
    line-height: 1.5;
    height: 53px;

    }
    .heading-content1 .desgination{

        font-size: 14px;
        display: inline-block;
         padding-top: 10px;
     }

    .heading-content1 .pro_name{

        font-size: 16px;
        font-weight: 500;
    }

    .my-font1{
     font-size: 24px;
    margin-top: 10%;
    margin-bottom: 14px;
    line-height: 2.5;
    color: #00B2FF;
    }



	</style>

@endsection


@section('content')


@include('frontend.layouts.iqac_office_header')

    <section class="counter-numbers" style="background: url({{ asset('public/frontend/images/banner/faculty.png')  }})">
      <div class="container">
        <div class="row">
          <div class="col">
            <h3 class="text-center my-font" style="color: white;">IQAC Document</h3>
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
                      <h3 class="title-text my-font" style="margin-left:-102px">IQAC Document</h3>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </section>


    <section>
        <div class="container">
          <div class="row">
              @foreach ($document as $item)
              <div class="col-12 col-sm-12">
                <div class="card">
                  <div class="card-body d-flex flex-column">
                      <ul class="list-unstyled mt-3 mt-sm-0">
                          <li class=" mb-3">
                              <a href="#">
                                  <div class="row">
                                      <div class="col-3">
                                          <img height="170px" src="{{ @$item->member->image ? asset('public/upload/members/'.@$item->member->image) : asset('public/frontend/cuimages/user-dummy.jpeg') }}" onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/user-dummy.jpeg') }}';" alt="Image"/>
                                      </div>

                                      <div class="col-4 pdf-d">
                                        <h1 class="my-font1" style="margin-bottom: 0px !important;">{{$item->title}}</h1>
                                        <a href="{{asset('/public/storage/media/training/'.@$item->document)}}" target="_blank" ><img class="pdficon" height="30px" width="30px" src="{{asset('public/upload/pdf/pdficon.png')}}" alt=""></a>
                                      </div>
                                  </div>
                              </a>
                          </li>
                      </ul>
                  </div>
                </div>
              </div>
              @endforeach
          </div>
        </div>
      </section>












@include('frontend/layouts/footer')

@endsection
