<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tratamento;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class TratamentoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tratamento = Tratamento::all();

        return view('frontEnd.tratamento.index', compact('tratamento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('frontEnd.tratamento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Tratamento::create($request->all());

        Session::flash('message', 'Tratamento added!');
        Session::flash('status', 'success');

        return redirect('tratamento');
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
        $tratamento = Tratamento::findOrFail($id);

        return view('frontEnd.tratamento.show', compact('tratamento'));
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
        $tratamento = Tratamento::findOrFail($id);

        return view('frontEnd.tratamento.edit', compact('tratamento'));
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
        
        $tratamento = Tratamento::findOrFail($id);
        $tratamento->update($request->all());

        Session::flash('message', 'Tratamento updated!');
        Session::flash('status', 'success');

        return redirect('tratamento');
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
        $tratamento = Tratamento::findOrFail($id);

        $tratamento->delete();

        Session::flash('message', 'Tratamento deleted!');
        Session::flash('status', 'success');

        return redirect('tratamento');
    }

}
