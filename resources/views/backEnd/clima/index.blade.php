@extends('vendor.adminlte.layouts.app')
@section('title')
Clima
@stop

@section('main-content')

    <h1>Clima <a href="{{ url('clima/create') }}" class="btn btn-primary pull-right btn-sm">Add New Clima</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblclima">
            <thead>
                <tr>
                    <th>ID</th><th>Estacao Id</th><th>Sensor Id</th><th>Data</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($clima as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('clima', $item->id) }}">{{ $item->estacao_id }}</a></td><td>{{ $item->sensor_id }}</td><td>{{ $item->data }}</td>
                    <td>
                        <a href="{{ url('clima/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['clima', $item->id],
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
        $('#tblclima').DataTable({
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