@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<div class="header-tabela">
    <h1>Operações do Piquete #{{$piquete->id}}</h1>
    <a href="{{ url("frontEnd/piquete/{$piquete->id}/operacao/create") }}"><button type="button" class="btn btn-warning"><i class="fas fa-plus-circle"> Adiconar Nova Operação</i></button></a>
</div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th><th>Serviço</th><th>Insumo</th><th>Data</th><th>Unidade</th><th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($piquete->operacoes as $operacao)
                <tr>
                    <td><a href="{{ url("frontEnd/piquete/{$piquete->id}/operacao/{$operacao->id}") }}">{{ $operacao->id }}</a></td>
                    <td> {{ $operacao->servico_id }} </td>
                    <td> {{ $operacao->insumo_id }} </td>
                    <td> {{ $operacao->data }} </td>
                    <td> {{ $operacao->unidade }} </td>
                    <td>
                        <a href="{{ url("frontEnd/piquete/{$piquete->id}/operacao/{$operacao->id}/edit") }}" class="btn btn-primary btn-xs">Editar</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['frontEnd/operacao', $operacao->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                        <a href="{{ url("frontEnd/piquete/{$piquete->id}/operacao/{$operacao->id}") }}" class="btn btn-success btn-xs">Mostrar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
