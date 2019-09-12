@extends('vendor.adminlte.layouts.app')
@section('title')
Create new Loteanimal
@stop

@section('main-content')

    <h1>Create New Lote de Animal</h1>
    <hr/>

    {!! Form::open(['url' => 'frontEnd/loteanimal', 'class' => 'form-horizontal']) !!}

            <input type="hidden" name="fazenda_id" class="form-control" value="{{$fazenda->id}}"/>

            <div class="form-group {{ $errors->has('identificacao') ? 'has-error' : ''}}">
                {!! Form::label('identificacao', 'Identificacao: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('identificacao', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('identificacao', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('procedencia') ? 'has-error' : ''}}">
                {!! Form::label('procedencia', 'Procedencia: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('procedencia', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('procedencia', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('data_entrada') ? 'has-error' : ''}}">
                {!! Form::label('data_entrada', 'Data Entrada: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('data_entrada', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('data_entrada', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('pai') ? 'has-error' : ''}}">
                {!! Form::label('pai', 'Pai: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('pai', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('pai', '<p class="help-block">:message</p>') !!}
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