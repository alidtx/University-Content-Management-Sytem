    <!-- ===== Counter section start ===== -->
    <section class="counter-numbers-2" style="background-image: url('{{ asset('public/upload/at_a_galance/'.@$at_a_glance->image)  }}');">
        <div class="container">
            <h2 class="text-center text-white">{!! @$at_a_glance->title !!}</h2>
            <div class="row">
                <div class="col-12 col-md-3 my-3">
                    <div class="inside">
                        <div class="text-center">
                            <i class="fa-solid fa-people-roof"></i>
                            <h2 class="count" data-count="{{ @$at_a_glance->column_1_number }}">0</h2>
                            <h5 class="">{{ @$at_a_glance->column_1_text }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 my-3">
                    <div class="inside">
                        <div class="text-center">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <h2 class="count" data-count="{{ @$at_a_glance->column_2_number }}">0</h2>
                            <h5 class="">{{ @$at_a_glance->column_2_text }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 my-3">
                    <div class="inside">
                        <div class="text-center">
                            <i class="fa-brands fa-gripfire"></i>
                            <h2 class="count" data-count="{{ @$at_a_glance->column_3_number }}">0</h2>
                            <h5 class="">{{ @$at_a_glance->column_3_text }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 my-3">
                    <div class="inside"  style="padding: 50px 10px;">
                        <div class="text-center">
                            <i class="fa-brands fa-gg"></i>
                            <h2 class="count" data-count="{{ @$at_a_glance->column_4_number }}">0</h2>
                            <h5 class="">{{ @$at_a_glance->column_4_text }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== Counter section end ===== -->