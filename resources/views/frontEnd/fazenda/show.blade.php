@extends('vendor.adminlte.layouts.app')
@section('title')
Fazenda
@stop

@section('main-content')

<div class="container-breadcrumbs">
  <ol class="breadcrumb">
        <li><a href="{{ url("frontEnd/fazenda") }}"><i class="fab fa-safari"></i> Minhas Fazendas</a></li>
        <li class="active">Fazenda {{ $fazenda->nome }}</li>
    </ol>
</div>

    <h1>Fazenda</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>User Id</th><th>Nome</th><th>Endereco</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $fazenda->id }}</td> <td> {{ $fazenda->user_id }} </td><td> {{ $fazenda->nome }} </td><td> {{ $fazenda->endereco }} </td>
                </tr>
            </tbody>
        </table>
    </div>

<a href="{{ url("frontEnd/fazenda/{$fazenda->id}/talhoes") }}"><button type="button" class="btn btn-primary">Talhões</button></a>

<a href="{{ url("frontEnd/fazenda/{$fazenda->id}/lotes") }}"><button type="button" class="btn btn-primary">Lotes de Animal</button></a>

@endsection
