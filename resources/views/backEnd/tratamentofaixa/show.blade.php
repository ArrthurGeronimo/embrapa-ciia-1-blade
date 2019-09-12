@extends('backLayout.app')
@section('title')
Tratamentofaixa
@stop

@section('content')

    <h1>Tratamentofaixa</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Faixa Id</th><th>Descricao</th><th>Sigla</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $tratamentofaixa->id }}</td> <td> {{ $tratamentofaixa->faixa_id }} </td><td> {{ $tratamentofaixa->descricao }} </td><td> {{ $tratamentofaixa->sigla }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection