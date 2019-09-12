<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Animal;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

use App\Manejoanimal;
use App\Animaldado;

class AnimalController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $animal = Animal::all();

        return view('backEnd.animal.index', compact('animal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.animal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['loteanimal_id' => 'required', 'talhao_id' => 'required', 'numero_fazenda' => 'required', 'pai' => 'required', 'mae' => 'required', 'nascimento' => 'required', 'data_saida' => 'required', ]);

        Animal::create($request->all());

        Session::flash('message', 'Animal added!');
        Session::flash('status', 'success');

        return redirect()->action(
          'frontEnd\LoteanimalController@verAnimais', ['id' => $request->loteanimal_id]
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
        $animal = Animal::findOrFail($id);

        return view('backEnd.animal.show', compact('animal'));
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
        $animal = Animal::findOrFail($id);

        return view('backEnd.animal.edit', compact('animal'));
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
        $this->validate($request, ['loteanimal_id' => 'required', 'talhao_id' => 'required', 'numero_fazenda' => 'required', 'pai' => 'required', 'mae' => 'required', 'nascimento' => 'required', 'data_saida' => 'required', ]);

        $animal = Animal::findOrFail($id);
        $animal->update($request->all());

        Session::flash('message', 'Animal updated!');
        Session::flash('status', 'success');

        return redirect()->action(
          'frontEnd\LoteanimalController@verAnimais', ['id' => $request->loteanimal_id]
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
        $animal = Animal::findOrFail($id);

        $animal->delete();

        Session::flash('message', 'Animal deleted!');
        Session::flash('status', 'success');

        return back();
    }

    /**************************
    ****** CRIADOS ************
    ***************************/
    /* MANEJOS */
    public function verManejos($id)
    {
        $animal= Animal::findOrFail($id);
        return view('frontEnd.animal.verManejos')->with("animal", $animal);
    }
    public function criarManejo($id)
    {
        $animal = Animal::findOrFail($id);
        return view('frontEnd.manejoanimal.create')->with("animal", $animal);
    }
    public function editarManejo(Request $request)
    {
        $animal = Animal::findOrFail($request->animal_id);
        $manejoanimal = Manejoanimal::findOrFail($request->manejoanimal_id);
        return view('frontEnd.manejoanimal.edit')->with("animal", $animal)->with("manejoanimal", $manejoanimal);
    }
    public function mostrarManejo(Request $request)
    {
        $animal = Animal::findOrFail($request->animal_id);
        $manejoanimal = Manejoanimal::findOrFail($request->manejoanimal_id);
        return view('frontEnd.manejoanimal.show')->with("animal", $animal)->with("manejoanimal", $manejoanimal);
    }

    /* ANIMAIS DADO */
    public function verAnimaldados($id)
    {
        $animal= Animal::findOrFail($id);
        return view('frontEnd.animal.verAnimaldados')->with("animal", $animal);
    }
    public function criarAnimaldado($id)
    {
        $animal = Animal::findOrFail($id);
        return view('frontEnd.animaldado.create')->with("animal", $animal);
    }
    public function editarAnimaldado(Request $request)
    {
        $animal = Animal::findOrFail($request->animal_id);
        $animaldado = Animaldado::findOrFail($request->animaldado_id);
        return view('frontEnd.animaldado.edit')->with("animal", $animal)->with("animaldado", $animaldado);
    }
    public function mostrarAnimaldado(Request $request)
    {
        $animal = Animal::findOrFail($request->animal_id);
        $animaldado = Animaldado::findOrFail($request->animaldado_id);
        return view('frontEnd.animaldado.show')->with("animal", $animal)->with("animaldado", $animaldado);
    }

}
