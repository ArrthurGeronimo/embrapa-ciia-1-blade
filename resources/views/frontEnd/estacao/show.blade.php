@extends('vendor.adminlte.layouts.app')
@section('title')
Estacao
@stop

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
        <li>
            <!-- Minhas Fazendas/Fazenda#NOME/Talhões/talhao#NOME/Estações -->
            <a href="{{ url("frontEnd/talhao/{$talhao->id}/estacoes") }}">Estações</a>
        </li>
        <li class="active">
            <!-- Minhas Fazendas/Fazenda#NOME/Talhões/talhao#NOME/Estações/Estação#CÓDIGO -->
            Estação {{$estacao->codigo}}
        </li>
    </ol>
</div>

    <h1>Estacao</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Talhao Id</th><th>Codigo</th><th>Nome</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $estacao->id }}</td> <td> {{ $estacao->talhao_id }} </td><td> {{ $estacao->codigo }} </td><td> {{ $estacao->nome }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

<a href="{{ url("frontEnd/estacao/{$estacao->id}/sensores") }}"><button type="button" class="btn btn-danger">Sensores</button></a>

@endsection