@extends('frontend.layouts.app')

@php
$pageTitle='No Objection Certificate';
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
                    <h3 class="text-center my-font" style="color: white;">No Objection Certificate</h3>
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
                            <h3 class="title-text my-font" style="margin-left:-102px">No Objection Certificate</h3>
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
                                <th>Member Name</th>
                                <th>Designation</th>
                                <th>Department/Office</th>
                                <th>Publish Date</th>
                                <th>Attachment</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($officeOrders as $officeOrder)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    @if ($officeOrder->category_type == 3)
                                    {{-- <td>-</td> --}}
                                    <td>{{ @$officeOrder->member_name_others }}</td>
                                    @else
                                    <td>{{ @$officeOrder->member->name }}</td>
                                    @endif

                                    @if ($officeOrder->category_type == 3)
                                    <td>{{ @$officeOrder->member_designation_others }}</td>
                                    @else
                                    <td>{{ @$officeOrder->member->member_designation }}</td>
                                    @endif

                                    @if ($officeOrder->category_type == 3)
                                    <td>{{ @$officeOrder->office_name_others }}</td>
                                    @else
                                        @if ($officeOrder->category_type == 1)
                                            <td>{{ @$officeOrder->department->name }}</td>
                                        @else
                                            <td>{{ @$officeOrder->office->name }}</td>
                                        @endif
                                    @endif

                                    {{-- @if ($officeOrder->category_type == 1)
                                        <td>{{ @$officeOrder->department->name }}</td>
                                    @else
                                        <td>{{ @$officeOrder->office->name }}</td>
                                    @endif --}}
                                    <td>{{ date('d/m/Y', strtotime($officeOrder['publish_date'])) }}</td>
                                    <td style="text-align: center;">
                                        @php $attachments = \App\Model\OfficeOrderAttachment::where('office_order_id',$officeOrder->id)->get(); @endphp
                                        @foreach ($attachments as $attachment)
                                        {{-- <a href="{{ asset('public/upload/office_order/'.$attachment->attachment) }}"> --}}
                                        <i class="fa fa-eye fa-lg" aria-hidden="true" type="button" data-toggle="modal"
                                                data-target="#example_{{$attachment->id}}"></i>
                                                {{-- </a> --}}
                                            <a href="{{ asset('public/upload/office_order/'.$attachment->attachment) }}"
                                                download style="padding-left: 10px;"><i
                                                    class="fa fa-download fa-lg"></i></a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="example_{{$attachment->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document" style="max-width: 80% !important">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                {{ $officeOrder['title'] }}
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <iframe
                                                                src="{{ asset('public/upload/office_order/'.$attachment->attachment) }}"
                                                                width="100%" height="600">
                                                                This browser does not support PDFs. Please download the
                                                                PDF to view it:
                                                                <a
                                                                    href="{{ asset('public/upload/office_order/' . $attachment->attachment) }}">Download
                                                                    PDF</a>
                                                            </iframe>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- @if ($attachment->attachment != null && ($ext[1] == 'doc' || $ext[1] == 'docm' || $ext[1] == 'docx'))
                                                <a target="_blank"
                                                    href="{{ asset('public/upload/office_order/' . $attachment->attachment) }}"><img
                                                        src="{{ asset('public/frontend/images/doc_icon.png') }}"
                                                        height="40"></a>

                                                <button type="button" data-toggle="modal" data-target="#exampleModal">
                                                    <img src="{{ asset('public/frontend/images/pdf_icon.png') }}"
                                                        height="40">
                                                </button>

                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document"
                                                        style="max-width: 80% !important">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">
                                                                    {{ $officeOrder['title'] }}
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <iframe
                                                                    src="{{ asset('public/upload/office_order/' . $attachment->attachment) }}"
                                                                    width="100%" height="600">
                                                                    This browser does not support PDFs. Please download the
                                                                    PDF to view it:
                                                                    <a
                                                                        href="{{ asset('public/upload/office_order/' . $attachment->attachment) }}">Download
                                                                        PDF</a>
                                                                </iframe>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif --}}
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                    {{-- <p class="pagination">{{$officeOrders->links()}}</p> --}}
                </div>
            </div>

        </div>
    </section>


@endsection
