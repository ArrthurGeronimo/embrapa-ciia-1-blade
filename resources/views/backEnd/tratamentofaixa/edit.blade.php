@extends('backLayout.app')
@section('title')
Edit Tratamentofaixa
@stop

@section('content')

    <h1>Edit Tratamentofaixa</h1>
    <hr/>

    {!! Form::model($tratamentofaixa, [
        'method' => 'PATCH',
        'url' => ['tratamentofaixa', $tratamentofaixa->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('faixa_id') ? 'has-error' : ''}}">
                {!! Form::label('faixa_id', 'Faixa Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('faixa_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('faixa_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('descricao') ? 'has-error' : ''}}">
                {!! Form::label('descricao', 'Descricao: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('descricao', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('sigla') ? 'has-error' : ''}}">
                {!! Form::label('sigla', 'Sigla: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('sigla', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('sigla', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('posicao_linha') ? 'has-error' : ''}}">
                {!! Form::label('posicao_linha', 'Posicao Linha: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('posicao_linha', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('posicao_linha', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('posicao_coluna') ? 'has-error' : ''}}">
                {!! Form::label('posicao_coluna', 'Posicao Coluna: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('posicao_coluna', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('posicao_coluna', '<p class="help-block">:message</p>') !!}
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