<section class="about-comilla">
  <div class="container">
    <div class="row">
      <div class="col-md-6" style="min-height:360px; overflow: hidden;">
        <div class="leftSide">
          <img class="img-fluid big-img" src="{{ $about->large_image ? asset('public/upload/about/'. $about->large_image) : asset('public/frontend/images/about/image 12.png') }}" alt="" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
          <img class="img-fluid small-img" src="{{ $about->small_image ? asset('public/upload/about/'. $about->small_image) : asset('public/frontend/images/about/image 11.png') }}" alt="" data-aos="zoom-in-left" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
        </div>
      </div>
      <div class="col-md-6">
        <div class="rightSide">
          <h3 class="heading text-white bg-primary about-heading">About Comilla University</h3>
          <p class="about-text">
            {!! $about->short_description !!}
          </p>
          <a href="{{route('about_more')}}" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>
  </div>
</section>


