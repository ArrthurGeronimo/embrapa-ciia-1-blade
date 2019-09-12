@extends('vendor.adminlte.layouts.app')
@section('title')
Faixa
@stop

@section('main-content')

    <h1>Faixa</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Experimento Id</th><th>Quantidade Faixas</th><th>Area Faixa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $faixa->id }}</td> <td> {{ $faixa->experimento_id }} </td><td> {{ $faixa->quantidade_faixas }} </td><td> {{ $faixa->area_faixa }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

 <h1>Faixa#{{ $faixa->id }}</h1>   

 <div id="experimento"></div>

<?php $contador = 1 ?>
<?php $repeticao = $faixa->repeticoes ?>
@foreach($tratamentofaixa as $item)
<input id="{{$contador}}" type="hidden" value="{{ $item->id }}">
<?php if($contador == $repeticao){ ?>
  <input id="<?php echo "descricao-$contador" ?>" type="hidden" value="{{ $item->descricao }}">
<?php $repeticao += $faixa->repeticoes; ?>
<?php } ?>
<?php $contador++ ?>
@endforeach


 <script>
     var experimento = d3.select("#experimento");
     var faixa = <?php echo json_encode($faixa); ?>;
     //var tratamentos = <?php /* echo json_encode($faixa->tratamentos); */ ?>;
     var linhas;

     function desenhaExperimento(quantidade, repeticoes){
        // LINHAS
        var contador = 1;
        var l = 1;
        var descricaoRepeticao = parseInt(repeticoes);
        var descricaoPulo = parseInt(repeticoes);
        for(l = 1; l <= quantidade; l++){
          linha = experimento.append("div")
                    .attr('class','linha')
                    .attr('id','linha-'+l);

          descricao = document.getElementById("descricao-"+descricaoRepeticao).value;  

          elemento = document.getElementById("linha-"+l);        
          elemento.innerHTML = '<p> FAIXA '+l+' </p></br>';
          elemento.innerHTML += '<span> '+descricao+' </span>';

          descricaoRepeticao = descricaoRepeticao + descricaoPulo; 

            //TRATAMENTOS           
            var c;
            for(c = 1; c <= repeticoes; c++){
              id = document.getElementById(contador).value;
              contador++;
            linha.append("a")
                .attr('class','tratamento')
                .attr('href','http://localhost:8000/tratamentofaixa/'+id)
                .attr('id','f'+l+"r"+c)
                .text("R"+c);

            corTratamento = document.getElementById('f'+l+"r"+c);
            corTratamento.classList.add('corT'+l);
            }// for(Coluna)

           


        }// /for(linha)
        
     }// /desenhaExperimento

     desenhaExperimento(faixa.quantidade_faixas,faixa.repeticoes);

 </script>




@endsection