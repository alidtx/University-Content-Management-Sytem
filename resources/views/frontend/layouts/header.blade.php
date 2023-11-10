{{-- ===== Header section start ===== --}}
<header class="header shadow-sm fixed-top">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-7">
                </div>
                <div class="col-12 col-sm-5">
                    <div class="top-menu">
                        <p class="text-center text-sm-right">
                            <a href="https://old.cou.ac.bd/" target="_blank">Old Site </a> | <a href="#">Blog </a> |
                            <a href="{{ route('offices.employee_directory') }}"> Faculties & Officers</a> | <a
                                href="#">Alumni</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="navigation w-100">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a class="navbar-brand" href="{{ route('home') }}">
                    {{-- <img class="img-fluid"
                        src="{{ asset('public/frontend/dist/images/personals/comilla_un.png') }}" alt="logo" /> --}}
                    <img class="img-fluid" src="{{ asset('public/frontend/images/left.png') }}" alt="logo" />

                </a>
                <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti-menu text-black"></i>
                </button>
                <div class="collapse navbar-collapse" id="navigation">
                    {{-- <ul class="navbar-nav ml-auto">
                        @foreach ($navbars as $navbarItem)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $navbarItem->url_link?route('menu_url',$navbarItem->slug):" #"
                                }}">{{ $navbarItem->title_en }}</a>
                        </li>
                        @endforeach
                    </ul> --}}
                    <ul class="navbar-nav ml-auto text-center">
                        @php
                        $where[] = ['menu_type','=','none'];
                        $parents =
                        DB::table('frontend_menus')->where('status',1)->where('parent_id','0')->where($where)->orderBy('sort_order','asc')->take(5)->get();
                        $imageImage=1;
                        @endphp
                        @foreach($parents as $parent)
                        <li class="nav-item dropdown menu-area">
                            <a class="nav-link dropdown-toggle" id="mega-{{ $loop->iteration }}" role="button"
                                data-toggle="dropdown" {{ $loop->iteration == 1 ? 'active': '' }}
                                href="{{$parent->url_link?route('menu_url',$parent->slug):'#'}}"
                                aria-expanded="false">{{ $parent->title_en }}</a>
                            <div class="dropdown-menu mega-area" aria-labelledby="mega-{{ $loop->iteration }}">
                                <div class="row row-cols-1 row-cols-md-4">
                                    @php
                                    $subparents =
                                    DB::table('frontend_menus')->where('status',1)->where('parent_id',$parent->rand_id)->orderBy('sort_order','asc')->get();
                                    @endphp
                                    @foreach($subparents as $subparent)
                                    <div class="col">
                                        <p class="m-3 font-weight-bold"> {{ $subparent->title_en }}</p>

                                        @php
                                        $lastparents =
                                        DB::table('frontend_menus')->where('status',1)->where('parent_id',$subparent->rand_id)->orderBy('sort_order','asc')->get();
                                        @endphp

                                        <ul class="menu_list ml-3">
                                            @foreach($lastparents as $lastparent)
                                            <li style="font-size: 14px;">
                                                <a
                                                    href="{{$lastparent->url_link?route('menu_url',$lastparent->slug):'#'}}">{{
                                                    $lastparent->title_en }}</a>
                                            </li>
                                            @endforeach
                                        </ul>

                                    </div>
                                    @endforeach
                                    <div class="col d-md-block ml-auto">
                                        <img class="img-fluid mt-3"
                                            src="{{ asset('public/frontend/dist/images/activity'.$imageImage.'.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </li>
                        @php
                        $imageImage=$imageImage+1;
                        @endphp
                        @endforeach
                    </ul>

                </div>
            </nav>
        </div>
    </div>
</header>
{{-- ===== Header section end ===== --}}
