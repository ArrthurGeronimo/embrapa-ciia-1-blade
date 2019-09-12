<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Inteiramentecasualizado;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class InteiramentecasualizadoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $inteiramentecasualizado = Inteiramentecasualizado::all();

        return view('frontEnd.inteiramentecasualizado.index', compact('inteiramentecasualizado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('frontEnd.inteiramentecasualizado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['experimento_id' => 'required', 'quantidade_tratamentos' => 'required', 'quantidade_repeticoes' => 'required', 'juntos' => 'required', ]);

        Inteiramentecasualizado::create($request->all());

        Session::flash('message', 'Inteiramentecasualizado added!');
        Session::flash('status', 'success');

        return redirect('inteiramentecasualizado');
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
        $inteiramentecasualizado = Inteiramentecasualizado::findOrFail($id);

        return view('frontEnd.inteiramentecasualizado.show', compact('inteiramentecasualizado'));
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
        $inteiramentecasualizado = Inteiramentecasualizado::findOrFail($id);

        return view('frontEnd.inteiramentecasualizado.edit', compact('inteiramentecasualizado'));
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
        $this->validate($request, ['experimento_id' => 'required', 'quantidade_tratamentos' => 'required', 'quantidade_repeticoes' => 'required', 'juntos' => 'required', ]);

        $inteiramentecasualizado = Inteiramentecasualizado::findOrFail($id);
        $inteiramentecasualizado->update($request->all());

        Session::flash('message', 'Inteiramentecasualizado updated!');
        Session::flash('status', 'success');

        return redirect('inteiramentecasualizado');
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
        $inteiramentecasualizado = Inteiramentecasualizado::findOrFail($id);

        $inteiramentecasualizado->delete();

        Session::flash('message', 'Inteiramentecasualizado deleted!');
        Session::flash('status', 'success');

        return redirect('inteiramentecasualizado');
    }

}
