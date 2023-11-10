<section class="about">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 mb-md-0">
        <div class="round-image">
          <img class="img-fluid w-100" src="{{ asset('public/upload/members/'.$director->pernonnel_info->image) }}" alt="about image"/>
        </div>
      </div>
      <div class="col-md-8">
        <h2>{{ $director->title_first_part }} <span class="text-primary">{{ $director->title_second_part }}</span> </h2>
        <div class="text-justify">
          {!! $director->short_description !!}
        </div>
        <div class="d-inline">
          <h4>{{ $director->pernonnel_info->name }}</h4>
          <b class="text-primary">{{ $director->pernonnel_info->member_designation }}</b> <br />
          <a href="{{ route('directorContent', encrypt($director->id)) }}" class="btn btn-primary mt-2 float-right">Read More</a>
        </div>
      </div>
    </div>
  </div>
</section>