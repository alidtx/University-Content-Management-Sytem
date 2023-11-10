@extends('frontend.layouts.app')

@section('title', 'Our Top Faculty')


@section('my_style')

@endsection

<style>
    .text{

        text-align: justify;
    }

</style>

@section('content')
    <section class="counter-numbers" style="background: url({{ asset('public/frontend/images/banner/faculty.png')  }})">
      <div class="container">
        <h3 class="text-center " style="color: white;">Comilla University</h3>
      </div>
    </section>


    <section>
      <div class="container text">
        <div class="row my-5">
          <div class="col-12 col-sm-4 ">
            <div class="round-image">
              <img
              class="img-fluid w-100"
              src="{{ asset('public/upload/members/'.@$vc->image) }}" onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/user-dummy.jpeg') }}';"
              alt="about image"
              />
            </div>
          </div>
          <div class="col-12 col-sm-8">
            <h2>

              {{ $message->title_first_part }} <span class="text-primary">{{ $message->title_second_part }} </span>
            </h2>
            <h4>

              @php
              $hashids = new \Hashids\Hashids('', 5, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ');
              $id = $hashids->encode(@$vc->id);
            @endphp
            <a href="{{route('members.faculty_member_details',$id)}}"
              class="justify-self-end" style="color: rgb(21, 13, 176); margin-top: auto;">{{ $vc->name }}</a> </h4>
            <h6>{{ $vc->member_designation }}</h6>
            {!! $message->long_description !!}

          </div>
        </div>
      </div>
    </section>

@endsection

