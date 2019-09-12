@extends('vendor.adminlte.layouts.app')
@section('title')
Bloco
@stop

@section('main-content')

    <h1>Confirme a Posição Dos Tratamentos</h1>


    <?php
$combinatorics = new App\Library\Math_Combinatorics;
if($bloco->quantidade_tratamentos == 1){
  $set = array(
    'T1'
    );  
}
if($bloco->quantidade_tratamentos == 2){
  $set = array(
    'T1',
    'T2'
    );  
}
if($bloco->quantidade_tratamentos == 3){
  $set = array(
    'T1',
    'T2',
    'T3'
    );  
}
if($bloco->quantidade_tratamentos == 4){
  $set = array(
    'T1',
    'T2',
    'T3',
    'T4'
    );  
}
if($bloco->quantidade_tratamentos == 5){
  $set = array(
    'T1',
    'T2',
    'T3',
    'T4',
    'T5'
    );  
}
if($bloco->quantidade_tratamentos == 6){
  $set = array(
    'T1',
    'T2',
    'T3',
    'T4',
    'T5',
    'T6'
    );  
}
$permutations = $combinatorics->permutations($set, $bloco->quantidade_tratamentos);
//dd($permutations);
?>

<input id="permutations" type="hidden" value="{{ count($permutations) }}">

 <div id="experimento"></div>

 <script>
     var experimento = d3.select("#experimento");
     var bloco = <?php echo json_encode($bloco); ?>;
     var permutations = <?php echo json_encode($permutations); ?>;
     //var tratamentos = <?php /* echo json_encode($bloco->tratamentos); */ ?>;
     var linhas;

     function desenhaExperimento(quantidade_blocos, tratamentos){
      console.log('Começou a desenha');
        // LINHAS
        var l;
        let pulo = 1;
        for(l = 1; l <= quantidade_blocos; l++){
          linha = experimento.append("div")
                    .attr('class','linha');

            //TRATAMENTOS           
            var c;
            let quantidadePermutations = document.getElementById("permutations").value;
            let aux1 = quantidadePermutations/bloco.quantidade_blocos;

            for(c = 1; c <= tratamentos; c++){
          
            linha.append("a")
                .attr('class','tratamento draggable-droppable')
                .attr('id','b'+l+"c"+c)
                .attr('draggable','true')
                .text(permutations[pulo-1][c-1]);

            let sigla = permutations[pulo-1][c-1];
            
            }// /for(coluna)

            pulo += aux1;

        }// /for(linha)
        console.log('Terminou de desenha');
     }// /desenhaExperimento

     desenhaExperimento(bloco.quantidade_blocos,bloco.quantidade_tratamentos);

     function capturarDescricoes(){
      let i = 1;
      let divD = document.getElementById("descricoesTratamentos");
      divD.innerHTML = '';
      let juntaTudoD = '';
      for(let c = 1; c <= bloco.quantidade_tratamentos; c++){
          juntaTudoD += '<label class="col-form-label">Descrição do Tratamento '+i+'</label><input type="text" class="form-control" name="descricaoTratamento'+i+'" id="descricaoTratamento'+i+'"/>';
          i++;
        }// /forColuna
        divD.innerHTML = juntaTudoD;
     };

     function capturarVariaveis(){
      let i = 1;
      let juntaTudo = '';
      let div = document.getElementById("capturarVariaveis");
      div.innerHTML = '';
      for(l = 1; l <= bloco.quantidade_blocos; l++){
        for(c = 1; c <= bloco.quantidade_tratamentos; c++){
          elemento = document.getElementById('b'+l+"c"+c);
          texto = elemento.text;
          console.log(texto);
          juntaTudo += '<input type="hidden" class="form-control" name="siglaTratamento'+i+'" id="siglaTratamento'+i+'" value="'+texto+'"/>';
          i++;
        }// /forColuna
      };// /forLinha
      div.innerHTML = juntaTudo;
      capturarDescricoes();
     }// /function

 </script>



{!! Form::open(['url' => 'tratamentobloco', 'class' => 'form-horizontal']) !!}
  <input name="_token" type="hidden" value="{{ csrf_token() }}">
  <input class="hidden" name="bloco_id" value="{{ $bloco->id }}">
  <input class="hidden" name="quantidade_blocos" value="{{ $bloco->quantidade_blocos }}">
  <input class="hidden" name="quantidade_tratamentos" value="{{ $bloco->quantidade_tratamentos }}">
  <div id="capturarVariaveis"></div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Você tem certeza?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div id="descricoesTratamentos"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
        {!! Form::submit('Sim', ['class' => 'btn btn-primary form-control']) !!}
      </div>
    </div>
  </div>
</div>

</br></br>
 <button onclick="capturarVariaveis()" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Confirmar</button>

@endsection