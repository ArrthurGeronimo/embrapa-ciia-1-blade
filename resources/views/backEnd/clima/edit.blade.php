@extends('backLayout.app')
@section('title')
Edit Clima
@stop

@section('content')

    <h1>Edit Clima</h1>
    <hr/>

    {!! Form::model($clima, [
        'method' => 'PATCH',
        'url' => ['clima', $clima->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('estacao_id') ? 'has-error' : ''}}">
                {!! Form::label('estacao_id', 'Estacao Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('estacao_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('estacao_id', '<p class="help-block">:message</p>') !!}
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
            <div class="form-group {{ $errors->has('precipitacao') ? 'has-error' : ''}}">
                {!! Form::label('precipitacao', 'Precipitacao: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('precipitacao', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('precipitacao', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('temperatura') ? 'has-error' : ''}}">
                {!! Form::label('temperatura', 'Temperatura: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('temperatura', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('temperatura', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('umidade_ar') ? 'has-error' : ''}}">
                {!! Form::label('umidade_ar', 'Umidade Ar: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('umidade_ar', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('umidade_ar', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('vento') ? 'has-error' : ''}}">
                {!! Form::label('vento', 'Vento: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('vento', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('vento', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('radiacao') ? 'has-error' : ''}}">
                {!! Form::label('radiacao', 'Radiacao: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('radiacao', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('radiacao', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('pressao') ? 'has-error' : ''}}">
                {!! Form::label('pressao', 'Pressao: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('pressao', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('pressao', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('insolacao') ? 'has-error' : ''}}">
                {!! Form::label('insolacao', 'Insolacao: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('insolacao', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('insolacao', '<p class="help-block">:message</p>') !!}
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