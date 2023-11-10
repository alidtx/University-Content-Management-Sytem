@extends('frontend.layouts.app')

@php
$pageTitle = "Vice Chancellor of Comilla University";
@endphp

@section('title', $pageTitle )

@section('my_style')

<link rel="stylesheet" href="{{ asset('public/frontend/dist/css/profile.css') }}">

@endsection


@section('content')


@include('frontend.partial.content-header', ['pageTitle' => $facultyMember->name, 'bannerImageLink' => 'faculty.png'])

@include('frontend.partial.profile')

@endsection


@section('java_script')

<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
	$( function() {
			$( "#tabs" ).tabs();
		} );
</script>

@endsection