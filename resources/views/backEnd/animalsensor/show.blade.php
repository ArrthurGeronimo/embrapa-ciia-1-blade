@extends('vendor.adminlte.layouts.app')
@section('title')
Animalsensor
@stop

@section('main-content')

    <h1>Animalsensor</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Animal Id</th><th>Sensor Id</th><th>Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $animalsensor->id }}</td> <td> {{ $animalsensor->animal_id }} </td><td> {{ $animalsensor->sensor_id }} </td><td> {{ $animalsensor->data }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection