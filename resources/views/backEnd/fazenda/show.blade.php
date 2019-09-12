@extends('vendor.adminlte.layouts.app')
@section('title')
Fazenda
@stop

@section('main-content')

    <h1>Fazenda</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>User Id</th><th>Nome</th><th>Endereco</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $fazenda->id }}</td> <td> {{ $fazenda->user_id }} </td><td> {{ $fazenda->nome }} </td><td> {{ $fazenda->endereco }} </td>
                </tr>
            </tbody>
        </table>
    </div>

<a href="{{ url("frontEnd/fazenda/{$fazenda->id}/talhoes") }}"><button type="button" class="btn btn-primary">Talhões</button></a>

@endsection
