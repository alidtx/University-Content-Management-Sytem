@extends('frontend.layouts.app')

@php
    $pageTitle = 'List of Faculties';
@endphp

@section('title', $pageTitle )

@section('my_style')

<style>
  @media (min-width: 1200px) {
    .for_padding_like_container {
    padding-left:10px;
    }
  }
  @media (min-width: 992px) {
    .for_padding_like_container {
    padding-left:10px;
    }
  }
  @media (min-width: 768px) {
    .for_padding_like_container {
    padding-left: 10px;
    }
  }
  @media (min-width: 576px) {
    .for_padding_like_container {
    padding-left:75px;
    }
  }
</style>
<style>
  .mb-3, .my-3 {
    margin-bottom: 0.3rem!important;
  }
  .round-image-right-curve img {
    height: 240px;
  }
  .title-text{
    padding: 15px;
    color: #fff;
  }
  .overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: .5s ease;
    background-color: rgba(0, 178, 255, 0.5);
    z-index: 999;
  }
  .card{
    box-shadow: rgba(129, 126, 126, 0.1) 0px 4px 12px;
    margin-bottom: 20px;
  }
  .card:hover .overlay {
    opacity: 1;
  }
  .text {
    color: white;
    font-size: 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    text-align: center;
  }
</style>

<style>
  .convocation{
    text-align: center;
  }

  .convocation p{
     font-size: 20px;
     color: #00b2ff;
 }
 .convocation  a{

 text-decoration: none;

 }
 .modal-content{

     opacity: 100%;
     height: 306px !important;
     margin-top: 80px;


 }
  </style>


@php
$faculty=faculty();
@endphp

@if ($faculty!==null)
<div class="modal fade mt-5" id="myModal" role="dialog">
<div class="modal-dialog modal-lg">
<div class="modal-content">
  <div class="modal-header border-bottom-0">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
  <div class="modal-body mt-5 mb-5 convocation">
      <a href="{{$faculty->url}}" target="_blank"><p>{{$faculty->notifaction}}</p></a>
  </div>
</div>
</div>
</div>
@endif

<script>
$(function(){
$('#myModal').modal('show');
})
</script>

@endsection



@section('content')

<section class="counter-numbers" style="background: url({{ asset('public/frontend/images/banner/faculty.png')  }})">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3 class="text-center font_four" style="color: white;">All Faculties</h3>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-6" style="background-color: #00B2FF; margin: 40px 0;">
        <div class="row">
          <div class="col-10 offset-0 offset-sm-2">
            <h3 class="title-text my-font" style="margin-left:-102px">Faculty</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      @foreach($data as $item)
      <div class="col-12 col-sm-4">
        <div class="card">
          <div class="round-image-right-curve">
            <img class="card-img-top" src="{{ asset($item->image) }}" onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/dummy.png') }}';" alt="Card image cap">
          </div>
          <div class="card-body" style="padding-bottom: 10px;">
            <p class="card-text" style="font-weight: 700;font-size: 19px;">Faculty of <span style="color: #00B2FF;">{{$item->name}}</span></p>
          </div>
          <div class="overlay">
            <div class="text">
              <a href="{{ route('faculties.faculty-details', $item->short_url) }}" class="btn btn-primary" style="font-family: Work Sans;font-size: 14px;">{{ $item->name }}</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>


@endsection
