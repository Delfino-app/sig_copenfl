<?php

namespace App\Http\Controllers\Inscricao;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inscricao\inscricao_carteiras as carteira;
use Illuminate\Support\Str;

class InscricaoCarteiraCtrl extends Controller
{
    public function __construct(){
        $this->middleware(["auth"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(isset(carteira::all()[0]))
            return response()->json([
                'status' => "Ok",
                "carteira" => carteira::with("candidato")->get()
            ], 200);
        return response()->json([
                'status' => "Info",
                "message" => "Nenhum registo de candidato encontrado"
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $candidato_id)
    {
        $carteira = new carteira;
        $carteira->numero = "L".Str::random(10);
        $carteira->candidato__id = $candidato_id;
        $carteira->estado = "Inscrito";
        if($carteira->save() and $carteira->wasChanged()){
            return true;
        }
        return false;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
