@extends('backLayout.app')
@section('title')
Loteanimal
@stop

@section('content')

    <h1>Loteanimal <a href="{{ url('loteanimal/create') }}" class="btn btn-primary pull-right btn-sm">Add New Loteanimal</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblloteanimal">
            <thead>
                <tr>
                    <th>ID</th><th>Fazenda Id</th><th>Identificacao</th><th>Procedencia</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($loteanimal as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('loteanimal', $item->id) }}">{{ $item->fazenda_id }}</a></td><td>{{ $item->identificacao }}</td><td>{{ $item->procedencia }}</td>
                    <td>
                        <a href="{{ url('loteanimal/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['loteanimal', $item->id],
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
        $('#tblloteanimal').DataTable({
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