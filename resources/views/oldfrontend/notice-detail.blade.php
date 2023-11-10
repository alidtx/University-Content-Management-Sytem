@extends('frontend.layouts.index')
@section('content')
{{-- @include('frontend.layouts.loader') --}}
<!-- START HEADER -->
@include('frontend.layouts.header')
<!-- START SECTION BREADCRUMB -->
@include('frontend.layouts.banner')
<!-- END SECTION BANNER -->
<!-- START SECTION NOTICE -->
<section>
	<div class="container">	
        <div class="row">
        	
            <div class="col-lg-8 col-md-6">
            	<div class="teacher_desc mt-4 mt-md-0">
                    <h5 class="mb-3">{{$notice->title}}</h5>
                    <p class="text-justify">{!! $notice->description !!}</p>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- END SECTION NOTICE -->

<!-- END SECTION CALL TO ACTION -->

<!-- END SECTION CALL TO ACTION -->



<!-- START FOOTER -->
@include('frontend.layouts.footer')
<!-- END FOOTER -->



@endsection