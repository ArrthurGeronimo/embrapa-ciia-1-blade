@extends('vendor.adminlte.layouts.app')
@section('title')
Piquete
@stop

@section('main-content')

    <h1>Piquete #{{ $piquete->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Talhao Id</th><th>Area</th><th>Capim</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $piquete->id }}</td> <td> {{ $piquete->talhao_id }} </td><td> {{ $piquete->area }} </td><td> {{ $piquete->capim }} </td>
                </tr>
            </tbody>
        </table>
    </div>

<a href="{{ url("frontEnd/piquete/{$piquete->id}/pragas") }}"><button type="button" class="btn btn-primary">Pragas</button></a>

<a href="{{ url("frontEnd/piquete/{$piquete->id}/plantioscultura") }}"><button type="button" class="btn btn-primary">Plantio Cultura</button></a>

<a href="{{ url("frontEnd/piquete/{$piquete->id}/amostraspasto") }}"><button type="button" class="btn btn-primary">Amostras Pasto</button></a>

<a href="{{ url("frontEnd/piquete/{$piquete->id}/amostrassolo") }}"><button type="button" class="btn btn-primary">Amostras Solo</button></a>

<a href="{{ url("frontEnd/piquete/{$piquete->id}/operacoes") }}"><button type="button" class="btn btn-primary">Operação</button></a>

<a href="{{ url("frontEnd/piquete/{$piquete->id}/experimentos") }}"><button type="button" class="btn btn-warning">Experimento</button></a>



@endsection
