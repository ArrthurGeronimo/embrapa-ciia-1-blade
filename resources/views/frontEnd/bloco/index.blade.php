@extends('vendor.adminlte.layouts.app')
@section('title')
Bloco
@stop

@section('main-content')

    <h1>Bloco <a href="{{ url('bloco/create') }}" class="btn btn-primary pull-right btn-sm">Add New Bloco</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblbloco">
            <thead>
                <tr>
                    <th>ID</th><th>Experimento Id</th><th>Quantidade Blocos</th><th>Quantidade Tratamentos</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($bloco as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('bloco', $item->id) }}">{{ $item->experimento_id }}</a></td><td>{{ $item->quantidade_blocos }}</td><td>{{ $item->quantidade_tratamentos }}</td>
                    <td>
                        <a href="{{ url('bloco/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['bloco', $item->id],
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
        $('#tblbloco').DataTable({
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