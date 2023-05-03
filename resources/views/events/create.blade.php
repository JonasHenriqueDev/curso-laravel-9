@extends('layouts.main')

@section('title', 'Criar Eventos')

@section('content')
    <div id="formulario">
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            Imagem do Evento: <br><input type="file" name="image" placeholder="Nome do evento"><br>
            Evento: <br><input type="text" name="title" placeholder="Nome do evento"><br>
            Cidade: <br><input type="text" name="city" placeholder="Cidade em que o evento irá acontecer"><br>
            O evento é privado? <br><select type="radio" name="private">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select><br>
            Descrição: <br>
            <textarea type="text" name="description" rows="5" cols="55" placeholder="Uma breve descrição do evento, seja criativo!"></textarea><br>
            <input type="submit" value="Criar Evento">
        </form>
    </div>
@endsection
