@extends('frontend.layouts.library_app')


@php
$pageTitle= "University Library" ;
@endphp

@section('title', $pageTitle)


@section('my_style')
<style>
    .book-container {
        margin: 15px 0;
        transition: .5s;
    }

    .book-container:hover {
        background-color: #f8f9fa;
        transition: .5s;
    }

    .book-container h5 {
        height: 45px;
        overflow: hidden;
    }

    .book-container img {
        max-height: 220px;
        display: block;
        margin: 5px auto;
    }

    .text-black {
        color: #000 !important;
    }
</style>
@endsection

@section('content')

<div class="my-5"></div>

{{-- @include('frontend.patial.content-header', ['pageTitle' => $pageTitle, 'bannerImageLink' => 'faculty.png']) --}}
{{-- @include('frontend.patial.vc-slider') --}}

<!-- ===== slider section start ===== -->
<div class="slider-container" style="margin-top:95px">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @if(count($slider_images)>0)
            @foreach($slider_images as $image)
            <li data-target="#carouselExampleCaptions" data-slide-to="{{ $loop->iteration - 1 }}" class="{{ $loop->iteration == 1 ? 'active' : '' }}"></li>
            @endforeach
            @else
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            @endif
        </ol>
        <div class="carousel-inner">
            <div class="carousel-inner">
                @if(count($slider_images)>0)
                @foreach($slider_images as $image)
                <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
                    <img src="{{ asset('public/upload/slider/'.$image->image) }}" onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/s-dummy.png') }}';" class="d-block w-100" alt="Comilla University">
                    <div class="carousel-caption d-none d-md-block">
                        @if($image->show_description == 1)

                        @if($loop->iteration % 2)
                        <div class="animated fadeInRightBig">
                            {{-- {!! $image->text_on_banner !!} --}}
                        </div>
                        @else
                        <div class="animated fadeInDownBig">
                            {{-- {!! $image->text_on_banner !!} --}}
                        </div>
                        @endif

                        {{-- <a href="{{ route('sliderContent', encrypt($image->id)) }}"  class="btn btn-primary my-3 animated fadeInUpBig">Learn More</a> --}}
                        @endif
                    </div>
                </div>
                @endforeach
                @else
                <div class="carousel-item">
                    <img src="{{ asset('public/frontend/images/banner/u_banner.png') }}" class="d-block w-100" alt="Comilla University">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="text-white" > Your bright future is our mission </h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exer
                                </p>
                                <a href="#"  class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
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
</div>
<!-- ===== slider section end ===== -->





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
                @elseif ($office->library_head)
                    <h3><span class="text-primary">Head</span> of {{ $office->name }} </h3>
                @endif
                @if($office->library_head != null)
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

{{-- @include('frontend.sections.notice') --}}

