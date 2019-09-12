@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')



<div class="header-tabela">
    <h1>Amostras de Pasto do Piquete #{{$piquete->id}}</h1>
    <a href="{{ url("frontEnd/piquete/{$piquete->id}/amostrapasto/create") }}"><button type="button" class="btn btn-warning"><i class="fas fa-plus-circle"> Adiconar Nova Amostra de Pasto</i></button></a>
</div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th><th>Identificacao</th><th>Data</th><th>Altura</th><th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($piquete->amostraspasto as $amostrapasto)
                <tr>
                    <td><a href="{{ url("frontEnd/piquete/{$piquete->id}/amostrapasto/{$amostrapasto->id}") }}">{{ $amostrapasto->id }}</a></td>
                    <td> {{ $amostrapasto->identificacao }} </td>
                    <td> {{ $amostrapasto->data_amostra }} </td>
                    <td> {{ $amostrapasto->altura }} </td>
                    <td>
                        <a href="{{ url("frontEnd/piquete/{$piquete->id}/amostrapasto/{$amostrapasto->id}/edit") }}" class="btn btn-primary btn-xs">Editar</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['frontEnd/amostrapasto', $amostrapasto->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                        <a href="{{ url("frontEnd/piquete/{$piquete->id}/amostrapasto/{$amostrapasto->id}") }}" class="btn btn-success btn-xs">Mostrar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
