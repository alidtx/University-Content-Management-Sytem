@extends('frontend.layouts.index')
@section('content')
@include('frontend.layouts.header')

{{-- <section id="banner">
    <div class="container-flutter">
        <div class="col-12 m-0 p-0">
            @php
            $sliderVideo = DB::table('slider_videos')->first();
            @endphp
            @if(!empty($sliderVideo->video) && $sliderVideo->show_video == 1)
            <video loop autoplay muted style="height: 34vw;opacity: {{ $sliderVideo->opacity/100 }};" width="100%"> 
                <source src="{{asset('public/upload/slider/'.$sliderVideo->video) }}">
                Your browser does not support the video tag.
            </video>
            @else
            @endif
        </div>
    </div>
</section> --}}

<style>
    /* .big-left {
        left: 10%;
    }
    .big-right {
        left: 87%;
    }
    .small-left {
        left: 10%;
    }
    .small-right {
        left: 80%;
    } */
    .left-icon-design {
        background: #fff;
        position: absolute;
        width: 40px;
        height: 40px;
        top: 54%;
        border-radius: 50%;
    }
    .right-icon-design {
        background: #fff;
        position: absolute;
        width: 40px;
        height: 40px;
        top: 54%;
        border-radius: 50%;
    }
    .carousel-control-prev:hover, .carousel-control-next:hover {
        background: #8AC43C;
    }
</style>

<section id="banner">
    <div class="">
      {{-- @php dd(@$find_post->getTable()); @endphp --}}
        

      <div class="col-md_myClass col-md-12 col-xl-12 col-lg-12" style="padding-left: 0;padding-right: 0;">
        <div class="col-md_myClass col-md-12 col-xl-12 col-lg-12" id="padding" style="padding: 0;">
            





{{-- <div class="col-md_myClass col-md-12 col-xl-12 col-lg-12 hidden-sm hidden-xs">
    <br>
    <br>
    <div id="cssmenu" style="padding-left: 0%; margin-top: -26px;">
        <ul>
            <li class="active"><a href="/Library/LibrarySubSite?Menuid=1018">Library-Home</a></li>
            <li><a href="#">Library</a></li>
            <li><a href="/Home/Index">BIGM-Home</a></li>
        </ul>
    </div>       
</div> --}}
<div id="carouselSlideLibrary" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($slider as $key => $list)
        <div class="carousel-item {{($key == 0)?('active'):''}}" data-bs-interval="10000">
            <div class="carousel-caption" style="top: 0;left: 7.5%;right: 0;bottom:0;padding: 0; text-align: justify;">
                {!! $list->show_description == 1 ? $list->description : '' !!}
            </div>
            <img src="{{asset('public/upload/library/slider/'.$list->image)}}" class="d-block w-100" style="height: 34vw;" alt="...">
        </div>
        @endforeach
    </div>
    
    <button class="carousel-control-prev left-icon-design big-left" type="button" data-bs-target="#carouselSlideLibrary" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next right-icon-design big-right" style="left: 87%;" type="button" data-bs-target="#carouselSlideLibrary" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


@php
    $newArrivals = \App\Model\BooksPublication::where('type',1)->where('show_status',1)->orderBy('id','desc')->get();
@endphp

<div class="col-md_myClass col-md-12 col-xl-12 col-lg-12">

    <div class="container" style="width: 100%;background: ;margin-top: 2%; margin-bottom: 2%;">
        {{-- <p style="text-align: center;">Search for Resources</p> --}}
        <div class="row" style="margin-left: auto; margin-right: auto;">
            {{-- <div class="col-1">
                
            </div> --}}
            <div class="col-md-6 col-sm-12">
                <input type="text" class="form-control" placeholder="Search for Resources">
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <select style="height: 37px;" class="form-control">
                            <option>Title Keyword</option>
                            <option>Author</option>
                            <option>Subject</option>
                            <option>Title Begins with All Keywords</option>
                            <option>Location</option>
                            <option>Year</option>
                            <option>Call Number</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <a href="{{ route('library_subject_wise_book') }}" style="height: 37px;margin-bottom: 5px;padding-top: 6px;" class="btn btn-sm btn-info">Search</a class="btn">
                        </a>
                    </div>
                </div>
            </div>
            {{-- <div class="col-1">
                
            </div> --}}
        </div>
    </div>


<div class="container">
    <div class="row">
<div class="col-md_myClass col-md-4 col-xl-4 col-lg-4" style="">
    <h4><b><u>New Arrivals</u> </b></h4>
    <div id="carouselSlideNewArrival" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($newArrivals as $key => $list)
            <div class="carousel-item {{($key == 0)?('active'):''}}" data-bs-interval="10000">
                <a target="_blank" href="{{ route('library_subject_wise_book') }}"><img src="{{asset('public/upload/library/books_publications/'.@$list->image)}}" class="d-block w-100" style="height: 25vw;" alt="..."></a>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev left-icon-design small-left" type="button" data-bs-target="#carouselSlideNewArrival" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next right-icon-design small-right" style="left: 80%;" type="button" data-bs-target="#carouselSlideNewArrival" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

@php
    $upcomingBooks = \App\Model\BooksPublication::where('type',2)->where('show_status',1)->orderBy('id','desc')->get();
@endphp

<div class="col-md_myClass col-md-4 col-xl-4 col-lg-4" style="">
    <h4><b><u>Upcoming Books</u> </b></h4>
    <div id="carouselSlideUpcoming" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($upcomingBooks as $key => $list)
            <div class="carousel-item {{($key == 0)?('active'):''}}" data-bs-interval="10000">
                <a target="_blank" href="{{ route('library_subject_wise_book') }}"><img src="{{asset('public/upload/library/books_publications/'.@$list->image)}}" class="d-block w-100" style="height: 25vw;" alt="..."></a>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev left-icon-design small-left" type="button" data-bs-target="#carouselSlideUpcoming" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next right-icon-design small-right" style="left: 80%;" type="button" data-bs-target="#carouselSlideUpcoming" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>

@php
    $bigmPublicationsJournals = \App\Model\BooksPublication::where('type',3)->where('show_status',1)->orderBy('id','desc')->get();
@endphp

<div class="col-md_myClass col-md-4 col-xl-4 col-lg-4" style="margin-bottom: 10px;">
    <h4><b><u>COU Publications/Journal</u> </b></h4>
    <div id="carouselSlidePublications" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($bigmPublicationsJournals as $key => $list)
            <div class="carousel-item {{($key == 0)?('active'):''}}" data-bs-interval="10000">
                <a target="_blank" href="{{ route('library_subject_wise_book') }}"><img src="{{asset('public/upload/library/books_publications/'.@$list->image)}}" class="d-block w-100" style="height: 25vw;" alt="..."></a>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev left-icon-design small-left" type="button" data-bs-target="#carouselSlidePublications" data-bs-slide="prev">
            <span style="color: white;" class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next right-icon-design small-right" style="left: 80%;" type="button" data-bs-target="#carouselSlidePublications" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
    </div><!---End Div row-->

</div>


<!---Footer-->
@php
$libraryNews = \App\Model\LibraryNews::orderBy('id','desc')->limit(3)->get();
@endphp

