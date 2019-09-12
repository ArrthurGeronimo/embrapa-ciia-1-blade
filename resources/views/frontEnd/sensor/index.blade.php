@extends('backLayout.app')
@section('title')
Sensor
@stop

@section('content')

    <h1>Sensor <a href="{{ url('sensor/create') }}" class="btn btn-primary pull-right btn-sm">Add New Sensor</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblsensor">
            <thead>
                <tr>
                    <th>ID</th><th>Piquete Id</th><th>Estacao Id</th><th>Nome</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($sensor as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('sensor', $item->id) }}">{{ $item->piquete_id }}</a></td><td>{{ $item->estacao_id }}</td><td>{{ $item->nome }}</td>
                    <td>
                        <a href="{{ url('sensor/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['sensor', $item->id],
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
        $('#tblsensor').DataTable({
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