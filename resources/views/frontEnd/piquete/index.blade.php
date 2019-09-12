@extends('vendor.adminlte.layouts.app')
@section('title')
Piquete
@stop

@section('main-content')

    <h1>Piquete <a href="{{ url('piquete/create') }}" class="btn btn-primary pull-right btn-sm">Add New Piquete</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblpiquete">
            <thead>
                <tr>
                    <th>ID</th><th>Talhao Id</th><th>Area</th><th>Capim</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($piquete as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('piquete', $item->id) }}">{{ $item->talhao_id }}</a></td><td>{{ $item->area }}</td><td>{{ $item->capim }}</td>
                    <td>
                        <a href="{{ url('piquete/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['piquete', $item->id],
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
        $('#tblpiquete').DataTable({
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