<section id="news-event-notice" style="padding-top: 30px; padding-bottom: 30px;">
        <div class="container">
            <div class="row-">
                <div class="col-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item news" role="presentation" style="width: 100%;">
                            <button class="nav-link active" id="pills-news-tab" data-bs-toggle="pill" data-bs-target="#pills-news" type="button" role="tab" aria-controls="pills-news" aria-selected="true">Latest News</button>
                        </li>
                        {{-- <li class="nav-item event" role="presentation">
                            <button class="nav-link" id="pills-event-tab" data-bs-toggle="pill" data-bs-target="#pills-event" type="button" role="tab" aria-controls="pills-event" aria-selected="false">Event</button>
                        </li>
                        <li class="nav-item notice" role="presentation">
                            <button class="nav-link" id="pills-notice-tab" data-bs-toggle="pill" data-bs-target="#pills-notice" type="button" role="tab" aria-controls="pills-notice" aria-selected="false">Notice Board</button>
                        </li> --}}
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-news" role="tabpanel" aria-labelledby="pills-news-tab">
                            @foreach($libraryNews as $single)
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{asset('public/upload/library/library_news/'.$single->image)}}" style="height: 100px;" alt=""/>
                                </div>
                                <div class="col-md-10">
                                    <p class="">{{$single->title}}</p>
                                    <a class="" href="{{ route('single_library_news', $single->id) }}">Read More ...</a>
                                </div>
                            </div>
                            <hr/>
                            @endforeach
                            <div class="clearfix"></div>
                            <a class="btn btn-outline-success" href="{{ route('library_all_news') }}">VIEW ALL NEWS</a>
                        </div>
                        {{-- <div class="tab-pane fade" id="pills-event" role="tabpanel" aria-labelledby="pills-event-tab">
                            @foreach($event as $list)
                            <p class="content">{{$list->title}}</p>
                            <p class="date">{{date('d-M-Y',strtotime($list->date))}}</p>
                            <a class="read-more" href="{{route('event',$list->id)}}">Read More ...</a>
                            <hr/>
                            @endforeach
                            <div class="clearfix"></div>
                            <a class="btn btn-outline-primary" href="{{route('event-all')}}">VIEW ALL EVENT</a>
                        </div>
                        <div class="tab-pane fade" id="pills-notice" role="tabpanel" aria-labelledby="pills-notice-tab">
                            @foreach($notice as $list)
                            <p class="content">{{$list->title}}</p>
                            <p class="date">{{date('d-M-Y',strtotime($list->date))}}</p>
                            <a class="read-more" href="{{route('notice',$list->id)}}">Read More ...</a>
                            <hr/>
                            @endforeach
                            <div class="clearfix"></div>
                            <a class="btn btn-outline-warning" href="{{route('notice-all')}}">VIEW ALL NOTICE</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>



        </div>
        <div class="col-md_myClass col-md-12 col-xl-12 col-lg-12" style="">
            <div class="container">
            {{-- <div class="col-md_myClass col-md-12 col-xl-12 col-lg-12" id="newsEvents" style="background-color: #002D68">
                <h4>Library News</h4>
            </div>
            <div class="col-md_myClass col-md-12 col-xl-12 col-lg-12 img-rounded" id="newsTicker" style="background-color: #d5d4d9;height: 100%;">
                <ul id="news" style="list-style-image: url('../../../../Content/About_Image/checkbox.png');">
                        @foreach($libraryNews as $single)
                            <li id="showNews">
                                <a href="{{ route('single_library_news', $single->id) }}" target="_blank">{{ $single->title }}</a>
                            </li>
                        @endforeach
                </ul>
            </div> --}}
            {{-- <div class="col-md_myClass col-md-12 col-xl-12 col-lg-12" id="newsEvents" style="background-color: #002D68; margin-top: 20px;">
                <h4>Library Time Schedule</h4>
            </div> --}}

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item event" role="presentation" style="width: 100%;">
                    <button class="nav-link" id="pills-event-tab" data-bs-toggle="pill" data-bs-target="#pills-event" type="button" role="tab" aria-controls="pills-event" aria-selected="false">Library Time Schedule</button>
                </li>
            </ul>

            <table class="col-md-12 col-lg-12 col-xl-12 col-sm-12 col-xs-12" style="background-color : #fff;margin-bottom: 20px;">
                <tbody style="border-color: #00A0EB;border-style: solid;border-width: 3px;">
                <tr>
                    <th style="" class="col-md-3 col-lg-3 col-xl-3 col-sm-6 col-xs-6">Day</th>
                    <th style="" class="col-md-9 col-lg-9 col-xl-9 col-sm-6 col-xs-6">Time</th>
                </tr>

                    <tr>
                        <td>
                            Saturday
                        </td>
                        <td>
                            {{ @$timeSchedule->saturday_time }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Sunday
                        </td>
                        <td>
                            {{ @$timeSchedule->sunday_time }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Monday
                        </td>
                        <td>
                            {{ @$timeSchedule->monday_time }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Tuesday
                        </td>
                        <td>
                            {{ @$timeSchedule->tuesday_time }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Wednesday
                        </td>
                        <td>
                            {{ @$timeSchedule->wednesday_time }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Thursday
                        </td>
                        <td>
                            {{ @$timeSchedule->thursday_time }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Friday
                        </td>
                        <td>
                            {{ @$timeSchedule->friday_time }}
                        </td>
                    </tr>
            </tbody></table>    
            </div>                          
        </div>
        </div>{{--End Container --}}
    </div>

    </div>
</section>

@include('frontend.layouts.footer')

<style>
    .col-md_myClass {position:relative;min-height:0px;padding-left: 15px; padding-right: 15px;}
    @media (min-width: 992px){
        /* .col-md_myClass{float:left;} */
        .col-md-12{width:100%;}
        .col-md-9{width:75%;}
        .col-md-4{width:33.33333333%;}
        .col-md-3{width:25%;}
    }
</style>
<style>
    /*! CSS Used from: /Content/css/style-flex.css */
@media only screen and (min-width: 600px){
.img-rounded{border-radius:6px;}
#newsTicker{background-color:#e8e3e3;height:100%;height:305px;overflow:hidden;font-family:Verdana;}
/* #news li{text-align:justify;} */
#news li:hover{text-decoration:none;color:#fff;}
a:hover,a:focus{color:#000;text-decoration:none;}
}
/*! CSS Used from: /Content/css/bootstrap.css */
h4{margin-top:10px;margin-bottom:10px;}
h4{font-size:18px;}
a{color:#282047;text-decoration:none;}
a:hover,a:focus{color:#23527c;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
/*! CSS Used from: /Content/css/myStyle.css */
#newsTicker ul{margin:1px;padding:7px;}
/* li{text-align:justify;} */
#padding{padding-left:0px;padding-right:0px;}
*{margin:0;padding:0;}
#slideshow{height:auto;width:100%;padding-left:0px;padding-right:0px;}
#slideshow img{height:auto;width:100%;z-index:10;}
#newsEvents{text-align:center;color:#ffffff;font-family:Verdana;background-color:#414d79;}
table{border-collapse:collapse;}
th{font-weight:bold;}
th,td{border:1px solid #c6c7cc;padding:1px 5px;}
th{font-weight:bold;}
/*! CSS Used from: Embedded */
#cssmenu ul{display:flex;flex-direction:row-reverse;}
#cssmenu{display:inline-block;position:relative;left:20%;top:0%;transform:translate(-35%, -35%);font-family:Helvetica, sans-serif;font-size:14px;line-height:1em;border-radius:2px;overflow:hidden;}
#cssmenu ul{display:flex;flex-direction:row-reverse;list-style:none;margin:0;padding:0;}
#cssmenu ul li{margin:0;}
#cssmenu ul li a{display:inline-block;font-family:sans-serif;font-size:0.9em;font-weight:600;padding:12px 30px 12px 45px;margin-left:-20px;color:white;background-color:#414d79;text-decoration:none;text-transform:uppercase;border-radius:0 100px 100px 0;box-shadow:0 0 20px rgba(0, 0, 0, 0.4);height:40px;}
#cssmenu ul li:hover a{background-color:#297EFE;}
#cssmenu ul li:first-child a{box-shadow:none;}
#cssmenu ul li.active a{color:#414d79;background-color:#EEF5FF;height:35px;}
#cssmenu ul li.active + li a{box-shadow:none;}
/*! CSS Used fontfaces */
</style>
@endsection