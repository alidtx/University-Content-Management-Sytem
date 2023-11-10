@extends('frontend.layouts.library_app')


@php
$pageTitle= "Library About" ;
@endphp

@section('title', $pageTitle)


@section('my_style')
<style>
    .book-container {
        margin: 15px 0;
        transition: .5s;
    }

    .book-container:hover {
        background-color: #f8f9fa;
        transition: .5s;
    }

    .book-container h5 {
        height: 45px;
        overflow: hidden;
    }

    .book-container img {
        max-height: 220px;
        display: block;
        margin: 5px auto;
    }

    .text-black {
        color: #000 !important;
    }
</style>
@endsection

@section('content')

<div class="my-5"></div>

@include('frontend.partial.content-header', ['pageTitle' => $pageTitle, 'bannerImageLink' => 'faculty.png'])

<section>
    <div class="container">
      <div class="row">
            <div class="col-12 col-sm-6" style="background-color: #00B2FF; margin: 40px 0;">
              <div class="row">
                <div class="col-10 offset-0 offset-sm-2">
                    <h3 class="title-text my-font">Library About</h3>
                </div>
              </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12" style="margin: 20px 0;">
              <p>{!!$ourLibrary->about!!}</p>
        </div>
      </div>
    </div>
  </section>




<script>
    function myFunction() {
      $('.a').hide();
    }
</script>
@endsection
