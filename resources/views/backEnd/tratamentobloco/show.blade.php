@extends('backLayout.app')
@section('title')
Tratamentobloco
@stop

@section('content')

    <h1>Tratamentobloco</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Bloco Id</th><th>Descricao</th><th>Sigla</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $tratamentobloco->id }}</td> <td> {{ $tratamentobloco->bloco_id }} </td><td> {{ $tratamentobloco->descricao }} </td><td> {{ $tratamentobloco->sigla }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection