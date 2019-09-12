@extends('vendor.adminlte.layouts.app')
@section('title')
Solosensor
@stop

@section('main-content')

    <h1>Solosensor</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Piquete Id</th><th>Sensor Id</th><th>Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $solosensor->id }}</td> <td> {{ $solosensor->piquete_id }} </td><td> {{ $solosensor->sensor_id }} </td><td> {{ $solosensor->data }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection