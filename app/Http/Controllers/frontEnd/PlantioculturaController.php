<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Plantiocultura;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class PlantioculturaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $plantiocultura = Plantiocultura::all();

        return view('backEnd.plantiocultura.index', compact('plantiocultura'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.plantiocultura.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['piquete_id' => 'required', 'data' => 'required', 'peso_parcela' => 'required', 'peso_amostra' => 'required', 'quantidade_espigas' => 'required', 'identificacao' => 'required', 'area' => 'required', ]);

        Plantiocultura::create($request->all());

        Session::flash('message', 'Plantiocultura added!');
        Session::flash('status', 'success');

        return redirect()->action(
          'frontEnd\PiqueteController@verPlantioscultura', ['id' => $request->piquete_id]
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
        $plantiocultura = Plantiocultura::findOrFail($id);

        return view('backEnd.plantiocultura.show', compact('plantiocultura'));
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
        $plantiocultura = Plantiocultura::findOrFail($id);

        return view('backEnd.plantiocultura.edit', compact('plantiocultura'));
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
        $this->validate($request, ['piquete_id' => 'required', 'data' => 'required', 'peso_parcela' => 'required', 'peso_amostra' => 'required', 'quantidade_espigas' => 'required', 'identificacao' => 'required', 'area' => 'required', ]);

        $plantiocultura = Plantiocultura::findOrFail($id);
        $plantiocultura->update($request->all());

        Session::flash('message', 'Plantiocultura updated!');
        Session::flash('status', 'success');

        return redirect()->action(
          'frontEnd\PiqueteController@verPlantioscultura', ['id' => $request->piquete_id]
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
        $plantiocultura = Plantiocultura::findOrFail($id);

        $plantiocultura->delete();

        Session::flash('message', 'Plantiocultura deleted!');
        Session::flash('status', 'success');

        return back();
    }

}
