<div class="container-fluid py-5 bg-footer">

  <div class="row">
    <div class="col-12">
      <div class="row py-2">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-4 order-1 order-sm-0">
              <div class="row">
                <div class="col-12 col-sm-6">
                    @php
                    $usefulLinks = DB::table('useful_links')->get();
                    @endphp
                    <ul class="list-unstyled">
                      @foreach($usefulLinks as $usefulLink)
                      <li class="my-3"><a class="text-white" href="{{($usefulLink->link)?route('useful_link',['url'=>$usefulLink->link,'id'=>$usefulLink->id]):'#'}}">{{ $usefulLink->title }}</a></li>
                      @endforeach
                    </ul>
                </div>
                <div class="col-12 col-sm-6">
                    @php
                    $quickLinks = DB::table('quick_links')->get();
                    @endphp
                    <ul class="list-unstyled">
                        @foreach($quickLinks as $quickLink)
                        <li class="my-3"><a class="text-white" target="_blank" href="{{($quickLink->link)?route('quick_link',['url'=>$quickLink->link,'id'=>$quickLink->id]):'#'}}">{{ $quickLink->title }}</a></li>
                        @endforeach
                        <li class="my-3"><a class="text-white" target="_blank" href="{{ route('contact-us') }}">Contact Us</a></li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-4 mb-5 order-0 order-sm-0">
              <div class="text-center">
                <a class="" href="#">
                  <img class="img-fluid d-block my-3 mx-auto" src="{{ asset('public/frontend/images/footer/footer.png') }}" alt="logo" />
                </a>
                <h3 class="text-white text-uppercase mt-4">Comilla University</h3>
              </div>
              <div class="text-center">
                <ul class="list-inline">
                  <li class="list-inline-item"><a class="social-icon d-inline-block p-2" href="https://facebook.com/themefisher/"><i class="ti-facebook"></i></a></li>
                  <li class="list-inline-item"><a class="social-icon d-inline-block p-2" href="https://twitter.com/themefisher"><i class="ti-twitter-alt"></i></a></li>
                  <li class="list-inline-item"><a class="social-icon d-inline-block p-2" href="https://github.com/themefisher"><i class="ti-github"></i></a></li>
                  <li class="list-inline-item"><a class="social-icon d-inline-block p-2" href="https://instagram.com/themefisher/"><i class="ti-instagram"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="row">
                <div class="col-12 col-sm-6">
                    @php
                    $getInTouches = DB::table('get_in_touches')->get();
                    @endphp
                    <ul class="list-unstyled ">
                        @foreach($getInTouches as $getInTouch)
                        <li class="my-3"><a class="text-white" href="{{($getInTouch->link)?route('get_in_touch',['url'=>$getInTouch->link,'id'=>$getInTouch->id]):'#'}}">{{ $getInTouch->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-12 col-sm-6">
                      @php
                      $fastServices = DB::table('fast_services')->get();
                      @endphp
                      <ul class="list-unstyled">
                          @foreach($fastServices as $fastService)
                          <li class="my-3"><a class="text-white" href="{{($fastService->link)?route('fast_service',['url'=>$fastService->link,'id'=>$fastService->id]):'#'}}">{{ $fastService->title }}</a></li>
                          @endforeach
                      </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid" style="background-color: #00B2FF">
  <div class="row">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p class="mb-0 py-4 text-white text-center text-sm-left">
              Copyright &copy;
              <script>
                var CurrentYear = new Date().getFullYear();
                document.write(CurrentYear);
              </script>
              All Right Reserved By Comilla University
            </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /footer -->
