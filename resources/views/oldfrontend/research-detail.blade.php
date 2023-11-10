@extends('frontend.layouts.index') 
@section('content')
{{-- @include('frontend.layouts.loader') --}}
<!-- START HEADER -->
@include('frontend.layouts.header')
<!-- START SECTION BREADCRUMB -->
@include('frontend.layouts.banner')
<!-- END SECTION BANNER -->
<section>
	<div class="container">	
        <div class="row">
        	
            <div class="col-lg-8 col-md-6">
            	<div class="teacher_desc mt-4 mt-md-0">
                    <h5 class="mb-3">{{$research->title}}</h5>
                    <p class="text-justify">{!! $research->description !!}</p>
                </div>
                
            </div>
        </div>
    </div>
</section>


<!-- START FOOTER -->
@include('frontend.layouts.footer')
<!-- END FOOTER -->
@endsection