<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Fazenda;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

use App\Talhao;
use App\Loteanimal;

class FazendaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $fazenda = Fazenda::all();

        return view('frontEnd.fazenda.index', compact('fazenda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('frontEnd.fazenda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['user_id' => 'required', 'nome' => 'required', 'endereco' => 'required', 'latitude' => 'required', 'longitude' => 'required', 'estado' => 'required', 'municipio' => 'required', 'responsavel' => 'required', 'celular_responsavel' => 'required', ]);

        Fazenda::create($request->all());

        Session::flash('message', 'Fazenda added!');
        Session::flash('status', 'success');

        return redirect('frontEnd/fazenda');
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
        $fazenda = Fazenda::findOrFail($id);

        return view('frontEnd.fazenda.show', compact('fazenda'));
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
        $fazenda = Fazenda::findOrFail($id);

        return view('frontEnd.fazenda.edit', compact('fazenda'));
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
        $this->validate($request, ['user_id' => 'required', 'nome' => 'required', 'endereco' => 'required', 'latitude' => 'required', 'longitude' => 'required', 'estado' => 'required', 'municipio' => 'required', 'responsavel' => 'required', 'celular_responsavel' => 'required', ]);

        $fazenda = Fazenda::findOrFail($id);
        $fazenda->update($request->all());

        Session::flash('message', 'Fazenda updated!');
        Session::flash('status', 'success');

        return redirect('frontEnd/fazenda');
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
        $fazenda = Fazenda::findOrFail($id);

        $fazenda->delete();

        Session::flash('message', 'Fazenda deleted!');
        Session::flash('status', 'success');

        return redirect('frontEnd/fazenda');
    }

    /**************************
    ****** CRIADOS ************
    ***************************/
    /* TALHÕES */
    public function verTalhoes($id)
    {
        $fazenda = Fazenda::findOrFail($id);
        return view('frontEnd.fazenda.verTalhoes')->with("fazenda", $fazenda);
    }
    public function criarTalhao($id)
    {
        $fazenda = Fazenda::findOrFail($id);
        return view('frontEnd.talhao.create')->with("fazenda", $fazenda);
    }
    public function editarTalhao(Request $request)
    {
        $fazenda = Fazenda::findOrFail($request->fazenda_id);
        $talhao = Talhao::findOrFail($request->talhao_id);
        return view('frontEnd.talhao.edit')->with("fazenda", $fazenda)->with("talhao", $talhao);
    }
    public function mostrarTalhao(Request $request)
    {
        $fazenda = Fazenda::findOrFail($request->fazenda_id);
        $talhao = Talhao::findOrFail($request->talhao_id);
        return view('frontEnd.talhao.show')->with("fazenda", $fazenda)->with("talhao", $talhao);
    }

        /* LOTES ANIMAIS */
    public function verLotes($id)
    {
        $fazenda = Fazenda::findOrFail($id);
        return view('frontEnd.fazenda.verLotes')->with("fazenda", $fazenda);
    }
    public function criarLote($id)
    {
        $fazenda = Fazenda::findOrFail($id);
        return view('frontEnd.loteanimal.create')->with("fazenda", $fazenda);
    }
    public function editarLote(Request $request)
    {
        $fazenda = Fazenda::findOrFail($request->fazenda_id);
        $loteanimal = Loteanimal::findOrFail($request->loteanimal_id);
        return view('frontEnd.loteanimal.edit')->with("fazenda", $fazenda)->with("loteanimal", $loteanimal);
    }
    public function mostrarLote(Request $request)
    {
        $fazenda = Fazenda::findOrFail($request->fazenda_id);
        $loteanimal = Loteanimal::findOrFail($request->loteanimal_id);
        return view('frontEnd.loteanimal.show')->with("fazenda", $fazenda)->with("loteanimal", $loteanimal);
    }

}
