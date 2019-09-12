@extends('vendor.adminlte.layouts.app')
@section('title')
Amostrapasto
@stop

@section('main-content')

    <h1>Amostrapasto</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Data Amostra</th><th>Altura</th><th>Visual</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $amostrapasto->id }}</td> <td> {{ $amostrapasto->data_amostra }} </td><td> {{ $amostrapasto->altura }} </td><td> {{ $amostrapasto->visual }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection