{{-- @extends('frontend.layouts.office-app') --}}
@extends('frontend.layouts.faculty-app')
@php
$pageTitle = 'VC Office Staffs';
@endphp

@section('title', $pageTitle)

@section('my_style')

@endsection
@section('content')
@include('frontend.layouts.vc_office_header')
<!-- hero slider -->
@include('frontend.partial.vc-slider')
<!-- /hero slider -->

<section>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="row my-5">
          <div class="col-12 col-sm-6" style="background-color: #00B2FF;">

            <h3 class="title-text my-font py-3 text-white ">Office of the Vice Chancellor
            </h3>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="about-more">
  <div class="container">
    <div class="row">

      @foreach ($Officeabout as $office)
      <div class="col-md-6 my-3">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-5 position-relative">
                <div class="round-image">
                  <img height="170px"
                    src="{{ @$office->member->image ? asset('public/upload/members/' . @$office->member->image) : asset('public/frontend/cuimages/user-dummy.jpeg') }}"
                    onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/user-dummy.jpeg') }}';"
                    alt="Image" />
                </div>
              </div>
              <div class="col-md-7">
                <i style="color: #00B2FF;font-weight: 800;margin:15px 0;">{{ @$office->member->member_designation }}</i>
                <p style="font-size: 20px;font-weight: 500;margin:20px 0;">
                  {{ @$office->member->name }}</p>
                <small style="">Cell Phone:{{ @$office->member->phone }}</small><br>
                <small style="">Email:{{ @$office->member->email }}</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach


      {{-- <div class="col-md-6 my-3">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-5 position-relative">
                <div class="round-image">
                  <img src="{{ asset('public/frontend/images/about/farhad.png') }}" alt="Image" />
                </div>
              </div>
              <div class="col-md-7">
                <i style="color: #00B2FF;font-weight: 800;margin:15px 0;">Assistant Registrar</i>
                <p style="font-size: 20px;font-weight: 500;margin:20px 0;">Hossain Morshed Farhad</p>
                <small style="">Cell Phone:01715408158</small>
                <small style="">Email:emdadcou@gmail.com</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 my-3">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-5 position-relative">
                <div class="round-image">
                  <img src="{{ asset('public/frontend/images/about/emdadul.png') }}" alt="Image" />
                </div>
              </div>
              <div class="col-md-7">
                <i style="color: #00B2FF;font-weight: 800;margin:15px 0;">Assistant Registrar</i>
                <p style="font-size: 20px;font-weight: 500;margin:20px 0;">Mohammad Emdadul Hoque</p>
                <small style="">Cell Phone:01715408158</small>
                <small style="">Email:emdadcou@gmail.com</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 my-3">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-5 position-relative">
                <div class="round-image">
                  <img src="{{ asset('public/frontend/images/about/jisan.jpg') }}" alt="Image" />
                </div>
              </div>
              <div class="col-md-7">
                <i style="color: #00B2FF;font-weight: 800;margin:15px 0;">Section Officer</i>
                <p style="font-size: 20px;font-weight: 500;margin:20px 0;">Noor Mohammad (Jisan)</p>
                <small style="">Cell Phone:01715408158</small>
                <small style="">Email:emdadcou@gmail.com</small>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
</section>

{{-- <section class="contact-us">
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
            <p class="my-font">Support87@gmail.com</p>
            <p class="my-font">ijkuiu874@gmail.com</p>
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
            <p class="my-font">Support87@gmail.com</p>
            <p class="my-font">ijkuiu874@gmail.com</p>
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
            <p class="my-font">Support87@gmail.com</p>
            <p class="my-font">ijkuiu874@gmail.com</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}
@include('frontend/layouts/footer')
@endsection

{{--
@section('java_script')
@endsection --}}