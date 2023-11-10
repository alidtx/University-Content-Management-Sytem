
    <!-- ===== Footer section start ===== -->
    <section>
        <div class="footer-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-4 order-1 order-sm-0">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="footer-list">
                                    @php
                                    $usefulLinks = DB::table('useful_links')->get();
                                    @endphp
                                    <ul class="list-group my-2 my-sm-5">
                                        @foreach($usefulLinks as $usefulLink)
                                          <li><a href="{{($usefulLink->slug)?route('useful_link',['url'=>$usefulLink->slug]):'#'}}">{{ $usefulLink->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="footer-list">
                                    @php
                                    $quickLinks = DB::table('quick_links')->get();
                                    @endphp
                                    <ul class="list-group my-2 my-sm-5">
                                        @foreach($quickLinks as $quickLink)
                                        <li><a href="{{($quickLink->slug)?route('quick_link',['url'=>$quickLink->slug]):'#'}}">{{ $quickLink->title }}</a></li>
                                        @endforeach
                                        <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                                        <li><a href="{{ route('journal_paper') }}">Journal Paper</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 order-0 order-sm-0">
                        <div class="footer-logo-container">
                            <img class="img-fluid d-block my-1 mx-auto" src="{{ asset('public/frontend/dist/images/personals/footer.png') }}"
                                alt="Logo">
                        </div>
                        <h3>Comilla University</h3>
                        <div class="footer-icon-list">
                            <ul>
                                <li><a href="#"><i class="ti-skype"></i></a></li>
                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/PR.office/?mibextid=ZbWKwL" target="_blank"><i class="ti-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="footer-list">
                                    @php
                                    $getInTouches = DB::table('get_in_touches')->get();
                                    @endphp
                                    <ul class="list-group my-2 my-sm-5">
                                        @foreach($getInTouches as $getInTouch)
                                        <li><a  href="{{($getInTouch->slug)?route('get_in_touch',['url'=>$getInTouch->slug]):'#'}}">{{ $getInTouch->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="footer-list">
                                    @php
                                      $fastServices = DB::table('fast_services')->get();
                                      @endphp
                                    <ul class="list-group my-2 my-sm-5">
                                        @foreach($fastServices as $fastService)
                                          <li><a href="{{($fastService->slug)?route('fast_service',['url'=>$fastService->slug]):'#'}}">{{ $fastService->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-bg py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <p class="text-center text-sm-left">
                            <i class="fa-regular fa-copyright"></i> Copyright {{ date('Y') }}.  <span> <a href="{{ route('home') }}" style="color: #fff" >Comilla University</a>. All rights reserved</span>
                        </p>
                    </div>
                    <div class="col-12 col-sm-6">
                        <p class="text-center text-sm-right">
                            Developed by <span> <a href="{{ route('home') }}" style="color: #fff" >Nanosoft</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== Footer section end ===== -->
