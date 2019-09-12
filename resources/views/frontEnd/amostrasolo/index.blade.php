@extends('backLayout.app')
@section('title')
Amostrasolo
@stop

@section('content')

    <h1>Amostrasolo <a href="{{ url('amostrasolo/create') }}" class="btn btn-primary pull-right btn-sm">Add New Amostrasolo</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblamostrasolo">
            <thead>
                <tr>
                    <th>ID</th><th>Piquete Id</th><th>Data</th><th>Profundidade</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($amostrasolo as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('amostrasolo', $item->id) }}">{{ $item->piquete_id }}</a></td><td>{{ $item->data }}</td><td>{{ $item->profundidade }}</td>
                    <td>
                        <a href="{{ url('amostrasolo/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['amostrasolo', $item->id],
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
        $('#tblamostrasolo').DataTable({
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