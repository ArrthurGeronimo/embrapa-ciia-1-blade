@extends('backLayout.app')
@section('title')
Praga
@stop

@section('content')

    <h1>Praga <a href="{{ url('praga/create') }}" class="btn btn-primary pull-right btn-sm">Add New Praga</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblpraga">
            <thead>
                <tr>
                    <th>ID</th><th>Piquete Id</th><th>Data</th><th>Tipo</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($praga as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('praga', $item->id) }}">{{ $item->piquete_id }}</a></td><td>{{ $item->data }}</td><td>{{ $item->tipo }}</td>
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
        $('#tblpraga').DataTable({
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