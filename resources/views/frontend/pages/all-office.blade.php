@extends('frontend.layouts.app')
@php
$pageTitle = 'List of Offices';
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
</style>

@endsection


@section('content')


{{-- <section class="counter-numbers"
    style="background: url({{ asset('public/frontend/images/banner/faculty.png')  }}); background-position: center center; background-size:cover;">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-center font_four" style="color: white;">All Offices</h3>
            </div>
        </div>
    </div>
</section> --}}

@include('frontend.partial.content-header', [
'pageTitle' => $pageTitle,
'bannerImageLink' => 'faculty.png',
])


<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-sm-6" style="background-color: #00B2FF; margin: 40px 0;">

                        <h3 class="title-text my-font">Offices</h3>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="faculty" style="margin-top: 40px;margin-bottom: 50px;">

    <div class="container" style="margin-top: 40px;">
        <div class="row">

            <div class="col-md-4" data-aos="fade-up" data-aos-duration="400" data-aos-easing="ease-in-out">
                <div class="card">
                    <div class="round-image-right-curve">
                        <img class="card-img-top" src="{{ asset('storage/app/public/media/office/' . $vc->image) }}"
                            onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/dummy.png') }}';"
                            alt="Card image cap">
                    </div>

                    <div class="card-body" style="padding-bottom: 10px;">
                        <p class="card-text" style="font-weight: 700;font-size: 19px;">{{ $vc->name }}</p>
                    </div>
                    <div class="overlay">
                        <div class="text">
                            <a href="{{ route('offices.vc_office') }}" class="btn btn-primary"
                                style="font-family: Work Sans;font-size: 14px;">{{ $vc->name }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="400" data-aos-easing="ease-in-out">
                <div class="card">
                    <div class="round-image-right-curve">
                        <img class="card-img-top" src="{{ asset('storage/app/public/media/office/' . $proVc->image) }}"
                            onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/dummy.png') }}';"
                            alt="Card image cap">
                    </div>

                    <div class="card-body" style="padding-bottom: 10px;">
                        <p class="card-text" style="font-weight: 700;font-size: 19px;">{{ $proVc->name }}</p>
                    </div>
                    <div class="overlay">
                        <div class="text">
                            <a href="{{ route('offices.pro_vc_office') }}" class="btn btn-primary"
                                style="font-family: Work Sans;font-size: 14px;">{{ $proVc->name }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="400" data-aos-easing="ease-in-out">
                <div class="card">
                    <div class="round-image-right-curve">
                        <img class="card-img-top"
                            src="{{ asset('storage/app/public/media/office/' . $treasurer->image) }}"
                            onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/dummy.png') }}';"
                            alt="Card image cap">
                    </div>

                    <div class="card-body" style="padding-bottom: 10px;">
                        <p class="card-text" style="font-weight: 700;font-size: 19px;">{{ $treasurer->name }}</p>
                    </div>
                    <div class="overlay">
                        <div class="text">
                            <a href="{{ route('offices.treasurer_office') }}" class="btn btn-primary"
                                style="font-family: Work Sans;font-size: 14px;">{{ $treasurer->name }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="400" data-aos-easing="ease-in-out">
                <div class="card">
                    <div class="round-image-right-curve">
                        <img class="card-img-top"
                            src="{{ asset('storage/app/public/media/office/' . $proctor->image) }}"
                            onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/dummy.png') }}';"
                            alt="Card image cap">
                    </div>

                    <div class="card-body" style="padding-bottom: 10px;">
                        <p class="card-text" style="font-weight: 700;font-size: 19px;">{{ $proctor->name }}</p>
                    </div>
                    <div class="overlay">
                        <div class="text">
                            <a href="{{ route('offices.proctor_office') }}" class="btn btn-primary"
                                style="font-family: Work Sans;font-size: 14px;">{{ $proctor->name }}</a>
                        </div>
                    </div>
                </div>
            </div>


            @foreach ($offices as $office)
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="400" data-aos-easing="ease-in-out">
                <div class="card">
                    <div class="round-image-right-curve">
                        <img class="card-img-top" src="{{ asset('storage/app/public/media/office/' . $office->image) }}"
                            onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/dummy.png') }}';"
                            alt="Card image cap">
                    </div>

                    <div class="card-body" style="padding-bottom: 10px;">
                        <p class="card-text" style="font-weight: 700;font-size: 19px;">{{ $office->name }}</p>
                    </div>
                    <div class="overlay">
                        <div class="text">
                            <a href="{{ route('offices.office-details', $office->short_url) }}" class="btn btn-primary"
                                style="font-family: Work Sans;font-size: 14px;">{{ $office->name }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


@endsection