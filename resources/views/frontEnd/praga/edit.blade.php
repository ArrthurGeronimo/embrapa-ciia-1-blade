@extends('vendor.adminlte.layouts.app')
@section('title')
Edit Praga
@stop

@section('main-content')

    <h1>Edit Praga</h1>
    <hr/>

    {!! Form::model($praga, [
        'method' => 'PATCH',
        'url' => ['frontEnd/praga', $praga->id],
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
            <div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
                {!! Form::label('tipo', 'Tipo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('tipo', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('especie') ? 'has-error' : ''}}">
                {!! Form::label('especie', 'Especie: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('especie', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('especie', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('densidade') ? 'has-error' : ''}}">
                {!! Form::label('densidade', 'Densidade: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('densidade', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('densidade', '<p class="help-block">:message</p>') !!}
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