@extends('vendor.adminlte.layouts.app')
@section('title')
Praga
@stop

@section('main-content')

    <h1>Praga</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Data Amostra</th><th>tipo</th><th>especie</th><th>densidade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $praga->id }}</td> 
                    <td> {{ $praga->data }} </td>
                    <td> {{ $praga->tipo }} </td>
                    <td> {{ $praga->especie }} </td>
                    <td> {{ $praga->densidade }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection