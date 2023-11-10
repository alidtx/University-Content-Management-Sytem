@extends('frontend.layouts.app')

@php
$pageTitle = "Comilla University Blog";
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

@include('frontend.partial.content-header', ['pageTitle' => $pageTitle, 'bannerImageLink' => 'faculty.png'])



<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 offset-0 offset-1">
                <h3 class="text-center my-5">
                    {{ $data->title }}
                </h3>
                <img class="img-fluid d-block my-1 mx-auto" src="{{ asset('public/upload/blogs/'.$data->image) }}"
                    alt="image" style="max-height: 400px;">

                <p class="text-center mb-3">
                    <small>Date: <i>{{ mydate($data->created_at) }}</i></small>
                </p>

                <h4 class="text-center">
                    Author: <i>{{ $data->author_name }}</i>
                </h4>
                <div class="text-justify my-5">
                    {!! $data->description !!}
                </div>
            </div>
        </div>
    </div>
</section>





@endsection

@section('java_script')

@endsection