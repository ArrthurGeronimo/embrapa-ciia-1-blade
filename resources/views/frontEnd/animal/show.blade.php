@extends('vendor.adminlte.layouts.app')
@section('title')
Animal
@stop

@section('main-content')

<div class="container-breadcrumbs">
  <ol class="breadcrumb">
        <li>
            <!-- Minhas Fazendas -->
            <a href="{{ url("frontEnd/fazenda") }}"><i class="fab fa-safari"></i> Minhas Fazendas</a></li>
        <li>
            <!-- Minhas Fazendas/NomeFazenda -->
            <a href="{{ url("frontEnd/fazenda/{$loteanimal->fazenda->id}") }}">Fazenda {{ $loteanimal->fazenda->nome }}
            </a>
        </li>
        <li>
            <!-- Minhas Fazendas/NomeFazenda/Lotes -->
            <a href="{{ url("frontEnd/fazenda/{$loteanimal->fazenda->id}/lotes") }}">Lotes
            </a>
        </li>
        <li>
            <!-- Minhas Fazendas/NomeFazenda/Lotes/Lote#ID -->
            <a href="{{ url("frontEnd/fazenda/{$loteanimal->fazenda->id}/lote/{$loteanimal->id}") }}">Lote #{{$loteanimal->identificacao}}
            </a>
        </li>
        <li>
            <!-- Minhas Fazendas/NomeFazenda/Lotes/Lote#ID/Animais -->
            <a href="{{ url("frontEnd/lote/{$loteanimal->id}/animais") }}">Animais
            </a>
        </li>
            <!-- Minhas Fazendas/NomeFazenda/Lotes/Lote#ID/Animais -->
        <li class="active">Animal #{{$animal->id}}</li>
    </ol>
</div>

    <h1>Animal</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Loteanimal Id</th><th>Talhao Id</th><th>Numero Fazenda</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $animal->id }}</td> <td> {{ $animal->loteanimal_id }} </td><td> {{ $animal->talhao_id }} </td><td> {{ $animal->numero_fazenda }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

<a href="{{ url("frontEnd/animal/{$animal->id}/manejos") }}"><button type="button" class="btn btn-primary">Manejos Animais</button></a>

<a href="{{ url("frontEnd/animal/{$animal->id}/animaldados") }}"><button type="button" class="btn btn-primary">Dados do Animal</button></a>




@endsection