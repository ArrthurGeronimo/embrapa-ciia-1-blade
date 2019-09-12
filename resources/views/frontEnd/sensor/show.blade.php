@extends('vendor.adminlte.layouts.app')
@section('title')
Sensor
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
        <li>
            <!-- Minhas Fazendas/Fazenda#NOME/Talhões/talhao#NOME/Estações/Estação#CÓDIGO/Sensores -->
            <a href="{{ url("frontEnd/estacao/{$estacao->id}/sensores") }}">Sensores</a>
        </li>
        <li class="active">
            <!-- Minhas Fazendas/Fazenda#NOME/Talhões/talhao#NOME/Estações/Estação#CÓDIGO/Sensores/Sensor#NOME -->
            Sensor {{$sensor->nome}}
        </li>
    </ol>
</div>

    <h1>Sensor</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Piquete Id</th><th>Estacao Id</th><th>Nome</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $sensor->id }}</td> <td> {{ $sensor->piquete_id }} </td><td> {{ $sensor->estacao_id }} </td><td> {{ $sensor->nome }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

<a href="{{ url("drone/") }}"><button type="button" class="btn btn-primary">Drone</button></a>

<a href="{{ url("pastagemsensor") }}"><button type="button" class="btn btn-warning">Pastagem</button></a>

<a href="{{ url("solosensor") }}"><button type="button" class="btn btn-danger">Solo</button></a>

<a href="{{ url("clima") }}"><button type="button" class="btn btn-success">Clima</button></a>

<a href="{{ url("bebedourodados") }}"><button type="button" class="btn btn-primary">Bebedouro</button></a>

<a href="{{ url("cercadados") }}"><button type="button" class="btn btn-warning">Cerca</button></a>

<a href="{{ url("cochodados") }}"><button type="button" class="btn btn-danger">Cocho</button></a>

<a href="{{ url("animaldados") }}"><button type="button" class="btn btn-success">Animal</button></a>


@endsection