@extends('layouts.main')

@section('title', 'Criar Eventos')

@section('content')
    <div id="formulario">
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <h3>Imagem do Evento:</h3> <br><input type="file" name="image" placeholder="Nome do evento"><br>
            <h3>Evento:</h3> <br><input type="text" name="title" placeholder="Nome do evento"><br>
            <h3>Cidade:</h3> <br><input type="text" name="city"
                placeholder="Cidade em que o evento irá acontecer"><br>
            <h3>O evento é privado?</h3> <br><select type="radio" name="private">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select><br>
            <h3>Data do Evento:</h3> <br><input type="date" id="input-date" name="event_date"><br>
            <h3>Descrição:</h3> <br>
            <textarea type="text" name="description" rows="5" cols="55"
                placeholder="Uma breve descrição do evento, seja criativo!"></textarea><br>
            <h3>Adicione itens de infraestrutura:</h3>
            <div id="div-items">
                Cadeiras: <input id="checkbox-items" type="checkbox" name="items[]" value="Cadeiras">
                Palco: <input id="checkbox-items" type="checkbox" name="items[]" value="Palco">
                Bebida grátis: <input id="checkbox-items" type="checkbox" name="items[]" value="Bebida grátis">
                Open food: <input id="checkbox-items" type="checkbox" name="items[]" value="Open Food">
                Brindes: <input id="checkbox-items" type="checkbox" name="items[]" value="Brindes">
            </div>
            <input type="submit" value="Criar Evento">
        </form>
    </div>
@endsection
