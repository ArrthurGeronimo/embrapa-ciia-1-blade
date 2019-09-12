@extends('vendor.adminlte.layouts.app')
@section('title')
Piquete
@stop

@section('main-content')

    <h1>Piquete</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Talhao Id</th><th>Area</th><th>Capim</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $piquete->id }}</td> <td> {{ $piquete->talhao_id }} </td><td> {{ $piquete->area }} </td><td> {{ $piquete->capim }} </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
