@extends('vendor.adminlte.layouts.app')
@section('title')
Amostrapasto
@stop

@section('main-content')

    <h1>Amostrapasto <a href="{{ url('amostrapasto/create') }}" class="btn btn-primary pull-right btn-sm">Add New Amostrapasto</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblamostrapasto">
            <thead>
                <tr>
                    <th>ID</th><th>Data Amostra</th><th>Altura</th><th>Visual</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($amostrapasto as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('amostrapasto', $item->id) }}">{{ $item->data_amostra }}</a></td><td>{{ $item->altura }}</td><td>{{ $item->visual }}</td>
                    <td>
                        <a href="{{ url('amostrapasto/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['amostrapasto', $item->id],
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