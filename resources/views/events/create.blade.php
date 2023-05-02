@extends('layouts.main')

@section('title', 'Produto')

@section('content')
    <div id="formulario">
        <h1>Crie o seu evento</h1>
        <form action="/events" method="POST">
            Evento: <br><input type="text" name="title"><br>
            Cidade: <br><input type="text" name="city"><br>
            O evento é privado? <br><select type="radio" name="private">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select><br>
            Descrição: <br>
            <textarea type="text" name="description" rows="5" cols="55"></textarea><br>
            <input type="submit" value="Criar Evento">
        </form>
    </div>
@endsection
