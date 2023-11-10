@extends('frontend.layouts.index')
@section('content')
{{-- @include('frontend.layouts.loader') --}}
<!-- START HEADER -->
@include('frontend.layouts.header')
<!-- START SECTION BREADCRUMB -->
@include('frontend.layouts.banner')
<!-- END SECTION BANNER -->
<!-- START SECTION TEACHER -->
<section>
	<div class="container">	
        <div class="row">
        	<div class="col-lg-4 col-md-6">
            	<div class="team_single radius_all_10 box_shadow1">
                	<div class="team_img">
                    	<img class="radius_ltrt_10" src="{{asset('public/upload/faculty/'.$head->image)}}" alt="team_img_big">
                    </div>
                    <div class="team_single_info">
                        <div class="team_name">
                            <h5>{{$head->name}}</h5>
                            <span>{{$head->title}}</span>
                        </div>
						
                        <h6 class="mb-3">Contact info:</h6>
                        <ul class="contact_info list_none">
                            <li>
                                <span>Address:</span>
                                <address>{{$head->address }}</address>
                            </li>
                            <li>
                                <span>Email:</span>
                                <a href="mailto:{{$head->email}}">{{$head->email}}</a>
                            </li>
                            <li>
                                <span>Phone:</span>
                                <p>{{$head->phone}}</p>
                            </li>
                            <li>
                                <span>Social:</span>
                                <ul class="list_none social_icons radius_social">
                                    <li><a href="{{$head->facebook_url}}" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="{{$head->twitter_url}}" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="{{$head->googleplus_url}}" class="sc_gplus"><i class="ion-social-googleplus"></i></a></li>
                                    <li><a href="{{$head->instagram_url}}" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
            	<div class="teacher_desc mt-4 mt-md-0">
                    <h5 class="mb-3">Message From {{$head->title}}</h5>
                    <p class="text-justify">{!! $head->long_description !!}</p>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- END SECTION TEACHER -->

<!-- END SECTION CALL TO ACTION -->

<!-- END SECTION CALL TO ACTION -->



<!-- START FOOTER -->
@include('frontend.layouts.footer')
<!-- END FOOTER -->



@endsection