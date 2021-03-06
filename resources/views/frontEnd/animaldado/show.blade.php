@extends('vendor.adminlte.layouts.app')
@section('title')
Animaldado
@stop

@section('main-content')

<div class="container-breadcrumbs">
  <ol class="breadcrumb">
        <li>
            <!-- Minhas Fazendas -->
            <a href="{{ url("frontEnd/fazenda") }}"><i class="fab fa-safari"></i> Minhas Fazendas</a></li>
        <li>
            <!-- Minhas Fazendas/NomeFazenda -->
            <a href="{{ url("frontEnd/fazenda/{$animal->loteanimal->fazenda->id}") }}">Fazenda {{ $animal->loteanimal->fazenda->nome }}
            </a>
        </li>
        <li>
            <!-- Minhas Fazendas/NomeFazenda/Lotes -->
            <a href="{{ url("frontEnd/fazenda/{$animal->loteanimal->fazenda->id}/lotes") }}">Lotes
            </a>
        </li>
        <li>
            <!-- Minhas Fazendas/NomeFazenda/Lotes/Lote#ID -->
            <a href="{{ url("frontEnd/fazenda/{$animal->loteanimal->id}/lote/{$animal->loteanimal->id}") }}">Lote #{{$animal->loteanimal->id}}
            </a>
        </li>
        <li>
            <!-- Minhas Fazendas/NomeFazenda/Lotes/Lote#ID -->
            <a href="{{ url("frontEnd/lote/{$animal->loteanimal->id}/animais") }}">Animais
            </a>
        </li>
        <li>
            <!-- Minhas Fazendas/NomeFazenda/Lotes/Lote#ID/Animal#ID -->
            <a href="{{ url("frontEnd/lote/{$animal->loteanimal->id}/animal/{$animal->id}") }}">Animal #{{$animal->id}}
            </a>
        </li>
        <li>
            <!-- Minhas Fazendas/NomeFazenda/Lotes/Lote#ID/Animal#ID -->
            <a href="{{ url("frontEnd/animal/{$animal->id}/animaldados") }}">Dados
            </a>
        </li>
            <!-- Minhas Fazendas/NomeFazenda/Lotes/Lote#ID/Animal#ID/Manejo -->
        <li class="active">Dados #{{$animaldado->id}}</li>
    </ol>
</div>

    <h1>Animaldado</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Animal Id</th><th>Data</th><th>Nome Dado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $animaldado->id }}</td> <td> {{ $animaldado->animal_id }} </td><td> {{ $animaldado->data }} </td><td> {{ $animaldado->nome_dado }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection