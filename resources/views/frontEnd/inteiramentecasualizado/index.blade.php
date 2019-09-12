@extends('backLayout.app')
@section('title')
Inteiramentecasualizado
@stop

@section('content')

    <h1>Inteiramentecasualizado <a href="{{ url('inteiramentecasualizado/create') }}" class="btn btn-primary pull-right btn-sm">Add New Inteiramentecasualizado</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblinteiramentecasualizado">
            <thead>
                <tr>
                    <th>ID</th><th>Experimento Id</th><th>Quantidade Tratamentos</th><th>Quantidade Repeticoes</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($inteiramentecasualizado as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('inteiramentecasualizado', $item->id) }}">{{ $item->experimento_id }}</a></td><td>{{ $item->quantidade_tratamentos }}</td><td>{{ $item->quantidade_repeticoes }}</td>
                    <td>
                        <a href="{{ url('inteiramentecasualizado/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['inteiramentecasualizado', $item->id],
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
        $('#tblinteiramentecasualizado').DataTable({
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