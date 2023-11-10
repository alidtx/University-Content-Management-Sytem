<!-- ===== Massage from VC section end ===== -->
<section class="about-more">
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-3" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000"
                data-aos-easing="ease-in-out">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 order-2 order-sm-1">
                                <p class="about-more-title">Pro Vice Chancellor</p>
                                {{-- <p class="about-name">Professor Dr. Mohammad Humayun Kabir</p> --}}
                                @php
                                $hashids = new \Hashids\Hashids('', 5, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ');
                                $id = $hashids->encode(@$pro_vc->id);
                                @endphp
                                <p class="about-name"><a href="{{route('members.faculty_member_details',$id)}}"
                                        style="color: #212529;">{{ @$pro_vc->name }}</a></p>
                                {{-- <a href="{{ route('directorContent', encrypt($director->id)) }}" class="my-2">Read
                                    More</a> --}}
                            </div>
                            <div class="offset-1 col-md-5 position-relative order-1 order-sm-2">
                                <div class="round-image">
                                    <img class="img-fluid" src="{{ asset('public/upload/members/'.@$pro_vc->image) }}"
                                        onerror="this.onerror=null;this.src='{{ asset('public/frontend/images/about/user-dummy.jpeg') }}';"
                                        alt="Pro Vice Chancellor" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-3" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000"
                data-aos-easing="ease-in-out">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5 position-relative">
                                <div class="round-image">
                                    <img class="img-fluid"
                                        src="{{ asset('public/upload/members/'.@$treasurer->image) }}"
                                        onerror="this.onerror=null;this.src='{{ asset('public/frontend/images/about/user-dummy.jpeg') }}';"
                                        alt="Treasurer" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p class="about-more-title">Treasurer</p>
                                {{-- <p class="about-name">Professor Dr. Md. Ashaduzzaman</p> --}}
                                @php
                                $hashids = new \Hashids\Hashids('', 5, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ');
                                $id = $hashids->encode(@$treasurer->id);
                                @endphp
                                <p class="about-name"><a href="{{route('members.faculty_member_details',$id)}}" style="color: #212529;">{{
                                        @$treasurer->name }}</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===== Massage from VC section end ===== -->
