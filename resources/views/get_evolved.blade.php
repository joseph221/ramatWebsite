@extends('layouts.app')
@section('content')
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Events</h2>
            <ul>
                <li> <a href="/"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Events</li>
            </ul>
        </div>
    </div>
</div>

<section class="upcomming container-flid">
    <div class="container">
        <div class="session-title row">
            <p>KNOW AND COME TO JOIN OUR</p>
            <h2>UPCOMING EVENTS</h2>
        </div>
        <div class="events-row row">
            @foreach ($event as $evt )
            <div class="col-md-4">
                <div class="event-card">
                    <img src="{{ asset('Event_Image/'.$evt->image) }}" alt="">
                    <div class="event-detail">
                        <h4>{{ $evt->title }}</h4>
                        <p>{{ $evt->desc }}</p>

                        <h6>{{ $evt->date }}</h6>
                    </div>
                    <div class="plac-dat row no-margin">
                        <div class="col-7 colplac colplacll">
                            <strong>PLACE:</strong>
                            <p>{{ $evt->place }}</p>
                        </div>
                        <div class="col-5 colplac">
                             <strong>TICKET:</strong>
                             @if ($evt->cost == 0)
                                <p>FREE OF COST</p>
                             @endif
                             @if ($evt->cost > 0)
                                {{ $evt->cost }}
                             @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
