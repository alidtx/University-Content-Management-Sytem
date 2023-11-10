{{-- @extends('frontend.layouts.faculty-app') --}}
@extends('frontend.layouts.app')

@php
$pageTitle='Blogs of Comilla University';
@endphp

@section('title', $pageTitle)

@section('my_style')
{{-- <style>
  .notice-title {
    background-color: #00B2FF;
    padding: 5px;
    text-transform: uppercase;
    color: #fff;
    font-family: "Raleway", sans-serif;
    font-size: 26px;
    font-weight: 700;
}
.advisor-info{
	margin: 50px 0;
}
.advisor-img-container{
	margin-bottom: 25px;
}
.advisor-img-container h4{
	margin: 15px 0;
	font-family: work-sans, sans-serif;
	text-align: center;
	font-weight: 600;
}
.advisor-img-container p{
	font-family: work-sans, sans-serif;
	text-align: center;
}
.faculty-tab {
	border: none !important;
}
.faculty-tab .nav-item{
	background-color: #f1f1f1;
	border: none;
	margin: 5px;
}
.faculty-tab .nav-item .nav-link{
	border: none;
	text-decoration: none;
	color: #002147;
	border-radius: 0px;
	padding: 15px;
	text-transform: capitalize;
}
.faculty-tab .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{
	font-size: 16px;
	border: none !important;
	background-color: #00b2ff80;
}

.faculty-icon-list{
    /* margin: 15px 15%; */
    /* display:flex; */
    text-align: center;
    /* align-items:center; */
}
.faculty-icon-list ul{
    padding: 0;
	list-style: none;
    display: inline-block;
}

.faculty-icon-list ul li{
	display: inline-block;
    margin: 10px 5px;
    vertical-align: middle;
}

.faculty-icon-list ul li a{
	/* background-color: #2E3192; */
    padding: 5px;
    color: #fff;
    text-decoration: none;
}
.faculty-address-container{
    margin-top: 45px;
    padding: 25px 0;
}
.faculty-address-container i{
	color: #2257bf;
	font-size: 20px;
	background-color: #fff;
	padding: 5px;
	box-shadow: 0px 2.20399px 3.22122px rgba(0, 0, 0, 0.07);
	margin-right: 10px;
}

.faculty-address-container p{
	text-align: center;
    font-family: work-sans, sans-serif;
    /*padding: 15px 0;*/
}


</style> --}}
<link rel="stylesheet" href="{{ asset('public/frontend/dist/css/profile.css') }}">
@endsection

@section('content')

{{-- <header class="header fixed-top">
    <div class="container-fluid top-header" style="background-color: #11f2ff;">
        <div class="row">
        <div class="col-12">
            <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                <a href="{{ route('home') }}">
                <img class="img-fluid d-block mx-auto" style="max-height: 80px;" src="{{ asset('public/frontend/images/logo.png') }}" alt="logo"/></a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="navigation w-100">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark p-0">
            <a class="navbar-brand" href="#"> Faculty Of  {{  }}</a>
            <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse"
            data-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="ti-menu text-black"></i>
            </button>
            <div class="collapse navbar-collapse" id="navigation">

                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                        </a>
                        <div class="dropdown-menu p-3" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">History</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Mission & Vision</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Academics
                        </a>
                        <div class="dropdown-menu p-3" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Department</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Calender</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Activities
                        </a>
                        <div class="dropdown-menu p-3" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Event</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Gallery</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="# }}">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        </div>
    </div>
</header> --}}
<!-- /header -->

<section class="counter-numbers" style="background: url({{ asset('public/frontend/images/banner/faculty.png')  }})">
	<div class="container">
		<div class="row">
			<div class="col">
				<h3 class="text-center font_one text-white">Blog Post</h3>
			</div>
		</div>
	</div>
</section>

 <style>
        .advisor-img-container{
          padding-left: 15px;
        }
         .advisor-img-container ul{
          font-size: 17px;
          line-height: 1.7;
          font-weight: normal;
          margin: 0;
          padding: 0;
          padding-bottom: 15px
        }
         .advisor-img-container ul li{
          list-style: none;
           color: #00b2ff;
           font-family: "Work Sans", sans-serif;
           cursor: pointer;
         }
         .advisor-img-container ul a{
          text-decoration: none;
          color: black;
         }

         .advisor-img-container .title{

            font-size: 25px;
            padding: 10px 0 0px 0;
            font-family: "Work Sans", sans-serif;
            font-weight: 600;
            letter-spacing: 0em;
         }

         .advisor-img-container .blog-post{
          padding: 15px 15px;
          position: relative;
          overflow: hidden;
         }
         .advisor-img-container .blog-post .blog_headline{
            padding: 0 !important;
            margin: 0 !important;
            color: #00b2ff;
            font-family: "Work Sans", sans-serif;

         }
         .advisor-img-container .blog-post img{
            display: inline-block;
            height: 300px;
            width: 100%
         }
         .blog-post .blog_img{
         margin-top:7px;
         margin-bottom:7px;
         }
         .blog-post p{
        font-family: "Work Sans", sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 24.1px;
        letter-spacing: 0em;
        text-align: left;
        text-align: justify;
        padding-bottom:8px

         }
 </style>
