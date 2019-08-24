@extends('layout.site')

@section('titulo', 'Competência')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Competência</h3>
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Tipo de Competência</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registros as $registro)
                        <tr>
                        <td>{{ $registro->nome }}</td>
                        <td>{{ $registro->tipo }}</td>
                        <td>
                            <a class="btn blue" href="{{ route('admin.competencias.editar',$registro->id) }}">Editar</a>
                            <a class="btn red" href="{{ route('admin.competencias.deletar',$registro->id) }}">Deletar</a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row" align="center">
            {{$registros->links()}}
        </div>
        <div class="row">
            <a class="btn blue" href="{{ route('admin.competencias.adicionar') }}">Adicionar</a>
        </div>

    </div>

@endsection