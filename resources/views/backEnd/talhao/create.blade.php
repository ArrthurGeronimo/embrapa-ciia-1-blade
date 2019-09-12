@extends('vendor.adminlte.layouts.app')
@section('title')
Create new Talhao
@stop

@section('main-content')

    <h1>Create New Talhao</h1>
    <hr/>

    {!! Form::open(['url' => 'frontEnd/talhao', 'class' => 'form-horizontal']) !!}

            <input type="hidden" name="fazenda_id" class="form-control" value="{{$fazenda->id}}"/>

            <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
                {!! Form::label('nome', 'Nome: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nome', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('area') ? 'has-error' : ''}}">
                {!! Form::label('area', 'Area: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('area', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('area', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('quantidade_piquetes') ? 'has-error' : ''}}">
                {!! Form::label('quantidade_piquetes', 'Quantidade Piquetes: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('quantidade_piquetes', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('quantidade_piquetes', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('capim') ? 'has-error' : ''}}">
                {!! Form::label('capim', 'Capim: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('capim', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('capim', '<p class="help-block">:message</p>') !!}
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
