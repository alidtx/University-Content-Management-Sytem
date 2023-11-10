{{-- @extends('frontend.layouts.app') --}}

@extends('frontend.layouts.faculty-app')

{{-- @section('title', 'Our Top Faculty') --}}
@php
$pageTitle = 'Faculty Members - Department of ' . @$department->name;
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

    .heading-content1 {
        text-align: center;
        font-size: 15px;
        line-height: 1.5;
        height: 140px;

    }

    .heading-content1 .desgination {

        font-size: 14px;
        display: inline-block;
        padding-top: 10px;
    }

    .heading-content1 .pro_name {

        font-size: 16px;
        font-weight: 500;
    }

    .my-font1 {
        font-size: 14px;
        margin-top: 6px;
        margin-bottom: 14px;
        color: #00B2FF;
    }
</style>

@endsection


@section('content')
@include('frontend.layouts.department_header')


@include('frontend.partial.content-header', [
'pageTitle' => $pageTitle,
'bannerImageLink' => 'faculty.png',
])
@include('frontend.partial.content-blue-header', ['title' => 'Faculty Member'])

<div class="row">
    <div class="container">
        <h3 class="my-font" style="margin-bottom: 20px;"><span style="color: #00B2FF;">Chairman</span></h3>
    </div>
</div>
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-3 fix-height" style="margin: 0 auto;">
                <div class="card">
                    <div class="card-body d-flex flex-column">
                        <div class="col-md-12 position-relative">
                            <div class="round-image">
                                <img height="170px"
                                    src="{{ @$department->member->image ? asset('public/upload/members/' . @$department->member->image) : asset('public/frontend/cuimages/user-dummy.jpeg') }}"
                                    onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/user-dummy.jpeg') }}';"
                                    alt="Image" />
                            </div>
                        </div>
                        <div class="heading-content1" style="margin-top: 15px;">
                            <h3 class="my-font1" style="margin-bottom: 0px !important;">
                                {{ @$department->member->name }}</span></h3>
                            {{-- <p class="pro_name">{{@$member->name}}</p> --}}
                            <p class="desgination" style="padding-top: 0px !important;">
                                {{ @$department->member->member_designation }}</p><br />
                            <small style="">Cell: {{ @$department->member->phone }}</small><br />
                            <small style="">Email: {{ @$department->member->email }}</small><br /><br />
                            {{-- <a href="{{route('members.faculty_member_details',$member->member_id)}}"
                                style="color: white;"> <button class="btn btn-primary btn-sm justify-self-end">
                                    Details</button></a> --}}
                        </div>
                        <a href="{{ route('departments.department_member_details', @$department->department_head) }}"
                            class="btn btn-primary btn-sm justify-self-end" style="color: white; margin-top: auto;">
                            Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="row">
    <div class="container">
        <h3 class="my-font" style="margin-bottom: 20px;"><span style="color: #00B2FF;">Faculty Member</span></h3>
    </div>
</div>


<section class="">
    <div class="container">
        <div class="row">
            <!--new -->
            @foreach ($members as $member)
            @if ($member->member->id != $department->department_head)
            <div class="col-md-3 fix-height">
                <div class="card">
                    <div class="card-body d-flex flex-column">
                        <div class="col-md-12 position-relative">
                            <div class="round-image">
                                <img height="170px"
                                    src="{{ @$member->member->image ? asset('public/upload/members/' . @$member->member->image) : asset('public/frontend/cuimages/user-dummy.jpeg') }}"
                                    onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/user-dummy.jpeg') }}';"
                                    alt="Image" />
                            </div>
                        </div>
                        <div class="heading-content1" style="margin-top: 15px;">
                            <h3 class="my-font1" style="margin-bottom: 0px !important;">
                                {{ @$member->member->name }}</span></h3>
                            {{-- <p class="pro_name">{{@$member->name}}</p> --}}
                            <p class="desgination" style="padding-top: 0px !important;">
                                {{ @$member->member->member_designation }}</p><br />
                            <small style="">Cell: {{ @$member->member->phone }}</small><br />
                            <small style="">Email: {{ @$member->member->email }}</small><br /><br />
                            {{-- <a href="{{route('members.faculty_member_details',$member->member_id)}}"
                                style="color: white;"> <button class="btn btn-primary btn-sm justify-self-end">
                                    Details</button></a> --}}
                        </div>
                        <a href="{{ route('departments.department_member_details', @$member->member_id) }}"
                            class="btn btn-primary btn-sm justify-self-end" style="color: white; margin-top: auto;">
                            Details</a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            <!--new -->
        </div>
    </div>
</section>

@include('frontend/layouts/footer')
@endsection