@extends('frontend.layouts.faculty-app')

@php
$pageTitle = @$office->name;
@endphp

@section('title', $pageTitle)

@section('content')

@include('frontend.layouts.office_header')


<!-- hero slider -->
<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            @if(count(@$slider_images)>0)
            @foreach(@$slider_images as $image)
            <li data-target="#carouselExampleCaptions" data-slide-to="{{ $loop->iteration - 1 }}"
                class="{{ $loop->iteration == 1 ? 'active' : '' }}"></li>
            @endforeach
            @else
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            @endif
        </ol>
        <div class="carousel-inner">
            @if(count(@$office->slider)>0)
            @foreach(@$office->slider as $image)
            <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
                <img src="{{ asset('public/upload/slider/'.$image->image) }}"
                    onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/s-dummy.png') }}';"
                    class="d-block w-100" alt="Comilla University">
                <div class="carousel-caption d-none d-md-block">
                    @if($image->show_description == 1)

                    @if($loop->iteration % 2)
                    <div class="animated fadeInRightBig">
                        {!! $image->text_on_banner !!}
                    </div>
                    @else
                    <div class="animated fadeInDownBig">
                        {!! $image->text_on_banner !!}
                    </div>
                    @endif
                    @endif
                </div>
            </div>
            @endforeach
            @else
            @foreach(@$home_slider->slider as $image)
            <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
                <img src="{{ asset('public/upload/slider/'.$image->image) }}"
                    onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/s-dummy.png') }}';"
                    class="d-block w-100" alt="Comilla University">
                <div class="carousel-caption d-none d-md-block">
                    @if($image->show_description == 1)

                    @if($loop->iteration % 2)
                    <div class="animated fadeInRightBig">
                        {!! $image->text_on_banner !!}
                    </div>
                    @else
                    <div class="animated fadeInDownBig">
                        {!! $image->text_on_banner !!}
                    </div>
                    @endif
                    @endif
                </div>
            </div>
            @endforeach
            @endif

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<section>
    <div class="container">
        <div class="row my-5">
            <div class="col-12 col-sm-4">
                <div class="mb-md-0">
                    <div class="round-image">

                        <img class="img-fluid w-100"
                            src="{{ asset('public/upload/members/' . @$office->member->image) }}"
                            onerror="this.onerror=null;this.src='{{ asset('public/frontend/images/about/user-dummy.jpeg') }}';"
                            alt="about image">
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-8">
                @if(@$directorMessage->short_description != null)
                <h3>Message from the <span class="text-primary">Head</span> of {{ $office->name }} </h3>
                <p class="text-justify">
                    {!!@$directorMessage->short_description!!}
                </p>
                @elseif ($office->office_head)
                <h3><span class="text-primary">Head</span> of {{ $office->name }} </h3>
                @endif
                @if($office->office_head != null)
                <div class="d-inline">
                    <h3>{{ $office->member->name }}</h3>
                    @if($office->additional_designation)
                    <b class="text-primary">{{@$office->additional_designation}}</b> <br />
                    @else
                    <b class="text-primary">{{@$office->member->designation->name}}</b> <br />
                    @endif
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- /hero slider -->


@include('frontend.sections.notice')

@include('frontend.partial.photo-gallery')

<section class="contact-us pt-4  pb-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="my-font my-1">Feel <span class="text-primary">Free to Contact </span> With Us</h3>
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
                        <p class="my-font">{{ $office->email }}</p>
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
                        <p class="my-font">{{ $office->contact_number }}</p>
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
                        <p class="my-font">{{ $office->location }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .mb-3,
    .my-3 {
        margin-bottom: 0.3rem !important;
    }
</style>

@include('frontend/layouts/footer')

@endsection