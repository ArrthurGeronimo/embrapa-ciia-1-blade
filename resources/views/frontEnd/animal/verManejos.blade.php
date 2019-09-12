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
            <!-- Minhas Fazendas/NomeFazenda/Lotes/Lote#ID/Animais -->
            <a href="{{ url("frontEnd/lote/{$animal->loteanimal->id}/animal/{$animal->id}") }}">Animal #{{$animal->id}}
            </a>
        </li>
            <!-- Minhas Fazendas/NomeFazenda/Lotes/Lote#ID/Animal#ID/Manejo -->
        <li class="active">Manejos</li>
    </ol>
</div>


<div class="header-tabela">
    <h1>Manejos do Animal #{{$animal->id}}</h1>
    <a href="{{ url("frontEnd/animal/{$animal->id}/manejoanimal/create") }}"><button type="button" class="btn btn-warning"><i class="fas fa-plus-circle"> Adiconar Novo Manejo</i></button></a>
</div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th><th>Serviço</th><th>Insumo</th><th>Movimentação</th><th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($animal->manejos as $manejoanimal)
                <tr>
                    <td><a href="{{ url("frontEnd/animal/{$animal->id}/manejoanimal/{$manejoanimal->id}") }}">{{ $manejoanimal->id }}</a></td>
                    <td> {{ $manejoanimal->servicoanimal_id }} </td>
                    <td> {{ $manejoanimal->insumoanimal_id }} </td>
                    <td> {{ $manejoanimal->movimentacaoanimal_id }} </td>
                    <td>
                        <a href="{{ url("frontEnd/animal/{$animal->id}/manejoanimal/{$manejoanimal->id}/edit") }}" class="btn btn-primary btn-xs">Editar</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['frontEnd/manejoanimal', $manejoanimal->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                        <a href="{{ url("frontEnd/animal/{$animal->id}/manejoanimal/{$manejoanimal->id}") }}" class="btn btn-success btn-xs">Mostrar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
