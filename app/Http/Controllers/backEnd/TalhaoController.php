<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Talhao;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class TalhaoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $talhao = Talhao::all();

        return view('frontEnd.talhao.index', compact('talhao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('frontEnd.talhao.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['fazenda_id' => 'required', 'nome' => 'required', 'area' => 'required', 'quantidade_piquetes' => 'required', 'capim' => 'required', ]);

        Talhao::create($request->all());

        Session::flash('message', 'Talhao added!');
        Session::flash('status', 'success');

        return redirect()->action(
          'frontEnd\FazendaController@verTalhoes', ['id' => $request->fazenda_id]
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
        $talhao = Talhao::findOrFail($id);

        return view('frontEnd.talhao.show', compact('talhao'));
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
        $talhao = Talhao::findOrFail($id);

        return view('frontEnd.talhao.edit', compact('talhao'));
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
        $this->validate($request, ['fazenda_id' => 'required', 'nome' => 'required', 'area' => 'required', 'quantidade_piquetes' => 'required', 'capim' => 'required', ]);

        $talhao = Talhao::findOrFail($id);
        $talhao->update($request->all());

        Session::flash('message', 'Talhao updated!');
        Session::flash('status', 'success');

        return redirect()->action(
          'frontEnd\FazendaController@verTalhoes', ['id' => $request->fazenda_id]
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
        $talhao = Talhao::findOrFail($id);

        $talhao->delete();

        Session::flash('message', 'Talhao deleted!');
        Session::flash('status', 'success');

        return back();
    }

    /**************************
    ****** CRIADOS ************
    ***************************/
    /* PIQUETES */
    public function verPiquetes($id)
    {
        $talhao= Talhao::findOrFail($id);
        return view('frontEnd.talhao.verPiquetes')->with("talhao", $talhao);
    }
    public function criarPiquete($id)
    {
        $talhao = Talhao::findOrFail($id);
        return view('frontEnd.piquete.create')->with("talhao", $talhao);
    }

}
