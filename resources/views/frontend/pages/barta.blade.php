@extends('frontend.layouts.app')

@php
$pageTitle='Bartas';
@endphp

@section('title', $pageTitle)



@section('my_style')
    <style>
        .pagination{
            margin-top: -23px;
        }
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
                    <h3 class="text-center my-font" style="color: white;">Comilla University Barta</h3>
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
                            <h3 class="title-text my-font" style="margin-left:-102px">Comilla University Barta</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="">
        <div class="container">
            <div class="row">
                <div class="card-body">
                    <table id="dataTable" class="table table-sm table-bordered table-striped ">
                        <thead>
                            <tr>
                                <th>S/L</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th style="text-align: center;">Attachment</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bartas as $barta)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $barta['title'] }}</td>
                                    <td>{{ date('d/m/Y', strtotime($barta['date'])) }}</td>
                                    <td style="text-align: center;">
                                            <i class="fa fa-eye fa-lg" aria-hidden="true" type="button" data-toggle="modal"
                                                data-target="#exampleModal"></i>
                                            <a href="{{ asset('public/upload/barta/' . $barta->attachment) }}"
                                                download style="padding-left: 10px;"><i
                                                    class="fa fa-download fa-lg"></i></a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document" style="max-width: 80% !important">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                {{ $barta['title'] }}
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <iframe
                                                                src="{{ asset('public/upload/barta/' . $barta->attachment) }}"
                                                                width="100%" height="600">
                                                                This browser does not support PDFs. Please download the
                                                                PDF to view it:
                                                                <a href="{{ asset('public/upload/barta/' . $barta->attachment) }}">Download</a>
                                                            </iframe>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
        </div>
    </section>


@endsection
