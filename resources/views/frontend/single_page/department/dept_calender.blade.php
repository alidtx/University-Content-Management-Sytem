@extends('frontend.layouts.faculty-app')
@php
$pageTitle = 'Academic Calender - Department of ' . @$department->name;
@endphp
@section('title', $pageTitle)
@section('my_style')
<style>
    @media (min-width: 1200px) {
        .for_padding_like_container {
            padding-left: 10px;
        }
    }

    @media (min-width: 992px) {
        .for_padding_like_container {
            padding-left: 10px;
        }
    }

    @media (min-width: 768px) {
        .for_padding_like_container {
            padding-left: 10px;
        }
    }

    @media (min-width: 576px) {
        .for_padding_like_container {
            padding-left: 75px;
        }
    }
</style>
<style>
    .mb-3,
    .my-3 {
        margin-bottom: 0.3rem !important;
    }

    .round-image-right-curve img {
        height: 240px;
    }

    .title-text {
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

    .card {
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

    .fc .fc-col-header-cell-cushion {
        /* needs to be same precedence */
        padding-top: 5px;
        /* an override! */
        padding-bottom: 5px;
        /* an override! */
    }

    .fc-day-fri>.fc-scrollgrid-sync-inner {
        background: #ffbe3e75;
    }

    .fc-toolbar-chunk {
        /*display: none;*/
    }

    /*.fc-day-sat > .fc-scrollgrid-sync-inner{
    background: #ffbe3e75;
    }*/
    .fc-col-header-cell>.fc-scrollgrid-sync-inner {
        font-size: 18px;
        padding: 15px;
        background-color: #00b2ff;
    }

    .fc-col-header-cell>.fc-scrollgrid-sync-inner a {
        color: #000;
        font-family: "Poppins", sans-serif;
    }

    .fc-daygrid-day-top>.fc-daygrid-day-number {
        color: #000;
        font-family: "Poppins", sans-serif;
    }

    .fc .fc-toolbar-title {
        font-family: "Poppins", sans-serif;
    }

    .mydesign {
        font-family: "Poppins", sans-serif;
        text-decoration: none;
    }

    .mydesign::after {
        border: 0;
        margin-left: 0.255em;
        vertical-align: 1px;
        content: "\e64b";
        font-family: "themify";
        font-size: 11px;
        width: auto;
        text-align: right;
    }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/locales-all.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.css" />
@endsection
@section('content')
@include('frontend.layouts.department_header')
{{-- <section class="counter-numbers"
    style="background: url({{ asset('public/frontend/images/banner/faculty.png')  }})">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-center my-font" style="color: white;">Academic Calender of {{ @$department->name }}</h3>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-sm-6" style="background-color: #00B2FF; margin: 40px 0;">
                        <div class="row">
                            <div class="col-10 offset-0 offset-sm-2">
                                <h3 class="title-text my-font">Academic Calender</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@include('frontend.partial.content-header', [
'pageTitle' => $pageTitle,
'bannerImageLink' => 'faculty.png',
])
@include('frontend.partial.content-blue-header', ['title' => 'Academic Calender'])
<section>
    <div class="container" style="margin-top: 95px;">
        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dataTable" class="table table-sm table-bordered table-striped ">
                        <thead>
                            <tr>
                                <th>SI</th>

                                <th>Program</th>
                                <th>Session</th>
                                <th>Attachments</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($academics as $academic)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $academic->Program->name }}</td>
                                <td>{{ $academic->session }}</td>
                                <td style="text-align: center;">
                                    @php
                                    if ($academic->file != null) {
                                    $ext = explode('.', $academic->file);
                                    //dd($ext[1]);
                                    }
                                    @endphp
                                    @if ($academic->file != null && $ext[1] == 'pdf')
                                    <a target="_blank"
                                        href="{{ asset('public/upload/academic/' . $academic->file) }}"><img
                                            src="{{ asset('public/frontend/images/pdf_icon.png') }}" height="40"></a>
                                    @endif
                                    @if ($academic->file != null && ($ext[1] == 'doc' || $ext[1] == 'docm' || $ext[1] ==
                                    'docx'))
                                    <a target="_blank"
                                        href="{{ asset('public/upload/academic/' . $academic->file) }}"><img
                                            src="{{ asset('public/frontend/images/doc_icon.png') }}" height="40"></a>
                                    @endif
                                </td>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-sm-6">
                {!! $calendar->calendar() !!}
                {!! $calendar->script() !!}
            </div>
            <div class="col-12 col-sm-6">
                <div class="row pl-4 pr-3">
                    <div class="col-12" style="background-color: #00B2FF;">
                        <h3 class="title-text my-font">Academic Activities</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pl-4">
                        <div class="accordion" id="faqExample">
                            @foreach ($events as $item)
                            <div class="card">
                                <div class="card-header p-2 mr-0" id="headingThree{{ $item->id }}">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed mydesign my-font" type="button"
                                            data-toggle="collapse" data-target="#collapseThree{{ $item->id }}"
                                            aria-expanded="false" aria-controls="collapseThree{{ $item->id }}"
                                            style="padding-left: 10px;">
                                            {{ $item->title }}
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree{{ $item->id }}"
                                    class="collapse {{ $loop->iteration == 1 ? 'show' : '' }}"
                                    aria-labelledby="headingThree" data-parent="#faqExample">
                                    <div class="card-body my-font">
                                        {{ $item->description }}
                                        <p class="my-font" style="line-height: 28px; ">From:
                                            {{ mydate($item->start_date) }} To {{ mydate($item->end_date) }} </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- .navbar .nav-item > .dropdown-toggle::after {
border: 0;
margin-left: 0.255em;
vertical-align: 1px;
content: "\e64b";
font-family: "themify";
font-size: 11px;
width: auto;
} --}}
@include('frontend/layouts/footer')
@endsection