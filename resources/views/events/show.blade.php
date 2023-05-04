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
            <br> {{ $event->event_date }}
            </p>
            <a id="btn" href="#">Confirmar presença</a>
        </div>
    </div>


@endsection
