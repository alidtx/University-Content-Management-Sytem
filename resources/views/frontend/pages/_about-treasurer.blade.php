@extends('frontend.layouts.app')

@section('title', 'About VC')

@section('my_style')
	<style>
		.mb-3, .my-3 {
			margin-bottom: 0.3rem!important;
		}
	</style>
@endsection

@section('content')


<section class="counter-numbers" style="background: url({{ asset('public/frontend/images/banner.png') }}); background-position: center center; background-size:cover;">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3 class="text-center font_four text-white">Professor Dr. Md. Ashaduzzaman</h3> 
      </div>
    </div>
  </div>
</section>


<section class="about-vc">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 mb-md-0">
        <div class="round-image">
          <img
          class="img-fluid w-100"
          src="{{ asset('public/frontend/images/treasurer.jpg') }}" onerror="this.onerror=null;this.src='{{ asset('public/frontend/cuimages/user-dummy.jpeg') }}';"
          alt="about image"
          />
        </div>
      </div>
      <div class="col-md-8">
        <h2>Professor Dr. Md. Ashaduzzaman</h2>
        <h2><span class="text-primary">Treasurer</span></h2>
        <p>
          Comilla University (Bengali: কুমিল্লা বিশ্ববিদ্যালয়) is a public university located at Kotbari, Comilla, Bangladesh. The university was constructed on 50 acres (200,000 m2) of land at Lalmai Bihar, Moynamoti. Comilla University is affiliated by University Grants Commission, Bangladesh.
        </p>
        <p>
          Comilla University (Bengali: কুমিল্লা বিশ্ববিদ্যালয়) is a public university located at Kotbari, Comilla, Bangladesh. The university was constructed on 50 acres (200,000 m2) of land at Lalmai Bihar, Moynamoti. Comilla University is affiliated by University Grants Commission, Bangladesh.
        </p>
      </div>
    </div>
  </div>
</section>

