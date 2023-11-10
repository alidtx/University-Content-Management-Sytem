{{-- @extends('frontend.layouts.office-app') --}}
@extends('frontend.layouts.faculty-app')
@php
$pageTitle = 'Proctor List';
@endphp

@section('title', $pageTitle)
@section('my_style')

@endsection
@section('content')
@include('frontend.layouts.proctor_office_header')
<!-- hero slider -->
@include('frontend.partial.vc-slider')
<!-- /hero slider -->

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row my-5">
                    <div class="col-12 col-sm-6" style="background-color: #00B2FF;">
                        <h3 class="title-text my-font py-3 text-white ">Current Proctor</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5 position-relative">
                                <div class="round-image">
                                    <img class="img-fluid w-100"
                                        src="{{ asset('public/upload/members/' . $office->member->image) }}"
                                        onerror="this.onerror=null;this.src='{{ asset('public/frontend/images/about/user-dummy.jpeg') }}';"
                                        alt="about image">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <i style="color: #00B2FF;font-weight: 800;margin:15px 0;">31.01.2022 - Present</i>
                                <p style="font-size: 20px;font-weight: 500;margin:20px 0;">{{ $office->member->name }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row my-5">
                    <div class="col-12 col-sm-6" style="background-color: #00B2FF;">
                        <h3 class="title-text my-font py-3 text-white ">Former Proctor</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section class="contact-us d-none">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="my-font my-4">Feel <span class="text-primary">Free to Contact </span> With Us</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 my-4">
                <div class="card contact-card">
                    <div class="card-body">
                        <div class="inner-items-contactas">
                            <div class="row">
                                <div class="col-4 p-0"><img class="img-fluid d-block"
                                        src="{{ asset('public/frontend/images/icons/envelop.png') }}" alt="">
                                </div>
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
            <div class="col-md-4 my-4">
                <div class="card contact-card">
                    <div class="card-body">
                        <div class="inner-items-contactas">
                            <div class="row">
                                <div class="col-4 p-0"><img class="img-fluid d-block"
                                        src="{{ asset('public/frontend/images/icons/call.png') }}" alt="">
                                </div>
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
            <div class="col-md-4 my-4">
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
</section>
@include('frontend/layouts/footer')
@endsection


{{-- @section('java_script')
@endsection --}}