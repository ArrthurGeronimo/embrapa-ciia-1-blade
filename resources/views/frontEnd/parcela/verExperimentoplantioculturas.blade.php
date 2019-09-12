@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')



<div class="header-tabela">
    <h1>Experimentos - Plantio Cultura da Parcela {{$parcela->nome}}</h1>
    <a href="{{ url("frontEnd/parcela/{$parcela->id}/experimentoplantiocultura/create") }}"><button type="button" class="btn btn-warning"><i class="fas fa-plus-circle"> Adicionar Novo Experimento Praga</i></button></a>
</div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th><th>Data</th><th>Peso Parcela</th><th>Peso Amostra</th><th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($parcela->experimentoplantioculturas as $experimentoplantiocultura)
                <tr>
                    <td><a href="{{ url("frontEnd/parcela/{$parcela->id}/experimentoplantiocultura/{$experimentoplantiocultura->id}") }}">{{ $experimentoplantiocultura->id }}</a></td>
                    <td> {{ $experimentoplantiocultura->data }} </td>
                    <td> {{ $experimentoplantiocultura->peso_parcela }} </td>
                    <td> {{ $experimentoplantiocultura->peso_amostra }} </td>
                    <td>
                        <a href="{{ url("frontEnd/parcela/{$parcela->id}/experimentoplantiocultura/{$experimentoplantiocultura->id}/edit") }}" class="btn btn-primary btn-xs">Editar</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['frontEnd/experimentoplantiocultura', $experimentoplantiocultura->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                        <a href="{{ url("frontEnd/parcela/{$parcela->id}/experimentoplantiocultura/{$experimentoplantiocultura->id}") }}" class="btn btn-success btn-xs">Mostrar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
