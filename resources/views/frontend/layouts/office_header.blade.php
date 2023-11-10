<header class="header fixed-top">
    <div class="container-fluid top-header" style="background-color: #11f2ff;">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="{{ route('home') }}">
                                <img class="img-fluid d-block mx-auto" style="max-height: 80px; padding: 2px 0px"
                                    src="{{ asset('public/frontend/images/logo.png') }}" alt="logo" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navigation w-100">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a class="navbar-brand" href="{{ route('offices.office-details', $office->short_url) }}">{{ $office->name }}</a>
                <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti-menu text-black"></i>
                </button>
                <div class="collapse navbar-collapse" id="navigation">

                    <ul class="navbar-nav ml-auto text-center">

                        <li class="nav-item @@about">
                            <a class="nav-link"
                                href="{{ route('offices.all-office-about', $office->short_url) }}">About</a>
                        </li>
                        <li class="nav-item @@people">
                            <a class="nav-link"
                                href="{{ route('offices.all-office-people', $office->short_url) }}">People</a>
                        </li>
                        <li class="nav-item" style="white-space: nowrap;">
                            <a class="nav-link"
                                href="{{ route('offices.all-office-contact', $office->short_url) }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- /header -->