<section>
	<div class="advisor-info mt-3 mb-3">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-4">
                    <div class="advisor-img-container border mt-1 rounded overflow-hidden">
                        <h3 class="title">Post Category</h3>
                        <ul>
                            @foreach ($post_category as $item)
                           <li onclick="post_cat({{$item->id}})">{{$item->category_name}}</li>
                            @endforeach
                        </ul>
                  </div>
                  <br>
					<div class="advisor-img-container border mt-1 rounded overflow-hidden">
                        <h3 class="title">Recent Blog Post</h3>
					      <ul>
                            @foreach ($recebt_post  as $item)
                            <li onclick="recent_post({{$item->id}})">{{$item->title}}</li>
                            @endforeach
                          </ul>
					</div>
				</div>
				<div class="col-12 col-sm-8">
                    <div id="cat_id" class="advisor-img-container border mt-1 rounded overflow-hidden">
                     @foreach ($post as $item)
                    <div class="blog-post">
                    <h3 class="blog_headline">{{$item->title}}</h3>
                     <span>Date: {{date_format($item->created_at,"Y/m/d")}} || </span> <span>Writen by: {{$item->author_name}}</span>
                     <br>
                     <div class="blog_img"> <img src="{{asset('public/upload/blogs/'.$item->image)}}" alt=""> </div>
                     <p>  {!! \Illuminate\Support\Str::limit($item->description, 300, $end='...') !!}</p>
                     <a href="single_post/{{$item->id}}" class="btn btn-primary btn-sm justify-self-end" style="color: white; margin-top: auto;"> Read More</a>
                    </div>
                    @endforeach
                </div>
                <p id="pagination" style="margin-top: 5px">{{ $post->links() }}</p>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('java_script')
<script>
    var image_link="{{asset('public/upload/blogs/')}}"

  function recent_post(recent_id)
  {
    var html='';
    $.ajax({
     url:"{{url('recent_post')}}",
     type:"get",
     data:{recent_id:recent_id},
     success:function(data){
        $.each(data, function(key,val){
           html+='<div class="blog-post">';
              html+='<h3 class="blog_headline">'+val.title+'</h3>';
              html+='<span>Date: '+val.created_at.slice(0,10)+'</span> || <span>Writen by:'+val.author_name+'</span>';
              html+='<div class="blog_img"> <img src="'+image_link+'/'+val.image+'" alt=""> </div>';
              html+='<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, eos cumque doloribus sapiente velit quasi dignissimos aliquid animi minus, rem vitae voluptas ducimus voluptates. Culpa voluptatibus hic sed soluta accusantium.</p>';
              html+='<a href="single_post/'+val.id+'" class="btn btn-primary btn-sm justify-self-end" style="color: white; margin-top: auto;"> Read More</a>';
           html+='</div>';
         });
         $("#cat_id").html(html);
     }
    });
    html+='';


  }

 function post_cat(cat_id)
 {
   var html='';
    $.ajax({
     url:"{{url('cat_post')}}",
     type:"get",
     data:{cat_id:cat_id},
     success:function(data){
         $.each(data, function(key,val){
           html+='<div class="blog-post">';
              html+='<h3 class="blog_headline">'+val.title+'</h3>';
              html+='<span>Date: '+val.created_at.slice(0,10)+'</span> || <span>Writen by:'+val.author_name+'</span>';
              html+='<div class="blog_img"> <img src="'+image_link+'/'+val.image+'" alt=""> </div>';
              html+='<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, eos cumque doloribus sapiente velit quasi dignissimos aliquid animi minus, rem vitae voluptas ducimus voluptates. Culpa voluptatibus hic sed soluta accusantium.</p>';
              html+='<a href="single_post/'+val.id+'" class="btn btn-primary btn-sm justify-self-end" style="color: white; margin-top: auto;"> Read More</a>';
           html+='</div>';
         });
         $("#cat_id").html(html);
     }
    });
    html+='';

 }





$(function(){

      $('.demo').easyTicker();

    });
</script>
@endsection
