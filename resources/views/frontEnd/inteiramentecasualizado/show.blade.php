@extends('vendor.adminlte.layouts.app')
@section('title')
Inteiramentecasualizado
@stop

@section('main-content')

    <h1>Inteiramentecasualizado</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Experimento Id</th><th>Quantidade Tratamentos</th><th>Quantidade Repeticoes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $inteiramentecasualizado->id }}</td> <td> {{ $inteiramentecasualizado->experimento_id }} </td><td> {{ $inteiramentecasualizado->quantidade_tratamentos }} </td><td> {{ $inteiramentecasualizado->quantidade_repeticoes }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

    <?php
$combinatorics = new App\Library\Math_Combinatorics;
if($inteiramentecasualizado->quantidade_tratamentos == 1){
  $set = array(
    'T1'
    );  
}
if($inteiramentecasualizado->quantidade_tratamentos == 2){
  $set = array(
    'T1',
    'T2'
    );  
}
if($inteiramentecasualizado->quantidade_tratamentos == 3){
  $set = array(
    'T1',
    'T2',
    'T3'
    );  
}
if($inteiramentecasualizado->quantidade_tratamentos == 4){
  $set = array(
    'T1',
    'T2',
    'T3',
    'T4'
    );  
}
if($inteiramentecasualizado->quantidade_tratamentos == 5){
  $set = array(
    'T1',
    'T2',
    'T3',
    'T4',
    'T5'
    );  
}
if($inteiramentecasualizado->quantidade_tratamentos == 6){
  $set = array(
    'T1',
    'T2',
    'T3',
    'T4',
    'T5',
    'T6'
    );  
}
$permutations = $combinatorics->permutations($set, $inteiramentecasualizado->quantidade_tratamentos);
//dd($permutations);
?>

<h1>Teste</h1>   

 <div id="experimento" class="experimento_casualizado"></div>

 <script>
     var experimento = d3.select("#experimento");
     var inteiramentecasualizado = <?php echo json_encode($inteiramentecasualizado); ?>;
     var linhas;

     function desenhaExperimento(quantidade_blocos, tratamentos){
        // LINHAS
        var l;
        for(l = 1; l <= quantidade_blocos; l++){
          linha = experimento.append("div")
                    .attr('class','linha');

            //TRATAMENTOS           
            var c;
            for(c = 1; c <= tratamentos; c++){
            linha.append("a")
                .attr('class','tratamento')
                .attr('href','B'+l+"C"+c)
                .attr('id','b'+l+"c"+c)
                .text(permutations[l-1][c-1]);
            }


        }// /for(linha)
        
     }// /desenhaExperimento

     desenhaExperimento(inteiramentecasualizado.quantidade_repeticoes,inteiramentecasualizado.quantidade_tratamentos);

 </script>

@endsection