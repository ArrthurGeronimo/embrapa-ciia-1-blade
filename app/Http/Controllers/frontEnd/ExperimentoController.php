<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Experimento;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ExperimentoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $experimento = Experimento::all();

        return view('frontEnd.experimento.index', compact('experimento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('frontEnd.experimento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nome' => 'required', ]);

        Experimento::create($request->all());

        Session::flash('message', 'Experimento added!');
        Session::flash('status', 'success');

        return redirect('experimento');
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
        $experimento = Experimento::findOrFail($id);

        return view('frontEnd.experimento.show', compact('experimento'));
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
        $experimento = Experimento::findOrFail($id);

        return view('frontEnd.experimento.edit', compact('experimento'));
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
        $this->validate($request, ['nome' => 'required', ]);

        $experimento = Experimento::findOrFail($id);
        $experimento->update($request->all());

        Session::flash('message', 'Experimento updated!');
        Session::flash('status', 'success');

        return redirect('experimento');
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
        $experimento = Experimento::findOrFail($id);

        $experimento->delete();

        Session::flash('message', 'Experimento deleted!');
        Session::flash('status', 'success');

        return redirect('experimento');
    }

}
