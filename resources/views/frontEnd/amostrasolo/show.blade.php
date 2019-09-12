@extends('vendor.adminlte.layouts.app')
@section('title')
Amostrasolo
@stop

@section('main-content')

    <h1>Amostrasolo</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Piquete Id</th><th>Data</th><th>Profundidade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $amostrasolo->id }}</td> <td> {{ $amostrasolo->piquete_id }} </td><td> {{ $amostrasolo->data }} </td><td> {{ $amostrasolo->profundidade }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection