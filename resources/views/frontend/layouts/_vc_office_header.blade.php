<header class="header fixed-top">
    <div class="container-fluid top-header" style="background-color: #11f2ff;">
      <div class="row">
        <div class="col-12">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center">
                <a href="{{ route('home') }}">
                <img class="img-fluid d-block mx-auto" style="max-height: 80px;" src="{{ asset('public/frontend/images/logo.png') }}" alt="logo"/></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="navigation w-100">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark p-0">

            <a class="navbar-brand" href="{{ route('departments.department-details',encrypt(@$department->id)) }}"> Department Of  {{ @$department->name }}</a>
            <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse"
            data-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="ti-menu text-black"></i>
            </button>
            <div class="collapse navbar-collapse" id="navigation">

                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('offices.vc_office') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('offices.vc_list') }}">List of VC</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('offices.vc_staff') }}">Office Staff</a>

                    </li>
                    <li class="nav-item" style="white-space: nowrap;">
                        <a class="nav-link" href="{{ route('offices.vc_contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- /header -->






<header class="fixed-top header">
  <!-- top header -->
  <!-- navbar -->
  <div class="navigation w-100 shadow-sm">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <a class="navbar-brand" href="{{ route('home') }}">
          <div class="row">

            <div class="col-6">
              <img class="img-fluid d-block mx-auto" style="max-height: 80px;" src="{{ asset('public/frontend/images/footer/comilla_un.png') }}" alt="logo"/>
            </div>
            <div class="col-6 border-left">
              <h3 style="color: #000; text-transform: capitalize;"> Vice Chancellor <br> Office</h3>
            </div>
          </div>
        </a>
        <button
        class="navbar-toggler rounded-0"
        type="button"
        data-toggle="collapse"
        data-target="#navigation"
        aria-controls="navigation"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item @@about">
              <a class="nav-link" href="{{ route('offices.vc_office') }}">About</a>
            </li>
            <li class="nav-item @@vclist">
              <a class="nav-link" href="{{ route('offices.vc_list') }}">List of VC</a>
            </li>
            <li class="nav-item @@officestaff">
              <a class="nav-link" href="{{ route('offices.vc_staff') }}">Office Staff</a>
            </li>
            {{-- <li class="nav-item @@events">
              <a class="nav-link" href="">Offices</a>
            </li>
            <li class="nav-item @@blog">
              <a class="nav-link" href="">Research</a>
            </li> --}}
            <li class="nav-item @@contact" style="white-space: nowrap;">
              <a class="nav-link" href="{{ route('offices.vc_contact') }}">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
<!-- Modal -->
<div
  class="modal fade"
  id="signupModal"
  tabindex="-1"
  role="dialog"
  aria-hidden="true"
  >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content rounded-0 border-0 p-4">
      <div class="modal-header border-0">
        <h3>Register</h3>
        <button
        type="button"
        class="close"
        data-dismiss="modal"
        aria-label="Close"
        >
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="login">
          <form action="#" class="row">
            <div class="col-12">
              <input
              type="text"
              class="form-control mb-3"
              id="signupPhone"
              name="signupPhone"
              placeholder="Phone"
              />
            </div>
            <div class="col-12">
              <input
              type="text"
              class="form-control mb-3"
              id="signupName"
              name="signupName"
              placeholder="Name"
              />
            </div>
            <div class="col-12">
              <input
              type="email"
              class="form-control mb-3"
              id="signupEmail"
              name="signupEmail"
              placeholder="Email"
              />
            </div>
            <div class="col-12">
              <input
              type="password"
              class="form-control mb-3"
              id="signupPassword"
              name="signupPassword"
              placeholder="Password"
              />
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">SIGN UP</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div
  class="modal fade"
  id="loginModal"
  tabindex="-1"
  role="dialog"
  aria-hidden="true"
  >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content rounded-0 border-0 p-4">
      <div class="modal-header border-0">
        <h3>Login</h3>
        <button
        type="button"
        class="close"
        data-dismiss="modal"
        aria-label="Close"
        >
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" class="row">
          <div class="col-12">
            <input
            type="text"
            class="form-control mb-3"
            id="loginPhone"
            name="loginPhone"
            placeholder="Phone"
            />
          </div>
          <div class="col-12">
            <input
            type="text"
            class="form-control mb-3"
            id="loginName"
            name="loginName"
            placeholder="Name"
            />
          </div>
          <div class="col-12">
            <input
            type="password"
            class="form-control mb-3"
            id="loginPassword"
            name="loginPassword"
            placeholder="Password"
            />
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">LOGIN</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
