@extends('frontend.layouts.app')

@php
$pageTitle='Home Page';
@endphp

@section('title', $pageTitle)

@section('my_style')

@endsection

@section('content')


<!-- Hero slider -->

@include('frontend.sections.slider')

<!-- /Hero slider -->
{{-- @include('frontend.sections.popup') --}}

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



@section('add_script_ref')

<style>
    .convocation {
        text-align: center;
    }

    .convocation p {
        font-size: 20px;
        color: #00b2ff;
    }

    .convocation a {

        text-decoration: none;

    }

    .modal-content {

        opacity: 100%;
        height: auto !important;
        margin-top: 80px;
    }
</style>

@php
$homeNotification=homeNotification();
@endphp

@if ($homeNotification!==null)
<div class="modal fade mt-5" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body mt-5 mb-5 convocation">
                <a href="#" target="_blank"><p> {!!$homeNotification->description!!}</p></a>
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

<script src="{{ asset('public/frontend/dist/js/jquery.easy-ticker.js') }}"></script>
<script>
    $(function(){
      $('.demo').easyTicker({
        direction: 'up',
        easing: 'swing',
        speed: 'slow',
        interval: 3000,
        height: 'auto',
        visible: 0,
        mousePause: true,
        autoplay: true,
        controls: {
            up: '.btnUp',
            down: '.btnDown',
            toggle: '',
            playText: 'Play',
            stopText: 'Stop'
        },
        callbacks: {
            before: false,
            after: false,
            finish: false
        }
    });

    });
</script>
@endsection
