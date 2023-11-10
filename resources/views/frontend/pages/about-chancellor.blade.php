@extends('frontend.layouts.app')

@php
$pageTitle = 'About VC';
@endphp

@section('title', $pageTitle)


@section('my_style')
	<style>
		.mb-3, .my-3 {
			margin-bottom: 0.3rem!important;
		}
    p {
      text-align: justify;
    }
	</style>
@endsection

@section('content')

<section class="top-banner shadow dark bg-fixed" style="background: url({{ asset('public/frontend/cuimages/vcpage.png') }}); background-position: center center; background-size:cover;">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3 class="text-center font_four" style="color: white;">Honorable Chancellor Md. Abdul Hamid</h3>
      </div>
    </div>
  </div>
</section>

{{-- <section
  class="hero-section overlay bg-cover"
  data-background="{{ asset('public/frontend/images/banner.png') }}" >
  <div class="container">
    <div class="hero-slider">
      <!-- slider item -->
      <div class="hero-slider-item">
        <h2 class="text-white text-center">Md. Abdul Hamid</h2>
      </div>
    </div>
  </div>
</section> --}}
<section class="about-vc my-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 mb-md-0">
        <div class="round-image">
          <img
          class="img-fluid w-100"
          src="{{ asset('public/frontend/images/chancellor.jpg') }}" 
          alt="about image"
          />
        </div>
      </div>
      <div class="col-md-8">
        <h2>Md. Abdul Hamid</h2>
        <h2><span class="text-primary" style="font-size: 24px;">Hon’ble President of the People’s Republic of Bangladesh</span></h2>
        <p class="text-justify">
          His Excellency Mr. Abdul Hamid was born in 1944 at the village Kamalpur under Mithamoin Sub-District of Kishoregonj. He was matriculated from Nikly GC High School and had his IA and BA from Guru Dayal College in Kishoregunj. Later on he was graduated in Law form Dhaka Central Law College and joined the Bar for legal practice.
        </p>
        <br/>
        <p class="text-justify">
          Mr. Hamid has a dedicated career in politics and social welfare. He involved in politics in 1959 as a member of Chattra League. In 1961 he took part in political movement against the autocratic rule of the then President Gen. Ayub Khan and he was sent to jail fro several times. He held various political offices including General Secretary of the College Student Union, President of Chatra League in Kishoregunj sub division, Vice President of Mymensingh District Chatra League and joined the Awami League in 1969.
        </p>
      </div>
    </div>
  </div>
</section>




@endsection
