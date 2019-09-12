@extends('vendor.adminlte.layouts.app')
@section('title')
Edit Sensor
@stop

@section('main-content')

    <h1>Edit Sensor</h1>
    <hr/>

    {!! Form::model($sensor, [
        'method' => 'PATCH',
        'url' => ['frontEnd/sensor', $sensor->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('piquete_id') ? 'has-error' : ''}}">
                {!! Form::label('piquete_id', 'Piquete Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('piquete_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('piquete_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <input type="hidden" name="estacao_id" class="form-control" value="{{$estacao->id}}"/>
            <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
                {!! Form::label('nome', 'Nome: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nome', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('marca') ? 'has-error' : ''}}">
                {!! Form::label('marca', 'Marca: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('marca', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('marca', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('modelo') ? 'has-error' : ''}}">
                {!! Form::label('modelo', 'Modelo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('modelo', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('modelo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('data_fabricacao') ? 'has-error' : ''}}">
                {!! Form::label('data_fabricacao', 'Data Fabricacao: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('data_fabricacao', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('data_fabricacao', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('data_instalacao') ? 'has-error' : ''}}">
                {!! Form::label('data_instalacao', 'Data Instalacao: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('data_instalacao', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('data_instalacao', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('unidade') ? 'has-error' : ''}}">
                {!! Form::label('unidade', 'Unidade: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('unidade', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('unidade', '<p class="help-block">:message</p>') !!}
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