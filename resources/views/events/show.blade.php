@extends('layouts.main')

@section('title', $event->title)

@section('content')


    <div id="div-events-show">
        <div id="div-event-show">
            <img id="img-event" src="/img/events/{{ $event->image }}" alt="">
            <p id="p-event-participantes">X participantes confirmados</p>
            <p id="p-event">
            <h1 id="h1-event">Título do Evento:</h1>
            <br> {{ $event->title }} <br>
            <h1 id="h1-event">Descrição do Evento:</h1>
            <br> {{ $event->description }} <br>
            <h1 id="h1-event">Cidade do Evento:</h1>
            <br> {{ $event->city }}
            <h1 id="h1-event">Data do Evento:</h1>
            </p>
            <p id="event_date">
                {{ $event->event_date }}
            </p>
            <h1 id="h1-event">O evento conta com:</h1>
            <div id="items-list">
                    @foreach ($event->items as $item)
                        - {{ $item }} <br>
                    @endforeach
            </div>
            <a id="btn" href="#">Confirmar presença</a>
        </div>
    </div>


@endsection
