<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Amostrasolo;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class AmostrasoloController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $amostrasolo = Amostrasolo::all();

        return view('backEnd.amostrasolo.index', compact('amostrasolo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.amostrasolo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['piquete_id' => 'required', 'data' => 'required', 'profundidade' => 'required', 'ph' => 'required', 'mo' => 'required', 'p' => 'required', 'k' => 'required', 'ca' => 'required', 'mg' => 'required', 'hplusai' => 'required', 'ai' => 'required', 's' => 'required', 'cu' => 'required', 'fe' => 'required', 'zn' => 'required', 'mn' => 'required', 'b' => 'required', 'identificacao' => 'required', ]);

        Amostrasolo::create($request->all());

        Session::flash('message', 'Amostrasolo added!');
        Session::flash('status', 'success');

        return redirect()->action(
          'frontEnd\PiqueteController@verAmostrassolo', ['id' => $request->piquete_id]
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
        $amostrasolo = Amostrasolo::findOrFail($id);

        return view('backEnd.amostrasolo.show', compact('amostrasolo'));
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
        $amostrasolo = Amostrasolo::findOrFail($id);

        return view('backEnd.amostrasolo.edit', compact('amostrasolo'));
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
        $this->validate($request, ['piquete_id' => 'required', 'data' => 'required', 'profundidade' => 'required', 'ph' => 'required', 'mo' => 'required', 'p' => 'required', 'k' => 'required', 'ca' => 'required', 'mg' => 'required', 'hplusai' => 'required', 'ai' => 'required', 's' => 'required', 'cu' => 'required', 'fe' => 'required', 'zn' => 'required', 'mn' => 'required', 'b' => 'required', 'identificacao' => 'required', ]);

        $amostrasolo = Amostrasolo::findOrFail($id);
        $amostrasolo->update($request->all());

        Session::flash('message', 'Amostrasolo updated!');
        Session::flash('status', 'success');

        return redirect()->action(
          'frontEnd\PiqueteController@verAmostrassolo', ['id' => $request->piquete_id]
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
        $amostrasolo = Amostrasolo::findOrFail($id);

        $amostrasolo->delete();

        Session::flash('message', 'Amostrasolo deleted!');
        Session::flash('status', 'success');

        return back();
    }

}
