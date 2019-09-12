@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<div class="container-breadcrumbs">
  <ol class="breadcrumb">
        <li><a href="{{ url("frontEnd/fazenda") }}"><i class="fab fa-safari"></i> Minhas Fazendas</a></li>
        <li><a href="{{ url("frontEnd/fazenda/{$fazenda->id}") }}">Fazenda {{ $fazenda->nome }}</a></li>
        <li class="active">Talhões</li>
    </ol>
</div>


<div class="header-tabela">
    <h1>Talhões da Fazenda {{$fazenda->nome}}</h1>
    <a href="{{ url("frontEnd/fazenda/{$fazenda->id}/talhao/create") }}"><button type="button" class="btn btn-warning"><i class="fas fa-plus-circle"> Adiconar Novo Talhão</i></button></a>
</div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th><th>Nome</th><th>Area</th><th>Qtd_Piquetes</th><th>Capim</th><th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($fazenda->talhoes as $talhao)
                <tr>
                    <!-- <td><a href="{{ url('talhao', $talhao->id) }}">{{ $talhao->id }}</a></td> -->
                    <td><a href="{{ url("frontEnd/fazenda/{$fazenda->id}/talhao/{$talhao->id}") }}">{{ $talhao->id }}</a></td>
                    <td> {{ $talhao->nome }} </td>
                    <td> {{ $talhao->area }} </td>
                    <td> {{ $talhao->quantidade_piquetes }} </td>
                    <td> {{ $talhao->capim }} </td>
                    <td>
                        <a href="{{ url("frontEnd/fazenda/{$fazenda->id}/talhao/{$talhao->id}/edit") }}" class="btn btn-primary btn-xs">Editar</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['frontEnd/talhao', $talhao->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                        <a href="{{ url("frontEnd/fazenda/{$fazenda->id}/talhao/{$talhao->id}") }}" class="btn btn-success btn-xs">Mostrar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
