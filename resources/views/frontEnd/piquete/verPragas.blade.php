@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<div class="header-tabela">
    <h1>Pragas do Piquete #{{$piquete->id}}</h1>
    <a href="{{ url("frontEnd/piquete/{$piquete->id}/praga/create") }}"><button type="button" class="btn btn-warning"><i class="fas fa-plus-circle"> Adiconar Novo Talhão</i></button></a>
</div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th><th>ID Piquete</th><th>Tipo</th><th>Especie</th><th>Densidade</th><th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($piquete->pragas as $praga)
                <tr>
                    <td><a href="{{ url("frontEnd/piquete/{$piquete->id}/praga/{$praga->id}") }}">{{ $praga->id }}</a></td>
                    <td> {{ $praga->piquete_id }} </td>
                    <td> {{ $praga->tipo }} </td>
                    <td> {{ $praga->especie }} </td>
                    <td> {{ $praga->densidade }} </td>
                    <td>
                        <a href="{{ url("frontEnd/piquete/{$piquete->id}/praga/{$praga->id}/edit") }}" class="btn btn-primary btn-xs">Editar</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['frontEnd/praga', $praga->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                        <a href="{{ url("frontEnd/piquete/{$piquete->id}/praga/{$praga->id}") }}" class="btn btn-success btn-xs">Mostrar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
