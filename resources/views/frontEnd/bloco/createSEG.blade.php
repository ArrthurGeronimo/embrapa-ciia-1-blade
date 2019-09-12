@extends('backLayout.app')
@section('title')
Create new Bloco
@stop

@section('content')

    <h1>Create New Bloco</h1>
    <hr/>

    {!! Form::open(['url' => 'bloco', 'class' => 'form-horizontal']) !!}

            <input class="hidden" name="experimento_id" value="1">
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
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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