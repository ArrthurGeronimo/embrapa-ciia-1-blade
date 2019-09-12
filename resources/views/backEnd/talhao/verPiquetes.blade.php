@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<div class="container-breadcrumbs">
  <ol class="breadcrumb">
        <li><a href="{{ url("fazenda") }}"><i class="fab fa-safari"></i> Minhas Fazendas</a></li>
        <li><a href="{{ url("fazenda/{$talhao->fazenda->id}") }}">Fazenda {{ $talhao->fazenda->nome }}</a></li>
        <li class="active">Talhões</li>
    </ol>
</div>


<div class="header-tabela">
    <h1>Piquetes do Talhão {{$talhao->nome}}</h1>
    <a href="{{ url("frontEnd/talhao/{$talhao->id}/piquete/create") }}"><button type="button" class="btn btn-warning"><i class="fas fa-plus-circle"> Adiconar Novo Piquete</i></button></a>
</div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th><th>Area</th><th>Capim</th><th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($talhao->piquetes as $piquete)
                <tr>
                    <!-- <td><a href="{{ url('talhao', $talhao->id) }}">{{ $talhao->id }}</a></td> -->
                    <td><a href="{{ url("frontEnd/talhao/{$talhao->id}/piquete/{$piquete->id}") }}">{{ $piquete->id }}</a></td>
                    <td> {{ $piquete->area }} </td>
                    <td> {{ $piquete->capim }} </td>
                    <td>
                        <a href="{{ url("talhao/{$talhao->id}/piquete/{$piquete->id}/edit") }}" class="btn btn-primary btn-xs">Editar</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['piquete', $piquete->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
