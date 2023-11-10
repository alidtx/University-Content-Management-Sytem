@extends('frontend.layouts.app')

@php
$pageTitle='Leave Applications';
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
        .pagination{
            margin-top: -17px;
        }
    </style>

@endsection


@section('content')


    <section class="counter-numbers"
        style="padding-top: 250px; background: url({{ asset('public/frontend/images/banner/faculty.png') }})">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="text-center my-font" style="color: white;">Leave Permission</h3>
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
                            <h3 class="title-text my-font" style="margin-left:-102px">Leave Permission</h3>
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
                    <table id="dataTable" class="table table-sm table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="5%">S/L</th>
                                <th width="20%">Member Name</th>
                                <th width="15%">Designation</th>
                                <th width="15%">Department/Office</th>
                                <th width="15%">Purpose</th>
                                <th width="10%">Leave Duration</th>
                                <th>Passport No.</th>
                                <th>Country</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leaves as $d)
                                <tr>
                                    <td> {{ $loop->iteration }}</td>
                                    @if ($d['category_type'] == 3)
                                    <td>{{ @$d['member_name_others'] }}</td>
                                    @else
                                    <td>{{ @$d['member']['name'] }}</td>
                                    @endif


                                    @if ($d['category_type'] == 3)
                                    <td>{{ @$d['member_designation_others'] }}</td>
                                    @else
                                    <td>{{ @$d['member']['member_designation'] }}</td>
                                    @endif


                                    @if ($d['category_type'] == 3)
                                    <td>{{ @$d['office_name_others'] }}</td>
                                    @else
                                        @if (@$d['member']['member_type'] == 1)
                                        <td>{{ @$d['deptMember']['department']['name'] }}</td>
                                        @elseif (@$d['member']['member_type'] == 2)
                                        <td>{{ @$d['officeMember']['office']['name'] }}</td>
                                        @else
                                        <td>-</td>
                                        @endif
                                    @endif


                                    {{-- <td>{{ @$d['member']['member_designation'] }}</td> --}}
                                    {{-- @if (@$d['member']['member_type'] == 1)
                                    <td>{{ @$d['deptMember']['department']['name'] }}</td>
                                    @elseif (@$d['member']['member_type'] == 2)
                                    <td>{{ @$d['officeMember']['office']['name'] }}</td>
                                    @else
                                    <td>-</td>
                                    @endif --}}
                                    <td>{{ @$d['purpose'] }}</td>
                                    <td>{{ date('d/m/Y', strtotime(@$d['start_by'])) }} - {{ date('d/m/Y', strtotime(@$d['end_by'])) }}</td>
                                    <td>{{ @$d['passport'] }}</td>
                                    <td>{{ @$d['country'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


@endsection
