@extends('vendor.adminlte.layouts.app')
@section('title')
Talhao
@stop

@section('main-content')

<div class="container-breadcrumbs">
  <ol class="breadcrumb">
        <li><a href="{{ url("frontEnd/fazenda") }}"><i class="fab fa-safari"></i> Minhas Fazendas</a></li>
        <li><a href="{{ url("frontEnd/fazenda/{$fazenda->id}") }}">Fazenda {{ $fazenda->nome }}</a></li>
        <li><a href="{{ url("frontEnd/fazenda/{$fazenda->id}/talhoes") }}">Talhões</a></li>
        <li class="active">Talhão {{ $talhao->nome }}</li>
    </ol>
</div>

    <h1>Talhao</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Fazenda Id</th><th>Nome</th><th>Area</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $talhao->id }}</td> <td> {{ $talhao->fazenda_id }} </td><td> {{ $talhao->nome }} </td><td> {{ $talhao->area }} </td>
                </tr>
            </tbody>
        </table>
    </div>

<a href="{{ url("frontEnd/talhao/{$talhao->id}/piquetes") }}"><button type="button" class="btn btn-primary">Piquetes</button></a>

<a href="{{ url("frontEnd/talhao/{$talhao->id}/estacoes") }}"><button type="button" class="btn btn-warning">Estações</button></a>

@endsection
