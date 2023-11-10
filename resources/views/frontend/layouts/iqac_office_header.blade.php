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
                <a class="navbar-brand" style="white-space: normal;" href="{{ route('offices.iqac_about') }}"> Institutional Quality Assurance Cell (IQAC)</a>
                <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse"
                data-target="#navigation" aria-controls="navigation" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="ti-menu text-black"></i>
                </button>
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('offices.iqac_about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('offices.iqac_teams') }}">Teams</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('offices.iqac_documents') }}">Documents</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('offices.iqac_news') }}">News & Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('offices.iqac_training') }}">Training Workshop/Seminar</a>
                        </li>
                        <li class="nav-item" style="white-space: nowrap;">
                            <a class="nav-link" href="{{ route('offices.iqac_contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- /header -->
