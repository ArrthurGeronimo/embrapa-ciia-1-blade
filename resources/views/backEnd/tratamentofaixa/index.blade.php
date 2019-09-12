@extends('backLayout.app')
@section('title')
Tratamentofaixa
@stop

@section('content')

    <h1>Tratamentofaixa <a href="{{ url('tratamentofaixa/create') }}" class="btn btn-primary pull-right btn-sm">Add New Tratamentofaixa</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbltratamentofaixa">
            <thead>
                <tr>
                    <th>ID</th><th>Faixa Id</th><th>Descricao</th><th>Sigla</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tratamentofaixa as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('tratamentofaixa', $item->id) }}">{{ $item->faixa_id }}</a></td><td>{{ $item->descricao }}</td><td>{{ $item->sigla }}</td>
                    <td>
                        <a href="{{ url('tratamentofaixa/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['tratamentofaixa', $item->id],
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
        $('#tbltratamentofaixa').DataTable({
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