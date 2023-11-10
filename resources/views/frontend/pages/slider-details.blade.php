@extends('frontend.layouts.app')

@php
$pageTitle = 'Slider Content Details';
@endphp

@section('title', $pageTitle)


@section('my_style')
	

@endsection


@section('content')


    <section class="counter-numbers" style="background: url({{ asset('public/frontend/images/banner/faculty.png')  }})">
      <div class="container">
        <h3 class="text-center" style="color: white;">Comilla University</h3>
      </div>
    </section>

    
    <section>
      <div class="container">
        <div class="row">
          <div class="col my-5">
            {!! $data->description !!}
          </div>
        </div>
      </div>
    </section>

@endsection
