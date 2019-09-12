@extends('backLayout.app')
@section('title')
Operacao
@stop

@section('content')

    <h1>Operacao <a href="{{ url('operacao/create') }}" class="btn btn-primary pull-right btn-sm">Add New Operacao</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbloperacao">
            <thead>
                <tr>
                    <th>ID</th><th>Piquete Id</th><th>Servico Id</th><th>Insumo Id</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($operacao as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('operacao', $item->id) }}">{{ $item->piquete_id }}</a></td><td>{{ $item->servico_id }}</td><td>{{ $item->insumo_id }}</td>
                    <td>
                        <a href="{{ url('operacao/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['operacao', $item->id],
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
        $('#tbloperacao').DataTable({
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