<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Contato;
use App\Http\Requests\ContatoRequest;
use Illuminate\Http\Request;
use DB;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContatoRequest $request)
    {
        DB::beginTransaction();
            try {
                $dados = $request->all();
                $novo_contato = new Contato();
                $novo_contato->fill($dados);
                $caminho = time().'.'.$request->arquivo->extension();
                $novo_contato->anexo = $caminho;
                
                Storage::disk('public_uploads')->put($caminho, file_get_contents($request->arquivo));
          
                
                $novo_contato->save();
                DB::commit();
            } catch (\Throwable $th) {
                
                throw $th;
                DB::rollBack();
            }
      
 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function show(Contato $contato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function edit(Contato $contato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contato $contato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contato $contato)
    {
        //
    }
}
