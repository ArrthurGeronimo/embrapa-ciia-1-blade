<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Paidolote;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class PaidoloteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $paidolote = Paidolote::all();

        return view('frontEnd.paidolote.index', compact('paidolote'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('frontEnd.paidolote.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['loteanimal_id' => 'required', 'nome' => 'required', 'raca' => 'required', ]);

        Paidolote::create($request->all());

        Session::flash('message', 'Paidolote added!');
        Session::flash('status', 'success');

        return redirect('paidolote');
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
        $paidolote = Paidolote::findOrFail($id);

        return view('frontEnd.paidolote.show', compact('paidolote'));
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
        $paidolote = Paidolote::findOrFail($id);

        return view('frontEnd.paidolote.edit', compact('paidolote'));
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
        $this->validate($request, ['loteanimal_id' => 'required', 'nome' => 'required', 'raca' => 'required', ]);

        $paidolote = Paidolote::findOrFail($id);
        $paidolote->update($request->all());

        Session::flash('message', 'Paidolote updated!');
        Session::flash('status', 'success');

        return redirect('paidolote');
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
        $paidolote = Paidolote::findOrFail($id);

        $paidolote->delete();

        Session::flash('message', 'Paidolote deleted!');
        Session::flash('status', 'success');

        return redirect('paidolote');
    }

}
