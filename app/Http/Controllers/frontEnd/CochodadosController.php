<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cochodado;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class CochodadosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $cochodados = Cochodado::all();

        return view('backEnd.cochodados.index', compact('cochodados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.cochodados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['piquete_id' => 'required', 'sensor_id' => 'required', 'data' => 'required', 'hora' => 'required', 'nivel' => 'required', 'limpeza' => 'required', ]);

        Cochodado::create($request->all());

        Session::flash('message', 'Cochodado added!');
        Session::flash('status', 'success');

        return redirect('cochodados');
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
        $cochodado = Cochodado::findOrFail($id);

        return view('backEnd.cochodados.show', compact('cochodado'));
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
        $cochodado = Cochodado::findOrFail($id);

        return view('backEnd.cochodados.edit', compact('cochodado'));
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
        $this->validate($request, ['piquete_id' => 'required', 'sensor_id' => 'required', 'data' => 'required', 'hora' => 'required', 'nivel' => 'required', 'limpeza' => 'required', ]);

        $cochodado = Cochodado::findOrFail($id);
        $cochodado->update($request->all());

        Session::flash('message', 'Cochodado updated!');
        Session::flash('status', 'success');

        return redirect('cochodados');
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
        $cochodado = Cochodado::findOrFail($id);

        $cochodado->delete();

        Session::flash('message', 'Cochodado deleted!');
        Session::flash('status', 'success');

        return redirect('cochodados');
    }

}
