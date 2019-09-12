<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Sensor;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class SensorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $sensor = Sensor::all();

        return view('backEnd.sensor.index', compact('sensor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.sensor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['piquete_id' => 'required', 'estacao_id' => 'required', 'nome' => 'required', 'marca' => 'required', 'modelo' => 'required', 'data_fabricacao' => 'required', 'data_instalacao' => 'required', 'unidade' => 'required', ]);

        Sensor::create($request->all());

        Session::flash('message', 'Sensor added!');
        Session::flash('status', 'success');

        return redirect()->action(
          'frontEnd\EstacaoController@verSensores', ['id' => $request->estacao_id]
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
        $sensor = Sensor::findOrFail($id);

        return view('backEnd.sensor.show', compact('sensor'));
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
        $sensor = Sensor::findOrFail($id);

        return view('backEnd.sensor.edit', compact('sensor'));
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
        $this->validate($request, ['piquete_id' => 'required', 'estacao_id' => 'required', 'nome' => 'required', 'marca' => 'required', 'modelo' => 'required', 'data_fabricacao' => 'required', 'data_instalacao' => 'required', 'unidade' => 'required', ]);

        $sensor = Sensor::findOrFail($id);
        $sensor->update($request->all());

        Session::flash('message', 'Sensor updated!');
        Session::flash('status', 'success');

        return redirect()->action(
          'frontEnd\EstacaoController@verSensores', ['id' => $request->estacao_id]
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
        $sensor = Sensor::findOrFail($id);

        $sensor->delete();

        Session::flash('message', 'Sensor deleted!');
        Session::flash('status', 'success');

        return back();
    }

}
