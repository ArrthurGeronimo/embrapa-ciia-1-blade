@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<div class="header-tabela">
    <h1>Amostras de Solo do Piquete #{{$piquete->id}}</h1>
    <a href="{{ url("frontEnd/piquete/{$piquete->id}/amostrasolo/create") }}"><button type="button" class="btn btn-warning"><i class="fas fa-plus-circle"> Adiconar Nova Amostra</i></button></a>
</div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th><th>Data Amostra</th><th>Profundidade</th><th>Identificação</th><th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($piquete->amostrassolo as $amostrasolo)
                <tr>
                    <td><a href="{{ url("frontEnd/piquete/{$piquete->id}/amostrasolo/{$amostrasolo->id}") }}">{{ $amostrasolo->id }}</a></td>
                    <td> {{ $amostrasolo->data }} </td>
                    <td> {{ $amostrasolo->profundidade }} </td>
                    <td> {{ $amostrasolo->identificacao }} </td>
                    <td>
                        <a href="{{ url("frontEnd/piquete/{$piquete->id}/amostrasolo/{$amostrasolo->id}/edit") }}" class="btn btn-primary btn-xs">Editar</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['frontEnd/amostrasolo', $amostrasolo->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                        <a href="{{ url("frontEnd/piquete/{$piquete->id}/amostrasolo/{$amostrasolo->id}") }}" class="btn btn-success btn-xs">Mostrar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
