@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


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
            <!-- Minhas Fazendas/NomeFazenda/Lotes/Lote#ID/Animais -->
        <li class="active">Animais</li>
    </ol>
</div>


<div class="header-tabela">
    <h1>Lotes da Fazenda {{$loteanimal->nome}}</h1>
    <a href="{{ url("frontEnd/lote/{$loteanimal->id}/animal/create") }}"><button type="button" class="btn btn-warning"><i class="fas fa-plus-circle"> Adiconar Novo Animal</i></button></a>
</div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th><th>Id Talhão</th><th>Número Fazenda</th><th>Mae</th><th>Pai</th><th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($loteanimal->animais as $animal)
                <tr>
                    <td><a href="{{ url("frontEnd/lote/{$loteanimal->id}/animal/{$animal->id}") }}">{{ $animal->id }}</a></td>
                    <td> {{ $animal->talhao_id }} </td>
                    <td> {{ $animal->numero_fazenda }} </td>
                    <td> {{ $animal->mae }} </td>
                    <td> {{ $animal->pai }} </td>
                    <td>
                        <a href="{{ url("frontEnd/lote/{$loteanimal->id}/animal/{$animal->id}/edit") }}" class="btn btn-primary btn-xs">Editar</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['frontEnd/animal', $animal->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                        <a href="{{ url("frontEnd/lote/{$loteanimal->id}/animal/{$animal->id}") }}" class="btn btn-success btn-xs">Mostrar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
