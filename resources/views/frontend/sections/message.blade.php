    <!-- ===== Massage from VC section start ===== -->
    <section>
        <div class="bg-color-three py-5">
            <div class="container">
                <div class="row align-item-center">
                    <div class="col-12 col-sm-4">
                        <div class="round-image">
                            <img class="img-fluid w-100" src="{{ asset('public/upload/members/'.@$vc->image) }}" onerror="this.onerror=null;this.src='{{ asset('public/frontend/images/about/user-dummy.jpeg') }}';"
                                alt="about image">
                        </div>
                    </div>
                    <div class="col-12 col-sm-8">
                        <div class="main-message">
                            <h2>{{ @$message->title_first_part }} <span class="text-color-one">{{ @$message->title_second_part }}</span> </h2>
                            <div class="text-justify">
                              {!! @$message->short_description !!}
                            </div>
                            <div class="d-inline">
                              <h4>{{ @$vc->name }}</h4>
                              <b class="text-primary">{{ @$vc->member_designation }}</b> <br />
                              {{-- Read more button display none --}}
                              <a href="{{ route('vc-message') }}" class="btn btn-primary mt-2 float-right" style="font-family: 'work sans', sans-serif; display:none">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== Massage from VC section end ===== -->
