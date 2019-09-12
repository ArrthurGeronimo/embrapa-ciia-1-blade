@extends('vendor.adminlte.layouts.app')
@section('title')
Animaldado
@stop

@section('main-content')

    <h1>Animaldado <a href="{{ url('animaldado/create') }}" class="btn btn-primary pull-right btn-sm">Add New Animaldado</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblanimaldado">
            <thead>
                <tr>
                    <th>ID</th><th>Animal Id</th><th>Data</th><th>Nome Dado</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($animaldado as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('animaldado', $item->id) }}">{{ $item->animal_id }}</a></td><td>{{ $item->data }}</td><td>{{ $item->nome_dado }}</td>
                    <td>
                        <a href="{{ url('animaldado/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['animaldado', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#tblanimaldado').DataTable({
            columnDefs: [{
                targets: [0],
                visible: false,
                searchable: false
                },
            ],
            order: [[0, "asc"]],
        });
    });
</script>
@endsection