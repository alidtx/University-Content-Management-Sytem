@extends('frontend.layouts.library_app')
@php
$pageTitle= "Library People" ;
@endphp
@section('title', $pageTitle)
@section('my_style')
<style>
	.book-container{
		margin: 15px 0;
		transition: .5s;
	}
	.book-container:hover{
		background-color: #f8f9fa;
		transition: .5s;
	}
	.book-container h5{
		height: 45px;
		overflow: hidden;
	}
	.book-container img{
		max-height: 220px;
		display: block;
		margin: 5px auto;
	}
	.text-black{
		color: #000 !important;
	}
	.nav-pills .nav-link.active,
	.nav-pills .show>.nav-link{
		background-color: #00b2ff;
	}
    .list{
        margin: 0;
        padding: 0;
       margin: 12px 0 12px 17px;
    }
    .list li{
        list-style: none
    }
    .list li a {
     text-decoration: none
    }
    .mb-2, .my-2 {
    margin-bottom: -0.5rem!important;
}
</style>
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
.heading-content1{
text-align: center;
font-size: 15px;
line-height: 1.5;
height: 140px;

}
.heading-content1 .desgination{

    font-size: 14px;
    display: inline-block;
     /* padding-top: 10px; */
 }

.heading-content1 .pro_name{

    font-size: 16px;
    font-weight: 500;
}

.my-font1{
font-size: 15px;
margin-top: 6px;
margin-bottom: 10px;
color: #00B2FF;
}
</style>
@endsection
@section('content')
<div class="my-5"></div>
{{-- @include('frontend.patial.content-header', ['pageTitle' => $pageTitle, 'bannerImageLink' => 'faculty.png']) --}}
{{-- @include('frontend.patial.content-blue-header', ['title' =>  'Book Category']) --}}
{{-- @include('frontend.partial.content-header', ['pageTitle' => $pageTitle, 'bannerImageLink' => 'faculty.png']) --}}

<section class="top-banner shadow dark" style="background: url({{ @$bannerImageLink ? asset('public/frontend/images/banner/'.@$bannerImageLink) : asset('public/frontend/images/banner/faculty.png') }})">
    <div class="container">
      <div class="row">
        <div class="col">
          <h3 class="text-center text-white" >{{ $pageTitle }}</h3>
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
                    <h3 class="title-text my-font">Library People</h3>
                </div>
              </div>
        </div>
      </div>
    </div>
  </section>


  <div class="row">
      <div class="container">
        <h3 class="my-font" style="margin-bottom: 20px;"><span style="color: #00B2FF;">Head of the Office</span></h3>
      </div>
    </div>
    <section class="">
      <div class="container">
          <div class="row">
              <div class="col-md-3 fix-height">
                  <div class="card">
                      <div class="card-body d-flex flex-column">
                      <div class="col-md-12 position-relative">
                          <div class="round-image">
                              <img height="170px" src="{{ @$office->member->image ? asset('public/upload/members/'.@$office->member->image) : asset('public/frontend/cuimages/user-dummy.jpeg') }}" onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/user-dummy.jpeg') }}';" alt="Image"/>
                          </div>
                      </div>
                      <div class="heading-content1" style="margin-top: 15px;">

                          <h3 class="my-font1" style="margin-bottom: 0px !important;"> {{@$office->member->name}}</span></h3>
                          <p class="desgination" style="padding-top: 0px !important; text-align: center;">{{ @$office->additional_designation ? @$office->additional_designation : @$office->member->member_designation}}</p><br/>
                          <small style="">{{$office->member->contact_number ? 'Cell:' : '' }} {{@$office->member->phone}}</small><br/>
                          <small style="">{{$office->member->email ? 'Email:' : '' }} {{@$office->member->email}}</small><br/><br/>
                        </div>
                </div>
                  </div>
              </div>
          </div>
      </div>
  </section>


  @if (count($Officeabout)>1)
  <div class="row">
    <div class="container">
        <h3 class="my-font" style="margin-bottom: 20px;"><span style="color: #00B2FF;">Officer & Staff</span></h3>
    </div>
</div>
@endif
<section>
  <div class="container">
    <div class="row">
  @foreach ($Officeabout as $item)
  @if($item->member->id != $office->office_head)

        <div class="col-md-3 fix-height">
            <div class="card">
              <div class="card-body d-flex flex-column">
                <div class="col-md-12 position-relative">
                    <div class="round-image">
                        <img src="{{ @$item->member->image ? asset('public/upload/members/'.@$item->member->image) : asset('public/upload/members/member.jpeg') }}" onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/user-dummy.jpeg') }}';" alt="Image"/>
                    </div>
                  </div>
                  <div class="heading-content1 ">

                    <h3 class="my-font1">{{@$item->member->name}}</span></h3>
                        <p class="desgination" style="text-align: center;">{{@$item->additional_designation ? @$item->additional_designation : @$item->member->member_designation}}</p> <br>
                        <small style="">{{$item->member->phone ? 'Cell:' : '' }} {{@$item->member->phone}}</small><br>
                        <small style="">{{$item->member->email ? 'Email:' : '' }} {{@$item->member->email}}</small><br><br>
                        <div class="button">
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
