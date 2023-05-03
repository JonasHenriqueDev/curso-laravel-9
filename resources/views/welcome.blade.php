@extends('layouts.main')

@section('title', 'Eventos')

@section('content')
    <div id="event-container">
        @foreach ($events as $event)
            <div id="div-events">
                <div id="div-event">
                    <img id="img-event" src="img/events/{{ $event->image }}" alt="img/events/placeholder_event.png">
                    <p id="p-event">• {{ $event->title }} -- {{ $event->description }} -- {{ $event->city }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
