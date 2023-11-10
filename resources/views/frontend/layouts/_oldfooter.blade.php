<!-- footer -->
<style>
  a {
    color: #FFFFFF;
  }
</style>
<footer>
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          @php
            $usefulLinks = DB::table('useful_links')->get();
            @endphp
            <ul>
                @foreach($usefulLinks as $usefulLink)
                <li><a href="{{($usefulLink->link)?route('useful_link',['url'=>$usefulLink->link,'id'=>$usefulLink->id]):'#'}}">{{ $usefulLink->title }}</a></li>
                @endforeach
            </ul>
        </div>
        <!-- links -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          @php
            $quickLinks = DB::table('quick_links')->get();
            @endphp
            <ul>
                @foreach($quickLinks as $quickLink)
                {{-- <li><a target="_blank" href="{{ $quickLink->link }}">{{ $quickLink->title }}</a></li> --}}
                <li><a target="_blank" href="{{($quickLink->link)?route('quick_link',['url'=>$quickLink->link,'id'=>$quickLink->id]):'#'}}">{{ $quickLink->title }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0" style="text-align: center">
          <!-- logo -->
          <a class="" href="">
            <img
            class="img-fluid mb-3"
            src="{{ asset('public/frontend/images/footer/footer.png') }}"
            alt="logo"
            />
          </a>
          <h4 class="text-white text-uppercase">Comilla University</h4>
          <ul class="">
            <li class="list-inline-item text-center">
              <a style="background: white;"
                class="d-inline-block p-2"
                href=""
                ><i class="ti-facebook text-primary"></i
              ></a>
            </li>
            <li class="list-inline-item text-center">
              <a style="background: white;"
                class="d-inline-block p-2"
                href=""
                ><i class="ti-twitter-alt text-primary"></i
              ></a>
            </li>
            <li class="list-inline-item text-center">
              <a style="background: white;"
                class="d-inline-block p-2"
                href=""
                ><i class="ti-github text-primary"></i
              ></a>
            </li>
            <li class="list-inline-item text-center">
              <a style="background: white;"
                class="d-inline-block p-2"
                href=""
                ><i class="ti-instagram text-primary"></i
              ></a>
            </li>
          </ul>
        </div>
        <!-- company -->
        <!-- support -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          @php
            $getInTouches = DB::table('get_in_touches')->get();
            @endphp
            <ul>
                @foreach($getInTouches as $getInTouch)
                {{-- <li><a href="{{ $getInTouch->link }}">{{ $getInTouch->title }}</a></li> --}}
                <li><a href="{{($getInTouch->link)?route('get_in_touch',['url'=>$getInTouch->link,'id'=>$getInTouch->id]):'#'}}">{{ $getInTouch->title }}</a></li>
                @endforeach
            </ul>
        </div>
        <!-- support -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          @php
            $fastServices = DB::table('fast_services')->get();
            @endphp
            <ul>
                @foreach($fastServices as $fastService)
                {{-- <li><a href="{{ $fastService->link }}">{{ $fastService->title }}</a></li> --}}
                <li><a href="{{($fastService->link)?route('fast_service',['url'=>$fastService->link,'id'=>$fastService->id]):'#'}}">{{ $fastService->title }}</a></li>
                @endforeach
            </ul>
        </div>
      </div>
    </div>
  </div>
  <style>
  .pt-4, .py-4 {
  padding-top: 1rem!important;
  }
  </style>
  <!-- copyright -->
  <div class="copyright py-4" style="background-color: #00B2FF;
    color: #FFFFFF;height: 60px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-sm-left text-center">
          <p class="mb-0">
            Copyright &copy;
            <script>
            var CurrentYear = new Date().getFullYear();
            document.write(CurrentYear);
            </script> All Right Reserved By Comilla University
            <!-- <a href="#" class="text-muted">________NANOSOFT_________</a> -->
          </p>
        </div>
        <!-- <div class="col-sm-5 text-sm-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://facebook.com/themefisher/"><i class="ti-facebook text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://twitter.com/themefisher"><i class="ti-twitter-alt text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://github.com/themefisher"><i class="ti-github text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://instagram.com/themefisher/"><i class="ti-instagram text-primary"></i></a></li>
          </ul>
        </div> -->
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->