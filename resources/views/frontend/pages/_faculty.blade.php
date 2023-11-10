@extends('frontend.layouts.faculty-app')

@section('title', 'Faculty of Science')


@section('content')
    <header class="fixed-top header">
      <!-- top header -->
      {{-- <div class="top-header py-2">
        <div class="container">
          <div class="row no-gutters">
            <div class="col-lg-4 text-center text-lg-left">

            </div>
            <div class="col-lg-8 text-center text-lg-right">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a
                    class="text-color p-sm-2 py-2 px-0 d-inline-block"
                    href="#"
                    >Students</a
                  >
                </li>
                <li class="list-inline-item">
                  <a
                    class="text-color p-sm-2 py-2 px-0 d-inline-block"
                    href="faculty.html"
                    >Faculty & Staff</a
                  >
                </li>
                <li class="list-inline-item">
                  <a
                    class="text-color p-sm-2 py-2 px-0 d-inline-block"
                    href="#"
                    >Alumni</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div> --}}
      <div class="container-fluid" style="background-color: #00B2FF;">
        <div class="row">
          <div class="col-12">
            <div class="container">
              <div class="row">
                <div class="col-12 text-center">
                  <a href="{{ route('home') }}">
                    <img class="img-fluid d-block mx-auto" style="max-height: 80px;" src="{{ asset('public/frontend/images/footer/comilla_un.png') }}" alt="logo"/></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- navbar -->
      <div class="navigation w-100">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-dark p-0">
            <a class="navbar-brand" href="{{ route('home') }}" style="font-weight:600"
              >FACULTY OF SCIENCE</a>
            <button
              class="navbar-toggler rounded-0"
              type="button"
              data-toggle="collapse"
              data-target="#navigation"
              aria-controls="navigation"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item active">
                  <a class="nav-link" href="">About</a>
                </li>
                <li class="nav-item @@about">
                  <a class="nav-link" href="">Academics</a>
                </li>
                <li class="nav-item @@courses">
                  <a class="nav-link" href="">Admission</a>
                </li>
                <li class="nav-item @@events">
                  <a class="nav-link" href="">Offices</a>
                </li>
                <li class="nav-item @@blog">
                  <a class="nav-link" href="">Research</a>
                </li>
                <li class="nav-item @@contact" style="white-space: nowrap;">
                  <a class="nav-link" href="">Campus Life</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- /header -->
    <!-- Modal -->
    <div
      class="modal fade"
      id="signupModal"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
          <div class="modal-header border-0">
            <h3>Register</h3>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="login">
              <form action="#" class="row">
                <div class="col-12">
                  <input
                    type="text"
                    class="form-control mb-3"
                    id="signupPhone"
                    name="signupPhone"
                    placeholder="Phone"
                  />
                </div>
                <div class="col-12">
                  <input
                    type="text"
                    class="form-control mb-3"
                    id="signupName"
                    name="signupName"
                    placeholder="Name"
                  />
                </div>
                <div class="col-12">
                  <input
                    type="email"
                    class="form-control mb-3"
                    id="signupEmail"
                    name="signupEmail"
                    placeholder="Email"
                  />
                </div>
                <div class="col-12">
                  <input
                    type="password"
                    class="form-control mb-3"
                    id="signupPassword"
                    name="signupPassword"
                    placeholder="Password"
                  />
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">SIGN UP</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="loginModal"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
          <div class="modal-header border-0">
            <h3>Login</h3>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="#" class="row">
              <div class="col-12">
                <input
                  type="text"
                  class="form-control mb-3"
                  id="loginPhone"
                  name="loginPhone"
                  placeholder="Phone"
                />
              </div>
              <div class="col-12">
                <input
                  type="text"
                  class="form-control mb-3"
                  id="loginName"
                  name="loginName"
                  placeholder="Name"
                />
              </div>
              <div class="col-12">
                <input
                  type="password"
                  class="form-control mb-3"
                  id="loginPassword"
                  name="loginPassword"
                  placeholder="Password"
                />
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">LOGIN</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- hero slider -->
    {{-- <section
      class="hero-section overlay bg-cover"
      data-background="{{ asset('public/frontend/images/faculty/science/banner1.png') }}">
      <div class="container">
        <div class="hero-slider">
          <!-- slider item -->
          <div class="hero-slider-item">
            <div class="row">
              <div class="col-md-8 text-center">
                <h1
                  class="text-white"
                  data-animation-out="fadeInRight"
                  data-delay-out=".5"
                  data-duration-in=".3"
                  data-animation-in="fadeInLeft"
                  data-delay-in=".1"
                >
                  Welcome to 
                <span style="color: #00b2ff">Science Faculty</span>
                </h1>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section> --}}
    <!-- /hero slider -->
    <!-- hero slider -->
    <section>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('public/frontend/images/banner/save_1.jpg') }}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="animated fadeInRightBig">Welcome to <span style="color: #00b2ff">Science Faculty</span></h1>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('public/frontend/images/banner/save_2.jpg') }}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="animated fadeInUpBig">Welcome to <span style="color: #00b2ff">Science Faculty</span></h1>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('public/frontend/images/banner/save_3.jpg') }}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="animated fadeInDownBig">Welcome to <span style="color: #00b2ff">Science Faculty</span></h1>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <!-- /hero slider -->



    <section class="about">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4 mb-md-0">
            <div class="round-image">
              <img
                class="img-fluid w-100"
                src="{{ asset('public/frontend/images/about/moyeen.png') }}"
                alt="about image"
              />
            </div>
          </div>
          <div class="col-md-8">
            <h2>Message from the <span class="text-primary">Dean</span> Faculty Of Science </h2>
            <p>
              Comilla University (Bengali: কুমিল্লা বিশ্ববিদ্যালয়) is a public university located at Kotbari, Comilla, Bangladesh. The university was constructed on 50 acres (200,000 m2) of land at Lalmai Bihar, Moynamoti. Comilla University is affiliated by University Grants Commission, Bangladesh.
            </p>
            <p>
              Comilla University (Bengali: কুমিল্লা বিশ্ববিদ্যালয়) is a public university located at Kotbari, Comilla, Bangladesh. The university was constructed on 50 acres (200,000 m2) of land at Lalmai Bihar, Moynamoti. Comilla University is affiliated by University Grants Commission, Bangladesh.
            </p>
            <div class="d-inline">
            <h4>Professor Dr. Khalifa Mohammad Helal</h4>
            <b class="text-primary">Dean</b> <br />
            <a href="about-vc.html" class="btn btn-primary mt-2 float-right">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="departments">
      <div class="container">
        <h3 class="text-left text-white mb-4">Departments</h3>
        <div class="row">
          <div class="col-md-3 col-sm-6 mb-4">
            <div class="inside d-flex">
              <img  class="mr-2" src="{{ asset('public/frontend/images/faculty/science/icon1.png') }}" alt="">
              <div class="content">
                <h4 class="mb-0 text-white">Mathematics</h4>
                <p class="mb-0">78 Courses</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 mb-4">
            <div class="inside d-flex">
              <img  class="mr-2" src="{{ asset('public/frontend/images/faculty/science/icon1.png') }}" alt="">
              <div class="content">
                <h4 class="mb-0 text-white">Physics</h4>
                <p class="mb-0">78 Courses</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 mb-4">
            <div class="inside d-flex">
              <img  class="mr-2" src="{{ asset('public/frontend/images/faculty/science/icon1.png') }}" alt="">
              <div class="content">
                <h4 class="mb-0 text-white">Statistics</h4>
                <p class="mb-0">78 Courses</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 mb-4">
            <div class="inside d-flex">
              <img  class="mr-2" src="{{ asset('public/frontend/images/faculty/science/icon1.png') }}" alt="">
              <div class="content">
                <h4 class="mb-0 text-white">Chemistry</h4>
                <p class="mb-0">78 Courses</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 mb-4">
            <div class="inside d-flex">
              <img  class="mr-2" src="{{ asset('public/frontend/images/faculty/science/icon1.png') }}" alt="">
              <div class="content">
                <h4 class="mb-0 text-white">Pharmacy</h4>
                <p class="mb-0">78 Courses</p>
              </div>
            </div>
          </div>
          {{-- <div class="col-md-3 col-sm-6 mb-4">
            <div class="inside d-flex">
              <img  class="mr-2" src="{{ asset('public/frontend/images/faculty/science/icon1.png') }}" alt="">
              <div class="content">
                <h4 class="mb-0 text-white">Biomedical Physics & Technology</h4>
                <p class="mb-0">78 Courses</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 mb-4">
            <div class="inside d-flex">
              <img  class="mr-2" src="{{ asset('public/frontend/images/faculty/science/icon1.png') }}" alt="">
              <div class="content">
                <h4 class="mb-0 text-white">Applied Mathematics</h4>
                <p class="mb-0">78 Courses</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 mb-4">
            <div class="inside d-flex">
              <img  class="mr-2" src="{{ asset('public/frontend/images/faculty/science/icon1.png') }}" alt="">
              <div class="content">

               
                <h4 class="mb-0 text-white">Theoretical and Computational Chemistry</h4>
                <p class="mb-0">78 Courses</p>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </section>
  
    
    <section class="notice-events">
      <div class="container">
        <div class="row">
           <div class="col-md-8">
            <h2 style="font-family: 'Work Sans';
            font-style: normal;
            font-weight: 600;
            font-size: 39.06px;
            line-height: 123.6%;
            color: #373737;"> <span>Research  </span><span class="text-primary"> Activities</span> </h2 >
            <div class="row">
               <div class="col-md-6">
                <div class="img-notice">
                  <img src="{{ asset('public/frontend/images/events/event-1.jpg') }}" alt="">
                </div>
                <div class="notice-info">
                  <p style="font-family: 'Work Sans';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 10px;
                  line-height: 100.9%;
                  color: #393939;
                  margin-bottom: 5px;
                  margin-top: 5px;">Craig Bator - 27 Dec 2020</p>
                  <h4 style="font-family: 'Oswald';
                  font-style: normal;
                  font-weight: bold;
                  font-size: 18px;
                  line-height: 27px;
                  color: #393939">Now Is the Time to Think About Your Small  Business Success</h4>
                  <p class="text-justify" style="font-family: 'Work Sans';
                  font-style: normal;
                  font-weight: 200;
                  font-size: 14px;
                  line-height: 111.1%;
                  color: rgba(57, 57, 57, 0.6);">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, nihil! Lorem ipsum laborum consequuntur. Ipsum quibusdam itaque animi officiis sed aut.</p>
                </div>
               </div>
               <div class="col-md-6">
                  <div class="notice-info-sm pb-2">
                   <div class="img-sm">
                    <img src="{{ asset('public/frontend/images/events/event-2.jpg') }}" alt="" >
                   </div>   
                   <div class="info-sm">
                    <p style="font-family: 'Work Sans';
                    font-style: normal;
                    font-weight: 400;
                    font-size: 8px;
                    line-height: 100.9%;
                    margin-bottom: 5px;">Craig Bator - 27 Dec 2020</p>
                    <h4 style="font-family: 'Oswald';
                    font-style: normal;
                    font-weight: bold;
                    font-size: 15px;
                    line-height: 22px;
                    text-transform: capitalize;
                    color: #393939;">Penn’s expanding political climate gears up fo
                      2020 election</h4>
                   </div>   
                  </div>

                  <div class="notice-info-sm pb-2">
                    <div class="img-sm">
                     <img src="{{ asset('public/frontend/images/events/event-3.jpg') }}" alt="" >
                    </div>   
                    <div class="info-sm">
                     <p style="font-family: 'Work Sans';
                     font-style: normal;
                     font-weight: 400;
                     font-size: 8px;
                     line-height: 100.9%;
                     margin-bottom: 5px;">Craig Bator - 27 Dec 2020</p>
                     <h4 style="font-family: 'Oswald';
                     font-style: normal;
                     font-weight: bold;
                     font-size: 15px;
                     line-height: 22px;
                     text-transform: capitalize;
                     color: #393939;">Things to Look For in a Financial Trading 
                      Platform</h4>
                    </div>   
                   </div>

                   
                   <div class="notice-info-sm pb-2">
                    <div class="img-sm">
                     <img src="{{ asset('public/frontend/images/events/Image@2x.png') }}" alt="" >
                    </div>   
                    <div class="info-sm">
                     <p style="font-family: 'Work Sans';
                     font-style: normal;
                     font-weight: 400;
                     font-size: 8px;
                     line-height: 100.9%;
                     margin-bottom: 5px;">Craig Bator - 27 Dec 2020</p>
                     <h4 style="font-family: 'Oswald';
                     font-style: normal;
                     font-weight: bold;
                     font-size: 15px;
                     line-height: 22px;
                     text-transform: capitalize;
                     color: #393939;">The only thing that overcomes hard luck is hard
                      work</h4>
                    </div>   
                   </div>

                   
                   <div class="notice-info-sm pb-2">
                    <div class="img-sm">
                     <img src="{{ asset('public/frontend/images/events/Image.png') }}" alt="" >
                    </div>   
                    <div class="info-sm">
                     <p style="font-family: 'Work Sans';
                     font-style: normal;
                     font-weight: 400;
                     font-size: 8px;
                     line-height: 100.9%;
                     margin-bottom: 5px;">Craig Bator - 27 Dec 2020</p>
                     <h4 style="font-family: 'Oswald';
                     font-style: normal;
                     font-weight: bold;
                     font-size: 15px;
                     line-height: 22px;
                     text-transform: capitalize;
                     color: #393939;">Success is not a good teacher failure makes you
                      humble</h4>
                    </div>   
                   </div>
                   <div class="notice-info-sm pb-2">
                    <div class="img-sm">
                     <img src="{{ asset('public/frontend/images/events/Image@2x.png') }}" alt="" >
                    </div>   
                    <div class="info-sm">
                     <p style="font-family: 'Work Sans';
                     font-style: normal;
                     font-weight: 400;
                     font-size: 8px;
                     line-height: 100.9%;
                     margin-bottom: 5px;">Craig Bator - 27 Dec 2020</p>
                     <h4 style="font-family: 'Oswald';
                     font-style: normal;
                     font-weight: bold;
                     font-size: 15px;
                     line-height: 22px;
                     text-transform: capitalize;
                     color: #393939;">At Value-Focused Hotels, the Free Breakfast Gets
Bigger</h4>
                    </div>   
                   </div>
                   
                  
               </div>
            </div>
           </div>
           <div class="col-md-4">
            <h2 class="text-white bg-primary px-3 text-uppercase" style="letter-spacing: -2px;font-family: 'Oswald';
            font-style: normal;
            font-weight: 500;
            font-size: 24px;
            line-height: 36px;
            text-transform: uppercase;
            color: #FFFFFF;">Notices</h2>

            <div class="notice-info-sm pb-2">
              <div class="img-sm">
               <img src="{{ asset('public/frontend/images/events/event-single.jpg') }}" alt="" >
              </div>   
              <div class="info-sm">
               <p style="font-family: 'Work Sans';
               font-style: normal;
               font-weight: 400;
               font-size: 8px;
               line-height: 100.9%;
               margin-bottom: 10px;">Craig Bator - 27 Dec 2020</p>
               <h4 style="font-family: 'Oswald';
               font-style: normal;
               font-weight: 520;
               font-size: 15px;
               line-height: 111.9%;">বিজ্ঞপ্তি ২০২১-২০২২ শিক্ষাবর্ষে স্নাতক
 (সম্মান) ১ম বর্ষের ভর্তি পরীক্ষা উল্লেখিত
 সময়সূচি অনুযায়ী অনুষ্ঠিত হওয়া প্রসঙ্গে</h4>
              </div>   
            </div>

            <div class="notice-info-sm pb-2">
              <div class="img-sm">
               <img src="{{ asset('public/frontend/images/events/Image (1).png') }}" alt="" >
              </div>   
              <div class="info-sm">
               <p style="font-family: 'Work Sans';
               font-style: normal;
               font-weight: 400;
               font-size: 8px;
               line-height: 100.9%;
               margin-bottom: 5px;">Craig Bator - 27 Dec 2020</p>
               <h4 style="font-family: 'Oswald';
               font-style: normal;
               font-weight: 400;
               font-size: 15px;
               line-height: 111.9%;
               margin-bottom: 10px;">বিজ্ঞপ্তি (সরকারি ব্যয়ে কৃচ্ছ সাধন এবং 
                বিদ্যুৎ ও জ্বালানির সাশ্রয়ী ব্যবহার প্রসঙ্গে)</h4>
              </div>   
            </div>
            <div class="notice-info-sm pb-2">
              <div class="img-sm">
               <img src="{{ asset('public/frontend/images/events/Image (4).png') }}" alt="" >
              </div>   
              <div class="info-sm">
               <p style="font-family: 'Work Sans';
               font-style: normal;
               font-weight: 400;
               font-size: 8px;
               line-height: 100.9%;
               margin-bottom: 10px;">Craig Bator - 27 Dec 2020</p>
               <h4 style="font-family: 'Oswald';
               font-style: normal;
               font-weight: 400;
               font-size: 15px;
               line-height: 111.9%;">নোটিশ ( নবনির্মিত “শেখ হাসিনা হল ”
                এ সিট প্রাপ্তির আবেদন প্রসঙ্গে )</h4>
              </div>   
            </div>
            <div class="notice-info-sm pb-2">
              <div class="img-sm">
               <img src="{{ asset('public/frontend/images/events/Image (5).png') }}" alt="" >
              </div>   
              <div class="info-sm">
               <p style="font-family: 'Work Sans';
               font-style: normal;
               font-weight: 400;
               font-size: 8px;
               line-height: 100.9%;
               margin-bottom: 10px;">Craig Bator - 27 Dec 2020</p>
               <h4 style="font-family: 'Oswald';
               font-style: normal;
               font-weight: 400;
               font-size: 15px;
               line-height: 111.9%;">প্রেস বিজ্ঞপ্তি (কুবিতে “মানব পাচার রোধে 
                সচেতনতা বৃদ্ধি ও করণীয়” শীর্ষক 
                সেমিনার অনুষ্ঠিত)</h4>
              </div>   
            </div>
            <div class="notice-info-sm pb-2">
              <div class="img-sm">
               <img src="{{ asset('public/frontend/images/events/Image (5).png') }}" alt="" >
              </div>   
              <div class="info-sm">
               <p style="font-family: 'Work Sans';
               font-style: normal;
               font-weight: 400;
               font-size: 8px;
               line-height: 100.9%;
               margin-bottom: 10px;">Craig Bator - 27 Dec 2020</p>
               <h4 style="font-family: 'Oswald';
               font-style: normal;
               font-weight: 400;
               font-size: 15px;
               line-height: 111.9%;">বিজ্ঞপ্তি (পদ্মা সেতু উদ্বোধন উপলক্ষ্যে 
            গৃহীত কর্মসূচি/সিদ্ধান্ত)</h4>
              </div>   
            </div>
            
           </div>
        </div>
      </div>
    </section>

    <section class="contact-us pt-4  pb-4">
      <div class="container">
       <h3 class="text-left">Latest  <span class="text-primary">Photos</h3>
       </div>
       <img src="{{ asset('public/frontend/images/faculty/science//Frame75.png') }}" width="100%" alt="">
   </section>

    <section class="contact-us pt-4  pb-4">
      <div class="container">
    <div class="row">
      <div class="col">
        <h3 class="my-font my-5">Feel <span class="text-primary">Free to Contact </span> With Us</h3>
      </div>
    </div>
    <div class="row">
       <div class="col-md-4">
           <div class="card contact-card">
               <div class="card-body">
                 <div class="inner-items-contactas">
                  <div class="row">
                    <div class="col-4 p-0"><img class="img-fluid d-block" src="{{ asset('public/frontend/images/icons/envelop.png') }}" alt=""></div>
                    <div class="col-8" style="margin-top: 35px; margin-left: -25px;"><h5 class="my-font text-primary">Email</h5></div>
                  </div>
                 </div>
                 <p class="my-font">Support87@gmail.com</p>
                 <p class="my-font">ijkuiu874@gmail.com</p>
               </div>
           </div>
       </div>
       <div class="col-md-4">
           <div class="card contact-card">
               <div class="card-body">
                   <div class="inner-items-contactas">
                        <div class="row">
                          <div class="col-4 p-0"><img class="img-fluid d-block" src="{{ asset('public/frontend/images/icons/call.png') }}" alt=""></div>
                          <div class="col-8" style="margin-top: 35px; margin-left: -25px;"><h5 class="my-font">Call Us</h5></div>
                        </div>
                    </div>
                 <p class="my-font">Support87@gmail.com</p>
                 <p class="my-font">ijkuiu874@gmail.com</p>
               </div>
           </div>
       </div>
       <div class="col-md-4">
           <div class="card contact-card">
               <div class="card-body">
                  <div class="inner-items-contactas">
                    <div class="row">
                      <div class="col-4 p-0"><img class="img-fluid d-block" src="{{ asset('public/frontend/images/icons/location.png') }}" alt=""></div>
                      <div class="col-8" style="margin-top: 35px; margin-left: -25px;"><h5 class="my-font text-primary">Location</h5></div>
                    </div>
                  </div>
                 <p class="my-font">Support87@gmail.com</p>
                 <p class="my-font">ijkuiu874@gmail.com</p>
               </div>
           </div>
       </div>
    </div>
  </div>
   </section>

    <style>.mb-3, .my-3 {
      margin-bottom: 0.3rem!important;
    }</style>
    <!-- footer -->
    <footer>
      <!-- footer content -->
      <div class="footer bg-footer section border-bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
              <ul class="list-unstyled">
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">Approved NOCs</a>
                </li>
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">Facts and Acts</a>
                </li>
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">News & Events</a>
                </li>
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">Department/Institute</a>
                </li>
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">Notice Board</a>
                </li>
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">Directories</a>
                </li>
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">Academic Calendar</a>
                </li>
              </ul>
            </div>
            <!-- links -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
              <ul class="list-unstyled">
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">Approved NOCs</a>
                </li>
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">Facts and Acts</a>
                </li>
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">News & Events</a>
                </li>
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">Department/Institute</a>
                </li>
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">Notice Board</a>
                </li>
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">Directories</a>
                </li>
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">Academic Calendar</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0 footer-img">
              <!-- logo -->
              <a class="logo-footer" href="">
                <img
                  class="img-fluid mb-3"
                  src="{{ asset('public/frontend/images/footer/footer.png') }}"
                  alt="logo"
                />
              </a>
              <h4 class="text-white text-uppercase">Comilla University</h4>
              <ul class="">
                <li class="list-inline-item">
                  <a style="background: white;"
                    class="d-inline-block p-2"
                    href=""
                    ><i class="ti-facebook text-primary"></i
                  ></a>
                </li>
                <li class="list-inline-item">
                  <a style="background: white;"
                    class="d-inline-block p-2"
                    href=""
                    ><i class="ti-twitter-alt text-primary"></i
                  ></a>
                </li>
                <li class="list-inline-item">
                  <a style="background: white;"
                    class="d-inline-block p-2"
                    href=""
                    ><i class="ti-github text-primary"></i
                  ></a>
                </li>
                <li class="list-inline-item">
                  <a style="background: white;"
                    class="d-inline-block p-2"
                    href=""
                    ><i class="ti-instagram text-primary"></i
                  ></a>
                </li>
              </ul>
            </div>
            <!-- company -->
            <!-- support -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
              <ul class="list-unstyled">
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">Approved NOCs</a>
                </li>
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">Facts and Acts</a>
                </li>
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">News & Events</a>
                </li>
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">Department/Institute</a>
                </li>
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">Notice Board</a>
                </li>
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">Directories</a>
                </li>
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">Academic Calendar</a>
                </li>
              </ul>
            </div>
            <!-- support -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
              <ul class="list-unstyled">
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">Approved NOCs</a>
                </li>
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">Facts and Acts</a>
                </li>
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">News & Events</a>
                </li>
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">Department/Institute</a>
                </li>
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">Notice Board</a>
                </li>
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">Directories</a>
                </li>
                <li class="mb-3">
                  <a class="text-color" href="" style="font-family: 'Rubik';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 150%;
                  color: #FFFFFF;">Academic Calendar</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <style>
        .pt-4, .py-4 {
          padding-top: 1rem!important;
      }
      </style>
      <!-- copyright -->
      <div class="copyright py-4" style="background-color: #00B2FF;
      color: #FFFFFF;height: 60px;">
        <div class="container">
          <div class="row">
            <div class="col-sm-7 text-sm-left text-center">
              <p class="mb-0">
                Copyright &copy;
                <script>
                  var CurrentYear = new Date().getFullYear();
                  document.write(CurrentYear);
                </script>
                Copyright 2021. All Right Reserved By Comilla University
                <!-- <a href="#" class="text-muted">________NANOSOFT_________</a> -->
              </p>
            </div>
            <!-- <div class="col-sm-5 text-sm-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://facebook.com/themefisher/"><i class="ti-facebook text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://twitter.com/themefisher"><i class="ti-twitter-alt text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://github.com/themefisher"><i class="ti-github text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://instagram.com/themefisher/"><i class="ti-instagram text-primary"></i></a></li>
          </ul>
        </div> -->
          </div>
        </div>
      </div>
    </footer>
    @endsection
