@extends('frontend.layouts.index')
@section('content')
@include('frontend.layouts.header')

<style>
    /*! CSS Used from: https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css */
*,::after,::before{box-sizing:border-box;}
nav{display:block;}
ul{margin-top:0;margin-bottom:1rem;}
a{color:#007bff;text-decoration:none;background-color:transparent;}
a:hover{color:#0056b3;text-decoration:underline;}
button{border-radius:0;}
button:focus:not(:focus-visible){outline:0;}
button,input{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
button,input{overflow:visible;}
button{text-transform:none;}
[role=button]{cursor:pointer;}
[type=button],button{-webkit-appearance:button;}
[type=button]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none;}
.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
@media (min-width:576px){
.container{max-width:540px;}
}
@media (min-width:768px){
.container{max-width:720px;}
}
@media (min-width:992px){
.container{max-width:960px;}
}
@media (min-width:1200px){
.container{max-width:1140px;}
}
.btn{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
@media (prefers-reduced-motion:reduce){
.btn{transition:none;}
}
.btn:hover{color:#212529;text-decoration:none;}
.btn:focus{outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25);}
.btn:disabled{opacity:.65;}
.btn-sm{padding:.25rem .5rem;font-size:.875rem;line-height:1.5;border-radius:.2rem;}
.collapse:not(.show){display:none;}
.dropdown{position:relative;}
.dropdown-toggle{white-space:nowrap;}
.dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid;border-right:.3em solid transparent;border-bottom:0;border-left:.3em solid transparent;}
.dropdown-toggle:empty::after{margin-left:0;}
.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:10rem;padding:.5rem 0;margin:.125rem 0 0;font-size:1rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem;}
.dropdown-menu-right{right:0;left:auto;}
.dropdown-item{display:block;width:100%;padding:.25rem 1.5rem;clear:both;font-weight:400;color:#212529;text-align:inherit;white-space:nowrap;background-color:transparent;border:0;}
.dropdown-item:focus,.dropdown-item:hover{color:#16181b;text-decoration:none;background-color:#e9ecef;}
.dropdown-item:active{color:#fff;text-decoration:none;background-color:#007bff;}
.dropdown-item:disabled{color:#adb5bd;pointer-events:none;background-color:transparent;}
.nav-link{display:block;padding:.5rem 1rem;}
.nav-link:focus,.nav-link:hover{text-decoration:none;}
.navbar{position:relative;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:center;align-items:center;-ms-flex-pack:justify;justify-content:space-between;padding:.5rem 1rem;}
.navbar .container{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:center;align-items:center;-ms-flex-pack:justify;justify-content:space-between;}
.navbar-brand{display:inline-block;padding-top:.3125rem;padding-bottom:.3125rem;margin-right:1rem;font-size:1.25rem;line-height:inherit;white-space:nowrap;}
.navbar-brand:focus,.navbar-brand:hover{text-decoration:none;}
.navbar-nav{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none;}
.navbar-nav .nav-link{padding-right:0;padding-left:0;}
.navbar-nav .dropdown-menu{position:static;float:none;}
.navbar-collapse{-ms-flex-preferred-size:100%;flex-basis:100%;-ms-flex-positive:1;flex-grow:1;-ms-flex-align:center;align-items:center;}
.navbar-toggler{padding:.25rem .75rem;font-size:1.25rem;line-height:1;background-color:transparent;border:1px solid transparent;border-radius:.25rem;}
.navbar-toggler:focus,.navbar-toggler:hover{text-decoration:none;}
.navbar-toggler-icon{display:inline-block;width:1.5em;height:1.5em;vertical-align:middle;content:"";background:50%/100% 100% no-repeat;}
@media (max-width:767.98px){
.navbar-expand-md>.container{padding-right:0;padding-left:0;}
}
@media (min-width:768px){
.navbar-expand-md{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;justify-content:flex-start;}
.navbar-expand-md .navbar-nav{-ms-flex-direction:row;flex-direction:row;}
.navbar-expand-md .navbar-nav .dropdown-menu{position:absolute;}
.navbar-expand-md .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem;}
.navbar-expand-md>.container{-ms-flex-wrap:nowrap;flex-wrap:nowrap;}
.navbar-expand-md .navbar-collapse{display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto;}
.navbar-expand-md .navbar-toggler{display:none;}
}
.navbar-light .navbar-brand{color:rgba(0,0,0,.9);}
.navbar-light .navbar-brand:focus,.navbar-light .navbar-brand:hover{color:rgba(0,0,0,.9);}
.navbar-light .navbar-nav .nav-link{color:rgba(0,0,0,.5);}
.navbar-light .navbar-nav .nav-link:focus,.navbar-light .navbar-nav .nav-link:hover{color:rgba(0,0,0,.7);}
.navbar-light .navbar-toggler{color:rgba(0,0,0,.5);border-color:rgba(0,0,0,.1);}
.navbar-light .navbar-toggler-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");}
.mr-auto{margin-right:auto!important;}
.ml-auto{margin-left:auto!important;}
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
a:not(.btn){text-decoration:underline;}
.container{min-width:992px!important;}
.navbar{display:none;}
}
</style>

@php
$urll = request()->fullUrl();
if($urll) {
    $url = explode('=',$urll);
    if(sizeOf($url) >= 3)
    {
        $ur = $url[2];
        $fmenu = DB::table('frontend_menus')->where('id', $ur)->first();
    }
}
//dd($fmenu);
@endphp


<section id="teacher" style="@if(@$fmenu) padding-top: 0px; @else padding-top: 75px; @endif">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                
                <div class="card">
                    <div class="card-header" style="margin: 0; padding: 0;">
                        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                            <div class="container">
                                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                                    {{ config('app.name', 'Laravel') }}
                                </a> --}}
                                <a class="navbar-brand" href="">
                                  Blog User
                              </a>
                              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto">
                        
                                </ul>
                        
                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest('blog_user')
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        @if (Route::has('register'))
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        @endif
                                    </li>
                                    @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::guard('blog_user')->user()->name }} <span class="caret"></span>
                                        </a>
                        
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('blog_user.logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                        
                                        <form id="logout-form" action="{{ route('blog_user.logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
                            </ul>
                        </div>
                        </div>
                        </nav>
                    </div>
                    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        <!-- Main content -->
    
                    <div class="tab">
                        {{-- <button class="tablinks active" onclick="openCity(event, 'basic_info')">Create Post</button>
                        <button class="tablinks" onclick="openCity(event, 'education_info')">All Post</button> --}}
                    </div>
                    <a href="{{ route('blog_user.home') }}" class="btn btn-sm pull-left" @if(!empty($editData)) style="background: #afb3b0;" @else style="background: #8AC63D;"@endif>Create Post</a>
                    <a href="{{ route('blog_user.all_blog_post') }}" class="btn btn-sm btn-info pull-left" style="background: #afb3b0;">All Post</a>
                    <a href="{{ route('blog_user.edit_profile',auth('blog_user')->id()) }}" class="btn btn-sm btn-info pull-left" style="background: #afb3b0;">Edit Profile</a>
                    <a href="{{ route('blog') }}" class="btn btn-sm btn-info" style="background: #002D68;color: white;float: right;">Go to Blog Page</a>
                    @if(url()->previous() == session()->get('blog_details_page_url'))
                    <a href="{{ url()->previous() }}" class="btn btn-sm btn-info" style="background: #002D68;color: white;float: right;margin-right: 2px;">Back to Previous Page</a>
                    @endif
                    {{-- {{ !empty($editData)? route('member_management.update',$editData->id) : route('member_management.store') }} --}}
                    
                    {{-- <div id="basic_info" class="tabcontent">
                        <h4 style="margin-top: 3%;">Create Post</h4>
                        <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <button style="margin-top: 2%;" class="btn btn-success btn-flat"><i class="fas fa-save"></i> @if(!empty($editData)) @lang('Update') @else @lang('Save')@endif</button>
                        </form>
                    </div>
                    <div id="education_info" class="tabcontent">
                        <h4 style="margin-top: 3%;">All Post</h4>
                        
                    </div> --}}

                    <div id="basic_info" class="tabcontent">
                        @if(!empty($editData))
                        <h4 style="margin-top: 3%;">Update Post</h4>
                        @else
                        <h4 style="margin-top: 3%;">Create Post</h4>
                        @endif
                        {{-- <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <button style="margin-top: 2%;" class="btn btn-success btn-flat"><i class="fas fa-save"></i> @if(!empty($editData)) @lang('Update') @else @lang('Save')@endif</button>
                        </form> --}}
                        <style>
                            label {
                                margin-top: 10px;
                                margin-bottom: 10px;
                            }
                        </style>
                        <form action="{{ !empty($editData)? route('blog_user.update_blog_post',$editData->id) : route('blog_user.store_blog_post') }}" method="post" enctype="multipart/form-data" autocomplete="off" id="myForm">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-sm-12">
                                    <label style="font-size: 20px;">Title</label>
                                    <input id="title" name="title" type="text" value="{{@$editData->title}}" class="form-control" placeholder="Post Title">
                                </div>
                                @php
                                    $postCategories = \App\Model\PostCategory::orderBy('sort_order')->get();
                                @endphp
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label>Category</label>
                                        <select name="category_id" id="category_id" class="form-control">
                                            <option value="">Select Category</option>
                                            @foreach($postCategories as $postCategory)
                                            <option value="{{ @$postCategory->id }}" {{(@$editData->category_id == @$postCategory->id)?('selected'):''}}>{{ @$postCategory->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Image<small style="color: brown"> (Max 2 mb)</small></label>
                                        <input type="file" class="form-control filer_input_single @error('image') is-invalid @enderror" name="image"> @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span> @enderror
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label style="font-size: 20px;">Description</label>
                                    <textarea  name="description" class="textarea" required="">{{@$editData->description}}</textarea>
                                </div>
                                @if(empty($editData))
                                <input type="hidden" name="blog_user_id" value="{{ auth('blog_user')->user()->id }}">
                                @endif
                                <div class="form-group col-sm-3">
                                    <button style="margin-top: 10px;background: #5fd6f3;" class="btn btn-success btn-flat"><i class="fas fa-save"></i> @if(!empty($editData)) @lang('Update Post') @else @lang('Save Post')@endif</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.layouts.footer')



    @section('extra_script_files')
        <script src="{{ asset('public/backend/ckeditor/ckeditor/ckeditor.js')}}"></script>
        <script src="{{ asset('public/backend/ckeditor/ckfinder/ckfinder.js')}}"></script>
    
        <script type="text/javascript">
        $(function(){
            var ck = CKEDITOR.replaceAll('textarea');
            CKFinder.setupCKEditor( ck, '/ckfinder/' );
        })
        </script>
    @endsection

@endsection