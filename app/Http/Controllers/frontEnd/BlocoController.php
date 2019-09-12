<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Bloco;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

use App\Tratamentobloco;
use Illuminate\Support\Facades\DB;

class BlocoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $bloco = Bloco::all();

        return view('frontEnd.bloco.index', compact('bloco'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('frontEnd.bloco.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //$this->validate($request, ['experimento_id' => 'required', 'quantidade_blocos' => 'required', 'quantidade_tratamentos' => 'required', ]);

        //Bloco::create($request->all());

        //return redirect('bloco');

        $bloco = new Bloco();
        $bloco->experimento_id = $request->get('experimento_id');
        $bloco->quantidade_blocos = $request->get('quantidade_blocos');
        $bloco->quantidade_tratamentos = $request->get('quantidade_tratamentos');
        $bloco->save();
        //$faixa_id= $bloco->id;

        /*
        $quantidade_blocos= $bloco->quantidade_blocos;
        $quantidade_tratamentos= $bloco->quantidade_tratamentos;

        $linha = 1;
        for($i = 1; $i <= $quantidade_blocos; $i++){
            $coluna = 1;
            $descricaoTratamento = $request->get('descricaoTratamento'.$i);
            //dd($request->get('descricaoTratamento'.$i));

            for($x = 1; $x <= $quantidade_tratamentos; $x++){
                
                $tratamentobloco = new Tratamentobloco();
                $tratamentobloco->bloco_id = $bloco->id;
                $tratamentobloco->descricao = "Descrição";
                $tratamentobloco->sigla = "B" . $linha . "C" . $coluna;
                $tratamentobloco->posicao_linha = "l".$linha;
                $tratamentobloco->posicao_coluna = "c".$coluna;
                $tratamentobloco->save(); 

                $coluna++;
            }

            $linha++;
        }
        */

        //return redirect('bloco');
        $bloco = Bloco::findOrFail($bloco->id);

        return view('frontEnd.bloco.dragAndDrop', compact('bloco'));

    }

    public function storeTratamentos(Request $request)
    {
        $bloco_id= $request->get('bloco_id');
        $quantidade_blocos= $request->get('quantidade_blocos');
        $quantidade_tratamentos= $request->get('quantidade_tratamentos');

        $linha = 1;
        for($i = 1; $i <= $quantidade_blocos; $i++){
            $coluna = 1;
            $descricaoTratamento = $request->get('siglaTratamento'.$i);
            //dd($request->get('descricaoTratamento'.$i));

            for($x = 1; $x <= $quantidade_tratamentos; $x++){
                
                $tratamentobloco = new Tratamentobloco();
                $tratamentobloco->bloco_id = $bloco_id;
                $tratamentobloco->descricao = "Descrição";
                $tratamentobloco->sigla = "B" . $linha . "C" . $coluna;
                $tratamentobloco->posicao_linha = "l".$linha;
                $tratamentobloco->posicao_coluna = "c".$coluna;
                $tratamentobloco->save(); 

                $coluna++;
            }

            $linha++;
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
        $bloco = Bloco::findOrFail($id);

        $tratamentobloco = DB::table('tratamentoblocos')->where('bloco_id', $id)->get();

        return view('frontEnd.bloco.show', compact('bloco','tratamentobloco'));
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
        $bloco = Bloco::findOrFail($id);

        return view('frontEnd.bloco.edit', compact('bloco'));
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
        $this->validate($request, ['experimento_id' => 'required', 'quantidade_blocos' => 'required', 'quantidade_tratamentos' => 'required', ]);

        $bloco = Bloco::findOrFail($id);
        $bloco->update($request->all());

        Session::flash('message', 'Bloco updated!');
        Session::flash('status', 'success');

        return redirect('bloco');
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
        $bloco = Bloco::findOrFail($id);

        $bloco->delete();

        Session::flash('message', 'Bloco deleted!');
        Session::flash('status', 'success');

        return redirect('bloco');
    }

}
