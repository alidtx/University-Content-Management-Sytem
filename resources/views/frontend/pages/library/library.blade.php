@extends('frontend.layouts.library_app')

@php
$pageTitle= "University Library" ;
@endphp
@section('title', $pageTitle)
@section('my_style')
<style>
	.book-container {
		margin: 15px 0;
		transition: .5s;
	}

	.book-container:hover {
		background-color: #f8f9fa;
		transition: .5s;
	}

	.book-container h5 {
		height: 45px;
		overflow: hidden;
	}

	.book-container img {
		max-height: 220px;
		display: block;
		margin: 5px auto;
	}

	.text-black {
		color: #000 !important;
	}
	.nav-pills .nav-link.active,
	.nav-pills .show>.nav-link{
		background-color: #00b2ff;
	}
    .list{
        margin: 0;
        padding: 0;
       margin: 12px 0 12px 17px;
    }
    .list li{
        list-style: none
    }
    .list li a {
     text-decoration: none
    }
    .mb-2, .my-2 {
    margin-bottom: -0.5rem!important;
}
</style>
@endsection

@section('content')
<div class="my-5"></div>
{{-- @include('frontend.patial.content-header', ['pageTitle' => $pageTitle, 'bannerImageLink' => 'faculty.png']) --}}
{{-- @include('frontend.patial.content-blue-header', ['title' =>  'Book Category']) --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script    src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<section class="top-banner shadow dark" style="background: url({{ @$bannerImageLink ? asset('public/frontend/images/banner/'.@$bannerImageLink) : asset('public/frontend/images/banner/faculty.png') }})">
    <div class="container">
      <div class="row">
        <div class="col">
          <h3 class="text-center text-white" >{{ $pageTitle }}</h3>
        </div>
      </div>
    </div>
  </section>



<section>
	<div class="container my-5">
		<div class="row">
			<div class="col-3">
				<h3 class="my-2">Book Category</h3>
				<div class="nav flex-column nav-pills border mt-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					@foreach($subjects as $i => $item)
					<a class="nav-link  border-bottom py-3 rounded-0 {{ $loop->iteration == 1 ? 'active': ''}}"
						id="v-pills-home-tab_{{ $i }}" data-toggle="pill" href="#v-pills-home_{{ $i }}" role="tab"
						aria-controls="v-pills-home_{{ $i }}" aria-selected="true">{{ $item->subject_name }}</a>
					@endforeach
				</div>

			</div>
			<div class="col-9">
				<div class="tab-content" id="v-pills-tabContent">
					@foreach($subjects as $i => $item)
					<div class="tab-pane fade {{ $loop->iteration == 1 ? 'show active': ''}}" id="v-pills-home_{{ $i }}"
						role="tabpanel" aria-labelledby="v-pills-home-tab_{{ $i }}">
						<div class="row">
							@foreach($item::bookAsSubject($item->id) as $book)
							<div class="col-12 col-sm-4">
								<a class="text-decoration-none" href="#">
									<div class="book-container border">
										<img class="img-fluid"
											src="{{ asset('public/upload/library/books_publications/'.$book->image) }}"
											alt="Book">
										{{-- <p class="text-black text-center border-bottom mt-3"><i>By: Md Khalid
												Hossain</i></p> --}}
										<h5 class="text-black text-center my-3">{{ $book->title }}</h5>
									</div>
								</a>
							</div>
							@endforeach
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<style>
  #owl-demo .item{
  background: #42bdc2;
  /* padding: 30px 0px; */
  /* margin: 10px; */
  color: #FFF;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  text-align: center;
  border: 2px solid white
}
#owl-demo .item .card-header{
    background: #00b2ff
}
#owl-demo .item .card-body{
    color: black;
}
</style>

<script>
    $(document).ready(function() {

     $("#owl-demo").owlCarousel({
       navigation : true
     });

    });

 </script>

<section>
    <div class="container my-5">
        <div id="owl-demo" class="owl-carousel owl-theme">
           @foreach ($useful_link as $item)
           <div class="item">
            <div class="card">
                <div class="card-header">Inportant Link</div>
                <div class="card-body">
                <a href="{{$item->link}}">{{$item->name}}</a>
                </div>
            </div>
         </div>
           @endforeach
          </div>
    </div>
</section>



@endsection
