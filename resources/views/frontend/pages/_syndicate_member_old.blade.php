@extends('frontend.layouts.app')

@section('title', 'Our Top Faculty')


@section('my_style')
	<style>
	    @media (min-width: 1200px) {
	      .for_padding_like_container {
	            padding-left:10px;
	      }
	    }

	    @media (min-width: 992px) {
	      .for_padding_like_container {
	        padding-left:10px;
	      }
	    }
	    @media (min-width: 768px) {
	      .for_padding_like_container {
	        padding-left: 10px;
	      }
	    }
	    @media (min-width: 576px) {
	      .for_padding_like_container {
	        padding-left:75px;
	      }
	    }
	</style>

	<style>.mb-3, .my-3 {
		  margin-bottom: 0.3rem!important;
		}
    .round-image-right-curve img {
      height: 240px;
    }
  
   .title-text{
        padding: 15px;
        color: #fff;
      }

    .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        transition: .5s ease;
        background-color: rgba(0, 178, 255, 0.5);
        z-index: 999;
        
      }
      .card{
        box-shadow: rgba(129, 126, 126, 0.1) 0px 4px 12px; 
        margin-bottom: 20px;
      }

      .card:hover .overlay {
        opacity: 1;
      }

      .text {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
      }
	</style>

@endsection


