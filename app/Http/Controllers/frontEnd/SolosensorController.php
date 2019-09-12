<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Solosensor;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class SolosensorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $solosensor = Solosensor::all();

        return view('backEnd.solosensor.index', compact('solosensor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.solosensor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['piquete_id' => 'required', 'sensor_id' => 'required', 'data' => 'required', 'hora' => 'required', 'responsavel' => 'required', 'coordenadas' => 'required', 'temperatura' => 'required', 'umidade' => 'required', ]);

        Solosensor::create($request->all());

        Session::flash('message', 'Solosensor added!');
        Session::flash('status', 'success');

        return redirect('solosensor');
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
        $solosensor = Solosensor::findOrFail($id);

        return view('backEnd.solosensor.show', compact('solosensor'));
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
        $solosensor = Solosensor::findOrFail($id);

        return view('backEnd.solosensor.edit', compact('solosensor'));
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
        $this->validate($request, ['piquete_id' => 'required', 'sensor_id' => 'required', 'data' => 'required', 'hora' => 'required', 'responsavel' => 'required', 'coordenadas' => 'required', 'temperatura' => 'required', 'umidade' => 'required', ]);

        $solosensor = Solosensor::findOrFail($id);
        $solosensor->update($request->all());

        Session::flash('message', 'Solosensor updated!');
        Session::flash('status', 'success');

        return redirect('solosensor');
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
        $solosensor = Solosensor::findOrFail($id);

        $solosensor->delete();

        Session::flash('message', 'Solosensor deleted!');
        Session::flash('status', 'success');

        return redirect('solosensor');
    }

}
