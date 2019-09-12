@extends('vendor.adminlte.layouts.app')
@section('title')
Tratamentobloco
@stop

@section('main-content')

    <h1>Tratamentobloco <a href="{{ url('tratamentobloco/create') }}" class="btn btn-primary pull-right btn-sm">Add New Tratamentobloco</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbltratamentobloco">
            <thead>
                <tr>
                    <th>ID</th><th>Bloco Id</th><th>Descricao</th><th>Sigla</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tratamentobloco as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('tratamentobloco', $item->id) }}">{{ $item->bloco_id }}</a></td><td>{{ $item->descricao }}</td><td>{{ $item->sigla }}</td>
                    <td>
                        <a href="{{ url('tratamentobloco/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['tratamentobloco', $item->id],
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
        $('#tbltratamentobloco').DataTable({
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