<div id="accordion">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-12 col-sm-6" style="background-color: #00B2FF; margin-top: 30px; z-index: 99;">
            <div class="row">
              <div class="col-10 offset-0 offset-sm-2">
                <button class="btn btn-link text-white font_two py-3" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size:22px;">
                Biography
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card" style="border:none;">
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <p class="paragraph">Professor A.F.M. Abdul Moyeen has joined as the 7th Vice Chancellor of Comilla University.
              He has been appointed as the VC of the university by the President of Bangladesh and Chancellor of the Universities for a four-year term, on January 16. <br> <br>
              
              After joining at 10:30am, he has placed floral wreaths at the portrait of the Father of The Nation Bangabandhu Sheikh Mujibur Rahman and Shaheed Minar.<br> <br>
              
              Later in a brief speech, he said that he would serve as the university's VC for the betterment of the motherland and focus on research and education.<br> <br>
              
              Dr A.F.M. Abdul Moyeen was a professor at Management department of the University of Dhaka. He had pursued his Ph.D in Strategic Management from the University of Starling at United Kingdom. He has served as Ph.D fellow at Australian National University and published at least 38 publications at various domestic and international journals.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="card" style="border:none;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-12 col-sm-6" style="background-color: #00B2FF; margin-top: 30px; z-index: 99;">
              <div class="row">
                <div class="col-10 offset-0 offset-sm-2">
                  <button class="btn btn-link text-white font_two py-3" data-toggle="collapse" data-target="#collapseNewTen" aria-expanded="false" aria-controls="collapseNewTen" style="font-size:22px;">
                  Education
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div id="collapseNewTen" class="collapse" aria-labelledby="headingNewTen" data-parent="#accordion">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <section id="tabs">
                <div class="container">
                  <div class="row">
                    <div class="col-xs-12 ">
                      <p>School of Management, University of Stirling <br>
                        Doctor of Philosophy (Ph.D.), Strategic Management <br>
                        1993 - 1997
                      </p>
                      <p>
                        University of Dhaka <br>
                        B.Com and Master's degree in Management, Management <br>
                        1981 - 19851981 - 1985 <br>
                        Grade: 1st Class 2nd Position <br>
                      </p>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card" style="border:none;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-12 col-sm-6" style="background-color: #00B2FF; margin-top: 30px; z-index: 99;">
              <div class="row">
                <div class="col-10 offset-0 offset-sm-2">
                  <button class="btn btn-link text-white font_two py-3" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size:22px;">
                  Experience
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <section id="tabs">
                <div class="container">
                  <div class="row">
                    <div class="col-xs-12 ">
                      <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="nav-professional_experience-tab" data-toggle="tab" href="#nav-professional_experience" role="tab" aria-controls="nav-professional_experience" aria-selected="true">Professional Experience</a>
                          <a class="nav-item nav-link" id="nav-administrative_experience-tab" data-toggle="tab" href="#nav-administrative_experience" role="tab" aria-controls="nav-administrative_experience" aria-selected="false">Administrative Experience</a>
                        </div>
                      </nav>
                      <div class="tab-content p-4" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-professional_experience" role="tabpanel" aria-labelledby="nav-professional_experience-tab">
                          <p>School of Management, University of Stirling <br>
                            Doctor of Philosophy (Ph.D.), Strategic Management <br>
                            1993 - 1997
                          </p>
                          <p>
                            University of Dhaka <br>
                            B.Com and Master's degree in Management, Management <br>
                            1981 - 19851981 - 1985 <br>
                            Grade: 1st Class 2nd Position <br>
                          </p>
                        </div>
                        <div class="tab-pane fade" id="nav-administrative_experience" role="tabpanel" aria-labelledby="nav-administrative_experience-tab">
                          <p>======</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card" style="border:none;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-12 col-sm-6" style="background-color: #00B2FF; margin-top: 30px; z-index: 99;">
              <div class="row">
                <div class="col-10 offset-0 offset-sm-2">
                  <button class="btn btn-link text-white font_two py-3" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"style="font-size:22px;">
                  Publications
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <!-- Tabs -->
              <section id="tabs-publication">
                <div class="container">
                  <div class="row">
                    <div class="col-xs-12 ">
                      <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab-publication" role="tablist">
                          <a class="nav-item nav-link active" id="nav-publish_book-tab" data-toggle="tab" href="#nav-publish_book" role="tab" aria-controls="nav-publish_book" aria-selected="true">Publish Book</a>
                          <a class="nav-item nav-link" id="nav-publish_journal-tab" data-toggle="tab" href="#nav-publish_journal" role="tab" aria-controls="nav-publish_journal" aria-selected="false">Publish Journal</a>
                          <a class="nav-item nav-link" id="nav-conference-tab" data-toggle="tab" href="#nav-conference" role="tab" aria-controls="nav-conference" aria-selected="false">Conference & Research Seminar</a>
                        </div>
                      </nav>
                      <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent-publication">
                        <div class="tab-pane fade show active" id="nav-publish_book" role="tabpanel" aria-labelledby="nav-publish_book-tab">
                          <p>=====</p>
                        </div>
                        <div class="tab-pane fade" id="nav-publish_journal" role="tabpanel" aria-labelledby="nav-publish_journal-tab">
                          <div class="publication">
                            <b>Corporate social responsibility in regional small and medium-sized enterprises in Australia<b>
                            <p>abdul. Moyeen, jerry courvisanos <br>
                            Australasian journal of Regional studies 18 (3), 364-391  55  2012</p>
                          </div>
                          <div class="publication">
                            <b>Promoting CSR to foster sustainable development: Attitudes and perceptions of managers in a developing country<b>
                            <p>A Moyeen, B West <br>
                            Asia-Pacific Journal of Business Administration 6 (2), 97-115 47  2014</p>
                          </div>
                          <div class="publication">
                            <b>Human resource management practices in business enterprises in Bangladesh<b>
                            <p> A Moyeen, A Huq <br>
                            Journal of Business Studies 22 (2), 263-270 27  2001</p>
                          </div>
                          <div class="publication">
                            <b>Gender integration in enterprise development programmes<b>
                            <p>A Huq, A Moyeen <br>
                            Women's Studies International Forum 34 (4), 320-328 19  2011</p>
                          </div>
                          <div class="publication">
                            <b>A content analysis of CSR research in hotel industry, 2006–2017<b>
                            <p>A Moyeen, S Kamal, M Yousuf <br>
                            Responsibility and governance, 163-179  14  2019</p>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="nav-conference" role="tabpanel" aria-labelledby="nav-conference-tab">
                          <p>====</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


{{-- <section class="biography">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <h2 class="title">Biography</h2>
          <p class="paragraph">Professor A.F.M. Abdul Moyeen has joined as the 7th Vice Chancellor of Comilla University.
            He has been appointed as the VC of the university by the President of Bangladesh and Chancellor of the Universities for a four-year term, on January 16. <br> <br>
            
            After joining at 10:30am, he has placed floral wreaths at the portrait of the Father of The Nation Bangabandhu Sheikh Mujibur Rahman and Shaheed Minar.<br> <br>
            
            Later in a brief speech, he said that he would serve as the university's VC for the betterment of the motherland and focus on research and education.<br> <br>
            
          Dr A.F.M. Abdul Moyeen was a professor at Management department of the University of Dhaka. He had pursued his Ph.D in Strategic Management from the University of Starling at United Kingdom. He has served as Ph.D fellow at Australian National University and published at least 38 publications at various domestic and international journals.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="biography">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <h2 class="title">Education</h2>
          <p>School of Management, University of Stirling <br>
            Doctor of Philosophy (Ph.D.), Strategic Management <br>
            1993 - 1997
          </p>
          <p>
            University of Dhaka <br>
            B.Com and Master's degree in Management, Management <br>
            1981 - 19851981 - 1985 <br>
            Grade: 1st Class 2nd Position <br>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="biography">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <h2 class="title">Experience</h2>
          <p>School of Management, University of Stirling <br>
            Doctor of Philosophy (Ph.D.), Strategic Management <br>
            1993 - 1997
          </p>
          <p>
            University of Dhaka <br>
            B.Com and Master's degree in Management, Management <br>
            1981 - 19851981 - 1985 <br>
            Grade: 1st Class 2nd Position <br>
          </p>
        </div>
      </div>
    </div>
  </div>
</section> 
<section class="biography">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <h2 class="title">Publications</h2>
          <div class="publication">
            <b>Corporate social responsibility in regional small and medium-sized enterprises in Australia<b>
            <p>abdul. Moyeen, jerry courvisanos <br>
            Australasian journal of Regional studies 18 (3), 364-391  55  2012</p>
          </div>
          <div class="publication">
            <b>Promoting CSR to foster sustainable development: Attitudes and perceptions of managers in a developing country<b>
            <p>A Moyeen, B West <br>
            Asia-Pacific Journal of Business Administration 6 (2), 97-115 47  2014</p>
          </div>
          <div class="publication">
            <b>Human resource management practices in business enterprises in Bangladesh<b>
            <p> A Moyeen, A Huq <br>
            Journal of Business Studies 22 (2), 263-270 27  2001</p>
          </div>
          <div class="publication">
            <b>Gender integration in enterprise development programmes<b>
            <p>A Huq, A Moyeen <br>
            Women's Studies International Forum 34 (4), 320-328 19  2011</p>
          </div>
          <div class="publication">
            <b>A content analysis of CSR research in hotel industry, 2006–2017<b>
            <p>A Moyeen, S Kamal, M Yousuf <br>
            Responsibility and governance, 163-179  14  2019</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>--}}

<section class="office-vice-chancelor my-5">
  <div class="container">
    <h3>Office of the <span class="text-primary">Vice Chancellor</span></h3>
    <div class="row">
      <div class="col-md-6">
        <div class="card my-3">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <h5 class="text-primary">Office Assistant</h5>
                <h4>Mr. Jone Dow</h4>
                <p>
                  Cell Phone:01715 222 333 <br>
                  Email:emdadcou@gmail.com
                </p>
              </div>
              <div class="offset-1 col-md-5 position-relative">
                <div class="round-image">
                  <img src="{{ asset('public/frontend/images/about/user-dummy.jpeg') }}" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card my-3">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <h5 class="text-primary">Office Assistant </h5>
                <h4>Gerardo S. Stringer</h4>
                <p>
                  Cell Phone:01715 222 333 <br>
                  Email:emdadcou@gmail.com
                </p>
              </div>
              <div class="col-md-5 position-relative">
                <div class="round-image">
                  <img src="{{ asset('public/frontend/images/about/user-dummy.jpeg') }}"alt=""/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="contact-us my-5">
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


@endsection