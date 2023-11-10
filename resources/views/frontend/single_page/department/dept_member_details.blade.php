@extends('frontend.layouts.faculty-app')

@php
$pageTitle= $facultyMember->name
@endphp

@section('title', $pageTitle)

@section('my_style')

<link rel="stylesheet" href="{{ asset('public/frontend/dist/css/profile.css') }}">

@endsection

@section('content')

<header class="header fixed-top">
  <div class="container-fluid top-header" style="background-color: #11f2ff;">
    <div class="row">
      <div class="col-12">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <a href="{{ route('home') }}">
                <img class="img-fluid d-block mx-auto" style="max-height: 80px;"
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

        <a class="navbar-brand"
          href="{{ route('departments.department-details',@$department->department->short_url) }}"> Department Of {{
          @$department->department->name }}</a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <i class="ti-menu text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navigation">

          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                About
              </a>
              <div class="dropdown-menu p-3" aria-labelledby="navbarDropdown">
                <a class="dropdown-item"
                  href="{{ route('departments.department_objectives',@$department->department->short_url) }}">Objectives</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item"
                  href="{{ route('departments.department_mission_vision',@$department->department->short_url) }}">Mission
                  & Vision</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Admission
              </a>
              <div class="dropdown-menu p-3" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Prospective Students</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item"
                  href="{{ route('departments.department_program',@$department->department->short_url) }}">Offered
                  Program</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Academic
              </a>
              <div class="dropdown-menu p-3" aria-labelledby="navbarDropdown">
                <a class="dropdown-item"
                  href="{{ route('departments.department_routine',@$department->department->short_url) }}">Academic
                  Routine</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item"
                  href="{{ route('departments.department_result',@$department->department->short_url) }}">Academic
                  Result</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item"
                  href="{{ route('departments.department_calender',@$department->department->short_url) }}">Academic
                  Calender</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                People
              </a>
              <div class="dropdown-menu p-3" aria-labelledby="navbarDropdown">
                <a class="dropdown-item"
                  href="{{ route('departments.department_member',@$department->department->short_url) }}">Faculty
                  Members</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item"
                  href="{{ route('departments.department_staff',@$department->department->short_url) }}">Office
                  Staffs</a>
              </div>
            </li>
            <li class="nav-item @@research">
              <a class="nav-link" href="#">Research</a>
            </li>
            <li class="nav-item" style="white-space: nowrap;">
              <a class="nav-link"
                href="{{ route('departments.department_contact',@$department->department->short_url) }}">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>

@include('frontend.partial.content-header', ['pageTitle' => $pageTitle, 'bannerImageLink' => 'faculty.png'])

@include('frontend.partial.profile')


@include('frontend/layouts/footer')

@endsection

@section('java_script')

<script>
  $( function() {
			$( "#tabs" ).tabs();
		} );
</script>

@endsection