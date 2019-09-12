<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Loteanimal;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

use App\Animal;

class LoteanimalController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $loteanimal = Loteanimal::all();

        return view('backEnd.loteanimal.index', compact('loteanimal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.loteanimal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['fazenda_id' => 'required', 'identificacao' => 'required', 'procedencia' => 'required', 'data_entrada' => 'required', 'pai' => 'required', ]);

        Loteanimal::create($request->all());

        Session::flash('message', 'Loteanimal added!');
        Session::flash('status', 'success');

        return redirect()->action(
          'frontEnd\FazendaController@verLotes', ['id' => $request->fazenda_id]
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
        $loteanimal = Loteanimal::findOrFail($id);

        return view('backEnd.loteanimal.show', compact('loteanimal'));
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
        $loteanimal = Loteanimal::findOrFail($id);

        return view('backEnd.loteanimal.edit', compact('loteanimal'));
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
        $this->validate($request, ['fazenda_id' => 'required', 'identificacao' => 'required', 'procedencia' => 'required', 'data_entrada' => 'required', 'pai' => 'required', ]);

        $loteanimal = Loteanimal::findOrFail($id);
        $loteanimal->update($request->all());

        Session::flash('message', 'Loteanimal updated!');
        Session::flash('status', 'success');

        return redirect()->action(
          'frontEnd\FazendaController@verLotes', ['id' => $request->fazenda_id]
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
        $loteanimal = Loteanimal::findOrFail($id);

        $loteanimal->delete();

        Session::flash('message', 'Loteanimal deleted!');
        Session::flash('status', 'success');

        return back();
    }

    /**************************
    ****** CRIADOS ************
    ***************************/
    /* ANIMAIS */
    public function verAnimais($id)
    {
        $loteanimal = Loteanimal::findOrFail($id);
        return view('frontEnd.loteanimal.verAnimais')->with("loteanimal", $loteanimal);
    }
    public function criarAnimal($id)
    {
        $loteanimal = Loteanimal::findOrFail($id);
        return view('frontEnd.animal.create')->with("loteanimal", $loteanimal);
    }
    public function editarAnimal(Request $request)
    {
        $loteanimal = Loteanimal::findOrFail($request->loteanimal_id);
        $animal = Animal::findOrFail($request->animal_id);
        return view('frontEnd.animal.edit')->with("loteanimal", $loteanimal)->with("animal", $animal);
    }
    public function mostrarAnimal(Request $request)
    {
        $loteanimal = Loteanimal::findOrFail($request->loteanimal_id);
        $animal = Animal::findOrFail($request->animal_id);
        return view('frontEnd.animal.show')->with("loteanimal", $loteanimal)->with("animal", $animal);
    }

}
