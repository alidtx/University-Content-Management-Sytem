<!-- ===== News section start ===== -->

<section>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-sm-8 shadow-sm" style="border: 1px solid #00b2ff38;        border-radius: 5px;">
                <h2 class="event-title mb-4" style="padding: 9px 0 0 0;">Recent and Upcoming <span class="text-color-one"> Events</span> </h2>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="row">

                        <div class="col-12 col-sm-6">
                            <div class="carousel-inner">
                                @foreach ($events as $event)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <img class="d-block w-100" src="{{ $event->image ? asset('public/upload/news/'.$event->image) : asset('public/frontend/cuimages/dummy.png') }}" onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/dummy.png') }}';" alt="First slide">
                                    <div class="news-content">
                                        <p class="news_notice_event_date"><small>{{mydate($event->date)}}</small></p>

                                        <a class="news_notice_event_title" href="{{ route('news_details', $event->id) }}"><h5>{{$event->title}}</h5></a>
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
                                                <img src="{{ asset('public/upload/news/'.$event->image) }}" onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/dummy.png') }}';" alt="" class="img-fluid">
                                            </div>
                                            <div class="col-8">
                                                <p class="news_notice_event_date"><small> {{mydate($event->date)}}</small></p>
                                                <p class="news_notice_event_title">{{$event->title}}</p>
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
                    <h2 class="notice-title">Notices
                        <button class="control_btn float-right btnUp"><i class="fa fa-arrow-up" ></i></button>
                        <button class="control_btn float-right btnDown"><i class="fa fa-arrow-down" ></i></button>
                    </h2>
                    
                    <div class="demo" style="margin: 10px; color: #2D2D2D; ">
                        <ul id="ticker1111">
                            @foreach($notices as $i => $notice)
                                <li>
                                    <a href="{{ route('news_details', $notice->id) }}">
                                        <div class="row">
                                            <div class="col-4 a">
                                                <img src="{{ asset('public/upload/news/'.$notice->image) }}" onerror="myFunction()"  alt="" class="img-fluid">
                                            </div>
                                            <div class="col-8 b">
                                                <p class="news_notice_event_date"><small>{{ mydate($notice->start_date) }}</small></p>
                                                <p class="news_notice_event_title">{{ $notice->title }}</p>
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

<script>
    function myFunction() {
      $('.a').hide();
    }
    </script>
<!-- ===== News section End ===== -->
