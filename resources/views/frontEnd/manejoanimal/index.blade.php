@extends('vendor.adminlte.layouts.app')
@section('title')
Manejoanimal
@stop

@section('main-content')

    <h1>Manejoanimal <a href="{{ url('manejoanimal/create') }}" class="btn btn-primary pull-right btn-sm">Add New Manejoanimal</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblmanejoanimal">
            <thead>
                <tr>
                    <th>ID</th><th>Servicoanimal Id</th><th>Insumoanimal Id</th><th>Movimentacaoanimal Id</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($manejoanimal as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('manejoanimal', $item->id) }}">{{ $item->servicoanimal_id }}</a></td><td>{{ $item->insumoanimal_id }}</td><td>{{ $item->movimentacaoanimal_id }}</td>
                    <td>
                        <a href="{{ url('manejoanimal/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['manejoanimal', $item->id],
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
        $('#tblmanejoanimal').DataTable({
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