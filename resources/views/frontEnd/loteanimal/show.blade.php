@extends('vendor.adminlte.layouts.app')
@section('title')
Loteanimal
@stop

@section('main-content')

<div class="container-breadcrumbs">
  <ol class="breadcrumb">
        <li><a href="{{ url("frontEnd/fazenda") }}"><i class="fab fa-safari"></i> Minhas Fazendas</a></li>
        <li><a href="{{ url("frontEnd/fazenda/{$fazenda->id}") }}">Fazenda {{ $fazenda->nome }}</a></li>
        <li><a href="{{ url("frontEnd/fazenda/{$fazenda->id}/lotes") }}">Lotes</a></li>
        <li class="active">Lote #{{$loteanimal->identificacao}}</li>
    </ol>
</div>

    <h1>Loteanimal</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Fazenda Id</th><th>Identificacao</th><th>Procedencia</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $loteanimal->id }}</td> <td> {{ $loteanimal->fazenda_id }} </td><td> {{ $loteanimal->identificacao }} </td><td> {{ $loteanimal->procedencia }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

<a href="{{ url("frontEnd/lote/{$loteanimal->id}/animais") }}"><button type="button" class="btn btn-primary">Animais</button></a>

<a href="{{ url("paidolote") }}"><button type="button" class="btn btn-primary">Pai do Lote</button></a>

@endsection