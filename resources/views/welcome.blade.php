@extends('layouts.main')

@section('title', 'Eventos')

@section('content')
    <div id="event-container">
        @foreach ($events as $event)
            <div id="div-events">
                <div id="div-event">
                    <img id="img-event" src="img/events/{{ $event->image }}" onError="this.onerror=null;this.src='img/events/39cbaf65710c6ec7ff756301e8689282.png';">
                    <p id="p-event">
                    <h1 id="h1-event"> {{ $event->title }} </h1>
                    </p>
                    <p id="event_date">
                        {{ $event->event_date }}
                    </p>
                    <a id="btn"href="/events/{{ $event->id }}">Saiba mais</a>
                </div>
            </div>
        @endforeach
        @if(count($events) == 0)
            <div id="div-events">Não há eventos disponíveis</div>
        @endif
    </div>
@endsection
