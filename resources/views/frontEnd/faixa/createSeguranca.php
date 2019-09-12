@extends('vendor.adminlte.layouts.app')
@section('title')
Create new Faixa
@stop

@section('main-content')

    <h1>Create New Faixa</h1>
    <hr/>

    {!! Form::open(['url' => 'faixa', 'class' => 'form-horizontal']) !!}


            <input class="hidden" name="experimento_id" value="1">
            <div class="form-group {{ $errors->has('quantidade_faixas') ? 'has-error' : ''}}">
                {!! Form::label('quantidade_faixas', 'Quantidade Faixas: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('quantidade_faixas', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('quantidade_faixas', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('area_faixa') ? 'has-error' : ''}}">
                {!! Form::label('area_faixa', 'Area Faixa: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('area_faixa', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('area_faixa', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('repeticoes') ? 'has-error' : ''}}">
                {!! Form::label('repeticoes', 'Repeticoes: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('repeticoes', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('repeticoes', '<p class="help-block">:message</p>') !!}
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