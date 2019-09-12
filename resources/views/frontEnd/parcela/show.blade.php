@extends('vendor.adminlte.layouts.app')
@section('title')
Parcela
@stop

@section('main-content')

    <h1>Parcela</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Bloco Id</th><th>Nome</th><th>Area</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $parcela->id }}</td> <td> {{ $parcela->bloco_id }} </td><td> {{ $parcela->nome }} </td><td> {{ $parcela->area }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

<a href="{{ url("frontEnd/parcela/{$parcela->id}/experimentopragas") }}"><button type="button" class="btn btn-primary">Experimentos - Pragas</button></a>

<a href="{{ url("frontEnd/parcela/{$parcela->id}/experimentoplantioculturas") }}"><button type="button" class="btn btn-primary">Experimentos - Plantio Cultura</button></a>

<a href="{{ url("frontEnd/parcela/{$parcela->id}/experimentoamostrapastos") }}"><button type="button" class="btn btn-primary">Experimentos - Amostras Pasto</button></a>

<a href="{{ url("frontEnd/parcela/{$parcela->id}/experimentoamostrasolos") }}"><button type="button" class="btn btn-primary">Experimentos - Amostras Solo</button></a>

@endsection