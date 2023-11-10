@extends('backend.layouts.app')


@section('calendar_script')

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/locales-all.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.css"/>

<style>
  .fc .fc-col-header-cell-cushion { 
  padding-top: 5px; 
  padding-bottom: 5px; 
}

.fc-day-fri > .fc-scrollgrid-sync-inner{
  background: #ffbe3e75;
}
/*.fc-day-sat > .fc-scrollgrid-sync-inner{
  background: #ffbe3e75;
}*/
</style>

@endsection


@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card"> 
          <div class="card-header">
            <h3 class="my-3">Academic Calender</h3>
            <a class="btn btn-primary btn-sm" href="{{ route('academic-routine.event.list') }}">Back</a>
          </div>
          <div class="card-body">
            {!! $calendar->calendar() !!}
            {!! $calendar->script() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection