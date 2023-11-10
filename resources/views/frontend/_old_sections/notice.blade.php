<section class="notice-events">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-8">
        <h2>Recent and Upcoming <span class="text-primary">Events</span> </h2>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="row">
            <div class="col-12 col-sm-6 my-4">
                <div class="carousel-inner">
                  {{-- <div class="carousel-item active">
                      <img class="d-block img-fluid" src="{{ asset('public/frontend/images/events/event-1.jpg') }}" alt="First slide">
                      <p class="news-date">Craig Bator - 2 Dec 2020</p>
                      <h4 class="news-title">Now Is the Time to Think About Your Small  Business Success</h4>
                      <p class="news-subtitle">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Minus, exercitationem! Voluptatem minus eaque ab tempora, provident? Vitae sapiente saepe atque asperiores nihil, eaque. Quaerat temporibus corrupti molestias, reprehenderit saepe dolor!</p>
                  </div>  --}}
                  @foreach ($events as $event)
                    <div class="carousel-item  @if ($loop->first) active @endif">
                      <img class="img-fluid" src="{{ asset('public/upload/news/'.$event->image) }}" alt="Second slide">
                      <p class="news-date">{{$event->date}}</p>
                      <h4 class="news-title">{{$event->title}}</h4>
                      <p class="news-subtitle">{{$event->short_description}}</p>
                    </div>
                  @endforeach
              </div>
            </div>


            <div class="col-12 col-sm-6">
              <ol class="carousel-indicators">
                  {{-- <div data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                    <div class="row">
                      <div class="col-4 p-0">
                        <img class="img-fluid" src="{{ asset('public/frontend/images/events/event-1.jpg') }}" alt="thumbnail">
                      </div>
                      <div class="col-8">
                        <p class="news-date">Craig Bator - 3337 Dec 2020</p>
                        <h4 class="news-title-2">Now Is the Time to Think About Your Small  Business Success</h4>
                      </div>
                    </div>
                  </div>  --}}

                  @foreach ($events as $i => $event)
                  
                    <div data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class=" @if ($loop->first) active @endif">
                      
                          <div class="row">
                            <div class="col-4 p-0">
                              <img class="img-fluid" src="{{ asset('public/upload/news/'.$event->image) }}" alt="thumbnail">
                            </div>
                            <div class="col-8">
                              <p class="news-date">{{$event->date}}</p>
                              <h4 class="news-title-2">{{$event->title}}</h4>
                            </div>
                          </div>
                        
                    </div>
                  @endforeach
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <h2 class="text-white bg-primary px-3 text-uppercase notice-title">Notices</h2>
        <div class="data-list" data-autoscroll>
          @foreach ($notices as $i => $notice)
          <div class="notice-info-sm pb-2">
            <div class="img-sm">
              <img src="{{ asset('public/upload/news/'.$notice->image) }}" alt="Notice Image" >
            </div>
            <div class="info-sm">
              <p class="notice-date">{{ mydate($notice->start_date) }}</p>
              <div class="notice-container">
                <h4 class="my-notice">{{ $notice->title }}</h4>
              </div>
              
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>


