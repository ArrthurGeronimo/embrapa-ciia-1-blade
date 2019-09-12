@extends('vendor.adminlte.layouts.app')
@section('title')
Paidolote
@stop

@section('main-content')

    <h1>Paidolote</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Loteanimal Id</th><th>Nome</th><th>Raca</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $paidolote->id }}</td> <td> {{ $paidolote->loteanimal_id }} </td><td> {{ $paidolote->nome }} </td><td> {{ $paidolote->raca }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection