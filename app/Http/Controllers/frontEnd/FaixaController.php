<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Faixa;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

use App\Tratamentofaixa;
use Illuminate\Support\Facades\DB;

class FaixaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $faixa = Faixa::all();

        return view('frontEnd.faixa.index', compact('faixa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('frontEnd.faixa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
       // $this->validate($request, ['experimento_id' => 'required', 'quantidade_faixas' => 'required', 'area_faixa' => 'required', 'repeticoes' => 'required', ]);

       // Faixa::create($request->all());

        //return redirect('faixa');

        $faixa = new Faixa();
        $faixa->experimento_id = $request->get('experimento_id');
        $faixa->quantidade_faixas = $request->get('quantidade_faixas');
        $faixa->area_faixa = $request->get('area_faixa');
        $faixa->repeticoes = $request->get('repeticoes');
        $faixa->save();
        $faixa_id= $faixa->id;

        $quantidade_faixas= $faixa->quantidade_faixas;
        $repeticoes= $faixa->repeticoes;

        $linha = 1;
        for($i = 1; $i <= $quantidade_faixas; $i++){
            $coluna = 1;
            $descricaoTratamento = $request->get('descricaoTratamento'.$i);
            //dd($request->get('descricaoTratamento'.$i));

            for($x = 1; $x <= $repeticoes; $x++){
                
                $tratamentofaixa = new Tratamentofaixa();
                $tratamentofaixa->faixa_id = $faixa->id;
                $tratamentofaixa->descricao = $descricaoTratamento;
                $tratamentofaixa->sigla = "F" . $linha . "R" . $coluna;
                $tratamentofaixa->posicao_linha = "l".$linha;
                $tratamentofaixa->posicao_coluna = "c".$coluna;
                $tratamentofaixa->save(); 

                $coluna++;
            }

            $linha++;
        }


        return redirect('faixa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $faixa = Faixa::findOrFail($id);

        $tratamentofaixa = DB::table('tratamentofaixas')->where('faixa_id', $id)->get();
        
        return view('frontEnd.faixa.show', compact('faixa','tratamentofaixa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $faixa = Faixa::findOrFail($id);

        return view('frontEnd.faixa.edit', compact('faixa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['experimento_id' => 'required', 'quantidade_faixas' => 'required', 'area_faixa' => 'required', 'repeticoes' => 'required', ]);

        $faixa = Faixa::findOrFail($id);
        $faixa->update($request->all());

        Session::flash('message', 'Faixa updated!');
        Session::flash('status', 'success');

        return redirect('faixa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $faixa = Faixa::findOrFail($id);

        $faixa->delete();

        Session::flash('message', 'Faixa deleted!');
        Session::flash('status', 'success');

        return redirect('faixa');
    }

}
