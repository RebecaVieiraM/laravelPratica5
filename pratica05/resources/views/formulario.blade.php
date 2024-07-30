@extends('layouts.app')

@section('conteudo')

<form action="/dicionarios/store" method="post">
    @csrf
    <p>
        <label for="palavra1">Palavra</label>
        <input type="text" id="palavra1" name="palavra1" value="">
    </p>
    <p>
        <label for="significado1">Significado</label>
        <input type="text" id="significado1" name="significado1" value="">
    </p>
    <p>
        <button type="submit">Salvar</button>
    </p>
</form>

@endsection