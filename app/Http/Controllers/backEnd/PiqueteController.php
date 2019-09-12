<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Piquete;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class PiqueteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $piquete = Piquete::all();

        return view('frontEnd.piquete.index', compact('piquete'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('frontEnd.piquete.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['talhao_id' => 'required', 'area' => 'required', 'capim' => 'required', ]);

        Piquete::create($request->all());

        Session::flash('message', 'Piquete added!');
        Session::flash('status', 'success');

        return redirect()->action(
          'frontEnd\TalhaoController@verPiquetes', ['id' => $request->talhao_id]
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
        $piquete = Piquete::findOrFail($id);

        return view('frontEnd.piquete.show', compact('piquete'));
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
        $piquete = Piquete::findOrFail($id);

        return view('frontEnd.piquete.edit', compact('piquete'));
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
        $this->validate($request, ['talhao_id' => 'required', 'area' => 'required', 'capim' => 'required', ]);

        $piquete = Piquete::findOrFail($id);
        $piquete->update($request->all());

        Session::flash('message', 'Piquete updated!');
        Session::flash('status', 'success');

        return redirect('piquete');
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
        $piquete = Piquete::findOrFail($id);

        $piquete->delete();

        Session::flash('message', 'Piquete deleted!');
        Session::flash('status', 'success');

        return redirect('piquete');
    }

}
