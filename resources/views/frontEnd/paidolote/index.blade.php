@extends('vendor.adminlte.layouts.app')
@section('title')
Paidolote
@stop

@section('main-content')

    <h1>Paidolote <a href="{{ url('paidolote/create') }}" class="btn btn-primary pull-right btn-sm">Add New Paidolote</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblpaidolote">
            <thead>
                <tr>
                    <th>ID</th><th>Loteanimal Id</th><th>Nome</th><th>Raca</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($paidolote as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('paidolote', $item->id) }}">{{ $item->loteanimal_id }}</a></td><td>{{ $item->nome }}</td><td>{{ $item->raca }}</td>
                    <td>
                        <a href="{{ url('paidolote/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['paidolote', $item->id],
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
        $('#tblpaidolote').DataTable({
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