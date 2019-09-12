@extends('backLayout.app')
@section('title')
Tratamento
@stop

@section('content')

    <h1>Tratamento <a href="{{ url('tratamento/create') }}" class="btn btn-primary pull-right btn-sm">Add New Tratamento</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbltratamento">
            <thead>
                <tr>
                    <th>ID</th><th>Descricao</th><th>Sigla</th><th>Posicao Linha</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tratamento as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('tratamento', $item->id) }}">{{ $item->descricao }}</a></td><td>{{ $item->sigla }}</td><td>{{ $item->posicao_linha }}</td>
                    <td>
                        <a href="{{ url('tratamento/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['tratamento', $item->id],
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
        $('#tbltratamento').DataTable({
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