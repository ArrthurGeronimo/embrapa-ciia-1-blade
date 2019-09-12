@extends('backLayout.app')
@section('title')
Edit Inteiramentecasualizado
@stop

@section('content')

    <h1>Edit Inteiramentecasualizado</h1>
    <hr/>

    {!! Form::model($inteiramentecasualizado, [
        'method' => 'PATCH',
        'url' => ['inteiramentecasualizado', $inteiramentecasualizado->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('experimento_id') ? 'has-error' : ''}}">
                {!! Form::label('experimento_id', 'Experimento Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('experimento_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('experimento_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('quantidade_tratamentos') ? 'has-error' : ''}}">
                {!! Form::label('quantidade_tratamentos', 'Quantidade Tratamentos: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('quantidade_tratamentos', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('quantidade_tratamentos', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('quantidade_repeticoes') ? 'has-error' : ''}}">
                {!! Form::label('quantidade_repeticoes', 'Quantidade Repeticoes: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('quantidade_repeticoes', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('quantidade_repeticoes', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('juntos') ? 'has-error' : ''}}">
                {!! Form::label('juntos', 'Juntos: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('juntos', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('juntos', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('juntos', '<p class="help-block">:message</p>') !!}
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