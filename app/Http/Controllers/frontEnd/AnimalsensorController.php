<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Animalsensor;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class AnimalsensorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $animalsensor = Animalsensor::all();

        return view('backEnd.animalsensor.index', compact('animalsensor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.animalsensor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['animal_id' => 'required', 'sensor_id' => 'required', 'data' => 'required', 'hora' => 'required', 'temperatural' => 'required', 'localizacao' => 'required', ]);

        Animalsensor::create($request->all());

        Session::flash('message', 'Animalsensor added!');
        Session::flash('status', 'success');

        return redirect('animalsensor');
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
        $animalsensor = Animalsensor::findOrFail($id);

        return view('backEnd.animalsensor.show', compact('animalsensor'));
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
        $animalsensor = Animalsensor::findOrFail($id);

        return view('backEnd.animalsensor.edit', compact('animalsensor'));
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
        $this->validate($request, ['animal_id' => 'required', 'sensor_id' => 'required', 'data' => 'required', 'hora' => 'required', 'temperatural' => 'required', 'localizacao' => 'required', ]);

        $animalsensor = Animalsensor::findOrFail($id);
        $animalsensor->update($request->all());

        Session::flash('message', 'Animalsensor updated!');
        Session::flash('status', 'success');

        return redirect('animalsensor');
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
        $animalsensor = Animalsensor::findOrFail($id);

        $animalsensor->delete();

        Session::flash('message', 'Animalsensor deleted!');
        Session::flash('status', 'success');

        return redirect('animalsensor');
    }

}
