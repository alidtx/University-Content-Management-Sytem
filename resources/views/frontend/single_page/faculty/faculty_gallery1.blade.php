{{-- @extends('frontend.layouts.app') --}}


@extends('frontend.layouts.faculty-app')

@php
$pageTitle='Gallery - Faculty of '. @$faculty->name
@endphp

@section('title', $pageTitle)

@section('my_style')
<style>
  @media (min-width: 1200px) {
    .for_padding_like_container {
      padding-left: 10px;
    }
  }

  @media (min-width: 992px) {
    .for_padding_like_container {
      padding-left: 10px;
    }
  }

  @media (min-width: 768px) {
    .for_padding_like_container {
      padding-left: 10px;
    }
  }

  @media (min-width: 576px) {
    .for_padding_like_container {
      padding-left: 75px;
    }
  }
</style>

<style>
  .mb-3,
  .my-3 {
    margin-bottom: 0.3rem !important;
  }

  .round-image-right-curve img {
    height: 240px;
  }

  .title-text {
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

  .card {
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

@include('frontend.layouts.faculty_header')

<section class="counter-numbers" style="background: url({{ asset('public/frontend/images/banner/faculty.png')  }})">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3 class="text-center my-font" style="color: white;">Photo Gallery of Faculty of {{ @$faculty->name }}</h3>
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
                <h3 class="title-text my-font">Photo Gallery</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}

@include('frontend.partial.content-blue-header', ['title' => 'Photo Gallery' ])

<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-sm-12">
        <div class="card">
          <div class="card-body" style="padding-bottom: 10px;">
            <div class="spotlight-group" data-fit="cover" data-autohide="all">
              <a class="spotlight" href="{{ asset('public/upload/photo_gallery/'.$aa->image) }}" data-button="Click Me!"
                data-button-href="javascript:alert('You can open an URL or execute some Javascript here.')"
                data-description="Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.">
                <img height="300" width="400" src="{{ asset('public/upload/photo_gallery/'.$aa->image) }}"
                  alt="Lorem ipsum dolor sit amet">
              </a>
              <a class="spotlight" href="{{ asset('public/upload/photo_gallery/'.$aa->image) }}"
                data-description="Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.">
                <img height="300" width="400" src="{{ asset('public/upload/photo_gallery/'.$aa->image) }}"
                  alt="At vero eos et accusam">
              </a>
              <a class="spotlight" href="{{ asset('public/upload/photo_gallery/'.$aa->image) }}"
                data-description="In hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim.">
                <img height="300" width="400" src="{{ asset('public/upload/photo_gallery/'.$aa->image) }}"
                  alt="Duis autem vel eum iriure dolor">
              </a>
            </div>
            <br><br>
            <div style="display: none">
              <div id="fragment" style="width: 100%">
                <b>Embedded Node Fragment</b><br><br>
                <img class="image" src="{{ asset('public/upload/photo_gallery/'.$aa->image) }}" width="500"
                  height="334">
                <img class="image" src="{{ asset('public/upload/photo_gallery/'.$aa->image) }}" width="500"
                  height="333">
                <img class="image" src="{{ asset('public/upload/photo_gallery/'.$aa->image) }}" width="500"
                  height="331">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  @include('frontend/layouts/footer')
  <script>
    (function(){

            const gallery = [{

                title: "Lorem ipsum dolor sit amet",
                description: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.",
                src: "demo/gallery/london-1758181.jpg",
                button: "Download Image",
                onclick: Spotlight.download,
                like: false
            },{
                title: "At vero eos et accusam",
                description: "Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.",
                src: "demo/gallery/sea-1975403.jpg",
                button: "Next Slide",
                onclick: Spotlight.next,
                like: false,
            },{
                title: "Duis autem vel eum iriure dolor",
                description: "In hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim.",
                src: "demo/gallery/newport-beach-2089906.jpg",
                button: "Close Gallery",
                onclick: Spotlight.close,
                like: false
            }];

            window.showGallery = function(index){

                const control = to_array(document.getElementById("control").getElementsByTagName("input"));
                const animation = to_array(document.getElementById("animation").getElementsByTagName("input"));
                const modifier = document.getElementById("modifier").getElementsByTagName("input");

                // store the button element to apply dom changes to it
                let like;
                // store the current index
                let slide = 0;

                function handler(){

                    // get the current like state
                    // at this point we use the stored last index from the variable "slide"
                    const current_like_state = !gallery[slide].like;

                    // toggles the current like state
                    gallery[slide].like = current_like_state;

                    // assign the state as class to visually represent the current like state
                    this.classList.toggle("on");

                    if(current_like_state){

                        // do something if liked ...
                    }
                    else{

                        // do something if unliked ...
                    }
                }

                const options = {

                    class: "only-this-gallery",
                    index: index,
                    control: control,
                    animation: animation,
                    // fires when gallery opens
                    onshow: function(index){

                        // the method "addControl" returns the new created control element
                        like = Spotlight.addControl("like", handler);
                    },
                    // fires when gallery change to another page
                    onchange: function(index, options){

                        // store the current index for the button listener
                        // the slide index start from 1 (as "page 1")
                        slide = index - 1;

                        // initially apply the stored like state when slide is openened
                        // at this point we use the stored like element
                        like.classList.toggle("on", gallery[slide].like);
                    },
                    // fires when gallery is requested to close
                    onclose: function(index){

                        // remove the custom button, so you are able
                        // to open next gallery without this custom control
                        Spotlight.removeControl("like");
                    }
                };

                assign(options, modifier);

                Spotlight.show(gallery, options);
            };

            /* helper functions to assign options for the demo page, so skip this part from here */

            function to_array(nodelist){

                const arr = [];

                for(let i = 0, node; i < nodelist.length; i++){

                    node = nodelist[i];
                    node.checked && arr.push(node.value);
                }

                return arr;
            }

            function assign(options, nodelist){

                for(let i = 0, node; i < nodelist.length; i++){

                    node = nodelist[i];

                    if(node.checked){

                        if(node.name){

                            options[node.name] = node.value;
                        }
                        else{

                            options[node.value] = node.checked;
                        }
                    }
                }
            }

        }());

  </script>


</section>


@endsection