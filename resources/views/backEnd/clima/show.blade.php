@extends('vendor.adminlte.layouts.app')
@section('title')
Clima
@stop

@section('main-content')

    <h1>Clima</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Estacao Id</th><th>Sensor Id</th><th>Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $clima->id }}</td> <td> {{ $clima->estacao_id }} </td><td> {{ $clima->sensor_id }} </td><td> {{ $clima->data }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection