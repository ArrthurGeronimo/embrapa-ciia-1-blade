@extends('vendor.adminlte.layouts.app')
@section('title')
Plantiocultura
@stop

@section('main-content')

    <h1>Plantiocultura</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Piquete Id</th><th>Data</th><th>Peso Parcela</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $plantiocultura->id }}</td> <td> {{ $plantiocultura->piquete_id }} </td><td> {{ $plantiocultura->data }} </td><td> {{ $plantiocultura->peso_parcela }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection