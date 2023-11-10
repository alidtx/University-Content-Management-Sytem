@extends('frontend.layouts.app')

@php
$pageTitle='Academic Council';
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

@endsection


@section('content')


    <section class="counter-numbers" style="background: url({{ asset('public/frontend/images/banner/faculty.png')  }})">
      <div class="container">
        <div class="row">
          <div class="col">
            <h3 class="text-center" style="color: white;">Academic Council</h3>
          </div>
        </div>
      </div>
    </section>
    <br>
    <div class="row">
      <div class="container">
        <h3 class="my-font" style="margin-bottom: 20px;">Academic Council <span style="color: #00B2FF;">Chairman</span></h3>
      </div>
    </div>
    @foreach ($syndicate_members as $syndicate_member)
      @if($syndicate_member->designation->layer == 1)
      <section class="">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="row">

                    <div class="col-md-5 position-relative" >
                      <div class="round-image">
                        <img src="{{ asset('public/upload/members/'. $syndicate_member->member->image) }}" onerror="this.onerror=null;this.src='{{ asset('public/frontend/images/about/user-dummy.jpeg') }}';" alt="Image"/>
                      </div>
                    </div>
                    <div class="col-md-7">
                     
                      <p style="font-size: 20px;font-weight: 500;margin:20px 0;">{{$syndicate_member->member->name}}</p> <p style="color: #00B2FF;font-weight: 800;margin:0;">{{$syndicate_member->committee_designation ? $syndicate_member->committee_designation : $syndicate_member->member->member_designation}}, {{$syndicate_member->member->work_place}}</p>
                      <small style="">Cell Phone: {{$syndicate_member->member->phone}}</small><br>
                      <small style="">Email: {{$syndicate_member->member->email}}</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      @endif
    @endforeach
    <div class="row">
      <div class="container">
        <h3 class="my-font" style="margin-bottom: 20px;">Academic Council <span style="color: #00B2FF;">Member</span></h3>
      </div>
    </div>
    <section class="my-2">
      <div class="container">
        <div class="row">
          @foreach($syndicate_members as $syndicate_member)
            @if($syndicate_member->designation->layer == 2)
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="row">

                  <div class="col-md-5 position-relative">
                    <div class="round-image">
                      <img src="{{ asset('public/upload/members/'. $syndicate_member->member->image) }}" onerror="this.onerror=null;this.src='{{ asset('public/frontend/images/about/user-dummy.jpeg') }}';" alt="Image"/>
                    </div>
                  </div>
                  <div class="col-md-7">
                   
                    <p style="font-size: 20px;font-weight: 500;margin:20px 0;">{{$syndicate_member->member->name}}</p>
                     <p style="color: #00B2FF;font-weight: 800;margin:0;">{{$syndicate_member->committee_designation ? $syndicate_member->committee_designation : $syndicate_member->member->member_designation}}, {{$syndicate_member->member->work_place}}</p>
                    <small style="">Cell Phone: {{$syndicate_member->member->phone}}</small><br>
                    <small style="">Email: {{$syndicate_member->member->email}}</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
            @endif
          @endforeach
        </div>
        </div>
      </section>
    <div class="row">
      <div class="container">
        <h3 class="my-font" style="margin-bottom: 20px;">Member <span style="color: #00B2FF;">Secretary</span></h3>
      </div>
    </div>
    <section class="">
      <div class="container">
        <div class="row">
          @foreach($syndicate_members as $syndicate_member)
            @if($syndicate_member->designation->layer == 3)
              <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">

                        <div class="col-md-5 position-relative">
                          <div class="round-image">
                            <img src="{{ asset('public/upload/members/'. $syndicate_member->member->image) }}" onerror="this.onerror=null;this.src='{{ asset('public/frontend/images/about/user-dummy.jpeg') }}';" alt="Image"/>
                          </div>
                        </div>
                        <div class="col-md-7">
                       
                          <p style="font-size: 20px;font-weight: 500;margin:20px 0;">{{$syndicate_member->member->name}}</p>   
                          <p style="color: #00B2FF;font-weight: 800;margin: 0;">{{$syndicate_member->committee_designation ? $syndicate_member->committee_designation : $syndicate_member->member->member_designation}}, {{$syndicate_member->member->work_place}}</p>
                          <small style="">Cell Phone: {{$syndicate_member->member->phone}}</small><br>
                          <small style="">Email: {{$syndicate_member->member->email}}</small>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            @endif
          @endforeach
          </div>
        </div>
      </section>



@endsection
