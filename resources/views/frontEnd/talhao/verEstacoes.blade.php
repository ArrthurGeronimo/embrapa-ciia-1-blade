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
            <a href="{{ url("frontEnd/fazenda") }}">Fazenda {{$talhao->fazenda->nome}} </a>
        </li>
        <li>
            <!-- Minhas Fazendas/Fazenda#NOME/Talhões -->
            <a href="{{ url("frontEnd/fazenda/{$talhao->fazenda->id}/talhoes") }}">Talhões</a>
        </li>
        <li>
            <!-- Minhas Fazendas/Fazenda#NOME/Talhões/talhao#NOME -->
            <a href="{{ url("frontEnd/fazenda/{$talhao->fazenda->id}/talhao/{$talhao->id}") }}">Talhão {{$talhao->nome}}</a>
        </li>
        <li class="active">
            <!-- Minhas Fazendas/Fazenda#NOME/Talhões/talhao#NOME/Estações -->
            Estações
        </li>
    </ol>
</div>

<div class="header-tabela">
    <h1>Estações do Talhão {{$talhao->nome}}</h1>
    <a href="{{ url("frontEnd/talhao/{$talhao->id}/estacao/create") }}"><button type="button" class="btn btn-warning"><i class="fas fa-plus-circle"> Adiconar Nova Estação</i></button></a>
</div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th><th>Codigo</th><th>Nome</th><th>Responsável</th><th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($talhao->estacoes as $estacao)
                <tr>
                    <td><a href="{{ url("frontEnd/talhao/{$talhao->id}/estacao/{$estacao->id}") }}">{{ $estacao->id }}</a></td>
                    <td> {{ $estacao->codigo }} </td>
                    <td> {{ $estacao->nome }} </td>
                    <td> {{ $estacao->responsavel }} </td>
                    <td>
                        <a href="{{ url("frontEnd/talhao/{$talhao->id}/estacao/{$estacao->id}/edit") }}" class="btn btn-primary btn-xs">Editar</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['frontEnd/estacao', $estacao->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                        <a href="{{ url("frontEnd/talhao/{$talhao->id}/estacao/{$estacao->id}") }}" class="btn btn-success btn-xs">Mostrar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
