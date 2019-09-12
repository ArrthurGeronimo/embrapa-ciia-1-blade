@extends('backLayout.app')
@section('title')
Estacao
@stop

@section('content')

    <h1>Estacao <a href="{{ url('estacao/create') }}" class="btn btn-primary pull-right btn-sm">Add New Estacao</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblestacao">
            <thead>
                <tr>
                    <th>ID</th><th>Talhao Id</th><th>Codigo</th><th>Nome</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($estacao as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('estacao', $item->id) }}">{{ $item->talhao_id }}</a></td><td>{{ $item->codigo }}</td><td>{{ $item->nome }}</td>
                    <td>
                        <a href="{{ url('estacao/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['estacao', $item->id],
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
        $('#tblestacao').DataTable({
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