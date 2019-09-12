<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Operacao;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class OperacaoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $operacao = Operacao::all();

        return view('backEnd.operacao.index', compact('operacao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.operacao.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['piquete_id' => 'required', 'servico_id' => 'required', 'insumo_id' => 'required', 'data' => 'required', 'unidade' => 'required', 'quantidade' => 'required', 'valor_unitario' => 'required', ]);

        Operacao::create($request->all());

        Session::flash('message', 'Operacao added!');
        Session::flash('status', 'success');

        return redirect()->action(
          'frontEnd\PiqueteController@verOperacoes', ['id' => $request->piquete_id]
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
        $operacao = Operacao::findOrFail($id);

        return view('backEnd.operacao.show', compact('operacao'));
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
        $operacao = Operacao::findOrFail($id);

        return view('backEnd.operacao.edit', compact('operacao'));
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
        $this->validate($request, ['piquete_id' => 'required', 'servico_id' => 'required', 'insumo_id' => 'required', 'data' => 'required', 'unidade' => 'required', 'quantidade' => 'required', 'valor_unitario' => 'required', ]);

        $operacao = Operacao::findOrFail($id);
        $operacao->update($request->all());

        Session::flash('message', 'Operacao updated!');
        Session::flash('status', 'success');

        return redirect()->action(
          'frontEnd\PiqueteController@verOperacoes', ['id' => $request->piquete_id]
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
        $operacao = Operacao::findOrFail($id);

        $operacao->delete();

        Session::flash('message', 'Operacao deleted!');
        Session::flash('status', 'success');

        return back();
    }

}
