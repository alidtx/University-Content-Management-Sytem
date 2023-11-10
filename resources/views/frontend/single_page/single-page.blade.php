@extends('frontend.layouts.app')
@section('content')

@php
    $urll = request()->fullUrl();
    if($urll) {
        $url = explode('=',$urll);
        if(sizeOf($url) >= 3)
        {
            $ur = $url[2];
            $fmenu = DB::table('frontend_menus')->where('id', $ur)->first();
        }
    }
@endphp



<section class="top-banner" style="background: url({{ asset('public/frontend/images/banner/faculty.png')  }})">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3 class="text-center font_four" style="color: white;">{{@$find_post['title']}}</h3>
      </div>
    </div>
  </div>
</section>


<section id="partnership" style="@if(@$fmenu) padding-top: 0px; @else padding-top: 30px; @endif">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-12 col-sm-6 mt-1" style="background-color: #00B2FF;  z-index: 99;">
            {{-- <div class="row">
              <div class="col-10 offset-0 offset-sm-2"> --}}
                <h3 class="text-white py-2">{{@$find_post['title']}}</h3>
              {{-- </div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="container" style="margin-top: 10px; text-align:justify;  min-height: 450px;">


        @if(@$find_post['image'])
        <div class="container mb-3">
          <div style="text-align: center;">
            @if(@$find_post->getTable() == 'directors')
            <img src="{{asset('public/upload/director/'.@$find_post->image)}}" style="max-width: 80%;" alt=""/>
            @elseif(@$find_post->getTable() == 'news')
            <img src="{{asset('public/upload/news/'.@$find_post->image)}}" style="max-width: 80%;" alt=""/>
            @elseif(@$find_post->getTable() == 'facilities')
            <img src="{{asset('public/upload/facility/'.@$find_post->image)}}" style="max-width: 80%;" alt=""/>
            @elseif(@$find_post->getTable() == 'activities')
            <img src="{{asset('public/upload/activity/'.@$find_post->image)}}" style="max-width: 80%;" alt=""/>
            @elseif(@$find_post->getTable() == 'our_researches')
            <img src="{{asset('public/upload/our_research/'.@$find_post->image)}}" style="max-width: 80%;" alt=""/>
            @elseif(@$find_post->getTable() == 'our_developments')
            <img src="{{asset('public/upload/our_development/'.@$find_post->image)}}" style="max-width: 80%;" alt=""/>
            @elseif(@$find_post->getTable() == 'our_libraries')
            <img src="{{asset('public/upload/our_library/'.@$find_post->image)}}" style="max-width: 80%;" alt=""/>
            @elseif(@$find_post->getTable() == 'our_campuses')
            <img src="{{asset('public/upload/our_campus/'.@$find_post->image)}}" style="max-width: 80%;" alt=""/>
            @endif
          </div>
        </div>
        @endif
        @if(@$find_post['date'])
        <div class="container mb-3">
          <div style="text-align: center;margin-top: 2px;">
            {{date('d-M-Y',strtotime(@$find_post['date']))}}
            </div>
        </div>
        @endif
        {{-- <br> --}}



        @if(@$find_post['description'])
        <div class="container mb-3" style="max-width: 100%;width: 100%; min-height: 450px;">
          <div style="text-align: justify;" style="max-width: 100%;width: 100%;">
          {!! @$find_post['description'] !!}
          </div>
        </div>
        @endif

        {{-- @if(@$find_post['short_description'])
        <div class="container" style="max-width: 100%;width: 100%;">
          <div style="text-align: justify;" style="max-width: 100%;width: 100%;">
          {!! @$find_post['short_description'] !!}
          </div>
        </div>
        @endif --}}

        @if(@$find_post['long_description'])
        <div class="container">
          <div style="text-align: justify;">
          {!! @$find_post['long_description'] !!}
          </div>
        </div>
        @endif
        @if(@$find_post['file'])
          <div class="container ">
            <div style="text-align: left;margin-top: 0px;margin-bottom: 10px;">
              <a style="margin-bottom: 0px;text-decoration: none;" target="_blank" href="{{ asset('public/upload/news/'.@$find_post['file']) }}"><b style="font-size: 30px;">Download&nbsp;&nbsp;</b><i class="fas fa-file-pdf fa-2x"></i></a>
            </div>
          </div>
        @endif

    </div>
</section>


@endsection
