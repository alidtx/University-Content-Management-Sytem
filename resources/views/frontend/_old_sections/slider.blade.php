
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
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
      
      @if(count($slider_images)>0)
        @foreach($slider_images as $image)
        <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
          <img src="{{ asset('public/upload/slider/'.$image->image) }}" class="d-block w-100" alt="Comilla University">
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
            
            <a href="{{ route('sliderContent', encrypt($image->id)) }}"  class="btn btn-primary my-3 animated fadeInUpBig">Learn More</a>
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
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div> 