<section class="counter-numbers-2"
    style="background-image: url('{{ asset('public/upload/at_a_galance/'.@$at_a_glance->image)  }}');">
    <div class="container">
        <h2 class="text-center text-white">{!! @$library_galance->title !!}</h2>
        <div class="row">
            <div class="col-12 col-md-3 my-3">
                <div class="inside">
                    <div class="text-center">
                        <i class="fa-solid fa-people-roof"></i>
                        <h2 class="count" data-count="{{ @$library_galance->column_1_number }}">0</h2>
                        <h5 class="">{{ @$library_galance->column_1_text }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 my-3">
                <div class="inside">
                    <div class="text-center">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <h2 class="count" data-count="{{ @$library_galance->column_2_number }}">0</h2>
                        <h5 class="">{{ @$library_galance->column_2_text }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 my-3">
                <div class="inside">
                    <div class="text-center">
                        <i class="fa-brands fa-gripfire"></i>
                        <h2 class="count" data-count="{{ @$library_galance->column_3_number }}">0</h2>
                        <h5 class="">{{ @$library_galance->column_3_text }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 my-3">
                <div class="inside" style="padding: 50px 10px;">
                    <div class="text-center">
                        <i class="fa-brands fa-gg"></i>
                        <h2 class="count" data-count="{{ @$library_galance->column_4_number }}">0</h2>
                        <h5 class="">{{ @$library_galance->column_4_text }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







<section>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-sm-8 shadow-sm" style="border: 1px solid #00b2ff38;        border-radius: 5px;">
                <h2 class="event-title mb-4" style="padding: 9px 0 0 0;">Recent and Upcoming <span
                        class="text-color-one"> Events</span> </h2>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="row">

                        <div class="col-12 col-sm-6">
                            <div class="carousel-inner">
                                @foreach ($events as $event)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <img class="d-block w-100"
                                        src="{{ $event->image ? asset('public/upload/news/'.$event->image) : asset('public/frontend/cuimages/dummy.png') }}"
                                        onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/dummy.png') }}';"
                                        alt="First slide">
                                    <div class="news-content">
                                        <p><small>{{mydate($event->date)}}</small></p>

                                        <a href="{{ route('news_details', $event->id) }}">
                                            <h5>{{$event->title}}</h5>
                                        </a>
                                        <p>{{$event->short_description}}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <ul class="list-unstyled mt-3 mt-sm-0">
                                @foreach ($events as $event)
                                <li class="mb-3 eventlist">
                                    <a href="{{ route('news_details', $event->id) }}">
                                        <div class="row">
                                            <div class="col-4">
                                                <img src="{{ asset('public/upload/news/'.$event->image) }}"
                                                    onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/dummy.png') }}';"
                                                    alt="" class="img-fluid">
                                            </div>
                                            <div class="col-8">
                                                <p><small> {{mydate($event->date)}}</small></p>
                                                <p>{{$event->title}}</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-4">
                <div class="holder shadow-sm" style="padding: 0px">
                    <h2 class="notice-title">Notices</h2>
                    <div class="demo" style="margin: 10px; color: #2D2D2D; ">
                        <ul id="ticker1111">
                            @foreach($notice as $i => $notice)
                                <li>
                                    <a href="{{ route('news_details', $notice->id) }}">
                                        <div class="row">
                                            <div class="col-4 a">
                                                <img src="{{ asset('public/upload/news/'.$notice->image) }}" onerror="myFunction()"  alt="" class="img-fluid">
                                            </div>
                                            <div class="col-8 b">
                                                <p><small>{{ mydate($notice->start_date) }}</small></p>
                                                <p>{{ $notice->title }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






{{-- <section>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h3 class="text-right">
                    <a class="btn btn-primary" href="{{ route('library.collection') }}">View All <i
                            class="ti-angle-double-right"></i> </a>
                </h3>
            </div>
        </div>
        <div class="row">
            @foreach($books as $i => $item)
            <div class="col-12 col-sm-3">
                <a class="text-decoration-none" href="#">
                    <div class="book-container border">
                        <img class="img-fluid"
                            src="{{ asset('public/upload/library/books_publications/'.$item->image) }}" alt="Book">
                        <h5 class="text-black text-center my-3">{{ $item->title }}</h5>
                    </div>
                </a>
            </div>
            @endforeach
            <div class="col-12 col-sm-3">
                <div class="book-container border">
                    <img class="img-fluid" src="{{ asset('public/frontend/images/books/book_two.jpg') }}" alt="Book">
                    <p class="text-center border-bottom mt-3"><i>By: Md Khalid Hossain</i></p>
                    <h5 class="text-center my-3">The Book Deal</h5>
                </div>
            </div>
            <div class="col-12 col-sm-3">
                <div class="book-container border">
                    <img class="img-fluid" src="{{ asset('public/frontend/images/books/book_three.jpg') }}" alt="Book">
                    <p class="text-center border-bottom mt-3"><i>By: Md Khalid Hossain</i></p>
                    <h5 class="text-center my-3">The Book Deal</h5>
                </div>
            </div>
            <div class="col-12 col-sm-3">
                <div class="book-container border">
                    <img class="img-fluid" src="{{ asset('public/frontend/images/books/book_four.png') }}" alt="Book">
                    <p class="text-center border-bottom mt-3"><i>By: Md Khalid Hossain</i></p>
                    <h5 class="text-center my-3">The Book Deal</h5>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<script>
    function myFunction() {
      $('.a').hide();
    }
</script>
@endsection
