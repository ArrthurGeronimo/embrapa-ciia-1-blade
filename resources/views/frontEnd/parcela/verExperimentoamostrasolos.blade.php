@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')



<div class="header-tabela">
    <h1>Experimentos - Amostras de Solo da Parcela {{$parcela->nome}}</h1>
    <a href="{{ url("frontEnd/parcela/{$parcela->id}/experimentoamostrasolo/create") }}"><button type="button" class="btn btn-warning"><i class="fas fa-plus-circle"> Adicionar Novo Experimento Amostra Pasto</i></button></a>
</div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th><th>Data</th><th>Profundidade</th><th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($parcela->experimentoamostrasolos as $experimentoamostrasolo)
                <tr>
                    <td><a href="{{ url("frontEnd/parcela/{$parcela->id}/experimentoamostrasolo/{$experimentoamostrasolo->id}") }}">{{ $experimentoamostrasolo->id }}</a></td>
                    <td> {{ $experimentoamostrasolo->data }} </td>
                    <td> {{ $experimentoamostrasolo->profundidade }} </td>
                    <td>
                        <a href="{{ url("frontEnd/parcela/{$parcela->id}/experimentoamostrasolo/{$experimentoamostrasolo->id}/edit") }}" class="btn btn-primary btn-xs">Editar</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['frontEnd/experimentoamostrasolo', $experimentoamostrasolo->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                        <a href="{{ url("frontEnd/parcela/{$parcela->id}/experimentoamostrasolo/{$experimentoamostrasolo->id}") }}" class="btn btn-success btn-xs">Mostrar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
