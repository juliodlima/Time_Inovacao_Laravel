@extends('layout.site')

@section('titulo', 'Competências')

@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionar Competências</h3>
        <div class="row">
        <form class="" action="{{ route('admin.competencias.salvar') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('admin.competencias._form')

            <button class="btn deep-orange">Salvar</button>

        </form>
        </div>

    </div>

@endsection