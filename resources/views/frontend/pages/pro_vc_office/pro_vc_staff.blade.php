{{-- @extends('frontend.layouts.office-app') --}}
@extends('frontend.layouts.faculty-app')
@php
$pageTitle = 'Pro VC Office Staffs';
@endphp

@section('title', $pageTitle)

@section('my_style')

@endsection
@section('content')
@include('frontend.layouts.pro_vc_office_header')
<!-- hero slider -->
@include('frontend.partial.vc-slider')
<!-- /hero slider -->

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row my-5">
                    <div class="col-12 col-sm-6" style="background-color: #00B2FF;">
                        <div class="row">
                            <div class="col-10 offset-0 offset-sm-2">
                                <h3 class="title-text my-font py-3 text-white ">Office of the Pro Vice Chancellor
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-more">
    <div class="container">
        <div class="row">

            @foreach ($Officeabout as $office)
            <div class="col-md-6 my-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5 position-relative">
                                <div class="round-image">
                                    <img height="170px"
                                        src="{{ @$office->member->image ? asset('public/upload/members/' . @$office->member->image) : asset('public/frontend/cuimages/user-dummy.jpeg') }}"
                                        onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/user-dummy.jpeg') }}';"
                                        alt="Image" />
                                </div>
                            </div>
                            <div class="col-md-7">
                                <i style="color: #00B2FF;font-weight: 800;margin:15px 0;">{{
                                    @$office->member->member_designation }}</i>
                                <p style="font-size: 20px;font-weight: 500;margin:20px 0;">
                                    {{ @$office->member->name }}</p>
                                <small style="">Cell Phone:{{ @$office->member->phone }}</small><br>
                                <small style="">Email:{{ @$office->member->email }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@include('frontend/layouts/footer')
@endsection