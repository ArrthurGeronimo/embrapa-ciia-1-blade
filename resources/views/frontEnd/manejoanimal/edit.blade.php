@extends('vendor.adminlte.layouts.app')
@section('title')
Edit Manejoanimal
@stop

@section('main-content')

    <h1>Edit Manejoanimal</h1>
    <hr/>

    {!! Form::model($manejoanimal, [
        'method' => 'PATCH',
        'url' => ['frontEnd/manejoanimal', $manejoanimal->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('servicoanimal_id') ? 'has-error' : ''}}">
                {!! Form::label('servicoanimal_id', 'Servicoanimal Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('servicoanimal_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('servicoanimal_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('insumoanimal_id') ? 'has-error' : ''}}">
                {!! Form::label('insumoanimal_id', 'Insumoanimal Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('insumoanimal_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('insumoanimal_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('movimentacaoanimal_id') ? 'has-error' : ''}}">
                {!! Form::label('movimentacaoanimal_id', 'Movimentacaoanimal Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('movimentacaoanimal_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('movimentacaoanimal_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('animal_id') ? 'has-error' : ''}}">
                {!! Form::label('animal_id', 'Animal Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('animal_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('animal_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('loteanimal_id') ? 'has-error' : ''}}">
                {!! Form::label('loteanimal_id', 'Loteanimal Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('loteanimal_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('loteanimal_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('data') ? 'has-error' : ''}}">
                {!! Form::label('data', 'Data: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('data', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('data', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('unidade') ? 'has-error' : ''}}">
                {!! Form::label('unidade', 'Unidade: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('unidade', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('unidade', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('quantidade') ? 'has-error' : ''}}">
                {!! Form::label('quantidade', 'Quantidade: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('quantidade', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('quantidade', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('valor_unitario') ? 'has-error' : ''}}">
                {!! Form::label('valor_unitario', 'Valor Unitario: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('valor_unitario', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('valor_unitario', '<p class="help-block">:message</p>') !!}
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