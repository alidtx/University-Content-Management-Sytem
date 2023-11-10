@extends('frontend.layouts.app')

@section('title', 'Home Page')

@section('my_style')
<style>
  .mb-3, .my-3 {
    margin-bottom: 0.3rem!important;
  }
  .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 20%;
        left: 15%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #fff;
        text-align: left;
    }
</style>
@endsection


@section('content')


<!-- Hero slider -->

@include('frontend.sections.slider')

<!-- /Hero slider -->


<!-- Message Section -->

@include('frontend.sections.message')

<!-- /Message Section -->


<!-- About More Section -->

@include('frontend.sections.about-more')

<!-- /About More Section -->


<!-- Counter Section -->

@include('frontend.sections.counter')

<!-- /Counter Section -->


<!-- About Comilla Section -->

@include('frontend.sections.about-comilla')

<!-- /About Comilla Section -->   


<!-- Notice & Event Section -->

@include('frontend.sections.notice')

<!-- /Notice & Event Section --> 

    

@endsection

