
<!-- header -->
<header class="fixed-top header shadow-sm">
  <!-- top header -->
  <div class="top-header py-2">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a class="text-color p-sm-2 py-2 px-0 d-inline-block" href="#">Students</a>
            </li>
            <li class="list-inline-item">
              <a class="text-color p-sm-2 py-2 px-0 d-inline-block" href="{{ route('allfacility') }}" >Faculty & Staff</a>
            </li>
            <li class="list-inline-item">
              <a class="text-color p-sm-2 py-2 px-0 d-inline-block" href="#">Alumni</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <a class="navbar-brand" href="{{ route('home') }}"
          ><img class="img-fluid" src="{{ asset('public/frontend/images/left.png') }}" alt="logo" /></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        {{-- <span class="navbar-toggler-icon"></span> --}}
        <i class="ti-menu text-black"></i>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            @php
            $where[] = ['menu_type','=','none'];
                $parents = DB::table('frontend_menus')->where('status',1)->where('parent_id','0')->where($where)->orderBy('sort_order','asc')->take(5)->get();
            @endphp
            @foreach($parents as $parent)
              <li class="nav-item dropdown menu-area">
                <a class="nav-link dropdown-toggle" id="mega-one" role="button" data-toggle="dropdown" {{ $loop->iteration == 1 ? 'active': '' }} href="{{menuUrl($parent)}}">{{ $parent->title_en }}</a>
                <div class="dropdown-menu mega-area" aria-labelledby="mega-one">

                  <div class="row row-cols-1 row-cols-md-4">
                    @php
                    $subparents = DB::table('frontend_menus')->where('status',1)->where('parent_id',$parent->rand_id)->orderBy('sort_order','asc')->get();
                    @endphp
                    @foreach($subparents as $subparent)
                    <div class="col">
                       <p class="m-3 font-weight-bold"> {{ $subparent->title_en }}</p>
                       @php
                          $lastparents = DB::table('frontend_menus')->where('status',1)->where('parent_id',$subparent->rand_id)->orderBy('sort_order','asc')->get();
                       @endphp
                       <ul class="menu_list ml-3">
                         @foreach($lastparents as $lastparent)
                         <li>
                            <a href="{{menuUrl($lastparent)}}">{{ $lastparent->title_en }}</a>
                         </li>
                         @endforeach
                       </ul>
                    </div>
                    @endforeach
                    <div class="col d-none d-md-block">
                      <img class="img-fluid mt-3" src="{{ asset('public/frontend/images/activity2.png') }}" alt="">
                    </div>
                  </div>

                </div>
              </li>
            @endforeach
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->


<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content rounded-0 border-0 p-4">
      <div class="modal-header border-0">
        <h3>Register</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
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
<!-- Modal -->
