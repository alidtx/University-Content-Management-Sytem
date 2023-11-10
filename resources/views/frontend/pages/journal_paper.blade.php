@extends('frontend.layouts.app')

@php
$pageTitle='Journal Paper';
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
            border: 1px solid #9de1ff;
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

        .card-text {
            font-size: 16px !important;
        }

        .card-body {
            min-height: 75px !important;
        }
    </style>

@endsection


@section('content')


    <section class="counter-numbers"
        style="padding-top: 250px; background: url({{ asset('public/frontend/images/banner/faculty.png') }})">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="text-center my-font" style="color: white;">Journal Papers</h3>
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
                            <h3 class="title-text my-font" style="margin-left:-102px">Journal Paper</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTable"  class="table table-sm table-bordered table-striped ">
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>Paper Title</th>
                                    <th>Author</th>
                                    <th>Editor</th>
                                    <th>Research Area</th>
                                    <th>Image</th>
                                    <th>Attachment</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($journalPaper as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->paper_title }}</td>
                                    <td>{{ $item->authors}}</td>
                                    <td>{{ $item->editor }}</td>
                                    <td>{{ $item->research_area }}</td>
                                    <td> <img width="50px" src="{{asset('public/upload/journal/'.$item->attachment1)}}" alt="">  </td>
                                    <td>
                                        <a target="_blank"
                                        href="{{ asset('public/upload/journal/'. $item->attachment2) }}" download=""><img
                                            src="{{ asset('public/frontend/images/pdf_icon.png') }}"
                                            height="40" ></a>
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
@endsection
