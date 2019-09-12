<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cercadado;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class CercadadosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $cercadados = Cercadado::all();

        return view('backEnd.cercadados.index', compact('cercadados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.cercadados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['piquete_id' => 'required', 'sensor_id' => 'required', 'data' => 'required', 'hora' => 'required', 'voltagem' => 'required', 'quebrada' => 'required', ]);

        Cercadado::create($request->all());

        Session::flash('message', 'Cercadado added!');
        Session::flash('status', 'success');

        return redirect('cercadados');
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
        $cercadado = Cercadado::findOrFail($id);

        return view('backEnd.cercadados.show', compact('cercadado'));
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
        $cercadado = Cercadado::findOrFail($id);

        return view('backEnd.cercadados.edit', compact('cercadado'));
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
        $this->validate($request, ['piquete_id' => 'required', 'sensor_id' => 'required', 'data' => 'required', 'hora' => 'required', 'voltagem' => 'required', 'quebrada' => 'required', ]);

        $cercadado = Cercadado::findOrFail($id);
        $cercadado->update($request->all());

        Session::flash('message', 'Cercadado updated!');
        Session::flash('status', 'success');

        return redirect('cercadados');
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
        $cercadado = Cercadado::findOrFail($id);

        $cercadado->delete();

        Session::flash('message', 'Cercadado deleted!');
        Session::flash('status', 'success');

        return redirect('cercadados');
    }

}
