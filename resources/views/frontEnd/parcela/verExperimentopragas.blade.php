@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')



<div class="header-tabela">
    <h1>Experimentos - Pragas da Parcela {{$parcela->nome}}</h1>
    <a href="{{ url("frontEnd/parcela/{$parcela->id}/experimentopraga/create") }}"><button type="button" class="btn btn-warning"><i class="fas fa-plus-circle"> Adicionar Novo Experimento Praga</i></button></a>
</div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th><th>Tipo</th><th>Espécie</th><th>Densidade</th><th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($parcela->experimentopragas as $experimentopraga)
                <tr>
                    <td><a href="{{ url("frontEnd/parcela/{$parcela->id}/experimentopraga/{$experimentopraga->id}") }}">{{ $experimentopraga->id }}</a></td>
                    <td> {{ $experimentopraga->tipo }} </td>
                    <td> {{ $experimentopraga->especie }} </td>
                    <td> {{ $experimentopraga->densidade }} </td>
                    <td>
                        <a href="{{ url("frontEnd/parcela/{$parcela->id}/experimentopraga/{$experimentopraga->id}/edit") }}" class="btn btn-primary btn-xs">Editar</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['frontEnd/experimentopraga', $experimentopraga->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                        <a href="{{ url("frontEnd/parcela/{$parcela->id}/experimentopraga/{$experimentopraga->id}") }}" class="btn btn-success btn-xs">Mostrar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
