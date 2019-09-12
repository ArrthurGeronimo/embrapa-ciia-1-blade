@extends('vendor.adminlte.layouts.app')
@section('title')
Pastagemsensor
@stop

@section('main-content')

    <h1>Pastagemsensor</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Piquete Id</th><th>Sensor Id</th><th>Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $pastagemsensor->id }}</td> <td> {{ $pastagemsensor->piquete_id }} </td><td> {{ $pastagemsensor->sensor_id }} </td><td> {{ $pastagemsensor->data }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection