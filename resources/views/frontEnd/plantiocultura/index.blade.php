@extends('backLayout.app')
@section('title')
Plantiocultura
@stop

@section('content')

    <h1>Plantiocultura <a href="{{ url('plantiocultura/create') }}" class="btn btn-primary pull-right btn-sm">Add New Plantiocultura</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblplantiocultura">
            <thead>
                <tr>
                    <th>ID</th><th>Piquete Id</th><th>Data</th><th>Peso Parcela</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($plantiocultura as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('plantiocultura', $item->id) }}">{{ $item->piquete_id }}</a></td><td>{{ $item->data }}</td><td>{{ $item->peso_parcela }}</td>
                    <td>
                        <a href="{{ url('plantiocultura/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['plantiocultura', $item->id],
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
        $('#tblplantiocultura').DataTable({
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