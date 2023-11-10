@extends('frontend.layouts.library_app')

@php
$pageTitle = "Library Contact Us";
@endphp

@section('title', $pageTitle)


@section('my_style')
<style>
    .book-container {
        margin: 15px 0;
        transition: .5s;
    }

    .book-container:hover {
        background-color: #f8f9fa;
        transition: .5s;
    }

    .book-container h5 {
        height: 45px;
        overflow: hidden;
    }

    .book-container img {
        max-height: 220px;
        display: block;
        margin: 5px auto;
    }

    .text-black {
        color: #000 !important;
    }
</style>


<style type="text/css">
    .contact-form {
        /*background-color: #f3f3f3;*/
        padding: 50px 0;
    }

    .query-form {
        border: 1px solid #00B2FF;
        box-shadow: 0px 1px 10px rgb(0 0 0 / 10%);
        padding: 25px;
    }

    .form-title {
        color: #00B2FF;
        font-size: 22px;
    }

    .error {

        color: red
    }

    .message {
        color: #ff00a6;
        font-size: 20px;
    }
</style>

@endsection


@section('content')

@include('frontend.partial.content-header', ['pageTitle' => $pageTitle, 'bannerImageLink' => 'faculty.png'])

@include('frontend.partial.content-blue-header', ['title' => 'Contact Us'])

<section>
    <div class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    <div class="query-form shadow">
                        <div class="p-address mb-4">
                            <h3 class="my-font form-title"><i class="ti-location-pin text-primary"></i> Address:</h3>
                            <p>
                                C49M+GVF, Science Faculty, <br>
                                Comilla University Road, Shalmanpur <br>
                                Comilla-3506, Bangladesh
                            </p>
                        </div>
                        <div class="phone mb-4">
                            <h3 class="my-font form-title">
                                <i class="ti-mobile text-primary"></i> Phone:
                            </h3>
                            <p>
                                Phone: (+88) 0817-0035 <br>
                                Fax: (+88) 02334411135
                            </p>
                        </div>
                        <div class="email mb-4">
                            <h3 class="my-font form-title">
                                <i class="ti-email text-primary"></i> Email:
                            </h3>
                            <p>Email: registrar@cou.ac.bd</p>
                        </div>
                        <div class="website mb-4">
                            <h3 class="my-font form-title">
                                <i class="ti-world text-primary"></i> Web:
                            </h3>
                            <p>Web: https://cou.ac.bd</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    <div class="query-form shadow">
                        <h3 class="my-font form-title">Submit your query to us</h3>

                        {{-- @if (session()->has('message'))
                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                            {{ session('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        @endif --}}

                        <span id="message" class="message"></span>

                        <div class="my-4">
                            <form action="" id="askLibrarian" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-12 col-sm-12">
                                        <div class="form-group">
                                            <label for=""> Name<span class="text-danger">*</span></label>
                                            <input type="text" name="name" class="form-control" id=""
                                                placeholder="Your Full Name">
                                            <span id="name_error" class="error"></span>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="">Email <span class="text-danger">*</span> </label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                placeholder="Your Email Address">
                                            <span id="email_error" class="error"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Mobile Number <span class="text-danger">*</span></label>
                                    <input type="number" name="mobile" class="form-control" id=""
                                        placeholder="Mobile Number">
                                    <span id="mobile_error" class="error"></span>

                                </div>

                                <div class="form-group">
                                    <label for="">Message Subject <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="subject" class="form-control" id="" placeholder="Subject">
                                    <span id="subject_error" class="error"></span>
                                </div>

                                <div class="form-group">
                                    <label for="message">Your Message</label>
                                    <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                                    <span id="message_error" class="error"></span>
                                </div>
                                <button type="submit" id="submit" class="btn btn-primary btn-block">Submit</button>
                                <br>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    $('#askLibrarian').submit(function(e){
     e.preventDefault();

     $.ajax({
      url:"{{url('library_post')}}",
      type:"post",
      data:$('#askLibrarian').serialize(),
      success:function(data)
      {
          if(data.status=='error')
           {
              $.each(data.error,function(key, val){
                $('#'+key+'_error').html(val);
              })

           }
        if(data.status=='success')
        {
            $('#askLibrarian')[0].reset();
           $("#message").html(data.message);
        }

      }


     })



      });


</script>




@endsection

@section('java_script')

@endsection
