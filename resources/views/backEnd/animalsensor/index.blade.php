@extends('vendor.adminlte.layouts.app')
@section('title')
Animalsensor
@stop

@section('main-content')

    <h1>Animalsensor <a href="{{ url('animalsensor/create') }}" class="btn btn-primary pull-right btn-sm">Add New Animalsensor</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblanimalsensor">
            <thead>
                <tr>
                    <th>ID</th><th>Animal Id</th><th>Sensor Id</th><th>Data</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($animalsensor as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('animalsensor', $item->id) }}">{{ $item->animal_id }}</a></td><td>{{ $item->sensor_id }}</td><td>{{ $item->data }}</td>
                    <td>
                        <a href="{{ url('animalsensor/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['animalsensor', $item->id],
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
        $('#tblanimalsensor').DataTable({
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