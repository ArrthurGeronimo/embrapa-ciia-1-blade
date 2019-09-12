@extends('backLayout.app')
@section('title')
Tratamento
@stop

@section('content')

    <h1>Tratamento</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Descricao</th><th>Sigla</th><th>Posicao Linha</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $tratamento->id }}</td> <td> {{ $tratamento->descricao }} </td><td> {{ $tratamento->sigla }} </td><td> {{ $tratamento->posicao_linha }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection