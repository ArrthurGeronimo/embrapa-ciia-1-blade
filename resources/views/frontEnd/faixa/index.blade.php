@extends('vendor.adminlte.layouts.app')
@section('title')
Faixa
@stop

@section('main-content')

    <h1>Faixa <a href="{{ url('faixa/create') }}" class="btn btn-primary pull-right btn-sm">Add New Faixa</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblfaixa">
            <thead>
                <tr>
                    <th>ID</th><th>Experimento Id</th><th>Quantidade Faixas</th><th>Area Faixa</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($faixa as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('faixa', $item->id) }}">{{ $item->experimento_id }}</a></td><td>{{ $item->quantidade_faixas }}</td><td>{{ $item->area_faixa }}</td>
                    <td>
                        <a href="{{ url('faixa/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['faixa', $item->id],
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
        $('#tblfaixa').DataTable({
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