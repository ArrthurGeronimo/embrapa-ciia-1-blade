@extends('vendor.adminlte.layouts.app')
@section('title')
Drone
@stop

@section('main-content')

    <h1>Drone</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Piquete Id</th><th>Sensor Id</th><th>Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $drone->id }}</td> <td> {{ $drone->piquete_id }} </td><td> {{ $drone->sensor_id }} </td><td> {{ $drone->data }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection