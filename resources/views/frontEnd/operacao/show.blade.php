@extends('vendor.adminlte.layouts.app')
@section('title')
Operacao
@stop

@section('main-content')

    <h1>Operacao</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Piquete Id</th><th>Servico Id</th><th>Insumo Id</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $operacao->id }}</td> <td> {{ $operacao->piquete_id }} </td><td> {{ $operacao->servico_id }} </td><td> {{ $operacao->insumo_id }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection