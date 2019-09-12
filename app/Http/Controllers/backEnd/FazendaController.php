<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Fazenda;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

use App\Talhao;

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

        return view('backEnd.fazenda.index', compact('fazenda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.fazenda.create');
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

        return redirect('backEnd/fazenda');
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

        return view('backEnd.fazenda.show', compact('fazenda'));
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

        return view('backEnd.fazenda.edit', compact('fazenda'));
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

        return redirect('backEnd/fazenda');
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

        return redirect('backEnd/fazenda');
    }

    /**************************
    ****** CRIADOS ************
    ***************************/
    /* TALHÕES */
    public function verTalhoes($id)
    {
        $fazenda = Fazenda::findOrFail($id);
        return view('backEnd.fazenda.verTalhoes')->with("fazenda", $fazenda);
    }
    public function criarTalhao($id)
    {
        $fazenda = Fazenda::findOrFail($id);
        return view('backEnd.talhao.create')->with("fazenda", $fazenda);
    }
    public function editarTalhao(Request $request)
    {
        $fazenda = Fazenda::findOrFail($request->fazenda_id);
        $talhao = Talhao::findOrFail($request->talhao_id);
        return view('backEnd.talhao.edit')->with("fazenda", $fazenda)->with("talhao", $talhao);
    }
    public function mostrarTalhao(Request $request)
    {
        $fazenda = Fazenda::findOrFail($request->fazenda_id);
        $talhao = Talhao::findOrFail($request->talhao_id);
        return view('backEnd.talhao.show')->with("fazenda", $fazenda)->with("talhao", $talhao);
    }

}
