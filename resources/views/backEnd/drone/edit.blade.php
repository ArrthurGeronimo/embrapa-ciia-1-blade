@extends('vendor.adminlte.layouts.app')
@section('title')
Edit Drone
@stop

@section('main-content')

    <h1>Edit Drone</h1>
    <hr/>

    {!! Form::model($drone, [
        'method' => 'PATCH',
        'url' => ['drone', $drone->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('piquete_id') ? 'has-error' : ''}}">
                {!! Form::label('piquete_id', 'Piquete Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('piquete_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('piquete_id', '<p class="help-block">:message</p>') !!}
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
            <div class="form-group {{ $errors->has('tipo_imagem') ? 'has-error' : ''}}">
                {!! Form::label('tipo_imagem', 'Tipo Imagem: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('tipo_imagem', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('tipo_imagem', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('nome_mosaico') ? 'has-error' : ''}}">
                {!! Form::label('nome_mosaico', 'Nome Mosaico: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nome_mosaico', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nome_mosaico', '<p class="help-block">:message</p>') !!}
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