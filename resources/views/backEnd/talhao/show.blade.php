@extends('vendor.adminlte.layouts.app')
@section('title')
Talhao
@stop

@section('main-content')

    <h1>Talhao</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Fazenda Id</th><th>Nome</th><th>Area</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $talhao->id }}</td> <td> {{ $talhao->fazenda_id }} </td><td> {{ $talhao->nome }} </td><td> {{ $talhao->area }} </td>
                </tr>
            </tbody>
        </table>
    </div>

<a href="{{ url("frontEnd/talhao/{$talhao->id}/piquetes") }}"><button type="button" class="btn btn-primary">Piquetes</button></a>

@endsection
