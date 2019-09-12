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

<!-- MODAL -->
<div class="modal fade" id="descricaoTratamentoFaixa" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Descrição dos Tratamentos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="modal-body-tratamento-faixa" class="modal-body">

      </div>
      <div class="modal-footer">
        <div class="col-sm-offset-6 col-sm-3">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
       <div class="col-sm-3">
            {!! Form::submit('Criar', ['class' => 'btn btn-primary form-control']) !!}
        </div>
      </div>
    </div>
  </div>
</div>


        

<script>
    let view = {
    descricaoTratamentos: function(){
        let formsTratamento = document.getElementById('modal-body-tratamento-faixa');
        let quantidade_faixas = document.getElementById('quantidade_faixas').value;
        formsTratamento.innerHTML = '';


        for(let i = 1; i <= quantidade_faixas; i++){
             $('#modal-body-tratamento-faixa').append('<label class="col-form-label">Descrição do Tratamento '+i+'</label></br><input type="text" class="form-control" name="descricaoTratamento'+i+'" id="descricaoTratamento'+i+'" placeholder="Digite a Descrição do Tratamento T'+i+'"><br><br>');
        }

    }
};
</script>
<!-- /MODAL -->

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            <button onclick="view.descricaoTratamentos()" type="button" class="btn btn-primary" data-toggle="modal" data-target="#descricaoTratamentoFaixa">
              Criar
            </button>
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