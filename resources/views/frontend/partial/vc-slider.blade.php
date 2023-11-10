<!-- hero slider -->
<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      
        <ol class="carousel-indicators">
            @if(count(@$office->slider)>0)
            @foreach(@$office->slider as $image)
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
            {{-- <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('public/frontend/images/banner/banner07.jpg') }}"
                    alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="animated fadeInRightBig">Welcome to <span style="color: #00b2ff">Comilla
                            University</span></h1>
                </div>
            </div>
            @foreach (@$office->slider as $item)
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('public/upload/slider/'.$item->image) }}"
                    onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/s-dummy.png') }}';"
                    alt="Slide no. {{ $loop->iteration }}">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="animated fadeInUpBig"><span style="color: #00b2ff">{{ $item->text_on_banner }}</span>
                    </h1>
                </div>
            </div>
            @endforeach --}}
            {{-- <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('public/frontend/images/banner/banner023.jpg') }}"
                    alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="animated fadeInUpBig">Welcome to <span style="color: #00b2ff">Vice Chancellor
                            Office</span></h1>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('public/frontend/images/banner/banner0n.jpg') }}"
                    alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="animated fadeInDownBig">Welcome to <span style="color: #00b2ff">Vice Chancellor
                            Office</span></h1>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('public/frontend/images/banner/banner01n.jpg') }}"
                    alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="animated fadeInDownBig">Welcome to <span style="color: #00b2ff">Vice Chancellor
                            Office</span></h1>
                </div>
            </div> --}}
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
<!-- /hero slider -->
