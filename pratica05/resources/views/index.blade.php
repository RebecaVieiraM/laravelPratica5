@extends('layouts.app')

@section('conteudo')

<div class="grid-cabecalho">
    <h2>Dicionário</h2>
    <a href="/dicionarios/create">Criar Novo</a>
</div>
<table>
    <tr>
        <th>Palavra</th>
        <th>Significado</th>
        <th>-</th>
    </tr>
    @foreach($palavras as $palavras)
    <tr>
        <td>{{ $palavras->palavra1 }}</td>
        <td>{{ $palavras->significado1 }}</td>
        <td>
            <form action="/dicionarios/delete" method="post" id="form-delete-{{ $palavras->id }}">
                @csrf
                <input type="hidden" name="id" value="{{ $palavras->id }}">
                <a href="javascript:var c = confirm('Deseja deletar o item?'); if(c){document.getElementById('form-delete-{{ $palavras->id }}').submit();}">EXCLUIR</a>
                @method("DELETE")
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection