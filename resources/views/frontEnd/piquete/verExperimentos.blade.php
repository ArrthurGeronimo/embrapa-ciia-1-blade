@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<div class="header-tabela">
    <h1>Experimentos do Piquete #{{$piquete->id}}</h1>
    <a href="{{ url("frontEnd/piquete/{$piquete->id}/experimento/create") }}"><button type="button" class="btn btn-warning"><i class="fas fa-plus-circle"> Adiconar Novo Experimento</i></button></a>
</div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th><th>Nome</th><th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($piquete->experimentos as $experimento)
                <tr>
                    <td><a href="{{ url("frontEnd/piquete/{$piquete->id}/experimento/{$experimento->id}") }}">{{ $experimento->id }}</a></td>
                    <td> {{ $experimento->nome }} </td>
                    <td>
                        <a href="{{ url("frontEnd/piquete/{$piquete->id}/experimento/{$experimento->id}/edit") }}" class="btn btn-primary btn-xs">Editar</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['frontEnd/experimento', $experimento->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                        <a href="{{ url("frontEnd/piquete/{$piquete->id}/experimento/{$experimento->id}") }}" class="btn btn-success btn-xs">Mostrar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
