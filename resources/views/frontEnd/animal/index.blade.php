@extends('vendor.adminlte.layouts.app')
@section('title')
Animal
@stop

@section('main-content')

    <h1>Animal <a href="{{ url('animal/create') }}" class="btn btn-primary pull-right btn-sm">Add New Animal</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblanimal">
            <thead>
                <tr>
                    <th>ID</th><th>Loteanimal Id</th><th>Talhao Id</th><th>Numero Fazenda</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($animal as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('animal', $item->id) }}">{{ $item->loteanimal_id }}</a></td><td>{{ $item->talhao_id }}</td><td>{{ $item->numero_fazenda }}</td>
                    <td>
                        <a href="{{ url('animal/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['animal', $item->id],
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
        $('#tblanimal').DataTable({
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