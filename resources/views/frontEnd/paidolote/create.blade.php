@extends('vendor.adminlte.layouts.app')
@section('title')
Create new Paidolote
@stop

@section('main-content')

    <h1>Create New Paidolote</h1>
    <hr/>

    {!! Form::open(['url' => 'paidolote', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('loteanimal_id') ? 'has-error' : ''}}">
                {!! Form::label('loteanimal_id', 'Loteanimal Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('loteanimal_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('loteanimal_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
                {!! Form::label('nome', 'Nome: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nome', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('raca') ? 'has-error' : ''}}">
                {!! Form::label('raca', 'Raca: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('raca', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('raca', '<p class="help-block">:message</p>') !!}
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