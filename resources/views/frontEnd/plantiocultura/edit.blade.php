@extends('vendor.adminlte.layouts.app')
@section('title')
Edit Plantiocultura
@stop

@section('main-content')

    <h1>Edit Plantiocultura</h1>
    <hr/>

    {!! Form::model($plantiocultura, [
        'method' => 'PATCH',
        'url' => ['frontEnd/plantiocultura', $plantiocultura->id],
        'class' => 'form-horizontal'
    ]) !!}

            <input type="hidden" name="piquete_id" value="{{$piquete->id}}">
            
            <div class="form-group {{ $errors->has('data') ? 'has-error' : ''}}">
                {!! Form::label('data', 'Data: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('data', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('data', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('peso_parcela') ? 'has-error' : ''}}">
                {!! Form::label('peso_parcela', 'Peso Parcela: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('peso_parcela', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('peso_parcela', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('peso_amostra') ? 'has-error' : ''}}">
                {!! Form::label('peso_amostra', 'Peso Amostra: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('peso_amostra', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('peso_amostra', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('quantidade_espigas') ? 'has-error' : ''}}">
                {!! Form::label('quantidade_espigas', 'Quantidade Espigas: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('quantidade_espigas', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('quantidade_espigas', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('identificacao') ? 'has-error' : ''}}">
                {!! Form::label('identificacao', 'Identificacao: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('identificacao', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('identificacao', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('area') ? 'has-error' : ''}}">
                {!! Form::label('area', 'Area: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('area', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('area', '<p class="help-block">:message</p>') !!}
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