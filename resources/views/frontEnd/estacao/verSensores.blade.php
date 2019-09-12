@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<div class="container-breadcrumbs">
  <ol class="breadcrumb">
        <li>
            <!-- Minhas Fazendas -->
            <a href="{{ url("frontEnd/fazenda") }}"><i class="fab fa-safari"></i> Minhas Fazendas</a>
        </li>
        <li>
            <!-- Minhas Fazendas/Fazenda#NOME -->
            <a href="{{ url("frontEnd/fazenda") }}">Fazenda {{$estacao->talhao->fazenda->nome}} </a>
        </li>
        <li>
            <!-- Minhas Fazendas/Fazenda#NOME/Talhões -->
            <a href="{{ url("frontEnd/fazenda/{$estacao->talhao->fazenda->id}/talhoes") }}">Talhões</a>
        </li>
        <li>
            <!-- Minhas Fazendas/Fazenda#NOME/Talhões/talhao#NOME -->
            <a href="{{ url("frontEnd/fazenda/{$estacao->talhao->fazenda->id}/talhao/{$estacao->talhao->id}") }}">Talhão {{$estacao->talhao->nome}}</a>
        </li>
        <li>
            <!-- Minhas Fazendas/Fazenda#NOME/Talhões/talhao#NOME/Estações -->
            <a href="{{ url("frontEnd/talhao/{$estacao->talhao->id}/estacoes") }}">Estações</a>
        </li>
        <li>
            <!-- Minhas Fazendas/Fazenda#NOME/Talhões/talhao#NOME/Estações/Estação#CÓDIGO -->
            <a href="{{ url("frontEnd/talhao/{$estacao->talhao->id}/estacao/{$estacao->id}") }}">Estação {{$estacao->codigo}}</a>
        </li>
        <li class="active">
            <!-- Minhas Fazendas/Fazenda#NOME/Talhões/talhao#NOME/Estações/Estação#CÓDIGO/Sensores -->
            Sensores
        </li>
    </ol>
</div>

<div class="header-tabela">
    <h1>Piquetes do Talhão {{$estacao->nome}}</h1>
    <a href="{{ url("frontEnd/estacao/{$estacao->id}/sensor/create") }}"><button type="button" class="btn btn-warning"><i class="fas fa-plus-circle"> Adiconar Novo Piquete</i></button></a>
</div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th><th>Nome</th><th>Marca</th><th>Modelo</th><th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($estacao->sensores as $sensor)
                <tr>
                    <td><a href="{{ url("frontEnd/estacao/{$estacao->id}/sensor/{$sensor->id}") }}">{{ $sensor->id }}</a></td>
                    <td> {{ $sensor->nome }} </td>
                    <td> {{ $sensor->marca }} </td>
                    <td> {{ $sensor->modelo }} </td>
                    <td>
                        <a href="{{ url("frontEnd/estacao/{$estacao->id}/sensor/{$sensor->id}/edit") }}" class="btn btn-primary btn-xs">Editar</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['frontEnd/sensor', $sensor->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                        <a href="{{ url("frontEnd/estacao/{$estacao->id}/sensor/{$sensor->id}") }}" class="btn btn-success btn-xs">Mostrar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
