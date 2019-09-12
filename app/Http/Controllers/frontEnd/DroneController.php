<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Drone;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class DroneController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $drone = Drone::all();

        return view('backEnd.drone.index', compact('drone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.drone.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['piquete_id' => 'required', 'sensor_id' => 'required', 'data' => 'required', 'hora' => 'required', 'tipo_imagem' => 'required', 'nome_mosaico' => 'required', ]);

        Drone::create($request->all());

        Session::flash('message', 'Drone added!');
        Session::flash('status', 'success');

        return redirect('drone');
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
        $drone = Drone::findOrFail($id);

        return view('backEnd.drone.show', compact('drone'));
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
        $drone = Drone::findOrFail($id);

        return view('backEnd.drone.edit', compact('drone'));
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
        $this->validate($request, ['piquete_id' => 'required', 'sensor_id' => 'required', 'data' => 'required', 'hora' => 'required', 'tipo_imagem' => 'required', 'nome_mosaico' => 'required', ]);

        $drone = Drone::findOrFail($id);
        $drone->update($request->all());

        Session::flash('message', 'Drone updated!');
        Session::flash('status', 'success');

        return redirect('drone');
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
        $drone = Drone::findOrFail($id);

        $drone->delete();

        Session::flash('message', 'Drone deleted!');
        Session::flash('status', 'success');

        return redirect('drone');
    }

}
