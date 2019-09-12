@extends('vendor.adminlte.layouts.app')
@section('title')
Manejoanimal
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
            <a href="{{ url("frontEnd/fazenda/{$animal->loteanimal->fazenda->id}/lote/{$animal->loteanimal->id}") }}">Lote #{{$animal->loteanimal->identificacao}}
            </a>
        </li>
        <li>
            <!-- Minhas Fazendas/NomeFazenda/Lotes/Lote#ID/Animais -->
            <a href="{{ url("frontEnd/lote/{$animal->loteanimal->id}/animais") }}">Animais
            </a>
        </li>
        <li>
            <!-- Minhas Fazendas/NomeFazenda/Lotes/Lote#ID/Animais/Animal#ID -->
            <a href="{{ url("frontEnd/lote/{$animal->loteanimal->id}/animal/{$animal->id}") }}">Animal #{{$animal->id}}
            </a>
        </li>
        <li>
            <!-- Minhas Fazendas/NomeFazenda/Lotes/Lote#ID/Animais/Animal#ID/Manejos -->
            <a href="{{ url("frontEnd/animal/{$animal->loteanimal->id}/manejos") }}">Manejos
            </a>
        </li>
            <!-- Minhas Fazendas/NomeFazenda/Lotes/Lote#ID/Animal#ID/Manejos/Manejo#ID -->
        <li class="active">Manejo #{{$manejoanimal->id}}</li>
    </ol>
</div>

    <h1>Manejoanimal</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Servicoanimal Id</th><th>Insumoanimal Id</th><th>Movimentacaoanimal Id</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $manejoanimal->id }}</td> <td> {{ $manejoanimal->servicoanimal_id }} </td><td> {{ $manejoanimal->insumoanimal_id }} </td><td> {{ $manejoanimal->movimentacaoanimal_id }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection