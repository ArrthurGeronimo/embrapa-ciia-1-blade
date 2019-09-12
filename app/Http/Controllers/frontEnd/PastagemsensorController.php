<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pastagemsensor;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class PastagemsensorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pastagemsensor = Pastagemsensor::all();

        return view('backEnd.pastagemsensor.index', compact('pastagemsensor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.pastagemsensor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['piquete_id' => 'required', 'sensor_id' => 'required', 'data' => 'required', 'hora' => 'required', 'responsavel' => 'required', 'coordenadas' => 'required', 'altura' => 'required', ]);

        Pastagemsensor::create($request->all());

        Session::flash('message', 'Pastagemsensor added!');
        Session::flash('status', 'success');

        return redirect('pastagemsensor');
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
        $pastagemsensor = Pastagemsensor::findOrFail($id);

        return view('backEnd.pastagemsensor.show', compact('pastagemsensor'));
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
        $pastagemsensor = Pastagemsensor::findOrFail($id);

        return view('backEnd.pastagemsensor.edit', compact('pastagemsensor'));
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
        $this->validate($request, ['piquete_id' => 'required', 'sensor_id' => 'required', 'data' => 'required', 'hora' => 'required', 'responsavel' => 'required', 'coordenadas' => 'required', 'altura' => 'required', ]);

        $pastagemsensor = Pastagemsensor::findOrFail($id);
        $pastagemsensor->update($request->all());

        Session::flash('message', 'Pastagemsensor updated!');
        Session::flash('status', 'success');

        return redirect('pastagemsensor');
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
        $pastagemsensor = Pastagemsensor::findOrFail($id);

        $pastagemsensor->delete();

        Session::flash('message', 'Pastagemsensor deleted!');
        Session::flash('status', 'success');

        return redirect('pastagemsensor');
    }

}
