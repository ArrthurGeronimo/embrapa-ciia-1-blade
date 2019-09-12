@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<div class="container-breadcrumbs">
  <ol class="breadcrumb">
        <li><a href="{{ url("frontEnd/fazenda") }}"><i class="fab fa-safari"></i> Minhas Fazendas</a></li>
        <li><a href="{{ url("frontEnd/fazenda/{$fazenda->id}") }}">Fazenda {{ $fazenda->nome }}</a></li>
        <li class="active">Lotes</li>
    </ol>
</div>



<div class="header-tabela">
    <h1>Lotes da Fazenda {{$fazenda->nome}}</h1>
    <a href="{{ url("frontEnd/fazenda/{$fazenda->id}/lote/create") }}"><button type="button" class="btn btn-warning"><i class="fas fa-plus-circle"> Adiconar Novo Lote</i></button></a>
</div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th><th>Identificacao</th><th>Procedencia</th><th>Data_entrada</th><th>Pai</th><th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($fazenda->lotes as $lote)
                <tr>
                    <!-- <td><a href="{{ url('lote', $lote->id) }}">{{ $lote->id }}</a></td> -->
                    <td><a href="{{ url("frontEnd/fazenda/{$fazenda->id}/lote/{$lote->id}") }}">{{ $lote->id }}</a></td>
                    <td> {{ $lote->identificacao }} </td>
                    <td> {{ $lote->procedencia }} </td>
                    <td> {{ $lote->data_entrada }} </td>
                    <td> {{ $lote->pai }} </td>
                    <td>
                        <a href="{{ url("frontEnd/fazenda/{$fazenda->id}/lote/{$lote->id}/edit") }}" class="btn btn-primary btn-xs">Editar</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['frontEnd/loteanimal', $lote->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                        <a href="{{ url("frontEnd/fazenda/{$fazenda->id}/lote/{$lote->id}") }}" class="btn btn-success btn-xs">Mostrar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
