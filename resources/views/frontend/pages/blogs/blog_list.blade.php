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

@include('frontend.partial.content-blue-header', ['title' => $pageTitle ])

<section>
    <div class="container my-5">
        <div class="row">
            @foreach($blogs as $item)
            <div class="col-12 col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('public/upload/blogs/'.$item->image) }}"
                        alt="{{ $item->image }}" style="max-height: 242px;">
                    <div class="card-body">
                        <p class="card-text text-center">
                            <i>{{ $item->author_name }}</i>
                        </p>
                        <p class="card-text text-center mb-3">
                            <small>Date: <i>{{ mydate($item->created_at) }}</i></small>
                        </p>
                        <h5 class="card-title text-center" style="max-height: 48px; overflow: hidden;">
                            {{ $item->title }}
                        </h5>
                        <div class="col text-center">
                            <a href="{{ route('university.blog-details', $item->id) }}"
                                class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>



@endsection

@section('java_script')

@endsection