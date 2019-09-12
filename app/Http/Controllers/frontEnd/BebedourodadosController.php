<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Bebedourodado;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class BebedourodadosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $bebedourodados = Bebedourodado::all();

        return view('backEnd.bebedourodados.index', compact('bebedourodados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.bebedourodados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['piquete_id' => 'required', 'sensor_id' => 'required', 'data' => 'required', 'hora' => 'required', 'nivel' => 'required', 'consumo' => 'required', 'limpeza' => 'required', ]);

        Bebedourodado::create($request->all());

        Session::flash('message', 'Bebedourodado added!');
        Session::flash('status', 'success');

        return redirect('bebedourodados');
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
        $bebedourodado = Bebedourodado::findOrFail($id);

        return view('backEnd.bebedourodados.show', compact('bebedourodado'));
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
        $bebedourodado = Bebedourodado::findOrFail($id);

        return view('backEnd.bebedourodados.edit', compact('bebedourodado'));
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
        $this->validate($request, ['piquete_id' => 'required', 'sensor_id' => 'required', 'data' => 'required', 'hora' => 'required', 'nivel' => 'required', 'consumo' => 'required', 'limpeza' => 'required', ]);

        $bebedourodado = Bebedourodado::findOrFail($id);
        $bebedourodado->update($request->all());

        Session::flash('message', 'Bebedourodado updated!');
        Session::flash('status', 'success');

        return redirect('bebedourodados');
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
        $bebedourodado = Bebedourodado::findOrFail($id);

        $bebedourodado->delete();

        Session::flash('message', 'Bebedourodado deleted!');
        Session::flash('status', 'success');

        return redirect('bebedourodados');
    }

}
