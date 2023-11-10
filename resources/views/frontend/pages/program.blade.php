@extends('frontend.layouts.app')

@php
$pageTitle = 'List of Programs';
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
        border: 1px solid #9de1ff;
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

    .card-text {
        font-size: 16px !important;
    }

    .card-body {
        min-height: 75px !important;
    }

    .program {

        text-align: left;
        padding: 10px 15px;

    }
</style>
<style>
    #faculty {
        padding: 17px 0 17px 0;
    }

    #faculty .panel-title {

        padding: 10px 0 10px 29px;
    }

    #faculty a {
        text-decoration: none;
    }

    #faculty li {
        list-style: none;
    }

    .panel-default li {
        padding: 10px 0 0 0;
    }

    #faculty .single-item {
        box-shadow: 0 0 10px #cccccc;
        background: #ffffff;
        padding: 30px 20px 10px 30px;
        margin-bottom: 20px;
    }

    #faculty .single-item h4 a {
        color: black;
        font-size: 22px
    }

    .sidebar-info .alignment {
        margin: 10px 0 10px 0px;
        margin-left: -37px
    }

    .sidebar-info .alignment li a {
        color: black
    }

    .sidebar-info .alignment li {
        background: #fafafa;
        padding: 10px;
        color: black;
        font-size: 17px
    }

    .sidebar-info .alignment .item1 {
        margin-right: 10px
    }

    .textStyle {
        padding: 0px 0 10px 0px;

    }

    .content p {

        padding-bottom: 5px;

    }
</style>



@endsection


@section('content')


{{-- <section class="counter-numbers"
    style="padding-top: 250px; background: url({{ asset('public/frontend/images/banner/faculty.png')  }})">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-center my-font" style="color: white;">All Program</h3>
            </div>
        </div>
    </div>
</section> --}}
@include('frontend.partial.content-header', [
'pageTitle' => $pageTitle,
'bannerImageLink' => 'faculty.png',
])
@include('frontend.partial.content-blue-header', ['title' => 'Programs'])

