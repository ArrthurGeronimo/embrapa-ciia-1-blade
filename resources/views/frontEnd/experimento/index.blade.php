@extends('vendor.adminlte.layouts.app')
@section('title')
Experimento
@stop

@section('main-content')

    <h1>Experimento <a href="{{ url('frontEnd/experimento/create') }}" class="btn btn-primary pull-right btn-sm">Add New Experimento</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblexperimento">
            <thead>
                <tr>
                    <th>ID</th><th>Nome</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($experimento as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('experimento', $item->id) }}">{{ $item->nome }}</a></td>
                    <td>
                        <a href="{{ url('experimento/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['experimento', $item->id],
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
        $('#tblexperimento').DataTable({
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