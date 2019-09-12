@extends('backLayout.app')
@section('title')
Praga
@stop

@section('content')

    <h1>Praga</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Piquete Id</th><th>Data</th><th>Tipo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $praga->id }}</td> <td> {{ $praga->piquete_id }} </td><td> {{ $praga->data }} </td><td> {{ $praga->tipo }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection