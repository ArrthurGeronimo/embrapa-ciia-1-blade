@extends('vendor.adminlte.layouts.app')
@section('title')
Bloco
@stop

@section('main-content')

    <h1>Bloco</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Experimento Id</th><th>Quantidade Blocos</th><th>Quantidade Tratamentos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $bloco->id }}</td> <td> {{ $bloco->experimento_id }} </td><td> {{ $bloco->quantidade_blocos }} </td><td> {{ $bloco->quantidade_tratamentos }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

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
dd($permutations);
?>
<input id="permutations" type="hidden" value="{{ count($permutations) }}">

<h1>Bloco#{{ $bloco->id }}</h1>

 <div id="experimento"></div>

 <div class="containerLegenda">
   <label>Legenda</label>
   <div id="boxLegenda"></div>
 </div>

<?php $contador = 1 ?>
<?php $repeticao = $bloco->quantidade_blocos ?>
@foreach($tratamentobloco as $item)
<input id="{{$contador}}" type="hidden" value="{{ $item->id }}">
<?php if($contador == $repeticao){ ?>
  <input id="<?php echo "descricao-$contador" ?>" type="hidden" value="{{ $item->descricao }}">
<?php $repeticao += $bloco->quantidade_tratamentos; ?>
<?php } ?>
<?php $contador++ ?>
@endforeach

<?php $contador2 = 1 ?>
@foreach($tratamentobloco as $item)
    <input id="sigla-{{$contador2}}" type="hidden" value="{{ $item->sigla }}">
<?php $contador2++ ?>
@endforeach

 <script>
     var experimento = d3.select("#experimento");
     var bloco = <?php echo json_encode($bloco); ?>;
     var permutations = <?php echo json_encode($permutations); ?>;
     //var tratamentos = <?php /* echo json_encode($bloco->tratamentos); */ ?>;
     var linhas;
     
    var descricaoRepeticao = parseInt(bloco.quantidade_tratamentos);
    var descricaoPulo = parseInt(bloco.quantidade_tratamentos);
    let i = 1;

     function desenhaExperimento(quantidade_blocos, tratamentos){
      console.log('Começou a desenha');
        // LINHAS
        var l;
        let pulo = 1;
        for(l = 1; l <= quantidade_blocos; l++){
          linha = experimento.append("div")
                    .attr('class','linha drag-list')
                    .attr('id','linha-'+l);

            elemento = document.getElementById("linha-"+l);          
            elemento.innerHTML = '<p> BLOCO '+l+' </p>';

            //TRATAMENTOS           
            var c;
            let quantidadePermutations = document.getElementById("permutations").value;
            let aux1 = quantidadePermutations/bloco.quantidade_blocos;

            for(c = 1; c <= tratamentos; c++){

            let texto = document.getElementById("sigla-"+i).value;
            console.log(texto);
          
            linha.append("a")
                .attr('class','tratamento drag-item')
                .attr('href','B'+l+"C"+c)
                .attr('id','b'+l+"c"+c)
                .attr('draggable','true')
                .text(texto);
                

            let sigla = permutations[pulo-1][c-1];
            corTratamento = document.getElementById('b'+l+"c"+c);
            if( texto == "T1"){
                corTratamento.classList.add('corT1');
            }
            if( texto == "T2"){
                corTratamento.classList.add('corT2');
            }
            if( texto == "T3"){
                corTratamento.classList.add('corT3');
            }
            if( texto == "T4"){
                corTratamento.classList.add('corT4');
            }
            
            i++;
            }// /for(coluna)

            pulo += aux1;

            descricao = document.getElementById("descricao-"+descricaoRepeticao).value;
            containerLegenda = document.getElementById("boxLegenda");
            conteudoHTML = containerLegenda.innerHTML;
            containerLegenda.innerHTML = conteudoHTML+'<div class="inlineFlex"><div class="boxLegenda corT'+l+'"></div><p><span>Tratamento '+l+': </span>'+descricao+'</p></div>';
            descricaoRepeticao = descricaoRepeticao + descricaoPulo;

        }// /for(linha)
        console.log('Terminou de desenha');
     }// /desenhaExperimento

     desenhaExperimento(bloco.quantidade_blocos,bloco.quantidade_tratamentos);

 </script>


@endsection