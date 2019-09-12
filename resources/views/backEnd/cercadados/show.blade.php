@extends('vendor.adminlte.layouts.app')
@section('title')
Cercadado
@stop

@section('main-content')

    <h1>Cercadado</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Piquete Id</th><th>Sensor Id</th><th>Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $cercadado->id }}</td> <td> {{ $cercadado->piquete_id }} </td><td> {{ $cercadado->sensor_id }} </td><td> {{ $cercadado->data }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection