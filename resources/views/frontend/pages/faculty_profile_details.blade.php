@extends('frontend.layouts.app')
@php
$pageTitle = @$facultyMember->name;
@endphp

{{-- @php
$pageTitle = "Faculties of Comilla University";
@endphp --}}

@section('title', $pageTitle )

@section('my_style')

<link rel="stylesheet" href="{{ asset('public/frontend/dist/css/profile.css') }}">

@endsection


@section('content')


@include('frontend.partial.content-header', ['pageTitle' => $facultyMember->name, 'bannerImageLink' => 'faculty.png'])

@include('frontend.partial.profile')

@endsection


@section('java_script')

<script>
	$( function() {
			$( "#tabs" ).tabs();
		} );
</script>

@endsection