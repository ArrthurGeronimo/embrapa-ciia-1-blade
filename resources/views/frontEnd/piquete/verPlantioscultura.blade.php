@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<div class="header-tabela">
    <h1>Plantios Cultura do Piquete #{{$piquete->id}}</h1>
    <a href="{{ url("frontEnd/piquete/{$piquete->id}/plantiocultura/create") }}"><button type="button" class="btn btn-warning"><i class="fas fa-plus-circle"> Adiconar Novo Plantio</i></button></a>
</div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th><th>Data Amostra</th><th>Peso Parcela</th><th>Peso Amostra</th><th>Identificação</th><th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($piquete->plantioscultura as $plantiocultura)
                <tr>
                    <td><a href="{{ url("frontEnd/piquete/{$piquete->id}/plantiocultura/{$plantiocultura->id}") }}">{{ $plantiocultura->id }}</a></td>
                    <td> {{ $plantiocultura->data }} </td>
                    <td> {{ $plantiocultura->peso_parcela }} </td>
                    <td> {{ $plantiocultura->peso_amostra }} </td>
                    <td> {{ $plantiocultura->identificacao }} </td>
                    <td>
                        <a href="{{ url("frontEnd/piquete/{$piquete->id}/plantiocultura/{$plantiocultura->id}/edit") }}" class="btn btn-primary btn-xs">Editar</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['frontEnd/plantiocultura', $plantiocultura->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                        <a href="{{ url("frontEnd/piquete/{$piquete->id}/plantiocultura/{$plantiocultura->id}") }}" class="btn btn-success btn-xs">Mostrar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
