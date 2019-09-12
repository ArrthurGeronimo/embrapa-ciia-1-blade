@extends('vendor.adminlte.layouts.app')
@section('title')
Create new Amostrasolo
@stop

@section('main-content')

    <h1>Create New Amostrasolo</h1>
    <hr/>

    {!! Form::open(['url' => 'frontEnd/amostrasolo', 'class' => 'form-horizontal']) !!}

            <input type="hidden" name="piquete_id" value="{{$piquete->id}}">
            <div class="form-group {{ $errors->has('data') ? 'has-error' : ''}}">
                {!! Form::label('data', 'Data: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('data', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('data', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('profundidade') ? 'has-error' : ''}}">
                {!! Form::label('profundidade', 'Profundidade: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('profundidade', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('profundidade', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ph') ? 'has-error' : ''}}">
                {!! Form::label('ph', 'Ph: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ph', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('ph', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mo') ? 'has-error' : ''}}">
                {!! Form::label('mo', 'Mo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('mo', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('mo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('p') ? 'has-error' : ''}}">
                {!! Form::label('p', 'P: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('p', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('p', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('k') ? 'has-error' : ''}}">
                {!! Form::label('k', 'K: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('k', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('k', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ca') ? 'has-error' : ''}}">
                {!! Form::label('ca', 'Ca: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ca', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('ca', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mg') ? 'has-error' : ''}}">
                {!! Form::label('mg', 'Mg: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('mg', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('mg', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('hplusai') ? 'has-error' : ''}}">
                {!! Form::label('hplusai', 'Hplusai: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('hplusai', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('hplusai', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ai') ? 'has-error' : ''}}">
                {!! Form::label('ai', 'Ai: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ai', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('ai', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('s') ? 'has-error' : ''}}">
                {!! Form::label('s', 'S: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('s', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('s', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('cu') ? 'has-error' : ''}}">
                {!! Form::label('cu', 'Cu: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('cu', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('cu', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fe') ? 'has-error' : ''}}">
                {!! Form::label('fe', 'Fe: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('fe', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('fe', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('zn') ? 'has-error' : ''}}">
                {!! Form::label('zn', 'Zn: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('zn', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('zn', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mn') ? 'has-error' : ''}}">
                {!! Form::label('mn', 'Mn: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('mn', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('mn', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('b') ? 'has-error' : ''}}">
                {!! Form::label('b', 'B: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('b', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('b', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('identificacao') ? 'has-error' : ''}}">
                {!! Form::label('identificacao', 'Identificacao: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('identificacao', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('identificacao', '<p class="help-block">:message</p>') !!}
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