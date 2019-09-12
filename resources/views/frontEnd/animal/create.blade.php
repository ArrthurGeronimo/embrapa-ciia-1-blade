@extends('vendor.adminlte.layouts.app')
@section('title')
Create new Animal
@stop

@section('main-content')

    <h1>Create New Animal</h1>
    <hr/>

    {!! Form::open(['url' => 'frontEnd/animal', 'class' => 'form-horizontal']) !!}

            <input type="hidden" name="loteanimal_id" class="form-control" value="{{$loteanimal->id}}"/>
            
            <div class="form-group {{ $errors->has('talhao_id') ? 'has-error' : ''}}">
                {!! Form::label('talhao_id', 'Talhao Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('talhao_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('talhao_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('numero_fazenda') ? 'has-error' : ''}}">
                {!! Form::label('numero_fazenda', 'Numero Fazenda: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('numero_fazenda', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('numero_fazenda', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('pai') ? 'has-error' : ''}}">
                {!! Form::label('pai', 'Pai: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('pai', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('pai', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mae') ? 'has-error' : ''}}">
                {!! Form::label('mae', 'Mae: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('mae', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('mae', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('nascimento') ? 'has-error' : ''}}">
                {!! Form::label('nascimento', 'Nascimento: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nascimento', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nascimento', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('data_saida') ? 'has-error' : ''}}">
                {!! Form::label('data_saida', 'Data Saida: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('data_saida', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('data_saida', '<p class="help-block">:message</p>') !!}
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