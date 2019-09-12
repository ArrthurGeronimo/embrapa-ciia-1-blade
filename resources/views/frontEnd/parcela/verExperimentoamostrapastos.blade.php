@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')



<div class="header-tabela">
    <h1>Experimentos - Amostras Pasto da Parcela {{$parcela->nome}}</h1>
    <a href="{{ url("frontEnd/parcela/{$parcela->id}/experimentoamostrapasto/create") }}"><button type="button" class="btn btn-warning"><i class="fas fa-plus-circle"> Adicionar Novo Experimento Amostra Pasto</i></button></a>
</div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th><th>Data</th><th>Identificação</th><th>Altura</th><th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($parcela->experimentoamostrapastos as $experimentoamostrapasto)
                <tr>
                    <td><a href="{{ url("frontEnd/parcela/{$parcela->id}/experimentoamostrapasto/{$experimentoamostrapasto->id}") }}">{{ $experimentoamostrapasto->id }}</a></td>
                    <td> {{ $experimentoamostrapasto->data_amostra }} </td>
                    <td> {{ $experimentoamostrapasto->identificacao }} </td>
                    <td> {{ $experimentoamostrapasto->altura }} </td>
                    <td>
                        <a href="{{ url("frontEnd/parcela/{$parcela->id}/experimentoamostrapasto/{$experimentoamostrapasto->id}/edit") }}" class="btn btn-primary btn-xs">Editar</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['frontEnd/experimentoamostrapasto', $experimentoamostrapasto->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                        <a href="{{ url("frontEnd/parcela/{$parcela->id}/experimentoamostrapasto/{$experimentoamostrapasto->id}") }}" class="btn btn-success btn-xs">Mostrar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
