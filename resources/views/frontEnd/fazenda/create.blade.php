@extends('vendor.adminlte.layouts.app')
@section('title')
Create new Fazenda
@stop

@section('main-content')

    <h1>Create New Fazenda</h1>
    <hr/>

    {!! Form::open(['url' => 'frontEnd/fazenda', 'class' => 'form-horizontal']) !!}

<!--
              <div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
                {!! Form::label('user_id', 'User Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('user_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
                </div>
              </div>
-->
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

            <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
                {!! Form::label('nome', 'Nome: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nome', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('endereco') ? 'has-error' : ''}}">
                {!! Form::label('endereco', 'Endereco: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('endereco', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('endereco', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('latitude') ? 'has-error' : ''}}">
                {!! Form::label('latitude', 'Latitude: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('latitude', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('latitude', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('longitude') ? 'has-error' : ''}}">
                {!! Form::label('longitude', 'Longitude: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('longitude', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('longitude', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
                {!! Form::label('estado', 'Estado: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('estado', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('municipio') ? 'has-error' : ''}}">
                {!! Form::label('municipio', 'Municipio: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('municipio', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('municipio', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('responsavel') ? 'has-error' : ''}}">
                {!! Form::label('responsavel', 'Responsavel: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('responsavel', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('responsavel', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('celular_responsavel') ? 'has-error' : ''}}">
                {!! Form::label('celular_responsavel', 'Celular Responsavel: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('celular_responsavel', null, ['class' => 'form-control celular-mask', 'required' => 'required']) !!}
                    {!! $errors->first('celular_responsavel', '<p class="help-block">:message</p>') !!}
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
