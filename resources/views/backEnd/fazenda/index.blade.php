@extends('vendor.adminlte.layouts.app')
@section('title')
Fazenda
@stop

@section('main-content')

    <h1>Fazenda <a href="{{ url('frontEnd/fazenda/create') }}" class="btn btn-primary pull-right btn-sm">Add New Fazenda</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblfazenda">
            <thead>
                <tr>
                    <th>ID</th><th>User Id</th><th>Nome</th><th>Endereco</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($fazenda as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('frontEnd/fazenda', $item->id) }}">{{ $item->user_id }}</a></td><td>{{ $item->nome }}</td><td>{{ $item->endereco }}</td>
                    <td>
                        <a href="{{ url('frontEnd/fazenda/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['frontEnd/fazenda', $item->id],
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
        $('#tblfazenda').DataTable({
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
