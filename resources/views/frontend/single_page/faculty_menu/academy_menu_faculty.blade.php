@extends('frontend.layouts.faculty-app')
@section('title', 'Academy')
@section('content')
<header class="fixed-top header">




  <div class="container-fluid" style="background-color: #00B2FF;">
    <div class="row">
      <div class="col-12">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <a href="{{ route('home') }}">
              <img class="img-fluid d-block mx-auto" style="max-height: 80px;" src="{{ asset('public/frontend/images/footer/comilla_un.png') }}" alt="logo"/></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0" style="line-height: 0px;">
        <a class="navbar-brand" href="{{ route('home') }}" style="font-weight:600; text-transform: uppercase;"
        >Faculty Of  {{ $faculty->name }}</a>
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
            <li class="nav-item">
              <a class="nav-link" href="">About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('faculty-academy-menu',$faculty->id) }}">Academics</a>
            </li>
            <li class="nav-item @@courses">
              <a class="nav-link" href="{{ route('faculty-admission-menu',$faculty->id) }}">Admission</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('faculty-offices-menu',$faculty->id) }}">Offices</a>
            </li>
            <li class="nav-item @@blog">
              <a class="nav-link" href="{{ route('faculty-research-menu',$faculty->id) }}">Research</a>
            </li>
            <li class="nav-item" style="white-space: nowrap;">
              <a class="nav-link" href="{{ route('faculty-campuslife-menu',$faculty->id) }}">Campus Life</a>
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
<section class="" style="padding-top: 220px;">
  <div class="container" style="width: 70%">
      <div class="col-md-12">
        <p>Comilla University (Bengali: কুমিল্লা বিশ্ববিদ্যালয়) is a public university located at Kotbari, Comilla, Bangladesh. The university was constructed on 50 acres (200,000 m2) of land at Lalmai Bihar, Moynamoti. Comilla University is affiliated by University Grants Commission, Bangladesh.</p>
      </div>
    </div>
  </div>
</section>
  <style>.mb-3, .my-3 {
  margin-bottom: 0.3rem!important;
  }</style>
  <!-- footer -->
  <footer>
    <!-- footer content -->
    <div class="footer bg-footer section border-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
            <ul class="list-unstyled">
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">Approved NOCs</a>
              </li>
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">Facts and Acts</a>
              </li>
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">News & Events</a>
              </li>
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">Department/Institute</a>
              </li>
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">Notice Board</a>
              </li>
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">Directories</a>
              </li>
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">Academic Calendar</a>
              </li>
            </ul>
          </div>
          <!-- links -->
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
            <ul class="list-unstyled">
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">Approved NOCs</a>
              </li>
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">Facts and Acts</a>
              </li>
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">News & Events</a>
              </li>
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">Department/Institute</a>
              </li>
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">Notice Board</a>
              </li>
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">Directories</a>
              </li>
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">Academic Calendar</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0 footer-img">
            <!-- logo -->
            <a class="logo-footer" href="">
              <img
              class="img-fluid mb-3"
              src="{{ asset('public/frontend/images/footer/footer.png') }}"
              alt="logo"
              />
            </a>
            <h4 class="text-white text-uppercase">Comilla University</h4>
            <ul class="">
              <li class="list-inline-item">
                <a style="background: white;"
                  class="d-inline-block p-2"
                  href=""
                  ><i class="ti-facebook text-primary"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a style="background: white;"
                  class="d-inline-block p-2"
                  href=""
                  ><i class="ti-twitter-alt text-primary"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a style="background: white;"
                  class="d-inline-block p-2"
                  href=""
                  ><i class="ti-github text-primary"></i
                ></a>
              </li>
              <li class="list-inline-item">
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
            <ul class="list-unstyled">
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">Approved NOCs</a>
              </li>
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">Facts and Acts</a>
              </li>
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">News & Events</a>
              </li>
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">Department/Institute</a>
              </li>
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">Notice Board</a>
              </li>
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">Directories</a>
              </li>
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">Academic Calendar</a>
              </li>
            </ul>
          </div>
          <!-- support -->
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
            <ul class="list-unstyled">
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">Approved NOCs</a>
              </li>
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">Facts and Acts</a>
              </li>
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">News & Events</a>
              </li>
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">Department/Institute</a>
              </li>
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">Notice Board</a>
              </li>
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">Directories</a>
              </li>
              <li class="mb-3">
                <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                color: #FFFFFF;">Academic Calendar</a>
              </li>
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
              </script>
              Copyright 2021. All Right Reserved By Comilla University
            </p>
          </div>
          
        </div>
      </div>
    </div>
  </footer>
  @endsection