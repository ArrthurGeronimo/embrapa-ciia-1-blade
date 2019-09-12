<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Amostrapasto;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class AmostrapastoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $amostrapasto = Amostrapasto::all();

        return view('backEnd.amostrapasto.index', compact('amostrapasto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.amostrapasto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['data_amostra' => 'required', 'altura' => 'required', 'visual' => 'required', 'peso_parcela' => 'required', 'peso_amostra' => 'required', 'ca' => 'required', 'p' => 'required', 'pb' => 'required', 'ee' => 'required', 'fb' => 'required', 'mm' => 'required', 'fda' => 'required', 'fdn' => 'required', 'ndt' => 'required', 'enn' => 'required', 'eb' => 'required', 'piquete_id' => 'required', 'area' => 'required', 'identificacao' => 'required', ]);

        Amostrapasto::create($request->all());

        Session::flash('message', 'Amostrapasto added!');
        Session::flash('status', 'success');

        return redirect()->action(
          'frontEnd\PiqueteController@verAmostraspasto', ['id' => $request->piquete_id]
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
        $amostrapasto = Amostrapasto::findOrFail($id);

        return view('backEnd.amostrapasto.show', compact('amostrapasto'));
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
        $amostrapasto = Amostrapasto::findOrFail($id);

        return view('backEnd.amostrapasto.edit', compact('amostrapasto'));
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
        $this->validate($request, ['data_amostra' => 'required', 'altura' => 'required', 'visual' => 'required', 'peso_parcela' => 'required', 'peso_amostra' => 'required', 'ca' => 'required', 'p' => 'required', 'pb' => 'required', 'ee' => 'required', 'fb' => 'required', 'mm' => 'required', 'fda' => 'required', 'fdn' => 'required', 'ndt' => 'required', 'enn' => 'required', 'eb' => 'required', 'piquete_id' => 'required', 'area' => 'required', 'identificacao' => 'required', ]);

        $amostrapasto = Amostrapasto::findOrFail($id);
        $amostrapasto->update($request->all());

        Session::flash('message', 'Amostrapasto updated!');
        Session::flash('status', 'success');

        return redirect()->action(
          'frontEnd\PiqueteController@verAmostraspasto', ['id' => $request->piquete_id]
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
        $amostrapasto = Amostrapasto::findOrFail($id);

        $amostrapasto->delete();

        Session::flash('message', 'Amostrapasto deleted!');
        Session::flash('status', 'success');

        return back();
    }

}
