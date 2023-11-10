@extends('frontend.layouts.app')

@php
$pageTitle='Annual Performance Agreement Report';
@endphp

@section('title', $pageTitle)

@section('my_style')

@endsection

@section('content')

<style>

.headline{
    font-size: 16px;
    color: black;
    font-weight: 600;
}
.descruption{
    margin-left: 10px;
    padding-top:17px
}


</style>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, nemo beatae. Asperiores, in reiciendis, quae, delectus voluptates odio eos rerum nostrum eius quam pariatur tempore laborum quis dolorum vitae illum.


<section class="counter-numbers" style="background: url({{ asset('public/frontend/images/banner/faculty.png')  }}); background-position: center center; background-size:cover;">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3 class="text-center font_four text-white">Annual Performance Agreement</h3>
      </div>
    </div>
  </div>
</section>

    <!-- ===== Body section start ===== -->

    <section>
        <div class="main-body">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="bangla-nikosh my-4">{{ $result->title }}</h3>
                        <!--p class="font_one  my-2">Last update: 20 September 2022</p-->
                    </div>
                </div>
            </div>
            <div class="container bg-white p-1 p-sm-5 border">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-bordered bangla-nikosh">
                                <thead>
                                    <tr>
                                        <th class="td_bangla_font" width="30%">শিরোনাম</th>
                                        <th class="td_bangla_font" width="10%">সংযুক্তি</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($result->annualreport as $report)
                                    <tr>
                                        <td class="td_bangla_font">{{ $report->title }}</td>
                                        <td><a href="{{ asset('public/upload/performance/'.$report->files) }}" download>Download</a> </td>
                                        {{-- <td>{!! $result->description !!}</td> --}}
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                            <div class="descruption">
                            {{-- <h6 class="headline">বর্ণনা</h6> --}}
                            <p>{!! $result->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Body section end ===== -->

@endsection
