@extends('layout.site')

@section('titulo', 'Pessoas')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Pessoas</h3>
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Data de Nascimento</th>
                        <th>Idade</th>
                        <th>Endereço</th>
                        <th>Telefone</th>
                        <th>Celular</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registros as $registro)
                        <tr>
                        <td>{{ $registro->nome }}</td>
                        <td>{{ $registro->data_nascimento }}</td>
                        <td>{{ $registro->idade }}</td>
                        <td>{{ $registro->endereco }}</td>
                        <td>{{ $registro->telefone }}</td>
                        <td>{{ $registro->celular }}</td>
                        <td>
                            <a class="btn blue" href="{{ route('admin.pessoas.editar',$registro->id) }}">Editar</a>
                            <a class="btn red" href="{{ route('admin.pessoas.deletar',$registro->id) }}">Deletar</a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn blue" href="{{ route('admin.pessoas.adicionar') }}">Adicionar</a>
        </div>

    </div>

@endsection