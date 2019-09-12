@extends('vendor.adminlte.layouts.app')
@section('title')
Cochodado
@stop

@section('main-content')

    <h1>Cochodado</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Piquete Id</th><th>Sensor Id</th><th>Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $cochodado->id }}</td> <td> {{ $cochodado->piquete_id }} </td><td> {{ $cochodado->sensor_id }} </td><td> {{ $cochodado->data }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection