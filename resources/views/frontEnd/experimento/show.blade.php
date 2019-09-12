@extends('vendor.adminlte.layouts.app')
@section('title')
Experimento
@stop

@section('main-content')

    <h1>Experimentos</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nome</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $experimento->id }}</td> <td> {{ $experimento->nome }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

<a href="{{ url("casualizado") }}" class="btn btn-primary pull-right btn-sm">Tipo Casualizado</a>
<a href="{{ url("bloco") }}" class="btn btn-primary pull-right btn-sm">Tipo Bloco</a>
<a href="{{ url("faixa") }}" class="btn btn-primary pull-right btn-sm">Tipo Faixa</a>

<a href="{{ url("fatorial") }}" class="btn btn-primary pull-right btn-sm">Tipo Fatorial</a>

@endsection