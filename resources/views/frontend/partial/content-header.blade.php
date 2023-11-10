
    <section class="top-banner shadow dark" style="background: url({{ @$bannerImageLink ? asset('public/frontend/images/banner/'.@$bannerImageLink) : asset('public/frontend/images/banner/faculty.png') }})">
        <div class="container">
          <div class="row">
            <div class="col">
              <h3 class="text-center text-white" >{{ $pageTitle }}</h3>
            </div>
          </div>
        </div>
      </section>