@section('content')


    <section class="counter-numbers" style="background: url({{ asset('public/frontend/images/banner/faculty.png')  }})">
      <div class="container">
        <div class="row">
          <div class="col">
            <h3 class="text-center" style="color: white;">Syndicate Member</h3> 
          </div>
        </div>
      </div>
    </section>


    {{-- <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-12 col-sm-6" style="background-color: #00B2FF; margin: 40px 0;">
                <div class="row">
                  <div class="col-10 offset-0 offset-sm-2">
                      <h3 class="title-text my-font">Members</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

   

    <section class="">
      <div class="container">
        <h3 class="my-font" style="margin-bottom: 20px;">Syndicate <span style="color: #00B2FF;">Chairman</span></h3>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5 position-relative">
                    <div class="round-image">
                    <img src="{{ asset('public/frontend/images/about/vc.png') }}"alt="Image"/>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <i style="color: #00B2FF;font-weight: 800;margin:15px 0;">Vice Chancellor, CoU</i>
                    <p style="font-size: 20px;font-weight: 500;margin:20px 0;">Professor Dr. A. F. M. Abdul Moyeen</p>
                    <small style="">Cell Phone:01715408158</small>
                    <small style="">Email:emdadcou@gmail.com</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

     <section class="my-2">
      <div class="container">
        <h3 class="my-font" style="margin-bottom: 20px;">Syndicate <span style="color: #00B2FF;">Members</span></h3>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5 position-relative">
                    <div class="round-image">
                    <img src="{{ asset('public/frontend/images/about/humayun.png') }}"alt="Image"/>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <i style="color: #00B2FF;font-weight: 800;margin:15px 0;">Pro-Vice Chancellor, CoU</i>
                    <p style="font-size: 20px;font-weight: 500;margin:20px 0;">Prof. Dr. Mohammad Humayun Kabir</p>
                    <small style="">Cell Phone:01715408158</small>
                    <small style="">Email:emdadcou@gmail.com</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5 position-relative">
                    <div class="round-image">
                    <img src="{{ asset('public/frontend/images/about/ashaduzzaman.png') }}"alt="Image"/>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <i style="color: #00B2FF;font-weight: 800;margin:15px 0;">Treasurer, CoU</i>
                    <p style="font-size: 20px;font-weight: 500;margin:20px 0;">Professor Dr. Md. Ashaduzzaman</p>
                    <small style="">Cell Phone:01715408158</small>
                    <small style="">Email:emdadcou@gmail.com</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5 position-relative">
                    <div class="round-image">
                    <img src="{{ asset('public/frontend/images/about/user-dummy.jpeg') }}"alt="Image"/>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <i style="color: #00B2FF;font-weight: 800;margin:15px 0;">Ministry of Education</i>
                    <p style="font-size: 20px;font-weight: 500;margin:20px 0;">Additional Secretary (university)</p>
                    <small style="">Cell Phone:01715408158</small>
                    <small style="">Email:emdadcou@gmail.com</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5 position-relative">
                    <div class="round-image">
                    <img src="{{ asset('public/frontend/images/about/mrk_mijanur_jl.jpg') }}"alt="Prof.Dr. Mijanur Rahman"/>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <i style="color: #00B2FF;font-weight: 800;margin:15px 0;">Dept. of Marketing,DU, Dhaka</i>
                    <p style="font-size: 20px;font-weight: 500;margin:20px 0;">Prof.Dr. Mijanur Rahman</p>
                    <small style="">Cell Phone:01715408158</small>
                    <small style="">Email:emdadcou@gmail.com</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5 position-relative">
                    <div class="round-image">
                    <img src="{{ asset('public/frontend/images/about/mbi_anwar5533.jpg') }}"alt="Image"/>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <i style="color: #00B2FF;font-weight: 800;margin:15px 0;">Dept. of Microbiology, DU,Dhaka & Vice Chancellor, JUST,Jessore</i>
                    <p style="font-size: 20px;font-weight: 500;margin:20px 0;">Prof. Dr. Md. Anwar Hossain</p>
                    <small style="">Cell Phone:01715408158</small>
                    <small style="">Email:emdadcou@gmail.com</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5 position-relative">
                    <div class="round-image">
                    <img src="{{ asset('public/frontend/images/about/user-dummy.jpeg') }}"alt="Image"/>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <i style="color: #00B2FF;font-weight: 800;margin:15px 0;">Chittagong Division,Chittagong</i>
                    <p style="font-size: 20px;font-weight: 500;margin:20px 0;">Divisional Commissioner</p>
                    <small style="">Cell Phone:01715408158</small>
                    <small style="">Email:emdadcou@gmail.com</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5 position-relative">
                    <div class="round-image">
                    <img src="{{ asset('public/frontend/images/about/user-dummy.jpeg') }}"alt="Image"/>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <i style="color: #00B2FF;font-weight: 800;margin:15px 0;">Secondary and Higher Secondary Education Board, Comilla</i>
                    <p style="font-size: 20px;font-weight: 500;margin:20px 0;">Chairman</p>
                    <small style="">Cell Phone:01715408158</small>
                    <small style="">Email:emdadcou@gmail.com</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5 position-relative">
                    <div class="round-image">
                    <img src="{{ asset('public/frontend/images/about/1629097468MuhammadSamad.jpg') }}"alt="Image"/>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <i style="color: #00B2FF;font-weight: 800;margin:15px 0;">Institute of Social Welfare and Research, DU & Pro-Vice Chancellor (Administration), DU</i>
                    <p style="font-size: 20px;font-weight: 500;margin:20px 0;">Prof. Dr. Muhammad Samad</p>
                    <small style="">Cell Phone:01715408158</small>
                    <small style="">Email:emdadcou@gmail.com</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5 position-relative">
                    <div class="round-image">
                    <img src="{{ asset('public/frontend/images/about/soc_rumasoc.jpg') }}"alt="Image"/>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <i style="color: #00B2FF;font-weight: 800;margin:15px 0;">Dean, Faculty of Social Sciences, DU</i>
                    <p style="font-size: 20px;font-weight: 500;margin:20px 0;">Prof. Dr. Sadeka Halim</p>
                    <small style="">Cell Phone:01715408158</small>
                    <small style="">Email:emdadcou@gmail.com</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5 position-relative">
                    <div class="round-image">
                    <img src="{{ asset('public/frontend/images/about/mowla.png') }}"alt="Image"/>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <i style="color: #00B2FF;font-weight: 800;margin:15px 0;">Dean,Faculty Of Arts and Humanities, CoU</i>
                    <p style="font-size: 20px;font-weight: 500;margin:20px 0;">Prof. Dr. Mohammad Golam Mowla</p>
                    <small style="">Cell Phone:01715408158</small>
                    <small style="">Email:emdadcou@gmail.com</small>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5 position-relative">
                    <div class="round-image">
                    <img src="{{ asset('public/frontend/images/about/Visa_photo_Robi_sir.jpg') }}"alt="Image"/>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <i style="color: #00B2FF;font-weight: 800;margin:15px 0;">Dean,Faculty Of Social Science, CoU</i>
                    <p style="font-size: 20px;font-weight: 500;margin:20px 0;">N. M. Rabiul Awal Chowdhury</p>
                    <small style="">Cell Phone:01715408158</small>
                    <small style="">Email:emdadcou@gmail.com</small>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5 position-relative">
                    <div class="round-image">
                    <img src="{{ asset('public/frontend/images/about/r_zakir.jpg') }}"alt="Image"/>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <i style="color: #00B2FF;font-weight: 800;margin:15px 0;">Department of Economics, CoU</i>
                    <p style="font-size: 20px;font-weight: 500;margin:20px 0;">Prof. Dr. M. Zakir Saadullah Khan</p>
                    <small style="">Cell Phone:01715408158</small>
                    <small style="">Email:emdadcou@gmail.com</small>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5 position-relative">
                    <div class="round-image">
                    <img src="{{ asset('public/frontend/images/about/moksadur.jpg') }}"alt="Image"/>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <i style="color: #00B2FF;font-weight: 800;margin:15px 0;">Dept. of Management Studies, CoU</i>
                    <p style="font-size: 20px;font-weight: 500;margin:20px 0;">Prof. Dr. Shaikh Moksadur Rahman</p>
                    <small style="">Cell Phone:01715408158</small>
                    <small style="">Email:emdadcou@gmail.com</small>
                  </div>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </section>

    <section class="">
      <div class="container">
        <h3 class="my-font" style="margin-bottom: 20px;">Member <span style="color: #00B2FF;">Secretary</span></h3>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5 position-relative">
                    <div class="round-image">
                    <img src="{{ asset('public/frontend/images/about/amirul_new.png') }}"alt="Image"/>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <i style="color: #00B2FF;font-weight: 800;margin:15px 0;">Registrar (In-Charge), CoU</i>
                    <p style="font-size: 20px;font-weight: 500;margin:20px 0;">Md. Amirul Haque Chowdhury</p>
                    <small style="">Cell Phone:01715408158</small>
                    <small style="">Email:emdadcou@gmail.com</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
