<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Parcela;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

use App\Experimentopraga;
use App\Experimentoplantiocultura;
use App\Experimentoamostrasolo;
use App\Experimentoamostrapasto;

class ParcelaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $parcela = Parcela::all();

        return view('backEnd.parcela.index', compact('parcela'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.parcela.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['bloco_id' => 'required', 'nome' => 'required', 'area' => 'required', ]);

        Parcela::create($request->all());

        Session::flash('message', 'Parcela added!');
        Session::flash('status', 'success');

        return redirect()->action(
          'frontEnd\BlocoController@verParcelas', ['id' => $request->bloco_id]
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
        $parcela = Parcela::findOrFail($id);

        return view('backEnd.parcela.show', compact('parcela'));
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
        $parcela = Parcela::findOrFail($id);

        return view('backEnd.parcela.edit', compact('parcela'));
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
        $this->validate($request, ['bloco_id' => 'required', 'nome' => 'required', 'area' => 'required', ]);

        $parcela = Parcela::findOrFail($id);
        $parcela->update($request->all());

        Session::flash('message', 'Parcela updated!');
        Session::flash('status', 'success');

        return redirect()->action(
          'frontEnd\BlocoController@verParcelas', ['id' => $request->bloco_id]
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
        $parcela = Parcela::findOrFail($id);

        $parcela->delete();

        Session::flash('message', 'Parcela deleted!');
        Session::flash('status', 'success');

        return back();
    }

        /**************************
    ****** CRIADOS ************
    ***************************/
    /* EXPERIMENTOS - PRAGAS */
    public function verExperimentopragas($id)
    {
        $parcela= Parcela::findOrFail($id);
        return view('frontEnd.parcela.verExperimentopragas')->with("parcela", $parcela);
    }
    public function criarExperimentopraga($id)
    {
        $parcela = Parcela::findOrFail($id);
        return view('frontEnd.experimentopraga.create')->with("parcela", $parcela);
    }
    public function editarExperimentopraga(Request $request)
    {
        $parcela = Parcela::findOrFail($request->parcela_id);
        $experimentopraga = Experimentopraga::findOrFail($request->experimentopraga_id);
        return view('frontEnd.experimentopraga.edit')->with("parcela", $parcela)->with("experimentopraga", $experimentopraga);
    }
    public function mostrarExperimentopraga(Request $request)
    {
        $parcela = Parcela::findOrFail($request->parcela_id);
        $experimentopraga = Experimentopraga::findOrFail($request->experimentopraga_id);
        return view('frontEnd.experimentopraga.show')->with("parcela", $parcela)->with("experimentopraga", $experimentopraga);
    }
    /* EXPERIMENTOS - PLANTIO CULTURA */
    public function verExperimentoplantioculturas($id)
    {
        $parcela= Parcela::findOrFail($id);
        return view('frontEnd.parcela.verExperimentoplantioculturas')->with("parcela", $parcela);
    }
    public function criarExperimentoplantiocultura($id)
    {
        $parcela = Parcela::findOrFail($id);
        return view('frontEnd.experimentoplantiocultura.create')->with("parcela", $parcela);
    }
    public function editarExperimentoplantiocultura(Request $request)
    {
        $parcela = Parcela::findOrFail($request->parcela_id);
        $experimentoplantiocultura = Experimentoplantiocultura::findOrFail($request->experimentoplantiocultura_id);
        return view('frontEnd.experimentoplantiocultura.edit')->with("parcela", $parcela)->with("experimentoplantiocultura", $experimentoplantiocultura);
    }
    public function mostrarExperimentoplantiocultura(Request $request)
    {
        $parcela = Parcela::findOrFail($request->parcela_id);
        $experimentoplantiocultura = Experimentoplantiocultura::findOrFail($request->experimentoplantiocultura_id);
        return view('frontEnd.experimentoplantiocultura.show')->with("parcela", $parcela)->with("experimentoplantiocultura", $experimentoplantiocultura);
    }
    /* EXPERIMENTOS - AMOSTRA PASTO */
    public function verExperimentoamostrapastos($id)
    {
        $parcela= Parcela::findOrFail($id);
        return view('frontEnd.parcela.verExperimentoamostrapastos')->with("parcela", $parcela);
    }
    public function criarExperimentoamostrapasto($id)
    {
        $parcela = Parcela::findOrFail($id);
        return view('frontEnd.experimentoamostrapasto.create')->with("parcela", $parcela);
    }
    public function editarExperimentoamostrapasto(Request $request)
    {
        $parcela = Parcela::findOrFail($request->parcela_id);
        $experimentoamostrapasto = Experimentoamostrapasto::findOrFail($request->experimentoamostrapasto_id);
        return view('frontEnd.experimentoamostrapasto.edit')->with("parcela", $parcela)->with("experimentoamostrapasto", $experimentoamostrapasto);
    }
    public function mostrarExperimentoamostrapasto(Request $request)
    {
        $parcela = Parcela::findOrFail($request->parcela_id);
        $experimentoamostrapasto = Experimentoamostrapasto::findOrFail($request->experimentoamostrapasto_id);
        return view('frontEnd.experimentoamostrapasto.show')->with("parcela", $parcela)->with("experimentoamostrapasto", $experimentoamostrapasto);
    }
        /* EXPERIMENTOS - AMOSTRA SOLO */
    public function verExperimentoamostrasolos($id)
    {
        $parcela= Parcela::findOrFail($id);
        return view('frontEnd.parcela.verExperimentoamostrasolos')->with("parcela", $parcela);
    }
    public function criarExperimentoamostrasolo($id)
    {
        $parcela = Parcela::findOrFail($id);
        return view('frontEnd.experimentoamostrasolo.create')->with("parcela", $parcela);
    }
    public function editarExperimentoamostrasolo(Request $request)
    {
        $parcela = Parcela::findOrFail($request->parcela_id);
        $experimentoamostrasolo = Experimentoamostrasolo::findOrFail($request->experimentoamostrasolo_id);
        return view('frontEnd.experimentoamostrasolo.edit')->with("parcela", $parcela)->with("experimentoamostrasolo", $experimentoamostrasolo);
    }
    public function mostrarExperimentoamostrasolo(Request $request)
    {
        $parcela = Parcela::findOrFail($request->parcela_id);
        $experimentoamostrasolo = Experimentoamostrasolo::findOrFail($request->experimentoamostrasolo_id);
        return view('frontEnd.experimentoamostrasolo.show')->with("parcela", $parcela)->with("experimentoamostrasolo", $experimentoamostrasolo);
    }

}
