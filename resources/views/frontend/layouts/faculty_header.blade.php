<header class="header fixed-top">
    <div class="container-fluid top-header" style="background-color: #11f2ff;">
        <div class="row">
        <div class="col-12">
            <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                <a href="{{ route('home') }}">
                <img class="img-fluid d-block mx-auto" style="max-height: 80px; padding: 2px 0px" src="{{ asset('public/frontend/images/logo.png') }}" alt="logo"/></a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="navigation w-100">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark p-0">
            <a class="navbar-brand" href="{{ route('faculties.faculty-details',$faculty->short_url) }}"> Faculty Of  {{ $faculty->name }}</a>
            <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse"
            data-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="ti-menu text-black"></i>
            </button>
            <div class="collapse navbar-collapse" id="navigation">

                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                        </a>
                        <div class="dropdown-menu p-3" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('faculties.faculty_history',$faculty->short_url) }}">History</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('faculties.faculty_mission_vision',$faculty->short_url) }}">Mission & Vision</a>
                        </div>
                    </li>
                    {{-- <li class="nav-item dropdown menu-area">
                        <a class="nav-link dropdown-toggle" id="mega-one" role="button" data-toggle="dropdown"  href="#">Academics</a>
                        <div class="dropdown-menu mega-area" aria-labelledby="mega-one">
                            <div class="row row-cols-1 row-cols-md-4">
                                <div class="col">
                                    <p class="m-3 font-weight-bold">Department</p>
                                    <ul class="menu_list ml-3">
                                        <li>
                                            <a href="{{ route('faculties.faculty_department',$faculty->short_url) }}">Department</a>
                                        </li>
                                        <li>
                                            <a href="#">Calendar</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col d-none d-md-block">
                                    <img class="img-fluid mt-3" src="{{ asset('public/frontend/dist/images/activity2.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Academics
                        </a>
                        <div class="dropdown-menu p-3" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('faculties.faculty_department',$faculty->short_url) }}">Department</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('faculties.faculty_calender',$faculty->short_url) }}">Calender</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Activities
                        </a>
                        <div class="dropdown-menu p-3" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('faculties.faculty_event',$faculty->short_url) }}">Event</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('faculties.faculty_gallery',$faculty->short_url) }}">Gallery</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('faculties.faculty_contact',$faculty->short_url) }}">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        </div>
    </div>
    </header>
<!-- /header -->
