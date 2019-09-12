<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Clima;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ClimaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $clima = Clima::all();

        return view('backEnd.clima.index', compact('clima'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.clima.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['estacao_id' => 'required', 'sensor_id' => 'required', 'data' => 'required', 'hora' => 'required', 'precipitacao' => 'required', 'temperatura' => 'required', 'umidade_ar' => 'required', 'vento' => 'required', 'radiacao' => 'required', 'pressao' => 'required', 'insolacao' => 'required', ]);

        Clima::create($request->all());

        Session::flash('message', 'Clima added!');
        Session::flash('status', 'success');

        return redirect('clima');
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
        $clima = Clima::findOrFail($id);

        return view('backEnd.clima.show', compact('clima'));
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
        $clima = Clima::findOrFail($id);

        return view('backEnd.clima.edit', compact('clima'));
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
        $this->validate($request, ['estacao_id' => 'required', 'sensor_id' => 'required', 'data' => 'required', 'hora' => 'required', 'precipitacao' => 'required', 'temperatura' => 'required', 'umidade_ar' => 'required', 'vento' => 'required', 'radiacao' => 'required', 'pressao' => 'required', 'insolacao' => 'required', ]);

        $clima = Clima::findOrFail($id);
        $clima->update($request->all());

        Session::flash('message', 'Clima updated!');
        Session::flash('status', 'success');

        return redirect('clima');
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
        $clima = Clima::findOrFail($id);

        $clima->delete();

        Session::flash('message', 'Clima deleted!');
        Session::flash('status', 'success');

        return redirect('clima');
    }

}
