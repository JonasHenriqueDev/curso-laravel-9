@extends('layouts.main')

@section('title', 'Eventos')

@section('content')
    <div id="event-container">
        @foreach ($events as $event)
            <div id="div-events">
                <div id="div-event">
                    <img id="img-event" src="img/events/{{ $event->image }}" alt="img/events/placeholder_event.png">
                    <p id="p-event">
                    <h1 id="h1-event">Título do Evento:</h1>
                    <br> {{ $event->title }} <br>
                    <h1 id="h1-event">Descrição do Evento:</h1>
                    <br> {{ $event->description }} <br>
                    <h1 id="h1-event">Cidade do Evento:</h1>
                    <br> {{ $event->city }}
                    <h1 id="h1-event">Data do Evento:</h1>
                    <br> {{ $event->event_date }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
