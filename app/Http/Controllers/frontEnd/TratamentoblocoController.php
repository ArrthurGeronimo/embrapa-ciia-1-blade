<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tratamentobloco;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class TratamentoblocoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tratamentobloco = Tratamentobloco::all();

        return view('backEnd.tratamentobloco.index', compact('tratamentobloco'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.tratamentobloco.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $bloco_id= $request->get('bloco_id');
        $quantidade_blocos= $request->get('quantidade_blocos');
        $quantidade_tratamentos= $request->get('quantidade_tratamentos');

        $linha = 1;
        $coluna = 1;
        $i = 1;
        for($linha = 1; $linha <= $quantidade_blocos; $linha++){
            
            $descricaoTratamento = $request->get('descricaoTratamento'.$linha);
            //dd($request->get('descricaoTratamento'.$i));

            for($coluna = 1; $coluna <= $quantidade_tratamentos; $coluna++){
                $siglaTratamento = $request->get('siglaTratamento'.$i);
                //dd($request->get('siglaTratamento'.$i));
                $tratamentobloco = new Tratamentobloco();
                $tratamentobloco->bloco_id = $bloco_id;
                $tratamentobloco->descricao = $descricaoTratamento;
                $tratamentobloco->sigla = $siglaTratamento;
                $tratamentobloco->posicao_linha = "l".$linha;
                $tratamentobloco->posicao_coluna = "c".$coluna;
                $tratamentobloco->save(); 

                $i++;
            }

        }

        return redirect('bloco');
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
        $tratamentobloco = Tratamentobloco::findOrFail($id);

        return view('backEnd.tratamentobloco.show', compact('tratamentobloco'));
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
        $tratamentobloco = Tratamentobloco::findOrFail($id);

        return view('backEnd.tratamentobloco.edit', compact('tratamentobloco'));
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
        $this->validate($request, ['bloco_id' => 'required', ]);

        $tratamentobloco = Tratamentobloco::findOrFail($id);
        $tratamentobloco->update($request->all());

        Session::flash('message', 'Tratamentobloco updated!');
        Session::flash('status', 'success');

        return redirect('tratamentobloco');
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
        $tratamentobloco = Tratamentobloco::findOrFail($id);

        $tratamentobloco->delete();

        Session::flash('message', 'Tratamentobloco deleted!');
        Session::flash('status', 'success');

        return redirect('tratamentobloco');
    }

}
