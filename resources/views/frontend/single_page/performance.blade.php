@extends('frontend.layouts.app')

@php
$pageTitle='Annual Performance Agreement';
@endphp

@section('title', $pageTitle)


@section('my_style')
<style>
  .perwigat {
    -webkit-box-shadow: 0px 1px 10px rgb(0 0 0 / 10%);
    box-shadow: 0px 1px 10px rgb(0 0 0 / 10%);
    background: rgba(255, 255, 255, 0.86);
    border: 1px solid #9ee4ff;
}
.perlist li a{
  color: #000000;
}
.perlist ul {
 list-style-type: none; 
  margin: 0;
  padding: 0;
}

</style>
@endsection


@section('content')



<section class="counter-numbers" style="background: url({{ asset('public/frontend/images/banner/faculty.png')  }}); background-position: center center; background-size:cover;">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3 class="text-center font_four text-white">Annual Performance Agreement</h3>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container bg-white p-1 p-sm-5 border my-5 ">
    <div class="row">
        @foreach($performances as $id => $reports)
        <div class="col-12 col-sm-6 mb-3 " >
            <div class="widget p-4 perwigat">
                <h4 class="text-color-one bangla-nikosh">{{ $reports->title }}</h4>
                <div class="row">
                    <div class="col-12 col-sm-3">
                        <img class="img-fluid d-block mx-auto my-1" src="{{ asset('public/upload/performance/'.$reports->image) }}" alt="">
                    </div>
                    <div class="col-12 col-sm-9 perlist">
                        <ul>
                            @foreach($reports->children as $child)
                            <li class="">
                                <a class="bangla-nikosh" style="font-size: 18px;" href="{{ route('performance.report', $child->id) }}">{{ $child->title }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
      </div>
  </div>
</section>


@endsection
