@extends('vendor.adminlte.layouts.app')
@section('title')
Bebedourodado
@stop

@section('main-content')

    <h1>Bebedourodado</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Piquete Id</th><th>Sensor Id</th><th>Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $bebedourodado->id }}</td> <td> {{ $bebedourodado->piquete_id }} </td><td> {{ $bebedourodado->sensor_id }} </td><td> {{ $bebedourodado->data }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection