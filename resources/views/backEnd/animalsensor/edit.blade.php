@extends('vendor.adminlte.layouts.app')
@section('title')
Edit Animalsensor
@stop

@section('main-content')

    <h1>Edit Animalsensor</h1>
    <hr/>

    {!! Form::model($animalsensor, [
        'method' => 'PATCH',
        'url' => ['animalsensor', $animalsensor->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('animal_id') ? 'has-error' : ''}}">
                {!! Form::label('animal_id', 'Animal Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('animal_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('animal_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('sensor_id') ? 'has-error' : ''}}">
                {!! Form::label('sensor_id', 'Sensor Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('sensor_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('sensor_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('data') ? 'has-error' : ''}}">
                {!! Form::label('data', 'Data: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('data', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('data', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('hora') ? 'has-error' : ''}}">
                {!! Form::label('hora', 'Hora: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('hora', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('hora', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('temperatural') ? 'has-error' : ''}}">
                {!! Form::label('temperatural', 'Temperatural: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('temperatural', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('temperatural', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('localizacao') ? 'has-error' : ''}}">
                {!! Form::label('localizacao', 'Localizacao: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('localizacao', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('localizacao', '<p class="help-block">:message</p>') !!}
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