<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tratamentofaixa;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class TratamentofaixaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tratamentofaixa = Tratamentofaixa::all();

        return view('backEnd.tratamentofaixa.index', compact('tratamentofaixa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.tratamentofaixa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['faixa_id' => 'required', ]);

        Tratamentofaixa::create($request->all());

        Session::flash('message', 'Tratamentofaixa added!');
        Session::flash('status', 'success');

        return redirect('tratamentofaixa');
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
        $tratamentofaixa = Tratamentofaixa::findOrFail($id);

        return view('backEnd.tratamentofaixa.show', compact('tratamentofaixa'));
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
        $tratamentofaixa = Tratamentofaixa::findOrFail($id);

        return view('backEnd.tratamentofaixa.edit', compact('tratamentofaixa'));
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
        $this->validate($request, ['faixa_id' => 'required', ]);

        $tratamentofaixa = Tratamentofaixa::findOrFail($id);
        $tratamentofaixa->update($request->all());

        Session::flash('message', 'Tratamentofaixa updated!');
        Session::flash('status', 'success');

        return redirect('tratamentofaixa');
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
        $tratamentofaixa = Tratamentofaixa::findOrFail($id);

        $tratamentofaixa->delete();

        Session::flash('message', 'Tratamentofaixa deleted!');
        Session::flash('status', 'success');

        return redirect('tratamentofaixa');
    }

}