{{-- <section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-sm-6" style="background-color: #00B2FF; margin: 40px 0;">

                        <h3 class="title-text my-font">Programs</h3>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


{{-- <section id="faculty" style="margin-top: 40px;margin-bottom: 50px;">

    <div class="container" style="margin-top: 40px;">
        <div class="row">

            @foreach ($program as $item)
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="400" data-aos-easing="ease-in-out">

                <div class="card program" style="min-height: 150px">
                    <h3 style="text-transform: capitalize">{{$item->name}}</h3>
                    <p> Department: <span style="text-transform:uppercase "
                            class="text-primary">{{@$item['department_name']['name']}}</span></p>
                    <p> Program Lavel: <span style="text-transform:uppercase "
                            class="text-primary">{{@$item['program_category']['name']}}</span></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section> --}}


<style>
    .convocation {
        text-align: center;
    }

    .convocation p {
        font-size: 20px;
        color: #00b2ff;
    }

    .convocation a {

        text-decoration: none;

    }

    .modal-content {

        opacity: 100%;
        height: 306px !important;
        margin-top: 80px;


    }



    .form-control-borderless {
        border: none;
    }

    .form-control-borderless:hover,
    .form-control-borderless:active,
    .form-control-borderless:focus {
        border: none;
        outline: none;
        box-shadow: none;
    }
</style>


@php
$allProrgam=allProrgam();
@endphp

@if ($allProrgam != null)
<div class="modal fade mt-5" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body mt-5 mb-5 convocation">
                <a href="{{$allProrgam->url}}" target="_blank">
                    <p>{{$allProrgam->notifaction}}</p>
                </a>
            </div>
        </div>
    </div>
</div>
@endif

<script>
    $(function(){
    $('#myModal').modal('show');
})
</script>


<section id="faculty">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <aside>
                    <div class="sidebar-item category">
                        <div class="sidebar-info">
                            <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne1" style="background: #007bff">
                                        <h4 class="panel-title">
                                            <a style="color: white" role="button" data-toggle="collapse"
                                                data-parent="#accordion1" href="#collapseOne1" aria-expanded="true"
                                                aria-controls="collapseOne1">
                                                Program Level
                                            </a>
                                        </h4>
                                    </div>

                                    {{-- <div class="container">
                                        <div class="row justify-content-center">
                                            <form class="card card-sm" action="" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-10">
                                                        <input
                                                            class="form-control form-control-sm form-control-borderless"
                                                            type="search" id="search" placeholder="Search here...">
                                                    </div>
                                                    <div class="col-2 btn-success" type="submit">
                                                        <i class="fa fa-search" style="padding-top: 8px;"></i>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div> --}}

                                    <div id="collapseOne1" class="panel-collapse in" role="tabpanel"
                                        aria-labelledby="headingOne1">
                                        <div class="panel-body">
                                            <ul>
                                                <li><input type="radio" checked name="programLevel" onclick="allr()">
                                                    All</li>
                                                @foreach ($program as $item)
                                                @if ($item->id == 1 || $item->id==2)

                                                <li><input type="radio" class="programLevel" name="programLevel"
                                                        value="" onclick="add({{$item->id}})">
                                                    {{$item->name}}</li>
                                                @endif

                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-md-9 facult_id " id="program_id">
                @foreach ($programInfo as $item )

                <div class="card program" style="min-height: 150px">
                    <h3 style="text-transform: capitalize">{{$item->name}}</h3>
                    <p> Department: <a class="text-primary"
                            href="{{ route('departments.department-details', $item->department_name->short_url) }}">{{$item->department_name->name}}</a>
                    </p>
                    <p> Program Lavel: <a class="text-primary" target="_blank"
                            href="{{ route('program_category', $item->program_category->slug) }}">{{$item->program_category->name}}</a>
                        {{-- <span style="text-transform:uppercase" class="text-primary">
                            {{$item->program_category->name}}</span></p> --}}
                </div>

                @endforeach

                {{-- @foreach ($programInfo as $item )
                <div class="single-item ">
                    <div class="item">
                        <div class="info">
                            <div class="content">
                                <h4>
                                    <a href="#">{{$item->name}}</a>
                                </h4>
                                <div class="sidebar-item tags">
                                    <div class="sidebar-info">
                                        <ul class="d-flex alignment">
                                            <li class="item1"><a href="#">{{$item->program_category->name}}</a>
                                            </li>
                                            <li class="item2"><a href="#">{{$item->short_name}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p style="text-align: justify" class="textStyle">
                                    {!!$item->program_category->description!!} </p>
                                <a class="btn btn-primary btn-sm" href="" target="_blank"><i class="fas fa-plus"></i>
                                    Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <p>{{ $programInfo->links() }}</p> --}}
                <div class="row">
                    <div class="col-sm-12 paginaion_right">
                        {{$programInfo->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function add(program_id){
        let html='';
    //  $("#program_id").html('');
     $.ajax({
       url:"{{url('program_info')}}",
       type:"get",
       data:{program_id:program_id},
        success:function(data){
          $.each(data,function(key,val){
            console.log(val);
         html+='<div class="card program" style="min-height: 150px"><h3 style="text-transform: capitalize">'+val.name+'</h3><p> Department: <span style="text-transform:uppercase " class="text-primary">'+val.department_name.name+'</span></p><p> Program Lavel:<span style="text-transform:uppercase " class="text-primary">'+val.program_category.name+'</span></p></div>';
        // console.log(html)

          })
          $('#program_id').html(html);
          html='';
        }

     })
    }

  function allr()
  {


  }

function allr()
{
    var rr=1

    let html='';
    // $('#program_id').html('');
    $.ajax({
        url:"{{url('allr')}}",
       type:"get",
       data:{rr:rr},
        success:function(data){
            $.each(data,function(key,val){
                // console.log(val.department_name.name);

                html+='<div class="card program" style="min-height: 150px"><h3 style="text-transform: capitalize">'+val.name+'</h3><p> Department: <span style="text-transform:uppercase " class="text-primary">'+val.department_name.name+'</span></p><p> Program Lavel:<span style="text-transform:uppercase " class="text-primary">'+val.program_category.name+'</span></p></div>';

            })
            $('.facult_id').html(html);
            html='';
        }
    })
}

</script>

<script>
    // $('#search').on('keyup', function(){
    //     search();
    // });
    // search();
    // function search(){
    //      var keyword = $('#search').val();

    //      $.post('{{ route("programs.program_search") }}',
    //       {
    //          _token: $('meta[name="csrf-token"]').attr('content'),
    //          keyword:keyword
    //        },
    //        function(data){
    //         table_post_row(data);
    //           console.log(data);
    //        });
    // }
    // table row with ajax
    // function table_post_row(res){
    // let htmlView = '';
    // if(res.programs.length <= 0){
    //     htmlView+= `
    //        <tr>
    //           <td colspan="4">No data.</td>
    //       </tr>`;
    // }
    // for(let i = 0; i < res.programs.length; i++){
    //     htmlView += `
    //         <tr>
    //            <td>`+ (i+1) +`</td>
    //               <td>`+res.programs[i].name+`</td>
    //                <td>`+res.programs[i].phone+`</td>
    //         </tr>`;
    // }
    //      $('tbody').html(htmlView);
    // }
</script>


@endsection