@extends('backLayout.app')
@section('title')
Parcela
@stop

@section('content')

    <h1>Parcela <a href="{{ url('parcela/create') }}" class="btn btn-primary pull-right btn-sm">Add New Parcela</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblparcela">
            <thead>
                <tr>
                    <th>ID</th><th>Bloco Id</th><th>Nome</th><th>Area</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($parcela as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('parcela', $item->id) }}">{{ $item->bloco_id }}</a></td><td>{{ $item->nome }}</td><td>{{ $item->area }}</td>
                    <td>
                        <a href="{{ url('parcela/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['parcela', $item->id],
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
        $('#tblparcela').DataTable({
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