<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Animaldado;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class AnimaldadoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $animaldado = Animaldado::all();

        return view('backEnd.animaldado.index', compact('animaldado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.animaldado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['animal_id' => 'required', 'data' => 'required', 'nome_dado' => 'required', 'unidade' => 'required', 'peso' => 'required', ]);

        Animaldado::create($request->all());

        Session::flash('message', 'Animaldado added!');
        Session::flash('status', 'success');

        return redirect()->action(
          'frontEnd\AnimalController@verAnimaldados', ['id' => $request->animal_id]
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
        $animaldado = Animaldado::findOrFail($id);

        return view('backEnd.animaldado.show', compact('animaldado'));
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
        $animaldado = Animaldado::findOrFail($id);

        return view('backEnd.animaldado.edit', compact('animaldado'));
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
        $this->validate($request, ['animal_id' => 'required', 'data' => 'required', 'nome_dado' => 'required', 'unidade' => 'required', 'peso' => 'required', ]);

        $animaldado = Animaldado::findOrFail($id);
        $animaldado->update($request->all());

        Session::flash('message', 'Animaldado updated!');
        Session::flash('status', 'success');

        return redirect()->action(
          'frontEnd\AnimalController@verAnimaldados', ['id' => $request->animal_id]
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
        $animaldado = Animaldado::findOrFail($id);

        $animaldado->delete();

        Session::flash('message', 'Animaldado deleted!');
        Session::flash('status', 'success');

        return back();
    }

}
