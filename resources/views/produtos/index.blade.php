@extends('app')
@section('content')

<div class="container">
    <h1>Produtos</h1>

    <div class="text-right">
        <a href="{{ route('produtos.create') }}" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Novo produto</a>
        <br /><br />
    </div>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr class="info">
                <th class="text-center">ID</th>
                <th>Nome</th>
                <th>Descricao</th>
                <th class="col-lg-1 text-center">Ação</th>
            </tr>
        </thead>

        <tbody>
            @foreach($produtos as $produto)
            <tr>
                <td class="text-center">{{ $produto->id }}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->descricao }}</td>
                <td class="text-center">
                    <a href="{{ route('produtos.view', ['id' => $produto->id]) }}"><span class="glyphicon glyphicon-eye-open"></span></a>&nbsp;&nbsp;
                    <a href="{{ route('produtos.edit', ['id' => $produto->id]) }}"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;
                    <a href="{{ route('produtos.destroy', ['id' => $produto->id]) }}"><span class="text-danger glyphicon glyphicon-trash"></span></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
