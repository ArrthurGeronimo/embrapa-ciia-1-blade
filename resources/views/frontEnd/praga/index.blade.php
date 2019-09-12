@extends('vendor.adminlte.layouts.app')
@section('title')
Praga
@stop

@section('main-content')

    <h1>Praga <a href="{{ url('frontEnd/praga/create') }}" class="btn btn-primary pull-right btn-sm">Add New Praga</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblamostrapasto">
            <thead>
                <tr>
                    <th>ID</th><th>Data</th><th>ID Piquete</th><th>Tipo</th><th>Especie</th><th>Densidade</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($praga as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('praga', $item->id) }}">{{ $item->data }}</a></td>
                    <td>{{ $item->piquete_id }}</td>
                    <td>{{ $item->tipo }}</td>
                    <td>{{ $item->especie }}</td>
                    <td>{{ $item->densidade }}</td>
                    <td>
                        <a href="{{ url('praga/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['praga', $item->id],
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
        $('#tblamostrapasto').DataTable({
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