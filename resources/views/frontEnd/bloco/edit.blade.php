@extends('backLayout.app')
@section('title')
Edit Bloco
@stop

@section('content')

    <h1>Edit Bloco</h1>
    <hr/>

    {!! Form::model($bloco, [
        'method' => 'PATCH',
        'url' => ['bloco', $bloco->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('experimento_id') ? 'has-error' : ''}}">
                {!! Form::label('experimento_id', 'Experimento Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('experimento_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('experimento_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('quantidade_blocos') ? 'has-error' : ''}}">
                {!! Form::label('quantidade_blocos', 'Quantidade Blocos: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('quantidade_blocos', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('quantidade_blocos', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('quantidade_tratamentos') ? 'has-error' : ''}}">
                {!! Form::label('quantidade_tratamentos', 'Quantidade Tratamentos: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('quantidade_tratamentos', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('quantidade_tratamentos', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection