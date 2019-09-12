@extends('vendor.adminlte.layouts.app')
@section('title')
Edit Amostrapasto
@stop

@section('main-content')

    <h1>Edit Amostrapasto</h1>
    <hr/>

    {!! Form::model($amostrapasto, [
        'method' => 'PATCH',
        'url' => ['frontEnd/amostrapasto', $amostrapasto->id],
        'class' => 'form-horizontal'
    ]) !!}
            
            <input type="hidden" name="piquete_id" value="{{$piquete->id}}">

                <div class="form-group {{ $errors->has('data_amostra') ? 'has-error' : ''}}">
                {!! Form::label('data_amostra', 'Data Amostra: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('data_amostra', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('data_amostra', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('altura') ? 'has-error' : ''}}">
                {!! Form::label('altura', 'Altura: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('altura', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('altura', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('visual') ? 'has-error' : ''}}">
                {!! Form::label('visual', 'Visual: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('visual', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('visual', '<p class="help-block">:message</p>') !!}
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
            <div class="form-group {{ $errors->has('ca') ? 'has-error' : ''}}">
                {!! Form::label('ca', 'Ca: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ca', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('ca', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('p') ? 'has-error' : ''}}">
                {!! Form::label('p', 'P: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('p', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('p', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('pb') ? 'has-error' : ''}}">
                {!! Form::label('pb', 'Pb: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('pb', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('pb', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ee') ? 'has-error' : ''}}">
                {!! Form::label('ee', 'Ee: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ee', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('ee', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fb') ? 'has-error' : ''}}">
                {!! Form::label('fb', 'Fb: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('fb', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('fb', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mm') ? 'has-error' : ''}}">
                {!! Form::label('mm', 'Mm: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('mm', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('mm', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fda') ? 'has-error' : ''}}">
                {!! Form::label('fda', 'Fda: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('fda', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('fda', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fdn') ? 'has-error' : ''}}">
                {!! Form::label('fdn', 'Fdn: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('fdn', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('fdn', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ndt') ? 'has-error' : ''}}">
                {!! Form::label('ndt', 'Ndt: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ndt', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('ndt', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('enn') ? 'has-error' : ''}}">
                {!! Form::label('enn', 'Enn: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('enn', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('enn', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('eb') ? 'has-error' : ''}}">
                {!! Form::label('eb', 'Eb: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('eb', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('eb', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('area') ? 'has-error' : ''}}">
                {!! Form::label('area', 'Area: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('area', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('area', '<p class="help-block">:message</p>') !!}
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