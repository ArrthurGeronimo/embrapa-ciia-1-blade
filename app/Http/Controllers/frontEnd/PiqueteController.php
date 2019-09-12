<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Piquete;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

use App\Praga;
use App\Amostrapasto;
use App\Plantiocultura;
use App\Amostrasolo;
use App\Operacao;
use App\Experimento;

class PiqueteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $piquete = Piquete::all();

        return view('frontEnd.piquete.index', compact('piquete'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('frontEnd.piquete.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['talhao_id' => 'required', 'area' => 'required', 'capim' => 'required', ]);

        Piquete::create($request->all());

        Session::flash('message', 'Piquete added!');
        Session::flash('status', 'success');

        return redirect()->action(
          'frontEnd\TalhaoController@verPiquetes', ['id' => $request->talhao_id]
        );
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
        $piquete = Piquete::findOrFail($id);

        return view('frontEnd.piquete.show', compact('piquete'));
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
        $piquete = Piquete::findOrFail($id);

        return view('frontEnd.piquete.edit', compact('piquete'));
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
        $this->validate($request, ['talhao_id' => 'required', 'area' => 'required', 'capim' => 'required', ]);

        $piquete = Piquete::findOrFail($id);
        $piquete->update($request->all());

        Session::flash('message', 'Piquete updated!');
        Session::flash('status', 'success');

        return redirect()->action(
          'frontEnd\TalhaoController@verPiquetes', ['id' => $request->talhao_id]
        );
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
        $piquete = Piquete::findOrFail($id);

        $piquete->delete();

        Session::flash('message', 'Piquete deleted!');
        Session::flash('status', 'success');

        return back();
    }

    /**************************
    ****** CRIADOS ************
    ***************************/
    /* PRAGAS */
    public function verPragas($id)
    {
        $piquete= Piquete::findOrFail($id);
        return view('frontEnd.piquete.verPragas')->with("piquete", $piquete);
    }
    public function criarPraga($id)
    {
        $piquete = Piquete::findOrFail($id);
        return view('frontEnd.praga.create')->with("piquete", $piquete);
    }
    public function editarPraga(Request $request)
    {
        $piquete = Piquete::findOrFail($request->piquete_id);
        $praga = Praga::findOrFail($request->praga_id);
        return view('frontEnd.praga.edit')->with("piquete", $piquete)->with("praga", $praga);
    }
    public function mostrarPraga(Request $request)
    {
        $piquete = Piquete::findOrFail($request->piquete_id);
        $praga = Praga::findOrFail($request->praga_id);
        return view('frontEnd.praga.show')->with("piquete", $piquete)->with("praga", $praga);
    }
    /* AMOSTRAS PASTO */
    public function verAmostraspasto($id)
    {
        $piquete= Piquete::findOrFail($id);
        return view('frontEnd.piquete.verAmostrasPasto')->with("piquete", $piquete);
    }
    public function criarAmostrapasto($id)
    {
        $piquete= Piquete::findOrFail($id);
        return view('frontEnd.amostrapasto.create')->with("piquete", $piquete);
    }
    public function editarAmostrapasto(Request $request)
    {
        $piquete = Piquete::findOrFail($request->piquete_id);
        $amostrapasto = Amostrapasto::findOrFail($request->amostrapasto_id);
        return view('frontEnd.amostrapasto.edit')->with("piquete", $piquete)->with("amostrapasto", $amostrapasto);
    }
     public function mostrarAmostrapasto(Request $request)
    {
        $piquete = Piquete::findOrFail($request->piquete_id);
        $amostrapasto = Amostrapasto::findOrFail($request->amostrapasto_id);
        return view('frontEnd.amostrapasto.show')->with("piquete", $piquete)->with("amostrapasto", $amostrapasto);
    }
    /* PLANTIO CULTURA */
    public function verPlantioscultura($id)
    {
        $piquete= Piquete::findOrFail($id);
        return view('frontEnd.piquete.verPlantioscultura')->with("piquete", $piquete);
    }
    public function criarPlantiocultura($id)
    {
        $piquete= Piquete::findOrFail($id);
        return view('frontEnd.plantiocultura.create')->with("piquete", $piquete);
    }
    public function editarPlantiocultura(Request $request)
    {
        $piquete = Piquete::findOrFail($request->piquete_id);
        $plantiocultura = Plantiocultura::findOrFail($request->plantiocultura_id);
        return view('frontEnd.plantiocultura.edit')->with("piquete", $piquete)->with("plantiocultura", $plantiocultura);
    }
     public function mostrarPlantiocultura(Request $request)
    {
        $piquete = Piquete::findOrFail($request->piquete_id);
        $plantiocultura = Plantiocultura::findOrFail($request->plantiocultura_id);
        return view('frontEnd.plantiocultura.show')->with("piquete", $piquete)->with("plantiocultura", $plantiocultura);
    }
        /* AMOSTRAS SOLO */
    public function verAmostrassolo($id)
    {
        $piquete= Piquete::findOrFail($id);
        return view('frontEnd.piquete.verAmostrassolo')->with("piquete", $piquete);
    }
    public function criarAmostrasolo($id)
    {
        $piquete= Piquete::findOrFail($id);
        return view('frontEnd.amostrasolo.create')->with("piquete", $piquete);
    }
    public function editarAmostrasolo(Request $request)
    {
        $piquete = Piquete::findOrFail($request->piquete_id);
        $amostrasolo = Amostrasolo::findOrFail($request->amostrasolo_id);
        return view('frontEnd.amostrasolo.edit')->with("piquete", $piquete)->with("amostrasolo", $amostrasolo);
    }
     public function mostrarAmostrasolo(Request $request)
    {
        $piquete = Piquete::findOrFail($request->piquete_id);
        $amostrasolo = Amostrasolo::findOrFail($request->amostrasolo_id);
        return view('frontEnd.amostrasolo.show')->with("piquete", $piquete)->with("amostrasolo", $amostrasolo);
    }
        /* OPERAÇÃO */
    public function verOperacoes($id)
    {
        $piquete= Piquete::findOrFail($id);
        return view('frontEnd.piquete.verOperacoes')->with("piquete", $piquete);
    }
    public function criarOperacao($id)
    {
        $piquete= Piquete::findOrFail($id);
        return view('frontEnd.operacao.create')->with("piquete", $piquete);
    }
    public function editarOperacao(Request $request)
    {
        $piquete = Piquete::findOrFail($request->piquete_id);
        $operacao = Operacao::findOrFail($request->operacao_id);
        return view('frontEnd.operacao.edit')->with("piquete", $piquete)->with("operacao", $operacao);
    }
     public function mostrarOperacao(Request $request)
    {
        $piquete = Piquete::findOrFail($request->piquete_id);
        $operacao = Operacao::findOrFail($request->operacao_id);
        return view('frontEnd.operacao.show')->with("piquete", $piquete)->with("operacao", $operacao);
    }
        /* EXPERIMENTOS */
    public function verExperimentos($id)
    {
        $piquete= Piquete::findOrFail($id);
        return view('frontEnd.piquete.verExperimentos')->with("piquete", $piquete);
    }
    public function criarExperimento($id)
    {
        $piquete= Piquete::findOrFail($id);
        return view('frontEnd.experimento.create')->with("piquete", $piquete);
    }
    public function editarExperimento(Request $request)
    {
        $piquete = Piquete::findOrFail($request->piquete_id);
        $experimento = Experimento::findOrFail($request->experimento_id);
        return view('frontEnd.experimento.edit')->with("piquete", $piquete)->with("experimento", $experimento);
    }
     public function mostrarExperimento(Request $request)
    {
        $piquete = Piquete::findOrFail($request->piquete_id);
        $experimento = Experimento::findOrFail($request->experimento_id);
        return view('frontEnd.experimento.show')->with("piquete", $piquete)->with("experimento", $experimento);
    }

}
