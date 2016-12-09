@extends('app')
@section('content')

<div class="container">
    <h1>Detalhe do Produto</h1>

    <table class="table table-striped table-bordered">
        <tbody>
            <tr>
                <th class="col-lg-2">Produto:</th>
                <td>{{ $produto->nome }}</td>
            </tr>
            <tr>
                <th class="col-lg-2">Descrição:</th>
                <td>{{ $produto->descricao }}</td>
            </tr>
        </tbody>
    </table>

    <div class="text-right">
        <a href="{{ route('produtos') }}" class="btn btn-primary">Voltar</a>&nbsp;&nbsp;
        <a href="{{ route('produtos.edit', ['id' => $produto->id]) }}" class="btn btn-primary">Editar</a>&nbsp;&nbsp;
        <a href="{{ route('produtos.destroy', ['id' => $produto->id]) }}" class="btn btn-primary">Excluir</a>&nbsp;&nbsp;
    </div>
</div>

@endsection