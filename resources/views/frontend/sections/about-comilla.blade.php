  <!-- ===== About comilla University section start ===== -->
    <section class="about-comilla">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="min-height:360px; overflow: hidden;">
                    <div class="leftSide">
                        <img class="img-fluid big-img" src="{{ $about->large_image ? asset('public/upload/about/'. $about->large_image) : asset('public/frontend/images/about/image 12.png') }}" alt="Big Image" data-aos="zoom-in"
                            data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/sq-dummy.png') }}';">
                        <img class="img-fluid small-img" src="{{ $about->small_image ? asset('public/upload/about/'. $about->small_image) : asset('public/frontend/images/about/image 11.png') }}" alt="Small image" data-aos="zoom-in-left"
                            data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/sq-dummy.png') }}';">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="rightSide">
                        <h3 class="heading text-white about-heading">About Comilla University</h3>
                        <p class="about-text">
                            {!! $about->short_description !!}
                        </p>
                        <a href="{{route('about_more')}}" class="btn btn-primary m-4" style="font-family: 'work sans', sans-serif;">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== About comilla University section end ===== -->
